<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>进来说</title>
	<link href="https://cdn-remote.517ybang.com/css/index.min.css" rel="stylesheet">
	<link href="https://cdn-remote.517ybang.com/css/swiper.mini.css" rel="stylesheet">
	<script src="https://cdn-remote.517ybang.com/js/jquery-3.3.1.min.js"></script>
	<script src="https://cdn-remote.517ybang.com/js/index.min.js"></script>
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
</head>
<body>
		<style>
        body {background:#efefef;overflow-x: hidden;}
        .member_list {
        height:2.6rem;
            background-color:orange;
        /* background:url(<?php echo CDN_URL ?>media/member/tu1@3x.png); */
        position:relative;
        margin-bottom:.2rem;
	    background-size:contain;
        overflow:hidden;}
        .ui-loader {display:none;}
        .icon-bottom-preview:before {
	    content: "\e999";
	    color: #adadad;
	}
		.memberclass{
			top: 0px;
		}
		.member_wraplist{
			padding-top: .8rem;
		}		
		.newsimg{
			padding: .27rem;
		    background: #fff;
		    border-radius: .2rem;
		    margin-bottom: .2rem;
		}
		.newsimg time{
			float: right;
		    color: #c9c9c9;
		    margin-top: -.1rem;
		    font-size: .28rem;
		}
		.newsimg h1{
			font-size: .3rem;
		    color: #3e3a39;
		    padding: .15rem 0px;
		}
		.newsimg p{
			font-size: .28rem;
    		color: #707070;
		}
    </style>
	<!--头部title区域开始-->

		<div class="bgfff memberclass">
		<div class="couponcentertitle auto bgfff">
			<div class="swiper-containercouponcenter">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<a>4S店</a>
					</div>
					<div class="swiper-slide">
						<a>酒店</a>
					</div>
					<div class="swiper-slide">
						<a>美容</a>
					</div>
					<div class="swiper-slide">
						<a>培训</a>
					</div>
					<div class="swiper-slide">
						<a>美食美客</a>
					</div>
					
					<div class="swiper-scrollbar123"></div>
				</div>
			</div>
		</div>
		</div>
	<div class="member_wraplist">
		<div class="couponcentercontent auto mt20 clearfix">
			<div class="swiper-containercouponcentertemplate">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="newsimg">
							<img src="https://cdn-remote.517ybang.com/media/news/m1.png" alt="" />
							<h1>可恩口腔,您身边的口s腔专家</h1>
							<p>世界上最健康的口腔专家</p>
							<time>2017-10-19</time>
						</div>
						<div class="newsimg">
							<img src="https://cdn-remote.517ybang.com/media/news/m2.png" alt="" />
							<h1>可恩口腔,您身边的口腔专家</h1>
							<p>世界上最健康的口腔专家</p>
							<time>2017-10-19</time>
						</div>
						<div class="newsimg">
							<img src="https://cdn-remote.517ybang.com/media/news/m3.png" alt="" />
							<h1>可恩口腔,您身边的口腔专家</h1>
							<p>世界上最健康的口腔专家</p>
							<time>2017-10-19</time>
						</div>
						
					</div>
					<div class="swiper-slide">2</div>
					<div class="swiper-slide">3</div>
					<div class="swiper-slide">4</div>
					<div class="swiper-slide">5</div>
    				<div class="swiper-paginationcoupon"></div>
				</div>
			</div>
		
		</div>
   </div>
<script>
			$(document).ready(function(){
				
				 var mySwipersuper = new Swiper('.swiper-containercouponcenter', {
	        scrollbar: '.swiper-scrollbar123',
	        scrollbarHide: false,
	        slidesPerView: 'auto',
	        centeredSlides: false,
	        grabCursor: true,
	        spaceBetween : 0,
	        observer:true,
	        observeParents:true
	    });
	    var swiperIndex = new Swiper('.swiper-containercouponcentertemplate', {
            pagination: '.swiper-paginationcoupon',
            paginationClickable: true,
//          autoplay: 2000,
//          loop:true
			 onSlideChangeEnd: function (swiper) {
			                var j=swiperIndex.activeIndex;
			                $(".swiper-containercouponcenter a").removeClass("couponcenter");
							$(".swiper-containercouponcenter a").eq(j).addClass('couponcenter');
			            }
			        });
			 $(".swiper-containercouponcenter a").on('click',function(){
						var index = $(this).parents().index();
						console.log(index);
						$(".swiper-containercouponcenter a").removeClass("couponcenter");
							$(this).addClass('couponcenter');
//						 $(".paymentdetailsnav span").removeClass('paymentcur').eq(index).addClass('paymentcur');
			            swiperIndex.slideTo(index,1000,false);
						
			});
			var mo=function(e){e.preventDefault();};

		/***禁止滑动***/
		function stop(){
				
		        document.body.style.overflow='hidden';        
		        document.addEventListener("touchmove",mo,false);//禁止页面滑动
		}
		
		/***取消滑动限制***/
		function move(){
		        document.body.style.overflow='';//出现滚动条
		        document.removeEventListener("touchmove",mo,false);        
		}
				$("#popwindowbtn").on("click",function(){
				$(".popwindowcontent").animate({  
				    left: 0,  
				    opacity: 1  
				}, 300, 'linear');  
				stop();
			});
			$("#popwindowcancle").on("click",function(){
				$(".popwindowcontent").animate({  
				    left: '7.5rem',  
				    opacity: 0  
				}, 300, 'linear');  
				move();
			
			});
			$(".popwindowcontent input").focus(function(){
				$(this).css({
					'text-align':'left',
					'text-indent':'.8rem'
				});
				$(this).next('i').animate({  
				    left: '.6rem',  
				}, 100, 'linear');  
			}).blur(function(){
				$(this).css({
					'text-align':'center',
					'text-indent':'0'
				});
				$(this).next('i').animate({  
				    left: '2.3rem',  
				}, 100, 'linear');  
			});
			$('#search-membercard').keydown(function(event){
				//event.preventDefault();
				if(event.which == 13){
					alert('查询会员卡信息~');
				}
			});
			$('.swiper-slide a').eq(0).click();
			});
			
</script>
</body>
</html>