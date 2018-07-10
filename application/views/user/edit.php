	<script src="<?php echo CDN_URL ?>js/rem.js"></script>
	<script src="<?php echo CDN_URL ?>js/hash.js"></script>
    <link href="<?php echo CDN_URL ?>css/base.css" rel="stylesheet">
    <link href="<?php echo CDN_URL ?>css/swiper.mini.css" rel="stylesheet">
    <link href="<?php echo CDN_URL ?>css/index.min.css" rel="stylesheet">
	<style>
		body{
			background: #fff;
		}
		.icon-fanhui{
			font-size: .36rem;
    		margin-top: .23rem;
		}
		.header-img{
            text-align: center;
            height: 1.46rem;
            width: 1.46rem;
            border-radius: 50%;
            overflow: hidden;
            background-color: #ccc;
            box-shadow: 0 0 0.16rem rgba(0,0,0,.5);
            background-size: cover;
            background-repeat:no-repeat;
            background-position:center;
            position: relative;
        }
        .header-img:before{
            content: '';
            width: 0;
            height: 100%;
        }
        .header-img img{
            display: inline-block;
            max-width: 100%;
            max-height: 100%;
        }
        .inputBtn{
        	height: 1.46rem;
            width: 1.46rem;
            opacity:0;
            position: absolute;
            			top: 0;left: 0;
        }
		.selectedSex{
         	flex:1;font-size:0.28rem;color:#3e3a39;
         }
         .item-status{
         	margin:0 0.3rem;
         }
         .item-status i {padding:0 0.2rem}
        .icon-xuanzhong:before{
        	color:#ff3649;
        	font-size:0.35rem;
        }
        .icon-un-selected{
         	color:#3e3a39;
         	font-size:0.35rem;
        }


	</style>
	<base href="<?php echo $this->media_root ?>">

