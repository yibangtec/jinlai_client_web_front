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
	
    </style>
	<!--头部title区域开始-->
	<div class="popwindowcontent">
		<div class="wid670 auto clearfix">
			<input type="text" placeholder="搜索会员卡" class="fl" id="search-membercard"/>
			<i class="icon-bottom-preview"></i>
			<span id="popwindowcancle" class="fl">取消</span>
		</div>
	</div>
	<div class="member_title">
		<i class="icon-back fl"></i>
		会员
		<i class="icon-huiyuan fr"></i>
		<i class="icon-bottom-preview" id="popwindowbtn"></i>
	</div>
		<!--<div class="bgfff memberclass">
		<div class="couponcentertitle auto bgfff">
			<div class="swiper-containercouponcenter">
				<div class="swiper-wrapper" id="memberTitle">
					 <div class="swiper-slide couponcentercur">
                        <a class="couponcenter">全部</a>
                    </div>
                    <!--<div class="swiper-slide">
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
                    <div class="swiper-slide">
                        <a>足疗店</a>
                    </div>
                    <div class="swiper-slide">
                        <a>艾灸馆</a>
                    </div>-->
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
    <?php
        foreach ($items as $item):
            // 若未指定会员卡LOGO，使用商家LOGO
            $logo_url = MEDIA_URL. (!empty($item['member_logo_url'])? 'ornament_biz/'. $item['member_logo_url']: 'biz/'. $item['url_logo']);
          	if($logo_url == 'https://jinlaisandbox-images.b0.upaiyun.com/biz/')
            	$logo_url = 'https://cdn-remote.517ybang.com/media/home/default.png';
            $inline_style = '';
            if ( !empty($item['vi_color_first']) )
                $inline_style .= 'background-color:#'.$item['vi_color_first'].';';
            if ( !empty($item['member_thumb_url']) )
                $inline_style .= 'background: url('. MEDIA_URL.'ornament_biz/'.$item['member_thumb_url']. ') no-repeat center center;';
    ?>
    
    <a class="entermember_wrap" href="<?php echo base_url('member_biz/detail?biz_id='.$item['biz_id']) ?>" target="_self">
        <div class="member_list wid710 auto border20" style="<?php echo $inline_style ?>">
        	<?php
        		if (!empty($item['member_logo_url']) || !empty($item['url_logo'])):
        			$background_color = $item['vi_color_second'];
        		else:
        			$background_color = 'efefef';
        		endif;
        	?>
            <div class="memberlistpic" style="background-color:#<?php echo $background_color ?>">
                <img src="<?php echo $logo_url ?>">
            </div>
            <h1><?php echo $item['brief_name'] ?></h1>
            <span class="entermember">加入会员</span>
            <div class="memberdescription">
            	<?php 
            		if (!empty($item['slogan'])) 
            		echo ''.$item['slogan'].'';
            		else{
            			echo '会员享特权,多重优惠抢不停!';
            		} 
            	?>
            </div>
        </div>
	</a>
    <?php endforeach ?>
    	</div>


    				<div class="swiper-paginationcoupon"></div>
				</div>
			</div>
		
		</div>
   </div>

<?php
    // 应用中不显示底部导航栏
    if (
        ($this->user_agent['is_ios'] === FALSE && $this->user_agent['is_android'] === FALSE)
        || $this->user_agent['is_wechat'] === TRUE
    ):
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
					<i class="homeHuiyuan homeHuiyuan1"></i>
					<span class="text" style="color: #ff753e;">会员</span>
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

