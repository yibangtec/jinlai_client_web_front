
    <script src="<?php echo CDN_URL ?>js/rem.js"></script>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css">
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/refund.css">

<div class="box">
    <div class="placeholder-div"></div>

    <div class="refund-notice status1">
        <div class="refund-res">
            <i class="icon-yituikuan"></i><span>退款成功</span>
        </div>
        <p class="refund-amount">退款金额：<span>¥<?php echo $item['total_applied'] ?></span></p>
        <p class="refund-date">退款时间：<span><?php echo date("Y-m-d H:i:s",$item['time_refund']) ?></span></p>
    </div>

    <div class="refund-notice status2">
        <div class="refund-res">
            <i class="icon-daichuli"></i><span>退款处理中</span>
        </div>
        <p class="refund-amount">退款金额：<span>¥<?php echo $item['total_applied'] ?></span></p>
    </div>

    <div class="refund-notice status3">
        <div class="refund-res">
            <i class="icon-yiguanbi"></i><span>退款关闭</span>
        </div>
    </div>

    <div class="refund-notice status4">
        <div class="refund-res">
            <i class="icon-yiquxiao"></i><span>退款失败</span>
        </div>
    </div>

    <div class="negotiate">
        <span>协商详情</span><i class="icon-Arrow"></i>
    </div>
    <div class="refund-list">
        <div class="refund-shops"><i class="icon-dianpu"></i><?php echo $item['brief_name'] ?><i class="icon-Arrow"></i></div>
        <a href="<?php echo base_url('order/detail') . '?id=' . $item['order_id']; ?>" class="refund-goodsName">

        </a>
    </div>
    <div class="refund-info">
        <div class="info-title">
            退款信息
        </div>
        <div class="info-content">
            <p style="<?php echo $item['refund_id'] == '' ? 'display:none' : 'display:block'; ?>">售后编号：<?php echo $item['refund_id'] ?></p>
            <p style="<?php echo $item['type'] == '' ? 'display:none' : 'display:block'; ?>">售后类型：<?php echo $item['type'] ?></p>
            <p style="<?php echo $item['reason'] == '' ? 'display:none' : 'display:block'; ?>">退款原因：<?php echo $item['reason'] ?></p>
            <p style="<?php echo $item['status'] == '' ? 'display:none' : 'display:block'; ?>">货物状态：<?php echo $item['status'] ?></p>
            <p style="<?php echo $item['total_applied'] == '' ? 'display:none' : 'display:block'; ?>">退款金额：¥ <?php echo $item['total_applied'] ?></p>
            <p style="<?php echo $item['time_create'] == '' ? 'display:none' : 'display:block'; ?>">申请时间：<?php echo date("Y-m-d H:i:s",$item['time_create']) ?></p>
        </div>
    </div>
    <div class="refund-operation">
        <span>联系卖家</span><span><a href="tel:<?php echo $item['tel_public'] == '' ? '' : $item['tel_public']; ?>">拨打电话</a></span>
    </div>
</div>

<script>
    // 退款详情数据
    var item = <?php echo json_encode($item) ?>;

    $(function(){
        console.log(item);

        var statusIcon = '';
        var statusRefund = item.status;
                        if(statusRefund == '待处理' || statusRefund == '待退货' || statusRefund == '待退款'){
                           $('.status2').css('display','block');
                        }else if(statusRefund == '已关闭'){
                            $('.status3').css('display','block');
                        }else if(statusRefund == '已退款'){
                            $('.status1').css('display','block');
                        }else if(statusRefund == '已取消' || statusRefund == '已拒绝'){
                            $('.status4').css('display','block');
                        }else{
                            $('.status2').css('display','block');
                        };

        var orderItem = item.order_item;
        var slogan = orderItem.slogan;
                                    if(slogan == null){
                                       slogan = '';
                                    };
                    var imgUrl = orderItem.item_image;
                                    var reg = RegExp(/http/);
                                    console.log(reg.test(imgUrl)); // true
                                    if(reg.test(imgUrl) !== true){
                                         imgUrl = '<?php echo MEDIA_URL ?>'+'item/';
                                    }else{
                                         imgUrl ='';
                                    }
        var orderHtml = '<img src="'+imgUrl+orderItem.item_image+'" alt=""/>'+
                        '<div class="goods-info">'+
                            '<p>'+orderItem.name+'</p>'+
                            ' <p>'+slogan+'</p>'+
                        '</div>'+
                        '<div class="refund-amount">×'+orderItem.count+'</div>';
        $('.refund-goodsName').html(orderHtml);
    });
</script>