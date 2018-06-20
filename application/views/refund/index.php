
    <script src="<?php echo CDN_URL ?>js/rem.js"></script>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css">
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/refund.css">
    <style>
            .results-left .icon-yituikuan:before {
                font-size: 0.36rem;
                color: #27BE58;
                padding-right: 0.2rem;
            }
            .results-left .icon-daichuli:before {
                font-size: 0.36rem;
                color: #4e8cee;
                padding-right: 0.2rem;
            }
            .results-left .icon-yiguanbi:before {
                font-size: 0.36rem;
                padding-right: 0.2rem;
            }
            .results-left .icon-yiquxiao:before {
                font-size: 0.36rem;
                color: #FF3649;
                padding-right: 0.2rem;
            }
    </style>
    <div class="box">
        <div class="placeholder-div"></div>
        <div class="refund-content" id="refundContent"></div>

        <div class="refund-item">
            <div class="refund-shops"><i class="icon-dianpu"></i>东堂纹身<i class="icon-Arrow"></i></div>
            <div class="refund-goods">
                <img src="<?php echo CDN_URL ?>media/icon120@3x.png" alt=""/>
                <div class="goods-info">
                    <p>新西兰进口黄金奇异果 6个/份</p>
                    <p>含有丰富的VC，清热降火，热量极低</p>
                    <p>退款金额：¥49.80</p>
                </div>
                <div class="refund-amount">×1</div>
            </div>
            <div class="refund-goods">
                <img src="<?php echo CDN_URL ?>media/icon120@3x.png" alt=""/>
                <div class="goods-info">
                    <p>新西兰进口黄金奇异果 6个/份</p>
                    <p>含有丰富的VC，清热降火，热量极低</p>
                    <p>退款金额：¥49.80</p>
                </div>
                <div class="refund-amount">×1</div>
            </div>
            <div class="refund-results clearfix">
                <div class="results-left"><i class="icon-jintuikuan"></i>仅退款 退款失败</div>
                <div class="results-right"><a href="detail.html">查看详情</a></div>
            </div>
        </div>
    </div>

<script>
    // 退款数据列表
    var items = <?php echo json_encode($items) ?>;

    $(function(){
        console.log(items);
        for (var key in items){
            var orderItem = items[key].order_item;
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
            var statusIcon = '';
            var statusRefund = items[key].status;
                            if(statusRefund == '待处理' || statusRefund == '待退货' || statusRefund == '待退款'){
                                statusIcon = 'icon-daichuli';
                            }else if(statusRefund == '已关闭'){
                                statusIcon = 'icon-yiguanbi';
                            }else if(statusRefund == '已退款'){
                                statusIcon = 'icon-yituikuan';
                            }else if(statusRefund == '已取消' || statusRefund == '已拒绝'){
                                statusIcon = 'icon-yiquxiao';
                            }else{
                                statusIcon = 'icon-jintuikuan';
                            }
            var bizNameHtml ='<div class="refund-items">'+
                                  '<a href="<?php echo base_url('biz/detail') . "?&id='+items[key].biz_id+'" ?>" class="refund-shops"><i class="icon-dianpu"></i>'+items[key].brief_name+'<i class="icon-Arrow"></i></a>'+
                                  '<div class="refund-goods">'+
                                        '<img src="'+ imgUrl + orderItem.item_image +'" alt=""/>'+
                                        '<div class="goods-info">'+
                                            '<p>'+orderItem.name+'</p>'+
                                            '<p>'+orderItem.slogan+'</p>'+
                                            '<p>退款金额：¥'+orderItem.single_total+'</p>'+
                                        '</div>'+
                                        '<div class="refund-amount">× '+orderItem.count+'</div>'+
                                  '</div>'+
                                  '<div class="refund-results clearfix">'+
                                         '<div class="results-left"><i class="'+statusIcon+'"></i>'+items[key].type+' '+items[key].status+'</div>'+
                                         '<div class="results-right"><a href="<?php echo base_url('refund/detail') . "?&id='+items[key].refund_id+'" ?>">查看详情</a></div>'+
                                  '</div>'+
                              '</div>';

            $('#refundContent').append(bizNameHtml);
        }
    });
</script>