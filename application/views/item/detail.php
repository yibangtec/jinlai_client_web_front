<style>
#content{width:100%}
#content>*{color:#898989;background-color:#fff}
#content>section{padding:.3rem .2rem;border-radius:.2rem;margin:.2rem;position:relative}
#item-figure{border-radius:0 0 20px 20px}
#item-name{color:#3e3a39;font-size:.3rem;line-height:1;margin-bottom:.1rem;display:block;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;width:5rem}
#slogan{color:#9fa0a0;font-size:.24rem;margin-bottom:.3rem;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;width:5.63rem}
#item-description{background-color:transparent}
#item-description img,#item-description p,#item-description video{width:100%;max-width:100%;display:block}
.detailshare{width:.68rem;height:.52rem;border-left:1px solid #ddd;position:absolute;top:.38rem;right:.2rem}
.detailshare>.icon-dp_fenxiang:before{color:#393838;font-size:.4rem;position:absolute;left:.2rem;top:.0654443rem}
.icon-Arrow{position:absolute;right:.15rem;font-size:.3rem;top:.27rem;color:#aaa}
#service-promise ul{width:5.76rem;display:flex;justify-content:space-between}
#service-promise li{font-size:.24rem;color:#898989}
#service-promise li span{width:.24rem;height:.24rem;float:left;margin-right:.1rem}
#service-promise li span img{display:block;width:100%;height:100%}
#prices{font-size:.24rem}
#prices strong{color:#ff3649;font-size:44px;font-weight:400}
#prices small{font-size:32px}
#skus li{line-height:28px;padding:1px;margin-bottom:4px;margin-right:4px}
#skus i{font-size:.26rem;color:#3e3a39}
#skus a{height:38px;line-height:38px;border:1px solid #b8b7bd;text-align:center;overflow:hidden}
#skus a>*{float:left;display:inline}
#skus figure{width:28px;height:28px}
#skus h3{font-size:12px;max-width:97px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;text-indent:0;padding-left:1px}
#general-seperater{font-size:.24rem;background-color:transparent;text-align:center;margin:.5rem 0}
#description img,#description p{line-height:1}
.tipprice{font-size:.24rem;color:#898989;padding-top:.2rem}
.tipprice span{position:relative}
.tipprice span i{position:absolute;width:.45rem;height:1px;background:#898989;display:block;top:50%;left:rem;left:0}
.detailtag{padding-top:.2rem;font-size:.24rem;color:#898989;display:flex;justify-content:space-between}
.skus{padding:.3rem 0}
.topcardwrap{position:relative;margin:0 .2rem}
.topcardwrap .get{box-shadow:0 0 .15rem #ffc7bc;background:linear-gradient(right ,#ff7a42 6% ,#ff415a 100%)!important;background:-o-linear-gradient(right ,#ff7a42 6% ,#ff415a 100%)!important;background:-ms-linear-gradient(right ,#ff7a42 6% ,#ff415a 100%)!important;background:-moz-linear-gradient(right ,#ff7a42 6% ,#ff415a 100%)!important;background:-webkit-linear-gradient(right ,#ff7a42 6% ,#ff415a 100%)!important;color:#fff;font-size:.26rem;width:.76rem;height:.4rem;font-size:.16rem;position:absolute;top:.13rem;right:0;line-height:.4rem;background:#ccc;text-align:center;border-radius:.5rem}
.topcardwrap h1:nth-child(1){margin-bottom:.2rem}
.topcardwrap h1 span{border-radius:.04rem;height:.24rem;line-height:.24rem}
.topcardwrap h1 span:nth-child(1){display:block;float:left;font-size:.2rem;color:#fff;margin-top:.02rem;background:linear-gradient(right ,#ff7a42 6% ,#ff415a 100%)!important;background:-o-linear-gradient(right ,#ff7a42 6% ,#ff415a 100%)!important;background:-ms-linear-gradient(right ,#ff7a42 6% ,#ff415a 100%)!important;background:-moz-linear-gradient(right ,#ff7a42 6% ,#ff415a 100%)!important;background:-webkit-linear-gradient(right ,#ff7a42 6% ,#ff415a 100%)!important;width:1.12rem;text-align:center;margin-top:-.015rem}
hr{border:none;height:1px;background:#ccc;margin:.3rem 0}
.topcardwrap h1 span:nth-child(2){display:block;float:left;margin-left:.1rem;font-size:.26rem;color:#3e3a39}
.topcardwrap h2{font-size:.26rem;color:#3e3a39}
.bottomcardwrap h1 span:nth-child(1){width:.5rem;height:.24rem;text-align:center;line-height:.24rem;background:#EFEFEF!important;color:#ff3649;font-size:.2rem;margin-top:-.01rem}
.cxtitle{top:.22rem;right:0}
.cpArrow{top:0;right:0}
</style>

<script>
wx.ready(function(){
	// 分享到朋友圈
	wx.onMenuShareTimeline({
	    title: '<?php echo $title.'【'.SITE_NAME.'】' ?>', // 分享标题
	    link: '<?php echo base_url('item/detail?id='.$item['item_id']) ?>', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
	    imgUrl: '<?php echo $this->media_root.$item['url_image_main'] ?>', // 分享图标
	    success: function () {
	        // 用户确认分享后执行的回调函数
			alert('分享成功');
	    },
	    cancel: function () {
	        // 用户取消分享后执行的回调函数
			alert('未完成分享');
	    }
	});
	// 分享给朋友
	wx.onMenuShareAppMessage({
	    desc: '<?php echo $description ?>', // 分享描述
	    title: '<?php echo $title.'【'.SITE_NAME.'】' ?>', // 分享标题
	    link: '<?php echo base_url('item/detail?id='.$item['item_id']) ?>', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
	    imgUrl: '<?php echo $this->media_root.$item['url_image_main'] ?>', // 分享图标
	    type: 'link', // 分享类型,music、video或link，不填默认为link
	    success: function () {
	        // 用户确认分享后执行的回调函数
			alert('分享成功');
	    },
	    cancel: function () {
	        // 用户取消分享后执行的回调函数
			alert('您未完成分享');
	    }
	});
});
</script>

<base href="<?php echo $this->media_root ?>">

<div id=content class=container>
    <!-- 主图&形象图 -->
	<div id=item-figure class="swiper-container row">
		<?php
			// 判断是否有形象图，若有，则将形象图与主图拼装为轮播内容进行显示
			if ( empty($item['figure_image_urls']) ):
		?>
		<figure id=image_main>
			<img title="<?php echo $item['name'] ?>" src="<?php echo $item['url_image_main'] ?>">
		</figure>

		<?php else: ?>
		<ul id=figure-images class="swiper-wrapper">
			<li class="swiper-slide">
				<img alt="<?php echo $item['name'] ?>" src="<?php echo $item['url_image_main'] ?>">
			</li>

			<?php
				$figure_image_urls = explode(',', $item['figure_image_urls']);
				foreach($figure_image_urls as $url):
			?>
			<li class="swiper-slide">
				<img alt="<?php echo $item['name'] ?>" src="<?php echo $url ?>">
			</li>
			<?php endforeach ?>
		</ul>
	    <div class="swiper-pagination"></div><!-- 轮播页码提示 -->
		
		<link rel="stylesheet" href="<?php echo CDN_URL ?>css/swiper.min.css">
		<script src="<?php echo CDN_URL ?>js/swiper.jquery.min.js"></script>
		<script>
			var swiper = new Swiper('.swiper-container',{
	            pagination: '.swiper-pagination'
	        });
	    </script>
		<?php endif ?>
	</div>

	<section id=item-brief>
		<h2 id=item-name><?php echo $item['name'] ?></h2>
<!--		<h3 class="bussinessdescription">大容量便携 带屏双输出 适用于苹果/三星/华为/小米手机等 手机平板通用型充电宝</h3>-->
		<?php echo !empty($item['slogan'])? '<h3 id=slogan>'.$item['slogan'].'</h3>': NULL ?>

		<ul class=row>
			<li id=prices>
				<strong>
					<small>￥</small><?php echo substr($item['price'], 0, -3).'<small>'.substr($item['price'], -3).'</small>' ?>
				</strong>
				<span class="limitedtime">限时特惠</span>
			</li>

			<?php $unit_name = !empty($item['unit_name'])? $item['unit_name']: '份' ?>
			<!--<li id=stocks>
				库存 <?php echo $item['stocks']. $unit_name ?>
				<?php echo $item['quantity_min'] > 1? ' '.$item['quantity_min'].$unit_name. '起售': NULL ?>
				<?php echo $item['quantity_max'] > 0? ' 限购 '.$item['quantity_max'].$unit_name: NULL ?>
			</li>-->
            <?php if ($item['tag_price'] > $item['price']): ?>
			<li class=tipprice>
				<del>￥ <?php echo $item['tag_price'] ?></del>
			</li>
            <?php endif ?>
		</ul>

		<div class="detailtag">
			<span>运费 <?php if (empty($item['freight_template_id'])) echo '包邮' ?></span>

            <?php if ($item['sold_monthly'] > 0): ?>
			<span>月销 <?php echo $item['sold_monthly'].$item['unit_name'] ?></span>
            <?php endif ?>

<!--			<span>美国进口</span>-->
		</div>

        <!--分享-->
        <div class="detailshare">
           <i class="icon-dp_fenxiang"></i>
        </div>
	</section>
	
	<section id=service-promise>
		<i class="icon-Arrow"></i>
		<ul>
			<li>
				<span>
					<img src="<?php echo CDN_URL ?>media/item/detail/quan@3x.png"/>
				</span>
				上门处理投诉
			</li>
			<li>
				<span>
					<img src="<?php echo CDN_URL ?>media/item/detail/quan@3x.png"/>
				</span>
				满58元包邮
			</li>
			<li>
				<span>
					<img src="<?php echo CDN_URL ?>media/item/detail/quan@3x.png"/>
				</span>
				3小时送达
			</li>
		</ul>
	</section>

	<?php if ( !empty($skus) ): ?>
    // TODO: SKU
	<?php endif ?>

    <!-- 优惠券模板 -->
    <div class="wid710 auto border20 bgfff skus clearfix mt20">

        <div class="topcardwrap">
        	
            <h1 class="clearfix">
                <span>进来购物券</span>
                <span>全进来实物商品通用</span>
            </h1>
            <h1 class="clearfix">
                <span>店铺优惠券</span>
                <span>领取优惠券</span>
            </h1>
            <div class="get">
                领取
            </div>
        </div>
        <hr>
        <div class="topcardwrap bottomcardwrap">
            <h1 class="clearfix">
                <span>促销</span>
                <span>满199立减50元</span>
            </h1>
            <h1 class="clearfix">
                <span>积分</span>
                <span>购买可得12积分</span>
            </h1>
            <i class="icon-Arrow cxtitle"></i>
        </div>

    </div>

    <!-- 产品参数 -->
    <div class="wid710 auto border20 bgfff skus clearfix mt20">
        <div class="topcardwrap">
            <h2>产品参数</h2>
            <i class="icon-Arrow cpArrow"></i>
        </div>
        <hr>
        <div class="topcardwrap">
            <h2>配送范围:市南区、市北区大部、崂山区大部。</h2>
            <i class="icon-Arrow cpArrow"></i>
        </div>
		
    </div>

	<!-- 商品评价 -->
    <?php if ( ! empty($comments)): ?>
	<div class="productevaluation mt20 auto wid710 border20 clearfix skus">
		<div class="topcardwrap">
			<h2>商品评价</h2>
		</div>
		
		<hr>
		<div class="topcardwrap clearfix">
			<div class="evaluationinfo clearfix">
				<div class="pic fl">
					<img src="<?php echo CDN_URL ?>media/item/detail/ximei@3x.png"/>
				</div>
				<span class="fl block">150****4832</span>
				<time class="fr">2017-03-22</time>
			</div>
		</div>

		<!--商品评价内容区域-->
		<div class="evaluationcontent">
			<p>商品一如既往的好,实物和照片一样没有色差,口感非常好,以后一如既往的关注意帮管家平台的,希望平台以后多搞一些这样的</p>
		</div>
		<div class="evaluationbtn auto">
			查看全部评价
		</div>
	</div>
    <?php endif ?>
	
	<!-- 商家信息 -->
	<div class="shopInfo mt20 auto border20 clearfix auto wid670">
		<div class="headerinfo clearfix">
			<div class="pic fl centered_xy">
				<img src="<?php echo MEDIA_URL.'biz/'.$biz['url_logo'] ?>">
			</div>
			<div class="headertext fl">
				<h1><?php echo $biz['brief_name'] ?></h1>
				<h2>入驻进来平台</h2>
			</div>
		</div>
		<div class="shopinfolist clearfix">
			<ul class="clearfix">
				<li>
					<p><?php echo $biz['item_count'] ?></p>
					<p>全部宝贝</p>
				</li>
				<li>
					<p><?php echo $biz['fav_biz_count'] ?></p>
					<p>关注人数</p>
				</li>
				<li>
					<span>
						宝贝描述
						<i><?php echo $biz['score_description'] ?> 高</i>
					</span>
					<span>
						卖家服务
						<i><?php echo $biz['score_service'] ?> 高</i>
					</span>
					<span>
						物流服务
						<i><?php echo $biz['score_deliver'] ?> 高</i>
					</span>
				</li>
			</ul>
		</div>
		<!--查看分类-->
		<div class="shopmore">
			<a href="<?php echo base_url('item_category_biz/index?biz_id='.$item['biz_id']) ?>">
				查看分类
			</a>
			<a href="<?php echo base_url('biz/detail?id='.$item['biz_id']) ?>">
				进店逛逛
			</a>
		</div>
	</div>

		<!--热门活动-->
		<div class="hotactivetitle wid710 auto mt20 border20">
			<img src="<?php echo CDN_URL ?>media/item/detail/remenhuodong@3x.png" />
		</div>
		<div class="activecontent mt20 wid710 auto border20 clearfix">
			<ul class="clearfix">
				<li>
					<img src="<?php echo CDN_URL ?>media/item/detail/ximei@3x.png"/>
					<h1>西梅</h1>
					<h2>400g/份</h2>
					<h3>¥29.80</h3>
				</li>
				<li>
					<img src="<?php echo CDN_URL ?>media/item/detail/tao@3x.png"/>
					<h1>西梅</h1>
					<h2>400g/份</h2>
					<h3>¥29.80</h3>
				</li>
				<li>
					<img src="<?php echo CDN_URL ?>media/item/detail/pingguo@3x.png"/>
					<h1>西梅</h1>
					<h2>400g/份</h2>
					<h3>¥29.80</h3>
				</li>
				<li style="margin-right: 0;">
					<img src="<?php echo CDN_URL ?>media/item/detail/juzi@3x.png"/>
					<h1>西梅</h1>
					<h2>400g/份</h2>
					<h3>¥29.80</h3>
				</li>
			</ul>
			
		</div>

    <?php if ( ! empty($item['description'])): ?>
        <p id=general-seperater>继续拖动，查看图文详情</p>

        <div id="item-description" class="wid710 auto">
            <?php echo $item['description'] ?>
        </div>
        <!--
        <p id=general-seperater>继续拖动，查看图文详情</p>
        <div class="bigadd border20 wid710 auto">
            <img src="<?php echo CDN_URL ?>media/item/detail/tu@3x.png" />
        </div>
        <div class="particularstag wid710 auto">
            <img src="<?php echo CDN_URL ?>media/item/detail/shangpinliangdian@3x.png" class="pictitle"/>
            <img src="<?php echo CDN_URL ?>media/item/detail/tu1@3x.png" class="piccontent" />
            <p>
                健脑、抗氧化、预防糖尿病、增强食欲、促进代谢、美容养颜、显著改善贫血等。适合老人、
                小孩及孕妇食用。
            </p>
        </div>
        <div class="particularstag wid710 auto">
            <img src="<?php echo CDN_URL ?>media/item/detail/ruhetiaoxuan@3x.png" class="pictitle"/>
            <img src="<?php echo CDN_URL ?>media/item/detail/tu1@3x.png" class="piccontent" />
            <p>
                血橙上一头上的圆形博文就是所谓的“脐”，血橙的脐越小越甜。如果表皮出现白色的霉点，则血橙的内部开始霉烂。
            </p>
        </div>
        <div class="particularstag wid710 auto">
            <img src="<?php echo CDN_URL ?>media/item/detail/shiyongfangshi@3x.png" class="pictitle"/>
            <img src="<?php echo CDN_URL ?>media/item/detail/tu1@3x.png" class="piccontent" />
            <p>
                美国血橙适宜鲜美血橙酸奶杯
                1、将血橙去皮切薄片（厚度约3mm）、酸奶备用。
                2、用筷子夹取橙片，贴在玻璃杯内壁。
                3、将备好的酸奶倒入杯中即可。
            </p>
        </div>
        -->
    <?php endif ?>

	<div class="particularstag wid710 auto">
		<img src="<?php echo CDN_URL ?>media/item/detail/jinlaiyoushi@3x.png" class="pictitle"/>
		<!--特色介绍-->
		<div class="featurescard clearfix mt10">
			<img src="<?php echo CDN_URL ?>media/item/detail/quanchenglenglian@3x.png" />
			<img src="<?php echo CDN_URL ?>media/item/detail/3xiaoshisongda@3x.png" />
			<img src="<?php echo CDN_URL ?>media/item/detail/tousuchuli@3x.png" />
		</div>
		<!--猜你喜欢区域-->
		<div class="shopinfolike auto wid710 border20">
			<img src="<?php echo CDN_URL ?>media/item/detail/cainixihuan@3x.png"/>
		</div>
		<div class="like wid718 auto clearfix mt10">
					<ul>
						<li>
							<img src="<?php echo CDN_URL ?>media/home/cainixihuan/cnxh/210x210_0.jpg"/>
							<h1>JUSTE UN CLOU 手镯</h1>
							<h2>8K玫瑰金</h2>
							<h3>¥10555.00</h3>
						</li>
						<li>
							<img src="<?php echo CDN_URL ?>media/home/cainixihuan/cnxh/210x210_1.jpg"/>
							<h1>栖霞红富士</h1>
							<h2>18k玫瑰金,手带表</h2>
							<h3>¥1045.00</h3>
						</li>
						<li class="mr0">
							<img src="<?php echo CDN_URL ?>media/home/cainixihuan/cnxh/210x210_2.jpg"/>
							<h1>DRIVER ONE 手表</h1>
							<h2>8K玫瑰金</h2>
							<h3>¥5100</h3>
						</li>
						<li>
							<img src="<?php echo CDN_URL ?>media/home/cainixihuan/cnxh/210x210_3.jpg"/>
							<h1>JUSTE UN CLOU 手镯</h1>
							<h2>8K玫瑰金</h2>
							<h3>¥5100</h3>
						</li>
						<li>
							<img src="<?php echo CDN_URL ?>media/home/cainixihuan/cnxh/210x210_0.jpg"/>
							<h1>JUSTE UN CLOU 手镯</h1>
							<h2>8K玫瑰金</h2>
							<h3>¥5100</h3>
						</li>
						<li class="mr0">
							<img src="<?php echo CDN_URL ?>media/home/cainixihuan/cnxh/210x210_2.jpg"/>
							<h1>JUSTE UN CLOU 手镯</h1>
							<h2>8K玫瑰金</h2>
							<h3>¥5100</h3>
						</li>
					</ul>
				</div>
	</div>
	
</div>

<style>
	#nav-main {background:#fff;height:.63rem;width: 7.16rem;padding:.17rem 0;padding-left:.2rem;padding-right:.2rem;border-top:1px solid #c9caca;border-radius:20px 20px 0 0;font-size: .24rem;position: fixed;bottom: 0;color: #3E3A39;}
	#nav-main li{
		float: left;
	}
		#nav-main .btn {width:1.94rem;height:.64rem;line-height:.64rem;border-radius:10px;background: #fa3752;float: left;text-align: center;float: left;color: #fff;}
		#nav-main .btn:nth-child(2){
			background: #ff5b00;
		}
		#order-create{
			background: #ff5a00 !important;
		}
		#nav-main li.vice-button {margin-right:.54rem;float: left;width: .5rem;}
			#nav-main li.vice-button a {font-size:.24rem;line-height:1;text-align:center;float: left;color: #3E3A39;width: .5rem;}
		#nav-main li:nth-of-type(3) {margin-right:.4rem;}
		#nav-main li:last-of-type {margin-left:10px;}
		#nav-main img {width:.36rem;height:.36rem;margin:0 auto .1rem;}
</style>

<nav id=nav-main>
	
	<ul>
		<?php // TODO 显示客服按钮前检查当前店铺客服工作状态，决定留言或即时通讯 ?>
		<li class=vice-button>
			<a title="客服" href="<?php echo base_url('dialog/detail?biz_id='.$item['biz_id']) ?>">
				<img src="<?php echo CDN_URL ?>media/item/detail/kafu_icon@3x.png">
				客服
			</a>
		</li>

		<?php // TODO 显示店铺按钮前检查商家经营状态 ?>
		<li class=vice-button>
			<a title="店铺" href="<?php echo base_url('biz/detail?id='.$item['biz_id']) ?>">
				<img src="<?php echo CDN_URL ?>media/item/detail/dianpu_icon@3x.png">
				店铺
			</a>
		</li>

		<?php // TODO 显示收藏、加入购物车、立即购买按钮前检查是否可售性（是否在售、库存是否足够、每单最高限量等） ?>
		<li class=vice-button>
			<a class=create data-op-class=fav_item data-op-name=create data-id="<?php echo $item['item_id'] ?>" title="收藏" href="<?php echo base_url('fav_item/create?id='.$item['item_id']) ?>">
				<img data-src-success="<?php echo base_url('/media/item/detail/shoucang-_xuanzhong@3x.png') ?>" src="<?php echo CDN_URL ?>media/item/detail/shoucang-@3x.png">
				收藏
			</a>
		</li>

		<?php
			// TODO 根据每单最高及最低限量做相关处理
			if ( !empty($in_cart) ):
				//var_dump($in_cart);
			endif;
		?>
		<li>
			<a id=cart-add class="btn btn-info btn-lg btn-block" title="加入购物车" href="<?php echo base_url('cart/add?biz_id='.$item['biz_id'].'&item_id='.$item['item_id']) ?>">
				加入<wbr>购物车
			</a>
		</li>

		<li>
			<a id=order-create class="btn btn-primary btn-lg btn-block" title="立即购买" href="<?php echo base_url('order/create?item_id='.$item['item_id']) ?>">
				立即购买
			</a>
		</li>
	</ul>
</nav>

<script>
	var vH = ($(".shopInfo .headerinfo .pic").height() - $(".shopInfo .headerinfo .pic").find('img').height()) / 2;
	$(".shopInfo .headerinfo .pic").find('img').css('marginTop',vH);
	// 点击SKU时获取SKU信息
	$('#skus a').click(function(){
		item_id = $(this).attr('data-item-id');
		sku_id = $(this).attr('data-sku-id');
		stocks = $(this).attr('data-stocks');
		
		if (stocks == 0)
		{
			alert('卖光了');
		}
		else
		{
			alert(item_id + ':' + sku_id + '库存 ' + stocks);
		}
		return false;
	});
	
	// 商品信息
	var item = <?php echo $item_in_json ?>
	
	
</script>