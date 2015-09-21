<?php
/**
 * Created by PhpStorm.
 * User: 捷
 * Date: 2015/9/20
 * Time: 22:27
 */
?>
<!--content-->
<div class="page-role good-page">
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/assets/home/css/good/index.css" />
<script>
    /*是否下线*/
    var isDown = false;
    var branddir="361sport";
    function GoodInfo(){
        this.GoodID = '445111';
        this.ID		= '459537';
        this.Name	= '361度 女板鞋 白/浅粉 8216614';
        this.Img	= 'http://img12.paixie.net/361sport/201204/06/paixienet-445113-20120406-090933-p_thumb_160160.jpg';
        this.Price	= parseFloat('99.00');
        this.Url	= 'shoe-361sport-8216614-459537.html';
        this.MainID	= "1";
        this.Main	= "运动鞋";
        this.Style	= '板鞋/休闲鞋';
        this.StyleID    = '25';
        this.Brand	= '361度';
        this.BrandID    = '26';
        this.Color	= '白/浅粉';
        this.part	= '176';//栏目
        this.Status	= "其他";
        this.Sex	= '女';
        this.attrs = {
            '货号':'8216614',
            '款式':'板鞋/休闲鞋',
            '颜色':'白/浅粉',
            '上架时间':'2012-04-06'
            ,'上市年份':'2012'
            ,'鞋码偏差':'正常'
            ,'鞋底材质':'RB/MD'
            ,'鞋面材质':'合成革'
            ,'闭合方式':'系带'
            ,'适合季节':'春季'
            ,'性别':'女'
            ,'鞋面材料':'PU/人造革'
            ,'外底材料':'橡胶底'
        };
    };
    var goodInfo = new GoodInfo();

    $(function(){
        $('#js-freight-select').change(function(){
            var arr = $.trim($(this).val()).split('_');
            var freight_price = arr[0];
            freight_price += '元';
            $('#js-freight-val').text(freight_price);

            $(this).parent().children('span').html($(this).children('option[value="' + $(this).val() + '"]').html());
        });
    });
</script>
<script src="<?php echo Yii::app()->request->baseUrl ?>/assets/home/js/com/jquery.touchslider.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl ?>/assets/home/js/good/index.js"></script>
<script>
    jQuery(function($) {
        $(".touchslider").touchSlider({mouseTouch: true, autoplay: true});
    });
</script>

<div class="page-title"><a class="return" href="javascript:history.back();void(0)">返 回</a>商品详情</div>
<div class="pxui-area">
<h1>
    361度 女板鞋 白/浅粉 8216614
</h1>


<div class="touchslider">
    <div class="touchslider-viewport" style="height:280px;overflow:hidden"><div>
            <div class="touchslider-item"><a><span class="img320"><dfn></dfn><img src="http://img12.paixie.net/361sport/201204/06/paixienet-445113-20120406-090933-p_thumb_320320.jpg"/></span></a></div>
            <div class="touchslider-item"><a><span class="img320"><dfn></dfn><img src="http://img12.paixie.net/361sport/201204/06/paixienet-445113-20120406-090933-r_thumb_320320.jpg"/></span></a></div>
            <div class="touchslider-item"><a><span class="img320"><dfn></dfn><img src="http://img12.paixie.net/361sport/201204/06/paixienet-445113-20120406-090933-f_thumb_320320.jpg"/></span></a></div>
            <div class="touchslider-item"><a><span class="img320"><dfn></dfn><img src="http://img12.paixie.net/361sport/201204/06/paixienet-445113-20120406-090933-b_thumb_320320.jpg"/></span></a></div>
            <div class="touchslider-item"><a><span class="img320"><dfn></dfn><img src="http://img12.paixie.net/361sport/201204/06/paixienet-445113-20120406-090933-t_thumb_320320.jpg"/></span></a></div>
            <div class="touchslider-item"><a><span class="img320"><dfn></dfn><img src="http://img12.paixie.net/361sport/201204/06/paixienet-445113-20120406-090933-l_thumb_320320.jpg"/></span></a></div>
            <div class="touchslider-item"><a><span class="img320"><dfn></dfn><img src="http://img12.paixie.net/361sport/201204/06/paixienet-445113-20120406-090933-d_thumb_320320.jpg"/></span></a></div>
        </div></div>

    <div class="touchslider-navtag">
        <a class="touchslider-prev"></a>
        <span class="touchslider-nav-item touchslider-nav-item-current"></span>

        <span class="touchslider-nav-item "></span>

        <span class="touchslider-nav-item "></span>

        <span class="touchslider-nav-item "></span>

        <span class="touchslider-nav-item "></span>

        <span class="touchslider-nav-item "></span>

        <span class="touchslider-nav-item "></span>

        <a class="touchslider-next"></a>
    </div>
