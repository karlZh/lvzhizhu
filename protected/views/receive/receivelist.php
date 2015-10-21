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
    <div class="page-title"><a href="javascript:history.back();void(0)" class="return">返 回</a>添加联系人</div>
    <p style="margin-left:10px">选择已有联系人:</p>
    <hr>
    <ul style="margin-left:10px;color:#40597d">
        <li>
            <input type="checkbox" name="receiveid" id="r-1">
            <label for="r-1">张三 北京市朝阳区酒仙桥路 10000 18612888888</label>
        </li>
        <li>
            <input type="checkbox" name="receiveid">
            <span>张三 北京市朝阳区酒仙桥路 10000 18612888888</span>
        </li>
        <li>
            <input type="checkbox" name="receiveid">
            <span>张三 北京市朝阳区酒仙桥路 10000 18612888888</span>
        </li>
    </ul>
    <input type="submit" id="js-choice" value="   选  择   " class="pxui-light-button" style="width:100%"/>
    <hr>
    <p style="margin-left:10px"><input type="checkbox" id="add-new">添加新联系人:</p>
    <hr>
    <form autocomplete="off" class="pxui-form-info" id="js-add-re" action="<?php echo $this->createUrl('receive/index') ?>" method="post" style="display:none">
        <input type="hidden" name="rtnurl" value="index"/>
        <p class="error-msg" id="js-error-msg"></p>
        <div>
            <span>收货人</span>
            <p>
                <span>
                    <input name="receivepeople" id="js-username" placeholder="例如 : 张三" type="text" value=""/>
                </span>
            </p>
        </div>
        <div>
            <span>收货地址</span>
            <p>
                <span>
                    <input name="receiveaddr" id="js-password" type="text" placeholder="例如 : 北京市海淀区上地七街110号" />
                </span>
            </p>
        </div>
        <div>
            <span>邮政编码</span>
            <p>
                <span>
                    <input name="postcode" id="js-password" type="text" placeholder="例如 : 100000" />
                </span>
            </p>
        </div>
        <div>
            <span>联系电话</span>
            <p>
                <span>
                    <input name="receivetel" id="js-password" type="text" placeholder="例如 : 13812345678" />
                </span>
            </p>
        </div>
        <div>
            <span>联系邮箱</span>
            <p>
                <span>
                    <input name="email" id="js-password" type="text" placeholder="例如 : test@greenspider.cn" />
                </span>
            </p>
        </div>
        <div>
            <span>&nbsp;</span>
            <p>
                <span>
		            <input type="submit" id="js-login" value="   添  加   " class="pxui-light-button"/>
		        </span>
            </p>
        </div>

    </form>
</div>
<!--content-end-->
<script>
    $("#add-new").click(function(){
        if(!!$(this).attr('checked')){
            $("#js-add-re").slideDown();
        }else{
            $("#js-add-re").slideUp();
        }
    });
    $(":checkbox").click(function(){
        $(":checkbox").attr('checked',false);
        $(this).attr('checked',true);
        if($(this).attr("id")!="add-new"){
            $("#js-add-re").slideUp();
        }
    });
</script>