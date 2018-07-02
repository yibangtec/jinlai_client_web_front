
    <script src="<?php echo CDN_URL ?>js/rem.js"></script>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css"/>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/normal.css"/>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/base.css"/>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/evaluate.css"/>
    <style>
        .textarea{
            width:6.6rem;
            height:2.7rem;
            border:none;
            margin: 0 0.2rem;
            border:none;

        }
       .box .file-uploader {overflow:hidden}
       .box .selector_zone {width:1.25rem;height:1.25rem;display:inline-block;position:relative; box-sizing:border-box;overflow:hidden;}
       .box input[type=file] {overflow:hidden;display:inline-block;}
       .box .file_selector {box-sizing:border-box;color:#ff3649;text-align:center;background-color:#fff;width:100%;height:100%;line-height:1.25rem;;border:0.02rem solid #ff3649;border-radius:0.12rem;display:inline-block;position:absolute;top:0;left:0;}

       .box .upload_preview {clear:both;}
       .box .upload_preview li {background-color:#ddd;position:relative;width:1.25rem;;height:1.25rem;;margin-right:0.1rem;border-radius:0.12rem;padding:0;display:inline-block;float:left;overflow:hidden;}
       .box .upload_preview li:nth-child(4n+0) {margin-right:0;}

       .box .upload_preview figure {width:100%;height:100%;display:flex;justify-content:center;align-items:center}
       .box .upload_preview figure img{width:1.25rem;height:1.25rem;}
       .box .upload_preview .adjuster {color:#fff;font-size:0.2rem;text-align:center;background-color:rgba(0,0,0,0.5);width:26%;height:0.3rem;line-height:0.3rem;cursor:pointer;position:absolute;bottom:0;z-index:100;}
       .box .adjuster:not(.remove) {padding:0.15rem}
       .box .upload_preview .remove {background-color:#ff3649;width:0.3rem;height:0.3rem;line-height:0.3rem;border-radius:0.15rem;right:0.04rem;top:0.04rem;}
       .box .upload_preview .left {left:0;}
       .box .upload_preview .right {right:0;}
       .box .upload_preview li:not(:last-child) .left:after {content:"";background-color:rgba(255,255,255,0.5);width:0.01rem;height:0.16rem;position:absolute;left:0.76rem;bottom:0.17rem;z-index:101;}
       .box .upload_preview li:first-child .right, .upload_preview li:last-child .left {width:75%;left:0;right:0;}
       .box .upload_preview li:first-child .left, .upload_preview li:last-child .right {display:none;}

       .box button.file-upload {display:none;}
    </style>

    <base href="<?php echo $this->media_root ?>">

<div class="box">
    <div class="line"></div>
    <div class="evaluate">
        <div class="item_eva">
            <span>商品评价</span>
            <i class="icon-xuanzhong2"></i>
            <i class="icon-xuanzhong2"></i>
            <i class="icon-xuanzhong2"></i>
            <i class="icon-xuanzhong2"></i>
            <i class="icon-weixuanzhong2"></i>
        </div>

        <textarea id="content" class="textarea" rows="3" name=street contenteditable="true" style="-webkit-user-select: text;-user-select: text;outline:none;resize:none;font-family: 'Microsoft YaHei';font-size: 0.28rem;color: #666464" class="create-input" type=text placeholder="商品怎么样，写点评论，给其他的小伙伴做个参考呗。" ></textarea>

        <div class="up-img clearfix">
            <?php
            require_once(VIEWS_PATH. 'templates/file-uploader.php');
            $name_to_upload = 'image_urls';
            generate_html($name_to_upload, $this->class_name, FALSE, 4);
            ?>
        </div>
    </div>
    <div class="biz-eva">
        <div class="biz-name">
            <i class="icon-dianpu"></i><span id="bizName">进来生鲜超市</span>
        </div>
        <div class="biz-server">
            <span>卖家服务</span>
            <i class="icon-xuanzhong2"></i>
            <i class="icon-xuanzhong2"></i>
            <i class="icon-xuanzhong2"></i>
            <i class="icon-xuanzhong2"></i>
            <i class="icon-weixuanzhong2"></i>
        </div>
        <div class="logistics-server">
            <span>物流服务</span>
            <i class="icon-xuanzhong2"></i>
            <i class="icon-xuanzhong2"></i>
            <i class="icon-xuanzhong2"></i>
            <i class="icon-xuanzhong2"></i>
            <i class="icon-weixuanzhong2"></i>
        </div>
    </div>
    <div id ="submitEvaluation" class="Submission-evaluation">发表评论</div>
</div>

<script>
// 由于全局的api_url被文件上传功能相关JS中的同名变量污染，需要重新声明API根URL
    var real_api_url = '<?php echo API_URL ?>';

    $(document).ready(function(){
        var item = find();
        var orderItems = item.order_items;
        var params = {};
        var paramsBiz = {};
        params.app_type = 'client';
        params.biz_id = item.biz_id;
        params.user_id = item.user_id;
        params.order_id = item.order_id;
        paramsBiz = params;
        var idArr = [];
        for(var key in orderItems){
            idArr.push(orderItems[key].item_id);
        }
        params.item_id = idArr.join(',');
        console.log(params);

        //get localStorage
        function find(){
            var cp_keynum = "baseInfo";
            var str = localStorage.getItem(cp_keynum);
            var num = JSON.parse(str);
            return num.cp_num_value
        }
        console.log(item);
        $('#bizName').text(item.biz_name);

        var itemComment = '4';
        var bizComment = '4';
        var logisticsComment = '4';




        $('#submitEvaluation').on('click',function(){
            params.image_urls = $('[name=image_urls]').val();
            params.content = $('#textarea').val();
            params.score = itemComment;
            paramsBiz.score_service = bizComment;
            paramsBiz.score_deliver = logisticsComment;
            $.post(
                 real_api_url + 'comment_item/create',
                 params,
                 function(result)
                 {
                     console.log(result); // 输出回调数据到控制台
                     if (result.status == 200)
                     {

                       //console.log(result);
                       $.post(
                           real_api_url + 'comment_biz/create',
                           paramsBiz,
                           function(result)
                           {
                               console.log(result); // 输出回调数据到控制台
                               if (result.status == 200)
                               {
                                  window.history.back(-1);
                                 //console.log(result);
                               } else {
                                  alert(result.content.error.message);
                               }
                           }
                       );
                     } else {
                        alert(result.content.error.message);
                     }
                 }
             );

        });

        $('#content').focus().val('')
        $('.item_eva i').click(function(){
            var index =$(this).index();
            console.log(index);
            $('.item_eva i').slice(0, index).addClass('icon-xuanzhong2').removeClass('icon-weixuanzhong2');
            $('.item_eva i').slice(index, 5).addClass('icon-weixuanzhong2').removeClass('icon-xuanzhong2');
            itemComment = index;

        });
        $('.biz-server i').click(function(){
            var index =$(this).index();
            console.log(index);
            $('.biz-server i').slice(0, index).addClass('icon-xuanzhong2').removeClass('icon-weixuanzhong2');
            $('.biz-server i').slice(index, 5).addClass('icon-weixuanzhong2').removeClass('icon-xuanzhong2');
            bizComment = index;
        });
        $('.logistics-server i').click(function(){
            var index =$(this).index();
            console.log(index);
            $('.logistics-server i').slice(0, index).addClass('icon-xuanzhong2').removeClass('icon-weixuanzhong2');
            $('.logistics-server i').slice(index, 5).addClass('icon-weixuanzhong2').removeClass('icon-xuanzhong2');
            logisticsComment = index;
        });

    })


</script>
