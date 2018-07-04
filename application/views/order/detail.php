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
        border:1px solid #9fa0a0;
        border-radius: 0.27rem;
        position: absolute;
        bottom: 0;
        right: -0.2rem;
    }
    .item-operation a{
        display: inline-block;
        width: 1.2rem;
        height: 0.54rem;
        text-align: center;
        line-height: 0.5rem;
        margin: 0.5rem 0.2rem 0 0;
        border: 0.02rem solid #9fa0a0;
        border-radius: 0.27rem;
        color:#3e3a39;

    .detail-btn a{
        color:#3e3a39;
    }
    .total-box .current-status{color:#ff3649;}
    /* 订单信息 */
    .order-parameter li {line-height:0.34rem;overflow:hidden;}
        .order-parameter span:before {content:' ';}

    /* 操作栏 */
    [data-action-group] {display:none;}
</style>

<div class="tips">
    <div class="delete">
        <p>确认删除？</p>
        <p>您可以从回收站找回已删除的订单</p>
        <div class="confirm-select clearfix">
            <div class="cancel-btn">取消</div>
            <div id="delConfirm" class="del-confirm">确定</div>
        </div>
    </div>
    <div class="receipt">
        <div class="place-input">请输入账户密码</div>
        <input id="password" type=password placeholder="请输入密码">
        <div class="forget"><a href="">忘记密码?</a></div>
        <div class="confirm-select clearfix">
            <div class="cancel-btn">取消</div>
            <div id="receiptSubmit" class="receipt-confirm">确定</div>
        </div>
    </div>
    <div class="cancel">
        <div class="cancel-reason">取消原因</div>
        <div>
            <div class="reason-list clearfix">
                <span>我不想买了</span> <i data-value="我不想买了" class="reasonSelect"></i>
            </div>
            <div class="reason-list clearfix">
                <span>信息填写错误，重新拍</span> <i data-value="信息填写错误，重新拍" class="reasonUnSelect"></i>
            </div>
            <div class="reason-list clearfix">
                <span>卖家缺货</span> <i data-value="卖家缺货" class="reasonUnSelect"></i>
            </div>
            <div class="reason-list clearfix">
                <span>同城见面交易</span> <i data-value="同城见面交易" class="reasonUnSelect"></i>
            </div>
            <div class="reason-list clearfix">
                <span>其它原因</span> <i data-value="其它原因" class="reasonUnSelect"></i>
            </div>
        </div>
        <div class="confirm-select clearfix">
            <div class="cancel-btn">取消</div>
            <div id="cancelSubmit" class="receipt-confirm">确定</div>
        </div>
    </div>
</div>
<div class="box">
    <div class="line"></div>
    <div class="detail-header">
        <div class="detail-type1 status1">
            <p style="padding-top: 0.25rem">待评价</p>
            <p style="padding-top: 0.2rem"><span class="remainingTime">2天2小时</span>后自动好评</p>
        </div>
        <div class="detail-type2 status2">
            <p style="padding-top: 0.45rem">已评价</p>
        </div>
        <div class="detail-type3 status3">
            <p style="padding-top: 0.25rem">等待卖家发货</p>
            <p style="padding-top: 0.2rem"><span class="remainingTime">2天2小时</span>后未发货则自动退款</p>
        </div>
        <div class="detail-type4 status4">
            <p style="padding-top: 0.25rem">等待买家付款</p>
            <p style="padding-top: 0.2rem"><span class="remainingTime">2天2小时</span>后未付款则自动关闭</p>
        </div>
        <div class="detail-type5 status5">
            <p style="padding-top: 0.25rem">待收货</p>
            <p style="padding-top: 0.2rem"><span class="remainingTime">2天2小时</span>后自动确认收货</p>
        </div>
        <div class="detail-type6 status6">
            <p style="padding-top: 0.25rem">已关闭</p>
            <p style="padding-top: 0.2rem">超时未付款</p>
        </div>
        <div class="detail-type6 status7">
            <p style="padding-top: 0.25rem">已取消</p>
            <p style="padding-top: 0.2rem"></p>
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
            <div style="<?php echo $item['discount_coupon'] == '0.00' ? 'display:none' : 'display:block'; ?>" class="total"><span>优惠券抵扣</span><span style="color:#ff3649;">-¥<?php echo $item['discount_coupon'] ?></span></div>
            <div style="<?php echo $item['credit_payed'] == '0' ? 'display:none' : 'display:block'; ?>" class="total"><span>积分抵扣</span><span>¥<?php echo $item['credit_payed'] ?></span></div>
            <div style="<?php echo $item['total_payed'] == '0.00' ? 'display:none' : 'display:block'; ?>" class="total"><span class="weight">实付金额</span><span class="weight">¥<?php echo $item['total_payed'] ?></span></div>
        </div>
    </div>

    <div class="detail-btn clearfix">
        <!--<a title="客服" href="<?php echo base_url('message?biz_id='.$item['biz_id']) ?>">客服</a>-->
        <div class="customer-service"><a href="tel:<?php echo $item['tel_public'] ?>">联系卖家</a></div>
        <div class="tel-service"><a href="tel:<?php echo $item['tel_public'] ?>">拨打电话</a></div>
    </div>

    <ul class=order-parameter>
        <li data-name=order_id>
            订单号<span id="selectorOrder"></span>
            <div class=number-copy  id="copyOrder">复制</div>
        </li>
        <li data-name=time_create>创建时间<span></span></li>
        <li data-name=time_cancel data-group=time_cancel>取消时间<span></span></li>
        <li data-name=time_expire data-group=time_expire>过期时间<span></span></li>

        <!-- 支付相关信息 -->
        <li data-name=time_pay data-group=payed>付款时间<span></span></li>
        <li data-name=payment_type data-group=payed>支付方式<span></span></li>
        <li data-name=payment_id data-group=payed>
            支付流水号<span id="selectorWrite"></span>
            <div class=number-copy  id="copyWrite">复制</div>
        </li>

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
        <a class="can-btn" data-action=cancel href="#">取消</a>
        <a style="color: #FF3649;border: 0.01rem solid #FF3649" data-action=pay href="#">去付款</a>
    </div>

    <!--待发货-->
    <div class="detail-operation status3" data-action-group="待发货">
        <a class="refundBtn" data-action=refund href="#">申请退款</a>
    </div>

    <!--待收货-->
    <div class="detail-operation status5" data-action-group="待收货">
        <a class="again" href="#">再来一单</a>
        <!--<a>查看物流</a>-->
        <a class="refundBtn" data-action=refund href="#">申请退款</a>
        <a class="goods-receipt" style="color: #FF3649;border: 0.01rem solid #FF3649" data-action=confirm href="#">确认收货</a>
    </div>
    <!--已关闭-->
    <div class="detail-operation status6" data-action-group="已关闭">
        <a class="del-btn" data-action=delete href="#">删除</a>
    </div>
    <!--待评价-->
    <div class="detail-operation status1" data-action-group="待评价">
        <a class="del-btn" data-action=delete href="#">删除</a>
        <a class="refundBtn" data-action=refund href="#">申请售后</a>
        <a class="again" href="#">再来一单</a>
        <a href="<?php echo base_url('comment_item/create') ?>" class="pingjia" style="color: #FF3649;border: 0.01rem solid #FF3649" data-action=comment >写评价</a>
    </div>
    <!--已评价-->
    <div class="detail-operation status2" data-action-group="已评价">
        <a class="del-btn" data-action=delete href="#">删除</a>
        <a class="refundBtn" data-action=refund href="#">申请售后</a>
        <a>追加评论</a>
    </div>
    <!--已取消-->
    <div class="detail-operation status7" data-action-group="已取消">
        <a class="del-btn" data-action=delete href="#">删除</a>
    </div>
</div>

<script>
	$(function(){
		var params = common_params;
		var item = <?php echo json_encode($item) ?>;
        console.log(item);
        var refund_base_url = ''; // 单品退款根URL
        var reasonCancel = '我不想买了';
        var password = '';
        var orderID = item.order_id;
        params.ids = orderID;
        console.log(params);

        var status = item.status;
        console.log(status)
        var meta = <?php echo json_encode($meta) ?>;
        console.log(meta)
        var orderItems = item.order_items;
        function save(cp_value){
            var num = new Object;
            num.cp_keynum ="baseInfo";
            num.cp_num_value = cp_value;
            var str = JSON.stringify(num); // 将对象转换为字符串
            localStorage.setItem(num.cp_keynum,str);
            console.log(str);
        }
        /*$('body').on('click','.refundBtn',function(){
            if(true){
                 if(confirm("网页版退款功能即将开放，现阶段您可通过AppStore下载进来商城应用申请退款"))
                  {

                  }
             }
        });*/
        $('body').on('click','.pingjia',function(){

           save(item);

        });
        $('.again').on('click',function(){
            var cart_string = ''; // CSV格式，商家ID|商品ID|SKU_ID(若无SKU则写0)|商品数量

            console.log(orderItems)
            var arr = [];
            var sku = '';
            for (var j in orderItems)
            {
                sku = orderItems[j].sku_id;

                if(sku == ''|| sku == null){
                  sku = 0;
                }
                var str = orderItems[j].biz_id+'|'+orderItems[j].item_id+'|'+sku+'|'+orderItems[j].count;
                arr.push(str);
            }
            cart_string = arr.join(',');
            console.log(cart_string);
            location.href = base_url + "order/create?cart_string="+cart_string;
        });

        $('.cancel').on('click',function(event){
                    event.stopPropagation()
                })
                $('.receipt').on('click',function(event){
                    event.stopPropagation()
                });

                $('.delete').on('click',function(event){
                 event.stopPropagation();
                });
                $('.tips').on('click',function(){
                    $(this).hide().children().hide();
                });

                $('.reason-list').on('click','i',function(){
                    var index =$(this).index;
                    $(this).addClass('reasonSelect').removeClass('reasonUnSelect').parent().siblings().children('i').addClass('reasonUnSelect').removeClass('reasonSelect');
                    reasonCancel = $(this).attr('data-value');
                    console.log(reasonCancel);
                });

                //弹框消失
                $('.cancel-btn').click(function(){
                    $('.tips').hide().children().hide();
                });

                $('body').on('click','.box .del-btn',function(){
                    orderID = $(this).attr('data-id');
                    $('.tips').show().children('.delete').show();
                });
                $('body').on('click','.box .can-btn',function(){
                    orderID = $(this).attr('data-id');
                    $('.tips').show().children('.cancel').show();
                });
                //确认收货
                $('body').on('click','.box .goods-receipt',function(){
                    orderID = $(this).attr('data-id');
                    $('.tips').show().children('.receipt').show();
                });

                /*$('.go-pay').click(function(){
                    $(location).attr('href', 'pay.html');
                })*/
                $('#delConfirm').on('click',function(){

                    params.operation = 'delete';
                    console.log(params);
                    $.post(
                         api_url + 'order/edit_bulk',
                         params,
                         function(result)
                         {
                             console.log(result); // 输出回调数据到控制台
                             if (result.status == 200)
                             {
                               $('.tips').hide().children('.delete').hide();
                             } else {
                                alert(result.content.error.message);
                             }
                         }
                    );
                });
                $('#cancelSubmit').on('click',function(){
                    params.operation = 'cancel';
                    params.reason_cancel= reasonCancel;
                    console.log(params);
                    $.post(
                         api_url + 'order/edit_bulk',
                         params,
                         function(result)
                         {
                             console.log(result); // 输出回调数据到控制台
                             if (result.status == 200)
                             {
                               $('.tips').hide().children('.cancel').hide();
                               location.href = base_url + "order/detail?id="+params.ids;
                             } else {
                                alert(result.content.error.message);
                             }
                         }
                     );
                });
                $('#receiptSubmit').on('click',function(){
                    password = $('#password').val();

                    if(password.length<6 || password.length>20){
                        if(confirm("密码长度应为6-20位"))
                         {
                            $('#password').val('').focus();
                         }
                    }else{
                        params.operation = 'confirm';
                        params.password= password;
                        console.log(params);
                        $.post(
                             api_url + 'order/edit_bulk',
                             params,
                             function(result)
                             {
                                 console.log(result); // 输出回调数据到控制台
                                 if (result.status == 200)
                                 {
                                   $('.tips').hide().children('.cancel').hide();
                                 } else {
                                    alert(result.content.error.message);
                                 }
                             }
                         );
                    }

                });

        // 状态自动变更时间不足1日时仅显示n小时，超过1日时显示n日n小时
         if (status == '待评价')
         {
             // meta.name=time_confirm_to_comment
             var time = '';
             for(var key in meta){
                if(meta[key].name == 'time_confirm_to_comment'){
                    console.log(meta[key].value);
                    var timestamp = Math.round(new Date().getTime()/1000).toString();
                    var temp = Number(item.time_create) + Number(meta[key].value/1000)
                    time = sec_to_time(timestamp-temp);
                    console.log(time);

                }
             }
             $('.status1').css('display','block');
             $('.remainingTime').html(time);
         }
         else if(status=='已评价')
         {
             $('.status2').css('display','block')
         }
         else if(status == '待发货')
         {
              //meta.name=time_pay_to_deliver;
              //console.log(meta.name);
             var time = '';
             for(var key in meta){
                if(meta[key].name == 'time_pay_to_deliver'){
                    console.log(meta[key].value);
                    var timestamp = Math.round(new Date().getTime()/1000).toString();
                    var temp = Number(item.time_create) + Number(meta[key].value/1000)
                    time = sec_to_time(timestamp-temp);
                    console.log(time);
                }
             }
             $('.status3').css('display','block');
             $('.remainingTime').html(time);
         }
         else if(status=='待付款')
         {
             // meta.name=time_created_to_expire
             var time = '';
             for(var key in meta){
                if(meta[key].name == 'time_created_to_expire'){
                    console.log(meta[key].value);
                    var timestamp = Math.round(new Date().getTime()/1000).toString();
                    var temp = Number(item.time_create) + Number(meta[key].value/1000)
                    time = sec_to_time(timestamp-temp);
                    console.log(time);
                }
             }
             $('.status4').css('display','block');
             $('.remainingTime').html(time);
         }
         else if(status=='待收货')
         {
             // meta.name=time_deliver_to_confirm
             var time = '';
             for(var key in meta){
                if(meta[key].name == 'time_deliver_to_confirm'){
                    console.log(meta[key].value);
                    var timestamp = Math.round(new Date().getTime()/1000).toString();
                    var temp = Number(item.time_create) + Number(meta[key].value/1000)
                    time = sec_to_time(timestamp-temp);
                    console.log(time);
                }
             }
             $('.status5').css('display','block');
             $('.remainingTime').html(time);
         }
         else if(status=='已关闭')
         {
             // meta.name=time_expire_to_delete
             $('.status6').css('display','block')
         }else if( status=='已取消')
         {
             // meta.name=time_expire_to_delete
             $('.status7').css('display','block')
         }else{
            // meta.name=time_expire_to_delete
            $('.status7').css('display','block')
         }


        // 订单号
        $('[data-name=order_id] span').html(item.order_id);
        $('.number-copy').attr('data-clipboard-text',item.order_id)

        $('[data-name=time_create] span').html( date(item.time_create) );
		
        // 接单/拒单
        if (item.time_accept > 0)
        {
            $('[data-name=time_accept] span').html( date(item.time_accept) );
            $('[data-name=time_refuse]').hide();
        }
        else if (item.time_refuse > 0)
        {
            $('[data-name=time_refuse] span').html( date(item.time_refuse) );
            $('[data-name=time_accept]').hide();
        }
	
        // 若已取消
        if (item.time_cancel > 0) {
            $('[data-name=time_cancel] span').html( date(item.time_cancel) );
        }
        else
        {
            $('[data-group=time_cancel]').hide()
        }
 		
        // 若已过期
        if (item.time_expire > 0) {

            $('[data-name=time_expire] span').html( date(item.time_expire) );

        }
        else
        {

            $('[data-group=time_expire]').hide()

        }

        // 若已付款
        if (item.time_pay > 0)
        {
            // 赋值DOM，下同
            $('[data-name=time_pay] span').html( date(item.time_pay) );
            $('[data-name=payment_type] span').html(item.payment_type);
            $('[data-name=payment_id] span').html(item.payment_id);

            // 生成单品退款根URL
            refund_base_url = base_url + 'refund/create?record_id=';
        }
        else
        {
            // 隐藏自该部分以下（含）信息DOM，下同
            hide_after('[data-name=time_pay]')

            // 生成操作页面链接并赋值到相应动作按钮
            $('[data-action=pay]').attr('href', base_url + 'order/pay?id=' + item.order_id)
            //$('[data-action=cancel]').attr('href', base_url + 'order/cancel?id=' + item.order_id)
            $('[data-action-group=待付款]').show();
        }

        // 若已发货
        if (item.time_deliver > 0)
        {
            $('[data-name=time_deliver] span').html(date(item.time_deliver));
            $('[data-name=deliver_method] span').html(date(item.deliver_method));
            $('[data-name=deliver_biz] span').html(date(item.deliver_biz));
            $('[data-name=waybill_id] span').html(date(item.waybill_id));
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
         var orderItems = item.order_items
         for(var key in orderItems)
         {


             // 生成订单所含商品主图URL
             var imgUrl = orderItems[key].item_image;
              var reg = RegExp(/http/);
              //console.log(reg.test(imgUrl)); // true
              if(reg.test(imgUrl) !== true){
                   imgUrl = '<?php echo MEDIA_URL ?>'+'item/';
              }else{
                   imgUrl =''
              }
            // 生成订单商品信息
            var timePay = item.time_pay;
            if(timePay!==''){
                timePay = '<a href="' + base_url + 'refund/create?id=' +orderItems[key].order_id + '" class="refundBtn" >退款</a>';
            }else{
                timePay = '';
            }
            if(orderItems[key].refund_status !== ''){
                timePay = '<a href="' + base_url + 'refund/detail?id=' +orderItems[key].order_id + '" class="refundBtn" >'+ orderItems[key].refund_status +'</a>';
            }else{
                timePay = '';
            }



             var order_item = '<div class="item-detail clearfix">'+
                            '<a href="' + base_url + 'item/detal?id=' + orderItems[key].item_id + '">' +
                            '<div class="item-left left-float"><img src="'+imgUrl+orderItems[key].item_image+'"></div>'+
                            '<div class="item-center left-float">'+
                                '<p>'+ orderItems[key].name +'</p>'+
                                (orderItems[key].slogan == null? '': '<p>'+orderItems[key].slogan+'</p>')+
                            '</div>'+
                            '<div class="item-right right-float">'+
                                 '<p>¥'+ orderItems[key].price +'</p>'+
                (Number(orderItems[key].tag_price) < Number(orderItems[key].price)? '': '<p class=price-text><del>¥'+ orderItems[key].tag_price +'</del></p>')+
                                 '<p class="cont-indent">&times; '+ orderItems[key].count +'</p>'+
                            '</div>'+
                            '</a>' +
                            (refund_base_url == ''? '': '<div class="item-operation">'+ timePay +'</div>') +

                       '</div>';

                       //href="'+ refund_base_url+item.record_id +'"   tuikuan
             //console.log(order_item);
             $('#orderList').append(order_item);
         }

         function timestampToTime(timestamp) {
                 var date = new Date(timestamp * 1000);//时间戳为10位需*1000，时间戳为13位的话不需乘1000
                 Y = date.getFullYear() + '-';
                 M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';
                 D = date.getDate() + ' ';
                 h = date.getHours() + ':';
                 m = date.getMinutes() + ':';
                 s = date.getSeconds();
                 return Y+M+D+h+m+s;
             }

         function sec_to_time(second_time) {
                 var time = parseInt(second_time) + "秒";
                 if( parseInt(second_time )> 60){

                     var second = parseInt(second_time) % 60;
                     var min = parseInt(second_time / 60);
                     time = min + "分" + second + "秒";

                     if( min > 60 ){
                         min = parseInt(second_time / 60) % 60;
                         var hour = parseInt( parseInt(second_time / 60) /60 );
                         time = hour + "小时" + min + "分" + second + "秒";

                         if( hour > 24 ){
                             hour = parseInt( parseInt(second_time / 60) /60 ) % 24;
                             var day = parseInt( parseInt( parseInt(second_time / 60) /60 ) / 24 );
                             //time = day + "天" + hour + "小时" + min + "分" + second + "秒";
                             time = day + "天" + hour + "小时";
                         }
                     }


                 }

                 return time;
             }
        var aEle = document.querySelector('#copyOrder');
                aEle.addEventListener('click',function(){
                var copyDOM = document.querySelector('#selectorOrder');
                var range = document.createRange();
                range.selectNode(copyDOM);
                window.getSelection().addRange(range);
                var successful = document.execCommand('copy');
                try {
                // Now that we've selected the anchor text, execute the copy command

                var msg = successful ? copyDOM.innerText : 'unsuccessful';
                if (confirm('已复制'+msg)==true){

                 }else{
                  return false;
                 }
                } catch(err) {
                console.log('Oops, unable to copy');
                }

                // Remove the selections - NOTE: Should use
                // removeRange(range) when it is supported
                window.getSelection().removeAllRanges();
                },false);

        var WriteEle = document.querySelector('#copyWrite');
                WriteEle.addEventListener('click',function(){
                var copyDOM = document.querySelector('#selectorWrite');
                var range = document.createRange();
                range.selectNode(copyDOM);
                window.getSelection().addRange(range);
                var successful = document.execCommand('copy');
                try {
                // Now that we've selected the anchor text, execute the copy command

                var msg = successful ? copyDOM.innerText : 'unsuccessful';
                if (confirm('已复制'+msg)==true){

                 }else{
                  return false;
                 }
                } catch(err) {
                console.log('Oops, unable to copy');
                }

                // Remove the selections - NOTE: Should use
                // removeRange(range) when it is supported
                window.getSelection().removeAllRanges();
                },false);


	})
</script>