<!--编辑title区域-->
	<?php
		// 常用数据
		$itemname = $item['nickname'];
		$url_avatar = empty($item['avatar'])? DEFAULT_IMAGE: $this->media_root. $item['avatar'];
	?>
		<div style="border-bottom: 1px solid #e6e6e6;">
			<div class="changeUserTitle wid710 auto">
				<i id="back" style="padding:0 0.2rem" class="icon-fanhui fl"></i>
				<span class="changeUserText fl">个人信息</span>
				<span style="padding:0 0.2rem" id="saveBtn" class="changeUserSave fr">保存</span>
			</div>
		</div>
		<!--编辑个人信息上传头像区域-->
		<div class="editMyPic wid710 auto">

			<div id="bgcImg" class="block auto header-img" style="background-image:url('<?php echo $url_avatar; ?>'); ">
				<input id='fileupload' type='file' name='file' onchange="ufload(this,'after')" class="inputBtn"/>
			</div>



			<p>点击修改头像</p>
		</div>
		<!--个人信息表单填写区域-->
		<div class="changeUserForm wid670 auto">
			<form action="">
				<div>
					<label for="" class="fl">用户ID</label>
					<input type="text" style="background-color: #ffffff" disabled="true" class="fl" value="<?php echo $item['user_id'] ?>"/>
				</div>
				<div>
					<label for="" class="fl">会员等级</label>
					<input type="text" style="background-color: #ffffff" disabled="true" class="fl" value="VIP<?php echo $item['level'] ?>"/>
				</div>
				<div style="width: 100%;margin: 0">
                	<div style="width: 50%;float: left;display: flex;padding-bottom: 0;border-bottom: none;border-right: 0.01rem solid #f6f6f6;box-sizing: border-box">
                		<label for="" style="width: 0.5rem;margin-right: 0.2rem">姓</label>
                		<input id="lastname" style="margin-left: 0;flex: 1;width: 2.8rem" type="text" value="<?php echo $item['lastname'] ?>" placeholder="请输入"/>
                	</div>
                	<div style="width: 50%;float: left;display: flex;padding-bottom: 0;border-bottom: none">
                		<label for="" style="width: 0.5rem;margin-right: 0.2rem;margin-left: 0.1rem">名</label>
                		<input id="firstname" style="margin-left: 0;flex: 1" type="text" value="<?php echo $item['firstname'] ?>" placeholder="请输入"/>
                	</div>

                </div>
				<div>
					<label for="" class="fl">昵称</label>
					<input id="nickname" type="text" class="fl" value="<?php echo $itemname ?>"/>
				</div>
				<div style="display:flex;">
					<label for="" style="width:1.13rem;">性别</label>
					<p class="selectedSex">
                    	<span data-value="男" class="item-status"><i class="<?php echo $item['gender'] == '男' ? 'icon-xuanzhong' : 'icon-un-selected';?>"></i>男</span>
                        <span data-value="女" class="item-status"><i class="<?php echo $item['gender'] == '女' ? 'icon-xuanzhong' : 'icon-un-selected';?>"></i>女</span>
                    </p>
				</div>
				<div style="position: relative;">
					<label style='padding-top:0.1rem;' for="" class="fl">出生日期</label>
					<input id="selectedDate" type="text" class="fl" value="<?php echo $item['dob'] ?>"/>
					<input style="position: absolute;top: -0.2rem;left: 1rem;opacity:0;" type="text" class="fl" value="" id="startTime"/>
				</div>

			</form>
		</div>
		<script src="<?php echo CDN_URL ?>js/index.min.js"></script>

		<script type="text/javascript">
			var real_api_url = '<?php echo API_URL ?>';
			var item = <?php echo json_encode($item,true) ?>;


            console.log(item);
            console.log(statusItem);
            //初始
            var obj = {app_type:'client'};
            obj.user_id = item.user_id;
            obj.id = item.user_id;
            obj.dob = item.dob;
            obj.gender = item.gender;
            obj.avatar = item.avatar;

			var strImg = item.avatar;
			var statusItem = item.gender;

			var that ='';
            var biz = item.user_id;//传入

			console.log(strImg);
			var calendar = new datePicker();
			calendar.init({
				'trigger': '#startTime', /*按钮选择器，用于触发弹出插件*/
				'type': 'date',/*模式：date日期；datetime日期时间；time时间；ym年月；*/
				'minDate':'1900-1-1',/*最小日期*/
				'maxDate':'2100-12-31',/*最大日期*/
				'onSubmit':function(){/*确认时触发事件*/
					var theSelectData=calendar.value;
					console.log(theSelectData);
					$('#selectedDate').val(theSelectData);
				},
				'onClose':function(){/*取消时触发事件*/
				}
			});
			/*<p class="changeSex man">
                                	<input type="checkbox" <?php echo $item['gender'] == '男' ? 'checked' : '';?> style="margin-left: 0;left: 0;" name="sex" class="check goods-check"><span style="margin-left: 0.6rem">男</span>
                                </p>
                                <p class="changeSex woman">
                                	<input type="checkbox" <?php echo $item['gender'] == '女' ? 'checked' : '';?> style="margin-left: 0;left: 0;" name="sex" class="check goods-check"><span style="margin-left: 0.6rem">女</span>
                                </p>*/

			$(function(){

				$('#startTime').val(getNowFormatDate());
				$("#startTime").focus(function(){
                   document.activeElement.blur();
               });
				$('.item-status').on('click',function(e){
            		$('.item-status').children('i').addClass('icon-un-selected').removeClass('icon-xuanzhong');
            		$(this).children('i').addClass('icon-xuanzhong').removeClass('icon-un-selected');
            		statusItem = $(this).attr('data-value');
            		console.log(statusItem);
            		obj.gender = statusItem;
            	});
            	$('#back').on('click',function(){
            		window.history.back(-1);
            	});
				$('#saveBtn').on('click',function(){
					obj.nickname = $('#nickname').val();
					obj.lastname = $('#lastname').val();
					obj.firstname = $('#firstname').val();
					obj.dob = $('#startTime').val();
					obj.avatar = strImg;
					console.log(obj);
					$.ajax({
                    url: real_api_url + 'user/edit',
                    data: obj,
                    success: function(result){
                    		//console.log(result); // 输出回调数据到控制台
                         if (result.status == 200)
                         {
                            //window.history.back(-1);
                           //console.log(result);
                           window.history.back(-1);

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






			});


							var ufload = function(obj,ele) {
                                var bucketname="jinlaisandbox-images"; //服务名
                                var username="jinlaisandbox";	  //操作员账号
                                var password="jinlaisandbox";
                                var file = $(obj).get(0).files[0];
                                var list = $(obj).get(0).files;
                                //console.log(list);
                                for(var i = 0;i < list.length;i++){
                                    //$('.editContent .loading').show();
                                    var time=buildFileName(i, biz);
                                    var save_key="/user/avatar/"+time;
                                    strImg = "avatar/" + time;
                                    var url="https://v0.api.upyun.com/"+ bucketname;
                                    var fileinfo=document.getElementById("fileinfo");
                                    var policy=btoa(JSON.stringify({"bucket": bucketname, "save-key": save_key, "x-gmkerl-thumb": "/fwfh/2048x2048/rotate/auto", "expiration": parseInt(Date.parse(new Date())+3600)}));
                                    var signature="UPYUN jinlaisandbox:"+b64hamcsha1(HexMD5.MD5(password).toString(HexMD5.enc.Hex), "POST&/"+bucketname+"&"+policy);
                                    var xhrOnProgress=function(fun){
                                        xhrOnProgress.onprogress=fun;
                                        return function(){
                                            var xhr=$.ajaxSettings.xhr();
                                            if (typeof xhrOnProgress.onprogress!=='function'){
                                                return xhr;
                                            }
                                            if (xhrOnProgress.onprogress&&xhr.upload){
                                                xhr.upload.onprogress=xhrOnProgress.onprogress;
                                            }
                                            return xhr;
                                        }
                                    };
                                    var formData=new FormData();
                                    formData.append("file",list[i]);
                                    formData.append("policy",policy);
                                    formData.append("authorization",signature);
                                    $.ajax({
                                        url:url,
                                        type:"POST",
                                        data:formData,
                                        contentType:false,
                                        processData:false,
                                        success:function(data, textStatus,xhr){
                                            console.log(data.url);
                                            var code =data.code;
                                            if(code==200){
                                                //$('.editContent .loading').hide();
                                                if (confirm('上传成功')==true){

                                                }else{

                                                }


                                            var imgUrl = data.url;
                                            //var img =$('<div class="child"><img class="arr" src=https://jinlaisandbox-images.b0.upaiyun.com'+JSON.parse(data).url+' alt=""/><span class="more"><i class="icon-bianji-menu"></i></span><i class="icon-xuanzhuan"></i></div>');
                            				$('#bgcImg').css('background-image','url('+imgUrl+')');
                            				}

                                        },
                                        error:function(xhr){
                                            console.log(xhr);
                                        }
                                    });
                                }
                            }

                            //这个方法是生成图片后面的URL例如：2018/0105/174047222.jpg
                            // s是为了防止一秒上传2张或者更多图片的时候文件名重复
                            function buildFileName(s, bizId) {
                                var objD = new Date();
                                var timeStr;
                                var yy = objD.getYear();
                                if (yy < 1900) yy = yy + 1900;
                                var MM = objD.getMonth() + 1;
                                if (MM < 10) MM = '0' + MM;
                                var dd = objD.getDate();
                                if (dd < 10) dd = '0' + dd;
                                var hh = objD.getHours();
                                if (hh < 10) hh = '0' + hh;
                                var mm = objD.getMinutes();
                                if (mm < 10) mm = '0' + mm;
                                var ss = objD.getSeconds()+s;
                                if (ss < 10) ss = '0' + ss;
                                bizId = bizId.toString();
                                timeStr = yy + '/' + MM + dd + '/' + hh + mm + ss + bizId + '.jpg';
                                return timeStr;
                            }

			function getNowFormatDate() {
                    var date = new Date();
                    var seperator1 = "-";
                    var year = date.getFullYear()-18;
                    var month = date.getMonth() + 1;
                    var strDate = date.getDate();
                    if (month >= 1 && month <= 9) {
                        month = "0" + month;
                    }
                    if (strDate >= 0 && strDate <= 9) {
                        strDate = "0" + strDate;
                    }
                    var currentdate = year + seperator1 + month + seperator1 + strDate;
                    return currentdate;
                }

		</script>