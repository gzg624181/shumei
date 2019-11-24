var jsContextPath= getContextPath();
function getContextPath() {
    var pathName = document.location.pathname;
    var index = pathName.substr(1).indexOf("/");
    var result = pathName.substr(0,index+1);
    if(result == "/sysback"){
    	return "";
    }
    return "";
}
$(function(){
	
	loadAjaxCart();
	
	//$("[id^='addstock_']").click(function(){			
	$("#shoppingCart").on("click", "[id^='addstock_']", function(){	
			var operId = $(this).attr("id") ;					
						
			var stockStr = operId.replace("addstock_","stock_") ;			
			var changeNum = $("#"+stockStr).val() ;			
			
			//调用异步更新数量，计算价格			
			ajaxChangeNum(operId ,changeNum) ;
	})
	
	//$("[id^='reducestock_']").click(function(){	
	$("#shoppingCart").on("click", "[id^='reducestock_']", function(){			
			var operId = $(this).attr("id") ;								
			var stockStr = operId.replace("reducestock_","stock_") ;			
			var changeNum = $("#"+stockStr).val() ;
			if(parseInt(changeNum)==1) {
				return ;
			}
			
			//调用异步更新数量，计算价格			
			ajaxChangeNum(operId ,changeNum) ;
	})
	
	//弹出确认是否删除框
	$("#shoppingCart").on("click", "[id^='remove_']", function(){	
			var operId = $(this).attr("id") ;							
			
			//调用异步更新数量，计算价格		
			ajaxRemove(operId) ;
	})

	//购物车商品全选	
	$("#shoppingCart").on("click", "[id='CheckAll']", function(){		
		var flag = $(this).prop("checked"); 					
		if(flag) {			
			$(':checkbox').prop('checked',true); 	
		}else{			 			
			$(':checkbox').prop('checked',false); 	
		}	
		ajaxChangeChoose("allRecords" ,flag) ;
	}) 
		
	$("#shoppingCart").on("blur", "[id^='stock_']", function(){				
		var operId = $(this).attr("id") ;		
		var buyNum = $(this).val().replace(/[^\d]/g, '');
		if(buyNum == "") {
			buyNum = 1 ;
		}		
		$(this).val(buyNum);			
		ajaxChangeNum(operId ,buyNum) ;	
	})
	
	//购物车商户复选框选中全选			
	$("#shoppingCart").on("click", "[id^='store_']", function(){	
		var flag = $(this).prop("checked"); 	
		var operId = $(this).attr("id") ;			
		var operationId = operId.replace("store_" ,"product_") ;		
		if(flag) {
			$("[id^='"+operationId+"']").prop('checked',true); 		
		}	else{
			$("[id^='"+operationId+"']").prop('checked',false); 		
		}
		
		var productIds = "" ;
		$("[id^='"+operationId+"']").each(function(index){ 
			var productCheckId = $(this).attr("id") ;	
			productIds = productCheckId+";"+productIds ;
		})			

		ajaxChangeChoose(productIds ,flag) ;
	}) 
	
	//购物车商品选中框操作
	$("#shoppingCart").on("click", "[id^='product_']", function(){			
			var operId = $(this).attr("id") ;						
			var flag = $(this).prop("checked"); 			
			
			ajaxChangeChoose(operId ,flag) ;		
	})
		
	//购物车去结算
	//1.判断是否登录，如果未登录，则弹出登录框
	//2.如果已登录，则进入下一步
	$("#shoppingCart").on("click", "[id^='goBlance']", function(){
			var loginUrl = jsContextPath+"/cart/isLogin"	
			$.get(loginUrl,{ranNum:Math.random()} ,function(data){
				if("0"==data) {
					//弹出登录框
					is_right_cart_buy="true";
					$("#modal-login-form").modal();
				}else{
					$("#cartForm").submit() ;
				}
			})	
	})
	
	$(".y_topcart").on("click", "[id^='goBlance']", function(){
			var loginUrl = jsContextPath+"/cart/isLogin"	
			$.get(loginUrl,{ranNum:Math.random()} ,function(data){
				if("0"==data) {
					//弹出登录框
					$("#modal-login-form").modal();
				}else{
					$("#cartForm").submit() ;
				}
			})	
	})
	
	//加载 购物车
	$("#w_cart").click(function(){
			loadAjaxCart();
	});	

})

//页面修改购买数量
function ajaxChangeNum(operId ,changeNum) {		
	//alert("${pageContext.request.contextPath}") ;
	var changeNumUrl = jsContextPath+"/cart/ajaxchangeNums" ;			
	$.post(changeNumUrl,{productIdAndAttrId:operId,changeNum:changeNum,ranNum:Math.random()} ,function(data){
			$("#shoppingCart").addClass("y_rtmsshow");
			$("#shoppingCart").html(data) ;		
	})
}

//删除购物车中的商品
function ajaxRemove(operId) {		
	//alert("${pageContext.request.contextPath}") ;
	var changeNumUrl = jsContextPath+"/cart/ajaxremove" ;			
	$.post(changeNumUrl,{productIdAndAttrId:operId,ranNum:Math.random()} ,function(data){
			$("#shoppingCart").html(data) ;		
	})
}

//复选框是否选中
function ajaxChangeChoose(operId ,flag) {		
	//alert("${pageContext.request.contextPath}") ;
	var changeNumUrl = jsContextPath+"/cart/ajaxchangeChoose" ;			
	$.post(changeNumUrl,{productIdAndAttrId:operId,chooseState:flag ,ranNum:Math.random()} ,function(data){
			$("#shoppingCart").html(data) ;		
	})
}

//加载右侧购物车
function loadAjaxCart(){
	var url = jsContextPath+"/cart/ajaxcartshow" ;
	$.post(url,function(data){
		$("#shoppingCart").html(data);	
	});			
}


