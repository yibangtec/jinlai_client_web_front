    <script src="<?php echo CDN_URL ?>js/rem.js"></script>
    <script src="<?php echo CDN_URL ?>js/indexBiz.js"></script>
    <script src="https://cdn-remote.517ybang.com/js/js.cookie.js"></script>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/reset.css">
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/base.css">
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css">
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/indexBiz.css">
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/dropload.css">
    <style>
        body{
            background-color: #f0f0f0;position: relative;
        }
        a{
            text-decoration: none;

        }
        .service-text{padding-top:0.1rem;}
        .itemContent{
        margin-bottom:1rem;}
        #end{

		    position: fixed;
	
	    display: block;
	
	    width: 10px;
	
	    height: 10px;
	
	    top: 0px;
	
	    left: 6.7rem;

}
#itemCategoryBiz{
    overflow: scroll;
}
.itemContent{
	display: block;
	position: relative;
}
#listItem{
	position: relative;
}
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

    </style>
	<i id="end" style="left: 85%;"></i>
    <div class="thisList">
        <ul class="menuSearchList menuListActive">
            <li>
                <a title="首页" href="<?php echo base_url() ?>">
                    <i class="icon-shouye_xiala"></i><span>首页</span>
                </a>
            </li>
            <li>
                <a title="个人中心" href="<?php echo base_url('mine') ?>">
                    <i class="icon-wode-2"></i><span>我的</span>
                </a>
            </li>
            <i class="iconSanjiao"></i>
        </ul>
    </div>
    <div class="thisFilter">
        <ul class="filterList">
                <h2 class="typeTitle">价格区间(元)</h2>
                <div class="priceInterval clearfix">
                    <input id="minPrice" class="minPrice" type="text" placeholder="最低价"/>
                    <span class="priceLine"></span>
                    <input id="maxPrice" class="maxPrice" type="text" placeholder="最高价"/>
                </div>
                <h2 class="typeTitle">类别</h2>
                <ul style="margin-left: 0.1rem" class="clearfix" id="itemCategoryBiz">
                </ul>
                <h2 class="typeTitle">活动商品</h2>
                <ul style="margin-left: 0.1rem" class="clearfix" id="promotionBiz">
                </ul>
        </ul>
        <div class="filterBottom">
            <div id="filterReset" class="filterReset">重置</div>
            <div id="filterSubmit" class="filterSubmit">提交</div>
        </div>
    </div>
    <div id='content' class='content' style="padding-bottom: 1rem;">
        <div style="width:100%;height:1.9rem;position: fixed;top:0;z-index:1000">
        <div class="headerSearch">
            <i class="icon-Back"></i>
            <div class="searchInput">
                <i class="icon-srech_hui"></i>
                <input id="searchItem" class="searchItem" type="text" placeholder="请输入"/>
            </div>
            <a class="searchCar" href="<?php echo base_url('cart') ?>"><i class="icon-gouwuche-2"></i></a>
            <div style="position: relative">
                <ul class="menuSearch">
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>

        </div>
        <div class="navigationTab">
            <div class="navigationCategory">
                <ul>
                    <li data-id="orderList" class="order-tab tabActive" id="qZh">综合</li>
                    <li data-id="orderList1" class="order-tab">销量</li>
                    <li data-id="orderList2" class="order-tab">新品</li>
                    <li data-id="orderList3" class="order-tab NewPrice">价格<i class="shang-sanjiao"></i><i class="xia-sanjiao"></i></li>
                </ul>
            </div>
            <div class="filter">
                <i id="filter" class="icon-shaixuan"></i>
            </div>
        </div>
        </div>
        <div class="itemContent" id="itemContent">
           <ul class="clearfix" id="listItem">


           </ul>
           <span class="bottomline" style="padding-top: .5rem;display: none;position: absolute;font-size:.26rem;color: #999;width:80%;left:50%;margin-left:-40%;text-align: center;">努力加载中...</span>
 
        </div>
        <!--<div class="itemContent" id="itemContentXL">
           <ul class="clearfix" id="listItemXL">


           </ul>
        </div>
        <div class="itemContent" id="itemContentXP">
            <ul class="clearfix" id="listItemXP">


            </ul>
        </div>
        <div class="itemContent" id="itemContentJG">
            <ul class="clearfix" id="listItemJG">


            </ul>
        </div>
        <div class="itemContent" id="itemContentSearch">
                    <ul class="clearfix" id="listItemSearch">


                    </ul>
        </div>-->
        <div class="bottomNav">
            <a class="service">
                <i class="icon-kefu_icon"></i>
                <p class="service-text">客服</p>
            </a>
            <div class="collection">
                <i class="icon-guanzhu_bk"></i>
                <p class="service-text yiguanzhu">已关注</p>
            </div>
            <a href="<?php echo base_url('item_category_biz/index?biz_id='.$this->input->get_post('biz_id')) ?>" class="babyCategory">
                宝贝分类
            </a>

        </div>
    </div>
    <div class="load-more" style="margin: 0.2rem;text-align: center;font-size: 0.3rem;color: #3E3A39;display:none;" id="load-more">点击加载更多</div>


    <script>
    	var oneClick;
    	var oneZh = 0;
    	function getQueryString(name) {
		    var reg = new RegExp('(^|&)' + name + '=([^&]*)(&|$)', 'i');
		    var r = window.location.search.substr(1).match(reg);
		    if (r != null) {
		        return unescape(r[2]);
		    }
		    return null;
		}
		var category_id = getQueryString('category_id');
        $(function(){
        var status = '综合';
		//getMore();
		 var searchHistory = '<div class="itemListWrap" style="font-size: .26rem;color:#3e3a39;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;position: absolute;left: .57rem;top: .2rem;background: #fff;float: left;width: 1.5rem;height: .5rem;border-radius: .35rem;text-align: center;line-height: .5rem;"><span class="itemDeletList" style="position:absolute;right:.2rem;top:.0rem">x</span>'+Cookies.get('SearchIndexList')+'</div>';
            				   $('.searchInput').children('.itemListWrap').remove();
            				   if(!Cookies.get('SearchIndexList') == ''){
            				     	$('.searchInput').append(searchHistory);
            				     	}
            				   
            				     $('.itemDeletList').click(function(){
            				     	$('#searchItem').focus();
            				     	$(this).parents('.itemListWrap').remove();
            				     	Cookies.set('SearchIndexList', '', { expires: 9999, path: '' });
            				     	
            				     })

            var bizID = getQueryString('biz_id');
            //console.log(bizID);
            // 商品列表API路径
            var api_url  = '<?php echo $this->class_name.'/index' ?>';
            var page_item_detail = base_url + 'item/detail?id=';
            //console.log(ajax_root + 'fav_biz/index');
            //console.log(page_item_detail);
            var userID = user_id;
            api_url = ajax_root + api_url;
            $.ajax({
                url : ajax_root + 'fav_biz/index',
                data : {app_type:'client',user_id:userID,biz_id:bizID},
                success : function(res){
                    console.log(res);
                    for (var i = 0;i < res.content.length;i++) {
                        if(res.content[i].biz_id == bizID){
                            $('.yiguanzhu').text('已关注');
                            $('.collection').css('color','#ff5171');
                        }else{
                            $('.yiguanzhu').text('关注');
                            $('.collection').css('color','#3e3a39');
                        }

                    }
                }
            });
            $('.collection').on('click',function(){
                 if($('.yiguanzhu').text() == '已关注'){
                     var cancelfocus = confirm('您确定要取消收藏此店铺吗?');
                     if(cancelfocus){
                         $.ajax({
                             type: 'post',
                             dataType: 'json',
                             url : ajax_root + 'fav_biz/edit_bulk',
                             data : {app_type:'client',user_id:userID,ids:bizID,operation:'delete'},
                             success : function(res){
                                $('.yiguanzhu').text('关注');
                                $('.collection').css('color','#3E3A39');
                            }
                        });
                     }
                     else{

                     }

                 }
                 else{
                     $.ajax({
                        url : ajax_root + 'fav_biz/create',
                        data : {app_type:'client',user_id:userID,biz_id : bizID},
                        success : function(res){
                            $('.yiguanzhu').text('已关注');
                            $('.collection').css('color','#ff5171');
                        }
                    });
                 }
            });

			            //点击li后触发的方法
		 var page = 0, //分页码
		    off_on = false,//分页开关(滚动加载方法 1 中用的)
	     	timers = null,
	     	priceflag = 0;
	     	var categary = category_id;
	     	var sStatus; 
            var min = '';
            var max = '';
       $(".navigationCategory li").on('click',function(){
       	$('.shang-sanjiao').css('color','#9fa0a0');
       	$('.xia-sanjiao').css('color','#9fa0a0');
       	$(this).addClass('tabActive').siblings('li').removeClass('tabActive');
       	$('#listItem').html('');
 		$('.navigationCategory').scrollTop(0);
 		$('.bottomline').css('display','block');
 		sStatus = $(this).text();
		page = 0;
		if($(this).text() == '综合'){
			LoadingDataFn(category_id,page);
		}
		if($(this).text() == '销量'){
			LoadingDataFn(category_id,page,'DESC');
		}
		if($(this).text() == '新品'){
			LoadingDataFn(category_id,page,'','ASC');
		}
		if($(this).text() == '价格'){
			if(priceflag == 0){
				LoadingDataFn(category_id,page,'','','DESC');
				$(this).find('i').eq(0).css('color','#9fa0a0');
				$(this).find('i').eq(1).css('color','#FF3649');
				priceflag = 1;
			}
			else{
				LoadingDataFn(category_id,page,'','','ASC');
			$(this).find('i').eq(0).css('color','#FF3649');
			$(this).find('i').eq(1).css('color','#9fa0a0');
			priceflag = 0;
			}
			
			
		}
		
 });

			//加载更多
			//加载数据
var LoadingDataFn = function(categary,page,xl,xp,jg,jgmin,jgmax) {
    		$.ajax({
			type:"post",
			url:api_url,
			async:false,
			dataType : 'json',
			data : {app_type:'client',orderby_price:jg,category_id:categary,limit:10,offset:page,orderby_sold_overall:xl,orderby_time_publish:xp,price_min:jgmin,price_max:jgmax},
			success : function(res){
				var con = res.content;
				console.log(res);
				if(con.error){
					$('.bottomline').css('display','block');
					$('.bottomline').text('(づ￣3￣)づ╭❤～r人家是有底线的啦~');
					page = 0;
					off_on = true;
					return;
				};
				for (var i = 0;i < con.length;i++) {
					var oLi = '<li class="itemList"><a href="'+page_item_detail+con[i].item_id+'"><img class="itemListImg" src="https://medias.517ybang.com/item/'+con[i].url_image_main+'" alt=""><h2 class="itemSlogan">'+con[i].slogan+'</h2><p class="itemPrice">¥'+con[i].price+'</p></a><div class="carItem"><i class="icon-gouwuche-2"></i></div></li>';
				$('#listItem').append(oLi);
				}
				addCart()
			}
		});
    off_on = true; //[重要]这是使用了 {滚动加载方法1}  时 用到的 ！！！[如果用  滚动加载方法1 时：off_on 在这里不设 true的话， 下次就没法加载了哦！]
};
 $(".navigationCategory li").eq(0).click();
$(window).scroll(function() {
    //当时滚动条离底部60px时开始加载下一页的内容
    if (($(window).height() + $(window).scrollTop() + 60) >= $(document).height()) {
        clearTimeout(timers);
        timers = setTimeout(function() {
            page+=10;
            
            $('.bottomline').css('display','block');
    		$('.bottomline').text('加载中...');
    		if(sStatus == '综合'){
    			LoadingDataFn(categary,page);  //调用执行上面的加载方法
    		}
             if(sStatus == '销量'){
    			LoadingDataFn(category_id,page,'DESC');  //调用执行上面的加载方法
    		}
    			if(sStatus == '价格'){
			if(priceflag == 1){
				LoadingDataFn(category_id,page,'','','DESC');
			}
			else{
				LoadingDataFn(category_id,page,'','','ASC');
			}
		}
            if(sStatus == '筛选'){
                console.log(page);
                 LoadingDataFn(categary,page,'','','',min,max);
            }
        }, 300);
    }
});

            //点击跟多显示下拉菜单
            $('.menuSearch').click(function(){
                $('.thisList').show();
            });
            $('.thisList').click(function(){
                $(this).hide();
            });

            $('#filter').on('click',function(){
                //status = '';
                //$('#listItem').html('');
                listAllOffset = 0;

                $('.thisFilter').show();

                $.ajax({
                     url : ajax_root + 'item_category_biz/index',
                     data : {app_type:'client',biz_id:bizID},
                     success : function(res){
                         var items = res.content;
                         var itemCategoryBizHtml= '';
                         console.log(items);
                         		for(var key in items){
                                 			if(items[key].parent_id == 0 ){   //2及的parentID = 1级的categoryID
                                                itemCategoryBizHtml += '<li id="'+items[key].category_id+'" class="filterTypeList">'+ items[key].name +'</li>';
                                 			}
                                 }
                                 $('#itemCategoryBiz').append(itemCategoryBizHtml);
                                 $('.filterTypeList').on('click',function(){
                                                 $('.filterTypeList').removeClass('filterActive');
                                                 console.log('0000');
                                                 $(this).addClass('filterActive');
                                                 categoryId = $(this).attr('id');
                                                 console.log(categoryId);
                                 });
                     },
                     error:function(e){
                         console.log(e);
                     }
                 });
                 $.ajax({
                     url : ajax_root + 'promotion_biz/index',
                     data : {app_type:'client',biz_id:bizID},
                     success : function(res){
                         var items = res.content;
                         var promotionBizHtml= '';
                         console.log(items);
                         		for(var key in items){
                                      promotionBizHtml += '<li id="'+items[key].promotion_id+'" class="activityList">'+ items[key].name +'</li>';
                                 }
                                 $('#promotionBiz').append(promotionBizHtml);
                                 $('.activityList').on('click',function(){
                                                 $('.activityList').removeClass('filterActive');
                                                 console.log('0000');
                                                 $(this).addClass('filterActive');
                                                 promotionId = $(this).attr('id');
                                                 console.log(promotionId);
                                 });
                     },
                     error:function(e){
                         console.log(e);
                     }
                 });


            });
            $('#filterReset').on('click',function(){
                $('#minPrice').val('');
                $('#maxPrice').val('');
            })

            var categoryId = '';

            var promotionId ='';

            
            $('#filterSubmit').on('click',function(){
            	$('html,body').css('overflow','auto');
                    page = 0;
                  $('#listItem').html('');
                  min = $('#minPrice').val();
                  max = $('#maxPrice').val();
                  $('.thisFilter').hide();
                  sStatus = '筛选';
                  LoadingDataFn(categary,page,'','','',min,max);
                  //$('.itemContent').hide();
                  //$('.itemContent').eq(0).show();


                $('#minPrice').val('');
                $('#maxPrice').val('');
                $('#itemCategoryBiz').html('');
                $('#promotionBiz').html('');

             });
          
           $('.filterList').on('click',function(event){
             event.stopPropagation()

          });
          var curleft=0.57;
            $('#searchItem').keydown(function(event){
                    name = $('#searchItem').val();
            				//event.preventDefault();
            			
            				if(event.which == 13){
                                $('.itemContent').hide();
                                $('.itemContent').eq(4).show();
                                oneClick = 0;
            				    getMoreSearch();

            				   // 生成用户的搜索关键词dom
            				   //首先清空cookie
            				   Cookies.set('SearchIndexList', '', { expires: 9999, path: '' });
            				   Cookies.set('SearchIndexList', $(this).val(), { expires: 9999, path: '' });
            				   
            				   var searchHistory = '<div class="itemListWrap" style="font-size: .26rem;color:#3e3a39;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;position: absolute;left: '+curleft+'rem;top: .2rem;background: #fff;float: left;width: 1.5rem;height: .5rem;border-radius: .35rem;text-align: center;line-height: .5rem;"><span class="itemDeletList" style="position:absolute;right:.2rem;top:.0rem">x</span>'+Cookies.get('SearchIndexList')+'</div>';
            				   $('.searchInput').children('.itemListWrap').remove();
            				    $('.searchInput').append(searchHistory);
            				     $('.itemDeletList').click(function(){
            				     	$('#searchItem').focus();
            				     	$(this).parents('.itemListWrap').remove();
            				     	Cookies.set('SearchIndexList', '', { expires: 9999, path: '' });
            				     })

            				}
            });

        });
        
        function addCart(){
        		//添加购物车
		var offset = $("#end").offset();
		var endLeft = $("#end").css("left");
		$(".carItem").click(function(event){
			//HostApp.alert(user_agent.is_ios);
			var r = $(this).siblings('a').eq(0).attr('href');
			var b = r.substring(r.lastIndexOf('=')+1, r.length);
			oldcar = b;

			var count=1;

			var addCartTime;

			var oldShopList = [];

			var countflag = 0;

			//在微信端

				if(user_agent.is_wechat){

					var addcar = $(this);

					//var user_id = <?php echo $this->session->user_id ?>;
					
					var params = common_params;
					
					if(params.user_id == null){
						window.location.href = 'https://www.517ybang.com/login';
						return;
					}
					$.ajax({

			        url: api_url + 'cart/index',

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

			    //上传接口
				var params = common_params;
				params.name = 'cart_string';
				params.value = shopInfo;
				params.id = params.user_id;
			    $.ajax({
			    	type:"post",
			    	url:"https://api.517ybang.com/cart/sync_up",
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

		});
        }
    </script>
