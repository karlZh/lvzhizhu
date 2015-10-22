<?php
    class OrderController extends Controller{

        public function actionCreate(){
            $receiveid = Yii::app()->request->getParam('receiveid');
            $topay = $_SESSION['topay'];
            if(empty($receiveid)||empty($topay)){
                $this->error('error_params','创建订单失败',false);
            }
            //创建订单


        }

    }