<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\phpStudy\PHPTutorial\WWW\fa\public/../application/index\view\index\help.html";i:1574501206;}*/ ?>




<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>700°商城 - 帮助中心首页</title>
    <meta name="description" content="帮助中心首页">
    <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/fa/public/assets/css/bootstrap.min_5.css">
    <link rel="stylesheet" href="/fa/public/assets/css/font-awesome.min_5.css">
    <link rel="stylesheet" href="/fa/public/assets/css/animate.css">
    <link rel="stylesheet" href="/fa/public/assets/css/global_5.css">
    <link rel="stylesheet" href="/fa/public/assets/css/information.css">
    <link rel="stylesheet" href="/fa/public/assets/css/flexslider.css">
    <!-- 字体图标ie7兼容性处理 -->
    <!--[if lt IE 8]>
    <link rel="stylesheet" href="/fa/public/assets/css/font-awesome-ie7.min_5.css">
    <![endif]-->


    <!--- jQuery -->
    <script src="/fa/public/assets/js/jquery.min_4.js"></script>
    <!-- Validation 表单验证插件-->
    <script src="/fa/public/assets/js/jquery.validate.min_4.js"></script>

    <!--[if lt IE 9]>
    <script src="/fa/public/assets/js/respond.min_4.js"></script>
    <![endif]-->
    <script src="/fa/public/assets/js/bootstrap_4.js"></script>
    <script src="/fa/public/assets/js/aebiz_global-0.1_4.js"></script>
    <script src="/fa/public/assets/js/jquery.hoverintent.min.js"></script>
    <script src="/fa/public/assets/js/jquery.easing.min.js"></script>
    <script src="/fa/public/assets/js/jquery.flexslider-min_4.js"></script>
    <!-- Favicon and Apple Icons -->
    <link rel="icon" type="image/png" href="//fa/public/assets/images/icons/icon.png">
</head>

<body>


<!-- jQuery -->
<!-- colorbox -->
<!--è¿åé¡¶é¨ãè°æ¥é®å·-->







<link rel="stylesheet" href="/fa/public/assets/css/rightsuspension_5.css">
<script src="/fa/public/assets/js/ajaxcart_4.js"></script>

<!-- Validation 表单验证插件-->
<script src="/fa/public/assets/js/jquery.validate.min_4.js"></script>
<script src="/fa/public/assets/js/md5_4.js"></script>
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
                        <img src="/fa/public/assets/picture/online-tool-sj_4.png">
                        <p class="ou-txt">700度手机版</p>
                    </div>
                    <div class="flor">
                        <img src="/fa/public/assets/picture/online-tool-wx_4.png">
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


<!-- <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?298cb67ad22698d5e0328eef0b272a4c";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script> -->

<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?80f766aef233b6332e9a7ad56561626d";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

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
    function openCustomerService(){
        window.open("http://v1.live800.com/live800/chatClient/chatbox.jsp?companyID=776940&configID=43779&jid=1902871801");
    }
</script>

<!-- <div class="y_rtfixbx">
	<div class="y_ifixed y_nologin">
		<div class="y_ifixbox">
			<div class="y_userbox">
				<div class="y_rtbtn y_userbtn" ><i class="fa fa-user"></i></div>
				会员已登陆状态
				<div class="y_rtbtn y_userbtn add-tooltip"><a class="y_pic add-tooltip" href="#" data-toggle="tooltip" data-placement="left" title="全网会员名"><img src="/fa/public/assets/picture/user2_1.png"></a></div>
			</div>

			<div class="add-tooltip" data-toggle="tooltip" data-placement="left" style="cursor:pointer;background:#000;position: absolute;bottom: 140px;left: 0" title="联系客服">
	            <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3460227840&site=qq&menu=yes"><img src="/fa/public/assets/picture/qqservice_4.png" style="width: 35px;"></a>
            </div>

			<div class="y_rtbtn y_rtlove add-tooltip" data-toggle="tooltip" data-placement="left" title="我的收藏"></div>
			<a class="y_rtbtn y_sugges add-tooltip" href="/questionnairesurvey/toQuestionnaireSurvey" data-toggle="tooltip" data-placement="left" title="调查问卷"></a>
		</div>
		<div class="y_rtcart" id="w_cart">
			<b></b>
			<p class="y_rcatnm">购物车</p>
			<span class="y_rcatsize" id="cartsTotal">0</span>
			<div class="y_rtline"></div>
		</div>
		<div id="baidusq" style="margin:280px 0 15px !important;height:135px;width:35px;cursor:pointer;transition:all 0.5s;background-color:#000;position:absolute;left:0;top:0;" onClick="window.open('http://p.qiao.baidu.com//im/index?siteid=9114593&ucid=20903751','newwindow','height=600,width=800,top=50,left=100,toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no, status=no');">
			<b></b>
			<p class="y_rcatnm">联系客服</p>
			<div class="y_rtline"></div>
		</div>
		<p class="y_rtbtn y_totop add-tooltip" data-toggle="tooltip" data-placement="left" title="返回顶部"></p>
	右侧登录
