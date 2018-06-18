<?php
    // 使修改的COOKIE即时生效
    function instant_cookie($var, $value = '', $time = 0, $path = '', $domain = '', $s = false)
    {
        $_COOKIE[$var] = $value;
        setcookie($var, $value, $time, $path, $domain, $s);
    }

    function curl($url, $params = NULL, $return = 'array', $method = 'get')
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);

        // 设置cURL参数，要求结果保存到字符串中还是输出到屏幕上。
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_ENCODING, 'UTF-8');

        // 需要通过POST方式发送的数据
        if ($method === 'post'):
            $params['app_type'] = 'client'; // 应用类型默认为biz
            curl_setopt($curl, CURLOPT_POST, count($params));
            curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
        endif;

        // 运行cURL，请求API
        $result = curl_exec($curl);

        // 输出CURL请求头以便调试
        //var_dump(curl_getinfo($curl));

        // 关闭URL请求
        curl_close($curl);

        // 转换返回的json数据为相应格式并返回
        if ($return === 'object'):
            $result = json_decode($result);
        elseif ($return === 'array'):
            $result = json_decode($result, TRUE);
        endif;

        return $result;
    }

    // 获取access_token
    function get_access_token()
    {
        $url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.WECHAT_APP_ID.'&secret='.WECHAT_APP_SECRET;
        //var_dump($url);
        $result = curl($url);
        //var_dump($result);
        return $result['access_token'];
    }

    // 获取jsapi_ticket
    function get_jsapi_ticket($access_token)
    {
        $url = 'https://api.weixin.qq.com/cgi-bin/ticket/getticket?type=jsapi&access_token='.$access_token;
        $result = curl($url);
        return $result['ticket'];
    }

    // 微信JSAPI签名过程
    function wechat_sign_generate($params)
    {
        // 对参与签名的参数进行排序
        ksort($params);

        // 拼接字符串
        $param_string = '';
        foreach ($params as $key => $value)
            $param_string .= '&'. $key.'='.$value;
        $param_string = trim($param_string, '&'); // 清除开头的“&”

        // 计算字符串SHA1值
        $sign = SHA1($param_string);
        return $sign;
    }

    // 获取sns_token
    function get_sns_token($code)
    {
        $url =  'https://api.weixin.qq.com/sns/oauth2/access_token?grant_type=authorization_code&appid='.WECHAT_APP_ID.'&secret='.WECHAT_APP_SECRET.'&code='.$code;
        $result = curl($url);
        return $result;
    }

    // 重新获取sns_token
    function refresh_sns_token($refresh_token)
    {
        $url = 'https://api.weixin.qq.com/sns/oauth2/refresh_token?grant_type=refresh_token&appid='.WECHAT_APP_ID.'&refresh_token='.$refresh_token;
        $result = curl($url);
        return $result;
    }

    // 获取用户资料
    function get_user_info($access_token, $openid)
    {
        $url = 'https://api.weixin.qq.com/cgi-bin/user/info?lang=zh_CN&access_token='.$access_token.'&openid='.$openid;
        $result = curl($url);
        return $result;
    }

    // 使用微信union_id登录
    function login_wechat($union_id)
    {
        $params = array(
            'wechat_union_id' => $union_id,
        );
        $url = api_url('account/login_wechat');
        $result = curl($url, $params, 'array', 'post');
        return ($result['status'] === 200)? $result['content']: FALSE;
    }

    // 获取access_token；若已获得授权则一并获取微信用户资料
    $access_token = get_access_token();

    // 若未登录且从微信登录页转入，则尝试登录
    $code = $this->input->get('code');
    $last_code_used = get_cookie('last_code_used');
    if ( !empty($code) && ($last_code_used <> $code)):
        // 清除当前登录信息
        //$this->session->sess_destroy();

        // 获取微信用户资料
        $sns_token = get_sns_token($code);
        if ($test_mode === 'on') var_dump($sns_token);
        $sns_info = get_user_info($access_token, $sns_token['openid']);
        if ($test_mode === 'on') var_dump($sns_info);
        //set_cookie('last_code_used', $code);
        instant_cookie('last_code_used', $code); // 标记当前code为已使用

        // 若当前用户已订阅微信公众号，尝试使用微信union_id登录本站账户
        if ($sns_info['subscribe'] == 1 && !empty($sns_token['unionid'])):
            // 尝试使用微信union_id登录
            $user_info = login_wechat($sns_token['unionid']);

            if ($test_mode === 'on') var_dump($user_info);
            if ($user_info !== FALSE):
                // 将信息键值对写入session
                foreach ($user_info as $key => $value):
                    $user_data[$key] = $value;
                endforeach;
                $user_data['time_expire_login'] = time() + 60*60*24 *30; // 默认登录状态保持30天
                $this->session->set_userdata($user_data);
                $this->session->sns_info = json_encode($sns_info);

                //set_cookie('wechat_subscribe', 1);
                instant_cookie('wechat_subscribe', 1); // 标记当前已关注微信公众号
            endif;
        else:
            //set_cookie('wechat_subscribe', 0);
            instant_cookie('wechat_subscribe', 0); // 标记当前未关注微信公众号
        endif;
    endif;

    // 生成微信网页API签名参数
    $wesign['timestamp'] = time();
    $wesign['noncestr'] = 'Wm3WZYTPz0wzccnW'; // 随机生成的字符串
    $wesign['jsapi_ticket'] = get_jsapi_ticket($access_token);
    $current_url = 'https://'. $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    if (strpos($current_url, '#') !== FALSE)
        $current_url = substr($current_url, 0, strpos($current_url, '#'));
    $wesign['url'] = $current_url;
