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
            <?php
                if(empty($cart)):
            ?>
            <div class="pxui-area goodlist">
                <div style="text-align:center;padding: 50px 0;font-size: 16px;">您当前购物车空荡荡的，赶快去添加吧！
                    <br/>
                    <a href="<?php echo $this->createUrl('index/index') ?>">返回首页</a>
                </div>
            </div>
            <?php
                else:
            ?>
            <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/assets/home/css/tuan/tuan.css"/>
            <div class="page-role">
            <?php
                foreach($cart as $pro):
            ?>
<div class="tuan-list">
    <div class="img120" style="margin-left:15px">
        <a href=""><dfn></dfn><img src="<?php echo Yii::app()->request->baseUrl ?>/assets/uploads/products/<?php echo $pro['id'].'/'.$pro['cover'] ?>"/>
        </a>
    </div>
    <a href="" class="title" style="height:auto;padding-top: 13px;"><?php echo $pro['title'] ?></a>
    <p style="height:30px;margin-top:5px">
        <span class="pxui-color-grey">商品单价：</span>
        <span class="pxui-color-red">￥29.00</span>
    </p>
    <p style="height:30px">
        <span class="pxui-color-grey">购买数量：</span>
        <input type="number" name="num[]" style="width:50px;height:16px;font-size:10px;padding:0">
    </p>
</div>
            <?php
                    endforeach;
            ?>
                </div>
            <?php
                endif;
            ?>
    </form>
</div>
<!--content-end-->