<div class="y_rtdlbox">
	<form id="domainForm222" action="" method="get" class='form-horizontal form-bordered form-validate3' >
		<input type="hidden" id="hasVilidateCode1" name="hasVilidateCode" value="false">
		<div class="alert alert-danger" style="display:none;"></div>
		<span class="y_rdltit">帐号</span>
		<input type="text" class="form-control" id="loginName1" name="loginName" placeholder="手机号/邮箱/用户名">
		<span class="y_rdltit">密码</span>
		<input type="password" class="form-control" id="pwd1" name="pwd">
		<div id="code"></div>
		<label class="y_remeve"><input type="checkbox" name="remember" id="remember" >记住我</label>
		<button  id="btn_customer_login" class="btn btn-custom">登 录</button>
		<p class="clearfix"><a class="fl" href="/customerfindpwd/toFindPwdStep1">忘记密码?</a><a class="fr" href="/customerregist/toRegister">免费注册</a></p>
		<b class="y_closedlbx"><i class="fa fa-times"></i></b>
	</form>
</div>
	</div>

	</div>
	<script type="text/javascript" charset="utf-8" src="/fa/public/assets/js/10053757_4.js"></script>
<script>

		$(function(){
			$("#pwd1").blur(function(){
				$("#pwd1").val(hex_md5($("#pwd1").val()));
			});

$(".y_userbtn").click(function() {
		$(".y_rtdlbox").removeClass("y_botshow").css({"display":"block","top":"34px","bottom":"auto"})

		});

				loadFavoteProduct();

		        $('.form-validate3').each(function() {
		            var id = $(this).attr('id');  //获取表单的id
		            $("#" + id).validate({   //验证表单
		                errorElement: 'span',  //输入错误时的提示标签
		                errorClass: 'help-block has-error',  //输入错误时的提示标签类名
		                errorPlacement: function(error, element) {  //输入错误时的提示标签显示的位置
		                    if(element.parents(".input-group").length > 0){
		                    		element.parents(".input-group").after(error);
		                    }else if(element.parents(".y_validatainput").length > 0){
		                    		element.parents(".y_validatainput").after(error);
		                    }
		                    else if(element.parents("label").length > 0) {
		                        element.parents("label").after(error);
		                    }else {
		                        element.after(error);
		                    }
		                },
		                highlight: function(label) {   //输入错误时执行的事件
		                    $(label).closest('.form-group').removeClass('has-error has-success').addClass('has-error');
		                },
		                success: function(label) {   //输入正确时执行的事件
		                    label.addClass('valid').closest('.form-group').removeClass('has-error has-success').addClass('has-success');
		                },
		                onkeyup: function(element) {   //验证元素输入值时按钮松开执行的事件
		                    $(element).valid();
		                },
		                onfocusout: function(element) {   //验证元素失去焦点时进行验证
		                    $(element).valid();
		                },
		                submitHandler: function(form){
		                	login();
		                	//$("#modal-domain").modal('hide');//关闭模态框
						        //    form.submit(); //没有这一句表单不会提交
						        }
		            });
		        });


		        $("#btn_customer_login").on("click",function(){
					login();
				});
		    });


		$('#domainForm222').each(function() {
            var id = $(this).attr('id');  //获取表单的id
            $("#" + id).validate({   //验证表单
                errorElement: 'span',  //输入错误时的提示标签
                errorClass: 'help-block has-error',  //输入错误时的提示标签类名
                errorPlacement: function(error, element) {  //输入错误时的提示标签显示的位置
                    if(element.parents(".input-group").length > 0){
                    		element.parents(".input-group").after(error);
                    }else if(element.parents(".y_validatainput").length > 0){
                    		element.parents(".y_validatainput").after(error);
                    }
                    else if(element.parents("label").length > 0) {
                        element.parents("label").after(error);
                    }else {
                        element.after(error);
                    }
                },
                highlight: function(label) {   //输入错误时执行的事件
                    $(label).closest('.form-group').removeClass('has-error has-success').addClass('has-error');
                },
                success: function(label) {   //输入正确时执行的事件
                    label.addClass('valid').closest('.form-group').removeClass('has-error has-success').addClass('has-success');
                },
                onkeyup: function(element) {   //验证元素输入值时按钮松开执行的事件
                    $(element).valid();
                },
                onfocusout: function(element) {   //验证元素失去焦点时进行验证
                    $(element).valid();
                },
                submitHandler: function(form){
                	login1();
				}
            });
        });


		//加载会员收藏的商品
		function loadFavoteProduct(){
			var url = "/customer/platRightFavoriteProduct";
			$.post(url,{ranNum:Math.random()},
					function(data){
				$(".y_rtlovebx").html(data);
					}
			);
		}

		function login(){
			var loginName = $("#loginName").val();
			var pwd = $("#pwd").val();
			var hasVilidateCode =  $("#hasVilidateCode").val();
			var validateCode =  $("#validateCode").val();
			$.get("/customer/quickRightLogin",
				{
					"loginName":loginName,
					"pwd":pwd,
					"hasVilidateCode":hasVilidateCode,
					"validateCode":validateCode,
					"type":"customer",
					ranNum : Math.random()
				},
				function(data) {
					if(data == "codeNull"){
						$("#error").css("display","block");
						$(".alert").show();
						$(".alert").html("验证码为空!");
					}else if(data == "codeError"){
						$("#error").css("display","block");
						$(".alert").show();
						$(".alert").html("验证码错误!");
					}else if(data == "loginError"){
						$("#error").css("display","block");
						$(".alert").show();
						$(".alert").html("用户名或者密码错误!");
					}else if(data == "hasCode"){
						$("#error").css("display","block");
						$(".alert").show();
						$(".alert").html("用户名或者密码错误!");
						$("#hasVilidateCode").val("true");
						$("#validateCodediv").css("display","block");
						$("#code").html('<span class="y_rdltit">验证码</span><div class="y_yzgrup"><input type="text" class="form-control" id="validateCode" name="validateCode" value=""><img id="validateImg" src="/fa/public/assets/picture/6927733f41eb4f669430143155f79916.gif" onClick="javascript:flushValidateCode();"/><span><span>看不清？<a href="javascript:flushValidateCode();" class="f_color2">换一张</a></span></span></div>');
					}else if(data == "success"){
						$.getJSON("/customer/isLogin",
								function(data) {
									if(data.nickName != null){
										var customerName = data.nickName;
										var head = data.head;
										$("#modal-login-form").modal("hide");
										window.location.reload();
									}else{
										$("#isLogin").html('您好，欢迎来到700度！ <a class="y_mlr5" href="/customer/toLogin">请登录</a> <a class="y_mlr5" href="/customerregist/toRegister">免费注册</a>');
									}
								});
					}
				});
		}

		function login1(){
			var loginName = $("#loginName1").val();
			var pwd = $("#pwd1").val();
			var hasVilidateCode =  $("#hasVilidateCode1").val();
			var validateCode =  $("#validateCode1").val();
			$.get("/customer/quickRightLogin",
				{
					"loginName":loginName,
					"pwd":pwd,
					"hasVilidateCode":hasVilidateCode,
					"validateCode":validateCode,
					"type":"customer",
					ranNum : Math.random()
				},
				function(data) {
					if(data == "codeNull"){
						$("#error").css("display","block");
						$(".alert").show();
						$(".alert").html("验证码为空!");
					}else if(data == "codeError"){
						$("#error").css("display","block");
						$(".alert").show();
						$(".alert").html("验证码错误!");
					}else if(data == "loginError"){
						$("#error").css("display","block");
						$(".alert").show();
						$(".alert").html("用户名或者密码错误!");
					}else if(data == "hasCode"){
						$("#error").css("display","block");
						$(".alert").show();
						$(".alert").html("用户名或者密码错误!");
						$("#hasVilidateCode").val("true");
						$("#code").html('<span class="y_rdltit">验证码</span><div class="y_yzgrup"><input type="text" class="form-control" id="validateCode1" name="validateCode" value=""><img id="validateImg" src="/fa/public/assets/picture/6927733f41eb4f669430143155f79916.gif" onClick="javascript:flushValidateCode();"/><span><span>看不清？<a href="javascript:flushValidateCode();" class="f_color2">换一张</a></span></span></div>');
					}else if(data == "success"){
						$.getJSON("/customer/isLogin",
								function(data) {
									if(data.nickName != null){
										var customerName = data.nickName;
										var head = data.head;
										$("#modal-login-form").modal("hide");
										window.location.reload();
									}else{
										$("#isLogin").html('您好，欢迎来到700度！ <a class="y_mlr5" href="/customer/toLogin">请登录</a> <a class="y_mlr5" href="/customerregist/toRegister">免费注册</a>');
									}
								});
					}
				});
		}
		$(function(){
			$.getJSON("/customer/isLogin",
					{runN:Math.random()},
					function(data) {
						if(data.nickName != null){
							var customerName = data.nickName;
							var head = data.head;
							$("#isLogin").html('HI，<a href="/customer/toIndex">'+customerName+'</a>&nbsp;<a href="/customer/logout">退出</a>');
							$(".y_userbox").html('<div class="y_rtbtn y_userbtn add-tooltip" data-toggle="tooltip" data-placement="left" title="'+customerName+'"><a class="y_pic" href="/customer/toIndex"><img src="'+head+'"></a></div>');
							$(".y_ifixed").addClass("y_haslogoin").removeClass("y_nologin");
						}else{
							$("#isLogin").html('您好，欢迎来到700度！ <a class="y_mlr5" href="/customer/toLogin">请登录</a> <a class="y_mlr5" href="/customerregist/toRegister">免费注册</a>');
						}
					});
		});

		/* 刷新验证码 */
		function flushValidateCode(){
			 var validateImgObject = document.getElementById("validateImg");
			 validateImgObject.src = "/getCustomerLoginCode?time=" + new Date();
		}
		</script> -->
