<<<<<<< HEAD
﻿<base href="<?php echo $this->media_root ?>">
=======
<base href="<?php echo $this->media_root ?>">
>>>>>>> ac09f5a6f9df7ac43d2f05bacca7803ff799d425

<?php if ( !empty($item['excerpt']) ): ?>
<div class="wid670 auto mt20 abstracts">
    <p><?php echo $item['excerpt'] ?></p>
</div>
<?php endif ?>
<<<<<<< HEAD

<!--内容区域-->
=======
>>>>>>> ac09f5a6f9df7ac43d2f05bacca7803ff799d425
<div class="articletext wid670 auto">
    <?php if ($this->user_agent['is_wechat'] || !$this->user_agent['is_mobile']): ?>
    <h1><?php echo $item['title'] ?></h1>
    <?php endif ?>

    <time><?php echo $item['time_create'] ?></time>
    <?php echo $item['content'] ?>
</div>