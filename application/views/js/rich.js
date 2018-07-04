
$(function(){
    var minLength = 10; // 最小的可输入字符串长度
    var maxLength = 5000; // 最大的可输入字符串长度

    // 插入文字
    $('#text').click(function(){
        var txtAfter=$('<div class="child"><p class="arr" contenteditable="true">请输入文字</p><i class="icon-bianji-menu more"></i></div>');
        $(".edit-area").append(txtAfter);
        var h=$(window).height();
        var ch=$("p").last().offset().top;
        $("html,body").animate({ scrollTop: h }, 1000);
        $('.tips').hide();
        if(that)
        {
            // 判断更多操作的显示状态
            if ($('.tips').css('display')=='none')
            {
                var reg = that.siblings()[0].tagName;
                // 在p还是img标签上点击的显示更多操作的按钮
                if (reg == "P")
                {
                    that.addClass('icon-bianji-menu').removeClass('icon-bianji-menu-click');
                }
                else if (reg == "IMG")
                {
                    that.children('i').addClass('icon-bianji-menu').removeClass('icon-bianji-menu-click');
                }
            }
        }
    });

    // 删除空白的text
    $(".edit-area").on('blur','.child p',function() {
        var value = $(this)[0].innerText.trim().length;
        if (value === 0)
        {
            $(this).parent().remove();
        }
        else if (value<minLength)
        {
            alert('输入字符不能少于' + minLength + '个');
        }
        else if (value>maxLength)
        {
            alert('输入字符不能多于' + maxLength + '个');
        }
    });

    //更多显示操作
    $(".edit-area").on("click",".child .more", function() {
        that = $(this);
        var reg = that.siblings()[0].tagName;
        // 判断点击的是p标签还是img的显示更多的按钮
        if (reg == "P")
        {
            var arrI = $(".edit-area i");
            for(var i=0; i<arrI.length; i++) {
                arrI.addClass('icon-bianji-menu').removeClass('icon-bianji-menu-click');
                that.addClass('icon-bianji-menu-click').removeClass('icon-bianji-menu');
            }
            var ect = '<span id="replace"><i class="icon-replace"></i></span>';
            $("#replace").replaceWith(ect)
        }
        else if (reg == "IMG")
        {
            var arrJ = $(".edit-area i");
            for(var j=0; j<arrJ.length; j++){
                arrJ.addClass('icon-bianji-menu').removeClass('icon-bianji-menu-click');
                that.children('i').addClass('icon-bianji-menu-click').removeClass('icon-bianji-menu');
            }
            var select = '<span class="replace-img" id="replace"><input id="beforeImg" type="file" name="file" onchange="ufload(this)"/><i class="icon-replace"></i></span>';
            $("#replace").replaceWith(select)
        }
        that.parent().after($('.tips').show());
        var index = $(this).index(".more");
        var length = $('.more').length;
        // 判断当前的元素是第一位或者最后一位，相应的不显示上移或者不显示下移
        if (index==0)
        {
            $('.moveUp').css('display','none');
            $('.moveDown').css('display','inline-block');
        }
        else if (index==length-1)
        {
            $('.moveUp').css('display','inline-block');
            $('.moveDown').css('display','none');
        }
        else
        {
            $('.moveUp').css('display','inline-block');
            $('.moveDown').css('display','inline-block');
        }

    });

    // 当前元素后面插入p
    $('#afterText').click(function(){
        var txtAfter=$('<div class="child"><p class="arr" contenteditable="true">text</p><i class="icon-bianji-menu more"></i></div>');
        that.parent().after(txtAfter);
        restoreElement();
    });

    // 移除当前元素
    $('#delete').click(function(){
        that.parent().remove();
        restoreElement();
    });

    // 替换元素，如果是p标签则显示为可编辑状态，如果是img则选择要替换的照片进行替换
    $('.editContent').on('click','#replace .icon-replace',function(){
        var reg = that.siblings()[0].tagName;
        //console.log(reg);
        if (reg == "P")
        {
            that.siblings().attr('contenteditable','true').focus();
            restoreElement();
        }
    });

    // 当前元素向上移动交换位置
    $('.moveUp').click(function(){
        var up = that.parent().prev('.child');
        var current =that.parent();
        current.insertBefore(up);
        restoreElement();
    });

    // 当前元素向下移动交换位置
    $('.moveDown').click(function(){
        var down = that.parent().next().next('.child');
        var current =that.parent();
        current.insertAfter(down);
        restoreElement();
    });

    // 点击关闭按钮隐藏当前遮罩
    $('#close').click(function(){
        restoreElement();
    });

    // 点击保存打印HTML结构
    $(".box").on('click','.save #saveBtn',function(){
        var arrCon=$(' .box #area .arr');
        //console.log(arrCon);
        var curArr = [];
        for(var i=0; i<arrCon.length;i++){
            curArr[i]=arrCon[i].outerHTML
        }
        str =curArr.join("");
        var re = /contenteditable="true"/g;
        str = str.replace(re,'');
        var re1 = /class="arr" /g;
        str = str.replace(re1,'');
        console.log(str);
        arrCon=[]
    });

    // 关闭预览
    $('.preview-close').click(function(){
        $('.preview').hide();
    });

    // 预览
    $('#preview').click(function(){
        var arr=$('.edit-area');
        //console.log(arr.length-1);
        var currentArr = '';
        currentArr=arr[arr.length-1].outerHTML;
        var re = /contenteditable="true"/g;
        currentArr = currentArr.replace(re,'');
        var re1 =/<span class="more"><i class="icon-bianji-menu"><\/i><\/span>/g;
        currentArr = currentArr.replace(re1,'');
        var re2 =/<i class="icon-xuanzhuan"><\/i>/g;
        currentArr = currentArr.replace(re2,'');
        var re3 = /<i class="icon-bianji-menu more"><\/i>/g;
        currentArr = currentArr.replace(re3,'');
        $('.preview').show();
        $('.preview-content').html(currentArr);
        arr =[];
    });


    // TODO 旋转功能
    // 由于前段旋转不是正真的图片旋转，原来现实的img的样式是不会变得，并且图片的宽度是100%高度自适应，要始终做到宽100%高自适应，只能通过计算来进行相应的调整
    /*var num = 0;
    $(".edit-area").on("click",".child .icon-xuanzhuan", function() {
        var h = $(this).siblings('.arr').height(); // 当前图片的高度
        var w = $(this).siblings('.arr').width(); // 当前图片的宽度
        var orginalObj = {'width':'7.1rem','height':'auto','margin-top':'0','margin-left':'0'}; // 原先状态的css
        num ++; // 一次旋转90度，记录次数
        if (num%2 == 0)  // 偶数次
        {
            var newH = h*(355/w)*2/100; // 旋转之后的高度
            if (w-h>0) // 当宽大于高度的时候
            {
                $(this).siblings('.arr').rotate(-90*num);
                $(this).siblings('.arr').css(orginalObj);
                $(this).parent('.child').css('height',newH+'rem');
            }
            else
            {
                $(this).siblings('.arr').rotate(-90*num);
                $(this).siblings('.arr').css(orginalObj);
                $(this).parent('.child').css('height',newH+'rem');
            }
        }
        else
        { // 奇数次
            var newW = w*(355/h)*2/100;
            var marginTop = (w*(355/h)-355)/100; // top距离
            marginTop = Math.abs(marginTop);
            if (w-h>0)
            {
                $(this).siblings('.arr').rotate(-90*num);
                $(this).siblings('.arr').css({'width':'auto','height':'7.1rem','margin-top':marginTop+'rem','margin-left':'-'+marginTop+'rem'});
                $(this).parent('.child').css('height',newW+'rem');
            } else
            {
                $(this).siblings('.arr').rotate(-90*num);
                $(this).siblings('.arr').css({'margin-top':'-'+marginTop+'rem','margin-left':marginTop+'rem','width':'auto','height':'7.1rem'});
                $(this).parent('.child').css('height',newW+'rem');
            }
        }

    });*/

});

