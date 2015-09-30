<?php
/**
 * Created by PhpStorm.
 * User: lijie-pd
 * Date: 2015/9/30
 * Time: 18:12
 */
?>
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/js/vendor/tabdrop/css/tabdrop.css">
<script src="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/js/vendor/wizard/jquery.bootstrap.wizard.min.js"></script>
<!-- Page content -->
<div id="content" class="col-md-12">

    <!-- page header -->
    <div class="pageheader">


        <h2><i class="fa fa-shield" style="line-height: 50px;padding-left: 0;"></i> 商品管理 <span>// 添加商品</span></h2>


        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li>您在这里</li>
                <li><a href="<?php echo $this->createUrl('default/index') ?>">后台首页</a></li>
                <li><a href="<?php echo $this->createUrl('product/index') ?>">商品管理</a></li>
                <li class="active">添加商品</li>
            </ol>
        </div>


    </div>
    <!-- /page header -->
    <!-- content main container -->
    <div class="main">




        <!-- row -->
        <div class="row">

            <!-- col 12 -->
            <div class="col-md-12">



                <!-- tile -->
                <section id="rootwizard" class="tabbable transparent tile">



                    <!-- tile header -->
                    <div class="tile-header transparent">
                        <h1><strong>商品</strong> 添加</h1>
                        <div class="controls">
                            <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                            <a href="#" class="remove"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <!-- /tile header -->

                    <!-- tile widget -->
                    <div class="tile-widget nopadding color transparent-black rounded-top-corners">
                        <ul>
                            <li><a href="#tab1" data-toggle="tab">商品基本信息</a></li>
                            <li><a href="#tab2" data-toggle="tab">商品扩展属性</a></li>
                            <li><a href="#tab3" data-toggle="tab">商品上架</a></li>
                        </ul>
                    </div>
                    <!-- /tile widget -->

                    <!-- tile body -->
                    <div class="tile-body">

                        <div id="bar" class="progress progress-striped active">
                            <div class="progress-bar progress-bar-cyan animate-progress-bar"></div>
                        </div>

                        <div class="tab-content">

                            <div class="tab-pane" id="tab1">
<form class="form-horizontal form1" role="form" parsley-validate>

<div class="form-group">
    <label for="fullname" class="col-sm-2 control-label">商品名称 *</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="fullname" parsley-trigger="change" parsley-required="true" parsley-minlength="4" parsley-validation-minlength="1">
    </div>
</div>

<div class="form-group">
    <label for="passwordconfirm" class="col-sm-2 control-label">商品分类 * </label>
    <div class="col-sm-10">
        <input type="password" class="form-control" id="passwordconfirm" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-type="alphanum" parsley-validation-minlength="1" parsley-equalto="#password">
    </div>
</div>

<div class="form-group">
    <label for="passwordconfirm" class="col-sm-2 control-label">商品描述 * </label>
    <div class="col-sm-10">
        <input type="password" class="form-control" id="passwordconfirm" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-type="alphanum" parsley-validation-minlength="1" parsley-equalto="#password">
    </div>
</div>

<div class="form-group">
    <label for="passwordconfirm" class="col-sm-2 control-label">商品封面 * </label>
    <div class="col-sm-10">
        <input type="password" class="form-control" id="passwordconfirm" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-type="alphanum" parsley-validation-minlength="1" parsley-equalto="#password">
    </div>
</div>

<div class="form-group">
    <label for="password" class="col-sm-2 control-label">商品价格 *</label>
    <div class="col-sm-10">
        <input type="password" class="form-control" id="password" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-type="alphanum" parsley-validation-minlength="1">
    </div>
</div>

<div class="form-group">
    <label for="passwordconfirm" class="col-sm-2 control-label">商品原价 </label>
    <div class="col-sm-10">
        <input type="password" class="form-control" id="passwordconfirm" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-type="alphanum" parsley-validation-minlength="1" parsley-equalto="#password">
    </div>
