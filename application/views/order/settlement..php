
    <script src="<?php echo CDN_URL ?>js/rem.js"></script>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css"/>
    <style>
        *:before, *:after {box-sizing: border-box; }
        *, *:before, *:after {-webkit-tap-highlight-color: rgba(0, 0, 0, 0);}
        html, body, div, span, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, address, cite, code, del, dfn, em, img, ins, kbd, q, samp, small, strong, sub, sup, var, b, i, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td {
            border: 0 none;font-family: "Microsoft YaHei"; font-size: inherit;color: inherit; margin: 0;padding: 0;vertical-align: baseline;}
        h1, h2, h3, h4, h5, h6 {font-weight: normal;}
        em, strong { font-style: normal;}
        ul, ol, li {list-style: none;}
        .clearfix:after{content:".";display:block;height:0;clear:both;visibility:hidden;}
        input{outline:none; border: none}
        button{border: none;}
        html{ margin: 0 auto; height: 100%}
        body {width: 100%;background-color: #F2F2F3; height: 100%}
        a {text-decoration: none;}
        .box {width: 100%; height: 100%;position: relative}
        .address{margin: 0.1rem 0.2rem 0.2rem 0.2rem;font-size: 0.26rem;background-color: #fff;border-radius: 0.15rem;}
        .address-title{margin: 0 0.2rem;color: #3E3A39;padding: 0.24rem 0 0.16rem 0;}
        .title-left{float: left;}
        .title-right{float: right;}
        .address-type{display: inline-block;width: 0.7rem;height: 0.3rem;line-height: 0.3rem;text-align: center;border: 0.01rem solid #ff3649;border-radius: 0.04rem;color: #ff3649;margin-right: 0.2rem;
        }
        .address-content{margin: 0 0.2rem;color: #666464;padding-bottom: 0.24rem;}
        .address-operation{margin: 0 0.2rem;color: #666464;padding: 0.23rem 0;}

        .order-having{
            display: block;
            font-size: 0.26rem;
            margin: 0 0.2rem;
            background-color: #fff;
            border-radius: 0.15rem;
        }
        .left-float{
            float: left;
        }
        .right-float{
            float: right;
        }
        .item-title{
            padding: 0.3rem 0.2rem;
            border-bottom: 0.01rem solid #DDDDDD;
        }
        .item-title .title-left i{
            font-size: 0.36rem;
            margin-right: 0.2rem;
        }
        .item-detail{
            padding: 0.2rem;
            border-bottom: 0.01rem solid #DDDDDD;
        }
        .item-left{
            height: 1.4rem;
            width: 1.4rem;
            margin: 0.1rem 0.2rem 0.1rem 0;
        }
        .item-left img{
            display: block;
            height: 1.4rem;
            width: 1.4rem;
        }
        .item-center{
            font-size: 0.26rem;
            color: #3e3a39;
        }
        .item-center p:first-child{
            padding: 0.15rem 0 0.12rem 0;
        }
        .item-center p:nth-child(2){
            font-size: 0.22rem;
            color: #9fa0a0;
            padding-bottom: 0.18rem;
        }


        .reasonSelect{
            background: url("<?php echo CDN_URL ?>media/order/xuanzhong@3x.png") no-repeat;
        }
        .reasonUnSelect{
            display: inline-block;
            width: 0.35rem;
            height: 0.35rem;
            vertical-align: bottom;
            margin-right: 0.15rem;
            background: url("<?php echo CDN_URL ?>media/order/weixuanzhong@3x.png") no-repeat;
            background-size: 0.35rem 0.35rem;
        }
        .reasonSelect{
            background: url("<?php echo CDN_URL ?>media/order/xuanzhong@3x.png") no-repeat;
            background-size: 0.35rem 0.35rem;
        }
        .icon-Arrow{
            margin-left: 0.1rem;
            font-size: 0.3rem;
        }
        .message{
            width: 100%;
        }
        .total{
            padding: 0.3rem 0;
            text-align: right;
            font-size: 0.24rem;
            color: #3e3a39;
            padding-right: 0.2rem;
        }
        .total span:nth-child(1){
            margin-right: 0.2rem;
        }
        .total span:nth-child(2){
            font-size: 0.26rem;
            color: #3e3a39;
            font-weight: 700;

        }
        .invoice{
            display: block;
            font-size: 0.26rem;
            margin: 0.2rem;
            background-color: #fff;
            border-radius: 0.15rem;
            padding-bottom: 0.3rem;
            color: #3e3a39;
        }

        .invoice-input{
            padding: 0.3rem 0.2rem;
            border-bottom: 0.01rem solid #DDDDDD;
        }
        .invoice-input span{
            display: inline-block;
            width: 33.33333%;
        }
        .submit-btn{
            margin: 0.3rem 0.2rem;
            height: 0.9rem;
            line-height: 0.9rem;
            font-size: 0.3rem;
            color: #ffffff;
            text-align: center;
            background-color: #FF3649;
            border-radius: 0.12rem;
        }
        .placeholder-div{
            height: 0.1rem;
            width: 100%;
        }
    </style>

    <div class="box">
        <div class="placeholder-div"></div>
        <div class="address">
            <div class="address-title clearfix">
                <div class="title-left"><span class="address-type">家</span>谭女士</div>
                <div class="title-right">139****2419</div>
            </div>
            <div class="address-content">
                <p>青岛市崂山区</p>
                <p>东海东路1号，麦岛金岸，意帮3层</p>
            </div>
        </div>

        <div class="order-having">
            <div class="item-title clearfix">
                <div class="title-left left-float"><i class="icon-dianpu"></i><span>东唐旺</span></div>
                <div class="title-right right-float"><i class="icon-Arrow"></i></div>
            </div>
            <div class="item-detail clearfix">
                <div class="item-left left-float"><img src="<?php echo CDN_URL ?>media/order/orderimg.png" alt=""/></div>
                <div class="item-center left-float">
                    <p>新西兰进口黄金奇异果6个/份</p>
                    <p>含有丰富的vc，清热降火热量极低。</p>
                    <p><span>?49.68</span><span>×1</span></p>
                </div>
            </div>
            <div class="item-title clearfix">
                <div class="title-left left-float">店铺优惠</div>
                <div class="title-right right-float"><span>满100减10元</span><i class="icon-Arrow"></i></div>
            </div>
            <div class="item-title clearfix">
                <div class="title-left left-float">配送方式</div>
                <div class="title-right right-float"><span>快递配送</span><i class="icon-Arrow"></i></div>
            </div>
            <div class="item-title clearfix">
                <input class="message" type="text" placeholder="给卖家留言"/>
            </div>
            <div class="total">
                <span>共1件商品</span>合计：<span>?57.00</span>(含运费?8.0)
            </div>
        </div>
        <div class="invoice">
            <div class="invoice-input">
                <span>发票类型</span><span class="sele"><i class="reasonUnSelect reasonSelect"></i>个人</span><span class="sele"><i class="reasonUnSelect"></i>企业</span>
            </div>
            <div class="invoice-input">
                <input class="message" type="text" placeholder="发票抬头"/>
            </div>
            <div class="invoice-input">
                <input class="message" type="text" placeholder="税号（请输入税号或社会信用代码）"/>
            </div>
        </div>
        <div class="submit-btn">
            提交订单
        </div>

    </div>


<script src="<?php echo CDN_URL ?>js/jquery-3.2.1.min.js"></script>
<script>
    $(document).ready(function(){
        $('.sele').click(function(){
            $(".sele").find("i").removeClass('reasonSelect').addClass('reasonUnSelect');
            $(this).find('i').addClass('reasonSelect');
        })
    })
</script>
