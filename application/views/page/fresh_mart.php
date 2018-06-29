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
            <div class="move">
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
	<!--水果分类div区域-->
	<div class="fresh_mart_content">
				<!--分类总-->
<div class="freshsupertitle border20 auto bgfff">
	<div class="fruiteSec">
		 <div class="swiper-container15 marketclass">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
      <a class="supermartcur">
    	温带水果
    </a>
    </div>
    <div class="swiper-slide">
    <a >
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
       <a>
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
</div>
<div class="fresh_like wid670 auto bgfff border20 mt10 clearfix">
	<ul>
		<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo_putao@3x.png"/>
			</div>
			<h1 class="fl">西瓜 500-750g/个</h1>
			<h2 class="fl">田爽可口,个大均匀,新鲜到家!</h2>
			<h3 class="fl">￥ 1.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
		<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
		<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo_putao@3x.png"/>
			</div>
			<h1 class="fl">葡萄 500-750g/个</h1>
			<h2 class="fl">大泽山葡萄,浑圆饱满,现摘现卖</h2>
			<h3 class="fl">￥ 20.8
				<span>￥ 30.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
		<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
		<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
			<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
			<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
			<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
			<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
			<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar"  style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
	</ul>
</div>
	</div>
	<div class="fresh_mart_content">
				<!--分类总-->
<div class="freshsupertitle border20 auto bgfff">
	<div class="fruiteSec">
      <div class="swiper-container15 marketclass">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
      <a  class="supermartcur">
    	茄子
    </a>
    </div>
    <div class="swiper-slide">
    <a>
    	秋葵
    </a>
    </div>
    <div class="swiper-slide">
    <a>
    	白芸豆
    </a>
    </div>
    <div class="swiper-slide">
    <a>
    	西红柿
    </a>
    </div>
    <div class="swiper-slide">
    <a>
    	土豆
    </a>
    </div>
    <div class="swiper-slide">
       <a>
    	茄子
    </a>
    </div>
    <div class="swiper-slide">
       <a>
    	芹菜
    </a>
    </div>
    <div class="swiper-slide">
    <a>
    	橄榄菜
    </a>
    
    </div>
     <div class="swiper-scrollbar123"></div>
    </div>
    </div>
    </div>
</div>
<div class="fresh_like wid670 auto bgfff border20 mt10 clearfix">
	<ul>
		<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
		<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
		<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
		<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
		<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
			<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
			<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
			<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
			<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
			<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
	</ul>
</div>
	</div>
	<div class="fresh_mart_content">
				<!--分类总-->
<div class="freshsupertitle border20 auto bgfff">
	
	<div class="fruiteSec">
      <div class="swiper-container15 marketclass">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
      <a class="supermartcur">
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
       <a>
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
</div>
<div class="fresh_like wid670 auto bgfff border20 mt10 clearfix">
	<ul>
		<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
		<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
		<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
		<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
		<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
			<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
			<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
			<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
			<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
			<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
	</ul>
</div>
	</div>
	<div class="fresh_mart_content">
				<!--分类总-->
<div class="freshsupertitle border20 auto bgfff">
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
       <a class="supermartcur">
    	荔枝
    </a>
    </div>
    <div class="swiper-slide">
       <a>
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
</div>
<div class="fresh_like wid670 auto bgfff border20 mt10 clearfix">
	<ul>
		<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
		<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
		<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
		<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
		<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar"  style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
			<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
			<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
			<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar"  style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
			<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
			<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
	</ul>
</div>
	</div>
	<div class="fresh_mart_content">
				<!--分类总-->
<div class="freshsupertitle border20 auto bgfff">
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
</div>
<div class="fresh_like wid670 auto bgfff border20 mt10 clearfix">
	<ul>
		<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
		<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
		<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
		<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
		<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
			<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
			<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
			<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
			<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
			<li class="clearfix">
			<div class="pic fl">
				<img src="<?php echo CDN_URL ?>media/home/jianhuo@3x.png"/>
			</div>
			<h1 class="fl">芒果王 500-750g/个</h1>
			<h2 class="fl">酸甜可口,个大均匀,新鲜到家!</h2>
			<span class="gift">
				满赠
			</span>
			<h3 class="fl">￥ 15.9
				<span>￥ 18.9</span>
			</h3>
			<i class="icon-buy fr" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i>
		</li>
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
			        window.WKWVJBCallbacks = [callback];
			          try{
			            window.webkit.messageHandlers.iOS_Native_InjectJavascript.postMessage(null);
			        }catch(e){
			           console.log('ios');
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
		$(".addcar").click(function(event){
			//HostApp.alert(user_agent.is_ios);
			var r = $(this).siblings('a').eq(0).attr('data-id');
			oldcar = r;
			var count=1;
			var addCartTime;
			var oldShopList = [];
			var countflag = 0;
			//在微信端
				if(user_agent.is_wechat){
					var addcar = $(this);
					var user_id = <?php echo $this->session->user_id ?>;
					$.ajax({
			        url: 'https://api.517ybang.com/cart/index',
			        type: 'post',
			        dataType: "json",
			        cache: false,
			        timeout: 10000,
			        async: false,
			        data : {app_type:'client',user_id:user_id},
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
			    //上传接口
			    $.ajax({
			    	type:"post",
			    	url:"https://api.517ybang.com/cart/sync_up",
			    	dataType:'json',
			    	async : false,
			    	data:{app_type:'client',id:user_id,name:'cart_string',value:shopInfo},
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
					}
					$.ajax({
			        url: 'https://api.517ybang.com/cart/index',
			        type: 'post',
			        dataType: "json",
			        cache: false,
			        timeout: 10000,
			        async: false,
			        data : {app_type:'client',user_id:response},
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
			        url: 'https://api.517ybang.com/cart/index',
			        type: 'post',
			        dataType: "json",
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
	});

</script>