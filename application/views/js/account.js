/**
 * Created by Administrator on 2017/10/30 0030.
 */
$(document).ready(function(){

    var tel='';
    $('#mobile').bind('input onchange', function() {
        tel = $('#mobile').val();
        var isFocus = $('#mobile').is(":focus");
        console.log(isFocus);
        if($('#mobile').val().length > 0 || isFocus == true){
            $('.tel').show();
        }
    });
    $('#mobile').focus(function(){
        if($('#mobile').val().length > 0){
            $('.tel').show();
        }
    });
    $('#mobile').blur(function(){
        $('.tel').hide();
        var re = /^1\d{10}$/;

        if (re.test(tel)) {

        }else{
            $('.tips-text').html('手机号格式错误');
            $('.error-tips').show();
            actionDo();
        }
    });
    var pass='';
    $('#password').bind('input onchange', function() {
        pass = $('#password').val();
        var isFocus = $('#password').is(":focus");
        console.log(isFocus);
        if($('#password').val().length > 0 || isFocus == true){
            $('.pass').show();
        }
    });
    $('#password').focus(function(){
        if($('#password').val().length > 0){
            $('.pass').show();
        }
    });
    $('#password').blur(function(){
        $('.pass').hide();
        var re = /^[a-zA-Z0-9]{6,20}$/
        if (re.test(pass)) {

        }else{
            $('.tips-text').html('密码长度应在6-20位之间');
            $('.error-tips').show();
            actionDo();
        }
    });

    var pass1='';
    $('#password1').bind('input onchange', function() {
        pass1 = $('#password1').val();
        var isFocus = $('#password1').is(":focus");
        console.log(isFocus);
        if($('#password1').val().length > 0 || isFocus == true){
            $('.pass1').show();
        }
    });
    $('#password1').focus(function(){
        if($('#password1').val().length > 0){
            $('.pass1').show();
        }
    });
    $('#password1').blur(function(){
        $('.pass1').hide();
        var re = /^[a-zA-Z0-9]{6,20}$/
        if (re.test(pass1)) {

        }else{
            $('.tips-text').html('密码长度应在6-20位之间');
            $('.error-tips').show();
            actionDo();
        }
    });

    var pass2='';
    $('#password2').bind('input onchange', function() {
        pass2 = $('#password2').val();
        var isFocus = $('#password2').is(":focus");
        console.log(isFocus);
        if($('#password2').val().length > 0 || isFocus == true){
            $('.pass2').show();
        }
    });
    $('#password2').focus(function(){
        if($('#password2').val().length > 0){
            $('.pass2').show();
        }
    });
    $('#password2').blur(function(){
        $('.pass2').hide();
        var re = /^[a-zA-Z0-9]{6,20}$/
        if (re.test(pass2)) {

        }else{
            $('.tips-text').html('密码长度应在6-20位之间');
            $('.error-tips').show();
            actionDo();
        }
    });

    var verification='';
    $('#verification').bind('input onchange', function() {
        verification = $('#verification').val();
        var isFocus = $('#verification').is(":focus");
        console.log(isFocus);
        if($('#verification').val().length > 0 || isFocus == true){
            $('.ver').show();
        }
    });
    $('#verification').focus(function(){
        if($('#verification').val().length > 0){
            $('.ver').show();
        }
    });
    $('#verification').blur(function(){
        $('.ver').hide();
        
    });

    $("#next").click(function(){
        var re = /^1\d{10}$/;

        if (re.test(tel)) {
            $(this).hide();
            //这里判断是否注册过
            var id = 2;
            if(id==1){
                $('.login-ver').show();

            }else{
                $('.login-password').show();
            }
            $('#submit').show();
        }else{
            $('.tips-text').html('手机号格式错误');
            $('.error-tips').show();
            actionDo();
        }
    });


    // 执行它

    $(".select").click(function(){
        console.log('jfsdk')
        $(".select").find("i").removeClass('icon-xuanzhong').addClass('icon-zidongtui');
        $(".select").siblings(".title-right").find(".operation-del").css('display','inline-block');
        if($(this).find("i").is('.icon-zidongtui')){
            console.log('jfsdk')
            $(this).find("i").removeClass('icon-zidongtui')
            $(this).find("i").addClass('icon-xuanzhong')
            $(this).siblings(".title-right").find(".operation-del").css('display','none');
        }

    })
    $('.operation-type').click(function(){
        location.href = "edit.html";
    })
    $('.operation-del').click(function(){
        $(this).parents(".address").remove();
    })

    $('#tel').blur(function(){
        var re = /^1\d{10}$/;

        if (re.test($('#tel').val())) {

        }else{
            $('.error-tips').find('p').html('手机号格式错误');
            $('.error-tips').show();
            actionToDo();
        }
    });

    var ProBox = $(".box");
    // 构建一个要执行的函数
    function Hide(){
        ProBox.children('.error-tips').fadeOut(200);
    }
    function Hideng(){
        ProBox.children('.error-tips').fadeOut(200);
    }
    // 定时器函数
    function actionToDo(){
        return setInterval(function(){
            // 插入要执行的函数
            Hideng();
        },2000); // 设定执行或延时时间
    };
    // 定时器函数
    function actionDo(){
        return setInterval(function(){
            // 插入要执行的函数
            Hide();
            Hideng();
        },2000); // 设定执行或延时时间
    };


});