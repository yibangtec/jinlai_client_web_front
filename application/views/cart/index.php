<style>
/*input.check{
	background:url(<?php echo CDN_URL ?>media/cart/icon/icon_radio3.png) no-repeat center left;  
	 background-size: cover;
    position: absolute;
    top: 50%;
    left: 10px;
    margin-top: -.21rem;
    width: .42rem;
    height: .42rem;
 }
 input.check:checked{
	background:url(<?php echo CDN_URL ?>media/cart/icon/icon_radio4.png) no-repeat center left;
	background-size:contain;
	margin-top: -.21rem;
    width: .42rem;
    height: .42rem;
	}
input.goodsCheck:checked{
	background:url(<?php echo CDN_URL ?>media/cart/icon/icon_radio4.png) no-repeat center left;
	background-size:contain
	}*/
.shop-info-text h4 {
	width: 3.92rem;
    overflow: hidden;
    line-height: .3rem;
    height: .58rem;

}
.item{
	padding-bottom: 2.5rem;
}
</style>

<?php
    // 应用中不显示底部导航栏
    if (
        ($this->user_agent['is_ios'] === FALSE && $this->user_agent['is_android'] === FALSE)
        || $this->user_agent['is_wechat'] === TRUE
    ):
?>
	<!--底部tab切换区域-->
	<div class="tabWrap fiex">
		<div class="tabbar auto">
			<div class="column">
				<a href="<?php echo BASE_URL ?>" target="_self">
				<div class="itemmenulist">
					<i class="homeIcon homeIcon1"></i>
					<span class="text">主页</span>
				</div>
				</a>
				<a href="<?php echo BASE_URL ?>item_category" target="_self">
				<div class="itemmenulist">
					<i class="homeFenlei"></i>
					<span class="text">分类</span>
				</div>
				</a>
				<a href="<?php echo BASE_URL ?>member_biz" target="_self">
				<div class="itemmenulist">
					<i class="homeHuiyuan"></i>
					<span class="text">会员</span>
				</div>
				</a>
				<a href="<?php echo BASE_URL ?>cart" target="_self">
				<div class="itemmenulist">
					<i class="homeGouwuche homeGouwuche1"></i>
					<span class="text"  style="color: #ff753e;">购物车</span>
				</div>
				</a>
				<a href="<?php echo BASE_URL ?>mine" target="_self">
				<div class="itemmenulist">
					<i class="homeWode"></i>
					<span class="text">我的</span>
				</div>
				</a>
			</div>
		</div>
    </div>
    
    <div class="item">
        <div class="payment-bar">
            <div class="all-checkbox fl"><input type="checkbox" class="check goods-check" id="AllCheck">
                <span class="allchecktext">全选<span>
            </div>
            <div class="shop-total fl">
                <strong>合计：<span>¥</span><i class="total" id="AllTotal">0.00</i></strong>
                <p id="nofreight">不含运费</p>
            </div>
            <a href="###" class="settlement fr">结算</a>
        </div>
    </div>
<?php endif ?>


