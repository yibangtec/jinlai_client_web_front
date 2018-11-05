<?php
/**
 * Created by PhpStorm.
 * User: kamaslau
 * Date: 2018-6-21
 * Time: 20:43
 */
?>
<link rel=stylesheet media=all href="<?php echo CDN_URL ?>css/reset.css">

<style>
    #content {text-align:center;}

    #invitation_forms li {cursor:pointer;width:33.3%;}
        #invitation_forms li:nth-of-type {width:33.4%;}

    /* 以下为全屏容器样式 */
    .full-screen {font-family:"苹方",sans-serif;text-align:center;background-color:rgba(0,0,0,0.75);position:fixed;left:0;right:0;top:0;bottom:0;z-index:100;display:none;overflow-y:scroll;}
    .full-screen-container {color:#3d3d3d;background:#fff url('/media/images/vote/bg-fullscreen@3x.png') no-repeat center top;background-size:590px 233px;font-size:30px;width:590px;margin:10% auto;border-radius:30px;padding:233px 0 0;position:relative;overflow-y:scroll;}
    .full-screen-close {color:#c9954b;font-size:26px;position:absolute;top:30px;right:30px;width:26px;height:26px;cursor:pointer;}
    .full-screen-content {background-color:#fff;padding:55px 30px;}
    .full-screen-title {color:#c9954b;font-size:36px;margin-bottom:50px;}
    .full-screen-content p:not(:last-child) {margin-bottom:1em;}

    #form-signup .full-screen-container {color:#c6c6c6;background-image:none;padding-top:0;}
    .form-hint {font-family:smaller;}
    .full-screen-form {text-align:left;}
    .full-screen-form label {color:#727272;margin:30px 0 16px 26px;}
    .full-screen-form .input-group {overflow:hidden;}
    .full-screen-form .input-group div {overflow:hidden;padding:1px;}
    .full-screen-form input, .full-screen-form textarea {background-color:rgb(241,241,241);display:block;width:100%;height:90px;line-height:90px;padding:0 25px;border:1px solid #e7e7e7;border-radius:30px;}
    .full-screen-form textarea {line-height:40px;}
    .full-screen-form [type=text] {}
    .full-screen-form textarea {height:224px;}
    .full-screen-form button {background:url('/media/images/vote/bg-submit@3x.png') no-repeat center center;background-size:528px 90px;width:528px;height:90px;margin-top:20px;text-indent:-9999em;}
</style>

<div id=content>
    <div id=talk_into>
        <p>邀请好友到<?php echo SITE_NAME ?>各得50元优惠券</p>
        <a href="<?php echo base_url('article/invatition-reward-instructions') ?>">奖励规则</a>
        <p>马上邀请</p>
    </div>

    <ul id=invitation_forms class=horizontal>
        <li data-modal-trigger=via_wechat>
            微信好友
        </li>
        <li data-modal-trigger=via_wechat>
            朋友圈
        </li>
        <li data-modal-trigger=via_qrcode>
            二维码
        </li>
    </ul>
</div>

<div class=full-screen data-modal-name=via_wechat>
    <div class=full-screen-container>
        <div class=full-screen-close>
            <i class="far fa-times" aria-hidden=true></i>
        </div>

        <div class=full-screen-content>
            <h3 class=full-screen-title>推荐到微信好友/朋友圈</h3>
            <p>点击右上角菜单分享本页面即可</p>
        </div>
    </div>
</div>

<div class=full-screen data-modal-name=via_qrcode>
    <div class=full-screen-container>
        <div class=full-screen-close>
            <i class="far fa-times" aria-hidden=true></i>
        </div>

        <div class=full-screen-content>
            <figure class=qrcode data-qrcode-string="<?php echo $url ?>" style="padding:20px;">
                <figcaption><?php echo $url ?></figcaption>
            </figure>
        </div>
    </div>
</div>

<script>
    $(function(){
        // 与模态窗口绑定的元素时显示相应的模态窗口
        $('[data-modal-trigger]').click(function(){
            console.log(user_agent.is_wechat);
            if (user_agent.is_wechat)
            {
                var share_title = 'Hi，送你50元大礼包，首单1元起~';
                var share_slogan = '我发现了进来商城，品质棒服务好颜值高，还有优惠券可以拿，一起来看看吧！';
                var share_url = '<?php echo $url ?>';
                var share_figure = '<?php echo base_url('/media/icon120@3x.png') ?>';
                wx.ready(function(){
                    // 分享到朋友圈
                    wx.onMenuShareTimeline({
                        title: share_title, // 分享标题
                        link: share_url, // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
                        imgUrl: share_figure, // 分享图标
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
                        title: share_title, // 分享标题
                        desc: share_slogan, // 分享描述
                        link: share_url, // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
                        imgUrl: share_figure, // 分享图标
                        success: function () {
                            // 用户确认分享后执行的回调函数
                            alert('分享成功');
                        },
                        cancel: function () {
                            // 用户取消分享后执行的回调函数
                            alert('您未完成分享');
                        }
                    });
                });
            }
            
            var modal_to_show = $(this).attr('data-modal-trigger');
            //console.log(modal_to_show);
            $('[data-modal-name='+ modal_to_show +']').show();
        });

        // 关闭全屏
        $('.full-screen-close').click(function(){
            $(this).closest('.full-screen').hide();
        });
    });
</script>