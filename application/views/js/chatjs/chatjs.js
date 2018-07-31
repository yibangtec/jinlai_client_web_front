//获取本地时间
	moment.lang('zh-cn');
/*发送消息*/
function send(headSrc,str){
	var html="<div class='send'><div class='msg'><div class='arrowL'></div><img src="+headSrc+" />"+
	"<p>"+str+"</p></div></div>";
	upView(html);
}
 function getUrlParam(name) {
		    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); // 构造一个含有目标参数的正则表达式对象
		    var r = window.location.search.substr(1).match(reg);  // 匹配目标参数
		    if (r != null) return unescape(r[2]); return null; // 返回参数值
		}

/*接受消息*/
function show(headSrc,str,time){
	var html="<div class='show'>"+time+"<div class='msg'><div class='arrow'></div><img src="+headSrc+" />"+
	"<p>"+str+"</p></div></div>";
	upView(html);
	
}
//商家端点击商品
function sendSp(headSrc,str){
	var html="<div class='send'><div class='msg'><div class='arrowL'></div><img src="+headSrc+" />"+
	"<p>"+str+"</p></div></div>";
	upView(html);
}
//商家端点击商品
function showkhdSp(headSrc,str){
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
		$('#chat .chatInput').attr('contenteditable','false').css({
			'background':'#F4F4F4',
			'height':'.4rem'
		});
		flag=1;
	}
	else{
		$('#chat .message').css('height','10rem');
		$('#chat .footer').css('bottom','0px');
		$(".additionalpanels").hide();
		$('#chat .footer input').css('background','#fff');
		$('#chat .footer input').removeAttr('readonly');
		$('#chat .footer i').removeClass('icon-close2').addClass('icon-xl-tankuang');
		$('#chat .chatInput').attr('contenteditable','true').css({
			'background':'#fff',
			'height':'auto'
		});
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
	showkhdRecord('https://cdn-remote.517ybang.com//media/chatimages/images/touxiang.png','<a style="font-size:.3rem;">订单编号:123456</a><span style="display:block;padding-top:.2rem;padding-bottom:.3rem;border-bottom:1px solid #c9caca;text-align:right;"><i style="font-size:.28rem;color:#ff3649;">待发货</i></span><strong style="overflow: hidden;display:block;padding:.3rem 0px;"><span class="fl">孙亚楠</span><span class="fr">17665864584</span></strong><span style="display:block;">山东省 青岛市 崂山区</span><span style="display:block;border-bottom: 1px dotted #c9caca;padding-bottom: .3rem;">东海东路1-42号</span><span style="padding-top:.4rem;display:block;overflow:hidden;padding-bottom:.2rem;"><img src="https://cdn-remote.517ybang.com//media/chatimages/images/touxiangm.png" style="width:.9rem;height:.9rem;display:block;float:left;"><span style="display:block;float:left;margin-left: .1rem;height: .8rem;width:2.5rem;overflow:hidden;">新款衬衣礼物盒新款衬衣礼物盒新款衬衣礼物盒</span></span><span style="display:block;overflow:hidden;padding-bottom:.2rem;"><img src="https://cdn-remote.517ybang.com//media/chatimages/images/touxiangm.png" style="width:.9rem;height:.9rem;display:block;float:left;"><span style="display:block;float:left;margin-left: .1rem;height: .8rem;width:2.5rem;overflow:hidden;">新款衬衣礼物盒新款衬衣礼物盒新款衬衣礼物盒</span></span><span style="display:block;overflow:hidden;padding-bottom:.3rem;border-bottom:1px dotted #c9caca;"><img src="https://cdn-remote.517ybang.com//media/chatimages/images/touxiang.png" style="width:.9rem;height:.9rem;display:block;float:left;"><span style="display:block;float:left;margin-left: .1rem;height: .8rem;width:2.5rem;overflow:hidden;">新款衬衣礼物盒新款衬衣礼物盒新款衬衣礼物盒</span></span><span class="fr" style="margin-top:.3rem;">应支付：<i style="color:rgb(255,54,73)">¥137.4</i></span><span class="fr" style="margin-top:.2rem;">已支付：<i style="color:rgb(255,54,73)">¥137.4</i></span>');
});
//点击客户端收藏宝贝
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
/*$('#chat .khdtp').click(function(){
	sendkhdPic('https://cdn-remote.517ybang.com//media/chatimages/images/touxiangm.png','<img src="https://cdn-remote.517ybang.com//media/chatimages/images/zwt.png">');
});*/

