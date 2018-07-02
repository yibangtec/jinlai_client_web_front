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

    </style>

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
    <div id='content' class='content'>
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
        </div>
        <div class="itemContent" id="itemContentXL">
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
        </div>
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
        $(function(){
        var status = '综合';
		getMore();
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
        function getMore(){

                            var page1 = 0;
                             // 每页展示10个
                             var size = 10;
                             $('.lists').html('');
                             $('.dropload-down').remove();
                             // dropload
                              $('#itemContent').dropload({
                                 scrollArea : window,
                                 domUp : {
                                     domClass   : 'dropload-up',
                                     domRefresh : '<div class="dropload-refresh">↓下拉刷新</div>',
                                     domUpdate  : '<div class="dropload-update">↑释放更新</div>',
                                     domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中</div>'
                                 },
                                 domDown : {
                                     domClass   : 'dropload-down',
                                     domRefresh : '<div class="dropload-refresh">↑上拉加载更多</div>',
                                     domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中</div>',
                                     domNoData  : '<div class="dropload-noData">暂无数据</div>'
                                 },
                                 loadUpFn : function(me){

                                 },
                                 loadDownFn : function(me,dataObj){
										
                                     // 拼接HTML
                                        if(oneZh == 0){
                                            	page1 = -10;
                                            	oneZh++;
                                            }
                                            else{
                                            	page1+=10;
                                            }
                                           if(oneClick == 0){
                                            	page1 = 0;
                                            	
                                            	oneClick++;
                                            }
                                         
                                         
                                     var result = '';
                                     console.log('综合page1是' + page1);
                                             $.ajax({
                                                                    url: api_url,
                                                                    data : {app_type:'client',limit:10,offset:page1},
                                                                    success: function(data){

                                                                        var items = data.content;
                                                                        if(items){

                                                                            for(var key in items){
                                                                                var imgUrl = items[key].url_image_main;
                                                                                var reg = RegExp(/http/);
                                                                                if(reg.test(imgUrl) !== true){
                                                                                                  imgUrl = '<?php echo MEDIA_URL ?>'+'item/';
                                                                                             }else{
                                                                                                  imgUrl =''
                                                                                             }
                                                                                    result +=  '<li class="itemList">'+
                                                                                                    '<a href="'+page_item_detail+items[key].item_id+'">'+
                                                                                                        '<img class="itemListImg" src="'+imgUrl+ items[key].url_image_main+'" alt="">'+
                                                                                                        '<h2 class="itemSlogan">'+items[key].slogan+'</h2>'+
                                                                                                        '<p class="itemPrice">¥'+items[key].price+'</p>'+
                                                                                                    '</a>'+
                                                                                                    '<div class="carItem">'+
                                                                                                        '<i class="icon-gouwuche-2"></i>'+
                                                                                                    '</div>'+
                                                                                                '</li>';
                                                                            }
                                                                            $('#listItem').append(result);
                                                                        // 如果没有数据
                                                                        }else{
                                                                            // 锁定
                                                                            me.lock();
                                                                            // 无数据
                                                                            me.noData();
                                                                        }
                                                                        // 为了测试，延迟1秒加载
                                                                        setTimeout(function(){
                                                                            // 插入数据到页面，放到最后面
                                                                            $('.lists').append(result);
                                                                            // 每次数据插入，必须重置
                                                                            me.resetload();
                                                                        },1000);
                                                                    },
                                                                    error: function(xhr, type){
                                                                        console.log('Ajax error!');
                                                                        // 即使加载出错，也得重置
                                                                        me.resetload();
                                                                    }
                                                                });

                                        //销量


                                 },
                                 threshold : 10
                             });
        }

        function getMoreXl(){

                                    var page1 = 0;
                                    // 每页展示10个
                                    var size = 10;
                                    $('.lists').html('');
                                    $('.dropload-down').remove();
                                    // dropload
                                     $('#itemContentXL').dropload({
                                        scrollArea : window,
                                        domUp : {
                                            domClass   : 'dropload-up',
                                            domRefresh : '<div class="dropload-refresh">↓下拉刷新</div>',
                                            domUpdate  : '<div class="dropload-update">↑释放更新</div>',
                                            domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中</div>'
                                        },
                                        domDown : {
                                            domClass   : 'dropload-down',
                                            domRefresh : '<div class="dropload-refresh">↑上拉加载更多</div>',
                                            domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中</div>',
                                            domNoData  : '<div class="dropload-noData">暂无数据</div>'
                                        },
                                        loadUpFn : function(me){
                                        alert('上拉');
                                            $.ajax({
                                                url: api_url,
                                                data : {app_type:'client',limit:10,offset:10},
                                                success: function(data){
                                                    console.log(data);
                                                    var result = '';

                                                    // 为了测试，延迟1秒加载
                                                    setTimeout(function(){
                                                        $('.lists').html(result);
                                                        // 每次数据加载完，必须重置
                                                        me.resetload();
                                                        // 重置页数，重新获取loadDownFn的数据
                                                        page = -1;
                                                        // 解锁loadDownFn里锁定的情况
                                                        me.unlock();
                                                        me.noData(false);
                                                    },1000);
                                                },
                                                error: function(xhr, type){
                                                    console.log('Ajax error!');
                                                    // 即使加载出错，也得重置
                                                    me.resetload();
                                                }
                                            });
                                        },
                                        loadDownFn : function(me,dataObj){

                                            // 拼接HTML
                                            
                                            if(oneClick == 0){
                                            	page1 = 0;
                                            	oneClick++;
                                            }
                                            else{
                                            	page1+=10;
                                            }
                                                
                                            var result = '';
                                          
                                                    $.ajax({
                                                                           url: api_url,
                                                                           data : {app_type:'client',limit:10,offset:page1,orderby_sold_overall:'DESC'},
                                                                           success: function(data){
                                                                           	console.log('page1是' + page1);
                                                                               console.log(data);
                                                                               var items = data.content;
                                                                               if(items){
                                                                                   console.log(items);
                                                                                   for(var key in items){
                                                                                       var imgUrl = items[key].url_image_main;
                                                                                       var reg = RegExp(/http/);
                                                                                       if(reg.test(imgUrl) !== true){
                                                                                                         imgUrl = '<?php echo MEDIA_URL ?>'+'item/';
                                                                                                    }else{
                                                                                                         imgUrl =''
                                                                                                    }
                                                                                           result +=  '<li class="itemList">'+
                                                                                                           '<a href="'+page_item_detail+items[key].item_id+'">'+
                                                                                                               '<img class="itemListImg" src="'+imgUrl+ items[key].url_image_main+'" alt=""/>'+
                                                                                                               '<h2 class="itemSlogan">'+items[key].slogan+'</h2>'+
                                                                                                               '<p class="itemPrice">¥'+items[key].price+'</p>'+
                                                                                                           '</a>'+
                                                                                                           '<div class="carItem">'+
                                                                                                               '<i class="icon-gouwuche-2"></i>'+
                                                                                                           '</div>'+
                                                                                                       '</li>';
                                                                                   }
                                                                                   $('#listItemXL').append(result);
                                                                               // 如果没有数据
                                                                               }else{
                                                                                   // 锁定
                                                                                   me.lock();
                                                                                   // 无数据
                                                                                   me.noData();
                                                                               }
                                                                               // 为了测试，延迟1秒加载
                                                                               setTimeout(function(){
                                                                                   // 插入数据到页面，放到最后面
                                                                                   $('.lists').append(result);
                                                                                   // 每次数据插入，必须重置
                                                                                   me.resetload();
                                                                               },1000);
                                                                           },
                                                                           error: function(xhr, type){
                                                                               console.log('Ajax error!');
                                                                               // 即使加载出错，也得重置
                                                                               me.resetload();
                                                                           }
                                                                       });

                                               //销量


                                        },
                                        threshold : 10
                                    });
        }

        function getMoreXP(){

                                    var page1 = -1;
                                    // 每页展示10个
                                    var size = 10;
                                    $('.lists').html('');
                                    $('.dropload-down').remove();

                                    // dropload
                                    $('#itemContentXP').dropload({
                                        scrollArea : window,
                                        domUp : {
                                            domClass   : 'dropload-up',
                                            domRefresh : '<div class="dropload-refresh">↓下拉刷新</div>',
                                            domUpdate  : '<div class="dropload-update">↑释放更新</div>',
                                            domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中</div>'
                                        },
                                        domDown : {
                                            domClass   : 'dropload-down',
                                            domRefresh : '<div class="dropload-refresh">↑上拉加载更多</div>',
                                            domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中</div>',
                                            domNoData  : '<div class="dropload-noData">暂无数据</div>'
                                        },
                                        loadUpFn : function(me){
                                        alert('上拉');
                                            $.ajax({
                                                url: api_url,
                                                data : {app_type:'client',limit:10,offset:10},
                                                success: function(data){
                                                    console.log(data);
                                                    var result = '';

                                                    // 为了测试，延迟1秒加载
                                                    setTimeout(function(){
                                                        $('.lists').html(result);
                                                        // 每次数据加载完，必须重置
                                                        me.resetload();
                                                        // 重置页数，重新获取loadDownFn的数据
                                                        page = -1;
                                                        // 解锁loadDownFn里锁定的情况
                                                        me.unlock();
                                                        me.noData(false);
                                                    },1000);
                                                },
                                                error: function(xhr, type){
                                                    console.log('Ajax error!');
                                                    // 即使加载出错，也得重置
                                                    me.resetload();
                                                }
                                            });
                                        },
                                        loadDownFn : function(me,dataObj){

                                            // 拼接HTML
                                                if(oneClick == 0){
                                            	page1 = 0;
                                            	oneClick++;
                                            }
                                            else{
                                            	page1+=10;
                                            }
                                            var result = '';

                                                    $.ajax({
                                                                           url: api_url,
                                                                           data : {app_type:'client',limit:10,offset:page1,orderby_time_publish:'DESC'},
                                                                           success: function(data){
                                                                               console.log(data);
                                                                               var items = data.content;
                                                                               if(items.length > 0){
                                                                                   console.log(items);
                                                                                   for(var key in items){
                                                                                       var imgUrl = items[key].url_image_main;
                                                                                       var reg = RegExp(/http/);
                                                                                       if(reg.test(imgUrl) !== true){
                                                                                                         imgUrl = '<?php echo MEDIA_URL ?>'+'item/';
                                                                                                    }else{
                                                                                                         imgUrl =''
                                                                                                    }
                                                                                           result +=  '<li class="itemList">'+
                                                                                                           '<a href="'+page_item_detail+items[key].item_id+'">'+
                                                                                                               '<img class="itemListImg" src="'+imgUrl+ items[key].url_image_main+'" alt=""/>'+
                                                                                                               '<h2 class="itemSlogan">'+items[key].slogan+'</h2>'+
                                                                                                               '<p class="itemPrice">¥'+items[key].price+'</p>'+
                                                                                                           '</a>'+
                                                                                                           '<div class="carItem">'+
                                                                                                               '<i class="icon-gouwuche-2"></i>'+
                                                                                                           '</div>'+
                                                                                                       '</li>';
                                                                                   }
                                                                                   $('#listItemXP').append(result);
                                                                               // 如果没有数据
                                                                               }else{
                                                                                   // 锁定
                                                                                   me.lock();
                                                                                   // 无数据
                                                                                   me.noData();
                                                                               }
                                                                               // 为了测试，延迟1秒加载
                                                                               setTimeout(function(){
                                                                                   // 插入数据到页面，放到最后面
                                                                                   $('.lists').append(result);
                                                                                   // 每次数据插入，必须重置
                                                                                   me.resetload();
                                                                               },1000);
                                                                           },
                                                                           error: function(xhr, type){
                                                                               console.log('Ajax error!');
                                                                               // 即使加载出错，也得重置
                                                                               me.resetload();
                                                                           }
                                                                       });



                                        },
                                        threshold : 10
                                    });
                }

    function getMoreJGS(){

                                        var page1 = -1;
                                        // 每页展示10个
                                        var size = 10;
                                        $('.lists').html('');
                                        $('.dropload-down').remove();

                                        // dropload
                                        $('#itemContentJG').dropload({
                                            scrollArea : window,
                                            domUp : {
                                                domClass   : 'dropload-up',
                                                domRefresh : '<div class="dropload-refresh">↓下拉刷新</div>',
                                                domUpdate  : '<div class="dropload-update">↑释放更新</div>',
                                                domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中</div>'
                                            },
                                            domDown : {
                                                domClass   : 'dropload-down',
                                                domRefresh : '<div class="dropload-refresh">↑上拉加载更多</div>',
                                                domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中</div>',
                                                domNoData  : '<div class="dropload-noData">暂无数据</div>'
                                            },
                                            loadUpFn : function(me){
                                            alert('上拉');
                                                $.ajax({
                                                    url: api_url,
                                                    data : {app_type:'client',limit:10,offset:10,},
                                                    success: function(data){
                                                        console.log(data);
                                                        var result = '';

                                                        // 为了测试，延迟1秒加载
                                                        setTimeout(function(){
                                                            $('.lists').html(result);
                                                            // 每次数据加载完，必须重置
                                                            me.resetload();
                                                            // 重置页数，重新获取loadDownFn的数据
                                                            page = -1;
                                                            // 解锁loadDownFn里锁定的情况
                                                            me.unlock();
                                                            me.noData(false);
                                                        },1000);
                                                    },
                                                    error: function(xhr, type){
                                                        console.log('Ajax error!');
                                                        // 即使加载出错，也得重置
                                                        me.resetload();
                                                    }
                                                });
                                            },
                                            loadDownFn : function(me,dataObj){

                                                // 拼接HTML
                                                    if(oneClick == 0){
                                            	page1 = 0;
                                            	oneClick++;
                                            }
                                            else{
                                            	page1+=10;
                                            }
                                                var result = '';
                                                        $.ajax({
                                                                               url: api_url,
                                                                               data : {app_type:'client',limit:10,offset:page1,orderby_price:'ASC'},
                                                                               success: function(data){
                                                                                   console.log(data);
                                                                                   var items = data.content;
                                                                                   if(items.length > 0){
                                                                                       console.log(items);
                                                                                       for(var key in items){
                                                                                           var imgUrl = items[key].url_image_main;
                                                                                           var reg = RegExp(/http/);
                                                                                           if(reg.test(imgUrl) !== true){
                                                                                                             imgUrl = '<?php echo MEDIA_URL ?>'+'item/';
                                                                                                        }else{
                                                                                                             imgUrl =''
                                                                                                        }
                                                                                               result +=  '<li class="itemList">'+
                                                                                                               '<a href="'+page_item_detail+items[key].item_id+'">'+
                                                                                                                   '<img class="itemListImg" src="'+imgUrl+ items[key].url_image_main+'" alt=""/>'+
                                                                                                                   '<h2 class="itemSlogan">'+items[key].slogan+'</h2>'+
                                                                                                                   '<p class="itemPrice">¥'+items[key].price+'</p>'+
                                                                                                               '</a>'+
                                                                                                               '<div class="carItem">'+
                                                                                                                   '<i class="icon-gouwuche-2"></i>'+
                                                                                                               '</div>'+
                                                                                                           '</li>';
                                                                                       }
                                                                                       $('#listItemJG').append(result);
                                                                                   // 如果没有数据
                                                                                   }else{
                                                                                       // 锁定
                                                                                       me.lock();
                                                                                       // 无数据
                                                                                       me.noData();
                                                                                   }
                                                                                   // 为了测试，延迟1秒加载
                                                                                   setTimeout(function(){
                                                                                       // 插入数据到页面，放到最后面
                                                                                       $('.lists').append(result);
                                                                                       // 每次数据插入，必须重置
                                                                                       me.resetload();
                                                                                   },1000);
                                                                               },
                                                                               error: function(xhr, type){
                                                                                   console.log('Ajax error!');
                                                                                   // 即使加载出错，也得重置
                                                                                   me.resetload();
                                                                               }
                                                                           });

                                                   //销量


                                            },
                                            threshold : 10
                                        });
                    }
    function getMoreJGJ(){

                                            var page1 = -1;
                                            // 每页展示10个
                                            var size = 10;
                                            $('.lists').html('');
                                            $('.dropload-down').remove();
                                            // dropload
                                            $('#itemContentJG').dropload({
                                                scrollArea : window,
                                                domUp : {
                                                    domClass   : 'dropload-up',
                                                    domRefresh : '<div class="dropload-refresh">↓下拉刷新</div>',
                                                    domUpdate  : '<div class="dropload-update">↑释放更新</div>',
                                                    domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中</div>'
                                                },
                                                domDown : {
                                                    domClass   : 'dropload-down',
                                                    domRefresh : '<div class="dropload-refresh">↑上拉加载更多</div>',
                                                    domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中</div>',
                                                    domNoData  : '<div class="dropload-noData">暂无数据</div>'
                                                },
                                                loadUpFn : function(me){
                                                alert('上拉');
                                                    $.ajax({
                                                        url: api_url,
                                                        data : {app_type:'client',limit:10,offset:10},
                                                        success: function(data){
                                                            console.log(data);
                                                            var result = '';

                                                            // 为了测试，延迟1秒加载
                                                            setTimeout(function(){
                                                                $('.lists').html(result);
                                                                // 每次数据加载完，必须重置
                                                                me.resetload();
                                                                // 重置页数，重新获取loadDownFn的数据
                                                                page = -1;
                                                                // 解锁loadDownFn里锁定的情况
                                                                me.unlock();
                                                                me.noData(false);
                                                            },1000);
                                                        },
                                                        error: function(xhr, type){
                                                            console.log('Ajax error!');
                                                            // 即使加载出错，也得重置
                                                            me.resetload();
                                                        }
                                                    });
                                                },
                                                loadDownFn : function(me,dataObj){

                                                    // 拼接HTML
                                                     if(oneClick == 0){
                                            	page1 = 0;
                                            	oneClick++;
                                            }
                                            else{
                                            	page1+=10;
                                            }
                                                    var result = '';
                                                            $.ajax({
                                                                                   url: api_url,
                                                                                   data : {app_type:'client',limit:10,offset:page1,orderby_price:'DESC',},
                                                                                   success: function(data){
                                                                                       console.log(data);
                                                                                       var items = data.content;
                                                                                       if(items.length > 0){
                                                                                           console.log(items);
                                                                                           for(var key in items){
                                                                                               var imgUrl = items[key].url_image_main;
                                                                                               var reg = RegExp(/http/);
                                                                                               if(reg.test(imgUrl) !== true){
                                                                                                                 imgUrl = '<?php echo MEDIA_URL ?>'+'item/';
                                                                                                            }else{
                                                                                                                 imgUrl ='';
                                                                                                            }
                                                                                                   result +=  '<li class="itemList">'+
                                                                                                                   '<a href="'+page_item_detail+items[key].item_id+'">'+
                                                                                                                       '<img class="itemListImg" src="'+imgUrl+ items[key].url_image_main+'" alt=""/>'+
                                                                                                                       '<h2 class="itemSlogan">'+items[key].slogan+'</h2>'+
                                                                                                                       '<p class="itemPrice">¥'+items[key].price+'</p>'+
                                                                                                                   '</a>'+
                                                                                                                   '<div class="carItem">'+
                                                                                                                       '<i class="icon-gouwuche-2"></i>'+
                                                                                                                   '</div>'+
                                                                                                               '</li>';
                                                                                           }
                                                                                           $('#listItemJG').append(result);
                                                                                       // 如果没有数据
                                                                                       }else{
                                                                                           // 锁定
                                                                                           me.lock();
                                                                                           // 无数据
                                                                                           me.noData();
                                                                                       }
                                                                                       // 为了测试，延迟1秒加载
                                                                                       setTimeout(function(){
                                                                                           // 插入数据到页面，放到最后面
                                                                                           $('.lists').append(result);
                                                                                           // 每次数据插入，必须重置
                                                                                           me.resetload();
                                                                                       },1000);
                                                                                   },
                                                                                   error: function(xhr, type){
                                                                                       console.log('Ajax error!');
                                                                                       // 即使加载出错，也得重置
                                                                                       me.resetload();
                                                                                   }
                                                                               });

                                                       //销量


                                                },
                                                threshold : 10
                                            });
                        }


    function getMoreSX(){

            var page1 = -1;
            // 每页展示10个
            var size = 10;
            $('.lists').html('');
            $('.dropload-down').remove();

            // dropload
            $('#itemContent').dropload({
                scrollArea : window,
                domUp : {
                    domClass   : 'dropload-up',
                    domRefresh : '<div class="dropload-refresh">↓下拉刷新</div>',
                    domUpdate  : '<div class="dropload-update">↑释放更新</div>',
                    domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中</div>'
                },
                domDown : {
                    domClass   : 'dropload-down',
                    domRefresh : '<div class="dropload-refresh">↑上拉加载更多</div>',
                    domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中</div>',
                    domNoData  : '<div class="dropload-noData">暂无数据</div>'
                },
                loadUpFn : function(me){

                },
                loadDownFn : function(me,dataObj){

                    // 拼接HTML
                        page1++;
                    var result = '';
                            $.ajax({
                                 url: api_url,
                                 data : {app_type:'client',limit:10,offset:page1,price_min:min,price_max:max,category_biz_id:categoryId,promotion_id:promotionId},
                                 success: function(data){
                                     console.log(data);
                                     var items = data.content;
                                     if(items.length > 0){
                                         console.log(items);
                                         for(var key in items){
                                             var imgUrl = items[key].url_image_main;
                                             var reg = RegExp(/http/);
                                             if(reg.test(imgUrl) !== true){
                                             imgUrl = '<?php echo MEDIA_URL ?>'+'item/';
                                                                        }else{
                                                                             imgUrl =''
                                                                        }
                                                               result +=  '<li class="itemList">'+
                                                                               '<a href="'+page_item_detail+items[key].item_id+'">'+
                                                                                   '<img class="itemListImg" src="'+imgUrl+ items[key].url_image_main+'" alt=""/>'+
                                                                                   '<h2 class="itemSlogan">'+items[key].slogan+'</h2>'+
                                                                                   '<p class="itemPrice">¥'+items[key].price+'</p>'+
                                                                               '</a>'+
                                                                               '<div class="carItem">'+
                                                                                   '<i class="icon-gouwuche-2"></i>'+
                                                                               '</div>'+
                                                                           '</li>';
                                                       }
                                                       $('#listItem').append(result);
                                                   // 如果没有数据
                                             }else{
                                                 // 锁定
                                                 me.lock();
                                                 // 无数据
                                                 me.noData();
                                             }
                                             // 为了测试，延迟1秒加载
                                             setTimeout(function(){
                                             // 插入数据到页面，放到最后面
                                                               $('.lists').append(result);
                                                               // 每次数据插入，必须重置
                                                               me.resetload();
                                                           },1000);
                                                       },
                                                       error: function(xhr, type){
                                                           console.log('Ajax error!');
                                                           // 即使加载出错，也得重置
                                                           me.resetload();
                                                       }
                                             });

                                                 //销量


                                 },
                                 threshold : 10
                            });
     }
     function getMoreSearch(){
                var page1 = -1;
                 // 每页展示10个
                 var size = 10;
                 $('.lists').html('');
                 $('.dropload-down').remove();

                 // dropload
                 $('#itemContentSearch').dropload({
                     scrollArea : window,
                     domUp : {
                         domClass   : 'dropload-up',
                         domRefresh : '<div class="dropload-refresh">↓下拉刷新</div>',
                         domUpdate  : '<div class="dropload-update">↑释放更新</div>',
                         domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中</div>'
                     },
                     domDown : {
                         domClass   : 'dropload-down',
                         domRefresh : '<div class="dropload-refresh">↑上拉加载更多</div>',
                         domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中</div>',
                         domNoData  : '<div class="dropload-noData">暂无数据</div>'
                     },
                     loadUpFn : function(me){

                     },
                     loadDownFn : function(me,dataObj){
                         // 拼接HTML
                                   if(oneClick == 0){
                                            	page1 = 0;
                                            	oneClick++;
                                            }
                                            else{
                                            	page1+=10;
                                            }
                         var result = '';
                                 $.ajax({
                                      url: api_url,
                                      data : {app_type:'client',limit:10,offset:page1,name:name},
                                      success: function(data){
                                          console.log('搜索');
                                          var items = data.content;
                                          if(items.length > 0){
                                              console.log(items);
                                              for(var key in items){
                                                  var imgUrl = items[key].url_image_main;
                                                  var reg = RegExp(/http/);
                                                  if(reg.test(imgUrl) !== true){
                                                  imgUrl = '<?php echo MEDIA_URL ?>'+'item/';
                                                                             }else{
                                                                                  imgUrl =''
                                                                             }
                                                                    result +=  '<li class="itemList">'+
                                                                                    '<a href="'+page_item_detail+items[key].item_id+'">'+
                                                                                        '<img class="itemListImg" src="'+imgUrl+ items[key].url_image_main+'" alt=""/>'+
                                                                                        '<h2 class="itemSlogan">'+items[key].slogan+'</h2>'+
                                                                                        '<p class="itemPrice">¥'+items[key].price+'</p>'+
                                                                                    '</a>'+
                                                                                    '<div class="carItem">'+
                                                                                        '<i class="icon-gouwuche-2"></i>'+
                                                                                    '</div>'+
                                                                                '</li>';
                                                            }
                                                            $('#listItemSearch').append(result);
                                                        // 如果没有数据
                                                  }else{
                                                      // 锁定
                                                      me.lock();
                                                      // 无数据
                                                      me.noData();
                                                  }
                                                  // 为了测试，延迟1秒加载
                                                  setTimeout(function(){
                                                  // 插入数据到页面，放到最后面
                                                                    $('.lists').append(result);
                                                                    // 每次数据插入，必须重置
                                                                    me.resetload();
                                                                },1000);
                                                            },
                                                            error: function(xhr, type){
                                                                console.log('Ajax error!');
                                                                // 即使加载出错，也得重置
                                                                me.resetload();
                                                            }
                                                  });

                                                      //销量


                                      },
                                      threshold : 10
                                 });
     }
    $('.itemContent').hide();
    $('.itemContent').eq(0).show();
    
            function getQueryString(name) {
                    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
                    var r = window.location.search.substr(1).match(reg);
                    if (r != null) return unescape(r[2]);
                    return null;
            }
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
            /*$.ajax({
                url : api_url,
                type: 'post',
                dataType: 'json',
                data : {app_type:'client',limit:10,biz_id:bizID,},
                success : function(res){
                    var listHtml = '';
                    var items = res.content;
                    console.log(items);
                    for(var key in items){
                        var imgUrl = items[key].url_image_main;
                        var reg = RegExp(/http/);
                        if(reg.test(imgUrl) !== true){
                                          imgUrl = media_url + 'item/';
                                     }else{
                                          imgUrl =''
                                     }
                            listHtml +=  '<li class="itemList">'+
                                            '<a href="'+page_item_detail+items[key].item_id+'">'+
                                                '<img class="itemListImg" src="'+imgUrl+ items[key].url_image_main+'" alt=""/>'+
                                                '<h2 class="itemSlogan">'+items[key].slogan+'</h2>'+
                                                '<p class="itemPrice">¥'+items[key].price+'</p>'+
                                            '</a>'+
                                            '<div class="carItem">'+
                                                '<i class="icon-gouwuche-2"></i>'+
                                            '</div>'+
                                        '</li>';
                    }
                    $('#listItem').append(listHtml);
                },
                error:function(e){
                    console.log(e);
                }
            });*/

            var cont = 0;
            $('.order-tab').click(function () {

                        var index = $('.order-tab').index($(this));
                        console.log($(this).is(".tabActive"));
                        statusType = $(this).attr('data-id');
                        if($(this).is(".tabActive") == true && statusType !== 'orderList3'){
                             return false;
                        }
                        $(this).addClass("tabActive").siblings().removeClass('tabActive');
                        //$('.order-all').eq(index).show(200).siblings('.order-all').hide();
                        console.log(index);
                        $('.itemContent').hide();
                        $('.itemContent').eq(index).show();

                        if(statusType == 'orderList'){
                           status = '综合';
                           $('.shang-sanjiao').css('color','#9fa0a0');
                           $('.xia-sanjiao').css('color','#9fa0a0');
                           $('#listItem').html('');
                           oneClick = 0;
                           getMore();
                           

                        }else if(statusType == 'orderList1'){
                            status = '销量';
                            oneClick = 0;
                            $('.shang-sanjiao').css('color','#9fa0a0');
                            $('.xia-sanjiao').css('color','#9fa0a0');
                            $('#listItemXl').html('');
                            getMoreXl();

                        }else if(statusType == 'orderList2'){
                            status = '新品';
                            $('.shang-sanjiao').css('color','#9fa0a0');
                            $('.xia-sanjiao').css('color','#9fa0a0');
                            $('#listItem').html('');
                            oneClick = 0;
                            getMoreXP();
                            

                        }else if(statusType == 'orderList3'){
                            cont = cont + 1;
                            console.log(cont);
                            if(cont%2 == 0){
                                status = '价格升序';
                                $('.shang-sanjiao').css('color','#ff3649');
                                $('.xia-sanjiao').css('color','#9fa0a0');
                                $('#listItemJG').html('');
                                oneClick = 0;
                                getMoreJGS();
                                page=-1;

                            }else{
                                status = '价格降序';
                                $('.xia-sanjiao').css('color','#ff3649');
                                $('.shang-sanjiao').css('color','#9fa0a0');
                                $('#listItemJG').html('');
                                oneClick = 0;
                                getMoreJGJ();
                                page=-1;

                            }

                        }
                        //load_more(10, listAllOffset, api_url, status);

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

            var min = '';
            var max = ''
            $('#filterSubmit').on('click',function(){
            	$('html,body').css('overflow','auto');
                  $('#listItem').html('');
                  min = $('#minPrice').val();
                  max = $('#maxPrice').val();
                  $('.thisFilter').hide();
                  $('.itemContent').hide();
                  $('.itemContent').eq(0).show();
                  getMoreSX();


                $('#minPrice').val('');
                $('#maxPrice').val('');
                $('#itemCategoryBiz').html('');
                $('#promotionBiz').html('');

             });
            var name ='';
            $('.thisFilter').on('click',function(){
                if(status=='综合'){
                  $('.itemContent').hide();
                  $('.itemContent').eq(0).show();
                }else if(status=='销量'){
                    $('.itemContent').hide();
                    $('.itemContent').eq(1).show();
                }else if(status=='新品'){
                    $('.itemContent').hide();
                    $('.itemContent').eq(2).show();
                }else if(status=='价格升序'){
                    $('.itemContent').hide();
                    $('.itemContent').eq(3).show();
                    $('.shang-sanjiao').css('color','#ff3649');
                    $('.xia-sanjiao').css('color','#9fa0a0');
                }else if(status=='价格降序'){
                    $('.itemContent').hide();
                    $('.itemContent').eq(3).show();
                    $('.xia-sanjiao').css('color','#ff3649');
                    $('.shang-sanjiao').css('color','#9fa0a0');
                }
                $('#minPrice').val('');
                $('#maxPrice').val('');
                $('#itemCategoryBiz').html('');
                $('#promotionBiz').html('');
                $('.thisFilter').hide();
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
            /*function refresh(refresh,loadmore) {
                                $(window).scroll(function(){
                                    console.log('正在滑动f');
                                    $('.load-more').show();
                                    var scrollTop = $(this).scrollTop();    //滚动条距离顶部的高度
                                    var scrollHeight = $(document).height();   //当前页面的总高度
                                    var clientHeight = $(this).height();    //当前可视的页面高度
                                    // console.log("top:"+scrollTop+",doc:"+scrollHeight+",client:"+clientHeight);
                                    if(scrollTop + clientHeight >= scrollHeight){   //距离顶部+当前高度 >=文档总高度 即代表滑动到底部 count++;         //每次滑动count加1
                                        // filterData(serviceTypeId,industryId,cityId,count); //调用筛选方法，count为当前分页数

                                        console.log('下拉');

                                        if(load_more){
                                            listAllOffset = listAllOffset + 10;
                                            console.log(min);
                                            console.log(max);
                                            console.log(promotionId);
                                            console.log(categoryId);
                                            console.log(name);
                                            console.log(listAllOffset)
                                            load_more(10, listAllOffset, api_url, status, min, max, categoryId, promotionId, name);
                                            $('.load-more').hide();
                                        }
                                    }else if(scrollTop<=0){
                                        //滚动条距离顶部的高度小于等于0 TODO
                                        //alert("下拉刷新，要在这调用啥方法？");

                                        console.log('上拉');
                                        //if(refresh){
                                            //load_more(10, offset, api_url);
                                        //}

                                    }
                                });
                    }*/


//                  $(".html").scroll(function(){
//                          console.log("$(\this\).scrollHeight " + $(this).scrollHeight);
//                          console.log("$(this).height()" + $(this).height());
//                          console.log("$(this)[0].scrollTop" + $(this).scrollTop);
//                          //  滑到底结果为->$(this)[0].scrollTop+$(this).height()+20=$(this)[0].scrollHeight
//                          //  60应该是一半的Item高度
//                          if($(this)[0].scrollTop+$(this).height()+20+60>=$(this)[0].scrollHeight){
//                              setTimeout(function(){
//                                  loadMore();
//                              },1000)
//                          }
//                  });

                    // 分页参数
//                  var limit = 10;
//                  var offset = 0;


                    // 点击加载更多
//                  var limit = 10;
//                  $('#load-more').click(function(){
//                      var statusType = 'orderList';
//                      load_more(limit, offset, api_url);
//                      return false;
//                  });
                    //refresh(load_more);
                    /**
                             * 加载更多
                             *
                             * @param limit 当前limit值
                             * @param current_offset 当前offset值
                             */
//                          var listAllOffset = 0;
//                          var apiStatus = '';
//                          function load_more(limit, current_offset, api_url, status, minPrice, maxPrice, category, promotion, nameType)
//                          {
//                              // 初始化参数
//                              params = common_params;
//                              delete params.orderby_sold_overall;
//                              delete params.orderby_time_publish;
//                              delete params.orderby_price;
//                              delete params.maxPrice;
//                              delete params.minPrice;
//                              delete params.category;
//                              delete params.promotion;
//                              delete params.nameType;
//                              params.limit = limit;
//                              params.biz_id = bizID;
//                              params.offset = current_offset; // 新的偏移量等于当前偏移量加当前获取量
//                              params.price_max = maxPrice;
//                              params.price_min = minPrice;
//                              params.category_id = category;
//                              params.promotion_id = nameType;
//                              params.name = minPrice;
//                              //DESC为降序，ASC为升序
//                              if(status == '销量'){
//                                  params.orderby_sold_overall = 'DESC';
//                              }else if(status == '新品'){
//                                  params.orderby_time_publish = 'DESC';
//                              }else if(status == '价格降序'){
//                                  params.orderby_price = 'DESC';
//                              }else if(status == '价格升序'){
//                                  params.orderby_price = 'ASC';
//                              }
//
//                              console.log(current_offset);
                                // 拼合完整API路径

                                //console.log(api_url);
                                // AJAX获取结果并生成相关HTML
//                              $.post(
//                                  api_url,
//                                  params,
//                                  function(result)
//                                  {
//                                      console.log(result); // 输出回调数据到控制台
//                                      apiStatus = result.status;
//                                      if (result.status == 200)
//                                      {
//
//                                          var items = result.content
//                                          console.log(items);
//                                                  var listHtml = '';
//                                                              for(var key in items){
//                                                                  var imgUrl = items[key].url_image_main;
//                                                                  var reg = RegExp(/http/);
//                                                                  if(reg.test(imgUrl) !== true){
//                                                                                    imgUrl = '<?php echo MEDIA_URL ?>'+'item/';
//                                                                               }else{
//                                                                                    imgUrl =''
//                                                                               }
//                                                                      listHtml +=  '<li class="itemList">'+
//                                                                                      '<a href="'+page_item_detail+items[key].item_id+'">'+
//                                                                                          '<img class="itemListImg" src="'+imgUrl+ items[key].url_image_main+'" alt=""/>'+
//                                                                                          '<h2 class="itemSlogan">'+items[key].slogan+'</h2>'+
//                                                                                          '<p class="itemPrice">¥'+items[key].price+'</p>'+
//                                                                                      '</a>'+
//                                                                                      '<div class="carItem">'+
//                                                                                          '<i class="icon-gouwuche-2"></i>'+
//                                                                                      '</div>'+
//                                                                                  '</li>';
//                                                              }
//                                                              $('#listItem').append(listHtml);
//                                          //var list_html = generete_list(content);
//
//                                          //$('#item-list').append(list_html);
//
//                                          // 更新全局分页参数
//                                          offset = params.offset;
//                                      }
//                                      else
//                                      {
//                                                  if( $('#listItem').html() == ''){
//                                                     $('.order-item-none').show();
//                                                  }else{
//                                                      $('.order-item-none').hide();
//                                                  }
//
//                                          // 若失败，进行提示
//                                          //alert(result.content.error.message);
//
//                                      }
//                                  },
//                                  "JSON"
//                              );
                            //} // end load_more
        });
    </script>
