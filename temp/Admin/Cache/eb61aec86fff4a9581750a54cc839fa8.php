<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>套餐列表-后台管理-<?php echo ($systemConfig["SITE_INFO"]["name_cms"]); ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo ($systemConfig["SITE_INFO"]["description_cms"]); ?>" />
<meta name="keywords" content="<?php echo ($systemConfig["SITE_INFO"]["keyword_cms"]); ?>" />


<link href="__ROOT__/Public/css/common.css" rel="stylesheet" type="text/css" />



<script src="__PUBLIC__/datepicker/js/jquery.min.js"></script>

<script src="__ROOT__/Public/js/jquery.validate.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo ($systemConfig["WEB_ROOT"]); ?>/Public/easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="<?php echo ($systemConfig["WEB_ROOT"]); ?>/Public/easyui/themes/icon.css">
<script type="text/javascript" src="<?php echo ($systemConfig["WEB_ROOT"]); ?>/Public/easyui/jquery.easyui.min.js"></script>
        
<link href="__ROOT__/Public/css/main.css" rel="stylesheet" />
<link href="__ROOT__/Public/css/doubleDate.css" rel="stylesheet" />
<link href="__ROOT__/Public/css/theme.css" rel="stylesheet" />



<script src="__ROOT__/Public/tuxcj/js/jquery-1.7.2.min.js"></script>
<script src="__ROOT__/Public/js/jquery.validate.js"></script>

<!--上传组件start-->
<link rel="stylesheet" type="text/css" href="__ROOT__/Public/tuxcj/css/jquery.Jcrop.min.css" media="all">
<link rel="stylesheet" type="text/css" href="__ROOT__/Public/tuxcj/js/uploadify-v3.1/uploadify.css" media="all">

<script type="text/javascript" src="__ROOT__/Public/tuxcj/js/uploadify-v3.1/jquery.uploadify-3.1.min.js"></script>

<script type="text/javascript" src="__ROOT__/Public/tuxcj/js/jquery.Jcrop.min.js"></script>
<script type="text/javascript" src="__ROOT__/Public/tuxcj/js/ThinkBox/jquery.ThinkBox.js"></script>

