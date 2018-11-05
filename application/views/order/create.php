
    <script src="<?php echo CDN_URL ?>js/rem.js"></script>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css">
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
        .address-create{margin: 0.1rem 0.2rem 0.2rem 0.2rem;font-size: 0.26rem;background-color: #fff;border-radius: 0.15rem;}
        .address-title{margin: 0 0.2rem;color: #3E3A39;padding: 0.24rem 0 0.16rem 0;}
        .title-left{float: left;}
        .title-right{float: right;}
        .address-type{display: inline-block;height: 0.3rem;line-height: 0.3rem;text-align: center;border: 0.01rem solid #ff3649;border-radius: 0.04rem;color: #ff3649;margin-right: 0.2rem;
        }
        .address-content{margin: 0 0.2rem;color: #666464;padding-bottom: 0.24rem;}
        .address-content p{line-height:0.35rem;}
        .address-operation{margin: 0 0.2rem;color: #666464;padding: 0.23rem 0;}

        .order-having{
            display: block;
            font-size: 0.26rem;
            margin: 0 0.2rem 0.2rem 0.2rem;
        }
        .order-bottom{
             display: block;
             background-color: #fff;
             border-radius: 0.15rem;
             font-size: 0.26rem;
             margin: 0 0.2rem 0.2rem 0.2rem;
        }
        .left-float{
            float: left;
        }
        .right-float{
            float: right;
        }
        .item-title{
            display:block;
            padding: 0.3rem 0.2rem;
            border-bottom: 0.01rem solid #DDDDDD;
        }
        .item-title .title-left i{
            font-size: 0.36rem;
            margin-right: 0.2rem;
        }
        .item-detail{
            display: flex;
            padding: 0.2rem 0.2rem 0 0.2rem;

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
            flex: 1;
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
            position: fixed;
            bottom: 0;
            width: 7.1rem;
            margin: 0.2rem;
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
        .address-selected{
            display:none;
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: #F2F2F3;
            z-index:10000;
        }
        .address-list{margin: 0.1rem 0.2rem 0.2rem 0.2rem;font-size: 0.26rem;background-color: #fff;border-radius: 0.15rem;}
        .creat-address{
            width: 7.1rem;
            height: 0.84rem;font-size: 0.3rem;text-align: center;line-height: 0.8rem;color: #ff3649;
            border: 0.01rem solid #ff3649;
            border-radius: 0.12rem;
            background-color: #F2F2F3;
            position: fixed;
            bottom: 0.3rem;
            margin: 0 0.2rem;
        }
        .creat-address a{
            color: #FF3649;
        }
        .item-count{
            padding-left: 1.6rem;
            padding-bottom:0.2rem;
            border-bottom: 0.01rem solid #DDDDDD;
        }
        .item-count span{
            display: inline-block;
            padding: 0 0.2rem;
            line-height: 0.4rem;
            text-align: center;
        }
        .item-count i{
            padding:0.2rem;
        }
        .icon-jian{
            font-size: 0.44rem;

        }
        .item-count .icon-add-add-red:before{
            font-size: 0.44rem;
            color: #FF3649;
        }

    </style>

    <div class="box">
        <div class="address-selected">

        </div>
        <div class="placeholder-div"></div>

        <div class="address-create" id="addressSelected">

        </div>

        <div class="order-having">

        </div>
        <div class="order-bottom">
            <div class="item-title clearfix">
                <div class="title-left left-float">商品金额</div>
                <div class="title-right right-float">¥ <span class="totalPrice"></span></div>
            </div>
            <div class="item-title clearfix">
                <div class="title-left left-float">运费</div>
                <div class="title-right right-float">+ ¥ <span class="totalFreight"></span></div>
            </div>
            <div class="item-title clearfix">
                <div class="title-left left-float">优惠券</div>
                <div class="title-right right-float" style="color:#ff3649">- ¥ <span class="totalDiscount"></span></div>
            </div>
            <div class="item-title clearfix" style="border:none">
                <div class="title-left left-float">合计</div>
                <div class="title-right right-float">¥ <span class="totalSum"></span></div>
            </div>
        </div>

        <!--
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
        -->


        <button class="submit-btn" type=submit>提交订单</button>

        <form class=hide action="<?php echo base_url('order/create') ?>">
            <input name=address_id type=hidden>
            <input name=cart_string type=hidden>
            <input name=note_user type=hidden>
        </form>
        <div style="padding-bottom:1.4rem; width:100%"></div>
    </div>


<script>
    var default_address_id = '<?php echo $this->session->address_id ?>' // 默认收货地址ID


    var item = <?php echo json_encode($item) ?>;
    var addresses = item.addresses; // 可选的收货地址
    var order_data = item.order_data; // 子订单信息
    var orderList = item.price_list;
    console.log(item);
    // console.log(default_address_id);
    //console.log(priceList);
    console.log(order_data);
    var quantity_max = order_data[0].order_items[0].quantity_max;
    var itemCount = order_data[0].order_items[0].count;
    console.log(quantity_max);


    $(function(){
        var immediately = '';
        immediately = getQueryString('immediately');

        var addressID = default_address_id;
        $('.sele').click(function(){
            $(".sele").find("i").removeClass('reasonSelect').addClass('reasonUnSelect');
            $(this).find('i').addClass('reasonSelect');
        })
        $('#addressSelected').click(function(){
            $('.address-selected').css('display','block');
                var brief = '';
                var addressHtml = '';
                for(var key in addresses){
                    if(addresses[key].brief !== null){
                        brief = '<span class="address-type">'+addresses[key].brief+'</span>';
                    }else{
                        brief = '';
                    }
                	   addressHtml += '<div class="address-list" data-id="'+addresses[key].address_id+'">'+
                	                        '<div class="address-title clearfix">'+
                                              '<div class="title-left">'+ brief + addresses[key].fullname+'</div>'+
                                              '<div class="title-right">'+addresses[key].mobile+'</div>'+
                                            '</div>'+
                                            '<div class="address-content">'+
                                                '<p>'+addresses[key].province+addresses[key].city+addresses[key].county+'</p>'+
                                                '<p>'+addresses[key].street+'</p>'+
                                            '</div>'+
                                        '</div>';


                }
                var btnHtml = '<div class="creat-address"><a href="<?php echo base_url('address/create') ?>">新建地址</a></div>';
                $('.address-selected').html(addressHtml+btnHtml);
        });

        $('.address-selected').on('click','.address-list',function(){
            console.log('变更地址');
            var id = $(this).attr('data-id');
            default_address_id = id;
            $('.address-selected').css('display','none');
            $('#addressSelected').html($(this).html());


            $('[name=address_id]').val(default_address_id);
        });
        var brief = '';
        for(var key in addresses){
            console.log('ads');
            console.log(addresses[key].address_id);
            if(addresses[key].brief !== null){
                brief = '<span class="address-type">'+addresses[key].brief+'</span>';
            }else{
                brief = '';
            }
            if(default_address_id == addresses[key].address_id ){
                var addressHtml = '<div class="address-title clearfix">'+
                                      '<div class="title-left">'+brief+addresses[key].fullname+'</div>'+
                                      '<div class="title-right">'+addresses[key].mobile+'</div>'+
                                  '</div>'+
                                  '<div class="address-content">'+
                                      '<p>'+addresses[key].province+addresses[key].city+addresses[key].county+'</p>'+
                                      '<p>'+addresses[key].street+'</p>'+
                                  '</div>';
                $('.address-create').html(addressHtml);
            }else{
                var addressHtml = '<div class="address-title clearfix">'+
                                   '<div class="title-left">'+brief+addresses[0].fullname+'</div>'+
                                   '<div class="title-right">'+addresses[0].mobile+'</div>'+
                               '</div>'+
                               '<div class="address-content">'+
                                   '<p>'+addresses[0].province+addresses[0].city+addresses[0].county+'</p>'+
                                   '<p>'+addresses[0].street+'</p>'+
                               '</div>';
                 $('.address-create').html(addressHtml);
                 $('[name=address_id]').val(addresses[0].address_id);
            }

        };


        // 默认地址
        $('[name=address_id]').val(default_address_id);


        // 待下单商品信息
        //console.log(getQueryString(cart_string));

        var cart_string = '';
        for (var i in order_data)
        {
            var order_items = order_data[i]['order_items'];
            // bizName
            var couponNameStyle = 'display:block;';
            if(order_data[i].coupon_name == null){
                 couponNameStyle = 'display:none;';
            };
            // var bizNameHtml = '<div style="margin-top:0.15rem;background:#fff;border-radius:0.15rem;"><a href="<?php echo base_url('biz/detail') . "?&id='+order_data[i].biz_id+'" ?>" class="item-title clearfix">'+
            //                      '<div class="title-left left-float"><i class="icon-dianpu"></i><span>'+order_data[i].biz_name+'</span></div>'+
            //                      '<div class="title-right right-float"><i class="icon-Arrow"></i></div>'+
            //                   '</a>';
            var bizNameHtml = '<div style="margin-top:0.15rem;background:#fff;border-radius:0.15rem;"><a href="javascript:void(0)" class="item-title clearfix">'+
                                 '<div class="title-left left-float"><i class="icon-dianpu"></i><span>'+order_data[i].biz_name+'</span></div>'+
                                 '<div class="title-right right-float"><i class="icon-Arrow"></i></div>'+
                              '</a>';
            var botHtml ='<div style="'+couponNameStyle+'" class="item-title clearfix">'+
                             '<div class="title-left left-float">店铺优惠</div>'+
                             '<div class="title-right right-float"><span>'+order_data[i].coupon_name+'</span><i class="icon-Arrow"></i></div>'+
                         '</div>'+
                         '<div class="item-title clearfix">'+
                             '<div class="title-left left-float">配送方式</div>';
             
                botHtml += '<div class="title-right right-float"><span>'+order_data[i].dispatch+'</span><i class="icon-Arrow"></i></div>';
           
                
                botHtml += '</div>' +
                         '<div class="item-title clearfix">'+
                            '<input class="message" type="text" placeholder="给卖家留言">'+
                         '</div>'+
                         '<div class="total">'+
                             '共<span class="current-count">'+order_items.length+'</span>件商品 合计：¥ <span class="subtotal">'+order_data[i].subtotal+'</span>(含运费¥ 0.00)'+
                         '</div></div>';
            var orderItemHtml = '';
            for (var j in order_items)
            {
                var order = order_items[j];
                cart_string += (','+order['biz_id'] + '|' + order['item_id'] + '|' + (order['sku_id'] || 0) + '|' + (order['count'] || 1));
                //orderItemHtml
                var slogan = order_items[j].slogan;
                if(slogan == null){
                   slogan = '';
                };
                var imgUrl = order_items[j].item_image;
                var reg = RegExp(/http/);
                console.log(reg.test(imgUrl)); // true
                if(reg.test(imgUrl) !== true){
                     imgUrl = '<?php echo MEDIA_URL ?>'+'item/';
                }else{
                     imgUrl =''
                }
                var countHTML = '';
                if(immediately == 'yes'){
                    countHTML ='<div class="item-count"><i id="jian" class="icon-jian"></i><span class="current-count">'+order_items[j].count+'</span><i id="add" class="icon-add-add-red"></i></div>';

                }else{

                }
                // orderItemHtml +='<a href="'+ base_url+'biz/detail?&id='+order_data[i].biz_id +'" class="item-detail">'+
                //                     '<div class="item-left"><img src="'+imgUrl+order_items[j].item_image+'" alt=""></div>'+
                //                     '<div class="item-center">'+
                //                         '<p>'+order_items[j].name+'</p>'+
                //                         '<p>'+slogan+'</p>'+
                //                         '<p>¥ <span class="currentItemPrice">'+order_items[j].price+'</span>×<span class="countNum">'+order_items[j].count+'</span></p>'+
                //                     '</div>'+
                //                 '</a>'+ countHTML;

                orderItemHtml +='<a href="javascript:void(0)" class="item-detail">'+
                                    '<div class="item-left"><img src="'+imgUrl+order_items[j].item_image+'" alt=""></div>'+
                                    '<div class="item-center">'+
                                        '<p>'+order_items[j].name+'</p>'+
                                        '<p>'+slogan+'</p>'+
                                        '<p>¥ <span class="currentItemPrice">'+order_items[j].price+'</span>×<span class="countNum">'+order_items[j].count+'</span></p>'+
                                    '</div>'+
                                '</a>'+ countHTML;
            }

            $('.order-having').append(bizNameHtml + orderItemHtml + botHtml);



        }
        //增加件数

        $('#add').on('click',function(){
            var num = parseInt($('.countNum').text());
             var n = 1;
            console.log(quantity_max);
            if(num < quantity_max){
                num = num + n;
                $('.countNum').text(num);
                $('.current-count').text(num);
                var price = $('.currentItemPrice').text();
                $('.subtotal').text((num*price+(parseInt(orderList.freight))-(parseInt(orderList.discount))).toFixed(2));
                cart_string = (','+order['biz_id'] + '|' + order['item_id'] + '|' + (order['sku_id'] || 0) + '|' + (num || 1));
                console.log(cart_string);
                $.ajax({
                     url: api_url + 'order/prepare',
                     data: {app_type:'client',user_id:user_id,cart_string:cart_string},
                     cache: false,
                     success: function(result)
                     {
                         console.log(result);
                         if (result.status === 200)
                         {
                            var list = result.content.price_list;
                              $('.totalPrice').text(list.price);
                              $('.totalFreight').text(list.freight);
                              $('.totalDiscount').text(list.discount);
                              $('.totalSum').text(list.sum);
                         }
                         else if (result.status !== undefined)
                         {
                             alert(result.content.error.message);
                         }
                         else
                         {
                             alert('网络通信失败，请稍后重试');
                         }
                     },
                 });

                $('[name=cart_string]').val(cart_string);
            }else{
                console.log(num);
            }

        });
        $('#jian').on('click',function(){
            var num = parseInt($('.countNum').text());
            var n = 1;
            console.log(num);
            if(num > 1){
                num = num - n;
                $('.countNum').text(num);
                $('.current-count').text(num);
                var price = $('.currentItemPrice').text();
                $('.subtotal').text((num*price+(parseInt(orderList.freight))-(parseInt(orderList.discount))).toFixed(2));
                cart_string = (','+order['biz_id'] + '|' + order['item_id'] + '|' + (order['sku_id'] || 0) + '|' + (num || 1));
                console.log(cart_string);
                $.ajax({
                    url: api_url + 'order/prepare',
                    data: {app_type:'client',user_id:user_id,cart_string:cart_string},
                    cache: false,
                    success: function(result)
                    {
                        console.log(result);
                        if (result.status === 200)
                        {
                           var list = result.content.price_list;
                             $('.totalPrice').text(list.price);
                             $('.totalFreight').text(list.freight);
                             $('.totalDiscount').text(list.discount);
                             $('.totalSum').text(list.sum);
                        }
                        else if (result.status !== undefined)
                        {
                            alert(result.content.error.message);
                        }
                        else
                        {
                            alert('网络通信失败，请稍后重试');
                        }
                    },
                });
                $('[name=cart_string]').val(cart_string);
            }

        });

        //优惠信息
        $('.totalPrice').text(orderList.price);
        $('.totalFreight').text(orderList.freight);
        $('.totalDiscount').text(orderList.discount);
        $('.totalSum').text(orderList.sum);


        $('[name=cart_string]').val(cart_string);

        // 提交表单
        $('[type=submit]').click(function(){
            $('[name=note_user]').val($('.message').val());

            if(addresses.length<1){

                console.log('address none');

                if(confirm("您还没有收货地址，是否创建？"))
                {
                    var target_url = base_url + 'address/create?fromorder=1' ;
                    location.href = target_url;
                }
                else{

                }



            }else{
                console.log('address');
                var form_data = $('form').serializeArray(); // 获取表单中参数为键值对数组

                // 初始化参数
                params = common_params;

                // 赋值表单中各字段
                $.each(form_data, function(i, field){
                    params[field.name] = field.value;
                });
                params['wepay_from'] = '公众号';
                params['immediately'] = 'no';
                if(immediately == 'yes'){
                    params['immediately'] = 'yes';
                }
                $.ajax({
                    url: api_url + 'order/create',
                    data: params,
                    cache: false,
                    success: function(result)
                    {
                        console.log(result);
                        if (result.status === 200)
                        {   
                            // 转到支付页
                            var target_url = base_url + 'order/pay?id=' + result.content.ids;
                            location.href = target_url;
                        }
                        else if (result.status !== undefined)
                        {
                            alert(result.content.error.message);
                        }
                        else
                        {
                            alert('网络通信失败，请稍后重试');
                        }
                    },
                });
            }


        });
        function getQueryString(name){
             var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
             var r = window.location.search.substr(1).match(reg);
             if (r!=null) return r[2]; return '';
        }
    })
</script>
