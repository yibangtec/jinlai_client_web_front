<script src="<?php echo CDN_URL ?>js/rem.js"></script>
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css">
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/normal.css">
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/base.css">
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/order.css">
<style>
    .item-operation{
        text-align: right;
        height: 2rem;
        position: relative;
    }
    .item-operation span{
        display: inline-block;
        width: 1.2rem;
        height: 0.54rem;
        text-align: center;
        line-height: 0.5rem;
        border: 0.02rem solid #9fa0a0;
        border-radius: 0.27rem;
        position: absolute;
        bottom: 0;
        right: -0.2rem;
    }

    /* 订单信息 */
    .order-parameter li {line-height:0.34rem;overflow:hidden;}
        .order-parameter span:before {content:' ';}

    /* 操作栏 */
    [data-action-group] {display:none;}
</style>

<div class="box">
    <div class="line"></div>
    <div class="detail-header">
        <div class="detail-type1 status1">
            <p style="padding-top: 0.25rem">待评价</p>
            <p style="padding-top: 0.2rem">2天2小时后自动好评</p>
        </div>
        <div class="detail-type2 status2">
            <p style="padding-top: 0.45rem">已评价</p>
        </div>
        <div class="detail-type3 status3">
            <p style="padding-top: 0.25rem">等待卖家发货</p>
            <p style="padding-top: 0.2rem">2天2小时后未发货则自动退款</p>
        </div>
        <div class="detail-type4 status4">
            <p style="padding-top: 0.25rem">等待买家付款</p>
            <p style="padding-top: 0.2rem">2天2小时后未付款则自动关闭</p>
        </div>
        <div class="detail-type5 status5">
            <p style="padding-top: 0.25rem">待收货</p>
            <p style="padding-top: 0.2rem">2天2小时后自动确认收货</p>
        </div>
        <div class="detail-type6 status6">
            <p style="padding-top: 0.25rem">已关闭</p>
            <p style="padding-top: 0.2rem">超时未付款</p>
        </div>

        <!-- 订单收货地址 -->
        <div class=detail-address>
            <i class="icon-dizhi"></i>
            <div><b><?php echo $item['fullname'] ?></b><b><?php echo $item['mobile'] ?></b></div>
            <p><?php echo $item['province'] ?> <?php echo $item['city'] ?> <?php echo $item['county'] ?></p>
            <p><?php echo $item['street'] ?></p>
        </div>
    </div>

    <!-- 订单相关商家信息、商品信息 -->
    <div class="order-content">
        <div class=order-list>
            <div class="item-title clearfix">
                <div class="title-left left-float"><i class="icon-dianpu"></i><span><?php echo $item['biz_name'] ?></span></div>
            </div>

            <div id=orderList>
                <!-- 订单商品列表 -->
            </div>
        </div>
    </div>

    <!-- 订单财务信息 -->
    <div class="price-type">
        <div class="price-info">价格信息</div>
        <div class="total-box">
            <div style="<?php echo $item['subtotal'] == '0.00' ? 'display:none' : 'display:block'; ?>" class="total"><span>商品总价</span><span>¥<?php echo $item['subtotal'] ?></span></div>
            <div style="<?php echo $item['freight'] == '0.00' ? 'display:none' : 'display:block'; ?>" class="total"><span>运费</span><span>¥<?php echo $item['freight'] ?></span></div>
            <div style="<?php echo $item['total'] == '0.00' ? 'display:none' : 'display:block'; ?>" class="total"><span class=weight>应付金额</span><span class="weight">¥<?php echo $item['total'] ?></span></div>
        </div>
        <div class="total-box">
            <div style="<?php echo $item['discount_coupon'] == '0.00' ? 'display:none' : 'display:block'; ?>" class="total"><span>优惠券抵扣</span><span>¥<?php echo $item['discount_coupon'] ?></span></div>
            <div style="<?php echo $item['credit_payed'] == '0' ? 'display:none' : 'display:block'; ?>" class="total"><span>积分抵扣</span><span>¥<?php echo $item['credit_payed'] ?></span></div>
            <div style="<?php echo $item['total_payed'] == '0.00' ? 'display:none' : 'display:block'; ?>" class="total"><span class="weight">实付金额</span><span class="weight">¥<?php echo $item['total_payed'] ?></span></div>
        </div>
    </div>

    <div class="detail-btn clearfix">
        <div class="customer-service"><a href="tel:<?php echo $item['tel_public'] ?>">联系卖家</a></div>
        <div class="tel-service"><a href="tel:<?php echo $item['tel_public'] ?>">拨打电话</a></div>
    </div>

    <ul class=order-parameter>
        <li data-name=order_id>
            <div class=serial-number>订单号<span></span></div>
            <div class=number-copy>复制</div>
        </li>
        <li data-name=time_create>创建时间<span></span></li>
        <li data-name=time_cancel data-group=time_cancel>取消时间<span></span></li>
        <li data-name=time_expire data-group=time_expire>过期时间<span></span></li>

        <!-- 支付相关信息 -->
        <li data-name=time_pay data-group=payed>付款时间<span></span></li>
        <li data-name=payment_type data-group=payed>支付方式<span></span></li>
        <li data-name=payment_id data-group=payed>支付流水号<span></span></li>

        <!-- 接/拒单相关信息 -->
        <li data-name=time_refuse>拒单时间<span></span></li>
        <li data-name=time_accept>接单时间<span></span></li>

        <!-- 发货相关信息 -->
        <li data-name=time_deliver data-group=delivered>发货时间<span></span></li>
        <li data-name=deliver_method data-group=delivered>发货方式<span></span></li>
        <li data-name=deliver_biz data-group=delivered>服务商<span></span></li>
        <li data-name=waybill_id data-group=delivered>运单号<span></span></li>

        <!-- 确认收货相关信息 -->
        <li data-name=time_confirm>确认时间<span></span></li>
        <li data-name=time_confirm_auto>确认时间<span></span></li>

        <!-- 评论相关信息 -->
        <li data-name=time_comment>评论时间<span></span></li>

        <!-- 退单相关信息 -->
        <li data-name=time_refund>退单时间<span></span></li>
    </ul>

    <!--待付款-->
    <div class="detail-operation status4" data-action-group="待付款">
        <a data-action=cancel href="#">取消</a>
        <a style="color: #FF3649;border: 0.01rem solid #FF3649" data-action=pay href="#">去付款</a>
    </div>

    <!--待发货-->
    <div class="detail-operation status3" data-action-group="待发货">
        <a data-action=cancel href="#">取消</a>
        <a data-action=refund href="#">退款/售后</a>
    </div>

    <!--待收货-->
    <div class="detail-operation status5" data-action-group="待收货">
        <a>延长收货</a>
        <a>查看物流</a>
        <a data-action=refund href="#">退款/售后</a>
        <a style="color: #FF3649;border: 0.01rem solid #FF3649" data-action=confirm href="#">确认收货</a>
    </div>
    <!--已关闭-->
    <div class="detail-operation status6" data-action-group="已关闭">
        <a data-action=delete href="#">删除</a>
    </div>
    <!--待评价-->
    <div class="detail-operation status1" data-action-group="待评价">
        <a data-action=delete href="#">删除</a>
        <a data-action=refund href="#">退款/售后</a>
        <a style="color: #FF3649;border: 0.01rem solid #FF3649">待评价</a>
    </div>
    <!--已评价-->
    <div class="detail-operation status2" data-action-group="已评价">
        <a data-action=delete href="#">删除</a>
        <a data-action=refund href="#">申请售后</a>
        <a>追加评论</a>
    </div>
