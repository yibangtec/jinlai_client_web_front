<<<<<<< HEAD
	<script src="https://cdn-remote.517ybang.com/js/rem.js"></script>
    <link rel="stylesheet" href="https://cdn-remote.517ybang.com/css/fontStyle.css"/>

    <link rel="stylesheet" href="https://cdn-remote.517ybang.com/css/account.css"/>

=======
<script src="https://cdn-remote.517ybang.com/js/rem.js"></script>
    <link rel="stylesheet" href="https://cdn-remote.517ybang.com/css/fontStyle.css">
    <link rel="stylesheet" href="https://cdn-remote.517ybang.com/css/account.css">

>>>>>>> ac09f5a6f9df7ac43d2f05bacca7803ff799d425
	<style>
        body{
            background-color: #efefef;
        }
    </style>

<div class="box">
	<?php
		// 常用数据
<<<<<<< HEAD
		$itemname = $item['nickname'];
		$url_avatar = empty($item['avatar'])? DEFAULT_IMAGE: $this->media_root. $item['avatar'];
=======
		$url_avatar = empty($item['avatar'])? DEFAULT_IMAGE: $item['avatar'];
		$url_avatar = (strpos($url_avatar, 'http') === FALSE)? $this->media_root.$url_avatar: $url_avatar;
>>>>>>> ac09f5a6f9df7ac43d2f05bacca7803ff799d425
	?>

    <div class="header">
        <div class="header-top clearfix">
<<<<<<< HEAD
            <a title="我的用户资料" href="<?php echo base_url('user/edit') ?>" class="header-img" style="background: url('<?php echo $url_avatar; ?>') no-repeat center; background-size: cover;"></a>
            <a title="我的用户资料" href="<?php echo base_url('user/edit') ?>" class="header-name">
            	<span class="nick-name"><?php echo $itemname ?></span>
=======
            <a title="修改资料" href="<?php echo base_url('user/edit') ?>" class="header-img" style="background: url('<?php echo $url_avatar ?>') no-repeat center; background-size: cover;"></a>
            <a title="修改用户资料" href="<?php echo base_url('user/edit') ?>" class="header-name">
            	<span class="nick-name" data-name=nickname></span>
>>>>>>> ac09f5a6f9df7ac43d2f05bacca7803ff799d425
                <span class="member">VIP<?php echo $item['level'] ?></span>
            </a>
            <div class="header-news">
                 <!--图标-->
                 <i class="icon-chat"></i>
            </div>
        </div>
        <div class="header-bot">
<<<<<<< HEAD
            <a class="bot-float" title="关注店铺" href="<?php echo base_url('fav_biz') ?>">
=======
            <a class="bot-float" title="收藏商家" href="<?php echo base_url('fav_biz') ?>">
>>>>>>> ac09f5a6f9df7ac43d2f05bacca7803ff799d425
                <i class="icon-guanzhu_bk"></i>
                <p>关注店铺</p>
            </a>
            <a class="bot-float" title="收藏宝贝" href="<?php echo base_url('fav_item') ?>">
                <i class="icon-shoucang"></i>
                <p>收藏宝贝</p>
            </a>
<<<<<<< HEAD
            <a class="bot-float" >
                <i class="icon-wokanguode"></i>
                <p>我看过的</p>
            </a>
            <a class="bot-float" title="卡券" href="<?php echo base_url('coupon') ?>">
=======
            <a class="bot-float" title="浏览历史" href="<?php echo base_url('history_item_view') ?>">
                <i class="icon-wokanguode"></i>
                <p>我看过的</p>
            </a>
            <a class="bot-float" title="会员卡" href="<?php echo base_url('member_biz/mine') ?>">
>>>>>>> ac09f5a6f9df7ac43d2f05bacca7803ff799d425
                <i class="icon-huiyuan2"></i>
                <p>会员卡</p>
            </a>
        </div>
    </div>
    <div class="mine-order">
        <div class="order-title">
            <div class="title-left">商品订单</div>
            <a class="title-right" title="全部订单" href="<?php echo base_url('order') ?>">全部<i class="icon-Arrow"></i></a>
        </div>
        <div class="order-item clearfix">
            <a class="item-list" title="待付款订单" href="<?php echo base_url('order?status=待付款') ?>">
                <i class="icon-daifukuan"></i>
                <p>待付款</p>
            </a>
            <a class="item-list" title="待发货订单" href="<?php echo base_url('order?status=待发货') ?>">
                <i class="icon-daifahuo"></i>
                <p>待发货</p>
            </a>
            <a class="item-list" itle="待收货订单" href="<?php echo base_url('order?status=待收货') ?>">
                <i class="icon-daishouhuo"></i>
                <p>待收货</p>
            </a>
            <a class="item-list" title="待评价订单" href="<?php echo base_url('order?status=待评价') ?>">
                <i class="icon-daipingjia"></i>
                <p>待评价</p>
            </a>
            <a class="item-list" title="退款/售后" href="<?php echo base_url('refund') ?>">
                <i class="icon-jintuikuan"></i>
                <p>退款售后</p>
            </a>
        </div>
    </div>
    <div class="mine-order">
        <div class="order-title">
            <div class="title-left">我的服务</div>
        </div>
        <div class="order-item clearfix">
