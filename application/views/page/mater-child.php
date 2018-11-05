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
            	<a href="https://www.517ybang.com/item/detail?id=4699" target="_self">
                	<img src="https://cdn-remote.517ybang.com/media/home/blt.jpg">
                </a>
            </div>
            <div class="swiper-slide">
            	<a href="https://www.517ybang.com/item/detail?id=4688" target="_self">
                	<img src="https://cdn-remote.517ybang.com/media/home/hhz.jpg">
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
            <div class="move">				<span style="display: none;" data-id="8"></span>
                <span class="titletext">童装</span>
                <span class="smalltitle smallcolor_one">Garment</span>
            </div>
            <img src="https://cdn-remote.517ybang.com/media/home/tz1.jpg">
            <div class="downarrow arrBlue"></div>
        </div>
        <div class="swiper-slide">
            <p class="colorarea">
            	<img src="<?php echo CDN_URL ?>media/fresh_mart/colorarea/shuiguo@3x.png" />
            </p>
            <i class="freshshowbg colorareaYellow"></i>
            <div class="move">			<span style="display: none;" data-id="9"></span>
            <span class="titletext">洗护</span>
            <span class="smalltitle smallcolor_two">Caring</span>
            </div>
            <img src="https://cdn-remote.517ybang.com/media/home/xh1.jpg">
            <div class="downarrow arrYellow"></div>
        </div>
        <div class="swiper-slide">
            <p class="colorarea">
            	<img src="<?php echo CDN_URL ?>media/fresh_mart/colorarea/shucai@3x.png" />
            </p>
            <i class="freshshowbg colorareaYellow"></i>
            <div class="move">			<span style="display: none;" data-id="10"></span>
            <span class="titletext">孕产</span>
            <span class="smalltitle smallcolor_two">Motherhood</span>
            </div>
            <img src="https://cdn-remote.517ybang.com/media/home/yc1.jpg">
            <div class="downarrow arrYellow"></div>
        </div>
        <div class="swiper-slide">
            <p class="colorarea">
            	<img src="<?php echo CDN_URL ?>media/fresh_mart/colorarea/rou@3x.png" />
            </p>
            <i class="freshshowbg colorareaRed"></i>
            <div class="move">				<span style="display: none;" data-id="11"></span>
                <span class="titletext">玩具</span>
                <span class="smalltitle smallcolor_one">Toy</span>
            </div>
            <img src="https://cdn-remote.517ybang.com/media/home/wj1.jpg">
            <div class="downarrow arrRed"></div>
        </div>
        <div class="swiper-slide">
            <p class="colorarea">
            	<img src="<?php echo CDN_URL ?>media/fresh_mart/colorarea/shuichan@3x.png" />
            </p>
            <i class="freshshowbg colorareaBlue"></i>
            <div class="move">			<span style="display: none;" data-id="7"></span>
            <span class="titletext">辅食工具</span>
            <span class="smalltitle smallcolor_four">Snack</span>
            </div>
            <img src="https://cdn-remote.517ybang.com/media/home/fsgj1.jpg">
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
    	<a href="https://www.517ybang.com/item/detail?id=4773">
        <li>
            <div class="pic">
                <img src="https://cdn-remote.517ybang.com/media/home/fxshy.jpg">
            </div>
            <h1>费雪学步车玩具 CBV66</h1>
            <h2>￥369.00/件</h2>
        </li>
        </a>
        <a href="https://www.517ybang.com/item/detail?id=4784">
        <li>
            <div class="pic">
                <img src="https://cdn-remote.517ybang.com/media/home/fxye.jpg">
            </div>
            <h1>费雪儿童布书T9239</h1>
            <h2>￥79.00/个</h2>
        </li>
        </a>
        <a href="https://www.517ybang.com/item/detail?id=4811">
        <li>
            <div class="pic">
                <img src="https://cdn-remote.517ybang.com/media/home/aoleer.jpg">
            </div>
            <h1>澳乐男女小孩公主海洋球房子105*95*120cm</h1>
            <h2>￥118.80/件</h2>
        </li>
        </a>
        <a href="https://www.517ybang.com/item/detail?id=4732">
        <li>
            <div class="pic">
                <img src="https://cdn-remote.517ybang.com/media/home/gbhhz.jpg">
            </div>
            <h1>gb好孩子婴儿床实木无漆宝宝多功能松木儿童床MC283</h1>
            <h2>￥699.00/件</h2>
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
         <a href="https://www.517ybang.com/item/detail?id=5149" data-id="5149" class="freshshopid">
        <div class="goodpic auto">
            <img src="https://cdn-remote.517ybang.com/media/home/dn.jpg">
        </div>
        <h1>进来秒杀</h1>
        <h2>百乐麦酸奶溶豆益生菌儿童零食辅食</h2>
        <b class="atonce price_market">60.00/份</b>
         </a>
        	<div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
         
        
    </div>
    <div class="experience_two fl">
        <div class="card_one ml0">
        	    	<a href="https://www.517ybang.com/item/detail?id=4606" data-id='4606' class="freshshopid">
            <img src="https://cdn-remote.517ybang.com/media/home/wphz.jpg" class="fl">
            <h1 class="mt10">在线秒杀</h1>
            <h2>Fisher-Price费雪 顽皮小猴子 宝宝儿童益智玩具 H8128</h2>
            <b class="atonce atonce_r price_market">29.80/份</b>
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
        	   <a href="https://www.517ybang.com/item/detail?id=5090" data-id="5090" class="freshshopid">
            <img src="https://cdn-remote.517ybang.com/media/home/xgb.jpg" class="fl">
            <h1 class="mt10">进来热销</h1>
            <h2>Oright学饮杯儿童吸管6-18个月幼儿园宝宝防摔水杯</h2>
            <b class="atonce atonce_r price_market">69.00/件</b>
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
    <img src="<?php echo CDN_URL ?>media/home/bjhh.jpg">
