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
    margin-left: .2rem;
    position: static;
    margin-top: .88rem;
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
		height: 2.2rem;
		background: #f6f6f6;
		position: relative;
		float: left;
    	width: 119% !important;
	}
	#breadcrumb li a{
		color: #3b3b39;
	}
	.item_list img{
		display: block;
		width: 1.8rem;
		height: 1.8rem;
		float: left;
		border-radius: .15rem;
		margin-top: .2rem;
		margin-left: .2rem;
	}
	.item-name{
		font-size: .26rem;
		color: #1a1a1a;
		margin-top: .4rem;
		width: 4.6rem;
		overflow: hidden;
		padding-left: .2rem;
		float: left;
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
    height: 2.2rem;
    line-height: 2.2rem;
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
		<li class="shop favtab active">
			<a href="https://www.517ybang.com/fav_item" style="color: #fe3749;">商品</a>
		</li>
		<li class='biz favtab'>
			<a href="https://www.517ybang.com/fav_biz">店铺</a>
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
		<p>
			<img src="<?php echo CDN_URL ?>media/fav_biz/shoucang-kong@3x.jpg" alt="" class="sc" />
			<span class="nosctext">这里什么都没有哦</span>
			<span class="nosctext">赶快去收藏吧!</span>
		</p>
	</blockquote>

	<?php else: ?>
	<div class="favtabcontent"  style="display: block;">
	<ul id=item-list class=row>
		<?php foreach ($items as $item): ?>

		<div class="radius-wrapp">
		<li class="item_list wid710 auto border20" data-item-id="<?php echo $item[$this->id_name] ?>">
			<input type="checkbox" class="check">
			<a title="<?php echo $item['name'] ?>" data-ids="<?php echo $item[$this->id_name] ?>" href="<?php echo base_url('item/detail?id='.$item['item_id']) ?>">
				<figure class=image-main class="">
					<img title="<?php echo $item['name'] ?>" src="<?php echo $item['url_image_main'] ?>">
				</figure>

				<h2 class=item-name>
					<?php echo $item['name'] ?>
				</h2>

				<div class=digits>
					<span>￥</span><strong><?php echo substr($item['price'], 0, -3).'<small>'.substr($item['price'], -3).'</small>' ?></strong>
					<?php echo ($item['tag_price'] !== '0.00' & $item['tag_price'] > $item['price'])? ' <del>￥'. $item['tag_price']. '</del>': NULL ?>
				</div>

				<?php if ( !empty($skus) ): ?>
				<section class=skus>

					<ul class=row>
						<?php foreach ($skus as $sku): ?>
						<li class="">
							<?php if ( !empty($sku['url_image']) ): ?>
							<figure>
								<img src="<?php echo $sku['url_image'] ?>">
							</figure>
							<?php endif ?>
						</li>
						<?php endforeach ?>
					</ul>

				</section>
				<?php endif ?>
			</a>
			<a class=delete data-op-class=<?php echo $this->class_name ?> data-op-name=delete data-id="<?php echo $item[$this->id_name] ?>"  title="删除" href="<?php echo base_url($this->class_name.'/delete?ids='.$item[$this->id_name]) ?>" target=_blank><i class="fa fa-trash"></i> 删除</a>
		</li>
		</div>
		<?php endforeach ?>

	</ul>
	</div>

	<?php endif ?>
</div>
<script>
	$(document).ready(function(){
	var user_id = <?php echo $this->session->user_id ?>;	
//	if($('.sc').css('display') == 'block'){
//		alert(1);
//		$('.currenttime').css('display','none');
//	}
//	$('.currenttime').css('display','block');
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
    		var checkedEve = [];
    		var checkedString;
    		$('.check').change(function(){
    			if($(this).is(':checked')){
    				count++;
    				$('.everChecked').text(count);
    				checkedEve.push($(this).parents('li').attr('data-item-id'));
    				checkedString = checkedEve.join(',');
    			}
    			else{
    				if(count <0){
    					count = 0;
    				}
    				count--;
    				$('.everChecked').text(count);
    			}
    		});
    		$('.deleteAll').on('click',function(){
    			  //批量删除
			    $.ajax({
						url: "https://api.517ybang.com/fav_item/edit_bulk",
						 type: "post",
			             dataType: 'json',
			             data:{app_type:'client',user_id : user_id,operation:'delete',ids : checkedString},
			            success: function (res) {
			            	window.location.reload();
			            	alert(res.content.message);
			              }
						
					});
    		});
    		editflag = 1;
    	}
    	else{
    		$('.deleteCount').hide();
    		$('.check').prop('checked',false);
    		$('.everChecked').text(0);
    		$(this).text('编辑');
    		editflag = 0;
    	}
    	
    });
  
	});
</script>

