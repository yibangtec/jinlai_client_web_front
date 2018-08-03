<script src="<?php echo CDN_URL ?>js/rem.js"></script>
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css">
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/normal.css">
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/base.css">
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/order.css">
<style>
.item-operation a{
        display: inline-block;
        width: 1.2rem;
        height: 0.54rem;
        text-align: center;
        line-height: 0.5rem;
        margin: 0.5rem 0.2rem 0 0;
        border: 0.02rem solid #9fa0a0;
        border-radius: 0.27rem;
        color:#3e3a39;}
        .order-header li{
            width:25%
        }
</style>
<div class="tips">
    <div class="delete">
        <p>确认删除？</p>
        <p>您可以从回收站找回已删除的订单</p>
        <div class="confirm-select clearfix">
            <div class="cancel-btn">取消</div>
            <div id="delConfirm" class="del-confirm">确定</div>
        </div>
    </div>
    <div class="receipt">
        <div class="place-input">请输入账户密码</div>
        <input id="password" minlength="6" type="password" placeholder="请输入密码"/>
        <div class="forget"><a href="">忘记密码?</a></div>
        <div class="confirm-select clearfix">
            <div class="cancel-btn">取消</div>
            <div id="receiptSubmit" class="receipt-confirm">确定</div>
        </div>
    </div>
    <div class="cancel">
        <div class="cancel-reason">取消原因</div>
        <div>
            <div class="reason-list clearfix">
                <span>我不想买了</span> <i data-value="我不想买了" class="reasonSelect"></i>
            </div>
            <div class="reason-list clearfix">
                <span>信息填写错误，重新拍</span> <i data-value="信息填写错误，重新拍" class="reasonUnSelect"></i>
            </div>
            <div class="reason-list clearfix">
                <span>卖家缺货</span> <i data-value="卖家缺货" class="reasonUnSelect"></i>
            </div>
            <div class="reason-list clearfix">
                <span>同城见面交易</span> <i data-value="同城见面交易" class="reasonUnSelect"></i>
            </div>
            <div class="reason-list clearfix">
                <span>其他原因</span> <i data-value="其他原因" class="reasonUnSelect"></i>
            </div>
        </div>
        <div class="confirm-select clearfix">
            <div class="cancel-btn">取消</div>
            <div id="cancelSubmit" class="receipt-confirm">确定</div>
        </div>
    </div>
</div>

<div class="box">
    <div class="line"></div>
    <ul class="order-header clearfix">
        <li><a data-id="orderList" class="order-tab order-active">全部</a></li>
        <li><a data-id="orderList1" class="order-tab">未消费</a></li>
        <li><a data-id="orderList2" class="order-tab">已使用</a></li>
        <li><a data-id="orderList3" class="order-tab">已过期</a></li>
    </ul>
    <div class="content">
        <div class="order-item-none">
            <img class="icon_noorder" src="<?php echo CDN_URL ?>media/order/icon_noorder.png" alt="">
            <p class="text-noorder">您没有该状态的订单</p>
        </div>

        <div class="order-all" id="orderList" style="display: block">

        </div>
    </div>


</div>
<div class="load-more" style="margin: 0.2rem;text-align: center;font-size: 0.3rem;color: #3E3A39;display:none;" id="load-more">点击加载更多</div>

<script>
    $(function(){
        var urlStatus = getQueryString('status');


        //load_more(10, 0, api_url+'order/index', status, '');

        /*var params = common_params;
        params.user_id = '783';
        params.nature = '服务';
        params.item_status="";
        var currentStatus = '';

        if(!urlStatus){
        console.log(params);
        $.post(
            api_url + 'order/index',
            params,
            function(result)
            {
                console.log(result); // 输出回调数据到控制台
                if (result.status == 200)
                {
                  var items = result.content;
                  for(var key in items){


                              var li = items[key].order_items;
                              //console.log(li);
                              var bizNameHtml = '<div class="order-item">'+
                                                     '<div class="item-title clearfix">'+
                                                         '<div class="title-left left-float"><i class="icon-dianpu"></i><span>'+items[key].biz_name+'</span><i class="icon-Arrow"></i></div>'+
                                                         '<div class="title-right right-float current-status">'+li[0].status+'</div>'+
                                                     '</div>'+
                                                     '<div class="item-list">';
                              var bot = '</div>'+
                                             '<div class="item-price">共<span>'+items[key].order_items.length+'</span>件商品 合计：<span class="weight">¥'+items[key].total+'</span>（含运费¥<span>'+items[key].freight+'</span>）</div>'+

                                        '</div>';
                              //$('#orderList').append(bizNameHtml);

                              var orderItemHtml = '';
                              for(var k in li){
                                  var slogan = li[k].slogan;
                                   if(slogan == null){
                                      slogan = '';
                                   };
                                   var imgUrl = li[k].item_image;
                                   var reg = RegExp(/http/);
                                   //console.log(reg.test(imgUrl)); // true
                                   if(reg.test(imgUrl) !== true){
                                        imgUrl = '<?php echo MEDIA_URL ?>'+'item/';
                                   }else{
                                        imgUrl =''
                                   }
                                   var priceStyle = 'display:none;'
                                   if(li[k].tag_price > li[k].price){
                                      priceStyle = 'display:block;'
                                   }else{
                                      priceStyle = 'display:none;'
                                   }

                                   orderItemHtml += '<a href="'+ base_url+'order/service_detail?&orderId='+li[k].order_id+ '&recordId='+li[k].record_id+'" class="item-detail clearfix">'+
                                                         '<div class="item-left left-float"><img src="'+imgUrl+ li[k].item_image +'" alt=""/></div>'+
                                                         '<div class="item-center left-float">'+
                                                              '<p>'+ li[k].name +'</p>'+
                                                              '<p>'+ slogan +'</p>'+
                                                         '</div>'+
                                                         '<div class="item-right right-float">'+
                                                              '<p>¥'+ li[k].price +'</p>'+
                                                              '<p class="price-text" style="'+priceStyle+'"> <del>¥'+ li[k].tag_price +'</del></p>'+
                                                              '<p class="cont-indent">x'+ li[k].count +'</p>'+
                                                         '</div>'+
                                                    '</a>';


                              }
                              $('#orderList').append(bizNameHtml+orderItemHtml+bot);
                          }
                } else {

                }
            }
        );
        }*/

            var statusType = 'orderList';
            var status = '';
            $('.order-tab').click(function () {
                var index = $('.order-tab').index($(this));
                console.log($(this).is(".order-active"));
                /*if($(this).is(".order-active") == true){
                    return false;
                }*/
                $(this).addClass("order-active").parent().siblings().children().removeClass('order-active');
                //$('.order-all').eq(index).show(200).siblings('.order-all').hide();
                statusType = $(this).attr('data-id');

                if(statusType == 'orderList1'){
                    status = '未消费';
                    $('#orderList').html('');
                    listAllOffset = 0;
                }else if(statusType == 'orderList2'){
                    status = '已使用';
                    $('#orderList').html('');
                    listAllOffset = 0;
                }else if(statusType == 'orderList3'){
                    status = '已过期';
                    $('#orderList').html('');
                    listAllOffset = 0;
                }else if(statusType == 'orderList'){
                    status = '';
                    $('#orderList').html('');
                    listAllOffset = 0;
                }
                console.log(status);

                load_more(10, listAllOffset, api_url+'order/index', status);
            });

            if(urlStatus == 'order1'){
                        $('.order-tab').eq(1).click();
                    }else if(urlStatus == 'order2'){
                        $('.order-tab').eq(2).click();
                    }else if(urlStatus == 'order3'){
                        $('.order-tab').eq(3).click();
                    }else{
                        console.log(urlStatus);
                        $('.order-tab').eq(0).click();
                    }

            function refresh(refresh,loadmore) {
                                $(window).scroll(function(){
                                    console.log('正在滑动f');
                                    //$('.load-more').show();
                                    var scrollTop = $(this).scrollTop();    //滚动条距离顶部的高度
                                    var scrollHeight = $(document).height();   //当前页面的总高度
                                    var clientHeight = $(this).height();    //当前可视的页面高度
                                    // console.log("top:"+scrollTop+",doc:"+scrollHeight+",client:"+clientHeight);
                                    if(scrollTop + clientHeight >= scrollHeight){   //距离顶部+当前高度 >=文档总高度 即代表滑动到底部 count++;         //每次滑动count加1
                                        // filterData(serviceTypeId,industryId,cityId,count); //调用筛选方法，count为当前分页数

                                        console.log('下拉');

                                        if(load_more){
                                            listAllOffset = listAllOffset + 10;

                                            load_more(10, listAllOffset, api_url+'order/index', status);
                                            //$('.load-more').hide();
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

                    // 点击加载更多
                    var limit = 10;
                    $('#load-more').click(function(){
                        var statusType = 'orderList';
                        load_more(limit, offset, api_url + 'order/index');
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
                        params.user_id = '783'
                        params.item_status = status;
                        params.nature = '服务';
                        params.offset = current_offset; // 新的偏移量等于当前偏移量加当前获取量
                        console.log(params);

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
                                    var items = result.content;
                                    for(var key in items){


                                          var li = items[key].order_items;
                                          //console.log(li);
                                          var bizNameHtml = '<div class="order-item">'+
                                                                 '<div class="item-title clearfix">'+
                                                                     '<div class="title-left left-float"><i class="icon-dianpu"></i><span>'+items[key].biz_name+'</span><i class="icon-Arrow"></i></div>'+
                                                                     '<div class="title-right right-float current-status">'+li[0].status+'</div>'+
                                                                 '</div>'+
                                                                 '<div class="item-list">';
                                          var bot = '</div>'+
                                                         '<div class="item-price">共<span>'+items[key].order_items.length+'</span>件商品 合计：<span class="weight">¥'+items[key].total+'</span>（含运费¥<span>'+items[key].freight+'</span>）</div>'+

                                                    '</div>';
                                          //$('#orderList').append(bizNameHtml);

                                          var orderItemHtml = '';
                                          for(var k in li){
                                              var slogan = li[k].slogan;
                                               if(slogan == null){
                                                  slogan = '';
                                               };
                                               var imgUrl = li[k].item_image;
                                               var reg = RegExp(/http/);
                                               //console.log(reg.test(imgUrl)); // true
                                               if(reg.test(imgUrl) !== true){
                                                    imgUrl = '<?php echo MEDIA_URL ?>'+'item/';
                                               }else{
                                                    imgUrl =''
                                               }
                                               var priceStyle = 'display:none;'
                                               if(li[k].tag_price > li[k].price){
                                                  priceStyle = 'display:block;'
                                               }else{
                                                  priceStyle = 'display:none;'
                                               }

                                               orderItemHtml += '<a href="'+ base_url+'order/service_detail?&orderId='+li[k].order_id+ '&recordId='+li[k].record_id+'" class="item-detail clearfix">'+
                                                                     '<div class="item-left left-float"><img src="'+imgUrl+ li[k].item_image +'" alt=""/></div>'+
                                                                     '<div class="item-center left-float">'+
                                                                          '<p>'+ li[k].name +'</p>'+
                                                                          '<p>'+ slogan +'</p>'+
                                                                     '</div>'+
                                                                     '<div class="item-right right-float">'+
                                                                          '<p>¥'+ li[k].price +'</p>'+
                                                                          '<p class="price-text" style="'+priceStyle+'"> <del>¥'+ li[k].tag_price +'</del></p>'+
                                                                          '<p class="cont-indent">x'+ li[k].count +'</p>'+
                                                                     '</div>'+
                                                                '</a>';


                                          }
                                          $('#orderList').append(bizNameHtml+orderItemHtml+bot);
                                      }
                                                if( $('#orderList').html() == ''){
                                                   $('.order-item-none').show();
                                                }else{
                                                    $('.order-item-none').hide();
                                                }


                                    //var list_html = generete_list(content);

                                    //$('#item-list').append(list_html);

                                    // 更新全局分页参数
                                    offset = params.offset;
                                }
                                else
                                {
                                            if( $('#orderList').html() == ''){
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
    //save(params)
    function save(cp_value){
	    var num = new Object;
        num.cp_keynum ="baseInfo";
        num.cp_num_value = cp_value;
        var str = JSON.stringify(num); // 将对象转换为字符串
        localStorage.setItem(num.cp_keynum,str);
        console.log(str);
    }




    function getQueryString(name){
       var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
       var r = window.location.search.substr(1).match(reg);
       if (r!=null) return r[2]; return '';
    }

    });


</script>
