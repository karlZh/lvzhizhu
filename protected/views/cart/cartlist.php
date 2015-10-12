<?php
/**
 * Created by PhpStorm.
 * User: 捷
 * Date: 2015/9/20
 * Time: 22:47
 */
?>
<!--content-->
<div class="page-role cart-page cart-index-page">
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/assets/home/css/cart/index.css"/>
    <script src="<?php echo Yii::app()->request->baseUrl ?>/assets/home/js/cart/index.js"></script>
    <div class="page-title"><a href="javascript:history.back();void(0)" class="return">返 回</a>购物车
        <a id="js-all">全选<i></i></a>
    </div>
    <form id="js-form" action="/order/trolly" method="post">
        <div class="pxui-area goodlist">
            <div style="text-align:center;padding: 50px 0;font-size: 16px;">您当前购物车空荡荡的，赶快去添加吧！
                <br/>
                <a href="../default.htm">返回首页</a>
            </div>
        </div>
    </form>
</div>
<!--content-end-->