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
        body {width: 100%;background-color: #f0f0f0; height: 100%}
        a {text-decoration: none;}
        .box {width: 100%; height: 100%;position: relative}
        .icon-Arrow:before {
            content: "\e909";
        }
        .negotiate .icon-Arrow:before {
            content: "\e909";
            color: #a0a0a0;
            font-size: 0.28rem;
        }
        .negotiate{
            display: block;
            background-color: #fff;
            font-size: 0.26rem;
            color: #3e3a39;
            padding: 0.3rem 0.2rem;
            box-sizing: border-box;
        }
        .negotiate span{
            display: inline-block;
            width: 50%;
        }
        .negotiate i{
            display: inline-block;
            width: 50%;
            text-align: right;
        }
        .negotiate .see-all{
            color: #9fa0a0;
            width: 50%;
            text-align: right;
            display: inline-block;
        }

        .subarea{
            width: 100%;
            background-color: #fff;
        }
        .subarea .negotiate:
        .border-active{
            border-left: 0.04rem solid #FF3649;
            color: #FF3649;
        }
        .content-list{
            width: 100%;
        }
        .content-list li {
            width: 50%;
            box-sizing: border-box;
            padding: 0.38rem 0;
            float: left;
            font-size: 0.26rem;
            color: #3e3a39;
            text-indent: 0.2rem;
            background-color: #f4f4f4;
            border-bottom: 0.06rem solid #fff;

        }
        .content-list li:nth-child(odd){
            border-right: 0.06rem solid #fff;
        }

.menu-left,.menu-right{
	position: absolute;
		overflow: auto;
		-webkit-overflow-scrolling: touch !important;
		z-index:1;
	}

.menu-right:before {  
            content:"";  
            width: 1px;  
            float: left;  
            height: calc(100% + 1px);  
            margin-left: -1px;  
            display: block;  
        }  
.menu-right:after{  
            content:"";  
            width: 100%;  
            clear: both;  
            display: block;  
      }
.menu-left:before {  
            content:"";  
            width: 1px;  
            float: left;  
            height: calc(100% + 1px);  
            margin-left: -1px;  
            display: block;  
        }  
.menu-left:after{  
            content:"";  
            width: 100%;  
            clear: both;  
            display: block;  
      }
.menu-right{
	padding-bottom: 1.5rem;
}

.menu-right::-webkit-scrollbar{width:0;height:0}
.menu-left::-webkit-scrollbar{width:0;height:0}
.menu-left ul li:last-child{
	border-bottom:none;
}
</style>
	<div class="box">
        <a class="negotiate" style="margin: 0.1rem 0;">
            <span>全部宝贝</span><i class="icon-Arrow"></i>
        </a>
        <div class="subarea">

        </div>
    </div>


<script>
	$(function(){


	// <?php echo $this->class_name_cn ?>数据
	var items = <?php echo json_encode($items) ?>;
	console.log(items);
		//生成section
		var arr = [];
		for(var key in items){
        			if(items[key].parent_id == 0 ){   //2及的parentID = 1级的categoryID
                         arr.push(items[key]);
        			}
        }
        var goodsListContent = '';
        for(var i=0;i<arr.length;i++){
          		console.log(i);
          		if(i == 0){
          		    goodsListContent = '<h2>'+
                                           '<div class="negotiate border-active">'+
                                               '<span>'+arr[i].name+'</span><a class="see-all">查看全部</a>'+
                                           '</div>'+
                                       '</h2>';
          		}else{
          		    goodsListContent = '<h2>'+
                                            '<div class="negotiate">'+
                                                '<span>'+arr[i].name+'</span><a class="see-all">查看全部</a>'+
                                            '</div>'+
                                        '</h2>';
                }
         		var html = '';
          	for(var key in items){
                     if( arr[i].category_id == items[key].parent_id ){
         				 html += '<li>'+items[key].name+'</li>';
                     }

             }
             goodsListContent = goodsListContent + '<ul class="content-list clearfix">' + html+'</ul>';
         	$('.subarea').append(goodsListContent);
        }

      //var list = $('.subarea .negotiate');
      //list[0].addClass('border-active');
      $('.subarea .negotiate').on('click', function(){
                      $('.negotiate').removeClass('border-active');
                      $(this).addClass('border-active');

                  });
	})
</script>
