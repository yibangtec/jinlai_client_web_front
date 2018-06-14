
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
            right: 0;
        }
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
        <div class="detail-address">
            <i class="icon-dizhi"></i>
            <div><b><?php echo $item['fullname'] ?></b><b><?php echo $item['mobile'] ?></b></div>
            <p><?php echo $item['province'] ?> <?php echo $item['city'] ?> <?php echo $item['county'] ?></p>
            <p><?php echo $item['street'] ?></p>
        </div>
    </div>
    <div class="order-content">
        <div class="order-list">
            <div class="item-title clearfix">
                <div class="title-left left-float"><i class="icon-dianpu"></i><span><?php echo $item['biz_name'] ?></span></div>
            </div>
            <div id="orderList">
            </div>
        </div>
    </div>
    <div class="price-type">
        <div class="price-info">价格信息</div>
        <div class="total-box">
            <div class="total"><span>商品总价</span><span>¥<?php echo $item['total'] ?></span></div>
            <div class="total"><span>运费</span><span>¥<?php echo $item['freight'] ?></span></div>
            <div class="total"><span class="weight">应付金额</span><span class="weight">¥<?php echo $item['freight'] ?></span></div>
        </div>
        <div class="total-box">
            <div class="total"><span>优惠券抵扣</span><span>¥<?php echo $item['discount_coupon'] ?></span></div>
            <div class="total"><span>积分抵扣</span><span>¥<?php echo $item['credit_payed'] ?></span></div>
            <div class="total"><span class="weight">实付金额</span><span class="weight">¥<?php echo $item['total_payed'] ?></span></div>
        </div>
    </div>
    <div class="detail-btn clearfix">
        <div class="customer-service">联系卖家</div>
        <div class="tel-service">拨打电话</div>
    </div>
    <div class="order-parameter">
        <div class="order-number clearfix">
            <div class="serial-number">订单号：<span>214732184237164</span></div>
            <div class="number-copy">复制</div>
        </div>
        <p>支付方式：<span><?php echo $item['payment_type'] ?></span></p>
        <p>支付流水号：<span><?php echo $item['payment_id'] ?></span></p>
        <p>创建时间：<span><?php echo $item['time_create'] ?></span></p>
        <p>付款时间：<span><?php echo $item['time_pay'] ?></span></p>
        <p>发货时间：<span><?php echo $item['time_deliver'] ?></span></p>
        <p>成交时间：<span><?php echo $item['time_confirm'] ?></span></p>
    </div>
    <!--待评价-->
    <div class="detail-operation status1">
        <a>删除</a>
        <a>退款/售后</a>
        <a style="color: #FF3649;border: 0.01rem solid #FF3649">待评价</a>
    </div>
    <!--已评价-->
    <div class="detail-operation status2">
        <a>删除</a>
        <a>申请售后</a>
        <a>追加评论</a>
    </div>
    <!--待发货-->
    <div class="detail-operation status3">
        <a>取消</a>
        <a>退款/售后</a>
    </div>
    <!--待付款-->
    <div class="detail-operation status4">
        <a>取消</a>
        <a style="color: #FF3649;border: 0.01rem solid #FF3649">去付款</a>
    </div>
    <!--待收货-->
    <div class="detail-operation status5">
        <a>延长收货</a>
        <a>查看物流</a>
        <a>退款/售后</a>
        <a style="color: #FF3649;border: 0.01rem solid #FF3649">确认收货</a>
    </div>
    <!--已关闭-->
    <div class="detail-operation status6">
        <a>删除</a>
    </div>
</div>

<script>


     $(document).ready(function(){
     	var item = <?php echo json_encode($item) ?>;


     	console.log(item);
		var ItemList =  item.order_items
             for(var key in ItemList){
                var Html = '<div class="item-detail clearfix">'+
                                '<div class="item-left left-float"><img src="'+ItemList[key].item_image+'" alt=""/></div>'+
                                '<div class="item-center left-float">'+
                                     '<p>'+ ItemList[key].name +'</p>'+
                                     '<p>'+ ItemList[key].slogan +'</p>'+
                                '</div>'+
                                '<div class="item-right right-float">'+
                                     '<p>¥'+ ItemList[key].price +'</p>'+
                                     '<p class="price-text"><del>¥'+ ItemList[key].tag_price +'</del></p>'+
                                     '<p class="cont-indent">×'+ ItemList[key].count +'</p>'+
                                '</div>'+
                                '<div class="item-operation"><span>退款</span></div>'+
                           '</div>';
                 $('#orderList').append(Html);
             }

            var status = item.status;
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
            }


        })
</script>