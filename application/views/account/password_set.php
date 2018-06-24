<script src="<?php echo CDN_URL ?>js/rem.js"></script>
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css"/>
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/account.css"/>
<div class="box">
    <div class="error-tips">
        <p class="tips-text"></p>
        <i class="icon-failure"></i>
    </div>
    <div style="height: 5rem; padding-top: 1.4rem;">
        <form action="">
            <div class="input-box clearfix">
                <div class="ver-box" >
                    <div class='input-item' style="height: 0.8rem;margin:0 0 0.3rem 0">
                        <label class="label" for="password1"><img class="tel-icon" src="<?php echo CDN_URL ?>media/account/login/mima@3x.png" alt=""></label>
                        <div class="tel-input">
                            <input id="password1" name=password class="input" type=password placeholder="请设置密码" required>
                            <img class="no-icon pass1" src="<?php echo CDN_URL ?>media/account/login/no@3x.png" alt="">
                        </div>

                    </div>
                </div>
                <div class="ver-box" >
                    <div class='input-item' style="height: 0.8rem;margin:0 0 0.3rem 0">
                        <label class="label" for="password_confirm"><img class="tel-icon" src="<?php echo CDN_URL ?>media/account/login/mima_qr@3x.png" alt=""></label>
                        <div class="tel-input">
                            <input id="password2" name=password_confirm class="input" type=password placeholder="请确认密码" required>
                            <img class="no-icon pass2" src="<?php echo CDN_URL ?>media/account/login/no@3x.png" alt="">
                        </div>

                    </div>
                </div>

            </div>


            <button id="submit-set" class="next">
                <img class="next-btn" src="<?php echo CDN_URL ?>media/account/login/wancheng@3x.png" alt="">
            </button>
        </form>

    </div>


</div>

<script src="<?php echo CDN_URL ?>js/account.js"></script>
<script>
    $('form').submit(function(){
        // 获取密码字段值
        var password = $('[name=password]').val();

        // 检查密码格式是否正确（参考API文档））
        if ()
        {
            // 若不正确，清空并聚焦到密码字段

            return false;
        }
        else
        {
            // 获取确认密码字段值
            var password2 = $('[name=password_confirm]').val();

            if (password !== password2)
            {
                // 若不相符，清空并聚焦到确认密码字段

                return false;
            }
        }
    });
</script>