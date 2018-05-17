/*发送消息*/
function send(headSrc,str){
	var html="<div class='send'><div class='msg'><div class='arrowL'></div><img src="+headSrc+" />"+
	"<p>"+str+"</p></div></div>";
	upView(html);
}
/*接受消息*/
function show(headSrc,str){
	var html="<div class='show'><div class='msg'><div class='arrow'></div><img src="+headSrc+" />"+
	"<p>"+str+"</p></div></div>";
	upView(html);
	
}

//客户端商品订单
function showkhdRecord(headSrc,str){
	var html="<div class='show'><div class='msg'><div class='arrow'></div><img src="+headSrc+" />"+
	"<p class='showkhdRecord'>"+str+"</p></div></div>";
	upView(html);
}
//获取地理位置
function getLocation(headSrc,str){
	var html="<div class='show'><div class='msg'><img src="+headSrc+" />"+
	"<p class='curLocation'>"+str+"</p></div></div>";
	upView(html);
}
//点击发送门店
function sendMd(headSrc,str){
	var html="<div class='send'><div class='msg'><img src="+headSrc+" />"+
	"<p class='mdadd' style='overflow:hidden;padding:0px;'>"+str+"</p></div></div>";
	upView(html);
}

//点击图片
function sendPic(headSrc,str){
	var html="<div class='send'><div class='msg'><div class='arrowL'></div><img src="+headSrc+" />"+
	"<p class='sendTp'>"+str+"</p></div></div>";
	upView(html);
}
//点击客户端图片
function sendkhdPic(headSrc,str){
	var html="<div class='show'><div class='msg'><div class='arrow'></div><img src="+headSrc+" />"+
	"<p class='sendTp'>"+str+"</p></div></div>";
	upView(html);
}
//发送优惠券
function sendYhq(headSrc,str){
	var html="<div class='send'><div class='msg'><div class='arrowL'></div><img src="+headSrc+" />"+
	"<p class='sendYhq'>"+str+"</p></div></div>";
	upView(html);
}
/*更新视图*/
function upView(html){
	$('.message').append(html);
	$('body').animate({scrollTop:$('.message').outerHeight()-window.innerHeight},200)
}
function sj(){
	return parseInt(Math.random()*10)
}
$(function(){
		document.onkeyup = function (e) {
		var code = e.charCode || e.keyCode;
		if (code == 13) {
			debugger;
			//$('.message').scrollTop( $('.message')[0].scrollHeight );
			//alert($('.message')[0].scrollHeight);
			show("https://cdn-remote.517ybang.com//media/chatimages/images/touxiangm.png",$('#chat .footer .chatInput').text());
			$('#chat .footer .chatInput').text('');
			test();
		}
		}
//点击加号,弹出附加面板
var flag = 0;
$('#chat i.chatbtn').on('click',function(){
	if(flag == 0){
		$('#chat .message').css('height','6rem');
		$('#chat .footer').css('bottom','4rem');
		$(".additionalpanels").show();
		$('#chat .footer input').css('background','#f4f4f4');
		$('#chat .footer input').attr("readonly","readonly");
		$('#chat .footer i').removeClass('icon-xl-tankuang').addClass('icon-close2');
		flag=1;
	}
	else{
		$('#chat .message').css('height','10rem');
		$('#chat .footer').css('bottom','0px');
		$(".additionalpanels").hide();
		$('#chat .footer input').css('background','#fff');
		$('#chat .footer input').removeAttr('readonly');
		$('#chat .footer i').removeClass('icon-close2').addClass('icon-xl-tankuang');
		flag = 0;
	}
});
//客户端点击收货地址后
$('#chat .shdz').click(function(){
	show("https://cdn-remote.517ybang.com//media/chatimages/images/touxiangm.png",'<span>孙亚楠</span><span class="fr">17660625487</span><span style="margin-top:.17rem;display:block">山东省  青岛市  崂山区<br>东海东路1号45-2意帮网络科技有限公司</span>');
		test();
		
});

//点击客户端商家订单
$('#chat .khdsjdd').click(function(){
	showkhdRecord('https://cdn-remote.517ybang.com//media/chatimages/images/touxiang.png','<a style="font-size:.3rem;">订单编号:123456</a><span style="display:block;padding-top:.2rem;padding-bottom:.3rem;border-bottom:1px solid #c9caca;text-align:right;"><i style="font-size:.28rem;color:#ff3649;">待发货</i></span><strong style="overflow: hidden;display:block;padding:.3rem 0px;"><span class="fl">孙亚楠</span><span class="fr">17665864584</span></strong><span style="display:block;">山东省 青岛市 崂山区</span><span style="display:block;border-bottom: 1px dotted #c9caca;padding-bottom: .3rem;">东海东路1-42号</span><span style="padding-top:.4rem;display:block;overflow:hidden;padding-bottom:.2rem;"><img src="https://cdn-remote.517ybang.com//media/chatimages/images/touxiangm.png" style="width:.9rem;height:.9rem;display:block;float:left;"><span style="display:block;float:left;margin-left: .1rem;height: .8rem;width:2.5rem;overflow:hidden;">新款衬衣礼物盒新款衬衣礼物盒新款衬衣礼物盒</span></span><span style="display:block;overflow:hidden;padding-bottom:.2rem;"><img src="https://cdn-remote.517ybang.com//media/chatimages/images/touxiangm.png" style="width:.9rem;height:.9rem;display:block;float:left;"><span style="display:block;float:left;margin-left: .1rem;height: .8rem;width:2.5rem;overflow:hidden;">新款衬衣礼物盒新款衬衣礼物盒新款衬衣礼物盒</span></span><span style="display:block;overflow:hidden;padding-bottom:.3rem;border-bottom:1px dotted #c9caca;"><img src="https://cdn-remote.517ybang.com//media/chatimages/images/touxiang.png" style="width:.9rem;height:.9rem;display:block;float:left;"><span style="display:block;float:left;margin-left: .1rem;height: .8rem;width:2.5rem;overflow:hidden;">新款衬衣礼物盒新款衬衣礼物盒新款衬衣礼物盒</span></span>');
});
$('#chat .dqdz').click(function(){
	getLocation("https://cdn-remote.517ybang.com//media/chatimages/images/touxiangm.png",'<span>山东省 青岛市 崂山区 东海东路1号 青岛银行隔壁</span>');
		test();
		
});
//商家端点击门店md
$('#chat .md').click(function(){
		var mdflag = 0;
		sendMd("https://cdn-remote.517ybang.com//media/chatimages/images/touxiang.png","<img src='https://cdn-remote.517ybang.com//media/chatimages/images/touxiangm.png' style='width:.7rem;height:.7rem;margin-right:.2rem;margin-top:.3rem;margin-left:.3rem;' class='fl'><span style='margin-top:.3rem;float:left;'>门店名称1</span><span class='chataddress'>山东省青岛市崂山区</span><span class='mdaddress'>山东省青岛市崂山区意帮网络科技有限公司</span>");
		$('#chat .mdadd').click(function(){
			if(mdflag == 0){
				var oSpan = $('<span style="display:block;width:100%;height:100%;background:rgba(0,0,0,.5);position:absolute;top:0px;"><a href="tel:+120"><span class="fl addressicon"><i class="icon-shoujihao"></i></span></a><span class="fl addressicon"><i class="icon-搜索"></i></span><span class="fl addressicon" style="background: #3684f5;"><i class="icon-dizhiguanli"></i></span></span>');
				$(this).append(oSpan);
				mdflag = 1;
			}
			else{
				return;
			}
		})
});
//点击优惠券
$('#chat .yhq').click(function(){
	sendYhq('https://cdn-remote.517ybang.com//media/chatimages/images/touxiang.png','<a style="padding-bottom:.15rem;font-size:.28rem;color:#ff3649;">优惠券包</a><span style="width:.71rem;height:.62rem;border:1px solid #ff3649;border-radius:.08rem;color:#ff3649;font-size:.22rem;float:right;text-align:center;line-height:1.4;margin-top: .07rem;">立即领取</span><span style="color:#3f3f3f;font-size:.2rem;padding-bottom:0;display:block;">共5张</span><span style="display:block;font-size:.22rem;color:#3f3f3f;">有效期:2018.10.11-2019.11.22</span>');
});

//点击商家端图片
$('#chat .tp').click(function(){
	sendPic('https://cdn-remote.517ybang.com//media/chatimages/images/touxiang.png','<img src="https://cdn-remote.517ybang.com//media/chatimages/images/zwt.png">');
});
//点击客户端图片
$('#chat .khdtp').click(function(){
	sendkhdPic('https://cdn-remote.517ybang.com//media/chatimages/images/touxiangm.png','<img src="https://cdn-remote.517ybang.com//media/chatimages/images/zwt.png">');
	
});
$('#chat .chatInput').click(function(){
	//alert($('.message')[0].scrollHeight / 100 + 'rem');
//	document.getElementById('message').scrollTop = document.getElementById('message').scrollHeight + 100;
//	alert(document.getElementById('message').scrollTop);
 $(".message").scrollTop(200);
});

});




/*测试数据*/
var arr=['谢谢,亲!我们会努力做到更好滴,嘻嘻嘻嘻嘻...'];
var imgarr=['https://cdn-remote.517ybang.com/media/chatimages/images/touxiang.png','https://cdn-remote.517ybang.com/media/chatimages/images/touxiangm.png']
test();

function test(){
//	$(arr).each(function(i){
//		setTimeout(function(){
//			send("https://cdn-remote.517ybang.com//media/chatimages/images/touxiang.png",arr[i]);
//			$('.message').scrollTop( $('.message')[0].scrollHeight );
//		},sj()*500)
//	})
console.log(1);
}


