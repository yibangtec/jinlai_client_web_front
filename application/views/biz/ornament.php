<?php if ($this->input->post_get('test_mode') == 'on') var_dump($item['ornament']) ?>

<?php if ( !empty($item['ornament']['home_slides']) ): ?>
    <!--头部banner区域开始-->
    <div class="bannerWrap auto">
        <div class="swiper-container_detail">
            <div class="swiper-wrapper">
                <?php
                if ( ! empty($item['ornament']['home_slides']) ):
                    $slides = explode(',', $item['ornament']['home_slides']);
                    foreach ($slides as $slide):
                        // 根据分隔符检查点击图片后是否需要跳转到别的页面
                        if (strpos($slide, '|') !== FALSE):
                            // 拆分出图片URL和链接URL
                            $slide_urls = explode('|', $slide);
                            list($slide, $class_name, $class_id) = $slide_urls;
                            echo '<div class="swiper-slide"><a title="'.SITE_NAME.'" href="'. base_url($class_name.'/detail?id='.$class_id.'&biz_id='.$item['biz_id']). '" target="_self"><img src="'.MEDIA_URL.'ornament_biz/'. $slide.'"></a></div>';

                        else:
                            echo '<div class="swiper-slide"><img src="'.MEDIA_URL.'ornament_biz/'. $slide.'"></div>';

                        endif;
                    endforeach;
                endif;
                ?>
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
<?php endif // if ( !empty($item['ornament']['home_slides']) ) ?>

<?php
function assemble_item_image_url($item, $url_column_name)
{
    // 为非从单商户版迁移过来的商品添加路径前缀
    $actural_url = (strpos($item[$url_column_name], 'http') === FALSE)? MEDIA_URL.'item/'.$item[$url_column_name]: $item[$url_column_name];

    return $actural_url;
}
?>

<?php if ( !empty($item['m0_items']) ): ?>
    <div class="fruidWrap clearfix auto">
        <div class="swiper-container_fruit">
            <div class="swiper-wrapper">
                <ul>
                    <?php foreach ($item['m0_items'] as $module_item): ?>
                        <li class=swiper-slide>
                            <a href="<?php echo base_url('item/detail?id='.$module_item['item_id']) ?>" target="_self">
                                <img src="<?php echo assemble_item_image_url($module_item, 'url_image_main') ?>">
                            </a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>
<?php endif // if ( !empty($item['m0_items']) ) ?>

<!-- 商家优惠券 -->
<?php if ( ! empty($item['coupon_templates'])): ?>
    <div class="couponswrap wid710 auto mt20 clearfix">
        <ul class="clearfix">
            <!--有三张优惠券的时候显示-->
            <?php if (count($item['coupon_templates']) == 3): ?>
                <?php foreach ($item['coupon_templates'] as $template): ?>
                    <li>
                        <a href="<?php echo base_url('coupon/create?template_id='.$template['template_id']) ?>">
                            <span class=couponnum><?php echo $template['amount'] ?></span>
                            <span class="verticalline fl"></span>
                            <div class="couponinfowrap fl">
                                <span class="coupontitletext">优惠券</span>
                                <?php if ( ! empty($template['min_subtotal'])): ?>
                                    <span class="coupontip mt10">满<?php echo $template['min_subtotal'] ?>可用</span>
                                <?php endif ?>
                            </div>
                            <p class="getcoupon">
                                点击领取
                                <span></span>
                            </p>
                        </a>
                    </li>
                <?php endforeach ?>
                <!--有两张优惠券的时候显示-->
            <?php elseif (count($item['coupon_templates']) == 2): ?>
                <?php foreach ($item['coupon_templates'] as $template): ?>
                    <li class="coupontwo">
                        <a href="<?php echo base_url('coupon/create?template_id='.$template['template_id']) ?>">
                            <span class=couponnum><?php echo $template['amount'] ?></span>
                            <span class="verticalline fl"></span>
                            <div class="couponinfowrap fl">
                                <span class="coupontitletext">优惠券</span>
                                <?php if ( ! empty($template['min_subtotal'])): ?>
                                    <span class="coupontip mt10">满<?php echo $template['min_subtotal'] ?>可用</span>
                                <?php endif ?>
                            </div>
                            <p class="getcoupon">
                                点击领取
                                <span></span>
                            </p>
                        </a>
                    </li>
                <?php endforeach ?>

                <!--有一张优惠券的时候显示-->
            <?php elseif (count($item['coupon_templates']) == 1): ?>
                <?php foreach ($item['coupon_templates'] as $template): ?>
                    <li class="couponone">
                        <img data-src="<?php echo CDN_URL ?>media/yhqbg@3x.png" />
                        <a href="<?php echo base_url('coupon/create?template_id='.$template['template_id']) ?>">
                            <!--可用金额-->
                            <div class="curnum">
                                <?php echo $template['amount'] ?>
                                <div class="yuan">
                                    <img  data-src="<?php echo CDN_URL ?>media/yuan@3x.png"/>
                                </div>
                            </div>
                            <div class="yhqtext">
                                优惠券
                            </div>
                            <?php if ( ! empty($template['min_subtotal'])): ?>
                                <div class="topnum">
                                    满
                                    <span>
                                    <?php echo $template['min_subtotal'] ?>
                                </span>
                                    元可用
                                </div>
                            <?php endif ?>
                            <p class="line"></p>
                            <div  class="curgetcoupon">
                                点&nbsp;击&nbsp;领&nbsp;取
                            </div>
                        </a>
                    </li>
                <?php endforeach ?>
            <?php endif ?>
        </ul>
    </div>