<div id="simpleTop">
</div>
<script>
    //$("#simpleTop").load("/getSimpleTop?productUuid=&keyword=&ranNum=" + Math.random());
    $("#simpleTop").load("/getSimpleTop");
</script>















<div class="main-serch-container">
    <div class="container">
        <h1 class="y_logo">
            <a href="/" title="aebiz"><img src="/fa/public/assets/picture/0000020092_4.fid"></a>
            <span class="logo_txt"><img src="/fa/public/assets/picture/logo_ad.gif"></span>
        </h1>
        <!--nav start-->
        <div class="y_mainnav">
            <ul class="menu clearfix">

                <!-- <li><a href="#">团体险</a></li>
                <li><a href="#">专题</a></li>
                <li><a href="#">服务中心</a></li> -->


                <li >

                    <a href="/dfFront/toStorePage/222e7f84cd7049368ce916d866d03c9c?position=1">


                        首页

                    </a>
                </li>


                <li >

                    <a href="/dfFront/toStorePage/101ad41ffd9249f0ac86af2f56a0f141?position=2">


                        企业保险

                    </a>
                </li>


                <li  class="y_active" >


                    <a href="https://www.700du.cn/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/e0e8d6d276ea41d4a315da656a2f1e93?position=3">

                        帮助中心

                        <span><img src="/fa/public/assets/picture/help5_4.gif"></span>

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

