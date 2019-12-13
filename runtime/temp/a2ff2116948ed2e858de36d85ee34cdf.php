<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:84:"D:\phpStudy\PHPTutorial\WWW\shumei\public/../application/index\view\index\index.html";i:1576222268;s:74:"D:\phpStudy\PHPTutorial\WWW\shumei\application\index\view\common\meta.html";i:1575258743;s:76:"D:\phpStudy\PHPTutorial\WWW\shumei\application\index\view\common\online.html";i:1574651412;s:76:"D:\phpStudy\PHPTutorial\WWW\shumei\application\index\view\common\landed.html";i:1575257418;s:76:"D:\phpStudy\PHPTutorial\WWW\shumei\application\index\view\common\header.html";i:1575257476;s:73:"D:\phpStudy\PHPTutorial\WWW\shumei\application\index\view\common\tag.html";i:1574651412;s:74:"D:\phpStudy\PHPTutorial\WWW\shumei\application\index\view\common\help.html";i:1575018524;s:76:"D:\phpStudy\PHPTutorial\WWW\shumei\application\index\view\common\footer.html";i:1575257647;}*/ ?>
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
    <div id="content">
        <div class="layout_auto">
            <div class="DragContainer" id="DragContainer1" starttop="113" startleft="343" startheight="129" startwidth="1143" overclass="OverDragContainer" dropobj="0">

                <div class="DragBox" id="Item1491382203444" style="visibility: visible;" starttop="154" startleft="353" startheight="34" startwidth="1123" compid="homePageUpCategory">
                    <!-- 首页common 导航 -->
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
                    <!--banner导航-->
                    <!--<div class="container">
    <div id="main-nav" class="y_categorytree">
        <div class="y_prudaltc">
            <ul>
                <li>
                    <dl class="y_pctreedl">
                        <dt>
                            <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=a20e6d0b99594167955053628a8ea961" target="_blank">
									<span class="subnav-i">
										<img src="http://pic.700du.cn/dev1/0/000/004/0000004235.fid" class="normal">
										<img src="http://pic.700du.cn/dev1/0/000/004/0000004230.fid" class="cur">
									</span>意外保险<i class="fa fa-angle-right"></i></a>
                        </dt>
                        <dd class="line"></dd>
                    </dl>
                    <div class="y_twotc">
                        <div class="y_twolt">

                            <dl class="first">
                                <dt>
                                    保险公司
                                </dt>
                                <dd>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=a20e6d0b99594167955053628a8ea961&tagsUuid=9cf89851db434401a48980f30d724dd6" target="_blank">招商仁和 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=a20e6d0b99594167955053628a8ea961&tagsUuid=9f30e720135d49c0bb1c0eda6925b26f" target="_blank">安盛天平 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=a20e6d0b99594167955053628a8ea961&tagsUuid=e152bce641af43999398d49631f406d7" target="_blank">华泰财险 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=a20e6d0b99594167955053628a8ea961&tagsUuid=1cebfd90057848cfadc6ccf77f734da7" target="_blank">史带财险 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=a20e6d0b99594167955053628a8ea961&tagsUuid=ac1593e05ac141a8b8e501b70f72c4f6" target="_blank">太平养老 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=a20e6d0b99594167955053628a8ea961&tagsUuid=159939c4abb040f0bdfa7ff76b6db593" target="_blank">安联财险 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=a20e6d0b99594167955053628a8ea961&tagsUuid=96800aed3f9e43f59001a5ca7144569b" target="_blank">上海人寿 </a>
                                </dd>
                            </dl>

                            <dl class="first">
                                <dt>
                                    保障特色
                                </dt>
                                <dd>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=a20e6d0b99594167955053628a8ea961&tagsUuid=db96e20e46a0459eb463fa184f6be225" target="_blank">猝死 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=a20e6d0b99594167955053628a8ea961&tagsUuid=cd6c4d1993834567a4cea02a1b6b5841" target="_blank">学平险 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=a20e6d0b99594167955053628a8ea961&tagsUuid=3a3c7cc8bf5d47b3b14f30dd27882780" target="_blank">意外医疗次限额 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=a20e6d0b99594167955053628a8ea961&tagsUuid=2ca1639ff86a454f8ef58758e9050a61" target="_blank">私立医院 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=a20e6d0b99594167955053628a8ea961&tagsUuid=74f58af0aec74106bd60ee1ae205199e" target="_blank">高危职业 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=a20e6d0b99594167955053628a8ea961&tagsUuid=208df2528fd94137915378cf4e2b2347" target="_blank">不限社保 </a>
                                </dd>
                            </dl>

                            <dl class="first">
                                <dt>
                                    保险金额
                                </dt>
                                <dd>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=a20e6d0b99594167955053628a8ea961&tagsUuid=2759623ccca54d7eaa73ab7da4b8042d" target="_blank">0-50万 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=a20e6d0b99594167955053628a8ea961&tagsUuid=04b2a8012c5744b2afb6cb51e2a85cc5" target="_blank">51-100万 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=a20e6d0b99594167955053628a8ea961&tagsUuid=10169d5a79ee42a3bfe24d118014436b" target="_blank">100万以上 </a>
                                </dd>
                            </dl>

                        </div>
                        <div class="y_twort">
                            <a href="http://www.700du.cn/front/product/toProduct/0ae3dcbbd6f441379e2f84c9cfc9b3bf " target="_blank"><img src="/shumei/public/assets/picture/0000752818.fid"></a>
                        </div>
                    </div>
                </li>

                <li>
                    <dl class="y_pctreedl">
                        <dt>
                            <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9" target="_blank">
									<span class="subnav-i">
										<img src="/shumei/public/assets/picture/0000019970.fid" class="normal">
										<img src="/shumei/public/assets/picture/0000019971.fid" class="cur">
									</span>旅游保险<i class="fa fa-angle-right"></i></a>
                        </dt>
                        <dd class="line"></dd>
                    </dl>
                    <div class="y_twotc">
                        <div class="y_twolt">
                            <dl class="first">
                                <dt>
                                    旅行目的地
                                </dt>
                                <dd>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagsUuid=768626221c874800923511aa4e1ce963" target="_blank">申根签证 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagsUuid=597b3259321b4e89baa77d877c1efe12" target="_blank">境外游 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagsUuid=f18d2e794b7f4afe8ad4935da6ff9ee2" target="_blank">境内游 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagsUuid=9b9678aadc98478582bcce3b78251af3" target="_blank">跨境 </a>
                                </dd>
                            </dl>

                            <dl class="first">
                                <dt>
                                    保障特色
                                </dt>
                                <dd>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagsUuid=208df2528fd94137915378cf4e2b2347" target="_blank">不限社保 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagsUuid=37d895eee003469a8cfc065f6a33117f" target="_blank">保本市 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagsUuid=31a1f8052f3d46cfbca0be16585633f0" target="_blank">外籍（无居住时间限制） </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagsUuid=056a1ea0de75456f96e5fe5ac1fc25ad" target="_blank">留学 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagsUuid=ed872475460e4712860246582f22f00d" target="_blank">医疗直付/垫付 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagsUuid=caa1e5d838fb4c5faf0b63e1a85c6cd4" target="_blank">航班延误 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagsUuid=5f44885d8bee40c991ef8343b0c281ef" target="_blank">紧急救援 </a>
                                </dd>
                            </dl>

                            <dl class="first">
                                <dt>
                                    保险公司
                                </dt>
                                <dd>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagsUuid=c91534d57a26405caff8a5b5cdd24e89" target="_blank">利宝保险 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagsUuid=9f30e720135d49c0bb1c0eda6925b26f" target="_blank">安盛天平 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagsUuid=edbe963a94344143bd44442fae35b6cd" target="_blank">美亚财险 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagsUuid=d924bd1b15724646b98a74ead10840b5" target="_blank">阳光财险 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagsUuid=b0abd4f7ad4a425fb1a1a725af0daa27" target="_blank">众安在线 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagsUuid=159939c4abb040f0bdfa7ff76b6db593" target="_blank">安联财险 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=5a310c0b1301466a93f4f58b7a9a48a9&tagsUuid=1cebfd90057848cfadc6ccf77f734da7" target="_blank">史带财险 </a>
                                </dd>
                            </dl>

                        </div>
                        <div class="y_twort">
                            <a href="http://www.700du.cn/front/productList/toStoreProductList?keyword=%25E7%25BE%258E%25E4%25BA%259A " target="_blank"><img src="/shumei/public/assets/picture/0000866148.fid"></a></div>
                    </div>
                </li>
                <li>
                    <dl class="y_pctreedl">
                        <dt>
                            <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=7b2a397ffd0e415088b030c01ad453cf" target="_blank">
									<span class="subnav-i">
										<img src="/shumei/public/assets/picture/0000019972.fid" class="normal">
										<img src="/shumei/public/assets/picture/0000019973.fid" class="cur">
									</span>健康保险<i class="fa fa-angle-right"></i></a>
                        </dt>
                        <dd class="line"></dd>
                    </dl>
                    <div class="y_twotc">
                        <div class="y_twolt">
                            <dl class="first">
                                <dt>
                                    保险公司
                                </dt>
                                <dd>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=7b2a397ffd0e415088b030c01ad453cf&tagsUuid=a353095993fd4a0f9c72a809ba5624eb" target="_blank">阳光人寿 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=7b2a397ffd0e415088b030c01ad453cf&tagsUuid=dfceecfd13504757bbfef9b67417d9cd" target="_blank">中荷人寿 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=7b2a397ffd0e415088b030c01ad453cf&tagsUuid=ba6857e082d34d2dbb8e97243559f5c6" target="_blank">昆仑健康 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=7b2a397ffd0e415088b030c01ad453cf&tagsUuid=72895f17331b44f7b7fd4f3d548351a0" target="_blank">百年人寿 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=7b2a397ffd0e415088b030c01ad453cf&tagsUuid=be3edbf9b19d48f1bad1b5e9a1a82d70" target="_blank">复星保德信 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=7b2a397ffd0e415088b030c01ad453cf&tagsUuid=f0971f01b87f4734b8ccf2b355b4f544" target="_blank">复星联合 </a>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=7b2a397ffd0e415088b030c01ad453cf&tagsUuid=1bcf6e71287b4527b718c1750902aded" target="_blank">和谐健康 </a>
                                </dd>
                            </dl>

                            <dl class="first">
                                <dt>
                                    保障特色
                                </dt>
                                <dd>
                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=7b2a397ffd0e415088b030c01ad453cf&tagsUuid=c41987128f224a81ac4210bb1e592319" target="_blank">住院宝 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=7b2a397ffd0e415088b030c01ad453cf&tagsUuid=40f233d900634fc59b375b31182cba41" target="_blank">直付/垫付 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=7b2a397ffd0e415088b030c01ad453cf&tagsUuid=e7754fb681b242118e469bb43dff2d76" target="_blank">智能核保 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=7b2a397ffd0e415088b030c01ad453cf&tagsUuid=dd660e5e293044c081aa638297b4406d" target="_blank">住院+门诊 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=7b2a397ffd0e415088b030c01ad453cf&tagsUuid=fafe2232e56e46fa9643b820facf9ee4" target="_blank">投保人豁免 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=7b2a397ffd0e415088b030c01ad453cf&tagsUuid=4614e8180a844563bac42f87c3ae6c3b" target="_blank">私立 </a>


                                </dd>
                            </dl>

                            <dl class="first">
                                <dt>
                                    保障类型
                                </dt>
                                <dd>



                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=7b2a397ffd0e415088b030c01ad453cf&tagsUuid=62cfe069a13e4cb186840b8aebfa6035" target="_blank">医疗险 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=7b2a397ffd0e415088b030c01ad453cf&tagsUuid=edec4e08f4274aa78109d0b71bac1e17" target="_blank">重疾险 </a>


                                </dd>
                            </dl>

                        </div>
                        <div class="y_twort">

                            <a href="http://www.700du.cn/front/product/toProduct/00fd73e61a2141d89362c64a46610851 " target="_blank"><img src="/shumei/public/assets/picture/0000752817.fid"></a>

                        </div>
                    </div>
                </li>


                <li>
                    <dl class="y_pctreedl">
                        <dt>
                            <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=98ed521e1a714e1db943fd7e6514a78a" target="_blank">
									<span class="subnav-i">
										<img src="/shumei/public/assets/picture/0000019974.fid" class="normal">
										<img src="/shumei/public/assets/picture/0000019975.fid" class="cur">
									</span>人寿保险<i class="fa fa-angle-right"></i></a>
                        </dt>
                        <dd class="line"></dd>
                    </dl>
                    <div class="y_twotc">
                        <div class="y_twolt">

                            <dl class="first">
                                <dt>
                                    保险公司
                                </dt>
                                <dd>



                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=98ed521e1a714e1db943fd7e6514a78a&tagsUuid=dc8a6085abc74b3a9975826e94175e8c" target="_blank">华贵人寿 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=98ed521e1a714e1db943fd7e6514a78a&tagsUuid=ed056b0ae33f4deaa06b26ca94f037e5" target="_blank">弘康人寿 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=98ed521e1a714e1db943fd7e6514a78a&tagsUuid=c9222477bde34078853655e82a9bed0c" target="_blank">渤海人寿 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=98ed521e1a714e1db943fd7e6514a78a&tagsUuid=be3edbf9b19d48f1bad1b5e9a1a82d70" target="_blank">复星保德信 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=98ed521e1a714e1db943fd7e6514a78a&tagsUuid=728f7273aee342a4b6a7e2e39dca5374" target="_blank">人民人寿 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=98ed521e1a714e1db943fd7e6514a78a&tagsUuid=81d1bcdc44854dceb89c0b5561f1a4ae" target="_blank">横琴人寿 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=98ed521e1a714e1db943fd7e6514a78a&tagsUuid=9cf89851db434401a48980f30d724dd6" target="_blank">招商仁和 </a>


                                </dd>
                            </dl>

                            <dl class="first">
                                <dt>
                                    保障类型
                                </dt>
                                <dd>



                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=98ed521e1a714e1db943fd7e6514a78a&tagsUuid=3e84e0fd74bd4cbf9694ad1fe73917a0" target="_blank">定期寿险 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=98ed521e1a714e1db943fd7e6514a78a&tagsUuid=a02c7344ea674eb896f350e4e6149976" target="_blank">终身寿险 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=98ed521e1a714e1db943fd7e6514a78a&tagsUuid=2c4e01c54ffc4b44b633769f59b83c5f" target="_blank">增额寿险 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=98ed521e1a714e1db943fd7e6514a78a&tagsUuid=b610e2a1fe2949a3a0f536383a17c4c5" target="_blank">减额定寿 </a>


                                </dd>
                            </dl>

                            <dl class="first">
                                <dt>
                                    保险金额
                                </dt>
                                <dd>



                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=98ed521e1a714e1db943fd7e6514a78a&tagsUuid=10169d5a79ee42a3bfe24d118014436b" target="_blank">100万以上 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=98ed521e1a714e1db943fd7e6514a78a&tagsUuid=2759623ccca54d7eaa73ab7da4b8042d" target="_blank">0-50万 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=98ed521e1a714e1db943fd7e6514a78a&tagsUuid=04b2a8012c5744b2afb6cb51e2a85cc5" target="_blank">51-100万 </a>


                                </dd>
                            </dl>

                        </div>
                        <div class="y_twort">

                            <a href="http://www.700du.cn/front/product/toProduct/5a67403597cf451599d53343ed265a03 " target="_blank"><img src="/shumei/public/assets/picture/0000381768.fid"></a>

                        </div>
                    </div>
                </li>


                <li>
                    <dl class="y_pctreedl">
                        <dt>
                            <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=70720400cc8a40d6b8945720a842f282" target="_blank">
									<span class="subnav-i">
										<img src="/shumei/public/assets/picture/0000778329.fid" class="normal">
										<img src="/shumei/public/assets/picture/0000778330.fid" class="cur">
									</span>财产保险<i class="fa fa-angle-right"></i></a>
                        </dt>
                        <dd class="line"></dd>
                    </dl>
                    <div class="y_twotc">
                        <div class="y_twolt">

                            <dl class="first">
                                <dt>
                                    保险公司
                                </dt>
                                <dd>



                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=70720400cc8a40d6b8945720a842f282&tagsUuid=159939c4abb040f0bdfa7ff76b6db593" target="_blank">安联财险 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=70720400cc8a40d6b8945720a842f282&tagsUuid=d924bd1b15724646b98a74ead10840b5" target="_blank">阳光财险 </a>


                                </dd>
                            </dl>

                            <dl class="first">
                                <dt>
                                    保障特色
                                </dt>
                                <dd>



                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=70720400cc8a40d6b8945720a842f282&tagsUuid=f17ba63267324686950f7b9d688c1f62" target="_blank">高空坠物 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=70720400cc8a40d6b8945720a842f282&tagsUuid=9076c044cbdf4e6a8fa210637201aa5e" target="_blank">室内盗窃 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=70720400cc8a40d6b8945720a842f282&tagsUuid=f88e9df936564c4e8fde1e50da84a7b9" target="_blank">熊孩子 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=70720400cc8a40d6b8945720a842f282&tagsUuid=8f12e85a6f004dcd8a643ac82706b662" target="_blank">出租房屋可保 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=70720400cc8a40d6b8945720a842f282&tagsUuid=eb672ccd2d3e474eabd5e3ed90f12baa" target="_blank">账户安全 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=70720400cc8a40d6b8945720a842f282&tagsUuid=cfa8d6ed5e0c409fa9631a4513e6e249" target="_blank">水暖管爆裂 </a>


                                </dd>
                            </dl>

                            <dl class="first">
                                <dt>
                                    保障类型
                                </dt>
                                <dd>



                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=70720400cc8a40d6b8945720a842f282&tagsUuid=ec1bc69ef20341a7809a8b30bf1e1a4d" target="_blank">房屋损失 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=70720400cc8a40d6b8945720a842f282&tagsUuid=1f895c892b1c4555b61cb6d6ffd65919" target="_blank">账户损失 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=70720400cc8a40d6b8945720a842f282&tagsUuid=3ef09d61b98c4fb7a65b4404317e2857" target="_blank">责任保险 </a>


                                </dd>
                            </dl>

                        </div>
                        <div class="y_twort">

                            <a href="http://www.700du.cn/front/product/toProduct/7f773b3e8edf46a19ea6a0a3073a1fd5 " target="_blank"><img src="/shumei/public/assets/picture/0000824074.fid"></a>

                        </div>
                    </div>
                </li>


                <li>
                    <dl class="y_pctreedl">
                        <dt>
                            <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547" target="_blank">
									<span class="subnav-i">
										<img src="/shumei/public/assets/picture/0000023371.fid" class="normal">
										<img src="/shumei/public/assets/picture/0000023372.fid" class="cur">
									</span>保险公司<i class="fa fa-angle-right"></i></a>
                        </dt>
                        <dd class="line"></dd>
                    </dl>
                    <div class="y_twotc">
                        <div class="y_twolt">

                            <dl class="first">
                                <dt>
                                    财险公司
                                </dt>
                                <dd>



                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagsUuid=d924bd1b15724646b98a74ead10840b5" target="_blank">阳光财险 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagsUuid=edbe963a94344143bd44442fae35b6cd" target="_blank">美亚财险 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagsUuid=747940d6a6ac4c508f9e4dc8659ff649" target="_blank">安心财险 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagsUuid=e152bce641af43999398d49631f406d7" target="_blank">华泰财险 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagsUuid=1cebfd90057848cfadc6ccf77f734da7" target="_blank">史带财险 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagsUuid=159939c4abb040f0bdfa7ff76b6db593" target="_blank">安联财险 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagsUuid=9f30e720135d49c0bb1c0eda6925b26f" target="_blank">安盛天平 </a>


                                </dd>
                            </dl>

                            <dl class="first">
                                <dt>
                                    寿险公司
                                </dt>
                                <dd>



                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagsUuid=a353095993fd4a0f9c72a809ba5624eb" target="_blank">阳光人寿 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagsUuid=dc8a6085abc74b3a9975826e94175e8c" target="_blank">华贵人寿 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagsUuid=9cf89851db434401a48980f30d724dd6" target="_blank">招商仁和 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagsUuid=ed056b0ae33f4deaa06b26ca94f037e5" target="_blank">弘康人寿 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagsUuid=40b152e43c5e4b7eba1277dfc42572a8" target="_blank">复星保德信人寿 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagsUuid=72895f17331b44f7b7fd4f3d548351a0" target="_blank">百年人寿 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagsUuid=81d1bcdc44854dceb89c0b5561f1a4ae" target="_blank">横琴人寿 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagsUuid=ff2d1ed0997742cf89d05b4026e359a5" target="_blank">合众人寿 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagsUuid=c9222477bde34078853655e82a9bed0c" target="_blank">渤海人寿 </a>


                                </dd>
                            </dl>

                            <dl class="first">
                                <dt>
                                    健康险公司
                                </dt>
                                <dd>



                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagsUuid=1bcf6e71287b4527b718c1750902aded" target="_blank">和谐健康 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagsUuid=f0971f01b87f4734b8ccf2b355b4f544" target="_blank">复星联合 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagsUuid=912ba62a2b5a4505990a72036c6af736" target="_blank">平安健康 </a>




                                    <a href="/front/productList/toStoreProductList?storeUuid=75bdafe2bc4e4ff1a0a1afe6cf26b467&categoryUuid=f80bc47ea2f34a57bead56f5e01a7547&tagsUuid=ba6857e082d34d2dbb8e97243559f5c6" target="_blank">昆仑健康 </a>


                                </dd>
                            </dl>

                        </div>
                        <div class="y_twort">

                            <a href="http://www.700du.cn/front/product/toProduct/8282b50aa5d34ad88f98ebb828641441 " target="_blank"><img src="/shumei/public/assets/picture/0000824073.fid"></a>

                        </div>
                    </div>
                </li>


            </ul>
        </div>


    </div>
