<?php
/**
 * Created by PhpStorm.
 * User: lijie-pd
 * Date: 2015/9/28
 * Time: 15:24
 */

class OrderController extends Controller{
    const PAGE_SIZE = 10;

    public function actionIndex(){
        $status = Yii::app()->request->getParam('status');

    }

}