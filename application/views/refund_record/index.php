

    <script src="<?php echo CDN_URL ?>js/rem.js"></script>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css"/>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/refund.css"/>

    <div class="box">
        <div class="placeholder-div"></div>
        <div class="record-list">
            <div class="record-shops clearfix">
                <div class="shop-name">
                    <i class="icon-dianpu"></i>
                    <span>东塘文身</span>
                </div>
                <div class="record-date">2017-09-01 11:09</div>
            </div>
            <div class="record-detail">
                <p class="record-message">卖家（东堂纹身）已同意了退款申请</p>
            </div>
        </div>
        <div class="record-list">
            <div class="record-shops clearfix">
                <div class="shop-name">
                    <i class="icon-dianpu"></i>
                    <span>东塘文身</span>
                </div>
                <div class="record-date">2017-09-01 11:09</div>
            </div>
            <div class="record-detail">
                <p class="record-message">该笔订单已于2017年09月01日，批量同意退款。</p>
                <p class="record-operation">操作人：东堂纹身：晓东</p>
            </div>
        </div>
        <div class="record-list">
            <div class="record-shops clearfix">
                <div class="shop-name">
                    <i class="icon-dianpu"></i>
                    <span>东塘文身</span>
                </div>
                <div class="record-date">2017-09-01 11:09</div>
            </div>
            <div class="record-detail">
                <p class="record-message">该笔订单已通过退款审核，审核员为：【晓东】</p>
            </div>
        </div>
        <div class="record-list">
            <div class="record-shops clearfix">
                <div class="shop-name">
                    <i class="icon-wode-2"></i>
                    <span>东塘文身</span>
                </div>
                <div class="record-date">2017-09-01 11:09</div>
            </div>
            <div class="record-detail">
                <p class="record-message">卖家小叶于2017-09-01 10:60:10创建了退款申请</p>
                <p class="record-type">退款类型：不退货仅退款</p>
                <p class="record-type">退款金额：¥：49.80</p>
                <p class="record-type">退款原因：协商一致退款</p>
            </div>
        </div>
    </div>
    <script>
    		// 由于全局的api_url被文件上传功能相关JS中的同名变量污染，需要重新声明API根URL
                var real_api_url = '<?php echo API_URL ?>';
                var obj = {app_type:'client'};
                var id = getQueryString('id');
                obj.id = id;
                $.ajax({
                      url: real_api_url + 'refund_record/index',
                      data: obj,
                      success: function(result){
                      		console.log(result); // 输出回调数据到控制台
                           if (result.status == 200)
                           {



                           } else {
                              alert(result.content.error.message);
                           }
                      },
                      error:function(result){
                      	console.log(result);
                      },
                      dataType: 'json'
                });



                 function getQueryString(name){
                      var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
                      var r = window.location.search.substr(1).match(reg);
                      if (r!=null) return r[2]; return '';
                 }
    </script>