</div>
<div class="pxui-list" data-model="radio">
    <a>【踏青一站购】361°满99减10、199减20、299减30<i class="arrow-right"></i></a>
    <div class="pxui-list-con" style="display:none;">
        <!--  <strong>【踏青一站购】361°满99减10、199减20、299减30</strong><br/>-->
        2014-04-08 09:40  到 2014-04-20 23:59<br/>
        <strong>·</strong> 满<b>99元</b>,减<b>10元</b><br><strong>·</strong> 满<b>199元</b>,减<b>20元</b><br><strong>·</strong> 满<b>299元</b>,减<b>30元</b><br>
        <!--  -->
    </div>
    <div style="clear:both;height:4px;margin: 0;padding: 0px; width:100%;"></div>
</div>
<a class="pxui-gray-button" href="<?php echo $this->createUrl('product/picdetail') ?>">点击查看图文详情&nbsp;&nbsp;<i class="arrow-right"></i></a>

<ul class="goodinfo" id="js-goodinfo">
    <li>
        <b name="detail_mao" id="detail_mao">拍 鞋 价:</b><div><p><strong class="pxui-color-red">￥99.00</strong> <del class="pxui-color-gray">299.00</del></p></div>
    </li>
    <li>
        <b>运&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;费:</b>
        <div>
            <p>
                <span>免运费 ,支持货到付款</span>
            </p>
        </div>
    </li>
    <li>
        <b>服&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;务:</b>
        <div>
            <p>
                由拍鞋网销售并提供售后服务。                    </p>
        </div>
    </li>
    <li>
        <b>颜&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;色:</b>
        <div><p>


                <a href="#detail_mao" title="白/浅粉" class="img40 selected"><img src="http://img-cdn2.paixie.net/images/empty.gif" truesrc="http://img12.paixie.net/361sport/201204/06/paixienet-445113-20120406-090933-p_thumb_8080.jpg"  title="白/浅粉" /></a>

                <a href="shoe-361sport-8216614-459538.html#detail_mao" title="浅蓝/浅红" class="img40"><img src="http://img-cdn2.paixie.net/images/empty.gif" truesrc="http://img12.paixie.net/361sport/201204/06/paixienet-445112-20120406-090933-p_thumb_8080.jpg" title="浅蓝/浅红" /></a>

                <a href="shoe-361sport-8216614-459539.html#detail_mao" title="深粉/蓝" class="img40"><img src="http://img-cdn2.paixie.net/images/empty.gif" truesrc="http://img12.paixie.net/361sport/201204/06/paixienet-445111-20120406-090933-p_thumb_8080.jpg" title="深粉/蓝" /></a>

            </p></div>
    </li>
    <!--size-message-->
    <li>
        <b>尺&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码:</b>
        <div>
            <p class="sizes">

                <a stock="28" value="36_550" >
                    36

                </a>

                <a stock="27" value="38_554" >
                    38

                </a>

            </p>
        </div>
    </li>
    <li >
        <b style="line-height:39px;">数&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;量:</b>
        <div><p>
                        <span class="pxui-select num">
                            <span>0</span>
                            <i></i>
                            <select>
                                <option value="0">0</option>
                            </select>
                        </span>
                <span class="pxui-color-red"><!--（库存<span class="js-stock">0</span>件）--></span>
            </p></div>
    </li>
    <!--size-message-end-->
</ul>
<input type="button" class="pxui-light-button addtocart" value="立即结算"/>
<h3 id="js-attrs-title">商品属性</h3>
<ul class="attrs">
    <li>货号：8216614</li>
    <li>品牌：361度</li>
    <li>款式：板鞋/休闲鞋</li>
    <li>颜色：白/浅粉</li>
    <li>上架时间：2012-04-06 <input type="hidden" value="2" id="shoesClass"/></li>
    <li >上市年份：2012</li>
    <li class="red">鞋码偏差：正常</li>
    <li >鞋底材质：RB/MD</li>
    <li >鞋面材质：合成革</li>
    <li >闭合方式：系带</li>
    <li >适合季节：春季</li>
    <li >性别：女</li>
    <li >鞋面材料：PU/人造革</li>
    <li >外底材料：橡胶底</li>

    <li>&nbsp;</li>
    <li><a class="a" id="js-show-all-attrs">查看完整属性</a></li>
