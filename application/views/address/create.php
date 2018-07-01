	<script src="<?php echo CDN_URL ?>js/rem.js"></script>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/fontStyle.css">
    <script src="<?php echo CDN_URL ?>js/account.js"></script>
    <link rel="stylesheet" href="<?php echo CDN_URL ?>css/LArea.css">
    <script src="<?php echo CDN_URL ?>js/LArea.js"></script>
    <script src="<?php echo CDN_URL ?>js/LAreaData1.js"></script>
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
            body {background-color: #ffffff;}
            a {text-decoration: none;}
            .box {width: 100%; position: relative}
            .create-content{margin: 0 0.2rem;height: 8rem;font-size: 0.28rem;color: #666464;margin-bottom:8rem;overflow-y:auto;}
            .create-list{display: flex;padding: 0.4rem 0.1rem 0.2rem 0.1rem;border-bottom: 0.02rem solid #efefef;}
            .create-list .create-input{flex: 1;border: none;font-size: 0.28rem;}
            .address-default{padding: 0.5rem 0;font-size: 0.28rem;color: #666464;}
            .map-box {position: fixed;bottom: 0.2rem;width: 7.1rem;
                height: 4rem; border-radius: 0.15rem; overflow: hidden; !important;}
            .save{margin: 0 0.2rem;font-size: 0.30rem;color: #3E3A39;text-align: right;padding: 0.25rem 0;}
            .tips{width: 100%;height: 100%;background-color: rgba(0, 0, 0, 0.3);position: fixed; display: none;z-index: 100;
            }
            .tips-content{position: absolute;width: 5rem;left: 50%; margin-left: -2.5rem; top: 50%;
                margin-top: -1.5rem;background-color: #fff;font-size: 0.3rem;border-radius: 0.15rem;text-align: center;}
            .tips-title{padding-top: 0.25rem; }
            .tips-text{font-size: 0.26rem;padding: 0.1rem 0 0.25rem 0;border-bottom: 0.01rem solid #efefef;}
            .btns{width: 100%;font-size: 0.3rem;}
            .btns-cancel{float: left;width: 50%;padding: 0.2rem 0;color: deepskyblue;box-sizing: border-box;border-right: 0.01rem solid #efefef;}
            .btns-confirm{width: 50%;float: left;padding: 0.2rem 0;color: crimson;}

            .icon-xuanzhong:before {
                content: "\e942";
                color: #ff3649;
                font-size: 0.3rem;
            }
            .icon-zidongtui:before {
                content: "\e94d";
                font-size: 0.3rem;
            }
            .error-tips{display: none;width: 3rem;height: 1.4rem;position: fixed;top: 40%;left: 50%;margin-left: -1.5rem;
                font-size: 0.3rem;text-align: center;color: #ffffff;padding: 0.3rem 0;
                background-color: rgba(0, 0, 0, .3);border-radius: 0.15rem;background-size: 0.32rem 0.32rem;z-index: 100;}
            .error-tips img{width: 0.5rem;height: 0.5rem;}
            .amap-geo{
                display: block;
            }
            .address{
                height:0;
                position: static;
            }
    </style>

    <div class="tips" id="tips">
        <div class="tips-content">
            <div class="tips-title">提示</div>
            <div class="tips-text">是否设置位置为当前地点</div>
            <div class="btns">
                <div class="btns-cancel" id="cancel">取消</div>
                <div class="btns-confirm" id="confirm">确定</div>
            </div>
        </div>
    </div>

    <div class="box" id="box">
        <div class="error-tips">
            <p class="tips-text"></p>
            <i class="icon-failure"></i>
        </div>
        <button form=main-form class=save>保存</button>

        <div class="create-content">
            <form id=main-form action="" method=post>
                <!-- 是否设为默认 -->
                <input name=default_this type=hidden value=1>

                <div class="create-list">
                    <input class="create-input" type=text name=brief placeholder="简称（可选）" maxlength="10">
                </div>
                <div class="create-list">
                    <input class="create-input" type=text name=fullname placeholder="姓名" maxlength="10" autofocus required>
                </div>
                <div class="create-list">
                    <input id="tel" class=create-input name=mobile type=tel placeholder="手机号" required>
                </div>
                <div class="create-list">
                     <input class="create-input" id="demo1" type=text name=input_area placeholder="省份、城市、县区" required>
                </div>
                <div class="create-list">
                    <input class="create-input" id="demo1" type=text name=input_area placeholder="省份、城市、县区" required>
                </div>
                <input id="value1" type="hidden" value="20,234,540">
                <div class="create-list">
                    <textarea rows=3 name=street style="outline:none;resize:none;font-family: 'Microsoft YaHei';font-size: 0.28rem;color: #666464" class="create-input" id="detailAddress" placeholder="详细地址"><?php set_value('street') ?></textarea>
                </div>
                <!--
                <div class="create-list" >
                    <input class="create-input" type="tel" placeholder="邮编">
                </div>
                -->
                <div class="address-default">
                    <i id="select" class="icon-zidongtui"></i> <span>设为默认地址</span>
                </div>
            </form>

            <div class="map-box" style="position: fixed">
                <div id="container" class="map" tabindex="0" style="width: 100%;height: 4rem;"></div>
                <div id='right' style="display: none">
                    <div>
                        <div class='title'>选择模式</div>
                        <input type='radio' name='mode' value='dragMap' checked>拖拽地图模式</input>
                        </br>
                        <input type='radio' name='mode' value='dragMarker'>拖拽Marker模式</input>
                    </div>
                    <div>
                        <button id='start'>开始选点</button>
                        <button id='stop'>关闭选点</button>
                    </div>
                    <div>
                        <div class='title'>选址结果</div>
                        <div class='c'>经纬度:</div>
                        <div id='lnglat'></div>
                        <div class='c'>地址:</div>
                        <div id='address'></div>
                        <div class='c'>最近的路口:</div>
                        <div id='nearestJunction'></div>
                        <div class='c'>最近的路:</div>
                        <div id='nearestRoad'></div>
                        <div class='c'>最近的POI:</div>
                        <div id='nearestPOI'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function(){
            var default_address_id = '<?php echo $this->session->address_id ?>'; // 默认收货地址ID
            if(default_address_id != ''){
            }else{
            }

            $("#demo1").focus(function(){
                document.activeElement.blur();
            });
            $('form').submit(function(){

                    // 若无默认收货地址，则AJAX创建
                if (default_address_id != '')
                {
                    var params = common_params
                    var addressText = $('#demo1').val();
                    console.log(addressText);
                    var arr = [];
                    arr = addressText.split(',');
                    console.log(arr);

                    if(0<arr.length<3){
                       params.province = arr[0];
                       params.city = arr[0];
                       params.county = arr[1];
                    }else{
                       params.province = arr[0];
                       params.city = arr[1];
                       params.county = arr[2];
                    }
                     var data_to_process = ['brief', 'fullname', 'mobile', 'street', 'zipcode', 'default_this']
                     for (var index in data_to_process)
                     {
                         params[ data_to_process[index] ] = $('[name='+ data_to_process[index] +']').val();

                     }



                     console.log(params);
                     $.post(
                         api_url + 'address/create',
                         params,
                         function(result)
                         {
                             console.log(result); // 输出回调数据到控制台
                             if (result.status == 200)
                             {
                              alert(result.content);

                                location.href = "address/index";
                             } else {
                                alert(result.content.error.message);
                             }
                         }
                     )

                     return false;

                }
            });

        });
    </script>

    <base href="//webapi.amap.com/ui/1.0/ui/misc/PositionPicker/examples/">
    <script src='//webapi.amap.com/maps?v=1.4.1&key=c2ccaabde1fdbecc2e750cfae5957781&plugin=AMap.ToolBar'></script>

    <!-- UI组件库 1.0 -->
    <script src="//webapi.amap.com/ui/1.0/main.js?v=1.0.11"></script>
    <script type="text/javascript">
        var sel=document.getElementById('select');
        sel.onclick = function(){

            if(sel.classList.contains('icon-zidongtui')==true){
                sel.classList.add('icon-xuanzhong');
                sel.classList.remove('icon-zidongtui')
            }else{
                sel.classList.add('icon-zidongtui');
                sel.classList.remove('icon-xuanzhong');
            }
        };

        var area = new LArea();
        area.init({
            'trigger': '#demo1',//触发选择控件的文本框，同时选择完毕后name属性输出到该位置
            'valueTo':'#value1',//选择完毕后id属性输出到该位置
            'keys':{id:'id',name:'name'},//绑定数据源相关字段 id对应valueTo的value属性输出 name对应trigger的value属性输出
            'type':1,//数据源类型
            'data':LAreaData//数据源
        });
        AMapUI.loadUI(['misc/PositionPicker'], function(PositionPicker) {
            var map = new AMap.Map('container', {
                zoom: 16,
                scrollWheel: false
            });

            map.plugin(['AMap.Geolocation','AMap.Geocoder'], function () {
                geolocation = new AMap.Geolocation({
                    enableHighAccuracy: true,//是否使用高精度定位，默认:true
                    timeout: 10000,          //超过10秒后停止定位，默认：无穷大
                    maximumAge: 0,           //定位结果缓存0毫秒，默认：0
                    convert: true,           //自动偏移坐标，偏移后的坐标为高德坐标，默认：true
                    showButton: true,        //显示定位按钮，默认：true
                    //buttonPosition: 'LB',    //定位按钮停靠位置，默认：'LB'，左下角
                    //buttonOffset: new AMap.Pixel(10, 20),//定位按钮与设置的停靠位置的偏移量，默认：Pixel(10, 20)
                    showMarker: true,        //定位成功后在定位到的位置显示点标记，默认：true
                    showCircle: true,        //定位成功后用圆圈表示定位精度范围，默认：true
                    panToLocation: true,     //定位成功后将定位到的位置作为地图中心点，默认：true
                    zoomToAccuracy: true,     //定位成功后调整地图视野范围使定位位置及精度范围视野内可见，默认：false
                    noGeoLocation:3
                });
                geocoder=new AMap.Geocoder({

                });
                map.addControl(geolocation);
                map.addControl(geocoder);
                //地理编码,返回地理编码结果

                var pos;

                geolocation.getCurrentPosition(function (status,result){
                    var start = result.position.Q;
                    console.log(result.position.Q);
                    pos = result.position;
                    var positionPicker = new PositionPicker({
                        mode: 'dragMap',
                        map: map
                    });

                    positionPicker.on('success', function (positionResult) {
                        console.log(positionResult.position.lat);
                        if(start !== positionResult.position.lat){
                            document.getElementById('tips').style.display = 'block';
                            //document.getElementById('box').style.display = 'none';
                            document.getElementById('cancel').onclick=function(){
                                document.getElementById('tips').style.display = 'none';


                            };
                            document.getElementById('confirm').onclick=function(){
                                document.getElementById('tips').style.display = 'none';
                                document.getElementById('detailAddress').value=positionResult.address;
                            };
                        }else{
                            //document.getElementById('detailAddress').value=positionResult.address;
                        }

                    });
                    positionPicker.on('fail', function (positionResult) {

                    });
                    var onModeChange = function (e) {
                        positionPicker.setMode(e.target.value)
                    };
                    positionPicker.start(pos);
                    var address = document.getElementById('detailAddress');
                    address.onblur=function(){
                        var aress = address.value;
                        console.log(aress);
                        geocoder.getLocation(aress, function(status, result) {
                            if (status === 'complete' && result.info === 'OK') {
                                console.log(result);
                                pos=result.geocodes[0].location;
                                positionPicker.start(pos);
                            }else{
                                console.log(result)
                            }
                        });
                    };
                    map.panBy(0, 1);

                });

            });
        })
    </script>