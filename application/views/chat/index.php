<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>消息中心</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <script src="https://cdn-remote.517ybang.com/js/rem.js"></script>
    <link rel="stylesheet" href="https://cdn-remote.517ybang.com/css/fontStyle.css"/>
    <link rel="stylesheet" href="https://cdn-remote.517ybang.com/css/normal.css"/>
    <link rel="stylesheet" href="https://cdn-remote.517ybang.com/css/chat/cartNewsCenter.css"/>

   <script src="https://cdn-remote.517ybang.com/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdn-remote.517ybang.com/js/chatjs/moment.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn-remote.517ybang.com/css/chat/chat.css" />
    <link href="https://cdn-remote.517ybang.com/css/common.css" rel="stylesheet">
    <link href="https://cdn-remote.517ybang.com/css/base.css" rel="stylesheet">
    <script src="https://cdn-remote.517ybang.com/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdn-remote.517ybang.com/js/chatjs/flexible.js"></script>
    <script src="https://cdn-remote.517ybang.com/js/chatjs/chatjs.js"></script>
    <script src="https://cdn-remote.517ybang.com/js/hash.js"></script>
    <style>
            body{
                max-width: 720px;
                margin: 0 auto;
                background: #f1f1f1;
                color:#333;
                font-size: 0.26rem;
            }
            .icon-服务{
                color: #b3b3b3;
            }

            .icon-xl-tankuang:before {
                content: "\e9cd";
                color: #a9a9a9;
                font-size: .67rem;
                margin-left: .25rem;
                /* margin-top: 2.1rem; */
                position: relative;
                top: .3rem;
            }
            .icon-close2:before {
                content: "\e91d";
                color: #a9a9a9;
                font-size: .67rem;
                margin-left: .25rem;
                /* margin-top: 2.1rem; */
                position: relative;
                top: .3rem;
            }

            .icon-shoujihao:before {
                content: "\e9d2";
                color: #595959;
                font-size: .4rem;
                position: relative;
                top: -.05rem;
            }
            .icon-搜索:before {
                content: "\e9ac";
                position: relative;
                top: .05rem;
            }
            #chat{
                display: none;
                position: fixed;
                height: 100%;
                width: 100%;
            }
        </style>
</head>
<script type="text/javascript">
            // 当前用户信息
            var user_id = '<?php echo $this->session->user_id ?>';
            var biz_id = '<?php echo $this->session->biz_id ?>';
            var url_logo = '<?php echo $this->session->url_logo ?>';
			var avatar = '<?php echo $this->session->avatar ?>'
			var mediaUrl='https://jinlaisandbox-images.b0.upaiyun.com/';
            // 全局参数
            var api_url = '<?php echo API_URL ?>'; // API根URL
            var base_url = '<?php echo BASE_URL ?>'; // 页面根URL
            var media_url = '<?php echo MEDIA_URL ?>'; // 媒体文件根URL
            var class_name = '<?php echo $this->class_name ?>';
            var class_name_cn = '<?php echo $this->class_name_cn ?>';
            // AJAX参数
            var ajax_root = '<?php echo API_URL ?>'
            var common_params = new Object()
            common_params.app_type = 'admin' // 默认为管理端请求
            common_params.user_id = user_id

            // UserAgent
            var user_agent = <?php echo json_encode($this->user_agent) ?>;

             var regUrl = RegExp(/http/);
             console.log(url_logo); // true
             if(regUrl.test(url_logo) !== true){
                  url_logo = media_url +'biz/' + url_logo;
             }else{

             }


</script>
<body>

<div class="content">
    <header class="header">
        <a class="chatback" href="javascript:history.back()">
            <i class="icon-Back"></i>

        </a>


        <h5 class="tit">消息中心</h5>

    </header>
    <a href="notification_message.html" class="notice" style="padding: 0.18rem 0 0.14rem 0">
        <div class="notice-image">
            <img class="notice-header-img" src="https://cdn-remote.517ybang.com/media/chatimages/images/tongzhi@3x.png" alt=""/>
            <div class="newNews"></div>
        </div>
        <div class="notice-text" style="border-bottom: none">
            <p class="notice-title">通知消息</p>
            <p class="notice-remind">现金券即将到期提醒</p>
        </div>
        <div class="notice-time" style="border-bottom: none">12:30</div>
    </a>
    <div class="friends">

    </div>
