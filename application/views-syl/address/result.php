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

<div id=content class=container>
	<h2><?php echo $title ?></h2>
	<?php if ( !empty($content) ): ?>
	<section><?php echo $content ?></section>
	<?php endif ?>
	
	<ul class=row>
		<li class="col-xs-12 col-sm-6 col-sm-3"><a class="btn btn-default btn-lg" title="<?php echo $this->class_name_cn ?>列表" href="<?php echo base_url($this->class_name) ?>">返回<?php echo $this->class_name_cn ?>列表</a></li>
</div>