</div>
	
<div class="like wid710 auto clearfix mt10 supermarketgoodslist">
    <ul>
    	
        <li>
        	<a href="https://www.517ybang.com/item/detail?id=5839" class="freshshopid" target="_self" data-id="5839">
            <img src="https://cdn-remote.517ybang.com/media/home/kyb.jpg">
            <h1 class="text-left">可优比儿童滑板车1-2-3-6岁</h1>
            <!--<h2 class="text-left">复刻版 怪物猎人</h2>-->
            <h3 class="text-left">￥218.00/件</h3>
             </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
       
        
        <li>
        	<a class="freshshopid" href="https://www.517ybang.com/item/detail?id=4823" target="_self" data-id="4923">
            <img src="https://cdn-remote.517ybang.com/media/home/jxz.jpg">
            <h1 class="text-left">乐高机械组 42073高速赛车积木玩具</h1>
            <h2 class="text-left">从小培养智力</h2>
            <h3 class="text-left">￥199.00/件</h3>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
        
       
        <li class="mr0">
        	 <a href="https://www.517ybang.com/item/detail?id=4608" class="freshshopid" target="_self" data-id="4608">
            <img src="https://cdn-remote.517ybang.com/media/home/hhztc.jpg">
            <h1 class="text-left">gb好孩子swan天猫天鹅碳纤维婴儿推车360旋转仅6kg</h1>
            <h2 class="text-left">限购1件</h2>
            <h3 class="text-left">￥3689.00/份</h3>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
        
    </ul>
</div>
<!--分类区域开始-->
<div class="wid710 auto bgfff border20 exercise clearfix">
    <img src="<?php echo CDN_URL ?>media/home/mbcd.jpg">
</div>
	
<div class="like wid710 auto clearfix mt10 supermarketgoodslist">
    <ul>
    	
        <li>
        	<a href="https://www.517ybang.com/item/detail?id=4847" data-id="4847" class="freshshopid">
            <img src="https://cdn-remote.517ybang.com/media/home/wwd.jpg">
            <h1 class="text-left">汪汪队立大功消防车</h1>
           <!-- <h2 class="text-left">限购1台</h2>-->
            <h3 class="text-left">￥299.00/件</h3>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
        
       
        <li>
        	 <a href="https://www.517ybang.com/item/detail?id=5060" data-id="5060" class="freshshopid">
            <img src="https://cdn-remote.517ybang.com/media/home/ltbb.jpg">
            <h1 class="text-left">英氏男宝宝连体衣外出服162308</h1>
            <h2 class="text-left">男宝宝连体衣</h2>
            <h3 class="text-left">￥95.76/件</h3>
             </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
       
        
        <li class="mr0">
        	<a href="https://www.517ybang.com/item/detail?id=5010" data-id="5010" class="freshshopid">
            <img src="https://cdn-remote.517ybang.com/media/home/mmm.jpg">
            <h1 class="text-left">gb好孩子宝宝洗衣液 特惠 500ml*6</h1>
            <h2 class="text-left">橄榄精华 婴儿标准 防止静电 四季滋养</h2>
            <h3 class="text-left">￥69.00/份</h3>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
        
    </ul>
</div>
<!--分类区域开始-->
<div class="wid710 auto bgfff border20 exercise clearfix">
    <img src="<?php echo CDN_URL ?>media/home/hscw.jpg">
</div>
	