<div id="help-breadcrumb"> <!-- 面包屑 -->
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/" target="_blank">首页</a></li>


            <li><a href="javascript:void(0);" target="_blank">如何筛选产品</a></li>

        </ul>
    </div>
</div>

<div id="help-center">
    <div class="container">
        <div class="row help-container">
            <div class="col-xs-3 col-sm-2 nopaddingl animated fadeInLeft">
                <div class="help-left">
                    <div class="panel-group help-nav">

                        <div class="panel"><!--panel star-->
                            <div class="panel-heading">
                                <h4 data-toggle="collapse" data-target="#panel0">新手指南</h4>
                                <!-- <span class="fa-icon" ><i class="fa fa-minus"></i></span> -->
                            </div>
                            <div id="panel0" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <ul>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/966890616d9848ac96b013fd2904ba39">保险资讯</a></li>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/e0e8d6d276ea41d4a315da656a2f1e93">如何筛选产品</a></li>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/8fa164d134f74a3096b6688eaf7bfaa6">如何登入</a></li>



                                    </ul>
                                </div>
                            </div>
                        </div><!--panel end-->

                        <div class="panel"><!--panel star-->
                            <div class="panel-heading">
                                <h4 data-toggle="collapse" data-target="#panel1">投保指南</h4>
                                <!-- <span class="fa-icon" ><i class="fa fa-minus"></i></span> -->
                            </div>
                            <div id="panel1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <ul>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/d88c77145b794a8aac412a51a7f0bd3f">如何投保</a></li>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/e522baaf2cf9413998a5af7b791f8c84">支付说明</a></li>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/e941aabdcc984666b26108f0354b060b">投保常见问题</a></li>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/91015dfe094e4c4eb960056abec7707b">订单查看</a></li>



                                    </ul>
                                </div>
                            </div>
                        </div><!--panel end-->

                        <div class="panel"><!--panel star-->
                            <div class="panel-heading">
                                <h4 data-toggle="collapse" data-target="#panel2">服务支持</h4>
                                <!-- <span class="fa-icon" ><i class="fa fa-minus"></i></span> -->
                            </div>
                            <div id="panel2" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <ul>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/a9c5e201c7ec415693317fe7d515b6cb">信息披露</a></li>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/bb3b54a8370f4b2ba88f6e5dfa4d8dd1">保全服务</a></li>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/7d0bcea005414fb395c8872684d5a7c6">保单服务</a></li>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/d60ab42d1c424843aec6781e27a1cada">发票服务</a></li>



                                    </ul>
                                </div>
                            </div>
                        </div><!--panel end-->

                        <div class="panel"><!--panel star-->
                            <div class="panel-heading">
                                <h4 data-toggle="collapse" data-target="#panel3">理赔服务</h4>
                                <!-- <span class="fa-icon" ><i class="fa fa-minus"></i></span> -->
                            </div>
                            <div id="panel3" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <ul>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/dedf53c6083f463799f2072ebb7174d8">申请理赔</a></li>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/1744462c0b9f4e7587c14114764f49e5">理赔进度</a></li>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/9a7e1efbee58460e9e0b962a13f996ef">理赔案例</a></li>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/e657e2edd1df4381995104c311eb6685">常见理赔问题</a></li>



                                    </ul>
                                </div>
                            </div>
                        </div><!--panel end-->

                        <div class="panel"><!--panel star-->
                            <div class="panel-heading">
                                <h4 data-toggle="collapse" data-target="#panel4">平台介绍</h4>
                                <!-- <span class="fa-icon" ><i class="fa fa-minus"></i></span> -->
                            </div>
                            <div id="panel4" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <ul>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/c4e121cbd9b04c59b28f5ef8db2846e0">隐私保护</a></li>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/1570e03bb20b40ffa6d9bd66d3d26125">关于700度</a></li>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/48b6f1327f934dcfafe54dd1e48438bd">联系我们</a></li>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/1a876c16c42c4ea484c19eec0180d94b">投诉建议</a></li>



                                    </ul>
                                </div>
                            </div>
                        </div><!--panel end-->

                        <div class="panel"><!--panel star-->
                            <div class="panel-heading">
                                <h4 data-toggle="collapse" data-target="#panel5">资讯中心</h4>
                                <!-- <span class="fa-icon" ><i class="fa fa-minus"></i></span> -->
                            </div>
                            <div id="panel5" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <ul>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/99946af897614af5ad9536437e8855a9">轻松应对常见疾病核保</a></li>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/6253683aafa042e5a7fbed80977c8f3f">商业险应给残疾人打开门</a></li>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/71b593a6ab6f400589e4ce2500673f15">2016保险理赔数据分析</a></li>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/40a7822a423545a19e4e15cdfff8168f">明亚优选寿险发布会 </a></li>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/6ec71e10964f4fa58507a1332e991315"> 医保全国联网要来了</a></li>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/b21a7dac86c64c7abab2b7049b1ce5e8">保监会追究“炒停”行为</a></li>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/fc5e7cfbb8b14092b09e23d0425f256f">第三套生命表</a></li>



                                    </ul>
                                </div>
                            </div>
                        </div><!--panel end-->

                        <div class="panel"><!--panel star-->
                            <div class="panel-heading">
                                <h4 data-toggle="collapse" data-target="#panel6">700度大讲堂</h4>
                                <!-- <span class="fa-icon" ><i class="fa fa-minus"></i></span> -->
                            </div>
                            <div id="panel6" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <ul>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/09572d531ff74cae8d87c383af2e6916">永安乐健一生</a></li>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/9210b01c6aba4f0dbf21175e1deb2489">史带意外险</a></li>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/c29e185ecd874b3cb1ef3067b78757d8"> e生保、泰康住院保</a></li>



                                        <li><i></i><a href="/frontshow/content/help/BottomHelpCenter75bdafe2bc4e4ff1a0a1afe6cf26b467/7585226067e943e9a5316ebf9f766678">中介平台优势与保险营销</a></li>



                                    </ul>
                                </div>
                            </div>
                        </div><!--panel end-->

                    </div>
                </div>
            </div>
            <div class="col-xs-9 col-sm-10 nopaddinglandr animated fadeInUp">

                <div class="box">
                    <h4 class="h4-title">如何筛选产品</h4>
                    <div class="box-content">

                        <div><p><span style="font-size: 18px; color: rgb(0, 0, 0);">方法一、点击首页左边产品类别跳转至相应的险种</span></p><p><span style="font-size: 18px;"><img src="/fa/public/assets/picture/0000030497.fid" title="201704200914169203573709088.png" alt="201704200914169203573709088.png"/></span></p><p><span style="color: rgb(0, 0, 0); font-size: 18px;"><br/></span></p><p><span style="font-size: 18px; color: rgb(0, 0, 0);">根据需求进一步筛选产品</span></p><p><span style="color: rgb(0, 0, 0); font-size: 18px;"><img src="/fa/public/assets/picture/0000027338.fid" title="201704170954159347412459628.png" alt="201704170954159347412459628.png" style="width: 778px; height: 334px;" height="334" width="778"/></span></p><p><span style="font-size: 18px; color: rgb(0, 0, 0);"><br/></span></p><p><span style="font-size: 18px; color: rgb(0, 0, 0);">方法二、在首页右上方搜索框输入产品名称或保险公司等关键字进行搜索</span></p><p><span style="font-size: 18px;"><img src="/fa/public/assets/picture/0000027339.fid" title="201704170954593715360605173.png" alt="201704170954593715360605173.png" style="width: 870px; height: 209px;" height="209" width="870"/></span></p><p><span style="font-size: 18px; color: rgb(0, 0, 0);"><br/></span></p><p><span style="font-size: 18px; color: rgb(0, 0, 0);">根据搜索出的关键字进一步找查相关产品，点击购买即可查看产品详情</span><span style="font-size: 18px;"></span></p><p><img src="/fa/public/assets/picture/0000027340.fid" title="201704170955480850009732769.png" alt="201704170955480850009732769.png" style="width: 784px; height: 504px;" height="504" width="784"/><span style="font-size: 18px;"></span><span style="font-size: 18px;"></span></p></div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        if($(".y_inproduall")!=null){
            $(".y_inproduall").removeClass("y_inproduall").addClass("y_produall");
        }
    })
