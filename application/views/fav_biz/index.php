<style>
	#breadcrumb{
		border-bottom: 1px solid #cecece;
		height: .8rem;
		line-height: .8rem;
		font-size: .3rem;
		padding: 0 .2rem;
	}
	input.check {
    background: url(https://cdn-remote.517ybang.com/media/cart/icon/icon_radio3.png) no-repeat center left;
    background-size: cover;
    /* position: absolute; */
    /* top: 50%; */
    /* left: 10px; */
    /* margin-top: -.21rem; */
    width: .42rem;
    float: left;
    height: .42rem;
    -webkit-appearance: none;
    outline: none;
    border: none;
    margin-left: 0px;
    position: static;
    margin-top: .3rem;
    margin-right: .15rem;
    display: none;
}
	#breadcrumb li{
		float: left;
		position: relative;
		
	}
	.active{
		border-bottom: .06rem solid #fe3749;
		color: #fe3749;
	}
	#breadcrumb li.shop{
		width: .9rem;
		text-align: center;
		margin-left: 2.23rem;
	}
	#breadcrumb li.biz{
		margin-left: .63rem;
		width: .9rem;
		text-align: center;
	}
	body{
		background: #fff;
	}
	.container .favtabcontent{
		display: none;
	}
	.item_list{
		padding:.2rem;
		background: #f6f6f6;
		position: relative;
		float: left;
    	width: 115% !important;
	}
	
	.item_list img{
		display: block;
		width: 1rem;
		height: 1rem;
		float: left;
		border-radius: .15rem;
	}
	.item_list b{
	    position: absolute;
    font-size: .26rem;
    right: 1.6rem;
    top: .4rem;
    width: .8rem;
    color: #999;
	}
	.item_list b span{
		display: block;
		padding-bottom: .1rem;
	}
	.item_list b span i{
		margin-left: .1rem;
	}
	.item_list b span:nth-child(1){
		    margin-left: .05rem;
    font-size: .3rem;
	}
	
	.item-name{
		font-size: .26rem;
		color: #1a1a1a;
		margin-top: .4rem;
		width: 4.6rem;
		overflow: hidden;
		padding-left: .2rem;
		float: left;
		padding-bottom: .01rem;
	}
	.digits{
		    font-size: .26rem;
    color: #ff3647;
    font-weight: bold;
    width: 80%;
    padding-left: .2rem;
    width: 67%;
    float: left;
    margin-top: .8rem;
	}
	.delete{
		    width: 1.2rem;
    display: block;
    font-size: .2rem;
    font-size: .28rem;
    float: right;
    height: 1.4rem;
    line-height: 1.4rem;
    background: #ff8346;
    border-bottom-right-radius: .2rem;
    border-top-right-radius: .2rem;
    text-align: center;
    color: #fff;
    position: absolute;
    right: 0;
    top: 0;
	}
	#content{
		width: 7.1rem;
    overflow: hidden;
    margin: 0 auto;
	}
	.currenttime{
		padding-top: .26rem;
		padding-bottom: .22rem;
		color: #666464;
		text-align: left;
		border-bottom: 1px solid #e6e6e6;
		margin-bottom: .1rem;
		font-size: .26rem;
	}
	.deleteCount{
		position: fixed;
		bottom: 0px;
		left: 0px;
		height: .7rem;
		width: 100%;
		font-size: .26rem;
		border-bottom: 1px solid #e6e6e6;
		line-height: .7rem;
		display: none;
		z-index: 99999;
		background: #fff;
	}
	.deleteAll{
		display: block;
	    width: 1.5rem;
	    text-align: center;
	    background: #ff3647;
	    height: .7rem;
	    line-height: .7rem;
	    color: #fff;
	}
	.deleteItem{
		margin-left: .2rem;
	}
	#breadcrumb li a{
		color: #3b3b39;
	}
	.radius-wrapp{
		 width: 100%;
	    overflow: hidden;
	    height: auto;
	    border-radius: .2rem;
	    margin-bottom: .15rem;
	}
	.sc{
		display: block;
	    width: 4.5rem;
	    margin: 0 auto;
	    margin-top: .5rem;
	}
	.nosctext{
		display: block;
	    font-size: .26rem;
	    text-align: center;
	    padding-bottom: .2rem;
	}
	.swiper-container_fruit {
    width: 100%;
    overflow: hidden;
    height: 2.18rem;
}
.fruidWrap{
	float: left;
    /*display: none;*/
   background: #f6f6f6;
   position: relative;
   left: -.1rem;
}
.fruidWrap .swiper-slide {
    background: #fff;
}
</style>

<base href="<?php echo $this->media_root ?>">

	<div class="deleteCount">
		<span class="fl deleteItem">
			已选择<b class="everChecked">0</b>项内容
		</span>
		<span class="fr deleteAll">删除</span>
	</div>
<div id=breadcrumb class="auto bgfff">
	<ol class="breadcrumb container">
		<li>
			<i class="icon-back"></i>
		</li>
		<li class="shop favtab">
			<a href="https://www.517ybang.com/fav_item">商品</a>
		</li>
		<li class='biz favtab active'>
			<a href="https://www.517ybang.com/fav_biz" style="color: #fe3749;">店铺</a>
		</li>
		<li class="fr edit" style="color: #7c7c7c;">
			编辑
		</li>
	</ol>
