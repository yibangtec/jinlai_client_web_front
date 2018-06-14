
    <script src="<?php echo CDN_URL ?>js/rem.js"></script>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css">
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/normal.css">
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/base.css">
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/order.css">
<div class="tips">
    <div class="delete">
        <p>确认删除？</p>
        <p>您可以从回收站找回已删除的订单</p>
        <div class="confirm-select clearfix">
            <div class="cancel-btn">取消</div>
            <div class="del-confirm">确定</div>
        </div>
    </div>
    <div class="receipt">
        <div class="place-input">请输入账户密码</div>
        <input type="text" placeholder="请输入密码"/>
        <div class="forget"><a href="">忘记密码?</a></div>
        <div class="confirm-select clearfix">
            <div class="cancel-btn">取消</div>
            <div class="receipt-confirm">确定</div>
        </div>
    </div>
    <div class="cancel">
        <div class="cancel-reason">取消原因</div>
        <div>
            <div class="reason-list clearfix">
                <span>我不想买了</span> <i class="reasonUnSelect"></i>
            </div>
            <div class="reason-list clearfix">
                <span>信息填写错误，重新拍</span> <i class="reasonUnSelect"></i>
            </div>
            <div class="reason-list clearfix">
                <span>卖家缺货</span> <i class="reasonUnSelect"></i>
            </div>
            <div class="reason-list clearfix">
                <span>同城见面交易</span> <i class="reasonUnSelect"></i>
            </div>
            <div class="reason-list clearfix">
                <span>其他原因</span> <i class="reasonUnSelect"></i>
            </div>
        </div>
        <div class="confirm-select clearfix">
            <div class="cancel-btn">取消</div>
            <div class="receipt-confirm">确定</div>
        </div>
    </div>
</div>
<div class="box">
    <div class="line"></div>
    <ul class="order-header clearfix">
        <li><a class="order-tab order-active">全部</a></li>
        <li><a class="order-tab">待付款</a></li>
        <li><a class="order-tab">待发货</a></li>
        <li><a class="order-tab">待收货</a></li>
        <li><a class="order-tab">待评价</a></li>
    </ul>
    <div class="content">
        <div class="order-all" id="orderList" style="display: block">

        </div>
        <div class="order-all">
            <div class="order-item">
                <div class="item-title clearfix">
                    <div class="title-left left-float"><i class="icon-dianpu"></i><span>东唐旺</span><i class="icon-Arrow"></i></div>
                    <div class="title-right right-float current-status">待付款</div>
                </div>
                <div class="item-detail clearfix">
                    <div class="item-left left-float"><img src="<?php echo CDN_URL ?>media/order/orderimg.png" alt=""/></div>
                    <div class="item-center left-float">
                        <p>新西兰进口黄金奇异果6个/份</p>
                        <p>含有丰富的vc，清热降火热量极低。</p>
                    </div>
                    <div class="item-right right-float">
                        <p>¥49.68</p>
                        <p class="price-text"> <del>¥69.80</del></p>
                        <p class="cont-indent">×1</p>
                    </div>
                </div>

                <div class="item-price">共<span>1</span>件商品 合计：<span class="weight">¥57.68</span>（含运费¥<span>8.0</span>）</div>
                <div class="item-operation"><span>联系卖家</span><span class="can-btn">取消</span><span class="current-red go-pay">付款</span></div>
            </div>
        </div>
        <div class="order-all">
            <div class="order-item">
                <div class="item-title clearfix">
                    <div class="title-left left-float"><i class="icon-dianpu"></i><span>东唐旺</span><i class="icon-Arrow"></i></div>
                    <div class="title-right right-float current-status">待发货</div>
                </div>
                <div class="item-detail clearfix">
                    <div class="item-left left-float"><img src="<?php echo CDN_URL ?>media/order/orderimg.png" alt=""/></div>
                    <div class="item-center left-float">
                        <p>新西兰进口黄金奇异果6个/份</p>
                        <p>含有丰富的vc，清热降火热量极低。</p>
                    </div>
                    <div class="item-right right-float">
                        <p>¥49.68</p>
                        <p class="price-text"> <del>¥69.80</del></p>
                        <p class="cont-indent">×1</p>
                    </div>
                </div>
                <div class="item-price">共<span>1</span>件商品 合计：<span class="weight">¥57.68</span>（含运费¥<span>8.0</span>）</div>
            </div>
        </div>
        <div class="order-all">
            <div class="order-item">
                <div class="item-title clearfix">
                    <div class="title-left left-float"><i class="icon-dianpu"></i><span>东唐旺</span><i class="icon-Arrow"></i></div>
                    <div class="title-right right-float current-status">待发货</div>
                </div>
                <div class="item-detail clearfix">
                    <div class="item-left left-float"><img src="<?php echo CDN_URL ?>media/order/orderimg.png" alt=""/></div>
                    <div class="item-center left-float">
                        <p>新西兰进口黄金奇异果6个/份</p>
                        <p>含有丰富的vc，清热降火热量极低。</p>
                    </div>
                    <div class="item-right right-float">
                        <p>¥49.68</p>
                        <p class="price-text"> <del>¥69.80</del></p>
                        <p class="cont-indent">×1</p>
                    </div>
                </div>
                <div class="item-price">共<span>1</span>件商品 合计：<span class="weight">¥57.68</span>（含运费¥<span>8.0</span>）</div>
                <div class="item-operation"><span>退款</span><span>延长收货</span><span>查看物流</span><span class="current-red goods-receipt">确认收货</span></div>
            </div>
        </div>
        <div class="order-all">
            <div class="order-item">
                <div class="item-title clearfix">
                    <div class="title-left left-float"><i class="icon-dianpu"></i><span>东唐旺</span><i class="icon-Arrow"></i></div>
                    <div class="title-right right-float current-status">待评价</div>
                </div>
                <div class="item-detail clearfix">
                    <div class="item-left left-float"><img src="<?php echo CDN_URL ?>media/order/orderimg.png" alt=""/></div>
                    <div class="item-center left-float">
                        <p>新西兰进口黄金奇异果6个/份</p>
                        <p>含有丰富的vc，清热降火热量极低。</p>
                    </div>
                    <div class="item-right right-float">
                        <p>¥49.68</p>
                        <p class="price-text"> <del>¥69.80</del></p>
                        <p class="cont-indent">×1</p>
                    </div>
                </div>
                <div class="item-price">共<span>1</span>件商品 合计：<span class="weight">¥57.68</span>（含运费¥<span>8.0</span>）</div>
                <div class="item-operation"><span class="del-btn">删除</span><span>申请售后</span><span class="current-red"><a
                        href="evaluate_single.html">评价</a></span></div>
            </div>
        </div>
    </div>


