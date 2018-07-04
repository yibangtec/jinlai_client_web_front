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
            	<a href="https://www.517ybang.com/item/detail?id=5223" target="_self">
                	<img src="https://medias.517ybang.com/item/url_image_main/201806/0627/203051.jpg">
                </a>
            </div>
            <div class="swiper-slide">
            	<a href="https://www.517ybang.com/item/detail?id=4662" target="_self">
                	<img src="https://medias.517ybang.com/item/url_image_main/201806/0626/205315.jpg">
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
                <span class="titletext">厨房电器</span>
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
            <div class="move">			<span style="display: none;" data-id="68"></span>
            <span class="titletext">影音电器</span>
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
            <div class="move">			<span style="display: none;" data-id="70"></span>
            <span class="titletext">生活电器</span>
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
            <div class="move">				<span style="display: none;" data-id="71"></span>
                <span class="titletext">大家电</span>
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
            <div class="move">			<span style="display: none;" data-id="72"></span>
            <span class="titletext">个人护理</span>
            <span class="smalltitle smallcolor_four">THE AQUATIC</span>
            </div>
            <img src="<?php echo CDN_URL ?>media/fresh_mart/shuichan@3x.png">
            <div class="downarrow arrBlue"></div>
        </div>
 		<div class="swiper-slide">
            <p class="colorarea">
            	<img src="<?php echo CDN_URL ?>media/fresh_mart/colorarea/shuichan@3x.png" />
            </p>
            <i class="freshshowbg colorareaBlue"></i>
            <div class="move">			<span style="display: none;" data-id="69"></span>
            <span class="titletext">智能设备</span>
            <span class="smalltitle smallcolor_four">THE AQUATIC</span>
            </div>
            <img src="<?php echo CDN_URL ?>media/fresh_mart/shuichan@3x.png">
            <div class="downarrow arrBlue"></div>
        </div>
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
    	<a href="https://www.517ybang.com/item/detail?id=4730">
        <li>
            <div class="pic">
                <img src="https://medias.517ybang.com/item/url_image_main/201806/0627/092715.jpg">
            </div>
            <h1>美的(Midea) 吸尘器 SC861A</h1>
            <h2>￥129.00/台</h2>
        </li>
        </a>
        <a href="https://www.517ybang.com/item/detail?id=4641">
        <li>
            <div class="pic">
                <img src="https://medias.517ybang.com/item/url_image_main/201806/0626/203734.jpg">
            </div>
            <h1>奔腾（POVOS）PW930</h1>
            <h2>￥45.00/台</h2>
        </li>
        </a>
        <a href="https://www.517ybang.com/item/detail?id=4894">
        <li>
            <div class="pic">
                <img src="https://medias.517ybang.com/item/url_image_main/201806/0627/140049.jpg">
            </div>
            <h1>美的YGJ15B3</h1>
            <h2>￥198.00/台</h2>
        </li>
        </a>
        <a href="https://www.517ybang.com/item/detail?id=4716">
        <li>
            <div class="pic">
                <img src="https://medias.517ybang.com/item/url_image_main/201806/0626/221606.jpg">
            </div>
            <h1>艾美特(Airmate) 电风扇 FSW50R-5</h1>
            <h2>￥199.00/台</h2>
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
         <a href="https://www.517ybang.com/item/detail?id=4707" data-id="4707" class="freshshopid">
        <div class="goodpic auto">
            <img src="https://medias.517ybang.com/item/url_image_main/201806/0626/220147.jpg">
        </div>
        <h1>进来秒杀</h1>
        <h2>美的（Midea）AAB10A</h2>
        <b class="atonce price_market">325.00/台</b>
         </a>
        	<div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
         
        
    </div>
    <div class="experience_two fl">
        <div class="card_one ml0">
        	    	<a href="https://www.517ybang.com/item/detail?id=4716" data-id='4716' class="freshshopid">
            <img src="https://medias.517ybang.com/item/url_image_main/201806/0626/221606.jpg" class="fl">
            <h1 class="mt10">在线秒杀</h1>
            <h2>艾美特(Airmate) 电风扇 FSW50R-5</h2>
            <b class="atonce atonce_r price_market">199.00/台</b>
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
        	   <a href="https://www.517ybang.com/item/detail?id=4710" data-id="4710" class="freshshopid">
            <img src="https://medias.517ybang.com/item/url_image_main/201806/0626/220710.jpg" class="fl">
            <h1 class="mt10">进来热销</h1>
            <h2>先锋DG3302</h2>
            <b class="atonce atonce_r price_market">199.00/台</b>
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
    <img src="<?php echo CDN_URL ?>media/home/bjhh.png">
