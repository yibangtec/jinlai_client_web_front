    <script src="<?php echo CDN_URL ?>js/rem.js"></script>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css"/>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/normal.css"/>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/base.css"/>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/address.css"/>
    <style>
        body{
            width: 100%;background-color: #F2F2F3; height: 100%
        }
        a {text-decoration: none;}
        .address{
           height:0;
           position: static;
        }
    </style>
<div class="box">

</div>
<div class="creat-address"><a href="<?php echo base_url('address/create') ?>">新建地址</a></div>
<script>
$(function(){
    var params = common_params;
    var default_address_id = '<?php echo $this->session->address_id ?>'; // 默认收货地址ID
        // 若无默认收货地址，则AJAX创建
        if (default_address_id == '')
        {
            location.href = base_url + 'address/create'
        }
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
                                              '<a href="<?php echo base_url('address/edit') . "?&id='+items[key].address_id+'" ?>" class="address-title clearfix">'+
                                                  '<div class="title-left">'+ brief + items[key].fullname + '</div>'+
                                                  '<div class="title-right">'+items[key].mobile+'</div>'+
                                              '</a>'+
                                              '<a href="<?php echo base_url('address/edit') . "?&id='+items[key].address_id+'" ?>" class="address-content">'+
                                                  '<p>'+items[key].province+items[key].city+items[key].county+'</p>'+
                                                 '<p>'+items[key].street+'</p>'+
                                              '</a>'+
                                              '<div class="address-operation clearfix">'+
                                                 '<div data-id="'+ items[key].address_id +'" class="title-left select"><i class="'+ defaultIcon +'"></i> <span>'+defaultText+'</span></div>'+
                                                  '<div class="title-right"><span data-id="'+ items[key].address_id +'" class="operation-del"><i class="icon-del"></i> 删除</span><a href="<?php echo base_url('address/edit') . "?&id='+items[key].address_id+'" ?>" class="operation-type"><i class="icon-write"></i> 编辑</a></div>'+
                                              '</div>'+
                                          '</div>';
                    $('.box').append(addressHtml);
                }
        }






    $(".select").click(function(){
            //console.log('jfsdk');
            $(".select").find("i").removeClass('icon-xuanzhong').addClass('icon-zidongtui');
            $(".select").siblings(".title-right").find(".operation-del").css('display','inline-block');
            $(".select").find("span").css('color','#666464');
            var that = $(this);
            if(that.find("i").is('.icon-zidongtui')){

                console.log('jfsdk');
                var ID = that.attr('data-id');
                params.name = 'address_id';
                params.id = ID;
                params.value = '1';
                console.log(params);
                $.post(
                     api_url + 'user/edit_certain',
                     params,
                     function(result)
                     {
                         console.log(result); // 输出回调数据到控制台
                         if (result.status == 200)
                         {
                           that.find("i").removeClass('icon-zidongtui');
                           that.find("i").addClass('icon-xuanzhong');
                           that.find("span").css('color','#ff3649');
                           that.siblings(".title-right").find(".operation-del").css('display','none');
                         } else {
                            alert(result.content.error.message);
                         }
                     }
                 );

            }

    });
        /*$('.operation-type').click(function(){
            location.href = "address/edit";
        });*/

        $('.operation-del').click(function(){
            var ID = $(this).attr('data-id');
            params.operation = 'delete';
            params.ids = ID;
            console.log(params);
            if(confirm("确定要删除地址吗？"))
            {
               $.post(
                   api_url + 'address/edit_bulk',
                   params,
                   function(result)
                   {
                       console.log(result); // 输出回调数据到控制台
                       if (result.status == 200)
                       {
                         $(this).parents(".address-list").remove();
                       } else {
                          alert(result.content.error.message);
                       }
                   }
               );

            }

        });

})


</script>