$('#chat .chatInput').click(function(){
	//$(".message").ScrollTo(1800);
	var oMessage = document.getElementById('message').scrollHeight + 500;
   $(".message").animate({scrollTop:oMessage}, 50);
   
});

//商家端点击商品或者服务发送的信息
$('#chat .sp').click(function(){
	sendSp('https://cdn-remote.517ybang.com//media/chatimages/images/touxiang.png','<img src="https://cdn-remote.517ybang.com//media/chatimages/images/zwt.png" style="width:1.2rem;height:1.2rem;display:block;float:left"><span style="display:block;width:2.2rem;float:left;font-size:.24rem;color:rgb(62,58,57);height:.8rem;overflow:hidden;margin-left:.1rem;">新款大号加高新款大号加高新款大号加高新款大号加高新款大号加高</span><a style="display:block;width:2.2rem;margin-left:.1rem;margin-top:.1rem;float:left;"><i class="fl" style="font-size:.28rem;color:rgb(255,54,73)">¥22.9-36.9</i><span class="fr"><i class="icon-shoucang" style="position:relative;top:-.07rem"></i></span></a>');
});
//商家端点击商品或者服务发送的信息
$('#chat .sp').click(function(){
	sendSp('https://cdn-remote.517ybang.com//media/chatimages/images/touxiang.png','<img src="https://cdn-remote.517ybang.com//media/chatimages/images/zwt.png" style="width:1.2rem;height:1.2rem;display:block;float:left"><span style="display:block;width:2.2rem;float:left;font-size:.24rem;color:rgb(62,58,57);height:.8rem;overflow:hidden;margin-left:.1rem;">新款大号加高新款大号加高新款大号加高新款大号加高新款大号加高</span><a style="display:block;width:2.2rem;margin-left:.1rem;margin-top:.1rem;float:left;"><i class="fl" style="font-size:.28rem;color:rgb(255,54,73)">¥22.9-36.9</i><span class="fr"><i class="icon-shoucang" style="position:relative;top:-.07rem"></i></span></a>');
});

$('#chat .khdscbb').click(function(){
	showkhdSp('https://cdn-remote.517ybang.com//media/chatimages/images/touxiangm.png','<img src="https://cdn-remote.517ybang.com//media/chatimages/images/zwt.png" style="width:1.2rem;height:1.2rem;display:block;float:left"><span style="display:block;width:2.2rem;float:left;font-size:.24rem;color:rgb(62,58,57);height:.8rem;overflow:hidden;margin-left:.1rem;">新款大号加高新款大号加高新款大号加高新款大号加高新款大号加高</span><a style="display:block;width:2.2rem;margin-left:.1rem;margin-top:.1rem;float:left;"><i class="fl" style="font-size:.28rem;color:rgb(255,54,73)">¥22.9-36.9</i><span class="fr"><i class="icon-shoucang2" style="position:relative;top:-.07rem"></i></span></a>');
});
//商家端点击商品或者服务发送的信息
$('#chat .khdsp').click(function(){
	showkhdSp('https://cdn-remote.517ybang.com//media/chatimages/images/touxiangm.png','<img src="https://cdn-remote.517ybang.com//media/chatimages/images/zwt.png" style="width:1.2rem;height:1.2rem;display:block;float:left"><span style="display:block;width:2.2rem;float:left;font-size:.24rem;color:rgb(62,58,57);height:.8rem;overflow:hidden;margin-left:.1rem;">新款大号加高新款大号加高新款大号加高新款大号加高新款大号加高</span><a style="display:block;width:2.2rem;margin-left:.1rem;margin-top:.1rem;float:left;"><i class="fl" style="font-size:.28rem;color:rgb(255,54,73)">¥22.9-36.9</i><span class="fr"><i class="icon-shoucang" style="position:relative;top:-.07rem"></i></span></a>');
});

var edit = document.querySelector('.chatInput');
        edit.onfocus = function () {
          window.setTimeout(function () {
            var sel, range;
            if (window.getSelection && document.createRange) {
              range = document.createRange();
              range.selectNodeContents(edit);
              range.collapse(true);
              range.setEnd(edit, edit.childNodes.length);
              range.setStart(edit, edit.childNodes.length);
              sel = window.getSelection();
              sel.removeAllRanges();
              sel.addRange(range);
            } else if (document.body.createTextRange) {
              range = document.body.createTextRange();
              range.moveToElementText(edit);
              range.collapse(true);
              range.select();
            }
          }, 1)
        }
        edit.focus();
});





