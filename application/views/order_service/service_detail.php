<script src="<?php echo CDN_URL ?>js/rem.js"></script>
<script src="<?php echo CDN_URL ?>js/clipboard.js"></script>
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css">
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/normal.css">
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/base.css">
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/order.css">
<style>
        .terminable{
            font-size: 0.22rem;color: #9FA0A0;
            padding-right: 0.2rem;
            font-weight:400;

        }
        .icon-tel:before {
          content: "\e90c";
          color: #585859;
          font-size:0.4rem;
          padding-right:0.3rem;
        }
        .icon-时间:before {
          content: "\e934";
          color: #585859;
                    font-size:0.4rem;
        }
</style>

<div class="box">
    <div class="line"></div>

    <div class="order-content">
        <div class="order-list">
            <div class="item-title clearfix price-info">
                <div class="title-left left-float"><span>服务券</span></div>
                <div class="title-right right-float terminable">有效期至 <span id="terminable"></span></div>
            </div>
            <div class="total-box">
                <div class="total"><span>验证码 <i id="verifyCode"></i></span><span id="currentStatus" style="font-size: 0.24rem;color: #ff3649;"></span></div>
            </div>
        </div>
    </div>
    <div class="price-type">
        <div class="price-info">商家信息</div>
        <div class="total-box">
            <div class="total"><span id="bizName" style="font-size: 0.22rem;color: #9FA0A0;"></span><span id="bizTel"> </span></div>
        </div>
    </div>
    <div class="price-type">
        <div class="price-info">订单信息</div>
        <div class="total-box" id="orderDetail">

        </div>
    </div>

</div>
<script>

	$(function(){
	    var params = common_params;
        params.user_id = '783';
        params.id = getQueryString('orderId');
        params.record_id=getQueryString('recordId');

        console.log(params);
        $.post(
            api_url + 'order/detailitem',
            params,
            function(result)
            {
                console.log(result); // 输出回调数据到控制台
                if (result.status == 200)
                {
                    var item = result.content;
                    var itemList = result.content.order_items[0];
                    $('#bizName').text(item.biz_name);
                    $('#terminable').text(timestampToTime(itemList.time_expire));
                    $('#verifyCode').text(itemList.verify_code);
                    $('#bizTel').html('<a href="tel:'+item.mobile+'"><i class="icon-tel"></i></a>');
                    if(itemList.refund_status == '未申请'){
                        $('#currentStatus').html('<a style="color:#ff3649" href="' + base_url + 'refund/create?id=' +itemList.order_id + '&record='+itemList.record_id+'">申请退款</a>');
                    }else{
                        $('#currentStatus').html('<span style="color:#ff3649">'+itemList.refund_status+'</span>');

                    }

                    var orderHtml ='<div class="total" style="color: #9FA0A0;">订单编号：<span>'+itemList.record_id+'</span><span> </span></div>'+
                                   '<div class="total" style="color: #9FA0A0;">手机号：<span>'+item.mobile+'</span><span> </span></div>'+
                                   '<div class="total" style="color: #9FA0A0;">付款时间：<span>'+timestampToTime(item.time_pay)+'</span><span> </span></div>'+
                                   '<div class="total" style="color: #9FA0A0;">实付：<span>¥'+item.total_payed+'</span><span> </span> </div>';
                    $('#orderDetail').append(orderHtml);
                }
            }

        );

        function save(cp_value){
            var num = new Object;
            num.cp_keynum ="baseInfo";
            num.cp_num_value = cp_value;
            var str = JSON.stringify(num); // 将对象转换为字符串
            localStorage.setItem(num.cp_keynum,str);
            console.log(str);
        }
         function getQueryString(name){
               var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
               var r = window.location.search.substr(1).match(reg);
               if (r!=null) return r[2]; return '';
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
                         }else{
                            time = hour + "小时" + min + "分";

                         }
                     }


                 }

                 return time;
             }



	})
</script>