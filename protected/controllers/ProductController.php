<?php
/**
 * Created by PhpStorm.
 * User: 捷
 * Date: 2015/9/20
 * Time: 22:22
 */

class ProductController extends Controller{

    /*
     * actionList
     * 商品列表页渲染操作
     * @author lamplijie<www.lamplijie.com>
     * @date 2015-9-10
     * @time 10:30
     * @since v1.0
     */
    public function actionList(){
        $this->render('products');
    }

    /*
     * actionDetail
     * 商品详情页渲染操作
     * @author lamplijie<www.lamplijie.com>
     * @date 2015-9-10
     * @time 10:30
     * @since v1.0
     */
    public function actionDetail(){
        $this->render('detail');
    }

    /*
     * actionPicDetail
     * 商品详情页渲染操作
     * @author lamplijie<www.lamplijie.com>
     * @date 2015-9-10
     * @time 10:30
     * @since v1.0
     */
    public function actionPicDetail(){
        $this->render('picdetail');
    }
} 