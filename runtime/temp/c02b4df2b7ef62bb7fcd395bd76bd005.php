<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:83:"D:\phpStudy\PHPTutorial\WWW\shumei\public/../application/index\view\index\qiye.html";i:1575258150;s:74:"D:\phpStudy\PHPTutorial\WWW\shumei\application\index\view\common\meta.html";i:1575258743;s:76:"D:\phpStudy\PHPTutorial\WWW\shumei\application\index\view\common\online.html";i:1574651412;s:76:"D:\phpStudy\PHPTutorial\WWW\shumei\application\index\view\common\landed.html";i:1575257418;s:76:"D:\phpStudy\PHPTutorial\WWW\shumei\application\index\view\common\header.html";i:1575257476;s:74:"D:\phpStudy\PHPTutorial\WWW\shumei\application\index\view\common\help.html";i:1575018524;s:76:"D:\phpStudy\PHPTutorial\WWW\shumei\application\index\view\common\footer.html";i:1575257647;}*/ ?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8">
<title><?php echo (isset($common['index']['title']) && ($common['index']['title'] !== '')?$common['index']['title']:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">
<?php if(isset($common['index']['keywords'])): ?>
<meta name="keywords" content="<?php echo $common['index']['keywords']; ?>">
<?php endif; if(isset($common['index']['description'])): ?>
<meta name="description" content="<?php echo $common['index']['description']; ?>">
<?php endif; ?>
<meta name="author" content="<?php echo (isset($common['index']['author']) && ($common['index']['author'] !== '')?$common['index']['author']:''); ?>">
<!-- Favicon and Apple Icons -->
<link rel="shortcut icon" href="/shumei/public/assets/img/favicon.ico" />
<link href="/shumei/public/assets/css/frontend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/shumei/public/assets/js/html5shiv.js"></script>
  <script src="/shumei/public/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config: <?php echo json_encode($config); ?>
    };
</script>
    <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
    <link rel="stylesheet" href="/shumei/public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/shumei/public/assets/css/font-awesome.min.css">

    <!-- 字体图标ie7兼容性处理 -->
    <!--[if lt IE 8]>
    <link rel="stylesheet" href="/shumei/public/assets/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link rel="stylesheet" href="/shumei/public/assets/css/global.css">
    <link rel="stylesheet" href="/shumei/public/assets/css/index.css">

    <!--- jQuery -->
    <script src="/shumei/public/assets/js/jquery.min.js"></script>
    <script src="/shumei/public/assets/js/jquery.flexslider-min.js"></script>
    <script src="/shumei/public/assets/js/jquery.superslide.2.1.1.js"></script>
    <!--[if lt IE 9]>
    <script src="/shumei/public/assets/js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- 首页头部  -->
<link rel="stylesheet" href="/shumei/public/assets/css/rightsuspension.css">
<script src="/shumei/public/assets/js/ajaxcart.js"></script>

<!-- Validation 表单验证插件-->
<script src="/shumei/public/assets/js/jquery.validate.min.js"></script>
<script src="/shumei/public/assets/js/md5.js"></script>

<!--侧栏点击 联系客服，意见建议，回到顶部-->
<!--新版返回顶部-->
<div class="online-wrap">
    <div class="online-fixed">
        <div class="online-tool online-tool-1" onclick="openCustomerService()">
        </div>
        <div class="online-tool online-tool-2">
            <div class="r_wrap" style="display: none;">
                <span class="ot-sjx"></span>
                <div class="online-unfold ou-w1">
                    <div class="flol">
                        <img src="/shumei/public/assets/picture/online-tool-sj.png">
                        <p class="ou-txt">700度手机版</p>
                    </div>
                    <div class="flor">
                        <img src="/shumei/public/assets/picture/online-tool-wx.png">
                        <p class="ou-txt">700度微信公众号</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="online-tool online-tool-3" onclick="openCustomerService()">
        </div>
        <div class="online-tool online-tool-4">
            &nbsp;
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.online-tool').each(function() {
        $(this).hover(
            function() {
                $(this).find('.r_wrap').stop(true, true).show(200)
            },
            function() {
                $(this).find('.r_wrap').stop(true, true).hide(200)
            });
    });
    //返回顶部
    //返回顶部js
    $(".online-tool-4").click(function(){
        $("html,body").animate({scrollTop:'0px'},300);
    });
    //点击客服
    function openCustomerService(){
        window.open("http://v1.live800.com/live800/chatClient/chatbox.jsp?companyID=776940&configID=43779&jid=1902871801");
    }
