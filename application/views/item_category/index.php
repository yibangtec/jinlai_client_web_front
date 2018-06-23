<style>
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
.menu-right{
	padding-bottom: 1.5rem;
}

.menu-right::-webkit-scrollbar{width:0;height:0}
.menu-left::-webkit-scrollbar{width:0;height:0}
.menu-left ul li:last-child{
	border-bottom:none;
}
</style>
<div id=content class=container>
	<div class="con">
  <aside>
    <div class="menu-left scrollbar-none bgfff" id="sidebar">
    	<ul>
    	<?php
        foreach ($items as $item):
            if ($item['level'] == 1) echo '<li>'.$item['name'].'</li>';
        endforeach;
        ?>
       </ul>
    </div>
  </aside>
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
					<i class="homeFenlei homeFenlei2"></i>
					<span class="text" style="color: #ff753e;">分类</span>
				</div>
				</a>
				<a href="https://www.517ybang.com/member_biz" target="_self">
				<div class="itemmenulist">
					<i class="homeHuiyuan"></i>
					<span class="text">会员</span>
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
	var num;

	// <?php echo $this->class_name_cn ?>数据
	var items = <?php echo json_encode($items) ?>;
		//生成section
		for(var key in items){
			if(items[key].level == 1)
			{
				if(items[key].url_image_index == null)
				{
					var goodsList = '<section class="menu-right padding-all j-content"><div class="category_pic" style="display:none;"><img src="<?php echo MEDIA_URL ?>item_category/'+items[key].url_image_index+'"></div><div class="category_wrap"></div></section>';
                    $('.con').append(goodsList);

				}
				else
                {
					var goodsList = '<section class="menu-right padding-all j-content""><div class="category_pic"><img src="<?php echo MEDIA_URL ?>item_category/'+items[key].url_image_index+'"></div><div class="category_wrap"></div></section>';
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
            // 2级的parentID = 1级的categoryID
			if (items[key].parent_id == category_id)
			{

                var arr = []
                 arr.push(items[key]);
                 for (var i=0;i<arr.length;i++)
                 {
                 		//console.log( arr[i].name)
                 		var goodsListContent = '<h5><p><i>—  </i>'+items[key].name+'<i>  —</i></p></h5>';
						var html = ''
                 	for (var key in items)
                 	{
                            if (arr[i].category_id == items[key].parent_id)
                            {
								 html += '<li><a href="'+ base_url+'item/detail?id='+items[key].item_id +'"><img src="' + media_url + 'item_category/'+items[key].url_image+'">'+'<span>' +items[key].name +'</span>' +'</a></li>'
                            }
                    }
                    goodsListContent = goodsListContent + '<ul>'+html+'</ul>';
					$('section').eq(num - 1).find('.category_wrap').append(goodsListContent);
                 }
			}
		}
	});

    $('#sidebar li')[0].click();
    $('.menu-left').find('li').last().remove();


    function getScrollTop(){
            $('.menu-right').bind("scroll", function () {  
                var sTop = $(this).scrollTop();  
                var sTop = parseInt(sTop);   
			HostApp.topScrollY(sTop + '');
		
            });  
    }
    getScrollTop();
});
</script>
