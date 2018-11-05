<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>优惠券详情</title>
    <link href="https://cdn-remote.517ybang.com/css/base.css" rel="stylesheet">
    <script src="https://cdn-remote.517ybang.com/js/rem.js"></script>
    <link rel="stylesheet" href="https://cdn-remote.517ybang.com/css/activities.css"/>
    <style>
        body{
            background:none;
            background-color: rgb(242,242,243);
        }

    </style>
</head>
<body>
<div class="content" style="padding: 0.2rem 0;">
    <div class="coupon-detail">
        <div class="public"><span class="public-name">服 务 券 :</span>有效期至: 2018-10-31 </div>
        <div class="public"><span class="public-name">验 证 码 :</span>
            <span class="public-color">
                <?php echo substr($detail['verify_code'], 0, 4) . '&nbsp;' . substr($detail['verify_code'], 4, 4) . '&nbsp;' . substr($detail['verify_code'], 8, 2) ?>
                
            </span></div>
        <div class="public"><span class="public-name">服务状态:</span>[<?php echo $detail['status']?>]</div>
    </div>
    <div class="biz-detail">
        <div class="coupon-name"><?php echo $detail['coupon_name'] ?></div>
        <div class="total-box">
            <div class="biz-name" style="border: none"><?php echo $biz['brief_name']?></div>
            <div class="total"><span style="font-size: 0.22rem;color: rgb(137,137,137);">地址： <?php echo $biz['address']?></span><span> <a href="tel:<?php echo $biz['tel_public']?>"><i class="icon-tel"></i></a> </span></div>
        </div>
    </div>
    <div class="goTips">
        <span class="point"></span><span>到店告知商家服务券码,即可体验商家的服务哦~</span>
    </div>
</div>
</body>
</html>