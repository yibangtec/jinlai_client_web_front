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
		<li class=active><?php echo $this->class_name_cn ?></li>
	</ol>
</div>

<div id=content class=container>

	<?php if ( empty($items) ): ?>
	<blockquote class=row>
		<p>商家正在备货，敬请期待！</p>
	</blockquote>

	<?php else: ?>

		<ul id=item-list class=row>
			<?php foreach ($items as $item): ?>
			<li class="item col-xs-6 col-sm-3 col-md-4">
				<a href="<?php echo base_url($this->class_name. '/detail?id='.$item[$this->id_name]) ?>">

					<figure class=image-main class="col-xs-12 col-sm-6 col-md-4">
						<img title="<?php echo $item['name'] ?>" src="<?php echo $item['url_image_main'] ?>">
					</figure>

					<h2 class=item-name><?php echo $item['name'] ?></h2>

					<div class=digits>
						<span>￥</span><strong><?php echo substr($item['price'], 0, -3).'<small>'.substr($item['price'], -3).'</small>' ?></strong>
						<?php echo ($item['tag_price'] !== '0.00')? ' <del>￥'. $item['tag_price']. '</del>': NULL ?>
					</div>

					<?php if ( !empty($skus) ): ?>
					<section class=skus>

						<ul class=row>
							<?php foreach ($skus as $sku): ?>
							<li class="col-xs-6 col-sm-4 col-md-3">
								<?php if ( !empty($sku['url_image']) ): ?>
								<figure>
									<img src="<?php echo $sku['url_image'] ?>">
								</figure>
								<?php endif ?>
							</li>
							<?php endforeach ?>
						</ul>

					</section>
					<?php endif ?>
				</a>

				<ul class=row>
					<li class="col-xs-6">
						<a class=create data-op-class=fav_item data-op-name=create data-id="<?php echo $item['item_id'] ?>" title="收藏" href="<?php echo base_url('fav_item/create?id='.$item['item_id']) ?>">
							<img data-src-success="<?php echo base_url('/media/item/detail/shoucang-_xuanzhong@3x.png') ?>" src="<?php echo base_url('/media/item/detail/shoucang-@3x.png') ?>">
							收藏
						</a>
					</li>
				</ul>
				
			</li>
			<?php endforeach ?>
		</ul>

	<?php endif ?>
</div>