<link rel="stylesheet" type="text/css" href="__ROOT__/Public/tuxcj/js/ThinkBox/css/ThinkBox.css" media="all">
<!--上传组件 end-->
<style type="text/css">
.main{
	margin: 0 auto;
	padding: 15px;
	width: 750px;
	font-family: "microsoft yahei";
	background-color: #F5F5F5;
}
.cf:before,.cf:after {
	display: table;
	content: "";
	line-height: 0;
}
.cf:after {
	clear: both;
}
.cf {
	*zoom: 1;
}
.upload-area {
	position: relative;
	float: left;
	margin-right: 30px;
	width: 200px;
	height: 200px;
	background-color: #F5F5F5;
    border: 2px solid #E1E1E1;
}
.upload-area .file-tips {
	position: absolute;
	top: 90px;
	left: 0;
    padding: 0 15px;
    width: 170px;
    line-height: 1.4;
    font-size: 12px;
	color: #A8A8A3;
    text-align: center;
}
.userup-icon {
    display: inline-block;
    margin-right: 3px;
    width: 16px;
    height: 16px;
    vertical-align: -2px;
	background: url("__ROOT__/Public/tuxcj/img/userup_icon.png") no-repeat;
}
.uploadify-button {
	line-height: 120px!important;
	text-align: center;
}
.preview-area {
	float: left;
}
.tcrop {
    clear: right;
    font-size: 14px;
    font-weight: bold;
}
.update-pic .crop {
    background: url("__ROOT__/Public/tuxcj/img/mystery.png") no-repeat scroll center center #EEEEEE;
    float: left;
    margin-bottom: 20px;
    margin-top: 10px;
    overflow: hidden;
}
.crop100 {
    height: 100px;
    width: 100px;
}
.crop60 {
    height: 60px;
    margin-left: 20px;
    width: 60px;
}
.update-pic .save-pic {
    clear: left;
    margin-right: 20px;
}
.update-pic .uppic-btn {
    background-color: #348FD4;
    color: #FFFFFF;
    display: block;
    float: left;
    font-size: 16px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    vertical-align: middle;
    width: 89px;
}
.preview {
	position: absolute;
	top: 0;
	left: 0;
	z-index: 11;
	width: 200px;
	height: 200px;
	overflow: hidden;
	background:#fff;
	display: none;
}
</style>
<style>
        .rowtpjh{ border: 1px solid #0081C2; margin: 5px; padding: 5px;}
    </style>
    
<script language="javascript" src="__PUBLIC__/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="__PUBLIC__/ckfinder/ckfinder.js"></script>

</head>
<body>
<div class="wrap"> <div class="header">
  <div class="logo"><img src="__ROOT__/Public/images/logo.jpg" /></div>
  <div class="headet_r">
    <div class="header_r_t">
      <div class="header_r_t_l">></div>
      <a href="<?php echo U('MyInfo/index');?>"><img src="__ROOT__/Public/images/ico1.png" />管理员</a> <a href="<?php echo U('Index/logout');?>"><img src="__ROOT__/Public/images/ico3.png" />退出</a> </div>
    <div class="conter_scroll_w">
      <div class="conter_scroll_bot">
        <div class="rollBox"> <img onmousedown="ISL_GoDown()" onmouseup="ISL_StopDown()" onmouseout="ISL_StopDown()"  class="img3" src="__ROOT__/Public/images/s_left.png" />
          <div class="Cont" id="ISL_Cont">
            <div class="ScrCont">
              <div id="List1"> 
                <!-- 图片列表 begin -->
                <?php if(is_array($nodelist)): $k = 0; $__LIST__ = $nodelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if($actname==$vo[name]): ?><div class="pic a1">
                        <?php else: ?>
                        <div class="pic"><?php endif; ?>
                      <a href="<?php echo ($vo["url"]); ?>">
                    <p><img src="__ROOT__/Public/images/menuico1.png" /></p>
                    <?php echo ($vo["title"]); ?>
                      </a> </div><?php endforeach; endif; else: echo "" ;endif; ?>
                <!--
                <div class="pic a1"><a href="">
                  <p><img src="/Public/images/menuico1.png" /></p>
                  用户中心</a></div>
                <div class="pic"><a href="">
                  <p><img src="/Public/images/menuico2.png" /></p>
                  装修攻略</a></div>
                <div class="pic"><a href="">
                  <p><img src="/Public/images/menuico3.png" /></p>
                  明星工长</a></div>
                <div class="pic"><a href="">
                  <p><img src="/Public/images/menuico4.png" /></p>
                  设计团队</a></div>
                <div class="pic"><a href="">
                  <p><img src="/Public/images/menuico5.png" /></p>
                  团购商家</a></div>
                <div class="pic"><a href="">
                  <p><img src="/Public/images/menuico6.png" /></p>
                  团购活动</a></div>
                <div class="pic"><a href="">
                  <p><img src="/Public/images/menuico7.png" /></p>
                  社区团装</a></div>
                <div class="pic"><a href="">
                  <p><img src="/Public/images/menuico8.png" /></p>
                  装修美图</a></div>
                <div class="pic"><a href="">
                  <p><img src="/Public/images/menuico7.png" /></p>
                  用户中心</a></div>
                <div class="pic"><a href="">
                  <p><img src="/Public/images/menuico8.png" /></p>
                  装修攻略</a></div>
                -->
                
                <!-- 图片列表 end --> 
              </div>
              <div id="List2"></div>
            </div>
          </div>
          <img  onmousedown="ISL_GoUp()" onmouseup="ISL_StopUp()" onmouseout="ISL_StopUp()"  class="img4" src="__ROOT__/Public/images/s_right.png" /> </div>
      </div>
      <script src="__ROOT__/Public/js/rollBox.js" type="text/javascript"></script> 
    </div>
  </div>
</div>
 <div class="tabBox" id="Threetab">
	      <ul class="tab center_side">
                    <li></li>
                    <?php if(is_array($nodelist2)): $i = 0; $__LIST__ = $nodelist2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($funname==$vo[name]): ?><li class="li1"> 
                               <?php else: ?>
                               <li><?php endif; ?>
		    <img src="__ROOT__/Public/images/sideico_1.png" class="img1" /><img src="__ROOT__/Public/images/sideico.png" class="img1 img2" />
                        <a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["title"]); ?></a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>

	      </ul>
</div>

  <div class="center_r">
    <div class="center">
      <div class="center_r_t">您的位置：<a href="<?php echo U('Shop/taocan');?>" class="a1">套餐列表</a>>>添加套餐step1</div>
      <div class="center_t">
          <form action="" method="GET" enctype="multipart/form-data" id="form1" name="form1" >
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tab">
              <?php if($is_edit==1): ?><td width="20%">商城</td>
                <td align="left">
                    <?php echo ($info["company"]); ?>                   
                </td> 
                  <?php else: ?>
                  <tr align="left"  class="center_t_d">
                <td width="20%">选择商城</td>
                <td align="left">
                    <input type="text" size="100" name="gname" id="gname" value="" onchange="xzgz()" placeholder="在此输入登录名进行搜索商城" /><br/>
                    
                </td>
            </tr>
            <tr align="left"  class="center_t_d">
                <td width="20%"></td>
                <td align="left">
                    
                    <select id="gzid" name="gzid">
                        <option value="">选择商城</option>
                        <?php if(is_array($sjlist)): $i = 0; $__LIST__ = $sjlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["a_id"]); ?>" <?php if($info[uid]==$vo[a_id]): ?>selected<?php endif; ?>><?php echo ($vo["a_name"]); ?>[<?php echo ($vo["lxrname"]); ?>][<?php echo ($vo["company"]); ?>]</option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </td>
            </tr><?php endif; ?>  
            
            <tr align="left"  class="center_t_d">
              <td colspan="2">
                  <input type="hidden" id="step" name="step" value="2" />
                <input type="submit" class="btn submit" value="下一步" id="sub" name="sub" /></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
    <div class="foot"> <ul>
    <li>Copyright © 2003-2010 tlgzjlb.com All Right Reserved</li>
    <li>版权所有 中国北京·唐亮工长俱乐部</li>
