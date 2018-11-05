<div id=vote-extra>
    <?php if ( ! empty($item['extra'])): ?>
        <?php echo $item['extra'] ?>
    <?php endif ?>

    <section>
        <p>【参选对象】 青岛市范围内的优质商家</p>
        <p>【参评方式】 全网投放，线上线下征集商家，全民投票评选。</p>
        <p>【投票规则】 <?php echo ($item['max_user_total'] == 0)? NULL: '总共可投'.$item['max_user_total'].'票，' ?>每人每天<?php echo $item['max_user_daily'] ?>张选票，同一商家每天限投<?php echo $item['max_user_daily_each'] ?>票。</p>

        <p>【公开颁奖】 3月27日14点 鲁商凯悦酒店三楼凯悦厅<br>「进来」平台商家运营峰会 共同见证揭晓结果（15:00投票通道关闭），盛大仪式隆重颁奖。</p>
    </section>

    <p class=strong>消费者可以根据参评商家的品牌、品质、服务、口碑、匠心、稀缺性等6个维度进行综合评选。</p>

</div>