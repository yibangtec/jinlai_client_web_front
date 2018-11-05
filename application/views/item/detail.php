<style>
#content{width:100%}
#content>*{color:#898989;background-color:#fff}
#content>section{padding:.3rem .2rem;border-radius:.2rem;margin:.2rem;position:relative}
#item-figure{border-radius:0 0 20px 20px}
#item-name{color:#3e3a39;font-size:.3rem;line-height:1;margin-bottom:.1rem;display:block;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;width:5rem}
#slogan{color:#9fa0a0;font-size:.24rem;margin-bottom:.3rem;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;width:5.63rem}
#item-description{background-color:transparent}
#item-description img,#item-description p,#item-description video{width:100%;max-width:100%;display:block}
.detailshare{width:.68rem;height:.52rem;border-left:1px solid #ddd;position:absolute;top:.38rem;right:.2rem}
.detailshare>.icon-dp_fenxiang:before{color:#393838;font-size:.4rem;position:absolute;left:.2rem;top:.0654443rem}
.icon-Arrow{position:absolute;right:.15rem;font-size:.3rem;top:.27rem;color:#aaa}
#service-promise ul{width:5.76rem;display:flex;justify-content:space-between}
#service-promise li{font-size:.24rem;color:#898989}
#service-promise li span{width:.24rem;height:.24rem;float:left;margin-right:.1rem}
#service-promise li span img{display:block;width:100%;height:100%}
#prices{font-size:.24rem}
#prices strong{color:#ff3649;font-size:44px;font-weight:400}
#prices small{font-size:32px}
#skus li{line-height:28px;padding:1px;margin-bottom:4px;margin-right:4px}
#skus i{font-size:.26rem;color:#3e3a39}
#skus a{height:38px;line-height:38px;border:1px solid #b8b7bd;text-align:center;overflow:hidden}
#skus a>*{float:left;display:inline}
#skus figure{width:28px;height:28px}
#skus h3{font-size:12px;max-width:97px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;text-indent:0;padding-left:1px}
#general-seperater{font-size:.24rem;background-color:transparent;text-align:center;margin:.5rem 0}
#description img,#description p{line-height:1}
.tipprice{font-size:.24rem;color:#898989;padding-top:.2rem}
.tipprice span{position:relative}
.tipprice span i{position:absolute;width:.45rem;height:1px;background:#898989;display:block;top:50%;left:rem;left:0}
.detailtag{padding-top:.2rem;font-size:.24rem;color:#898989;display:flex;justify-content:space-between}
.skus{padding:.3rem 0}
.topcardwrap{position:relative;margin:0 .2rem}
.topcardwrap .get{box-shadow:0 0 .15rem #ffc7bc;background:linear-gradient(right ,#ff7a42 6% ,#ff415a 100%)!important;background:-o-linear-gradient(right ,#ff7a42 6% ,#ff415a 100%)!important;background:-ms-linear-gradient(right ,#ff7a42 6% ,#ff415a 100%)!important;background:-moz-linear-gradient(right ,#ff7a42 6% ,#ff415a 100%)!important;background:-webkit-linear-gradient(right ,#ff7a42 6% ,#ff415a 100%)!important;color:#fff;font-size:.26rem;width:.76rem;height:.4rem;font-size:.16rem;position:absolute;top:.13rem;right:0;line-height:.4rem;background:#ccc;text-align:center;border-radius:.5rem}
.topcardwrap h1:nth-child(1){margin-bottom:.2rem}
.topcardwrap h1 span{border-radius:.04rem;height:.24rem;line-height:.24rem}
.topcardwrap h1 span:nth-child(1){display:block;float:left;font-size:.2rem;color:#fff;margin-top:.02rem;background:linear-gradient(right ,#ff7a42 6% ,#ff415a 100%)!important;background:-o-linear-gradient(right ,#ff7a42 6% ,#ff415a 100%)!important;background:-ms-linear-gradient(right ,#ff7a42 6% ,#ff415a 100%)!important;background:-moz-linear-gradient(right ,#ff7a42 6% ,#ff415a 100%)!important;background:-webkit-linear-gradient(right ,#ff7a42 6% ,#ff415a 100%)!important;width:1.12rem;text-align:center;margin-top:-.015rem}
hr{border:none;height:1px;background:#ccc;margin:.3rem 0}
.topcardwrap h1 span:nth-child(2){display:block;float:left;margin-left:.1rem;font-size:.26rem;color:#3e3a39}
.topcardwrap h2{font-size:.26rem;color:#3e3a39}
.bottomcardwrap h1 span:nth-child(1){width:.5rem;height:.24rem;text-align:center;line-height:.24rem;background:#EFEFEF!important;color:#ff3649;font-size:.2rem;margin-top:-.01rem}
.cxtitle{top:.22rem;right:0}
.cpArrow{top:0;right:0}
  #tip{
  	position: fixed;
  	bottom: 15%;
  	margin-top: -.2rem;
  	width: 2rem;
  	height: .8rem;
  	background: rgba(0,0,0,.5);
  	color: #fff;
  	border-radius: .15rem;
  	line-height: .8rem;
  	font-size: .24rem;
  	text-align: center;
  	left: 50%;
  	margin-left: -1rem;
  }
  .dotshowlist{
      width: 2.1rem;
    background: rgba(0,0,0,.5);
    color: #fff;
    font-size: .26rem;
    border-radius: .1rem;
    position: absolute;
    right: -.24rem;
    top: .7rem;
    
}
.myarr{
        border: 10px solid transparent;
    border-bottom-color: #343131;
    position: absolute;
    right: .45rem;
    top: .4rem;
    display: none;
}
.dotshowlist p{
    height: .76rem;
    line-height: .76rem !important;
    position: relative;
}
.dotshowlist .bizarr{
    position: absolute;
    top: -.08rem;
    right: .45rem;
}
.dotshowlist .bizarr img{
    display: block;
    width: 100%;
}
.dotshowlist p b{
        height: 1px;
    background: #fff;
    transform: scaleY(0.5);
    transform-origin: 0 0;
    overflow: hidden;
    display: block;
    width: 100%;
    position: absolute;
    bottom: 0;
}
.dotshowlist i{
    font-size: .32rem;
    margin-left: .2rem;
}
  #nav-main li.vice-button{
  	border-right: none;
  }
  #cartsuccess{
  	position: fixed;
  	bottom: 15%;
  	margin-top: -.2rem;
  	width: 2rem;
  	height: .8rem;
  	background: rgba(0,0,0,.5);
  	color: #fff;
  	border-radius: .15rem;
  	line-height: .8rem;
  	font-size: .24rem;
  	text-align: center;
  	left: 50%;
  	margin-left: -1rem;
  }
  .topBar{
  	position: absolute;
  	top: .2rem;
  	height: .6rem;
  	width: 92%;
  	left: 50%;
  	margin-left: -46%;
  	z-index: 999;
  	line-height: .6rem;
  }
  .tabBarleft{
  	width: .6rem;
  	height: .6rem;
  	border-radius: 50%;
  	background: rgba(178,178,178,.4)
  }
  .tabBarright span.cir{
  	display: block;
  	width: .6rem;
  	height: .6rem;
  	float: left;
  	background: #b2b2b2;
  	border-radius: 50%;
  	margin-left: .2rem;
  	position: relative;
  	
  }
  .icon-fanhui,.icon-gouwuche-2{
  	font-size: .3rem;
    position: absolute;
    left: .2rem;
    top: .15rem;
    color: #f7f7f7;
  }
  .error-tips{
      display: none;
      width: 3rem;
      height: 1.4rem;
      position: fixed;
      top: 40%;
      left: 50%;
      margin-left: -1.5rem;
      font-size: 0.3rem;
      text-align: center;
      color: #ffffff;
      padding: 0.3rem 0;
      background-color: rgba(0, 0, 0, .3);border-radius: 0.15rem;
      z-index: 100;
  }
  .error-tips p{
      padding: 0.2rem;
  }
  .error-tips i{
      font-size: 0.5rem;
  }
 .icon-succeed:before {
     content: "\e936";
 }
  .mask{position:absolute;left:0;right:0;top:0;background-color: rgba(0,0,0,0.5)!important;height:800%;width:100%;z-index:9999;display: none;}
  .guige_panel{position:fixed;bottom:0;left:0;right:0;height:60%;background-color: #FFF;z-index:99999;display: none;}
  .guige_unit{font-size:0.2rem;color:#000;display: inline-block;border:1px solid gray;padding:0.2rem;margin-right:10px;border-radius: 4px;}
  #name_first,#name_second,#name_third{font-size: 0;}
  #name_first{margin-top:10px;}
  #name_second{display:none;}
  #name_third{display:none;}


  .num_area{font-size: 0;margin-top:10px;display: flex;flex-direction: row;justify-content: flex-start;align-items: center;}
  .minus{font-size: 0.3rem;height: 36px;line-height:36px;border-top-left-radius: 4px;border-bottom-left-radius: 4px;border:1px solid gray;padding:0 10px;}
  .minus_active{border-color:#000;}
  .add{font-size: 0.3rem;height:36px;line-height:36px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;border: 1px solid gray;padding:0 10px;border-color: #000;}
  .guige_num{width:60px;border:1px solid gray;height:36px;border-left-color: transparent;border-right-color: transparent;margin: 0;padding: 0;border-top-color: #000;border-bottom-color:#000;text-align: center;border-radius: 0;}
  .guige_selected{color:#F00;border-color: #F00;}
  .guige_cannot_selected{color:#000;border-color:transparent;background-color: #f3f2f2;}
  .confirm_guige{font-size:0.3rem;width:100%;background-color: #fa3752;height:48px;border:0;position: absolute;bottom: 0;left:0;right:0;color:#FFF;}
  .tips{font-size:0.25rem;color:gray;margin-top:10px;}
</style>

<script>
wx.ready(function(){
	// 分享到朋友圈
	wx.onMenuShareTimeline({
	    title: '<?php echo $title.'【'.SITE_NAME.'】' ?>', // 分享标题
	    link: '<?php echo base_url('item/detail?id='.$item['item_id']) ?>', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
	    imgUrl: '<?php echo $this->media_root.$item['url_image_main'] ?>', // 分享图标
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
	    desc: '<?php echo $description ?>', // 分享描述
	    title: '<?php echo $title.'【'.SITE_NAME.'】' ?>', // 分享标题
	    link: '<?php echo base_url('item/detail?id='.$item['item_id']) ?>', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
	    imgUrl: '<?php echo $this->media_root.$item['url_image_main'] ?>', // 分享图标
	    type: 'link', // 分享类型,music、video或link，不填默认为link
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
</script>

<base href="<?php echo $this->media_root ?>">
<!--头部上边的导航条-->
<div class="topBar">
	  <div class="tabBarleft fl" onclick="javascript:history.back(-1);">
	  	<i class="icon-fanhui"></i>
	  </div>
	  <div class="tabBarright fr">
	  	<a href="<?php echo BASE_URL ?>cart" target="_self">
	  	<span class="cir">
	  		<i class="icon-gouwuche-2" style="left: .1rem;top: .17rem;"></i>
	  	</span>
	  	</a>
	  	<span class="cir" style="color: #f7f7f7 !important;font-size: .58rem;line-height: .28rem;text-align: center;">...</span>
	  	  <div class="myarr">
                    
                </div>
            <div class="dotshowlist" style="display: none;">
                <div class="bizarr">
                    <img src="<?php echo CDN_URL ?>media/home/biz_arr.png" alt="箭头">
                </div>
                <p>
                    <a title="首页" href="<?php echo base_url() ?>" style="color: #fff;">
                        <i class="icon-shouye_xiala"></i>
                        <span>首页</span>
                        <b></b>
                    </a>
                </p>
                <p>
                    <a title="个人中心" href="<?php echo base_url('mine') ?>" style="color: #fff;">
                        <i class="icon-wode-2"></i>
                        <span>我的</span>
                    </a>
                </p>
            </div>
	  </div>
</div>
<div id=content class=container>
    <!-- 主图&形象图 -->
	<div id=item-figure class="swiper-container row">
		<?php
			// 判断是否有形象图，若有，则将形象图与主图拼装为轮播内容进行显示
			if ( empty($item['figure_image_urls']) ):
		?>
		<figure id=image_main>
			<img title="<?php echo $item['name'] ?>" src="<?php echo $item['url_image_main'] ?>">
		</figure>

		<?php else: ?>
		<ul id=figure-images class="swiper-wrapper">
			<li class="swiper-slide">
				<img alt="<?php echo $item['name'] ?>" src="<?php echo $item['url_image_main'] ?>">
			</li>

			<?php
				$figure_image_urls = explode(',', $item['figure_image_urls']);
				foreach($figure_image_urls as $url):
			?>
			<li class="swiper-slide">
				<img alt="<?php echo $item['name'] ?>" src="<?php echo $url ?>">
			</li>
			<?php endforeach ?>
		</ul>
	    <div class="swiper-pagination"></div><!-- 轮播页码提示 -->
		
		<link rel="stylesheet" href="<?php echo CDN_URL ?>css/swiper.min.css">
		<script src="<?php echo CDN_URL ?>js/swiper.jquery.min.js"></script>
		<script>
			var swiper = new Swiper('.swiper-container',{
	            pagination: '.swiper-pagination'
	        });
	    </script>
		<?php endif ?>
	</div>

	<section id=item-brief>
		<h2 id=item-name><?php echo $item['name'] ?></h2>
<!--		<h3 class="bussinessdescription">大容量便携 带屏双输出 适用于苹果/三星/华为/小米手机等 手机平板通用型充电宝</h3>-->
		<?php echo !empty($item['slogan'])? '<h3 id=slogan>'.$item['slogan'].'</h3>': NULL ?>

		<ul class=row>
			<li id=prices>
				<strong>
					<small>￥</small><?php echo substr($item['price'], 0, -3).'<small>'.substr($item['price'], -3).'</small>' ?>
				</strong>
				<span class="limitedtime">限时特惠</span>
			</li>

			<?php $unit_name = !empty($item['unit_name'])? $item['unit_name']: '份' ?>
			<!--<li id=stocks>
				库存 <?php echo $item['stocks']. $unit_name ?>
				<?php echo $item['quantity_min'] > 1? ' '.$item['quantity_min'].$unit_name. '起售': NULL ?>
				<?php echo $item['quantity_max'] > 0? ' 限购 '.$item['quantity_max'].$unit_name: NULL ?>
			</li>-->
            <?php if ($item['tag_price'] > $item['price']): ?>
			<li class=tipprice>
				<del>￥ <?php echo $item['tag_price'] ?></del>
			</li>
            <?php endif ?>
		</ul>

		<div class="detailtag">
			<span>运费 <?php if (empty($item['freight_template_id'])) echo '包邮' ?></span>
			<span>月销 <?php echo $item['sold_display'].$item['unit_name'] ?></span>

<!--			<span>美国进口</span>-->
		</div>

        <!--分享-->
        <div class="detailshare">
           <i class="icon-dp_fenxiang"></i>
        </div>
	</section>
	
	<!--
    <section id=service-promise>
		<i class="icon-Arrow"></i>
		<ul>
			<li>
				<span>
					<img src="<?php echo CDN_URL ?>media/item/detail/quan@3x.png"/>
				</span>
				上门处理投诉
			</li>
			<li>
				<span>
					<img src="<?php echo CDN_URL ?>media/item/detail/quan@3x.png"/>
				</span>
				满58元包邮
			</li>
			<li>
				<span>
					<img src="<?php echo CDN_URL ?>media/item/detail/quan@3x.png"/>
				</span>
				3小时送达
			</li>
		</ul>
	</section>
	-->

	<?php if ( !empty($skus) ): ?>
    <!--// TODO: SKU-->
    	<?php
    		$price_list = [];
    		$guige_list = [];
            $name_first_list = [];
            $item_id = $_GET['id'];
            foreach( $skus as $key=>$sku){
                $price_list[]                    = $sku['price'];
                
                $guige_list[$key]['name_first']  = $sku['name_first'];
                $guige_list[$key]['name_second'] = $sku['name_second'];
                $guige_list[$key]['name_third']  = $sku['name_third'];
                $guige_list[$key]['stocks']      = $sku['stocks'];
                $guige_list[$key]['sku_id']      = $sku['sku_id'];
                $guige_list[$key]['item_id']     = $sku['item_id'];
                $guige_list[$key]['biz_id']      = $sku['biz_id'];
                
                $guige_list[$key]['price']       = $sku['price'];

                if( ! in_array($sku['name_first'],$name_first_list) ){
                    $name_first_list[] = $sku['name_first'];
                    $biz_list[] = $sku['biz_id'];
                }
            }

            sort($name_first_list,SORT_NUMERIC );
    	   if( count($price_list)>=2 ){
				sort($price_list);
				$price_list_count = count($price_list);
				$min_price = $price_list[0];
				$max_price = $price_list[$price_list_count-1];
            }
		?>

    	<div class="mask" id="guige_mask"></div>
		<div class="guige_panel" id="guige_panel">
			<div style="display: flex;flex-direction: row;justify-content: flex-start;">
				<img src="<?=$item['url_image_main']?>" alt="" width="96" height="96" style="border:1px solid gray;border-radius: 4px;padding: 5px;margin-top:-20px;margin-left:20px;background-color:#FFF;">
				<div style="align-self:center;margin-left:20px;">
					<p style="font-size:0.3rem;color:gray;">请选择规格</p>
					<p style="font-size: 0.3rem;color:rgb(255,0,0);margin-top:10px;" id="real_price">￥<?=$min_price?>-￥<?=$max_price?></p>
				</div>
			</div>
            <span style="position:absolute;right:20px;top:20px;font-size: 0.5rem;color:#fa3752;" id="close_sku_select_panel">x</span>
			<div style="margin-left:20px;">
				<p class="tips">规格</p>
				<div id="name_first">
					<?php foreach( $name_first_list as $key=>$name_first ):?>
					<?php
					if ( empty($name_first) ){
						continue;
					}
					?>
					<span class="guige_unit" item_id="<?=$item_id?>" label="<?=$name_first?>"><?=$name_first?></span>
					<?php endforeach;?>
				</div>
				<div id="name_second" style="margin-top:10px;">
					<span class="guige_unit"></span>
				</div>
				<div id="name_third"  style="margin-top:10px;">
					<span class="guige_unit"></span>
				</div>

				<p class="tips">数量</p>
				<div class="num_area">
					<span class="minus" id="minus">-</span>
					<input type="text" value="1" class="guige_num" id="guige_num" onfocus = "this.blur()"/>
					<span class="add" id="add">+</span>
				</div>
			</div>
            <button id="confirm_guige" class="confirm_guige">确 定</button>
		</div>
	<?php endif ?>
  <script type="text/javascript">
    // 以下代码3天以内只有我和上帝能看懂
    // 3天以后只有上帝能看懂
    // 30天以后上帝也看不懂了
    // 所以谁要再修改。。。我的40米大刀早就准备好了，跑大街上也没用
    $(function(){
        $('#order-create').click(function(){
            $('#guige_mask').css('display','block');
            $('#guige_panel').css('display','block');
        });
      $('#cart_add_bysku').click(function(){
            $('#guige_mask').css('display','block');
            $('#guige_panel').css('display','block');
        });        
        $('#guige_mask').on('click',function(){
            $(this).css('display','none');
            $('#guige_panel').css('display','none');
        });

        $('#close_sku_select_panel').on('click',function(){
            $('#guige_mask').css('display','none');
            $('#guige_panel').css('display','none');
        });

        let guige_num = 1;
        let current_guige_stocks = 0;
        let price = 0;

        let orig_real_price = $('#real_price').text();

        $('#guige_num').val(1);
        let selected_guige_num = localStorage.getItem('s_selected_guige_num');
        if( parseInt(selected_guige_num) >= 1 ){
            guige_num = parseInt(selected_guige_num);
            $('#guige_num').val(selected_guige_num);
        }else{
            $('#guige_num').val(1);
        }

        $('#minus').on('click',function(){
            guige_num--;
            if( guige_num > 1 ){
                $(this).addClass('minus_active');
            }else{
                guige_num = 1;
                $(this).removeClass('minus_active');
            }
            $('#guige_num').val(guige_num);
            localStorage.setItem('s_selected_guige_num',guige_num);
        });
        $('#add').on('click',function(){
            // if( current_guige_stocks == 0 ){
            //     alert('请先选择规格');
            //     return false;
            // }
            // guige_num = parseInt($('#guige_num').val());
            guige_num++;
            // if( guige_num > current_guige_stocks ){
            //     alert('库存不足，最多选择'+current_guige_stocks+'个');
            //     return false;
            // }
            $('#guige_num').val(guige_num);
            localStorage.setItem('s_selected_guige_num',guige_num);
            $('#minus').addClass('minus_active');
        });


        //选中的规格索引
        let guige_first_index   = 0;
        let guige_second_index  = 0;
        let guige_third_index   = 0;

        let sku_id              = 0;
        let item_id             = <?=$item_id?>;
        let default_label       = '<?=isset($name_first_list[0])?$name_first_list[0]:0?>';
        let biz_id              = 0;
        let stocks              = 0;
        
        let name_second_list    = [];
        
        //规格中文名称
        let current_name_first  = '';
        let current_name_second = '';
        let current_name_third  = '';

        //记录是否有下一级规格
        let has_second = false;
        let has_third = false;

        let sku_op_level = parseInt(localStorage.getItem('s_sku_op_level')); //记录上一次选择规格级别，操作到第几个规格
        if( sku_op_level ){
            let _name_second_tpl,_name_third_tpl;
            switch (sku_op_level){
                case 1:
                    guige_first_index = parseInt(localStorage.getItem('s_guige_first_index'));
                    
                    $('#name_first>.guige_unit').eq(guige_first_index).addClass('guige_selected').siblings().removeClass('guige_selected');
                break;

                case 2:
                    guige_first_index = parseInt(localStorage.getItem('s_guige_first_index'));
                    guige_second_index = parseInt(localStorage.getItem('s_guige_second_index'));

                    _name_second_tpl = localStorage.getItem('s_name_second_tpl');
                    $('#name_second').html(_name_second_tpl).css('display','block');
                    $('#name_first>.guige_unit').eq(guige_first_index).addClass('guige_selected').siblings().removeClass('guige_selected');
                    $('#name_second>.guige_unit').eq(guige_second_index).addClass('guige_selected').siblings().removeClass('guige_selected');
                break;

                case 3:
                    guige_first_index = parseInt(localStorage.getItem('s_guige_first_index'));
                    guige_second_index = parseInt(localStorage.getItem('s_guige_second_index'));
                    guige_third_index = parseInt(localStorage.getItem('s_guige_third_index'));

                    _name_second_tpl = localStorage.getItem('s_name_second_tpl');
                    _name_third_tpl = localStorage.getItem('s_name_third_tpl');

                    $('#name_second').html(_name_second_tpl).css('display','block');                    
                    $('#name_third').html(_name_third_tpl).css('display','block');                        

                    $('#name_first>.guige_unit').eq(guige_first_index).addClass('guige_selected').siblings().removeClass('guige_selected');
                    $('#name_second>.guige_unit').eq(guige_second_index).addClass('guige_selected').siblings().removeClass('guige_selected');
                    $('#name_third>.guige_unit').eq(guige_third_index).addClass('guige_selected').siblings().removeClass('guige_selected');                 
                break;        
            }

            biz_id = localStorage.getItem('s_biz_id');
            stocks = parseInt(localStorage.getItem('s_stocks'));
            sku_id = localStorage.getItem('s_sku_id');
            let _real_price = localStorage.getItem('s_real_price');
            $('#real_price').text('￥'+_real_price);                 
        }else{
            sku_op_level = 0;
            $('#name_first>.guige_unit:first').addClass('guige_selected').siblings().removeClass('guige_selected');

            //默认选择第一个
            get_name_second_info(item_id,default_label);            
        }



        

        $('#name_first>.guige_unit').on('click',function(){
            biz_id = 0;
            stocks = 0;
            
            item_id = $(this).attr('item_id');

            $(this).addClass('guige_selected').siblings().removeClass('guige_selected');

            guige_first_index = $(this).index();
            localStorage.setItem('s_guige_first_index',guige_first_index);

            sku_op_level = 1;
            localStorage.setItem('s_sku_op_level',sku_op_level);

            //$('#real_price').text(orig_real_price);
            $('#name_third').html('').css('display','none');

            let label = $(this).attr('label');
            current_name_first = label;
            get_name_second_info(item_id,current_name_first);
        });

        $('#name_second').on('click','.guige_unit',function(){
            biz_id = 0;
            stocks = 0;            

            $(this).addClass('guige_selected').siblings().removeClass('guige_selected');

            guige_second_index = $(this).index();
            localStorage.setItem('s_guige_second_index',guige_second_index);            

            sku_op_level = 2;
            localStorage.setItem('s_sku_op_level',sku_op_level);            

            $('#name_third').html('').css('display','none');

            let label = $(this).attr('label');
            current_name_second = label;
            get_name_third_info(item_id,current_name_first,current_name_second);            
        });
        $('#name_third').on('click','.guige_unit',function(){
            $(this).addClass('guige_selected').siblings().removeClass('guige_selected');

            guige_third_index = $(this).index();
            localStorage.setItem('s_guige_third_index',guige_third_index);

            sku_op_level = 3;
            localStorage.setItem('s_sku_op_level',sku_op_level);

            let label = $(this).attr('label');
            current_name_third = label;
            //点击三级规格，直接显示价格
            $.post(api_url+'item/get_price_by_sku',{item_id:item_id,name_first:current_name_first,name_second:current_name_second,name_third:label},function(res){
                let _price = res.content.sku_info.price;
                biz_id = res.content.sku_info.biz_id;
                stocks = res.content.sku_info.stocks;
                sku_id = res.content.sku_info.sku_id;

                localStorage.setItem('s_biz_id',biz_id);
                localStorage.setItem('s_stocks',stocks);
                localStorage.setItem('s_sku_id',sku_id);          

                $('#real_price').text('￥'+_price);
                localStorage.setItem('s_real_price',_price);
            });
        });

        $('#confirm_guige').on('click',function(){
            console.log(biz_id)
            console.log(typeof guige_num)
            console.log(typeof stocks)

            let sku_op_level = parseInt(localStorage.getItem('s_sku_op_level'));
            console.log('操作级别'+sku_op_level);

            if( $('#name_first>.guige_unit').length &&   !$('#name_first>.guige_unit').hasClass('guige_selected') ){
                alert('请选择一级规格');
                return false;
            }

            if( $('#name_second>.guige_unit').length &&   !$('#name_second>.guige_unit').hasClass('guige_selected') && has_second ){
                alert('请选择二级规格');
                return false;
            }

            if( $('#name_third>.guige_unit').length &&   !$('#name_third>.guige_unit').hasClass('guige_selected') && has_third ){
                alert('请选择三级规格');
                return false;
            }

            if( stocks == 0 ){
                alert('库存量不足');
                return false;
            }

            if( guige_num > stocks ){
                alert('您选择的规格数量超过库存，当前还剩余'+stocks+'件商品');
                return false;                
            }

            let _cart_string = biz_id+'|'+item_id+'|'+sku_id+'|'+guige_num;
            let _create_order_url = "<?php echo base_url('order/create')?>"+'?immediately=yes&cart_string='+_cart_string+ "<?=$fromavt?>";

            //location.href = _create_order_url;
            


            var userId = user_id;
            if(userId == ''){
                window.location.href=base_url+'login?url_after_login=<?php echo urlencode( trim($_SERVER['REQUEST_URI'], '/') ) ?>';
                return false;
            }
            var url = window.location.search; 
            // alert(url.length);
            // alert(url.lastIndexOf('='));
            var r = '<?= $id ?>';
            oldcar = r;
            var count=1;
            var addCartTime;
            var oldShopList = [];
            var countflag = 0;
            let item_ids = [];
            //if (user_agent.is_wechat){
                var addcar = $(this);

                $.ajax({
                    url: api_url + 'cart/index',
                    cache: false,
                    timeout: 10000,
                    async: false,
                    data : {app_type:'client',user_id:user_id},
                    error: function(date){
                        alert(date);
                    },
                    success : function(data){
                        item_ids = data.content.order_items;
                        console.log(item_ids);
                    }
                });

                for (var i = 0;i < item_ids.length;i++){
                     for (var j = 0;j < item_ids[i].order_items.length;j++){
                        //var oldShopList = '1|' + item_id[i].order_items[j].item_id + '|0|' + item_id[i].order_items[j].count;
                        //if (oldcar == item_ids[i].order_items[j].item_id){
                        if (sku_id == item_ids[i].order_items[j].sku_id){
                            count = item_ids[i].order_items[j].count;
                            if (countflag == 0){
                                count++;
                                countflag = 1;
                            }
                        }else{
                            //oldShopList.push(item_ids[i].order_items[j].biz_id + '|' + item_ids[i].order_items[j].item_id + '|0|' + item_ids[i].order_items[j].count);
                            oldShopList.push(item_ids[i].order_items[j].biz_id + '|' + item_ids[i].order_items[j].item_id + '|'+item_ids[i].order_items[j].sku_id+'|' + item_ids[i].order_items[j].count);
                        }
                    }
                }

                arrCur = oldShopList.join(",");

                console.log('检测');
                console.log(biz_id);
                console.log(item_id);
                console.log(sku_id);
                console.log(guige_num);
                console.log(arrCur);

                var img = addcar.parent().find('img').attr('src');
                var flyer = $('<img class="u-flyer" src="'+img+'">');

                flyer.fly({
                    start: {
                        left: addcar.offset().left - $(document).scrollLeft(),
                        top: addcar.offset().top - $(document).scrollTop()
                    },
                    end: {
                        left:parseInt(endLeft),
                        top: 0,
                        width: 0,
                        height: 0
                    },
                    onEnd: function(){
                        $("#msg").show().animate({width: '250px'}, 200).fadeOut(1000);
                        addcar.css("cursor","default").removeClass('orange');
                        this.destory();
                    }
                });

                 //var shopInfo = item['biz_id'] + '|'+oldcar+'|0|'+count+',' + arrCur;

                let shopInfo = biz_id+'|'+item_id+'|'+sku_id+'|'+guige_num+','+arrCur; 


                 // 上传接口
                 $.ajax({
                    url: api_url + "cart/sync_up",
                    async : false,
                    data:{app_type:'client',id:user_id,name:'cart_string',value:shopInfo},
                    success:function(res){
                        if( res.status == 200 ){
                            alert('加入购物车成功');
                            console.log(res);
                            clearTimeout(addCartTime);
                            addCartTime = setTimeout(function(){
                                $('#cartsuccessNew').show().delay(1000).fadeOut();
                            },1000);
                        }else{
                            alert(res.content.error.message);
                            return false;
                        }
                   }
                });

            //}
            
            return true;
        });

        //获取二级规格
        function get_name_second_info(item_id,label){
            let tpl = [];
            $.post(api_url+'item/get_second_sku_list',{item_id:item_id,label:label},function(res){
                name_second_list = res.content.sku_list;
                if( res.status == 200 ){
                    $.each(name_second_list,function(index,item){
                        tpl.push('<span class="guige_unit" label="'+item+'">'+item+'</span>');
                    });
                    
                    $('#name_second').html(tpl.join('')).css('display','block');

                    localStorage.setItem('s_name_second_tpl',tpl.join(''));

                    has_second = true;
                }else{
                    has_second = false;
                    $('#name_second').html('').css('display','none');
                    //没有二级规格了，直接显示价格
                    $.post(api_url+'item/get_price_by_sku',{item_id:item_id,name_first:label,name_second:'',name_third:''},function(res){
                        let _price = res.content.sku_info.price;
                        biz_id = res.content.sku_info.biz_id;
                        stocks = parseInt(res.content.sku_info.stocks);
                        sku_id = res.content.sku_info.sku_id;

                        localStorage.setItem('s_biz_id',biz_id);
                        localStorage.setItem('s_stocks',stocks);
                        localStorage.setItem('s_sku_id',sku_id);

                        $('#real_price').text('￥'+_price);

                        localStorage.setItem('s_real_price',_price);
                    });
                }
            });            
        }

        //获取三级规格
        function get_name_third_info(item_id,name_first,name_second){
            let tpl = [];
            $.post(api_url+'item/get_third_sku_list',{item_id:item_id,name_first:name_first,name_second:name_second,name_third:''},function(res){
                name_third_list = res.content.sku_list;
                if( res.status == 200 ){
                    $.each(name_third_list,function(index,item){
                        tpl.push('<span class="guige_unit" label="'+item+'">'+item+'</span>');
                    });
                    $('#name_third').html(tpl.join('')).css('display','block');
                    localStorage.setItem('s_name_third_tpl',tpl.join(''));

                    has_third = true;
                }else{
                    has_third = false;
                    $('#name_third').html('').css('display','none');
                    //没有三级规格了，直接显示价格
                    $.post(api_url+'item/get_price_by_sku',{item_id:item_id,name_first:name_first,name_second:name_second,name_third:''},function(res){
                        let _price = res.content.sku_info.price;
                        biz_id = res.content.sku_info.biz_id;
                        stocks = parseInt(res.content.sku_info.stocks);
                        sku_id = res.content.sku_info.sku_id;

                        localStorage.setItem('s_biz_id',biz_id);
                        localStorage.setItem('s_stocks',stocks);
                        localStorage.setItem('s_sku_id',sku_id);                        

                        $('#real_price').text('￥'+_price);
                        localStorage.setItem('s_real_price',_price);
                    });
                }
            });            
        }        
    });
  </script>
    <!-- 优惠券模板 -->
    <!--
    <div class="wid710 auto border20 bgfff skus clearfix mt20">

        <div class="topcardwrap">
        	
            <h1 class="clearfix">
                <span>进来购物券</span>
                <span>全进来实物商品通用</span>
            </h1>
            <h1 class="clearfix">
                <span>店铺优惠券</span>
                <span>领取优惠券</span>
            </h1>
            <div class="get">
                领取
            </div>
        </div>
        <hr>
        <div class="topcardwrap bottomcardwrap">
            <h1 class="clearfix">
                <span>促销</span>
                <span>满199立减50元</span>
            </h1>
            <h1 class="clearfix">
                <span>积分</span>
                <span>购买可得12积分</span>
            </h1>
            <i class="icon-Arrow cxtitle"></i>
        </div>
    </div>
    -->

    <!-- 产品参数 -->
    <!--
    <div class="wid710 auto border20 bgfff skus clearfix mt20">
        <div class="topcardwrap">
            <h2>产品参数</h2>
            <i class="icon-Arrow cpArrow"></i>
        </div>
        <hr>
        <div class="topcardwrap">
            <h2>配送范围:市南区、市北区大部、崂山区大部。</h2>
            <i class="icon-Arrow cpArrow"></i>
        </div>
		
    </div>
    -->

	<!-- 商品评价 -->
	<div class="productevaluation mt20 auto wid710 border20 clearfix skus" style="display: none;">
		<div class="topcardwrap">
			<h2>商品评价</h2>
		</div>
		
		<hr>
		<!--<div class="topcardwrap clearfix">
			<div class="evaluationinfo clearfix">
				<div class="pic fl">
					<img src="<?php echo CDN_URL ?>media/item/detail/ximei@3x.png"/>
				</div>
				<span class="fl block">150****4832</span>
				<time class="fr">2017-03-22</time>
			</div>
		</div>

		<!--商品评价内容区域-->
		<!--<div class="evaluationcontent">
			<p>商品一如既往的好,实物和照片一样没有色差,口感非常好,以后一如既往的关注意帮管家平台的,希望平台以后多搞一些这样的</p>
		</div>-->
		<div class="evaluationbtn auto">
			<a style="color:#fff;" href="<?php echo base_url('comment_item/index?id='.$item['item_id']) ?>">查看全部评价</a>
		</div>
	</div>
	
	<!-- 商家信息 -->
	<div class="shopInfo mt20 auto border20 clearfix auto wid670">
		<div class="headerinfo clearfix">
			<div class="pic fl centered_xy">
				<img src="<?php echo empty($biz['url_logo'])? DEFAULT_IMAGE: MEDIA_URL.'biz/'.$biz['url_logo'] ?>">
			</div>
			<div class="headertext fl">
				<h1><?php echo $biz['brief_name'] ?></h1>
				<h2>入驻进来平台</h2>
			</div>
		</div>
		<div class="shopinfolist clearfix">
			<ul class="clearfix">
				<li>
					<p><?php echo $biz['item_count'] ?></p>
					<p>全部宝贝</p>
				</li>
				<li>
					<p><?php echo $biz['fav_biz_count'] ?></p>
					<p>关注人数</p>
				</li>
				<li>
					<span>
						宝贝描述
						<i><?php echo $biz['score_description'] ?> 高</i>
					</span>
					<span>
						卖家服务
						<i><?php echo $biz['score_service'] ?> 高</i>
					</span>
					<span>
						物流服务
						<i><?php echo $biz['score_deliver'] ?> 高</i>
					</span>
				</li>
			</ul>
		</div>
		<!--查看分类-->
		<div class="shopmore">
			<a href="<?php echo base_url('item_category_biz/index?biz_id='.$item['biz_id']) ?>">
				查看分类
			</a>
			<a href="<?php echo base_url('biz/detail?id='.$item['biz_id']) ?>">
				进店逛逛
			</a>
		</div>
	</div>

		<!--热门活动-->
        <!--
		<div class="hotactivetitle wid710 auto mt20 border20">
			<img src="<?php echo CDN_URL ?>media/item/detail/remenhuodong@3x.png" />
		</div>
		<div class="activecontent mt20 wid710 auto border20 clearfix">
			<ul class="clearfix">
				<li>
					<img src="<?php echo CDN_URL ?>media/item/detail/ximei@3x.png"/>
					<h1>西梅</h1>
					<h2>400g/份</h2>
					<h3>¥29.80</h3>
				</li>
				<li>
					<img src="<?php echo CDN_URL ?>media/item/detail/tao@3x.png"/>
					<h1>西梅</h1>
					<h2>400g/份</h2>
					<h3>¥29.80</h3>
				</li>
				<li>
					<img src="<?php echo CDN_URL ?>media/item/detail/pingguo@3x.png"/>
					<h1>西梅</h1>
					<h2>400g/份</h2>
					<h3>¥29.80</h3>
				</li>
				<li style="margin-right: 0;">
					<img src="<?php echo CDN_URL ?>media/item/detail/juzi@3x.png"/>
					<h1>西梅</h1>
					<h2>400g/份</h2>
					<h3>¥29.80</h3>
				</li>
			</ul>
		</div>
		-->

    <?php if ( ! empty($item['description'])): ?>
        <p id=general-seperater>继续拖动，查看图文详情</p>

        <div id="item-description" class="wid710 auto">
          
            <?php echo $item['description'] . '</base>' ?>
        </div>
        <!--
        <p id=general-seperater>继续拖动，查看图文详情</p>
        <div class="bigadd border20 wid710 auto">
            <img src="<?php echo CDN_URL ?>media/item/detail/tu@3x.png" />
        </div>
        <div class="particularstag wid710 auto">
            <img src="<?php echo CDN_URL ?>media/item/detail/shangpinliangdian@3x.png" class="pictitle"/>
            <img src="<?php echo CDN_URL ?>media/item/detail/tu1@3x.png" class="piccontent" />
            <p>
                健脑、抗氧化、预防糖尿病、增强食欲、促进代谢、美容养颜、显著改善贫血等。适合老人、
                小孩及孕妇食用。
            </p>
        </div>
        <div class="particularstag wid710 auto">
            <img src="<?php echo CDN_URL ?>media/item/detail/ruhetiaoxuan@3x.png" class="pictitle"/>
            <img src="<?php echo CDN_URL ?>media/item/detail/tu1@3x.png" class="piccontent" />
            <p>
                血橙上一头上的圆形博文就是所谓的“脐”，血橙的脐越小越甜。如果表皮出现白色的霉点，则血橙的内部开始霉烂。
            </p>
        </div>
        <div class="particularstag wid710 auto">
            <img src="<?php echo CDN_URL ?>media/item/detail/shiyongfangshi@3x.png" class="pictitle"/>
            <img src="<?php echo CDN_URL ?>media/item/detail/tu1@3x.png" class="piccontent" />
            <p>
                美国血橙适宜鲜美血橙酸奶杯
                1、将血橙去皮切薄片（厚度约3mm）、酸奶备用。
                2、用筷子夹取橙片，贴在玻璃杯内壁。
                3、将备好的酸奶倒入杯中即可。
            </p>
        </div>
        -->
    <?php endif ?>

	<div class="particularstag wid710 auto">
		<!--<img src="<?php echo CDN_URL ?>media/item/detail/jinlaiyoushi@3x.png" class="pictitle">-->
		<!--特色介绍-->
		<!--<div class="featurescard clearfix mt10">
			<img src="<?php echo CDN_URL ?>media/item/detail/quanchenglenglian@3x.png">
			<img src="<?php echo CDN_URL ?>media/item/detail/3xiaoshisongda@3x.png">
			<img src="<?php echo CDN_URL ?>media/item/detail/tousuchuli@3x.png">
		</div>-->

		<!--猜你喜欢区域-->
        <!--
		<div class="shopinfolike auto wid710 border20">
			<img src="<?php echo CDN_URL ?>media/item/detail/cainixihuan@3x.png">
		</div>
		<div class="like wid718 auto clearfix mt10">
            <ul>
                <li>
                    <img src="<?php echo CDN_URL ?>media/home/cainixihuan/cnxh/210x210_0.jpg">
                    <h1>JUSTE UN CLOU 手镯</h1>
                    <h2>8K玫瑰金</h2>
                    <h3>¥10555.00</h3>
                </li>
                <li>
                    <img src="<?php echo CDN_URL ?>media/home/cainixihuan/cnxh/210x210_1.jpg">
                    <h1>栖霞红富士</h1>
                    <h2>18k玫瑰金,手带表</h2>
                    <h3>¥1045.00</h3>
                </li>
                <li class="mr0">
                    <img src="<?php echo CDN_URL ?>media/home/cainixihuan/cnxh/210x210_2.jpg">
                    <h1>DRIVER ONE 手表</h1>
                    <h2>8K玫瑰金</h2>
                    <h3>¥5100</h3>
                </li>
                <li>
                    <img src="<?php echo CDN_URL ?>media/home/cainixihuan/cnxh/210x210_3.jpg">
                    <h1>JUSTE UN CLOU 手镯</h1>
                    <h2>8K玫瑰金</h2>
                    <h3>¥5100</h3>
                </li>
                <li>
                    <img src="<?php echo CDN_URL ?>media/home/cainixihuan/cnxh/210x210_0.jpg">
                    <h1>JUSTE UN CLOU 手镯</h1>
                    <h2>8K玫瑰金</h2>
                    <h3>¥5100</h3>
                </li>
                <li class="mr0">
                    <img src="<?php echo CDN_URL ?>media/home/cainixihuan/cnxh/210x210_2.jpg"/>
                    <h1>JUSTE UN CLOU 手镯</h1>
                    <h2>8K玫瑰金</h2>
                    <h3>¥5100</h3>
                </li>
            </ul>
        </div>
        -->
	</div>
	
</div>


<nav id=nav-main>
	<ul>
		<?php // TODO 显示客服按钮前检查当前店铺客服工作状态，决定留言或即时通讯 ?>
		<li class=vice-button>
            <!--<a title="客服" href="<?php echo base_url('message?biz_id='.$item['biz_id']) ?>">-->
            <!--<a title="客服"  href="tel:<?php echo $biz['tel_public'] ?>">-->
            <a title="客服"  href="#"  class="jinlaiChat">
				<img src="<?php echo CDN_URL ?>media/item/detail/kafu_icon@3x.png">
				客服
			</a>
		</li>

		<?php // TODO 显示店铺按钮前检查商家经营状态 ?>
		<li class=vice-button>
			<a title="店铺" href="<?php echo base_url('biz/detail?id='.$item['biz_id']) ?>">
				<img src="<?php echo CDN_URL ?>media/item/detail/dianpu_icon@3x.png">
				店铺
			</a>
		</li>

		<?php // TODO 显示收藏、加入购物车、立即购买按钮前检查是否可售性（是否在售、库存是否足够、每单最高限量等） ?>
		<li class=vice-button>
			<a class=create data-op-class=fav_item data-op-name=create data-id="<?php echo $item['item_id'] ?>" title="收藏" target="_self">
				<img data-src-success="<?php echo base_url('/media/item/detail/shoucang-_xuanzhong@3x.png') ?>" src="<?php echo CDN_URL ?>media/item/detail/shoucang-@3x.png">
				<b>收藏</b>
			</a>
		</li>

		<?php
			// TODO 根据每单最高及最低限量做相关处理
			if ( !empty($in_cart) ):
				//var_dump($in_cart);
			endif;
		?>
		<li id='currentStocks'>
    <?php if( empty($skus) ):?>
      <i id=cart-add class="btn btn-info btn-lg btn-block" title="加入购物车" href="###">加入购物车</i>
    <?php else:?><i id="cart_add_bysku" class="btn btn-info btn-lg btn-block" style="margin-top:0.17rem;" title="加入购物车" href="javascript:void(0)">加入购物车</i><?php endif;?>  
    
		</li>

		<li>
            <?php
                $item_status = '';
                if ( ! empty($item['time_delete']) ):
                    $item_status = '商品已经下架啦~';

                elseif ( empty($item['time_publish']) ):
                    if (empty($item['time_to_publish']) || $item['time_to_publish'] < time()):
                        $item_status = '商品还未上架';
                    elseif ($item['time_to_publish'] > time()):
                        $item_status = date('Y-m-d H:i').'开售';
                    endif;

                elseif ($item['stocks'] == 0 || $item['quantity_min'] > $item['stocks']):
                    if (empty($item['skus'])):
                        $item_status = '商品已经被抢光了~';
                    else:
                        $sku_stocks_overall = 0;
                        foreach ($sku as $item['skus']):
                            $sku_stocks_overall += $sku['stocks'];
                        endforeach;
                        if ($sku_stocks_overall == 0) $item_status = '商品已经被抢光了~';
                    endif;

                endif;
            ?>

            <?php if (empty($item_status)): ?>
    			<?php if( empty($skus) ):?>
                <a id=order-create class="btn btn-primary btn-lg btn-block" title="立即购买" href="<?php echo base_url('order/create?immediately=yes&cart_string=0|'.$item['item_id'].'|0|1')  . $fromavt  ?>">
    				立即购买
    			</a>
                <?php else:?>
                <a id=order-create class="btn btn-primary btn-lg btn-block" title="立即购买" href="javascript:void(0)">
                    立即购买
                </a>
                <?php endif;?>
            <?php else: ?>
            <a id=order-create class="btn btn-default btn-lg btn-block" title="无法购买" href="javascript:void(0);">
                <?php echo $item_status ?>
            </a>
            <script>
                $(function(){
                    $('#order-create').click(function(){
                        //return false;
                    });
                });
            </script>
            <?php endif ?>
		</li>
	</ul>
</nav>
<span id="tip" style="display: none;">收藏成功</span>
<div id="cartsuccessNew" style="display: none;" class="error-tips">
    <p class="tips-text">添加成功</p>
    <i class="icon-succeed"></i>
</div>


<script>
	var vH = ($(".shopInfo .headerinfo .pic").height() - $(".shopInfo .headerinfo .pic").find('img').height()) / 2;
	$(".shopInfo .headerinfo .pic").find('img').css('marginTop',vH);
	// 点击SKU时获取SKU信息
	$('#skus a').click(function(){
		item_id = $(this).attr('data-item-id');
		sku_id = $(this).attr('data-sku-id');
		stocks = $(this).attr('data-stocks');
		
		if (stocks == 0)
		{
			alert('卖光了');
		}
		else
		{
			alert(item_id + ':' + sku_id + '库存 ' + stocks);
		}
		return false;
	});

	// 商品信息
	var item = <?php echo $item_in_json ?>;

	var currentStocks = item.stocks;
	console.log(currentStocks);
	if(currentStocks < 1){
		$('#currentStocks').html('<i style="margin-top: .17rem;background-color:#ccc;color:#fff" class="btn btn-info btn-lg btn-block" title="加入购物车" href="###">加入<wbr>购物车</i>');
	}

	//获取当前商品所属的店铺id
    var bizId = <?php echo $item['biz_id'] ?>;
    var itemId = item.item_id;

	var record_id;
	$.ajax({
        url : api_url + 'fav_item/index',
        data : {app_type:'client',user_id:user_id,item_id : item.item_id},
        success : function(res){
			for (var i = 0;i < res.content.length;i++)
			{
				if(res.status == 200){
					record_id = res.content[i].record_id;
					$('.create').find('b').css('color','#fa3752').text('已收藏');
						$('.create').find('img').attr('src', cdn_url+'media/item/detail/shoucangcur.png')
				}; 
			}
        }
    });

    // 创建浏览记录
    $.ajax({
        url: api_url + "history_item_view/create",
         data:{app_type:'client',user_id:user_id,item_id:item.item_id,last_viewed_platform:'web'},
        success: function (res) {
            console.log('添加浏览记录成功');
        }
    });
		
	$('.create').on('click',function(e){
		if($(this).find('b').text() == '已收藏')
		{
			var cancelfocus = confirm('您确定要取消收藏此店铺吗?');
            if(cancelfocus)
            {
                    $.ajax({
                        url : api_url + 'fav_item/edit_bulk',
                        type : 'post',
                        dataType:'json',
                        data : {app_type:'client',user_id:user_id,ids:record_id,operation:'delete'},
                        success : function(res){
                            $('.create').find('b').css('color','#3E3A39').text('收藏');
                            $('.create').find('img').attr('src', cdn_url+'media/item/detail/shoucang-@3x.png')
                        }
                    });
            }
		}
		else
        {
            $.ajax({
			url: api_url + "fav_item/create",
             data:{app_type:'client',user_id:user_id,item_id:item.item_id},
            success: function (res) {
            	$('.create').find('b').css('color','#fa3752').text('已收藏');
                $('.create').find('img').attr('src', cdn_url+'media/item/detail/shoucangcur.png')
                $('#tip').show().delay(1000).fadeOut();
            }
		})
		}
	});

	// 添加进购物车
	var offset = $("#end").offset();
    var endLeft = $("#end").css("left");
    var oldcar, item_id, arrCur;
	$('#cart-add').click(function(){
		var userId = user_id;
		if(userId == ''){
			window.location.href=base_url+'login?url_after_login=<?php echo urlencode( trim($_SERVER['REQUEST_URI'], '/') ) ?>';
			return false;
		}
		var url = window.location.search; 
        // alert(url.length);
        // alert(url.lastIndexOf('='));
		var r = '<?= $id ?>';
        oldcar = r;
        var count=1;
        var addCartTime;
        var oldShopList = [];
        var countflag = 0;
        if (user_agent.is_wechat){
            var addcar = $(this);

            $.ajax({
                url: api_url + 'cart/index',
                cache: false,
                timeout: 10000,
                async: false,
                data : {app_type:'client',user_id:user_id},
                error: function(date){
                    alert(date);
                },
                success : function(data){
                    item_id = data.content.order_items;
                }
            });

		    for (var i = 0;i < item_id.length;i++){
			     for (var j = 0;j < item_id[i].order_items.length;j++){
					//var oldShopList = '1|' + item_id[i].order_items[j].item_id + '|0|' + item_id[i].order_items[j].count;
					if (oldcar == item_id[i].order_items[j].item_id){
						count = item_id[i].order_items[j].count;
						if (countflag == 0){
							count++;
							countflag = 1;
						}
					}else{
						oldShopList.push(item_id[i].order_items[j].biz_id + '|' + item_id[i].order_items[j].item_id + '|0|' + item_id[i].order_items[j].count);
					}
				}
	        }

	        arrCur = oldShopList.join(",");

			var img = addcar.parent().find('img').attr('src');
			var flyer = $('<img class="u-flyer" src="'+img+'">');

			flyer.fly({
				start: {
					left: addcar.offset().left - $(document).scrollLeft(),
					top: addcar.offset().top - $(document).scrollTop()
				},
				end: {
					left:parseInt(endLeft),
					top: 0,
					width: 0,
					height: 0
				},
				onEnd: function(){
					$("#msg").show().animate({width: '250px'}, 200).fadeOut(1000);
					addcar.css("cursor","default").removeClass('orange');
					this.destory();
				}
			});

			 var shopInfo = item['biz_id'] + '|'+oldcar+'|0|'+count+',' + arrCur;

			 // 上传接口
			 $.ajax({
			    url: api_url + "cart/sync_up",
			    async : false,
			    data:{app_type:'client',id:user_id,name:'cart_string',value:shopInfo},
			    success:function(res){
                    if( res.status == 200 ){
  			    		console.log(res);
  			    		clearTimeout(addCartTime);
  					    addCartTime = setTimeout(function(){
  							$('#cartsuccessNew').show().delay(1000).fadeOut();
  					    },1000);
                    }else{
                        alert(res.content.error.message);
                        return false;
                    }
			   }
			});

		}
	}); //add_cart结束
	
    var biz_flag = 0;
	$('.tabBarright').find('span').eq(1).on('click',function(){
            if (biz_flag == 0)
            {
                $('.dotshowlist').show();
                biz_flag = 1;
            }
            else
            {
                $('.dotshowlist').hide();
                biz_flag = 0;
            }
        });


		console.log($('#sidebar').scrollTop())
        

    // 商品评价区域
    var params = common_params;
    params.item_id = item.item_id;
    params.user_id = '';
    console.log(params);
    $.ajax({
    	url:api_url + 'comment_item/index',
    	data : params,
    	success : function(res){
    		if(res.content[0]){
    			$('.productevaluation').css('display','block');
    			console.log(res.content[0]);
    			var con = res.content[0];
    			var userLogo = con.avatar;
    			var nickname = con.nickname;
    			var content = con.content;
    			var time_create = con.time_create;
    			var oCon = '<div class="topcardwrap clearfix"><div class="evaluationinfo clearfix"><div class="pic fl"><img src="'+ media_url+'user/'+userLogo +'"></div><span class="fl block">'+nickname+'</span><time class="fr">'+time_create+'</time></div></div><div class="evaluationcontent"><p>'+content+'</p></div>';
    			$('.productevaluation').find('hr').after(oCon);
    		}
    	} 
    });


function getUrlParam(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); // 构造一个含有目标参数的正则表达式对象
    var r = window.location.search.substr(1).match(reg);  // 匹配目标参数
    if (r != null) return unescape(r[2]); return null; // 返回参数值
}
$('.jinlaiChat').click(function(e){
	e.preventDefault();

	if(user_id == ''){
		window.location.href=base_url+'login?url_after_login=<?php echo urlencode( trim($_SERVER['REQUEST_URI'], '/') ) ?>';
		return false;
	} else {
		$.post({
	        url:  api_url + 'wsmessage/hi',
	        data: {app_type:'client',biz_id:bizId,user_id:user_id},
	        success: function(result){
	             if (result.status == 200)
	             {

                    window.location.href = 'https://www.517ybang.com/chat/index?biz_id='+bizId+'&item_id=' + itemId;
	             } else {
	                alert(result);
	             }
	        },
	        error:function(result){
	        	console.log(result);
	        },
	        dataType: 'json'
	    });
	}


})
</script>
