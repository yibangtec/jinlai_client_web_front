<style>
    .create_succeed {display:none;}

    #templates a {display:none;}
</style>

<!--头部背景图片区域-->
<div class="redenvelope">
    <img src="<?php echo CDN_URL ?>media/share_redenvelope/dingbutu@3x.png" alt="进来分享红包">
</div>

<!--进来打开红包按钮-->
<div class="share_redenvelope_btn"></div>

<!--邀请注册表单区域-->
<div class="share_content clearfix">
    <p class="logined_text">接受进来小伙伴邀请立享优惠</p>

    <!--信息填完后在立即领取后添加类 cur即可变色-->
    <div class="currentGet cur">立即领取</div>
</div>

<div id=create_succeed>
    <!--恭喜您获得进来优惠券一张-->

    <div class="receive_one">
        <div class="receivetext">
            <span>您可领取</span>
            <span class="bigtext">进来优惠券</span>
        </div>
    </div>

    <div class=receive_one_card>
        <ul id=templates>
            <!--
            <li class="card clearfix">
                <img src="<?php echo CDN_URL ?>media/share_redenvelope/kaquanding@3x.png" />
                <h1 class="fl">迈菲克国际武道教育</h1>
                <span>满<i>9999</i>可用</span>
                <div class="validity">有效期至<i>2018-05-01</i></div>
                <div class="price"><i>¥</i>999</div>
                <a>去使用</a>
            </li>
            -->
        </ul>

        <div class=create_succeed>
            <p>红包已放入账户 <span><?php echo $this->session->mobile ?></span></p>

            <div class="currentdo " data-href="<?php echo base_url('coupon/mine') ?>">
                我的卡包
            </div>
        </div>

        <div id=create class=currentdo>
            全部领取
        </div>
    </div>
</div>

<script>
    var item_type = '<?php echo $item_type ?>';
    var item = <?php echo json_encode($item) ?>;

$(function(){
    // 若为优惠券包，获取包中优惠券并输出DOM
    if (item_type == 'coupon_combo')
    {
        var templates = item.templates;
        var templates_dom = '';
        //console.log(templates);

        for (var i=0;i<templates.length;i++)
        {
            var template_dom = output_single(templates[i]);
            //console.log(template_dom);
            templates_dom += template_dom;
        }

        $('#templates').prepend(templates_dom);
    }

    function output_single(item)
    {
        var dom = '<li class="card clearfix">' +
                '<img src="' + cdn_url + 'media/share_redenvelope/kaquanding@3x.png">' +
                '<h1 class=fl>'+ item.name +' &times; '+item.count + '</h1>' +
                '<span>满<i>'+ item.min_subtotal +'</i>元可用</span>' +
                '<div class=validity><i>有效期最晚'+ date(item.time_end).substring(0, 10) +'</i></div>' +
                '<div class=price>'+
                    (item.amount != 0? '<i>¥</i>'+ item.amount: (1-item.rate)*10 + '<i>折</i>') +
                '</div>' +
                '<a href="'+ base_url+'biz/detail?id='+item.biz_id +'">去使用</a>' +
            '</li>';
        return dom
    }

    // 点击可跳转DOM后跳转页面
    $('[data-href]').click(function(){
        var url = $(this).attr('data-href');
        console.log(url);
        location.href = url;
    });

    // 点击全部领取
    $('#create').click(function(){
        var params = common_params;
        if (item_type == 'coupon_combo')
        {
            params.combo_id = item.combo_id
        } else {
            params.template_id = item.template_id
        }

        api_url += 'coupon/create';

        // AJAX获取结果并生成相关HTML
        $.post(
            api_url,
            params,
            function(result)
            {
                console.log(result); // 输出回调数据到控制台
                if (result.status == 200)
                {
                    // 切换相关DOM的可见性
                    $('.create_succeed, #templates a, #create').toggle();
                } else {
                    alert(result.content.error.message);
                }
            }
        );
    });

});
</script>