	<!--有优惠券的时候显示-->
	<style>
		.morecoupon{
			position: absolute;
			bottom: 0px;
			left: 0px;
			width: 100%;
			background: #ccc;
			height: .75rem;
			line-height: .75rem;
			text-align: center;
			font-size: .26rem;
			color: #fff;
		}
		.swiper-container7{
			margin-top: .2rem;
		}
	</style>
	<script src="https://cdn-remote.517ybang.com/js/educationclassification.js"></script>
	<div class="havecoupon">
	<div class="tab coupon">
		
		<a class="active" href="javascript:;">可使用</a>
		<a href="javascript:;">已使用</a>
		<a href="javascript:;">已过期</a>
	</div>
	<div class="swiper-container6 couponcontent">
		<div class="swiper-wrapper w">
			<div class="swiper-slide d">
				<div class="init-loading list-group-item text-center" style="display: none;">下拉可以刷新</div>
				<div class="swiper-container7">
				<div class="swiper-wrapper">
					<div class="swiper-slide list-group" id="canusercoupon">
					
						
					</div>
					<div class="swiper-slide list-group">
						<div class="list-group-item">
							<p class="coupontip">
								已使用优惠券7天后将不再显示
							</p>
								<div class="couponlist wid710 auto">
									<div class="couponopic yiguoqi fl">
										<h1>¥50</h1>
										<h2>满50可用</h2>
									</div>
									<div class="coupontext fl">
										<p>东堂纹身<span>(仅限本店使用)</span></p>
										<div class="time">2017.08.01-2017.8.30</div>
									</div>
									<!--<div class="sudouse fr">
										立即使用
									</div>-->
									<!--<div class="posttime">
										快过期
									</div>-->
									<div class="evertime">
										<img src="https://cdn-remote.517ybang.com/media/coupon/yishiyong@3x.png" />
									</div>
								</div>
								<div class="couponlist wid710 auto">
									<div class="couponopic fl yiguoqi">
										<h1>¥50</h1>
										<h2>满50可用</h2>
									</div>
									<div class="coupontext fl">
										<p>东堂纹身<span>(仅限本店使用)</span></p>
										<div class="time">2017.08.01-2017.8.30</div>
									</div>
									<!--<div class="sudouse fr">
										立即使用
									</div>-->
									<!--<div class="posttime">
										快过期
									</div>-->
									<div class="evertime">
										<img src="https://cdn-remote.517ybang.com/media/coupon/yishiyong@3x.png" />
									</div>
								</div>
						</div>
						
						
					</div>
					<div class="swiper-slide list-group">
						
						<div class="list-group-item">
							<p class="coupontip">
								已过期优惠券7天后将不再显示
							</p>
							<div class="couponlist wid710 auto">
									<div class="couponopic fl yiguoqi">
										<h1>¥50</h1>
										<h2>满50可用</h2>
									</div>
									<div class="coupontext fl">
										<p>东堂纹身<span>(仅限本店使用)</span></p>
										<div class="time">2017.08.01-2017.8.30</div>
									</div>
									<!--<div class="sudouse fr">
										立即使用
									</div>-->
									<!--<div class="posttime">
										快过期
									</div>-->
									<div class="evertime">
										<img src="https://cdn-remote.517ybang.com/media/coupon/yiguoqi@3x.png" />
									</div>
								</div>
									<div class="couponlist wid710 auto">
									<div class="couponopic fl yiguoqi">
										<h1>¥50</h1>
										<h2>满50可用</h2>
									</div>
									<div class="coupontext fl">
										<p>东堂纹身<span>(仅限本店使用)</span></p>
										<div class="time">2017.08.01-2017.8.30</div>
									</div>
									<!--<div class="sudouse fr">
										立即使用
									</div>-->
									<!--<div class="posttime">
										快过期
									</div>-->
									<div class="evertime">
										<img src="https://cdn-remote.517ybang.com/media/coupon/yiguoqi@3x.png" />
									</div>
								</div>
            	
						</div>
						
					</div>
				</div>
				</div>
			</div>
		</div>
		<!--<div class="loadtip">上拉加载更多</div>
		<div class="swiper-scrollbar"></div>-->
	</div>
</div>
<div class="nocoupon none">
	<img src="https://cdn-remote.517ybang.com/media/balance/nocoupon@3x.png"/>
	<b>竟然一张券都没有</b>
	<b>“你有没有考虑过~”</b>
</div>
<a href="https://www.517ybang.com/coupon">
	<div class="morecoupon">领取更多</div>
</a>
<script>
	function timestampToTime(timestamp) {
	        var date = new Date(timestamp * 1000);//时间戳为10位需*1000，时间戳为13位的话不需乘1000
	        Y = date.getFullYear() + '.';
	        M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '.';
	        D = date.getDate() + ' ';
	        h = date.getHours() + ':';
	        m = date.getMinutes();
	        s = date.getSeconds();
	        return Y+M+D+h+m;
    }
		$.ajax({
			url: "https://api.517ybang.com/coupon/index",
			 type: "post",
             dataType: 'json',
             data:{app_type:'client'},
            success: function (res) {
            	//var count = 0;
                for (var i=0;i<res.content.length;i++) {
                	if(1 == res.content[i].user_id){
                		
                		//count++;
                		var amount = res.content[i].amount;
	                	var biz_id = res.content[i].biz_id;
	                	var start_time = timestampToTime(res.content[i].time_start);
	                	var end_time = timestampToTime(res.content[i].time_end);
	                	var rate = (100 - res.content[i].rate*100)/10 + '折';
	                	var min_subtotal = res.content[i].min_subtotal;
	                	var name = res.content[i].brief_name + ' ' + res.content[i].name;
                	if(res.content[i].amount == 0){
                		var canuse = '<a href="<?php echo base_url('biz/detail?id=') ?>'+biz_id+'"><div class="list-group-item"><div class="couponlist wid710 auto"><div class="couponopic fl"><h1>' + rate +'</h1><h2>满'+min_subtotal+'元可用</h2></div><div class="coupontext fl"><p>'+name+'</p><div class="time">'+start_time+'<span>-</span>'+end_time+'</div></div><div class="sudouse fr">立即使用</div> <!--<div class="posttime">快过期</div>--></div></div></a>';
						$('#canusercoupon').append(canuse);  
                	}
                	else{
                		 var canuse = '<a href="<?php echo base_url('biz/detail?id=') ?>'+biz_id+'"><div class="list-group-item"><div class="couponlist wid710 auto"><div class="couponopic fl"><h1>¥' + amount +'</h1><h2>满'+min_subtotal+'元可用</h2></div><div class="coupontext fl"><p>'+name+'</p><div class="time">'+start_time+'<span>-</span>'+end_time+'</div></div><div class="sudouse fr">立即使用</div> <!--<div class="posttime">快过期</div>--></div></div></a>';
						$('#canusercoupon').append(canuse); 
                	}
					          		
                	}
                }
                //$('#count').text('('+count+')');
                var couponlength = $(".swiper-container7").find('.swiper-slide').eq(0).find('.list-group-item').length;
               
				if(couponlength >= 1){
					if($('.havecoupon').height() < $(document).height()){
						$('.havecoupon').height($(document).height() - 40); 
					}
					$('.morecoupon').css('top',$('.havecoupon').height()+50);
					$(".havecoupon").show();
					$(".nocoupon").hide();
				}
				else{
					$(".havecoupon").hide();
					$(".nocoupon").show();
				}
              }
			
		})
	</script>