</div>
	
<div class="like wid710 auto clearfix mt10 supermarketgoodslist">
    <ul>
    	
        <li>
        	<a href="https://www.517ybang.com/item/detail?id=5188" class="freshshopid" target="_self" data-id="5188">
            <img src="https://medias.517ybang.com/item/url_image_main/201806/0627/194529.jpg">
            <h1 class="text-left">美的(Midea) T1-L101B 电烤箱</h1>
            <!--<h2 class="text-left">复刻版 怪物猎人</h2>-->
            <h3 class="text-left">￥99.00/台</h3>
             </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
       
        
        <li>
        	<a class="freshshopid" href="https://www.517ybang.com/item/detail?id=4934" target="_self" data-id="4934">
            <img src="https://medias.517ybang.com/item/url_image_main/201806/0627/142957.jpg">
            <h1 class="text-left">美的面包机 ESC1510</h1>
            <h2 class="text-left">自动撒果料&酵母</h2>
            <h3 class="text-left">￥199.00/台</h3>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
        
       
        <li class="mr0">
        	 <a href="https://www.517ybang.com/item/detail?id=5312" class="freshshopid" target="_self" data-id="5312">
            <img src="https://medias.517ybang.com/item/url_image_main/201806/0627/221049.png">
            <h1 class="text-left">夏普 CF-20NZW/2</h1>
            <!--<h2 class="text-left">重生 圣斗士 艾奥利亚</h2>-->
            <h3 class="text-left">￥2199.00/台</h3>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
        
    </ul>
</div>
<!--分类区域开始-->
<div class="wid710 auto bgfff border20 exercise clearfix">
    <img src="<?php echo CDN_URL ?>media/home/mbcd.png">
</div>
	
<div class="like wid710 auto clearfix mt10 supermarketgoodslist">
    <ul>
    	
        <li>
        	<a href="https://www.517ybang.com/item/detail?id=5278" data-id="5278" class="freshshopid">
            <img src="https://medias.517ybang.com/item/url_image_main/201806/0627/213423.jpg">
            <h1 class="text-left">夏普空净KC-WE20-W</h1>
            <h2 class="text-left">限购1台</h2>
            <h3 class="text-left">￥1199.00/台</h3>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
        
       
        <li>
        	 <a href="https://www.517ybang.com/item/detail?id=5220" data-id="5220" class="freshshopid">
            <img src="https://medias.517ybang.com/item/url_image_main/201806/0627/202532.jpg">
            <h1 class="text-left">九阳（Joyoung） JYL-Y15 料理机</h1>
            <h2 class="text-left">限购一台</h2>
            <h3 class="text-left">￥1299.00/台</h3>
             </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
       
        
        <li class="mr0">
        	<a href="https://www.517ybang.com/item/detail?id=5413" data-id="5413" class="freshshopid">
            <img src="https://medias.517ybang.com/item/url_image_main/201806/0628/151506.jpg">
            <h1 class="text-left">苏泊尔 电饭煲CFXB40FC829D-75</h1>
            <h2 class="text-left">限购一台</h2>
            <h3 class="text-left">￥209.00/台</h3>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
        
    </ul>
</div>
<!--分类区域开始-->
<div class="wid710 auto bgfff border20 exercise clearfix">
    <img src="<?php echo CDN_URL ?>media/home/hscw.png">
