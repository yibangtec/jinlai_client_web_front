$(document).ready(function(){
	$(".tabbar .item").on("click",function(){
		var index = $(this).index();
		$(this).css({
			"borderRadius" : "50%"
		}).siblings(".item").css({
			"borderRadius" : 0
		});
		$(this).find("i").css({
			"marginTop" : 0
		}).parents(".item").siblings(".item").children("i").css({
			"marginTop" : "-.17rem"
		});
		$(this).find(".text").css({
			"top" : 300
		}).parents(".item").siblings(".item").children("span").css({
			"top" : ".27rem"
		});;
		$(this).addClass("cur").siblings(".item").removeClass("cur");
		$(".tabcontent>.item").eq(index).show().siblings("div").hide();
	});
	
	$(".tabbar .item").eq(0).click();
	
//	首页菜单焦点图
//		var swiperIndex = new Swiper('.swiper-container', {
//	        pagination: '.swiper-pagination',
//	        paginationClickable: true,
////	        autoplay: 2000,
//	        loop:true
//	   });	
	   
});

//新闻公告自动轮播区域

function AutoScroll(obj) {
    $(obj).find("ul:first").animate({
        marginTop: "-.76rem"
    },
    500,
    function() {
        $(this).css({
            marginTop: "0px"
        }).find("li:eq(0),li:eq(1)").appendTo(this);
    });
}


//首页点击四个小方格,显示更多列表,动画区域

//点击刷新按钮旋转
$(function() {
	var i = 0;
    var usercenter = {
	init:function(){
        this.modal();
},
        modal: function() {
        	for(var j = 0;j <  $(".square").length;j++){
        		 $(".square img").click(function(){
            	i++;
                //点击箭头旋转180度
                    $(this).css({
                    	  "transform-origin":'center center', //旋转中心要是正中间 才行
						    "transform": 'rotate('+180*i+'deg)',
						    "-webkit-transform": 'rotate('+180*i+'deg)',
						    "-moz-transform": 'rotate('+180*i+'deg)',
						    "-ms-transform": 'rotate('+180*i+'deg)',
						    "-o-transform": 'rotate('+180*i+'deg)',
						    "transition": 'transform 0.2s', //过度时间 可调
						    "-moz-transition": '-moz-transform 0.2s',
						    "-moz-transition": '-moz-transform 0.2s',
						    "-o-transition": '-o-transform 0.2s',
						    "-ms-transition": '-ms-transform 0.2s' 
                    })
            })
        	}
           
        }
    }
    usercenter.init();
});
//懒加载
$(document).ready(function(){
	var lazyLoadImg = new LazyLoadImg({
	    el: document.querySelector('#list'),
	    mode: 'default', //默认模式，将显示原图，diy模式，将自定义剪切，默认剪切居中部分
	    time: 300, // 设置一个检测时间间隔
	    complete: true, //页面内所有数据图片加载完成后，是否自己销毁程序，true默认销毁，false不销毁
	    position: { // 只要其中一个位置符合条件，都会触发加载机制
	      top: 0, // 元素距离顶部
	      right: 0, // 元素距离右边
	      bottom: 0, // 元素距离下面
	      left: 0 // 元素距离左边
	    },
	    before: function () { // 图片加载之前执行方法
	      
	    },
	    success: function (el) { // 图片加载成功执行方法
	      el.classList.add('success')
	    },
	    error: function (el) { // 图片加载失败执行方法
//	  	图片加载不出来的默认图片
	      el.src = ''
	    }
	  })
});
//限时秒杀
$.fn.extend({
   oaoTime:function(){
   	var now;
       this.each(function() {
　　　　　　var dateStr = $(this).attr("end-date");
　　　　　　var endDate = new Date(dateStr.replace(/-/g,"/"));//取得指定时间的总毫秒数 
　　　　　　//now是在动态页面中取得服务器的时间，如果没有定义使用客户端时间
　　　　　　if(now==undefined){
　　　　　　　　now = new Date().getTime();
　　　　　　}
　　　　　　var tms = endDate - now;//得到时间差
　　　　　　if(tms<0){alert("时间过期了");return;}

        $.oaoTime.timers.push({tms:tms,content:$(this)});
            $.oaoTime.start();
       });
     
   }
});
   
//倒计时的插件
$.oaoTime={
    //倒计时容器，所有需要倒计时的时间都需要注册到这个容器中，容器中放的是一个object，object描述了倒计时的结束时间，以及显示时间的jquery对象(例如div)
    timers:[],
    //全局的一个倒计时状态，init表示初始化状态，start表示运行中状态，stop表示停止状态
    status:'init',
    //计算时间并定时刷新时间的方法，本插件的核心代码
    takeCount:function(){
        //如果定时器没有启动不执行
        if(this.status != 'start')return;
        setTimeout("$.oaoTime.takeCount()", 1000 );
        var timers = this.timers;
        for (var i = 0, j = timers.length; i < j; i++) {
            //计数减一
            timers[i].tms -= 1000;
            //console.info(timers[i].tms);
            //计算时分秒
            var days = Math.floor(timers[i].tms / (1000 * 60 * 60 * 24));
            var hours = Math.floor(timers[i].tms / (1000 * 60 * 60)) % 24;
            var minutes = Math.floor(timers[i].tms / (1000 * 60)) % 60;
            var seconds = Math.floor(timers[i].tms / 1000) % 60;
            if (days < 0)days = 0;
            if (hours < 0)hours = 0;
            if (minutes < 0)minutes = 0;
            if (seconds < 0) seconds = 0;
            var newTimeText = days+"天"+hours+"小时"+minutes+"分"+seconds+"秒";
            timers[i].content.text(newTimeText);
           //console.info(newTimeText);
        }
    },
    //启动倒计时
    start:function(){
        if(this.status=='init'){
            this.status = 'start';
            this.takeCount();
        }
    },
    //停止倒计时
    stop:function(){
        this.status = 'stop';
    }

}; 
$('.shopIndextabtitle li').click(function(){
	$(this).addClass("current").siblings("li").removeClass('current');
});

