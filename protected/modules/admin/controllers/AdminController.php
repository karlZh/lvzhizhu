<?php
/**
 * Created by PhpStorm.
 * User: lijie-pd
 * Date: 2015/9/28
 * Time: 15:24
 */

class AdminController extends Controller{
    public function actionAdd(){
        $model = new Admin;
        if(!empty($_POST['Admin'])){
            $model->attributes = $_POST['Admin'];
            var_dump($model->validate());
        }
        $this->render('adminadd',array('model'=>$model));
    }

    public function actionIndex(){
        $this->render('adminlist');
    }
}