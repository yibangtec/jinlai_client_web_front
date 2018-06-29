<style>
body {background:#eaeaea;}
 <?php
    /**
     * APP、微信中调用webview时配合URL按需显示相应部分
     * 此处以在APP中以WebView打开页面时不显示页面header部分为例
     */
    if ($this->user_agent['is_wechat'] || $this->user_agent['is_desktop']):
?>
 .tabcontent{padding-top:1rem}
<?php endif ?>
    .listtext{width:4.54rem;height:1.6rem;font-size:.26rem;color:#3e3a39}
    .ui-loader{display:none}
    .cube{position:relative;width:94.67%}
    .swiper-pagination2{position:absolute;text-align:center;bottom:-2px;width:100%;z-index:10}
    .swiper-pagination2 span{margin:0 5px}
    .swiper-container_fruit{width:100%;overflow:hidden;height:2.18rem}
    .usercenter{background-size:cover;height:3.5rem;background:url(<?php echo CDN_URL ?>media/account/mine/beijing@3x.png) no-repeat center left;border-bottom-left-radius:.35rem;border-bottom-right-radius:.35rem;overflow:hidden}
    #addressWrap{position: absolute;top: 100px;left: 0px;z-index: 999;visibility: hidden;height: 100%;}
    .mui-indexed-list{height: 100% !important;}
    .mui-bar {-webkit-box-shadow: none;box-shadow: none;height: 0px;}
    .mui-icon-back:before, .mui-icon-left-nav:before{content: '\e460';color: #000;}
    .mui-indexed-list-bar{width: 40px;background: #fff;}
    .mui-indexed-list-bar.active{background: #fff;}
    .mui-indexed-list-bar.active a{color: #007aff;}
    .mui-indexed-list-bar a{color:#007aff;}
    .mui-indexed-list-group{background: #fff;padding-top: 15px;padding-bottom: 15px;}
    .mui-table-view-divider:after,.mui-table-view-divider:before,.mui-table-view:before{height: 0;}
    .mui-indexed-list,.mui-indexed-list-search{border: none;}
    .mui-indexed-list-search{height: 28px;}
    /*添加class*/
    .module-indexed-box{padding-right: 50px;}
    #recentcitycur{height: 40px;overflow: hidden;}
    #recentcitycur span{margin-bottom: 30px;}
    .module-address{padding:0 15px;padding-right: 0;font-size: 16px;color: #656566;background: #fff;height: 50px;line-height: 50px;margin: 0;position: relative;}
    .module-address span{display: block;border: 1px solid #d9d9d9;border-radius: 4px;height: 40px;line-height: 40px;margin-top:5px ;padding: 0 13px;}
    .trading-area,.recent-area{padding: 10px 15px;}
    .trading-area li{float: left;color: #999999;background: #f5f5f5;border: 1px solid #f5f5f5;font-size: 16px;padding: 5px 8px;border-radius: 16px;margin: 10px 15px 10px 0;}
    .trading-area li.active{background: #fff;color: #000;border: 1px solid #ffd401;}
    .recent-area span{display: inline-block;padding: 8px 14px;color: #8b8b8c;border: 1px solid #dbdbdb;border-radius: 4px;width: 21%;margin-right: 3%;font-size: 16px;text-align: center;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;}
    /*.recent-area span:nth-child(3n){margin-right: 0;}*/
    .hot-area span{margin-top: 15px;margin-bottom: 15px;}
    .mui-bar-nav~.mui-content{padding-top: 0px;height: 100%;}
    .swiper-container-horizontal > .swiper-pagination{bottom: -.05rem;left: 0;width: 100%;}
    .shang{
    top: .24rem !important;
    transform: rotate(180deg);
    right: -.247rem !important;
    color: #999;
}
.xia{
    color: #999;
}
.shopindextextnav li i {
    position: absolute;
    top: .36rem;
    right: -.25rem;
}
.shopSearch{background: #f0f0f0;}
.shopSearch i{color: #000;}
.shopback i{color: #3a3839;margin-left: .2rem;}
.biz_dot {
    margin-top: .27rem;
    margin-left: .13rem;
    z-index: 9999999;
}
.biz_dot li {
    float: left;
    width: .08rem;
    background: #3c3c3c;
    height: .08rem;
    float: left;
    margin-left: .1rem;
    border-radius: .02rem;
}
.shopTitle {
    width: 100%;
    margin: 0 auto;
    float: left;
    /* margin-left: .2rem; */
    /* margin-bottom: .3rem; */
    /* margin-top: .15rem; */
   background: #fff;
   padding-top: .2rem;
}
.shopTitle input::-webkit-input-placeholder{color:red;}
</style>
<script>
    $(function(){
        var swiperadtisement = new Swiper('.swiper-containeradvertisement', {
        pagination: '.swiper-pagination2',
        paginationClickable: true,
        autoplay: 3000,
        loop: true,
        speed: 800,
        autoplayDisableOnInteraction: false,
        observer:true,
        observeParents:true
    });
    });
</script>
<!--tab切换content区域-->
<?php
    /**
     * APP、微信中调用webview时配合URL按需显示相应部分
     * 此处以在APP中以WebView打开页面时不显示页面header部分为例
     */
    if ($this->user_agent['is_wechat'] || $this->user_agent['is_desktop']):
?>
        <!--定位信息结束-->
        <div class="address">
            <div class="maptext">
                <span>崂山区</span>
                <i class="icon-xialajiantou"></i>
            </div>
            <!--搜索框区域-->
            <div class="searchtext">
                <img src="<?php echo CDN_URL ?>media/home/search.png">
            </div>
            <!--扫描区域-->
            <div class="wechatwrap">
                <span class="saoyisao">
                    <img src="<?php echo CDN_URL ?>media/home/saoyisao.png" id="wechat-scan">
                </span>
                <span class="kefu">
                    <img src="<?php echo CDN_URL ?>media/home/kefu.png">
                </span>
            </div>
        </div>
        
<?php endif ?>
 <div style="font-size: .12rem;" id="banben"></div>

<?php
    $menu_items_top = array(
        // 第一行
        array(
            'name' => '生鲜超市', // 导航项名称
            'url' => base_url('page/detail?id=2'), // 目标页面URL
            'icon_url' => CDN_URL.'media/home/shengxianchaoshi@3x.png', // 图标URL
        ),
        array(
            'name' => '地方特产',
            'url' => base_url('page/detail?id=9'),
            'icon_url' => CDN_URL.'media/home/jiaodongtechan@3x.png',
        ),
        array(
            'name' => '母婴用品',
            'url' => base_url('page/detail?id=10'),
            'icon_url' => CDN_URL.'media/home/muyingyongpin@3x.png',
        ),
        array(
            'name' => '科技数码',
            'url' => base_url('page/detail?id=11'),
            'icon_url' => CDN_URL.'media/home/kejishuma@3x.png',
        ),
        array(
            'name' => '居家生活',
            'url' => base_url('page/detail?id=12'),
            'icon_url' => CDN_URL.'media/home/jujiashenghuo@3x.png',
        ),

        // 第二行
        array(
            'name' => '休闲零食',
            'url' => base_url('page/detail?id=13'),
            'icon_url' => CDN_URL.'media/home/xiuxianlingshi@3x.png',
        ),
        array(
            'name' => '运动户外',
            'url' => base_url('page/detail?id=14'),
            'icon_url' => CDN_URL.'media/home/yundonghuwai@3x.png',
        ),
        array(
            'name' => '游戏动漫',
            'url' => base_url('page/detail?id=15'),
            'icon_url' => CDN_URL.'media/home/youxidongman@3x.png',
        ),
        array(
            'name' => '领券中心',
            'url' => base_url('coupon'),
            'icon_url' => CDN_URL.'media/home/lingquanzhongxin@3x.png',
        ),
        array(
            'name' => '我要入驻',
            'url' => base_url('article/biz-cooperation'),
            'icon_url' => CDN_URL.'media/home/woyaoruzhu@3x.png',
        ),

        // 第三行
        array(
            'name' => '学习教育',
            'url' => base_url('page/detail?id=4'),
            'icon_url' => CDN_URL.'media/home/xuexijiaoyu@3x.png',
        ),
        array(
            'name' => '休闲娱乐',
            'url' => base_url('page/detail?id=5'),
            'icon_url' => CDN_URL.'media/home/xiuxianyule@3x.png',
        ),
        array(
            'name' => '特色美食',
            'url' => base_url('page/detail?id=3'),
            'icon_url' => CDN_URL.'media/home/tesemeishi@3x.png',
        ),
        array(
            'name' => '运动健康',
            'url' => base_url('page/detail?id=4'),
            'icon_url' => CDN_URL.'media/home/yundognjiankang@3x.png',
        ),
        array(
            'name' => '时尚丽人',
            'url' => base_url('page/detail?id=5'),
            'icon_url' => CDN_URL.'media/home/shishangliren@3x.png',
        ),

        // 第四行
        array(
            'name' => '婚纱摄影',
            'url' => base_url(),
            'icon_url' => CDN_URL.'media/home/hunshasheying@3x.png',
        ),
        array(
            'name' => '宠物服务',
            'url' => base_url(),
            'icon_url' => CDN_URL.'media/home/chongwufuwu@3x.png',
        ),
        array(
            'name' => '旅游民宿',
            'url' => base_url(),
            'icon_url' => CDN_URL.'media/home/lvyouminsu@3x.png',
        ),
        array(
            'name' => '汽车管家',
            'url' => base_url(),
            'icon_url' => CDN_URL.'media/home/qicheguanjia@3x.png',
        ),
        array(
            'name' => '私人订制',
            'url' => base_url('page/detail?id=6'),
            'icon_url' => CDN_URL.'media/home/sirendingzhi@3x.png',
        ),
    );
?>
<script>
    $(function(){
        // 页面顶部导航栏
        var menu_items_top = <?php echo json_encode($menu_items_top) ?>;
        var menu_items_top_dom;
        // console.log(menu_items_top);
        $.each(
            menu_items_top,
            function(index, item){
                var item_dom = '<li>' +
                    '   <a href="'+ item.url +'" target=_self>' +
                    '       <div class=iconWrap>' +
                    '           <img data-src="'+ item.icon_url +'">' +
                    '       </div>' +
                    '       <span class=text>'+ item.name +'</span>' +
                        '</a>' +
                    '</li>' + "\n\n";
                menu_items_top_dom += item_dom;
            }
        );

        // TODO 动态赋值首页订
        //$('[data-name=menu_items_top]').append(menu_items_top_dom);
    });
</script>
        <div class="tabcontent" id="listMenu">
            <div class="item" style="display: block;">
                <!--菜单区域开始-->
                <div class="menuOuter">
                <div class="swiper-container" style="border-radius: 0;border-bottom-left-radius: .2rem;border-bottom-right-radius: .2rem;">
                <div class="swiper-wrapper">
                    <div class="menuWrap auto clearfix swiper-slide">
                    <ul data-name=menu_items_top class="clearfix">
                        <li>
                            <a href="<?php echo base_url('page/detail?id=2') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap">
                                    <img data-src="<?php echo CDN_URL ?>media/home/shengxianchaoshi@3x.png">
                                </div>
                                <!--文字-->
                                <span class="text">生鲜超市</span>
                            </a>
                        </li>
                        <li>
                             <a href="<?php echo base_url('page/detail?id=2') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap4">
                                    <img data-src="<?php echo CDN_URL ?>media/home/jiaodongtechan.png">
                                </div>
                                <!--文字-->
                                <span class="text">地方特产</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('page/detail?id=8') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap3">
                                    <img data-src="<?php echo CDN_URL ?>media/home/muyingyongpin.png">
                                </div>
                                <!--文字-->
                                <span class="text">母婴用品</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('page/detail?id=2') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap4">
                                    <img data-src="<?php echo CDN_URL ?>media/home/kejishuma.png">
                                </div>
                                <!--文字-->
                                <span class="text">科技数码</span>
                            </a>
                        </li>
                        <li style="margin-right:0">
                            <a href="<?php echo base_url('page/detail?id=11') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap5">
                                    <img data-src="<?php echo CDN_URL ?>media/home/jujiashenghuo.png">
                                </div>
                                <!--文字-->
                                <span class="text">居家生活</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('page/detail?id=12') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap">
                                    <img data-src="<?php echo CDN_URL ?>media/home/xiuxianlingshi.png">
                                </div>
                                <!--文字-->
                                <span class="text">休闲零食</span>
                            </a>
                        </li>
                        <li>
                             <a href="<?php echo base_url('page/detail?id=13') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap4">
                                    <img data-src="<?php echo CDN_URL ?>media/home/yundonghuwai.png">
                                </div>
                                <!--文字-->
                                <span class="text">运动户外</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('page/detail?id=2') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap3">
                                    <img data-src="<?php echo CDN_URL ?>media/home/youxidongman.png">
                                </div>
                                <!--文字-->
                                <span class="text">游戏动漫</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('coupon') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap4">
                                    <img data-src="<?php echo CDN_URL ?>media/home/lingquanzhongxin.png">
                                </div>
                                <!--文字-->
                                <span class="text">领券中心</span>
                            </a>
                        </li>
                        <li style="margin-right:0">
                            <a href="<?php echo base_url('article/biz-cooperation') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap5">
                                    <img data-src="<?php echo CDN_URL ?>media/home/woyaoruzhu.png">
                                </div>
                                <!--文字-->
                                <span class="text">我要入驻</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--第二屏幕-->
                        <div class="menuWrap auto clearfix swiper-slide">
                    <ul class="clearfix">
                        <li>
                            <a href="<?php echo base_url('page/detail?id=2') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap">
                                    <img data-src="<?php echo CDN_URL ?>media/home/xuexijiaoyu.png">
                                </div>
                                <!--文字-->
                                <span class="text">学习教育</span>
                            </a>
                        </li>
                        <li>
                             <a href="<?php echo base_url('page/detail?id=6') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap4">
                                    <img data-src="<?php echo CDN_URL ?>media/home/xiuxianyule.png">
                                </div>
                                <!--文字-->
                                <span class="text">休闲娱乐</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('page/detail?id=3') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap3">
                                    <img data-src="<?php echo CDN_URL ?>media/home/tesemeishi.png">
                                </div>
                                <!--文字-->
                                <span class="text">特色美食</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('page/detail?id=5') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap4">
                                    <img data-src="<?php echo CDN_URL ?>media/home/yundognjiankang@3x.png">
                                </div>
                                <!--文字-->
                                <span class="text">运动健康</span>
                            </a>
                        </li>
                        <li style="margin-right:0">
                            <a href="<?php echo base_url('page/detail?id=4') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap5">
                                    <img data-src="<?php echo CDN_URL ?>media/home/shishangliren@3x.png">
                                </div>
                                <!--文字-->
                                <span class="text">时尚丽人</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('page/detail?id=2') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap">
                                    <img data-src="<?php echo CDN_URL ?>media/home/hunshasheying.png">
                                </div>
                                <!--文字-->
                                <span class="text">婚纱摄影</span>
                            </a>
                        </li>
                        <li>
                             <a href="<?php echo base_url('page/detail?id=6') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap4">
                                    <img data-src="<?php echo CDN_URL ?>media/home/chongwufuwu.png">
                                </div>
                                <!--文字-->
                                <span class="text">宠物服务</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('page/detail?id=3') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap3">
                                    <img data-src="<?php echo CDN_URL ?>media/home/lvyouminsu.png">
                                </div>
                                <!--文字-->
                                <span class="text">旅游民宿</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('page/detail?id=5') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap4">
                                    <img data-src="<?php echo CDN_URL ?>media/home/qicheguanjia.png">
                                </div>
                                <!--文字-->
                                <span class="text">汽车管家</span>
                            </a>
                        </li>
                        <li style="margin-right:0">
                            <a href="<?php echo base_url('page/detail?id=4') ?>" target=_self>
                                <!--图标-->
                                <div class="iconWrap5">
                                    <img data-src="<?php echo CDN_URL ?>media/home/sirendingzhi.png">
                                </div>
                                <!--文字-->
                                <span class="text">私人订制</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
            </div>
            </div>

                <!--广告图区域-->
                <div class="menuOuter">
            <div class="swiper-containeradvertisement">
                <div class="swiper-wrapper">
                    <div class="addpic auto swiper-slide">
                        <a href="<?php echo base_url('biz/detail?id=32') ?>" target="_self">
                            <img src="<?php echo CDN_URL ?>media/home/banner@3x.png">
                        </a>
                    </div>
                        <!--<div class="addpic auto swiper-slide">
                            <a href="<?php echo base_url('biz/detail?id=20') ?>" target="_self">
                            <img src="<?php echo CDN_URL ?>media/home/banner2.png">
                            </a>
                        </div>-->
                        <div class="addpic auto swiper-slide">
                            <a href="<?php echo base_url('biz/detail?id=37') ?>" target="_self">
                                <img src="<?php echo CDN_URL ?>media/home/yhzx.jpg">
                            </a>
                        </div>
                        <div class="addpic auto swiper-slide">
                            <a href="<?php echo base_url('biz/detail?id=45') ?>" target="_self">
                                <img src="<?php echo CDN_URL ?>media/home/banner3.jpg">
                            </a>
                        </div>
                        <!--add-->
                        <div class="addpic auto swiper-slide">
                            <a href="<?php echo base_url('biz/detail?id=106') ?>" target="_self">
                                <img src="<?php echo CDN_URL ?>media/home/banner4.jpg">
                            </a>
                        </div>
                        <div class="addpic auto swiper-slide">
                            <a href="<?php echo base_url('biz/detail?id=124') ?>" target="_self">
                                <img src="<?php echo CDN_URL ?>media/home/xbmy.jpg">
                            </a>
                        </div>
                        <!--<div class="addpic auto swiper-slide">
                            <a href="<?php echo base_url('biz/detail?id=28') ?>" target="_self">
                            <img src="<?php echo CDN_URL ?>media/home/banner6.jpg">
                            </a>
                        </div>-->
                        <!--<div class="addpic auto swiper-slide">
                            <a href="<?php echo base_url('biz/detail?id=32') ?>" target="_self">
                            <img src="<?php echo CDN_URL ?>media/home/banner7.jpg">
                            </a>
                        </div>-->
                        <div class="addpic auto swiper-slide">
                            <a href="<?php echo base_url('biz/detail?id=36') ?>" target="_self">
                                <img src="<?php echo CDN_URL ?>media/home/banner2.png">
                            </a>
                        </div>
                </div>
                        <!-- Add Pagination -->
                    <div class="swiper-pagination2"></div>
                </div>

                <!--"进来说"区域开始-->
                <div class="announcement auto">
                    <!--左边图片区域-->
                    <a href="<?php echo base_url() ?>/application/views/article/article_broadcast.html">
                        <div class="pic">
                            <img src="<?php echo CDN_URL ?>media/home/title.png">
                        </div>
                    </a>
                    <div class="line"></div>
                    <!--右边文字部分-->
                    <div class="text" id="news">
                        <ul class="clearfix">
                            <li>
                                <a href="<?php echo base_url() ?>/application/views/article/article_broadcast.html">
                                    <span class="cir"></span><span class="listr">进来与精良为伍</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>/application/views/article/article_broadcast.html">
                                    <span class="cir"></span><span class="listr">本地生活严选平台</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>/application/views/article/article_broadcast.html">
                                    <span class="cir"></span>
                                    <span class="listr">进来与精良为伍</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>/application/views/article/article_broadcast.html">
                                    <span class="cir"></span>
                                    <span class="listr">本地生活严选平台</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>/application/views/article/article_broadcast.html">
                                    <span class="cir"></span>
                                    <span class="listr">进来与精良为伍</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>/application/views/article/article_broadcast.html">
                                    <span class="cir"></span>
                                    <span class="listr">本地生活严选平台</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--水果图片区域开始-->
                <div class="fruidWrap clearfix auto cube">
                    <div class="swiper-container_fruit">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide advercube">
                                <a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
                                    <img data-src="<?php echo CDN_URL ?>media/home/jianhuo@3x.jpg">
                                </a>
                            </div>
                            <div class="swiper-slide advercube">
                                <a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
                                    <img data-src="<?php echo CDN_URL ?>media/home/jianhuo_putao@3x.jpg">
                                </a>
                            </div>
                            <div class="swiper-slide advercube">
                                <a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
                                    <img data-src="<?php echo CDN_URL ?>media/home/yujia@3x.jpg">
                                </a>
                            </div>
                            <div class="swiper-slide advercube">
                                <a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
                                    <img data-src="<?php echo CDN_URL ?>media/home/jianhuo_mangguo@3x.jpg">
                                </a>
                            </div>
                            <div class="swiper-scrollbarcube"></div>
                        </div>
                    </div>
                </div>
                <!--商家爆品-->
                <div class="wid718 auto bgfff border20 exercise clearfix fl">
                    <div class="bgefefef">
                        <img src="<?php echo CDN_URL ?>media/home/shangjiabaopin/shangjiabaopin.png">
                    </div>
                </div>
                <div class="coloroverlay mt14 fl" style="margin-bottom: .1rem;">
                <div class="coloroverlaywrap">
                    <div class="zbottom zbottomaction pinkactionbp"></div>
                    <div class="zbottom zfirst zfirstaction pinkactionbp"></div>
                    <div class="zbottom zthree action">
                        Come in Recommend
                        <span class="r">爆品商家</span>
                    </div>
                </div>
                <div class="fr square" id="dzcpmore">
                    <img data-src="<?php echo CDN_URL ?>media/home/dzcplist.png" class="block auto" style="height:.42rem">
                </div>
            </div>
            <div class="coloroverlaycontent clearfix" style="margin-top:.14rem">
                <!--运动装备区域-->
                <div class="mid fl dzcpinfo">
                    <a href="<?php echo base_url('biz/detail?id=84') ?>" target="_self">
                        <div class="midright fr mt0">
                            <div class="bgefefef">
                            <img data-src="<?php echo CDN_URL ?>media/home/shangjiabaopin/nzg.jpg">
                            </div>
                            <h1>澳滋黑胡椒眼肉牛排40元</h1>
                        </div>
                    </a>
                    <a href="<?php echo base_url('biz/detail?id=45') ?>" target="_self">
                        <div class="midleft fl mt0">
                            <div class="bgefefef">
                            <img data-src="<?php echo CDN_URL ?>media/home/shangjiabaopin/sl.jpg">
                            </div>
                            <h1>皇家圣蓝天然矿泉水1500ml</h1>
                        </div>
                    </a>
                </div>
                </div>
                <div class="coloroverlaycontent clearfix dzcpinfo" style="margin-top:.10rem">
                <div class="mid fl">
                    <a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
                        <div class="midleft fr">
                            <img src="<?php echo CDN_URL ?>media/home/shangjiabaopin/gnb.jpg" class="success">
                            <h1>西班牙进口慕利酒园干红葡萄酒 纸袋装两支</h1>
                            <!--<h2>1309 我的MAC</h2>-->
                        </div>
                    </a>
                    <a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
                    <div class="midright fl">
                        <img src="<?php echo CDN_URL ?>media/home/shangjiabaopin/qt.jpg" class="success">
                        <h1>四川柠檬</h1>
                        <!--<h2>爱疯 爱疯 疯</h2>-->
                    </div>
                    </a>
                </div>
            </div>
            <!--电子产品点击list后显示的内容-->
            <div class="swiper-container7" style="border-radius: .2rem;display: none;" id="dzcplistInfo">
                   <div class="swiper-wrapper">
                    <div class="swiper-slide">
                     <div class="list-group-item">
                      <a href="<?php echo base_url('item/detail?id=4177') ?>">
                       <div class="list">
                        <img src="<?php echo CDN_URL ?>media/home/shangjiabaopin/sjbp/jbnrl.jpg" class="fl">
                        <div class="listtext fr">
                         <span class="area">0.9km</span>
                         <h1>君博牛肉粒 500g</h1>
                         <div class="star">
                          <ul>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                          </ul>
                         </div>
                         <div class="tag">
                          麦岛路沿线 肉类
                         </div>
                         <div class="allbuy">
                          <span class="tuan">团</span>
                          <span>100元</span>
                         </div>
                        </div>
                       </div>
                       </a>
                       <a href="<?php echo base_url('item/detail?id=4136') ?>">
                       <div class="list">
                        <img src="<?php echo CDN_URL ?>media/home/shangjiabaopin/sjbp/dfsc.jpg" class="fl">
                        <div class="listtext fr">
                         <span class="area">0.3km</span>
                         <h1>德发奶酪香肠</h1>
                         <div class="star">
                          <ul>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                          </ul>
                         </div>
                         <div class="tag">
                          麦岛路沿线 肉类
                         </div>
                         <div class="allbuy">
                          <span class="tuan">团</span>
                          <span>26元</span>
                         </div>
                        </div>
                       </div></a>
                       <a href="<?php echo base_url('item/detail?id=4141') ?>">
                      <div class="list">
                       <img src="<?php echo CDN_URL ?>media/home/shangjiabaopin/sjbp/yxy.jpg" class="fl">
                       <div class="listtext fr">
                        <span class="area">0.3km</span>
                        <h1>银鳕鱼</h1>
                        <div class="star">
                         <ul>
                          <li><i class="icon-weixuanzhong2"></i></li>
                          <li><i class="icon-weixuanzhong2"></i></li>
                          <li><i class="icon-weixuanzhong2"></i></li>
                          <li><i class="icon-weixuanzhong2"></i></li>
                          <li><i class="icon-weixuanzhong2"></i></li>
                         </ul>
                        </div>
                        <div class="tag">
                         麦岛路沿线 鱼类
                        </div>
                        <div class="allbuy">
                         <span class="tuan">团</span>
                         <span>99元</span>
                        </div>
                       </div>
                      </div>
                      </a>
                         <a href="<?php echo base_url('item/detail?id=4138') ?>">
                       <div class="list">
                        <img src="<?php echo CDN_URL ?>media/home/shangjiabaopin/sjbp/bjtx.jpg" class="fl" />
                        <div class="listtext fr">
                         <span class="area">2.3km</span>
                         <h1>北极甜虾 30尾</h1>
                         <div class="star">
                          <ul>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                          </ul>
                         </div>
                         <div class="tag">
                          麦岛路沿线 虾类
                         </div>
                         <div class="allbuy">
                          <span class="tuan">团</span>
                          <span>26.80元</span>
                         </div>
                        </div>
                       </div></a>
                     </div>
                    </div>
                   </div>
                  </div>
                <div class="botWrap auto wid718 border20 mt10 clearfix">
                    <div class="dotcontent clearfix bgfff border20">
                        <ul>
                            <a href="<?php echo base_url('item/detail?id=4177') ?>" target="_self">
                            <li>
                                <img src="<?php echo CDN_URL ?>media/home/shangjiabaopin/sjbp/jbnrl.jpg" class="auto block">
                                <h1>君博牛肉粒 500g</h1>
                                <h2>¥100.00</h2>
                            </li>
                            </a>
                            <a href="<?php echo base_url('item/detail?id=4136') ?>" target="_self">
                            <li>
                                <img src="<?php echo CDN_URL ?>media/home/shangjiabaopin/sjbp/dfsc.jpg" class="auto block">
                                <h1>德发奶酪香肠</h1>
                                <h2>¥26.00</h2>
                            </li>
                            </a>
                            <a href="<?php echo base_url('item/detail?id=4141') ?>" target="_self">
                            <li>
                                <img src="<?php echo CDN_URL ?>media/home/shangjiabaopin/sjbp/yxy.jpg" class="auto block">
                                <h1>银鳕鱼</h1>
                                <h2>¥99.00</h2>
                            </li>
                            </a>
                            <a href="<?php echo base_url('item/detail?id=4138') ?>" target="_self">
                            <li>
                                <img src="<?php echo CDN_URL ?>media/home/shangjiabaopin/sjbp/bjtx.jpg" class="auto block">
                                <h1>北极甜虾 30尾</h1>
                                <h2>¥26.80</h2>
                            </li>
                            </a>
                        </ul>
                    </div>
                </div>
                <!--新品上新图片-->
                <div class="newgoodspic auto">
                    <img data-src="<?php echo CDN_URL ?>media/home/xinpinshangxin/xinpinshangxin@3x.png">
                </div>
                <!--新品上新商品区域开始-->
                <div class="newgoodslist auto clearfix">
                    <div class="twocol clearfix">
                        <div class="goodsleft">
                            <ul class="clearfix">
                                <li>
                                    <a href="<?php echo base_url('item/detail?id=4179') ?>" target="_self">
                                    <div class="pic">
                                        <img data-src="<?php echo CDN_URL ?>media/home/xinpinshangxin/xpsx156/156x156.jpg">
                                    </div>
                                    </a>
                                    <p>君博黑牛脖骨</p>
                                    <span>¥60.00</span>
                                </li>
                                <li style="margin-left: .3rem;">
                                    <a href="<?php echo base_url('item/detail?id=4178') ?>" target="_self">
                                    <div class="pic">
                                        <img data-src="<?php echo CDN_URL ?>media/home/xinpinshangxin/xpsx156/156x156_1.jpg">
                                    </div>
                                        </a>
                                    <p>君博黑牛牛尾</p>
                                    <span>¥140.00</span>
                                </li>
                            </ul>
                        </div>
                        <div class="goodsleft" style="margin-left:.1rem">
                            <ul class="clearfix">
                                <li>
                                    <a href="<?php echo base_url('item/detail?id=4174') ?>" target="_self">
                                    <div class="pic">
                                        <img data-src="<?php echo CDN_URL ?>media/home/xinpinshangxin/xpsx156/156x156_2.jpg">
                                    </div>
                                    </a>
                                    <p>君博黑牛原切眼肉牛排眼肉</p>
                                    <span>¥400.00</span>
                                </li>
                                <li style="margin-left:.3rem;">
                                    <a href="<?php echo base_url('item/detail?id=4051') ?>" target="_self">
                                    <div class="pic">
                                        <img data-src="<?php echo CDN_URL ?>media/home/xinpinshangxin/xpsx156/156x156_3.jpg">
                                    </div>
                                    </a>
                                    <p>特级五花肉块</p>
                                    <span>¥25.00</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="threecol">
                        <ul>
                            <li>
                                <a href="<?php echo base_url('item/detail?id=3870') ?>" target="_self">
                                <div class="pic">
                                    <img data-src="<?php echo CDN_URL ?>media/home/xinpinshangxin/xpsx160/160x160_0.jpg">
                                </div>
                                </a>
                                <p>特级猪外脊切片</p>
                                <span>¥21.80</span>
                            </li>
                            <li>
                                <a href="<?php echo base_url('item/detail?id=3971') ?>" target="_self">
                                <div class="pic">
                                    <img data-src="<?php echo CDN_URL ?>media/home/xinpinshangxin/xpsx160/160x160_1.jpg">
                                </div>
                                </a>
                                <p>特级猪五花肉片</p>
                                <span>¥19.90</span>
                            </li>
                            <li style="margin-right:0">
                                <a href="<?php echo base_url('item/detail?id=4054') ?>" target="_self">
                                <div class="pic">
                                    <img data-src="<?php echo CDN_URL ?>media/home/xinpinshangxin/xpsx160/160x160_2.jpg">
                                </div>
                                </a>
                                <p>优质猪前排</p>
                                <span>¥48.80</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--在线拼团区域开始-->
                <div class="onlinegroup clearfix">
                    <div class="newgoodspic auto">
                        <img data-src="<?php echo CDN_URL ?>media/home/zaixianpintuan/zaixianpintuan@3x.png">
                    </div>
                    <!--在线拼团商品详情区域-->
                    <div class="onlinegroupcontent wid718 auto mt10">
                        <div class="onlinegoodsleft">
                            <!--倒计时区域-->
                            <div class="time clearfix">
                                <!--<div id="timer1" end-date="2019-1-1"></div>-->
                                <div id="timer2" class="clearfix" end-date="2018/12/16 00:5:2"></div>
                                <p>倒计时</p>
                            </div>
                            <a href="<?php echo base_url('item/detail?id=4097') ?>" target="_self">
                            <div class="pic">
                                <img data-src="<?php echo CDN_URL ?>media/home/zaixianpintuan/240x240.jpg">
                            </div>
                            </a>
                            <h1>进口绿果</h1>
                            <h2>3个/份</h2>
                            <p>
                                <span class="fl"><del>¥21.8</del></span>
                                <span class="fr">¥19.8</span>
                            </p>
                        </div>
                        <div class="onlinegoodsright fr">
                            <div class="onlinegoodstop">
                                <ul>
                                    <li>
                                        <a href="<?php echo base_url('item/detail?id=4005') ?>" target="_self">
                                        <div class="pic">
                                            <img data-src="<?php echo CDN_URL ?>media/home/zaixianpintuan/lm.jpg">
                                        </div>
                                        </a>
                                        <h1>蓝莓 125g/盒</h1>
                                        <h2>¥25.8/盒</h2>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('item/detail?id=3872') ?>" target="_self">
                                        <div class="pic">
                                            <img data-src="<?php echo CDN_URL ?>media/home/zaixianpintuan/pg.jpg">
                                        </div>
                                        </a>
                                        <h1>墨西哥牛油果</h1>
                                        <h2>¥15.80/个</h2>
                                    </li>
                                </ul>
                            </div>
                            <div class="onlinegoodstop" style="margin-top:.1rem">
                                <ul>
                                    <li>
                                        <a href="<?php echo base_url('item/detail?id=4007') ?>" target="_self">
                                        <div class="pic">
                                            <img data-src="<?php echo CDN_URL ?>media/home/zaixianpintuan/tg.jpg">
                                        </div>
                                        </a>
                                        <h1>青岛蜜宝甜瓜</h1>
                                        <h2>¥15.80/份</h2>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('item/detail?id=3956') ?>" target="_self">
                                        <div class="pic">
                                            <img data-src="<?php echo CDN_URL ?>media/home/zaixianpintuan/jz.jpg">
                                        </div>
                                        </a>
                                        <h1>四川丑桔（丑八怪）900-1000g/份</h1>
                                        <h2>¥19.80/份</h2>
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--商家搜罗-->
                <div class="onlinegroup clearfix">
                    <div class="newgoodspic auto">
                        <img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/shangjiasouluo@3x.png">
                    </div>
            </div>
            <!--颜色叠加公用部分-->
            <div class="coloroverlay">
                <div class="coloroverlaywrap activecoverplay" id="activecoverplay">
                    <div class="zbottom" data-title="junbo">
                        <b>君博</b>
                        <a style="display: none;">JunBo</a>
                        <i style="display: none;">时尚</i>
                        
                    </div>
                    <div class="zbottom zfirst" data-title="defa" style="left:.94rem">
                        <b>澳滋</b>
                        <a style="display: none;">AoZi</a>
                        <i style="display: none;">丽人</i>
                        
                    </div>
                    <div class="zbottom zthree" data-title="yuge">
                        <b>鱼哥</b>
                        <a style="display: none;">YuGe</a>
                        <span class="r">鱼哥</span>
                        <i style="display: none;">鱼哥</i>
                        
                    </div>
                    <!--<div class="zbottom zthree coverCur">
                        <b>美食</b>
                        <a style="display: none;">Delatious</a>
                        <span class="r">美食</span>
                        <i style="display: none;">美食</i>
                    </div>-->
                    
                </div>
                <div class="fr squarecube" id="more">
                    <img src="<?php echo CDN_URL ?>media/home/list.png" class="block auto">
                </div>
            </div>
            <!--颜色叠加区域内容-->
            <div class="coloroverlaycontent clearfix" id="morelist">
                <!--时尚内容-->
                <div class="colorovertab clearfix" style="display:block" data-title="junbo">
                <div class="left fl refreshcontent">
                    <a href="<?php echo base_url('biz/detail?id=130') ?>" target="_self">
                        <div class="bgefefef">
                        <img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/top1.png">
                        </div>
                        <h1>牛眼肉新贵都 52.8元</h1>
                    </a>
                </div>
                <div class="right fr refreshcontent">
                    <a href="<?php echo base_url('biz/detail?id=116') ?>" target="_self">
                        <div class="bgefefef">
                        <img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/top2.png">
                        </div>
                        <h1>牛筋头巴脑 君博120元</h1>
                    </a>
                </div>
                <div class="mid fl" style="margin-top:.1rem !important">
                    <div class="midleft refreshcontent">
                        <a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
                            <img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/jphnp.png">
                            <h1>精肉黑牛扒 130元</h1>
                            <!--<h2>面包也可以带有亲情</h2>-->
                        </a>
                    </div>
                    <div class="midright fr refreshcontent">
                        <a href="<?php echo base_url('biz/detail?id=116') ?>" target="_self">
                            <img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/xl.png">
                            <h1>西冷150g</h1>
                            <!--<h2>甜品也可以甜而不腻</h2>-->
                        </a>
                    </div>
                </div>
                </div>
                <!--丽人内容-->
                <div class="colorovertab clearfix" data-title="aozi">
                <div class="left fl refreshcontent">
                    <a href="<?php echo base_url('biz/detail?id=45') ?>" target="_self">
                        <div class="bgefefef">
                        <img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/zcc.png">
                        </div>
                        <h1>澳滋黑胡椒牛肉肠 24元</h1>
                    </a>
                </div>
                <div class="right fr refreshcontent">
                    <a href="<?php echo base_url('biz/detail?id=45') ?>" target="_self">
                        <div class="bgefefef">
                        <img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/nl.png">
                        </div>
                        <h1>澳滋黑胡椒西冷牛排 26元</h1>
                    </a>
                </div>
                <div class="fl" style="margin-top:.1rem">
                    <div class="midleft refreshcontent">
                        <a href="<?php echo base_url('biz/detail?id=45') ?>" target="_self">
                            <div class="bgefefef">
                            <img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/pp.png">
                            </div>
                            <h1>澳滋黑胡椒眼肉牛排 22.8元</h1>
                            <!--<h2>面包也可以带有亲情面包也可以带有亲情面包也可以带有亲情</h2>-->
                        </a>
                    </div>
                    <div class="midright fr refreshcontent" style="margin-left: .1rem;">
                        <a href="<?php echo base_url('biz/detail?id=45') ?>" target="_self">
                            <div class="bgefefef">
                            <img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/xnr.png">
                            </div>
                            <h1>澳滋快熟早餐牛肉饼 26元</h1>
                            <!--<h2>面包也可以带有亲情面包也可以带有亲情面包也可以带有亲情</h2>-->
                        </a>
                    </div>
                </div>
                </div>
                <!--娱乐内容-->
                <div class="colorovertab clearfix" data-title="yuge">
                <div class="left fl refreshcontent">
                    <a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
                        <div class="bgefefef">
                        <img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/yz.png">
                            </div>
                        <h1>生吃瑶柱 48元</h1>
                    </a>
                </div>
                <div class="right fr refreshcontent">
                    <a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
                        <div class="bgefefef">
                        <img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/hwx.png">
                            </div>
                        <h1>红虾尾198元</h1>
                    </a>
                </div>
                <div class="fl" style="margin-top:.1rem">
                    <div class="midleft refreshcontent">
                        <a href="<?php echo base_url('biz/detail?id=1') ?>">
                            <div class="bgefefef">
                            <img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/dzbg.png">
                                </div>
                            <h1>带籽比管 55元</h1>
                            <!--<h2>面包也可以带有亲情面包也可以带有亲情面包也可以带有亲情</h2>-->
                        </a>
                    </div>
                    <div class="midright fr refreshcontent" style="margin-left: .1rem;">
                        <a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
                            <div class="bgefefef">
                            <img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/dyp.png">
                                </div>
                            <h1>鲽鱼片45</h1>
                            <!--<h2>面包也可以带有亲情面包也可以带有亲情面包也可以带有亲情</h2>-->
                        </a>
                    </div>
                </div>
                </div>
                <div class="botWrap auto wid718 border20 fl mt10 clearfix">
                    <div class="dotcontent clearfix bgfff border20">
                        <ul>
                            <a href="<?php echo base_url('item/detail?id=574') ?>" target="_self">
                            <li>
                                <img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_0.jpg" class="auto block">
                                <h1>澳滋牛尾</h1>
                                <h2>¥312.00</h2>
                            </li>
                            </a>
                            <li>
                                <a href="<?php echo base_url('item/detail?id=3839') ?>" target="_self">
                                    <img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_1.jpg" class="auto block">
                                    <h1>精品超新鲜带鱼 500-550g/份（约2-4条）</h1>
                                    <h2>¥38.00</h2>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('item/detail?id=3927') ?>" target="_self">
                                    <img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_2.jpg" class="auto block">
                                    <h1>特级猪腱子肉   500g/份</h1>
                                    <h2>¥22.80</h2>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('item/detail?id=357') ?>" target="_self">
                                    <img data-src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_3.jpg" class="auto block">
                                    <h1>三文鱼</h1>
                                    <h2>¥98.00</h2>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--农产品预售-->
                <div class="wid718 auto bgfff border20 exercise clearfix fl">
                    <div class="bgefefef">
                    <img src="<?php echo CDN_URL ?>media/home/nongchanpin/nongchanpin@3x.png">
                    </div>
                </div>
                <div class="coloroverlay fl" style="margin-bottom: .1rem;">
                <div class="coloroverlaywrap">
                    <div class="zbottom zbottomaction pinkaction">
                    </div>
                    <div class="zbottom zfirst zfirstaction zfirstpinkaction">
                    </div>
                    
                    <div class="zbottom zthree action">
                        Come in Recommend
                        <span class="r">绿色精选</span>
                    </div>
                    
                </div>
                <div class="fr square" id="lsjx">
                    <img data-src="<?php echo CDN_URL ?>media/home/dzcplist.png" class="block auto" style="height:.42rem">
                </div>
            </div>
            <div class="coloroverlaycontent clearfix" style="margin-top:.14rem">
                <!--运动装备区域-->
                <div class="mid fl  lsjxinfo">
                    <a href="<?php echo base_url('biz/detail?id=53') ?>" target="_self">
                    <div class="midright fr mt0">
                        <div class="bgefefef">
                        <img data-src="<?php echo CDN_URL ?>media/home/nongchanpin/djf.png">
                        </div>
                        <h1>大金发野猪肉排骨1kg 188元</h1>
                    </div>
                    </a>
                    <a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
                    <div class="midleft fl mt0">
                        <div class="bgefefef">
                        <img data-src="<?php echo CDN_URL ?>media/home/nongchanpin/sy.png">
                        </div>
                        <h1>黑美人西瓜切盒</h1>
                    </div>
                    </a>
                    
                </div>
                </div>
                <div class="coloroverlaycontent clearfix lsjxinfo" style="margin-top:.10rem">
                <div class="mid fl">
                    <a href="<?php echo base_url('biz/detail?id=46') ?>" target="_self">
                    <div class="midleft fr">
                        <img src="<?php echo CDN_URL ?>media/home/nongchanpin/mmltx.jpg" class="success">
                        <h1>麻麻辣天下 麻辣天下麻辣基尾虾</h1>
                        <!--<h2>1309 我的MAC</h2>-->
                    </div>
                    </a>
                    <a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
                    <div class="midright fl">
                        <img src="<?php echo CDN_URL ?>media/home/nongchanpin/stm.jpg" class="success">
                        <h1>硕泰米</h1>
                        <!--<h2>爱疯 爱疯 疯</h2>-->
                    </div>
                    </a>
                </div>
            </div>
            <!--电子产品点击list后显示的内容-->
            <div class="swiper-container7" style="margin-top:.1rem;border-radius: .2rem;display: none;" id="lsjxinfo">
                   <div class="swiper-wrapper">
                    <div class="swiper-slide">
                     <div class="list-group-item">
                      <a href="<?php echo base_url('item/detail?id=3913') ?>">
                       <div class="list">
                        <img src="<?php echo CDN_URL ?>media/home/nongchanpin/yth.jpg" class="fl">
                        <div class="listtext fr">
                         <span class="area">0.3km</span>
                         <h1>野茼蒿</h1>
                         <div class="star">
                          <ul>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                          </ul>
                         </div>
                         <div class="tag">
                          麦岛路沿线 蔬菜类
                         </div>
                         <div class="allbuy">
                          <span class="tuan">团</span>
                          <span>15.80元</span>
                         </div>
                        </div>
                       </div>
                       </a>
                         <a href="<?php echo base_url('item/detail?id=4030') ?>">
                       <div class="list">
                        <img src="<?php echo CDN_URL ?>media/home/nongchanpin/lysqz.jpg" class="fl">
                        <div class="listtext fr">
                         <span class="area">3.3km</span>
                         <h1>临沂山茄子</h1>
                         <div class="star">
                          <ul>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                          </ul>
                         </div>
                         <div class="tag">
                          麦岛路沿线 蔬菜类
                         </div>
                         <div class="allbuy">
                          <span class="tuan">团</span>
                          <span>9.80元</span>
                         </div>
                        </div>
                       </div></a>
                         <a href="<?php echo base_url('item/detail?id=4048') ?>">
                       <div class="list">
                        <img src="<?php echo CDN_URL ?>media/home/nongchanpin/njzysc.jpg" class="fl">
                        <div class="listtext fr">
                         <span class="area">9.3km</span>
                         <h1>农家紫叶生菜</h1>
                         <div class="star">
                          <ul>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                          </ul>
                         </div>
                         <div class="tag">
                          麦岛路沿线 蔬菜类
                         </div>
                         <div class="allbuy">
                          <span class="tuan">团</span>
                          <span>15.80元 </span>
                         </div>
                        </div>
                       </div>
                       </a>
                         <a href="<?php echo base_url('item/detail?id=4037') ?>">
                       <div class="list">
                        <img src="<?php echo CDN_URL ?>media/home/nongchanpin/sgcj.jpg" class="fl">
                        <div class="listtext fr">
                         <span class="area">0.3km</span>
                         <h1>寿光彩椒</h1>
                         <div class="star">
                          <ul>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                          </ul>
                         </div>
                         <div class="tag">
                          麦岛路沿线 蔬菜类
                         </div>
                         <div class="allbuy">
                          <span class="tuan">团</span>
                          <span>99元</span>
                         </div>
                        </div>
                       </div></a>
                     </div>
                    </div>
                   </div>
                  </div>
                <div class="botWrap auto wid718 border20 mt10 clearfix">
                    <div class="dotcontent clearfix bgfff border20">
                        <ul>
                            <a href="<?php echo base_url('item/detail?id=3913') ?>" target="_self">
                            <li>
                                <img src="<?php echo CDN_URL ?>media/home/nongchanpin/yth.jpg" class="auto block">
                                <h1>野茼蒿</h1>
                                <h2>¥15.8</h2>
                            </li>
                            </a>
                            <a href="<?php echo base_url('item/detail?id=4030') ?>" target="_self">
                            <li>
                                <img src="<?php echo CDN_URL ?>media/home/nongchanpin/lysqz.jpg" class="auto block">
                                <h1>临沂山茄子</h1>
                                <h2>¥9.80</h2>
                            </li>
                            </a>
                            <a href="<?php echo base_url('item/detail?id=4048') ?>" target="_self">
                            <li>
                                <img src="<?php echo CDN_URL ?>media/home/nongchanpin/njzysc.jpg" class="auto block">
                                <h1>农家紫叶生菜</h1>
                                <h2>¥15.80</h2>
                            </li>
                            </a>
                            <a href="<?php echo base_url('item/detail?id=4037') ?>" target="_self">
                            <li>
                                <img src="<?php echo CDN_URL ?>media/home/nongchanpin/sgcj.jpg" class="auto block">
                                <h1>寿光彩椒</h1>
                                <h2>¥16.00</h2>
                            </li>
                            </a>
                        </ul>
                    </div>
                </div>
                <!--运动健康区域-->
                <div class="wid718 auto bgfff border20 exercise fl">
                    <img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/yundongjiankang@3x.png">
                </div>
                <div class="coloroverlay mt14 fl">
                <div class="coloroverlaywrap">
                    <div class="zbottom zbottomaction">
                    </div>
                    <div class="zbottom zfirst zfirstaction">
                    </div>
                    
                    <div class="zbottom zthree action">
                        Come in Recommend
                        <span class="r">满减心跳</span>
                    </div>
                    
                </div>
                <div class="fr square" id="ydjkmore">
                    <img data-src="<?php echo CDN_URL ?>media/home/ydjklist.png" class="block auto">
                </div>
            </div>
                <div class="coloroverlaycontent clearfix fl ydjkinfo">
                
                <!--运动装备区域-->
                <div class="mid fl">
                    <a href="<?php echo base_url('biz/detail?id=33') ?>" target="_self">
                    <div class="midleft fr mt0">
                        <div class="bgefefef">
                        <img src="<?php echo CDN_URL ?>media/home/yundongjiankang/left.png">
                        </a>
                        </div>
                        <h1>青岛涵碧楼两天一夜</h1>
                    </div>
                    </a>
                    <a href="<?php echo base_url('item/detail?id=4185') ?>" target="_self">
                    <div class="midright fl mt0">
                        <div class="bgefefef">
                        <img src="<?php echo CDN_URL ?>media/home/yundongjiankang/right.png">
                        </div>
                        <h1>苹果X 【预售3-5天送达】Apple iPhone X  256GB 银色</h1>
                    </div>
                    </a>
                </div>
                </div>
                
            </div>
            <!--进来推荐区域内容-->
            <div class="coloroverlaycontent clearfix" style="margin-top:.1rem">
                <div class="mid fl ydjkinfo">
                    <div class="midleft fl">
                        <div class="bgefefef">
                            <a href="<?php echo base_url('item/detail?id=4278') ?>" target="_self">
                        <img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/hcssjbig.png">
                            </a>
                        </div>
                        <h1>【预售3-5天送达】荣耀 V9 全网通 高配版 6GB+64GB 铂光金 双卡双待</h1>
                        <!--<h2>DIOS精准标靶装备</h2>-->
                    </div>
                    <div class="midright fr">
                        <div class="bgefefef">
                            <a href="<?php echo base_url('biz/detail?id=13') ?>" target="_self">
                        <img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/hcssjsmall.png">
                            </a>
                        </div>
                        <h1>海信电视55寸4K</h1>
                        <!--<h2>极限运动装备</h2>-->
                    </div>
                </div>
                
                <!--运动健康列表内容区域-->
                <div class="swiper-container7" style="margin-top:.1rem;border-radius: .2rem;display: none;" id="ydjklistInfo">
                   <div class="swiper-wrapper">
                    <div class="swiper-slide">
                     <div class="list-group-item">
                      <a href="<?php echo base_url('item/detail?id=4274') ?>">
                       <div class="list">
                        <img src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_0.jpg" class="fl">
                        <div class="listtext fr">
                         <span class="area">0.9km</span>
                         <h1>【预售3-5天送达】Apple iPhoneX  256GB 银色</h1>
                         <div class="star">
                          <ul>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                          </ul>
                         </div>
                         <div class="tag">
                          香港中路沿线 电器类
                         </div>
                         <div class="allbuy">
                          <span class="tuan">团</span>
                          <span>1488.00元</span>
                         </div>
                        </div>
                       </div></a>
                         <a href="<?php echo base_url('item/detail?id=3937') ?>">
                       <div class="list">
                        <img src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_1.jpg" class="fl">
                        <div class="listtext fr">
                         <span class="area">0.1km</span>
                         <h1>龙泉青瓷冰裂纹挂盘</h1>
                         <div class="star">
                          <ul>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                          </ul>
                         </div>
                         <div class="tag">
                          闽江路沿线 家居 
                         </div>
                         <div class="allbuy">
                          <span class="tuan">团</span>
                          <span>3080.00元</span>
                         </div>
                        </div>
                       </div></a>
                         <a href="<?php echo base_url('item/detail?id=4057') ?>">
                       <div class="list">
                        <img src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_2.jpg" class="fl">
                        <div class="listtext fr">
                         <span class="area">0.4km</span>
                         <h1>日本资生堂秀场造型质感发蜡（自然型白）</h1>
                         <div class="star">
                          <ul>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                          </ul>
                         </div>
                         <div class="tag">
                          长江路沿线 家居
                         </div>
                         <div class="allbuy">
                          <span class="tuan">团</span>
                          <span>158.00元</span>
                         </div>
                        </div>
                       </div></a>
                         <a href="<?php echo base_url('item/detail?id=4244') ?>">
                       <div class="list">
                        <img src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_3.jpg" class="fl">
                        <div class="listtext fr">
                         <span class="area">0.3km</span>
                         <h1>【预售5-7天送达】Yale 耶鲁指纹锁智能锁密码锁刷卡感应防盗门家用锁ZEN-R</h1>
                         <div class="star">
                          <ul>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                          </ul>
                         </div>
                         <div class="tag">
                          麦岛路沿线 家居
                         </div>
                         <div class="allbuy">
                          <span class="tuan">团</span>
                          <span>3300。00元</span>
                         </div>
                        </div>
                       </div></a>
                     </div>
                    </div>
                   </div>
                  </div>
                <div class="botWrap auto wid718 border20 fl mt10 clearfix">
                    <div class="dotcontent clearfix bgfff border20">
                        <ul>
                            <li>
                                <a href="<?php echo base_url('item/detail?id=4274') ?>" target="_self">
                                    <img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_0.jpg" class="auto block">
                                    <h1>【预售3-5天送达】Apple iPhoneX  256GB 银色</h1>
                                    <h2>¥1488.00</h2>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('item/detail?id=3937') ?>" target="_self">
                                    <img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_1.jpg" class="auto block">
                                    <h1>龙泉青瓷冰裂纹挂盘</h1>
                                    <h2>¥3080.00</h2>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('item/detail?id=4057') ?>" target="_self">
                                    <img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_2.jpg" class="auto block">
                                    <h1>日本资生堂秀场造型质感发蜡（自然型白）</h1>
                                    <h2>¥158.00</h2>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('item/detail?id=4244') ?>" target="_self">
                                    <img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_3.jpg" class="auto block">
                                    <h1>【预售5-7天送达】Yale 耶鲁指纹锁智能锁密码锁刷卡感应防盗门家用锁ZEN-R</h1>
                                    <h2>¥3300.00</h2>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
                <!--电子产品-->
                <div class="wid718 auto bgfff border20 exercise clearfix">
                    <div class="bgefefef">
                        <img src="<?php echo CDN_URL ?>media/home/dianzichanpin/dianzichanpin@3x.png">
                    </div>
                </div>
                <div class="coloroverlay mt14">
                    <div class="coloroverlaywrap">
                        <div class="zbottom zbottomaction pinkactionzk">
                        </div>
                        <div class="zbottom zfirst zfirstaction pinkactionzk">
                        </div>
                        
                        <div class="zbottom zthree action">
                            Come in Recommend
                            <span class="r">攻心折扣</span>
                        </div>
                    </div>
                    <div class="fr square" id="gxzkmore">
                        <img data-src="<?php echo CDN_URL ?>media/home/gxzklist.png" class="block auto" style="height:.42rem">
                    </div>
                </div>
            <div class="coloroverlaycontent clearfix gxzkinfo" style="margin-top:.14rem">
                <!--运动装备区域-->
                <div class="mid fl">
                    <a href="<?php echo base_url('biz/detail?id=46') ?>" target="_self">
                    <div class="midright fr mt0">
                        <div class="bgefefef">
                        <img data-src="<?php echo CDN_URL ?>media/home/dianzichanpin/left.png">
                        </div>
                        <h1>麻辣蟹钳 29元</h1>
                    </div>
                    </a>
                    <a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
                    <div class="midleft fl mt0">
                        <div class="bgefefef">
                        <img data-src="<?php echo CDN_URL ?>media/home/dianzichanpin/right.png">
                        </div>
                        <h1>德发早餐培根切片</h1>
                    </div>
                    </a>
                </div>
                </div>
                <div class="coloroverlaycontent clearfix gxzkinfo" style="margin-top:.10rem">
                <div class="mid fl">
                    <a href="<?php echo base_url('biz/detail?id=45') ?>" target="_self">
                    <div class="midleft fr">
                        <img src="<?php echo CDN_URL ?>media/home/dianzichanpin/410x150.jpg" class="success">
                        <h1>圣蓝一箱 皇家圣蓝天然矿泉水330ml*36瓶/箱 388元</h1>
                        <!--<h2>1309 我的MAC</h2>-->
                    </div>
                    </a>
                    <a href="<?php echo base_url('biz/detail?id=1') ?>" target="_self">
                    <div class="midright fl">
                        <img src="<?php echo CDN_URL ?>media/home/dianzichanpin/260x150.jpg" class="success">
                        <h1>鱼哥红金枪 50元</h1>
                        <!--<h2>爱疯 爱疯 疯</h2>-->
                    </div>
                    </a>
                </div>
            </div>
            <!--电子产品点击list后显示的内容-->
            <div class="swiper-container7" style="margin-top:.1rem;border-radius:.2rem;display:none;" id="gxzkinfo">
                   <div class="swiper-wrapper">
                    <div class="swiper-slide">
                     <div class="list-group-item">
                      <a href="<?php echo base_url('item/detail?id=4202') ?>">
                       <div class="list">
                        <img src="<?php echo CDN_URL ?>media/home/dianzichanpin/dzcp/160x160_0.jpg" class="fl">
                        <div class="listtext fr">
                         <span class="area">0.3km</span>
                         <h1>精选薏米</h1>
                         <div class="star">
                          <ul>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                          </ul>
                         </div>
                         <div class="tag">
                          麦岛路沿线 粮食
                         </div>
                         <div class="allbuy">
                          <span class="tuan">团</span>
                          <span>10.80元</span>
                         </div>
                        </div>
                       </div></a>
                         <a href="<?php echo base_url('item/detail?id=4197') ?>">
                       <div class="list">
                        <img src="<?php echo CDN_URL ?>media/home/dianzichanpin/dzcp/160x160_1.jpg" class="fl">
                        <div class="listtext fr">
                         <span class="area">5.3km</span>
                         <h1>硕溙五常大米</h1>
                         <div class="star">
                          <ul>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                          </ul>
                         </div>
                         <div class="tag">
                          麦岛路沿线 粮食
                         </div>
                         <div class="allbuy">
                          <span class="tuan">团</span>
                          <span>198.00元</span>
                         </div>
                        </div>
                       </div></a>
                         <a href="<?php echo base_url('item/detail?id=4198') ?>">
                       <div class="list">
                        <img src="<?php echo CDN_URL ?>media/home/dianzichanpin/dzcp/160x160_2.jpg" class="fl">
                        <div class="listtext fr">
                         <span class="area">0.9km</span>
                         <h1>聚糖大米</h1>
                         <div class="star">
                          <ul>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                          </ul>
                         </div>
                         <div class="tag">
                          麦岛路沿线 粮食
                         </div>
                         <div class="allbuy">
                          <span class="tuan">团</span>
                          <span>118.00元 </span>
                         </div>
                        </div>
                       </div></a>
                         <a href="<?php echo base_url('item/detail?id=4322') ?>">
                       <div class="list">
                        <img src="<?php echo CDN_URL ?>media/home/dianzichanpin/dzcp/160x160_3.jpg" class="fl">
                        <div class="listtext fr">
                         <span class="area">0.3km</span>
                         <h1>月子小米</h1>
                         <div class="star">
                          <ul>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                           <li><i class="icon-weixuanzhong2"></i></li>
                          </ul>
                         </div>
                         <div class="tag">
                          麦岛路沿线 粮食
                         </div>
                         <div class="allbuy">
                          <span class="tuan">团</span>
                          <span>15.00元</span>
                         </div>
                        </div>
                       </div></a>
                     </div>
                    </div>
                   </div>
                  </div>
                <div class="botWrap auto wid718 border20 mt10 clearfix">
                    <div class="dotcontent clearfix bgfff border20">
                        <ul>
                            <a href="<?php echo base_url('item/detail?id=4202') ?>">
                            <li>
                                <img src="<?php echo CDN_URL ?>media/home/dianzichanpin/dzcp/160x160_0.jpg" class="auto block">
                                <h1>精选薏米 硕泰</h1>
                                <h2>¥10.80</h2>
                            </li>
                            </a>
                            <a href="<?php echo base_url('item/detail?id=4197') ?>">
                            <li>
                                <img src="<?php echo CDN_URL ?>media/home/dianzichanpin/dzcp/160x160_1.jpg" class="auto block">
                                <h1>硕泰五常大米</h1>
                                <h2>¥198.00</h2>
                            </li>
                            </a>
                            <a href="<?php echo base_url('item/detail?id=4198') ?>">
                            <li>
                                <img src="<?php echo CDN_URL ?>media/home/dianzichanpin/dzcp/160x160_2.jpg" class="auto block">
                                <h1>聚糖大米</h1>
                                <h2>¥118.00</h2>
                            </li>
                            </a>
                            <a href="<?php echo base_url('item/detail?id=4322') ?>">
                            <li>
                                <img src="<?php echo CDN_URL ?>media/home/dianzichanpin/dzcp/160x160_3.jpg" class="auto block">
                                <h1>月子小米</h1>
                                <h2>¥15.00</h2>
                            </li>
                            </a>
                        </ul>
                    </div>
                </div>
                <!--猜你喜欢-->
                <div class="wid718 auto bgfff border20 exercise clearfix">
                    <img src="<?php echo CDN_URL ?>media/home/cainixihuan/cainixihuan@3x.png">
                </div>
                <!--猜你喜欢内容区域开始-->
                <div class="like wid718 auto clearfix mt10">
                    <ul>
                        <li>
                            <a href="<?php echo base_url('item/detail?id=4103') ?>" target="_self">
                                <img data-src="<?php echo CDN_URL ?>media/home/cainixihuan/liebiao/lanmei@3x.png">
                                <h1>带仔甜虾</h1>
                                <h2>满籽北极虾，野生进口，捕捞后立即熟冻，只需简单冲洗就可以食用</h2>
                                <h3>¥38.00</h3>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url('item/detail?id=4020') ?>" target="_self">
                                <img data-src="<?php echo CDN_URL ?>media/home/cainixihuan/liebiao/mangguo@3x.png">
                                <h1>海南小台农芒果</h1>
                                <h2>清肠胃，抗癌，美化肌肤，防治高血压、动脉硬化，防治便秘，杀菌</h2>
                                <h3>¥15.80</h3>
                            </a>
                        </li>

                        <li class="mr0">
                            <a href="<?php echo base_url('item/detail?id=3907') ?>" target="_self">
                                <img data-src="<?php echo CDN_URL ?>media/home/cainixihuan/liebiao/pingguo@3x.png">
                                <h1>优选鸡爪</h1>
                                <h2>含有丰富的胶质，可滋养皮肤，美容养颜</h2>
                                <h3>¥17.80</h3>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url('item/detail?id=3971') ?>" target="_self">
                                <img data-src="<?php echo CDN_URL ?>media/home/cainixihuan/liebiao/putao@3x.png">
                                <h1>精选五花肉</h1>
                                <h2>富含蛋白质、碳水化合物等营养元素，补充人体热能</h2>
                                <h3>¥19.90</h3>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('item/detail?id=4187') ?>" target="_self">
                                <img data-src="<?php echo CDN_URL ?>media/home/cainixihuan/liebiao/yezi@3x.png">
                                <h1>烟台水晶红富士</h1>
                                <h2>山泉水灌溉，科学培育，人工除虫，无公害、无污染。</h2>
                                <h3>¥21.80</h3>
                            </a>
                        </li>

                        <li class="mr0">
                            <a href="<?php echo base_url('item/detail?id=4056') ?>" target="_self">
                                <img data-src="<?php echo CDN_URL ?>media/home/cainixihuan/hxtt/xia@3x.png">
                                <h1>青岛鲜活鲍鱼</h1>
                                <h2>富含多种营养元素，可健脑补身，提高免疫力</h2>
                                <h3>¥42.80</h3>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="fl footerpic">
                    <img src="<?php echo CDN_URL ?>media/home/footerlogo.png">
                </div>
            </div>
            </div>
            </div>
            </div>
            <?php
    /**
     * APP、微信中调用webview时配合URL按需显示相应部分
     * 此处以在APP中以WebView打开页面时不显示页面header部分为例
     */
    if ($this->user_agent['is_wechat'] || $this->user_agent['is_desktop']):
?>
            <div id="addressWrap">
        <header class="mui-bar mui-bar-nav">
            <!-- <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
            <h1 class="mui-title">当前定位-青岛市</h1> -->
        </header>
        <div class="mui-content">
            <div id='Addlist' class="mui-indexed-list">
                <div class="mui-indexed-list-search mui-input-row mui-search">
                    <!--<p class="module-address">
                    </p>-->
                    <span class="closeAddress">X</span>
                    <div class="mui-indexed-list-search mui-input-row mui-search">
                    <input id="input_search" type="search" class="mui-input-clear mui-indexed-list-search-input" placeholder="搜索城市">
                </div>
                </div>
                <div class="mui-indexed-list-bar">
                    <a>定位</a>
                    <a>最近</a>
                    <a>热门</a>
                    <a>A</a>
                    <a>B</a>
                    <a>C</a>
                    <a>D</a>
                    <a>E</a>
                    <a>F</a>
                    <a>G</a>
                    <a>H</a>
                    <a>I</a>
                    <a>J</a>
                    <a>K</a>
                    <a>L</a>
                    <a>M</a>
                    <a>N</a>
                    <a>O</a>
                    <a>P</a>
                    <a>Q</a>
                    <a>R</a>
                    <a>S</a>
                    <a>T</a>
                    <a>U</a>
                    <a>V</a>
                    <a>W</a>
                    <a>X</a>
                    <a>Y</a>
                    <a>Z</a>
                </div>
                <div class="mui-indexed-list-alert"></div>
                <div class="mui-indexed-list-inner">
                    <div class="mui-indexed-list-empty-alert">没有数据</div>
                        <div class="module-indexed-box">
                            <!--定位-->
                            <div>
                                <p data-group="定位" class="module-address module-limit-after">当前定位城市</p>
                                <div class="recent-area clear"  id="recentcity">
                                    <span class="curCity"></span>
                                </div>
                            </div>

                            <!--最近访问城市-->
                            <div>
                                <p data-group="最近" class="module-address module-limit-before">最近到访</p>
                                <div class="recent-area clear" id="recentcitycur"></div>
                            </div>
                            <!--热门城市-->
                            <div>
                                <p data-group="热门" class="module-address">热门城市</p>
                                <div class="recent-area hot-area clear">
                                    <span>长沙市</span>
                                    <span>苏州市</span>
                                    <span>南京市</span>
                                    <span>大连市</span>
                                    <span>沈阳市</span>
                                    <span>青岛市</span>
                                </div>
                            </div>
                        </div> 
                        <!--全部城市-->
                        <p data-group="定位" class="module-address">全部城市</p>
                    <ul class="mui-table-view" id="ul_city"></ul>
                </div>
            </div>
        </div>
        </div>
        <?php endif ?>

<?php
    // 应用中不显示底部导航栏
    if (
        ($this->user_agent['is_ios'] === FALSE && $this->user_agent['is_android'] === FALSE)
        || $this->user_agent['is_wechat']
    ):
?>
    <!--底部tab切换区域-->
    <div class="tabWrap fiex">
        <div class="tabbar auto">
            <div class="column">
                <a href="https://www.517ybang.com" target="_self">
                <div class="itemmenulist">
                    <i class="homeIcon"></i>
                </div>
                </a>
                <a href="https://www.517ybang.com/item_category" target="_self">
                <div class="itemmenulist">
                    <i class="homeFenlei"></i>
                    <span class="text">分类</span>
                </div>
                </a>
                <a href="https://www.517ybang.com/member_biz" target="_self">
                <div class="itemmenulist">
                    <i class="homeHuiyuan"></i>
                    <span class="text">会员</span>
                </div>
                </a>
                <a href="https://www.517ybang.com/cart" target="_self">
                <div class="itemmenulist">
                    <i class="homeGouwuche"></i>
                    <span class="text">购物车</span>
                </div>
                </a>
                <a href="https://www.517ybang.com/mine" target="_self">
                <div class="itemmenulist">
                    <i class="homeWode"></i>
                    <span class="text">我的</span>
                </div>
                </a>
            </div>
        </div>
    </div>
    <div id="itemIndexSearch" style="display:none;padding:.1rem .4rem;position:absolute;width:100%;height:100%;background:#fff;top:0px;left:0px;z-index:999999">
        <input class="itemIndexSearchInput" style="float:left;border-radius:.15rem;background:#f0f0f0;width:6.1rem;height:.6rem;line-height:.6rem;text-indent:.35rem;outline:none;" type="search" placeholder="搜索感兴趣的内容">
        <span style="color:#0f0f0f;font-size:.26rem;float:left;margin-top:.17rem;margin-left:.2rem" class="itemIndexCancel">取消</span>
    </div>
    <!--显示搜索信息-->
    
   <div class="bussinesswrap clearfix" style="background:#eaeaea;display: none;position: absolute;top:0px;left:0px;z-index: 99999;overflow: scroll;">
    <!--店家商品分类导航条-->
    <div class="shopTitle">
            <div class="shopback fl">
                <i class="icon-Back"></i>
            </div>
            <div class="shopSearch fl" style="background: transparent;">
                <input type="search" placeholder="店内搜索" id="biz_search">
                <i class="icon-搜索"></i>
            </div>
            <div class="biz_gouwuche fl">
                <a title="购物车" href="https://www.517ybang.com/cart">
                    <i class="icon-gouwuche-2" style="color: #949494;font-size: .4rem;float: left;margin-left: .8rem;margin-top: .1rem;"></i>
                </a>
            </div>
            <div class="biz_dot fl">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="myarr">
                    
                </div>
            <div class="dotshowlist" style="display: none;">
                <div class="bizarr">
                    <img src="https://cdn-remote.517ybang.com/media/home/biz_arr.png" alt="箭头">
                </div>
                <p>
                    <a title="首页" href="https://www.517ybang.com/">
                        <i class="icon-shouye_xiala"></i>
                        <span>首页</span>
                        <b></b>
                    </a>
                </p>
                <p>
                    <a title="个人中心" href="https://www.517ybang.com/mine">
                        <i class="icon-wode-2"></i>
                        <span>我的</span>
                    </a>
                </p>
            </div>
        </div>
    <div class="shopindextextnav" style="margin-top: 0px;">
        <ul>
            <li class="bussinesscur zonghe">综合</li>
            <li data-order_by="sold_overall" class="xiaoliang">销量</li>
            <li data-order_by="time_publish" class="shangxin">新品</li>
            <li data-order_by="price" class="jiage">价格<i class="icon-xiajiantou shang"></i><i class="icon-xiajiantou xia"></i><span class="line"></span></li>
            <i class="icon-shaixuan"></i>
        </ul>
    </div>
    <div class="shopindexlist wid710 mt10 clearfix">
        <div class="content">
            <ul id="bizDetailList" class="lists"></ul>
        
    </div>
</div>
    <!--商品筛选器-->
    <div class=screening>
        <span>价格区间(元)</span>
        <p>
            <input type=number placeholder="最低价" min=1 step=1 class="price_min">
            <b></b>
            <input type=number placeholder="最高价" min=1 step=1 class="price_max">
        </p>
        <div class="screeningbtn">
            <a href="javascript:;" class="price_reset">重置</a>
            <a href="javascript:;" class="price_finish">完成</a>
        </div>
    </div>
<?php endif ?>

<script>
$(function(){
    // 若在微信中打开，初始化扫码、定位功能
    if (user_agent.is_wechat)
    {
        $('#wechat-scan').click(function(){
            wechat_scan()
        })
        $('#locate').click(function(){
            wechat_locate()
        })
    }

    var mySwiper_cube = new Swiper('.swiper-container_fruit', {
        scrollbar: '.swiper-scrollbarcube',
        scrollbarHide: false,
        slidesPerView: 'auto',
        centeredSlides: false,
        grabCursor: true,
        spaceBetween: 8,
    });
    setInterval('AutoScroll("#news")', 3000);
    var indexNum = 0;
    $("#more").on("click", function() {
        var container = $(".activecoverplay");
        var items = container.find("div");
        items.on('click',function(){
            var titleName = $('.toMove').find("b").text();
            $('#newmorelist').find('h1').text(titleName);
            function getSX(){
                var oImg = ['<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_1.jpg','<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_2.jpg','<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_3.jpg','<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_0.jpg'];
                var oTitle = ['精品超新鲜带鱼 500-550g/份（约2-4条）','特级猪腱子肉   500g/份','三文鱼  500g/份','澳滋牛尾'];
                for (var i = 0;i<oImg.length;i++) {
                        $('#newmorelist img').eq(i).attr('src',oImg[i]);
                        $('#newmorelist h1').eq(i).text(oTitle[i]);
                }
            }
            switch(titleName){
                case '鱼哥' :
                getSX();
                break;
                case '澳滋' :
                $('#newmorelist').find('img').attr('src','<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_0.jpg');
                getSX();
                break;
                case '君博' :
                $('#newmorelist').find('img').attr('src','<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_2.jpg');
                getSX();
                break;
            };
        });
        if (indexNum == 0) {
                storm($("#more"),$("#morelist"),"icon_4@3x.png");
        } else {
            card();
        }
    });
    function storm(el,wrap,icon)
    {
        indexNum = 1;
        el.find("img").attr("src", "<?php echo CDN_URL ?>media/home/" + icon);
        $(".refreshcontent").hide();
        var titleName = $('.toMove').find('b').text();
        var oAddYuge = '<div class="swiper-container7" id="newmorelist" style="margin-top:.1rem;border-radius: .2rem;"><div class="swiper-wrapper"><div class="swiper-slide"><div class="list-group-item"><a href="<?php echo base_url() ?>item/detail?id=3839"><div class="list"><img src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_1.jpg" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>精品超新鲜带鱼 500-550g/份（约2-4条）</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线 </div><div class="allbuy"><span class="tuan">团</span><span>38.00元</span></div></div></div></a><a href="<?php echo base_url() ?>item/detail?id=3927"><div class="list"><img src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_2.jpg" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>特级猪腱子肉   500g/份</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线 </div><div class="allbuy"><span class="tuan">团</span><span>22.80元</span></div></div></div></a><a href="<?php echo base_url() ?>item/detail?id=357"><div class="list"><img src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_3.jpg" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>三文鱼  500g/份</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线 </div><div class="allbuy"><span class="tuan">团</span><span>98.00元</span></div></div></div></a><a href="<?php echo base_url() ?>item/detail?id=574"><div class="list"><img src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_0.jpg" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>澳滋牛尾</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线 </div><div class="allbuy"><span class="tuan">团</span><span>312.00元</span></div></div></div></a></div></div></div></div>';
        var oAddJunbo = '<div class="swiper-container7" id="newmorelist" style="margin-top:.1rem;border-radius: .2rem;"><div class="swiper-wrapper"><div class="swiper-slide"><div class="list-group-item"><a href="<?php echo base_url() ?>item/detail?id=3839"><div class="list"><img src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_1.jpg" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>精品超新鲜带鱼 500-550g/份（约2-4条）</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线 </div><div class="allbuy"><span class="tuan">团</span><span>38.00元</span></div></div></div></a><a href="<?php echo base_url() ?>item/detail?id=3927"><div class="list"><img src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_2.jpg" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>特级猪腱子肉   500g/份</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线 </div><div class="allbuy"><span class="tuan">团</span><span>22.80元</span></div></div></div></a><a href="<?php echo base_url() ?>item/detail?id=357"><div class="list"><img src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_3.jpg" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>三文鱼  500g/份</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线 </div><div class="allbuy"><span class="tuan">团</span><span>98.00元</span></div></div></div></a><a href="<?php echo base_url() ?>item/detail?id=574"><div class="list"><img src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_0.jpg" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>澳滋牛尾</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线 </div><div class="allbuy"><span class="tuan">团</span><span>312.00元</span></div></div></div></a></div></div></div></div>';
        var oAddAozi = '<div class="swiper-container7" id="newmorelist" style="margin-top:.1rem;border-radius: .2rem;"><div class="swiper-wrapper"><div class="swiper-slide"><div class="list-group-item"><a href="<?php echo base_url() ?>item/detail?id=3839"><div class="list"><img src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_1.jpg" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>精品超新鲜带鱼 500-550g/份（约2-4条）</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线 </div><div class="allbuy"><span class="tuan">团</span><span>38.00元</span></div></div></div></a><a href="<?php echo base_url() ?>item/detail?id=3927"><div class="list"><img src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_2.jpg" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>特级猪腱子肉   500g/份</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线 </div><div class="allbuy"><span class="tuan">团</span><span>22.80元</span></div></div></div></a><a href="<?php echo base_url() ?>item/detail?id=357"><div class="list"><img src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_3.jpg" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>三文鱼  500g/份</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线 </div><div class="allbuy"><span class="tuan">团</span><span>98.00元</span></div></div></div></a><a href="<?php echo base_url() ?>item/detail?id=574"><div class="list"><img src="<?php echo CDN_URL ?>media/home/shangjiasouluo/sjss/160x160_0.jpg" class="fl"><div class="listtext fr"><span class="area">0.3km</span><h1>澳滋牛尾</h1><div class="star"><ul><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li><li><i class="icon-weixuanzhong2"></i></li></ul></div><div class="tag">麦岛路沿线 </div><div class="allbuy"><span class="tuan">团</span><span>312.00元</span></div></div></div></a></div></div></div></div>';
        switch(titleName){
            case '鱼哥' : 
            $(oAddYuge).insertBefore(wrap);
            break;
            case '君博' : 
            $(oAddJunbo).insertBefore(wrap);
            break;
            case  '澳滋' :
            $(oAddAozi).insertBefore(wrap);
            break;
        };
    }
    function card() {
        indexNum = 0;
        $("#more").find("img").attr("src", "<?php echo CDN_URL ?>media/home/list.png");
        $(".refreshcontent").show();
        $('#newmorelist').remove();
    }
});

$(function(){
    $("#timer2").oaoTime();
    var lazyLoadImg = new LazyLoadImg({
        el: document.querySelector('#listMenu'),
        mode: 'default',
        time: 300,
        complete: true,
        position: {
            top: 0,
            right: 0,
            bottom: 0,
            left: 0
        },
        before: function(el) {
            el.src = '<?php echo CDN_URL ?>media/home/default.png';
            if (el.src = '<?php echo CDN_URL ?>media/home/default.png') {
                el.style.width = 'auto';
                el.style.display = 'block';
                el.style.margin = '0 auto';
                el.style.border = 'none';
                $('.bgefefef').css('background','#efefef');
            }
        },
        success: function(el) {
            el.classList.add('success');
            $('.bgefefef').css('background','transparent');
        },
        error: function(el) {
            el.src = '<?php echo CDN_URL ?>media/home/default.png'
        }
    });
    $('.maptext').on('click',function(){
            $.ajax({
            url: 'https://cdn-remote.517ybang.com/address.txt', 
            async: true,
            cache: false,
            dataType: 'html',
            success: function(jsondata) {
                $('#ul_city').html('');
              $('#ul_city').append(jsondata);
            }
        });
    });
});
//首页搜索区域开始
var by_price = 0;
$('.searchtext').on('click',function(){
    $('#itemIndexSearch').show();
    
//  点击键盘13号开始搜索

});
$('.itemIndexCancel').on('click',function(){
    $('#itemIndexSearch').hide();
});
// 商家信息
var item_image_root = '<?php echo MEDIA_URL.'item/' ?>'; // 商品媒体文件根目录
$('.itemIndexSearchInput').keydown(function(event){
                //event.preventDefault();
                if(event.which == 13){
                    // 商品列表API路径
                    var api_item_index = api_url + 'item/index';
                    console.log(api_item_index);
                    // 商品详情页路径
                    var page_item_detail = base_url + 'item/detail?id=';
                    $('#itemIndexSearch').hide();
                    $(document.body).css({
                           "overflow-x":"hidden",
                           "overflow-y":"hidden"
                    });
                    $.ajax({
                        url:api_item_index,
                        async:false,
                        data:{app_type:'client',limit:10,offset:0,name:$(this).val()},
                        success:function(res){
                        $('#bizDetailList').html('');
                            var con = res.content;
                            for (var i = 0;i < con.length;i++)
                            {
                                var oLi = '<li><a href="'+ page_item_detail+con[i].item_id +'"><img src="'+(con[i].url_image_main.indexOf('http') != -1? con[i].url_image_main: (item_image_root + con[i].url_image_main))+'"><h1>'+con[i].name+'</h1><p><span>¥'+con[i].price+'</span></p></a></li>';
                                $('#bizDetailList').append(oLi);
                                
                            }
                            $('.zonghe').on('click',function(){
                                        $.ajax({
                                        url : api_item_index,
                                        data : {app_type:'client',limit:10,offset:0,name:$('.itemIndexSearchInput').val()},
                                        success : function(res){
                                            $('#bizDetailList').html('');
                                            
                                            var con = res.content;
                                            for (var i = 0;i < con.length;i++)
                                            {
                                                var oLi = '<li><a href="'+ page_item_detail+con[i].item_id +'"><img src="'+(con[i].url_image_main.indexOf('http') != -1? con[i].url_image_main: (item_image_root + con[i].url_image_main))+'"><h1>'+con[i].name+'</h1><p><span>¥'+con[i].price+'</span></p></a></li>';
                                                $('#bizDetailList').append(oLi);
                                                
                                            }
                                        }
                                    });
                            });
                            $('.zonghe').click();
                            // 按照销量排行
                                    var sold_overall = 0;
                                    $('.xiaoliang').on('click',function(){
                                        
                                        page = 0;
                                        shopClass = $(this).text();
                                            if(sold_overall == 0){
                                                $.ajax({
                                                url : api_item_index,
                                                data : {app_type:'client',limit:10,orderby_sold_overall:'DESC',name:$('.itemIndexSearchInput').val()},
                                                success : function(res){
                                                    $('#bizDetailList').html('');
                                                    
                                                    var con = res.content;
                                                    for (var i = 0;i < con.length;i++)
                                                    {
                                                        var oLi = '<li><a href="'+ page_item_detail+con[i].item_id +'"><img src="'+(con[i].url_image_main.indexOf('http') != -1? con[i].url_image_main: (item_image_root + con[i].url_image_main))+'"><h1>'+con[i].name+'</h1><p><span>¥'+con[i].price+'</span></p></a></li>';
                                                        $('#bizDetailList').append(oLi);
                                                        
                                                    }
                                                }
                                            });
                                            }
                                    });
                                    // 按发布时间排行
                                    var time_publish = 0;
                                    $('.shangxin').on('click',function(){
                                        shopClass = $(this).text();
                                        page = 0;
                                            if(time_publish == 0){
                                                $.ajax({
                                                url : api_item_index,
                                                data : {app_type:'client',limit:10,orderby_time_publish:'DESC',name:$('.itemIndexSearchInput').val()},
                                                success : function(res){
                                                    $('.shangxin').find('.shang').css('color','#999');
                                                    $('.shangxin').find('.xia').css('color','#fd799c');
                                                    $('#bizDetailList').html('');
                                                    var con = res.content;
                                                    for (var i = 0;i < con.length;i++) {
                                                        var oLi = '<li><a href="'+ page_item_detail+con[i].item_id +'"><img src="'+(con[i].url_image_main.indexOf('http') != -1? con[i].url_image_main: (item_image_root + con[i].url_image_main))
                                    +'"><h1>'+con[i].name+'</h1><p><span>¥'+con[i].price+'</span></p></a></li>';
                                                    $('#bizDetailList').append(oLi);
                                                        
                                                    }
                                                }
                                            });
                                            }
                                            
                                    });
                                    $('.price_finish').on('click',function(){
                                        $(".screening").fadeOut();
                                        $('body,html').css({
                                            "overflow-y": "auto"
                                        });
                                        $.ajax({
                                            url : api_item_index,
                                            data : {app_type:'client',limit:10,price_min:$('.price_min').val(),price_max:$('.price_max').val(),name:$('.itemIndexSearchInput').val()},
                                            success : function(res){
                                                $('#bizDetailList').html('');
                                                var con = res.content;
                                                for (var i = 0;i < con.length;i++) {
                                                    var oLi = '<li><a href="'+ page_item_detail+con[i].item_id +'"><img src="'+(con[i].url_image_main.indexOf('http') != -1? con[i].url_image_main: (item_image_root + con[i].url_image_main))
                                +'"><h1>'+con[i].name+'</h1><p><span>¥'+con[i].price+'</span></p></a></li>';
                                                $('#bizDetailList').append(oLi);
                                                    
                                                }
                                            }
                                        });
                                });
                                $('.price_reset').on('click',function(){
                                    $('.price_min').val('');
                                    $('.price_max').val('');
                                })
                                    $('.jiage').on('click',function(){
                                $('.shang').css('color','#999');
                                $('.xia').css('color','#999');
                                    if(by_price == 0){
                                        $.ajax({
                                        url : api_item_index,
                                        data : {app_type:'client',limit:10,orderby_price:'DESC',name:$('.itemIndexSearchInput').val()},
                                        success : function(res){
                                            $('.jiage').find('.shang').css('color','#999');
                                            $('.jiage').find('.xia').css('color','#fd799c');
                                            $('#bizDetailList').html('');
                                            var con = res.content;
                                            for (var i = 0;i < con.length;i++) {
                                                var oLi = '<li><a href="'+ page_item_detail+con[i].item_id +'"><img src="'+(con[i].url_image_main.indexOf('http') != -1? con[i].url_image_main: (item_image_root + con[i].url_image_main))
                            +'"><h1>'+con[i].name+'</h1><p><span>¥'+con[i].price+'</span></p></a></li>';
                                            $('#bizDetailList').append(oLi);
                                                
                                            }
                                        }
                                    });
                                    by_price = 1;
                                    }
                                    else{
                                        $.ajax({
                                        url : api_item_index,
                                        data : {app_type:'client',limit:10,orderby_price:'ASC',name:$('.itemIndexSearchInput').val()},
                                        success : function(res){
                                            $('.jiage').find('.shang').css('color','#fd799c');
                                            $('.jiage').find('.xia').css('color','#999');
                                            $('#bizDetailList').html('');
                                            var con = res.content;
                                            for (var i = 0;i < con.length;i++) {
                                                var oLi = '<li><a href="'+ page_item_detail+con[i].item_id +'"><img src="'+(con[i].url_image_main.indexOf('http') != -1? con[i].url_image_main: (item_image_root + con[i].url_image_main))
                            +'"><h1>'+con[i].name+'</h1><p><span>¥'+con[i].price+'</span></p></a></li>';
                                            $('#bizDetailList').append(oLi);
                                                
                                            }
                                        }
                                    });
                                        by_price = 0;
                                    }
                                    
                            });
                                                            }
                    });
                    $('.bussinesswrap').show();
                }
            })
</script>


