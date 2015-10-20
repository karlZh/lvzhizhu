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
        if(isset($_SESSION['cart'])){
            $cart = $_SESSION['cart'];
            foreach($cart as $key => &$pro){
                $pro['id']    = $key;
                $pro['title'] = Product::model()->findbypk($key)->title;
                $pro['cover'] = Product::model()->findbypk($key)->cover;
            }
        }else{
            $cart = array();
        }

        $data = array(
            'cart'=>$cart
        );

        $this->render('cartlist',$data);
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
        if(!empty($_POST)) {
            if (isset($_SESSION['member']['islogin'])) {
                $isLogin = $_SESSION['member']['islogin'];
            } else {
                $isLogin = 0;
            }

            if(!isset($_SESSION['cart'])){
                $_SESSION['cart'] = array();
            }else{
                $sessionCart = $_SESSION['cart'];
            }

            $price      = $_POST['price'];
            $num        = $_POST['num'];
            $productid  = $_POST['productid'];
            if(array_key_exists($productid,$sessionCart)){
                $currentNum = $sessionCart[$productid]['num'];
                $num += $currentNum;
            }

            //先加入session
            $cart = array(
                'productid' =>  $productid,
                'price'     =>  $price,
                'num'       =>  $num,
                'amount'    =>  $price*$num,
            );
            $_SESSION['cart'][$productid] = $cart;

            //如果已经登录,购物车加入数据库
            if($isLogin) {
                $model = new Cart;
                $cart['memberid']   = $_SESSION['member']['memberid'];
                $cart['createtime'] = time();
                $model->attributes  = $cart;
                $model->save(false);
            }
        }else{
            //购物车无内容
            $this->error('error_cart_add');
        }

        $this->redirect($this->createUrl('cart/index'));
    }
} 