</div>
<div id="chat">
    <header class="header">
        <a class="chatback" id="closeChat">
            <i class="icon-Back"></i>
        </a>
        <h5 class="tit">商家店铺</h5>
        <div class="right">
            <i class="icon-person-icon">
            </i>
        </div>
    </header>
    <div class="message" id="message">
    	<div class="show">
    		<div class="time">5月07日 12:00</div>
    		<div class="msg">
    			<div class="arrow"></div>
    			<img src="https://cdn-remote.517ybang.com//media/chatimages/images/touxiangm.png" alt="" />
    			<p><i clas="msg_input"></i>你家宝贝质量杠杠滴,给你点赞,哈哈哈哈...</p>
    		</div>
    	</div>
    	<!--<div class="send">
    		<div class="time">5月07日 12:00</div>
    		<div class="msg">
    			<div class="arrowL"></div>
    			<img src="https://cdn-remote.517ybang.com//media/chatimages/images/touxiang.png" alt="" />
    			<p><i class="msg_input"></i>谢谢,亲!我们会努力做到更好滴,嘻嘻嘻嘻嘻...</p>
    		</div>
    	</div>-->

    </div>
    <div class="footer">
    	<!--<input type="text" />-->
    	<div contenteditable="true" class="chatInput" style="-webkit-user-select: auto"></div>
    	<i class="icon-xl-tankuang chatbtn">
           </i>
    	<!--<p>发送</p>-->
    </div>
    <!--底部附加面板-->
    <div class="additionalpanels">
    	<ul>
    		<li class="khdtp">
    			<input  id='fileupload' type='file' multiple="multiple" name='file' onchange="uploadkhdImg(this)" style="display: block;height: 1rem;width: 1rem;position: absolute;overflow: hidden;opacity: 0;"/>
    			<span>
    				<i class="icon-tp"></i>
    			</span>
    			<em>图片</em>
    		</li>
    		<!--<li>
    			<span>
    				<i class="icon-liulan"></i>
    			</span>
    			<em>浏览历史</em>
    		</li>
    		<li>
    			<span>
    				<i class="icon-sc"></i>
    			</span>
    			<em>收藏宝贝</em>
    		</li>
    		<li style="margin-right: 0px;" class="shdz">
    			<span>
    				<i class="icon-sh-dizhi"></i>
    			</span>
    			<em>收货地址</em>
    		</li>
    		<li class="khdsjdd">
    			<span>
    				<i class="icon-sp-dingdan"></i>
    			</span>
    			<em>商品订单</em>
    		</li>
    		<li>
    			<span>
    				<i class="icon-fw-dingdan"></i>
    			</span>
    			<em>服务订单</em>
    		</li>
    		<li class="dqdz">
    			<span>
    				<i class="icon-dq-weizhi"></i>
    			</span>
    			<em>当前位置</em>
    		</li>-->
    	</ul>
    </div>
