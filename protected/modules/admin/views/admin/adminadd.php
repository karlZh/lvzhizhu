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


        <h2><i class="fa fa-user" style="line-height: 48px;padding-left: 1px;"></i> 管理员管理 <span> 添加管理员</span></h2>


        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li>您在这里</li>
                <li><a href="<?php echo $this->createUrl('default/index') ?>">后台首页</a></li>
                <li><a href="<?php echo $this->createUrl('admin/index') ?>">管理员管理</a></li>
                <li class="active">添加管理员</li>
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
                        <h1>添加管理员</h1>
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
                "role"=>"form"
            ),
        )
    ) ?>

<div class="form-group">
    <?php echo $form->labelEx(
        $model,
        'adminuser',
        array(
            "for"=>"input01",
            "class"=>"col-sm-2 control-label"
        )
    ); ?>
    <div class="col-sm-10">
        <?php echo $form->textField(
            $model,
            'adminuser',
            array(
                "id"=>"input01",
                "class"=>"form-control",
                "placeholder"=>"请输入管理员账号"
            )
        ); ?>
        <span class="help-block">
            <?php echo $form->error($model,'adminuser') ?>
        </span>
    </div>
</div>

<div class="form-group">
    <?php echo $form->labelEx(
        $model,
        'adminpass',
        array(
            "for"=>"input02",
            "class"=>"col-sm-2 control-label"
        )
    ); ?>
    <div class="col-sm-10">
        <?php echo $form->passwordField(
            $model,
            'adminpass',
            array(
                "id"=>"input02",
                "class"=>"form-control",
                "placeholder"=>"请输入管理员密码"
            )
        ); ?>
        <span class="help-block">
            <?php echo $form->error($model,'adminpass') ?>
        </span>
    </div>
</div>

<div class="form-group">
    <?php echo $form->labelEx(
        $model,
        'repass',
        array(
            "for"=>"input2",
            "class"=>"col-sm-2 control-label"
        )
    ); ?>
    <div class="col-sm-10">
        <?php echo $form->passwordField(
            $model,
            'repass',
            array(
                "id"=>"input2",
                "class"=>"form-control",
                "placeholder"=>"请再次输入密码"
            )
        ); ?>
        <span class="help-block">
            <?php echo $form->error($model,'repass') ?>
        </span>
    </div>
</div>

<div class="form-group">
    <?php echo $form->labelEx(
        $model,
        'admintname',
        array(
            "for"=>"input03",
            "class"=>"col-sm-2 control-label"
        )
    ); ?>
    <div class="col-sm-10">
        <?php echo $form->textField(
            $model,
            'admintname',
            array(
                "id"=>"input03",
                "class"=>"form-control",
                "placeholder"=>"请在这里输入真实姓名"
            )
        ); ?>
        <span class="help-block">
            <?php echo $form->error($model,'admintname') ?>
        </span>
    </div>
</div>

<div class="form-group">
    <?php echo $form->labelEx(
        $model,
        'admintel',
        array(
            "for"=>"input04",
            "class"=>"col-sm-2 control-label"
        )
    ); ?>
    <div class="col-sm-10">
        <?php echo $form->textField(
            $model,
            'admintel',
            array(
                "id"=>"input04",
                "class"=>"form-control",
                "placeholder"=>"请在这里输入手机号码,便于我们联系您"
            )
        ); ?>
        <span class="help-block">
            <?php echo $form->error($model,'admintel') ?>
        </span>
    </div>
</div>

<div class="form-group">
    <?php echo $form->labelEx(
        $model,
        'adminemail',
        array(
            "for"=>"input05",
            "class"=>"col-sm-2 control-label"
        )
    ); ?>
    <div class="col-sm-10">
        <?php echo $form->textField(
            $model,
            'adminemail',
            array(
                "id"=>"input05",
                "class"=>"form-control",
                "placeholder"=>"请在这里输入电子邮箱,便于我们联系您"
            )
        ); ?>
        <span class="help-block">
            <?php echo $form->error($model,'adminemail') ?>
        </span>
    </div>
</div>


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