</div>
	
<div class="like wid710 auto clearfix mt10 supermarketgoodslist">
    <ul>
    	
        <li>
        	 <a href="https://www.517ybang.com/item/detail?id=5207" data-id="5207" class="freshshopid">
            <img src="https://medias.517ybang.com/item/url_image_main/201806/0627/200929.jpg">
            <h1 class="text-left">美的（Midea） 空气炸锅MF-WZN3201</h1>
            	<h2 class="text-left">限购一台</h2>
            <h3 class="text-left">￥499/台</h3>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
        
      
        <li>
        	  <a href="https://www.517ybang.com/item/detail?id=5271" data-id="5271" class="freshshopid">
            <img src="https://medias.517ybang.com/item/url_image_main/201806/0627/212639.jpg">
            <h1 class="text-left">美的电压力锅WQC60A5</h1>
            <h2 class="text-left">限购一台</h2>
            <h3 class="text-left">￥299.00/台</h3>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
        
       
        <li class="mr0">
        	  <a href="https://www.517ybang.com/item/detail?id=4926" data-id="4926" class="freshshopid">
            <img src="https://medias.517ybang.com/item/url_image_main/201806/0627/142605.jpg">
            <h1 class="text-left">飞利浦咖啡机HD7751</h1>
            <h2 class="text-left">意式泵压咖啡机</h2>
            <h3 class="text-left">￥876.00/台</h3>
             </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
       
    </ul>
</div>
<!--分类区域开始-->
<div class="wid710 auto bgfff border20 exercise clearfix">
    <img src="<?php echo CDN_URL ?>media/home/wj.png">
</div>
	
<div class="like wid710 auto clearfix mt10 supermarketgoodslist">
    <ul>
         <li>
        	 <a href="https://www.517ybang.com/item/detail?id=4894" data-id="4894" class="freshshopid">
            <img src="https://medias.517ybang.com/item/url_image_main/201806/0627/140049.jpg">
            <h1 class="text-left">美的YGJ15B3</h1>
            <h2 class="text-left">大功率烫衣服挂烫机家用蒸汽手持挂立式</h2>
            <h3 class="text-left">￥198.00/台</h3>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
       
        <li>
        	 <a href="https://www.517ybang.com/item/detail?id=4730" data-id="4730" class="freshshopid">
            <img src="https://medias.517ybang.com/item/url_image_main/201806/0627/092715.jpg">
            <h1 class="text-left">美的(Midea) 吸尘器 SC861A</h1>
            <h2 class="text-left">迷你便携式吸尘器，轻便，实用！</h2>
            <h3 class="text-left">￥129.00/台</h3>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
        <a href="https://www.517ybang.com/item/detail?id=5413" data-id="5413" class="freshshopid">
        <li class="mr0">
            <img src="https://medias.517ybang.com/item/url_image_main/201806/0628/151506.jpg">
            <h1 class="text-left">苏泊尔 电饭煲CFXB40FC829D-75</h1>
           <h2 class="text-left">限购一台</h2>
            <h3 class="text-left">￥209.00/台</h3>
            </a>
            <div class="market_buycar addcar">
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
<!--<div class="freshsupertitle border20 auto bgfff">

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

