
		<title>退款申请</title>
		<script src="<?php echo CDN_URL ?>js/rem.js"></script>
		<link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css"/>
		<link rel="stylesheet" href="<?php echo CDN_URL ?>css/refund.css"/>

		<div class="box">
			<div class="placeholder-line"></div>
			<div class="refund-goods-img bgc">
				<div class="goods-title">
					<div class="refund-item">退款商品</div>
					<div class="explain"><span>调整</span></div>
				</div>
				<div class="imgs clearfix">
					<img src="<?php echo CDN_URL ?>media/icon120@3x.png" alt=""/>
					<img src="<?php echo CDN_URL ?>media/icon120@3x.png" alt=""/>
					<img src="<?php echo CDN_URL ?>media/icon120@3x.png" alt=""/>
					<img src="<?php echo CDN_URL ?>media/icon120@3x.png" alt=""/>
					<img src="<?php echo CDN_URL ?>media/icon120@3x.png" alt=""/>
					<img src="<?php echo CDN_URL ?>media/icon120@3x.png" alt=""/>
				</div>
			</div>
			<div class="refund-money bgc">
				<div class="money-title">退款金额<span>¥999.00</span></div>
				<div class="money-message">实际金额与商家协商</div>
			</div>
			<div class="bgc">
				<div class="goods-status">
					<span>货物状态</span>
					<span class="item-status"><i class="icon-un-selected"></i>已收货</span>
					<span class="item-status"><i class="icon-xuanzhong"></i>未收货</span>
				</div>
				<div class="refund-money" style="padding: 0.32rem 0">
					<div class="money-title">退款原因</div>
					<div class="money-message">不想要了<i class="icon-Arrow"></i></div>
				</div>
			</div>
			<div class="refund-goods-img bgc">
				<div class="goods-title">
					<div class="refund-item">相关照片/截图</div>
				</div>
				<div class="imgs clearfix">
					<div class="upLoaderBtn">
						<input class="upLoader" type="file" multiple="multiple" name='file' onchange="upfload(this,'currentAfter')"/>
					</div>
				</div>
			</div>
			<div class="bgc" style="padding: 0.3rem 0.2rem">
				<textarea class="related-description" name="" id="" placeholder="请输入相关描述"></textarea>
			</div>
			<button class="submit-refund">提交申请</button>
		</div>
		<script src="<?php echo CDN_URL ?>js/hash.js"></script>
		<script src="<?php echo CDN_URL ?>js/jquery-3.2.1.min.js"></script>
		<script>
			var that ='';
			var biz = '222';//传入
			var str='';
			$(function(){
				that=$('.upLoaderBtn');
				$('.item-status').on('click',function(e){
					$('.item-status').children('i').addClass('icon-un-selected').removeClass('icon-xuanzhong');
					$(this).children('i').addClass('icon-xuanzhong').removeClass('icon-un-selected');
				})

			});

		</script>
		<script src="<?php echo CDN_URL ?>js/uploadImg.js"></script>

