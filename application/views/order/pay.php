<script src="<?php echo CDN_URL ?>js/rem.js"></script>
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/normal.css">
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/base.css">
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/order.css">

<style>

    .icon-weixin-pay .path1:before {
      content: "\e943";
      color: #40a039;
      font-size: 1rem;
    }
    .icon-weixin-pay .path2:before {
      content: "\e9b4";
      color: #fff;
      margin-left: -1.5576171875em;
      font-size: 1rem;
    }
    .icon-weixin-pay .path3:before {
      content: "\e9b5";
      color: #fff;
      margin-left: -1.5576171875em;
      font-size: 1rem;
    }
    .icon-zhifubao-pay .path1:before {
      content: "\e94b";
      color: #2596d4;
      font-size: 1rem;
    }
    .icon-zhifubao-pay .path2:before {
      content: "\e94c";
      color: #fff;
      margin-left: -1.5576171875em;
      font-size: 1rem;
    }
    .icon-text-p{
        width:100%;
        font-size: 0.2rem;
        line-height: 0.3rem;
        height: 0.3rem;
        color:#fff;
        margin-top:-0.35rem;
        text-align: center;
    }
    #content {padding:0.2rem 0.2rem 0;}

    #list-discount {color:#9fa0a0;font-size:0.26rem;}
        #list-discount>li {display:none;background-color:#fff;height:0.8rem;line-height:0.8rem;margin-top:0.1rem;border-radius:0.15rem;padding:0 0.2rem;}
            #list-discount span {color:#0c8602;float:right;}

        #list-discount>li[data-name=total] {color:#0c8602;font-size:0.3rem;height:1.04rem;line-height:1.04rem;border:1px solid #0c8602;}
            #list-discount [data-name=total] span {font-size:0.46rem}

        #list-payment {overflow:hidden;margin-top:0.5rem;}
            #list-payment h2 {color:#3e3a39;font-size:0.3rem;padding:0.2rem 0;}
            #list-payment li {height:1.04rem;float:left;margin-right:0.2rem;}
                #list-payment li:nth-of-type(4n+0) {margin-right:0;}
                #list-payment a {color:#fff}

</style>

<div id=content>
    <ul id=list-discount>
        <li data-name=discount_promotion>
            活动抵扣 <span></span>
        </li>
        <li data-name=discount_coupon>
            优惠券抵扣 <span></span>
        </li>
        <li data-name=discount_reprice>
            改价抵扣 <span></span>
        </li>
        <li data-name=credit_payed>
            积分抵扣 <span></span>
        </li>
        <li data-name=total>
            <em></em> <span></span>
        </li>
    </ul>

    <div id=list-payment>
        <h2>付款方式</h2>
        <ul>
            <li title=微信支付 data-name=wepay>
                <a href="#">
                    <i class="icon-weixin-pay"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                    <p class="icon-text-p">微信支付</p>
                </a>
            </li>
            <li title=支付宝 data-name=alipay>
                <a href="#">
                    <i class="icon-zhifubao-pay"><span class="path1"></span><span class="path2"></span></i>
                    <p class="icon-text-p">支付宝</p>
                </a>
            </li>
        </ul>
    </div>

    <!--<div class="pay-type">
        <div class="pay-type-btn clearfix">
            <img src="<?php echo CDN_URL ?>media/order/weixin_xin@3x.png" alt="">
            <img src="<?php echo CDN_URL ?>media/order/zhifubao_xin@3x.png" alt="">
            <img src="<?php echo CDN_URL ?>media/order/yue_xin@3x.png" alt="">
        </div>
    </div>-->
</div>

<div class="tips">
    <div class="success" style="display: none">
        <div class="result-text">
            <img src="<?php echo CDN_URL ?>media/order/success.png" alt="">支付成功!
        </div>
        <div class="confirm-select clearfix">
            <div>查看</div>
            <div>确定</div>
        </div>
    </div>
    <div class="fail">
        <div class="result-text">
            <img src="<?php echo CDN_URL ?>media/order/fail.png" alt="">支付失败!
        </div>
        <div class="confirm-select clearfix">
            <div>查看详情</div>
            <div>重新支付</div>
        </div>
    </div>
</div>

<script>
    // 获取当前日期
    function date(seperater) {
        var seperater = seperater || '-';
        var d = new Date(),
            month = '' + (d.getMonth() + 1),
            day = '' + d.getDate(),
            year = d.getFullYear();

        if (month.length < 2) month = '0' + month;
        if (day.length < 2) day = '0' + day;

        return [year, month, day].join(seperater);
    }

    var item = <?php echo json_encode($item) ?>;
    console.log(item);

    // 生成支付链接通用参数
    var payment_common_params = 'type=order&body=';
    payment_common_params += encodeURI('进来商城商品订单 ' + date('')+'_' +item.order_id);
    payment_common_params += '&order_id=' + item.order_id;
    payment_common_params += '&total_fee=' + item.total;
    //console.log(payment_common_params);

    // 生成各类支付链接
    var payment_common_url = base_url + 'payment/'; // 支付通用链接
    // if (user_agent.is_wechat)
    // {
        var wepay_url_jsapi = 'wepay/example/jsapi.php?showwxpaytitle=1&'; // 微信支付 公众号支付URL
        var wepay_url_qrpay = 'wepay/example/qrpay.php?showwxpaytitle=1&'; // 微信支付 扫码支付URL
        var wepay_url_micropay = 'wepay/example/micropay.php?showwxpaytitle=1&'; // 微信支付 刷卡支付URL
    // }
    // else
    // {
        var alipay_url_mobile = 'alipay/wappay/pay.php?'; // 支付宝 手机网站支付URL
        var alipay_url_desktop = 'alipay/wappay/qrpay.php?'; // 支付宝 电脑网站支付URL
    // }

    $(function(){
        // 赋值各财务字段
        $('[data-name=total] em').html('小计');
        $('[data-name=total] span').html('￥' + item.subtotal);
        $('[data-name=total]').slideDown('slow');

        if (item.discount_promotion > 0)
        {
            $('[data-name=discount_promotion] span').html('-￥' + item.discount_promotion);
            $('[data-name=discount_promotion]').slideDown('slow');
        }

        if (item.discount_coupon > 0)
        {
            $('[data-name=discount_coupon] span').html('-￥' + item.discount_coupon);
            $('[data-name=discount_coupon]').slideDown('slow');
        }

        if (item.discount_promotion > 0)
        {
            $('[data-name=discount_reprice] span').html('-￥' + item.discount_reprice);
            $('[data-name=discount_reprice]').slideDown('slow');
        }

        if (item.discount_promotion > 0)
        {
            $('[data-name=credit_payed] span').html('-￥' + item.credit_payed);
            $('[data-name=credit_payed]').slideDown('slow');
        }

        $('[data-name=total] em').html('应支付');
        $('[data-name=total] span').html('￥' + item.total);

        // 赋值支付链接
        $('[data-name=wepay] a').attr('href', payment_common_url + wepay_url_jsapi + payment_common_params);
        $('[data-name=alipay] a').attr('href', payment_common_url + alipay_url_mobile + payment_common_params);

        // 点击某付款方式后弹出支付结果询问页面
        $('#list-payment a').click(function(){
            //$('#payment_confirm').show();
            alert('询问支付结果');
        });

        // 用户选择了支付结果后弹出相应的引导页面
        $('#payment_confirm li').click(function(){
            var result_choosen = $(this).attr('data-value');
            alert('result_choosen');
        });
    })
</script>