</div>
<script type="text/javascript">
    $(".y_prudaltc li").hover(function(){
        var bz=$(this).position().top;
        $(this).children(".y_twotc").css("top",""+-bz+"px");
        $(this).children(".y_twotc").show();
    },function(){
        $(this).children(".y_twotc").hide()
    });
</script>-->
                </div>
            </div>
        </div>

        <div class="layout layout_auto" id="OneLine1489125299212">
            <div class="DragContainer" id="DragContainer1489125299212" starttop="198" startleft="343" startheight="518" startwidth="1143" overclass="OverDragContainer" dropobj="0">
                <div class="DragBox" id="Item1489125305677" style="visibility: visible;" starttop="208" startleft="353" startheight="34" startwidth="1123" compid="homePageUpSelectionAd">
                    <!--banner切换-->
                    <div class="y_dqslides">
                        <div class="i_banner">
                            <!--平台首页大banner切换广告模块-->
                            <!--banner切换组件-->
                            <div class="flexslider">
                                <ul class="slides">
                                    <?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <li>
                                        <a href="<?php echo $vo['goods_id']; ?>"><img src="/shumei/public<?php echo $vo['pic']; ?>"/></a>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                        </div>
                        <!--- 平台首页大banner切换广告模块调用插件的js -->
                        <script>
                            $(function(){
                                $('.y_dqslides .flexslider').flexslider({
                                    animation: "slide",
                                    animationLoop: true,
                                    pauseOnAction: false,
                                    pauseOnHover: true,
                                    slideshowSpeed: 4000
                                });
                            });
                        </script>
                    </div>
                    <!--banner切换结束-->

                </div>
            </div>
        </div>
        <div class="layout " id="OneLine1489125544653">
            <div class="col_main">
                <div class="DragContainer main_wrap" id="DragContainer1489125544653" starttop="727" startleft="343" startheight="505" startwidth="1143" overclass="OverDragContainer" dropobj="0">
                    <div class="DragBox" id="Item1489125556349" starttop="737" startleft="353" startheight="34" startwidth="1123" compid="homePageUpSCategory">
                        <div class="container floor floor-promotion">
                            <div class="fp-l">
                                <a href="http://www.700du.cn/front/product/toProduct/17cf723df5b1495691b7d9ae79c3622c" target="_blank"><img src="/shumei/public/assets/picture/0001017826.fid"></a>
                            </div>

                            <div class="fp-m">
                                <div class="clearfix">
                                    <a href="http://www.700du.cn/front/product/toProduct/00fd73e61a2141d89362c64a46610851" class="fp-img-wrap" target="_blank"><img src="/shumei/public/assets/picture/0001017822.fid">
                                        <div class="fp-img-info">
                                            <div class="fp-img-text">百年康惠保（旗舰版）重大疾病保险</div>
                                            <span class="fp-img-sub">

				        	<b class="fp-line-l"></b>100种重疾+20种中症+35种轻症<b class="fp-line-r"></b>

			        </span>
                                        </div>
                                    </a>
                                    <a href="http://www.700du.cn/front/product/toProduct/cac095bcad09463c8a240569bfa9a323" class="fp-img-wrap" target="_blank"><img src="/shumei/public/assets/picture/0001017824.fid">
                                        <div class="fp-img-info">
                                            <div class="fp-img-text">昆仑康爱保疾病保险</div>
                                            <span class="fp-img-sub">

			        		<b class="fp-line-l"></b>恶性肿瘤最高50万，原位癌最高10万且附带豁免责任<b class="fp-line-r"></b>

			        </span>
                                        </div>
                                    </a>
                                    <a href="http://www.700du.cn/front/product/toProduct/b02e6c48602c4c53a7c84a5f8c7f508f" class="fp-img-wrap" target="_blank"><img src="/shumei/public/assets/picture/0001017823.fid">
                                        <div class="fp-img-info">
                                            <div class="fp-img-text">复星联合康乐一生（2019版）重大疾病保险</div>
                                            <span class="fp-img-sub">

			        		<b class="fp-line-l"></b>108种重疾+25种中症+40种轻症<b class="fp-line-r"></b>

			        </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="clearfix mt15">
                                    <a href="http://www.700du.cn/front/product/toProduct/d792b8f789ab4dfa9c3e376f5e79cf33" class="fp-img-long" target="_blank"><img src="/shumei/public/assets/picture/0001017825.fid">
                                        <div class="fp-img-info">
                                            <div class="fp-img-text">复星联合妈咪保贝少儿重大疾病保险</div>
                                            <span class="fp-img-sub">

			        		<b class="fp-line-l"></b>终身保障、200万超大保额、重疾不分组多次赔<b class="fp-line-r"></b>

			        </span>
                                        </div>
                                    </a>
                                    <a href="http://www.700du.cn/front/product/toProduct/d08615532ba549e796d7ed9555f120c9" class="fp-img-wrap" target="_blank"><img src="/shumei/public/assets/picture/0001017827.fid">
                                        <div class="fp-img-info">
                                            <div class="fp-img-text">长生长生福优加重大疾病保险</div>
                                            <span class="fp-img-sub">

			        		<b class="fp-line-l"></b>轻症、中症、重疾多次赔付不分组 、投保人豁免、线下核保<b class="fp-line-r"></b>

			        </span>
                                        </div>
                                    </a>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="layout grid_s2m0" id="OneLine1489125645401">
            <div class="col_main">
                <div class="DragContainer main_wrap" id="DragContainer14891256454011" starttop="1242" startleft="641" startheight="54" startwidth="846" overclass="OverDragContainer" dropobj="0">
                    <div class="DragBox" id="Item1489125670848" starttop="1252" startleft="651" startheight="34" startwidth="826" compid="homePageUpFloor">
                        <!--楼层商品分类切换组件-->
                        <div class="y_productmc">
                            <ul class="y_flortabtit">
                                <li class="y_active">意外险</li>
                                <li>老年险</li>
                            </ul>
                            <div class="y_piclist y_visible">
                                <!--意外险begin-->
                                <ul class="y_itemwrap">
                                    <?php if(is_array($accident) || $accident instanceof \think\Collection || $accident instanceof \think\Paginator): $i = 0; $__LIST__ = $accident;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <li class="y_item1">
                                        <a href="<?php echo url('goodscontent',['id'=>$vo['id']]); ?>" class="con">
                                            <img class="pic" src="/shumei/public<?php echo $vo['picarr'][0]; ?>">
                                            <h2><?php echo $vo['goods_name']; ?></h2>
                                            <!-- 							    <p>投保年龄50岁及以上都可，不设上限</p> -->
                                            <!-- 								<p>超高性价比，最低20元即享全年安心</p> -->
                                            <!-- 							    <p>老人专享，意外骨折、旅游意外全包含</p> -->
                                            <p><?php echo $vo['tags']; ?></p>
                                        </a>
                                        <a href="<?php echo url('goodscontent',['id'=>$vo['id']]); ?>" target="_blank" class="price">
                                            <span class="p"><em><?php echo $vo['price']; ?></em>元起</span>
                                            <span class="c">已售: <?php echo $vo['sales_actual']; ?></span>
                                        </a>
                                        <!--<dl class="detail">-->
                                            <!--<dt>安联安泰百万意外保障计划</dt>-->
                                            <!--&lt;!&ndash; 					         <dd><span>火车、轮船意外身故</span>5万</dd> &ndash;&gt;-->
                                            <!--&lt;!&ndash; 					         <dd><span>一般意外伤残</span>1万</dd> &ndash;&gt;-->
                                            <!--&lt;!&ndash; 					         <dd><span>意外伤害骨折</span>500元（按档赔付）</dd> &ndash;&gt;-->
                                            <!--&lt;!&ndash; 					         <dd><span>旅游意外身故</span>2万</dd> &ndash;&gt;-->
                                            <!--<dd><span>意外身故及伤残</span>最高100万</dd>-->
                                            <!--<dd><span>-->
