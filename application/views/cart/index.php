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
	// 检查当前设备信息
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	$is_wechat = strpos($user_agent, 'MicroMessenger')? TRUE: FALSE;
	$is_ios = ($this->input->get('device_platform') === 'ios' || strpos($user_agent, 'iPhone') || strpos($user_agent, 'iPad'))? TRUE: FALSE;
	$is_android = strpos($user_agent, 'Android')? TRUE: FALSE;
	if (($is_ios === FALSE && $is_android === FALSE) || $is_wechat === TRUE):
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

<?php endif ?>
		<div class="item">
				<div class="payment-bar">
					<div class="all-checkbox fl"><input type="checkbox" class="check goods-check" id="AllCheck">
						<span class="allchecktext">全选<span>
					</div>
					<div class="shop-total fl">
						<strong>合计：<span>¥</span><i class="total" id="AllTotal">0.00</i></strong>
						<p>不含运费</p>
					</div>
					<a href="#" class="settlement fr">结算</a>
				</div>

			</div>
<script type="text/javascript" src="https://cdn.bootcss.com/jquery/2.1.4/jquery.js" ></script>
<script src="<?php echo CDN_URL ?>js/jqm.js"></script>
<script>
	var user_id = <?php echo $this->session->user_id ?>;
	$(document).ready(function(){
		$.ajax({
	url : 'https://api.517ybang.com/cart/index',
	type : 'post',
	dataType:'json',
	data : {app_type:'client',user_id:user_id},
	success : function(res){
		for (var i = 0;i<res.content.order_items.length;i++) {
			var biz_name = res.content.order_items[i].biz_name;
			var biz_img = "https://medias.517ybang.com/biz/" + res.content.order_items[i].biz_url_logo;
			var list = '<div class="my-address-list wid710 auto border20 mt20 bgfff"><div class="shopping"><div class="shop-group-item"><div class="touch"><div class="buycarshoptitle"><div class="shop-name clearfix"><input type="checkbox" name="itemShopall" class="check goods-check shopCheck"><h4><img src="'+biz_img+'" /></h4><h3 class="fl">'+biz_name+'<i class="icon-Arrow"></i></h3></div></div></div></div></div></div>';
			$('.item').append(list);
			for (var j = 0;j < res.content.order_items[i].order_items.length;j++ ) {
				var name = res.content.order_items[i].order_items[j].name;
				var price = res.content.order_items[i].order_items[j].price;
				var unit_name = res.content.order_items[i].order_items[j].unit_name;
				var img_url = "https://medias.517ybang.com/item/" + res.content.order_items[i].order_items[j].item_image;
				var item_id = res.content.order_items[i].order_items[j].item_id;
				var itemList = '<div class="itemlist"><div class="goodslist clearfix"><div class="shop-info clearfix"><input type="checkbox" name="item" class="check goods-check goodsCheck"><div class="shop-info-img"><a href="https://www.517ybang.com/item/detail?id='+item_id+'" target="_self"><img src="'+img_url+'" /></a></div><div class="shop-info-text fl"><a href="https://www.517ybang.com/item/detail?id='+item_id+'" target="_self"><h4>'+name+'</h4></a><div class="shop-price"><div class="shop-pices">￥<b class="price">'+price+'</b>/'+unit_name+'</div><div class="shop-arithmetic"><a href="javascript:;" class="minus fl"><i class="icon-jian" style="font-size: .44rem;"></i></a><span class="num fl" >1</span><a href="javascript:;" class="plus active fl"><i class="icon-add-add-red" style="font-size: .44rem;"></i></a></div></div></div></div><div class="shopPrice">本店总计：￥<span class="shop-total-amount ShopTotal">0.00</span></div></div><a href="javascript:;" class="remove">删除</a></div>';
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
	$(".goodsCheck").click(function(event) {

		var goods = $(this).closest(".shop-group-item").find(".goodsCheck");
		var goodsC = $(this).closest(".shop-group-item").find(".goodsCheck:checked");
		var Shops = $(this).closest(".shop-group-item").find(".shopCheck");
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
		if ($(this).prop("checked") == true) {
			$(this).parents(".shop-group-item").find(".goods-check").prop("checked", true);
			if ($(".shopCheck").length == $(".shopCheck:checked").length) {
				$("#AllCheck").prop("checked", true);
				TotalPrice()
			} else {
				$("#AllCheck").prop("checked", false);
				TotalPrice()
			}
		} else {
			$(this).parents(".shop-group-item").find(".goods-check").prop("checked", false);
			$("#AllCheck").prop("checked", false);
			TotalPrice()
		}
	});
	$("#AllCheck").click(function() {
		if ($(this).prop("checked") == true) {
			$(".goods-check").prop("checked", true);
			TotalPrice()
		} else {
			$(".goods-check").prop("checked", false);
			TotalPrice()
		}
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
			})
		})
	}).on("swiperight", function() {
		$(this).parents(".touch").find(".itemlist").addClass("unselected")
	});
	}

})
	})
	
</script>