?>

<!-- 载入官方组件库 -->
<script src="https://res.wx.qq.com/open/js/jweixin-1.3.0.js"></script>

<!-- 微信环境中的业务内容 -->
<script>
    // 微信用户信息
    var wx_userinfo;
    var wx_userinfo_subscribe = <?php echo empty(get_cookie('wechat_subscribe'))? 0: get_cookie('wechat_subscribe') ?>;

    /*if (wx_userinfo_subscribe != 1)
    {
        document.getElementById('follow-guide').style.display = 'none';
    }*/

    wx.config({
        debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
        appId: '<?php echo WECHAT_APP_ID ?>', // 必填，公众号的唯一标识
        timestamp: <?php echo $wesign['timestamp'] ?>, // 必填，生成签名的时间戳
        nonceStr: '<?php echo $wesign['noncestr'] ?>', // 必填，生成签名的随机串
        signature: '<?php echo wechat_sign_generate($wesign) ?>',// 必填，签名，见附录1
        jsApiList: [
            'onMenuShareTimeline',
            'onMenuShareAppMessage',
            'hideMenuItems',
        ] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
    });

    wx.ready(function(){
        // 隐藏部分按钮
        wx.hideMenuItems({
        menuList:[
        'menuItem:share:qq', 'menuItem:share:QZone', 'menuItem:share:facebook', 'menuItem:copyUrl', 'menuItem:readMode', 'menuItem:openWithQQBrowser', 'menuItem:openWithSafari', 'menuItem:share:email',
        ] // 要隐藏的菜单项，只能隐藏“传播类”和“保护类”按钮，所有menu项见附录3
        });

        <?php
        // 分享到微信时的形象图URL
        $url_page_figure = empty($item['url_image'])? MEDIA_URL.'/icon/jinlai_client/64x64.png': $this->media_root.$item['url_image'];
        ?>

        // 分享到朋友圈
        wx.onMenuShareTimeline({
            title: '<?php echo $title ?>', // 分享标题
            link: '<?php echo CURRENT_URL ?>', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
            imgUrl: '<?php echo $url_page_figure ?>', // 分享图标
            success: function () {
                // 用户确认分享后执行的回调函数
                alert('分享成功');
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
                alert('未完成分享');
            }
        });

        // 分享给朋友
        wx.onMenuShareAppMessage({
            title: '<?php echo $title ?>', // 分享标题
            desc: '<?php echo $description ?>', // 分享描述
            link: '<?php echo CURRENT_URL ?>', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
            imgUrl: '<?php echo $url_page_figure ?>', // 分享图标
            type: '', // 分享类型，music、video或link，不填默认为link
            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
            success: function () {
                // 用户确认分享后执行的回调函数
                alert('分享成功');
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
                alert('未完成分享');
            }
        });

        // 调起扫一扫
        var wechat_scan = function (){
            wx.scanQRCode({
                needResult: 1, // 默认为0，扫描结果由微信处理，1则直接返回扫描结果，
                scanType: ['qrCode','barCode'], // 可以指定扫二维码还是一维码，默认二者都有
                success: function (res){
                    var result = res.resultStr; // 当needResult 为 1 时，扫码返回的结果
                    //TODO 若为条形码，输出条码；若为二维码，转到URL
                    alert(JSON.stringify(res));
                }
            });
            return false;
        };

        // 获取地理位置及网络类型
        var wechat_locate = function (){
            wx.getLocation({
                type: 'wgs84', // 默认为wgs84的gps坐标，如果要返回直接给openLocation用的火星坐标，可传入'gcj02'
                success: function (res) {
                    var latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90
                    var longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。
                    alert(longitude + ',' +latitude);
                    //var speed = res.speed; // 速度，以米/每秒计
                    //var accuracy = res.accuracy; // 位置精度
                    $.ajax({
                        url : 'https://restapi.amap.com/v3/geocode/regeo?output=json&location=' + longitude + ',' + latitude + '&key=cc372b3833813f873834e638ba608fcc',
                        type : 'get',
                        dataType : 'json',
                        success:function(res){
                            $(".maptext").find('span').text(res.regeocode.addressComponent.district);
                            $(".curCity").text(res.regeocode.addressComponent.city);
                        },
                        error:function(){
                            alert("获取地理位置失败!");
                        }
                    });
                },
                cancel: function () {
                    alert('我们需要获取您的位置，以向您推荐附近的优质商品、商家');
                }
            });

            wx.getNetworkType({
                success: function (res) {
                    var networkType = res.networkType; // 返回网络类型2g，3g，4g，wifi
                    alert(networkType);
                }
            });
            return false;
        };
    }); // end wx.ready
</script>