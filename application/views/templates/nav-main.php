<!--
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

<nav id=nav-main>
	<ul class=row>
		<li class="col-xs-3"><a <?php if ($class === 'home') echo 'class=active' ?> title="首页" href="<?php echo base_url('home') ?>">首页</a></li>
		<li class="col-xs-3"><a <?php if ($class === 'explore') echo 'class=active' ?> title="发现" href="<?php echo base_url('explore') ?>">发现</a></li>
		<li class="col-xs-3"><a <?php if ($class === 'cart') echo 'class=active' ?> title="购物车" href="<?php echo base_url('cart') ?>">购物车</a></li>
		<li class="col-xs-3"><a <?php if ($class === 'account mine') echo 'class=active' ?> title="我的" href="<?php echo base_url('mine') ?>">我的</a></li>
	</ul>
</nav>
-->

<?php
	// 检查当前设备信息
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	$is_wechat = strpos($user_agent, 'MicroMessenger')? TRUE: FALSE;
	$is_ios = ($this->input->get('device_platform') === 'ios' || strpos($user_agent, 'iPhone') || strpos($user_agent, 'iPad'))? TRUE: FALSE;
	$is_android = strpos($user_agent, 'Android')? TRUE: FALSE;
	if (($is_ios === FALSE && $is_android === FALSE) || $is_wechat === TRUE):
?>
	<!--底部tab切换区域-->
	<div class="tabWrap fiex">
		<div class="tabbar auto">
			<div class="column">
				<div class="item cur">
					<i class="icon iconfont icon-icon"></i>
					<span class="text">首页</span>
				</div>
				<div class="item">
					<i class="icon iconfont icon-fenlei"></i>
					<span class="text">分类</span>
				</div>
				<div class="item">
					<i class="icon iconfont icon-fenlei1"></i>
					<span class="text">发现</span>
				</div>
				<div class="item">
					<i class="icon iconfont icon-gouwuche"></i>
					<span class="text">购物车</span>
				</div>
				<div class="item">
					<i class="icon iconfont icon-wode"></i>
					<span class="text">我的</span>
				</div>
			</div>
		</div>
	</div>

<?php endif ?>