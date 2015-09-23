<?php
/**
 * Created by PhpStorm.
 * User: lijie-pd
 * Date: 2015/9/23
 * Time: 11:42
 */

class Admin extends CActiveRecord{

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return "{{admin}}";
    }

    protected function rules(){
        return array(
            'adminuser'=>array('required','message'=>'管理员账户不能为空'),
            'adminpass'=>array('required','message'=>'管理员密码不能为空'),
        );
    }

}