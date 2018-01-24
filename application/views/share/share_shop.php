
    <title>店铺分享</title>
    <script src="<?php echo CDN_URL ?>js/rem.js"></script>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css"/>
    <style>
        *:before, *:after {box-sizing: border-box; }
        *, *:before, *:after {-webkit-tap-highlight-color: rgba(0, 0, 0, 0);}
        html, body, div, span, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, address, cite, code, del, dfn, em, img, ins, kbd, q, samp, small, strong, sub, sup, var, b, i, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td {
            border: 0 none;font-family: "Microsoft YaHei"; font-size: inherit;color: inherit; margin: 0;padding: 0;vertical-align: baseline;}
        h1, h2, h3, h4, h5, h6 {font-weight: normal;}
        em, strong { font-style: normal;}
        ul, ol, li {list-style: none;}
        .clearfix:after{content:".";display:block;height:0;clear:both;visibility:hidden;}
        input{outline:none;}
        button{border: none;}
        html{ margin: 0 auto; height: 100%}
        body {width: 100%;background-color: #F2F2F3; height: 100%}
        a {text-decoration: none;}
        .box {width: 100%; height: 100%;position: relative;font-size: 0.26rem;background: url("<?php echo CDN_URL ?>media/share/beijing@3x-8.png") no-repeat;
        background-size: 100% 100%;}
        .share-content{
            height: 2.7rem;width:6.7rem;position: absolute;bottom: 1.45rem;margin: 0 0.4rem;
            background-color: #fff;border-radius: 0.3rem;z-index: 100;
        }
        .shadow-first{
            height: 2.88rem;
            width: 6.5rem;position: absolute;bottom: 1.35rem;margin: 0 0.5rem;border-radius: 0.3rem;
            background-color: rgba(255,255,255,.4);
            z-index: 10;
        }
        .shadow-second{
            height: 2.7rem;
            width: 6.3rem;position: absolute;bottom: 1.25rem;margin: 0 0.6rem;border-radius: 0.3rem;
            background-color: rgba(255,255,255,.4);
            z-index: 0;
        }
        .shop-logoUrl{float:left;display: block;height: 1.1rem;width: 1.1rem;border-radius: 0.2rem;margin: 0.8rem 0.2rem 0.8rem 0.4rem;}
        .shop-name{
            float: left;
            margin-top: 0.9rem;
        }
        .shop-name p:first-child{
            font-size: 0.26rem;
            color: #3e3a39;
            padding: 0.08rem 0;
        }
        .shop-name p:nth-child(2){
            font-size: 0.22rem;
            color: #ff5082;
        }
        .shop-erweima{
            display: block;
            width: 1.9rem;
            height: 1.9rem;
            margin: 0.4rem;
            float: right;
        }
    </style>


    <div class="box">

        <div class="shadow-first"></div>
        <div class="shadow-second"></div>
        <div class="share-content">
            <img class="shop-logoUrl" src="<?php echo CDN_URL ?>media/icon120@3x.png" alt=""/>
            <div class="shop-name">
                <p>冰山科技</p>
                <p>扫码进店逛逛</p>
            </div>
            <img class="shop-erweima" src="<?php echo CDN_URL ?>media/share/erweima.png" alt=""/>
        </div>
    </div>
