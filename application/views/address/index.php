    <script src="<?php echo CDN_URL ?>js/rem.js"></script>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css">
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/normal.css">
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/base.css">
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/address.css">
    <style>
        body{
            width: 100%;background-color: #F2F2F3; height: 100%
        }
        a {text-decoration: none;}
        .address{
            height:0;
        }
    </style>
<div class="box">

</div>

<div class="creat-address"><a href="<?php echo base_url('address/create') ?>">新建地址</a></div>

<script>
$(function(){
    var default_address_id = '<?php echo $this->session->address_id ?>'; // 默认收货地址ID

    // 若无收货地址，则转到地址创建页
    if (default_address_id == ''){
        location.href = base_url + 'address/create'
    }
    <?php if (!empty($items)): ?>
    else
    {
        var items = <?php echo json_encode($items) ?>;
        var defaultIcon = ''
        var defaultText = ''
        var brief = ''
        for(var key in items){
            if(default_address_id == items[key].address_id){
                defaultIcon = 'icon-xuanzhong';
                defaultText = '默认地址'
            }else{
                defaultIcon = 'icon-zidongtui';
                defaultText = '设为默认'
            }
            if(items[key].brief !== null){
                brief = '<span class="address-type">'+items[key].brief+'</span>';
            }else{
                brief = ''
            }
            var addressHtml = '<div class="address-list">'+
                                      '<a href="'+ base_url+'address/edit?id='+items[key].address_id+ '" class="address-title clearfix">'+
                                          '<div class="title-left">'+ brief + items[key].fullname + '</div>'+
                                          '<div class="title-right">'+items[key].mobile+'</div>'+
                                      '</a>'+
                                      '<a href="'+ base_url+'address/edit?id='+items[key].address_id+ '" class="address-content">'+
                                          '<p>'+items[key].province+items[key].city+items[key].county+'</p>'+
                                         '<p>'+items[key].street+'</p>'+
                                      '</a>'+
                                      '<div class="address-operation clearfix">'+
                                         '<div class="title-left select"><i class="'+ defaultIcon +'"></i> <span>'+defaultText+'</span></div>'+
                                          '<div class="title-right"><span class="operation-del"><i class="icon-del"></i> 删除</span><a href="'+ base_url+'address/edit?id='+items[key].address_id+ '" class="operation-type"><i class="icon-write"></i> 编辑</a></div>'+
                                      '</div>'+
                                  '</div>';
            $('.box').append(addressHtml);
        }
    }

    $(".select").click(function(){
            //console.log('jfsdk');
            $(".select").find("i").removeClass('icon-xuanzhong').addClass('icon-zidongtui');
            $(".select").siblings(".title-right").find(".operation-del").css('display','inline-block');
            if($(this).find("i").is('.icon-zidongtui')){
                console.log('jfsdk');
                $(this).find("i").removeClass('icon-zidongtui');
                $(this).find("i").addClass('icon-xuanzhong');
                $(this).siblings(".title-right").find(".operation-del").css('display','none');
            }

    });
        /*$('.operation-type').click(function(){
            location.href = "address/edit";
        });*/
        /*$('.operation-del').click(function(){
            $(this).parents(".address-list").remove();
        });*/
    <?php endif ?>

})
</script>
