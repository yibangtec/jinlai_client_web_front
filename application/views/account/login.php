<link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css">
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/account.css?n=1">
<div class="box">
    <div class="error-tips">
        <p class="tips-text"></p>
        <i class="icon-failure"></i>
    </div>
    <div class="logo">
        <img src="<?php echo CDN_URL ?>media/account/login/logo@3x.png" alt="">
    </div>
    <div style="height: 5rem;">
        <form method=post>
            <input name=sms_id type=hidden>

            <div class="input-box clearfix">
                <div class='input-item'>
                    <label class="label" for=mobile><img class="tel-icon" src="<?php echo CDN_URL ?>media/account/login/shouji@3x.png" alt=""></label>
                    <div class="tel-input">
                        <input id="mobile" name=mobile class="input" type=tel size=11 placeholder="请输入手机号" required>
                        <img class="no-icon tel" src="<?php echo CDN_URL ?>media/account/login/no@3x.png" alt="">
                    </div>
                </div>

                <div class="login-ver">

                    <div class='input-item'>

                        <label class="label" for="verification"><img class="tel-icon" src="<?php echo CDN_URL ?>media/account/login/mima@3x.png" alt=""></label>

                        <div class="tel-input">
                            <input id="verification" name=captcha class="input" type=number placeholder="请输入验证码">

                            <img class="no-icon ver" src="<?php echo CDN_URL ?>media/account/login/no@3x.png" alt="">
                        </div>

                        <div class="ver-btn">获取验证码</div>

                    </div>

                </div>

                <div class="ver-box login-password" >
                    <div class='input-item' style="height: 0.8rem;margin: 0">
                        <label class="label" for="password"><img class="tel-icon" src="<?php echo CDN_URL ?>media/account/login/mima@3x.png" alt=""></label>
                        <div class="tel-input">
                            <input id=password name=password class="input" type=password placeholder="请输入密码">
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

        <div class="login_sms"><a href="<?php echo BASE_URL ?>login_sms">短信登录</a></div>
    </div>
    <div class="login-bot">
        <div><span class="line"></span> 第三方登录 <span class="line"></span> </div>
        <a class="wx-icon" href="">
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
                        var params = common_params;
                        params.mobile = $('[name=mobile]').val();
                        params.password = $('[name=password]').val();
                        params.sms_id = $('[name=sms_id]').val();
                        params.captcha = $('[name=captcha]').val();
                        console.log(params);
                        
                        // 若未传入密码，使用短信登录；若传入了密码，使用密码登录
                        var url = api_url + (params.password == ''? 'account/login_sms': 'account/login');

                		var regTel = /^1\d{10}$/;
                		 var regPass = new RegExp( /^([a-z0-9\.\@\!\#\$\%\^\&\*\(\)]){6,20}$/i);
		                if (!regTel.test($('#mobile').val())) {
		                	alert('请输入正确的手机号');
		                	return false;
                		}
                		if ($('#password').css.display == 'block' && !regPass.test($('#password').val())) {
		                	alert('请输入6-20位密码');
		                	console.log($('#password').val());
		                	$('#password').val('').focus();
		                	return false;
                		}
                		/*
                		$.ajax({
							  url: url,
							  data: params,
							  success: function (data, status)
                              {
                                  console.log(data);
							    if(data.status == 200){
							    	localStorage.removeItem('userId');
							    	localStorage.setItem('userId',data.content.user_id);
							    	
							    }
							    else
                                {
                                    alert(data.content.error.message);
                                }
							  },
							  fail: function (err, status) {
							    console.log(err)
							  }
					})

                    return false;
                    */
                });
	
          
    });
            //点击获取验证码
          let  time1 = 60;
		    var  count = time1;
		    var countinterval;
			var button = $('.ver-btn');
		    button.click(showTitle);
		    var sms_id;
		    function showTitle(){
		    	var regTel = /^1\d{10}$/;
                if (!regTel.test($('#mobile').val())) {
                	alert('请输入正确手机号');
                	return;
                }
		    	$(this).css('background','#ccc');
		    		$.ajax({
					  url: api_url + 'sms/create',
					  data: {app_type:'client',mobile:$('#mobile').val()},
					  success: function (data, status) {
					   if(data.status == 200){
					   	sms_id = data.content.id;
					   	$('[name=sms_id]').val(sms_id);
					   }
					  },
					  fail: function (err, status) {
					    console.log(err);
					  }
					});
		      countinterval = setInterval(timecount, 1000);
		      button.off('click',showTitle);//解绑点击事件
		    }
		    function timecount(){
		      button.text(count+'s');  
		      if (count<=0) {
		      count = time1;
		      clearInterval(countinterval);
		      button.text('重新获取验证码');
		      button.css('background','#FC5353');
		      button.on('click',showTitle);  
		      }
		      else
		        count--;
		    }
</script>