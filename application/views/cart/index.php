<style>
			input[type="checkbox"]{-webkit-appearance:none;outline: none;border:none}
input.check{
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
	}
input.goodsCheck:checked{
	background:url(<?php echo CDN_URL ?>media/cart/icon/icon_radio4.png) no-repeat center left;
	background-size:contain
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
				
				<div class="my-address-list wid710 auto border20 mt20 bgfff">
					<div class="shopping">
					<div class="shop-group-item">
				    <div class="touch">
				    <!--商家标题-->
					    	<div class="buycarshoptitle">
					    		<div class="shop-name clearfix">
									<input type="checkbox" class="check goods-check shopCheck">
									<h4>
										<img src="<?php echo CDN_URL ?>media/cart/jinlaitit.png" />
									</h4>
									<h3 class="fl">进来自营店
										<i class="icon-Arrow"></i>
									</h3>
								</div>
					    	</div>
					    <div class="itemlist">
						    <div class="goodslist clearfix">
							   <div class="shop-info clearfix">
								<input type="checkbox" class="check goods-check goodsCheck">
								<div class="shop-info-img"><img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png" /></div>
								<div class="shop-info-text fl">
									<h4>云南芒果（约400/个）</h4>
									<div class="shop-price">
										<div class="shop-pices">￥<b class="price">5.8</b>/份</div>
										<div class="shop-arithmetic">
											<a href="javascript:;" class="minus fl">
												<i class="icon-jian" style="font-size: .44rem;"></i>
											</a>
											<span class="num fl" >1</span>
											<a href="javascript:;" class="plus active fl">
												<i class="icon-add-add-red" style="font-size: .44rem;"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
				<div class="shopPrice">本店总计：￥<span class="shop-total-amount ShopTotal">0.00</span></div>
						    </div>
						    <a href="javascript:;" class="remove">删除</a>
					    </div>
					      <div class="itemlist">
						    <div class="goodslist clearfix">
							   <div class="shop-info clearfix">
								<input type="checkbox" class="check goods-check goodsCheck">
								<div class="shop-info-img"><img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png" /></div>
								<div class="shop-info-text fl">
									<h4>云南芒果（约400/个）</h4>
									<div class="shop-price">
										<div class="shop-pices">￥<b class="price">599.8</b>/份</div>
										<div class="shop-arithmetic">
											<a href="javascript:;" class="minus fl">
												<i class="icon-jian" style="font-size: .44rem;"></i>
											</a>
											<span class="num fl" >1</span>
											<a href="javascript:;" class="plus active fl">
												<i class="icon-add-add-red" style="font-size: .44rem;"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							
				<div class="shopPrice">本店总计：￥<span class="shop-total-amount ShopTotal">0.00</span></div>
						    </div>
						    <a href="javascript:;" class="remove">删除</a>
					    </div>
				    </div>
				    
				  
				   </div>
				  
				  </div>
				</div>
					<div class="my-address-list wid710 auto border20 mt20 bgfff" id="my-address-list">
					<div class="shopping">
					<div class="shop-group-item">
				    <div class="touch">
				    <!--商家标题-->
					    	<div class="buycarshoptitle">
					    		<div class="shop-name clearfix">
									<input type="checkbox" class="check goods-check shopCheck">
									<h4>
										<img src="<?php echo CDN_URL ?>media/cart/jinlaitit.png" />
									</h4>
									<h3 class="fl">进来自营店
										<i class="icon-Arrow"></i>
									</h3>
								</div>
					    	</div>
					    <div class="itemlist">
						    <div class="goodslist clearfix">
							   <div class="shop-info clearfix">
								<input type="checkbox" class="check goods-check goodsCheck">
								<div class="shop-info-img"><img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png" /></div>
								<div class="shop-info-text fl">
									<h4>云南芒果（约400/个）</h4>
									<div class="shop-price">
										<div class="shop-pices">￥<b class="price">5.8</b>/份</div>
										<div class="shop-arithmetic">
											<a href="javascript:;" class="minus fl">
												<i class="icon-jian" style="font-size: .44rem;"></i>
											</a>
											<span class="num fl" >1</span>
											<a href="javascript:;" class="plus active fl">
												<i class="icon-add-add-red" style="font-size: .44rem;"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							
				<div class="shopPrice">本店总计：￥<span class="shop-total-amount ShopTotal">0.00</span></div>
						    </div>
						    <a href="javascript:;" class="remove">删除</a>
					    </div>
					      <div class="itemlist">
						    <div class="goodslist clearfix">
							   <div class="shop-info clearfix">
								<input type="checkbox" class="check goods-check goodsCheck">
								<div class="shop-info-img"><img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png" /></div>
								<div class="shop-info-text fl">
									<h4>云南芒果（约400/个）</h4>
									<div class="shop-price">
										<div class="shop-pices">￥<b class="price">5.8</b>/份</div>
										<div class="shop-arithmetic">
											<a href="javascript:;" class="minus fl">
												<i class="icon-jian" style="font-size: .44rem;"></i>
											</a>
											<span class="num fl" >1</span>
											<a href="javascript:;" class="plus active fl">
												<i class="icon-add-add-red" style="font-size: .44rem;"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
				<div class="shopPrice">本店总计：￥<span class="shop-total-amount ShopTotal">0.00</span></div>
						    </div>
						    <a href="javascript:;" class="remove">删除</a>
					    </div>
				    </div>
				   </div>
				  </div>
				</div>
			</div>
<script type="text/javascript" src="https://cdn.bootcss.com/jquery/2.1.4/jquery.js" ></script>
<script src="<?php echo CDN_URL ?>js/jqm.js"></script>