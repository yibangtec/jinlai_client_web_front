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
				<a href="https://www.517ybang.com" target="_self">
				<div class="itemmenulist">
					<i class="homeIcon homeIcon1"></i>
					<span class="text">主页</span>
				</div>
				</a>
				<a href="https://www.517ybang.com/item_category" target="_self">
				<div class="itemmenulist">
					<i class="homeFenlei"></i>
					<span class="text">分类</span>
				</div>
				</a>
				<a href="https://www.517ybang.com/member_biz" target="_self">
				<div class="itemmenulist">
					<i class="homeHuiyuan"></i>
					<span class="text">会员</span>
				</div>
				</a>
				<a href="https://www.517ybang.com/cart" target="_self">
				<div class="itemmenulist">
					<i class="homeGouwuche homeGouwuche1"></i>
					<span class="text"  style="color: #ff753e;">购物车</span>
				</div>
				</a>
				<a href="https://www.517ybang.com/mine" target="_self">
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
                <p>不含运费</p>
            </div>
            <a href="###" class="settlement fr">结算</a>
        </div>
    </div>
<?php endif ?>


<script src="<?php echo CDN_URL ?>js/jqm.js"></script>
<script>
	$(function(){
	    var params = common_params;
	    var user_id = <?php echo $this->session->user_id ?>;
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
	    	url:"https://api.517ybang.com/cart/sync_down",
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
			var biz_img = "https://medias.517ybang.com/biz/" + res.content.order_items[i].biz_url_logo;
			var list = '<div class="my-address-list wid710 auto border20 mt20 bgfff"><div class="shopping"><div class="shop-group-item"><div class="touch"><div class="buycarshoptitle"><div class="shop-name clearfix"><input type="checkbox" name="itemShopall" class="check goods-check shopCheck"><h4><img src="'+biz_img+'" /></h4><h3 class="fl">'+biz_name+'<i class="icon-Arrow"></i></h3></div></div></div></div></div></div>';
			$('.item').append(list);
			for (var j = 0;j < res.content.order_items[i].order_items.length;j++ ) {
			    var order_item = res.content.order_items[i].order_items[j];
			    //console.log(order_item);

				var name = order_item.name;
				var price = order_item.price;
				var unit_name = order_item.unit_name;
                // 生成订单所含商品主图URL
                var item_image_url = (order_item.item_image.indexOf('http') === -1)? media_url+'item/'+order_item.item_image: order_item.item_image;
				var item_id = res.content.order_items[i].order_items[j].item_id;
				  for (var k = 0;k < newShopInfo.length;k++) {
				   	//取出每一组数据,如果有多个商品,更新视图
				   	if(item_id == newShopInfo[k].split('|')[1]){
				   		var itemList = '<div class="itemlist"><div class="goodslist clearfix"><div class="shop-info clearfix"><input type="checkbox" name="item" class="check goods-check goodsCheck"><div class="shop-info-img"><a href="https://www.517ybang.com/item/detail?id='+item_id+'" target="_self"><img src="'+item_image_url+'" /></a></div><div class="shop-info-text fl"><a href="https://www.517ybang.com/item/detail?id='+item_id+'" target="_self"><h4>'+name+'</h4></a><div class="shop-price"><div class="shop-pices">￥<b class="price">'+price+'</b>/'+unit_name+'</div><div class="shop-arithmetic"><a href="javascript:;" class="minus fl"><i class="icon-jian" style="font-size: .44rem;"></i></a><span class="num fl" >'+newShopInfo[k].split('|')[3]+'</span><a href="javascript:;" class="plus active fl"><i class="icon-add-add-red" style="font-size: .44rem;"></i></a></div></div></div></div><div class="shopPrice">本店总计：￥<span class="shop-total-amount ShopTotal">0.00</span></div></div><a href="javascript:;" class="remove">删除</a></div>';
				   	}
				   		
				   }
				$('.touch').eq(i).append(itemList);
			}
		}
		$(".minus").click(function() {
		var t = $(this).parent().find(".num");
		t.text(parseInt(t.text()) - 1);
		if (t.text() <= 1) {
			t.text(1);
			$(this).children("i").removeClass("icon-jian-active")
		}
		TotalPrice()
	});
	$(".plus").click(function() {
		var t = $(this).parent().find(".num");
		t.text(parseInt(t.text()) + 1);
		if (t.text() <= 1) {
			t.text(1)
		}
		$(this).siblings(".minus").children("i").addClass("icon-jian-active");
		TotalPrice()
	});
	
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
			var shopNumList = $(this).siblings('.shop-info-text').find('.shop-arithmetic').find('.num').text();
			console.log(shopNumList);
			finalNum.push('1' + '|' + loc + '|0|' + shopNumList);
			$('.settlement').css('background','#ff5353');
			
		}
		else{
			var url = $(this).siblings('.shop-info-text').find('a').attr('href'); 
			var loc = url.substring(url.lastIndexOf('=')+1, url.length);
			var shopNumList = $(this).siblings('.shop-info-text').find('.shop-arithmetic').find('.num').text();
			var delShoplist = '1' + '|' + loc + '|0|' + shopNumList;
			for (var i = 0;i <finalNum.length;i++) {
				if(delShoplist == finalNum[i]){
					finalNum.splice(i,1);
				}
				
			}
		}
		//选完之后把cartsting传过去
		var curCartList = 'https://www.517ybang.com/order/create?cart_string=' + finalNum.join();
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
						var shopNumList = $(this).parents('.shop-group-item').find('.itemlist').eq(i).find('.shop-arithmetic').find('.num').text();
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
			var shopNumList = $(this).parents('.shop-group-item').find('.itemlist').eq(i).find('.shop-arithmetic').find('.num').text();
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
		var curCartList = 'https://www.517ybang.com/order/create?cart_string=' + finalNum.join();
	    $('.settlement').attr('href',curCartList);
	});
	$("#AllCheck").click(function() {
		//如果是全选的,就让所有的全部循环进数组
		$('.settlement').css('background','#ff5353');
		if ($(this).prop("checked") == true) {
			finalNum = [];
				for (var i = 0;i < $('.shop-info-img').length;i++) {
			var allCartSelect = $('.shop-info-img').eq(i).find('a').attr('href');
			var allCartSelectNum = $('.shop-arithmetic').eq(i).find('.num').text();
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
		var curCartList = 'https://www.517ybang.com/order/create?cart_string=' + finalNum.join();
	    $('.settlement').attr('href',curCartList);
		$(".shopCheck").change()
	});

	function TotalPrice() {
		var allprice = 0;
		$(".shop-group-item").each(function() {
			var oprice = 0;
			$(this).find(".goodsCheck").each(function() {
				if ($(this).is(":checked")) {
					var num = parseInt($(this).parents(".shop-info").find(".num").text());
					var price = parseFloat($(this).parents(".shop-info").find(".price").text());
					var total = price * num;
					oprice += total
				}
				$(this).closest(".shop-group-item").find(".ShopTotal").text(oprice.toFixed(2))
			});
			var oneprice = parseFloat($(this).find(".ShopTotal").text());
			allprice += oneprice
		});
		$("#AllTotal").text(allprice.toFixed(2))
	}
	$(".itemlist").on("swipeleft", function() {
		$(".itemlist").addClass("unselected");
		$(".itemlist").removeClass("selected");
		$(this).addClass("selected");
		$(this).removeClass("unselected");
		$(this).find("a.remove").on("click", function() {
			//删除购物车
			var delCartHref = $(this).siblings('.goodslist').find('.shop-info-text').find('a').attr('href');
			var delCartText = $(this).siblings('.goodslist').find('.shop-arithmetic').text();
			
			var loc = delCartHref.substring(delCartHref.lastIndexOf('=')+1, delCartHref.length);
			//要删除的数据拼接
			var delCartNum = '1|' + loc + '|0|' + delCartText; 
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
			var curCartList = 'https://www.517ybang.com/order/create?cart_string=' + finalNum.join();
	    	$('.settlement').attr('href',curCartList);
			$.ajax({
				type:"post",
				url:"https://api.517ybang.com/cart/sync_up",
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

})
	})
	
</script>