</div>

<script>

    $(document).ready(function(){

        var items = <?php echo json_encode($items) ?>;

        console.log(items);
        for(var key in items){
            var li = items[key].order_items;
            console.log(li);
            var bizNameHtml = '<div class="order-item">'+
                                   '<div class="item-title clearfix">'+
                                       '<div class="title-left left-float"><i class="icon-dianpu"></i><span>'+items[key].biz_name+'</span><i class="icon-Arrow"></i></div>'+
                                       '<div class="title-right right-float">'+items[key].status+'</div>'+
                                   '</div>'+
                                   '<div class="item-list">';
                                   var bot = '</div>'+
                                   '<div class="item-price">共<span>'+items[key].order_items.length+'</span>件商品 合计：<span class="weight">¥'+items[key].total+'</span>（含运费¥<span>'+items[key].freight+'</span>）</div>'+
                                   '<div class="item-operation"><span class="del-btn">删除</span><span>申请售后</span><span>追加评论</span></div>'+
                              '</div>';
            //$('#orderList').append(bizNameHtml);
            var orderItemHtml = '';
            for(var k in li){

                 orderItemHtml += '<a href="<?php echo base_url('order/detail') . "?&id='+li[k].order_id+'" ?>" class="item-detail clearfix">'+
                                       '<div class="item-left left-float"><img src="'+ li[k].item_image +'" alt=""/></div>'+
                                       '<div class="item-center left-float">'+
                                            '<p>'+ li[k].name +'</p>'+
                                            '<p>'+ li[k].slogan +'</p>'+
                                       '</div>'+
                                       '<div class="item-right right-float">'+
                                            '<p>¥'+ li[k].price +'</p>'+
                                            '<p class="price-text"> <del>¥'+ li[k].tag_price +'</del></p>'+
                                            '<p class="cont-indent">'+ li[k].single_total +'</p>'+
                                       '</div>'+
                                  '</a>';


            }
            $('#orderList').append(bizNameHtml+orderItemHtml+bot);
        }









        console.log($('.order-tab').length);
        $('.order-tab').click(function () {
            var index = $('.order-tab').index($(this));
            console.log(index);
            $(this).addClass("order-active").parent().siblings().children().removeClass('order-active');
            $('.order-all').eq(index).show(200).siblings('.order-all').hide();
        });
        $('.reason-list i').click(function(){
            var index =$(this).index;
            $(this).addClass('reasonSelect').removeClass('reasonUnSelect').parent().siblings().children('i').addClass('reasonUnSelect').removeClass('reasonSelect');

        });
        $('.cancel-btn').click(function(){
            $('.tips').hide();
        });
        $('.del-btn').click(function(){
            $('.tips').show().children('.delete').show();
        });
        $('.can-btn').click(function(){
            $('.tips').show().children('.cancel').show();
        });
        //确认收货
        $('.goods-receipt').click(function(){
            $('.tips').show().children('.receipt').show();
        });
        $('.go-pay').click(function(){
            $(location).attr('href', 'pay.html');
        })
    })


</script>
