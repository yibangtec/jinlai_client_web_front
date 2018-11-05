<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>童趣室界</title>
    <link href="https://cdn-remote.517ybang.com/css/base.css" rel="stylesheet">
    <script src="https://cdn-remote.517ybang.com/js/rem.js"></script>
    <link rel="stylesheet" href="https://cdn-remote.517ybang.com/css/activities.css"/>
</head>
<body>
    <div class="confirm">
        <div class="tips">
            <p class="tips-text">领取成功!</p>
            <div class="tips-btns">
                <a class="look-detail" href="">查看</a>
                <span class="tips-cancel">继续领取</span>
            </div>
        </div>
    </div>
    <div class="content">
        <img class="content-bg" src="https://cdn-remote.517ybang.com/media/springbanner@3x.png" alt=""/>
        <?php if (!empty($mytickets)): ?>
        <a  class="more-btn" href="<?php echo base_url('activity/mine') ?>">查看我的优惠券 <img class="more-icon" src="https://cdn-remote.517ybang.com/media/more.png" alt=""/></a>
        <?php else: echo '<br id="space">'; ?>
        <?php endif ?>

        <?php foreach($ticket as $key => $value): ?>
        <div class="activities-item">
            <div class="item-left">
                <img class="item-logo" src="<?php echo $value['picture'] ?>" alt=""/>
                <div class="item-name"><?php echo $value['sub_name'] ?></div>
                <div class="btn-operation">
                    <?php $tid = intval($value['id']);?>
                    <?php if (isset($mytickets[$tid])) : ?>
                        <a class="see-detail" href="<?php echo base_url('activity/detail?id='. $mytickets[$tid]['id'] . '&biz_id=' . $value['biz_id'] )  ?>">查看详情</a>
                    <?php else :?>
                        <div class="receive"  biz="<?php echo $value['biz_id']?>" data="<?php echo '?id=' . $value['id'] . '&biz_id=' . $value['biz_id'] . '&ticket_name=' . $value['ticket_name']?>" >立即领取</div>
                    <?php endif ?>
                </div>
            </div>
            <div class="item-right">
                <p class="current-slogan"><?php echo $value['ticket_name'] ?></p>
                <p class="expiry-date">限2018-10-30前使用</p>
                <p class="limited">限<?php echo $value['show_count'] ?>张</p>
                <p class="usage-mode">点击领取，到店核销</p>
            </div>
        </div>

        <?php endforeach; ?>

        <div style="width:100%;text-align:center;font-size:0.24rem;color:#3e3a39;padding:0.3rem 0;">本活动解释权归进来商城所有</div>
    </div>
    <script src="https://cdn-remote.517ybang.com/js/jquery-3.3.1.min.js"></script>
    <script>
        $(function(){
            // $('.receive').on('click',function(){
            //     $('.confirm').show();
            // });
            $('.tips-cancel').on('click',function(){
                $('.confirm').hide();
            });
            $(".receive").on('click', function(){
                let that = $(this);
                $.getJSON('/activity/getticket' + that.attr('data'), function(res){
                    let mbtn = $(".more-btn").length;

                    if (res.status == 200) {
                        if (mbtn == 0) {
                            $("#space").before('<a  class="more-btn" href="<?php echo base_url('activity/mine') ?>">查看我的优惠券 <img class="more-icon" src="https://cdn-remote.517ybang.com/media/more.png" alt=""/></a>').remove();
                        }
                        $('.confirm').show();
                        let bizid = that.attr('biz');
                        let link = '<a class="see-detail" href="/activity/detail?biz_id=' + bizid + '&id=' + res.id + '">查看详情</a>';
                        $('.look-detail').prop('href', '/activity/detail?biz_id=' + bizid +  '&id=' + res.id);
                        that.before(link).remove();
                    } else {
                        alert(res.msg)
                    }

                })
            })
        });
    </script>
</body>
</html>