</ul>
 </div>
  </div>
</div>
    
<script>
            $(function() {
			$('#file_upload').uploadify({
				'swf'      : '__ROOT__/Public/uploadimg/uploadify.swf',
				'uploader' : '<?php echo U("Member/scimg");?>',
				'auto':true, //自动上传
				'buttonClass':'submit',//给上传按钮一个样式名称
				'buttonImage':'__ROOT__/avatar/shangchuan.png',//上传按钮加上图片
				//'buttonText':'增加图片',
				'height':28,//按钮的高度,
				'width':83,
				//'checkExisting':'<?php echo U("paicar/check-exists");?>',
				//'debug':true,
				//'fileObjName':'the_files',
				'fileSizeLimit':'2048KB',
				'fileTypeDesc':'Image Files',
				'fileTypeExts':'*.gif;*.jpg;*.png',
				//'formData':{'someKey':'11','someOne':'bb'},
				//'itemTemplate':'<div id="${fileID}" class="uploadify-queue-item">\
//					<div class="cancel">\
//						<a href="javascript:$(\'#${instanceID}\').uploadify(\'cancel\', \'${fileID}\')">X</a>\
//					</div>\
//					<span class="fileName">${fileName} (${fileSize})</span><span class="data"></span>\
//					</div>',
				'method':'post',
				'multi':true,//是否允许多个文件上传,
				'queueID'  : 'some_file_queue',
				'queueSizeLimit':22,	
				//'removeCompleted':false,	
				//'removeTimeout':10,//从队列中删除已完成的上传文件，延迟几秒
				'requeueErrors':true,
				'onUploadStart':function(file){
				//	console.log('Attempting to upload: ' + file.name);
				}
				,
				'successTimeout':5,//等待服务器响应几秒提示成功,
				'uploadLimit':1,//上传文件最大值
				'onCancel':function(file){
					//alert('the file '+file.name+' was cancelled');
				},
				'onClearQueue' : function(queueItemCount) {
            		//alert(queueItemCount + ' file(s) were removed from the queue');
        		},
				'onUploadComplete':function(file){
					//console.log(file);
				},
				'onUploadSuccess':function (file, data, response) {
					if(response){
						//console.log(data);
						$("#image").html("<image src=__ROOT__/Uploads/product/"+data+" height=100 />");	
						var yy=$("#yingyezhizhao").val();
                                               
                                                    $("#yingyezhizhao").val("/Uploads/product/"+data);
						
					}else{
						alert('图片'+file.name+"上传失败");
					}
					//console.log(data);
					//console.log(response);
					//console.log(file);
					//alert('The file ' + data + ' was successfully uploaded with a response of ' + response + ':' + data);
				},
				'onQueueComplete' : function(queueData) {
					//console.log(queueData);
					//alert(queueData.uploadsSuccessful + ' files were successfully uploaded.');
				}
				
				
			});
		});
</script>
<script>
        function addimgrow(){
            
            var str="";
            str+='<div  class="rowtpjh">';
            str+='            <input type="file" name="imgsrc[]" id="imgsrc[]" value="" />';
            str+='            </div>';
            $("#tpjh").append(str);
        }
        
    function xzgz(){
        var gname=$("#gname").val();
        $.ajax({
            data:"gname="+gname,
            cache:false,
            type:"post",
            datatype:"json",
            url:"<?php echo U('Shop/ajaxgetsj');?>",
            success:function(msg){
                var msg=eval("("+msg+")");
                if(msg.status==1){
                    $("#gzid").empty();
                    var str="";
                    var len=msg.data.length;
                    var i=0;
                    for(i=0;i<len;i++){
                        str+="<option value='"+msg.data[i].a_id+"'>"+msg.data[i].a_name+"["+msg.data[i].lxrname+"]["+msg.data[i].company+"]</option>";
                    }
                    $("#gzid").append(str);
                }
                
            }
        });
    }
    
    
CKEDITOR.replace( 'content',
{
filebrowserBrowseUrl : '__PUBLIC__/ckfinder/ckfinder.html',
filebrowserImageBrowseUrl : '__PUBLIC__/ckfinder/ckfinder.html?Type=Images',
filebrowserFlashBrowseUrl : '__PUBLIC__/ckfinder/ckfinder.html?Type=Flash',
filebrowserUploadUrl : '__PUBLIC__/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
filebrowserImageUploadUrl : '__PUBLIC__/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
filebrowserFlashUploadUrl : '__PUBLIC__/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
    </script>
</body>
</html>