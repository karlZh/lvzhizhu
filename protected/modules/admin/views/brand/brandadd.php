<?php
/**
 * Created by PhpStorm.
 * User: lijie-pd
 * Date: 2015/9/28
 * Time: 15:27
 */
?>
<style>
    .errorMessage{
        color:yellow;
        padding-left:12px;
    }
</style>
<!-- Page content -->
<div id="content" class="col-md-12">

    <!-- page header -->
    <div class="pageheader">


        <h2><i class="fa fa-user" style="line-height: 48px;padding-left: 1px;"></i> 品牌管理 <span> 添加品牌</span></h2>


        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li>您在这里</li>
                <li><a href="<?php echo $this->createUrl('default/index') ?>">后台首页</a></li>
                <li><a href="<?php echo $this->createUrl('brand/index') ?>">品牌管理</a></li>
                <li class="active">添加品牌</li>
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
                <section class="tile color transparent-black">
                    <!-- tile header -->
                    <div class="tile-header">
                        <h1>添加品牌</h1>
                        <div class="controls">
                            <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                            <a href="#" class="remove"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <!-- /tile header -->

<!-- tile body -->
<div class="tile-body">
    <?php $form = $this->beginWidget(
        'CActiveForm',
        array(
            'htmlOptions'=>array(
                "class"=>"form-horizontal",
                "role"=>"form",
                "enctype"=>"multipart/form-data",
            ),
        )
    ) ?>

<div class="form-group">
    <?php echo $form->labelEx(
        $model,
        'name',
        array(
            "for"=>"input01",
            "class"=>"col-sm-2 control-label"
        )
    ); ?>
    <div class="col-sm-10">
        <?php echo $form->textField(
            $model,
            'name',
            array(
                "id"=>"input01",
                "class"=>"form-control",
                "placeholder"=>"请输入品牌名称"
            )
        ); ?>
        <span class="help-block">
            <?php echo $form->error($model,'name') ?>
        </span>
    </div>
</div>

<div class="form-group">
    <?php echo $form->labelEx(
        $model,
        'brandcateid',
        array(
            "for"=>"input03",
            "class"=>"col-sm-2 control-label"
        )
    ); ?>
    <div class="col-sm-10">
        <?php echo $form->dropDownList(
            $model,
            'brandcateid',
            $brandcates,
            array(
                "id"=>"input03",
                "class"=>"form-control",
            )
        ); ?>
        <span class="help-block">
            <?php echo $form->error($model,'brandcateid') ?>
        </span>
    </div>
</div>

<div class="form-group">
    <?php echo $form->labelEx(
        $model,
        'picurl',
        array(
            "for"=>"colorpicker-rgb",
            "class"=>"col-sm-2 control-label"
        )
    ); ?>
    <div class="col-sm-10">
        <div class="input-group">
          <span class="input-group-btn">
            <span class="btn btn-primary btn-file">
                <i class="fa fa-upload"></i>
                <?php echo $form->fileField(
                    $model,
                    'picurl'
                ); ?>
            </span>
          </span>
          <input type="text" class="form-control" readonly="" style="color:rgba(255, 255, 255, 0.8);">
        </div>
        <span class="help-block">
            <?php echo $form->error($model,'picurl') ?>
        </span>
    </div>
</div>

    <?php
        if(Yii::app()->user->hasFlash('info')):
    ?>
        <p class="text-right"><?php echo Yii::app()->user->getFlash('info') ?></p>
    <?php
        endif;
    ?>
<div class="form-group form-footer">
    <div class="col-sm-offset-2 col-sm-12">
        <button type="submit" class="btn btn-primary">添加</button>
    </div>
</div>
<?php
    $this->endWidget();
?>
</div>
<!-- /tile body -->

                </section>
                <!-- /tile -->


            </div>
            <!-- /col 6 -->

        </div>
        <!-- /row -->

    </div>
    <!-- /content container -->




</div>
<!-- Page content end -->
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