<!--猝死保障</span>最高10万</dd>-->
                                            <!--<dd><span>-->
<!--意外医疗费用</span>最高5万</dd>-->
                                            <!--<dd><span>-->
<!--公立特需/私立医院意外医疗</span>最高1.3万</dd>-->
                                            <!--<dd><span>-->
<!--意外住院津贴</span>最高600元/天</dd>-->
                                            <!--<dd><span>-->
<!--非电动车免费道路救援</span>1次</dd>-->
                                        <!--</dl>-->
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                                <!--意外险end-->
                            </div>
                            <!--老年险-->
                            <div class="y_piclist">
                                <ul class="y_itemwrap">
                                    <?php if(is_array($old) || $old instanceof \think\Collection || $old instanceof \think\Paginator): $i = 0; $__LIST__ = $old;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <li class="y_item1">
                                        <a href="<?php echo url('goodscontent',['id'=>$vo['id']]); ?>" class="con">
                                            <img class="pic" src="/shumei/public<?php echo $vo['picarr'][0]; ?>">
                                            <h2><?php echo $vo['goods_name']; ?></h2>
                                            <p><?php echo $vo['tags']; ?> </p>
                                        </a>
                                        <a href="<?php echo url('goodscontent',['id'=>$vo['id']]); ?>" target="_blank" class="price">
                                            <span class="p"><em><?php echo $vo['price']; ?></em>元起</span>
                                            <span class="c">已售: <?php echo $vo['sales_actual']; ?></span>
                                        </a>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                            <!--老年险 end-->
                        </div>
                        <script>
                            $(function(){
                                //楼层商品tab切换
                                $(".y_flortabtit li").mouseover(function(){
                                    $(this).addClass("y_active").siblings().removeClass().parent(".y_flortabtit").nextAll(".y_piclist").eq($(this).index()).addClass("y_visible").siblings(".y_piclist").removeClass("y_visible");
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="DragContainer col_sidebar" id="DragContainer14891256454012" starttop="1242" startleft="343" startheight="54" startwidth="285" overclass="OverDragContainer" dropobj="0">
                <div class="DragBox" id="Item1489544220145" style="visibility: visible;" starttop="1252" startleft="353" startheight="34" startwidth="265" compid="homePageUpFloorLeft">
                    <div class="y_catatit"><h2><strong>意外险</strong></h2></div><!--楼层标题 end-->
                    <div class="DragBox">
                        <!--楼层左广告组件-->
                        <div class="y_forltpic">
                            <div class="florleft_switchad">
                                <img src="/shumei/public/assets/picture/0000055176.fid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="layout grid_s2m0" id="OneLine1489125649313">
            <div class="col_main">
                <div class="DragContainer main_wrap" id="DragContainer14891256493131" starttop="1306" startleft="641" startheight="511" startwidth="846" overclass="OverDragContainer" dropobj="0">
                    <div class="DragBox" id="Item1489125674943" starttop="1316" startleft="651" startheight="34" startwidth="826" compid="homePageUpFloor">
                        <!--楼层商品分类切换组件-->
                        <div class="y_productmc">
                            <ul class="y_flortabtit">
                                <li class="y_active">医疗险</li>
                                <li>健康险</li>
                            </ul>
                          <!--医疗险 start-->
                            <div class="y_piclist y_visible">
                                <ul class="y_itemwrap">
                                    <?php if(is_array($medical) || $medical instanceof \think\Collection || $medical instanceof \think\Paginator): $i = 0; $__LIST__ = $medical;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <li class="y_item1">
                                        <a href="<?php echo url('goodscontent',['id'=>$vo['id']]); ?>" class="con">
                                            <img class="pic" src="/shumei/public<?php echo $vo['picarr'][0]; ?>">
                                            <h2><?php echo $vo['goods_name']; ?></h2>
                                            <p><?php echo $vo['tags']; ?></p>
                                        </a>
                                        <a href="<?php echo url('goodscontent',['id'=>$vo['id']]); ?>" target="_blank" class="price">
                                            <span class="p"><em><?php echo $vo['price']; ?></em>元起</span>
                                            <span class="c">已售: <?php echo $vo['sales_actual']; ?></span>
                                        </a>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                            <!--医疗险结束  END-->
                            <!--健康险-->
                            <div class="y_piclist">
                                <ul class="y_itemwrap">
                                    <?php if(is_array($health) || $health instanceof \think\Collection || $health instanceof \think\Paginator): $i = 0; $__LIST__ = $health;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <li class="y_item1">
                                        <a href="<?php echo url('goodscontent',['id'=>$vo['id']]); ?>" class="con">
                                            <img class="pic" src="/shumei/public<?php echo $vo['picarr'][0]; ?>">
                                            <h2><?php echo $vo['goods_name']; ?></h2>
                                            <p><?php echo $vo['tags']; ?></p>
                                        </a>
                                        <a href="<?php echo url('goodscontent',['id'=>$vo['id']]); ?>" target="_blank" class="price">
                                            <span class="p"><em><?php echo $vo['price']; ?></em>元起</span>
                                            <span class="c">已售: <?php echo $vo['sales_actual']; ?></span>
                                        </a>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                            <!--健康险结束  END-->
                        </div>
                        <script>
                            $(function(){
                                //楼层商品tab切换
                                $(".y_flortabtit li").mouseover(function(){
                                    $(this).addClass("y_active").siblings().removeClass().parent(".y_flortabtit").nextAll(".y_piclist").eq($(this).index()).addClass("y_visible").siblings(".y_piclist").removeClass("y_visible");
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="DragContainer col_sidebar" id="DragContainer14891256493132" starttop="1306" startleft="343" startheight="164" startwidth="285" overclass="OverDragContainer" dropobj="0">
                <div class="DragBox" id="Item1489544254410" starttop="1316" startleft="353" startheight="34" startwidth="265" compid="homePageUpFloorLeft">

                    <div class="y_catatit"><h2><strong>健康险</strong></h2></div><!--楼层标题 end-->
                    <div class="DragBox">
                        <!--楼层左广告组件-->
                        <div class="y_forltpic">
                            <div class="florleft_switchad">
                                <img src="/shumei/public/assets/picture/0000055177.fid" />
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="layout " id="OneLine1489126404997">
            <div class="col_main">
                <div class="DragContainer main_wrap" id="DragContainer1489126404997" starttop="1827" startleft="343" startheight="651" startwidth="1143" overclass="OverDragContainer" dropobj="0">
                    <div class="DragBox" id="Item1489126412452" starttop="1837" startleft="353" startheight="34" startwidth="1123" compid="homePageUpPartner">
                        <link rel="stylesheet" type="text/css" href="static/css/index.css">
                        <div class="y_catatit"><h2><strong>合作伙伴</strong></h2></div>
                        <div class="columns-body" id="multipleColumn">
                            <div class="hd">
                                <ul>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="bd">
                                <div class="company-list clearfix">
                                <?php if(is_array($partners) || $partners instanceof \think\Collection || $partners instanceof \think\Paginator): $i = 0; $__LIST__ = $partners;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <li class="company-item fl">
                                        <a href="javascript:;" title="<?php echo $vo['title']; ?>">
                                            <img src="/shumei/public<?php echo $vo['image']; ?>" alt="">
                                        </a>
                                    </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                        </div>

                        <script>
                            /* 使用js分组，每6个li放到一个ul里面 */
                            jQuery("#multipleColumn .bd li").each(function(i){ jQuery("#multipleColumn .bd li").slice(i*8,i*8+8).wrapAll("<ul></ul>");});

                            /* 调用SuperSlide，每次滚动一个ul，相当于每次滚动6个li */
                            jQuery("#multipleColumn").slide({titCell:".hd ul",mainCell:".bd .company-list",autoPage:true,effect:"leftLoop",autoPlay:true});
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="layout " id="OneLine1489126407204">
            <div class="col_main">
                <div class="DragContainer main_wrap" id="DragContainer1489126407204" starttop="2489" startleft="343" startheight="406" startwidth="1143" overclass="OverDragContainer" dropobj="0">
                    <div class="DragBox" id="Item1489126425347" starttop="2499" startleft="353" startheight="34" startwidth="1123" compid="homePageUpMessage">
                        <!--资讯-->
                        <div class="layout grid_m0">
                            <div class="y_catatit"><h2><strong>新闻资讯</strong></h2></div>
                            <div class="box-bd">
                                <ul class="news-list clearfix">
                                <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <li class="news-item">
                                        <div class="figure figure-img">
                                            <a href="<?php echo url('newscontent',['id'=>$vo['id']]); ?>" >
                                                <img src="/shumei/public<?php echo $vo['image']; ?>">
                                                <span class="recom">
								  	<img src="/shumei/public/assets/picture/recommend_ico.png">
								  </span>
                                            </a>
                                        </div>
                                        <h3 class="title"><?php echo $vo['title']; ?> </h3>
                                        <p class="desc"><?php echo $vo['keyword']; ?></p>
                                    </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                        </div>
                        <!--资讯 end-->
                    </div>
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
</html>