</div>
<?php if ( !empty($items) ): ?>
<div class="currenttime wid710 auto">最新</div>
<?php endif ?>
<div id=content class=container>
	<?php if ( empty($items) ): ?>
		<blockquote>
			<img src="<?php echo CDN_URL ?>media/fav_biz/shoucang-kong@3x.jpg" alt="" class="sc" />
			<span class="nosctext">这里什么都没有哦</span>
			<span class="nosctext">赶快去关注吧!</span>
		</blockquote>

	<?php else: ?>
		<ul id=item-list class=row>

			<?php foreach ($items as $item): ?>
			<div class="radius-wrapp">
			<li class="item_list wid710 auto border20" data-item-id="<?php echo $item[$this->id_name] ?>">
				<?php if ( empty(!$item['recent_items']) ): ?>
				<b>
					<span><?php echo $item['recent_items_count']?><i class="icon-xialajiantou2"></i>
					</span>
					<span>上新</span>
				</b>
				<?php endif ?>
				<input type="checkbox" class="check">
				<figure class="image-main col-xs-12 col-sm-6 col-md-3">
					<a title="<?php echo $item['name'] ?>" href="<?php echo base_url('biz/detail?id='.$item['biz_id']) ?>">
						<img title="<?php echo $item['name'] ?>" src="<?php echo $item['url_logo'] ?>">
					</a>
				</figure>

					<a title="<?php echo $item['brief_name'] ?>" href="<?php echo base_url('biz/detail?id='.$item['biz_id']) ?>">
						<h2 class=item-name><?php echo $item['brief_name'] ?></h2>
					</a>
					
						<a class=delete data-op-class=<?php echo $this->class_name ?> data-op-name=delete data-id="<?php echo $item[$this->id_name] ?>" title="删除" href="<?php echo base_url($this->class_name.'/delete?ids='.$item[$this->id_name]) ?>" target=_blank><i class="fa fa-trash"></i> 删除</a>
						<?php if ( empty(!$item['recent_items']) ): ?>
							<div class="fruidWrap clearfix auto cube">
					<div class="swiper-container_fruit">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide advercube">
                                <a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
                                	<img src="http://www.ybslux.com/uploadfiles/images//1bfdf9ca-1fd6-4c87-9f05-07ad56224bbf.jpg">
                                </a>
                            </div>
                            <div class="swiper-slide advercube">
                                <a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
                                	<img src="http://www.ybslux.com/uploadfiles/images//1476ce6f-a973-431c-b0a0-16f4b3941ab0.jpg">
                                </a>
                            </div>
                            <div class="swiper-slide advercube">
                                <a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
                                	<img src="http://www.ybslux.com/uploadfiles/images//48c8c46d-909b-42d2-91b0-cfb815a3270e.jpg">
                                </a>
                            </div>
                            <div class="swiper-slide advercube">
                                <a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
                                	<img src="http://www.ybslux.com/uploadfiles/images//527d206d-5f16-445f-ac44-be93c34592f0.jpg">
                                </a>
                            </div>
                            <div class="swiper-slide advercube" style="text-align: center;line-height: 2.2rem;"> 
                                更多
                            </div>
                            <div class="swiper-scrollbarcube"></div>
                        </div>
                    </div>
				</div>
				<?php endif ?>
			</li>
			</div>
			<?php endforeach ?>
		</ul>
	<?php endif ?>
</div>
<script>
	$(document).ready(function(){
		
	var mySwiper_cube = new Swiper('.swiper-container_fruit', {
		scrollbar: '.swiper-scrollbarcube',
		scrollbarHide: false,
		slidesPerView: 'auto',
		centeredSlides: false,
		grabCursor: true,
		spaceBetween: 8,
	});
		    $(".item_list").on("swipeleft",
    function() {
        $(".item_list").addClass("unselected");
        $(".item_list").removeClass("selected");
        $(this).addClass("selected");
        $(this).removeClass("unselected");
        $(this).find("a.remove").on("click",
        function() {
            var touchId = $(this).parents(".itemlist");
            if (touchId.siblings().length - 1 == 0) {
                touchId.parents(".touch").parents(".shop-group-item").remove();
                TotalPrice()
            }
            TotalPrice();
            touchId.css("border", "0");
            touchId.stop().animate({
                height: "0",
                margin: "0"
            },
            300,
            function() {
                $(this).remove();
                TotalPrice()
            })
        })
    }).on("swiperight",
    function() {
        $(this).parents("#item-list").find(".item_list").addClass("unselected")
    });
    var editflag = 0;
    $('.edit').on('click',function(){
    	$('.check').toggle();
    	if(editflag == 0){
    		$('.deleteCount').show();
    		$(this).text('完成');
    		var count = 0;
    		$('.check').change(function(){
    			if($(this).is(':checked')){
    				count++;
    				$('.everChecked').text(count);
    			}
    			else{
    				if(count <0){
    					count = 0;
    				}
    				count--;
    				$('.everChecked').text(count);
    			}
    		})
    		editflag = 1;
    	}
    	else{
    		$('.deleteCount').hide();
    		$(this).text('编辑');
    		editflag = 0;
    	}
    	
    });
    $('.item_list b').on('click',function(){
    	
    	$(this).siblings('.fruidWrap').toggle();
    });
    $('.item_list b').click();
	});
</script>