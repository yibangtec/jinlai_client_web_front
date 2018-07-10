<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
		<title>关于我们</title>
		<link href="<?php echo CDN_URL ?>css/index.min.css" rel="stylesheet">
		<script src="<?php echo CDN_URL ?>js/jquery-2.1.4.min.js"></script>
		<script src="<?php echo CDN_URL ?>js/swiper.min.js"></script>
		<script src="<?php echo CDN_URL ?>js/rem.js"></script>
		<style type="text/css">
			body{
				background: #efefef;
			}
			.aboutuslogo{
				padding-top: .5rem;
				padding-bottom: .3rem;
			}
			.aboutuslogo img{
				display: block;
				width: 1.6rem;
				height: 1.6rem;
				margin: 0 auto;
			}
			.aboutuscontent{
				font-size: .26rem;
				color: #6e6d6d;
				line-height: 1.4;
				padding-bottom: .38rem;
				width: 6.35rem;
				margin: 0 auto;
			}
			.aboutuspiclist{
				width: 5.7rem;
				margin: 0 auto;
				overflow: hidden;
			}
			.aboutuspiclist li{
				float: left;
				margin-right: .45rem;
			}
			.aboutuspiclist li span{
				color: #777;
				font-size: .26rem;
				display: block;
				padding-top: .26rem;
				padding-bottom: .38rem;
				text-align: center;
				width: 100%;
			}
			.aboutuspiclist li img{
				display: block;
				width: 100%;
				width: 1.6rem;
				height: 1.6rem;
			}
			.aboutustextlist p{
				height: .84rem;
				line-height: .84rem;
				color: #3c3c3c;
				border-bottom: 1px solid #e1e1e1;
				font-size: .28rem;
				background: #fff;
			}
            .aboutustextlist a {display:block;width:100%;height:100%;}
			.aboutustextlist span:nth-child(1){
				margin-left: .56rem;
			}
			.aboutustextlist span:nth-child(2){
				
				margin-right: .56rem;
			}
			.aboutfooter{
				color: #777;
				font-size: .24rem;
				padding-top: 1.06rem;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div class="aboutuslogo">
			<img src="<?php echo CDN_URL ?>media/home/aboutuslogo.png" alt="">
		</div>
		<p class="aboutuscontent">
			商城-青岛本地严选平台,进来商城-青岛本地,商城-青岛本地严选平台,进来商城-青岛本地,商城-青岛本地严选平台,进来商城-青岛本地
		</p>
		<div class="aboutuspiclist">
			<ul>
                <?php if ($this->user_agent['is_android']): ?>
				<li>
					<a href="<?php echo BASE_URL ?>jinlai_client_0.0.1.apk">
						<img src="<?php echo CDN_URL ?>media/home/android@3x.png" alt="">
						<span>Android</span>
					</a>
				</li>
                <?php elseif ($this->user_agent['is_ios']): ?>
                <li>
                    <a href="https://itunes.apple.com/cn/app/id1304204060">
                        <img src="<?php echo CDN_URL ?>media/home/ios@3x.png" alt="">
                        <span>ios</span>
                    </a>
                </li>
                <?php endif ?>
				<li>
                    <img src="<?php echo CDN_URL ?>media/home/wx@3x.png" alt="">
                    <span>微信服务号</span>
				</li>
			</ul>
		</div>
		<!--消费服务,商家,投诉举报区域-->
		<div class="aboutustextlist">
			<p>
				<a href="tel:4008820532">
					<span class="fl">消费者服务</span>
					<span class="fr">400-882-0532</span>
				</a>
			</p>
			<p>
				<a href="tel:053280862555">
					<span class="fl">商家服务</span>
					<span class="fr">0532-80862555</span>
				</a>
			</p>

            <!--
			<p>
				<a href="###">
					<span class="fl">投诉举报</span>
					<span class="fr">someone@some.com</span>
				</a>
			</p>
			-->

            <p style="margin-top:.2rem;">
                <a href="<?php echo base_url('article/policy-privacy') ?>">
                    <span class="fl">隐私协议</span>
                    <span class="fr">&gt;</span>
                </a>
            </p>
            <p>
                <a href="<?php echo base_url('article/user-agreement') ?>">
                    <span class="fl">用户协议</span>
                    <span class="fr">&gt;</span>
                </a>
            </p>
		</div>

		<div class="aboutfooter">&copy;<?php echo date('Y') ?> 青岛意帮网络科技有限公司</div>

	</body>
</html>
