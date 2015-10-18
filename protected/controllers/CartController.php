<?php
/**
 * Created by PhpStorm.
 * User: 捷
 * Date: 2015/9/20
 * Time: 22:46
 */

class CartController extends Controller{

    /*
     * actionIndex
     * 购物车页面渲染操作
     * @author lamplijie<www.lamplijie.com>
     * @date 2015-9-10
     * @time 10:30
     * @since v1.0
     */
    public function actionIndex(){
        $this->render('cartlist');
    }

    /*
     * actionAdd
     * 购物车添加操作
     * @author lamplijie<www.lamplijie.com>
     * @date 2015-9-10
     * @time 10:30
     * @since v1.0
     */
    public function actionAdd(){
        if(!isset($_SESSION['islogin'])||$_SESSION['islogin']!=1){
            header('location:'.$this->createUrl('wechat/welogin'));
        }
    }
} 