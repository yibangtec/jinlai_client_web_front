<style>
	#content {padding-top:2rem;}
	form {padding-top:2rem;}
	
	#captcha-image {padding:0;min-width:100px;}
		#captcha-image img {width:100%;height:100%;}
	
	#actions {margin-top:4rem;}
		#actions>li {margin-bottom:2rem;}

	/* 宽度在768像素以上的设备 */
	@media only screen and (min-width:769px)
	{

	}

	/* 宽度在960像素以上的设备 */
	@media only screen and (min-width:961px)
	{

	}

	/* 宽度在1280像素以上的设备 */
	@media only screen and (min-width:1281px)
	{

	}
</style>
<script src="<?php echo CDN_URL ?>js/main.js"></script>
<script defer src="<?php echo CDN_URL ?>js/js.cookie.js"></script>
<script src="<?php echo CDN_URL ?>js/form.js"></script>

<div id=content class=container>
	<div class="btn-group btn-group-justified" role=group>
		<span class="btn btn-primary">登录</span>
		<a class="btn btn-default" href="<?php echo base_url('login_sms') ?>">短信登录</a>
	</div>

	<?php
		if ( !empty($error) ) echo '<div class="alert alert-warning" role=alert>'.$error.'</div>'; // 若有错误提示信息则显示
		$attributes = array('class' => 'form-login col-xs-12 col-md-6 col-md-offset-3', 'role' => 'form');
		echo form_open('login', $attributes);
	?>
		<fieldset>
			<div class=form-group>
				<label for=mobile>手机号</label>
				<div class=input-group>
					<span class="input-group-addon"><i class="fa fa-mobile fa-fw" aria-hidden=true></i></span>
					<input class=form-control name=mobile type=tel value="<?php echo $this->input->post('mobile')? set_value('mobile'): $this->input->cookie('mobile') ?>" size=11 pattern="\d{11}" placeholder="手机号" required>
				</div>
			</div>

			<div class=form-group>
				<label for=captcha_verify>图片验证码</label>
				<div class=input-group>
					<input id=captcha-verify class=form-control name=captcha_verify type=number max=9999 min=0001 step=1 size=4 placeholder="请输入图片验证码" required>
					<span id=captcha-image class="input-group-addon">
						<img src="<?php echo base_url('captcha') ?>">
					</span>
				</div>
			</div>
		</fieldset>

		<div id=next class=row>
		    <div class="col-xs-12 col-sm-offset-2 col-sm-2">
				<button class="btn btn-primary btn-lg btn-block" type=button role=button>下一步</button>
		    </div>
		</div>

		<fieldset class=hide id=login-password>
			<div class=form-group>
				<label for=password>密码</label>
				<div class=input-group>
					<span class="input-group-addon"><i class="fa fa-key fa-fw" aria-hidden=true></i></span>
					<input class=form-control name=password type=password <?php if ($this->input->cookie('mobile')) echo 'autofocus '; ?> placeholder="密码">
				</div>
			</div>
		</fieldset>

		<fieldset class=hide id=login-sms>
			<input name=sms_id type=hidden>

			<div class=form-group>
				<label for=captcha>短信验证码</label>
				<div class=input-group>
					<input id=captcha-input class=form-control name=captcha type=number max=999999 step=1 size=6 pattern="\d{6}" placeholder="请输入短信验证码" disabled>
					<span class="input-group-addon">
						<a id=sms-send href="#">获取验证码</a>
					</span>
				</div>
			</div>
		</fieldset>

		<div class=row>
		    <div class="col-xs-12 col-sm-offset-2 col-sm-2">
				<button class="hide btn btn-primary btn-lg btn-block" type=submit role=button>确定</button>
		    </div>
		</div>
	</form>

	<ul id=actions class="col-xs-12 col-sm-offset-2 col-sm-2">
		<li><a title="忘记密码" class="btn btn-default btn-block" href="<?php echo base_url('password_reset') ?>">忘记密码</a></li>
	</ul>
</div>