</div>

<script>
    $(function(){
        var item = <?php echo json_encode($item) ?>;
        //console.log(item);

        // 订单号
        $('[data-name=order_id] span').html(item.order_id);
        $('[data-name=time_create] span').html( date(item.time_create) );

        // 若已取消
        if (item.time_cancel > 0) {
            $('[data-name=time_cancel] span').html(date(item.time_cancel));
        }
        else
        {
            $('[data-group=time_cancel').hide()
        }

        // 若已过期
        if (item.time_expire > 0) {
            $('[data-name=time_expire] span').html(date(item.time_expire));
        }
        else
        {
            $('[data-group=time_expire').hide()
        }

        // 若已付款
        if (item.time_pay > 0)
        {
            // 赋值DOM，下同
            $('[data-name=time_pay] span').html(date(item.time_pay));
            $('[data-name=payment_type] span').html(item.payment_type);
            $('[data-name=payment_id] span').html(item.payment_id);
        }
        else
        {
            // 隐藏自该部分以下（含）信息DOM，下同
            hide_after('[data-name=time_pay]')

            // 生成操作页面链接并赋值到相应动作按钮
            $('[data-action=pay').attr('href', base_url + 'order/pay?id=' + item.order_id)
            $('[data-action=cancel').attr('href', base_url + 'order/cancel?id=' + item.order_id)
            $('[data-action-group=待付款]').show();
        }

        // 若已发货
        if (item.time_deliver > 0)
        {
            $('[data-name=time_deliver] span').html(date(item.time_deliver));
            $('[data-name=deliver_method] span').html(item.deliver_method);
            $('[data-name=deliver_biz] span').html(item.deliver_biz);
            $('[data-name=waybill_id] span').html(item.waybill_id);
        }
        else
        {
            hide_after('[data-name=time_deliver]')
        }

        // 隐藏自某元素以下的DOM
        function hide_after(dom_attr)
        {
            var lastest_li_index = $(dom_attr).index() - 1;
            $('.order-parameter>li:gt('+ lastest_li_index +')').hide();
        }

        // 生成订单商品DOM
         for(var key in item.order_items)
         {
             var item = item.order_items[key];
             //console.log(item);

             // 生成订单所含商品主图URL
             var reg = RegExp(/http/);
             var item_image_url = (reg.test(item.item_image) === true)? item.item_image: media_url+'item/'+item.item_image;

            // 生成订单商品信息
             var order_item = '<div class="item-detail clearfix">'+
                            '<div class="item-left left-float"><img src="'+item_image_url+'"></div>'+
                            '<div class="item-center left-float">'+
                                '<p>'+ item.name +'</p>'+
                                (item.slogan == ''? '': '<p>'+item.slogan+'</p>')+
                            '</div>'+
                            '<div class="item-right right-float">'+
                                 '<p>¥'+ item.price +'</p>'+
                (Number(item.tag_price) < Number(item.price)? '': '<p class=price-text><del>¥'+ item.tag_price +'</del></p>')+
                                 '<p class="cont-indent">&times; '+ item.count +'</p>'+
                            '</div>'+
                            '<div class="item-operation"><span>退款</span></div>'+
                       '</div>';
             //console.log(order_item);
             $('#orderList').append(order_item);
         }

        /*var status = item.status;
        console.log(status)
        if(status == '待评价'){
            $('.status1').css('display','block')
        }else if(status=='已评价'){
            $('.status2').css('display','block')
        }else if(status == '待发货'){
            $('.status3').css('display','block')
        }else if(status=='待付款'){
            $('.status4').css('display','block')
        }else if(status=='待收货'){
            $('.status5').css('display','block')
        }else if(status=='已关闭'){
            $('.status6').css('display','block')
        }*/
    })
</script>