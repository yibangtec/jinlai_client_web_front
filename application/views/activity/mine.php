

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>我的优惠券</title>
    <link href="https://cdn-remote.517ybang.com/css/base.css" rel="stylesheet">
    <script src="https://cdn-remote.517ybang.com/js/rem.js"></script>
    <link rel="stylesheet" href="https://cdn-remote.517ybang.com/css/activities.css"/>
    <style>
        body{
            background:none;
            background-color: rgb(242,239,230);
        }
        .used{
            display: inline-block;
            height: 0.34rem;
            line-height: 0.34rem;
            padding: 0 0.2rem;
            background-color: #cccccc;
            color: #3E3A39;
            border-radius: 0.17rem;
            font-size: 0.22rem;
        }
    </style>
</head>
<body>
<div class="content" style="padding: 0.2rem 0;">
	<?php foreach($mytickets as $key => $value): ?>
        <div class="activities-item">
            <div class="item-left">
                <img class="item-logo" src="<?php echo $logo[$value['coupon_id']]['picture'] ?>" alt=""/>
                <div class="item-name"><?php echo $logo[$value['coupon_id']]['sub_name'] ?></div>
                <div class="btn-operation">
                    <?php if ($value['status'] == '已使用') :?>
                    <div class="used" data="<?php echo $value['id'] . '&biz_id=' . $value['biz_id'] ?>">已使用</div>
                    <?php else:?>
                    <div class="receive" data="<?php echo $value['id'] . '&biz_id=' . $value['biz_id'] ?>" >去使用</div>
                <?php endif;?>
                </div>
            </div>
            <div class="item-right">
                <p class="current-slogan"><?php echo $value['coupon_name'] ?></p>
                <p class="expiry-date">限2018-10-31前使用</p>
                <p class="limited">限<?php echo $logo[$value['coupon_id']]['show_count'] ?>张</p>
                <p class="usage-mode"><?php echo $desc[$value['description']] ?></p>
            </div>
        </div>

    <?php endforeach; ?>

</div>
<script src="https://cdn-remote.517ybang.com/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
    $('.receive').on('click', function(){
        window.location = '<?php echo base_url('activity/detail?id=')?>' + $(this).attr('data')
    });
    $('.used').on('click', function(){
        window.location = '<?php echo base_url('activity/detail?id=')?>' + $(this).attr('data')
    });
</script>
</body>
</html>