</script>
<!--登陆状态/未登录状态切换-->
<!--已登录状态-->
<div class="header-top">
    <div class="container">
        <div class="fl">
            <span class="index_home"><a href="/" title="700du"><i class="fa fa-home"></i> 700度首页</a></span>
        </div><!-- End .header-top-left -->
        <ul class="fr">
            <li class="y_headrli">
                <span id="isLogin">您好，欢迎来到700度！<a href="/customer/toIndex">蒋美美</a>&nbsp;<a href="/customer/logout">退出</a></span>
            </li><li class="y_headrli"><a class="y_plr10" href="/usercenter/order/list/1/1/10?init=true" target="_blank">我的订单</a> | </li>
            <li class="y_headrli"><a class="y_plr10" href="/customer/toIndex" target="_blank">会员中心</a> | </li>
            <!--700度系统把未艾相关的链接都隐藏掉（因监管）
             <li class="y_headrli"><a class="y_plr10" href="http://jyk.700du.cn/shop.shtml?option=jh" target="_blank">服务卡</a> | </li> -->
            <li class="y_headrli"><span class="y_mlr5">客服电话：<strong class="phone"><?php echo $common['top']['hotline']; ?></strong></span></li>
        </ul><!-- End .header-top-right -->
    </div><!-- End .container -->
</div>

<!-- 头部面包屑 -->
<div id="shop_bd">
    <div class="layout_auto">
        <div class="DragContainer" id="DragContainer1" overclass="OverDragContainer" dropobj="0" startwidth="919" startheight="81" startleft="315" starttop="111">
            <div compid="shopNavigation" id="1423038106490" class="DragBox" startwidth="899" startheight="34" startleft="325" starttop="148">
                <!-- 头部 common 导航 -->
                <div class="DragBox" id="1423038106490" style="visibility: visible;" starttop="149" startleft="334" startheight="34" startwidth="1123" compid="shopNavigation">
    <div class="main-serch-container">
        <div class="container">
            <h1 class="y_logo">
                <a href="/" title="700du"><img src="/shumei/public<?php echo $common['top']['logo']; ?>"></a>
            </h1>
            <!--nav start-->
            <div class="y_mainnav">
                <ul class="menu clearfix">
                    <li  class="y_active" >
                        <a href="<?php echo url('index'); ?>">
                            首页
                        </a>
                    </li>
                    <li >
                        <a href="<?php echo url('qiye'); ?>">
                            企业保险
                        </a>
                    </li>
                    <li >
                        <a href="<?php echo url('help'); ?>">
                            帮助中心
                            <span><img src="/shumei/public/assets/img/help5.gif"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!--nav end-->
            <div class="fr">
                <div class="y_serch">
                    <input type="text" class="form-control" id="keyword" value="" onkeydown="javascript:if(event.keyCode==13) return search();" placeholder="搜'明亚优选'试试">
                    <a class="btn btn-custom" href="javascript:search();"><i class="fa fa-search"></i></a>
                </div><!-- End #quick-access -->
                <div class="y_topcart">
                    <a href="/customer/toIndex" target="_blank" class="btn btn-custom dropdown-toggle">
                        <span class="cart-menu-icon"></span>
                        我的700度<i class="fa fa-angle-right"></i>
                    </a>
                </div><!-- End .dropdown-cart-menu-container -->
            </div>
        </div><!-- End .container -->
    </div>

    <script>
        $("ul li a").each(function(){
            $this = $(this);
            if($this[0].href==String(window.location)){
                $this.parent().addClass("y_active").siblings().removeClass("y_active");
            }
        });

        function search() {
            var keyword = $('#keyword').val();
            if (keyword == "") {
                $('#keyword').focus();
                return;
            }
            window.location.href = "/front/productList/toStoreProductList?keyword="
                + encodeURI(encodeURI(keyword));
        }
    </script>
</div>
            </div>
        </div>
    </div>
    <div class="layout layout_auto" id="OneLine1490081140172">
        <div class="DragContainer" id="DragContainer1490081140172" overclass="OverDragContainer" dropobj="0" startwidth="919" startheight="614" startleft="315" starttop="256">
        </div>
    </div>
    <div class="layout layout_auto" id="OneLine1490669584186">
        <div class="DragContainer" id="DragContainer1490669584186" overclass="OverDragContainer" dropobj="0">
            <div compid="homePageTGIndex" id="Item1490927418094" class="DragBox">

                <!--方便开发写在页面里，开发时需放到group.css里-->
                <style type="text/css">
                    .employ_index{width: 1024px;margin: 30px auto}
                    .employ_index li{float: left;margin-right: 60px;margin-bottom: 30px;}
                    .employ_index li:last-child{margin-right: 0;}
                    .employ_index li:hover,.employ_index li:active{-webkit-box-shadow: 0 0 30px rgba(0,0,0,0.1);box-shadow: 0 0 30px rgba(0,0,0,0.1);}
                    /* .employ_index li:first-child{display:none;} */
                </style>
                <div class="container">
                    <ul class="employ_index" >
                        <li >
                            <a href="javascript:;"><img src="/shumei/public/assets/picture/0000025957.fid"/></a>
                        </li>
                        <li >
                            <a href="javascript:;"><img src="/shumei/public/assets/picture/0000025958.fid"/></a>
                        </li>
                        <li >
                            <a href="javascript:;"><img src="/shumei/public/assets/picture/0000119260.fid"/></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--平台底部帮助中心-->
