<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>优惠券-后台管理-<?php echo ($systemConfig["SITE_INFO"]["name_cms"]); ?></title>
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
<link href="__ROOT__/Public/css/theme.css" rel="stylesheet">
<script language="javascript" src="__PUBLIC__/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="__PUBLIC__/ckfinder/ckfinder.js"></script>

<link rel="stylesheet" type="text/css" href="__PUBLIC__/datepicker/css/jquery-ui.css" />
<style>
    
.ui-timepicker-div .ui-widget-header { margin-bottom: 8px; }  
.ui-timepicker-div dl { text-align: left; }  
.ui-timepicker-div dl dt { height: 25px; margin-bottom: -25px; }  
.ui-timepicker-div dl dd { margin: 0 10px 10px 65px; }  
.ui-timepicker-div td { font-size: 90%; }  
.ui-tpicker-grid-label { background: none; border: none; margin: 0; padding: 0; }  
    
</style>
<script type="text/javascript" src="__PUBLIC__/datepicker/js/jquery-ui-datepicker.js"></script>
<script type="text/javascript" src="__PUBLIC__/datepicker/js/jquery-ui-timepicker-addon.js"></script>


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
      <div class="center_r_t">您的位置：<a href="<?php echo U('Shop/list_yhq');?>" class="a1">优惠券列表</a>>>添加优惠券</div>
      <div class="center_t">
          <form action="" method="POST" enctype="multipart/form-data" id="form1" name="form1" >
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tab">
              <?php if($is_edit==1): ?><tr align="left"  class="center_t_d">
                <td width="20%">商城</td>
                <td align="left">
                    <?php echo ($comname); ?>
                    
                </td>
            </tr>
                  <?php else: ?>
            <tr align="left"  class="center_t_d">
                <td width="20%">选择商城</td>
                <td align="left">
                    <input type="text" size="100" name="gname" id="gname" value="" onchange="xzgz()" placeholder="在此输入登录名进行搜索商家" /><br/>
                    
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
                <td width="20%">名称</td>
                <td align="left">
                    <input type="text" name="name" id="name" size="100" value="<?php echo ($info["name"]); ?>" />
                </td>
            </tr> 
              <tr align="left"  class="center_t_d">
                <td width="20%">优惠券图片</td>
                <td align="left">
                    <input type="file" name="yhimg" id="yhimg" />
                    <?php if(!empty($info[yhimg])): ?><img src="<?php echo ($systemConfig["SITE_INFO"]["url"]); echo ($info["yhimg"]); ?>" width="100" /><?php endif; ?>
                </td>
            </tr>
            <tr align="left"  class="center_t_d">
                <td width="20%">状态</td>
                <td align="left">
                    <label>
                        <input type="radio" name="status" id="status" value="1" <?php if($info[status]==1): ?>checked<?php endif; ?> />显示</label>  <label>
                        <input type="radio" name="status" id="status" value="0" <?php if($info[status]==0): ?>checked<?php endif; ?> />隐藏</label>
                </td>
            </tr> 
            <tr align="left"  class="center_t_d">
                <td width="20%">推荐</td>
                <td align="left">
                    <label>
                        <input type="radio" name="is_tj" id="is_tj" value="1" <?php if($info[is_tj]==1): ?>checked<?php endif; ?> />推荐</label>  <label>
                        <input type="radio" name="is_tj" id="is_tj" value="0" <?php if($info[is_tj]==0): ?>checked<?php endif; ?> />普通</label>
                </td>
            </tr> 
              
              
              
            <tr align="left"  class="center_t_d">
                <td width="20%">抵用价格</td>
                <td align="left">
                    <input type="text" name="dyprice" id="price" size="20" value="<?php echo ($info["dyprice"]); ?>" />
                </td>
            </tr>  
            <tr align="left"  class="center_t_d">
                <td width="20%">需消费</td>
                <td align="left">
                    <input type="text" name="xyprice" id="xyprice" size="20" value="<?php echo ($info["xyprice"]); ?>" />
                </td>
            </tr>  
             <tr align="left"  class="center_t_d">
                <td width="20%">开始日期-结束日期</td>
                <td align="left">
                    <input type="text" name="startdate" id="startdate" size="20" value="<?php echo ($info["startdate"]); ?>" />-
                    <input type="text" name="enddate" id="enddate" size="20" value="<?php echo ($info["enddate"]); ?>" />
                </td>
            </tr>  
            <tr align="left"  class="center_t_d">
                <td width="20%">优惠券数目</td>
                <td align="left">
                    <?php if($is_edit==1): echo ($info["yhqnum"]); ?>
                        <?php else: ?>
                        <input type="text" name="yhqnum" id="yhqnum" size="20" value="<?php echo ($info["yhqnum"]); ?>" /><?php endif; ?>
                    
                </td>
            </tr>  
            <tr align="left"  class="center_t_d">
                <td width="20%">操作说明</td>
                <td align="left">
                    <textarea id="czsm" name="czsm"><?php echo ($info["czsm"]); ?></textarea>
                </td>
            </tr>   
            <tr align="left"  class="center_t_d">
                <td width="20%">使用条件</td>
                <td align="left">
                    <textarea id="sytj" name="sytj"><?php echo ($info["sytj"]); ?></textarea>
                </td>
            </tr>    
            <tr align="left"  class="center_t_d">
              <td colspan="2">
                  
                  <input type="hidden" name="id" id="id" value="<?php echo ($info["id"]); ?>" />
                <input type="submit" class="btn submit" value="提交" id="sub" name="sub" /></td>
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
    </script>
<script type="text/javascript">
CKEDITOR.replace( 'czsm',
{
filebrowserBrowseUrl : '__PUBLIC__/ckfinder/ckfinder.html',
filebrowserImageBrowseUrl : '__PUBLIC__/ckfinder/ckfinder.html?Type=Images',
filebrowserFlashBrowseUrl : '__PUBLIC__/ckfinder/ckfinder.html?Type=Flash',
filebrowserUploadUrl : '__PUBLIC__/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
filebrowserImageUploadUrl : '__PUBLIC__/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
filebrowserFlashUploadUrl : '__PUBLIC__/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKEDITOR.replace( 'sytj',
{
filebrowserBrowseUrl : '__PUBLIC__/ckfinder/ckfinder.html',
filebrowserImageBrowseUrl : '__PUBLIC__/ckfinder/ckfinder.html?Type=Images',
filebrowserFlashBrowseUrl : '__PUBLIC__/ckfinder/ckfinder.html?Type=Flash',
filebrowserUploadUrl : '__PUBLIC__/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
filebrowserImageUploadUrl : '__PUBLIC__/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
filebrowserFlashUploadUrl : '__PUBLIC__/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
$("#startdate").datetimepicker();
$("#enddate").datetimepicker();
</script>    
</body>
</html>