/*测试数据*/
var arr=['谢谢,亲!我们会努力做到更好滴,嘻嘻嘻嘻嘻...'];
var imgarr=['https://cdn-remote.517ybang.com/media/chatimages/images/touxiang.png','https://cdn-remote.517ybang.com/media/chatimages/images/touxiangm.png']
//test();

function test(){
	$(arr).each(function(i){
		setTimeout(function(){
			send("https://cdn-remote.517ybang.com//media/chatimages/images/touxiang.png",arr[i]);
			var oMessage = document.getElementById('message').scrollHeight + 500;
   			$(".message").animate({scrollTop:oMessage}, 50);
		},sj()*500)
	})
}

//聊天图片上传又拍云
 //var biz = '222';//传入
    function uploadImg(obj) {
        var bucketname="jinlaisandbox-images"; //服务名
        var username="jinlaisandbox";	  //操作员账号
        var password="jinlaisandbox";
        var file = $(obj).get(0).files[0];
        var list = $(obj).get(0).files;
        //console.log(list);
        for(var i = 0;i < list.length;i++){
            //$('.editContent .loading').show();
            var time=buildFileName(i, biz);
            var save_key="image/"+time;
            var url="https://v0.api.upyun.com/"+ bucketname;
            var fileinfo=document.getElementById("fileinfo");
            var policy=btoa(JSON.stringify({"bucket": bucketname, "save-key": save_key, "x-gmkerl-thumb": "/fwfh/2048x2048/rotate/auto", "expiration": parseInt(Date.parse(new Date())+3600)}));
            var signature="UPYUN jinlaisandbox:"+b64hamcsha1(HexMD5.MD5(password).toString(HexMD5.enc.Hex), "POST&/"+bucketname+"&"+policy);
            var xhrOnProgress=function(fun){
                xhrOnProgress.onprogress=fun;
                return function(){
                    var xhr=$.ajaxSettings.xhr();
                    if (typeof xhrOnProgress.onprogress!=='function'){
                        return xhr;
                    }
                    if (xhrOnProgress.onprogress&&xhr.upload){
                        xhr.upload.onprogress=xhrOnProgress.onprogress;
                    }
                    return xhr;
                }
            };
            var formData=new FormData();
            formData.append("file",list[i]);
            formData.append("policy",policy);
            formData.append("authorization",signature);
            $.ajax({
                url:url,
                type:"POST",
                data:formData,
                contentType:false,
                processData:false,
                success:function(data, textStatus,xhr){
                    console.log(JSON.parse(data).url);
                    var code =JSON.parse(data).code;
                    if(code==200){
                        //$('.editContent .loading').hide();
                    }
                    var imgUrl = JSON.parse(data).url;
                    var img =$('<img class="arr" src=https://jinlaisandbox-images.b0.upaiyun.com/'+JSON.parse(data).url+' alt=""/>');

                    console.log(objUserId);
                    //console.log('图片地址是' + img);
                    var sendImgSrc = 'https://jinlaisandbox-images.b0.upaiyun.com/'+JSON.parse(data).url;
                    sendkhdPic(url_logo,'<img src="'+sendImgSrc+'">');

                    var timestamp = (new Date()).getTime();
                    var str = JSON.stringify({"user_id": objUserId,"type":"image","content":save_key, "time_create":timestamp});
                    
                    ws.send(str);


                },
                error:function(xhr){
                    console.log(xhr);
                }
            });
        }
    }
    function buildFileName(s, bizId) {
        var objD = new Date();
        var timeStr;
        var yy = objD.getYear();
        if (yy < 1900) yy = yy + 1900;
        var MM = objD.getMonth() + 1;
        if (MM < 10) MM = '0' + MM;
        var dd = objD.getDate();
        if (dd < 10) dd = '0' + dd;
        var hh = objD.getHours();
        if (hh < 10) hh = '0' + hh;
        var mm = objD.getMinutes();
        if (mm < 10) mm = '0' + mm;
        var ss = objD.getSeconds()+s;
        if (ss < 10) ss = '0' + ss;
        bizId = bizId.toString();
        timeStr = yy + '/' + MM + dd + '/' + hh + mm + ss + bizId + '.jpg';
        return timeStr;
    }
