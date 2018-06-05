<style>
body {background:#eaeaea}

 <?php
	/**
	 * APP、微信中调用webview时配合URL按需显示相应部分
	 * 此处以在APP中以WebView打开页面时不显示页面header部分为例
	 */
	if ($this->user_agent['is_wechat'] || $this->user_agent['is_desktop']):
?>
 .tabcontent{padding-top:1rem}
<?php endif ?>
			.listtext{width:4.54rem;height:1.6rem;font-size:.26rem;color:#3e3a39}
			.ui-loader{display:none}
			.cube{position:relative;width:94.67%}
			.swiper-pagination2{position:absolute;text-align:center;bottom:-2px;width:100%;z-index:10}
			.swiper-pagination2 span{margin:0 5px}
			.swiper-container_fruit{width:100%;overflow:hidden;height:2.18rem}
			.usercenter{background-size:cover;height:3.5rem;background:url(<?php echo CDN_URL ?>media/account/mine/beijing@3x.png) no-repeat center left;border-bottom-left-radius:.35rem;border-bottom-right-radius:.35rem;overflow:hidden}
			#addressWrap{
				position: absolute;top: 100px;left: 0px;z-index: 999;visibility: hidden;height: 100%;
			}
			.mui-indexed-list{height: 100% !important;}
			.mui-bar {-webkit-box-shadow: none;box-shadow: none;height: 0px;}
			.mui-icon-back:before, .mui-icon-left-nav:before{content: '\e460';color: #000;}
			.mui-indexed-list-bar{width: 40px;background: #fff;}
			.mui-indexed-list-bar.active{background: #fff;}
			.mui-indexed-list-bar.active a{color: #007aff;}
			.mui-indexed-list-bar a{color:#007aff;}
			.mui-indexed-list-group{background: #fff;padding-top: 15px;padding-bottom: 15px;}
			.mui-table-view-divider:after,.mui-table-view-divider:before,.mui-table-view:before{height: 0;}
			.mui-indexed-list,.mui-indexed-list-search{border: none;}
			.mui-indexed-list-search{height: 28px;}
			/*添加class*/
			.module-indexed-box{
				padding-right: 50px;
			}
			#recentcitycur{
				height: 40px;
				overflow: hidden;
			}
			#recentcitycur span{
				margin-bottom: 30px;
			}
			.module-address{
				padding:0 15px;
				padding-right: 0;
				font-size: 16px;
				color: #656566;
				background: #fff;
				height: 50px;
				line-height: 50px;
				margin: 0;
				position: relative;
			}
			.module-address span{
				display: block;
				border: 1px solid #d9d9d9;
				border-radius: 4px;
				height: 40px;
				line-height: 40px;
				margin-top:5px ;
				padding: 0 13px;
			}
			.trading-area,.recent-area{padding: 10px 15px;}
			.trading-area li{
				float: left;
				color: #999999;
				background: #f5f5f5;
				border: 1px solid #f5f5f5;
				font-size: 16px;
				padding: 5px 8px;
				border-radius: 16px;
				margin: 10px 15px 10px 0;
			}
			.trading-area li.active{
				background: #fff;
				color: #000;
				border: 1px solid #ffd401;
			}
			.recent-area span{
				display: inline-block;
				padding: 8px 14px;
				color: #8b8b8c;
				border: 1px solid #dbdbdb;
				border-radius: 4px;
				width: 21%;
				margin-right: 3%;
				font-size: 16px;
				text-align: center;
				overflow: hidden;
				text-overflow:ellipsis;
				white-space: nowrap;
			}
			/*.recent-area span:nth-child(3n){margin-right: 0;}*/
			.hot-area span{margin-top: 15px;margin-bottom: 15px;}
			.mui-bar-nav~.mui-content{
				padding-top: 0px;
				height: 100%;
			}
			.swiper-container-horizontal > .swiper-pagination{
				bottom: .1rem;
				left: 0;
				width: 100%;
			}
</style>
<script>
$(function() {
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
		<!--定位信息结束-->
		<div class="address">
			<div class="maptext">
				<span>崂山区</span>
				<i class="icon-xialajiantou"></i>
			</div>
			<!--搜索框区域-->
			<div class="searchtext">
				<img src="<?php echo CDN_URL ?>media/home/search.png">
			</div>
			<!--扫描区域-->
			<div class="wechatwrap">
				<span class="saoyisao">
					<img src="<?php echo CDN_URL ?>media/home/saoyisao.png" id="wechat-scan">
				</span>
				<span class="kefu">
					<img src="<?php echo CDN_URL ?>media/home/kefu.png">
				</span>
			</div>
		</div>
		
<?php endif ?>
 <div style="font-size: .12rem;" id="banben"></div>

		<div class="tabcontent" id="listMenu">
			<div class="item" style="display: block;">
				<!--菜单区域开始-->
				<div class="menuOuter">
				<div class="swiper-container" style="border-radius: 0;border-bottom-left-radius: .2rem;border-bottom-right-radius: .2rem;">
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
                             <a href="<?php echo base_url('page/detail?id=6') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap4">
                                    <img data-src="<?php echo CDN_URL ?>media/home/gaoduandingzhi@3x.png">
                                </div>
                                <!--文字-->
                                <span class="text">高端定制</span>
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
                                    <img data-src="<?php echo CDN_URL ?>media/home/yundognjiankang@3x.png">
                                </div>
                                <!--文字-->
                                <span class="text">运动健康</span>
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
						
					</ul>
				</div>
			
			</div>
			<!-- Add Pagination -->
	      <!--<div class="swiper-pagination"></div>-->
			</div>
			</div>
				<!--广告图区域-->
				<div class="menuOuter">
			<div class="swiper-containeradvertisement">
				<div class="swiper-wrapper">
					<div class="addpic auto swiper-slide">
						<a href="<?php echo base_url('biz/detail?id=32') ?>" target="_self">
						<img src="<?php echo CDN_URL ?>media/home/banner@3x.png">
						</a>
					</div>
						<!--<div class="addpic auto swiper-slide">
							<a href="<?php echo base_url('biz/detail?id=20') ?>" target="_self">
							<img src="<?php echo CDN_URL ?>media/home/banner2.png">
							</a>
						</div>-->
						<div class="addpic auto swiper-slide">
							<a href="<?php echo base_url('biz/detail?id=37') ?>" target="_self">
							<img src="<?php echo CDN_URL ?>media/home/yhzx.jpg">
							</a>
						</div>
						<div class="addpic auto swiper-slide">
							<a href="<?php echo base_url('biz/detail?id=45') ?>" target="_self">
							<img src="<?php echo CDN_URL ?>media/home/banner3.jpg">
							</a>
						</div>
						<!--add-->
						<div class="addpic auto swiper-slide">
							<a href="<?php echo base_url('biz/detail?id=106') ?>" target="_self">
							<img src="<?php echo CDN_URL ?>media/home/banner4.jpg">
							</a>
						</div>
						<div class="addpic auto swiper-slide">
							<a href="<?php echo base_url('biz/detail?id=124') ?>" target="_self">
							<img src="<?php echo CDN_URL ?>media/home/xbmy.jpg">
							</a>
						</div>
						<!--<div class="addpic auto swiper-slide">
							<a href="<?php echo base_url('biz/detail?id=28') ?>" target="_self">
							<img src="<?php echo CDN_URL ?>media/home/banner6.jpg">
							</a>
						</div>-->
						<!--<div class="addpic auto swiper-slide">
							<a href="<?php echo base_url('biz/detail?id=32') ?>" target="_self">
							<img src="<?php echo CDN_URL ?>media/home/banner7.jpg">
							</a>
						</div>-->
						<div class="addpic auto swiper-slide">
							<a href="<?php echo base_url('biz/detail?id=36') ?>" target="_self">
							<img src="<?php echo CDN_URL ?>media/home/banner2.png">
							</a>
						</div>
				</div>
						<!-- Add Pagination -->
	      			<div class="swiper-pagination2"></div>
				</div>
				<!--公告文字区域开始-->
				<div class="announcement auto">
					<!--左边图片区域-->
					<a href="<?php echo base_url() ?>/application/views/article/article_broadcast.html">
						<div class="pic">
							<img src="<?php echo CDN_URL ?>media/home/title.png">
						</div>
					</a>
					<div class="line"></div>
					<!--右边文字部分-->
					<div class="text" id="news">
						<ul class="clearfix">
							<li>
								<a href="<?php echo base_url() ?>/application/views/article/article_broadcast.html">
								<span class="cir"></span><span class="listr">进来与精良为伍</span>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url() ?>/application/views/article/article_broadcast.html">
								<span class="cir"></span><span class="listr">本地生活严选平台</span>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url() ?>/application/views/article/article_broadcast.html">
								<span class="cir"></span>
								<span class="listr">进来与精良为伍</span>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url() ?>/application/views/article/article_broadcast.html">
								<span class="cir"></span>
								<span class="listr">本地生活严选平台</span>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url() ?>/application/views/article/article_broadcast.html">
								<span class="cir"></span><span class="listr">进来与精良为伍</span>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url() ?>/application/views/article/article_broadcast.html">
								<span class="cir"></span><span class="listr">本地生活严选平台</span>
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
                                <a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
                                <img data-src="<?php echo CDN_URL ?>media/home/jianhuo@3x.jpg">
                                </a>
                            </div>
                            <div class="swiper-slide advercube">
                                <a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
                                <img data-src="<?php echo CDN_URL ?>media/home/jianhuo_putao@3x.jpg">
                                </a>
                            </div>
                            <div class="swiper-slide advercube">
                                <a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
                                <img data-src="<?php echo CDN_URL ?>media/home/yujia@3x.jpg">
                                </a>
                            </div>
                            <div class="swiper-slide advercube">
                                <a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
                                <img data-src="<?php echo CDN_URL ?>media/home/jianhuo_mangguo@3x.jpg">
                                </a>
                            </div>
                            <div class="swiper-scrollbarcube"></div>
                        </div>
                    </div>
				</div>
				<!--商家爆品-->
				<div class="wid718 auto bgfff border20 exercise clearfix fl">
					<div class="bgefefef">
					<img src="<?php echo CDN_URL ?>media/home/shangjiabaopin/shangjiabaopin.png">
					</div>
				</div>
				<div class="coloroverlay mt14 fl" style="margin-bottom: .1rem;">
				<div class="coloroverlaywrap">
					<div class="zbottom zbottomaction pinkactionbp">
					</div>
					<div class="zbottom zfirst zfirstaction pinkactionbp">
					</div>
					
					<div class="zbottom zthree action">
						Come in Recommend
						<span class="r">爆品商家</span>
					</div>
					
				</div>
				<div class="fr square" id="dzcpmore">
					<img data-src="<?php echo CDN_URL ?>media/home/dzcplist.png" class="block auto" style="height:.42rem">
				</div>
			</div>
			<div class="coloroverlaycontent clearfix" style="margin-top:.14rem">
				<!--运动装备区域-->
				<div class="mid fl dzcpinfo">
					<a href="<?php echo base_url('biz/detail?id=84') ?>" target="_self">
					<div class="midright fr mt0">
						<div class="bgefefef">
						<img data-src="<?php echo CDN_URL ?>media/home/shangjiabaopin/nzg.jpg">
						</div>
						<h1>澳滋黑胡椒眼肉牛排40元</h1>
					</div>
					</a>
					<a href="<?php echo base_url('biz/detail?id=45') ?>" target="_self">
					<div class="midleft fl mt0">
						<div class="bgefefef">
						<img data-src="<?php echo CDN_URL ?>media/home/shangjiabaopin/sl.jpg">
						</div>
						<h1>皇家圣蓝天然矿泉水1500ml</h1>
					</div>
					</a>
					
				</div>
				</div>
				<div class="coloroverlaycontent clearfix dzcpinfo" style="margin-top:.10rem">
				<div class="mid fl">
					<a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
					<div class="midleft fr">
						<img src="<?php echo CDN_URL ?>media/home/shangjiabaopin/gnb.jpg" class="success">
						<h1>西班牙进口慕利酒园干红葡萄酒 纸袋装两支</h1>
						<!--<h2>1309 我的MAC</h2>-->
					</div>
					</a>
					<a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
					<div class="midright fl">
						<img src="<?php echo CDN_URL ?>media/home/shangjiabaopin/qt.jpg" class="success">
						<h1>四川柠檬</h1>
						<!--<h2>爱疯 爱疯 疯</h2>-->
					</div>
					</a>
				</div>
			</div>
			<!--电子产品点击list后显示的内容-->
			<div class="swiper-container7" style="border-radius: .2rem;display: none;" id="dzcplistInfo">
				   <div class="swiper-wrapper">
				    <div class="swiper-slide">
				     <div class="list-group-item">
				      <a href="<?php echo base_url('item/detail?id=4177') ?>">
				       <div class="list">
				        <img src="<?php echo CDN_URL ?>media/home/shangjiabaopin/sjbp/jbnrl.jpg" class="fl">
				        <div class="listtext fr">
				         <span class="area">0.9km</span>
				         <h1>君博牛肉粒 500g</h1>
				         <div class="star">
				          <ul>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				          </ul>
				         </div>
				         <div class="tag">
				          麦岛路沿线 肉类
				         </div>
				         <div class="allbuy">
				          <span class="tuan">团</span>
				          <span>100元</span>
				         </div>
				        </div>
				       </div>
				       </a>
                         <a href="<?php echo base_url('item/detail?id=4136') ?>">
				       <div class="list">
				        <img src="<?php echo CDN_URL ?>media/home/shangjiabaopin/sjbp/dfsc.jpg" class="fl">
				        <div class="listtext fr">
				         <span class="area">0.3km</span>
				         <h1>德发奶酪香肠</h1>
				         <div class="star">
				          <ul>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				          </ul>
				         </div>
				         <div class="tag">
				          麦岛路沿线 肉类
				         </div>
				         <div class="allbuy">
				          <span class="tuan">团</span>
				          <span>26元</span>
				         </div>
				        </div>
				       </div></a>
				       <a href="<?php echo base_url('item/detail?id=4141') ?>">
				      <div class="list">
				       <img src="<?php echo CDN_URL ?>media/home/shangjiabaopin/sjbp/yxy.jpg" class="fl">
				       <div class="listtext fr">
				        <span class="area">0.3km</span>
				        <h1>银鳕鱼</h1>
				        <div class="star">
				         <ul>
				          <li><i class="icon-weixuanzhong2"></i></li>
				          <li><i class="icon-weixuanzhong2"></i></li>
				          <li><i class="icon-weixuanzhong2"></i></li>
				          <li><i class="icon-weixuanzhong2"></i></li>
				          <li><i class="icon-weixuanzhong2"></i></li>
				         </ul>
				        </div>
				        <div class="tag">
				         麦岛路沿线 鱼类
				        </div>
				        <div class="allbuy">
				         <span class="tuan">团</span>
				         <span>99元</span>
				        </div>
				       </div>
				      </div>
				      </a>
                         <a href="<?php echo base_url('item/detail?id=4138') ?>">
				       <div class="list">
				        <img src="<?php echo CDN_URL ?>media/home/shangjiabaopin/sjbp/bjtx.jpg" class="fl" />
				        <div class="listtext fr">
				         <span class="area">2.3km</span>
				         <h1>北极甜虾 30尾</h1>
				         <div class="star">
				          <ul>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				          </ul>
				         </div>
				         <div class="tag">
				          麦岛路沿线 虾类
				         </div>
				         <div class="allbuy">
				          <span class="tuan">团</span>
				          <span>26.80元</span>
				         </div>
				        </div>
				       </div></a>
				     </div>
				    </div>
				   </div>
				  </div>
				<div class="botWrap auto wid718 border20 mt10 clearfix">
					<div class="dotcontent clearfix bgfff border20">
						<ul>
							<a href="<?php echo base_url('item/detail?id=4177') ?>" target="_self">
							<li>
								<img src="<?php echo CDN_URL ?>media/home/shangjiabaopin/sjbp/jbnrl.jpg" class="auto block">
								<h1>君博牛肉粒 500g</h1>
								<h2>¥100.00</h2>
							</li>
							</a>
							<a href="<?php echo base_url('item/detail?id=4136') ?>" target="_self">
							<li>
								<img src="<?php echo CDN_URL ?>media/home/shangjiabaopin/sjbp/dfsc.jpg" class="auto block">
								<h1>德发奶酪香肠</h1>
								<h2>¥26.00</h2>
							</li>
							</a>
							<a href="<?php echo base_url('item/detail?id=4141') ?>" target="_self">
							<li>
								<img src="<?php echo CDN_URL ?>media/home/shangjiabaopin/sjbp/yxy.jpg" class="auto block">
								<h1>银鳕鱼</h1>
								<h2>¥99.00</h2>
							</li>
							</a>
							<a href="<?php echo base_url('item/detail?id=4138') ?>" target="_self">
							<li>
								<img src="<?php echo CDN_URL ?>media/home/shangjiabaopin/sjbp/bjtx.jpg" class="auto block">
								<h1>北极甜虾 30尾</h1>
								<h2>¥26.80</h2>
							</li>
							</a>
						</ul>
					</div>
				</div>

				<!--新品上新图片-->
				<div class="newgoodspic auto">
					<img data-src="<?php echo CDN_URL ?>media/home/xinpinshangxin/xinpinshangxin@3x.png">
				</div>
				<!--新品上新商品区域开始-->
				<div class="newgoodslist auto clearfix">
					<div class="twocol clearfix">
						<div class="goodsleft">
							<ul class="clearfix">
								<li>
									<a href="<?php echo base_url('item/detail?id=4179') ?>" target="_self">
									<div class="pic">
										<img data-src="<?php echo CDN_URL ?>media/home/xinpinshangxin/xpsx156/156x156.jpg">
									</div>
									</a>
									<p>君博黑牛脖骨</p>
									<span>¥60.00</span>
								</li>
								<li style="margin-left: .3rem;">
									<a href="<?php echo base_url('item/detail?id=4178') ?>" target="_self">
									<div class="pic">
										<img data-src="<?php echo CDN_URL ?>media/home/xinpinshangxin/xpsx156/156x156_1.jpg">
									</div>
										</a>
									<p>君博黑牛牛尾</p>
									<span>¥140.00</span>
								</li>
							</ul>
						</div>
						<div class="goodsleft" style="margin-left:.1rem">
							<ul class="clearfix">
								<li>
									<a href="<?php echo base_url('item/detail?id=4174') ?>" target="_self">
									<div class="pic">
										<img data-src="<?php echo CDN_URL ?>media/home/xinpinshangxin/xpsx156/156x156_2.jpg">
									</div>
									</a>
									<p>君博黑牛原切眼肉牛排眼肉</p>
									<span>¥400.00</span>
								</li>
								<li style="margin-left:.3rem;">
									<a href="<?php echo base_url('item/detail?id=4051') ?>" target="_self">
									<div class="pic">
										<img data-src="<?php echo CDN_URL ?>media/home/xinpinshangxin/xpsx156/156x156_3.jpg">
									</div>
									</a>
									<p>特级五花肉块</p>
									<span>¥25.00</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="threecol">
						<ul>
							<li>
								<a href="<?php echo base_url('item/detail?id=3870') ?>" target="_self">
								<div class="pic">
									<img data-src="<?php echo CDN_URL ?>media/home/xinpinshangxin/xpsx160/160x160_0.jpg">
								</div>
								</a>
								<p>特级猪外脊切片</p>
								<span>¥21.80</span>
							</li>
							<li>
								<a href="<?php echo base_url('item/detail?id=3971') ?>" target="_self">
								<div class="pic">
									<img data-src="<?php echo CDN_URL ?>media/home/xinpinshangxin/xpsx160/160x160_1.jpg">
								</div>
								</a>
								<p>特级猪五花肉片</p>
								<span>¥19.90</span>
							</li>
							<li style="margin-right:0">
								<a href="<?php echo base_url('item/detail?id=4054') ?>" target="_self">
								<div class="pic">
									<img data-src="<?php echo CDN_URL ?>media/home/xinpinshangxin/xpsx160/160x160_2.jpg">
								</div>
								</a>
								<p>优质猪前排</p>
								<span>¥48.80</span>
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
							<a href="<?php echo base_url('item/detail?id=4097') ?>" target="_self">
							<div class="pic">
								<img data-src="<?php echo CDN_URL ?>media/home/zaixianpintuan/240x240.jpg">
							</div>
							</a>
							<h1>进口绿果</h1>
							<h2>3个/份</h2>
							<p>
								<span class="fl"><del>¥21.8</del></span>
								<span class="fr">¥19.8</span>
							</p>
						</div>
						<div class="onlinegoodsright fr">
							<div class="onlinegoodstop">
								<ul>
									<li>
										<a href="<?php echo base_url('item/detail?id=4005') ?>" target="_self">
										<div class="pic">
											<img data-src="<?php echo CDN_URL ?>media/home/zaixianpintuan/lm.jpg">
										</div>
										</a>
										<h1>蓝莓 125g/盒</h1>
										<h2>¥25.8/盒</h2>
									</li>
									<li>
										<a href="<?php echo base_url('item/detail?id=3872') ?>" target="_self">
										<div class="pic">
											<img data-src="<?php echo CDN_URL ?>media/home/zaixianpintuan/pg.jpg">
										</div>
										</a>
										<h1>墨西哥牛油果</h1>
										<h2>¥15.80/个</h2>
									</li>
								</ul>
							</div>
							<div class="onlinegoodstop" style="margin-top:.1rem">
								<ul>
									<li>
										<a href="<?php echo base_url('item/detail?id=4007') ?>" target="_self">
										<div class="pic">
											<img data-src="<?php echo CDN_URL ?>media/home/zaixianpintuan/tg.jpg">
										</div>
										</a>
										<h1>青岛蜜宝甜瓜</h1>
										<h2>¥15.80/份</h2>
									</li>
									<li>
										<a href="<?php echo base_url('item/detail?id=3956') ?>" target="_self">
										<div class="pic">
											<img data-src="<?php echo CDN_URL ?>media/home/zaixianpintuan/jz.jpg">
										</div>
										</a>
										<h1>四川丑桔（丑八怪）900-1000g/份</h1>
										<h2>¥19.80/份</h2>
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
					<div class="zbottom" data-title="junbo">
						<b>君博</b>
						<a style="display: none;">JunBo</a>
						<i style="display: none;">时尚</i>
						
					</div>
					<div class="zbottom zfirst" data-title="defa" style="left:.94rem">
						<b>澳滋</b>
						<a style="display: none;">AoZi</a>
						<i style="display: none;">丽人</i>
						
					</div>
					<div class="zbottom zthree" data-title="yuge">
						<b>鱼哥</b>
						<a style="display: none;">YuGe</a>
						<span class="r">鱼哥</span>
						<i style="display: none;">鱼哥</i>
						
					</div>
					<!--<div class="zbottom zthree coverCur">
						<b>美食</b>
						<a style="display: none;">Delatious</a>
						<span class="r">美食</span>
						<i style="display: none;">美食</i>
					</div>-->
					
				</div>
				<div class="fr squarecube" id="more">
					<img src="<?php echo CDN_URL ?>media/home/list.png" class="block auto">
				</div>
			</div>
			<!--颜色叠加区域内容-->
			<div class="coloroverlaycontent clearfix" id="morelist">
				<!--时尚内容-->
				<div class="colorovertab clearfix" style="display:block" data-title="junbo">
				<div class="left fl refreshcontent">
					<a href="<?php echo base_url('biz/detail?id=130') ?>" target="_self">
						<div class="bgefefef">
						<img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/top1.png">
						</div>
						<h1>牛眼肉新贵都 52.8元</h1>
					</a>
				</div>
				<div class="right fr refreshcontent">
					<a href="<?php echo base_url('biz/detail?id=116') ?>" target="_self">
						<div class="bgefefef">
						<img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/top2.png">
						</div>
						<h1>牛筋头巴脑 君博120元</h1>
					</a>
				</div>
				<div class="mid fl" style="margin-top:.1rem !important">
					<div class="midleft refreshcontent">
						<a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
							<img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/jphnp.png">
							<h1>精肉黑牛扒 130元</h1>
							<!--<h2>面包也可以带有亲情</h2>-->
						</a>
					</div>
					<div class="midright fr refreshcontent">
						<a href="<?php echo base_url('biz/detail?id=116') ?>" target="_self">
							<img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/xl.png">
							<h1>西冷150g</h1>
							<!--<h2>甜品也可以甜而不腻</h2>-->
						</a>
					</div>
				</div>
				</div>
				<!--丽人内容-->
				<div class="colorovertab clearfix" data-title="aozi">
				<div class="left fl refreshcontent">
					<a href="<?php echo base_url('biz/detail?id=45') ?>" target="_self">
						<div class="bgefefef">
						<img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/zcc.png">
						</div>
						<h1>澳滋黑胡椒牛肉肠 24元</h1>
					</a>
				</div>
				<div class="right fr refreshcontent">
					<a href="<?php echo base_url('biz/detail?id=45') ?>" target="_self">
						<div class="bgefefef">
						<img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/nl.png">
						</div>
						<h1>澳滋黑胡椒西冷牛排 26元</h1>
					</a>
				</div>
				<div class="fl" style="margin-top:.1rem">
					<div class="midleft refreshcontent">
						<a href="<?php echo base_url('biz/detail?id=45') ?>" target="_self">
							<div class="bgefefef">
							<img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/pp.png">
							</div>
							<h1>澳滋黑胡椒眼肉牛排 22.8元</h1>
							<!--<h2>面包也可以带有亲情面包也可以带有亲情面包也可以带有亲情</h2>-->
						</a>
					</div>
					<div class="midright fr refreshcontent">
						<a href="<?php echo base_url('biz/detail?id=45') ?>" target="_self">
							<div class="bgefefef">
							<img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/xnr.png">
							</div>
							<h1>澳滋快熟早餐牛肉饼 26元</h1>
							<!--<h2>面包也可以带有亲情面包也可以带有亲情面包也可以带有亲情</h2>-->
						</a>
					</div>
				</div>
				</div>
				<!--娱乐内容-->
				<div class="colorovertab clearfix" data-title="yuge">
				<div class="left fl refreshcontent">
					<a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
						<div class="bgefefef">
						<img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/yz.png">
							</div>
						<h1>生吃瑶柱 48元</h1>
					</a>
				</div>
				<div class="right fr refreshcontent">
					<a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
						<div class="bgefefef">
						<img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/hwx.png">
							</div>
						<h1>红虾尾198元</h1>
					</a>
				</div>
				<div class="fl" style="margin-top:.1rem">
					<div class="midleft refreshcontent">
						<a href="<?php echo base_url('biz/detail?id=1') ?>">
							<div class="bgefefef">
							<img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/dzbg.png">
								</div>
							<h1>带籽比管 55元</h1>
							<!--<h2>面包也可以带有亲情面包也可以带有亲情面包也可以带有亲情</h2>-->
						</a>
					</div>
					<div class="midright fr refreshcontent" style="margin-left: .1rem;">
						<a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
							<div class="bgefefef">
							<img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/dyp.png">
								</div>
							<h1>鲽鱼片45</h1>
							<!--<h2>面包也可以带有亲情面包也可以带有亲情面包也可以带有亲情</h2>-->
						</a>
					</div>
				</div>
				</div>
				<div class="botWrap auto wid718 border20 fl mt10 clearfix">
					<div class="dotcontent clearfix bgfff border20">
						<ul>
							<a href="<?php echo base_url('item/detail?id=574') ?>" target="_self">
							<li>
                                <img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_0.jpg" class="auto block">
                                <h1>澳滋牛尾</h1>
                                <h2>¥312.00</h2>
							</li>
							</a>
							<li>
								<a href="<?php echo base_url('item/detail?id=3839') ?>" target="_self">
									<img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_1.jpg" class="auto block">
									<h1>精品超新鲜带鱼 500-550g/份（约2-4条）</h1>
									<h2>¥38.00</h2>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('item/detail?id=3927') ?>" target="_self">
									<img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_2.jpg" class="auto block">
									<h1>特级猪腱子肉   500g/份</h1>
									<h2>¥22.80</h2>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('item/detail?id=357') ?>" target="_self">
									<img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_3.jpg" class="auto block">
									<h1>三文鱼</h1>
									<h2>¥98.00</h2>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!--农产品预售-->
				<div class="wid718 auto bgfff border20 exercise clearfix fl">
					<div class="bgefefef">
					<img src="<?php echo CDN_URL ?>media/home/nongchanpin/nongchanpin@3x.png">
					</div>
				</div>
				<div class="coloroverlay fl" style="margin-bottom: .1rem;">
				<div class="coloroverlaywrap">
					<div class="zbottom zbottomaction pinkaction">
					</div>
					<div class="zbottom zfirst zfirstaction zfirstpinkaction">
					</div>
					
					<div class="zbottom zthree action">
						Come in Recommend
						<span class="r">绿色精选</span>
					</div>
					
				</div>
				<div class="fr square" id="lsjx">
					<img data-src="<?php echo CDN_URL ?>media/home/dzcplist.png" class="block auto" style="height:.42rem">
				</div>
			</div>
			<div class="coloroverlaycontent clearfix" style="margin-top:.14rem">
				<!--运动装备区域-->
				<div class="mid fl  lsjxinfo">
					<a href="<?php echo base_url('biz/detail?id=53') ?>" target="_self">
					<div class="midright fr mt0">
						<div class="bgefefef">
						<img data-src="<?php echo CDN_URL ?>media/home/nongchanpin/djf.png">
						</div>
						<h1>大金发野猪肉排骨1kg 188元</h1>
					</div>
					</a>
					<a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
					<div class="midleft fl mt0">
						<div class="bgefefef">
						<img data-src="<?php echo CDN_URL ?>media/home/nongchanpin/sy.png">
						</div>
						<h1>黑美人西瓜切盒</h1>
					</div>
					</a>
					
				</div>
				</div>
				<div class="coloroverlaycontent clearfix lsjxinfo" style="margin-top:.10rem">
				<div class="mid fl">
					<a href="<?php echo base_url('biz/detail?id=46') ?>" target="_self">
					<div class="midleft fr">
						<img src="<?php echo CDN_URL ?>media/home/nongchanpin/mmltx.jpg" class="success">
						<h1>麻麻辣天下 麻辣天下麻辣基尾虾</h1>
						<!--<h2>1309 我的MAC</h2>-->
					</div>
					</a>
					<a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
					<div class="midright fl">
						<img src="<?php echo CDN_URL ?>media/home/nongchanpin/stm.jpg" class="success">
						<h1>硕泰米</h1>
						<!--<h2>爱疯 爱疯 疯</h2>-->
					</div>
					</a>
				</div>
			</div>
			<!--电子产品点击list后显示的内容-->
			<div class="swiper-container7" style="margin-top:.1rem;border-radius: .2rem;display: none;" id="lsjxinfo">
				   <div class="swiper-wrapper">
				    <div class="swiper-slide">
				     <div class="list-group-item">
				      <a href="<?php echo base_url('item/detail?id=3913') ?>">
				       <div class="list">
				        <img src="<?php echo CDN_URL ?>media/home/nongchanpin/yth.jpg" class="fl">
				        <div class="listtext fr">
				         <span class="area">0.3km</span>
				         <h1>野茼蒿</h1>
				         <div class="star">
				          <ul>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				          </ul>
				         </div>
				         <div class="tag">
				          麦岛路沿线 蔬菜类
				         </div>
				         <div class="allbuy">
				          <span class="tuan">团</span>
				          <span>15.80元</span>
				         </div>
				        </div>
				       </div>
				       </a>
                         <a href="<?php echo base_url('item/detail?id=4030') ?>">
				       <div class="list">
				        <img src="<?php echo CDN_URL ?>media/home/nongchanpin/lysqz.jpg" class="fl">
				        <div class="listtext fr">
				         <span class="area">3.3km</span>
				         <h1>临沂山茄子</h1>
				         <div class="star">
				          <ul>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				          </ul>
				         </div>
				         <div class="tag">
				          麦岛路沿线 蔬菜类
				         </div>
				         <div class="allbuy">
				          <span class="tuan">团</span>
				          <span>9.80元</span>
				         </div>
				        </div>
				       </div></a>
                         <a href="<?php echo base_url('item/detail?id=4048') ?>">
				       <div class="list">
				        <img src="<?php echo CDN_URL ?>media/home/nongchanpin/njzysc.jpg" class="fl">
				        <div class="listtext fr">
				         <span class="area">9.3km</span>
				         <h1>农家紫叶生菜</h1>
				         <div class="star">
				          <ul>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				          </ul>
				         </div>
				         <div class="tag">
				          麦岛路沿线 蔬菜类
				         </div>
				         <div class="allbuy">
				          <span class="tuan">团</span>
				          <span>15.80元 </span>
				         </div>
				        </div>
				       </div>
				       </a>
                         <a href="<?php echo base_url('item/detail?id=4037') ?>">
				       <div class="list">
				        <img src="<?php echo CDN_URL ?>media/home/nongchanpin/sgcj.jpg" class="fl">
				        <div class="listtext fr">
				         <span class="area">0.3km</span>
				         <h1>寿光彩椒</h1>
				         <div class="star">
				          <ul>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				          </ul>
				         </div>
				         <div class="tag">
				          麦岛路沿线 蔬菜类
				         </div>
				         <div class="allbuy">
				          <span class="tuan">团</span>
				          <span>99元</span>
				         </div>
				        </div>
				       </div></a>
				     </div>
				    </div>
				   </div>
				  </div>
				<div class="botWrap auto wid718 border20 mt10 clearfix">
					<div class="dotcontent clearfix bgfff border20">
						<ul>
							<a href="<?php echo base_url('item/detail?id=3913') ?>" target="_self">
							<li>
								<img src="<?php echo CDN_URL ?>media/home/nongchanpin/yth.jpg" class="auto block">
								<h1>野茼蒿</h1>
								<h2>¥15.8</h2>
							</li>
							</a>
							<a href="<?php echo base_url('item/detail?id=4030') ?>" target="_self">
							<li>
								<img src="<?php echo CDN_URL ?>media/home/nongchanpin/lysqz.jpg" class="auto block">
								<h1>临沂山茄子</h1>
								<h2>¥9.80</h2>
							</li>
							</a>
							<a href="<?php echo base_url('item/detail?id=4048') ?>" target="_self">
							<li>
								<img src="<?php echo CDN_URL ?>media/home/nongchanpin/njzysc.jpg" class="auto block">
								<h1>农家紫叶生菜</h1>
								<h2>¥15.80</h2>
							</li>
							</a>
							<a href="<?php echo base_url('item/detail?id=4037') ?>" target="_self">
							<li>
								<img src="<?php echo CDN_URL ?>media/home/nongchanpin/sgcj.jpg" class="auto block">
								<h1>寿光彩椒</h1>
								<h2>¥16.00</h2>
							</li>
							</a>
						</ul>
					</div>
				</div>
				<!--运动健康区域-->
				<div class="wid718 auto bgfff border20 exercise fl">
					<img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/yundongjiankang@3x.png">
				</div>
				<div class="coloroverlay mt14 fl">
				<div class="coloroverlaywrap">
					<div class="zbottom zbottomaction">
					</div>
					<div class="zbottom zfirst zfirstaction">
					</div>
					
					<div class="zbottom zthree action">
						Come in Recommend
						<span class="r">满减心跳</span>
					</div>
					
				</div>
				<div class="fr square" id="ydjkmore">
					<img data-src="<?php echo CDN_URL ?>media/home/ydjklist.png" class="block auto">
				</div>
			</div>
				<div class="coloroverlaycontent clearfix fl ydjkinfo">
				
				<!--运动装备区域-->
				<div class="mid fl">
					<a href="<?php echo base_url('biz/detail?id=33') ?>" target="_self">
					<div class="midleft fr mt0">
						<div class="bgefefef">
						<img src="<?php echo CDN_URL ?>media/home/yundongjiankang/left.png">
						</a>
						</div>
						<h1>青岛涵碧楼两天一夜</h1>
					</div>
					</a>
					<a href="<?php echo base_url('item/detail?id=4185') ?>" target="_self">
					<div class="midright fl mt0">
						<div class="bgefefef">
						<img src="<?php echo CDN_URL ?>media/home/yundongjiankang/right.png">
						</div>
						<h1>苹果X 【预售3-5天送达】Apple iPhone X  256GB 银色</h1>
					</div>
					</a>
				</div>
				</div>
				
			</div>
			<!--进来推荐区域内容-->
			<div class="coloroverlaycontent clearfix" style="margin-top:.1rem">
				<div class="mid fl ydjkinfo">
					<div class="midleft fl">
						<div class="bgefefef">
							<a href="<?php echo base_url('item/detail?id=4278') ?>" target="_self">
						<img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/hcssjbig.png">
							</a>
						</div>
						<h1>【预售3-5天送达】荣耀 V9 全网通 高配版 6GB+64GB 铂光金 双卡双待</h1>
						<!--<h2>DIOS精准标靶装备</h2>-->
					</div>
					<div class="midright fr">
						<div class="bgefefef">
							<a href="<?php echo base_url('biz/detail?id=13') ?>" target="_self">
						<img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/hcssjsmall.png">
							</a>
						</div>
						<h1>海信电视55寸4K</h1>
						<!--<h2>极限运动装备</h2>-->
					</div>
				</div>
				
				<!--运动健康列表内容区域-->
				<div class="swiper-container7" style="margin-top:.1rem;border-radius: .2rem;display: none;" id="ydjklistInfo">
				   <div class="swiper-wrapper">
				    <div class="swiper-slide">
				     <div class="list-group-item">
				      <a href="<?php echo base_url('item/detail?id=4274') ?>">
				       <div class="list">
				        <img src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_0.jpg" class="fl">
				        <div class="listtext fr">
				         <span class="area">0.9km</span>
				         <h1>【预售3-5天送达】Apple iPhoneX  256GB 银色</h1>
				         <div class="star">
				          <ul>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				          </ul>
				         </div>
				         <div class="tag">
				          香港中路沿线 电器类
				         </div>
				         <div class="allbuy">
				          <span class="tuan">团</span>
				          <span>1488.00元</span>
				         </div>
				        </div>
				       </div></a>
                         <a href="<?php echo base_url('item/detail?id=3937') ?>">
				       <div class="list">
				        <img src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_1.jpg" class="fl">
				        <div class="listtext fr">
				         <span class="area">0.1km</span>
				         <h1>龙泉青瓷冰裂纹挂盘</h1>
				         <div class="star">
				          <ul>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				          </ul>
				         </div>
				         <div class="tag">
				          闽江路沿线 家居 
				         </div>
				         <div class="allbuy">
				          <span class="tuan">团</span>
				          <span>3080.00元</span>
				         </div>
				        </div>
				       </div></a>
                         <a href="<?php echo base_url('item/detail?id=4057') ?>">
				       <div class="list">
				        <img src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_2.jpg" class="fl">
				        <div class="listtext fr">
				         <span class="area">0.4km</span>
				         <h1>日本资生堂秀场造型质感发蜡（自然型白）</h1>
				         <div class="star">
				          <ul>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				          </ul>
				         </div>
				         <div class="tag">
				          长江路沿线 家居
				         </div>
				         <div class="allbuy">
				          <span class="tuan">团</span>
				          <span>158.00元</span>
				         </div>
				        </div>
				       </div></a>
                         <a href="<?php echo base_url('item/detail?id=4244') ?>">
				       <div class="list">
				        <img src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_3.jpg" class="fl">
				        <div class="listtext fr">
				         <span class="area">0.3km</span>
				         <h1>【预售5-7天送达】Yale 耶鲁指纹锁智能锁密码锁刷卡感应防盗门家用锁ZEN-R</h1>
				         <div class="star">
				          <ul>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				          </ul>
				         </div>
				         <div class="tag">
				          麦岛路沿线 家居
				         </div>
				         <div class="allbuy">
				          <span class="tuan">团</span>
				          <span>3300。00元</span>
				         </div>
				        </div>
				       </div></a>
				     </div>
				    </div>
				   </div>
				  </div>
				<div class="botWrap auto wid718 border20 fl mt10 clearfix">
					<div class="dotcontent clearfix bgfff border20">
						<ul>
                            <li>
							    <a href="<?php echo base_url('item/detail?id=4274') ?>" target="_self">
                                    <img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_0.jpg" class="auto block">
                                    <h1>【预售3-5天送达】Apple iPhoneX  256GB 银色</h1>
                                    <h2>¥1488.00</h2>
							    </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('item/detail?id=3937') ?>" target="_self">
                                    <img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_1.jpg" class="auto block">
                                    <h1>龙泉青瓷冰裂纹挂盘</h1>
                                    <h2>¥3080.00</h2>
							    </a>
                            </li>
                            <li>
							    <a href="<?php echo base_url('item/detail?id=4057') ?>" target="_self">
                                    <img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_2.jpg" class="auto block">
                                    <h1>日本资生堂秀场造型质感发蜡（自然型白）</h1>
                                    <h2>¥158.00</h2>
							    </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('item/detail?id=4244') ?>" target="_self">
                                    <img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_3.jpg" class="auto block">
                                    <h1>【预售5-7天送达】Yale 耶鲁指纹锁智能锁密码锁刷卡感应防盗门家用锁ZEN-R</h1>
                                    <h2>¥3300.00</h2>
                                </a>
                            </li>
						</ul>
					</div>
				</div>
			</div>
				<!--电子产品-->
				<div class="wid718 auto bgfff border20 exercise clearfix">
					<div class="bgefefef">
					    <img src="<?php echo CDN_URL ?>media/home/dianzichanpin/dianzichanpin@3x.png">
					</div>
				</div>
				<div class="coloroverlay mt14">
                    <div class="coloroverlaywrap">
                        <div class="zbottom zbottomaction pinkactionzk">
                        </div>
                        <div class="zbottom zfirst zfirstaction pinkactionzk">
                        </div>
                        
                        <div class="zbottom zthree action">
                            Come in Recommend
                            <span class="r">攻心折扣</span>
                        </div>
                        
                    </div>
                    <div class="fr square" id="gxzkmore">
                        <img data-src="<?php echo CDN_URL ?>media/home/gxzklist.png" class="block auto" style="height:.42rem">
                    </div>
                </div>
			<div class="coloroverlaycontent clearfix gxzkinfo" style="margin-top:.14rem">
				<!--运动装备区域-->
				<div class="mid fl">
					<a href="<?php echo base_url('biz/detail?id=46') ?>" target="_self">
					<div class="midright fr mt0">
						<div class="bgefefef">
						<img data-src="<?php echo CDN_URL ?>media/home/dianzichanpin/left.png">
						</div>
						<h1>麻辣蟹钳 29元</h1>
					</div>
					</a>
					<a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
					<div class="midleft fl mt0">
						<div class="bgefefef">
						<img data-src="<?php echo CDN_URL ?>media/home/dianzichanpin/right.png">
						</div>
						<h1>德发早餐培根切片</h1>
					</div>
					</a>
				</div>
				</div>
				<div class="coloroverlaycontent clearfix gxzkinfo" style="margin-top:.10rem">
				<div class="mid fl">
					<a href="<?php echo base_url('biz/detail?id=45') ?>" target="_self">
					<div class="midleft fr">
						<img src="<?php echo CDN_URL ?>media/home/dianzichanpin/410x150.jpg" class="success">
						<h1>圣蓝一箱 皇家圣蓝天然矿泉水330ml*36瓶/箱 388元</h1>
						<!--<h2>1309 我的MAC</h2>-->
					</div>
					</a>
					<a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
					<div class="midright fl">
						<img src="<?php echo CDN_URL ?>media/home/dianzichanpin/260x150.jpg" class="success">
						<h1>鱼哥红金枪 50元</h1>
						<!--<h2>爱疯 爱疯 疯</h2>-->
					</div>
					</a>
				</div>
			</div>
			<!--电子产品点击list后显示的内容-->
			<div class="swiper-container7" style="margin-top:.1rem;border-radius:.2rem;display:none;" id="gxzkinfo">
				   <div class="swiper-wrapper">
				    <div class="swiper-slide">
				     <div class="list-group-item">
				      <a href="<?php echo base_url('item/detail?id=4202') ?>">
				       <div class="list">
				        <img src="<?php echo CDN_URL ?>media/home/dianzichanpin/dzcp/160x160_0.jpg" class="fl">
				        <div class="listtext fr">
				         <span class="area">0.3km</span>
				         <h1>精选薏米</h1>
				         <div class="star">
				          <ul>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				          </ul>
				         </div>
				         <div class="tag">
				          麦岛路沿线 粮食
				         </div>
				         <div class="allbuy">
				          <span class="tuan">团</span>
				          <span>10.80元</span>
				         </div>
				        </div>
				       </div></a>
                         <a href="<?php echo base_url('item/detail?id=4197') ?>">
				       <div class="list">
				        <img src="<?php echo CDN_URL ?>media/home/dianzichanpin/dzcp/160x160_1.jpg" class="fl">
				        <div class="listtext fr">
				         <span class="area">5.3km</span>
				         <h1>硕溙五常大米</h1>
				         <div class="star">
				          <ul>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				          </ul>
				         </div>
				         <div class="tag">
				          麦岛路沿线 粮食
				         </div>
				         <div class="allbuy">
				          <span class="tuan">团</span>
				          <span>198.00元</span>
				         </div>
				        </div>
				       </div></a>
                         <a href="<?php echo base_url('item/detail?id=4198') ?>">
				       <div class="list">
				        <img src="<?php echo CDN_URL ?>media/home/dianzichanpin/dzcp/160x160_2.jpg" class="fl">
				        <div class="listtext fr">
				         <span class="area">0.9km</span>
				         <h1>聚糖大米</h1>
				         <div class="star">
				          <ul>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				          </ul>
				         </div>
				         <div class="tag">
				          麦岛路沿线 粮食
				         </div>
				         <div class="allbuy">
				          <span class="tuan">团</span>
				          <span>118.00元 </span>
				         </div>
				        </div>
				       </div></a>
                         <a href="<?php echo base_url('item/detail?id=4322') ?>">
				       <div class="list">
				        <img src="<?php echo CDN_URL ?>media/home/dianzichanpin/dzcp/160x160_3.jpg" class="fl">
				        <div class="listtext fr">
				         <span class="area">0.3km</span>
				         <h1>月子小米</h1>
				         <div class="star">
				          <ul>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				           <li><i class="icon-weixuanzhong2"></i></li>
				          </ul>
				         </div>
				         <div class="tag">
				          麦岛路沿线 粮食
				         </div>
				         <div class="allbuy">
				          <span class="tuan">团</span>
				          <span>15.00元</span>
				         </div>
				        </div>
				       </div></a>
				     </div>
				    </div>
				   </div>
				  </div>
				<div class="botWrap auto wid718 border20 mt10 clearfix">
					<div class="dotcontent clearfix bgfff border20">
						<ul>
							<a href="<?php echo base_url('item/detail?id=4202') ?>">
							<li>
								<img src="<?php echo CDN_URL ?>media/home/dianzichanpin/dzcp/160x160_0.jpg" class="auto block">
								<h1>精选薏米 硕泰</h1>
								<h2>¥10.80</h2>
							</li>
							</a>
							<a href="<?php echo base_url('item/detail?id=4197') ?>">
							<li>
								<img src="<?php echo CDN_URL ?>media/home/dianzichanpin/dzcp/160x160_1.jpg" class="auto block">
								<h1>硕泰五常大米</h1>
								<h2>¥198.00</h2>
							</li>
							</a>
							<a href="<?php echo base_url('item/detail?id=4198') ?>">
							<li>
								<img src="<?php echo CDN_URL ?>media/home/dianzichanpin/dzcp/160x160_2.jpg" class="auto block">
								<h1>聚糖大米</h1>
								<h2>¥118.00</h2>
							</li>
							</a>
							<a href="<?php echo base_url('item/detail?id=4322') ?>">
							<li>
								<img src="<?php echo CDN_URL ?>media/home/dianzichanpin/dzcp/160x160_3.jpg" class="auto block">
								<h1>月子小米</h1>
								<h2>¥15.00</h2>
							</li>
							</a>
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
                            <a href="<?php echo base_url('item/detail?id=4103') ?>" target="_self">
                                <img data-src="<?php echo CDN_URL ?>media/home/cainixihuan/liebiao/lanmei@3x.png">
                                <h1>带仔甜虾</h1>
                                <h2>满籽北极虾，野生进口，捕捞后立即熟冻，只需简单冲洗就可以食用</h2>
                                <h3>¥38.00</h3>
                            </a>
						</li>

                        <li>
                            <a href="<?php echo base_url('item/detail?id=4020') ?>" target="_self">
                                <img data-src="<?php echo CDN_URL ?>media/home/cainixihuan/liebiao/mangguo@3x.png">
                                <h1>海南小台农芒果</h1>
                                <h2>清肠胃，抗癌，美化肌肤，防治高血压、动脉硬化，防治便秘，杀菌</h2>
                                <h3>¥15.80</h3>
                            </a>
                        </li>

                        <li class="mr0">
                            <a href="<?php echo base_url('item/detail?id=3907') ?>" target="_self">
                                <img data-src="<?php echo CDN_URL ?>media/home/cainixihuan/liebiao/pingguo@3x.png">
                                <h1>优选鸡爪</h1>
                                <h2>含有丰富的胶质，可滋养皮肤，美容养颜</h2>
                                <h3>¥17.80</h3>
                            </a>
                        </li>

						<li>
                            <a href="<?php echo base_url('item/detail?id=3971') ?>" target="_self">
                                <img data-src="<?php echo CDN_URL ?>media/home/cainixihuan/liebiao/putao@3x.png">
                                <h1>精选五花肉</h1>
                                <h2>富含蛋白质、碳水化合物等营养元素，补充人体热能</h2>
                                <h3>¥19.90</h3>
                            </a>
						</li>


						<li>
                            <a href="<?php echo base_url('item/detail?id=4187') ?>" target="_self">
                                <img data-src="<?php echo CDN_URL ?>media/home/cainixihuan/liebiao/yezi@3x.png">
                                <h1>烟台水晶红富士</h1>
                                <h2>山泉水灌溉，科学培育，人工除虫，无公害、无污染。</h2>
                                <h3>¥21.80</h3>
                            </a>
						</li>

                        <li class="mr0">
                            <a href="<?php echo base_url('item/detail?id=4056') ?>" target="_self">
                                <img data-src="<?php echo CDN_URL ?>media/home/cainixihuan/hxtt/xia@3x.png">
                                <h1>青岛鲜活鲍鱼</h1>
                                <h2>富含多种营养元素，可健脑补身，提高免疫力</h2>
                                <h3>¥42.80</h3>
                            </a>
                        </li>
					</ul>
				</div>
				<div class="fl footerpic">
					<img src="<?php echo CDN_URL ?>media/home/footerlogo.png">
				</div>
			</div>
			</div>
			</div>
			</div>
			
			<?php
	/**
	 * APP、微信中调用webview时配合URL按需显示相应部分
	 * 此处以在APP中以WebView打开页面时不显示页面header部分为例
	 */
	if ($this->user_agent['is_wechat'] || $this->user_agent['is_desktop']):
?>
			<div id="addressWrap">
		<header class="mui-bar mui-bar-nav">
			<!-- <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
			<h1 class="mui-title">当前定位-青岛市</h1> -->
		</header>
		<div class="mui-content">
			<div id='Addlist' class="mui-indexed-list">
				<div class="mui-indexed-list-search mui-input-row mui-search">
					<!--<p class="module-address">
						
					</p>-->
					<span class="closeAddress">X</span>
					<div class="mui-indexed-list-search mui-input-row mui-search">
					<input id="input_search" type="search" class="mui-input-clear mui-indexed-list-search-input" placeholder="搜索城市">
				</div>
				</div>
				<div class="mui-indexed-list-bar">
					<a>定位</a>
					<a>最近</a>
					<a>热门</a>
					<a>A</a>
					<a>B</a>
					<a>C</a>
					<a>D</a>
					<a>E</a>
					<a>F</a>
					<a>G</a>
					<a>H</a>
					<a>I</a>
					<a>J</a>
					<a>K</a>
					<a>L</a>
					<a>M</a>
					<a>N</a>
					<a>O</a>
					<a>P</a>
					<a>Q</a>
					<a>R</a>
					<a>S</a>
					<a>T</a>
					<a>U</a>
					<a>V</a>
					<a>W</a>
					<a>X</a>
					<a>Y</a>
					<a>Z</a>
				</div>
				<div class="mui-indexed-list-alert"></div>
				<div class="mui-indexed-list-inner">
					<div class="mui-indexed-list-empty-alert">没有数据</div>

						<div class="module-indexed-box">
							<!--定位-->
							<div>
								<p data-group="定位" class="module-address module-limit-after">当前定位城市</p>
								<div class="recent-area clear"  id="recentcity">
                                    <span class="curCity"></span>
                                </div>
							</div>

							<!--最近访问城市-->
							<div>
								<p data-group="最近" class="module-address module-limit-before">最近到访</p>
                                <div class="recent-area clear" id="recentcitycur"></div>
							</div>

							<!--热门城市-->
							<div>
								<p data-group="热门" class="module-address">热门城市</p>
								<div class="recent-area hot-area clear">
									<span>长沙市</span>
									<span>苏州市</span>
									<span>南京市</span>
									<span>大连市</span>
									<span>沈阳市</span>
									<span>青岛市</span>
								</div>
							</div>
						</div> 
						<!--全部城市-->
						<p data-group="定位" class="module-address">全部城市</p>

					<ul class="mui-table-view" id="ul_city">
						<li data-group="A" class="mui-table-view-divider mui-group-list-group">A</li>
						<li class="mui-table-view-cell mui-group-list-item">澳门</li>
						<li class="mui-table-view-cell mui-group-list-item">安康市</li>
						<li class="mui-table-view-cell mui-group-list-item">安庆市</li>
						<li class="mui-table-view-cell mui-group-list-item">安顺市</li>
						<li class="mui-table-view-cell mui-group-list-item">安阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">鞍山市</li>
						<li class="mui-table-view-cell mui-group-list-item">阿克苏</li>
						<li class="mui-table-view-cell mui-group-list-item">阿拉尔市</li>
						<li class="mui-table-view-cell mui-group-list-item">阿拉善盟</li>
						<li class="mui-table-view-cell mui-group-list-item">阿勒泰</li>
						<li class="mui-table-view-cell mui-group-list-item">阿里</li>
						<li data-group="B" class="mui-table-view-divider mui-group-list-group">B</li>
						<li class="mui-table-view-cell mui-group-list-item">巴彦淖尔市</li>
						<li class="mui-table-view-cell mui-group-list-item">巴中市</li>
						<li class="mui-table-view-cell mui-group-list-item">巴州</li>
						<li class="mui-table-view-cell mui-group-list-item">白城市</li>
						<li class="mui-table-view-cell mui-group-list-item">白沙县</li>
						<li class="mui-table-view-cell mui-group-list-item">白山市</li>
						<li class="mui-table-view-cell mui-group-list-item">白银市</li>
						<li class="mui-table-view-cell mui-group-list-item">百色市</li>
						<li class="mui-table-view-cell mui-group-list-item">蚌埠市</li>
						<li class="mui-table-view-cell mui-group-list-item">包头市</li>
						<li class="mui-table-view-cell mui-group-list-item">宝鸡市</li>
						<li class="mui-table-view-cell mui-group-list-item">保定市</li>
						<li class="mui-table-view-cell mui-group-list-item">保山市</li>
						<li class="mui-table-view-cell mui-group-list-item">保亭县</li>
						<li class="mui-table-view-cell mui-group-list-item">北海市</li>
						<li class="mui-table-view-cell mui-group-list-item">北京市</li>
						<li class="mui-table-view-cell mui-group-list-item">本溪市</li>
						<li class="mui-table-view-cell mui-group-list-item">毕节</li>
						<li class="mui-table-view-cell mui-group-list-item">滨州市</li>
						<li class="mui-table-view-cell mui-group-list-item">亳州市</li>
						<li class="mui-table-view-cell mui-group-list-item">博州</li>
						<li data-group="C" class="mui-table-view-divider mui-group-list-group">C</li>
						<li class="mui-table-view-cell mui-group-list-item">长春市</li>
						<li class="mui-table-view-cell mui-group-list-item">长沙市</li>
						<li class="mui-table-view-cell mui-group-list-item">长治市</li>
						<li class="mui-table-view-cell mui-group-list-item">沧州市</li>
						<li class="mui-table-view-cell mui-group-list-item">昌都</li>
						<li class="mui-table-view-cell mui-group-list-item">昌吉州</li>
						<li class="mui-table-view-cell mui-group-list-item">昌江县</li>
						<li class="mui-table-view-cell mui-group-list-item">常德市</li>
						<li class="mui-table-view-cell mui-group-list-item">常州市</li>
						<li class="mui-table-view-cell mui-group-list-item">巢湖市</li>
						<li class="mui-table-view-cell mui-group-list-item">朝阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">潮州市</li>
						<li class="mui-table-view-cell mui-group-list-item">郴州市</li>
						<li class="mui-table-view-cell mui-group-list-item">成都市</li>
						<li class="mui-table-view-cell mui-group-list-item">承德市</li>
						<li class="mui-table-view-cell mui-group-list-item">澄迈县</li>
						<li class="mui-table-view-cell mui-group-list-item">重庆市</li>
						<li class="mui-table-view-cell mui-group-list-item">池州市</li>
						<li class="mui-table-view-cell mui-group-list-item">赤峰市</li>
						<li class="mui-table-view-cell mui-group-list-item">崇左市</li>
						<li class="mui-table-view-cell mui-group-list-item">滁州市</li>
						<li class="mui-table-view-cell mui-group-list-item">楚雄州</li>
						<li data-group="D" class="mui-table-view-divider mui-group-list-group">D</li>
						<li class="mui-table-view-cell mui-group-list-item">达州市</li>
						<li class="mui-table-view-cell mui-group-list-item">大理州</li>
						<li class="mui-table-view-cell mui-group-list-item">大连市</li>
						<li class="mui-table-view-cell mui-group-list-item">大庆市</li>
						<li class="mui-table-view-cell mui-group-list-item">大同市</li>
						<li class="mui-table-view-cell mui-group-list-item">大兴安岭</li>
						<li class="mui-table-view-cell mui-group-list-item">丹东市</li>
						<li class="mui-table-view-cell mui-group-list-item">儋州市</li>
						<li class="mui-table-view-cell mui-group-list-item">德宏州</li>
						<li class="mui-table-view-cell mui-group-list-item">德阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">德州市</li>
						<li class="mui-table-view-cell mui-group-list-item">迪庆州</li>
						<li class="mui-table-view-cell mui-group-list-item">定安县</li>
						<li class="mui-table-view-cell mui-group-list-item">定西市</li>
						<li class="mui-table-view-cell mui-group-list-item">东方市</li>
						<li class="mui-table-view-cell mui-group-list-item">东莞市</li>
						<li class="mui-table-view-cell mui-group-list-item">东营市</li>
						<li data-group="E" class="mui-table-view-divider mui-group-list-group">E</li>
						<li class="mui-table-view-cell mui-group-list-item">鄂尔多斯市</li>
						<li class="mui-table-view-cell mui-group-list-item">鄂州市</li>
						<li class="mui-table-view-cell mui-group-list-item">恩施州</li>
						<li data-group="F" class="mui-table-view-divider mui-group-list-group">F</li>
						<li class="mui-table-view-cell mui-group-list-item">防城港市</li>
						<li class="mui-table-view-cell mui-group-list-item">佛山市</li>
						<li class="mui-table-view-cell mui-group-list-item">福州市</li>
						<li class="mui-table-view-cell mui-group-list-item">抚顺市</li>
						<li class="mui-table-view-cell mui-group-list-item">抚州市</li>
						<li class="mui-table-view-cell mui-group-list-item">阜新市</li>
						<li class="mui-table-view-cell mui-group-list-item">阜阳市</li>
						<li data-group="G" class="mui-table-view-divider mui-group-list-group">G</li>
						<li class="mui-table-view-cell mui-group-list-item">甘南州</li>
						<li class="mui-table-view-cell mui-group-list-item">甘孜州</li>
						<li class="mui-table-view-cell mui-group-list-item">赣州市</li>
						<li class="mui-table-view-cell mui-group-list-item">高雄市</li>
						<li class="mui-table-view-cell mui-group-list-item">固原市</li>
						<li class="mui-table-view-cell mui-group-list-item">广安市</li>
						<li class="mui-table-view-cell mui-group-list-item">广元市</li>
						<li class="mui-table-view-cell mui-group-list-item">广州市</li>
						<li class="mui-table-view-cell mui-group-list-item">贵港市</li>
						<li class="mui-table-view-cell mui-group-list-item">贵阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">桂林市</li>
						<li class="mui-table-view-cell mui-group-list-item">果洛州</li>
						<li data-group="H" class="mui-table-view-divider mui-group-list-group">H</li>
						<li class="mui-table-view-cell mui-group-list-item">哈尔滨市</li>
						<li class="mui-table-view-cell mui-group-list-item">哈密</li>
						<li class="mui-table-view-cell mui-group-list-item">海北州</li>
						<li class="mui-table-view-cell mui-group-list-item">海东</li>
						<li class="mui-table-view-cell mui-group-list-item">海口市</li>
						<li class="mui-table-view-cell mui-group-list-item">三沙市</li>
						<li class="mui-table-view-cell mui-group-list-item">海南州</li>
						<li class="mui-table-view-cell mui-group-list-item">海西州</li>
						<li class="mui-table-view-cell mui-group-list-item">邯郸市</li>
						<li class="mui-table-view-cell mui-group-list-item">汉中市</li>
						<li class="mui-table-view-cell mui-group-list-item">杭州市</li>
						<li class="mui-table-view-cell mui-group-list-item">合肥市</li>
						<li class="mui-table-view-cell mui-group-list-item">和田</li>
						<li class="mui-table-view-cell mui-group-list-item">河池市</li>
						<li class="mui-table-view-cell mui-group-list-item">河源市</li>
						<li class="mui-table-view-cell mui-group-list-item">菏泽市</li>
						<li class="mui-table-view-cell mui-group-list-item">贺州市</li>
						<li class="mui-table-view-cell mui-group-list-item">鹤壁市</li>
						<li class="mui-table-view-cell mui-group-list-item">鹤岗市</li>
						<li class="mui-table-view-cell mui-group-list-item">黑河市</li>
						<li class="mui-table-view-cell mui-group-list-item">衡水市</li>
						<li class="mui-table-view-cell mui-group-list-item">衡阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">红河州</li>
						<li class="mui-table-view-cell mui-group-list-item">呼和浩特市</li>
						<li class="mui-table-view-cell mui-group-list-item">呼伦贝尔市</li>
						<li class="mui-table-view-cell mui-group-list-item">葫芦岛市</li>
						<li class="mui-table-view-cell mui-group-list-item">湖州市</li>
						<li class="mui-table-view-cell mui-group-list-item">怀化市</li>
						<li class="mui-table-view-cell mui-group-list-item">淮安市</li>
						<li class="mui-table-view-cell mui-group-list-item">淮北市</li>
						<li class="mui-table-view-cell mui-group-list-item">淮南市</li>
						<li class="mui-table-view-cell mui-group-list-item">黄冈市</li>
						<li class="mui-table-view-cell mui-group-list-item">黄南州</li>
						<li class="mui-table-view-cell mui-group-list-item">黄山市</li>
						<li class="mui-table-view-cell mui-group-list-item">黄石市</li>
						<li class="mui-table-view-cell mui-group-list-item">惠州市</li>
						<li data-group="J" class="mui-table-view-divider mui-group-list-group">J</li>
						<li class="mui-table-view-cell mui-group-list-item">鸡西市</li>
						<li class="mui-table-view-cell mui-group-list-item">基隆市</li>
						<li class="mui-table-view-cell mui-group-list-item">吉安市</li>
						<li class="mui-table-view-cell mui-group-list-item">吉林市</li>
						<li class="mui-table-view-cell mui-group-list-item">济南市</li>
						<li class="mui-table-view-cell mui-group-list-item">济宁市</li>
						<li class="mui-table-view-cell mui-group-list-item">济源市</li>
						<li class="mui-table-view-cell mui-group-list-item">佳木斯市</li>
						<li class="mui-table-view-cell mui-group-list-item">嘉兴市</li>
						<li class="mui-table-view-cell mui-group-list-item">嘉义市</li>
						<li class="mui-table-view-cell mui-group-list-item">嘉峪关市</li>
						<li class="mui-table-view-cell mui-group-list-item">江门市</li>
						<li class="mui-table-view-cell mui-group-list-item">焦作市</li>
						<li class="mui-table-view-cell mui-group-list-item">揭阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">金昌市</li>
						<li class="mui-table-view-cell mui-group-list-item">金华市</li>
						<li class="mui-table-view-cell mui-group-list-item">锦州市</li>
						<li class="mui-table-view-cell mui-group-list-item">晋城市</li>
						<li class="mui-table-view-cell mui-group-list-item">晋中市</li>
						<li class="mui-table-view-cell mui-group-list-item">荆门市</li>
						<li class="mui-table-view-cell mui-group-list-item">荆州市</li>
						<li class="mui-table-view-cell mui-group-list-item">景德镇市</li>
						<li class="mui-table-view-cell mui-group-list-item">九江市</li>
						<li class="mui-table-view-cell mui-group-list-item">酒泉市</li>
						<li data-group="K" class="mui-table-view-divider mui-group-list-group">K</li>
						<li class="mui-table-view-cell mui-group-list-item">喀什</li>
						<li class="mui-table-view-cell mui-group-list-item">开封市</li>
						<li class="mui-table-view-cell mui-group-list-item">克拉玛依市</li>
						<li class="mui-table-view-cell mui-group-list-item">克州</li>
						<li class="mui-table-view-cell mui-group-list-item">昆明市</li>
						<li data-group="L" class="mui-table-view-divider mui-group-list-group">L</li>
						<li class="mui-table-view-cell mui-group-list-item">拉萨市</li>
						<li class="mui-table-view-cell mui-group-list-item">来宾市</li>
						<li class="mui-table-view-cell mui-group-list-item">莱芜市</li>
						<li class="mui-table-view-cell mui-group-list-item">兰州市</li>
						<li class="mui-table-view-cell mui-group-list-item">廊坊市</li>
						<li class="mui-table-view-cell mui-group-list-item">乐东县</li>
						<li class="mui-table-view-cell mui-group-list-item">乐山市</li>
						<li class="mui-table-view-cell mui-group-list-item">丽江市</li>
						<li class="mui-table-view-cell mui-group-list-item">丽水市</li>
						<li class="mui-table-view-cell mui-group-list-item">连云港市</li>
						<li class="mui-table-view-cell mui-group-list-item">凉山州</li>
						<li class="mui-table-view-cell mui-group-list-item">辽阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">辽源市</li>
						<li class="mui-table-view-cell mui-group-list-item">聊城市</li>
						<li class="mui-table-view-cell mui-group-list-item">林芝</li>
						<li class="mui-table-view-cell mui-group-list-item">临沧市</li>
						<li class="mui-table-view-cell mui-group-list-item">临汾市</li>
						<li class="mui-table-view-cell mui-group-list-item">临高县</li>
						<li class="mui-table-view-cell mui-group-list-item">临夏州</li>
						<li class="mui-table-view-cell mui-group-list-item">临沂市</li>
						<li class="mui-table-view-cell mui-group-list-item">陵水县</li>
						<li class="mui-table-view-cell mui-group-list-item">柳州市</li>
						<li class="mui-table-view-cell mui-group-list-item">六安市</li>
						<li class="mui-table-view-cell mui-group-list-item">六盘水市</li>
						<li class="mui-table-view-cell mui-group-list-item">龙岩市</li>
						<li class="mui-table-view-cell mui-group-list-item">陇南市</li>
						<li class="mui-table-view-cell mui-group-list-item">娄底市</li>
						<li class="mui-table-view-cell mui-group-list-item">泸州市</li>
						<li class="mui-table-view-cell mui-group-list-item">洛阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">漯河市</li>
						<li class="mui-table-view-cell mui-group-list-item">吕梁市</li>
						<li data-group="M" class="mui-table-view-divider mui-group-list-group">M</li>
						<li class="mui-table-view-cell mui-group-list-item">马鞍山市</li>
						<li class="mui-table-view-cell mui-group-list-item">茂名市</li>
						<li class="mui-table-view-cell mui-group-list-item">眉山市</li>
						<li class="mui-table-view-cell mui-group-list-item">梅州市</li>
						<li class="mui-table-view-cell mui-group-list-item">绵阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">牡丹江市</li>
						<li data-group="N" class="mui-table-view-divider mui-group-list-group">N</li>
						<li class="mui-table-view-cell mui-group-list-item">那曲</li>
						<li class="mui-table-view-cell mui-group-list-item">南昌市</li>
						<li class="mui-table-view-cell mui-group-list-item">南充市</li>
						<li class="mui-table-view-cell mui-group-list-item">南京市</li>
						<li class="mui-table-view-cell mui-group-list-item">南宁市</li>
						<li class="mui-table-view-cell mui-group-list-item">南平市</li>
						<li class="mui-table-view-cell mui-group-list-item">南通市</li>
						<li class="mui-table-view-cell mui-group-list-item">南阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">内江市</li>
						<li class="mui-table-view-cell mui-group-list-item">宁波市</li>
						<li class="mui-table-view-cell mui-group-list-item">宁德市</li>
						<li class="mui-table-view-cell mui-group-list-item">怒江州</li>
						<li data-group="P" class="mui-table-view-divider mui-group-list-group">P</li>
						<li class="mui-table-view-cell mui-group-list-item">攀枝花市</li>
						<li class="mui-table-view-cell mui-group-list-item">盘锦市</li>
						<li class="mui-table-view-cell mui-group-list-item">平顶山市</li>
						<li class="mui-table-view-cell mui-group-list-item">平凉市</li>
						<li class="mui-table-view-cell mui-group-list-item">萍乡市</li>
						<li class="mui-table-view-cell mui-group-list-item">莆田市</li>
						<li class="mui-table-view-cell mui-group-list-item">濮阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">普洱市</li>
						<li data-group="Q" class="mui-table-view-divider mui-group-list-group">Q</li>
                        <li class="mui-table-view-cell mui-group-list-item">青岛市</li>
						<li class="mui-table-view-cell mui-group-list-item">七台河市</li>
						<li class="mui-table-view-cell mui-group-list-item">齐齐哈尔市</li>
						<li class="mui-table-view-cell mui-group-list-item">潜江市</li>
						<li class="mui-table-view-cell mui-group-list-item">黔东南州</li>
						<li class="mui-table-view-cell mui-group-list-item">黔南州</li>
						<li class="mui-table-view-cell mui-group-list-item">黔西南州</li>
						<li class="mui-table-view-cell mui-group-list-item">钦州市</li>
						<li class="mui-table-view-cell mui-group-list-item">秦皇岛市</li>
						<li class="mui-table-view-cell mui-group-list-item">清远市</li>
						<li class="mui-table-view-cell mui-group-list-item">庆阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">琼海市</li>
						<li class="mui-table-view-cell mui-group-list-item">琼中县</li>
						<li class="mui-table-view-cell mui-group-list-item">衢州市</li>
						<li class="mui-table-view-cell mui-group-list-item">曲靖市</li>
						<li class="mui-table-view-cell mui-group-list-item">泉州市</li>
						<li data-group="R" class="mui-table-view-divider mui-group-list-group">R</li>
						<li class="mui-table-view-cell mui-group-list-item">日喀则</li>
						<li class="mui-table-view-cell mui-group-list-item">日照市</li>
						<li data-group="S" class="mui-table-view-divider mui-group-list-group">S</li>
						<li class="mui-table-view-cell mui-group-list-item">三门峡市</li>
						<li class="mui-table-view-cell mui-group-list-item">三明市</li>
						<li class="mui-table-view-cell mui-group-list-item">三亚市</li>
						<li class="mui-table-view-cell mui-group-list-item">厦门市</li>
						<li class="mui-table-view-cell mui-group-list-item">山南</li>
						<li class="mui-table-view-cell mui-group-list-item">汕头市</li>
						<li class="mui-table-view-cell mui-group-list-item">汕尾市</li>
						<li class="mui-table-view-cell mui-group-list-item">商洛市</li>
						<li class="mui-table-view-cell mui-group-list-item">商丘市</li>
						<li class="mui-table-view-cell mui-group-list-item">上海市</li>
						<li class="mui-table-view-cell mui-group-list-item">上饶市</li>
						<li class="mui-table-view-cell mui-group-list-item">韶关市</li>
						<li class="mui-table-view-cell mui-group-list-item">邵阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">绍兴市</li>
						<li class="mui-table-view-cell mui-group-list-item">深圳市</li>
						<li class="mui-table-view-cell mui-group-list-item">神农架</li>
						<li class="mui-table-view-cell mui-group-list-item">沈阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">十堰市</li>
						<li class="mui-table-view-cell mui-group-list-item">石河子市</li>
						<li class="mui-table-view-cell mui-group-list-item">石家庄市</li>
						<li class="mui-table-view-cell mui-group-list-item">石嘴山市</li>
						<li class="mui-table-view-cell mui-group-list-item">双鸭山市</li>
						<li class="mui-table-view-cell mui-group-list-item">朔州市</li>
						<li class="mui-table-view-cell mui-group-list-item">四平市</li>
						<li class="mui-table-view-cell mui-group-list-item">松原市</li>
						<li class="mui-table-view-cell mui-group-list-item">苏州市</li>
						<li class="mui-table-view-cell mui-group-list-item">绥化市</li>
						<li class="mui-table-view-cell mui-group-list-item">随州市</li>
						<li class="mui-table-view-cell mui-group-list-item">遂宁市</li>
						<li data-group="T" class="mui-table-view-divider mui-group-list-group">T</li>
						<li class="mui-table-view-cell mui-group-list-item">塔城</li>
						<li class="mui-table-view-cell mui-group-list-item">台北市</li>
						<li class="mui-table-view-cell mui-group-list-item">台南市</li>
						<li class="mui-table-view-cell mui-group-list-item">台中市</li>
						<li class="mui-table-view-cell mui-group-list-item">台州市</li>
						<li class="mui-table-view-cell mui-group-list-item">太原市</li>
						<li class="mui-table-view-cell mui-group-list-item">泰安市</li>
						<li class="mui-table-view-cell mui-group-list-item">泰州市</li>
						<li class="mui-table-view-cell mui-group-list-item">唐山市</li>
						<li class="mui-table-view-cell mui-group-list-item">天津市</li>
						<li class="mui-table-view-cell mui-group-list-item">天门市</li>
						<li class="mui-table-view-cell mui-group-list-item">天水市</li>
						<li class="mui-table-view-cell mui-group-list-item">铁岭市</li>
						<li class="mui-table-view-cell mui-group-list-item">通化市</li>
						<li class="mui-table-view-cell mui-group-list-item">通辽市</li>
						<li class="mui-table-view-cell mui-group-list-item">铜川市</li>
						<li class="mui-table-view-cell mui-group-list-item">铜陵市</li>
						<li class="mui-table-view-cell mui-group-list-item">铜仁</li>
						<li class="mui-table-view-cell mui-group-list-item">图木舒克市</li>
						<li class="mui-table-view-cell mui-group-list-item">吐鲁番</li>
						<li class="mui-table-view-cell mui-group-list-item">屯昌县</li>
						<li data-group="W" class="mui-table-view-divider mui-group-list-group">W</li>
						<li class="mui-table-view-cell mui-group-list-item">万宁市</li>
						<li class="mui-table-view-cell mui-group-list-item">威海市</li>
						<li class="mui-table-view-cell mui-group-list-item">潍坊市</li>
						<li class="mui-table-view-cell mui-group-list-item">渭南市</li>
						<li class="mui-table-view-cell mui-group-list-item">温州市</li>
						<li class="mui-table-view-cell mui-group-list-item">文昌市</li>
						<li class="mui-table-view-cell mui-group-list-item">文山州</li>
						<li class="mui-table-view-cell mui-group-list-item">乌海市</li>
						<li class="mui-table-view-cell mui-group-list-item">乌兰察布市</li>
						<li class="mui-table-view-cell mui-group-list-item">乌鲁木齐市</li>
						<li class="mui-table-view-cell mui-group-list-item">无锡市</li>
						<li class="mui-table-view-cell mui-group-list-item">芜湖市</li>
						<li class="mui-table-view-cell mui-group-list-item">吴忠市</li>
						<li class="mui-table-view-cell mui-group-list-item">梧州市</li>
						<li class="mui-table-view-cell mui-group-list-item">五家渠市</li>
						<li class="mui-table-view-cell mui-group-list-item">五指山市</li>
						<li class="mui-table-view-cell mui-group-list-item">武汉市</li>
						<li class="mui-table-view-cell mui-group-list-item">武威市</li>
						<li data-group="X" class="mui-table-view-divider mui-group-list-group">X</li>
						<li class="mui-table-view-cell mui-group-list-item">西安市</li>
						<li class="mui-table-view-cell mui-group-list-item">西宁市</li>
						<li class="mui-table-view-cell mui-group-list-item">西双版纳</li>
						<li class="mui-table-view-cell mui-group-list-item">锡林郭勒盟</li>
						<li class="mui-table-view-cell mui-group-list-item">仙桃市</li>
						<li class="mui-table-view-cell mui-group-list-item">咸宁市</li>
						<li class="mui-table-view-cell mui-group-list-item">咸阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">香港</li>
						<li class="mui-table-view-cell mui-group-list-item">湘潭市</li>
						<li class="mui-table-view-cell mui-group-list-item">湘西州</li>
						<li class="mui-table-view-cell mui-group-list-item">襄阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">孝感市</li>
						<li class="mui-table-view-cell mui-group-list-item">忻州市</li>
						<li class="mui-table-view-cell mui-group-list-item">新乡市</li>
						<li class="mui-table-view-cell mui-group-list-item">新余市</li>
						<li class="mui-table-view-cell mui-group-list-item">新竹市</li>
						<li class="mui-table-view-cell mui-group-list-item">信阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">邢台市</li>
						<li class="mui-table-view-cell mui-group-list-item">兴安盟</li>
						<li class="mui-table-view-cell mui-group-list-item">宿迁市</li>
						<li class="mui-table-view-cell mui-group-list-item">宿州市</li>
						<li class="mui-table-view-cell mui-group-list-item">徐州市</li>
						<li class="mui-table-view-cell mui-group-list-item">许昌市</li>
						<li class="mui-table-view-cell mui-group-list-item">宣城市</li>
						<li data-group="Y" class="mui-table-view-divider mui-group-list-group">Y</li>
						<li class="mui-table-view-cell mui-group-list-item">雅安市</li>
						<li class="mui-table-view-cell mui-group-list-item">烟台市</li>
						<li class="mui-table-view-cell mui-group-list-item">延安市</li>
						<li class="mui-table-view-cell mui-group-list-item">延边州</li>
						<li class="mui-table-view-cell mui-group-list-item">盐城市</li>
						<li class="mui-table-view-cell mui-group-list-item">扬州市</li>
						<li class="mui-table-view-cell mui-group-list-item">阳江市</li>
						<li class="mui-table-view-cell mui-group-list-item">阳泉市</li>
						<li class="mui-table-view-cell mui-group-list-item">伊春市</li>
						<li class="mui-table-view-cell mui-group-list-item">伊犁州</li>
						<li class="mui-table-view-cell mui-group-list-item">宜宾市</li>
						<li class="mui-table-view-cell mui-group-list-item">宜昌市</li>
						<li class="mui-table-view-cell mui-group-list-item">宜春市</li>
						<li class="mui-table-view-cell mui-group-list-item">益阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">银川市</li>
						<li class="mui-table-view-cell mui-group-list-item">鹰潭市</li>
						<li class="mui-table-view-cell mui-group-list-item">营口市</li>
						<li class="mui-table-view-cell mui-group-list-item">永州市</li>
						<li class="mui-table-view-cell mui-group-list-item">榆林市</li>
						<li class="mui-table-view-cell mui-group-list-item">玉林市</li>
						<li class="mui-table-view-cell mui-group-list-item">玉树州</li>
						<li class="mui-table-view-cell mui-group-list-item">玉溪市</li>
						<li class="mui-table-view-cell mui-group-list-item">岳阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">云浮市</li>
						<li class="mui-table-view-cell mui-group-list-item">运城市</li>
						<li data-group="Z" class="mui-table-view-divider mui-group-list-group">Z</li>
						<li class="mui-table-view-cell mui-group-list-item">枣庄市</li>
						<li class="mui-table-view-cell mui-group-list-item">湛江市</li>
						<li class="mui-table-view-cell mui-group-list-item">张家界市</li>
						<li class="mui-table-view-cell mui-group-list-item">张家口市</li>
						<li class="mui-table-view-cell mui-group-list-item">张掖市</li>
						<li class="mui-table-view-cell mui-group-list-item">漳州市</li>
						<li class="mui-table-view-cell mui-group-list-item">昭通市</li>
						<li class="mui-table-view-cell mui-group-list-item">肇庆市</li>
						<li class="mui-table-view-cell mui-group-list-item">镇江市</li>
						<li class="mui-table-view-cell mui-group-list-item">郑州市</li>
						<li class="mui-table-view-cell mui-group-list-item">中山市</li>
						<li class="mui-table-view-cell mui-group-list-item">中卫市</li>
						<li class="mui-table-view-cell mui-group-list-item">舟山市</li>
						<li class="mui-table-view-cell mui-group-list-item">周口市</li>
						<li class="mui-table-view-cell mui-group-list-item">珠海市</li>
						<li class="mui-table-view-cell mui-group-list-item">株洲市</li>
						<li class="mui-table-view-cell mui-group-list-item">驻马店市</li>
						<li class="mui-table-view-cell mui-group-list-item">资阳市</li>
						<li class="mui-table-view-cell mui-group-list-item">淄博市</li>
						<li class="mui-table-view-cell mui-group-list-item">自贡市</li>
						<li class="mui-table-view-cell mui-group-list-item">遵义市</li>					
					</ul>
				</div>
			</div>
		</div>
		</div>
		<?php endif ?>
<script>
$(function(){
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
		var container = $(".activecoverplay");
		var items = container.find("div");
		items.on('click',function(){
			var titleName = $('.toMove').find("b").text();
			$('#newmorelist').find('h1').text(titleName);
			function getSX(){
				var oImg = ['<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_1.jpg','<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_2.jpg','<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_3.jpg','<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_0.jpg'];
				var oTitle = ['精品超新鲜带鱼 500-550g/份（约2-4条）','特级猪腱子肉   500g/份','三文鱼  500g/份','澳滋牛尾'];
				for (var i = 0;i<oImg.length;i++) {
						$('#newmorelist img').eq(i).attr('src',oImg[i]);
						$('#newmorelist h1').eq(i).text(oTitle[i]);
					
				}
			}
			switch(titleName){
				case '鱼哥' :
				getSX();
				break;
				case '澳滋' :
				$('#newmorelist').find('img').attr('src','<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_0.jpg');
				getSX();
				break;
				case '君博' :
				$('#newmorelist').find('img').attr('src','<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_2.jpg');
				getSX();
				break;
				
			};
		});
		if (indexNum == 0) {
				storm($("#more"),$("#morelist"),"icon_4@3x.png");
		} else {
			card();
		}
	});
	function storm(el,wrap,icon) {
		indexNum = 1;
		el.find("img").attr("src", "<?php echo CDN_URL ?>media/home/" + icon);
		$(".refreshcontent").hide();
		var titleName = $('.toMove').find('b').text();
		var oAddYuge = '<div class="swiper-container7" id="newmorelist" style="margin-top:.1rem;border-radius: .2rem;"><div class="swiper-wrapper"><div class="swiper-slide"><div class="list-group-item"><a href="<?php echo base_url() ?>item/detail?id=3839"><div class="list"><img src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_1.jpg" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>精品超新鲜带鱼 500-550g/份（约2-4条）</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线 </div><div class="allbuy"><span class="tuan">团</span><span>38.00元</span></div></div></div></a><a href="<?php echo base_url() ?>item/detail?id=3927"><div class="list"><img src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_2.jpg" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>特级猪腱子肉   500g/份</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线 </div><div class="allbuy"><span class="tuan">团</span><span>22.80元</span></div></div></div></a><a href="<?php echo base_url() ?>item/detail?id=357"><div class="list"><img src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_3.jpg" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>三文鱼  500g/份</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线 </div><div class="allbuy"><span class="tuan">团</span><span>98.00元</span></div></div></div></a><a href="<?php echo base_url() ?>item/detail?id=574"><div class="list"><img src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_0.jpg" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>澳滋牛尾</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线 </div><div class="allbuy"><span class="tuan">团</span><span>312.00元</span></div></div></div></a></div></div></div></div>';
		var oAddJunbo = '<div class="swiper-container7" id="newmorelist" style="margin-top:.1rem;border-radius: .2rem;"><div class="swiper-wrapper"><div class="swiper-slide"><div class="list-group-item"><a href="<?php echo base_url() ?>item/detail?id=3839"><div class="list"><img src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_1.jpg" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>精品超新鲜带鱼 500-550g/份（约2-4条）</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线 </div><div class="allbuy"><span class="tuan">团</span><span>38.00元</span></div></div></div></a><a href="<?php echo base_url() ?>item/detail?id=3927"><div class="list"><img src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_2.jpg" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>特级猪腱子肉   500g/份</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线 </div><div class="allbuy"><span class="tuan">团</span><span>22.80元</span></div></div></div></a><a href="<?php echo base_url() ?>item/detail?id=357"><div class="list"><img src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_3.jpg" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>三文鱼  500g/份</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线 </div><div class="allbuy"><span class="tuan">团</span><span>98.00元</span></div></div></div></a><a href="<?php echo base_url() ?>item/detail?id=574"><div class="list"><img src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_0.jpg" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>澳滋牛尾</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线 </div><div class="allbuy"><span class="tuan">团</span><span>312.00元</span></div></div></div></a></div></div></div></div>';
		var oAddAozi = '<div class="swiper-container7" id="newmorelist" style="margin-top:.1rem;border-radius: .2rem;"><div class="swiper-wrapper"><div class="swiper-slide"><div class="list-group-item"><a href="<?php echo base_url() ?>item/detail?id=3839"><div class="list"><img src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_1.jpg" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>精品超新鲜带鱼 500-550g/份（约2-4条）</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线 </div><div class="allbuy"><span class="tuan">团</span><span>38.00元</span></div></div></div></a><a href="<?php echo base_url() ?>item/detail?id=3927"><div class="list"><img src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_2.jpg" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>特级猪腱子肉   500g/份</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线 </div><div class="allbuy"><span class="tuan">团</span><span>22.80元</span></div></div></div></a><a href="<?php echo base_url() ?>item/detail?id=357"><div class="list"><img src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_3.jpg" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>三文鱼  500g/份</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线 </div><div class="allbuy"><span class="tuan">团</span><span>98.00元</span></div></div></div></a><a href="<?php echo base_url() ?>item/detail?id=574"><div class="list"><img src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_0.jpg" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>澳滋牛尾</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线 </div><div class="allbuy"><span class="tuan">团</span><span>312.00元</span></div></div></div></a></div></div></div></div>';
		switch(titleName){
			case '鱼哥' : 
			$(oAddYuge).insertBefore(wrap);
			break;
			case '君博' : 
			$(oAddJunbo).insertBefore(wrap);
			break;
			case  '澳滋' :
			$(oAddAozi).insertBefore(wrap);
			break;
		};
		
	}
	function card() {
		indexNum = 0;
		$("#more").find("img").attr("src", "<?php echo CDN_URL ?>media/home/list.png");
		$(".refreshcontent").show();
		$('#newmorelist').remove();
		//点击小ico后
		//alert(1);
	}
//	$(".coloroverlaywrap div.zbottom").on("click", function() {
//		$("#morelist .colorovertab").eq($(this).index()).show().siblings(".colorovertab").hide()
//	})
});
$(document).ready(function() {
	$("#timer2").oaoTime();
	var lazyLoadImg = new LazyLoadImg({
		el: document.querySelector('#listMenu'),
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
				el.style.border = 'none';
				$('.bgefefef').css('background','#efefef');
			}
		},
		success: function(el) {
			el.classList.add('success');
			$('.bgefefef').css('background','transparent');
		},
		error: function(el) {
			el.src = '<?php echo CDN_URL ?>media/home/default.png'
		}
	});
});
</script>