<?php endif ?>
<script>
			$(function(){
				
					//会员卡顶部商家分类
			$.ajax({
				type:"post",
				url:api_url + "/item_category/index",
				data : {app_type:'client', level:1},
				dataType : 'json',
				success:function(res){
					for (var i = 0;i < res.content.length;i++) {
						if(res.content[i].level == 1){
							// console.log(res.content[i].name);
						var memberTitleList = '<div class="swiper-slide"><a>'+res.content[i].name+'</a></div>';
						$('#memberTitle').append(memberTitleList);
						}
					}
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
						 onSlideChangeEnd: function (swiper) {
						                var j=swiperIndex.activeIndex;
						                $(".swiper-containercouponcenter a").removeClass("couponcenter");
										$(".swiper-containercouponcenter a").eq(j).addClass('couponcenter');
						            }
					});
					 $(".swiper-containercouponcenter a").on('click',function(){
						var index = $(this).parents().index();
						// console.log(index);
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
						 $.ajax({
	    	type:"post",
	    	url:"https://api.517ybang.com/biz/index",
	    	dataType : 'json',
	    	data :{app_type:'client',name:$('#search-membercard').val()},
	    	async : false,
	    	success : function(res){
	    		$(".popwindowcontent").animate({  
				    left: '7.5rem',  
				    opacity: 0  
				}, 300, 'linear');  
				move();
				if(!res.content.error){
                    
                    var oDiv = '';
                    for (let cc = 0; cc < res.content.length; cc++) {
                    	console.log(res.content[cc])
                    	oDiv += '<a class="entermember_wrap" href="https://www.517ybang.com/member_biz/detail?biz_id=' +res.content[cc].biz_id+' target="_self">';
                    	if (res.content[cc].member_thumb_url != null) {
                    		oDiv += '<div class="member_list wid710 auto border20" style="background-color:#99cccc;background: url(https://medias.517ybang.com/ornament_biz/'+res.content[cc].member_thumb_url+') no-repeat center center;">';
                    	} else {
							oDiv += '<div class="member_list wid710 auto border20" style="">';
                    	}
                    	if (res.content[cc].url_logo != null) {
                    		oDiv += '<div class="memberlistpic" style="background-color:#99cccc"><img src="https://medias.517ybang.com/biz/'+res.content[cc].url_logo+'"></div><h1>'+res.content[cc].brief_name+'</h1><span class="entermember">加入会员</span><div class="memberdescription">会员享特权,多重优惠抢不停!</div></div></a>';
                    	} else {
                    		oDiv += '<div class="memberlistpic" style="background-color:#99cccc"><img src="https://medias.517ybang.com/ornament_biz/'+res.content[cc].member_thumb_url+'"></div><h1>'+res.content[cc].brief_name+'</h1><span class="entermember">加入会员</span><div class="memberdescription">会员享特权,多重优惠抢不停!</div></div></a>';
                    	}
                    	
                    }
					
				}
				else{
					var oDiv = '<div style="text-align:center;">暂无搜索内容</div>';
				}
	    		$('.swiper-containercouponcentertemplate').find('.swiper-wrapper').find('.swiper-slide').html(' ');
	    		
	    		
	    		//var oDiv = '<a class="entermember_wrap" href="https://www.517ybang.com/member_biz/detail?biz_id="+res.content[0].biz_id+" target="_self"><div class="member_list wid710 auto border20" style="background-color:#99cccc;background: url('https://medias.517ybang.com/ornament_biz/) no-repeat center center;"><div class="memberlistpic" style="background-color:#99cccc"><img src="https://medias.517ybang.com/ornament_biz/member_logo_url/201808/0810/154723.png"></div><h1>"+res.content[0].brief_name+"</h1><span class="entermember">加入会员</span><div class="memberdescription">会员享特权,多重优惠抢不停!</div></div></a>';
	    		$('.swiper-containercouponcentertemplate').find('.swiper-slide').append(oDiv);
	    		
	    	}
	    });
				}
			})
			
			//如果不存在会员卡头像,那么显示默认头像
			$('.memberlistpic').find('img').each(function(i){
				if($(this).attr('src') == 'https://medias.517ybang.com/biz/'){
					$(this).attr('src','https://cdn-remote.517ybang.com/media/home/default.png');
				}
			});
					
				}
			});
		
			
		});
			function getQueryString(name) {
    var result = window.location.search.match(new RegExp("[\?\&]" + name + "=([^\&]+)", "i"));
    if (result == null || result.length < 1) {
        return "";
    }
    return result[1];
}
		
	 $.ajax({
	    	type:"post",
	    	url:"https://api.517ybang.com/biz/detail",
	    	dataType : 'json',
	    	data :{app_type:'client',id:getQueryString('id')},
	    	async : false,
	    	success : function(res){
	    		// console.log(1233333);
	    		
	    	}
	    });
	    $('.icon-huiyuan').click(function(){
	    	window.location.href = 'https://www.517ybang.com/member_biz/mine';
	    });
</script>