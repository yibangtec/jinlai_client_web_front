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

.menu-left,.menu-right{
	position: absolute;
		overflow: auto;
		-webkit-overflow-scrolling: touch !important;
		z-index:1;
	}
body{
background:#f7f7f7;
}
.menu-right:before {  
            content:"";  
            width: 1px;  
            float: left;  
            height: calc(100% + 1px);  
            margin-left: -1px;  
            display: block;  
        }  
.menu-right:after{  
            content:"";  
            width: 100%;  
            clear: both;  
            display: block;  
      }
.menu-left:before {  
            content:"";  
            width: 1px;  
            float: left;  
            height: calc(100% + 1px);  
            margin-left: -1px;  
            display: block;  
        }  
.menu-left:after{  
            content:"";  
            width: 100%;  
            clear: both;  
            display: block;  
      }
.menu-right::-webkit-scrollbar{width:0;height:0}
.menu-left::-webkit-scrollbar{width:0;height:0}
.menu-left{
	border-right:1px solid #ececec;
}
.menu-left ul li:last-child{
	border-bottom:none;
}
</style>
<div id=content class=container>
	<div class="con">
  <aside>
    <div class="menu-left scrollbar-none bgfff" id="sidebar">
    	<ul>
    	<?php foreach ($items as $item): ?>
				<li><?php
					if ($item['level'] == 1) {
			   			 echo $item['name'];
					}else{
						break;
					}?></li>
			<?php endforeach ?>
       </ul>
    </div>
  </aside>
</div>
</div>

<script>
	$(document).ready(function(){
	var num;
	// <?php echo $this->class_name_cn ?>数据
	var items = <?php echo json_encode($items) ?>;
		//生成section

		for(var key in items){
			if(items[key].level == 1){
				if(items[key].url_image_index == null){
					var goodsList = '<section class="menu-right padding-all j-content"><div class="category_pic" style="display:none;"><img src="<?php echo MEDIA_URL ?>item_category/'+items[key].url_image_index+'" /></div><div class="category_wrap"></div></section>';
                    $('.con').append(goodsList);

				}else{
					var goodsList = '<section class="menu-right padding-all j-content""><div class="category_pic"><img src="<?php echo MEDIA_URL ?>item_category/'+items[key].url_image_index+'" /></div><div class="category_wrap"></div></section>';
                    $('.con').append(goodsList);

				}


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
			if(items[key].parent_id == category_id ){//2及的parentID = 1级的categoryID

                var arr = []
                 arr.push(items[key]);
                 for(var i=0;i<arr.length;i++){
                 		console.log( arr[i].name)
                 		var goodsListContent = '<h5><p><i>—  </i>'+items[key].name+'<i>  —</i></p></h5>';
						var html = ''
                 	for(var key in items){
                            if( arr[i].category_id == items[key].parent_id ){

								 html += '<li><a href=https://www.517ybang.com/item/detail?id='+items[key].item_id+'><img src=<?php echo MEDIA_URL ?>item_category/'+items[key].url_image+'>'+'<span>' +items[key].name +'</span>' +'</a></li>'
                                 					console.log(items[key].name)

                             }

                    }

                    goodsListContent = goodsListContent + '<ul>'+html+'<ul>'
					$('section').eq(num - 1).find('.category_wrap').append(goodsListContent);

                 }

			}








		}
	});
			$('#sidebar li')[0].click();
			$('.menu-left').find('li').last().remove();
	})
	
	
</script>
	
<script>


		

</script>