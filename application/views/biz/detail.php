<!--<base href="--><?php //echo $this->media_root ?><!--">--><base href="<?php echo MEDIA_URL.'ornament_biz/' ?>"><style>    body,html{        overflow-x:hidden;    }    .shopBg{        padding-bottom: .2rem;    }    .bannerWrap{        margin-top: .15rem;        width: 94.7%;        height: 3.4rem;        background: #efefef;    }    .pictitle{        background:url(<?php echo CDN_URL ?>media/biz/linebar.png) no-repeat center left;         background-size:cover ;    }    .shopindextextnav{        margin-top: 0px;    }    .shopindextextnav li i{        position: absolute;        top: .36rem;        right: -.25rem;    }     .content .item{        display: -webkit-box;        display: -webkit-flex;        display: -ms-flexbox;        display: flex;        -ms-flex-align:center;        -webkit-box-align:center;        box-align:center;        -webkit-align-items:center;        align-items:center;        padding:3.125%;        border-bottom: 1px solid #ddd;        color: #333;        text-decoration: none;    }    .content .item img{        display: block;        width: 40px;        height: 40px;        border:1px solid #ddd;    }    .content .item h3{        display: block;        -webkit-box-flex: 1;        -webkit-flex: 1;        -ms-flex: 1;        flex: 1;        width: 100%;        max-height: 40px;        overflow: hidden;        line-height: 20px;        margin: 0 10px;        font-size: 1.2rem;    }    .content .item .date{        display: block;        height: 20px;        line-height: 20px;        color: #999;    }    .opacity{        -webkit-animation: opacity 0.3s linear;        animation: opacity 0.3s linear;    }    /*.cardnavcontent{        padding-bottom: .8rem;    }*/    .fruidWrap{        width: 7.1rem;        padding: 0px;        background: none;        height: 2.3rem;        margin-bottom: .3rem;            }    .shopindexlist{        padding-bottom: 1.1rem;    }    .fruidWrap li{        width: 2.3rem;        height: 2.3rem;        margin-right: 0px;        margin-left: .1rem;    }    .fruidWrap ul{        margin-left: -.1rem;    }    .swiper-container_detail{        width: 100%;        overflow: hidden;        position: relative;        height: 100%;        border-radius: .2rem;        z-index: 1;    }    #nav-main {    background: #fff;    height: .92rem;    width: 100%;    padding: .17rem 0;    padding-left: .2rem;    padding-right: .2rem;    /* border-top: 1px solid #c9caca; */    /* border-radius: 20px 20px 0 0; */    font-size: .24rem;    position: fixed;    bottom: 0;    color: #3E3A39;    border-radius: 0 !important;    padding: 0px !important;}#nav-main li:last-of-type {   margin-left: 0px;}/*.swiper-container_fruit{    height: 100%;}*/.fruidWrap .swiper-slide img{    height: 2.3rem;}.biz_fenlei_btn{        width: 5.4rem;    text-align: center;    float: left;    line-height: .87rem;}.biz_dot{    margin-top: .27rem;    margin-left: .13rem;    z-index: 9999999;}.biz_dot li{        float: left;    width: .08rem;    background: #fff;    height: .08rem;    float: left;    margin-left: .1rem;    border-radius: .02rem;}.dotshowlist{        width: 2.1rem;    background: rgba(0,0,0,.5);    color: #fff;    font-size: .26rem;    border-radius: .1rem;    position: absolute;    right: .1rem;    top: .7rem;    }.myarr{        border: 10px solid transparent;    border-bottom-color: #343131;    position: absolute;    right: .45rem;    top: .4rem;    display: none;}.dotshowlist p{    height: .76rem;    line-height: .76rem;    position: relative;}.dotshowlist .bizarr{    position: absolute;    top: -.08rem;    right: .45rem;}.dotshowlist .bizarr img{    display: block;    width: 100%;}.shang{    top: .24rem !important;    transform: rotate(180deg);    right: -.247rem !important;    color: #999;}.xia{    color: #999;}.dotshowlist p b{        height: 1px;    background: #fff;    transform: scaleY(0.5);    transform-origin: 0 0;    overflow: hidden;    display: block;    width: 100%;    position: absolute;    bottom: 0;}.dotshowlist i{    font-size: .32rem;    margin-left: .2rem;}    /* 店铺装修自定义内容 */    #home_html {width:100%;overflow:hidden;}        #home_html * {display:block;max-width:100%;}</style><?php    if ($this->user_agent['is_wechat'] === TRUE || $this->user_agent['is_desktop'] === TRUE):?>    <!--商品筛选器-->    <div class=screening>        <span>价格区间(元)</span>        <p>            <input type=number placeholder="最低价" min=1 step=1 class="price_min">            <b></b>            <input type=number placeholder="最高价" min=1 step=1 class="price_max">        </p>        <div class="screeningbtn">            <a href="javascript:;" class="price_reset">重置</a>            <a href="javascript:;" class="price_finish">完成</a>        </div>    </div>    <!--店铺首页商家信息开始-->    <div class="shopBg clearfix">        <div class="shopTitle">            <div class="shopback fl">                <i class="icon-Back"></i>            </div>            <div class="shopSearch fl">                <input type=search placeholder="店内搜索">                <i class="icon-搜索"></i>            </div>            <div class="biz_gouwuche fl">                <a title="购物车" href="<?php echo base_url('cart') ?>">                    <i class="icon-gouwuche-2" style="color: #fff;font-size: .4rem;float: left;margin-left: .8rem;margin-top: .1rem;"></i>                </a>            </div>            <div class="biz_dot fl">                <ul>                    <li></li>                    <li></li>                    <li></li>                </ul>            </div>            <div class="myarr">                                    </div>            <div class="dotshowlist" style="display: none;">                <div class="bizarr">                    <img src="<?php echo CDN_URL ?>media/home/biz_arr.png" alt="箭头">                </div>                <p>                    <a title="首页" href="<?php echo base_url() ?>">                        <i class="icon-shouye_xiala"></i>                        <span>首页</span>                        <b></b>                    </a>                </p>                <p>                    <a title="个人中心" href="<?php echo base_url('mine') ?>">                        <i class="icon-wode-2"></i>                        <span>我的</span>                    </a>                </p>            </div>        </div>                <div class="shopinfo wid710 auto clearfix">            <div class="shoppic fl">                <img src="<?php echo $this->media_root.$item['url_logo'] ?>">            </div>            <!--商家名字等信息-->            <div class="shopname fl">                <span class="fl"><?php echo $item['brief_name'] ?></span>                <a href="#" class="fl">入驻商家</a>            </div>            <div class="gnwrap fr">                <!--<a href="#" class="pay">充值</a>-->                <a title="切换商家关注" href="javascript:;" class="focus"></a>            </div>        </div>    </div>        <!--tab切换区域开始-->        <div class="shopIndextabtitle wid710 auto">            <ul class="clearfix">                <li class="current">首页</li>                <li>                    <span>商品</span>                </li>                <li>服务</li>                <li>活动商品</li>            </ul>        </div>        <!--底部导航区域-->        <nav id=nav-main>            <ul>                <li class=vice-button>                    <i class="icon-ffffff4" style="font-size: .4rem;"></i>                    <!--<a title="客服" href="<?php echo base_url('message?biz_id='.$item['biz_id']) ?>">客服</a>-->                    <a title="客服" href="tel:<?php echo $item['tel_public'] ?>">客服</a>                </li>                <li class=vice-button everfocus>                    <i class="icon-guanzhu_bk everfocus" style="font-size: .4rem;"></i>                    <a title="切换商家关注" href="javascript:;" class="everfocus" id="heart"></a>                </li>                <li class=biz_fenlei_btn>                    <a href="<?php echo base_url('item_category_biz?biz_id='.$item['biz_id']) ?>">宝贝分类</a>                </li>            </ul>        </nav>        <?php endif ?><div id="detailList">    <div class="bussinesswrap" style="display: block;">        <?php            // 若指定了自定义页面内容，直接输出            if ( ! empty($item['ornament']['home_html'])):        ?>        <div id=home_html>        <?php echo $item['ornament']['home_html'] ?>        </div>        <?php            // 否则载入页面装修模块            else:                require_once(VIEWPATH. 'biz/ornament.php');            endif;        ?>    </div><div class="bussinesswrap clearfix">    <!--店家商品分类导航条-->    <div class="shopindextextnav">        <ul>            <li class="bussinesscur zonghe">综合</li>            <li data-order_by="sold_overall" class="xiaoliang">销量</li>            <li data-order_by="time_publish" class="shangxin">新品</li>            <li data-order_by="price" class="jiage">价格<i class="icon-xiajiantou shang"></i><i class="icon-xiajiantou xia"></i><span class="line"></span></li>            <i class="icon-shaixuan"></i>        </ul>    </div>    <div class="shopindexlist wid710 mt10 clearfix">        <div class="content">            <ul id="bizDetailList" class="lists">            </ul>        </div>            </div></div><div class="bussinesswrap">    <div class="shopindexlist wid710 mt10 clearfix">        <ul>            <!--<li>                <img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_2.jpg"/>                <h1>Nike登山运动装备你的人生</h1>                <p>                                        <span>¥</span>                    <span>239</span>                    <span class="buyed fr">                        成交<b>123212</b>笔                    </span>                                    </p>            </li>            <li>                <img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_2.jpg"/>                <h1>Nike登山运动装备你的人生</h1>                <p>                                        <span>¥</span>                    <span>239</span>                    <span class="buyed fr">                        成交<b>123212</b>笔                    </span>                                    </p>            </li>            <li>                <img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_2.jpg"/>                <h1>Nike登山运动装备你的人生</h1>                <p>                                        <span>¥</span>                    <span>239</span>                    <span class="buyed fr">                        成交<b>123212</b>笔                    </span>                                    </p>            </li>            <li>                <img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_2.jpg"/>                <h1>Nike登山运动装备你的人生</h1>                <p>                    <span>¥</span>                    <span>239</span>                    <span class="buyed fr">                        成交<b>123212</b>笔                    </span>                                    </p>            </li>            <li>                <img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_2.jpg"/>                <h1>Nike登山运动装备你的人生</h1>                <p>                                        <span>¥</span>                    <span>239</span>                    <span class="buyed fr">                        成交<b>123212</b>笔                    </span>                                    </p>            </li>-->            <img src="<?php echo CDN_URL ?>media/coupon/nocoupon@3x.png" style="display:block;width: 4rem !important;height: auto !important;margin: 0 auto;margin-top: .5rem;" alt="">        </ul>            </div></div><div class="bussinesswrap">    <div class="shopindexlist wid710 mt10 clearfix">        <ul>            <!--<li>                <img data-src="<?php echo CDN_URL ?>media/home/yundongjiankang/160x160_2.jpg"/>                <h1>Nike登山运动装备你的人ss</h1>                <p>                    <span>¥</span>                    <span>239</span>                    <span class="buyed fr">                        成交<b>123212</b>笔                    </span>                                    </p>            </li>-->            <img src="<?php echo CDN_URL ?>media/coupon/nocoupon@3x.png" style="display:block;width: 4rem !important;height: auto !important;margin: 0 auto;margin-top: .5rem;" alt="">        </ul>            </div></div></div><!--<div class="mask_biz"></div>--><script>    // 分页参数    var limit = <?php echo $limit ?>; // 每次获取多少条数据    var offset = <?php echo $offset ?>; // 页面生成时已跳过多少行数据    var shopClass;    var by_price = 0;    var page = 0;    // 商家信息    var item = <?php echo json_encode($item) ?>; // 商家信息    var item_image_root = '<?php echo MEDIA_URL.'item/' ?>'; // 商品媒体文件根目录    // 商品列表API路径    var api_item_index = api_url + 'item/index';    // 商品详情页路径    var page_item_detail = base_url + 'item/detail?id=';    // 商家商品    var items = <?php echo json_encode($items) ?>;    //console.log(item.biz_id);//  function getZonghe()//  {//      $('#bizDetailList').html('');//      for (var i=0; i<items.length; i++)//      {//          // 主图字段原始值//          var url_image_main = items[i].url_image_main;//          // 主图URL；若不以"https://"、"http://"开头，则需拼上商品媒体文件根目录//          var real_url_image_main = url_image_main.indexOf('http') != -1? url_image_main: (item_image_root + url_image_main);//          // 生成并渲染单品DOM//          var dom_item =//              '<li>' +//              '   <a href="<?php echo base_url('item/detail?id=')?>'+ items[i].item_id +'">' +//              '       <img src="'+ real_url_image_main + '">' +//              '       <h1>' + items[i].name + '</h1>' +//              '       <p>' +//              '           <span>￥' + items[i].price + '</span>' +//              (items[i].tag_price > items[i].price? '       <del>￥' + items[i].tag_price + '</del>': '') +//              '       </p>' +//              '   </a>' +//              '</li>';//          $('#bizDetailList').append(dom_item);//      }//     //  }//  getZonghe();    $(function(){        var biz_flag = 0;        $('.biz_dot').on('click',function(){            if (biz_flag == 0)            {                $('.dotshowlist').show();                biz_flag = 1;            }            else            {                $('.dotshowlist').hide();                biz_flag = 0;            }        });        // 店铺装修信息        var ornament = item.ornament;        console.log(ornament);        $('.shopBg').css({            'background':'url("'+ media_url+'ornament_biz/'+ornament.main_figure_url +'") no-repeat center top'        });        if (ornament.main_figure_url != '')        {            $('.shopname span').eq(0).css('color','#fff');        }        if ($('.bannerWrap').find('img').length >= 1)        {            var swiperIndex = new Swiper('.swiper-container_detail',            {                pagination: '.swiper-pagination',                paginationClickable: true,                autoplay: 2000,                loop: true            });        };});    $(function(){        // 图片lazyload        var lazyLoadImg = new LazyLoadImg(        {            el: document.querySelector('#detailList'),            mode: 'default',            time: 300,            complete: true,            position: {                top: 0,                right: 0,                bottom: 0,                left: 0            },            before: function(el) {                el.src = cdn_url + 'media/home/default.png';                if (el.src = cdn_url + 'media/home/default.png')                {                    el.style.width = 'auto';                    el.style.display = 'block';                    el.style.margin = '0 auto';                    el.style.border = 'none'                }            },            success: function(el) {                el.classList.add('success')            },            error: function(el) {                el.src = cdn_url + 'media/home/default.png'            }        });        $.ajax({            url : api_url + 'fav_biz/index',            data : {app_type:'client',user_id:user_id, biz_id:item.biz_id},            success : function(res){            for (var i = 0;i < res.content.length;i++)            {                if(res.content[i].biz_id == item.biz_id){                    $('.focus').text('已关注');                    $('.everfocus').css('color','#ff5171');                    $('.everfocus').eq(1).text('已关注');                };            }            }        });        $('.focus').on('click',function(){            if($('.everfocus').eq(1).text() == '已关注'){                var cancelfocus = confirm('您确定要取消收藏此店铺吗?');                if(cancelfocus){                        $.ajax({                url : api_url + 'fav_biz/edit_bulk',                data : {app_type:'client', user_id:user_id, ids:item.biz_id, operation:'delete'},                success : function(res){                    $('.focus').text('关注');                    $('.everfocus').css('color','#3E3A39');                    $('.everfocus').eq(1).text('加关注');                }        });                }                else{                                    }                        }            else{                $.ajax({                url : api_url + 'fav_biz/create',                data : {app_type:'client',user_id:user_id, biz_id:item.biz_id},                success : function(res){                    $('.focus').text('已关注');                    $('.everfocus').css('color','#ff5171');                    $('.everfocus').eq(1).text('已关注');                }        });            }        });        $('#heart').on('click',function(){            if($(this).text() == '已关注'){                    var cancelfocus = confirm('您确定要取消收藏此店铺吗?');                if(cancelfocus){                        $.ajax({                url : api_url + 'fav_biz/edit_certain',                data : {app_type:'client',user_id:user_id,biz_id : item.biz_id},                success : function(res){                    $('.focus').text('关注');                    $('.everfocus').css('color','#3E3A39');                                        $('.everfocus').eq(1).text('加关注');                }        });                }                else{                }            }            else{                    $.ajax({                url : api_url + 'fav_biz/create',                data : {app_type:'client',user_id:user_id,biz_id : item.biz_id},                success : function(res){                    $('.focus').text('已关注');                    $('.everfocus').css('color','#ff5171');                    $('.everfocus').eq(1).text('已关注');                }        });            }        })// 按照销量排行var sold_overall = 0;$('.xiaoliang').on('click',function(){        page = 0;    shopClass = $(this).text();        if(sold_overall == 0){            $.ajax({            url : api_item_index,            data : {app_type:'client',limit:10,biz_id:item.biz_id,orderby_sold_overall:'DESC'},            success : function(res){                $('#bizDetailList').html('');                                var con = res.content;                for (var i = 0;i < con.length;i++)                {                    var oLi = '<li><a href="'+ page_item_detail+con[i].item_id +'"><img src="'+(con[i].url_image_main.indexOf('http') != -1? con[i].url_image_main: (item_image_root + con[i].url_image_main))+'"><h1>'+con[i].name+'</h1><p><span>¥'+con[i].price+'</span></p></a></li>';                    $('#bizDetailList').append(oLi);                                    }            }        });        }});// 按发布时间排行var time_publish = 0;$('.shangxin').on('click',function(){    shopClass = $(this).text();    page = 0;        if(time_publish == 0){            $.ajax({            url : api_item_index,            data : {app_type:'client',limit:10,biz_id:item.biz_id,orderby_time_publish:'DESC'},            success : function(res){                $('.shangxin').find('.shang').css('color','#999');                $('.shangxin').find('.xia').css('color','#fd799c');                $('#bizDetailList').html('');                var con = res.content;                for (var i = 0;i < con.length;i++) {                    var oLi = '<li><a href="'+ page_item_detail+con[i].item_id +'"><img src="'+(con[i].url_image_main.indexOf('http') != -1? con[i].url_image_main: (item_image_root + con[i].url_image_main))+'"><h1>'+con[i].name+'</h1><p><span>¥'+con[i].price+'</span></p></a></li>';                $('#bizDetailList').append(oLi);                                    }            }        });        }        });//按价格$('.jiage').on('click',function(){    shopClass = $(this).text();    page = 0;    $('.shang').css('color','#999');    $('.xia').css('color','#999');        if(by_price == 0){            $.ajax({            url : api_item_index,            data : {app_type:'client',limit:10,biz_id:item.biz_id,orderby_price:'DESC'},            success : function(res){                $('.jiage').find('.shang').css('color','#999');                $('.jiage').find('.xia').css('color','#fd799c');                $('#bizDetailList').html('');                var con = res.content;                for (var i = 0;i < con.length;i++) {                    var oLi = '<li><a href="'+ page_item_detail+con[i].item_id +'"><img src="'+(con[i].url_image_main.indexOf('http') != -1? con[i].url_image_main: (item_image_root + con[i].url_image_main))+'"><h1>'+con[i].name+'</h1><p><span>¥'+con[i].price+'</span></p></a></li>';                $('#bizDetailList').append(oLi);                                    }            }        });        by_price = 1;        }        else{            $.ajax({            url : api_item_index,            data : {app_type:'client',limit:10,biz_id:item.biz_id,orderby_price:'ASC'},            success : function(res){                $('.jiage').find('.shang').css('color','#fd799c');                $('.jiage').find('.xia').css('color','#999');                $('#bizDetailList').html('');                var con = res.content;                for (var i = 0;i < con.length;i++) {                    var oLi = '<li><a href="'+ page_item_detail+con[i].item_id +'"><img src="'+(con[i].url_image_main.indexOf('http') != -1? con[i].url_image_main: (item_image_root + con[i].url_image_main))+'"><h1>'+con[i].name+'</h1><p><span>¥'+con[i].price+'</span></p></a></li>';                $('#bizDetailList').append(oLi);                                    }            }        });            by_price = 0;        }        });$('.zonghe').on('click',function(){    shopClass = $(this).text();    page = 0;            $.ajax({            url : api_item_index,            data : {app_type:'client',limit:10,biz_id:item.biz_id},            success : function(res){                $('#bizDetailList').html('');                                var con = res.content;                for (var i = 0;i < con.length;i++)                {                    var oLi = '<li><a href="'+ page_item_detail+con[i].item_id +'"><img src="'+(con[i].url_image_main.indexOf('http') != -1? con[i].url_image_main: (item_image_root + con[i].url_image_main))+'"><h1>'+con[i].name+'</h1><p><span>¥'+con[i].price+'</span></p></a></li>';                    $('#bizDetailList').append(oLi);                                    }            }        });});$('.zonghe').click();$('.price_finish').on('click',function(){        $(".screening").fadeOut();        $('body,html').css({            "overflow-y": "auto"        });        $.ajax({            url : api_item_index,            data : {app_type:'client',limit:10,biz_id:item.biz_id,price_min:$('.price_min').val(),price_max:$('.price_max').val()},            success : function(res){                $('#bizDetailList').html('');                var con = res.content;                for (var i = 0;i < con.length;i++) {                    var oLi = '<li><a href="'+ page_item_detail+con[i].item_id +'"><img src="'+(con[i].url_image_main.indexOf('http') != -1? con[i].url_image_main: (item_image_root + con[i].url_image_main))+'"><h1>'+con[i].name+'</h1><p><span>¥'+con[i].price+'</span></p></a></li>';                $('#bizDetailList').append(oLi);                                    }            }        });});$('.price_reset').on('click',function(){    $('.price_min').val('');    $('.price_max').val('');})            });    //下拉加载更多     // 页数    // 每页展示10个    var size = 10;    // dropload    $('.content').dropload({        scrollArea : window,        domUp : {            domClass   : 'dropload-up',            domRefresh : '<div class="dropload-refresh">↓下拉刷新</div>',            domUpdate  : '<div class="dropload-update">↑释放更新</div>',            domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中</div>'        },        domDown : {            domClass   : 'dropload-down',            domRefresh : '<div class="dropload-refresh">↑上拉加载更多</div>',            domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中</div>',            domNoData  : '<div class="dropload-noData">暂无数据</div>'        },        loadUpFn : function(me){                //page清空页面才能刷新                page = 0;                    if(shopClass == '综合'){                $.ajax({                url : api_item_index,                data : {app_type:'client',limit:10,biz_id:item.biz_id,offset:page},                success : function(res){                    $('#bizDetailList').html('');                    var con = res.content;                    for (var i = 0;i < con.length;i++)                    {                        var oLi = '<li><a href="'+ page_item_detail+con[i].item_id +'"><img src="'+(con[i].url_image_main.indexOf('http') != -1? con[i].url_image_main: (item_image_root + con[i].url_image_main))+'"><h1>'+con[i].name+'</h1><p><span>¥'+con[i].price+'</span></p></a></li>';                        $('#bizDetailList').append(oLi);                                            }                       // 每次数据加载完，必须重置                        me.resetload();                        // 重置页数，重新获取loadDownFn的数据                        page = 0;                        // 解锁loadDownFn里锁定的情况                        me.unlock();                        me.noData(false);            }        });                }                                if(shopClass == '销量'){                $.ajax({                url : api_item_index,                data : {app_type:'client',limit:10,biz_id:item.biz_id,orderby_sold_overall:'DESC',offset:page},                success : function(res){                    $('#bizDetailList').html('');                    var con = res.content;                    for (var i = 0;i < con.length;i++)                    {                        var oLi = '<li><a href="'+ page_item_detail+con[i].item_id +'"><img src="'+(con[i].url_image_main.indexOf('http') != -1? con[i].url_image_main: (item_image_root + con[i].url_image_main))+'"><h1>'+con[i].name+'</h1><p><span>¥'+con[i].price+'</span></p></a></li>';                        $('#bizDetailList').append(oLi);                                            }                       // 每次数据加载完，必须重置                        me.resetload();                        // 重置页数，重新获取loadDownFn的数据                        page = 0;                        // 解锁loadDownFn里锁定的情况                        me.unlock();                        me.noData(false);            }        });                }            if(shopClass == '新品'){                $.ajax({                url : api_item_index,                data : {app_type:'client',limit:10,biz_id:item.biz_id,orderby_time_publish:'DESC',offset:page},                success : function(res){                    $('#bizDetailList').html('');                    var con = res.content;                    for (var i = 0;i < con.length;i++)                    {                        var oLi = '<li><a href="'+ page_item_detail+con[i].item_id +'"><img src="'+(con[i].url_image_main.indexOf('http') != -1? con[i].url_image_main: (item_image_root + con[i].url_image_main))+'"><h1>'+con[i].name+'</h1><p><span>¥'+con[i].price+'</span></p></a></li>';                        $('#bizDetailList').append(oLi);                                            }                       // 每次数据加载完，必须重置                        me.resetload();                        // 重置页数，重新获取loadDownFn的数据                        page = 0;                        // 解锁loadDownFn里锁定的情况                        me.unlock();                        me.noData(false);            }        });                }                //价格刷新                    if(shopClass == '价格'){                        if(by_price == 0){                            $.ajax({                            url : api_item_index,                            data : {app_type:'client',limit:10,biz_id:item.biz_id,orderby_price:'ASC',offset:page},                            success : function(res){                                $('#bizDetailList').html('');                                var con = res.content;                                for (var i = 0;i < con.length;i++)                                {                                    var oLi = '<li><a href="'+ page_item_detail+con[i].item_id +'"><img src="'+(con[i].url_image_main.indexOf('http') != -1? con[i].url_image_main: (item_image_root + con[i].url_image_main))+'"><h1>'+con[i].name+'</h1><p><span>¥'+con[i].price+'</span></p></a></li>';                                    $('#bizDetailList').append(oLi);                                                                    }                                   // 每次数据加载完，必须重置                                    me.resetload();                                    // 重置页数，重新获取loadDownFn的数据                                    page = 0;                                    // 解锁loadDownFn里锁定的情况                                    me.unlock();                                    me.noData(false);                        }                });                        }                        else{                                $.ajax({                            url : api_item_index,                            data : {app_type:'client',limit:10,biz_id:item.biz_id,orderby_price:'DESC',offset:page},                            success : function(res){                                $('#bizDetailList').html('');                                var con = res.content;                                for (var i = 0;i < con.length;i++)                                {                                    var oLi = '<li><a href="'+ page_item_detail+con[i].item_id +'"><img src="'+(con[i].url_image_main.indexOf('http') != -1? con[i].url_image_main: (item_image_root + con[i].url_image_main))+'"><h1>'+con[i].name+'</h1><p><span>¥'+con[i].price+'</span></p></a></li>';                                    $('#bizDetailList').append(oLi);                                                                    }                                   // 每次数据加载完，必须重置                                    me.resetload();                                    // 重置页数，重新获取loadDownFn的数据                                    page = 0;                                    // 解锁loadDownFn里锁定的情况                                    me.unlock();                                    me.noData(false);                        }                });                        }                            }        },        loadDownFn : function(me){                        // 商品列表API路径                var api_item_index = api_url + 'item/index';                // 商品详情页路径                var page_item_detail = base_url + 'item/detail?id=';            page++;              if(shopClass == '综合'){            $.ajax({                url: api_item_index,                data : {app_type:'client',limit:10,biz_id:item.biz_id,offset:page},                success: function(res){                    var arrLen = res.content.length;                    if(arrLen > 0){                    var con = res.content;                    for (var i = 0;i < con.length;i++)                    {                        var oLi = '<li><a href="'+ page_item_detail+con[i].item_id +'"><img src="'+(con[i].url_image_main.indexOf('http') != -1? con[i].url_image_main: (item_image_root + con[i].url_image_main))+'"><h1>'+con[i].name+'</h1><p><span>¥'+con[i].price+'</span></p></a></li>';                        $('#bizDetailList').append(oLi);                                                                     }                    // 如果没有数据                    }else{                        // 锁定                        me.lock();                        // 无数据                        me.noData();                    }                me.resetload();                },                error: function(xhr, type){                    console.log('Ajax error!');                    // 即使加载出错，也得重置                    me.resetload();                }            });            }            if(shopClass == '销量'){                            $.ajax({                url: api_item_index,                data : {app_type:'client',limit:10,biz_id:item.biz_id,orderby_sold_overall:'DESC',offset:page},                success: function(res){                    var arrLen = res.content.length;                    if(arrLen > 0){                    var con = res.content;                    for (var i = 0;i < con.length;i++)                    {                        var oLi = '<li><a href="'+ page_item_detail+con[i].item_id +'"><img src="'+(con[i].url_image_main.indexOf('http') != -1? con[i].url_image_main: (item_image_root + con[i].url_image_main))+'"><h1>'+con[i].name+'</h1><p><span>¥'+con[i].price+'</span></p></a></li>';                        $('#bizDetailList').append(oLi);                                                                     }                    // 如果没有数据                    }else{                        // 锁定                        me.lock();                        // 无数据                        me.noData();                    }                    me.resetload();                                },                error: function(xhr, type){                    console.log('Ajax error!');                    // 即使加载出错，也得重置                    me.resetload();                }            });            }            if(shopClass == '新品'){                      $.ajax({                url: api_item_index,                data : {app_type:'client',limit:10,biz_id:item.biz_id,orderby_time_publish:'DESC',offset:page},                success: function(res){                    var arrLen = res.content.length;                    if(arrLen > 0){                    var con = res.content;                    for (var i = 0;i < con.length;i++)                    {                        var oLi = '<li><a href="'+ page_item_detail+con[i].item_id +'"><img src="'+(con[i].url_image_main.indexOf('http') != -1? con[i].url_image_main: (item_image_root + con[i].url_image_main))+'"><h1>'+con[i].name+'</h1><p><span>¥'+con[i].price+'</span></p></a></li>';                        $('#bizDetailList').append(oLi);                                                                     }                    // 如果没有数据                    }else{                        // 锁定                        me.lock();                        // 无数据                        me.noData();                    }                me.resetload();                },                error: function(xhr, type){                    console.log('Ajax error!');                    // 即使加载出错，也得重置                    me.resetload();                }            });            }            //价格加载更多              if(shopClass == '价格'){                if(by_price == 0){                        $.ajax({                url: api_item_index,                data : {app_type:'client',limit:10,biz_id:item.biz_id,orderby_price:'ASC',offset:page},                success: function(res){                    var arrLen = res.content.length;                    if(arrLen > 0){                    var con = res.content;                    for (var i = 0;i < con.length;i++)                    {                        var oLi = '<li><a href="'+ page_item_detail+con[i].item_id +'"><img src="'+(con[i].url_image_main.indexOf('http') != -1? con[i].url_image_main: (item_image_root + con[i].url_image_main))+'"><h1>'+con[i].name+'</h1><p><span>¥'+con[i].price+'</span></p></a></li>';                        $('#bizDetailList').append(oLi);                                                                    }                    // 如果没有数据                    }else{                        // 锁定                        me.lock();                        // 无数据                        me.noData();                    }                     me.resetload();                                },                error: function(xhr, type){                    console.log('Ajax error!');                    // 即使加载出错，也得重置                    me.resetload();                }            });                }                else{                $.ajax({                url: api_item_index,                data : {app_type:'client',limit:10,biz_id:item.biz_id,orderby_price:'DESC',offset:page},                success: function(res){                    var arrLen = res.content.length;                    if(arrLen > 0){                    var con = res.content;                    for (var i = 0;i < con.length;i++)                    {                        var oLi = '<li><a href="'+ page_item_detail+con[i].item_id +'"><img src="'+(con[i].url_image_main.indexOf('http') != -1? con[i].url_image_main: (item_image_root + con[i].url_image_main))+'"><h1>'+con[i].name+'</h1><p><span>¥'+con[i].price+'</span></p></a></li>';                        $('#bizDetailList').append(oLi);                                                                    }                    // 如果没有数据                    }else{                        // 锁定                        me.lock();                        // 无数据                        me.noData();                    }                 me.resetload();                },                error: function(xhr, type){                    console.log('Ajax error!');                    // 即使加载出错，也得重置                    me.resetload();                }            });                }                              }        },        threshold : 10    });</script>