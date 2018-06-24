<link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css">
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/account.css">

<div class="box">
    <div class="error-tips">
        <p class="tips-text"></p>
        <i class="icon-failure"></i>
    </div>
    <div class="logo">
        <img src="<?php echo CDN_URL ?>media/account/login/logo@3x.png" alt="">
    </div>
    <div style="height: 5rem;">
        <form action="" method="post">
            <div class="input-box clearfix">
                <div class='input-item'>
                    <label class="label" for="mobile"><img class="tel-icon" src="<?php echo CDN_URL ?>media/account/login/shouji@3x.png" alt=""></label>
                    <div class="tel-input">
                        <input id="mobile" name=mobile class="input" type=tel size=11 placeholder="请输入手机号" required>
                        <img class="no-icon tel" src="<?php echo CDN_URL ?>media/account/login/no@3x.png" alt="">
                    </div>
                </div>

                <!--<div class="login-ver">
                    <div class='input-item'>
                        <label class="label" for="verification"><img class="tel-icon" src="<?php echo CDN_URL ?>media/account/login/mima@3x.png" alt=""></label>
                        <div class="tel-input">
                            <input id="verification" name=verification class="input" type=number size=6 pattern="\d{11}" placeholder="请输入验证码" required>
                            <img class="no-icon ver" src="<?php echo CDN_URL ?>media/account/login/no@3x.png" alt="">
                        </div>
                        <div class="ver-btn">获取验证码</div>
                    </div>
                </div>-->

                <div class="ver-box login-password" >
                    <div class='input-item' style="height: 0.8rem;margin: 0">
                        <label class="label" for="password"><img class="tel-icon" src="<?php echo CDN_URL ?>media/account/login/mima@3x.png" alt=""></label>
                        <div class="tel-input">
                            <input id="password" name=password class="input" type=password placeholder="请输入密码" required>
                            <img class="no-icon pass" src="<?php echo CDN_URL ?>media/account/login/no@3x.png" alt="">
                        </div>
                    </div>
                    <div class="forget"><a href="password_reset">忘记密码？</a></div>
                </div>
            </div>

            <div id="next" class="next">
                <img class="next-btn" src="<?php echo CDN_URL ?>media/account/login/xiabu@3x.png" alt="">
            </div>

            <button id="submit" class="next submit" type="submit">
                <img class="next-btn" src="<?php echo CDN_URL ?>media/account/login/degnlu@3x.png" alt="">
            </button>
        </form>

        <div class="login_sms"><a href="<?php echo base_url('login_sms') ?>">短信登录</a></div>
    </div>
    <div class="login-bot">
        <div><span class="line"></span> 第三方登录 <span class="line"></span></div>
        <?php
        // 微信授权网址
        $wechat_oauth_url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.WECHAT_APP_ID.'&redirect_uri='. urlencode(base_url('login_wechat')).'&response_type=code&scope=snsapi_userinfo#wechat_redirect';
        ?>
       <a class="wx-icon" href="<?php echo $wechat_oauth_url ?>">
            <img class="wx-icon" src="<?php echo CDN_URL ?>media/account/login/weixin@3x.png" alt="">
       </a>
    </div>

</div>

<script src="<?php echo CDN_URL ?>js/account.js"></script>
<script>
    $(function(){
                var tel = getQueryString('tel');
                if(tel){
                    $('#mobile').val(tel);
                }

                $('#loginSms').on('click',function(){
                    var tel = $('#mobile').val();
                    if(tel) {
                        var regTel = /^1\d{10}$/;
                        if (regTel.test(tel)) {
                            $(this).attr('href', 'login_sms?tel=' + tel);
                        } else {
                            $(this).attr('href', 'login_sms?');
                        }
                    }else{
                        $(this).attr('href', 'login_sms?');
                    }

                })


                function getQueryString(name) {
                    var reg = new RegExp('(^|&)' + name + '=([^&]*)(&|$)', 'i');
                    var r = window.location.search.substr(1).match(reg);
                    if (r != null) {
                        return unescape(r[2]);

                    }
                };
                $('#submit').on('click',function(){
                		var regTel = /^1\d{10}$/;
                		 var regPass = new RegExp( /^([a-z0-9\.\@\!\#\$\%\^\&\*\(\)]){6,20}$/i);
		                if (!regTel.test($('#mobile').val())) {
		                	alert('请输入正确的手机号');
		                	return false;
                		}
                		if (!regPass.test($('#password').val())) {
		                	alert('请输入6-20位密码');
		                	$('#password').val('').focus();
		                	return false;
                		}
                		$.ajax({
					  url: api_url + 'account/login',
					  data: {app_type:'client',mobile:$('#mobile').val(),password:$('#password').val()},
					  success: function (data, status) {
					    if(data.status == 401){
					    	alert(data.content.error.message);
					    }
					    if(data.status == 200){
					    	window.localStorage.removeItem('userId');
					    	window.localStorage.setItem('userId',data.content.user_id);
					    	
					    }
					    if(data.status == 414){
					    	alert('用户未注册');
					    	window.location.href = 'https://www.517ybang.com/register';
					    }
					  },
					  fail: function (err, status) {
					    console.log(err)
					  }
					})
                	
                	
                });
	
          
    });
</script>