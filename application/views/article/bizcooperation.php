
	<style type="text/css">
		.zccom{
			width: 6.7rem;
			height: 7.23rem;
			border-radius: .35rem;
			position: relative;
			margin-top: 1.3rem;
			box-shadow: 0.08rem -0.08rem 0.08rem rgba(255,255,255,.4);
		}
		.zccom .zclogo{
			position: absolute;
			width: 1.52rem;
			height: 1.52rem;
			top: -.76rem;
			left: 50%;
			margin-left: -.76rem;
		}
		.zccontent{
			width: 4.6rem;
			margin: 0 auto;
			padding-top: .6rem;
		}
		.zccontent p{
			width: 100%;
			height: .98rem;
			position: relative;
		}
		.zccontent p img{
			float: left;
			width: .4rem;
			display: block;
			padding-right: .12rem;
			margin-top: .55rem;
			
		}
		.zccontent input{
			float: left;
		    
		    height: .4rem;
		    border: none;
		    outline: none;
		    margin-top: .55rem;
		    -webkit-appearance: none;
		    border-radius: 0;
		    font-size: .28rem;
			
		}
		.zcsub{
			width: 100%;
			display: block;
			margin-top: .86rem;
			border-radius: .4rem;
			text-align: center;
			color: #fff;
			background: #fa4a5c;
			height: .7rem;
			line-height: .7rem;
			font-size: .3rem;
		}
		.zcfooter{
			margin: 0 auto;
			margin-top: .2rem;
			width: 6.7rem;
			border-radius: .35rem;
			background: #fff;
			box-shadow: 0.08rem -0.08rem 0.08rem rgba(255,255,255,.4);
			padding: .6rem 0;
			
		}
		.zcfooter strong{
			display: block;
			width: 100%;
			overflow: hidden;
			padding-bottom: .25rem;
		}
		.zcfooter strong:last-child{
			padding-bottom: 0px;
		}
		.zcfooter span{
			font-size: .28rem;
			color: #6d6d6d;
			float: left;
			padding-right: .12rem;
		}
		.zcfooter i a{
			font-size: .26rem;
			color: #fe6057;
			float: left;
		}
		.zcfooter i{
			font-size: .26rem;
			color: #fe6057;
			float: left;
		}
		.zcfootercontent{
			width: 4.6rem;
			margin: 0 auto;
		}
		/*body{
		    background: url(https://cdn-remote.517ybang.com/media/home/zs@3x.png) no-repeat 0% 0%;
		    background-size: contain;		
		    }*/
		/*html{
			background: -webkit-linear-gradient(#fe915b,#f9385c);
			height: 100%;
		}*/
		.zcbg{
			background: -webkit-linear-gradient(#fe915b,#f9385c);
			height: 100%;
			overflow: hidden;
		}
		#zctopbg{
			position: absolute;
			top:0;
			width: 80%;
			left: 50%;
			margin-left: -40%;
			height: 2rem;
			 background: url(https://cdn-remote.517ybang.com/media/home/zs@3x.png) no-repeat 0% 0%;
			 background-size:contain ;
		}
		.zccontent p i{
			display: block;
			float: left;
			border-bottom: 1px solid #cbcaca;
			width: 3.8rem;
		}
	</style>

	<div class="zcbg">
		<div id="zctopbg"></div>
     <div class="zccom bgfff auto clearfix">
     	<img src="https://cdn-remote.517ybang.com/media/home/zclogo.png" alt="" class="zclogo"/>
     	<div class="zccontent">
     		<p>
     			<img src="https://cdn-remote.517ybang.com/media/home/qy@3x.png" alt="" />
     			<i><input type="" name="" value="" placeholder="企业名称" class="required qymc" /></i>
     		</p>
     		<p>
     			<img src="https://cdn-remote.517ybang.com/media/home/fw@3x.png" alt="" />
     			<i><input type="" name="" value="" placeholder="经营范围" class="required jyfw"/></i>
     			
     		</p>
     		<p>
     			<img src="https://cdn-remote.517ybang.com/media/home/ren@3x.png" alt="" />
     			<i><input type="" name="" value="" placeholder="联系人" class="required lxr"/></i>
     		</p>
     		<p>
     			<img src="https://cdn-remote.517ybang.com/media/home/dh@3x.png" alt="" />
     			<i><input type="" name="" value="" placeholder="联系方式" class="required lxfs"/></i>
     		</p>
     		<a href="###" class="zcsub">提交申请</a>
     	</div>
     </div>
     <div class="zcfooter">
     	<div class="zcfootercontent clearfix">
     		<strong>
     			<span>招商电话:</span>
     			<i><a href="tel:15066199888">15066199888</a></i>
     		</strong>
     		<strong>
     			<span>固话:</span>
     			<i><a href="tel:0532-4008820532">0532-4008820532</a></i>
     		</strong>
     		<strong>
     			<span>邮箱:</span>
     			<i><a href="mailto:zhaoshang@yibangtec.com">zhaoshang@yibangtec.com</a></i>
     		</strong>
     	</div>
		</div>
</div>
<script type="text/javascript">
	var regnoVal = /\S/;
	var regTel = /^1\d{10}$/;
	var tip;
	$('.zcbg').height($(window).height());
	$('.zcsub').click(function(){
		if(!regnoVal.test($('.qymc').val())){
			tip = '*';
				var oError = '<span style="font-size:.2rem;position:absolute;right:.2rem;top:.7rem;color:#fa4a5c;">'+tip+'</span>';
				$('.qymc').parent('i').parent('p').find('span').remove();
				$('.qymc').parent('i').parent('p').append(oError);
				return false;
		}
		if(!regnoVal.test($('.jyfw').val())){
			tip = '*';
				var oError = '<span style="font-size:.2rem;position:absolute;right:.2rem;top:.7rem;color:#fa4a5c;">'+tip+'</span>';
				$('.jyfw').parent('i').parent('p').find('span').remove();
				$('.jyfw').parent('i').parent('p').append(oError);
				return false;
		}
		if(!regnoVal.test($('.lxr').val())){
			tip = '*';
				var oError = '<span style="font-size:.2rem;position:absolute;right:.2rem;top:.7rem;color:#fa4a5c;">'+tip+'</span>';
				$('.lxr').parent('i').parent('p').find('span').remove();
				$('.lxr').parent('i').parent('p').append(oError);
				return false;
		}
		if(!regTel.test($('.lxfs').val())){
			tip = '手机号错误';
				var oError = '<span style="font-size:.2rem;position:absolute;right:.2rem;top:.7rem;color:#fa4a5c;">'+tip+'</span>';
				$('.lxfs').parent('i').parent('p').find('span').remove();
				$('.lxfs').parent('i').parent('p').append(oError);
				return false;
		}
		$.ajax({
			type:"get",
			url:"https://api.jinlaimall.xyz/zhaoshang",
			dataType : 'json',
			data : {name:$('.qymc').val(),area:$('.jyfw').val(),lxr:$('.lxr').val(),tel:$('.lxfs').val()},
			success:function(res){
				alert('进来等你');
				// debugger;
				$('input').val('');
			}
		});
	});
	$('.required').blur(function(){
		if($(this).is($('.qymc'))){
			if(!regnoVal.test($(this).val())){
				tip = '*';
				var oError = '<span style="font-size:.2rem;position:absolute;right:.2rem;top:.7rem;color:#fa4a5c;">'+tip+'</span>';
				$(this).parent('i').parent('p').find('span').remove();
				$(this).parent('i').parent('p').append(oError);
				return false;
			}
			$(this).parent('i').parent('p').find('span').remove();
		}
			//经营范围
		if($(this).is($('.jyfw'))){
			if(!regnoVal.test($(this).val())){
				tip = '*';
				var oError = '<span style="font-size:.2rem;position:absolute;right:.2rem;top:.7rem;color:#fa4a5c;">'+tip+'</span>';
				$(this).parent('i').parent('p').find('span').remove();
				$(this).parent('i').parent('p').append(oError);
				return false;
			}
			$(this).parent('i').parent('p').find('span').remove();
		}
		
		if($(this).is($('.lxr'))){

			if(!regnoVal.test($(this).val())){

				tip = '*';
				var oError = '<span style="font-size:.2rem;position:absolute;right:.2rem;top:.7rem;color:#fa4a5c;">'+tip+'</span>';
				$(this).parent('i').parent('p').find('span').remove();
				$(this).parent('i').parent('p').append(oError);
				return false;

			}
			$(this).parent('i').parent('p').find('span').remove();

		}

//		//联系方式

		if($(this).is($('.lxfs'))){

			if(!regTel.test($(this).val())){
				tip = '手机号错误';
				var oError = '<span style="font-size:.2rem;position:absolute;right:.2rem;top:.7rem;color:#fa4a5c;">'+tip+'</span>';
				$(this).parent('i').parent('p').find('span').remove();
				$(this).parent('i').parent('p').append(oError);
				return false;
			}
			$(this).parent('i').parent('p').find('span').remove();

		}

		
	})
</script>
