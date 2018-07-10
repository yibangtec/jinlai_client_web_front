<style>
    body {
        background: #efefef;
    }

    .aboutuslogo {
        padding-top: .5rem;
        padding-bottom: .3rem;
    }

    .aboutuslogo img {
        display: block;
        width: 1.6rem;
        height: 1.6rem;
        margin: 0 auto;
    }

    .aboutuscontent {
        font-size: .26rem;
        color: #6e6d6d;
        line-height: 1.4;
        padding-bottom: .38rem;
        width: 6.35rem;
        margin: 0 auto;
    }

    .aboutuscontent h2 {
        text-align: center;
    }

    .aboutuspiclist {
        width: 5.7rem;
        margin: 0 auto;
        overflow: hidden;
    }

    .aboutuspiclist li {
        float: left;
        margin-right: .45rem;
    }

    .aboutuspiclist li span {
        color: #777;
        font-size: .26rem;
        display: block;
        padding-top: .26rem;
        padding-bottom: .38rem;
        text-align: center;
        width: 100%;
    }

    .aboutuspiclist li img {
        display: block;
        width: 100%;
        width: 1.6rem;
        height: 1.6rem;
    }

    .aboutustextlist p {
        height: .84rem;
        line-height: .84rem;
        color: #3c3c3c;
        border-bottom: 1px solid #e1e1e1;
        font-size: .28rem;
        background: #fff;
    }

    .aboutustextlist a {
        display: block;
        width: 100%;
        height: 100%;
    }

    .aboutustextlist span:nth-child(1) {
        margin-left: .56rem;
    }

    .aboutustextlist span:nth-child(2) {
        margin-right: .56rem;
    }

    .aboutfooter {
        color: #777;
        font-size: .24rem;
        padding-top: 1.06rem;
        text-align: center;
    }
</style>

<div class="aboutuslogo">
    <img src="<?php echo CDN_URL ?>media/home/aboutuslogo.png" alt="进来商城LOGO">
</div>

<div class="aboutuscontent">
    <h2>----进来商城，与精良为伍----</h2>
    <p>进来商城立足青岛，深耕本地严选商品，致力于为用户提供高品质的商品及服务，提供值得信赖的优选商家，品类涵盖严选生鲜、优选水果、岛城特产、全国特色、百货商品、母婴亲子、培训教育、美食、结婚、医美、休闲娱乐、时尚丽人、运动健康、智能家居、高端定制、汽车车品、进来出行、进来易货、潮流酷玩。</p>
    <p>秉承“严于选品，精予用户”的运营理念，进来商城严格把控品质源头，力求为消费者精选优质商品。</p>
</div>

<div class="aboutuspiclist">
    <ul>
        <?php if ($this->user_agent['is_android']): ?>
        <li>
            <a href="<?php echo base_url('jinlai_client_0.0.1.apk') ?>">
                <img src="<?php echo CDN_URL ?>media/home/android@3x.png" alt="Android客户端">
                <span>Android</span>
            </a>
        </li>
        <?php elseif ($this->user_agent['is_ios']): ?>
        <li>
            <a href="https://itunes.apple.com/cn/app/id1304204060">
                <img src="<?php echo CDN_URL ?>media/home/ios@3x.png" alt="iOS客户端">
                <span>ios</span>
            </a>
        </li>
        <?php endif ?>
        <li>
            <img src="<?php echo CDN_URL ?>media/home/wx@3x.png" alt="进来商城微信服务号二维码">
            <span>微信服务号</span>
        </li>
    </ul>
</div>
<!--消费服务,商家,投诉举报区域-->
<div class="aboutustextlist">
    <p>
        <a href="tel:4008820532">
            <span class="fl">消费者服务</span>
            <span class="fr">400-882-0532</span>
        </a>
    </p>
    <p>
        <a href="tel:053280862555">
            <span class="fl">商家服务</span>
            <span class="fr">0532-80862555</span>
        </a>
    </p>

    <!--
    <p>
        <a href="###">
            <span class="fl">投诉举报</span>
            <span class="fr">someone@some.com</span>
        </a>
    </p>
    -->

    <p style="margin-top:.2rem;">
        <a href="<?php echo base_url('article/policy-privacy') ?>">
            <span class="fl">隐私协议</span>
            <span class="fr">&gt;</span>
        </a>
    </p>
    <p>
        <a href="<?php echo base_url('article/user-agreement') ?>">
            <span class="fl">用户协议</span>
            <span class="fr">&gt;</span>
        </a>
    </p>
</div>

<div class="aboutfooter">&copy;<?php echo date('Y') ?> 青岛意帮网络科技有限公司</div>