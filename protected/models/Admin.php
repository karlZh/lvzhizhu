<?php
/**
 * Created by PhpStorm.
 * User: lijie-pd
 * Date: 2015/9/23
 * Time: 11:42
 */

class Admin extends CActiveRecord{
    public $repass;

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

    public function tableName(){
        return "{{admin}}";
    }

    public function rules(){
        return array(
            array('adminuser','required','message'=>'管理员账户不能为空'),
            array('adminuser','unique','message'=>'管理员账户已经注册'),
            array('adminpass','required','message'=>'管理员密码不能为空'),
            array('repass','required','message'=>'重复密码不能为空'),
            array('repass','compare','compareAttribute'=>'adminpass','message'=>'两次密码输入不一致'),
            array('adminpass','checkPass'),
            array('admintel','safe'),
            array('adminemail','email','message'=>'电子邮箱格式不正确'),
            array('admintname','safe'),
        );
    }

    public function attributeLabels(){
        return array(
            'adminuser'=>'管理员账号',
            'adminpass'=>'管理员密码',
            'repass'=>'请再此输入密码',
            'admintname'=>'管理员姓名',
            'admintel'=>'管理员电话',
            'adminemail'=>'管理员邮箱',
        );
    }

    public function checkPass(){
        if(!$this->hasErrors()){
            $data = $this->find(
                'adminuser=:user
                 and adminpass=:pass
                 and isforbidden="0"',
                array(
                    ':user'=>$this->adminuser,
                    ':pass'=>md5($this->adminpass)
                )
            );
            if(is_null($data)){
                $this->addError('adminpass','用户名或者密码不正确');
            }else{
                $this->updateByPk(
                    $data->id,
                    array(
                        'logintime'=>time(),
                        'loginip'=>ip2long($_SERVER['REMOTE_ADDR']),
                    )
                );
                $_SESSION['admin']['adminid'] = $data->id;
                $_SESSION['admin']['adminuser'] = $this->adminuser;
            }
        }
    }

}