<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <title>编辑施工工地-后台管理-<?php echo ($systemConfig["SITE_INFO"]["name_cms"]); ?></title>
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
      <div class="center_r_t">
      您的位置：<a href="<?php echo U('Gongzhang/list_gd');?>" class="a1">施工工地</a>>>编辑施工工地
      </div>
      <div class="center_t">
          <form action="" method="POST" id="form1" name="form1" enctype="multipart/form-data" >
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tab center_t">
                
            <tr align="left"  class="center_t_d">
                <td width="20%">工长</td>
                <td align="left">
                    
                    <select id="uid" name="uid">
                        <option value="">请选择</option>
                        <?php if(is_array($gzlist)): $i = 0; $__LIST__ = $gzlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["a_id"]); ?>" <?php if($info[uid]==$vo[a_id]): ?>selected<?php endif; ?>><?php echo ($vo["a_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </td>
            </tr>
                 
            <tr align="left"  class="center_t_d">
                <td width="20%">标题</td>
                <td align="left">
                    <input type="text" size="100" name="name" id="name" value="<?php echo ($info["name"]); ?>" />
                </td>
            </tr>
               
            
            
            <tr align="left"  class="center_t_d">
                <td width="20%">状态</td>
                <td align="left">
                    
                    <label><input type="radio" name="status" id="status" value="1" <?php if($info[status]==1): ?>checked<?php endif; ?> />已经审核</label>
                    <label><input type="radio" name="status" id="status" value="0" <?php if($info[status]==0): ?>checked<?php endif; ?> />未审核</label>
                    
                </td>
            </tr>                   
                
                <tr align="left"  class="center_t_d">
                    <td width="20%">上传封面图片：</td>
                    <td align="left">
                        <input id="file_upload" name="file_upload" type="file" multiple="true">
            <div id="some_file_queue">

            </div>
            <div class="imgList" id="image"></div>
            <input type="hidden" name="fengmian" id="yingyezhizhao" value="<?php echo ($info["yingyezhizhao"]); ?>" />
            <?php if(!empty($info[fmimg])): ?><img src="__ROOT__<?php echo ($info["fmimg"]); ?>" height="100" /><?php endif; ?>
                    </td>
                </tr>
                
              <tr align="left"  class="center_t_d">
                  <td width="20%">图片集合 <a href="javascript:addimgrow();" class="btn submit">添加</a> </td>
                <td align="left">
                    <div id="tpjh">
                        <div class="rowtpjh">
                        <input type="file" name="imgsrc[]" id="imgsrc[]" value="" />
                        </div>
                    </div>
                    <?php if(is_array($imglist)): $i = 0; $__LIST__ = $imglist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><img src="__ROOT__<?php echo ($vo1); ?>" width="100"/><br/><?php endforeach; endif; else: echo "" ;endif; ?>
                    
                    
                </td>
            </tr>  
              
                <tr>
                    <td colspan="2">
                      
                  <input type="hidden" name="id" id="id" value="<?php echo ($info["id"]); ?>" />
                  <input type="hidden" name="p_id" id="p_id" value="<?php echo ($info["p_id"]); ?>" />
                  <input type="hidden" name="c_id" id="c_id" value="<?php echo ($info["c_id"]); ?>" />
                        <input type="submit" class="btn submit" id="sub" name="sub" value="完成"/></td>
                    
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
        
    
    </body>
</html>
<script>
     var k=1;
        function addimgrow(){
            
            var str="";
            str+='<div  class="rowtpjh">';
            str+='            <input type="file" name="imgsrc[]" id="imgsrc[]" value="" />';
            str+='            </div>';
            $("#tpjh").append(str);
            k++;
        }
</script>

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
                                                if(yy!='')
                                                $("#yingyezhizhao").val(yy+","+data);
                                                else
                                                    $("#yingyezhizhao").val(data);
						
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
<script type="text/javascript">
CKEDITOR.replace( 'jianjie',
{
filebrowserBrowseUrl : '__PUBLIC__/ckfinder/ckfinder.html',
filebrowserImageBrowseUrl : '__PUBLIC__/ckfinder/ckfinder.html?Type=Images',
filebrowserFlashBrowseUrl : '__PUBLIC__/ckfinder/ckfinder.html?Type=Flash',
filebrowserUploadUrl : '__PUBLIC__/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
filebrowserImageUploadUrl : '__PUBLIC__/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
filebrowserFlashUploadUrl : '__PUBLIC__/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
</script>