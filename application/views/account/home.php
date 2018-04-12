<style>
body{background:#eaeaea}
a,b,div,i,li,p,span{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
input[type=checkbox]{-webkit-appearance:none;outline:0;border:none}
input.check{background:url(<?php echo CDN_URL ?>media/cart/icon/icon_radio3.png) no-repeat center left;background-size:cover;position:absolute;top:50%;left:10px;margin-top:-.21rem;width:.42rem;height:.42rem}
 <?php
	/**
	 * APP、微信中调用webview时配合URL按需显示相应部分
	 * 此处以在APP中以WebView打开页面时不显示页面header部分为例
	 */
	if ($this->user_agent['is_wechat'] || $this->user_agent['is_desktop']):
?>
 .tabcontent{padding-top:1rem}
<?php endif ?>.listtext{width:4.54rem;height:1.6rem;font-size:.26rem;color:#3e3a39}
.ui-loader{display:none}
.cube{position:relative;width:94.67%}
.swiper-pagination2{position:absolute;text-align:center;bottom:-2px;width:100%;z-index:10}
.swiper-pagination2 span{margin:0 5px}
.swiper-container_fruit{width:100%;overflow:hidden;height:2.18rem}
.usercenter{background-size:cover;height:3.5rem;background:url(<?php echo CDN_URL ?>media/account/mine/beijing@3x.png) no-repeat center left;border-bottom-left-radius:.35rem;border-bottom-right-radius:.35rem;overflow:hidden}

</style>
<script>
$(document).ready(function() {
	var swiperadtisement = new Swiper('.swiper-containeradvertisement', {
		pagination: '.swiper-pagination2',
		paginationClickable: true,
		autoplay: 2000,
		loop: true,
		speed: 800,
		autoplayDisableOnInteraction: false
	})
});
</script>
<!--tab切换content区域-->
<?php
	/**
	 * APP、微信中调用webview时配合URL按需显示相应部分
	 * 此处以在APP中以WebView打开页面时不显示页面header部分为例
	 */
	if ($this->user_agent['is_wechat'] || $this->user_agent['is_desktop']):
?>
		<div id="bdMapBox" style="display:none;"></div>
		<!--百度地图api-->
		<script src="https://api.map.baidu.com/api?v=2.0&ak=C475b4caf68fdf0f692b37e9f4fdaeb8&s=1" type="text/javascript"></script>
		<!--定位信息结束-->
		<div class="address">
			<div class="maptext">
				崂山区
				<i class="icon-xialajiantou"></i>
			</div>
			<!--搜索框区域-->
			<div class="searchtext">
				<img src="<?php echo CDN_URL ?>media/home/search.png"/>
			</div>
			<!--扫描区域-->
			<div class="wechatwrap">
				<span class="saoyisao">
					<img src="<?php echo CDN_URL ?>media/home/saoyisao.png" />
				</span>
				<span class="kefu">
					<img src="<?php echo CDN_URL ?>media/home/kefu.png" />
				</span>
			</div>
		</div>
<?php endif ?>
 <div style="font-size: .12rem;" id="banben">
				
			</div>
		<div class="tabcontent" id="list">
			<div class="item" style="display: block;">
				<!--菜单区域开始-->
				<div class="menuOuter">
				<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="menuWrap auto clearfix swiper-slide">
					<ul class="clearfix">
						<li>
                            <a href="<?php echo base_url('page/detail?id=2') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap">
                                    <img data-src="<?php echo CDN_URL ?>media/home/shengxianchaoshi@3x.png">
                                </div>
                                <!--文字-->
                                <span class="text">生鲜超市</span>
                            </a>
						</li>
						<li>
                            <a href="<?php echo base_url('page/detail?id=4') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap2">
                                    <img data-src="<?php echo CDN_URL ?>media/home/jiaodongtechan@3x.png">
                                </div>
                                <!--文字-->
                                <span class="text">胶东特产</span>
                            </a>
						</li>
						<li>
                            <a href="<?php echo base_url('page/detail?id=3') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap3">
                                    <img data-src="<?php echo CDN_URL ?>media/home/xuexijiaoyu@3x.png">
                                </div>
                                <!--文字-->
                                <span class="text">学习教育</span>
                            </a>
						</li>
						<li>
                            <a href="<?php echo base_url('page/detail?id=5') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap4">
                                    <img data-src="<?php echo CDN_URL ?>media/home/gesemeishi@3x.png">
                                </div>
                                <!--文字-->
                                <span class="text">各色美食</span>
                            </a>
						</li>
						<li style="margin-right:0">
                            <a href="<?php echo base_url('page/detail?id=4') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap5">
                                    <img data-src="<?php echo CDN_URL ?>media/home/shishangliren@3x.png">
                                </div>
                                <!--文字-->
                                <span class="text">时尚丽人</span>
                            </a>
						</li>
						<li>
							<!--图标-->
							<a href="https://www.517ybang.com/coupon_template" target="_self">
                                <div class="iconWrap6">
                                    <img data-src="<?php echo CDN_URL ?>media/home/lingquanzhongxin@3x.png">
                                </div>

                                <!--文字-->
                                <span class="text">领券中心</span>
                            </a>
						</li>
						<li>
							<!--图标-->
							<a href="https://www.517ybang.com/invite" target="_self">
							<div class="iconWrap7">
								<img data-src="<?php echo CDN_URL ?>media/home/yaoqinghaoyou@3x.png">
							</div>
							<!--文字-->
							<span class="text">邀请好友</span>
							</a>
						</li>
						<li>
							<!--图标-->
							
								<div class="iconWrap8">
									<img data-src="<?php echo CDN_URL ?>media/home/zaixianpintuan@3x.png">
								</div>
							
							<!--文字-->
							<span class="text">在线拼团</span>
						</li>
						<li>
							<a href="https://biz.517ybang.com/biz/create" target="_self">
							<!--图标-->
							<div class="iconWrap9">
								<img data-src="<?php echo CDN_URL ?>media/home/woyaoruzhu@3x.png">
							</div>
							</a>
							<!--文字-->
							<span class="text">我要入驻</span>
						</li>
						<li style="margin-right:0">
							<!--图标-->
							 <a href="https://www.517ybang.com/member_biz" target="_self">
							<div class="iconWrap10">
							<img data-src="<?php echo CDN_URL ?>media/home/shangjiahuiyuan@3x.png">
							</div>
							</a>
							<!--文字-->
							<span class="text">商家会员</span>
						</li>
					</ul>
				</div>
				<div class="menuWrap auto clearfix swiper-slide">
					<ul class="clearfix">
						
						<li>
                            <a href="<?php echo base_url('page/detail?id=2') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap">
                                    <img data-src="<?php echo CDN_URL ?>media/home/xiuxianyule@3x.png">
                                </div>
                                <!--文字-->
                                <span class="text">休闲娱乐</span>
                            </a>
						</li>
						<li>
                            <a href="<?php echo base_url('page/detail?id=4') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap2">
                                    <img data-src="<?php echo CDN_URL ?>media/home/yundognjiankang@3x.png">
                                </div>
                                <!--文字-->
                                <span class="text">运动健康</span>
                            </a>
						</li>
						<li>
                            <a href="<?php echo base_url('page/detail?id=1') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap3">
                                    <img data-src="<?php echo CDN_URL ?>media/home/zhinengjiaju@3x.png">
                                </div>
                                <!--文字-->
                                <span class="text">智能家居</span>
                            </a>
						</li>
						<li>
                            <a href="<?php echo base_url('page/detail?id=6') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap4">
                                    <img data-src="<?php echo CDN_URL ?>media/home/gaoduandingzhi@3x.png">
                                </div>
                                <!--文字-->
                                <span class="text">高端定制</span>
                            </a>
						</li>
						<li style="margin-right:0">
                            <a href="<?php echo base_url('page/detail?id=2') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap5">
                                    <img data-src="<?php echo CDN_URL ?>media/home/qicheguanjia@3x.png">
                                </div>
                                <!--文字-->
                                <span class="text">汽车管家</span>
                            </a>
						</li>
						<li>
							<!--图标-->
							<a href="https://www.517ybang.com/coupon_template" target="_self">
                                <div class="iconWrap6">
                                    <img data-src="<?php echo CDN_URL ?>media/home/guagngaohezuo@3x.png">
                                </div>

                                <!--文字-->
                                <span class="text">广告合作</span>
                            </a>
						</li>
						<li>
							<!--图标-->
							<div class="iconWrap7">
								<img data-src="<?php echo CDN_URL ?>media/home/woyaotuiguang@3x.png">
							</div>
							<!--文字-->
							<span class="text">我要推广</span>
						</li>
						<li>
							<!--图标-->
							<a href="https://biz.517ybang.com/biz/create" target="_self">
								<div class="iconWrap8">
									<img data-src="<?php echo CDN_URL ?>media/home/wuliuhezuo@3x.png">
								</div>
							</a>
							<!--文字-->
							<span class="text">物流合作</span>
						</li>
						<li>
							<!--图标-->
							<div class="iconWrap9">
								<img data-src="<?php echo CDN_URL ?>media/home/shagnjiayihuo@3x.png">
							</div>
							<!--文字-->
							<span class="text">商家易货</span>
						</li>
						<li style="margin-right:0">
							<!--图标-->
							<div class="iconWrap10">
							<img data-src="<?php echo CDN_URL ?>media/home/jinlailvxing@3x.png">
							</div>
							<!--文字-->
							<span class="text">进来旅行</span>
						</li>
					</ul>
				</div>
			</div>
			<!-- Add Pagination -->
	      <div class="swiper-pagination"></div>
			</div>
			</div>
				<!--广告图区域-->
				<div class="menuOuter">
			<div class="swiper-containeradvertisement">
				<div class="swiper-wrapper">
					<div class="addpic auto swiper-slide">
						<a href="https://www.517ybang.com/biz/detail?id=13" target="_self">
						<img src="<?php echo CDN_URL ?>media/home/banner@3x.png" />
						</a>
					</div>
						<div class="addpic auto swiper-slide">
							<a href="https://www.517ybang.com/biz/detail?id=20" target="_self">
							<img src="<?php echo CDN_URL ?>media/home/banner2.png" />
							</a>
						</div>
						<div class="addpic auto swiper-slide">
							<a href="https://www.517ybang.com/biz/detail?id=39" target="_self">
							<img src="<?php echo CDN_URL ?>media/home/zuoai.jpg" />
							</a>
						</div>
						<div class="addpic auto swiper-slide">
							<a href="https://www.517ybang.com/biz/detail?id=22" target="_self">
							<img src="<?php echo CDN_URL ?>media/home/banner3.jpg" />
							</a>
						</div>
						<!--add-->
						<div class="addpic auto swiper-slide">
							<a href="https://www.517ybang.com/biz/detail?id=25" target="_self">
							<img src="<?php echo CDN_URL ?>media/home/banner4.jpg" />
							</a>
						</div>
						<div class="addpic auto swiper-slide">
							<a href="https://www.517ybang.com/biz/detail?id=33" target="_self">
							<img src="<?php echo CDN_URL ?>media/home/banner5.jpg" />
							</a>
						</div>
						<div class="addpic auto swiper-slide">
							<a href="https://www.517ybang.com/biz/detail?id=28" target="_self">
							<img src="<?php echo CDN_URL ?>media/home/banner6.jpg" />
							</a>
						</div>
						<div class="addpic auto swiper-slide">
							<a href="https://www.517ybang.com/biz/detail?id=32" target="_self">
							<img src="<?php echo CDN_URL ?>media/home/banner7.jpg" />
							</a>
						</div>
						<div class="addpic auto swiper-slide">
							<a href="https://www.517ybang.com/biz/detail?id=24" target="_self">
							<img src="<?php echo CDN_URL ?>media/home/banner8.jpg" />
							</a>
						</div>
				</div>
						<!-- Add Pagination -->
	      			<div class="swiper-pagination2"></div>
				</div>
				<!--公告文字区域开始-->
				<div class="announcement auto">
					<!--左边图片区域-->
					<div class="pic">
						<img src="<?php echo CDN_URL ?>media/home/title.png" />
					</div>
					<div class="line"></div>
					<!--右边文字部分-->
					<div class="text" id="news">
						<ul class="clearfix">
							<li>
								<a href="###">
								<span class="cir"></span><span class="listr">注册送188新人礼包,绑定红卡惊喜不断</span>
								</a>
							</li>
							<li>
								<a href="###">
								<span class="cir"></span><span class="listr">路易威登成功入进来</span>
								</a>
							</li>
							<li>
								<a href="###">
								<span class="cir"></span>
								<span class="listr">中共十九大</span>
								</a>
							</li>
							<li>
								<a href="###">
								<span class="cir"></span>
								<span class="listr">积极促进一带一路</span>
								</a>
							</li>
							<li>
								<a href="###">
								<span class="cir"></span><span class="listr">进来,上新</span>
								</a>
							</li>
							<li>
								<a href="###">
								<span class="cir"></span><span class="listr">进来成功在纳斯达克上市</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!--水果图片区域开始-->
				
				<div class="fruidWrap clearfix auto cube">
					<div class="swiper-container_fruit">
				<div class="swiper-wrapper">
						<div class="swiper-slide advercube">
							<a href="https://www.517ybang.com/biz/detail?id=2" target="_self">
							<img data-src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png" />
							</a>
						</div>
						<div class="swiper-slide advercube">
							<a href="https://www.517ybang.com/biz/detail?id=2" target="_self">
							<img data-src="<?php echo CDN_URL ?>media/home/jianhuo_putao@3x.png" />
							</a>
						</div>
						<div class="swiper-slide advercube">
							<a href="https://www.517ybang.com/biz/detail?id=2" target="_self">
							<img data-src="<?php echo CDN_URL ?>media/home/yujia@3x.png" />
							</a>
						</div>
						<div class="swiper-slide advercube">
							<a href="https://www.517ybang.com/biz/detail?id=2" target="_self">
							<img data-src="<?php echo CDN_URL ?>media/home/jianhuo_mangguo@3x.png" />
							</a>
						</div>
						<div class="swiper-scrollbarcube"></div>
						</div>
				</div>
				</div>
			
				<!--新品上新图片-->
				<div class="newgoodspic auto">
					<img data-src="<?php echo CDN_URL ?>media/home/xinpinshangxin/xinpinshangxin@3x.png" />
				</div>
				<!--新品上新商品区域开始-->
				<div class="newgoodslist auto clearfix">
					<div class="twocol clearfix">
						<div class="goodsleft">
							<ul class="clearfix">
								<li>
									<a href="https://www.517ybang.com/item/detail?id=2" target="_self">
									<div class="pic">
										
										<img data-src="<?php echo CDN_URL ?>media/home/xinpinshangxin/xpsx156/156x156.jpg" />
										
									</div>
									</a>
									<p>IPhone7红色版</p>
									<span>¥3,900</span>
								</li>
								<li style="margin-left: .3rem;">
									<a href="https://www.517ybang.com/item/detail?id=2" target="_self">
									<div class="pic">
										<img data-src="<?php echo CDN_URL ?>media/home/xinpinshangxin/xpsx156/156x156_1.jpg" />
									</div>
										</a>
									<p>IPhone7红色版</p>
									<span>¥3,900</span>
								</li>
							</ul>
						</div>
						<div class="goodsleft" style="margin-left:.1rem">
							<ul class="clearfix">
								<li>
									<a href="https://www.517ybang.com/item/detail?id=2" target="_self">
									<div class="pic">
										
										<img data-src="<?php echo CDN_URL ?>media/home/xinpinshangxin/xpsx156/156x156_2.jpg" />
									</div>
									</a>
									<p>IPhone7红色版</p>
									<span>¥3,900</span>
								</li>
								<li style="margin-left: .3rem;">
									<a href="https://www.517ybang.com/item/detail?id=2" target="_self">
									<div class="pic">
										<img data-src="<?php echo CDN_URL ?>media/home/xinpinshangxin/xpsx156/156x156_3.jpg" />
									</div>
									</a>
									<p>IPhone7红色版</p>
									<span>¥3,900</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="threecol">
						<ul>
							<li>
								<a href="https://www.517ybang.com/item/detail?id=2" target="_self">
								<div class="pic">
									<img data-src="<?php echo CDN_URL ?>media/home/xinpinshangxin/xpsx160/160x160_0.jpg" />
								</div>
								</a>
								<p>IPhone8</p>
								<span>¥9985</span>
							</li>
							<li>
								<a href="https://www.517ybang.com/item/detail?id=2" target="_self">
								<div class="pic">
									<img data-src="<?php echo CDN_URL ?>media/home/xinpinshangxin/xpsx160/160x160_1.jpg" />
								</div>
								</a>
								<p>IPhone8</p>
								<span>¥9985</span>
							</li>
							<li style="margin-right:0">
								<a href="https://www.517ybang.com/item/detail?id=2" target="_self">
								<div class="pic">
									<img data-src="<?php echo CDN_URL ?>media/home/xinpinshangxin/xpsx160/160x160_2.jpg" />
								</div>
								</a>
								<p>IPhone8</p>
								<span>¥9985</span>
							</li>
						</ul>
					</div>
				</div>
				<!--在线拼团区域开始-->
				<div class="onlinegroup clearfix">
					<div class="newgoodspic auto">
						<img data-src="<?php echo CDN_URL ?>media/home/zaixianpintuan/zaixianpintuan@3x.png">
					</div>
					<!--在线拼团商品详情区域-->
					<div class="onlinegroupcontent wid718 auto mt10">
						<div class="onlinegoodsleft">
							<!--倒计时区域-->
							<div class="time clearfix">
								<!--<div id="timer1" end-date="2019-1-1"></div>-->
  								<div id="timer2" class="clearfix" end-date="2018/12/16 00:5:2"></div>
  								<p>倒计时</p>
							</div>
							<a href="https://www.517ybang.com/item/detail?id=2" target="_self">
							<div class="pic">
								<img data-src="<?php echo CDN_URL ?>media/home/zaixianpintuan/240x240.jpg"/>
							</div>
							</a>
							<h1>OMG超霸系列</h1>
							<h2>同轴设计时腕表</h2>
							<p>
								<span class="fl">¥4587</span>
								<span class="fr">¥17,988</span>
							</p>
						</div>
						<div class="onlinegoodsright fr">
							<div class="onlinegoodstop">
								<ul>
									<li>
										<a href="https://www.517ybang.com/item/detail?id=2" target="_self">
										<div class="pic">
											<img data-src="<?php echo CDN_URL ?>media/home/zaixianpintuan/zxpt/140x140_0.jpg"/>
										</div>
										</a>
										<h1>日本阳光红富士</h1>
										<h2>¥9.9/斤</h2>
									</li>
									<li>
										<a href="https://www.517ybang.com/item/detail?id=2" target="_self">
										<div class="pic">
											<img data-src="<?php echo CDN_URL ?>media/home/zaixianpintuan/zxpt/140x140_1.jpg"/>
										</div>
										</a>
										<h1>里吉塔蓝莓</h1>
										<h2>¥4.9/斤</h2>
									</li>
								</ul>
							</div>
							<div class="onlinegoodstop" style="margin-top:.1rem">
								<ul>
									<li>
										<a href="https://www.517ybang.com/item/detail?id=2" target="_self">
										<div class="pic">
											<img data-src="<?php echo CDN_URL ?>media/home/zaixianpintuan/zxpt/140x140_2.jpg"/>
										</div>
										</a>
										<h1>i7 1071组装机</h1>
										<h2>¥7500/斤</h2>
									</li>
									<li>
										<a href="https://www.517ybang.com/item/detail?id=2" target="_self">
										<div class="pic">
											<img data-src="<?php echo CDN_URL ?>media/home/zaixianpintuan/zxpt/140x140_3.jpg"/>
										</div>
										</a>
										<h1>VITA红茶整箱</h1>
										<h2>¥31.95/斤</h2>
									</li>
								</ul>
								
							</div>
						</div>
					</div>
				</div>
				<!--商家搜罗-->
				<div class="onlinegroup clearfix">
					<div class="newgoodspic auto">
						<img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/shangjiasouluo@3x.png">
					</div>
			</div>
			<!--颜色叠加公用部分-->
			<div class="coloroverlay">
				<div class="coloroverlaywrap activecoverplay" id="activecoverplay">
					<div class="zbottom">
						<b>时尚</b>
						<a style="display: none;">Shishang</a>
						<i style="display: none;">时尚</i>
						
					</div>
					<div class="zbottom zfirst">
						<b>丽人</b>
						<a style="display: none;">Liren</a>
						<i style="display: none;">丽人</i>
						
					</div>
					<div class="zbottom zsecond">
						<b>娱乐</b>
						<a style="display: none;">Yule</a>
						<i style="display: none;">娱乐</i>
						
					</div>
					<div class="zbottom zthree coverCur">
						<b>美食</b>
						<a style="display: none;">Delatious</a>
						<span class="r">美食</span>
						<i style="display: none;">美食</i>
						
					</div>
					
				</div>
				<div class="fr squarecube" id="more">
					<img src="<?php echo CDN_URL ?>media/home/list.png" class="block auto" />
				</div>
			</div>
			<!--颜色叠加区域内容-->
			<div class="coloroverlaycontent clearfix" id="morelist">
				<!--时尚内容-->
				<div class="colorovertab clearfix" style="display:block">
				<div class="left fl refreshcontent">
					<a href="https://www.517ybang.com/biz/detail?id=2" target="_self">
						<div class="bgefefef">
						<img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/top1.png" />
						</div>
						<h1>The Diner  啤酒配披萨</h1>
					</a>
				</div>
				<div class="right fr refreshcontent">
					<a href="https://www.517ybang.com/biz/detail?id=2" target="_self">
						<div class="bgefefef">
						<img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/top2.png" />
						</div>
						<h1>遇见你很高兴  小资多彩</h1>
					</a>
				</div>
				<div class="mid fl" style="margin-top:.1rem">
					<div class="midleft refreshcontent">
						<a href="https://www.517ybang.com/biz/detail?id=2" target="_self">
							<img class="h150" data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/410x150.jpg" />
							<h1>麦乐面包达人</h1>
							<h2>面包也可以带有亲情</h2>
						</a>
					</div>
					<div class="midright fr refreshcontent">
						<a href="https://www.517ybang.com/biz/detail?id=2" target="_self">
							<img class="h150" data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/260x150.jpg" />
							<h1>主推新品</h1>
							<h2>甜品也可以甜而不腻</h2>
						</a>
					</div>
				</div>
				</div>
				<!--丽人内容-->
				<div class="colorovertab clearfix">
				<div class="left fl refreshcontent">
					<a href="https://www.517ybang.com/biz/detail?id=2" target="_self">
						<div class="bgefefef">
						<img data-src="<?php echo CDN_URL ?>media/home/jianhuo_mangguo@3x.png" />
						</div>
						<h1>The Diner  啤酒配披萨</h1>
					</a>
				</div>
				<div class="right fr refreshcontent">
					<a href="https://www.517ybang.com/biz/detail?id=2" target="_self">
						<div class="bgefefef">
						<img data-src="<?php echo CDN_URL ?>media/home/jianhuo_mangguo@3x.png" />
						</div>
						<h1>The Diner  啤酒配披萨</h1>
					</a>
				</div>
				<div class="mid fl" style="margin-top:.1rem">
					<div class="midleft refreshcontent">
						<a href="https://www.517ybang.com/biz/detail?id=2" target="_self">
							<div class="bgefefef">
							<img data-src="<?php echo CDN_URL ?>media/home/banner@3x.png" />
							</div>
							<h1>买了面包大面包也可以带有亲情人</h1>
							<h2>面包也可以带有亲情面包也可以带有亲情面包也可以带有亲情</h2>
						</a>
					</div>
					<div class="midright fr refreshcontent">
						<a href="https://www.517ybang.com/biz/detail?id=2" target="_self">
							<div class="bgefefef">
							<img data-src="<?php echo CDN_URL ?>media/home/banner@3x.png" />
							</div>
							<h1>买了面包大面包也可以带有亲情人</h1>
							<h2>面包也可以带有亲情面包也可以带有亲情面包也可以带有亲情</h2>
						</a>
					</div>
				</div>
				</div>
				<!--娱乐内容-->
				<div class="colorovertab clearfix">
				<div class="left fl refreshcontent">
					<a href="https://www.517ybang.com/biz/detail?id=2" target="_self">
						<div class="bgefefef">
						<img data-src="<?php echo CDN_URL ?>media/home/banner@3x.png">
							</div>
						<h1>The Diner  啤酒配披萨</h1>
					</a>
				</div>
				<div class="right fr refreshcontent">
					<a href="https://www.517ybang.com/biz/detail?id=2" target="_self">
						<div class="bgefefef">
						<img data-src="<?php echo CDN_URL ?>media/home/banner@3x.png">
							</div>
						<h1>The Diner  啤酒配披萨</h1>
					</a>
				</div>
				<div class="mid fl" style="margin-top:.1rem">
					<div class="midleft refreshcontent">
						<a href="https://www.517ybang.com/biz/detail?id=2">
							<div class="bgefefef">
							<img data-src="<?php echo CDN_URL ?>media/home/banner@3x.png">
								</div>
							<h1>买了面包大面包也可以带有亲情人</h1>
							<h2>面包也可以带有亲情面包也可以带有亲情面包也可以带有亲情</h2>
						</a>
					</div>
					<div class="midright fr refreshcontent">
						<a href="https://www.517ybang.com/biz/detail?id=2" target="_self">
							<div class="bgefefef">
							<img data-src="<?php echo CDN_URL ?>media/home/banner@3x.png">
								</div>
							<h1>买了面包大面包也可以带有亲情人</h1>
							<h2>面包也可以带有亲情面包也可以带有亲情面包也可以带有亲情</h2>
						</a>
					</div>
				</div>
				</div>
				<!--美食tab内容-->
					<div class="colorovertab clearfix">
					<div class="left fl refreshcontent">
						<a href="https://www.517ybang.com/biz/detail?id=2" target="_self">
							<div class="bgefefef">
							<img data-src="<?php echo CDN_URL ?>media/home/banner@3x.png">
								</div>
							<h1>The Diner  啤酒配披萨</h1>
						</a>
					</div>
					<div class="right fr refreshcontent">
						<a href="https://www.517ybang.com/biz/detail?id=2" target="_self">
							<div class="bgefefef">
							<img data-src="<?php echo CDN_URL ?>media/home/banner@3x.png">
								</div>
							<h1>遇见你 很高兴  啤酒配披萨</h1>
						</a>
					</div>
					<div class="mid fl" style="margin-top:.1rem">
						<div class="midleft refreshcontent">
							<a href="https://www.517ybang.com/biz/detail?id=2" target="_self">
								<div class="bgefefef">
								<img data-src="<?php echo CDN_URL ?>media/home/banner@3x.png">
									</div>
								<h1>买了面包大面包也可以带有亲情人</h1>
								<h2>面包也可以带有亲情面包也可以带有亲情面包也可以带有亲情</h2>
							</a>
						</div>
						<div class="midright fr refreshcontent">
							<a href="https://www.517ybang.com/biz/detail?id=2" target="_self">
								<div class="bgefefef">
								<img data-src="<?php echo CDN_URL ?>media/home/banner@3x.png">
									</div>
								<h1>买了面包大面包也可以带有亲情人</h1>
								<h2>面包也可以带有亲情面包也可以带有亲情面包也可以带有亲情</h2>
							</a>
						</div>
					</div>
				</div>
				<div class="botWrap auto wid718 border20 fl mt10 clearfix">
					<div class="dotcontent clearfix bgfff border20">
						<ul>
							<li>
								<a href="https://www.517ybang.com/item/detail?id=2" target="_self">
									<img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_0.jpg" class="auto block">
									<h1>蘑菇火腿炒饭</h1>
									<h2>¥38.28</h2>
								</a>
							</li>
							<li>
								<a href="https://www.517ybang.com/item/detail?id=2" target="_self">
									<img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_1.jpg" class="auto block">
									<h1>韩式海鲜汤</h1>
									<h2>¥22.25</h2>
								</a>
							</li>
							<li>
								<a href="https://www.517ybang.com/item/detail?id=2" target="_self">
									<img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_2.jpg" class="auto block">
									<h1>新西兰精品牛排</h1>
									<h2>¥68.00</h2>
								</a>
							</li>
							<li>
								<a href="https://www.517ybang.com/item/detail?id=2" target="_self">
									<img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_3.jpg" class="auto block">
									<h1>狮子头意面</h1>
									<h2>¥28.00</h2>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!--运动健康区域-->
				<div class="wid718 auto bgfff border20 exercise fl">
					<img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/yundongjiankang@3x.png" />
				</div>
				<div class="coloroverlay mt14 fl">
				<div class="coloroverlaywrap">
					<div class="zbottom zbottomaction">
					</div>
					<div class="zbottom zfirst zfirstaction">
					</div>
					
					<div class="zbottom zthree action">
						Come in Recommend
						<span class="r">进来推荐</span>
					</div>
					
				</div>
				<div class="fr square">
					<img data-src="<?php echo CDN_URL ?>media/home/icon_2@3x.png" class="block auto" />
				</div>
			</div>
				<div class="coloroverlaycontent clearfix fl">
				
				<!--运动装备区域-->
				<div class="mid fl">
					<div class="midleft fl mt0">
						<div class="bgefefef">
							<a href="https://www.517ybang.com/biz/detail?id=2" target="_self">
						<img src="https://cdn-remote.517ybang.com/media/home/yundongjiankang/left.png">
						</a>
						</div>
						<h1>挑战极限 边界由你定</h1>
						
					</div>
					<div class="midright fr mt0">
						<div class="bgefefef">
							<a href="https://www.517ybang.com/biz/detail?id=2" target="_self">
						<img src="https://cdn-remote.517ybang.com/media/home/yundongjiankang/right.png">
							</a>
						</div>
						<h1>美女运动装备</h1>
						
					</div>
				</div>
				</div>
				
			</div>
			<!--进来推荐区域内容-->
			<div class="coloroverlaycontent clearfix" style="margin-top:.1rem">
				
				<!-- <div class="left fr">
					<img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/260x150.jpg">
					<h1>美女运动装备</h1>
				</div>
				<div class="right fl">
					<img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/410x150.jpg">
					<h1>挑战极限   边界由你定</h1>
				</div> -->
				<div class="mid fl">
					<div class="midleft fr">
						<div class="bgefefef">
							<a href="https://www.517ybang.com/biz/detail?id=2" target="_self">
						<img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/left.png">
							</a>
						</div>
						<h1>DIOS</h1>
						<h2>DIOS精准标靶装备</h2>
					</div>
					<div class="midright fl">
						<div class="bgefefef">
							<a href="https://www.517ybang.com/biz/detail?id=2" target="_self">
						<img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/right.png">
							</a>
						</div>
						<h1>极限装备</h1>
						<h2>极限运动装备</h2>
					</div>
				</div>
				
				<div class="botWrap auto wid718 border20 fl mt10 clearfix">
					<div class="dotcontent clearfix bgfff border20">
						<ul>
							<li>
								<img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_0.jpg" class="auto block">
								<h1>NIKE飞线跑步鞋</h1>
								<h2>¥799.00</h2>
							</li>
							<li>
								<img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_1.jpg" class="auto block">
								<h1>NIKE速干衣</h1>
								<h2>¥219.00</h2>
							</li>
							<li>
								<img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_2.jpg" class="auto block">
								<h1>NIKE耐克polo衫</h1>
								<h2>¥288.00</h2>
							</li>
							<li>
								<img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_3.jpg" class="auto block">
								<h1>NIKE球衣</h1>
								<h2>¥383.28</h2>
							</li>
						</ul>
					</div>
				</div>
				<!--运动健康区域-->
				<!-- <div class="wid718 auto bgfff border20 exercise fl">
					<img data-src="<?php echo CDN_URL ?>media/home/cainixihuan@3x.png">
				</div> -->
			<!-- 	<div class="coloroverlay mt14 fl">
				<div class="coloroverlaywrap">
					<div class="zbottom zbottomaction">
					</div>
					<div class="zbottom zfirst zfirstaction">
					</div>
					
					<div class="zbottom zthree action">
						Come in Recommend
						<span class="r">进来推荐</span>
					</div>
					
				</div>
				<div class="fr square">
					<img data-src="<?php echo CDN_URL ?>media/home/icon_2@3x.png" class="block auto">
				</div>
			</div> -->
			</div>
				<!--电子产品-->
				<div class="wid718 auto bgfff border20 exercise clearfix">
					<div class="bgefefef">
					<img src="<?php echo CDN_URL ?>media/home/dianzichanpin/dianzichanpin@3x.png">
					</div
				</div>
				<div class="coloroverlay mt14">
				<div class="coloroverlaywrap">
					<div class="zbottom zbottomaction pinkaction">
					</div>
					<div class="zbottom zfirst zfirstaction zfirstpinkaction">
					</div>
					
					<div class="zbottom zthree action">
						Come in Recommend
						<span class="r">进来推荐</span>
					</div>
					
				</div>
				<div class="fr square">
					<img data-src="<?php echo CDN_URL ?>media/home/icon_1@3x.png" class="block auto" style="height:.42rem">
				</div>
			</div>
			<div class="coloroverlaycontent clearfix" style="margin-top:.14rem">
				
				<!--运动装备区域-->
				<div class="mid fl">
					<div class="midleft fr mt0">
						<div class="bgefefef">
						<img data-src="<?php echo CDN_URL ?>media/home/dianzichanpin/right.png">
						</div>
						<h1>镜头再长一点 再长一点</h1>
					</div>
					<div class="midright fl mt0">
						<div class="bgefefef">
						<img data-src="<?php echo CDN_URL ?>media/home/dianzichanpin/left.png">
						</div>
						<h1>我的镜头 我的世界</h1>
					</div>
				</div>
				</div>
				<div class="coloroverlaycontent clearfix" style="margin-top:.10rem">
				<div class="mid fl">
					<div class="midleft fl">
						<img src="https://cdn-remote.517ybang.com/media/home/dianzichanpin/410x150.jpg" class="success">
						<h1>我的mac</h1>
						<h2>1309 我的MAC</h2>
					</div>
					<div class="midright fr">
						<img src="https://cdn-remote.517ybang.com/media/home/dianzichanpin/260x150.jpg" class="success">
						<h1>IPHONE</h1>
						<h2>爱疯 爱疯 疯</h2>
					</div>
				</div>
			</div>
				<div class="botWrap auto wid718 border20 mt10 clearfix">
					<div class="dotcontent clearfix bgfff border20">
						<ul>
							<li>
								<img src="<?php echo CDN_URL ?>media/home/dianzichanpin/dzcp/160x160_0.jpg" class="auto block">
								<h1>IPHONE7P</h1>
								<h2>¥5199.00</h2>
							</li>
							<li>
								<img src="<?php echo CDN_URL ?>media/home/dianzichanpin/dzcp/160x160_1.jpg" class="auto block">
								<h1>APPLE Ipad 平板</h1>
								<h2>¥383.2</h2>
							</li>
							<li>
								<img src="<?php echo CDN_URL ?>media/home/dianzichanpin/dzcp/160x160_2.jpg" class="auto block">
								<h1>苹果SLO</h1>
								<h2>¥383.22</h2>
							</li>
							<li>
								<img src="<?php echo CDN_URL ?>media/home/dianzichanpin/dzcp/160x160_3.jpg" class="auto block">
								<h1>iWatch</h1>
								<h2>¥1388.00</h2>
							</li>
						</ul>
					</div>
				</div>
				<!--猜你喜欢-->
				<div class="wid718 auto bgfff border20 exercise clearfix">
					<img src="<?php echo CDN_URL ?>media/home/cainixihuan/cainixihuan@3x.png">
				</div>
				<!--猜你喜欢内容区域开始-->
				<div class="like wid718 auto clearfix mt10">
					<ul>
						<li>
							<img data-src="<?php echo CDN_URL ?>media/home/cainixihuan/cnxh/210x210_0.jpg"/>
							<h1>JUSTE UN CLOU 手镯</h1>
							<h2>8K玫瑰金</h2>
							<h3>¥10555.00</h3>
						</li>
						<li>
							<img data-src="<?php echo CDN_URL ?>media/home/cainixihuan/cnxh/210x210_1.jpg"/>
							<h1>栖霞红富士</h1>
							<h2>18k玫瑰金,手带表</h2>
							<h3>¥1045.00</h3>
						</li>
						<li class="mr0">
							<img data-src="<?php echo CDN_URL ?>media/home/cainixihuan/cnxh/210x210_2.jpg"/>
							<h1>DRIVER ONE 手表</h1>
							<h2>8K玫瑰金</h2>
							<h3>¥5100</h3>
						</li>
						<li>
							<img data-src="<?php echo CDN_URL ?>media/home/cainixihuan/cnxh/210x210_3.jpg"/>
							<h1>JUSTE UN CLOU 手镯</h1>
							<h2>8K玫瑰金</h2>
							<h3>¥5100</h3>
						</li>
						<li>
							<img data-src="<?php echo CDN_URL ?>media/home/cainixihuan/cnxh/210x210_0.jpg"/>
							<h1>JUSTE UN CLOU 手镯</h1>
							<h2>8K玫瑰金</h2>
							<h3>¥5100</h3>
						</li>
						<li class="mr0">
							<img data-src="<?php echo CDN_URL ?>media/home/cainixihuan/cnxh/210x210_2.jpg"/>
							<h1>JUSTE UN CLOU 手镯</h1>
							<h2>8K玫瑰金</h2>
							<h3>¥5100</h3>
						</li>
					</ul>
				</div>
				<div class="fl footerpic">
					<img src="<?php echo CDN_URL ?>media/home/footerlogo.png"/>
				</div>
			</div>
			</div>
			</div>
<script>
$(document).ready(function() {
	var mySwiper_cube = new Swiper('.swiper-container_fruit', {
		scrollbar: '.swiper-scrollbarcube',
		scrollbarHide: false,
		slidesPerView: 'auto',
		centeredSlides: false,
		grabCursor: true,
		spaceBetween: 8,
	});
	setInterval('AutoScroll("#news")', 3000);
	var indexNum = 0;
	$("#more").on("click", function() {
		if (indexNum == 0) {
			$(".refreshcontent").each(function() {}).promise().done(function() {
				storm()
			})
		} else {
			card()
		}
	});

	function storm() {
		indexNum = 1;
		$(".refreshcontent").remove();
		var oAddElement = '<div class="swiper-container7" id="newmorelist" style="margin-top:.1rem;border-radius: .2rem;"><div class="swiper-wrapper"><div class="swiper-slide"><div class="list-group-item"><a href="https://www.517ybang.com/biz/detail?id=2"><div class="list"><img src="<?php echo CDN_URL ?>media/slider1-2.png" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>韦博英语韦博英语韦博英语韦博英语韦博英语(麦岛分路店)</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线   英语</div><div class="allbuy"><span class="tuan">团</span><span>99元 单人体验一次</span></div></div></div></a><a href="https://www.517ybang.com/biz/detail?id=2"><div class="list"><img src="<?php echo CDN_URL ?>media/slider1-2.png" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>韦博英语韦博英语韦博英语韦博英语韦博英语(麦岛分路店)</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线   英语</div><div class="allbuy"><span class="tuan">团</span><span>99元 单人体验一次</span></div></div></div></a><a href="https://www.517ybang.com/biz/detail?id=2"><div class="list"><img src="<?php echo CDN_URL ?>media/slider1-2.png" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>韦博英语韦博英语韦博英语韦博英语韦博英语(麦岛分路店)</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线   英语</div><div class="allbuy"><span class="tuan">团</span><span>99元 单人体验一次</span></div></div></div></a><a href="https://www.517ybang.com/biz/detail?id=2"><div class="list"><img src="<?php echo CDN_URL ?>media/slider1-2.png" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>韦博英语韦博英语韦博英语韦博英语韦博英语(麦岛分路店)</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线   英语</div><div class="allbuy"><span class="tuan">团</span><span>99元 单人体验一次</span></div></div></div></a><div class="list"><img src="<?php echo CDN_URL ?>media/slider1-2.png" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>韦博英语韦博英语韦博英语韦博英语韦博英语(麦岛分路店)</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线   英语</div><div class="allbuy"><span class="tuan">团</span><span>99元 单人体验一次</span></div></div></div></a><a href="https://www.517ybang.com/biz/detail?id=2"><div class="list"><img src="<?php echo CDN_URL ?>media/slider1-2.png" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>韦博英语韦博英语韦博英语韦博英语韦博英语(麦岛分路店)</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线   英语</div><div class="allbuy"><span class="tuan">团</span><span>99元 单人体验一次</span></div></div></div></a></div></div></div></div>';
		$(oAddElement).insertBefore($("#morelist"));
		$("#more").find("img").attr("src", "<?php echo CDN_URL ?>media/home/icon_4@3x.png")
	}
	function card() {
		indexNum = 0;
		$("#newmorelist").remove();
		var addCardElement = '<a href="https://www.517ybang.com/biz/detail?id=2"><div class="left fl refreshcontent"><img src="<?php echo CDN_URL ?>media/home/banner@3x.png"><h1>The Diner  啤酒配披萨</h1></div></a><a href="https://www.517ybang.com/biz/detail?id=2"><div class="right fr refreshcontent"><img src="<?php echo CDN_URL ?>media/home/banner@3x.png"><h1>遇见你 很高兴  啤酒配披萨</h1></div></a><div class="mid fl" style="margin-top:.1rem"><a href="https://www.517ybang.com/biz/detail?id=2"><div class="midleft refreshcontent"><img src="<?php echo CDN_URL ?>media/home/banner@3x.png"><h1>买了面包大面包也可以带有亲情人</h1><h2>面包也可以带有亲情面包也可以带有亲情面包也可以带有亲情</h2></div></a><a href="https://www.517ybang.com/biz/detail?id=2"><div class="midright fr refreshcontent"><img src="<?php echo CDN_URL ?>media/home/banner@3x.png"><h1>买了面包大面包也可以带有亲情人</h1><h2>面包也可以带有亲情面包也可以带有亲情面包也可以带有亲情</h2></div></a></div>';
		$(addCardElement).insertBefore($("#morelist .botWrap"));
		$("#more").find("img").attr("src", "<?php echo CDN_URL ?>media/home/list.png")
	}
	$(".coloroverlaywrap div").on("click", function() {
		$("#morelist .colorovertab").eq($(this).index()).show().siblings(".colorovertab").hide()
	})
});
$(document).ready(function() {
	$("#timer2").oaoTime();
	var lazyLoadImg = new LazyLoadImg({
		el: document.querySelector('#list'),
		mode: 'default',
		time: 300,
		complete: true,
		position: {
			top: 0,
			right: 0,
			bottom: 0,
			left: 0
		},
		before: function(el) {
			el.src = '<?php echo CDN_URL ?>media/home/default.png';
			if (el.src = '<?php echo CDN_URL ?>media/home/default.png') {
				el.style.width = 'auto';
				el.style.display = 'block';
				el.style.margin = '0 auto';
				el.style.border = 'none'
			}
		},
		success: function(el) {
			el.classList.add('success')
		},
		error: function(el) {
			el.src = '<?php echo CDN_URL ?>media/home/default.png'
		}
	});

	function getCookie(cookieName) {
		var strCookie = document.cookie;
		var arrCookie = strCookie.split("; ");
		for (var i = 0; i < arrCookie.length; i++) {
			var arr = arrCookie[i].split("=");
			if (cookieName == arr[0]) {
				return arr[1]
			}
		}
		return ""
	}
	var city = getCookie("city");
	console.log(city);
	$(".maptext").on('click', function() {
		window.location.href = "http://www.qiyuanwang.cn/map.html"
	});
	var map = new BMap.Map("bdMapBox");
	var nowCity = new BMap.LocalCity();
	nowCity.get(bdGetPosition);

	function bdGetPosition(result) {
		var cityName = result.name;
		alert(cityName)
	}
});



</script>
<script>


$(function(){
       var code = getQueryString('code');
           console.log(code)
           var url =  'https://api.weixin.qq.com/sns/oauth2/access_token?appid=wxba173a67df14c087&secret=1b1bf0c279a0d9eb0ec7288787ccb20a&code='+ code +'&grant_type=authorization_code';
		   //window.location = url;

               function getQueryString(name) {//取URL参数  你要得到userid 就传userid
                   var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
                   var r = window.location.search.substr(1).match(reg);
                   if (r != null) return unescape(r[2]); return null;
               }

})

</script>


