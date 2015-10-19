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
        if(!empty($_POST)){
            $_POST['amount'] = $_POST['price']*$_POST['num'];
            $_SESSION['cart'][] = $_POST;
        }
        if(!isset($_SESSION['member']['islogin'])||$_SESSION['member']['islogin']!=1){
            header('location:'.$this->createUrl('wechat/welogin'));
            return ;
        }else{
            $_POST['createtime'] = time();
            $_POST['memberid'] = $_SESSION['member']['id'];
            $model = new Cart;
            $model->attributes = $_POST;
            $model->save(false);
        }

        header("location:".$this->createUrl('cart/index'));
    }
} 