    <script src="<?php echo CDN_URL ?>js/rem.js"></script>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css"/>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/normal.css"/>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/base.css"/>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/evaluate.css"/>

<div class="box" id="commentItem">



</div>
<script>
    $(function(){
        var real_api_url = '<?php echo API_URL ?>';
        var id = getQueryString('id');
        var params = {};
        params.app_type = 'client';
        params.item_id=id;
        $.post(
             real_api_url + 'comment_item/index',
             params,
             function(result)
             {
                 console.log(result); // 输出回调数据到控制台
                 if (result.status == 200)
                 {
                    var item = result.content;
                    var Html = '';
                    var arrImg = [];
                    for(var key in item){
                        arrImg = item[key].image_urls.split(',');
                        Html ='<div class="evaluate-list">'+
                                  '<div class="user-evaluate clearfix">'+
                                     '<div class="eva-left"><div class="avatarImg"><img src="<?php echo MEDIA_URL ?>user/'+item[key].avatar+'" alt=""/></div><span>'+item[key].nickname+'</span></div>'+
                                      '<div class="eva-right">'+item[key].time_create+'</div>'+
                                  '</div>'+
                                  '<div class="eva-content">'+item[key].content+'</div>'+
                                  '<div class="eva-imgs clearfix">';
                        var imgHtm = '';
                        for(var i=0;i<arrImg.length;i++){
                            imgHtm += '<img src="<?php echo MEDIA_URL ?>comment_item/'+arrImg[i]+'" alt=""/>';
                        }
                        var botHtml = '</div></div>';
                        $('#commentItem').append(Html+imgHtm+botHtml);

                    }
                 } else {
                    alert(result.content.error.message);
                 }
             }
         );




        function getQueryString(name){
             var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
             var r = window.location.search.substr(1).match(reg);
             if (r!=null) return r[2]; return '';
        }

    });
</script>

