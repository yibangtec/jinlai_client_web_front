

    <script src="<?php echo CDN_URL ?>js/rem.js"></script>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css"/>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/refund.css"/>

    <div class="box">
        <div class="placeholder-div"></div>
        <div class="record-list">

        </div>
    </div>
    <script>
    $(function(){

        var item = find();
        var userId = item.user_id;
        var name = '';
            $.ajax({
                url: api_url + 'user/detail',
                data: {app_type:'client',id:userId},
                success: function(result){
                		//console.log(result); // 输出回调数据到控制台
                     if (result.status == 200)
                     {
                        //window.history.back(-1);
                      name = result.content.nickname;
                      console.log(name);
                      var itemHtml = '<div class="record-shops clearfix">'+
                                                     '<div class="shop-name">'+
                                                         '<i class="icon-wode-2"></i>'+
                                                         '<span>'+ name +'</span>'+
                                                     '</div>'+
                                                     '<div class="record-date">'+item.time_edit+'</div>'+
                                                 '</div>'+
                                                 '<div class="record-detail">'+
                                                     '<p class="record-message">买家家于'+item.time_edit+'创建了退款申请</p>'+
                                                     '<p class="record-type">退款类型：'+item.type+'</p>'+
                                                     '<p class="record-type">退款金额：¥：'+item.order_item.price+'</p>'+
                                                     '<p class="record-type">退款原因：协商一致退款</p>'+
                                                 '</div>';

                                  $('.record-list').append(itemHtml);

                     } else {
                        alert(result.content.error.message);
                     }
                },
                error:function(result){
                	console.log(result);
                },
                dataType: 'json'
            });


        function find(){
            var cp_keynum = "baseInfo";
            var str = localStorage.getItem(cp_keynum);
            var num = JSON.parse(str);
            return num.cp_num_value
        }
    })
    </script>