<?php endif ?>

<!--商品分类-->
<div class="threecol clearfix none">
    <ul>
        <li>
            <a href="https://www.517ybang.com/item/detail?id=3" target="_self">
                <div class="pic shopIndexpic">
                    <img data-src="<?php echo CDN_URL ?>media/home/jianhuo_putao@3x.png">
                </div>
            </a>
        </li>
        <li>
            <div class="pic shopIndexpic">
                <img data-src="<?php echo CDN_URL ?>media/home/jianhuo_putao@3x.png">
            </div>
        </li>
        <li style="margin-right:0">
            <div class="pic shopIndexpic">
                <img data-src="<?php echo CDN_URL ?>media/home/banner1@3x.png">
            </div>
        </li>
    </ul>
</div>

<?php if ( !empty($item['m1_items']) ): ?>
    <!--卡片式导航分类区域-->
    <div class="shopIndexcard clearfix auto mt10 wid710">
        <!--<div class="pictitle wid710 border20">
            <strong>Hisense</strong>
            <i class="icon-gengduo fr"></i>
            <span class="fr">创新就是生活</span>
        </div>-->
        <div class="pic mt10">
            <a href="<?php echo base_url('item/detail?id='.$item['ornament']['home_m1_ace_id']) ?>" target="_self">
                <img data-src="<?php echo MEDIA_URL.'ornament_biz/'.$item['ornament']['home_m1_ace_url'] ?>">
            </a>
        </div>
        <!--卡片式导航商品内容区域-->
        <div class="cardnavcontent clearfix wid710 auto">
            <ul>
                <?php foreach ($item['m1_items'] as $module_item): ?>
                    <li>
                        <a href="<?php echo base_url('item/detail?id='.$module_item['item_id']) ?>" target="_self">
                            <div class=pic>
                                <img data-src="<?php echo assemble_item_image_url($module_item, 'url_image_main') ?>">
                            </div>
                            <h1><?php echo $module_item['name'] ?></h1>
                            <h2><?php echo $module_item['slogan'] ?></h2>
                            <h3>￥ <?php echo $module_item['price'] ?></h3>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
<?php endif ?>

<?php if ( !empty($item['m2_items']) ): ?>
    <!--卡片式导航分类区域-->
    <div class="shopIndexcard clearfix auto mt10 wid710">
        <!--<div class="pictitle wid710 border20">
            <strong>Hisense</strong>
            <i class="icon-gengduo fr"></i>
            <span class="fr">创新就是生活</span>
        </div>-->
        <div class="pic mt10">
            <a href="<?php echo base_url('item/detail?id='.$item['ornament']['home_m2_ace_id']) ?>" target="_self">
                <img data-src="<?php echo MEDIA_URL.'ornament_biz/'.$item['ornament']['home_m2_ace_url'] ?>">
            </a>
        </div>
        <!--卡片式导航商品内容区域-->
        <div class="cardnavcontent clearfix wid710 auto">
            <ul>
                <?php foreach ($item['m2_items'] as $module_item): ?>
                    <li>
                        <a href="<?php echo base_url('item/detail?id='.$module_item['item_id']) ?>" target="_self">
                            <div class=pic>
                                <img data-src="<?php echo assemble_item_image_url($module_item, 'url_image_main') ?>">
                            </div>
                            <h1><?php echo $module_item['name'] ?></h1>
                            <h2><?php echo $module_item['slogan'] ?></h2>
                            <h3>￥ <?php echo $module_item['price'] ?></h3>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
<?php endif ?>

<?php if ( !empty($item['m3_items']) ): ?>
    <!--卡片式导航分类区域-->
    <div class="shopIndexcard clearfix auto mt10 wid710">
        <!--<div class="pictitle wid710 border20">
            <strong>Hisense</strong>
            <i class="icon-gengduo fr"></i>
            <span class="fr">创新就是生活</span>
        </div>-->
        <div class="pic mt10">
            <a href="<?php echo base_url('item/detail?id='.$item['ornament']['home_m3_ace_id']) ?>" target="_self">
                <img data-src="<?php echo MEDIA_URL.'ornament_biz/'.$item['ornament']['home_m3_ace_url'] ?>">
            </a>
        </div>
        <!--卡片式导航商品内容区域-->
        <div class="cardnavcontent clearfix wid710 auto" style="padding-bottom: .8rem;">
            <ul>
                <?php foreach ($item['m3_items'] as $module_item): ?>
                    <li>
                        <a href="<?php echo base_url('item/detail?id='.$module_item['item_id']) ?>" target="_self">
                            <div class=pic>
                                <img data-src="<?php echo assemble_item_image_url($module_item, 'url_image_main') ?>">
                            </div>
                            <h1><?php echo $module_item['name'] ?></h1>
                            <h2><?php echo $module_item['slogan'] ?></h2>
                            <h3>￥ <?php echo $module_item['price'] ?></h3>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
<?php endif ?>
