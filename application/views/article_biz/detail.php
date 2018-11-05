<base href="<?php echo $this->media_root ?>">

<div id=content class=container>
    <?php if ( !empty($item['excerpt']) ): ?>
        <div class="abstracts wid670 auto">
            <p><?php echo $item['excerpt'] ?></p>
        </div>
    <?php endif ?>

    <!--内容区域-->
    <div class="articletext wid670 auto">
        <?php if ($this->user_agent['is_wechat'] || !$this->user_agent['is_mobile']): ?>
            <h1><?php echo $item['title'] ?></h1>
        <?php endif ?>

        <time datetime="<?php echo $item['time_create'] ?>"><?php echo $item['time_create'] ?></time>
        <?php echo $item['content'] ?>
    </div>
</div>

<script>
$(function(){
    $(".articletext p img").attr({
        'width':'auto',
        'height' : 'auto'
    });
});
</script>