<!--平台底部帮助中心组件-->
<div class="layout layout_auto y_minwid">
    <div class="DragContainer">
        <div class="DragBox">
            <!--底部帮助中心-->
            <div class="footer inner-footer">
                <div class="container">
                    <div class="y_fotcont clearfix">
                        <dl class="width12">
                            <dt>新手指南</dt>
                            <dd><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/966890616d9848ac96b013fd2904ba39?position=3" target="_blank" >保险资讯</a></dd>
                            <dd><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/e0e8d6d276ea41d4a315da656a2f1e93?position=3" target="_blank" >如何筛选产品</a></dd>
                            <dd><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/8fa164d134f74a3096b6688eaf7bfaa6?position=3" target="_blank" >如何登入</a></dd>

                        </dl>

                        <dl class="width12">
                            <dt>投保指南</dt>

                            <dd><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/d88c77145b794a8aac412a51a7f0bd3f?position=3" target="_blank" >如何投保</a></dd>

                            <dd><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/e522baaf2cf9413998a5af7b791f8c84?position=3" target="_blank" >支付说明</a></dd>

                            <dd><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/e941aabdcc984666b26108f0354b060b?position=3" target="_blank" >投保常见问题</a></dd>

                            <dd><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/91015dfe094e4c4eb960056abec7707b?position=3" target="_blank" >订单查看</a></dd>

                        </dl>

                        <dl class="width12">
                            <dt>服务支持</dt>

                            <dd><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/a9c5e201c7ec415693317fe7d515b6cb?position=3" target="_blank" >信息披露</a></dd>

                            <dd><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/bb3b54a8370f4b2ba88f6e5dfa4d8dd1?position=3" target="_blank" >保全服务</a></dd>

                            <dd><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/7d0bcea005414fb395c8872684d5a7c6?position=3" target="_blank" >保单服务</a></dd>

                            <dd><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/d60ab42d1c424843aec6781e27a1cada?position=3" target="_blank" >发票服务</a></dd>

                        </dl>

                        <dl class="width12">
                            <dt>理赔服务</dt>

                            <dd><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/dedf53c6083f463799f2072ebb7174d8?position=3" target="_blank" >申请理赔</a></dd>

                            <dd><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/1744462c0b9f4e7587c14114764f49e5?position=3" target="_blank" >理赔进度</a></dd>

                            <dd><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/9a7e1efbee58460e9e0b962a13f996ef?position=3" target="_blank" >理赔案例</a></dd>

                            <dd><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/e657e2edd1df4381995104c311eb6685?position=3" target="_blank" >常见理赔问题</a></dd>

                        </dl>

                        <dl class="width12">
                            <dt>平台介绍</dt>

                            <dd><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/c4e121cbd9b04c59b28f5ef8db2846e0?position=3" target="_blank" >隐私保护</a></dd>

                            <dd><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/1570e03bb20b40ffa6d9bd66d3d26125?position=3" target="_blank" >关于700度</a></dd>

                            <dd><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/48b6f1327f934dcfafe54dd1e48438bd?position=3" target="_blank" >联系我们</a></dd>

                            <dd><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/1a876c16c42c4ea484c19eec0180d94b?position=3" target="_blank" >投诉建议</a></dd>
                        </dl>
                        <div class="y_contact fl" style="border: medium none; padding-left: 0px;"><img src="/shumei/public/assets/picture/0000067337.fid" title="201704141357193743145036559.png" alt="201704141357193743145036559.png"/></div>

                    </div>
                </div>
            </div><!-- End .container -->
        </div><!--底部帮助中心-->
    </div>
</div><!--平台底部帮助中心组件 end-->
<!--平台底部帮助中心end-->
<!--底部-->
<div class="footer-bgdark">
    <div class="container">
        <div><div class="container footer-friendlink footer-friendlinkborn">
            <div class="f_link f_linkcfff"><p style="text-align:center;color:#fff;">友情链接：
                <?php if(is_array($common['link']) || $common['link'] instanceof \think\Collection || $common['link'] instanceof \think\Paginator): $i = 0; $__LIST__ = $common['link'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo $vo['lnkurl']; ?>" target="_blank"><?php echo $vo['lnkname']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </p></div></div>
            <div class="site-info" style="padding-bottom:25px;">
                <div class="container"><div class="info-text" style="color:#fff;text-align:center;line-height:2.4;padding-top:0;"><p><?php echo $common['copyright']; ?><br/>
                    <?php echo $common['icp']; ?> | 未经许可不得转载</p></div></div></div></div><!--底部商城资讯 end--><!--%@-->
    </div><!-- End .container -->
</div>
<!-- End #footer-bottom -->
</body>
</html></html>