</div>
<script>
	var ws = '';
	var wsflag = 0;
	  function getUrlParam(name) {
		    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); // 构造一个含有目标参数的正则表达式对象
		    var r = window.location.search.substr(1).match(reg);  // 匹配目标参数
		    if (r != null) return unescape(r[2]); return null; // 返回参数值
		}
		var sbiz_id = getUrlParam('biz_id');
	//一进页面就开始聊天
	      $('#chat').show();//聊天窗口与消息通知切换
            $('.content').hide();
            	
                    //获取当前点击聊天好友的userID和最后一条聊天内容id获取聊天记录
                    //var objUserId = $(this).attr('data-id');
                    //var messageId = $(this).attr('data-messId');
                    var imgUrl = '';
                    var objList = {};
                    objList.app_type = 'client';
                    objList.user_id = user_id;
                    objList.biz_id = sbiz_id;
                    //objList.message_id = messageId;
                    $.post({
                        url:  api_url + 'wsmessage/index',
                        data: objList,
                        success: function(result){
                        	
                             if (result.status == 200)
                             {
                                imgUrl = result.content[0].url_logo;
                                var reg = RegExp(/http/);
                                //console.log(reg.test(imgUrl)); // true
                                if(reg.test(imgUrl) !== true){
                                     imgUrl = media_url+'biz/' + imgUrl;
                                }else{
                                     imgUrl = result.content[0].url_logo;
                                }

                                var arr = [];
                                arr = result.content[0].list;
                                for(var i=0; i<arr.length; i++){
									   var time1 = '';
                                    var time2 = '';
                                   if(i < arr.length-1){

                                        date1 = arr[i].time_create;
                                        time1 =  new Date(date1).getTime();

                                        console.log(i);
                                        var date2 = arr[i+1].time_create;
                                        time2 =  new Date(date2).getTime();
                                   }else{
                                        date1 = arr[i].time_create;
                                        time1 =  new Date(date1).getTime();
                                        time2 =  new Date(date1).getTime();
                                   }
                                   if(arr[i].chat == "send"){
                                       if(arr[i].type == 'text'){
                                       	
                                            send(imgUrl,arr[i].content);
                                       }else if(arr[i].type == 'image'){
                                            sendPic(imgUrl,'<img src="https://jinlaisandbox-images.b0.upaiyun.com/'+arr[i].content+'">');
                                       }
                                   }else if(arr[i].chat == "receive"){
                                             //我接收到的
                                       if(arr[i].type == 'text'){
                                       //客户端添加时间
                                         if((time2 - (5*60*1000)) > time1){
                                                var strTime =arr[i].time_create;
                                                strTime = strTime.substring(5,16);
                                                var timeHtml = "<div class='time'>"+strTime+"</div>";
                                                console.log(timeHtml);
                                                show('https://medias.517ybang.com/user/' + avatar,arr[i].content,timeHtml);
                                            }else{
                                                show('https://medias.517ybang.com/user/' + avatar,arr[i].content,'');
                                            }
                                       
                                       }else if(arr[i].type == 'image'){
                                       sendkhdPic('https://medias.517ybang.com/user/' + avatar,'<img src="https://jinlaisandbox-images.b0.upaiyun.com/'+arr[i].content+'">');
                                       }
                                   }
                                }
                             } else {
                                alert(result.content.error.message);
                             }
                        },
                        error:function(result){
                        	console.log(result);
                        },
                        dataType: 'json'
                    });
                    //获取token
                    var token = '';
                    var params = {};
                    params.app_type = 'client';
                    params.user_id = user_id;
                    
                    $.post({
                        async:false,
                        url:  api_url + 'wsmessage/getverify',
                        data: params,
                        success: function(result){
                             if (result.status == 200)
                             {
                                token = result.content.token;
                                

                             } else {
                                alert(result.content.error.message);
                             }
                        },
                        error:function(result){
                        	console.log(result);
                        },
                        dataType: 'json'
                    });
                    ws = new WebSocket('wss:biz.517ybang.com/jinlai_chat?token='+token);
					

                    ws.onopen = function () {

                      //alert("数据发送中...");
                      document.onkeyup = function (e) {
                                         	var code = e.charCode || e.keyCode;
                                         	if (code == 13) {
                                         		debugger;
                                         		var content = $('#chat .footer .chatInput').text();
                                         		var oMessage = document.getElementById('message').scrollHeight + 500;
                                          		$(".message").animate({scrollTop:oMessage}, 50);
                                         		show('https://medias.517ybang.com/user/' + avatar,$('#chat .footer .chatInput').text(),'');
                                         		$('#chat .footer .chatInput').text('');
                                         		var timestamp = (new Date()).getTime();
                                         		let str = JSON.stringify({"biz_id": sbiz_id,"type":"text","content":content, "time_create":timestamp})
                                         		console.log(str);
                                         		console.log(ws);
                                         		ws.send(str);
                                         	}
                                         	}
                    };


                    ws.onmessage = function (evt) {
                          var data = JSON.parse(evt.data)
                       if(data.msg == '新的消息' && data.status == '200'){
                            var img = data.content[0].url_logo;
                            var reg = RegExp(/http/);
                            //console.log(reg.test(imgUrl)); // true
                            if(reg.test(img) !== true){
                                 img = media_url+'biz/' + img;
                            }else{
                                 img = data.content[0].avatar;
                            }
                            console.log(img);
                            var currentType = data.content[0].list.type;
                            var currentContent = data.content[0].list.content;
                            if(currentType == 'text'){
                                send(img,currentContent);
                            }else if(currentType == 'image'){

                                if(reg.test(currentContent) !== true){
                                    sendPic(img,'<img src="'+mediaUrl+currentContent+'">');
                                }else{
                                    sendPic(img,'<img src="'+currentContent+'">');
                                }
                            }

                       }
                    };
                    ws.onerror = function (e) {
                        console.log(e)
                    }
                   // 一进页面就开始聊天结束
    $(function(){
		  function getUrlParam(name) {
		    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); // 构造一个含有目标参数的正则表达式对象
		    var r = window.location.search.substr(1).match(reg);  // 匹配目标参数
		    if (r != null) return unescape(r[2]); return null; // 返回参数值
		}
		var sbiz_id = getUrlParam('biz_id');
        $('body').on('click','.friends .notice',function(){
        	wsflag++;
            $('#chat').show();//聊天窗口与消息通知切换
            $('.content').hide();
            	
                    //获取当前点击聊天好友的userID和最后一条聊天内容id获取聊天记录
                    var objUserId = $(this).attr('data-id');
                    //var messageId = $(this).attr('data-messId');
                    var imgUrl = '';
                    var objList = {};
                    objList.app_type = 'client';
                    objList.user_id = user_id;
                    //获取当前的bizid
                    objList.biz_id = $(this).attr('data-id');
                    //objList.message_id = messageId;
                    
                    console.log(objList);
                    $.post({
                        url:  api_url + 'wsmessage/index',
                        data: objList,
                        success: function(result){
                        	
                             if (result.status == 200)
                             {
                                imgUrl = result.content[0].url_logo;
                                var reg = RegExp(/http/);
                                //console.log(reg.test(imgUrl)); // true
                                if(reg.test(imgUrl) !== true){
                                     imgUrl = media_url+'biz/' + imgUrl;
                                }else{
                                     imgUrl = result.content[0].url_logo;
                                }

                                var arr = [];
                                arr = result.content[0].list;
                                for(var i=0; i<arr.length; i++){
									   var time1 = '';
                                    var time2 = '';
                                   if(i < arr.length-1){

                                        date1 = arr[i].time_create;
                                        time1 =  new Date(date1).getTime();

                                        console.log(i);
                                        var date2 = arr[i+1].time_create;
                                        time2 =  new Date(date2).getTime();
                                   }else{
                                        date1 = arr[i].time_create;
                                        time1 =  new Date(date1).getTime();
                                        time2 =  new Date(date1).getTime();
                                   }
                                   if(arr[i].chat == "send"){
                                       if(arr[i].type == 'text'){
                                       	
                                            send(imgUrl,arr[i].content);
                                       }else if(arr[i].type == 'image'){
                                            sendPic(imgUrl,'<img src="https://jinlaisandbox-images.b0.upaiyun.com/'+arr[i].content+'">');
                                       }
                                   }else if(arr[i].chat == "receive"){
                                             //我接收到的
                                       if(arr[i].type == 'text'){
                                       //客户端添加时间
                                         if((time2 - (5*60*1000)) > time1){
                                                var strTime =arr[i].time_create;
                                                strTime = strTime.substring(5,16);
                                                var timeHtml = "<div class='time'>"+strTime+"</div>";
                                                console.log(timeHtml);
                                                show('https://medias.517ybang.com/user/' + avatar,arr[i].content,timeHtml);
                                            }else{
                                                show('https://medias.517ybang.com/user/' + avatar,arr[i].content,'');
                                            }
                                       
                                       }else if(arr[i].type == 'image'){
                                       sendkhdPic('https://medias.517ybang.com/user/' + avatar,'<img src="https://jinlaisandbox-images.b0.upaiyun.com/'+arr[i].content+'">');
                                       }
                                   }
                                }
                             } else {
                                console.log(result.content.error.message);
                             }
                        },
                        error:function(result){
                        	console.log(result);
                        },
                        dataType: 'json'
                    });
                    //获取token
                    var token = '';
                    var params = {};
                    params.app_type = 'client';
                    params.user_id = user_id;
                    
                    $.post({
                        async:false,
                        url:  api_url + 'wsmessage/getverify',
                        data: params,
                        success: function(result){
                             if (result.status == 200)
                             {
                                token = result.content.token;

                             } else {
                                alert(result.content.error.message);
                             }
                        },
                        error:function(result){
                        	console.log(result);
                        },
                        dataType: 'json'
                    });
                    if(wsflag != 0){
                    	ws = new WebSocket('wss:biz.517ybang.com/jinlai_chat?token='+token);
                    }


                    ws.onopen = function () {

                      //alert("数据发送中...");
                      document.onkeyup = function (e) {
                                         	var code = e.charCode || e.keyCode;
                                         	if (code == 13) {
                                         		//debugger;
                                         		var content = $('#chat .footer .chatInput').text();
                                         		var oMessage = document.getElementById('message').scrollHeight + 500;
                                          		$(".message").animate({scrollTop:oMessage}, 50);
                                         		show('https://medias.517ybang.com/user/' + avatar,$('#chat .footer .chatInput').text(),'');
                                         		$('#chat .footer .chatInput').text('');
                                         		var timestamp = (new Date()).getTime();

                                         		console.log(content);
                                         		let str = JSON.stringify({"biz_id": '2',"type":"text","content":content, "time_create":timestamp})
                                         		ws.send(str);
                                         	}
                                         	}
                    };


                    ws.onmessage = function (evt) {
                          var data = JSON.parse(evt.data)
                       if(data.msg == '新的消息' && data.status == '200'){
                            var img = data.content[0].url_logo;
                            var reg = RegExp(/http/);
                            //console.log(reg.test(imgUrl)); // true
                            if(reg.test(img) !== true){
                                 img = media_url+'biz/' + img;
                            }else{
                                 img = data.content[0].avatar;
                            }
                            console.log(img);
                            var currentType = data.content[0].list.type;
                            var currentContent = data.content[0].list.content;
                            if(currentType == 'text'){
                                send(img,currentContent);
                            }else if(currentType == 'image'){

                                if(reg.test(currentContent) !== true){
                                    sendPic(img,'<img src="'+mediaUrl+currentContent+'">');
                                }else{
                                    sendPic(img,'<img src="'+currentContent+'">');
                                }
                            }

                       }
                    };
                    ws.onerror = function (e) {
                        console.log(e)
                    }


        });

        $('#closeChat').on('click',function(){
            $('#chat').hide();
            $('.content').show();
            $('#message').html('');
             ws.onclose = function(){
                console.log('close')
             }
        });
        //有没有未读消息
        var params = {};
        params.app_type = 'client';
        params.user_id = '200';
        $.post({
            url:  api_url + 'wsmessage/sync',
            data: params,
            success: function(result){
            		console.log(result); // 输出回调数据到控制台
                 if (result.status == 200)
                 {
                 var item = result.content;
                 for(var key in item){
                    var list = item[key].list;
                     var newText = list[list.length-1].content;
                     console.log(newText.indexOf('image') >= 0);
                    if(newText.indexOf('image') >= 0){
						newText = '[图片]';
                    }
                    var timeCreate = list[list.length-1].time_create;
                    var messageId = list[list.length-1].message_id;
                    var imgUrl = item[key].url_logo;
                    var reg = RegExp(/http/);
                    //console.log(reg.test(imgUrl)); // true
                    if(reg.test(imgUrl) !== true){
                         imgUrl = media_url+'biz/' + item[key].url_logo;
                    }else{
                         imgUrl = item[key].url_logo;
                    }
                    var friendsHtml = '<div class="notice" data-messId="'+messageId+'" data-id="'+ item[key].biz_id +'">'+
                                                  '<div class="notice-image">'+
                                                      '<img class="notice-header-img" src="'+imgUrl+'" alt=""/>'+
                                                      '<div class="newNews"></div>'+
                                                  '</div>'+
                                                  '<div class="notice-text">'+
                                                      '<p class="notice-title">'+ item[key].brief_name +'</p>'+
                                                      '<p class="notice-remind">'+newText+'</p>'+
                                                  '</div>'+
                                                  '<div class="notice-time">'+timeCreate+'</div>'+
                                              '</div>';
                    $('.friends').append(friendsHtml);
                 }
                 } else {
                    alert(result.content.error.message);
                 }
            },
            error:function(result){
            	console.log(result);
            },
            dataType: 'json'
        });
        //聊天列表



    });
    var user = sbiz_id;//传入
</script>
</body>
</html>