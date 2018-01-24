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
                <div class='input-item'>
                    <label class="label" for="mobile"><img class="tel-icon" src="<?php echo CDN_URL ?>media/account/login/shouji@3x.png" alt=""/></label>
                    <div class="tel-input">
                        <input id="mobile" name="mobile" class="input" type="tel" size=11  placeholder="请输入手机号" required />
                        <img class="no-icon tel" src="<?php echo CDN_URL ?>media/account/login/no@3x.png" alt=""/>
                    </div>
                </div>

                <div>
                    <div class='input-item'>
                        <label class="label" for="verification"><img class="tel-icon" src="<?php echo CDN_URL ?>media/account/login/yanzhen@3x.png" alt=""/></label>
                        <div class="tel-input">
                            <input id="verification" name="verification" class="input" type="number" value="" size=6  placeholder="请输入验证码" required />
                            <img class="no-icon ver" src="<?php echo CDN_URL ?>media/account/login/no@3x.png" alt=""/>
                        </div>
                        <div class="ver-btn">获取验证码</div>
                    </div>
                </div>
                <div class="ver-box" >
                    <div class='input-item' style="height: 0.8rem;margin:0 0 0.3rem 0">
                        <label class="label" for="password1"><img class="tel-icon" src="<?php echo CDN_URL ?>media/account/login/mima@3x.png" alt=""/></label>
                        <div class="tel-input">
                            <input id="password1" name="password1" class="input" type="password" value=""  placeholder="请输入密码" required />
                            <img class="no-icon pass1" src="<?php echo CDN_URL ?>media/account/login/no@3x.png" alt=""/>
                        </div>
                    </div>
                </div>
                <div class="ver-box" >
                    <div class='input-item' style="height: 0.8rem;margin:0 0 0.3rem 0">
                        <label class="label" for="password2"><img class="tel-icon" src="<?php echo CDN_URL ?>media/account/login/mima_qr@3x.png" alt=""/></label>
                        <div class="tel-input">
                            <input id="password2" name="password2" class="input" type="password" value=""  placeholder="请确认密码" required />
                            <img class="no-icon pass2" src="<?php echo CDN_URL ?>media/account/login/no@3x.png" alt=""/>
                        </div>
                    </div>
                </div>
            </div>


            <button id="submit-reset" class="next">
                <img class="next-btn" src="<?php echo CDN_URL ?>media/account/login/wancheng@3x.png" alt=""/>
            </button>
        </form>

    </div>


</div>

<script src="<?php echo CDN_URL ?>js/jquery-3.2.1.min.js"></script>
<script src="<?php echo CDN_URL ?>js/account.js"></script>