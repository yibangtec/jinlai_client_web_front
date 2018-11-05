<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name=viewport content="width=device-width,user-scalable=0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link href="https://cdn-remote.517ybang.com/css/normal.css" rel="stylesheet">
		<link href="https://cdn-remote.517ybang.com/css/common.css" rel="stylesheet">
		<link href="https://cdn-remote.517ybang.com/css/base.css" rel="stylesheet">
		<link href="https://cdn-remote.517ybang.com/css/index.css" rel="stylesheet">
		<script>
			(function (doc, win) {
			    var docEl = doc.documentElement,
			        resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
			        recalc = function () {
			            var clientWidth = docEl.clientWidth;
			            if (!clientWidth) return;
			            // [娉╙:chrome涓嬩笉鏀寔10px鎵€浠ュ墠杈圭殑100浠ｈ〃锛�1rem = 100px;鍚庤竟鐨�750浠ｈ〃璁捐绋跨殑瀹藉害
			            docEl.style.fontSize = 100 * (clientWidth / 750) + 'px';
			        };
			 
			    if (!doc.addEventListener) return;recalc();
			    win.addEventListener(resizeEvt, recalc, false);
			    doc.addEventListener('DOMContentLoaded', recalc, false);
			})(document, window);
		</script>
	</head>
	<body>
		<!--头部背景图片区域-->
		<div class="redenvelope">
			<img src="https://cdn-remote.517ybang.com/media/share_redenvelope/dingbutu@3x.png" alt="进来分享红包" />
		</div>
		<!--进来打开红包按钮-->
		<div class="share_redenvelope_btn"></div>
		<!--邀请注册表单区域-->
		<div class="share_content clearfix">
			<p>接受进来小伙伴邀请立享优惠</p>
			<form action="" method="">
				<div class="messageWrap">
					<input type="number" placeholder="请输入您的手机号领取" class="tel"/>
					<i class="icon-shoujihao"></i>
				</div>
				<div class="messageWrap">
					<input type="number" placeholder="请输入验证码" class="yzm fl"/>
					<input type="text"  class="getCode fl" id="btn" value="获取验证码" disabled="disabled">
					<i class="icon-yanzhengma"></i>
				</div>
			</form>
			<!--信息填完后在立即领取后添加类 cur即可变色-->
			<div class="currentGet">立即领取</div>
		</div>
		<script src="https://cdn-remote.517ybang.com/js/jquery-3.3.1.min.js"></script>
		<script src="https://cdn-remote.517ybang.com/js/jquery.cookies.js"></script>
		<script>

			$(function(){
			   if($.cookie("total")!=undefined&&$.cookie("total")!='NaN'&&$.cookie("total")!='null'){//cookie存在倒计时
			     timekeeping();
			   }else{//cookie 没有倒计时
			     $('#btn').attr("disabled", false);
			   }
			   function timekeeping(){
			    //把按钮设置为不可以点击
			    $('#btn').attr("disabled", true).addClass('smsgray');
			    var interval=setInterval(function(){//每秒读取一次cookie
			     //从cookie 中读取剩余倒计时
			     total=$.cookie("total");
			     //在发送按钮显示剩余倒计时
			     $('#btn').val(total + 's');
			     //把剩余总倒计时减掉1
			     total--;
			     if(total==0){//剩余倒计时为零，则显示 重新发送，可点击
			     //清除定时器
			     clearInterval(interval);
			     //删除cookie
			     total=$.cookie("total",total, { expires: -1 });
			     //显示重新发送
			     $('#btn').val('重新发送');
			     $('#btn').removeClass('smsgray');
			     //把发送按钮设置为可点击
			     $('#btn').attr("disabled", false);
			     }else{//剩余倒计时不为零
			     //重新写入总倒计时
			     $.cookie("total",total);
			     }
			    },1000);
			   }
			   //绑定发送按钮
			    $('#btn').click(function(event) {
			   /* Act on the event */
			   // alert($("#btn").val());
			   //校验手机号码
			   var phone=$('.tel').val();
			   var pre=/^(0|86|17951)?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/;
			   if(phone==''){
			     alert('手机号不能为空');
			     return this;
			   }else{
			     var pre=/^(0|86|17951)?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/;
			     if(!pre.test(phone)){
			      alert('手机号格式错误');
			       return this;
			     }
			   }
			    $.cookie("total",60);
			    timekeeping();
//			   $.ajax({
//			    url: '',//服务器发送短信
//			    type: 'GET',
//			    dataType: 'json',
//			    data: {phone: phone},
//			   })
//			   .done(function(re) {
//			      var str="发送短信验证码成功，请注意查看您的手机";
//			      // console.log(re);
//			      if(re){
//			        $.cookie("total",60);
//			        timekeeping();
//			      }else{
//			        switch (re[0]) {
//			         case '160038':
//			          str="短信验证码发送过频繁";
//			          break; 
//			         case '160034':
//			          str="号码黑名单";
//			          break; 
//			         case '160000':
//			          str="系统错误";
//			          break;
//			         case '000000':
//			          str="发送成功";
//			          break;
//			         case '112300':
//			          str="接收短信的手机号码为空";
//			          break; 
//			         case '160040':
//			          str="验证码超出发送上限";
//			          break;
//			         case '160042':
//			          str="号码格式有误";
//			          break; 
//			         default:
//			          str="发送验证码失败";
//			          break;
//			        }
//			      }
//			      alert(str);
//			   })
//			   .fail(function() {
//			    console.log("error");
//			   })
//			   .always(function() {
//			    console.log("complete");
//			   });
			  });
			  })
		</script>
	</body>
</html>
