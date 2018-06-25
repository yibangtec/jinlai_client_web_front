/**
 * Created by Administrator on 2017/10/30 0030.
 */
$(function(){


    $('#mobile').bind('input onchange', function() {

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
    $('.input-box .tel').on('click',function(){
        $('#mobile').val('');
        console.log('sdfsdf')
    });


    $('#password').bind('input onchange', function() {

        var isFocus = $('#password').is(":focus");
        console.log(isFocus);
        if($('#password').val().length > 0 || isFocus == true){
            $('.pass').show();
        }
    });
    $('#password').focus(function(){
        $('.tel').hide();

        if($('#password').val().length > 0){
            $('.pass').show();
        }
    });
    $('.input-box .pass').on('click',function(){
        $('#password').val('');
        console.log('sdfsdf')
    });

    $('#submit').on('click',function(){
        console.log('safdsfsdf');
        $('.pass').hide();
        $('.ver').hide();
        var verification = $('#verification').val();
        var pass = $('#password').val();
        var tel = $('#mobile').val();
        if(tel){
            var regTel = /^1\d{10}$/;
            if (regTel.test(tel)) {

            }else{
                $('.tips-text').html('手机号格式错误');
                $('.error-tips').show();
                $('#mobile').val('');
                $('#mobile').focus();
                actionDo();
            }
        }else if(pass){
            console.log('pass');
            var regPass = /^[a-zA-Z0-9]{6,20}$/;
            if (regPass.test(pass)) {

            }else{
                $('.tips-text').html('密码长度应在6-20位之间');
                $('#password').val('');
                $('#password').focus();
                $('.error-tips').show();
                actionDo();
            }
        }else if(verification){
            console.log('ver');
            var reg = /^.{6,}$/;
            if(!reg.test(verification)){
                $('#verification').val('');
                $('#verification').focus();
                $('.tips-text').html('验证码格式不正确');
                $('.error-tips').show();
                actionDo();
            }else{

            }
        }

    });
    $('#submit-reset').on('click',function(){
        $('.pass2').hide();
        var pass1 = $('#password1').val();
        var pass2 = $('#password2').val();
        var re = /^[a-zA-Z0-9]{6,20}$/;
        if (pass1==pass2) {

        }else{
            $('.tips-text').html('两次密码输入不一致');
            $('.error-tips').show();
            actionDo();
        }
    });

    $('#submit-change').on('click',function(){
        $('.pass2').hide();
        var pass = $('#password').val();
        var pass1 = $('#password1').val();
        var pass2 = $('#password2').val();
        var re = /^[a-zA-Z0-9]{6,20}$/;
        if(pass==pass1){
            $('.tips-text').html('新密码不可与原密码相等');
            $('#password1').val('');
            $('#password2').val('');
            $('#password1').focus();
            $('.error-tips').show();
            actionDo();
            return false
        }else{
            if (pass1==pass2) {

            }else{
                $('.tips-text').html('两次密码输入不一致');
                $('#password2').focus();
                $('.error-tips').show();
                actionDo();
                return false
            }
        }

    });

    /*$('#submit-set').on('click',function(){
        $('.pass2').hide();
        var pass1 = $('#password1').val();
        var pass2 = $('#password2').val();
        var re = /^[a-zA-Z0-9]{6,20}$/;
        if (pass1==pass2) {

        }else{
            $('.tips-text').html('两次密码输入不一致');
            $('.error-tips').show();
            actionDo();
        }
    });*/
    $('#password1').bind('input onchange', function() {

        var isFocus = $('#password1').is(":focus");
        console.log(isFocus);
        if($('#password1').val().length > 0 || isFocus == true){
            $('.pass1').show();
        }
    });
    $('#password1').focus(function(){
        $('.pass').hide();
        $('.ver').hide();
        var verification = $('#verification').val();
        var pass = $('#password').val();
        if(pass){
            var re = /^[a-zA-Z0-9]{6,20}$/;
            if (re.test(pass)) {

            }else{
                $('.tips-text').html('密码长度应在6-20位之间');
                $('#password').val('');
                $('#password').focus();
                $('.error-tips').show();
                actionDo();
            }
        }else if(verification){
            var reg = /^.{6,}$/;
            if(!reg.test(verification)){
                $('.tips-text').html('验证码格式不正确');
                $('.error-tips').show();
                actionDo();
            }else{

            }
        }
        if($('#password1').val().length > 0){
            $('.pass1').show();
        }
    });
    $('.input-box .pass1').on('click',function(){
        $('#password1').val('');
        console.log('sdfsdf')
    });



    $('#password2').bind('input onchange', function() {

        var isFocus = $('#password2').is(":focus");
        console.log(isFocus);
        if($('#password2').val().length > 0 || isFocus == true){
            $('.pass2').show();
        }
    });
    $('#password2').focus(function(){
        $('.pass1').hide();
        var pass1 = $('#password1').val();
        var re = /^[a-zA-Z0-9]{6,20}$/;
        if (re.test(pass1)) {

        }else{
            $('.tips-text').html('新密码长度应在6-20位之间');
            $('#password1').val('');
            $('#password1').focus();
            $('.error-tips').show();
            actionDo();
        }
        if($('#password2').val().length > 0){
            $('.pass2').show();
        }
    });
    $('.input-box .pass2').on('click',function(){
        $('#password2').val('');
        console.log('sdfsdf')
    });



    $('#verification').bind('input onchange', function() {
        var isFocus = $('#verification').is(":focus");
        console.log(isFocus);
        if($('#verification').val().length > 0 || isFocus == true){
            $('.ver').show();
        }
    });
    $('#verification').focus(function(){
        $('.tel').hide();
        var tel = $('#mobile').val();
        var re = /^1\d{10}$/;
        if (re.test(tel)) {
        }else{
            $('#mobile').val('');
            $('#mobile').focus();
            $('.tips-text').html('手机号格式错误');
            $('.error-tips').show();
            actionDo();
        }
        if($('#verification').val().length > 0){
            $('.ver').show();
        }
    });

    $('.input-box .ver').on('click',function(){
        $('#verification').val('');
        console.log('sdfsdf')
    });

    $("#next").click(function(){
        var re = /^1\d{10}$/;
        var tel = $('#mobile').val();
        if (re.test(tel)) {

            //这里判断是否注册过
            $.ajax({
				  url: "https://api.517ybang.com/account/user_exist",
				  type: 'post',
				  dataType: 'json',
				  data: {mobile:tel},
				  success: function (data, status) {

                      if(data.status == 200){
                          console.log('存在');
                          $('.login-ver').hide();
                          $('.login-password').show();
                      }else{
                          $('.login-password').hide();
                          $('.login-ver').show();
                          console.log('不存在');
                      }


				  },
				  fail: function (err, status) {

				    console.log(err)

				  }
            });
            $(this).hide();
            $('#submit').show();
        }else{
            $('.tips-text').html('手机号格式错误');
            $('#mobile').val('');
            $('#mobile').focus();
            $('.error-tips').show();
            actionDo();
        }



    });

    // 执行它

    $(".select").click(function(){
        console.log('jfsdk');
        $(".select").find("i").removeClass('icon-xuanzhong').addClass('icon-zidongtui');
        $(".select").siblings(".title-right").find(".operation-del").css('display','inline-block');
        if($(this).find("i").is('.icon-zidongtui')){
            console.log('jfsdk');
            $(this).find("i").removeClass('icon-zidongtui');
            $(this).find("i").addClass('icon-xuanzhong');
            $(this).siblings(".title-right").find(".operation-del").css('display','none');
        }

    });
    $('.operation-type').click(function(){
        location.href = "edit.html";
    });
    $('.operation-del').click(function(){
        $(this).parents(".address").remove();
    });

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