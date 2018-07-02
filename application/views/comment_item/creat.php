
    <script src="<?php echo CDN_URL ?>js/rem.js"></script>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css"/>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/normal.css"/>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/base.css"/>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/evaluate.css"/>


<div class="box">
    <div class="line"></div>
    <div class="evaluate">
        <div class="item_eva">
            <span>商品评价</span>
            <i class="icon-xuanzhong2"></i>
            <i class="icon-xuanzhong2"></i>
            <i class="icon-weixuanzhong2"></i>
            <i class="icon-weixuanzhong2"></i>
            <i class="icon-weixuanzhong2"></i>
        </div>
        <div class="input-content" contenteditable="true">
            商品怎么样，写点评论，给其他想买的小伙伴做个参考呗。
        </div>
        <div class="up-img clearfix">
            <div class="img-list">
                <img src="<?php echo CDN_URL ?>media/order/orderimg.png" alt=""/>
            </div>
            <div class="img-list">
                <img src="<?php echo CDN_URL ?>media/order/orderimg.png" alt=""/>
            </div>
            <div class="img-list">
                <img src="<?php echo CDN_URL ?>media/order/orderimg.png" alt=""/>
            </div>
            <div class="img-list">
                <img src="<?php echo CDN_URL ?>media/order/orderimg.png" alt=""/>
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
    <div class="Submission-evaluation">发表评论</div>
</div>

<script src="<?php echoCDN _URL ?>js/jquery-3.2.1.min.js"></script>
<script>

    $(document).ready(function(){
        $('.item_eva i').click(function(){
            var index =$(this).index();
            console.log(index);
            $('.item_eva i').slice(0, index).addClass('icon-xuanzhong2').removeClass('icon-weixuanzhong2');
            $('.item_eva i').slice(index, 5).addClass('icon-weixuanzhong2').removeClass('icon-xuanzhong2');
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