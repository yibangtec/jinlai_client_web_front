<style>


	/* 宽度在750像素以上的设备 */
	@media only screen and (min-width:751px)
	{

	}
	
	/* 宽度在960像素以上的设备 */
	@media only screen and (min-width:961px)
	{

	}

	/* 宽度在1280像素以上的设备 */
	@media only screen and (min-width:1281px)
	{

	}
</style>

<div id=content class=container>
	<?php
		if ( !empty($error) ) echo '<div class="alert alert-warning" role=alert>'.$error.'</div>';
		$attributes = array('class' => 'form-'.$this->class_name.'-create form-horizontal', 'role' => 'form');
		echo form_open_multipart($this->class_name.'/create', $attributes);
	?>
		<p class="help-block">必填项以“※”符号标示</p>
		
		<?php
			// 检查是否传入了回调跳转URL
			if ( isset($return_to) ):
		?>
		<input name=return_to type=hidden value="<?php echo $return_to ?>">
		<?php endif ?>

		<fieldset>
			<div class=form-group>
				<label for=brief class="col-sm-2 control-label">简称</label>
				<div class=col-sm-10>
					<input class=form-control name=brief type=text value="<?php echo set_value('brief') ?>" placeholder="例如“公司”、“家”，便于识别">
				</div>
			</div>
			<div class=form-group>
				<label for=fullname class="col-sm-2 control-label">姓名※</label>
				<div class=col-sm-10>
					<input class=form-control name=fullname type=text value="<?php echo set_value('fullname') ?>" placeholder="姓名" required>
				</div>
			</div>
			<div class=form-group>
				<label for=mobile class="col-sm-2 control-label">手机号※</label>
				<div class=col-sm-10>
					<input class=form-control name=mobile type=tel size=11 pattern="\d{11}" value="<?php echo $this->input->post('mobile')? set_value('mobile'): $this->input->cookie('mobile') ?>" placeholder="手机号" required>
				</div>
			</div>
		</fieldset>	

		<fieldset>
			<div class=form-group>
				<label for=zipcode class="col-sm-2 control-label">邮政编码</label>
				<div class=col-sm-10>
					<input class=form-control name=zipcode type=number step=1 value="<?php echo set_value('zipcode') ?>" placeholder="邮政编码">
				</div>
			</div>
			<!--
			<div class=form-group>
				<label for=nation class="col-sm-2 control-label">国别</label>
				<div class=col-sm-10>
					<input class=form-control name=nation type=text value="<?php echo set_value('nation') ?>" placeholder="国别">
				</div>
			</div>
			-->
			<div class=form-group>
				<label for=province class="col-sm-2 control-label">省※</label>
				<div class=col-sm-10>
					<input class=form-control name=province type=text value="<?php echo set_value('province') ?>" placeholder="省" required>
				</div>
			</div>
			<div class=form-group>
				<label for=city class="col-sm-2 control-label">市※</label>
				<div class=col-sm-10>
					<input class=form-control name=city type=text value="<?php echo set_value('city') ?>" placeholder="市" required>
				</div>
			</div>
			<div class=form-group>
				<label for=county class="col-sm-2 control-label">区/县</label>
				<div class=col-sm-10>
					<input class=form-control name=county type=text value="<?php echo set_value('county') ?>" placeholder="区/县">
				</div>
			</div>
			<div class=form-group>
				<label for=street class="col-sm-2 control-label">具体地址※</label>
				<div class=col-sm-10>
					<input class=form-control name=street type=text value="<?php echo set_value('street') ?>" placeholder="具体地址" required>
				</div>
			</div>
			
			<div class=form-group>
				<figure class="col-sm-10 col-sm-offset-2">
					<figcaption>
						<p class=help-block>拖动地图可完善位置信息</p>
					</figcaption>
					<div id=map class="col-xs-12" style="height:300px;background-color:#aaa"></div>
				</figure>
				<input name=longitude type=hidden value="<?php echo set_value('longitude') ?>">
				<input name=latitude type=hidden value="<?php echo set_value('latitude') ?>">
			</div>

			<script src="https://webapi.amap.com/maps?v=1.3&key=d698fd0ab2d88ad11f4c6a2c0e83f6a8"></script>
			<script src="https://webapi.amap.com/ui/1.0/main.js"></script>
			<script>
			    var map = new AMap.Map('map',{
					<?php if ( !empty(set_value('longitude')) && !empty(set_value('latitude')) ): ?>
					center: [<?php echo set_value('longitude') ?>, <?php echo set_value('latitude') ?>],
					<?php endif ?>
					zoom: 16,
		            scrollWheel: false,
					mapStyle: 'amap://styles/2daddd87cfd0fa58d0bc932eed31b9d8', // 自定义样式，通过高德地图控制台管理
			    });

				// 为BasicControl设置DomLibrary，jQuery
				AMapUI.setDomLibrary($);
				AMapUI.loadUI(['control/BasicControl', 'misc/PositionPicker'], function(BasicControl, PositionPicker) {
					// 缩放控件
				    map.addControl(new BasicControl.Zoom({
				        position: 'rb', // 右下角
				    }));

				    var positionPicker = new PositionPicker({
				        mode: 'dragMap',//设定为拖拽地图模式，可选'dragMap'、'dragMarker'，默认为'dragMap'
				        map: map//依赖地图对象
				    });

				    // 获取定位点经纬度并写入相应字段
					positionPicker.on('success', function(positionResult){
						// 忽略首次拖拽选址（即防止页面载入时提示修改定位点）
						if (times_picked != 0){
							// 提示用户确定修改
							var user_confirm = confirm("是否修改位置为图中地点");
						    if (user_confirm == true)
						    {
								document.getElementsByName('longitude')[0].value = positionResult.position.lng;
								document.getElementsByName('latitude')[0].value = positionResult.position.lat;
							}
						}

						times_picked++;
					});
					positionPicker.on('fail', function(positionResult) {
					    // 海上或海外无法获得地址信息
					    document.getElementsByName('longitude')[0].value = '';
					    document.getElementsByName('latitude')[0].value = '';
					});

					// 忽略首次拖拽选址（即防止页面载入时提示修改定位点）
			    	times_picked = 0;

			        positionPicker.start();
			        //map.panBy(0, 1);

					// 根据详细地址获取经纬度
					document.getElementsByName('street')[0].onchange =
						function(){
							// 忽略首次拖拽选址（即防止页面载入时提示修改定位点）
							times_picked = 0;

							var address_text =
								document.getElementsByName('province')[0].value +
								document.getElementsByName('city')[0].value +
								document.getElementsByName('county')[0].value +
								document.getElementsByName('street')[0].value;
							address_to_lnglat(address_text);
						};

					function address_to_lnglat(address_text){

						AMap.service('AMap.Geocoder',function(){//回调函数
					        var geocoder = new AMap.Geocoder({
					            radius: 1000 //范围，默认：500
					        });

					        // 返回经纬度，并将地图中心重置
							geocoder.getLocation(address_text, function(status, result){
							    if (status === 'complete' && result.info === 'OK') {
									console.log(result.geocodes[0].formattedAddress);
									document.getElementsByName('longitude')[0].value = result.geocodes[0].location.lng;
									document.getElementsByName('latitude')[0].value = result.geocodes[0].location.lat;
									//map.setFitView();
									map.setCenter(
										[result.geocodes[0].location.lng, result.geocodes[0].location.lat]
									);
							    }
							});
						});
						
				    }
				});
			</script>
		</fieldset>

		<div class=form-group>
		    <div class="col-xs-12 col-sm-offset-2 col-sm-2">
				<button class="btn btn-primary btn-lg btn-block" type=submit>确定</button>
		    </div>
		</div>
	</form>

</div>