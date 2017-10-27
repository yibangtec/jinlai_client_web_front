<script src="<?php echo CDN_URL ?>js/form.js"></script>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
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
    <style>
        *:before, *:after {box-sizing: border-box; }
        *, *:before, *:after {-webkit-tap-highlight-color: rgba(0, 0, 0, 0);}
        html, body, div, span, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, address, cite, code, del, dfn, em, img, ins, kbd, q, samp, small, strong, sub, sup, var, b, i, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td {
            border: 0 none;font-family: "Microsoft YaHei"; font-size: inherit;color: inherit; margin: 0;padding: 0;vertical-align: baseline;}
        h1, h2, h3, h4, h5, h6 {font-weight: normal;}
        em, strong { font-style: normal;}
        ul, ol, li {list-style: none;}
        input{outline:none;}
        button{border: none;}
        html{ margin: 0 auto; }
        body {width: 100%;background-color: #fff;}
        a {text-decoration: none;}
        .box {width: 100%;}
        .forgetPw{float: right;font-size: 0.3rem;color: #7d7d7d;padding: 0.5rem 0.3rem 0.59rem 0.3rem;}
        .loginTab{width: 100%;height: 1.9rem;}
        .tabText {float: left;width: 50%;text-align: center;font-size: 0.3rem;margin-top: 0.8rem}
        .loginTab .textLeft{box-sizing: border-box; border-right: 0.02rem solid #e6e6e6;}
        .current{color: #ff3649;padding: 0.2rem 0.2rem;border-bottom: 0.04rem solid #ff3649;}
        .input-box{width: 100%;}
        .input-item {display: flex;height: 1.16rem; border-bottom: 0.02rem solid #c9caca;margin: 0 0.3rem;}
        .input-item .label{display:block;font-size: 0.3rem;color: #666464;padding-left: 0.02rem; margin-top:0.65rem;}
        .input-item .input{flex: 1;height: 0.3rem;font-size: 0.3rem;padding-left: 0.2rem;margin-top:0.55rem;border: none;}
        .agreement{margin: 0 0.3rem;padding: 0.5rem 0;font-size: 0.2rem;color: #7d7d7d;text-align: center;}
        .textlight{color: #ff3649;}
        .btn-box{margin: 0 0.3rem;}
        .submitBtn{width: 100%;color: #ffffff;background-color: #ff3649;height: 0.8rem;border-radius: 0.12rem;font-size: 0.3rem;}
        .ver_img{height: 0.95rem;width: 2rem; margin-top: 0.1rem}
    </style>
</head>
<body>
<div id='content' class="box container">
    <div class='loginTab' role=group>
        <div class='tabText textLeft'><text class='current'>密码登录</text></div>
        <div class='tabText'><a href="<?php echo base_url('login_sms') ?>">短信登录</a></div>
    </div>
	<?php
		if ( !empty($error) ) echo '<div class="alert alert-warning" role=alert>'.$error.'</div>'; // 若有错误提示信息则显示
		$attributes = array('class' => 'form-login col-xs-12 col-md-6 col-md-offset-3', 'role' => 'form');
		echo form_open('login', $attributes);
	?>
    <div class='input-box'>
        <div class='input-item'>
            <label class="label" for="mobile">手机号</label>
            <input name="mobile" class="input" type="tel" value="<?php echo $this->input->post('mobile')? set_value('mobile'): $this->input->cookie('mobile') ?>" size=11 pattern="\d{11}" placeholder="请输入手机号" required />
        </div>
        <div class='input-item'>
            <label class="label" for="captcha_verify">验证码</label>
            <input id='captcha-verify' name="captcha_verify" class="input" type="number" max='9999' min='0001' step='1' size='4' placeholder="请输入图片验证码" required />
            <span id='captcha-image'><img class="ver_img" src="<?php echo base_url('captcha') ?>" alt=""/></span>
        </div>
        <div class='input-item'>
            <label class="label" for="password">密码</label>
            <input name="password" class="input" type="password" placeholder="请输入密码" <?php if ($this->input->cookie('mobile')) echo 'autofocus '; ?> />
        </div>
        <div class='agreement'>点击“确定”即表示您已完整阅读并同意最新版<text class='textlight'>《用户协议》</text>。</div>
        <div class="btn-box">
            <button class="submitBtn" type=submit role=button> 确定 </button>
        </div>
        <div class="forgetPw"><a href="<?php echo base_url('password_reset') ?>">忘记密码</a></div>
    </div>

</div>

</body>
</html>