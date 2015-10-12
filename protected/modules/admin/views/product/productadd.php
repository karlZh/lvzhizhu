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

<?php $form = $this->beginWidget(
    'CActiveForm',
    array(
        'htmlOptions'=>array(
            "class"=>"form-horizontal form1",
            "role"=>"form",
            "parsley-validate"=>"parsley-validate"
        )
    )
); ?>

<div class="form-group">
    <?php echo $form->labelEx($model,'title',array(
        "for"=>"fullname",
        "class"=>"col-sm-2 control-label"
    )) ?>
    <div class="col-sm-10">
        <?php echo $form->textField($model,'title',array(
            "class"=>"form-control",
            "id"=>"fullname",
            "parsley-trigger"=>"change",
            "parsley-required"=>"true",
            "parsley-minlength"=>"4",
            "parsley-validation-minlength"=>"1"
        )) ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model,'categoryid',array(
        "for"=>"category",
        "class"=>"col-sm-2 control-label"
    )) ?>
    <div class="col-sm-10">
        <?php echo $form->dropDownList($model,'categoryid',
            $categories,
            array(
            "class"=>"form-control",
            "id"=>"categoryid",
            "parsley-trigger"=>"change",
            "parsley-required"=>"true",
        )) ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model,'describe',array(
        "for"=>"describe",
        "class"=>"col-sm-2 control-label"
    )) ?>
    <div class="col-sm-10">
        <?php echo $form->textArea($model,'describe',
            array(
                "class"=>"form-control",
                "id"=>"describe",
                "parsley-trigger"=>"change",
                "parsley-required"=>"true",
                "style"=>"height:150px"
            ))
        ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model,'cover',array(
        "for"=>"cover",
        "class"=>"col-sm-2 control-label"
    )) ?>
    <div class="col-sm-10">
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-primary btn-file">
                    <i class="fa fa-upload"></i>
                    <?php echo $form->fileField($model,'cover',
                        array(
                            "class"=>"form-control",
                            "id"=>"describe",
                            "parsley-trigger"=>"change",
                            "parsley-required"=>"true",
                        ))
                    ?>
                </span>
            </span>
            <input type="text" class="form-control" readonly="" style="color:#3276b1;">
        </div>
        <span class="help-block">
            <?php echo $form->error($model,'cover') ?>
        </span>
    </div>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model,'price',array(
        "for"=>"price",
        "class"=>"col-sm-2 control-label"
    )) ?>
    <div class="col-sm-10">
        <?php echo $form->textField($model,'price',
            array(
                "class"=>"form-control",
                "id"=>"price",
                "parsley-trigger"=>"change",
                "parsley-required"=>"true",
                "parsley-type"=>"number",
            ))
        ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model,'inventory',array(
        "for"=>"inventory",
        "class"=>"col-sm-2 control-label"
    )) ?>
    <div class="col-sm-10">
        <?php echo $form->numberField($model,'inventory',
            array(
                "class"=>"form-control",
                "id"=>"inventory",
                "parsley-trigger"=>"change",
                "parsley-required"=>"true",
                "data-parsley-type"=>"integer",
            ))
        ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model,'originalprice',array(
        "for"=>"originalprice",
        "class"=>"col-sm-2 control-label"
    )) ?>
    <div class="col-sm-10">
        <?php echo $form->textField($model,'originalprice',
            array(
                "class"=>"form-control",
                "id"=>"originalprice",
                "parsley-trigger"=>"change",
                "parsley-required"=>"true",
                "parsley-type"=>"number",
            ))
        ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->labelEx($model,'brandid',array(
        "for"=>"brandid",
        "class"=>"col-sm-2 control-label"
    )) ?>
    <div class="col-sm-10">
        <?php echo $form->dropDownList($model,'brandid',
            $brands,
            array(
                "class"=>"form-control",
                "id"=>"brandid",
                "parsley-trigger"=>"change",
                "parsley-required"=>"true",
            )) ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->labelEx(
        $model,
        'ishot',
        array(
            "for"=>"ishot",
            "class"=>"col-sm-2 control-label"
        )
    ); ?>
    <div class="col-sm-10">
        <div class="onoffswitch greensea">
            <?php echo $form->checkbox(
                $model,
                'ishot',
                array(
                    "class"=>"onoffswitch-checkbox",
                    "id"=>"ishot",
                    "checked"=>"",
                )
            ); ?>
            <label class="onoffswitch-label" for="ishot">
                <span class="onoffswitch-inner"></span>
                <span class="onoffswitch-switch"></span>
            </label>
        </div>

    </div>

</div>

<div class="form-group">
    <?php echo $form->labelEx(
        $model,
        'isputaway',
        array(
            "for"=>"isputaway",
            "class"=>"col-sm-2 control-label"
        )
    ); ?>
    <div class="col-sm-10">
        <div class="onoffswitch greensea">
            <?php echo $form->checkbox(
                $model,
                'isputaway',
                array(
                    "class"=>"onoffswitch-checkbox",
                    "id"=>"isputaway",
                    "checked"=>"checked",
                )
            ); ?>
            <label class="onoffswitch-label" for="isputaway">
                <span class="onoffswitch-inner"></span>
                <span class="onoffswitch-switch"></span>
            </label>
        </div>

    </div>

</div>

<div class="form-group isonsale">
    <?php echo $form->labelEx(
        $model,
        'isonsale',
        array(
            "for"=>"isonsale",
            "class"=>"col-sm-2 control-label"
        )
    ); ?>
    <div class="col-sm-10">
        <div class="onoffswitch greensea">
            <?php echo $form->checkbox(
                $model,
                'isonsale',
                array(
                    "class"=>"onoffswitch-checkbox",
                    "id"=>"isonsale",
                    "checked"=>"",
                )
            ); ?>
            <label class="onoffswitch-label" for="isonsale">
                <span class="onoffswitch-inner"></span>
                <span class="onoffswitch-switch"></span>
            </label>
        </div>

    </div>

</div>

<div class="form-group onsaleprice" style="display:none">
    <?php echo $form->labelEx($model,'onsaleprice',array(
        "for"=>"onsaleprice",
        "class"=>"col-sm-2 control-label"
    )) ?>
    <div class="col-sm-10">
        <?php echo $form->textField($model,'onsaleprice',
            array(
                "class"=>"form-control",
                "id"=>"onsaleprice",
                "parsley-trigger"=>"change",
                "parsley-required"=>"true",
                "parsley-type"=>"number",
            ))
        ?>
    </div>
</div>

                                <!--<div class="form-group form-footer">
                                    <div class="col-sm-offset-2 col-sm-12">
                                        <button type="submit" class="btn btn-primary">添加</button>
    </div>
</div>-->

<?php $this->endWidget(); ?>
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


<script>
    $(document)
        .on('change', '.btn-file :file', function() {
            var input = $(this),
                numFiles = input.get(0).files ? input.get(0).files.length : 1,
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [numFiles, label]);
        });
    //initialize file upload button
    $(':input[type="file"]').on('fileselect', function(event, numFiles, label) {
        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;

        console.log(log);

        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }

    });
</script>

<script>
    var i = 1;
    $("#isonsale").change(function(){
        if(i==1){
            $(".form-group.onsaleprice").css("display","block")
            i=0;
        }else{
            $(".form-group.onsaleprice").css("display","none")
            i=1;
        }
    })
</script>