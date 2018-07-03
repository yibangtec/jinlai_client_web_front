	<script src="https://cdn-remote.517ybang.com/js/rem.js"></script>
    <link href="https://cdn-remote.517ybang.com/css/base.css" rel="stylesheet">
    <link href="https://cdn-remote.517ybang.com/css/swiper.mini.css" rel="stylesheet">
    <link href="https://cdn-remote.517ybang.com/css/index.min.css" rel="stylesheet">
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

        .editMyPic .box .file-uploader {position: absolute;
                                                 left: 50%;background-color:rgba(0,0,0,0);
                                                 margin-left: -0.73rem;
                                                 top: 0;}
        .editMyPic .box .selector_zone {width:1.45rem;height:1.45rem;display:inline-block;position:relative; box-sizing:border-box;overflow:hidden;background-color:rgba(0,0,0,0);}
        .editMyPic .box input[type=file] {overflow:hidden;display:inline-block;background-color:rgba(0,0,0,0);display:none;}
        .editMyPic .box .file_selector{display:none;box-sizing:border-box;color:#ff3649;background-color:rgba(0,0,0,0);text-align:center;width:100%;height:100%;line-height:1.45rem;;border:none;border-radius:0.12rem;display:inline-block;position:absolute;top:0;left:0;}
		.editMyPic .box .file_selector svg{display:none}
        .editMyPic .box .upload_preview {clear:both;}
        .editMyPic .box .upload_preview li {background-color:#ddd;position:relative;width:1.45rem;;height:1.45rem;;margin-right:0.1rem;border-radius:0.12rem;padding:0;display:inline-block;float:left;overflow:hidden;}
        .editMyPic .box .upload_preview li:nth-child(4n+0) {margin-right:0;}

        .editMyPic .box .upload_preview figure {width:100%;height:100%;display:flex;justify-content:center;align-items:center}
        .editMyPic .box .upload_preview figure img{width:1.45rem;height:1.45rem;}
        .editMyPic .box .upload_preview .adjuster {color:#fff;font-size:0.2rem;text-align:center;background-color:rgba(0,0,0,0);width:26%;height:0.3rem;line-height:0.3rem;cursor:pointer;position:absolute;bottom:0;z-index:100;}
        .editMyPic .box .adjuster:not(.remove) {padding:0.15rem}
        .editMyPic .box .upload_preview .remove {background-color:#ff3649;width:0.3rem;height:0.3rem;line-height:0.3rem;border-radius:0.15rem;right:0;top:0.6rem;}
        .editMyPic .box .upload_preview .left {left:0;}
        .editMyPic .box .upload_preview .right {right:0;}
        .editMyPic .box .upload_preview li:not(:last-child) .left:after {content:"";background-color:rgba(255,255,255,0);width:0.01rem;height:0.16rem;position:absolute;left:0.76rem;bottom:0.17rem;z-index:101;}
        .editMyPic .box .upload_preview li:first-child .right, .upload_preview li:last-child .left {width:75%;left:0;right:0;}
        .editMyPic .box .upload_preview li:first-child .left, .upload_preview li:last-child .right {display:none;}

        .editMyPic .box button.file-upload {display:none;}

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
				<i class="icon-fanhui fl"></i>
				<span class="changeUserText fl">个人信息</span>
				<span class="changeUserSave fr">保存</span>
			</div>
		</div>
		<!--编辑个人信息上传头像区域-->
		<div class="editMyPic wid710 auto">
			<div class="block auto header-img" style="background: url('<?php echo $url_avatar; ?>') no-repeat center; background-size: cover;">
				<div class="box" style="position: relative; width:100%;height:1.45rem;">
                				<?php
                                require_once(VIEWS_PATH. 'templates/file-uploader.php');
                                $name_to_upload = 'image_urls';
                                generate_html($name_to_upload, $this->class_name, FALSE);
                                ?>
                            </div>
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
                		<input style="margin-left: 0;flex: 1;width: 2.8rem" type="text" value="<?php echo $item['lastname'] ?>" placeholder="请输入"/>
                	</div>
                	<div style="width: 50%;float: left;display: flex;padding-bottom: 0;border-bottom: none">
                		<label for="" style="width: 0.5rem;margin-right: 0.2rem;margin-left: 0.1rem">名</label>
                		<input style="margin-left: 0;flex: 1" type="text" value="<?php echo $item['firstname'] ?>" placeholder="请输入"/>
                	</div>

                </div>
				<div>
					<label for="" class="fl">昵称</label>
					<input type="text" class="fl" value="<?php echo $itemname ?>"/>
				</div>
				<div style="display:flex;">
					<label for="" style="width:1.13rem;">性别</label>
					<p style="flex:1;">
						<span>男</span><span>女</span>
					</p>

				</div>
				<div>
					<label for="" class="fl">出生日期</label>
					<input type="text" class="fl" value="<?php echo $item['dob'] ?>" id="startTime"/>
				</div>

			</form>
		</div>
		<script src="https://cdn-remote.517ybang.com/js/index.min.js"></script>

		<script type="text/javascript">
			var calendar = new datePicker();
			calendar.init({
				'trigger': '#startTime', /*按钮选择器，用于触发弹出插件*/
				'type': 'date',/*模式：date日期；datetime日期时间；time时间；ym年月；*/
				'minDate':'1900-1-1',/*最小日期*/
				'maxDate':'2100-12-31',/*最大日期*/
				'onSubmit':function(){/*确认时触发事件*/
					var theSelectData=calendar.value;
				},
				'onClose':function(){/*取消时触发事件*/
				}
			});
			$(function(){
				var item = <?php echo json_encode($item,true) ?>;
				console.log(item);
			});
			/*<p class="changeSex man">
            						<input type="checkbox" <?php echo $item['gender'] == '男' ? 'checked' : '';?> style="margin-left: 0;left: 0;" name="sex" class="check goods-check"><span style="margin-left: 0.6rem">男</span>
            					</p>
            					<p class="changeSex woman">
            						<input type="checkbox" <?php echo $item['gender'] == '女' ? 'checked' : '';?> style="margin-left: 0;left: 0;" name="sex" class="check goods-check"><span style="margin-left: 0.6rem">女</span>
            					</p>*/
		</script>