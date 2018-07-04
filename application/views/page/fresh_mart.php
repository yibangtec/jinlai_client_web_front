<style>
    .swiper-scrollbar{
        display: none;
    }
    .swiper-slide img{
    	height: 3.9rem;
    }
  .onlinegoodsleftcur .time span{
  	width: .32rem;
  	height: .32rem;
  	border: .02rem solid rgba(249, 132, 98, 1);	
  	line-height: .32rem;
  }
  .like li h1{
  	text-align: left;
  }
  .like li h2{
  	text-align: left;
  }
   .like li h3{
  	text-align: left;
  }
  #tip{
  	position: fixed;
  	bottom: 15%;
  	margin-top: -.2rem;
  	width: 2rem;
  	height: .8rem;
  	background: rgba(0,0,0,.5);
  	color: #fff;
  	border-radius: .15rem;
  	line-height: .8rem;
  	font-size: .24rem;
  	text-align: center;
  	left: 50%;
  	margin-left: -1rem;
  }
   /*飞入购物车样式test*/
 .m-sidebar{position: fixed;top: 0;right: 0;background: #000;z-index: 2000;width: 35px;height: 100%;font-size: 12px;color: #fff;}
.cart{color: #fff;text-align:center;line-height: 20px;padding: 200px 0 0 0px;}
.cart span{display:block;width:20px;margin:0 auto;}
.cart i{width:35px;height:35px;display:block; background:url(car.png) no-repeat;}*/
/*购物车抛物线结束的位置*/
.box p{line-height:20px; padding:4px 4px 10px 4px; text-align:left}
.u-flyer{display: block;width: 50px;height: 50px;border-radius: 50px;position: fixed;z-index: 9999;}
.button {
	display: inline-block;
	outline: none;
	cursor: pointer;
	text-align: center;
	text-decoration: none;
	font: 16px/100% 'Microsoft yahei',Arial, Helvetica, sans-serif;
	padding: .5em 2em .55em;
	text-shadow: 0 1px 1px rgba(0,0,0,.3);
	-webkit-border-radius: .5em; 
	-moz-border-radius: .5em;
	border-radius: .5em;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
	box-shadow: 0 1px 2px rgba(0,0,0,.2);
}
#end{
	    position: fixed;
    display: block;
    width: 10px;
    height: 10px;
    top: 0px;
    left: 6.7rem;
}
/* orange */
.orange {
	color: #fef4e9;
	border: solid 1px #da7c0c;
	background: #f78d1d;
	background: -webkit-gradient(linear, left top, left bottom, from(#faa51a), to(#f47a20));
	background: -moz-linear-gradient(top,  #faa51a,  #f47a20);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#faa51a', endColorstr='#f47a20');
}
</style>
<script src="<?php echo CDN_URL ?>js/educationclassification.js"></script>
  <script>
    	$(document).ready(function(){
      		var swiperIndex = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            autoplay: 2000,
            loop:true
        });
    	});
    </script>

<!--头部banner区域开始-->
<div class="bannerWrap auto">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!--<div class="swiper-slide">
                <img src="<?php echo CDN_URL ?>media/page/sxcs/sx1.png">
            </div>-->
            <div class="swiper-slide">
            	<a href="https://www.517ybang.com/item/detail?id=4587" target="_self">
                	<img src="https://cdn-remote.517ybang.com/media/home/yu1.jpg">
                </a>
            </div>
            <div class="swiper-slide">
            	<a href="https://www.517ybang.com/item/detail?id=4554" target="_self">
                	<img src="https://cdn-remote.517ybang.com/media/home/yu2.jpg">
                </a>
            </div>
          
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>

<!--培训分类区域开始-->
<div class="classification auto">
    <div class="swiper-container5">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <p class="colorarea">
            	<img src="<?php echo CDN_URL ?>media/fresh_mart/colorarea/tuijian1@3x.png" />
            </p>
            <i class="freshshowbg colorareaBlue"></i>
            <div class="move">
                <span class="titletext">进来推荐</span>
                <span class="smalltitle smallcolor_one">IN RECOMMEND</span>
            </div>
            <img src="<?php echo CDN_URL ?>media/fresh_mart/tuijian@3x.png">
            <div class="downarrow arrBlue"></div>
        </div>
        <div class="swiper-slide">
            <p class="colorarea">
            	<img src="<?php echo CDN_URL ?>media/fresh_mart/colorarea/shuiguo@3x.png" />
            </p>
            <i class="freshshowbg colorareaYellow"></i>
            <div class="move">			<span style="display: none;" data-id='153'></span>
            <span class="titletext">蔬菜</span>
            <span class="smalltitle smallcolor_two">FRUITES</span>
            </div>
            <img src="<?php echo CDN_URL ?>media/fresh_mart/shuiguo@3x.png">
            <div class="downarrow arrYellow"></div>
        </div>
        <div class="swiper-slide">
            <p class="colorarea">
            	<img src="<?php echo CDN_URL ?>media/fresh_mart/colorarea/shucai@3x.png" />
            </p>
            <i class="freshshowbg colorareaYellow"></i>
            <div class="move">
            <span class="titletext">肉类</span>
            <span class="smalltitle smallcolor_two">VEGETABLE</span>
            </div>
            <img src="<?php echo CDN_URL ?>media/fresh_mart/shucai@3x.png">
            <div class="downarrow arrYellow"></div>
        </div>
        <div class="swiper-slide">
            <p class="colorarea">
            	<img src="<?php echo CDN_URL ?>media/fresh_mart/colorarea/rou@3x.png" />
            </p>
            <i class="freshshowbg colorareaRed"></i>
            <div class="move">
                <span class="titletext">水产</span>
                <span class="smalltitle smallcolor_one">MEAT</span>
            </div>
            <img src="<?php echo CDN_URL ?>media/fresh_mart/rou@3x.png">
            <div class="downarrow arrRed"></div>
        </div>
        <div class="swiper-slide">
            <p class="colorarea">
            	<img src="<?php echo CDN_URL ?>media/fresh_mart/colorarea/shuichan@3x.png" />
            </p>
            <i class="freshshowbg colorareaBlue"></i>
            <div class="move">
            <span class="titletext">生鲜</span>
            <span class="smalltitle smallcolor_four">THE AQUATIC</span>
            </div>
            <img src="<?php echo CDN_URL ?>media/fresh_mart/shuichan@3x.png">
            <div class="downarrow arrBlue"></div>
        </div>
         <!--<div class="swiper-slide">
            <p class="colorarea">
            	<img src="<?php echo CDN_URL ?>media/fresh_mart/colorarea/shangchao@3x.png" />
            </p>
            <i class="freshshowbg colorareaPink"></i>
            <div class="move">
            <span class="titletext">商超</span>
            <span class="smalltitle smallcolor_four">BUSSIBES</span>
            </div>
            <img src="<?php echo CDN_URL ?>media/fresh_mart/shangchao@3x.png">
            <div class="downarrow arrPink"></div>
        </div>-->
     <div class="swiper-scrollbar"></div>
    </div>
</div>

</div>
<!--水果、蔬菜、肉类等分类内容承载的容器-->
<div class="fresh_mart_contentwrap">
	<div class="fresh_mart_content" style="display: block;">
		<!--推荐商品内容所在div-->
		<!--分类总-->
<!--<div class="freshsupertitle border20 auto bgfff">
    <a>进来推荐</a>
    <a>品类水果</a>
    <a>蔬菜蛋品</a>
    <a>新鲜肉类</a>
    <a>海鲜水产</a>
    <a style="padding-right: 0;">奶制品</a>
</div>-->
<div class="fruiteContent wid710 auto mt10 border20 bgfff clearfix">
    <ul class="clearfix">
    	<a href="https://www.517ybang.com/item/detail?id=4579">
        <li>
            <div class="pic">
                <img src="http://www.ybslux.com/uploadfiles/images/A1841/ba15cf6a-257d-4298-9e3d-a246bc4ee9a3.jpg">
            </div>
            <h1>蟹香鱼柳 250g/份</h1>
            <h2>￥35.00/份</h2>
        </li>
        </a>
        <a href="https://www.517ybang.com/item/detail?id=4555">
        <li>
            <div class="pic">
                <img src="http://www.ybslux.com/uploadfiles/images//d6387752-2db1-4c03-a674-b8e8c9b10137.jpg">
            </div>
            <h1>青岛农家菜花 500g/份</h1>
            <h2>￥7.80/份</h2>
        </li>
        </a>
        <a href="https://www.517ybang.com/item/detail?id=4049">
        <li>
            <div class="pic">
                <img src="http://www.ybslux.com/uploadfiles/images/A2482/07a59cc0-189e-4ed5-a0e2-cb72e92fc2f0.jpg">
            </div>
            <h1>麻辣蟹钳   270g/罐（次日送达）</h1>
            <h2>￥29.00/罐</h2>
        </li>
        </a>
        <a href="https://www.517ybang.com/item/detail?id=4176">
        <li>
            <div class="pic">
                <img src="http://www.ybslux.com/uploadfiles/images//a539eb08-1389-4cc8-9f4f-06cc5e868367.jpg">
            </div>
            <h1>君博黑牛筋头巴脑   1kg/份  （下单后次日送达，请提前下单）</h1>
            <h2>￥120.00/份</h2>
        </li>
        </a>
    </ul>

</div>
<!--立即体验区域开始-->
<div class="experience wid710 auto">
    <div class="experience_one fr">
        <div class="title">
            <div class="onlinegoodsleftcur">
							<!--倒计时区域-->
							<div class="time clearfix">
								<!--<div id="timer1" end-date="2019-1-1"></div>-->
  								<div id="timer2" class="clearfix" end-date="2018/12/16 00:5:2"></div>
							</div>
							<div class="lowerpricecur">
                <span>20%</span>
                <span>discount</span>
            </div>
			</div>
        </div>
         <a href="https://www.517ybang.com/item/detail?id=4536" data-id="4536" class="freshshopid">
        <div class="goodpic auto">
            <img src="http://www.ybslux.com/uploadfiles/images//87f1327c-a898-4763-b8cc-c09a745b30b1.jpg">
        </div>
        <h1>进来秒杀</h1>
        <h2>青岛农家鲜平菇  500g/份</h2>
        <b class="atonce price_market">10.8/份</b>
         </a>
        	<div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
         
        
    </div>
    <div class="experience_two fl">
        <div class="card_one ml0">
        	    	<a href="https://www.517ybang.com/item/detail?id=4525" data-id='4525' class="freshshopid">
            <img src="http://www.ybslux.com/uploadfiles/images//0c7ca0ab-aa19-4cd4-8559-8c70985e6216.jpg" class="fl">
            <h1 class="mt10">在线秒杀</h1>
            <h2>优选鸡翅中  500g/份</h2>
            <b class="atonce atonce_r price_market">28.80/斤</b>
            <div class="lowerprice">
                <span>89%</span>
                <span>discount</span>
            </div>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </div>
        
        <div class="card_one mt10 ml0">
        	   <a href="https://www.517ybang.com/item/detail?id=4567" data-id="4567" class="freshshopid">
            <img src="http://www.ybslux.com/uploadfiles/images/A1138/f213fb00-a285-442d-b01e-4444dbc9ce2b.jpg" class="fl">
            <h1 class="mt10">进来热销</h1>
            <h2>青岛鲳鱼 4条/份（100-125g/条）</h2>
            <b class="atonce atonce_r price_market">39.60/斤</b>
            <div class="lowerprice">
                <span>20%</span>
                <span>discount</span>
            </div>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>

        </div>
        
    </div>
</div>

<!--分类区域开始-->
<div class="wid710 auto bgfff border20 exercise clearfix">
    <img src="<?php echo CDN_URL ?>media/home/cainixihuan/wenyiguoshi@3x.png">
</div>
	
<div class="like wid710 auto clearfix mt10 supermarketgoodslist">
    <ul>
    	
        <li>
        	<a href="https://www.517ybang.com/item/detail?id=4573" class="freshshopid" target="_self" data-id="4007">
            <img src="http://www.ybslux.com/uploadfiles/images/A1544/9d4e936c-171c-42f0-9f4b-700a4224b81a.jpg">
            <h1 class="text-left">大金发野猪腌制烧烤肉 0.5kg/份</h1>
            <h2 class="text-left">（冷冻肉，3日内发货）精选原料，天然生态，肉质鲜美，绝色天香</h2>
            <h3 class="text-left">￥88.00/份</h3>
             </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
       
        
        <li>
        	<a class="freshshopid" href="https://www.517ybang.com/item/detail?id=4178" target="_self" data-id="4053">
            <img src="http://www.ybslux.com/uploadfiles/images/A2074/f926acae-285c-4d3d-8276-5261c260f428.jpg">
            <h1 class="text-left">大君博黑牛牛尾 500g/份</h1>
            <h2 class="text-left">下单后次日送达，青提前下单</h2>
            <h3 class="text-left">￥140.00/份</h3>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
        
       
        <li class="mr0">
        	 <a href="https://www.517ybang.com/item/detail?id=4180" class="freshshopid" target="_self" data-id="4180">
            <img src="http://www.ybslux.com/uploadfiles/images//b8bbacf7-24f5-41c6-ad11-098015b11ce7.jpg">
            <h1 class="text-left">君博黑牛棒骨  1kg/份（下单后次日送达，请提前下单）</h1>
            <h2 class="text-left">媲美日本黑毛和牛，国家A级绿色食品认证，煲汤佳品。</h2>
            <h3 class="text-left">￥40.00/份</h3>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
        
    </ul>
</div>
<!--分类区域开始-->
<div class="wid710 auto bgfff border20 exercise clearfix">
    <img src="<?php echo CDN_URL ?>media/home/cainixihuan/lvyexianzong@3x.png">
</div>
	
<div class="like wid710 auto clearfix mt10 supermarketgoodslist">
    <ul>
    	
        <li>
        	<a href="https://www.517ybang.com/item/detail?id=4561" data-id="4561" class="freshshopid">
            <img src="http://www.ybslux.com/uploadfiles/images/A1796/cccb9b1a-b864-407c-8ed0-f7ec949d14d4.jpg">
            <h1 class="text-left">北极贝 10只装 100g/份</h1>
            <h2 class="text-left">不当刺身太浪费，船冻保鲜，超大个头</h2>
            <h3 class="text-left">￥28.00/份</h3>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
        
       
        <li>
        	 <a href="https://www.517ybang.com/item/detail?id=4586" data-id="4586" class="freshshopid">
            <img src="http://www.ybslux.com/uploadfiles/images/A1798/32981ebb-4090-427c-96dd-fdfb3172854b.jpg">
            <h1 class="text-left">带籽甜虾   冷冻生鲜 500克/份</h1>
            <h2 class="text-left">满籽北极虾，野生进口，捕捞后立即熟冻，只需简单冲洗就可以食用</h2>
            <h3 class="text-left">￥38.00/份</h3>
             </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
       
        
        <li class="mr0">
        	<a href="https://www.517ybang.com/item/detail?id=4122" data-id="4122" class="freshshopid">
            <img src="http://www.ybslux.com/uploadfiles/images/A1860/658a2ede-0f64-4aea-8396-e91f62bb57bb.jpg">
            <h1 class="text-left">小黄花鱼 冷冻生鲜500克（3-4）条</h1>
            <h2 class="text-left">小黄花鱼身金黄自然，鱼肉白嫩细腻，纹理分明似蒜瓣，鲜味十足。</h2>
            <h3 class="text-left">￥39.00/份</h3>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
        
    </ul>
</div>
<!--分类区域开始-->
<div class="wid710 auto bgfff border20 exercise clearfix">
    <img src="<?php echo CDN_URL ?>media/home/cainixihuan/haixiantaotie@3x.png">
</div>
	
<div class="like wid710 auto clearfix mt10 supermarketgoodslist">
    <ul>
    	
        <li>
        	 <a href="https://www.517ybang.com/item/detail?id=4479" data-id="4479" class="freshshopid">
            <img src="http://www.ybslux.com/uploadfiles/images/A1086/90820a9f-df80-4c7e-a051-bd0aed4f06da.jpg">
            <h1 class="text-left">天然有机芋头 500g/份</h1>
            <h2 class="text-left">绿色栽培，无任何化学物质，软糯香甜，颗颗饱满</h2>
            <h3 class="text-left">￥10.80/份</h3>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
        
      
        <li>
        	  <a href="https://www.517ybang.com/item/detail?id=3959" data-id="3959" class="freshshopid">
            <img src="http://www.ybslux.com/uploadfiles/images//ababb783-2b93-40fd-95d0-5a5f6bf34aef.jpg">
            <h1 class="text-left">青岛鲜活多宝鱼 1000-1100g/条</h1>
            <h2 class="text-left">胶质蛋白含量较高，可养颜美容，补肾健脑</h2>
            <h3 class="text-left">￥128.00/条</h3>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
        
       
        <li class="mr0">
        	  <a href="https://www.517ybang.com/item/detail?id=4554" data-id="4554" class="freshshopid">
            <img src="http://www.ybslux.com/uploadfiles/images/A0785/2b62f542-2336-4345-87e9-1513a86b78f2.jpg">
            <h1 class="text-left">青岛鲜活海肠  500g/份</h1>
            <h2 class="text-left">具有温补肝肾、壮阳固精的作用</h2>
            <h3 class="text-left">￥35.80/份</h3>
             </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
       
    </ul>
</div>
<!--分类区域开始-->
<div class="wid710 auto bgfff border20 exercise clearfix">
    <img src="<?php echo CDN_URL ?>media/home/cainixihuan/roushizhuanjia@3x.png">
</div>
	
<div class="like wid710 auto clearfix mt10 supermarketgoodslist">
    <ul>
    	
        <li>
        	<a href="https://www.517ybang.com/item/detail?id=4135" data-id="4135" class="freshshopid">
            <img src="http://www.ybslux.com/uploadfiles/images/A1909/9210b859-b66c-4ff6-b73d-1c584f32795e.jpg">
            <h1 class="text-left">德发早餐培根切片 200g</h1>
            <h2 class="text-left">德发香肠，开袋即食，传承经典厨艺，传世德国美味！</h2>
            <h3 class="text-left">￥24.00/斤</h3>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
       
        <li>
        	 <a href="https://www.517ybang.com/item/detail?id=4569" data-id="4569" class="freshshopid">
            <img src="http://www.ybslux.com/uploadfiles/images/A1909/15bd0307-7acf-465e-b389-0b5220f823a8.jpg">
            <h1 class="text-left">德发早餐培根切片 200g</h1>
            <h2 class="text-left">德发香肠，开袋即食，传承经典厨艺，传世德国美味！</h2>
            <h3 class="text-left">￥24.00/斤</h3>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
        <a href="https://www.517ybang.com/item/detail?id=4570" data-id="4570" class="freshshopid">
        <li class="mr0">
            <img src="http://www.ybslux.com/uploadfiles/images//dc5c7aad-0fd0-4431-87cd-faa0da5fd382.jpg">
            <h1 class="text-left">德发奶酪香肠 140g</h1>
            <h2 class="text-left">德发香肠，开袋即食，传承经典厨艺，传世德国美味！</h2>
            <h3 class="text-left">￥26.00/斤</h3>
            </a>
            <div class="market_buycar ">
                <i class="icon-buy"></i>
            </div>
        </li>
        
    </ul>
</div>

<!--猜你喜欢区域开始-->
<!--<div class="wid710 auto bgfff border20 exercise clearfix">
    <img src="<?php echo CDN_URL ?>media/home/cainixihuan/cainixihuan@3x.png">
</div>-->
<!--猜你喜欢内容区域-->
<!--<div class="fresh_like wid670 auto bgfff border20 mt10 clearfix">
	<ul>
		
		<li class="clearfix">
			<a href="https://www.517ybang.com/item/detail?id=4103" data-id="4103" class="freshshopid">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/cainixihuan/liebiao/lanmei@3x.png"/>
			</div>
			<h1 class="fl">带仔甜虾</h1>
			<h2 class="fl">满籽北极虾，野生进口，捕捞后立即熟冻，只需简单冲洗就可以食用</h2>
			<h3 class="fl">￥ 38.00
				<span>
					￥ 49.00
					<i></i>
				</span>
			</h3>
			</a>
			<b></b>
			<div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
		</li>
		
		
		<li class="clearfix">
			<a href="https://www.517ybang.com/item/detail?id=4020" data-id="4020" class="freshshopid">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/cainixihuan/liebiao/mangguo@3x.png"/>
			</div>
			<h1 class="fl">海南小台农芒果</h1>
			<h2 class="fl">清肠胃，抗癌，美化肌肤，防治高血压、动脉硬化，防治便秘，杀菌</h2>
			<h3 class="fl">￥ 15.80
				<span>
					￥ 15.80
					<i></i>
				</span>
			</h3>
			</a>
			<b></b>
			<div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
		</li>
		
		
		<li class="clearfix">
			<a href="https://www.517ybang.com/item/detail?id=3971" data-id="3971" class="freshshopid">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/cainixihuan/liebiao/putao@3x.png"/>
			</div>
			<h1 class="fl">特级猪五花肉片</h1>
			<h2 class="fl">富含蛋白质、碳水化合物等营养元素，补充人体热能</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 19.90
				<span>
					￥ 21.90
					<i></i>
				</span>
			</h3>
			</a>
			<b></b>
			<div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
		</li>
		
		
		<li class="clearfix">
			<a href="https://www.517ybang.com/item/detail?id=4187" data-id="4187" class="freshshopid">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/cainixihuan/liebiao/yezi@3x.png"/>
			</div>
			<h1 class="fl">烟台水晶红富士</h1>
			<h2 class="fl">山泉水灌溉，科学培育，人工除虫，无公害、无污染。</h2>
			<h3 class="fl">￥ 21.80
				<span>
					￥ 22.80
					<i></i>
				</span>
			</h3>
			</a>
			<b></b>
			<div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
		</li>
		
		
		<li class="clearfix">
			<a href="https://www.517ybang.com/item/detail?id=3907" data-id="3907" class="freshshopid">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/cainixihuan/liebiao/pingguo@3x.png"/>
			</div>
			<h1 class="fl">优选鸡爪</h1>
			<h2 class="fl">含有丰富的胶质，可滋养皮肤，美容养颜</h2>
			<h3 class="fl">￥ 17.80
				<span>
					￥ 18.80
					<i></i>
				</span>
			</h3>
			</a>
			<div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
		</li>
		
	</ul>
</div>-->
	</div>

	<div class="fresh_mart_content">
				<!--分类总-->
<!--<div class="freshsupertitle border20 auto bgfff">

<div class="fruiteSec">

     <div class="swiper-container15 marketclass">

    <div class="swiper-wrapper">

        <div class="swiper-slide">

      <a>

    	温带水果

    </a>

    </div>

    <div class="swiper-slide">

    <a>

    	橘子

    </a>

    </div>

    <div class="swiper-slide">

    <a>

    	香蕉

    </a>

    </div>

    <div class="swiper-slide">

    <a>

    	西瓜

    </a>

    </div>

    <div class="swiper-slide">

    <a>

    	葡萄

    </a>

    </div>

    <div class="swiper-slide">

       <a>

    	荔枝

    </a>

    </div>

    <div class="swiper-slide">

       <a class="supermartcur">

    	圣女果

    </a>

    </div>

    <div class="swiper-slide">

    <a>

    	哈密瓜

    </a>

    </div>

     <div class="swiper-scrollbar123"></div>

    </div>

    </div>

    </div>

</div>-->
<div class="fresh_like wid670 auto bgfff border20 mt10 clearfix">
	<ul id="jjlist">
		
	</ul>
</div>
	</div>
</div>
	<i id="end" style="left: 85%;"></i>
	<span id="tip" style="display: none;">添加成功</span>
<script>
	function getUserInfos(){
		return "你在主动调我吗?";
	}
	$(function(){
		//	一进页面就点击推荐
			$('.move').eq(0).click();
		//	开启页面倒计时
			 $("#timer2").oaoTime();
	});
	//生鲜超市页面加入购物车抛物线特效,如果所有页面想复用,可加入index.js/common.js
	$(function() {
		
		var offset = $("#end").offset();
		var endLeft = $("#end").css("left");
		var oldcar,
			user_id,
			item_id,
			arrCur;
		 function setupWKWebViewJavascriptBridge(callback) {
			        if (window.WKWebViewJavascriptBridge) { return callback(WKWebViewJavascriptBridge); }
			        if (window.WKWVJBCallbacks) { return window.WKWVJBCallbacks.push(callback); }
			        window.WKWVJBCallbacks = [callback];			          try{
			            window.webkit.messageHandlers.iOS_Native_InjectJavascript.postMessage(null);
			        }catch(e){			           console.log('ios');
			        }
			    };
//		一进页面先进行数据的比对
		var checkIosUserStatus;
		if(user_agent.is_ios){
			setupWKWebViewJavascriptBridge(function(bridge) {
				checkIosUserStatus = setInterval(function(){
						bridge.callHandler('sendUserId', function(response) {
							if(response && localStorage.getItem('iosNoLogItem')){
								clearInterval(checkIosUserStatus);
								var iosNoLogItem = localStorage.getItem('iosNoLogItem');
								for (var i=0;i<$('.freshshopid').length;i++) {
									if(iosNoLogItem == $('.freshshopid').eq(i).attr('data-id')){
										$('.freshshopid').eq(i).siblings('.addcar').click();
										localStorage.removeItem('iosNoLogItem');
									}
								}
							}
							});
				},1000);
			});
		}
		var checkAndroidUserStatus;
		if(user_agent.is_android){
				checkAndroidUserStatus = setInterval(function(){
							if(HostApp.getUserId() && localStorage.getItem('androidNoLogItem')){
								clearInterval(checkAndroidUserStatus);
								localStorage.getItem('androidNoLogItem');
								for (var i=0;i<$('.freshshopid').length;i++) {
									if(localStorage.getItem('androidNoLogItem') == $('.freshshopid').eq(i).attr('data-id')){
										$('.freshshopid').eq(i).siblings('.addcar').click();
										localStorage.removeItem('androidNoLogItem');
									}
								}
							}
				},1000);
		}
		$(".addcar").click(function(event){			//HostApp.alert(user_agent.is_ios);
			var r = $(this).siblings('a').eq(0).attr('data-id');
			oldcar = r;
			var count=1;
			var addCartTime;
			var oldShopList = [];
			var countflag = 0;
			//在微信端
				if(user_agent.is_wechat){					var addcar = $(this);					var params = common_params;						params.name = 'cart_string';						params.value = shopInfo;					//console.log(params);						params.id = params.user_id;					if(params.user_id == null){						window.location.href = base_url + 'login';						return;					}
					//var user_id = <?php echo $this->session->user_id ?>;
					$.ajax({
			        url: api_url + 'cart/index',
			        type: 'post',
			        dataType: "json",
			        cache: false,
			        timeout: 10000,
			        async: false,
			        data :params,
			        error: function(date){
					alert(date);
			        },
			        success : function(data){
			        	item_id = data.content.order_items;
			        }
		     });
		      for (var i = 0;i < item_id.length;i++) {
				for (var j = 0;j < item_id[i].order_items.length;j++) {
					//var oldShopList = '1|' + item_id[i].order_items[j].item_id + '|0|' + item_id[i].order_items[j].count;
					if(oldcar == item_id[i].order_items[j].item_id){
						count = item_id[i].order_items[j].count;
						if(countflag == 0){
							count++;
							countflag = 1;
						}
					}
					else{
						oldShopList.push('1|' + item_id[i].order_items[j].item_id + '|0|' + item_id[i].order_items[j].count);
					}
				}				
	        	}
	        arrCur = oldShopList.join(",");
			var img = addcar.parent().find('img').attr('src');
			var flyer = $('<img class="u-flyer" src="'+img+'">');
			flyer.fly({
				start: {
					left: addcar.offset().left - $(document).scrollLeft(),
					top: addcar.offset().top - $(document).scrollTop()
				},
				end: {
					left:parseInt(endLeft),
					top: 0,
					width: 0,
					height: 0
				},
				onEnd: function(){
					$("#msg").show().animate({width: '250px'}, 200).fadeOut(1000);
					addcar.css("cursor","default").removeClass('orange');
					this.destory();
				}
			});
			    var shopInfo = '1|' + oldcar + '|0|' + count + ',' + arrCur;			
			    //上传接口				var params = common_params;					params.name = 'cart_string';					params.value = shopInfo;					params.id = params.user_id;
			    $.ajax({
			    	url:api_url + "/cart/sync_up",			    	dataType:'json',			    	data:params,
			    	success:function(res){						
			    		console.log(res);
			    		clearTimeout(addCartTime);
					    addCartTime = setTimeout(function(){
							$('#tip').show().delay(1000).fadeOut();
					    },1000);
			    	}
			    });
			}
			//在微信端
			if(user_agent.is_ios){
				var addcar = $(this);
			setupWKWebViewJavascriptBridge(function(bridge) {
				bridge.callHandler('sendUserId', function(response) {
					if(!response){
						bridge.callHandler('iosNotLogin','notlogin');
						localStorage.setItem('iosNoLogItem',oldcar);
						return;
					}										var params = common_params;					params.user_id = response;
					$.ajax({
			        url: api_url + 'cart/index',
			        cache: false,
			        timeout: 10000,
			        async: false,
			        data : params,
			        error: function(date){
					alert(date);
			        },
			        success : function(data){
			        	item_id = data.content.order_items;
			        }
		     });
		     for (var i = 0;i < item_id.length;i++) {
				for (var j = 0;j < item_id[i].order_items.length;j++) {
					//var oldShopList = '1|' + item_id[i].order_items[j].item_id + '|0|' + item_id[i].order_items[j].count;
					if(oldcar == item_id[i].order_items[j].item_id){
						count = item_id[i].order_items[j].count;
						if(countflag == 0){
							count++;
							countflag = 1;
						}
					}
					else{
						oldShopList.push('1|' + item_id[i].order_items[j].item_id + '|0|' + item_id[i].order_items[j].count);
					}
				}				
	        	}
	        arrCur = oldShopList.join(",");
			var img = addcar.parent().find('img').attr('src');
			var flyer = $('<img class="u-flyer" src="'+img+'">');
			flyer.fly({
				start: {
					left: addcar.offset().left - $(document).scrollLeft(),
					top: addcar.offset().top - $(document).scrollTop()
				},
				end: {
					left:parseInt(endLeft),
					top: 0,
					width: 0,
					height: 0
				},
				onEnd: function(){
					$("#msg").show().animate({width: '250px'}, 200).fadeOut(1000);
					addcar.css("cursor","default").removeClass('orange');
					this.destory();
				}
			});
				clearTimeout(addCartTime);
			    addCartTime = setTimeout(function(){
			    	 setupWKWebViewJavascriptBridge(function(bridge) {
			    	 var shopInfo = '1|' + oldcar + '|0|' + count + ',';
					bridge.callHandler('addShoppingCart', {shoppingCarString:shopInfo + arrCur}, function(response) {
						$('#tip').show().delay(1000).fadeOut();
					});
					bridge.registerHandler('getUserInfos',function(res){
						alert("swift调用js方法后成功回调!");
					});
				});
			    },1000);
			});
				});
			}
			//安卓开始
			if(user_agent.is_android){
				if(!HostApp.getUserId()){
					localStorage.setItem('androidNoLogItem',oldcar);
					HostApp.gotoLogin();
					return;
				}
				  $.ajax({
			        url: api_url + 'cart/index',
			        cache: false,
			        timeout: 10000,
			        async: false,
			        data : {app_type:'client',user_id:HostApp.getUserId()},
			        error: function(date){
					alert(date);
			        },
			        success : function(data){
			        	item_id = data.content.order_items;
			        }
		     });
		     	for (var i = 0;i < item_id.length;i++) {
				for (var j = 0;j < item_id[i].order_items.length;j++) {
					//var oldShopList = '1|' + item_id[i].order_items[j].item_id + '|0|' + item_id[i].order_items[j].count;
					if(oldcar == item_id[i].order_items[j].item_id){
						count = item_id[i].order_items[j].count;
						if(countflag == 0){
							count++;
							countflag = 1;
						}
					}
					else{
						oldShopList.push('1|' + item_id[i].order_items[j].item_id + '|0|' + item_id[i].order_items[j].count);
					}
				}				
	        	}
			var addcar = $(this);
			var img = addcar.parent().find('img').attr('src');
			var flyer = $('<img class="u-flyer" src="'+img+'">');
			flyer.fly({
				start: {
					left: $(this).offset().left - $(document).scrollLeft(),
					top: $(this).offset().top - $(document).scrollTop()
				},
				end: {
					left:parseInt(endLeft),
					top: 0,
					width: 0,
					height: 0
				},
				onEnd: function(){
					$("#msg").show().animate({width: '250px'}, 200).fadeOut(1000);
					addcar.css("cursor","default").removeClass('orange');
					this.destory();
				}
			});
						   //安卓端添加购物车
				HostApp.addToCart( '1', oldcar, '0', '1', '50');
				setTimeout(function(){
					HostApp.alert('添加购物车 成功');
				},1500);
			}
		});
	}); $(".swiper-container5 .swiper-wrapper .move").on('click',function(){ 	if($(this).parents().index() >= 1){		if($(this).parents().index() == 1){			var con = [        {            "item_id": "3995",            "url_image_main": "http://www.ybslux.com/uploadfiles/images//24fe8f46-3b35-451e-87c5-86fb7fa1376a.jpg",            "name": "天然有机尖椒 500g/份",            "tag_price": "10.12",            "price": "8.80",            "slogan" : '有机尖椒,减肥降压',            "skus": []        },        {            "item_id": "3996",            "url_image_main": "http://www.ybslux.com/uploadfiles/images/A1076/2818a962-9629-484c-b0ea-408352c7c00b.jpg",            "name": "天然有机茄子 500g/份",            "tag_price": "11.80",            "price": "13.80",            "slogan" : '绿色栽培，无任何化学物质，果实圆润饱满，口感清甜',            "skus": []        },         {            "item_id": "4035",            "url_image_main": "http://www.ybslux.com/uploadfiles/images//2e2d8b0b-ed29-4c3b-a7f2-9cbe4a0b711a.jpg",            "name": "天然有机青椒 450-500g/份",            "tag_price": "10.10",            "price": "8.80",            "slogan" : '果肉厚，无辣味，营养丰富，爽脆可口',            "skus": []        },        {            "item_id": "4321",            "url_image_main": "http://www.ybslux.com/uploadfiles/images/A2746/77517be0-0700-4955-be15-dc90a5ef37e6.jpg",            "name": "有机杏鲍菇 500g",            "tag_price": "19.80",            "price": "15.80",            "slogan" : '天然有机，具有杏仁香味。肉质肥厚，口感鲜嫩，营养丰富。',            "skus": []        },        {            "item_id": "3994",            "url_image_main": "http://www.ybslux.com/uploadfiles/images/A1073/64a8ad80-909e-4ca2-9059-70fcb324a78a.jpg",            "name": "天然有机西红柿 500g/份",            "tag_price": "9.80",            "price": "7.80",            "slogan" : '绿色栽培，无任何化学物质，果实圆润饱满，口感清甜',            "skus": []        },        {            "item_id": "4002",            "url_image_main": "http://www.ybslux.com/uploadfiles/images/A1086/90820a9f-df80-4c7e-a051-bd0aed4f06da.jpg",            "name": "天然有机芋头 500g/份",            "tag_price": "12.50",            "price": "10.80",            "slogan" : '绿色栽培，无任何化学物质，软糯香甜，颗颗饱满',            "skus": []        },        {            "item_id": "4037",            "url_image_main": "http://www.ybslux.com/uploadfiles/images/A1236/60ea1ec5-8e3c-41a0-b93f-023f6be891b4.jpg",            "name": "寿光彩椒 3个/份（红、黄、青）",            "tag_price": "17.50",            "price": "16.00",            "slogan" : '色泽诱人，汁多甜脆，可促进食欲，促进新陈代谢',            "skus": []        },        {            "item_id": "4027",            "url_image_main": "http://www.ybslux.com/uploadfiles/images/A1209/87b18cfd-ba2c-40be-8128-c107788c2a93.jpg",            "name": "城阳木耳菜 500g/份",            "tag_price": "7.20",            "price": "6.88",            "slogan" : '叶片肥厚，清鲜爽口，脆嫩清新，营养丰富',            "skus": []        },           {            "item_id": "4010",            "url_image_main": "http://www.ybslux.com/uploadfiles/images//527d206d-5f16-445f-ac44-be93c34592f0.jpg",            "name": "夏庄杠六九西红柿  500g/份",            "tag_price": "8.80",            "price": "7.80",            "slogan" : '生吃首选！营养丰富，小时候的味道！',            "skus": []        },        {            "item_id": "4042",            "url_image_main": "http://www.ybslux.com/uploadfiles/images/A1242/1ad802f1-5e9d-485b-9868-f2b2582dddfb.jpg",            "name": "青岛农家菠菜 500g/份",            "tag_price": "10.80",            "price": "9.80",            "slogan" : '促进新陈代谢，延缓衰老，补血',            "skus": []        },         {            "item_id": "4001",            "url_image_main": "http://www.ybslux.com/uploadfiles/images/A1084/4912219d-94be-4c77-b8c5-ce6591bbe417.jpg",            "name": "海阳生吃黄瓜 500g/份",            "tag_price": "4.80",            "price": "3.80",            "slogan" : '绿色栽培，无任何化学物质，清甜爽口，脆嫩汁盈',            "skus": []        }        ];				$('#jjlist').html('');		for (var i = 0;i < con.length;i++) {						var oLi = '<li class="clearfix"><div class="pic fl"><a href="https://www.517ybang.com/item/detail?id='+con[i].item_id+'"><img src="'+con[i].url_image_main	+'"></div><h1 class="fl">'+con[i].name+'</h1><h2 class="fl">'+con[i].slogan+'</h2><h3 class="fl">￥ '+con[i].price+'<span>￥ '+con[i].tag_price+'</span></h3></a><i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i></li>';					$('#jjlist').append(oLi);											}		}				//2		if($(this).parents().index() == 2){			var con = [        {            "item_id": "4179",            "url_image_main": "http://www.ybslux.com/uploadfiles/images//87fed88d-b178-4ee1-ba14-6da59d5934b9.jpg",            "name": "君博黑牛脖骨  1kg/份 （下单后次日送达，请提前下单）",            "tag_price": "65.00",            "price": "60.00",            "slogan" : '牛脖肉脂肪含量非常低，蛋白质、氨基酸含量高；牛脖骨含有丰富的',            "skus": []        },        {            "item_id": "4181",            "url_image_main": "http://www.ybslux.com/uploadfiles/images/A2079/cf8f6c5e-d7ce-46d6-a64a-8f69e1115521.jpg",            "name": "君博黑牛牛展   1kg/份 （下单后次日送达，请提前下单）",            "tag_price": "165.00",            "price": "160.00",            "slogan" : '黑牛牛展，即黑牛腱肉，筋肉丰富，口感筋道，适宜家常炖煮，酱卤',            "skus": []        },         {            "item_id": "4175",            "url_image_main": "http://www.ybslux.com/uploadfiles/images//bea1cbb1-329a-496f-8abd-0debc774ee5f.jpg",            "name": "君博黑牛原切精肉黑牛扒   约500g/份   （下单后次日送达，请提前下单）",            "tag_price": "135.00",            "price": "130.00",            "slogan" : '口感娇嫩，肉质松软，嫩度接近“菲力”，是精肉中的顶级牛排。',            "skus": []        },        {            "item_id": "4171",            "url_image_main": "http://www.ybslux.com/uploadfiles/images//2c64fc86-efed-41ae-a515-40ac9c186f96.jpg",            "name": "君博黑牛原切A1西冷牛排  约500g/份（下单后次日送达，请提前下单）",            "tag_price": "200.00",            "price": "195.00",            "slogan" : '色泽鲜亮，肉质紧实，雪花充分合理，脂肪渗透均匀，香味浓厚，鲜',            "skus": []        },        {            "item_id": "4173",            "url_image_main": "http://www.ybslux.com/uploadfiles/images//c8ea5778-e74b-426e-ba94-5272ec81751a.jpg",            "name": "君博黑牛原切A1眼肉牛排 约500g/份（下单后次日送达，请提前下单）",            "tag_price": "235.00",            "price": "230.00",            "slogan" : '眼肉牛排：脂肪渗透丰满，雪花分布均匀，肉质鲜嫩多汁，口感细腻',            "skus": []        },        {            "item_id": "3870",            "url_image_main": "http://www.ybslux.com/uploadfiles/images//106efa6a-c1fa-47b8-b391-43f9e924e5c0.jpg",            "name": "特级猪外脊切片  500g/份",            "tag_price": "23.50",            "price": "21.80",            "slogan" : '富含蛋白质、钙、铁等营养价值，滋补气血',            "skus": []        },        {            "item_id": "4051",            "url_image_main": "http://www.ybslux.com/uploadfiles/images/A1295/dbcf83a1-b9ef-45ed-9a3d-cc6308ef6f52.jpg",            "name": "特级五花肉块  500g/份",            "tag_price": "17.50",            "price": "25.00",            "slogan" : '富含蛋白质、碳水化合物等营养元素，补充人体热能',            "skus": []        },        {            "item_id": "3971",            "url_image_main": "http://www.ybslux.com/uploadfiles/images//778422b0-0ae4-49d5-b506-e3d5ca149e40.jpg",            "name": "特级猪五花肉片  500g/份",            "tag_price": "21.20",            "price": "19.90",            "slogan" : '富含蛋白质、碳水化合物等营养元素，补充人体热能',            "skus": []        },           {            "item_id": "4130",            "url_image_main": "http://www.ybslux.com/uploadfiles/images//db2d0c02-25a1-4e8b-a8cc-6e58d151bc78.jpg",            "name": "特级猪小里脊肉  500g/份",            "tag_price": "28.80",            "price": "25.80",            "slogan" : '富含蛋白质、碳水化合物，可补肾养血',            "skus": []        },        {            "item_id": "4129",            "url_image_main": "http://www.ybslux.com/uploadfiles/images//c0d44f82-46c3-49b5-aa2f-832a9451e7c6.jpg",            "name": "优质猪前排  500g/份",            "tag_price": "26.50",            "price": "25.50",            "slogan" : '营养丰富，滋补气血，益精润燥',            "skus": []        },         {            "item_id": "3935",            "url_image_main": "http://www.ybslux.com/uploadfiles/images//63faa896-cda9-4082-9c08-da34794ac482.jpg",            "name": "特级猪腰子  400-450g/个",            "tag_price": "30.00",            "price": "26.80",            "slogan" : '富含蛋白质、淡水化物，可健肾补腰，和肾理气',            "skus": []        }        ];				$('#jjlist').html('');		for (var i = 0;i < con.length;i++) {						var oLi = '<li class="clearfix"><div class="pic fl"><a href="https://www.517ybang.com/item/detail?id='+con[i].item_id+'"><img src="'+con[i].url_image_main	+'"></div><h1 class="fl">'+con[i].name+'</h1><h2 class="fl">'+con[i].slogan+'</h2><h3 class="fl">￥ '+con[i].price+'<span>￥ '+con[i].tag_price+'</span></h3></a><i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i></li>';					$('#jjlist').append(oLi);											}		}				//3		if($(this).parents().index() == 3){			var con = [        {            "item_id": "4056",            "url_image_main": "http://www.ybslux.com/uploadfiles/images/A1435/0bf9bc22-194c-426e-bf99-0bb45ae519d6.jpg",            "name": "青岛鲜活鲍鱼  4只/份 （40-50g每只）",            "tag_price": "50.00",            "price": "42.80",            "slogan" : '富含多种营养元素，可健脑补身，提高免疫力',            "skus": []        },        {            "item_id": "4018",            "url_image_main": "http://www.ybslux.com/uploadfiles/images/A1144/979c6fea-19b3-4814-8df4-9b352d71cb8f.jpg",            "name": "青岛鲜活辣螺 500g/份",            "tag_price": "40.00",            "price": "35.80",            "slogan" : '肉质含丰富营养元素，肉味鲜美，可清热明目',            "skus": []        },         {            "item_id": "3974",            "url_image_main": "http://www.ybslux.com/uploadfiles/images//d3ff3019-93df-4487-bc94-80742224aa51.jpg",            "name": "鲜活牡蛎(海蛎子)  500g/份",            "tag_price": "13.00",            "price": "12.00",            "slogan" : '富含蛋白锌，为补锌佳品；味道鲜美，平肝养阴',            "skus": []        },        {            "item_id": "4008",            "url_image_main": "http://www.ybslux.com/uploadfiles/images//5aaa2b51-cdbe-4841-92c8-1ebf4c9e575e.jpg",            "name": "青岛鲜活缢蛏 500g/份",            "tag_price": "30.00",            "price": "25.80",            "slogan" : '近柱状，口感Q弹，肉质鲜嫩，营养丰富。',            "skus": []        },        {            "item_id": "4017",            "url_image_main": "http://www.ybslux.com/uploadfiles/images/A1143/88289184-589a-4407-b9d9-16048230b797.jpg",            "name": "青岛鲜活圆螺 500g/份",            "tag_price": "30.80",            "price": "29.80",            "slogan" : '含有丰富的蛋白质等营养成分，肉味鲜美，可清热明目',            "skus": []        },        {            "item_id": "4066",            "url_image_main": "http://www.ybslux.com/uploadfiles/images/A1499/5790a2e4-2891-4453-80f2-97eb6be1540c.jpg",            "name": "禧美海产加拿大野生北极甜虾带籽熟冻80-100头/kg 1.5kg/份",            "tag_price": "160.00",            "price": "158.00",            "slogan" : '深海捕捞，进口品质，头膏丰盈，鲜香味美。（3天内送达，请提前',            "skus": []        },        {            "item_id": "4138",            "url_image_main": "http://www.ybslux.com/uploadfiles/images/A1939/d02000bf-adce-43bc-9c4c-ecb50c032bfc.jpg",            "name": "北极甜虾 30尾/份",            "tag_price": "31.20",            "price": "26.80",            "slogan" : '日料刺身，去壳甜虾，特有的咸鲜口味，入口回味无穷',            "skus": []        },        {            "item_id": "3848",            "url_image_main": "http://www.ybslux.com/uploadfiles/images//c38e1d07-919f-4092-ab9f-f59b353ed803.jpg",            "name": "波士顿鲜活大龙虾   1.25kg-1.5kg/只",            "tag_price": "622.00",            "price": "599.00",            "slogan" : '富含多种维生素，可益气滋阳，开胃化痰',            "skus": []        }                       ];				$('#jjlist').html('');		for (var i = 0;i < con.length;i++) {						var oLi = '<li class="clearfix"><div class="pic fl"><a href="https://www.517ybang.com/item/detail?id='+con[i].item_id+'"><img src="'+con[i].url_image_main	+'"></div><h1 class="fl">'+con[i].name+'</h1><h2 class="fl">'+con[i].slogan+'</h2><h3 class="fl">￥ '+con[i].price+'<span>￥ '+con[i].tag_price+'</span></h3></a><i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i></li>';					$('#jjlist').append(oLi);											}		}					//4		if($(this).parents().index() == 4){			var con = [       {            "item_id": "4130",            "url_image_main": "http://www.ybslux.com/uploadfiles/images//db2d0c02-25a1-4e8b-a8cc-6e58d151bc78.jpg",            "name": "特级猪小里脊肉  500g/份",            "tag_price": "28.80",            "price": "25.80",            "slogan" : '富含蛋白质、碳水化合物，可补肾养血',            "skus": []        },        {            "item_id": "4129",            "url_image_main": "http://www.ybslux.com/uploadfiles/images//c0d44f82-46c3-49b5-aa2f-832a9451e7c6.jpg",            "name": "优质猪前排  500g/份",            "tag_price": "26.50",            "price": "25.50",            "slogan" : '营养丰富，滋补气血，益精润燥',            "skus": []        },         {            "item_id": "3935",            "url_image_main": "http://www.ybslux.com/uploadfiles/images//63faa896-cda9-4082-9c08-da34794ac482.jpg",            "name": "特级猪腰子  400-450g/个",            "tag_price": "30.00",            "price": "26.80",            "slogan" : '富含蛋白质、淡水化物，可健肾补腰，和肾理气',            "skus": []        }                       ];				$('#jjlist').html('');		for (var i = 0;i < con.length;i++) {						var oLi = '<li class="clearfix"><div class="pic fl"><a href="https://www.517ybang.com/item/detail?id='+con[i].item_id+'"><img src="'+con[i].url_image_main	+'"></div><h1 class="fl">'+con[i].name+'</h1><h2 class="fl">'+con[i].slogan+'</h2><h3 class="fl">￥ '+con[i].price+'<span>￥ '+con[i].tag_price+'</span></h3></a><i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i></li>';					$('#jjlist').append(oLi);											}		}	//添加购物车		var offset = $("#end").offset();		var endLeft = $("#end").css("left");		$(".addcar").click(function(event){			//HostApp.alert(user_agent.is_ios);			var r = $(this).siblings('.pic').find('a').attr('href');			var b = r.substring(r.lastIndexOf('=')+1, r.length);			oldcar = b;			var count=1;			var addCartTime;			var oldShopList = [];			var countflag = 0;			//在微信端				if(user_agent.is_wechat){					var addcar = $(this);					//var user_id = <?php echo $this->session->user_id ?>;										var params = common_params;										if(params.user_id == null){						window.location.href = base_url + 'login';						return;					}					$.ajax({			        url: api_url + 'cart/index',			        cache: false,			        timeout: 10000,			        async: false,			        data : params,			        error: function(date){					alert(date);			        },			        success : function(data){			        	item_id = data.content.order_items;			        }		     });		      for (var i = 0;i < item_id.length;i++) {				for (var j = 0;j < item_id[i].order_items.length;j++) {					//var oldShopList = '1|' + item_id[i].order_items[j].item_id + '|0|' + item_id[i].order_items[j].count;					if(oldcar == item_id[i].order_items[j].item_id){						count = item_id[i].order_items[j].count;						if(countflag == 0){							count++;							countflag = 1;						}					}					else{						oldShopList.push('1|' + item_id[i].order_items[j].item_id + '|0|' + item_id[i].order_items[j].count);					}				}					        	}	        arrCur = oldShopList.join(",");			var img = addcar.parent().find('img').attr('src');			var flyer = $('<img class="u-flyer" src="'+img+'">');			flyer.fly({				start: {					left: addcar.offset().left - $(document).scrollLeft(),					top: addcar.offset().top - $(document).scrollTop()				},				end: {					left:parseInt(endLeft),					top: 0,					width: 0,					height: 0				},				onEnd: function(){					$("#msg").show().animate({width: '250px'}, 200).fadeOut(1000);					addcar.css("cursor","default").removeClass('orange');					this.destory();				}			});			    var shopInfo = '1|' + oldcar + '|0|' + count + ',' + arrCur;			    //上传接口				var params = common_params;				params.name = 'cart_string';				params.value = shopInfo;				params.id = params.user_id;			    $.ajax({			    	type:"post",			    	url:api_url + "cart/sync_up",			    	dataType:'json',			    	async : false,			    	data:params,			    	success:function(res){			    		console.log(res);			    		clearTimeout(addCartTime);					    addCartTime = setTimeout(function(){							$('#tip').show().delay(1000).fadeOut();					    },1000);			    	}			    });			}		});		} })

</script>