</script>










<!--底部-->
<div class="footer-bgdark">
    <div class="container">





        <div><div class="container footer-friendlink footer-friendlinkborn"><div class="f_link f_linkcfff"><p style="text-align:center;color:#fff;">友情链接：<a href="http://www.circ.gov.cn/web/site0/" target="_blank">中国保监会</a><a href="http://www.iachina.cn" target="_blank">中国保险行业协会</a><a href="http://finance.qq.com/money/insurance.htm" target="_blank">腾讯保险</a><a href="http://finance.sina.com.cn/money/insurance/" target="_blank">新浪保险</a><a href="http://insurance.jrj.com.cn/" target="_blank">金融界保险</a><a href="http://finance.ce.cn/" target="_blank">中国经济网财经</a><a href="http://www.ibaodian.com/" target="_blank">随身保典</a><a href="http://finance.ifeng.com/" target="_blank">凤凰财经</a><a href="http://www.china-insurance.com/" target="_blank">中国保险网</a><a href="https://700du.tmall.com" target="_blank">明亚天猫旗舰店</a><a href="https://www.bao361.cn/" target="_blank">保险管家</a></p></div></div><div class="site-info" style="padding-bottom:25px;"><div class="container"><div class="info-text" style="color:#fff;text-align:center;line-height:2.4;padding-top:0;"><p>Copyright © 2015 - 2020 700度版权所有 京ICP证150775号<br/><a style="color:#fff" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010502031698" target="_blank">京公网安备 11010502031698号</a> | 未经许可不得转载</p></div></div></div></div><!--底部商城资讯 end--><!--%@-->
    </div><!-- End .container -->
</div><!-- End #footer-bottom -->


<!--返回顶部、调查问卷-->

<!-- END -->








<script>
    // 点击帮助导航信息时 增加和减少按钮的变化
    $('.help-nav .fa-icon').click(function(){
        $(this).find('.fa').toggleClass('fa-minus').toggleClass('fa-plus');
        $(this).toggleClass('active');
    })
</script>

</body>
</html>