//客户端发往商家端
    function uploadkhdImg(obj) {
    	
        var bucketname="jinlaisandbox-images"; //服务名
        var username="jinlaisandbox";	  //操作员账号
        var password="jinlaisandbox";
        var file = $(obj).get(0).files[0];
        var list = $(obj).get(0).files;
      
        for(var i = 0;i < list.length;i++){
            //$('.editContent .loading').show();
            var time=buildkhdFileName(i, '');
            console.log(time);
            var save_key="image/"+time;
            var url="https://v0.api.upyun.com/"+ bucketname;
            var fileinfo=document.getElementById("fileinfo");
            var policy=btoa(JSON.stringify({"bucket": bucketname, "save-key": save_key, "x-gmkerl-thumb": "/fwfh/2048x2048/rotate/auto", "expiration": parseInt(Date.parse(new Date())+3600)}));
            var signature="UPYUN jinlaisandbox:"+b64hamcsha1(HexMD5.MD5(password).toString(HexMD5.enc.Hex), "POST&/"+bucketname+"&"+policy);
            var xhrOnProgress=function(fun){
                xhrOnProgress.onprogress=fun;
                return function(){
                    var xhr=$.ajaxSettings.xhr();
                    if (typeof xhrOnProgress.onprogress!=='function'){
                        return xhr;
                    }
                    if (xhrOnProgress.onprogress&&xhr.upload){
                        xhr.upload.onprogress=xhrOnProgress.onprogress;
                    }
                    return xhr;
                }
            };
            var formData=new FormData();
            formData.append("file",list[i]);
            formData.append("policy",policy);
            formData.append("authorization",signature);
            $.ajax({
                url:url,
                type:"POST",
                data:formData,
                contentType:false,
                processData:false,
                success:function(data, textStatus,xhr){
                    console.log(JSON.parse(data).url);
                    var code =JSON.parse(data).code;
                    if(code==200){
                        //$('.editContent .loading').hide();
                    }
                    var imgUrl = JSON.parse(data).url;
                    var img =$('<img class="arr" src=https://jinlaisandbox-images.b0.upaiyun.com/'+JSON.parse(data).url+' alt=""/>');

                    //console.log('图片地址是' + img);
                    var sendImgSrc = 'https://jinlaisandbox-images.b0.upaiyun.com/'+JSON.parse(data).url;
                    
                    sendkhdPic('https://medias.517ybang.com/user/' + avatar,'<img src="'+sendImgSrc+'">');

                    var timestamp = (new Date()).getTime();
                    var str = JSON.stringify({"biz_id": getUrlParam('biz_id'),"type":"image","content":save_key, "time_create":timestamp});
                    console.log(str);
                    console.log(ws);
                    ws.send(str);


                },
                error:function(xhr){
                    console.log(xhr);
                }
            });
        }
    }
    function buildkhdFileName(s, userId) {
        var objD = new Date();
        var timeStr;
        var yy = objD.getYear();
        if (yy < 1900) yy = yy + 1900;
        var MM = objD.getMonth() + 1;
        if (MM < 10) MM = '0' + MM;
        var dd = objD.getDate();
        if (dd < 10) dd = '0' + dd;
        var hh = objD.getHours();
        if (hh < 10) hh = '0' + hh;
        var mm = objD.getMinutes();
        if (mm < 10) mm = '0' + mm;
        var ss = objD.getSeconds()+s;
        if (ss < 10) ss = '0' + ss;
        //userId = userId.toString();
        timeStr = yy + '/' + MM + dd + '/' + hh + mm + ss + userId + '.jpg';
        return timeStr;
    }
/*发送消息*/
function sendMore(headSrc,str){
    var html="<div class='send'><div class='msg'><div class='arrowL'></div><img src="+headSrc+" />"+
        "<p>"+str+"</p></div></div>";
    upViewMore(html);
}
/*接受消息*/
function showMore(headSrc,str,time){
    var html="<div class='show'>"+time+"<div class='msg'><div class='arrow'></div><img src="+headSrc+" />"+
        "<p>"+str+"</p></div></div>";
    upViewMore(html);

}
function sendPicMore(headSrc,str){
    var html="<div class='send'><div class='msg'><div class='arrowL'></div><img src="+headSrc+" />"+
        "<p class='sendTp'>"+str+"</p></div></div>";
    upViewMore(html);
}
//点击客户端图片
function sendkhdPicMore(headSrc,str){
    var html="<div class='show'><div class='msg'><div class='arrow'></div><img src="+headSrc+" />"+
        "<p class='sendTp'>"+str+"</p></div></div>";
    upViewMore(html);
}
/*更新视图*/
function upViewMore(html){
    $('.message').prepend(html);
    //$('body').animate({scrollTop:$('.message').outerHeight()-window.innerHeight},200)
}