// 添加一张或者多张图片
function ufload(obj,ele) {
    var bucketname="jinlaisandbox-images"; //服务名
    var username="jinlaisandbox";	  //操作员账号
    var password="jinlaisandbox";
    var file = $(obj).get(0).files[0];
    var list = $(obj).get(0).files;
    //console.log(list);
    for(var i = 0;i < list.length;i++){
        $('.editContent .loading').show();
        var time=buildFileName(i, biz);
        var save_key="/item/description/"+time;
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
                    $('.editContent .loading').hide();
                }
                var imgUrl = JSON.parse(data).url;
                var img =$('<div class="child"><img class="arr" src=https://jinlaisandbox-images.b0.upaiyun.com'+JSON.parse(data).url+' alt=""/><span class="more"><i class="icon-bianji-menu"></i></span><i class="icon-xuanzhuan"></i></div>');

                // 判断是在哪个位置插入图片，after在编辑区域的最后面，currentAfter表示当前选中的后面，如果没有传参表示是替换当前的。
                if (ele == 'after')
                {
                    $(".edit-area").append(img);
                }
                else if (ele == 'currentAfter')
                {
                    that.parent().after(img);
                }
                else if (typeof(ele) == "undefined")
                {
                    that.parent().replaceWith(img);
                }
                var h=$(window).height();
                var ch=$(".child").last().offset().top;
                $("html,body").animate({ scrollTop: h+ch }, 1000);

                // that表示当前元素
                if (that) {
                    // 判断当前的上下移动这些元素的显示状态
                    if ($('.tips').css('display')=='none')
                    {
                        var reg = that.siblings()[0].tagName;
                        // p标签和img标签的右上角icon不同，判断区别对待
                        if (reg == "P")
                        {
                            that.addClass('icon-bianji-menu').removeClass('icon-bianji-menu-click');
                        }
                        else if (reg == "IMG")
                        {
                            that.children('i').addClass('icon-bianji-menu').removeClass('icon-bianji-menu-click');
                        }
                    }
                    else
                    {
                        $('.tips').hide();
                        var reg = that.siblings()[0].tagName;
                        if (reg == "P")
                        {
                            that.addClass('icon-bianji-menu').removeClass('icon-bianji-menu-click');
                        }
                        else if (reg == "IMG")
                        {
                            that.children('i').addClass('icon-bianji-menu').removeClass('icon-bianji-menu-click');
                        }
                    }
                }
            },
            error:function(xhr){
                console.log(xhr);
            }
        });
    }
}

//这个方法是生成图片后面的URL例如：2018/0105/174047222.jpg
// s是为了防止一秒上传2张或者更多图片的时候文件名重复
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

// 交换位置
function exchange(former, latter){
    var n = former.next(), p = latter.prev();
    latter.insertBefore(n);
    former.insertAfter(p);
};

//重复使用的恢复原先状态的
function restoreElement(){
    $('.tips').hide();
    // 判断当前的上下移动这些元素的显示状态
    if ($('.tips').css('display')=='none') {
        var reg = that.siblings()[0].tagName;
        // p标签和img标签的右上角icon不同，判断区别对待
        if
        (reg == "P") {
            that.addClass('icon-bianji-menu').removeClass('icon-bianji-menu-click');
        }
        else if (reg == "IMG"){
            that.children('i').addClass('icon-bianji-menu').removeClass('icon-bianji-menu-click');
        }
    }
}

