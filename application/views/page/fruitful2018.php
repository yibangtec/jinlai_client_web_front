<style>
    body {background:url("/media/fruitful2018/bg@3x.png") repeat-y center 500px;background-size:750px auto;}

    #content {color:#fff;font-size:24px;font-family:"苹方",sans-serif;text-align:center;background:url("/media/fruitful2018/bg-top@3x.png") no-repeat center top;background-size:750px auto;padding-top:500px;}
        #content a {color:#fff;}

    #brief {background:url("/media/fruitful2018/bg-brief@3x.png") no-repeat center top;background-size:750px auto;height:882px;}

    #lottery {background:url("/media/fruitful2018/bg-lottery@3x.png") no-repeat center top;background-size:750px auto;}

    #description {background-color:#7f0dc5;width:670px;height:220px;margin:40px auto 130px;border:1px solid #9719d5;border-radius:8px;}

    #items {width:670px;margin:0 auto;}
        .section {width:100%;margin-bottom:100px;}
            .section h2 {font-size:36px;font-weight:bold;background:url("/media/fruitful2018/bg-title@3x.png") no-repeat center center;background-size:750px auto;height:104px;padding-top:40px;}

            .section>ul {margin-top:46px;overflow:hidden;}
                .section>ul>li {float:left;margin-bottom:20px;margin-right:20px;border:2px solid #6a06e0;border-radius:10px;padding:10px;box-shadow:0 0 10px #5e0797;}
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
                    .triple .prices {background:#f90131 url("/media/fruitful2018/bg-prices@3x.png") no-repeat right center;background-size:16px 26px;height:26px;line-height:26px;margin:12px 10px 0;}
                        .triple .prices>li:first-child {color:#f9ff48;}
                    .triple del {font-size:18px;}
                .section>ul>li:first-child {width:100%;margin-left:0;}
                    .section>ul>li:first-child .item-figure {width:100%;}
                    .section>ul>li:first-child h3, .section>ul>li:first-child ul {display:none;}

            .section>div {margin-top:60px;}

     .lottery {position:relative;display: inline-block;}
    .lottery img {position:absolute;top:50%;left:50%;width:152px;margin-left:-76px;margin-top:-82px;cursor:pointer;}

    #message {position:absolute;top:0;left:10%;}
</style>

<div id=content>

    <!-- 活动信息 -->
    <div id=brief>

        <!-- 简介、奖品、活动 -->
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

        <!-- 投票入口 -->
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

    </div>

    <!-- 抽奖 -->
    <div id=lottery>

        <!-- 抽奖盘 -->
        <div id=plate>
            <div class=lottery>
                <canvas id=myCanvas width="600" height="600">
                    当前浏览器版本过低，请使用其他浏览器尝试
                </canvas>
                <p id=message></p>
                <img id=start src="/media/fruitful2018/start.png">
            </div>
        </div>

        <!-- 抽奖盘 -->
        <ul id=actions>
            <!-- 抽奖次数 -->
            <li>抽奖次数 <span data-name=chances>0</span>次</li>

            <!-- 分享 -->
            <li data-name=action>分享</li>
        </ul>

        <div id=description>
            <p>抽奖介绍文案，待孙总提供。</p>
        </div>
    </div>

    <!-- 活动商品 -->
    <div id=items>

    </div>
</div>

<?php
    $items = array();
    $items[] = array(
        'title' => '进来爆款',
        'items' => array(
            array(
                'item_id' => '4762',
                'url_image_main' => '',
                'name' => '网纹瓜',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
            array(
                'item_id' => '',
                'url_image_main' => '',
                'name' => '桃本桃水晶皇后',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
            array(
                'item_id' => '4825',
                'url_image_main' => '/media/fruitful2018/items/1-3@2x.png',
                'name' => '泰国榴莲',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
            array(
                'item_id' => '5641',
                'url_image_main' => '',
                'name' => '新西兰金果4个装',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
            array(
                'item_id' => '',
                'url_image_main' => '/media/fruitful2018/items/1-5@2x.png',
                'name' => '混合果盒',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
        )
    );

    $items[] = array(
        'title' => '热卖力荐',
        'items' => array(
            array(
                'item_id' => '',
                'url_image_main' => '',
                'name' => '沂蒙食舍双色桃拼',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
            array(
                'item_id' => '4760',
                'url_image_main' => '/media/fruitful2018/items/2-2@2x.png',
                'name' => '火龙果',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
            array(
                'item_id' => '5642',
                'url_image_main' => '',
                'name' => '上海麒麟西瓜',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
            array(
                'item_id' => '4822',
                'url_image_main' => '/media/fruitful2018/items/2-4@2x.png',
                'name' => '蓝莓',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
            array(
                'item_id' => '',
                'url_image_main' => '',
                'name' => '都知果蜜瓜',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
            array(
                'item_id' => '',
                'url_image_main' => '/media/fruitful2018/items/2-6@2x.png',
                'name' => '泰国山竹5只装',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
            array(
                'item_id' => '',
                'url_image_main' => '/media/fruitful2018/items/2-7@2x.png',
                'name' => '泰国榴莲5.5-6斤装',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
        )
    );

    $items[] = array(
        'title' => '全球精品',
        'items' => array(
            array(
                'item_id' => '4752',
                'url_image_main' => '',
                'name' => '新西兰金果X6',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
            array(
                'item_id' => '4736',
                'url_image_main' => '/media/fruitful2018/items/3-2@2x.png',
                'name' => '进口奇士橙',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
            array(
                'item_id' => '4791',
                'url_image_main' => '',
                'name' => '泰国山竹',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
            array(
                'item_id' => '5643',
                'url_image_main' => '',
                'name' => '泰国香水椰',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
            array(
                'item_id' => '4786',
                'url_image_main' => '',
                'name' => '菲诺椰子冻*2',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
        )
    );

    $items[] = array(
        'title' => '超值精品1+',
        'items' => array(
            array(
                'item_id' => '4816',
                'url_image_main' => '',
                'name' => '阳山水蜜桃',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
            array(
                'item_id' => '4757',
                'url_image_main' => '',
                'name' => '台湾木瓜',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
            array(
                'item_id' => '4776',
                'url_image_main' => '',
                'name' => '库尔勒香梨',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
            array(
                'item_id' => '',
                'url_image_main' => '',
                'name' => '都知果蜜瓜',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
            array(
                'item_id' => '4748',
                'url_image_main' => '',
                'name' => '台湾水仙芒',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
            array(
                'item_id' => '4779',
                'url_image_main' => '/media/fruitful2018/items/4-6@2x.png',
                'name' => '大荔冬枣',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
            array(
                'item_id' => '5640',
                'url_image_main' => '/media/fruitful2018/items/4-7@2x.png',
                'name' => '泰国榴莲6-6.5斤装 ',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
            array(
                'item_id' => '4755',
                'url_image_main' => '',
                'name' => '精品油桃',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
            array(
                'item_id' => '4739',
                'url_image_main' => '/media/fruitful2018/items/4-9@2x.png',
                'name' => '桂味荔枝',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),
            array(
                'item_id' => '4739',
                'url_image_main' => '',
                'name' => '桂味荔枝',
                'price' => '25.68',
                'tag_price' => '30.5',
            ),

        )
    );
?>

<script>
    $(function(){
        // 获取抽奖活动规则
        //var item = <?php echo json_encode($item) ?>;

        // 相关商品
        var items = <?php echo json_encode($items) ?>;
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
                '<div>' +
                '</div>' +
                '</div>';
            //console.log(dom);

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

        // 点击分享按钮可获得一次抽奖机会


    });
</script>

<!-- 抽奖转盘 -->
<script src="/js/turntable.js"></script>
<script>
    var wheelSurf
    // 初始化装盘数据 正常情况下应该由后台返回
    var initData = {
        "success": true,
        "list": [
            {
                "id": 100,
                "name": "1000元水果零食大礼包",
                "image": "/media/fruitful2018/reward1.png",
                "rank":1,
                "percent":1
            },
            {
                "id": 101,
                "name": "泰国金枕头榴莲*1",
                "image": "/media/fruitful2018/reward1.png",
                "rank":2,
                "percent":3
            },
            {
                "id": 102,
                "name": "抖音网红妖娆花*1",
                "image": "/media/fruitful2018/reward1.png",
                "rank":3,
                "percent":6
            },
            {
                "id": 103,
                "name": "鲜果节专用红包5元",
                "image": "/media/fruitful2018/reward1.png",
                "rank":4,
                "percent":90
            }
        ]
    }

    // 计算分配获奖概率(前提所有奖品概率相加100%)
    function getGift(){
        var percent = Math.random()*100
        var totalPercent = 0
        for(var i = 0 ,l = initData.list.length;i<l;i++){
            totalPercent += initData.list[i].percent
            if(percent<=totalPercent){
                return initData.list[i]
            }
        }
    }

    var list = {}

    var angel = 360 / initData.list.length
    // 格式化成插件需要的奖品列表格式
    for (var i = 0, l = initData.list.length; i < l; i++) {
        list[initData.list[i].rank] = {
            id:initData.list[i].id,
            name: initData.list[i].name,
            image: initData.list[i].image
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
    var throttle = true;
    $(function(){
        $("#start").on('click', function () {
            console.log(list);
            var winData = getGift() // 正常情况下获奖信息应该由后台返回

            $("#message").html('')
            if(!throttle){
                return false;
            }
            throttle = false;
            var count = 0
            // 计算奖品角度

            for (const key in list) {
                if (list.hasOwnProperty(key)) {
                    if (winData.id == list[key].id) {
                        break;
                    }
                    count++
                }
            }

            // 转盘抽奖
            wheelSurf.lottery((count * angel + angel / 2), function () {
                $("#message").html(winData.name)
                throttle = true;
            })
        })
    });


</script>