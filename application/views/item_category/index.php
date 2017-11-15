<style>
	/* 宽度在750像素以上的设备 */
	@media only screen and (min-width:751px)
	{

	}
	
	/* 宽度在960像素以上的设备 */
	@media only screen and (min-width:961px)
	{

	}

	/* 宽度在1280像素以上的设备 */
	@media only screen and (min-width:1281px)
	{

	}
	body{
		background: #f7f7f7;
	}
</style>
<div id=content class=container>
	<div class="con">
  <aside>
    <div class="menu-left scrollbar-none" id="sidebar">
    	<ul>
    	<?php foreach ($items as $item): ?>
				<li>
					<?php 
					if ($item['parent_id'] == null) {
			   			 echo $item['name'];
					}	
					else{
						break;
					}
					?>
				</li>
			<?php endforeach ?>
       </ul>
    </div>
  </aside>
</div>
</div>

<script>
	var num;
	// <?php echo $this->class_name_cn ?>数据
	var items = <?php echo json_encode($items) ?>;
		//生成section
		for(var key in items){
			if(items[key].parent_id == null){
			var goodsList = '<section class="menu-right padding-all j-content" style="background:#fff"><div class="category_pic"><img src="<?php echo CDN_URL ?>media/pangxielogo.png" /></div><div class="category_wrap"></div></section>';
			$('.con').append(goodsList);
			}
		}
	$('#sidebar li').click(function(){
			$('section').eq(num - 1).scrollTop(0);
			$('section').eq(num - 1).find('.category_wrap').html(' ');
			num = $(this).index() + 1;
			$(this).addClass('active').siblings('li').removeClass('active');
			$('.j-content').eq(num - 1).show().siblings('.j-content').hide();
			//获取点击li后的商品分类总id
			var category_id = items[num - 1].category_id;
		for(var key in items){
			if(items[key].parent_id == category_id){
			var goodsListContent = '<h5><p><i>—  </i>'+items[key].name+'<i>  —</i></p></h5><ul><li class="w-3"><a href="#"></a> <img src="<?php echo CDN_URL ?>media/pangxie.png" /><span>螃蟹</span></li><li class="w-3"><a href="#"></a> <img src="<?php echo CDN_URL ?>media/yu.png" /><span>花蛤</span></li><li class="w-3"><a href="#"></a> <img src="<?php echo CDN_URL ?>media/haishen.png" /><span>娃娃鱼</span></li><li class="w-3"><a href="#"></a> <img src="<?php echo CDN_URL ?>media/yu.png" /><span>螃蟹</span></li><li class="w-3"><a href="#"></a> <img src="<?php echo CDN_URL ?>media/pangxie.png" /><span>花蛤</span></li></ul></div>';
				$('section').eq(num - 1).find('.category_wrap').append(goodsListContent);
				}
		}
	});
	$('#sidebar li').eq(0).click();
</script>
	
<script>


		

</script>