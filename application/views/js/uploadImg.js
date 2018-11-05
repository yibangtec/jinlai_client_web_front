/**
 * Created by Administrator on 2018/1/23 0023.
 */
function upfload(obj,ele) {
    var that = obj;
    var bucketname="jinlaisandbox-images";
    var username="jinlaisandbox";
    var password="jinlaisandbox";
    var file = $(obj).get(0).files[0];
    var list = $(obj).get(0).files;
    //console.log(list);
    for(var i = 0;i < list.length;i++){
        $('.editContent .loading').show();
        var time= buildFileName(i, biz);
        var save_key="/item/description/"+time;
        var url="https://v0.api.upyun.com/"+ bucketname;
        var fileinfo=document.getElementById("fileinfo");
        var policy=btoa(JSON.stringify({"bucket": bucketname, "save-key": save_key, "x-gmkerl-thumb": "/fwfh/2048x2048/rotate/auto", "expiration": parseInt(Date.parse(new Date())+3600)}));
        var signature="UPYUN jinlaisandbox:"+b64hamcsha1(HexMD5.MD5(password).toString(HexMD5.enc.Hex), "POST&/"+bucketname+"&"+policy);
        var xhrOnProgress=function(fun){
            xhrOnProgress.onprogress=fun;
            return function(){
                var xhr=$.ajaxSettings.xhr();
                if (typeof xhrOnProgress.onprogress!=='function'){
                    return xhr;
                }
                if (xhrOnProgress.onprogress&&xhr.upload){
                    xhr.upload.onprogress=xhrOnProgress.onprogress;
                }
                return xhr;
            }
        };
        var formData=new FormData();
        formData.append("file",list[i]);
        formData.append("policy",policy);
        formData.append("authorization",signature);
        $.ajax({
            url:url,
            type:"POST",
            data:formData,
            contentType:false,
            processData:false,
            success:function(data, textStatus,xhr){
                console.log(JSON.parse(data).url);
                var code =JSON.parse(data).code;
                console.log(code);
                var imgUrl = JSON.parse(data).url;
                var img =$('<img class="img-list" src="https://jinlaisandbox-images.b0.upaiyun.com' + imgUrl +'" />');
                console.log(that);
                $(that).parent().before(img);
            },
            error:function(xhr){
                console.log(xhr);
            }
        });
    }
}
function buildFileName(s, bizId) {
    var objD = new Date();
    var timeStr;
    var yy = objD.getYear();
    if (yy < 1900) yy = yy + 1900;
    var MM = objD.getMonth() + 1;
    if (MM < 10) MM = '0' + MM;
    var dd = objD.getDate();
    if (dd < 10) dd = '0' + dd;
    var hh = objD.getHours();
    if (hh < 10) hh = '0' + hh;
    var mm = objD.getMinutes();
    if (mm < 10) mm = '0' + mm;
    var ss = objD.getSeconds()+s;
    if (ss < 10) ss = '0' + ss;
    bizId = bizId.toString();
    timeStr = yy + '/' + MM + dd + '/' + hh + mm + ss + bizId + '.jpg';
    return timeStr;
}