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

	</style>

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
				<div>
					<label for="" class="fl">性别</label>
					<p class="changeSex man">
						<input type="checkbox" <?php echo $item['gender'] == '男' ? 'checked' : '';?> style="margin-left: 0;left: 0;" name="sex" class="check goods-check"><span style="margin-left: 0.6rem">男</span>
					</p>
					<p class="changeSex woman">
						<input type="checkbox" <?php echo $item['gender'] == '女' ? 'checked' : '';?> style="margin-left: 0;left: 0;" name="sex" class="check goods-check"><span style="margin-left: 0.6rem">女</span>
					</p>
				</div>
				<div>
					<label for="" class="fl">出生日期</label>
					<input type="text" class="fl" value="<?php echo $item['dob'] ?>" id="startTime"/>
				</div>

			</form>
		</div>
		<script src="https://cdn-remote.517ybang.com/js/jquery-3.3.1.min.js"></script>
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
		</script>