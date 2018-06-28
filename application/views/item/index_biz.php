    <script src="<?php echo CDN_URL ?>js/rem.js"></script>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/reset.css"/>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/base.css"/>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css"/>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/indexBiz.css"/>
    <style>
        body{
            background-color: #f0f0f0;position: relative;
        }
        a{
            text-decoration: none;

        }
        .service-text{padding-top:0.1rem;}

    </style>
    <div id='content' class='content'>
        <div class="headerSearch">
            <i class="icon-Back"></i>
            <div class="searchInput">
                <i class="icon-srech_hui"></i>
                <input class="searchItem" type="text" placeholder="请输入"/>
            </div>
            <a class="searchCar" href=""><i class="icon-gouwuche-2"></i></a>
            <div style="position: relative">
                <ul class="menuSearch">
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <ul class="menuSearchList menuListActive">
                    <li>
                        <a href="">
                            <i class="icon-shouye_xiala"></i><span>首页</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="icon-wode-2"></i><span>我的</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
        <div class="navigationTab">
            <div class="navigationCategory">
                <ul>
                    <li data-id="orderList" class="order-tab tabActive">综合</li>
                    <li data-id="orderList1" class="order-tab">销量</li>
                    <li data-id="orderList2" class="order-tab">新品</li>
                    <li data-id="orderList3" class="order-tab NewPrice">新品价格<i class="icon-xiajiantou shang-sanjiao"></i><i class="icon-xiajiantou xia-sanjiao"></i></li>
                </ul>
            </div>
            <div class="filter">
                <i class="icon-shaixuan"></i>
            </div>
        </div>

        <div class="itemContent">
           <ul class="clearfix" id="listItem">


           </ul>
        </div>
        <div class="bottomNav">
            <a class="service">
                <i class="icon-kefu_icon"></i>
                <p class="service-text">客服</p>
            </a>
            <div class="collection">
                <i class="icon-guanzhu_bk"></i>
                <p class="service-text">已关注</p>
            </div>
            <a class="babyCategory">
                宝贝分类
            </a>

        </div>
    </div>
    <div class="load-more" style="margin: 0.2rem;text-align: center;font-size: 0.3rem;color: #3E3A39;display:none;" id="load-more">点击加载更多</div>


    <script>
        $(function(){
            function getQueryString(name) {
                    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
                    var r = window.location.search.substr(1).match(reg);
                    if (r != null) return unescape(r[2]);
                    return null;
            }

            var items = <?php echo json_encode($items) ?>;
            console.log(items);
            var listHtml = '';
            for(var key in items){
                var imgUrl = items[key].url_image_main;
                var reg = RegExp(/http/);
                if(reg.test(imgUrl) !== true){
                                  imgUrl = '<?php echo MEDIA_URL ?>'+'item/';
                             }else{
                                  imgUrl =''
                             }
                    listHtml +=  '<li class="itemList">'+
                                    '<a href="">'+
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

            $('.order-tab').click(function () {
                        var index = $('.order-tab').index($(this));
                        console.log($(this).is(".tabActive"));
                        if($(this).is(".tabActive") == true){
                                        return false;
                        }
                        $(this).addClass("tabActive").siblings().removeClass('tabActive');
                        //$('.order-all').eq(index).show(200).siblings('.order-all').hide();
                        statusType = $(this).attr('data-id');
                        if(statusType == 'orderList1'){
                           status = '综合';
                           $('#listItem').html('');
                           listAllOffset = 0;
                        }else if(statusType == 'orderList2'){
                            status = '销量';
                            $('#listItem').html('');
                            listAllOffset = 0;
                        }else if(statusType == 'orderList3'){
                            status = '新品';
                            $('#listItem').html('');
                            listAllOffset = 0;
                        }else if(statusType == 'orderList4'){
                            status = '新品价格';
                            $('.NewPrice .xia-sanjiao,.icon-xiajiantou:before').css('color','#ff3649');
                            $('#listItem').html('');
                            listAllOffset = 0;
                        }
                        load_more(10, listAllOffset, api_url, status);

            });
            function refresh(refresh,loadmore) {
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
                                            load_more(10, listAllOffset, api_url, status);
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
                    }

                    // 分页参数
                    var limit = 10;
                    var offset = 0;
                    var api_url  = '<?php echo $this->class_name.'/index' ?>';

                    // 点击加载更多
                    var limit = 10;
                    $('#load-more').click(function(){
                        var statusType = 'orderList';
                        load_more(limit, offset, api_url);
                        return false;
                    });
                    refresh(load_more);
                    /**
                             * 加载更多
                             *
                             * @param limit 当前limit值
                             * @param current_offset 当前offset值
                             */
                            var listAllOffset = 0;
                            var apiStatus = '';
                            function load_more(limit, current_offset, api_url, status)
                            {
                                // 初始化参数
                                params = common_params;
                                params.limit = limit;
                                params.status = status;
                                params.offset = current_offset; // 新的偏移量等于当前偏移量加当前获取量
                                console.log(current_offset);
                                // 拼合完整API路径
                                api_url = ajax_root + api_url;

                                // AJAX获取结果并生成相关HTML
                                $.post(
                                    api_url,
                                    params,
                                    function(result)
                                    {
                                        console.log(result); // 输出回调数据到控制台
                                        apiStatus = result.status;
                                        if (result.status == 200)
                                        {

                                            var items = result.content
                                            console.log(items);
                                                    var listHtml = '';
                                                                for(var key in items){
                                                                    var imgUrl = items[key].url_image_main;
                                                                    var reg = RegExp(/http/);
                                                                    if(reg.test(imgUrl) !== true){
                                                                                      imgUrl = '<?php echo MEDIA_URL ?>'+'item/';
                                                                                 }else{
                                                                                      imgUrl =''
                                                                                 }
                                                                        listHtml +=  '<li class="itemList">'+
                                                                                        '<a href="">'+
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
                                            //var list_html = generete_list(content);

                                            //$('#item-list').append(list_html);

                                            // 更新全局分页参数
                                            offset = params.offset;
                                        }
                                        else
                                        {
                                                    if( $('#listItem').html() == ''){
                                                       $('.order-item-none').show();
                                                    }else{
                                                        $('.order-item-none').hide();
                                                    }

                                            // 若失败，进行提示
                                            //alert(result.content.error.message);

                                        }
                                    },
                                    "JSON"
                                );
                            } // end load_more

        })

    </script>