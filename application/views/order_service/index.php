<script src="<?php echo CDN_URL ?>js/rem.js"></script>
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css">
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/normal.css">
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/base.css">
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/order.css">
<style>
.item-operation a{
        display: inline-block;
        width: 1.2rem;
        height: 0.54rem;
        text-align: center;
        line-height: 0.5rem;
        margin: 0.5rem 0.2rem 0 0;
        border: 0.02rem solid #9fa0a0;
        border-radius: 0.27rem;
        color:#3e3a39;}
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
        <input id="password" minlength="6" type="password" placeholder="请输入密码"/>
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
                <span>其他原因</span> <i data-value="其他原因" class="reasonUnSelect"></i>
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
    <ul class="order-header clearfix">
        <li><a data-id="orderList" class="order-tab order-active">全部</a></li>
        <li><a data-id="orderList1" class="order-tab">待付款</a></li>
        <li><a data-id="orderList2" class="order-tab">待发货</a></li>
        <li><a data-id="orderList3" class="order-tab">待收货</a></li>
        <li><a data-id="orderList4" class="order-tab">待评价</a></li>
    </ul>
    <div class="content">
        <div class="order-item-none">
            <img class="icon_noorder" src="<?php echo CDN_URL ?>media/order/icon_noorder.png" alt="">
            <p class="text-noorder">您没有该状态的订单</p>
        </div>

        <div class="order-all" id="orderList" style="display: block">

        </div>
    </div>


</div>
<div class="load-more" style="margin: 0.2rem;text-align: center;font-size: 0.3rem;color: #3E3A39;display:none;" id="load-more">点击加载更多</div>

<script>
    $(function(){

        var params = common_params;
        params.user_id = user_id;
        params.nature = '服务';
        

        console.log(params);
        $.post(
            api_url + 'order/index',
            params,
            function(result)
            {
                console.log(result); // 输出回调数据到控制台
                if (result.status == 200)
                {
                  $('.tips').hide().children('.receipt').hide();
                } else {
                   alert(result.content.error.message);
                }
            }
        );


    //save(params)
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

    });


</script>
