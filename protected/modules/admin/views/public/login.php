<?php
/**
 * Created by PhpStorm.
 * User: 捷
 * Date: 2015/9/21
 * Time: 22:27
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Minimal 1.0 - Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />

    <link rel="icon" type="image/ico" href="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/images/favicon.ico" />
    <!-- Bootstrap -->
    <link href="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/css/vendor/bootstrap-checkbox.css">

    <link href="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/css/minimal.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/js/html5shiv.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="bg-3">


<!-- Wrap all page content here -->
<div id="wrap">
    <!-- Make page fluid -->
    <div class="row">
        <!-- Page content -->
        <div id="content" class="col-md-12 full-page login">


            <div class="inside-block">
                <img src="<?php echo Yii::app()->request->baseUrl ?>/assets/admin/images/logo-big.png" alt class="logo">
                <h1 style="line-height:50px"><strong>欢迎光临</strong> 绿蜘蛛</h1>
                <h5>后台管理系统</h5>

                <form id="form-signin" class="form-signin">
                    <section>
                        <div class="input-group">
                            <input type="text" class="form-control" name="username" placeholder="管理员账号">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        </div>
                        <div class="input-group">
                            <input type="password" class="form-control" name="password" placeholder="管理员密码">
                            <div class="input-group-addon"><i class="fa fa-key"></i></div>
                        </div>
                    </section>
                    <section class="controls">
                        <div class="checkbox check-transparent">
                            <input type="checkbox" value="1" id="remember" checked>
                            <label for="remember">记住登录</label>
                        </div>
                        <a href="#">忘记密码?</a>
                    </section>
                    <section class="log-in">
                        <button class="btn btn-greensea">登录</button>
                        <!--<span>or</span>
                        <button class="btn btn-slategray">Create an account</button>-->
                    </section>
                </form>
            </div>


        </div>
        <!-- /Page content -->
    </div>
</div>
<!-- Wrap all page content end -->
</body>
</html>

