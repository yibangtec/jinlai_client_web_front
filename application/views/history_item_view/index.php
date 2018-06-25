<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no" />
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no,email=no,adress=no">
		
		<!--公共样式-->
		<link rel="stylesheet" href="css/reset.css" />
		
		<!--主要样式-->
		<link rel="stylesheet" type="text/css" href="https://cdn-remote.517ybang.com/css/simple-calendar.css">
		<link rel="stylesheet" href="https://cdn-remote.517ybang.com/css/calendar.css" />
		<link rel="stylesheet" href="https://i.icomoon.io/public/022b3dd411/jinlai/style.css">
		<title>我的足跡</title>
		<style>
			body{
				overflow-x: hidden; 
			}
			.content{margin: 0 0.15rem;}
			
			.item-title{width: 100%;}
			.data{float: left;padding: 0.14rem 0 0.1rem 0.19rem;font-size: 0.36rem;color: #828282;}
			.item-all{float: right;font-size: 0.36rem;color: #828282;padding: 0.14rem 0.19rem 0.1rem 0.14rem;}
			.items{width: 100%;}
			.items-li{float: left;width: 3.5rem;border: 0.01rem solid #e0dfdf;border-radius: 0.2rem;overflow: hidden;box-sizing: border-box;margin: 0.05rem;}
			.items-li:nth-child(even){margin-right: 0;}
			.items-image{width: 100%;display: block;}
			.items-text{width: 3.48rem;border-top: 0.01rem solid #e0dfdf;font-size: 0.4rem;padding: 0.25rem 0;background-color: #fff;}
			.items-text span{display: inline-block;width: 1.68rem;}
			.price{float: left;color: #ff5c63;text-indent: 0.32rem;max-width: 2.7rem;
				overflow: hidden;
				text-overflow: ellipsis;
				white-space: nowrap;}
			.star{float: right;text-align: right;padding-right: 0.36rem;}
			.selected{float: right;text-align: right;padding-right: 0.36rem;}
			.outer {zoom:1;}    /*==for IE6/7 Maxthon2==*/
			.outer::after {clear:both;content:'.';display:block;width: 0;height: 0;visibility:hidden;}
			.editSelected{display: block;}
			.editStar{display: none;}
			.icon-duihao-red:before {
				content: "\e976";
				color: #ea5a60;
				font-size: 0.38rem;
			}
			.icon-wxz:before {
				content: "\e902";
				color: #c9caca;
				font-size: 0.38rem;
			}
			.icon-sc-x:before {
				content: "\e901";
				color: #ffcf1d;
				font-size: 0.38rem;

			}
			.icon-shoucang2:before {
				content: "\e97c";
				color: #ffcf1d;
				font-size: 0.38rem;
			}
			/* 插件样式 */
.refreshWrap .refresh{position: absolute;left: 0;top: 30px;width: 100%;height:60px;line-height: 60px;text-align: center;}
.refreshWrap .loadingBox{width: 100%;height:40px;text-align: center;padding: 10px;position: relative;background-color: #fff;z-index: 2}
.refreshWrap .loading,.refreshWrap .loadTxt{vertical-align: middle;display: inline-block;}
.refreshWrap .loading{border-radius: 50%;width: 16px;height: 16px;border: 1px solid #666;border-top-color: transparent;margin-right: 8px;transform: translateZ(0);position: relative;}
.refreshWrap .noMore .loading{display:none;}
.refreshWrap .success{border-color: transparent;}
.refreshWrap .success:before{content:"";border:1px solid #666;border-top-color: transparent;border-left-color:transparent;position: absolute;left: 0;bottom: 0;width: 8px;height: 16px;}
.refreshWrap .rotate {
    -webkit-animation: refresh-rotate 0.6s linear infinite;
    animation: refresh-rotate 0.6s linear infinite;
}
#calendar .sc-body.showmonth5 {
    height: .72rem;
}
@keyframes refresh-rotate {
    0% {
        transform: rotateZ(0deg);
        -moz-transform: rotate(0deg);
    }
    100% {
        transform: rotateZ(360deg);
        -moz-transform: rotate(360deg);
    }
}


/* page */
#app{position: absolute;left: 0;top: 1.6rem;width: 96%;height: 100%;overflow-y:auto;-webkit-overflow-scrolling: touch;overflow-x:hidden; }

#app .items li{float: left;width: 3.5rem;border: 0.01rem solid #e0dfdf;border-radius: 0.2rem;overflow: hidden;box-sizing: border-box;margin: 0.05rem;}
.myinner{
	margin-top: 1.4rem;
	display: none;
}

		</style>
	</head>

	<body>
		<div class="inner">
			<div id='calendar' class="sc-calendar">
				<div class="curMonth"></div>
				<div class="sc-header">
					<div class="sc-title">
						<span class="downArr">
							<img src="https://cdn-remote.517ybang.com/media/home/down.png" alt="">
						</span>
						<div class="year"><span class="sc-select-year" name=""></span>年</div>
						<div class="month">
							<div class="arrow sc-mleft"></div>
							<div class="monthdiv">
								<span class="sc-select-month" name=""></span>
							</div>
							<div class="arrow sc-mright"></div>
						</div>
					</div>
					<div class="sc-week"></div> 
				</div>
				<div class="sc-body">
					<!-- <div class="downArrow">
						<img src="images/arrow.png" alt="">
					</div> -->
					<div class="sc-days"></div>
				</div>
			</div>
			
				<div class="content" id="app">

				<ul class="items outer">

				</ul>
			</div>

		</div>
		<!-- myDate -->
		<div class="inner myinner">
			<div id='mycalendar' class="sc-calendar">
				<div class="sc-header">
					<div class="sc-title">
						<div class="year"><span class="sc-select-year" name=""></span>年</div>
						<div class="month">
							<div class="arrow mysc-mleft"><</div>
							<div class="monthdiv">
								<span class="sc-select-month" name=""></span>
							</div>
							<div class="arrow mysc-mright">></div>
						</div>
					</div>
					<div class="sc-week"></div> 
				</div>
				<div class="sc-body">
				
					<div class="sc-days"></div>
				</div>
			</div>
			<!-- <div class="announcement" style="display: none;">
				<ul class="matterL">
				</ul>
			</div> -->
			<div class="content" id="app1">
				<div class="item-title outer">
					<div class="data">4月18日</div>
					<div data-id="416" class="item-all editSelected"><i class="icon-wxz"></i></div>
				</div>
				<ul class="items outer">
					<li class="items-li">
						<img class="items-image" src="images/placeholder.png" alt=""/>
						<div class="items-text outer">
							<div class="price">¥100.00</div>
							<div class="star editStar"><i class="icon-sc-x"></i></div>
							<div data-id="416" class="selected editSelected">
								<i class="icon-wxz"></i>
							</div>
						</div>
					</li>
					<li class="items-li">
						<img class="items-image" src="images/placeholder.png" alt=""/>
						<div class="items-text outer">
							<div class="price">¥1243234043.00</div>
							<div class="star editStar">
								<i class="icon-sc-x"></i>
							</div>
							<div data-id="416" class="selected editSelected">
								<i class="icon-wxz"></i>
							</div>
						</div>
					</li>
					<li class="items-li">
						<img class="items-image" src="images/placeholder.png" alt=""/>
						<div class="items-text outer">
							<div class="price">¥100.00</div>
							<div class="star editStar">
								<i class="icon-sc-x"></i>
							</div>
							<div data-id="416" class="selected editSelected">
								<i class="icon-wxz"></i>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<script type="text/javascript" src="https://cdn-remote.517ybang.com/js/jquery-3.3.1.min.js" ></script>
		<script type="text/javascript" src="https://cdn-remote.517ybang.com/js/simple-calendar.js"></script>
		<script type="text/javascript" src="https://cdn-remote.517ybang.com/js/hammer-2.0.8-min.js"></script>
		<script type="text/javascript" src="https://cdn-remote.517ybang.com/js/PullToRefresh.min.js"></script>
		<script type="text/javascript">
		//获取商品浏览记录列表
			var user_id = <?php echo $this->session->user_id ?>;
			$.ajax({
			url: "https://api.517ybang.com/history_item_view/index",
			 type: "post",
             dataType: 'json',
             data:{app_type:'client',user_id:user_id},
            success: function (res) {
            	console.log(res);
            	var arrDate = [];
            	var itemDate = [];
            	for(var i = 0;i < res.content.length;i++){
            		arrDate.push(res.content[i].last_viewed_time);
            		itemDate.push(res.content[i].item_id);
            	}

            	var set = new Set(arrDate);  
            	var newArr = new Array(...set);
            	console.log(arrDate);
            	
            	for (var i = 0; i < newArr.length; i++) {
            		var outerTitle = '<li class="firstDate" style="float: none;font-size: .36rem;border: none;color: #828282;padding: .1rem;width:2rem">'+newArr[i].slice(5)+'<span style="display:none">'+newArr[i]+'</span></li>';
            		$('.items').append(outerTitle);
            		for (var j = 0; j < arrDate.length; j++) {
            			//alert($('.firstDate').eq(i).find('span').text());
            			if(arrDate[j] == $('.firstDate').eq(i).find('span').text()){
            				var oItem = '<i>'+itemDate[j]+'</i>';
            				$('.firstDate').eq(i).append(oItem);
            			}
            		}
            	}
   //          		$('.star').on('click',function(){
			// 	var currentClassName = $(this).find('i').prop("className");
			// 	if(currentClassName == 'icon-sc-x'){
			// 		console.log('ss')
			// 		$(this).find('i').removeClass('icon-sc-x').addClass('icon-shoucang2');
			// 	}else{
			// 		$(this).find('i').removeClass('icon-shoucang2').addClass('icon-sc-x');
			// 	}
			// });

			// $('.selected').on('click',function(){
			// 	var currentClassName = $(this).find('i').prop("className");


			// 	if(currentClassName == 'icon-wxz'){
			// 		$(this).find('i').removeClass('icon-wxz').addClass('icon-duihao-red');
			// 	}else{
			// 		$(this).find('i').removeClass('icon-duihao-red').addClass('icon-wxz');
			// 	}
			// 	var arr = $(this).parent().parent().parent().find('.selected').find('i');
			// 	var arr1 = []
			// 	for(var i=0;i<arr.length;i++){
			// 		arr1.push(arr[i].className)
			// 	}
			// 	var allSelected = $.inArray('icon-wxz', arr1);
			// 	if(allSelected == -1){
			// 		$(this).parent().parent().parent().parent().find('.item-all').find('i').removeClass('icon-wxz').addClass('icon-duihao-red');
			// 	}else{
			// 		$(this).parent().parent().parent().parent().find('.item-all').find('i').removeClass('icon-duihao-red').addClass('icon-wxz');
			// 	}

			// });

			// $('.item-all').on('click',function(){
			// 	var currentClassName = $(this).find('i').prop("className");
			// 	if(currentClassName == 'icon-wxz'){
			// 		console.log('ss');
			// 		$(this).find('i').removeClass('icon-wxz').addClass('icon-duihao-red');

			// 		$(this).parent().next().find('.selected').find('i').removeClass('icon-wxz').addClass('icon-duihao-red');
			// 	}else{
			// 		$(this).find('i').removeClass('icon-duihao-red').addClass('icon-wxz');
			// 		$(this).parent().next().find('.selected').find('i').removeClass('icon-duihao-red').addClass('icon-wxz');
			// 	}
			// });





			var myCalendar = new SimpleCalendar('#calendar');
			//myCalendar.createDate();
			$(function(){
				var monthCH = $('.sc-select-month').text();
				$(".sc-mleft").click(function(){
					myCalendar.subMonth();
				   var year = $('.sc-select-year').text();
				   var monthCH = $('.sc-select-month').text();

				   var month = SimpleCalendar.prototype.languageData.months_CH.indexOf(monthCH)+1;
			   })
			    $(".sc-mright").click(function(){
			   		myCalendar.addMonth();
				    var year = $('.sc-select-year').text();
				    var monthCH = $('.sc-select-month').text();
				    var month = SimpleCalendar.prototype.languageData.months_CH.indexOf(monthCH)+1;
			    })
		    });
			
			//滑动切换
			var myElement = document.getElementById('calendar');
　　  			var hammer = new Hammer(myElement);
			// hammer.on("swipeleft", function (ev) {
				
			//  	myCalendar.addMonth();
			 	
			// });
			// hammer.on("swiperight", function (ev) {
			//  	myCalendar.subMonth();
			// });
			
			//添加标记
			var mark = {};
			for (var i = 0;i<res.content.length;i++) {
				var curNum = res.content[i].last_viewed_date+'';
				mark[curNum.replace(/\b(0+)/gi,"")] = [{'title':res.content[i].last_viewed_date}];
			}
			console.log(mark);
			myCalendar._defaultOptions.mark=mark;
			//console.log(myCalendar._defaultOptions.mark);
			myCalendar.update();
			
			
			
			//显示当天的活动在初始化mark之后
			//初始化今天的活动

			// announceList($('.sc-today'));
			// //有标记的日期点击事件
			// $('#calendar').on("click", '.sc-selected', function() {
			// 	alert(announceList($(this)));
			// });
			
			//显示选择日期当天的活动
			// function announceList(v){
			// 	if(v.children().hasClass('sc-mark-show')){
			// 		var year = $('#calendar .sc-select-year').text();
			// 		var monthCH = $('#calendar .sc-select-month').text();
			// 		var day = v.children()[1].innerText;
			// 		var month = SimpleCalendar.prototype.languageData.months_CH.indexOf(monthCH)+1;

			// 		var date = year + '-' + month + '-' + day;
			// 		var content = mark[date];
			// 		//console.log(content);
			// 		var matterHtml='';
			// 		for(var i=0;i<content.length;i++){
			// 			matterHtml ='<li class="firstDate" style="float: none;font-size: .36rem;border: none;color: #828282;padding: .1rem;width:2rem">'+content[i].title+'</li>';
			// 			$('.items').append(matterHtml);
			// 		}
					
			// 	}else{
			// 		var matterHtml=''
			// 		matterHtml +='<li class="announceItem"><div><p class="announceContent">暂无浏览记录~</p></div></li>';
			// 		$('.items').html(matterHtml);

			// 	}
			// 	return matterHtml;
			// }
			//$('.items').append(announceList($(this)));
			//此处往下，是点击显示全部日历的信息
		
//			var flag = 0;
//			$('.downArrow').click(function(event) {
//				if (flag == 0) {
//					/* Act on the event */
//				$('#calendar .sc-body').css("height",'4rem');
//				$('#calendar .sc-days').find('div').show();
//
//					flag = 1;
//					return;
//				}
//				if (flag == 1) {
//					$('#calendar .sc-body').css("height",'.89rem');
//					// $('.sc-days').find('div').hide();
//					myCalendar.create();
//					flag = 0;
//				}
//				
//			});
		
		//myDate
			var myCalendarDate = new SimpleCalendar('#mycalendar');
			myCalendarDate.createDate();
				$(function(){
				var monthCH = $('#mycalendar .sc-select-month').text();
				$(".mysc-mleft").click(function(){
					myCalendarDate.subMonth();
				   var year = $('#mycalendar .sc-select-year').text();
				   var monthCH = $('#mycalendar .sc-select-month').text();
				   var month = SimpleCalendar.prototype.languageData.months_CH.indexOf(monthCH)+1;
			   })
			    $(".mysc-mright").click(function(){
			   		myCalendarDate.addMonth();
				    var year = $('#mycalendar .sc-select-year').text();
				    var monthCH = $('#mycalendar .sc-select-month').text();
				    var month = SimpleCalendar.prototype.languageData.months_CH.indexOf(monthCH)+1;
			    })
		    });
			
			//滑动切换
			var myElement = document.getElementById('mycalendar');
　　  			var hammer = new Hammer(myElement);
			hammer.on("swipeleft", function (ev) {
			 	myCalendarDate.addMonth();
			});
			hammer.on("swiperight", function (ev) {
			 	myCalendarDate.subMonth();
			});
			
			//添加标记
			var mark = {
				'2018-4-13':[
					{title:'4月13日'}],
				'2018-4-28':[
					{title:'4月28日'}],
					'2018-4-9':[
					{title:'4月9日'}],
					'2018-4-10':[
					{title:'4月10日'}],
					'2018-4-16':[
					{title:'4月16日'}],
					'2018-4-17':[
					{title:'4月17日'}],
					'2018-6-22':[
					{title:'6月22日'}]

			};
			myCalendarDate._defaultOptions.mark=mark;
			//console.log(myCalendar._defaultOptions.mark);
			myCalendarDate.update();
			
			
			
			//显示当天的活动在初始化mark之后
			//初始化今天的活动

			announceListDate($('#mycalendar .sc-today'));
			//有标记的日期点击事件
			$('#mycalendar').on("click", '.sc-selected', function() {
				announceListDate($(this));


			});
			
			//显示选择日期当天的活动
			function announceListDate(v){
				// console.log(v)
				if(v.children().hasClass('sc-mark-show')){
					var year = $('#mycalendar .sc-select-year').text();
					var monthCH = $('#mycalendar .sc-select-month').text();
					var day = v.children()[1].innerText;
					var month = SimpleCalendar.prototype.languageData.months_CH.indexOf(monthCH)+1;

					var date = year + '-' + month + '-' + day;

					var content = mark[date];
					//console.log(content);
					var matterHtml='';
					for(var i=0;i<content.length;i++){
						matterHtml +='<li class="announceItem"><div><div class="fl announceImg">'
							+'<img class=" " src="images/content.png"/></div>'
							+'<p class="announceContent">'+content[i].title+'</p>'
							+'</div><div class="announceTime">'+content[i].startTime+' - '+content[i].endTime+'</div></li>';
					}
					$('.matterL').html(matterHtml);
				}else{
					var matterHtml=''
					matterHtml +='<li class="announceItem"><div><p class="announceContent">暂无浏览记录~</p></div></li>';
					$('.matterL').html(matterHtml);

				}
				return matterHtml;
			}
		
			
			$('#calendar .sc-days .sc-item').hide();
			var curIndex;
			$('#calendar .sc-days .sc-item').each(function(index, el) {
				if ($(this).hasClass('sc-today')) {
					curIndex = index;
				}
			});
		
			
			//0-6
			if (curIndex>=0 && curIndex <=6) {
				$('#calendar .sc-days .sc-item').eq(0).show();
				$('#calendar .sc-days .sc-item').eq(1).show();
				$('#calendar .sc-days .sc-item').eq(2).show();
				$('#calendar .sc-days .sc-item').eq(3).show();
				$('#calendar .sc-days .sc-item').eq(4).show();
				$('#calendar .sc-days .sc-item').eq(5).show();
				$('#calendar .sc-days .sc-item').eq(6).show();
			}
			//7-13
			if (curIndex>=7 && curIndex <=13) {
				$('#calendar .sc-days .sc-item').eq(7).show();
				$('#calendar .sc-days .sc-item').eq(8).show();
				$('#calendar .sc-days .sc-item').eq(9).show();
				$('#calendar .sc-days .sc-item').eq(10).show();
				$('#calendar .sc-days .sc-item').eq(11).show();
				$('#calendar .sc-days .sc-item').eq(12).show();
				$('#calendar .sc-days .sc-item').eq(13).show();
			}
			//14-20
			if (curIndex>=14 && curIndex <=20) {
				$('#calendar .sc-days .sc-item').eq(14).show();
				$('#calendar .sc-days .sc-item').eq(15).show();
				$('#calendar .sc-days .sc-item').eq(16).show();
				$('#calendar .sc-days .sc-item').eq(17).show();
				$('#calendar .sc-days .sc-item').eq(18).show();
				$('#calendar .sc-days .sc-item').eq(19).show();
				$('#calendar .sc-days .sc-item').eq(20).show();
			}
			//21-27
			if (curIndex>=21 && curIndex <=27) {
				$('#calendar .sc-days .sc-item').eq(21).show();
				$('#calendar .sc-days .sc-item').eq(22).show();
				$('#calendar .sc-days .sc-item').eq(23).show();
				$('#calendar .sc-days .sc-item').eq(24).show();
				$('#calendar .sc-days .sc-item').eq(25).show();
				$('#calendar .sc-days .sc-item').eq(26).show();
				$('#calendar .sc-days .sc-item').eq(27).show();
			}
			//28-34
			if (curIndex>=28 && curIndex <=34) {
				$('#calendar .sc-days .sc-item').eq(28).show();
				$('#calendar .sc-days .sc-item').eq(29).show();
				$('#calendar .sc-days .sc-item').eq(30).show();
				$('#calendar .sc-days .sc-item').eq(31).show();
				$('#calendar .sc-days .sc-item').eq(32).show();
				$('#calendar .sc-days .sc-item').eq(33).show();
				$('#calendar .sc-days .sc-item').eq(34).show();
			}
			//35-41
			if (curIndex>=35 && curIndex <=41) {
				$('#calendar .sc-days .sc-item').eq(35).show();
				$('#calendar .sc-days .sc-item').eq(36).show();
				$('#calendar .sc-days .sc-item').eq(37).show();
				$('#calendar .sc-days .sc-item').eq(38).show();
				$('#calendar .sc-days .sc-item').eq(39).show();
				$('#calendar .sc-days .sc-item').eq(40).show();
				$('#calendar .sc-days .sc-item').eq(41).show();
			}

//		var n=0,flag=true;
//		var a = 0
//		function appendDate(){
//			return '<li class="firstDate" style="float: none;font-size: .36rem;border: none;color: #828282;padding: .1rem;width:2rem">4月18日</li>'
//		}
//function appendTestData(){
//return '<li class="items-li"><img class="items-image" src="https://cdn-remote.517ybang.com/media/home/placeholder.png" alt=""/><div class="items-text outer"><div class="price">¥100.00</div><div class="star editStar"><i class="icon-weixuanzhong2"></i></div><div class="selected editSelected"><i class="icon-un-selected"></i></div></div></li>'
//}
//function addhtml(type){
//$("#app .items")[type](appendDate()+appendTestData()+appendTestData()+appendTestData()+appendTestData())
//}
//function addhtmlDate(type){
//$("#app1 .items")[type](appendDate()+appendTestData()+appendTestData()+appendTestData()+appendTestData())
//}
//var refreshBox=new PullToRefresh({
//container:"#app",  
//pull:{
//    callback:function(){
//    	$("#app .items").html(' ');
//      setTimeout(function(){             
//        n=0     
//        addhtml("html")
//        refreshBox.endPullRefresh(true)
//      },1000)
//    }
//},
//up:{
//    callback:function(){
//      setTimeout(function(){   
//        if(n<3){
//          n++
//         addhtml("append")
//         refreshBox.endUpLoading(true)    
//        }else{    //没有数据
//          refreshBox.endUpLoading(false)
//          n=0;
//        }
//      },1000)
//    }
//}
//});
//var a = 0;
//$('#calendar .month').click(function(event) {

// 	var refreshBoxDate=new PullToRefresh({
//   container:"#app1",  
//   pull:{
//       callback:function(){
//       	$("#app1 .items").html(' ');
//         setTimeout(function(){             
//           n=0     
//           addhtmlDate("html")
//           refreshBoxDate.endPullRefresh(true)
//         },1000)
//       }
//   },
//   up:{
//       callback:function(){
//         setTimeout(function(){   
//           if(n<10){

//             n++
//            addhtmlDate("append")
//            refreshBoxDate.endUpLoading(true);
//            console.log('show');    
//           }else{    //没有数据
//           	console.log('hide');
//             refreshBoxDate.endUpLoading(false);
//             n=0;
//           }
//         },1000)
//       }
//   }
// });
	/* Act on the event */
//	if (a == 0) {
//		$("#app").hide();
//	$(".myinner").show();
//	$('#calendar').css('position','static');
//	$('.myinner').css('marginTop',0);
//	a = 1;
//	}
//	else{
//		$("#app").show();
//	$(".myinner").hide();
//	a = 0;
//	}
	
//});
            	}
			});
		
		</script>
	</body>

</html>