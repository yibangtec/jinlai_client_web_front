
/** mobile web toast、alert、confirm提示框
 * 2017.10.12 syl
 * toast使用方式：
 *      webToast("hello","bottom",1000);
 *      webToast("hollo","bottom");
 *      webToast("hello",1000);
 *      webToast("hello");
 *
 * alert、confirm使用方式：
 *      popTipShow.alert('弹窗标题',['知道了'],function(e){//do something})
 *      popTipShow.confirm('弹窗标题','自定义弹窗内容，居左对齐显示，告知需要确认的信息等',['确 定','取 消'],function(e){//do something})
 */



function compareVersion(v1, v2) {
    v1 = v1.toString().split(".");
    v2 = v2.toString().split(".");
    for (var i = 0; i < v1.length || i < v2.length; i++) {
        var n1 = parseInt(v1[i], 10),
            n2 = parseInt(v2[i], 10);
        if (window.isNaN(n1)) {
            n1 = 0
        }
        if (window.isNaN(n2)) {
            n2 = 0
        }
        if (n1 < n2) {
            return -1
        } else {
            if (n1 > n2) {
                return 1
            }
        }
    }
    return 0
}

function callback(func, result) {
    var ua = navigator.userAgent,
        isAndroid = (/Android/i).test(ua),
        osVersion = ua.match(/(?:OS|Android)[\/\s](\d+[._]\d+(?:[._]\d+)?)/i)

    if (isAndroid && compareVersion(osVersion, "2.4.0") < 0) {
        setTimeout(function() {
            func && func(result)
        }, 1)
    } else {
        func && func(result)
    }
}

(function(e) {
    if (void 0 == window.define) {
        var d = {},
            h = d.exports = {};
        e(null, h, d);
        window.popTipShow = window.notification = d.exports
    } else define(e)
})(function(require, exports, module) {
    function e(a) {
        this._options = d.extend({
            mode: "msg",
            text: "\u7f51\u9875\u63d0\u793a",
            useTap: !1
        }, a || {});
        this._init()
    }
    var d = $,
        h = d(window),
        c = d('<div class="c-float-popWrap msgMode hide">'+
				   '<div class="weui_mask_transparent"></div>'+
				   '<div class="c-float-modePop">'+
					   '<div class="warnMsg"></div>'+
					   '<div class="content"></div>'+
					   '<div class="doBtn">'+
					   '<button class="cancel">\u53d6\u6d88</button>'+
					   '<button class="ok">\u786e\u5b9a</button>'+
					   '</div>'+
				   '</div>'+
			   '</div>'),
		//c = d('<div class="error-tips hide"><p class="warnMsg"></p></div>'),
		m = c.find(".warnMsg"),
        n = c.find(".content"),
        o = c.find(".doBtn .ok"),
        p = c.find(".doBtn .cancel"),
        j = !1,
        f;
    d.extend(e.prototype, {
        _init: function() {
            var a = this,
                b = a._options,
                g = b.mode,
                k = b.text,
                e = b.content,
                f = b.callback,
                l = b.background,
                t = b.btns,
                b = b.useTap ? "tap" : "click",
                i = c.attr("class"),
                i = i.replace(/(msg|alert|confirm)Mode/i, g + "Mode");
            c.attr("class", i);
            l && c.css("background", l);
            k && m.html(k);
            e && n.html(e);
            t && o.html(t[0]);
            t && p.html(t[1]);
			
			if("alert"==g){//解决一个按钮时的宽度
				o.css("width", "100%");
			}else{
				o.css("width", "");
			}
			
            o.off(b).on(b, function(b) {
                f.call(a, b, !0);
            });
            p.off(b).on(b, function(b) {
                f.call(a, b, !1)
            });
            j || (j = !0, d("body").append(c), h.on("resize",
                function() {
                    setTimeout(function() {
                        a._pos()
                    }, 500)
                }))
        },
        _pos: function() {
            var a = document,
                b = a.documentElement,
                g = a.body,
                e, d, f;
            this.isHide() || (a = g.scrollTop, g = g.scrollLeft, e = b.clientWidth, b = b.clientHeight, d = c.width(), f = c.height(), c.css({
                top: a + (b - f) / 2,
                left: g + (e - d) / 2
            }))
        },
        isShow: function() {
            return c.hasClass("show")
        },
        isHide: function() {
            return c.hasClass("hide")
        },
        _cbShow: function() {
            var a = this._options.onShow;
            c.css("opacity", "1").addClass("show");
            a && a.call(this)
        },
        show: function() {
            var a = this;
            f && (clearTimeout(f), f = void 0);
            a.isShow() ? a._cbShow() : (c.css("opacity", "0").removeClass("hide"), a._pos(), setTimeout(function() {
                a._cbShow()
            }, 300), setTimeout(function() {
                c.animate({
                    opacity: "1"
                }, 300, "linear")
            }, 1))
        },
        _cbHide: function() {
            var a = this._options.onHide;
            c.css("opacity", "0").addClass("hide");
            a && a.call(this)
        },
        hide: function() {
            var a = this;
            a.isHide() ? a._cbHide() : (c.css("opacity", "1").removeClass("show"), setTimeout(function() {
                a._cbHide()
            }, 300), setTimeout(function() {
                c.animate({
                    opacity: "0"
                }, 300, "linear")
            }, 1))
        },
        flash: function(a) {
            var b = this;
            opt = b._options;
            opt.onShow = function() {
                f = setTimeout(function() {
                    f && b.hide()
                }, a)
            };
            b.show()
        }
    });
    module.exports = new function() {
        this.simple = function(a, b, c) {
            2 == arguments.length && "number" == typeof arguments[1] && (c = arguments[1], b = void 0);
            var d = new e({
                mode: "msg",
                text: a,
                background: b
            });
            d.flash(c || 2E3);
            return d
        };
        this.msg = function(a, b) {
            var d = new e({
                mode: "msg",
                text: a
            });
			d.show();
            return d
        };
        this.alert = function(a, s, b, c) {
            var d = new e({
                mode: "alert",
                text: a,
				content: s,
				btns:b,
                callback: c
            });
			d.show();
            return d
        };
        this.confirm = function(a, b, c, f) {
            var d = new e({
                mode: "confirm",
                text: a,
                content: b,
                btns:c,
                callback: f
            });
            d.show();
            return d
        };
        this.pop = function(a) {
            return new e(a)
        }
    }
});



