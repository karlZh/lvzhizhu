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

    <ul id="receives" style="margin-left:10px;color:#40597d">
        <?php
            if(!empty($receives)):
        ?>
        <p style="margin-left:10px">选择已有联系人:</p>
        <hr>
        <form class="choice-form" autocomplete="off" action="<?php echo $this->createUrl('order/create') ?>" method="post">
        <?php
                foreach($receives as $receive):
        ?>
        <li>
            <input type="checkbox" name="receiveid" id="r-<?php echo $receive->id ?>" value="<?php echo $receive->id ?>" >
            <label for="r-1"><?php echo $receive->receivepeople.' '.$receive->receiveaddr.' '.$receive->postcode.' '.$receive->receivetel ;?></label>
        </li>
        <?php
                endforeach;
        ?>
            </ul>
            <input type="submit" id="js-choice" value="   选  择   " class="pxui-light-button" style="width:100%"/>
            <hr>
            </form>
        <?php
            endif;
        ?>

    <p style="margin-left:10px"><input type="checkbox" id="add-new">添加新联系人:</p>
    <hr>
    <form class="pxui-form-info" id="js-add-re" style="display:none"  autocomplete="off">
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
		            <input type="button" id="js-re-add" value="   添  加   " class="pxui-light-button"/>
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

    $("#js-re-add").click(function(){
        var receivepeople = $(this).parent().parent().parent().parent().find(":input[name=receivepeople]").val();
        var receiveaddr = $(this).parent().parent().parent().parent().find(":input[name=receiveaddr]").val();
        var receivetel = $(this).parent().parent().parent().parent().find(":input[name=receivetel]").val();
        var email = $(this).parent().parent().parent().parent().find(":input[name=email]").val();
        var postcode = $(this).parent().parent().parent().parent().find(":input[name=postcode]").val();

        var data = {
            "receivepeople":receivepeople,
            "receiveaddr":receiveaddr,
            "receivetel":receivetel,
            "email":email,
            "postcode":postcode
        };

        $.post("<?php echo $this->createUrl('receive/create') ?>",data,function(data){
            if(data.errno == 0){
                $(":checkbox").attr('checked',false);
                $("#js-add-re").slideUp();
                alert(data.errmsg);
                //var receive = '<li><input type="checkbox" name="receiveid" id="r-'+data.data.id+'" value="'+data.data.id+'" checked="checked"><label for="r-'+data.data.id+'">'+data.data.receivepeople+' '+data.data.receiveaddr+' '+data.data.postcode+' '+data.data.receivetel+'</label></li>';
                //$("#receives").prepend(receive);
                window.location.reload();
            }else{
                alert(data.errmsg);
            }
        },'json');

    });

    if($(".choice-form").length==0){
        $("#add-new").attr("checked",true);
        $("#js-add-re").slideDown();
    }

    $(".choice-form").submit(function(e){
        var i = 0;
        $(this).find(":checkbox[name=receiveid]").each(function(j,dom){
            if(!!$(dom).attr("checked")){
                i = 1;
                return false;
            }
        });
        if(i == 0){
            e.preventDefault();
        }
    });

</script>