<<<<<<< HEAD
            <a class="item-service" title="我的卡券" href="<?php echo base_url('coupon') ?>">
                <i class="icon-kabao2"></i>
                <p>卡包</p>
            </a>
            <a class="item-service" title="邀请好友" href="<?php echo base_url('invite') ?>">
                <i class="icon-yaoqinghaoyou"></i>
                <p>邀请好友</p>
            </a>
            <a class="item-service" title="商家合作" href="<?php echo BIZ_URL.'biz/create' ?>">
=======
            <a class="item-service" title="我的卡券" href="<?php echo base_url('coupon/mine') ?>">
                <i class="icon-kabao2"></i>
                <p>卡包</p>
            </a>
            <a class="item-service" title="邀请好友" href="<?php echo base_url('invite/send') ?>">
                <i class="icon-yaoqinghaoyou"></i>
                <p>邀请好友</p>
            </a>
            <a class="item-service" title="商家合作" href="<?php echo base_url('article/biz-cooperation') ?>">
>>>>>>> ac09f5a6f9df7ac43d2f05bacca7803ff799d425
                <i class="icon-hezuo"></i>
                <p>商家合作</p>
            </a>
        </div>

        <div class="order-item clearfix">
            <a class="item-service" title="我的地址" href="<?php echo base_url('address') ?>">
                <i class="icon-dizhiguanli"></i>
<<<<<<< HEAD
                <p>地址管理</p>
            </a>
            <a class="item-service" title="系统设置" href="<?php echo base_url('setup') ?>">
                <i class="icon-shezhi"></i>
                <p>账户设置</p>
=======
                <p>地址</p>
            </a>
            <a class="item-service" title="系统设置" href="<?php echo base_url('setup') ?>">
                <i class="icon-shezhi"></i>
                <p>设置</p>
>>>>>>> ac09f5a6f9df7ac43d2f05bacca7803ff799d425
            </a>
            <a class="item-service" title="关于我们" href="<?php echo base_url('article/about-us') ?>">
                <i class="icon-guanyuwomen"></i>
                <p>关于我们</p>
            </a>
        </div>
    </div>
</div>
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
                <a href="https://www.517ybang.com" target="_self">
                <div class="itemmenulist">
                    <i class="homeIcon homeIcon1"></i>
                    <span class="text">主页</span>
                </div>
                </a>
                <a href="https://www.517ybang.com/item_category" target="_self">
                <div class="itemmenulist">
                    <i class="homeFenlei"></i>
                    <span class="text">分类</span>
                </div>
                </a>
                <a href="https://www.517ybang.com/member_biz" target="_self">
                <div class="itemmenulist">
                    <i class="homeHuiyuan"></i>
                    <span class="text">会员</span>
                </div>
                </a>
                <a href="https://www.517ybang.com/cart" target="_self">
                <div class="itemmenulist">
                    <i class="homeGouwuche"></i>
                    <span class="text">购物车</span>
                </div>
                </a>
                <a href="https://www.517ybang.com/mine" target="_self">
                <div class="itemmenulist">
                    <i class="homeWode homeWode1"></i>
                    <span class="text" style="color:#ff753e">我的</span>
                </div>
                </a>
            </div>
        </div>
        </div>

<<<<<<< HEAD
<?php endif ?>
=======
<?php
    // 应用中不显示底部导航栏
    if (
        ($this->user_agent['is_ios'] === FALSE && $this->user_agent['is_android'] === FALSE)
        || $this->user_agent['is_wechat'] === TRUE
    ):
?>
    <!--底部tab切换区域-->
    <div class="tabWrap fiex">
        <div class="tabbar auto">
            <div class="column">
                <a href="<?php echo base_url() ?>" target="_self">
                <div class="itemmenulist">
                    <i class="homeIcon homeIcon1"></i>
                    <span class="text">主页</span>
                </div>
                </a>
                <a href="<?php echo base_url('item_category') ?>" target="_self">
                <div class="itemmenulist">
                    <i class="homeFenlei"></i>
                    <span class="text">分类</span>
                </div>
                </a>
                <a href="<?php echo base_url('member_biz') ?>" target="_self">
                <div class="itemmenulist">
                    <i class="homeHuiyuan"></i>
                    <span class="text">会员</span>
                </div>
                </a>
                <a href="<?php echo base_url('cart') ?>" target="_self">
                <div class="itemmenulist">
                    <i class="homeGouwuche"></i>
                    <span class="text">购物车</span>
                </div>
                </a>
                <a href="<?php echo base_url('mine') ?>" target="_self">
                <div class="itemmenulist">
                    <i class="homeWode homeWode1"></i>
                    <span class="text" style="color:#ff753e">我的</span>
                </div>
                </a>
            </div>
        </div>
    </div>
<?php endif ?>

<script>
    var item = <?php echo json_encode($item) ?>

    $(function(){
        $('[data-name=nickname]').html(item.nickname);
    });
</script>
>>>>>>> ac09f5a6f9df7ac43d2f05bacca7803ff799d425
