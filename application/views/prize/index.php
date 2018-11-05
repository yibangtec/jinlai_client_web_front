<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
		<title>金色年华大转盘-进来购物领实惠</title>
		<link rel="stylesheet" type="text/css" href="/public/css/index.css">
	</head>
	<body>
		<div class="zp-box">
			<div class="dp-box">
				<img src="/public/img/dipan.png" class="g-lottery-img">
			</div>
			<div class="zhizhen">
				<img src="/public/img/zhizhen.png">
				<div id="cishu-text">点击开始<br><span id="cishu">0</span>次</div>
			</div>
		</div>

		<div class="jl">
			<p id="prize_name"> 
				暂未中奖
			</p>
		</div>
		<div style="width: 90%;margin:0 auto;">
			<p>活动注意：</p>
			<p>1. 转盘摇奖后，由现场工作人员提供相对应的二维码扫描领取相应优惠券。</p>
			<p>2. 领取成功后可于现场进行线上产品购买，现场提货。</p>
			<p>声明：本活动最终解释权归进来商城所有。</p>
		</div>
		<!-- <button id="clearCache">开发者调试模式</button> -->
		<!--遮罩&弹框-->
		<div class="zz"></div>
		<!--超级返现规则-->
		<div class="cjfx">
			<img src="/public/img/close.png" class="cjgz-c">
			<img src="/public/img/cjgz.png" id="cjgz-img">
		</div>
		<!--转盘规则-->
		<div class="zpgz">
			<img src="/public/img/close.png" class="cjgz-c">
			<img src="/public/img/zpgz.png" id="cjgz-img">
		</div>

		<!-- 无次数提示弹框 -->
		<div class="wcs">
			<img src="/public/img/close.png" class="cjgz-c">
			<img src="/public/img/wcs-tk.png" class="wcs-img">
			<img src="/public/img/ok-img.png" class="ok-img">
		</div>
		<!-- 当日是否投资弹框 -->
		<div class="today">
			<img src="/public/img/close.png" class="cjgz-c">
			<img src="/public/img/tz-tk.png" class="tz-img">
			<img src="/public/img/ok-img.png" class="ok-img">
		</div>
		<!-- 抽到奖励弹框 -->
		<div class="jl-tk">
			<img src="/public/img/close.png" class="cjgz-c">
			<img src="/public/img/zj-tk.png" class="zj-img">
			<img src="/public/img/ok-img.png" class="ok-img">
			<p class="texts">正在查询奖项...</p>
		</div>
		<script type="text/javascript" src="/public/js/jquery.min.js"></script>
		<script type="text/javascript" src="/public/js/jquery.rotate.js"></script>
		<script type="text/javascript" src="/public/js/jquery.easing.min.js"></script>
		<script type="text/javascript" src="/public/js/jquery.jsonp.js"></script>
		<script type="text/javascript" src="/public/js/index.js"></script>

		<div style="text-align:center;margin:0; font:normal 14px/24px 'MicroSoft YaHei';position: absolute;left:0;right:0;">
		<p>主办方：<a href="http://www.517ybang.com/" target="_blank" style="color:red;">进来商城</a></p>
		</div>
		<input type="hidden" value="<?=$user_id?>" id="login_user_id">
		<input type="hidden" value="<?=mktime(12,0,0,9,14,2018)?>" id="start_time">
		<input type="hidden" value="<?=mktime(17,0,0,9,14,2018)?>" id="end_time">
		<input type="hidden" value="<?=time()?>" id="current_time">
	</body>
</html>