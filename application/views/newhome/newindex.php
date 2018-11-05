<!DOCTYPE html>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>进来</title>

<!--Swiper3.0.4-->

<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link rel="shortcut icon" href="https://cdn-remote.517ybang.com/icon/jinlai_client/icon28@3x.png">

<link rel="stylesheet" href="/newhome/css/reset.css" />

<link rel="stylesheet" href="/newhome/css/swiper4.0.0.css">

<link rel="stylesheet" href="/newhome/css/newhome.css" />

<link rel="stylesheet" href="/newhome/css/tab.min.css" />

<script src="/newhome/js/jquery.js"></script>

<style type="text/css">

	.swiper-pagination-bullet-active{

		opacity: 1;

    	background: #727171 !important;

	}
	.swiper-container-3d .newtip {
        font-size: .26rem;
    text-align: center;
    position: absolute;
    left: 50%;
    margin-left: -1.5rem;
    bottom: -.9rem;
    width: 3rem;
    overflow: hidden;
    display: none;
}
.swiper-container-3d .swiper-slide .main-img {
    width: 100%;
    margin: 0 auto;
    display: block;
    border-radius: .12rem;
}

	.swiper-pagination-bullet{

		width: .12rem;

		height: .12rem;

		margin-right: .2rem;

	}
	.newstraincube li h3{
		color: #ff0303;
    font-size: .28rem;
    margin-left: .2rem;
    margin-top: .16rem;
	}
	.newcommondlist ul li{
		position: relative;
	}
	.newcommondlist h3{
	    color: #ff0303;
    font-size: .28rem;
    position: absolute;
    top: .9rem;
    left: .2rem;

	}
