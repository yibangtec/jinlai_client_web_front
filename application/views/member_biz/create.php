<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">  
<html>  
    <head>  
        <meta charset="utf-8" />  
        <title>scroll</title>    

<style>
	.equity .text {
    background: #fff;
    border-radius: .14rem;
    padding: .3rem .42rem;
    height: 1.6rem;
    font-size: .26rem;
    text-align: center;
    position: relative;
}
.equity .text div{
	position: absolute;
    top: 50%;
    width: 94%;
    left: 50%;
    -webkit-transform: translate(-50%,-50%);
    line-height: .4rem;
    text-align: left;
    }
    <?php if ( !empty($item['ornament']['main_figure_url']) ): ?>
    body{
        background:#f2f2f3 url(<?php echo MEDIA_URL.'ornament_biz/'.$item['ornament']['main_figure_url'] ?>) no-repeat center top;
        background-size: contain;
    }

    <?php endif ?>

    <?php if ( !empty($item['ornament']['vi_color_first']) ): ?>
    .vipcard {background-color:#<?php echo $item['ornament']['vi_color_first'] ?>;}
    .vipcard p{
    	margin-top: .34rem;
    }
    .equity i:before {color:#<?php echo $item['ornament']['vi_color_first'] ?>;}
    <?php endif ?>

    .ui-loader {display:none;}
    .enterstorebtn a {color:#fff;}
</style>

<?php
// 若未指定会员卡LOGO，使用商家LOGO
$logo_url = MEDIA_URL. (!empty($item['ornament']['member_logo_url'])? 'ornament_biz/'. $item['ornament']['member_logo_url']: 'biz/'. $item['url_logo']);
if($logo_url == 'https://jinlaisandbox-images.b0.upaiyun.com/biz/')
          $logo_url = 'https://cdn-remote.517ybang.com/media/home/default.png';
?>
	<div class="member_wrap">
		<div style="text-align: center;">
	<div class="storemainlogo">
        <a href="<?php echo base_url('biz/detail?id='.$item['biz_id']) ?>" target="_self">
            <img src="<?php echo $logo_url ?>">
        </a>
	</div>
	</div>
	<div class="enterstorebtn">
        <a href="<?php echo base_url('biz/detail?id='.$item['biz_id']) ?>" target="_self">进入店铺</a>
	</div>
    <?php
    $attributes = array('class' => 'form-'.$this->class_name.'-create vipcard  auto', 'role' => 'form');
    echo form_open($this->class_name.'/create?biz_id='.$item['biz_id'], $attributes);
    ?>
		<div class="storelogo fl">
            <img src="<?php echo $logo_url ?>">
		</div>
		<div class="rule fr">
			查看条款  <i class=" icon-Arrow"></i>
		</div>

        <?php
            if ( !empty($error) ):
                echo '<h2>'. $error. '</h2>'; // 若有错误提示信息则显示
            else:
                echo '<h2>申请成为'. $item['brief_name']. '会员</h2>';
            endif;
        ?>

        <div class=clearfix>
            <input name='mobile' type='tel' value="<?php echo $this->input->post('mobile')? set_value('mobile'): $this->input->cookie('mobile') ?>" size=11 pattern="\d{11}" placeholder="请输入您的常用手机号" required>
            <button type=submit class="cleardoc">加入会员</button>
        </div>
		<p>
			<!--* 若老会员绑定，需和线下会员预留手机号与姓名保持一致-->
			<!--<br>-->
			* 我已经阅读并了解此品牌基本网站条款条件,隐私政策及会员卡绑定协议,并且同意接受所有条款
		</p>
	</form>

	<div class=equity>
		<h2>商家地址</h2>
		<div class="text">
			<!--<li>
				<a>
					<i class="icon-xiaoxi"></i>
				</a>
				<span>活动提前通知</span>
			</li>
			<li>
				<a>
					<i class="icon-xinpin"></i>
				</a>
				<span>95折享新品</span>
			</li>
			<li>
				<a>
					<i class="icon-jifen2"></i>
				</a>
				<span>入会送积分</span>
			</li>
			<li>
				<a>
					<i class="icon-gouwu"></i>
				</a>
				<span>购物送积分</span>
			</li>-->
		</div>
	</div>
	</div>

	<script>
	$('.cleardoc').click(function(){
//		$(".form-member_biz-create").attr("enctype","application/x-www-form-urlencoded"); 
//		$(".form-member_biz-create").attr("encoding","application/x-www-form-urlencoded"); 
		if(!(/^1[3|4|7|5|8][0-9]\d{4,8}$/.test($("input[name=mobile]").val()))){ 
			alert('请输入正确的手机号');
			return;
		}
		setTimeout(function(){
			$('.ui-page').eq(0).remove();
		},800);
	});
	function getQueryString(name) {
    var result = window.location.search.match(new RegExp("[\?\&]" + name + "=([^\&]+)", "i"));
    if (result == null || result.length < 1) {
        return "";
    }
    return result[1];
}
	//获取商家地址
	  $.ajax({
	    	type:"post",
	    	url:"https://api.517ybang.com/biz/detail",
	    	dataType : 'json',
	    	data :{app_type:'client',id:getQueryString('biz_id')},
	    	async : false,
	    	success : function(res){
	    		console.log(res);
	    		var otext = '<div>'+res.content.address.replace('=','')+'</div>';
	    		$('.equity .text').append(otext);
	    	}
	    });
	</script>
	