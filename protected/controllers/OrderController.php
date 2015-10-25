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
            foreach($topay as $pro){
                $amount += $pro['num']*$pro['price'];
                $productnum += $pro['num'];
            }

            $params = array(
                'receiveid'         =>  $receiveid,
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
            $model->paytypeid = $paytypeid;//微信支付
            $model->place_order_uid = $_SESSION['member']['id'];
            $model->receiveid = $receiveid;
            $model->amount = $amount;
            $model->status = $status;
            $model->productnum = $productnum;
            $model->expressno = $expressno;
            $model->expresstypeid = $expresstypeid;//顺丰快递
            $model->createtime = time();

            if($model->save()){
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
                $this->error('error_ok','下单成功',$data);

            }else{
                $this->error('error_order_create','创建订单失败',false);
            }

        }

        private function _toPay(){

        }

    }