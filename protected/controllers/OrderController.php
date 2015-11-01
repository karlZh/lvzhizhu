<?php
    class OrderController extends Controller{

        public function actionCreate(){
            $receiveid = Yii::app()->request->getParam('receiveid');
            $paytypeid = Yii::app()->request->getParam('paytypeid');
            $expresstypeid = Yii::app()->request->getParam('expresstypeid');

            $topay = $_SESSION['topay'];
            $place_order_uid = $_SESSION['member']['id'];
            $expressno = "000001";//test
            $status = Constants::$orderStatus['submit'];

            $amount = 0;
            $productnum = 0;
            $transaction_id = '000001';
            foreach($topay as $pro){
                $amount += $pro['num']*$pro['price'];
                $productnum += $pro['num'];
            }

            $params = array(
                'receiveid'         =>  $receiveid,
                'transaction_id'    =>  $transaction_id,
                'topay'             =>  $topay,
                'paytypeid'         =>  $paytypeid,
                'expresstypeid'     =>  $expresstypeid,
                'place_order_uid'   =>  $place_order_uid,
                'amount'            =>  $amount,
                'productnum'        =>  $productnum,
                'expressno'         =>  $expressno,
                'status'            =>  $status,
            );
            $this->validateParams($params);

            //创建订单
            $model = new Order();
            $model->transaction_id = $transaction_id;
            $model->paytypeid = $paytypeid;//微信支付
            $model->place_order_uid = $_SESSION['member']['id'];
            $model->receiveid = $receiveid;
            $model->amount = $amount;
            $model->status = $status;
            $model->productnum = $productnum;
            $model->expressno = $expressno;
            $model->expresstypeid = $expresstypeid;//顺丰快递
            $model->createtime = time();

            if($model->save(false)){
                $orderid = $model->getPrimaryKey();
                foreach($topay as $key => $pro){
                    $params = array(
                        'orderid'   =>  $orderid,
                        'productid' =>  $key,
                        'num'       =>  $pro['num'],
                        'price'     =>  $pro['price'],
                    );
                    $this->validateParams($params);
                    $orderDetailModel = new OrderDetail();
                    $orderDetailModel->orderid = $orderid;
                    $orderDetailModel->productid = $key;
                    $orderDetailModel->num = $pro['num'];
                    $orderDetailModel->price = $pro['price'];
                    $orderDetailModel->createtime = time();
                    $orderDetailModel->save();
                }
                $notify_url = "http://www.greenspider.cn/weshop/index.php?r=order/notify";
                $xmlData = Pay::UNIPay($orderid,'绿蜘蛛电子商品',$amount,$notify_url,'JSAPI',$_SESSION['member']['openid']);

                $xmlObj = simplexml_load_string($xmlData,'SimpleXMLElement');
                $prepay_id = "prepay_id=".$xmlObj->prepay_id;
                $data = array(
                    'appId'     =>  Pay::APPID,
                    'timeStamp' =>  strval(time()),
                    'nonceStr'  =>  md5(uniqid()),
                    'package'   =>  $prepay_id,
                    'signType'  =>  'MD5',
                );
                $paySign = Pay::mkSign($data);
                $data['paySign'] = $paySign;
                $data['orderid'] = $orderid;
                foreach($topay as $key=>$val){
                    unset($_SESSION['cart'][$key]);
                }
                $_SESSION['topay'] = array();
                $this->error('error_ok','下单成功',$data);
            }else{
                $this->error('error_order_create','创建订单失败',false);
            }

        }

        public function actionNotify(){
            $return_code = Yii::app()->request->getParam('return_code');
            $return_msg = Yii::app()->request->getParam('return_msg');
            if(!empty($return_msg) || empty($return_code)){
                Yii::log($return_msg.":".json_encode($_REQUEST));
                Yii::app()->end();
            }
            if($return_code == 'SUCCESS'){
                $appid = Yii::app()->request->getParam('appid');
                $mch_id = Yii::app()->request->getParam('mch_id');
                $device_info = Yii::app()->request->getParam('device_info');
                $nonce_str = Yii::app()->request->getParam('nonce_str');
                $sign = Yii::app()->request->getParam('sign');
                $result_code = Yii::app()->request->getParam('result_code');
                if($result_code == 'SUCCESS'){
                    $openid = Yii::app()->request->getParam('openid');
                    $trade_type = Yii::app()->request->getParam('trade_type');
                    $total_fee = Yii::app()->request->getParam('total_fee');
                    $transaction_id = Yii::app()->request->getParam('transaction_id');
                    $out_trade_no = Yii::app()->request->getParam('out_trade_no');
                    $mkSign = Pay::mkSign($_REQUEST);
                    if($sign != $mkSign){
                        $params = array(
                            'return_code'=>'FAIL',
                            'return_msg'=>'签名失败',
                        );
                        echo PAY::mkXML($params);
                        Yii::app()->end();
                    }
                    $order = Order::model()->find('id=:id',array(":id"=>$out_trade_no));
                    if($order->status == Constants::$orderStatus['submit']){
                        $result = Order::model()->updateAll(array('status'=>Constants::$orderStatus['paysuc'],'transaction_id'=>$transaction_id),'id=:id',array(':id'=>$out_trade_no));
                        if( $result ){
                            $params = array(
                                'return_code'=>'SUCCESS',
                                'return_msg'=>'',
                            );
                            echo PAY::mkXML($params);
                            Yii::app()->end();
                        }else{
                            $params = array(
                                'return_code'=>'FAIL',
                                'return_msg'=>'状态更新失败',
                            );
                            echo PAY::mkXML($params);
                            Yii::log("订单状态更新失败:".json_encode($_REQUEST));
                            Yii::app()->end();
                        }
                    }
                }
            }
        }

        public function actionList(){
            if(isset($_SESSION['member']['id'])){
                $memberid = $_SESSION['member']['id'];
                $orders = Order::model()->findAll('place_order_uid=:mid',array(':mid'=>$memberid));
                foreach($orders as $order){
                    $orderDetail = OrderDetail::model()->findAll('orderid=:oid',array(":oid"=>$order->id));
                    $order->step = Constants::$step[$order->status];
                    $product = Product::model();
                    foreach($orderDetail as $detail) {
                        $p = $product->find('id=:pid',array(':pid'=>$detail->productid));
                        $order->products[] = array(
                            'productId'     =>  $detail->productid,
                            'productName'   =>  $p->title,
                            'productPic'    =>  $p->cover,
                            'productPrice'  =>  $detail->price,
                            'productNum'    =>  $detail->num,
                        );
                    }
                }
            }else{
                $orders = array();
            }
            $data = array(
                'orderlist' =>  $orders,
            );
            $this->render('orderlist',$data);
        }


    }