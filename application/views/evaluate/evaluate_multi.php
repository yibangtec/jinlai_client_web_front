    <script src="../js/rem.js"></script>
    <link rel="stylesheet" href="../css/fontStyle.css"/>
    <link rel="stylesheet" href="../css/normal.css"/>
    <link rel="stylesheet" href="../css/base.css"/>
    <link rel="stylesheet" href="../css/evaluate.css"/>


<div class="box">
    <div class="line"></div>
    <div class="evaluate">

        <div class="item_eva">
            <span><img src="../media/order/orderimg.png" alt=""/>商品评价</span>
            <i class="icon-xuanzhong2 e-icon"></i>
            <i class="icon-xuanzhong2 e-icon"></i>
            <i class="icon-weixuanzhong2 e-icon"></i>
            <i class="icon-weixuanzhong2 e-icon"></i>
            <i class="icon-weixuanzhong2 e-icon"></i>
        </div>
        <div class="input-content" contenteditable="true">
            商品怎么样，写点评论，给其他想买的小伙伴做个参考呗。
        </div>
        <div class="up-img clearfix">
            <div class="img-list">
                <img src="../media/order/orderimg.png" alt=""/>
            </div>
            <div class="img-list">
                <img src="../media/order/orderimg.png" alt=""/>
            </div>
            <div class="img-list">
                <img src="../media/order/orderimg.png" alt=""/>
            </div>
            <div class="img-list">
                <img src="../media/order/orderimg.png" alt=""/>
            </div>
            <div class="file-btn">
                <i class="icon-xiangji"></i>
            </div>
        </div>
    </div>
    <div class="evaluate">
        <div class="item_eva">
            <span><img src="../media/order/orderimg.png" alt=""/>商品评价</span>
            <i class="icon-xuanzhong2 e-icon"></i>
            <i class="icon-xuanzhong2 e-icon"></i>
            <i class="icon-weixuanzhong2 e-icon"></i>
            <i class="icon-weixuanzhong2 e-icon"></i>
            <i class="icon-weixuanzhong2 e-icon"></i>
        </div>
        <div class="input-content" contenteditable="true">
            商品怎么样，写点评论，给其他想买的小伙伴做个参考呗。
        </div>
        <div class="up-img clearfix">
            <div class="img-list">
                <img src="../media/order/orderimg.png" alt=""/>
            </div>
            <div class="img-list">
                <img src="../media/order/orderimg.png" alt=""/>
            </div>
            <div class="img-list">
                <img src="../media/order/orderimg.png" alt=""/>
            </div>
            <div class="img-list">
                <img src="../media/order/orderimg.png" alt=""/>
            </div>
            <div class="file-btn">
                <i class="icon-xiangji"></i>
            </div>
        </div>
    </div>
    <div class="evaluate">

        <div class="item_eva">
            <span><img src="../media/order/orderimg.png" alt=""/>商品评价</span>
            <i class="icon-xuanzhong2 e-icon"></i>
            <i class="icon-xuanzhong2 e-icon"></i>
            <i class="icon-weixuanzhong2 e-icon"></i>
            <i class="icon-weixuanzhong2 e-icon"></i>
            <i class="icon-weixuanzhong2 e-icon"></i>
        </div>
        <div class="input-content" contenteditable="true">
            商品怎么样，写点评论，给其他想买的小伙伴做个参考呗。
        </div>
        <div class="up-img clearfix">
            <div class="img-list">
                <img src="../media/order/orderimg.png" alt=""/>
            </div>
            <div class="img-list">
                <img src="../media/order/orderimg.png" alt=""/>
            </div>
            <div class="img-list">
                <img src="../media/order/orderimg.png" alt=""/>
            </div>
            <div class="img-list">
                <img src="../media/order/orderimg.png" alt=""/>
            </div>
            <div class="file-btn">
                <i class="icon-xiangji"></i>
            </div>
        </div>
    </div>
    <div class="biz-eva">
        <div class="biz-name">
            <i class="icon-dianpu"></i><span>进来生鲜超市</span>
        </div>
        <div class="biz-server">
            <span>卖家服务</span>
            <i class="icon-weixuanzhong2"></i>
            <i class="icon-weixuanzhong2"></i>
            <i class="icon-weixuanzhong2"></i>
            <i class="icon-weixuanzhong2"></i>
            <i class="icon-weixuanzhong2"></i>
        </div>
        <div class="logistics-server">
            <span>物流服务</span>
            <i class="icon-weixuanzhong2"></i>
            <i class="icon-weixuanzhong2"></i>
            <i class="icon-weixuanzhong2"></i>
            <i class="icon-weixuanzhong2"></i>
            <i class="icon-weixuanzhong2"></i>
        </div>
    </div>
    <button class="Submit-evaluate">发表评论</button>
</div>

<script src="../js/jquery-3.2.1.min.js"></script>
<script>

    $(function(){
        $('.e-icon').on('click',function(){
            var index =$(this).index();
            console.log(index);
            console.log($('.e-icon').length);

            $(this).prevAll('.e-icon').addClass('icon-xuanzhong2').removeClass('icon-weixuanzhong2');
            $(this).addClass('icon-xuanzhong2').removeClass('icon-weixuanzhong2');
            $(this).nextAll('.e-icon').addClass('icon-weixuanzhong2').removeClass('icon-xuanzhong2');
        });
        $('.biz-server i').click(function(){
            var index =$(this).index();
            console.log(index);
            $('.biz-server i').slice(0, index).addClass('icon-xuanzhong2').removeClass('icon-weixuanzhong2');
            $('.biz-server i').slice(index, 5).addClass('icon-weixuanzhong2').removeClass('icon-xuanzhong2');
        });
        $('.logistics-server i').click(function(){
            var index =$(this).index();
            console.log(index);
            $('.logistics-server i').slice(0, index).addClass('icon-xuanzhong2').removeClass('icon-weixuanzhong2');
            $('.logistics-server i').slice(index, 5).addClass('icon-weixuanzhong2').removeClass('icon-xuanzhong2');
        });

    })


</script>