</div>

<div class="form-group">
    <label for="passwordconfirm" class="col-sm-2 control-label">商品库存 </label>
    <div class="col-sm-10">
        <input type="password" class="form-control" id="passwordconfirm" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-type="alphanum" parsley-validation-minlength="1" parsley-equalto="#password">
    </div>
</div>

<div class="form-group">
    <label for="passwordconfirm" class="col-sm-2 control-label">商品品牌 </label>
    <div class="col-sm-10">
        <input type="password" class="form-control" id="passwordconfirm" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-type="alphanum" parsley-validation-minlength="1" parsley-equalto="#password">
    </div>
</div>

<div class="form-group">
    <label for="passwordconfirm" class="col-sm-2 control-label">商品促销价 </label>
    <div class="col-sm-10">
        <input type="password" class="form-control" id="passwordconfirm" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-type="alphanum" parsley-validation-minlength="1" parsley-equalto="#password">
    </div>
</div>

</form>
                            </div>

                            <div class="tab-pane" id="tab2">

<form class="form-horizontal form2" role="form" parsley-validate id="contact">

    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email *</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" parsley-trigger="change" parsley-required="true" parsley-minlength="4" parsley-type="email" parsley-validation-minlength="1">
        </div>
    </div>

    <div class="form-group">
        <label for="website" class="col-sm-2 control-label">Website</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="website" parsley-trigger="change" parsley-minlength="4" parsley-type="url" parsley-validation-minlength="1">
        </div>
    </div>

    <div class="form-group">
        <label for="phonenum" class="col-sm-2 control-label">Phone Number</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="phonenum" parsley-trigger="change" parsley-type="phone" parsley-validation-minlength="0" placeholder="1234567891">
        </div>
    </div>

</form>

                            </div>

                            <div class="tab-pane" id="tab3">

                                <form class="form-horizontal form3" role="form" parsley-validate id="eula">

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class="checkbox">
                                                <input type="checkbox" value="1" id="opt01" parsley-trigger="change" parsley-required="true" name="eula">
                                                <label for="opt01">EULA acceptation *</label>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" value="1" id="opt02" name="newsletter">
                                                <label for="opt02">Receive newsletter</label>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>
                    <!-- /tile body -->

                    <!-- tile footer -->
                    <div class="tile-footer border-top color white rounded-bottom-corners nopadding">
                        <ul class="pager pager-full wizard">
                            <li class="previous"><a href="javascript:;"><i class="fa fa-arrow-left fa-lg"></i></a></li>
                            <li class="next"><a href="javascript:;"><i class="fa fa-arrow-right fa-lg"></i></a></li>
                            <li class="next finish" style="display:none;"><a href="javascript:;"><i class="fa fa-check fa-lg"></i></a></li>
                        </ul>
                    </div>
                    <!-- /tile footer -->




                </section>
                <!-- /tile -->




            </div>
            <!-- /col 12 -->



        </div>
        <!-- /row -->



    </div>
    <!-- /content container -->






</div>
<!-- Page content end -->
<script>
    $(function(){

        //initialize form wizard
        $('#rootwizard').bootstrapWizard({

            'tabClass': 'nav nav-tabs tabdrop',
            onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').not('.tabdrop').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('#bar .progress-bar').css({width:$percent+'%'});

                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            },

            onNext: function(tab, navigation, index) {

                var form = $('.form' + index)

                form.parsley('validate');

                if(form.parsley('isValid')) {
                    tab.addClass('success');
                } else {
                    return false;
                }

            },

            onTabClick: function(tab, navigation, index) {

                var form = $('.form' + (index+1))

                form.parsley('validate');

                if(form.parsley('isValid')) {
                    tab.addClass('success');
                } else {
                    return false;
                }

            }

        });

        // Initialize tabDrop
        $('.tabdrop').tabdrop({text: '<i class="fa fa-th-list"></i>'});


    })

</script>