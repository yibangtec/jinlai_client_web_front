<style>


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

		<dt>性别</dt>
		<dd><?php echo $item['gender'] ?></dd>
		<dt>生日</dt>
		<dd><?php echo $item['dob'] ?></dd>
	</dl>
</div>