<script src="<?php echo CDN_URL ?>js/rem.js"></script>
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css"/>
<link rel="stylesheet" href="<?php echo CDN_URL ?>css/account.css"/>
<div class="box">
    
    <div class="error-tips">
        <p class="tips-text"></p>
        <i class="icon-failure"></i>
    </div>
    <div style="height: 5rem; padding-top: 1.4rem;">
        <form action="<?php echo base_url('account/login_sms') ?>" method="post">
            <div class="input-box clearfix">
                <div class='input-item'>
                    <label class="label" for="mobile"><img class="tel-icon" src="<?php echo CDN_URL ?>media/account/login/shouji@3x.png" alt=""/></label>
                    <div class="tel-input">
                    	<input  name="sms_id" type="hidden" id="sms"/>
                        <input id="mobile" name="mobile" class="input" type="tel" size=11  placeholder="请输入手机号" required />
                        <img class="no-icon tel" src="<?php echo CDN_URL ?>media/account/login/no@3x.png" alt=""/>
                    </div>
                </div>
                <div>
                    <div class='input-item'>
                        <label class="label" for="verification"><img class="tel-icon" src="<?php echo CDN_URL ?>media/account/login/mima@3x.png" alt=""/></label>
                        <div class="tel-input">
                            <input id="verification" name="captcha" class="input" type="number" value="" size=11 pattern="\d{11}" placeholder="请输入验证码" required />
                            <img class="no-icon ver" src="<?php echo CDN_URL ?>media/account/login/no@3x.png" alt=""/>
                        </div>

                        <div class="ver-btn">获取验证码</div>
                    </div>
                </div>
            </div>


            <button id="submit" class="next" type="submit">
                <img class="next-btn" src="<?php echo CDN_URL ?>media/account/login/degnlu@3x.png" alt=""/>
            </button>
        </form>

        <div class="login_sms"><a id="login">智能登录</a></div>
    </div>
</div>

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
					  url: "https://api.517ybang.com/sms/create",
					  type: 'post',
					  dataType: 'json',
					  data: {app_type:'client',mobile:$('#mobile').val()},
					  success: function (data, status) {
					   if(data.status == 200){
					   	sms_id = data.content.id;
					   	$('#sms').val(sms_id);
					   }
					  },
					  fail: function (err, status) {
					    console.log(err)
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
		    $('#submit').on('click',function(){
		    	if(!($('#mobile').val() && $('#verification').val())){
		    		alert('验证码或手机号不能为空');
		    		return false;
		    	}
		    });
		    
		    
		    
		    
//		    $('#submit').on('click',function(){
//		    	if(!($('#mobile').val() && $('#verification').val())){
//		    		alert('验证码或手机号不能为空');
//		    		return false;
//		    	}
//		    	else{
//		    		if(!sms_id){
//		    			alert('请输入正确的验证码');
//		    			return false;
//		    		}
//		    		$.ajax({
//					  url: "https://api.517ybang.com/account/login_sms",
//					  type: 'post',
//					  dataType: 'json',
//					  data: {app_type:'biz',mobile:$('#mobile').val(),sms_id:sms_id,captcha:$('#verification').val()},
//					  success: function (data, status) {
//					   if(data.status == 200){
//					   	window.location.href = 'https://www.517ybang.com';
//					   }
//					   else{
//					   	alert(data.content.error.message);
//					   }
//					  },
//					  fail: function (err, status) {
//					    console.log(err);
//					  }
//					});
//		    	}
//		    	
//		    });
		    });


</script>

