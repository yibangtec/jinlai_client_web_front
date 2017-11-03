<style>
	.avatar {margin-right:20px;}
		.avatar img {width:130px;height:130px;}

	/* 宽度在750像素以上的设备 */
	@media only screen and (min-width:751px)
	{
		
	}
	
	/* 宽度在960像素以上的设备 */
	@media only screen and (min-width:961px)
	{

	}

	/* 宽度在1280像素以上的设备 */
	@media only screen and (min-width:1281px)
	{

	}
</style>

<base href="<?php echo $this->media_root ?>">

<div id=breadcrumb>
	<ol class="breadcrumb container">
		<li><a href="<?php echo base_url() ?>">首页</a></li>
		<li><a href="<?php echo base_url($this->class_name) ?>"><?php echo $this->class_name_cn ?></a></li>
		<li class=active><?php echo $title ?></li>
	</ol>
</div>

<div id=content class=container>

	<ul class=list-unstyled>
		<?php
		// 仅可修改自己的信息
		if ( $item['user_id'] === $this->session->user_id ):
		?>
		<li>
			<a title="编辑" class="btn btn-default btn-lg btn-block" href="<?php echo base_url($this->class_name.'/edit?id='.$item[$this->id_name]) ?>" target=_blank>
				<i class="fa fa-edit"></i> 编辑
			</a>
		</li>
		<?php endif ?>
	</ul>

	<dl id=list-info class=dl-horizontal>
		<dt>头像</dt>
		<?php if ( !empty($item['avatar']) ): ?>
		<dd class=row>
			<figure class="avatar col-xs-12 col-sm-6 col-md-4">
				<img class=img-circle src="<?php echo $item['avatar'] ?>">
			</figure>
		</dd>
		<?php else: ?>
		<dd>未上传</dd>
		<?php endif ?>

		<dt>昵称</dt>
		<dd><?php echo $item['nickname'] ?></dd>
		<dt>姓名</dt>
		<dd><?php echo $item['lastname'] ?><?php echo $item['firstname'] ?></dd>

		<dt>性别</dt>
		<dd><?php echo $item['gender'] ?></dd>
		<dt>生日</dt>
		<dd><?php echo !empty($item['dob'])? $item['dob']: '未设置' ?></dd>
		<dt>手机号</dt>
		<dd><?php echo $item['mobile'] ?></dd>
		<dt>电子邮件地址</dt>
		<dd><?php echo !empty($item['email'])? $item['email']: '未设置' ?></dd>

		<dt>身份证号</dt>
		<dd><?php echo substr_replace(seperate_it($item['code_ssn']), '******', -6) ?></dd>
		<dt>身份证照片</dt>
		<?php if ( !empty($item['url_image_id']) ): ?>
		<dd class=row>
			<figure class="col-xs-12 col-sm-6 col-md-4">
				<img class=img-circle src="<?php echo $item['url_image_id'] ?>">
			</figure>
		</dd>
		<?php else: ?>
		<dd>未上传</dd>
		<?php endif ?>
		
		<dt>开户行名称</dt>
		<dd><?php echo !empty($item['bank_name'])? $item['bank_name']: '未设置' ?></dd>
		<dt>开户行账号</dt>
		<dd>
			<?php echo !empty($item['bank_account'])? substr_replace(seperate_it($item['bank_account']), '******', -6): '未设置' ?>
		</dd>

		<dt>注册时间</dt>
		<dd><?php echo $item['time_create'] ?></dd>
		<dt>最后登录时间</dt>
		<dd><?php echo date('Y-m-d H:i:s', $item['last_login_timestamp']) ?></dd>
		<dt>最后登录IP</dt>
		<dd><?php echo $item['last_login_ip'] ?></dd>
	</dl>
</div>