.newstraincube li h3 span{
	color: #ff0303;
	font-size: .18rem
}
.hotbuy .hotleft h3{
	    color: #ff0303;
    font-size: .28rem;
    position: absolute;
    top: 1.6rem;
    left: .2rem;
}
.hotbuy .hotleft{
	position: relative;
}
.newred li {
    float: left;
    width: 30.95%;
    height: 1.14rem;
    background: url(https://cdn-remote.517ybang.com/5yuan@3x.jpg);
    background-size: cover;
    margin-left: .17rem;
}
.newred li.ten {
    background: url(https://cdn-remote.517ybang.com/10@3x.png);
    background-size: cover;
}
.newred li.tenfive {
    background: url(https://cdn-remote.517ybang.com/15@3x.png);
    background-size: cover;
}
.hotbuy .hotright .hotcur h3{
	 color: #ff0303;
    font-size: .28rem;
    position: absolute;
    top: 1.6rem;
    left: .2rem;
}
</style>

</head>

<body id="newImgLazy">

<script>

	(function (doc, win) {

                      var docEl = doc.documentElement,

                        resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',

                        recalc = function () {

                          var clientWidth = docEl.clientWidth;

                          if (!clientWidth) return;

                    // [注]:chrome下不支持10px所以前边的100代表，1rem = 100px;后边的750代表设计稿的宽度

                          docEl.style.fontSize = 100 * (clientWidth / 750) + 'px';

                        };

                    

                      if (!doc.addEventListener) return;recalc();

                      win.addEventListener(resizeEvt, recalc, false);

                      doc.addEventListener('DOMContentLoaded', recalc, false);

                    })(document, window);          		

</script>

<!--定位区域-->

<div class="city">

  <div class="city-wrapper city-wrapper-hook">

    <div class="scroller-hook">

      <div class="cities cities-hook"></div>

    </div>

    <div class="shortcut shortcut-hook"></div>

  </div>

</div>

<div class="newbanner">

		<div class="newswiper-container">

			<div class="swiper-wrapper">

                <div class="swiper-slide">

					<ul class="clearfix">

						<li>

                            <a href="https://www.517ybang.com/item/detail?id=5858" target=_self>

                            	<img src="https://cdn-remote.517ybang.com/bannernew1.jpg"/>

                            </a>

						</li>

					</ul>

				</div>

				 <div class="swiper-slide">

					<ul class="clearfix">

						<li>

                            <a href="###" target=_self>

                            	<img src="/newhome/top/2t.png"/>

                            </a>

						</li>

					</ul>

				</div>

				 

			</div>

			 <div class="newswiper-pagination"></div>

		</div>

		<!--定位搜索区域-->

		<div class="newhomeSearch newwid710">

			<span class="selectCity">青岛市</span>

			<div class="newdownarr">

				<img src="/newhome/images/top_jiantou@3x.png"/>

			</div>

			<div class="search-icon">

				<img src="/newhome/images/top_search@3x.png"/>

			</div>

			<input class="withjump" data="https://www.517ybang.com/item/index" type="" name="" id="" value="" placeholder="请输入您想要搜索的内容"/>

			<span class="fr newicon withjump" data="https://www.517ybang.com/chat/index">

				<img src="/newhome/images/chat.png" alt="" />

			</span>

			<!-- <span class="fr newicon">

				<img src="/newhome/images/top_saoyisao@3x.png" alt="" />

			</span> -->

		</div>

</div>



<!--分类小icon-->

<div class="newClass newwid710 clearfix">

	<div class="newcir">

		

	</div>

	<ul class="clearfix">

		<li class="withjump" data="https://www.517ybang.com/page/tabdetail?id=2">

			<img src="/newhome/images/icon_chaoshi@3x.png" data-src="/newhome/images/icon_chaoshi@3x.png" alt="" />

			<span class="padbottom">生鲜超市</span>

		</li>

		<li class="withjump" data="https://www.517ybang.com/page/tabdetail?id=15">

			<img src="/newhome/images/icon_kuwan@3x.png" data-src="/newhome/images/icon_kuwan@3x.png" alt="" />

			<span class="padbottom">潮流酷玩</span>

		</li>

		<li class="withjump" data="https://www.517ybang.com/page/tabdetail?id=8">

			<img src="/newhome/images/icon_muying@3x.png" data-src="/newhome/images/icon_muying@3x.png" alt="" />

			<span class="padbottom">母婴用品</span>

		</li>

		<li class="withjump" data="https://www.517ybang.com/page/tabdetail?id=10">

			<img src="/newhome/images/icon_shuma@3x.png" data-src="/newhome/images/icon_shuma@3x.png" alt="" />

			<span class="padbottom">科技数码</span>

		</li>

		<li class="withjump" data="https://www.517ybang.com/page/tabdetail?id=11">

			<img src="/newhome/images/icon_shenghuo@3x.png" data-src="/newhome/images/icon_shenghuo@3x.png" alt="" />

			<span class="padbottom">居家生活</span>

		</li>

		<li class="withjump" data="https://www.517ybang.com/page/tabdetail?id=12">

			<img src="/newhome/images/icon_lingshi@3x.png" data-src="/newhome/images/icon_lingshi@3x.png" alt="" />

			<span>休闲零食</span>

		</li>

		<li class="withjump" data="https://www.517ybang.com/page/tabdetail?id=13">

			<img src="/newhome/images/icon_yundong@3x.png" data-src="/newhome/images/icon_yundong@3x.png" alt="" />

			<span>运动户外</span>

		</li>

		<li class="withjump" data="https://www.517ybang.com/page/tabdetail?id=14">

			<img src="/newhome/images/icon_dongman@3x.png" data-src="/newhome/images/icon_dongman@3x.png" alt="" />

			<span>游戏动漫</span>

		</li>

		<li class="withjump" data="https://www.517ybang.com/coupon">

			<img src="/newhome/images/icon_lingquan@3x.png" data-src="/newhome/images/icon_lingquan@3x.png" alt="" />

			<span>领券中心</span>

		</li>

		<li class="withjump" data="https://www.517ybang.com/article/bizcooperation">

			<img src="/newhome/images/icon_ruzhu@3x.png" data-src="/newhome/images/icon_ruzhu@3x.png" alt="" />

			<span>我要入驻</span>

		</li>

	</ul>

</div>

<!--1像素边框-->

<div class="border1px"></div>



<!--进来说,大事件滚动区域-->

<div class="newwid710 newtalk withjump" data="https://www.517ybang.com//application/views/article/article_broadcast.html?device_platform=ios">

	<img src="/newhome/images/jinlaishuo@3x.png" alt="" class="fl" />

	<span class="linevertical fl"></span>

	<!--热点事件文字区域-->

	<div class="newtalktext fl">

		<ul>

			<li>

				<img src="/newhome/images/hottalk.png" alt="" />

				<span>进来,与精良为伍!</span>

			</li>

			<li>

				<img src="/newhome/images/hottalk.png" alt="" />

				<span>进来3.0即将上线!</span>

			</li>

			<li>

				<img src="/newhome/images/hottalk.png" alt="" />

				<span>进来吧!</span>

			</li>

			<li>

				<img src="/newhome/images/hottalk.png" alt="" />

				<span>进来,与精良为伍!</span>

			</li>

			<li>

				<img src="/newhome/images/hottalk.png" alt="" />

				<span>进来3.0即将上线</span>

			</li>

		</ul>

	</div>

	<div class="newtalkbg"></div>

</div>

<div class="border1px"></div>

<!--活动区域开始-->

<div class="newparty newwid710">

	<img src="/newhome/images/hd_banner@3x.jpg"/>

</div>

<div class="newpartycard newwid710 clearfix">

	<div class="left fl withjump" data="https://www.517ybang.com/page/tabdetail?id=518">

		<h1>新人专享

			<b class="bottom-line"></b>

		</h1>

		<span>新人专享专区</span>

	</div>

	<div class="right fr ">

		<div class="card-r card-r-1 withjump" data="https://www.517ybang.com/page/tabdetail?id=10">

			<h1>限时专享

			<b class="bottom-line"></b>

		</h1>

		<span>限时专享专区</span>

		</div>

		<div class="card-r card-r-2 withjump" data="https://www.517ybang.com/page/tabdetail?id=14">

			<h1>达人推荐

			<b class="bottom-line"></b>

		</h1>

		<span>达人推荐专区</span>

		</div>

	</div>

</div>

<div class="border1px"></div>



<!--专题页区域-->

<div class="specialpage clearfix newwid710">

	<h1 class="fl">专题页</h1>

	<h2 class="fl">精心选购,为爱美的你</h2>

</div>

	<!--图片区域-->

	<div class="newwid710">

	<div class="specal-wrap fl newwid710">

	<div class="special-pic withjump" data="https://www.517ybang.com/page/tabdetail?id=511">

		<img src="/newhome/images/shejianqingdao@3x.png" alt="" />

		<p>舌尖青岛 | <span>玩转青岛美食</span></p>

	</div>

		<div class="special-pic mt0 withjump" data="https://www.517ybang.com/page/tabdetail?id=510">

		<img src="/newhome/images/wanhzuanqingdoa@3x.png" alt="" />

		<p>玩转青岛 | <span>精选折扣</span></p>

	</div>

	</div>

	<div class="fr special-pic-2 clearfix">

		<div class="newright fr withjump" data="https://www.517ybang.com/biz/detail?id=254">

			<h1>天天特价</h1>

			<h2>领优惠券更省钱</h2>

			<img src="/newhome/images/tejia@3x.png" alt="" />

		</div>

	</div>

	</div>

		<div class="specialcontent clearfix  newwid710">

		<ul class="clearfix">

			<li class="withjump" data="https://www.517ybang.com/page/tabdetail?id=834">

				<strong>家有萌娃</strong>

				<span>萌化你的朋友圈</span>

				<img src="/newhome/images/default.png" data-src="/newhome/images/jiayoumengwa@3x.png"/>

			</li>

			<li class="withjump" data="https://www.517ybang.com/page/tabdetail?id=515">

				<strong>爱宠机密</strong>

				<span>加油吧 铲屎官</span>

				<img src="/newhome/images/default.png" data-src="/newhome/images/aichongjimi@3x.png"/>

			</li>

			<li class="withjump" data="https://www.517ybang.com/page/tabdetail?id=15">

				<strong>潮流酷玩</strong>

				<span>潮流尖货 会员尊享</span>

				<img src="/newhome/images/default.png" data-src="/newhome/images/chaoliukuwan@3x.png"/>

			</li>

		</ul>

	</div>

		<div class="specialcontent clearfix newwid710" style="margin-top: 0px;margin-bottom: .4rem;">

		<ul class="clearfix">

			<li class="withjump" data="https://www.517ybang.com/page/tabdetail?id=512">

				<strong>运动健康</strong>

				<span>秀出你的马甲线</span>

				

				<img src="/newhome/images/default.png" data-src="/newhome/images/yundongjiankang@3x.png"/>

			</li>

			<li class="withjump" data="https://www.517ybang.com/page/tabdetail?id=513">

				<strong>特权专享</strong>

				<span>独家发售 会员专供</span>

				<img src="/newhome/images/default.png" data-src="/newhome/images/41d878df8d9a61e14505871c6b0f6212@3x.png"/>

			</li>

			<li class="withjump" data="https://www.517ybang.com/page/tabdetail?id=11">

				<strong>品质好物</strong>

				<span>高颜值 好品质美物</span>

				<img src="/newhome/images/default.png" data-src="/newhome/images/d6c115803ffbd787a3252ba7d5d87444@3x.png"/>

			</li>

		</ul>

	</div>

</div>

<div class="border1px"></div>



<!--红包专区-->

<div class="specialpage clearfix newwid710">

	<h1 class="fl">红包专区</h1>

	<h2 class="fl">精心选购,为爱美的你</h2>

	<img src="/newhome/images/red.gif" class="redcart" alt="" />

</div>

<!--红包内容区域-->

<div class="newred newwid710 clearfix">

	<ul class="clearfix">

		<li class="withjump" data="https://www.517ybang.com/coupon/create?template_id=97">

			<!-- <span> -->

				<!--<b>5</b>&nbsp;元

			</span>

			<p>单笔满<i>199</i>使用</p>-->

		</li>

		<li class="ten withjump" data="https://www.517ybang.com/coupon/create?template_id=99">

			<!--<span>

				<b>15</b>&nbsp;元

			</span>

			<p>单笔满<i>199</i>使用</p>-->

		</li>

		<li class="tenfive withjump" data="https://www.517ybang.com/coupon/create?template_id=98">

			<!--<span>

				<b>25</b>&nbsp;元

			</span>

			<p>单笔满<i>199</i>使用</p>-->

		</li>

	</ul>

</div>

<div class="border1px"></div>



<!--进来严选-->

<div class="specialpage clearfix newwid710">

	<h1 class="fl">进来严选</h1>

	<h2 class="fl">精心甄选 专属你的购物指南</h2>

</div>

<!--进来严选内容区域-->

<div class="newstrain mt40 mb10">

	<img src="/newhome/images/chosebanner.jpg"/>

</div>

<div class="newstraincube newwid710 clearfix">

	<ul>

		<li class="mb10 l1 withjump" data="https://www.517ybang.com/item/detail?id=4904">

			<h1>沃隆混合坚果</h1>

			<h2>750g/盒</h2>
			<h3>
				<span>¥</span>
				139
			</h3>
		</li>

		<li class="mb10 l2 withjump" data="https://www.517ybang.com/item/detail?id=5683">

			<h1>创意恐龙矮凳</h1>

			<h2>实木</h2>
			<h3>
				<span>¥</span>
				253
			</h3>
		</li>

		<li class="mb10 l3 withjump" data="https://www.517ybang.com/item/detail?id=7110">

			<h1>猫王收音机MW-P1</h1>

			<h2>原子唱机</h2>
			<h3>
				<span>¥</span>
				299
			</h3>

		</li>

		<li class="l4 withjump" data="https://www.517ybang.com/item/detail?id=7109">

			<h1>Dyson戴森 吹风机 Supersonic HD01</h1>

			<h2>中国红</h2>
			<h3>
				<span>¥</span>
				2990
			</h3>
		</li>

		<li class="l5 withjump" data="https://www.517ybang.com/item/detail?id=7108">

			<h1>紫泥茶宠齐天大圣悟空猴子</h1>

			<h2>茶玩摆件</h2>
			<h3>
				<span>¥</span>
				46
			</h3>

		</li>

		<li class="l6 withjump" data="https://www.517ybang.com/item/detail?id=7107">

			<h1>擦车布专用巾</h1>

			<h2>加厚</h2>
			<h3>
				<span>¥</span>
				15.8
			</h3>
		</li>

	</ul>

</div>

<div class="border1px"></div>

<!--新品首发-->

<div class="specialpage clearfix newwid710" style="padding-bottom: .5rem;">

	<h1 class="fl">新品首发</h1>

	<h2 class="fl">精心选购,为爱美的你</h2>

</div>



<!--3d旋转-->

<div class="newwrapper-3d">

<div class="swiper-container-3d" >





  <div class="swiper-wrapper">

    <div class="swiper-slide" data-id='0'>
    	<a href="https://www.517ybang.com/item/detail?id=4886">
    	<img src="/newhome/new/1q.png" class="main-img">

		<div class="newtip">

			<h1>钢笔礼盒装</h1>

			<h2>¥358</h2>

		</div>
</a>
    </div>

    <div class="swiper-slide" data-id='1'>
    	<a href="https://www.517ybang.com/item/detail?id=6954">
    	<img src="/newhome/new/2q.png" class="main-img">
		
		<div class="newtip" style="display: block;">

			<h1>卡通合金车美国队长</h1>

			<h2>¥30</h2>

		</div>
		</a>
    </div>

    <div class="swiper-slide" data-id='2'>
    	<a href="https://www.517ybang.com/item/detail?id=5183">
    	<img src="/newhome/new/3q.png" class="main-img">

		<div class="newtip">

			<h1>美的电烤箱</h1>

			<h2>¥299</h2>

		</div>
	</a>
    </div>

    <div class="swiper-slide" data-id='3'>
    	<a href="https://www.517ybang.com/item/detail?id=4690">
    	<img src="/newhome/new/4q.png" class="main-img">

		<div class="newtip">

			<h1>小米(MI) 小米AI音箱</h1>

			<h2>¥148</h2>

		</div>
</a>
    </div>

    <div class="swiper-slide" data-id='4'>
    	<a href="https://www.517ybang.com/item/detail?id=6610">
    	<img src="/newhome/new/5q.png" class="main-img">

		<div class="newtip">

			<h1>俐智小颗粒积木</h1>

			<h2>¥188</h2>

		</div>
</a>
    </div>

  </div>

 

</div>

 <div class="swiper-pagination" id="pagination"></div>

 </div>

 <!--<div class="border1px"></div>

<div class="specialpage clearfix newwid710 pt40">

	<h1 class="fl">热卖专区</h1>

</div>-->

<div class="border1px"></div>



<!-- 热卖推荐复用区域 -->

<div class="newwid710 newcommond mt40">

	<h1 class="fl">热卖推荐</h1>

	<h2 class="fl">热销爆款 好物力荐</h2>

	<!-- <h3 class="fr">

		<img src="/newhome/images/gengduo@3x.png" alt="" />

	</h3> -->

	<!-- <h2 class="fr">更多</h2> -->

	

</div>

<div class="hotbuy newwid710 clearfix">

	<div class="fl hotleft withjump" data="https://www.517ybang.com/item/detail?id=7090">

		<h1>折叠躺椅

			<span></span>

		</h1>

		<h2>多功能便携靠椅</h2>
		<h3>
				<span>¥</span>
				88
			</h3>
	</div>

	

	<div class="hotright fr">

		<div class="hotcur clearfix withjump" data="https://www.517ybang.com/item/detail?id=7069">

			<h1>运动蓝牙耳机

				<span></span>

			</h1>

			<h2>挂脖式</h2>
			<h3>
				<span>¥</span>
				69.9
			</h3>
			<img src="/newhome/hot/7069.jpg" alt="" />

		</div>

		<div class="hotcur clearfix withjump" data="https://www.517ybang.com/item/detail?id=7092">

			<h1>胶原护手霜<span></span></h1>

			<h2>滋润保湿补水</h2>
			<h3>
				<span>¥</span>
				24.9
			</h3>
			<img src="/newhome/hot/7092.jpg" alt="" />

		</div>

	</div>

</div>

<!--热卖推荐商品列表-->

<section class="newcommondlist clearfix newwid710">

	<ul>

		<li class="withjump" data="https://www.517ybang.com/item/detail?id=7075">

			<h1>吃鸡游戏手柄</h1>

			<h2>吃鸡辅助神器</h2>
			<h3>
				<span>¥</span>
				44.5
			</h3>
			<img src="/newhome/hot/7075.jpg" data-src="/newhome/hot/7075.jpg" alt="" />

		</li>

		<li class="withjump" data="https://www.517ybang.com/item/detail?id=7102">

			<h1>婴儿电子体温计</h1>

			<h2>高精准耳温枪</h2>
			<h3>
				<span>¥</span>
				99
			</h3>
			<img src="/newhome/hot/7102.jpg" data-src="/newhome/hot/7102.jpg" alt="" />

		</li>

		<li class="withjump" data="https://www.517ybang.com/item/detail?id=7077">

			<h1>日本水果汁软糖</h1>

			<h2>爆浆橡皮糖</h2>
			<h3>
				<span>¥</span>
				59.8
			</h3>
			<img src="/newhome/hot/7077.jpg" data-src="/newhome/hot/7077.jpg" alt="" />

		</li>

		<li class="withjump" data="https://www.517ybang.com/item/detail?id=7095">

			<h1>小强灭杀家用贴</h1>

			<h2>清克星全窝端</h2>
			<h3>
				<span>¥</span>
				29.9
			</h3>
			<img src="/newhome/hot/7095.jpg" data-src="/newhome/hot/7095.jpg" alt="" />

		</li>

		<li class="withjump" data="https://www.517ybang.com/item/detail?id=7104">

			<h1>公牛USB插座</h1>

			<h2>智能插座接线板</h2>
			<h3>
				<span>¥</span>
				69
			</h3>
			<img src="/newhome/hot/7104.jpg" data-src="/newhome/hot/7104.jpg" alt="" />

		</li>

		<li class="withjump" data="https://www.517ybang.com/item/detail?id=7073">

			<h1>小黄鸭斗篷雨衣</h1>

			<h2>抖音同款</h2>
			<h3>
				<span>¥</span>
				16.9
			</h3>
			<img src="/newhome/hot/7073.jpg" data-src="/newhome/hot/7073.jpg" alt="" />

		</li>

	</ul>

	

</section>







<!-- 孙老师 -->

<div class="newwid710 newcommond mt40">

    <h1 class="fl">休闲零食</h1>

    <h2 class="fl">美食荟萃 大饱口福</h2>

    <h3 class="fr">

        <img src="/newhome/images/gengduo@3x.png" alt="" />

    </h3>

    <h2 class="fr withjump"  data="https://www.517ybang.com/biz/detail?id=149">更多</h2>

    

</div>

<div class="newcommondtitle clearfix">

    <div class="newcommondtitle-pic1 fl">

        <img src="/newhome/lingshi/ad_left.jpg">

    </div>

    <div class="newcommondtitle-pic2 fl withjump" data=" https://www.517ybang.com/biz/detail?id=149

">

        <img src="/newhome/lingshi/ad_right.jpg">

    </div>

</div>

<div class="newcommondcontent newwid710 clearfix">

    <ul class="clearfix">

        <li class="mb10 withjump" data="https://www.517ybang.com/item/detail?id=7070">

            <img src="/newhome/lingshi/lingshi_1.jpg" data-src="/newhome/lingshi/lingshi_1.jpg">

            <h1>卫龙辣条零食大礼包</h1>

            <h2>¥29.80</h2>

            <!-- <span class="newsalenum">成交<i>100</i>笔</span> -->

        </li>

        <li class="mb10 withjump" data="https://www.517ybang.com/item/detail?id=7071">

            <img src="/newhome/lingshi/lingshi_1.jpg" data-src="/newhome/lingshi/lingshi_2.jpg">

            <h1>三只松鼠零食大礼包</h1>

            <h2>¥59.90</h2>

            <!-- <span class="newsalenum">成交<i>100</i>笔</span> -->

        </li>

        <li  class="withjump" data="https://www.517ybang.com/item/detail?id=7078">

            <img src="/newhome/lingshi/lingshi_1.jpg" data-src="/newhome/lingshi/lingshi_3.jpg">

            <h1>Nutri-Brex欣善怡麦片</h1>

            <h2>¥79.00</h2>

            <!-- <span class="newsalenum">成交<i>100</i>笔</span> -->

        </li>

        <li   class="withjump" data="https://www.517ybang.com/item/detail?id=7076">

            <img src="/newhome/lingshi/lingshi_1.jpg" data-src="/newhome/lingshi/lingshi_4.jpg">

            <h1>隅田川冷萃咖啡</h1>

            <h2>¥39.00</h2>

            <!-- <span class="newsalenum">成交<i>100</i>笔</span> -->

        </li>

        

    </ul>

</div>

<!-- 热卖推荐复用区域 -->

<div class="newwid710 newcommond mt40">

    <h1 class="fl">母婴用品</h1>

    <h2 class="fl">呵护母子 爱不打烊</h2>

    <h3 class="fr">

        <img src="/newhome/images/gengduo@3x.png" alt="" />

    </h3>

    <h2 class="fr withjump" data="https://www.517ybang.com/biz/detail?id=150">更多</h2>

</div>

<div class="newcommondtitle clearfix">

    <div class="newcommondtitle-pic1 fl">

        <img src="/newhome/muying/ad_left.jpg">

    </div>

    <div class="newcommondtitle-pic2 fl withjump" data=" https://www.517ybang.com/biz/detail?id=183

">

        <img src="/newhome/muying/ad_right.jpg">

    </div>

</div>

<div class="newcommondclass newwid710 clearfix">

    <ul class="clearfix">

        <li class="mb10 withjump" data="https://www.517ybang.com/item/detail?id=6232">

            <img src="/newhome/muying/muying_1.jpg" data-src="/newhome/muying/muying_1.jpg">

            <h1>诺薇纸尿裤</h1>

            <h2>领优惠券更省钱</h2>

            <h3>¥&nbsp;118.0</h3>

            <!-- <span>+</span> -->

        </li>

        <li class="mb10 withjump" data="https://www.517ybang.com/item/detail?id=6667">

            <img src="/newhome/muying/muying_2.jpg" data-src="/newhome/muying/muying_2.jpg">

            <h1>儿童成长枕</h1>

            <h2>领优惠券更省钱</h2>

            <h3>¥&nbsp;300.0</h3>

            <!-- <span>+</span> -->

        </li>

        <li class="mb10 withjump" data="https://www.517ybang.com/item/detail?id=7079">

            <img src="/newhome/muying/muying_3.jpg" data-src="/newhome/muying/muying_3.jpg">

            <h1>费雪音乐健身架</h1>

            <h2>领优惠券更省钱</h2>

            <h3>¥&nbsp;239.0</h3>

            <!-- <span>+</span> -->

        </li>

        <li class="mb10 withjump" data="https://www.517ybang.com/item/detail?id=7080">

            <img src="/newhome/muying/muying_4.jpg" data-src="/newhome/muying/muying_4.jpg">

            <h1>儿童电动摩托车</h1>

            <h2>领优惠券更省钱</h2>

            <h3>¥&nbsp;798.0</h3>

            <!-- <span>+</span> -->

        </li>

        <li class="mb10 withjump" data="https://www.517ybang.com/item/detail?id=7081">

            <img src="/newhome/muying/muying_5.jpg" data-src="/newhome/muying/muying_5.jpg">

            <h1>婴儿恒温调奶器</h1>

            <h2>领优惠券更省钱</h2>

            <h3>¥&nbsp;289.0</h3>

            <!-- <span>+</span> -->

        </li>

        <li class="mb10 withjump" data="https://www.517ybang.com/item/detail?id=7083">

            <img src="/newhome/muying/muying_6.jpg" data-src="/newhome/muying/muying_6.jpg">

            <h1>婴儿衣服礼盒</h1>

            <h2>领优惠券更省钱</h2>

            <h3>¥&nbsp;240.37</h3>

            <!-- <span>+</span> -->

        </li>

    </ul>

</div>

<!-- 热卖推荐复用区域 -->

<div class="newwid710 newcommond mt40">

    <h1 class="fl">居家生活</h1>

    <h2 class="fl">居家好货 舒适生活</h2>

    <h3 class="fr">

        <img src="/newhome/images/gengduo@3x.png" alt="" />

    </h3>

    <h2 class="fr withjump" data="https://www.517ybang.com/biz/detail?id=152">更多</h2>

</div>

<div class="newcommondtitle clearfix">

    <div class="newcommondtitle-pic1 fl">

        <img src="/newhome/jujia/ad_left.jpg">

    </div>

    <div class="newcommondtitle-pic2 fl withjump" data="https://www.517ybang.com/biz/detail?id=152

">

        <img src="/newhome/jujia/ad_right.jpg">

    </div>

</div>

<div class="newcommondcontent newwid710 clearfix">

    <ul class="clearfix">

        <li class="mb10 withjump" data="https://www.517ybang.com/item/detail?id=7085">

            <img src="/newhome/jujia/7085.jpg" data-src="/newhome/jujia/7085.jpg">

            <h1>迷你便携可折叠干衣机</h1>

            <h2>¥158.00</h2>

            <!-- <span class="newsalenum">成交<i>100</i>笔</span> -->

        </li>

        <li class="mb10 withjump" data="https://www.517ybang.com/item/detail?id=6840">

            <img src="/newhome/jujia/6840.jpg" data-src="/newhome/jujia/6840.jpg">

            <h1>滴露香皂3个装</h1>

            <h2>¥9.90</h2>

            <!-- <span class="newsalenum">成交<i>100</i>笔</span> -->

        </li>

        <li class="withjump" data="https://www.517ybang.com/item/detail?id=6226">

            <img src="/newhome/jujia/6226.jpg" data-src="/newhome/jujia/6226.jpg">

            <h1>JN保湿纸巾一提</h1>

            <h2>¥28.00</h2>

            <!-- <span class="newsalenum">成交<i>100</i>笔</span> -->

        </li>

        <li class="withjump" data="https://www.517ybang.com/item/detail?id=7087">

            <img src="/newhome/jujia/7087.jpg" data-src="/newhome/jujia/7087.jpg">

            <h1>地板粘毛器</h1>

            <h2>¥29.90</h2>

            <!-- <span class="newsalenum">成交<i>100</i>笔</span> -->

        </li>

        

    </ul>

</div>

<!-- end孙老师 -->









<!-- 科技 -->

<!-- 热卖推荐复用区域 -->

<div class="newwid710 newcommond mt40">

	<h1 class="fl">科技数码</h1>

	<h2 class="fl">潮流尖货 畅享科技</h2>

	<h3 class="fr">

		<img src="/newhome/images/gengduo@3x.png" alt="" />

	</h3>

	<h2 class="fr withjump" data="https://www.517ybang.com/biz/detail?id=151">更多</h2>

</div>

<div class="newcommondtitle clearfix">

	<div class="newcommondtitle-pic1 fl">

		<img src="/newhome/tech/techbanner.jpg">

	</div>

	<div class="newcommondtitle-pic2 fl withjump" data="https://www.517ybang.com/biz/detail?id=166

">

		<img src="/newhome/tech/techbanner2.jpg">

	</div>

</div>

<div class="newcommondclass newwid710 clearfix">

	<ul class="clearfix">

		<li class="mb10 withjump" data="https://www.517ybang.com/item/detail?id=7091">

			<img src="/newhome/tech/7091.jpg" data-src="/newhome/tech/7091.jpg">

			<h1>三合一数据线</h1>

			<h2></h2>

			<h3>¥&nbsp;16.80</h3>

		</li>

		<li class="mb10 withjump" data="https://www.517ybang.com/item/detail?id=7093">

			<img src="/newhome/tech/7093.jpg" data-src="/newhome/tech/7093.jpg">

			<h1>华为智能体脂秤</h1>

			<h2></h2>

			<h3>¥&nbsp;169.00</h3>

		</li>

		<li class="mb10 withjump" data="https://www.517ybang.com/item/detail?id=7094">

			<img src="/newhome/tech/7094.jpg" data-src="/newhome/tech/7094.jpg">

			<h1>手机镜头外置摄像头</h1>

			<h2></h2>

			<h3>¥&nbsp;289.00</h3>

		</li>

		<li class="mb10 withjump" data="https://www.517ybang.com/item/detail?id=7096">

			<img src="/newhome/tech/7096.jpg" data-src="/newhome/tech/7096.jpg">

			<h1>欧乐电动牙刷</h1>

			<h2></h2>

			<h3>¥&nbsp;118.00</h3>

		</li>

		<li class="mb10 withjump" data="https://www.517ybang.com/item/detail?id=7098">

			<img src="/newhome/tech/7098.jpg" data-src="/newhome/tech/7098.jpg">

			<h1>无线蓝牙音箱</h1>

			<h2></h2>

			<h3>¥&nbsp;258.00</h3>

		</li>

		<li class="mb10 withjump" data="https://www.517ybang.com/item/detail?id=7099">

			<img src="/newhome/tech/7099.jpg" data-src="/newhome/tech/7099.jpg">

			<h1>坚果G7投影仪</h1>

			<h2></h2>

			<h3>¥&nbsp;3098.00</h3>

		</li>

	</ul>

</div>

<!-- end科技 -->







<!-- 进来生鲜 -->

<div class="newwid710 newcommond mt40">

	<h1 class="fl">进来生鲜</h1>

	<h2 class="fl">甄选鲜货 产地直送</h2>

	<h3 class="fr">

		<img src="/newhome/images/gengduo@3x.png" alt="" />

	</h3>

	<h2 class="fr withjump" data="https://www.517ybang.com/biz/detail?id=1">更多</h2>

	

</div>

<div class="newcommondtitle clearfix">

	<div class="newcommondtitle-pic1 fl">

		<img src="/newhome/jinlai/jinlaibanner.jpg">

	</div>

	<div class="newcommondtitle-pic2 fl withjump" data="https://www.517ybang.com/biz/detail/jinlai_fresh

">

		<img src="/newhome/jinlai/jinlaibanner2.jpg">

	</div>

</div>

<div class="newcommondcontent newwid710 clearfix">

	<ul class="clearfix">

		<li class="mb10 withjump" data="https://www.517ybang.com/item/detail?id=4338">

			<img src="/newhome/jinlai/4338.jpg" data-src="/newhome/jinlai/4338.jpg">

			<h1>澳滋进口澳洲牛尾</h1>

			<h2>¥55.00</h2>

			<!-- <span class="newsalenum">成交<i>100</i>笔</span> -->

		</li>

		<li class="mb10 withjump" data="https://www.517ybang.com/item/detail?id=6884">

			<img src="/newhome/jinlai/6884.jpg" data-src="/newhome/jinlai/6884.jpg">

			<h1>优尼特眼肉芯牛排</h1>

			<h2>¥158.00</h2>

			<!-- <span class="newsalenum">成交<i>100</i>笔</span> -->

		</li>

		<li class="withjump" data="https://www.517ybang.com/item/detail?id=6605">

			<img src="/newhome/jinlai/6605.jpg" data-src="/newhome/jinlai/6605.jpg">

			<h1>光明畅优酸奶6瓶装</h1>

			<h2>¥45.00</h2>

			<!-- <span class="newsalenum">成交<i>100</i>笔</span> -->

		</li>

		<li class="withjump" data="https://www.517ybang.com/item/detail?id=4068">

			<img src="/newhome/jinlai/4068.jpg" data-src="/newhome/jinlai/4068.jpg">

			<h1>大金发野猪猪肘肉 0.8kg/份</h1>

			<h2>¥98.00</h2>

			<!-- <span class="newsalenum">成交<i>100</i>笔</span> -->

		</li>

		

	</ul>

</div>

<!-- end进来生鲜 -->





<!-- 玩具专区 -->

<div class="newwid710 newcommond mt40">

	<h1 class="fl">玩具专区</h1>

	<h2 class="fl">伴随成长 欢乐童年</h2>

	<h3 class="fr">

		<img src="/newhome/images/gengduo@3x.png" alt="" />

	</h3>

	<h2 class="fr withjump" data="https://www.517ybang.com/biz/detail?id=240">更多</h2>

</div>

<div class="newcommondtitle clearfix">

	<div class="newcommondtitle-pic1 fl">

		<img src="/newhome/toy/toybanner.jpg">

	</div>

	<div class="newcommondtitle-pic2 fl withjump" data="https://www.517ybang.com/biz/detail?id=240">

		<img src="https://cdn-remote.517ybang.com/toybanner2.jpg">

	</div>

</div>

<div class="newcommondclass newwid710 clearfix">

	<ul class="clearfix">

		<li class="mb10 withjump" data="https://www.517ybang.com/item/detail?id=7101">

			<img src="/newhome/toy/7101.jpg" data-src="/newhome/toy/7101.jpg">

			<h1>回车键减压神器</h1>

			<h2></h2>

			<h3>¥&nbsp;39.00</h3>

		</li>

		<li class="mb10 withjump" data="https://www.517ybang.com/item/detail?id=7103">

			<img src="/newhome/toy/7103.jpg" data-src="/newhome/toy/7103.jpg">

			<h1>高达拼装模型</h1>

			<h2></h2>

			<h3>¥&nbsp;228.00</h3>

		</li>

		<li class="mb10 withjump" data="https://www.517ybang.com/item/detail?id=6638">

			<img src="/newhome/toy/6638.jpg" data-src="/newhome/toy/6638.jpg">

			<h1>小黄人颗粒积木</h1>

			<h2></h2>

			<h3>¥&nbsp;29.00</h3>

		</li>

		<li class="mb10 withjump" data="https://www.517ybang.com/item/detail?id=6681">

			<img src="/newhome/toy/6681.jpg" data-src="/newhome/toy/6681.jpg">

			<h1>漫威钢铁侠手办</h1>

			<h2></h2>

			<h3>¥&nbsp;59.00</h3>

		</li>

		<li class="mb10 withjump" data="https://www.517ybang.com/item/detail?id=6727">

			<img src="/newhome/toy/6727.jpg" data-src="/newhome/toy/6727.jpg">

			<h1>佩奇电动爬楼梯</h1>

			<h2></h2>

			<h3>¥&nbsp;39.00</h3>

		</li>

		<li class="mb10 withjump" data="https://www.517ybang.com/item/detail?id=5741">

			<img src="/newhome/toy/5741.jpg" data-src="/newhome/toy/5741.jpg">

			<h1>编程教育机器人</h1>

			<h2></h2>

			<h3>¥&nbsp;498.00</h3>

		</li>

	</ul>

</div>

<br>

<!-- end玩具专区 -->



<div class="tabWrap fiex">

        <div class="tabbar auto">

            <div class="column">

                <a href="https://www.517ybang.com/" target="_self">

                <div class="itemmenulist">

                    <i class="homeIcon"></i>

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

                    <i class="homeGouwuche"></i>

                    <span class="text">购物车</span>

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

<script src="/newhome/js/swiper4.0.0.js"></script>

<script src="/newhome/js/bscroll.min.js"></script>

<script src="/newhome/js/city.js"></script>

<script src="/newhome/js/lazy-load-img.js"></script>

<script src="/newhome/js/newhome.js"></script>

<script>



   var mySwiper3d = new Swiper('.swiper-container-3d',{

        effect: 'coverflow',

        slidesPerView: 1.4,

        centeredSlides: true,

        initialSlide: 1,

        loop:true,

        coverflowEffect: {

            rotate: 8,

            stretch: 160,

            depth: 380,

            modifier: 1,

            slideShadows: false

        },// 如果需要前进后退按钮

      on: {

    slideChangeTransitionStart: function(){

      for (var i = 0; i < $('.swiper-container-3d .swiper-slide').length; i++) {

        $('.swiper-container-3d .swiper-slide').eq(i).find('.newtip').hide();

        if ($('.swiper-container-3d .swiper-slide').eq(i).hasClass('swiper-slide-active')) {

          $('.swiper-container-3d .swiper-slide').eq(i).find('.newtip').fadeIn();

        }

      }

        //$('.swiper-container-3d').find('.newtip').eq(this.activeIndex).show().siblings('.newtip').hide();

     // alert(this.activeIndex);//切换结束时，告诉我现在是第几个slide

    }

  },

         

    });

   // 首页进来说轮播

   function AutoScroll(obj) {

      $(obj).find("ul:first").animate({

          marginTop: "-.673rem"

      },

      800,

      function() {

         $(this).find("li:lt(2)").appendTo(this);

         $(obj).find("ul:first").css('marginTop',0);

      });

}

$(document).ready(function() {

	$(".withjump").on('click', function(){

		window.location = $(this).attr("data");

	})

    setInterval('AutoScroll(".newtalktext")', 3000);

    	  var newswiper = new Swiper('.newswiper-container', {

			   pagination: {

			    el: '.newswiper-pagination',

			     renderBullet:function (index, className) {

                return '<a class="'+className+'"></a>'

            }

			  }

		      

		      

});

 

});



  //图片懒加载

      var lazyLoadImg = new LazyLoadImg({

        el: document.querySelector('#newImgLazy'),

        mode: 'default', //默认模式，将显示原图，diy模式，将自定义剪切，默认剪切居中部分

        time: 300, // 设置一个检测时间间隔

        complete: true, //页面内所有数据图片加载完成后，是否自己销毁程序，true默认销毁，false不销毁

        position: { // 只要其中一个位置符合条件，都会触发加载机制

          top: 0, // 元素距离顶部

          right: 0, // 元素距离右边

          bottom: 0, // 元素距离下面

          left: 0 // 元素距离左边

        },

        

        before: function () { // 图片加载之前执行方法

        },

        success: function (el) { // 图片加载成功执行方法

          el.classList.add('success')

        },

        error: function (el) { // 图片加载失败执行方法

          el.src = './images/default.png'

        }

      })

      // lazyLoadImg.start() // 重新开启懒加载程序

      // lazyLoadImg.destroy() // 销毁图片懒加载程序

      

</script>

</body>

</html>