<div class="like wid710 auto clearfix mt10 supermarketgoodslist">
    <ul>
    	
        <li>
        	 <a href="https://www.517ybang.com/item/detail?id=4782" data-id="4782" class="freshshopid">
            <img src="https://cdn-remote.517ybang.com/media/home/xgq.jpg">
            <h1 class="text-left">新品 FISHER PRICE 费雪小钢琴 BFH64</h1>
            	<h2 class="text-left">探索成长 音乐早教</h2>
            <h3 class="text-left">￥229.00/件</h3>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
        
      
        <li>
        	  <a href="https://www.517ybang.com/item/detail?id=4798" data-id="4798" class="freshshopid">
            <img src="https://cdn-remote.517ybang.com/media/home/ppg.jpg">
            <h1 class="text-left">费雪 小狗皮皮学习桌BJV34</h1>
            <!--<h2 class="text-left">悠悠球混沌魔龙</h2>-->
            <h3 class="text-left">￥359.00/份</h3>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
        
       
        <li class="mr0">
        	  <a href="https://www.517ybang.com/item/detail?id=4800" data-id="4800" class="freshshopid">
            <img src="https://cdn-remote.517ybang.com/media/home/mmc.jpg">
            <h1 class="text-left">费雪木马车婴儿多功能滑行车 550*250*390mm</h1>
            <h2 class="text-left">支持7天无理由退换货 软胶加厚车轮耐磨防滑</h2>
            <h3 class="text-left">￥268.00/份</h3>
             </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
       
    </ul>
</div>
<!--分类区域开始-->
<div class="wid710 auto bgfff border20 exercise clearfix">
    <img src="<?php echo CDN_URL ?>media/home/wj11.jpg">
</div>
	
<div class="like wid710 auto clearfix mt10 supermarketgoodslist">
    <ul>
         <li>
        	 <a href="https://www.517ybang.com/item/detail?id=5224" data-id="5224" class="freshshopid">
            <img src="https://cdn-remote.517ybang.com/media/home/yf.jpg">
            <h1 class="text-left">日月禾孕妇裤春装韩版九分裤</h1>
            <!--<h2 class="text-left">费雪多功能轻便摇椅</h2>-->
            <h3 class="text-left">￥69.00/件</h3>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
       
        <li>
        	 <a href="https://www.517ybang.com/item/detail?id=5229" data-id="5229" class="freshshopid">
            <img src="https://cdn-remote.517ybang.com/media/home/123456.jpg">
            <h1 class="text-left">十月结晶待产包全套 20件</h1>
           <!-- <h2 class="text-left">费雪多功能轻便摇椅</h2>-->
            <h3 class="text-left">￥72.00/套</h3>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
        <a href="https://www.517ybang.com/item/detail?id=5251" data-id="5251" class="freshshopid">
        <li class="mr0">
            <img src="https://cdn-remote.517ybang.com/media/home/nk.jpg">
            <h1 class="text-left">可调节高腰托腹孕妇内衣裤</h1>
           <h2 class="text-left">纯棉健康 高腰托腹</h2>
            <h3 class="text-left">￥39.80/件</h3>
            </a>
            <div class="market_buycar addcar">
                <i class="icon-buy"></i>
            </div>
        </li>
    </ul>
</div>

<!--猜你喜欢区域开始-->
<div class="wid710 auto bgfff border20 exercise clearfix">
    <img src="<?php echo CDN_URL ?>media/home/cainixihuan/cainixihuan@3x.png">
</div>
<!--猜你喜欢内容区域-->
<div class="fresh_like wid670 auto bgfff border20 mt10 clearfix">
	<ul id="index_jjlist">
		
	</ul><span class="bottomline" style="display: none;position: absolute;font-size:.26rem;color: #999;width:80%;left:50%;margin-left:-40%;text-align: center;padding-top:.5rem;">亲,我是有底线的哇~</span>
</div>
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
		
	</ul><span class="bottomline" style="display: none;position: absolute;font-size:.26rem;color: #999;width:80%;left:50%;margin-left:-40%;text-align: center;padding-top:.5rem;">亲,我是有底线的哇~</span>
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
		$(".addcar").click(function(event){			//HostApp.alert(user_agent.is_ios);
			var r = $(this).siblings('a').eq(0).attr('data-id');
			oldcar = r;
			var count=1;
			var addCartTime;
			var oldShopList = [];
			var countflag = 0;
			//在微信端
				if(user_agent.is_wechat){
					var addcar = $(this);
					//var user_id = <?php echo $this->session->user_id ?>;					var params = common_params;					if(params.user_id == null){						window.location.href = base_url + 'login';						return;					}
					$.ajax({
			        url: api_url + 'cart/index',
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
			    	url:api_url + "/cart/sync_up",
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
					}					var params = common_params;
					$.ajax({
			        url: api_url + "/cart/index",
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
			        url: api_url + "/cart/index",
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