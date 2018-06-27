  <script src="<?php echo CDN_URL ?>js/rem.js"></script>
   <link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css">
   <link rel="stylesheet" href="<?php echo CDN_URL ?>css/accountSet.css">

    <div class="box">
        <a href="<?php echo base_url('user/edit') ?>" class="account-set clearfix">
             <span class="account-set-text">资料修改</span>
             <i class="icon-Arrow"></i>
        </a>
        <a href="<?php echo base_url('password_change') ?>" class="account-set clearfix">
            <span class="account-set-text">密码修改</span>
            <i class="icon-Arrow"></i>
        </a>
        <a href="<?php echo base_url('password_reset') ?>" class="account-set clearfix">
            <span class="account-set-text">密码重置</span>
            <i class="icon-Arrow"></i>
        </a>
        <a href="<?php echo base_url('download') ?>" class="account-set clearfix">
            <span class="account-set-text">应用下载</span>
            <i class="icon-Arrow"></i>
        </a>

        <div class=sign-out>
            <a href="<?php echo base_url('logout') ?>">退出</a>
        </div>
    </div>