</ul>
<h3>尺码对照表</h3>
<div></div>
<a class="pxui-gray-button" id="js-show-size">点击查看&nbsp;&nbsp;<i class="arrow-right"></i></a>
<h3>服务承诺<a href="#">返回顶部<i class="arrow2-top"></i></a></h3>
<ul class="services">
    <li><i></i> 正品保证 假一赔十</li>
    <li><i></i> 15天无理由免邮退换货</li>
    <li><i></i> 10天保值 差价返还</li>

    <li><i></i> 自营商品满 99 包邮</li>
    <li><i></i> 货到付款 全国范围</li>
</ul>
<h3>用户评论<a href="#">返回顶部<i class="arrow2-top"></i></a></h3>
<div id="js-comment-list" style="display:none;">
    <div class="comment-info">
        <div><p>综合满意指数：<br>&nbsp;&nbsp;&nbsp;&nbsp;<b class="pxui-color-red">4.6</b> 分</p><span>评论人数：<br>&nbsp;&nbsp;&nbsp;&nbsp;206人</span></div>
        &nbsp;大家认为：
        <ul>
            <li>
                <b>尺&nbsp;&nbsp;&nbsp;&nbsp;码</b>
                <p>合适：<i><del style="width:100%"></del></i><span>100%</span></p>
                <p>偏大：<i><del style="width:0%"></del></i><span>0%</span></p>
                <p>偏小：<i><del style="width:0%;"></del></i><span>0%</span></p>
            </li>
        </ul>
    </div>
    <ul class="comment-list" id="js-commentlist"></ul>
    <div class="pxui-show-more" lastid="1" template="#js-good-comment" srcProperty="commentsrc" container="#js-commentlist" url="/comment/ajax?good_id=445111&item_id=459537">
        <img src="<?php echo Yii::app()->request->baseUrl ?>/assets/home/images/public/loading.gif" width="24" height="24">
        <a>查看更多 <i class="arrow2-bottom"></i></a>
    </div>
</div>
<a id="js-show-comment" class="pxui-blue-button">点击查看&nbsp;&nbsp;<i class="arrow-right"></i></a>
<input value="加入收藏" class="pxui-gray-button" id="js-go-favorites" type="button"/>
<div class="fixed-add-to-cart" id="js-fixed-add-to-cart">
    <div>
        &nbsp;
                <span class="pxui-select" id="js-sizes-select">
                    <span>请选择</span>
                    <i></i>
                    <select>
                        <option value="">请选择</option>

                        <option stock="28" value="36_550" >
                            36

                        </option>

                        <option stock="27" value="38_554" >
                            38

                        </option>

                    </select>
                </span>
                <span >
                    <span class="pxui-select num">
                        <span>0</span>
                        <i></i>
                        <select>
                            <option value="0">0</option>
                        </select>
                    </span>
                </span>
        <input type="button" class="pxui-light-button addtocart" value="立即结算"/>
    </div>
</div>
</div>
</div>
<script type="text/tcl" id="js-good-comment">
    <li>
    <strong>颜色：<%=data.color;%>&nbsp;&nbsp;&nbsp;&nbsp;尺码：<%=data.size;%><i><i style="width:<%=data.star;%>%;"></i></i></strong>
    <%=data.content;%>
    <%if(data.imgs&&data.imgs.length){%>
    <div>
    <%for(var i=0,len=data.imgs.length;i<len;i++){%>
    <a class="img60"><dfn></dfn><img src="http://img-cdn2.paixie.net/images/empty.gif" maxsrc="<%=data.imgs[i].max;%>" commentsrc="<%=data.imgs[i].min;%>"/></a>
    <%}%>
    <%if(data.imgs.length>4){%>
    <a class="show-more a">显示更多</a>
    <%}%>
    </div>
    <%}%>
    <br />
    <span class="pxui-color-gray"><%=data.name;%>&nbsp;&nbsp;&nbsp;&nbsp;发表于：<%=data.time;%></span>
    </li>
</script>
<!--content-end-->