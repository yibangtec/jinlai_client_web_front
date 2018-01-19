
<script>
        (function (doc, win) {
            var docEl = doc.documentElement,
                    resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
                    recalc = function () {
                        var clientWidth = docEl.clientWidth;
                        if (!clientWidth) return;
                        if(clientWidth>=750){
                            docEl.style.fontSize = '100px';
                        }else{
                            docEl.style.fontSize = 100 * (clientWidth / 750) + 'px';
                        }
                    };

            if (!doc.addEventListener) return;
            win.addEventListener(resizeEvt, recalc, false);
            doc.addEventListener('DOMContentLoaded', recalc, false);
        })(document, window);
</script>

<div class="box">
    <div class="error-tips">
            dsfsdfasdf
    </div>
    <div class="logo">
        <img src="<?php echo CDN_URL ?>media/account/login/logo@3x.png" alt=""/>
    </div>
    <div style="height: 5rem;">
        <div class="input-box clearfix">
            <div class='input-item'>
                <label class="label" for="mobile"><img class="tel-icon" src="<?php echo CDN_URL ?>media/account/login/shouji@3x.png" alt=""/></label>
                <div class="tel-input">
                    <input id="mobile" name="mobile" class="input" type="tel" size=11  placeholder="请输入手机号" required />
                    <img class="no-icon tel" src="<?php echo CDN_URL ?>media/account/login/no@3x.png" alt=""/>
                </div>
            </div>

            <div class="login-ver">
                <div class='input-item'>
                    <label class="label" for="verification"><img class="tel-icon" src="<?php echo CDN_URL ?>media/account/login/mima@3x.png" alt=""/></label>
                    <div class="tel-input">
                        <input id="verification" name="verification" class="input" type="number" value="" size=11 pattern="\d{11}" placeholder="请输入验证码" required />
                        <img class="no-icon ver" src="<?php echo CDN_URL ?>media/account/login/no@3x.png" alt=""/>
                    </div>
                    <div class="ver-btn">获取验证码</div>
                </div>
            </div>

            <div class="ver-box login-password" >
                <div class='input-item' style="height: 0.8rem;margin: 0">
                    <label class="label" for="password"><img class="tel-icon" src="<?php echo CDN_URL ?>media/account/login/mima@3x.png" alt=""/></label>
                    <div class="tel-input">
                        <input id="password" name="password" class="input" type="text" value=""  placeholder="请输入密码" required />
                        <img class="no-icon pass" src="<?php echo CDN_URL ?>media/account/login/no@3x.png" alt=""/>
                    </div>

                </div>
                <div class="forget">忘记密码？</div>
            </div>
        </div>

        <div id="next" class="next">
            <img class="next-btn" src="<?php echo CDN_URL ?>media/account/login/xiabu@3x.png" alt=""/>
        </div>

        <div id="submit" class="next submit">
            <img class="next-btn" src="<?php echo CDN_URL ?>media/account/login/degnlu@3x.png" alt=""/>
        </div>

        <div class="login_sms"><a class="btn btn-default" href="<?php echo base_url('login_sms') ?>">短信登录</a></div>
    </div>
    <div class="login-bot">
        <div><span class="line"></span> 第三方登录 <span class="line"></span> </div>
        <img class="wx-icon" src="<?php echo CDN_URL ?>media/account/login/weixin@3x.png" alt=""/>
    </div>
<script src="<?php echo CDN_URL ?>js/jquery-3.2.1.min.js"></script>
<script src="<?php echo CDN_URL ?>js/account.js"></script>
</div>

