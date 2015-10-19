<?php
/**
 * Created by PhpStorm.
 * User: lijie-pd
 * Date: 2015/9/23
 * Time: 11:42
 */

class Member extends CActiveRecord{

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return "{{member}}";
    }

    public function rules(){
        return array(
            array('openid','required','message'=>'名称不能为空'),
            array('nickname','unique','message'=>'名称已经添加'),
            array('sex','required','message'=>'LOGO不能为空'),
            array('language','required','message'=>'分类不能为空'),
            array('city','required','message'=>'分类不能为空'),
            array('province','required','message'=>'分类不能为空'),
            array('country','required','message'=>'分类不能为空'),
            array('headimgurl','required','message'=>'分类不能为空'),
            array('subscribe_time','required','message'=>'分类不能为空'),
            array('unionid','required','message'=>'分类不能为空'),
            array('remark','required','message'=>'分类不能为空'),
        );
    }

    public function attributeLabels(){
        return array(
            'name'=>'品牌名称',
            'picurl'=>'品牌LOGO',
            'brandcateid'=>'品牌分类'
        );
    }


}