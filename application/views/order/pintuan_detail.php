
    <script src="<?php echo CDN_URL ?>js/rem.js"></script>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css"/>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/pindanOrder.css"/>

<div class="box">
    <div class="join-order">
        <div class="QR-code">
            <div class="code-top code-none"></div>
            <div class="code">
                <img src="<?php echo CDN_URL ?>media/order/邀请好友.png" alt=""/>
                <p>用手机扫一扫二维码，参加我的团</p>
            </div>
            <div class="code-bot code-none"></div>
        </div>
        <div class="count-down">19:18:05.1</div>
        <p class="pintuan-tips">还差<span>1</span>人，赶紧邀请好友来拼单吧~</p>
        <div class="list clearfix">
            <div class="share">
                <i class="icon-weixin3"></i>
                <p>微信好友</p>
            </div>
            <div class="share">
                <i class="icon-pengyouquan"></i>
                <p>朋友圈</p>
            </div>
            <div class="share">
                <i class="icon-QQ"></i>
                <p>QQ</p>
            </div>
            <div class="share">
                <i class="icon-QQkongjian"></i>
                <p>QQ空间</p>
            </div>
            <div class="share">
                <i class="icon-weibo"></i>
                <p>微博</p>
            </div>
            <div class="share" id="scanCode">
                <i class="icon-saoma"></i>
                <p>当面扫码</p>
            </div>
        </div>
        <div class="count-bot"></div>
    </div>
    <div class="null"></div>
    <div class="detail-header">
        <div class="detail-type1 status1">
            <p style="padding-top: 0.25rem">拼单还未成功</p>
            <p style="padding-top: 0.2rem">让小伙伴们都来拼单吧</p>
        </div>
        <div class="detail-type2 status2">
            <p style="padding-top: 0.25rem">拼单成功</p>
            <p style="padding-top: 0.2rem">预计拼单成功后48小时内发货</p>
        </div>
        <div class="detail-address">
            <i class="icon-dizhi"></i>
            <div><b>孙悟空</b><b>13523071265</b></div>
            <p>山东省 青岛市 崂山区</p>
            <p>东海东路一号意帮网络科技3层</p>
        </div>
    </div>
    <div class="order-all">
        <div class="order-item">
            <div class="item-title clearfix">
                <div class="title-left left-float"><i class="icon-dianpu"></i><span>东唐旺</span></div>
            </div>
            <div class="item-detail clearfix">
                <div class="item-left left-float"><img src="<?php echo CDN_URL ?>media/order/orderimg.png" alt=""/></div>
                <div class="item-center left-float">
                    <p>新西兰进口黄金奇异果6个/份</p>
                    <p>含有丰富的vc，清热降火热量极低。</p>
                </div>
                <div class="item-right right-float">
                    <p>¥49.68</p>
                    <p class="price-text"><del>¥69.80</del></p>
                    <p class="cont-indent">×1</p>
                </div>
                <div class="item-operation"><span><a href="group_detail.html">查看拼单详情</a></span><span class="status2-span">申请退款</span></div>
            </div>
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
        <p>支付方式：<span>支付宝支付</span></p>
        <p>支付流水号：<span>328748371587283</span></p>
        <p>下单时间：<span>2017-09-01 22:33:33</span></p>
    </div>
    <div class="bot-pingdan status1">
        <div class="invite">
            邀请好友拼单
        </div>
    </div>
</div>
<script src="<?php echo CDN_URL ?>js/jquery-3.2.1.min.js"></script>
<script>

    $(document).ready(function(){
        var status ='';
        status = 1;
        if(status == 1){
            $('.status1').css('display','block')
        }else if(status==2){
            $('.status2').css('display','block');
            $('.status2-span').css('display','inline-block');
        }
        $('.invite').click(function(){
            $('.join-order').show();
        })
        $('.count-bot').click(function(){
            $('.join-order').hide();
        })
        $('#scanCode').click(function(){
            $('.QR-code').show();
        })
        $('.code-none').click(function(){
            $('.QR-code').hide();
        })
    })


</script>
