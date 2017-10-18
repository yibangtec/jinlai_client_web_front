<!-- TODO 身份证认证重置备用视图 -->

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

<script defer src="/js/file-upload.js"></script>
<base href="<?php echo $this->media_root ?>">

<div id=breadcrumb>
	<ol class="breadcrumb container">
		<li><a href="<?php echo base_url() ?>">首页</a></li>
		<li><a href="<?php echo base_url($this->class_name) ?>"><?php echo $this->class_name_cn ?></a></li>
		<li class=active><?php echo $title ?></li>
	</ol>
</div>

<div id=content class=container>
	<?php
		if ( !empty($error) ) echo '<div class="alert alert-warning" role=alert>'.$error.'</div>';
		$attributes = array('class' => 'form-'.$this->class_name.'-ssn-reset form-horizontal', 'role' => 'form');
		echo form_open_multipart($this->class_name.'/ssn_reset?id='.$item[$this->id_name], $attributes);
	?>
		<fieldset>
			<input name=id type=hidden value="<?php echo $item[$this->id_name] ?>">

			<div class=form-group>
				<label for=code_ssn class="col-sm-2 control-label">身份证号</label>
				<div class=col-sm-10>
					<input class=form-control name=code_ssn type=text value="<?php echo $item['code_ssn'] ?>" placeholder="身份证号">
				</div>
			</div>

			<div class=form-group>
				<label for=url_image_id class="col-sm-2 control-label">身份证照片</label>
				<div class=col-sm-10>
					<?php if ( !empty($item['url_image_id']) ): ?>
					<div class=row>
						<figure class="col-xs-12 col-sm-6 col-md-4">
							<img src="<?php echo $item['url_image_id'] ?>">
						</figure>
					</div>
					<?php endif ?>

					<div>
						<?php $name_to_upload = 'url_image_id' ?>

						<input id=<?php echo $name_to_upload ?> class=form-control type=file>
						<input name=<?php echo $name_to_upload ?> type=hidden value="<?php echo $item[$name_to_upload] ?>">

						<button class="file-upload btn btn-primary btn-lg col-xs-12 col-md-3" data-target-dir="user/image_id" data-selector-id=<?php echo $name_to_upload ?> data-input-name=<?php echo $name_to_upload ?> type=button><i class="fa fa-upload" aria-hidden=true></i> 上传</button>

						<ul class="upload_preview list-inline row"></ul>
					</div>

				</div>
			</div>
		</fieldset>

		<div class=form-group>
		    <div class="col-xs-12 col-sm-offset-2 col-sm-2">
				<button class="btn btn-primary btn-lg btn-block" type=submit>确定</button>
		    </div>
		</div>

	</form>
</div>