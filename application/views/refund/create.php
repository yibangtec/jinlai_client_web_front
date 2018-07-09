
		<title>退款申请</title>
		<script src="<?php echo CDN_URL ?>js/rem.js"></script>
		<link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css"/>
		<link rel="stylesheet" href="<?php echo CDN_URL ?>css/refund.css"/>
		<style>
                .textarea{
                    width:6.6rem;
                    height:2.7rem;
                    border:none;
                    margin: 0 0.2rem;
                    border:none;

                }
                .img-list{
                    float: left;
                    width: 1.25rem;
                    height: 1.25rem;
                    border-radius: 0.12rem;
                    margin-right: 0.1rem;
                }
                .up-img img{
                    display: block;
                    width: 1.25rem;
                    height: 1.25rem;
                    border-radius: 0.12rem;
                }
                .tips{display: none;width: 100%;height: 100%;background-color: rgba(0, 0, 0, 0.3);position: fixed; z-index: 100;margin-top: -0.2rem;
                }
                .delete{
                    display: none;
                    width: 6.5rem;
                    height: 3rem;
                    background-color: #fff;
                    position: absolute;
                    left: 50%;
                    margin-left: -3.25rem;
                    top: 50%;
                    margin-top: -1.8rem;
                    border-radius: 0.15rem;
                    font-size: 0.3rem;
                }
                .delete p:first-child{
                    height: 0.88rem;
                    line-height: 0.88rem;
                    color: #ff3649;
                    padding-left: 0.2rem;
                }
                .delete p:nth-child(2){
                    font-size: 0.26rem;
                    color: #3e3a39;
                    padding: 0.3rem 0 0.6rem 0.2rem;
                    border-bottom: 0.01rem solid #c9caca;
                }
                .confirm-select{
                    width: 100%;
                    padding-top: 0.2rem;
                }
                .confirm-select div{
                    float: left;
                    width: 50%;
                    box-sizing: border-box;
                    text-align: center;
                }
                .confirm-select div:first-child{
                    border-right: 0.01rem solid #c9caca;
                }
                .confirm-select div:nth-child(2){
                    color: #ff3649;
                }
                .receipt{
                    display: none;
                    position: absolute;
                    width: 6.5rem;
                    height: 3.65rem;
                    color: #3e3a39;
                    background-color: #fff;
                    left: 50%;
                    margin-left: -3.25rem;
                    top: 50%;
                    margin-top: -1.8rem;
                    border-radius: 0.15rem;
                    font-size: 0.3rem;
                }
                .place-input{
                    padding: 0.2rem 0;
                    text-align: center;
                    border-bottom: 0.01rem solid #c9caca;
                }
                .receipt input{
                    height: 0.8rem;
                    width: 5.42rem;
                    border: 0.02rem solid #c9caca;
                    border-radius: 0.12rem;
                    margin: 0.4rem 0 0 0.43rem;
                    padding-left: 0.2rem;
                }
                .forget{
                    text-align: right;
                    border-bottom: 0.01rem solid #c9caca;
                }
                .forget a{
                    display: inline-block;
                    font-size: 0.26rem;
                    color: #9fa0a0;
                    padding: 0.2rem 0.4rem 0.2rem 0;
                }
                .cancel{
                    display: none;
                    position: absolute;
                    width: 6.5rem;
                    height: 5.2rem;
                    color: #3e3a39;
                    background-color: #fff;
                    left: 50%;
                    margin-left: -3.25rem;
                    top: 50%;
                    margin-top: -3.4rem;
                    border-radius: 0.15rem;
                    font-size: 0.3rem;
                }
                .cancel-reason{
                    color: #ff3649;
                    padding: 0.3rem 0 0.3rem 0.2rem;
                    border-bottom: 0.01rem solid #ff3649;
                }
                .reason-list span{
                    display: inline-block;
                    float: left;
                    margin-left: 0.2rem;
                    padding: 0.27rem 0;
                }
                .reason-list{
                    border-bottom: 0.01rem solid #c9caca;
                }
                .reason-list i{
                    float: right;
                    display: inline-block;
                    height: 0.4rem;
                    width: 0.4rem;
                    margin-top: 0.2rem;
                    margin-right: 0.2rem;
                }
                .reasonSelect{
                    background: url("<?php echo MEDIA_URL ?>media/order/xuanzhong@3x.png") no-repeat;
                    background-size: 0.4rem 0.4rem;
                }
                .reasonUnSelect{
                    background: url("<?php echo MEDIA_URL ?>media/order/weixuanzhong@3x.png") no-repeat;
                    background-size: 0.4rem 0.4rem;
                }
                .icon-Arrow{
                    margin-left: 0.1rem;
                }
                .line{
                    height: 0.2rem;
                    width: 100%;
                }
                .reason-list .icon-xuanzhong:before{
                	color:#ff3649;
                }
                .reason-list .icon-un-selected{
                 	color:#ff3649;
                }

               .box .file-uploader {overflow:hidden}
               .box .selector_zone {width:1.25rem;height:1.25rem;display:inline-block;position:relative; box-sizing:border-box;overflow:hidden;}
               .box input[type=file] {overflow:hidden;display:inline-block;}
               .box .file_selector {box-sizing:border-box;color:#ff3649;text-align:center;background-color:#fff;width:100%;height:100%;line-height:1.25rem;;border:0.02rem solid #ff3649;border-radius:0.12rem;display:inline-block;position:absolute;top:0;left:0;}

               .box .upload_preview {clear:both;}
               .box .upload_preview li {background-color:#ddd;position:relative;width:1.25rem;;height:1.25rem;;margin-right:0.1rem;border-radius:0.12rem;padding:0;display:inline-block;float:left;overflow:hidden;}
               .box .upload_preview li:nth-child(4n+0) {margin-right:0;}

               .box .upload_preview figure {width:100%;height:100%;display:flex;justify-content:center;align-items:center}
               .box .upload_preview figure img{width:1.25rem;height:1.25rem;}
               .box .upload_preview .adjuster {color:#fff;font-size:0.2rem;text-align:center;background-color:rgba(0,0,0,0.5);width:26%;height:0.3rem;line-height:0.3rem;cursor:pointer;position:absolute;bottom:0;z-index:100;}
               .box .adjuster:not(.remove) {padding:0.15rem}
               .box .upload_preview .remove {background-color:#ff3649;width:0.3rem;height:0.3rem;line-height:0.3rem;border-radius:0.15rem;right:0.04rem;top:0.04rem;}
               .box .upload_preview .left {left:0;}
               .box .upload_preview .right {right:0;}
               .box .upload_preview li:not(:last-child) .left:after {content:"";background-color:rgba(255,255,255,0.5);width:0.01rem;height:0.16rem;position:absolute;left:0.76rem;bottom:0.17rem;z-index:101;}
               .box .upload_preview li:first-child .right, .upload_preview li:last-child .left {width:75%;left:0;right:0;}
               .box .upload_preview li:first-child .left, .upload_preview li:last-child .right {display:none;}

               .box button.file-upload {display:none;}
            </style>

            <base href="<?php echo MEDIA_URL.'refund/' ?>">

		<div class="tips">

            <div class="cancel">
                <div class="cancel-reason">退款原因</div>
                <div>
                    <div class="reason-list clearfix">
                        <span>无理由</span> <i data-value="无理由" class="icon-xuanzhong"></i>
                    </div>
                    <div class="reason-list clearfix">
                        <span>退运费</span> <i data-value="退运费" class="icon-un-selected"></i>
                    </div>
                    <div class="reason-list clearfix">
                        <span>未收到</span> <i data-value="未收到" class="icon-un-selected"></i>
                    </div>
                    <div class="reason-list clearfix">
                        <span>不开发票</span> <i data-value="不开发票" class="icon-un-selected"></i>
                    </div>

                </div>
                <div class="confirm-select clearfix">
                    <div class="cancel-btn">取消</div>
                    <div id="cancelSubmit" class="receipt-confirm">确定</div>
                </div>
            </div>
        </div>
		<div class="box" id="refundHtml">

			<div class="refund-goods-img bgc">
				<div class="goods-title">
					<div class="refund-item">退款商品</div>
				</div>
				<div class="imgs clearfix" id="refundImg">

				</div>
			</div>
			<div class="refund-money bgc">
				<div class="money-title">退款金额<span>¥<span style="padding-left:0.1rem" id="refundPrice"></span></span></div>
				<div class="money-message">实际金额与商家协商</div>
			</div>
			<div class="bgc">
				<div class="goods-status">
					<span>货物状态</span>
					<span data-value="未收货" class="item-status"><i class="icon-xuanzhong"></i>未收货</span>
					<span data-value="已收货" class="item-status"><i class="icon-un-selected"></i>已收货</span>
				</div>
				<div class="refund-money" style="padding: 0.32rem 0">
					<div class="money-title">退款原因</div>
					<div id="cancelBtn" class="money-message can-btn"><span id="selectText">请选择原因</span><i class="icon-Arrow"></i></div>
				</div>
			</div>
			<div class="refund-goods-img bgc">
				<div class="goods-title">
					<div class="refund-item">相关照片/截图</div>
				</div>
				<div class="up-img clearfix">
                    <?php
                    require_once(VIEWS_PATH. 'templates/file-uploader.php');
                    $name_to_upload = 'image_urls';
                    generate_html($name_to_upload, $this->class_name, FALSE, 4);
                    ?>
                </div>

			</div>
			<div class="bgc" style="padding: 0.3rem 0.2rem">
				<textarea id="refundDescription" class="related-description" contenteditable="true" style="-webkit-user-select: text;-user-select: text;outline:none;resize:none;font-family: 'Microsoft YaHei';font-size: 0.28rem;color: #666464" class="create-input" type=text placeholder="退款说明"></textarea>
			</div>

		</div>
		<button id="submitRefund" class="submit-refund">提交申请</button>

		<script>
		// 由于全局的api_url被文件上传功能相关JS中的同名变量污染，需要重新声明API根URL
            var real_api_url = '<?php echo API_URL ?>';

			$(function(){
				//var that=$('.upLoaderBtn');
				//https://api.517ybang.com/order/detail
                var id = getQueryString('id');
                console.log(id);
                var obj ={app_type:'client'};
                var refundObj = {app_type:'client'};
                obj.id = id;//订单id
                var recordId = getQueryString('record');
                refundObj.record_id = recordId;

                console.log(obj);
                var type = '仅退款';
				var statusItem = '未收货';

				$('.item-status').on('click',function(e){
					$('.item-status').children('i').addClass('icon-un-selected').removeClass('icon-xuanzhong');
					$(this).children('i').addClass('icon-xuanzhong').removeClass('icon-un-selected');
					statusItem = $(this).attr('data-value');
					console.log(statusItem);
				})




				$.ajax({
                  url: real_api_url + 'order/detail',
                  data: obj,
                  success: function(result){
                  		console.log(result); // 输出回调数据到控制台
                       if (result.status == 200)
                       {
                          //window.history.back(-1);
                         //console.log(result);
                         	refundObj.user_id=result.content.user_id;

                         	var orderItem = result.content.order_items;
                         	//var recordArr = [];
                         	for(var i= 0; i<orderItem.length; i++){
                         		//recordArr.push(orderItem[i].record_id);
                         			console.log(orderItem[i].item_image);
                         			var imgUrl = orderItem[i].item_image;
                                 	var reg = RegExp(/http/);
                                 //console.log(reg.test(imgUrl)); // true
                                 if(reg.test(imgUrl) !== true){
                                      imgUrl = media_url + 'item/';
                                 }else{
                                      imgUrl =''
                                 }
                                 if(recordId == orderItem[i].record_id ){
                                    $('#refundImg').append('<img src="'+imgUrl + orderItem[i].item_image+'" alt="">');
                                    console.log(orderItem[i].price);
                                    $('#refundPrice').text(orderItem[i].price);
                                 }

                         	}
                         	//refundObj.record_id = recordArr.join(',');
                         	//$('#refundPrice').text(result.content.total);
                         	if(result.content.time_deliver !== null){
                         		//console.log(result.content.time_deliver);
                         			statusItem = '已收货';
                         			type = '退货退款';
                         	}


                       } else {
                          alert(result.content.error.message);
                       }
                  },
                  error:function(result){
                  	console.log(result);
                  },
                  dataType: 'json'
                });

                $('#submitRefund').on('click',function(){
                	refundObj.description = $('#refundDescription').val();
                	refundObj.url_images = $('[name=image_urls]').val();
                	refundObj.total_applied = $('#refundPrice').text();
                	refundObj.cargo_status = statusItem;
                	refundObj.reason = reasonCancel;
                	refundObj.type = type;

                	console.log(refundObj);

                	$.ajax({
                    url: real_api_url + 'refund/create',
                    data: refundObj,
                    success: function(result){
                    		//console.log(result); // 输出回调数据到控制台
                         if (result.status == 200)
                         {
                            //window.history.back(-1);
                           console.log(result);
                           window.history.back(-2);

                         } else {
                            alert(result.content.error.message);
                         }
                    },
                    error:function(result){
                    	console.log(result);
                    },
                    dataType: 'json'
					});
                });

                  function getQueryString(name){
                       var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
                       var r = window.location.search.substr(1).match(reg);
                       if (r!=null) return r[2]; return '';
                  }



                $('.cancel').on('click',function(event){
                     event.stopPropagation()
                 })
                 $('.tips').on('click',function(){
                     $(this).hide().children().hide();
                 });
				var reasonCancel = '无理由';
				refundObj.reason = reasonCancel;
                 $('.reason-list').on('click','i',function(){
                     var index =$(this).index;
                     $(this).addClass('icon-xuanzhong').removeClass('icon-un-selected').parent().siblings().children('i').addClass('icon-un-selected').removeClass('icon-xuanzhong');
                     reasonCancel = $(this).attr('data-value');
                     console.log(reasonCancel);

                 });

                 //弹框消失
                 $('.cancel-btn').click(function(){
                    $('.tips').hide().children().hide();
                });

                $('#cancelBtn').on('click',function(){
                    //orderID = $(this).attr('data-id');
                    $('.tips').show().children('.cancel').show();
                });
                $('#cancelSubmit').on('click',function(){
                    $('#selectText').text(reasonCancel);

                    $('.tips').hide().children('.cancel').hide();
				});


			});


		</script>