</div>-->
<div class="fresh_like wid670 auto bgfff border20 mt10 clearfix">
	<ul id="jjlist">
		
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
					//var user_id = <?php echo $this->session->user_id ?>;					var params = common_params;					if(params.user_id == null){						window.location.href = 'https://www.517ybang.com/login';						return;					}
					$.ajax({
			        url: api_url + '/cart/index',
			        type: 'post',
			        dataType: "json",
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
			    var shopInfo = '1|' + oldcar + '|0|' + count + ',' + arrCur;
			     //上传接口				var params = common_params;				params.name = 'cart_string';				params.value = shopInfo;				params.id = params.user_id;
			    $.ajax({
			    	type:"post",
			    	url:api_url + "cart/sync_up",
			    	dataType:'json',
			    	async : false,
			    	data:params,
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
			        url: api_url + 'cart/index',
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
			        url: api_url + 'cart/index',
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
	}); $(".swiper-container5 .swiper-wrapper .move").on('click',function(){ 	if($(this).parents().index() >= 1){		var categary = $(this).children('span').eq(0).attr('data-id');		$('#jjlist').html('');		$.ajax({			type:"post",			url:api_url + "item/index",			async:false,			dataType : 'json',			data : {app_type:'client',category_id:categary},			success : function(res){				var con = res.content;				for (var i = 0;i < con.length;i++) {					var oLi = '<li class="clearfix"><div class="pic fl"><a href="https://www.517ybang.com/item/detail?id='+con[i].item_id+'"><img src="https://medias.517ybang.com/item/'+con[i].url_image_main+'"></div><h1 class="fl">'+con[i].name+'</h1><h2 class="fl">'+con[i].slogan+'</h2><h3 class="fl">￥ '+con[i].price+'<span>￥ '+con[i].tag_price+'</span></h3></a><i class="icon-buy fr addcar" style="font-size: .38rem;color: #ff3649;margin-top: .54rem;"></i></li>';				$('#jjlist').append(oLi);									}									//添加购物车		var offset = $("#end").offset();		var endLeft = $("#end").css("left");		$(".addcar").click(function(event){			//HostApp.alert(user_agent.is_ios);			var r = $(this).siblings('.pic').find('a').attr('href');			var b = r.substring(r.lastIndexOf('=')+1, r.length);			oldcar = b;			var count=1;			var addCartTime;			var oldShopList = [];			var countflag = 0;			//在微信端				if(user_agent.is_wechat){					var addcar = $(this);					//var user_id = <?php echo $this->session->user_id ?>;					var params = common_params;					if(params.user_id == null){						window.location.href = base_url + 'login';						return;					}					$.ajax({			        url: api_url + '/cart/index',			        type: 'post',			        dataType: "json",			        cache: false,			        timeout: 10000,			        async: false,			        data : params,			        error: function(date){					alert(date);			        },			        success : function(data){			        	item_id = data.content.order_items;			        }		     });		      for (var i = 0;i < item_id.length;i++) {				for (var j = 0;j < item_id[i].order_items.length;j++) {					//var oldShopList = '1|' + item_id[i].order_items[j].item_id + '|0|' + item_id[i].order_items[j].count;					if(oldcar == item_id[i].order_items[j].item_id){						count = item_id[i].order_items[j].count;						if(countflag == 0){							count++;							countflag = 1;						}					}					else{						oldShopList.push('1|' + item_id[i].order_items[j].item_id + '|0|' + item_id[i].order_items[j].count);					}				}					        	}	        arrCur = oldShopList.join(",");			var img = addcar.parent().find('img').attr('src');			var flyer = $('<img class="u-flyer" src="'+img+'">');			flyer.fly({				start: {					left: addcar.offset().left - $(document).scrollLeft(),					top: addcar.offset().top - $(document).scrollTop()				},				end: {					left:parseInt(endLeft),					top: 0,					width: 0,					height: 0				},				onEnd: function(){					$("#msg").show().animate({width: '250px'}, 200).fadeOut(1000);					addcar.css("cursor","default").removeClass('orange');					this.destory();				}			});			    var shopInfo = '1|' + oldcar + '|0|' + count + ',' + arrCur;			     //上传接口				var params = common_params;				params.name = 'cart_string';				params.value = shopInfo;				params.id = params.user_id;			    $.ajax({			    	type:"post",			    	url:api_url + "cart/sync_up",			    	dataType:'json',			    	async : false,			    	data:params,			    	success:function(res){			    		console.log(res);			    		clearTimeout(addCartTime);					    addCartTime = setTimeout(function(){							$('#tip').show().delay(1000).fadeOut();					    },1000);			    	}			    });			}		});			}		});		} })

</script>