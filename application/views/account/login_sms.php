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
                        <label class="label" for="verification"><img class="tel-icon" src="<?php echo CDN_URL ?>media/account/login/mima@3x.png" alt=""/></label>
                        <div class="tel-input">
                            <input id="verification" name="verification" class="input" type="number" value="" size=11 pattern="\d{11}" placeholder="请输入验证码" required />
                            <img class="no-icon ver" src="<?php echo CDN_URL ?>media/account/login/no@3x.png" alt=""/>
                        </div>

                        <div class="ver-btn">获取验证码</div>
                    </div>
                </div>

            </div>


            <button id="submit" class="next">
                <img class="next-btn" src="<?php echo CDN_URL ?>media/account/login/degnlu@3x.png" alt=""/>
            </button>
        </form>

        <div class="login_sms"><a id="login">智能登录</a></div>
    </div>
</div>

<script src="<?php echo CDN_URL ?>js/jquery-3.2.1.min.js"></script>
<script src="<?php echo CDN_URL ?>js/account.js"></script>
<script>

    $(function(){
        console.log(getQueryString('tel'));
        var tel = getQueryString('tel');
        if(tel){
            $('#mobile').val(tel);
        }
        $('#login').on('click',function(){
            var tel = $('#mobile').val();
            if(tel) {
                var regTel = /^1\d{10}$/;
                if (regTel.test(tel)) {
                    $(this).attr('href', 'login?tel=' + tel);
                } else {
                    $(this).attr('href', 'login?');
                }
            }else{
                $(this).attr('href', 'login?');
            }

        })
        function getQueryString(name) {
            var reg = new RegExp('(^|&)' + name + '=([^&]*)(&|$)', 'i');
            var r = window.location.search.substr(1).match(reg);
            if (r != null) {
                return unescape(r[2]);

            }
        }
    });


</script>