<script src="<?php echo CDN_URL ?>js/jqm.js"></script>
<script>
	var isChanging = false;
	$(function(){
	    var params = common_params;
	    var newShopInfo;
	    
	    //请求下购物车最新的商品信息,尤其是重复的商品数量
	    $('.settlement').on('click',function(){
	    	if($(this).attr('href') == '###'){
	    		alert('请先勾选要添加到购物车的商品');
	    		return;
	    	}
	    })
	    $.ajax({
	    	type:"post",
	    	url:api_url+"cart/sync_down",
	    	dataType : 'json',
	    	data :{app_type:'client',id:user_id},
	    	async : false,
	    	success : function(res){
	    		newShopInfo = res.content.cart_string.split(',');
	    	}
	    });
	 
		$.ajax({
		url: api_url + 'cart/index',
		type: 'post',
		dataType: 'json',
		data : params,
	success : function(res){
		for (var i = 0;i<res.content.order_items.length;i++) {
			var biz_name = res.content.order_items[i].biz_name;
			var biz_img = media_url+"biz/" + res.content.order_items[i].biz_url_logo;
			var list = '<div class="my-address-list wid710 auto border20 mt20 bgfff"><div class="shopping"><div class="shop-group-item"><div class="touch"><div class="buycarshoptitle"><div class="shop-name clearfix"><input type="checkbox" name="itemShopall" class="check goods-check shopCheck"><h4><img src="'+biz_img+'" /></h4><a href="'+base_url+'biz/detail?id='+res.content.order_items[i].biz_id+'" ><h3 class="fl">'+biz_name+'<i class="icon-Arrow"></i></h3></a></div></div></div></div></div></div>';
			$('.item').append(list);
			for (var j = 0;j < res.content.order_items[i].order_items.length;j++ ) {
			    var order_item = res.content.order_items[i].order_items[j];
			    //console.log(order_item);

				var name = order_item.name;
				var price = order_item.price;
				var unit_name = order_item.unit_name;
				let _current_goods_num = order_item.count;

                // 生成订单所含商品主图URL
                var item_image_url = (order_item.item_image.indexOf('http') === -1)? media_url+'item/'+order_item.item_image: order_item.item_image;
				var item_id = res.content.order_items[i].order_items[j].item_id;
				for (var k = 0;k < newShopInfo.length;k++) {
				   	//取出每一组数据,如果有多个商品,更新视图
				   	if(item_id == newShopInfo[k].split('|')[1]){
				   	//if(sku_id == newShopInfo[k].split('|')[2]){
				   		var itemList = '<div class="itemlist" data="' + order_item.sku_id +'"><div class="goodslist clearfix"><div class="shop-info clearfix"><input type="checkbox" name="item" class="check goods-check goodsCheck"><div class="shop-info-img"><a href="'+base_url+'item/detail?id='+item_id+'" target="_self"><img src="'+item_image_url+'" /></a></div><div class="shop-info-text fl"><input type="hidden" value="' + order_item.biz_id + '" /><a href="'+base_url+'item/detail?id='+item_id+'" target="_self"><h4>'+name+'</h4></a><div class="shop-price"><div class="shop-pices">￥<b class="price">'+price+'</b>/'+unit_name+'</div><div class="shop-arithmetic">';
				   		let num = newShopInfo[k].split('|')[3];
				   		if (parseInt(num) > 1) {
				   			itemList +='<a href="javascript:;" class="minus fl"  item=' + item_id + '><i class="icon-jian icon-jian-active" style="font-size: .44rem;">';
				   		} else {
				   			itemList +='<a href="javascript:;" class="minus fl"  item=' + item_id + '><i class="icon-jian" style="font-size: .44rem;">';
				   		}
				   		
				   		itemList +='</i></a><input pre="'+_current_goods_num+'" item="' + item_id + '" class="num fl" type="number" step="1" min="1" max="99" value="'+_current_goods_num+'" /><a href="javascript:;" class="plus active fl" item="' + item_id + '"><i class="icon-add-add-red" style="font-size: .44rem;"></i></a></div></div></div></div><div class="shopPrice">本店总计：￥<span class="shop-total-amount ShopTotal">0.00</span></div></div><a href="javascript:;" class="remove">删除</a></div>';
				   	}
				   		
				}
				$('.touch').eq(i).append(itemList);
			}
		}
		if($('.item .my-address-list').length == 0){
			var oSpan = '<img src="'+cdn_url+'media/home/nocart.png" style="width:4rem;margin:0 auto;margin-top:2rem;display:block;"><span style="display:block;font-size:.26rem;width:100%;text-align:center;color:#3e3a39;padding-top:.4rem">亲,您的购物车里什么都没有......</span><a href="'+base_url+'" target="_self" style="display: block;width: 1.5rem;height: .5rem;border: 1px solid #f6964a;margin: .3rem auto;font-size: .26rem;text-align: center;line-height: .5rem;color: #f6964a;border-radius: .1rem;">去逛逛叭</a>'
			$('.item').append(oSpan);
			$('.payment-bar').hide();
		};



		$(".minus").click(function() {
		
		updateCart($(this), -1, 'one')
	});

	$(".plus").click(function() {
		updateCart($(this), 1, 'one')
		
	});
	
	$(".num").bind('blur', function(){
		let numStr = $(this).val();
		//回车执行查询
		let preVal = parseInt($(this).attr('pre'));
		if (numStr == '') {
			$(this).val(preVal);
			alert('至少为1件！');
			return true;
		}
		if (isNaN(numStr) == true) {
			$(this).val(preVal);
			alert('至少为1件！');
			return true;
		}
		let newVal = parseInt(numStr);
		if (newVal == 0 || newVal > 99){
			$(this).val(preVal);
			alert('请填写正确的数量！');
			return true;
		}
		
		if (newVal != preVal) {
			updateCart($(this), parseInt($(this).val()), 'set');
		}
	});

	function updateCart(domObj, changeNum, type){
		if (isChanging) {
			alert('您的操作太快啦');
			return false;
		}
		let itemid = domObj.attr('item');
		if (!itemid) {
			return false;
		}
		isChanging = true;
		let all_str = newShopInfo;
		let t = domObj.parent().find(".num");
		let intNum = parseInt(t.val())
		let afterNum = changeNum;
		if (type == 'one') {
			afterNum = intNum + changeNum
		}
		if(afterNum < 1) {
			isChanging = false;
			return false;
		}
		for (let i = 0; i <= all_str.length; i++){
			if (all_str[i].indexOf(itemid) >= 0) {
				let arr = all_str[i].split('|');
				all_str[i] = arr[0] + '|' + itemid + '|0|' + afterNum;
				console.log(arr[0] + '|' + itemid + '|0|' + afterNum);
				break;
			}
		}
		$.ajax({
	    	type:"post",
	    	url:api_url+"cart/sync_up",
	    	dataType : 'json',
	    	data :{app_type:'client',op_type:'reduce',id:user_id, name: 'cart_string', value: all_str.join(',')},
	    	success : function(res){
	    		if (res.status == 200) {
					t.text(afterNum)
					if (afterNum <= 1) {
						domObj.find("i").removeClass('icon-jian-active');
					} else {
						domObj.siblings(".minus").eq(0).find("i").addClass('icon-jian-active')
						//domObj.find("i").addClass('icon-jian-active');
					}
					t.val(afterNum)
					t.attr('pre', afterNum);
					TotalPrice()
	    		} else {
	    			if (res.status == 434) {
	    				alert(res.content.error.message);
	    				t.val(t.attr('pre'));
	    			}
	    		}
	    		isChanging = false;
	    	}
	    });
	}
	var checkFlag = 0;
	//最后添加进购物车的数组
	var finalNum = [];
	$(".goodsCheck").click(function(event) {
		var goods = $(this).closest(".shop-group-item").find(".goodsCheck");
		var goodsC = $(this).closest(".shop-group-item").find(".goodsCheck:checked");
		var Shops = $(this).closest(".shop-group-item").find(".shopCheck");
		//如果当前点击的是选中状态那么就取得要加入购物车的csv
		if($(this).prop('checked') == true){
			var url = $(this).siblings('.shop-info-text').find('a').attr('href'); 
			var loc = url.substring(url.lastIndexOf('=')+1, url.length);
			var shopNumList = $(this).siblings('.shop-info-text').find('.shop-arithmetic').find('.num').val();
			console.log(shopNumList);
			finalNum.push('1' + '|' + loc + '|0|' + shopNumList);
			$('.settlement').css('background','#ff5353');
			
		}
		else{
			var url = $(this).siblings('.shop-info-text').find('a').attr('href'); 
			var loc = url.substring(url.lastIndexOf('=')+1, url.length);
			var shopNumList = $(this).siblings('.shop-info-text').find('.shop-arithmetic').find('.num').val();
			var delShoplist = '1' + '|' + loc + '|0|' + shopNumList;
			for (var i = 0;i <finalNum.length;i++) {
				if(delShoplist == finalNum[i]){
					finalNum.splice(i,1);
				}
				
			}
		}
		//选完之后把cartsting传过去
		var curCartList = base_url+'order/create?cart_string=' + finalNum.join();
	    $('.settlement').attr('href',curCartList);
		if (goods.length == goodsC.length) {
			Shops.prop("checked", true);
			if ($(".shopCheck").length == $(".shopCheck:checked").length) {
				$("#AllCheck").prop("checked", true);
				TotalPrice()
			} else {
				$("#AllCheck").prop("checked", false);
				TotalPrice()
			}
		} else {
			Shops.prop("checked", false);
			$("#AllCheck").prop("checked", false);
			TotalPrice()
		}
	});
	$(".shopCheck").click(function() {
		$('.settlement').css('background','#ff5353');
		if ($(this).prop("checked") == true) {
			//如果在没有点击checked的情况下加入数组
			for (var i = 0;i < $(this).parents(".shop-group-item").find(".goodsCheck").length;i++) {
				if($(this).parents(".shop-group-item").find(".goodsCheck").eq(i).prop("checked") == false){
						var url = $(this).parents('.shop-group-item').find('.itemlist').eq(i).find('.shop-info-img').find('a').attr('href'); 
						var loc = url.substring(url.lastIndexOf('=')+1, url.length);
						var shopNumList = $(this).parents('.shop-group-item').find('.itemlist').eq(i).find('.shop-arithmetic').find('.num').val();
						finalNum.push('1' + '|' + loc + '|0|' + shopNumList);
				};
			}
			$(this).parents(".shop-group-item").find(".goods-check").prop("checked", true);
			if ($(".shopCheck").length == $(".shopCheck:checked").length) {
				$("#AllCheck").prop("checked", true);
				TotalPrice()
			} else {
				$("#AllCheck").prop("checked", false);
				TotalPrice()
			}
		} else {
			//对比删除数组里面的商品
			var delShopListArr = [];
				for (var i = 0;i < $(this).parents(".shop-group-item").find(".goodsCheck").length;i++) {
			var url = $(this).parents('.shop-group-item').find('.itemlist').eq(i).find('.shop-info-img').find('a').attr('href'); ; 
			var loc = url.substring(url.lastIndexOf('=')+1, url.length);
			var shopNumList = $(this).parents('.shop-group-item').find('.itemlist').eq(i).find('.shop-arithmetic').find('.num').val();
			var delShoplist = '1' + '|' + loc + '|0|' + shopNumList;
			delShopListArr.push(delShoplist);
			}
			console.log(delShopListArr);
			
			
			for (var i = 0;i <finalNum.length;i++) {
				for (var k = 0;k <delShopListArr.length;k++) {
					if(delShopListArr[k] == finalNum[i]){
						finalNum.splice(i,1);
					}
			}
				
			}
			$(this).parents(".shop-group-item").find(".goods-check").prop("checked", false);
			$("#AllCheck").prop("checked", false);
			TotalPrice()
		}
		//选完之后把cartsting传过去
		var curCartList = base_url+'order/create?cart_string=' + finalNum.join();
	    $('.settlement').attr('href',curCartList);
	});
	$("#AllCheck").click(function() {
		//如果是全选的,就让所有的全部循环进数组
		$('.settlement').css('background','#ff5353');
		if ($(this).prop("checked") == true) {
			finalNum = [];
				for (var i = 0;i < $('.shop-info-img').length;i++) {
			var allCartSelect = $('.shop-info-img').eq(i).find('a').attr('href');
			var allCartSelectNum = $('.shop-arithmetic').eq(i).find('.num').val();
			var loc = allCartSelect.substring(allCartSelect.lastIndexOf('=')+1, allCartSelect.length);
			//把数组清空
			finalNum.push('1|' + loc + '|0|' + allCartSelectNum);
		}
			$(".goods-check").prop("checked", true);
			TotalPrice()
		} else {
			$('.settlement').css('background','#ccc');
			finalNum = [];
			$(".goods-check").prop("checked", false);
			TotalPrice()
		}
		//选完之后把cartsting传过去
		console.log(finalNum.join());
		var curCartList = base_url+'order/create?cart_string=' + finalNum.join();
	    $('.settlement').attr('href',curCartList);
		$(".shopCheck").change()
	});
	var shopPrice = [];
	var testlist  = [];
	var shopIndex = 0;
	function TotalPrice() {
		shopPrice = [];
		shopIndex = 0;
		var allprice = 0;
		$(".shop-group-item").each(function() {
			var oprice = 0;
			$(this).find(".goodsCheck").each(function() {
				if ($(this).is(":checked")) {
					var num = parseInt($(this).parents(".shop-info").find(".num").val());
					var price = parseFloat($(this).parents(".shop-info").find(".price").text());
					var total = price * num;
					oprice += total

					// $("#nofreight").text(oprice)
				}
	
				$(this).closest(".shop-group-item").find(".ShopTotal").text(oprice.toFixed(2));
				shopPrice[shopIndex] = oprice.toFixed(2);
			});
			shopIndex++;
		});
		for(let j = 0; j < shopIndex; j ++){
			allprice += Math.ceil(shopPrice[j] * 100) / 100;
		}
		$("#AllTotal").text(allprice.toFixed(2));
	}

	$(".itemlist").on("swipeleft", function() {
		$(".itemlist").addClass("unselected");
		$(".itemlist").removeClass("selected");
		$(this).addClass("selected");
		$(this).removeClass("unselected");
		var that = $(this);
		$(this).find("a.remove").on("click", function() {
			var sku = that.attr('data');
			if (sku == 'undefined') {
				sku = 0;
			}
			//删除购物车
			var delCartHref = $(this).siblings('.goodslist').find('.shop-info-text').find('a').attr('href');
			var delBizid = $(this).siblings('.goodslist').find('.shop-info-text').find('input').val();
			var delCartText = $(this).siblings('.goodslist').find('.shop-arithmetic').find('.num').val();
			
			var loc = delCartHref.substring(delCartHref.lastIndexOf('=')+1, delCartHref.length);
			//要删除的数据拼接
			var delCartNum = delBizid + '|' + loc + '|' + sku + '|' + delCartText; 
			for (var i = 0;i < finalNum.length;i++) {
				if(finalNum[i] == delCartNum){
					//当删除的时候,数组里面也删除
					finalNum.splice(i,1);
				}
			}
			for (var i = 0;i < newShopInfo.length;i++) {
				if(delCartNum == newShopInfo[i]){
					newShopInfo.splice(i,1);
				}
			}
			var curCartList = base_url+'order/create?cart_string=' + finalNum.join();
	    	$('.settlement').attr('href',curCartList);
			$.ajax({
				type:"post",
				url:api_url+"cart/sync_up",
				async:false,
				dataType : 'json',
				data : {app_type:'client',name : 'cart_string',id:user_id,value:newShopInfo.join()},
				success : function(res){
					console.log(res);
				}
			});
			var touchId = $(this).parents(".itemlist");
			if (touchId.siblings().length - 1 == 0) {
				touchId.parents(".touch").parents(".shop-group-item").remove();
				TotalPrice()
			}
			TotalPrice();
			touchId.css("border", "0");
			touchId.stop().animate({
				height: "0",
				margin: "0"
			}, 300, function() {
				$(this).remove();
				TotalPrice()
			});
			//删除购物车
		})
	}).on("swiperight", function() {
		$(this).parents(".touch").find(".itemlist").addClass("unselected")
	});
	}

});
		
	});


	
	
	
</script>

