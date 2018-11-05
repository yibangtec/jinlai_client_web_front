<script src="<?php echo CDN_URL ?>js/rem.js"></script>
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css">
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/account.css">

<div class="box">
    <div class="error-tips">
        <p class="tips-text"></p>
        <i class="icon-failure"></i>
    </div>
    <div style="height: 5rem; padding-top: 1.4rem;">
        <form method=post>
            <div class="input-box clearfix">
                <div class="ver-box" >
                    <div class='input-item' style="height: 0.8rem;margin:0 0 0.3rem 0">
                        <label class="label" for="password"><img class="tel-icon" src="<?php echo CDN_URL ?>media/account/login/mima@3x.png" alt=""></label>
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

        // 获取确认密码字段值
        var password2 = $('[name=password_confirm]').val();
        var re = /^[a-zA-Z0-9]{6,20}$/;
        // 检查密码格式是否正确（参考API文档））
        if (re.test(password)){
            if (password !== password2){
                // 若不相符，清空并聚焦到确认密码字段
                $('.tips-text').html('两次密码输入不一致');
                $('#password2').val('');
                $('#password2').focus();
                $('.error-tips').show();
                actionDo();
                return false;
            }
        }
        else
        {
            // 若不正确，清空并聚焦到密码字段
            $('.tips-text').html('密码长度应在6-20位之间');
                            $('#password1').val('');
                            $('#password1').focus();
                            $('.error-tips').show();
                            actionDo();
            return false;
        }
    });

    var ProBox = $(".box");
                // 构建一个要执行的函数
                function Hide(){
                    ProBox.find('.error-tips').fadeOut(200);
                }
                function Hideng(){
                    ProBox.find('.error-tips').fadeOut(200);
                }
                // 定时器函数
                function actionToDo(){
                    return setInterval(function(){
                        // 插入要执行的函数
                        Hideng();
                    },2000); // 设定执行或延时时间
                };
                // 定时器函数
                function actionDo(){
                    return setInterval(function(){
                        // 插入要执行的函数
                        Hide();
                        Hideng();
                    },2000); // 设定执行或延时时间
                };

</script>