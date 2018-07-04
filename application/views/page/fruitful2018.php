<style>
    #body {background-color:#5e0797;}

    #content {color:#fff;font-size:24px;font-family:"苹方",sans-serif;text-align:center;background:url("/media/fruitful2018/bg-top@2x.png") no-repeat center top;padding-top:500px;}
        #content a {color:#fff;}

    #brief {background:url("/media/fruitful2018/bg-brief@2x_pre.png") no-repeat center top;height:882px;}

    #lottery {background:url("/media/fruitful2018/bg-lottery@2x.png") no-repeat center top;}

    #description {_background-color:#7f0dc5;background: url("/media/fruitful2018/jiantou@2x.png") no-repeat center bottom;width:686px;margin:0 auto;_border:1px solid #9719d5;_border-radius:8px;padding:40px 0 130px;}
        #description img {height:518px;}

    #items-content {background:url("/media/fruitful2018/bg@2x.png") repeat-y center top}
        #items {width:670px;margin:0 auto;}
            .section {width:100%;margin-bottom:100px;}
                .section h2 {font-size:36px;font-weight:bold;background:url("/media/fruitful2018/bg-title@2x.png") no-repeat center center;height:104px;padding-top:40px;}

                .section>ul {margin-top:46px;overflow:hidden;}
                    .section>ul>li {float:left;margin-bottom:20px;margin-right:20px;border:2px solid #6a06e0;border-radius:10px;padding:10px;box-shadow:0 0 10px #5e0797;position:relative;}
                        .section>ul>li a {background-color:#fff;display:block;width:100%;height:100%;padding-bottom:10px;overflow:hidden;}
                    .item-name {margin-top:20px;overflow:hidden;}
                    .prices {line-height:1;margin-top:12px;display:block;overflow:hidden;}
                        .prices>li {font-size:22px;float:left;width:55%;text-align:right;}
                        .prices>li:last-child {color:#9fa0a0;width:42%;margin-left:3%;text-align:left;}

                    .double>li {width:325px;}
                        .double>li:nth-child(2n+1) {margin-right:0;}
                        .double .item-figure {width:305px;height:305px;}
                        .double .item-name {color:#575757;font-size:28px;height:28px;line-height:28px;}
                        .double .prices {}
                            .double .prices>li:first-child {color:#f62660;font-size:30px;}
                                .double .prices>li:first-child span {font-size:36px;}
                            .double .prices>li:last-child {padding-top:14px;}

                    .triple>li {width:210px;}
                        .triple>li:nth-child(3n+1) {margin-right:0;}
                        .triple .item-figure {width:190px;height:190px;}
                        .triple .item-name {color:#f90131;font-size:24px;height:24px;line-height:24px;}
                        .triple .prices {background:#f90131 url("/media/fruitful2018/bg-prices@2x.png") no-repeat right center;background-size:16px 26px;height:26px;line-height:26px;margin:12px 10px 0;}
                            .triple .prices>li:first-child {color:#f9ff48;}
                        .triple del {font-size:18px;}

                    .section>ul>li:first-child {width:100%;margin-left:0;}
                        .section>ul>li:first-child .item-figure {width:650px;height:244px;}
                        .section>ul>li:first-child h3, .section>ul>li:first-child ul {display:none;}

                .section>div {margin-top:60px;}

     .lottery {position:relative;display:block;height:512px;}
    .lottery img {position:absolute;top:50%;left:50%;width:152px;margin-left:-76px;margin-top:-82px;cursor:pointer;}

    /* 专享部分 */
    #zhuanxiang {background:url('/media/fruitful2018/guanggao@2x.png') no-repeat center center;width:686px;height:302px;overflow:hidden;}
        #zhuanxiang li {display:inline-block;float:left;width:33.33%;height:100%;}
            #zhuanxiang a {display:block;width:100%;height:100%;}

    #actions {overflow:hidden;width:432px;margin:0 auto;padding:70px 0;}
        #actions li {background-color:#750cb3;float:left;display:inline-block;width:186px;height:70px;line-height:70px;margin-right:60px;border-radius:35px;}
            #actions li:last-child {color:#f9ed05;margin-right:0;}

    .full-screen {background-color:rgba(0,0,0,.6);position:fixed;top:0;bottom:0;left:0;right:0;z-index:100;display:none;}
        .full-screen-container {color:#3d3d3d;background-color:#fff;font-size:30px;width:710px;margin:20px auto;border-radius:20px;position:relative;overflow-y:scroll;}
        .full-screen-close {color:#c9954b;font-size:26px;position:absolute;top:30px;right:30px;width:26px;height:26px;}
        .full-screen-content {background-color:#fff;padding:90px 66px;}
        .full-screen-title {color:#c9954b;font-size:36px;margin-bottom:50px;}
        .full-screen-content figure {text-align:center;}
        .full-screen-content p:not(:last-child) {margin-bottom:1em;}
</style>

<!-- 抽奖转盘 -->
<script src="/js/turntable.js"></script>

<div id=content>
    <!-- 活动信息 -->
    <div id=brief>

        <!-- 简介、奖品、活动 -->
        <!--
        <ul>
            <li id=first>
                <p>
                    转盘抽大奖<br>
                    无条件抽取1000元水果零食大礼包！<br>
                    下拉抽奖
                </p>
            </li>

            <li id=second>
                <p>
                前1000名下单用户<br>
                送上海风味青团两枚<br>
                仅限鲜果节页面产品<br>
                每ID限送一份<br>
                且特价网纹瓜不参与活动
                </p>
            </li>

            <li id=third>
                <p>
                10、12、14、16、20点<br>
                各推出1款免费商品＋3款超超特价商品<br>
                抢到就是赚到
                </p>
            </li>
        </ul>
        -->

        <!-- 投票入口 -->
        <!--
        <div id=to_vote>
            <p>
            票选创意王者<br>
            发掘网红达人<br>
            创意秀起来！<br>
            大赛奖项<br>
            一等奖（第1名）<br>
            2888元大礼包
            </p>
        </div>
        -->

    </div>

    <!-- 抽奖 -->
    <div id=lottery>
        <!-- 抽奖盘 -->
        <div id=plate>
            <div class=lottery>
                <canvas id=myCanvas width="512" height="512">
                    当前浏览器版本过低，请使用其他浏览器尝试
                </canvas>
                <img id=start src="/media/fruitful2018/start.png">
            </div>
        </div>
    </div>

    <div id=items-content>
        <ul id=actions>
            <!-- 抽奖次数 -->
            <li data-action=try>抽奖次数 <span data-name=chances>1</span>次</li>

            <!-- 分享 -->
            <li data-action=share>微信右上角分享</li>
        </ul>

        <div id=description>
            <img id=start src="/media/fruitful2018/zhuanpanguige@2x.png">
        </div>

        <!-- 活动商品 -->
        <div id=items>

        </div>
    </div>

</div>

<div class=full-screen data-window-name=customer-service>
    <div class=full-screen-container>
        <div class=full-screen-close><i class="far fa-times" aria-hidden=true></i></div>

        <div class="full-screen-content">
            <figure>
                <img src="/media/fruitful2018/qrcode_customer_service.jpg">
                <figcaption>进来客服 小五</figcaption>
            </figure>
            <p>优惠券类奖品将由系统自动发放到您的账户中，活动火热进行中，请稍候查看即可</p>
        </div>
    </div>
</div>

<?php
    $items = array();
    $items[] = array(
        'title' => '14点秒杀专场',

        // 070410
        /*'items' => array(
            array(
                'item_id' => '5692',
                'url_image_main' => '/media/fruitful2018/items/070310/0-1@2x.png',
                'name' => '网红妖娆花',
                'price' => '1',
                'tag_price' => '69',
            ),
            array(
                'item_id' => '5712',
                'url_image_main' => '/media/fruitful2018/items/070310/0-2@2x.png',
                'name' => '3D猫咪墙贴',
                'price' => '6',
                'tag_price' => '14.9',
            ),
            array(
                'item_id' => '5709',
                'url_image_main' => '/media/fruitful2018/items/070310/0-3@2x.png',
                'name' => '6拼果切',
                'price' => '24.9',
                'tag_price' => '39.9',
            ),
            array(
                'item_id' => '5710',
                'url_image_main' => '/media/fruitful2018/items/070310/0-4@2x.png',
                'name' => '混合果盒8种水果装',
                'price' => '49',
                'tag_price' => '99',
            ),
        ),*/

        // 070412
        /*'items' => array(
            array(
                'item_id' => '5716',
                'url_image_main' => '/media/fruitful2018/items/070312/0-1@2x.png',
                'name' => '单身狗粮薯片 3包装',
                'price' => '1',
                'tag_price' => '29.9',
            ),
            array(
                'item_id' => '5714',
                'url_image_main' => '/media/fruitful2018/items/070312/0-2@2x.png',
                'name' => '进口猪饲料零食大礼包',
                'price' => '39.9',
                'tag_price' => '69.9',
            ),
            array(
                'item_id' => '5725',
                'url_image_main' => '/media/fruitful2018/items/070312/0-3@2x.png',
                'name' => '抖音会动的兔子帽子',
                'price' => '29.9',
                'tag_price' => '49',
            ),
            array(
                'item_id' => '5726',
                'url_image_main' => '/media/fruitful2018/items/070312/0-4@2x.png',
                'name' => '北冰洋橙汁汽水6罐装',
                'price' => '29.9',
                'tag_price' => '36',
            ),
        ),*/

        // 070414
        'items' => array(
            array(
                'item_id' => '5730',
                'url_image_main' => '/media/fruitful2018/items/070314/0-1@2x.png',
                'name' => '红糖糍粑5袋',
                'price' => '29.9',
                'tag_price' => '1',
            ),
            array(
                'item_id' => '5727',
                'url_image_main' => '/media/fruitful2018/items/070314/0-2@2x.png',
                'name' => '【周黑鸭】甜辣礼盒',
                'price' => '39.9',
                'tag_price' => '59',
            ),
            array(
                'item_id' => '5728',
                'url_image_main' => '/media/fruitful2018/items/070314/0-3@2x.png',
                'name' => '抖音零食大礼包',
                'price' => '29.9',
                'tag_price' => '49',
            ),
            array(
                'item_id' => '5729',
                'url_image_main' => '/media/fruitful2018/items/070314/0-4@2x.png',
                'name' => '蜀道香麻辣牛肉干',
                'price' => '29.9',
                'tag_price' => '49',
            ),
        ),

        // 070416
//        'items' => array(
//            array(
//                'item_id' => '5712',
//                'url_image_main' => '/media/fruitful2018/items/070316/0-1@2x.png',
//                'name' => '3D猫咪墙贴',
//                'price' => '1',
//                'tag_price' => '29',
//            ),
//            array(
//                'item_id' => '5731',
//                'url_image_main' => '/media/fruitful2018/items/070316/0-2@2x.png',
//                'name' => '实木创意凳儿童凳',
//                'price' => '268',
//                'tag_price' => '398',
//            ),
//            array(
//                'item_id' => '5732',
//                'url_image_main' => '/media/fruitful2018/items/070316/0-3@2x.png',
//                'name' => '儿童益智4/6/9九宫格玩具',
//                'price' => '29',
//                'tag_price' => '69',
//            ),
//            array(
//                'item_id' => '5733',
//                'url_image_main' => '/media/fruitful2018/items/070316/0-4@2x.png',
//                'name' => '迪士尼亲子互动吸盘球',
//                'price' => '9.9',
//                'tag_price' => '29',
//            ),
//        ),

        // 070420
//        'items' => array(
//            array(
//                'item_id' => '5736',
//                'url_image_main' => '/media/fruitful2018/items/070320/0-1@2x.png',
//                'name' => '旺旺小小酥（多口味）6袋装',
//                'price' => '1',
//                'tag_price' => '16.9',
//            ),
//            array(
//                'item_id' => '5729',
//                'url_image_main' => '/media/fruitful2018/items/070320/0-2@2x.png',
//                'name' => '蜀道香麻辣牛肉',
//                'price' => '29.9',
//                'tag_price' => '49',
//            ),
//            array(
//                'item_id' => '5735',
//                'url_image_main' => '/media/fruitful2018/items/070320/0-3@2x.png',
//                'name' => '张君雅小妹妹整箱零食15包645g',
//                'price' => '59',
//                'tag_price' => '89',
//            ),
//            array(
//                'item_id' => '5737',
//                'url_image_main' => '/media/fruitful2018/items/070320/0-4@2x.png',
//                'name' => '泰国进口小老板海苔卷系列27g×3',
//                'price' => '25.9',
//                'tag_price' => '39.9',
//            ),
//        ),

        'appended' => ''
    );

    $items[] = array(
        'title' => '进来爆款',
        'items' => array(
            array(
                'item_id' => '4762',
                'url_image_main' => '/media/fruitful2018/items/1-1.png',
                'name' => '网超甜网纹瓜 软糯香甜馥郁奶香 坚持47天树上熟3.5-4斤/个',
                'price' => '9.9',
                'tag_price' => '29.9',
            ),
            array(
                'item_id' => '4816',
                'url_image_main' => '/media/fruitful2018/items/1-2.png',
                'name' => '阳山水蜜桃4只装',
                'price' => '29.8',
                'tag_price' => '38.9',
            ),
            array(
                'item_id' => '5638',
                'url_image_main' => '/media/fruitful2018/items/1-3.png',
                'name' => '泰国金枕头榴莲4斤装',
                'price' => '65',
                'tag_price' => '98',
            ),
            array(
                'item_id' => '5641',
                'url_image_main' => '/media/fruitful2018/items/1-4.png',
                'name' => '新西兰金果猕猴桃*4',
                'price' => '36',
                'tag_price' => '72',
            ),
            array(
                'item_id' => '5653',
                'url_image_main' => '/media/fruitful2018/items/1-5.png',
                'name' => '8款水果混合果盒5斤装',
                'price' => '59',
                'tag_price' => '99',
            ),
        ),
        'appended' =>
        '<ul id=zhuanxiang>'.
        '<li><a href="'. BASE_URL . 'item/detail?id=5663"></a></li>'.
        '<li><a href="'. BASE_URL . 'item/detail?id=5645"></a></li>'.
        '<li><a href="'. BASE_URL .'item/detail?id=5646"></a></li>'.
        '</ul>'
    );

    $items[] = array(
        'title' => '热卖力荐',
        'items' => array(
            array(
                'item_id' => '5652',
                'url_image_main' => '/media/fruitful2018/items/2-1.png',
                'name' => '沂蒙食舍双色桃拼',
                'price' => '30',
                'tag_price' => '69',
            ),
            array(
                'item_id' => '4760',
                'url_image_main' => '/media/fruitful2018/items/2-2.png',
                'name' => '红心火龙果',
                'price' => '29.8',
                'tag_price' => '59',
            ),
            array(
                'item_id' => '5647',
                'url_image_main' => '/media/fruitful2018/items/2-3.png',
                'name' => '贝贝南瓜',
                'price' => '22',
                'tag_price' => '49',
            ),
            array(
                'item_id' => '5642',
                'url_image_main' => '/media/fruitful2018/items/2-4.png',
                'name' => '上海麒麟西瓜约10斤',
                'price' => '49',
                'tag_price' => '99',
            ),
            array(
                'item_id' => '4822',
                'url_image_main' => '/media/fruitful2018/items/2-5.png',
                'name' => '胶南蓝莓125g*3',
                'price' => '29.9',
                'tag_price' => '59',
            ),
            array(
                'item_id' => '5649',
                'url_image_main' => '/media/fruitful2018/items/2-6.png',
                'name' => '都知果蜜瓜',
                'price' => '29.9',
                'tag_price' => '59',
            ),
            array(
                'item_id' => '4791',
                'url_image_main' => '/media/fruitful2018/items/2-7.png',
                'name' => '泰国山竹5只装',
                'price' => '24.9',
                'tag_price' => '49',
            ),
        ),
        'appended' => '<img src="/media/fruitful2018/guanggao2@2x.png">'
    );

    $items[] = array(
        'title' => '全球精品',
        'items' => array(
            array(
                'item_id' => '5639',
                'url_image_main' => '/media/fruitful2018/items/3-1.png',
                'name' => '泰国榴莲4.5-5.5斤装',
                'price' => '79',
                'tag_price' => '158',
            ),
            array(
                'item_id' => '4752',
                'url_image_main' => '/media/fruitful2018/items/3-2.png',
                'name' => '新西兰金果6颗装',
                'price' => '55',
                'tag_price' => '99',
            ),
            array(
                'item_id' => '4736',
                'url_image_main' => '/media/fruitful2018/items/3-3.png',
                'name' => '美国奇士橙2斤装',
                'price' => '34.98',
                'tag_price' => '69',
            ),
            array(
                'item_id' => '5650',
                'url_image_main' => '/media/fruitful2018/items/3-4.png',
                'name' => '泰国山竹10只装',
                'price' => '49.8',
                'tag_price' => '99',
            ),
            array(
                'item_id' => '5643',
                'url_image_main' => '/media/fruitful2018/items/3-5.png',
                'name' => '泰国香水椰 两颗装',
                'price' => '29.8',
                'tag_price' => '59',
            ),
        ),
        'appended' => ''
    );

    $items[] = array(
        'title' => '超值精品1+',
        'items' => array(
            array(
                'item_id' => '4786',
                'url_image_main' => '/media/fruitful2018/items/4-1.png',
                'name' => '菲诺椰子冻*2',
                'price' => '55',
                'tag_price' => '79',
            ),
            array(
                'item_id' => '4816',
                'url_image_main' => '/media/fruitful2018/items/4-2.png',
                'name' => '阳山水蜜桃4只装',
                'price' => '29.8',
                'tag_price' => '69',
            ),
            array(
                'item_id' => '5648',
                'url_image_main' => '/media/fruitful2018/items/4-3.png',
                'name' => '树上熟木瓜',
                'price' => '14.98',
                'tag_price' => '39',
            ),
            array(
                'item_id' => '4776',
                'url_image_main' => '/media/fruitful2018/items/4-4.png',
                'name' => '新疆库尔勒香梨',
                'price' => '19.9',
                'tag_price' => '39',
            ),
            array(
                'item_id' => '5649',
                'url_image_main' => '/media/fruitful2018/items/4-5.png',
                'name' => '都知果蜜瓜',
                'price' => '29.9',
                'tag_price' => '59',
            ),
            array(
                'item_id' => '4748',
                'url_image_main' => '/media/fruitful2018/items/4-6.png',
                'name' => '台湾水仙芒约2斤',
                'price' => '24.9',
                'tag_price' => '49',
            ),
            array(
                'item_id' => '4779',
                'url_image_main' => '/media/fruitful2018/items/4-7.png',
                'name' => '大荔冬枣1斤装',
                'price' => '68',
                'tag_price' => '99',
            ),
            array(
                'item_id' => '5640',
                'url_image_main' => '/media/fruitful2018/items/4-8.png',
                'name' => '泰国榴莲6-6.5斤装 ',
                'price' => '109',
                'tag_price' => '199',
            ),
            array(
                'item_id' => '5651',
                'url_image_main' => '/media/fruitful2018/items/4-9.png',
                'name' => '精品油桃3斤（2盒）',
                'price' => '35',
                'tag_price' => '49.9',
            ),
            array(
                'item_id' => '4739',
                'url_image_main' => '/media/fruitful2018/items/4-10.png',
                'name' => '桂味荔枝1斤',
                'price' => '25.5',
                'tag_price' => '69',
            ),

        ),
        'appended' => ''
    );
?>

<script>
    // 本页面内AJAX全部为同步方式
    $.ajaxSetup({
        async : false
    });

    var user_id = '<?php echo $this->session->user_id ?>';

    // 当前可抽奖次数
    var chance_count = 1;

    // 微信是否已分享
    var wechat_shared = 0;

    var use_chance, add_chance;

    // 获取抽奖活动
    var lottery; // 抽奖活动
    var params = common_params;
    params.id = 1;
    // AJAX获取结果并生成相关HTML
    $.post(
        api_url + 'lottery/detail',
        params,
        function(result)
        {
            //console.log(result); // 输出回调数据到控制台
            if (result.status == 200)
            {
                lottery = result.content;
            } else {
                alert(result.content.error.message);
            }
        }
    )

    // 相关商品
    var items = <?php echo json_encode($items) ?>;

    $(function(){
        // 关闭全屏
        $('.full-screen-close').click(function(){
            $(this).closest('.full-screen').hide();
        });

        // 赋值当前可抽奖次数到页面
        $('[data-name=chances]').text(chance_count)

        // 增加一次抽奖机会
        add_chance = (function add_chance()
        {
            if (wechat_shared == 0)
            {
                chance_count++
                $('[data-name=chances]').text(chance_count)
                wechat_shared = 1;
            }
            alert('分享成功，每天完成分享可以额外抽1次奖');

            // 页面滚动到转盘区
            var target = $('#lottery');

            // 获取目标元素相对于网页顶端的位置
            var target_height = $(target[0]).offset().top - 100; // 顶端留出100像素的空间

            // 页面滚动到该位置
            $('body,html').stop(false, false).animate({scrollTop:target_height}, 400);
        })

        // 使用一次抽奖机会
        use_chance = (function use_chance()
        {
            chance_count--
            //console.log(wechat_shared);
            $('[data-name=chances]').text(chance_count)
        })

        <?php
        // 以下功能仅微信中可用
        if ($this->user_agent['is_wechat']):
        ?>

        // 微信相关
        wx.ready(function(){
            <?php
            // 分享到微信时的信息
            $url_page_figure = empty($item['url_image'])? MEDIA_URL.'icon/jinlai_client/64x64.png': $this->media_root.$item['url_image'];
            ?>
            var wechat_title = '浓情盛夏，鲜果狂欢 - 进来鲜果节'

            // 分享到朋友圈
            wx.onMenuShareTimeline({
                title: wechat_title, // 分享标题
                link: '<?php echo CURRENT_URL ?>', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
                imgUrl: '<?php echo $url_page_figure ?>', // 分享图标
                success: function () {
                    // 用户确认分享后执行的回调函数
                    add_chance()
                },
                cancel: function () {
                    // 用户取消分享后执行的回调函数
                    alert('每天首次分享后可额外获取1次抽奖机会');
                }
            });

            // 分享给朋友
            wx.onMenuShareAppMessage({
                title: wechat_title, // 分享标题
                desc: null, // 分享描述
                link: '<?php echo CURRENT_URL ?>', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
                imgUrl: '<?php echo $url_page_figure ?>', // 分享图标
                type: '', // 分享类型，music、video或link，不填默认为link
                dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
                success: function () {
                    // 用户确认分享后执行的回调函数
                    add_chance()
                },
                cancel: function () {
                    // 用户取消分享后执行的回调函数
                    alert('每天首次分享后可额外获取1次抽奖机会');
                }
            });

        })
        <?php endif ?>
        // 点击分享，提示成功后可获取1次额外抽奖机会
        $('[data-action=share]').click(function(){
            alert('将本页面分享到朋友圈或微信好友，可额外获取1次抽奖机会哦');
        });

        // 将相关商品输出为DOM
        for (var index in items)
        {
            var dom = section_dom(items[index])
            $('#items').append(dom);
        }

        function section_dom(item)
        {
            var dom = '<div class=section>' +
                '<h2>' + item.title + '</h2>' +
                '<ul class=' +
                ((item.items.length-1)%3 == 0? 'triple': 'double') + '>'; // 3列（项数可被3整除）为triple，2列为double

            dom += item_dom(item.items);
            dom += '</ul>' +
                '   <div>' +
                item.appended +
                '   </div>' +
                '</div>';
            console.log(dom);

            return dom;
        } // end generate_dom

        function item_dom(items)
        {
            var item_dom = '';

            for (var index in items)
            {
                var item = items[index]
                //console.log(item);
                item_dom +=
                '   <li>' +
                '       <a href="' + base_url+'item/detail?id='+ item.item_id + '">' +
                '           <figure class=item-figure>' +
                '<img src="' + item.url_image_main + '">' +
                '</figure>' +
                '<h3 class=item-name>' + item.name + '</h3>' +
                '<ul class=prices>' +
                '   <li>￥<span>' + item.price + '</span></li>' +
                '   <li><del>￥<span>' + item.tag_price + '</span></del></li>' +
                '</ul>' +
                '       </a>' +
                '   </li>';
            }

            //console.log(item_dom);
            return item_dom;
        }

    });

    var wheelSurf
    // 初始化装盘数据 正常情况下应该由后台返回
    var prizes = lottery.prizes;
    console.log(prizes);

    var initData = [
            {
                "id": 1,
                "name": "1000元水果零食大礼包",
                "image": "/media/fruitful2018/reward1.png",
            },
            {
                "id": 2,
                "name": "泰国金枕头榴莲*1",
                "image": "/media/fruitful2018/reward2.png",
            },
            {
                "id": 3,
                "name": "抖音网红妖娆花*1",
                "image": "/media/fruitful2018/reward3.png",
            },
            {
                "id": 4,
                "name": "鲜果节专用红包5元",
                "image": "/media/fruitful2018/reward4.png",
            }
        ]

    // 奖品列表
    var list = {}

    var angel = 360 / initData.length
    // 格式化成插件需要的奖品列表格式
    for (var i = 0, l = initData.length; i < l; i++) {
        list[i] = {
            id: initData[i].id,
            name: initData[i].name,
            image: initData[i].image
        }
    }

    // 查看奖品列表格式

    // 定义转盘奖品
    wheelSurf = $('#myCanvas').WheelSurf({
        list: list, // 奖品列表，(必填)
        outerCircle: {
            color: '#df1e15' // 外圈颜色(可选)
        },
        innerCircle: {
            color: '#f4ad26' // 里圈颜色(可选)
        },
        dots: ['#fbf0a9', '#fbb936'], // 装饰点颜色(可选)
        disk: ['#ffb933', '#ffe8b5', '#ffb933', '#ffd57c', '#ffb933', '#ffe8b5', '#ffd57c'], //中心奖盘的颜色，默认7彩(可选)
        title: {
            color: '#5c1e08',
            font: '19px Arial'
        } // 奖品标题样式(可选)
    })

    // 初始化转盘
    wheelSurf.init()
    // 抽奖
    var throttle = true; // 是否正在抽奖

    $(function(){
        // 点击抽奖按钮
        $("#start, [data-action=try]").on('click', function () {

            // 若未登录，转到登录页面
            if (user_id == '')
            {
                alert('登录后即可参与活动，将自动转到登录页面');
                location.href = base_url + 'login?url_after_login=<?php echo urlencode( trim($_SERVER['REQUEST_URI'], '/') ) ?>';
                return false;
            }

            // 若已在抽奖中，不响应点击事件
            if ( ! throttle) return false;

            console.log(chance_count)
            if (chance_count < 1)
            {
                var reminder = (wechat_shared == 0)? '每天首次分享后可额外获取1次抽奖机会': '今日抽奖次数已用完，明天可以继续参与哦';
                alert(reminder);
                return false;
            }

            // 标记已在抽奖中
            throttle = false;

            // 进行抽奖
            var params = common_params;
            params.lottery_id = lottery.lottery_id
            // AJAX获取结果并生成相关HTML
            $.post(
                api_url + 'lottery_record/create',
                params,
                function(result)
                {
                    console.log(result); // 输出回调数据到控制台
                    if (result.status == 200)
                    {
                        // 获取中奖信息
                        var prize_id = result.content.prize_id;

                        $("#message").html('')

                        // 计算已中奖项在奖盘中是第几个区域
                        var count = 0
                        for (var key in list)
                        {
                            if (list.hasOwnProperty(key))
                            {
                                if (prize_id == list[key].id)
                                {
                                    break;
                                }
                                count++
                            }
                        }

                        // 旋转奖盘并提示中奖信息
                        wheelSurf.lottery((count * angel + angel / 2), function () {
                            // 提示中奖信息
                            for (var index in prizes)
                            {
                                console.log(prizes[index])
                                if (prizes[index].prize_id == prize_id)
                                {
                                    var reminder = ''; // 抽奖结果提示
                                    if (prizes[index].template_id != '')
                                    {
                                        reminder = '恭喜！您已抽到奖品"' + prizes[index].name + '"，优惠券已发放到卡包！'
                                    } else {
                                        reminder = '恭喜！您已抽到奖品"' + prizes[index].name + '"，请添加进来商城客服微信，我们会与您沟通奖品发送事宜！';
                                        // 弹出客服微信二维码
                                        $('[data-window-name=customer-service]').show();
                                    }

                                    alert(reminder);
                                    break
                                }
                            }

                        })

                        // 使用一次抽奖机会
                        use_chance()

                    } else {
                        alert(result.content.error.message);
                    }

                    // 标记未在抽奖中
                    throttle = true;
                }
            )
            // end 进行抽奖
        })
    });
</script>