function webToast() {
  //默认设置
  var dcfg={
      msg:"提示信息",
      postion:"top",//展示位置，可能值：bottom,top,middle,默认top：是因为在mobile web环境下，输入法在底部会遮挡toast提示框
      time:3000,//展示时间
    };
  //*********************以下为参数处理******************
  var len = arguments.length;
  var arg0 =arguments[0];
  if(arguments.length>0){
    dcfg.msg =arguments[0];
    dcfg.msg=arg0;
     
    var arg1 =arguments[1];
    var regx = /(bottom|top|middle)/i;
    var numRegx = /[1-9]\d*/;
    if(regx.test(arg1)){
      dcfg.postion=arg1;
    }else if(numRegx.test(arg1)){
      dcfg.time=arg1;
    }
     
    var arg2 =arguments[2];
    var numRegx = /[1-9]\d*/;
    if(numRegx.test(arg2)){
      dcfg.time=arg2;
    }
  }
//*********************以上为参数处理******************
var ret = "<div class='web_toast'><div class='cx_mask_transparent'></div>" + dcfg.msg + "</div>";
  if ($(".web_toast").length <= 0) {
    $("body").append(ret);
  } else {//如果页面有web_toast 先清除之前的样式
	  $(".web_toast").css("left","");
	 
	  ret = "<div class='cx_mask_transparent'></div>" + dcfg.msg;
    $(".web_toast").html(ret);
  }
  var w = $(".web_toast").width(),ww = $(window).width();
  $(".web_toast").fadeIn();
  $(".web_toast").css("left",(ww-w)/2-20);
  if("bottom"==dcfg.postion){
    $(".web_toast").css("bottom",50);
    $(".web_toast").css("top","");//这里为什么要置空，自己琢磨，我就不告诉
  }else if("top"==dcfg.postion){
    $(".web_toast").css("bottom","");
    $(".web_toast").css("top",50);
  }else if("middle"==dcfg.postion){
	$(".web_toast").css("bottom","");
	$(".web_toast").css("top","");
    var h = $(".web_toast").height(),hh = $(window).height();
    $(".web_toast").css("bottom",(hh-h)/2-20);
  }
  setTimeout(function() {	
    $(".web_toast").fadeOut();	
  }, dcfg.time);
}



//		webToast("恭喜您，修改成功恭喜您，修改成功恭喜您修改成功恭喜您","middle",3000);
//		popTipShow.alert('弹窗标题','自定义弹窗内容，居左对齐显示，告知需要确认的信息等', ['知道了'],
//			function(e){
//			  //callback 处理按钮事件		  
//			  var button = $(e.target).attr('class');
//			  if(button == 'ok'){
//				//按下确定按钮执行的操作
//				//todo ....
//				this.hide();
//			  }	
//			}
//		);
//		popTipShow.confirm('弹窗标题','自定义弹窗内容，居左对齐显示，告知需要确认的信息等',['确 定','取 消'],
//			function(e){
//			  //callback 处理按钮事件
//			  var button = $(e.target).attr('class');
//			  if(button == 'ok'){
//				//按下确定按钮执行的操作
//				//todo ....				
//				this.hide();
//				setTimeout(function() {
//					webToast("操作成功","top", 2000);
//				}, 300);
//			  }
//
//			  if(button == 'cancel') {
//				//按下取消按钮执行的操作
//				//todo ....
//				this.hide();
//				setTimeout(function() {
//					webToast("您选择“取消”了","bottom", 2000);
//				}, 300);
//			  }
//			}
//		);
//		
//		var html = "<label>姓名：<input class='confirm_input' placeholder='请输入'></label>";
//		popTipShow.confirm('弹窗标题',html,['确 定','取 消'],
//			function(e){
//			  //callback 处理按钮事件
//			  var button = $(e.target).attr('class');
//			  if(button == 'ok'){
//				if(null==$(".confirm_input").val() || ""==$(".confirm_input").val()){
//					webToast("姓名不能为空！","bottom", 3000);
//					return;
//				}	
//				
//				this.hide();
//				setTimeout(function() {
//					webToast($(".confirm_input").val(),"bottom", 3000);
//				}, 300);
//				
//				//按下确定按钮执行的操作
//				//todo ....								
//			  }
//
//			  if(button == 'cancel') {
//				//按下取消按钮执行的操作
//				//todo ....
//				this.hide();
//				setTimeout(function() {
//					webToast("您选择“取消”了","top", 2000);
//				}, 300);
//			  }
//			}
//		);