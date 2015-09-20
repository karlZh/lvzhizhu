<?php
/**
 * Created by PhpStorm.
 * User: 捷
 * Date: 2015/9/20
 * Time: 22:47
 */
?>
<!doctype html>
<html>
<head>
    <title>拍鞋网购物车</title>
    <meta charset="utf-8">
    <meta name="keywords" content="拍鞋网,拍鞋网官方网站,拍鞋网商城" />
    <meta name="description" content="买鞋子哪个网站好，当然首选拍鞋网!中国最早成立的正品鞋子购物网站,国内最大的品牌鞋子销售广场。所售鞋子100%厂家授权,全国包邮,货到付款,提供最完美的购物体验！" />
    <link rel="icon" href="../favicon.ico" type="image/x-icon" />
    <link rel="bookmark" href="../favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
    <meta content="width=device-width, minimum-scale=1,initial-scale=1, maximum-scale=1, user-scalable=1;" id="viewport" name="viewport" />
    <!--离线应用的另一个技巧-->
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <!--指定的iphone中safari顶端的状态条的样式-->
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <!--告诉设备忽略将页面中的数字识别为电话号码-->
    <meta content="telephone=no" name="format-detection" />
    <!--设置开始页面图片-->
    <!--<link rel="/touch/apple-touch-startup-image" href="startup.png" />-->
    <!--在设置书签的时候可以显示好看的图标-->
    <!--<link rel="apple-touch-icon" href="/touch/iphon_tetris_icon.png"/>-->
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/assets/home/css/com/com.css?17"/>
    <script>var PX_HELP_DATA=['','uo74au74aqpc8801g3htt5l2v7',['touch','cart','index'],'2014/04/09 09:43:52',0,false]; var DOMIN = {MAIN:"../../m.paixie.com/",HELP:"../../help.paixie.net/",TUAN:"../../tuan.paixie.net/",WAP:"../../wap.paixie.net/",UNION:"../../union.paixie.net/",VIPSHOP:"../../v.paixie.net/"};</script>

    <script>

        var JAVASCRIPT_LIB = (('\v' !== 'v') ? 'zepto' : 'jquery');
        JAVASCRIPT_LIB="jquery";
        document.write('<script src="../../ued.paixie.net/scripts/public/jquery.js@1"><\/script>');


        DOMIN.MAIN = '../';
        // uc浏览器添加书签功能
        window.onmessage = function(event){
            if(event.data.message != '')
            {
                $('#otherPage').remove();
            }else{
                $('#otherPage').show();
            }
        }
    </script>
    <script src="<?php echo Yii::app()->request->baseUrl ?>/assets/home/js/com/com.js@3"></script>
    <script src="<?php echo Yii::app()->request->baseUrl ?>/assets/home/js/login/px-verify.js@2"></script>
    <script src="<?php echo Yii::app()->request->baseUrl ?>/assets/home/js/com/template.js"></script>
    <!--<script src="/template/js/com/jquery.snow.min.js"></script>
    <script>
    $(document).ready( function(){
        $.fn.snow({
            minSize: 5,
            maxSize: 50,
            newOn: 1000
        });
    });
    </script>-->
</head>
<body>
<!-- uc 浏览器添加书签 start --->
<iframe src="../../app.uc.cn/appstore/AppCenter/frame@uc_param_str=nieidnutssvebipfcp&api_ver=2.0&id=1904" width="100%" height="160" style="display:none"  id="otherPage"></iframe>
<!-- uc 浏览器添加书签 end  ---->

<div class="com-content">
    <script>

        function open_notice(id){
            setCookie('touch_notice_close',1);
            var url = '../new/info/'+id+'.html';
            window.location.href=url;
        }

        var touch_notice_close = getCookie('touch_notice_close');
        if(touch_notice_close == '1' && typeof(document.getElementById('js-com-notification2')) != 'undefined' && document.getElementById('js-com-notification2') != null){
            document.getElementById('js-com-notification2').style.display = 'none';
        }
        //if( document.cookie.match(new RegExp("(^| )PHPSESSID=([^;]*)(;|$)")) ){
        //  document.getElementById('js-com-notification').style.display = 'none';
        //	}
    </script>
    <div class="com-header-area" id="js-com-header-area">
        <a href="../default.htm" class="com-header-logo"></a>
        <dfn></dfn>
        <p>
            <a class="com-header-search" id="js-com-header-search"><del></del></a>
            <a href="../login/default.htm" class="com-header-user "><del></del></a>
            <i></i>
            <a href="default.htm" class="com-header-cart selected"><b id="header-cart-num">0</b><del></del></a>
        </p>
        <div class="clear"></div>
        <form action="/s.php" method="post">
            <strong>
                <input type="text" name="keyword" id="js-com-search-text" value=""/>
                <input type="submit" value=" "/>
            </strong>
            <div id="js-com-search-recommend">
                <div></div>
                <a href="../p-_m0003s0017_1.html@asc=id"  style="color:#000000	">女单鞋</a>
                <a href="../p-m0001_id;1.html"  style="color:#ed1749">运动新品</a>
                <a href="../p-m0001s0014_1.html"  style="color:#000000">篮球鞋</a>

            </div>
        </form>
    </div>
    <div class="com-content-area" id="js-com-content-area">
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
    </div>
    <div class="com-footer-area" id="js-com-footer-area">
        <div class="com-footer-nav">
            <a href="../default.htm">首页</a><a href="../help/index.html">帮助中心</a><a href="../feedback/index.html">反馈建议</a>
        </div>
        <div class="com-footer">
            <p class="com-policy">
                <strong>
                    <a class="pxui-color-white" href="javascript:void(0)">
                        <i></i>
							<span>自营商品<br/>
							满99包邮</span>
                    </a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="pxui-color-white" href="javascript:void(0)">
                        <i style="background-position:-40px -108px;"></i>
							<span>15天无理由<br/>
							免邮退换货</span>
                    </a>
                </strong>
            </p>
            <br/>
            <br/>
            <p>
                <strong>
                    <a style="color:#769fbf;" href="../login/default.htm">登录</a>&nbsp;&nbsp;
                    <a style="color:#769fbf;" href="../register/default.htm">注册</a>
                </strong>
            </p>
            <br/>
            <p>
                <strong>
                    <a href="../../wap.paixie.net/default.htm">极速版</a>&nbsp;&nbsp;
                    <a href="../default.htm">触屏版</a>&nbsp;&nbsp;
                    <a href="../help/app.html">客户端</a>
                </strong>
            </p>
            <br/>
            © 2007-2013 Paixie All Rights Reserved<br/>
            闽B2-20110084
        </div>
    </div>
</div>
<script type="text/tcl" id="js-good-template">
<a href="<%=data.link;%>">
	<div class="img160"><dfn></dfn><img src="../../img-cdn2.paixie.net/images/empty.gif" goodsrc="<%=data.img;%>"/></div>
	<span class="name"><%=data.name;%></span>
	<span class="price">￥<%=data.price;%></span>
	<del class="price">￥<%=data.oldprice;%></del>
	<%if(data.tag){%>
	<img class="tag" src="../../img-cdn2.paixie.net/images/empty.gif" truesrc="<%=data.tag;%>"/>
	<%}%>
</a>
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-45921315-2', 'paixie.net');
    ga('send', 'pageview');

</script>
<div style="display:none;">
    <script type="text/javascript">
        var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F188d758416f87a421ba1c700763fa0bf' type='text/javascript'%3E%3C/script%3E"));
    </script>
</div>
</body>
</html>
