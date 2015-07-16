<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>幻灯片-后台管理-<?php echo ($systemConfig["SITE_INFO"]["name_cms"]); ?></title>
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
      <div class="center_r_t">您的位置：<a href="<?php echo U('Sheji/list_hdp');?>" class="a1">幻灯片</a>>>添加幻灯片</div>
      <div class="center_t">
          <form action="" method="POST" enctype="multipart/form-data" id="form1" name="form1" >
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tab">
            <tr align="left"  class="center_t_d">
                <td width="20%">选择设计师</td>
                <td align="left">
                    <input type="text" size="100" name="gname" id="gname" value="" onchange="xzgz()" placeholder="在此输入登录名进行搜索设计师" /><br/>
                    
                </td>
            </tr>
            <tr align="left"  class="center_t_d">
                <td width="20%"></td>
                <td align="left">
                    
                    <select id="gzid" name="gzid">
                        <option value="">选择设计师</option>
                        <?php if(is_array($sjlist)): $i = 0; $__LIST__ = $sjlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["a_id"]); ?>" <?php if($info[uid]==$vo[a_id]): ?>selected<?php endif; ?>><?php echo ($vo["a_name"]); ?>[<?php echo ($vo["truename"]); ?>]</option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </td>
            </tr>
              
             <tr align="left"  class="center_t_d">
                <td width="20%">名称</td>
                <td align="left">
                    <input type="text" name="name" id="name" size="100" value="<?php echo ($info["name"]); ?>" />
                </td>
            </tr> 
              <tr align="left"  class="center_t_d">
                <td width="20%">幻灯片</td>
                <td align="left">
                    <input type="file" name="img" id="img" />
                    <?php if(!empty($info[img])): ?><img src="<?php echo ($systemConfig["SITE_INFO"]["url"]); echo ($info["img"]); ?>" /><?php endif; ?>
                </td>
            </tr>
             <tr align="left"  class="center_t_d">
                <td width="20%">状态</td>
                <td align="left">
                    <label>
                        <input type="radio" name="status" id="status" value="1" <?php if($info[status]==1): ?>checked<?php endif; ?> />已审核</label>  <label>
                        <input type="radio" name="status" id="status" value="0" <?php if($info[status]==0): ?>checked<?php endif; ?> />未审核</label>
                </td>
            </tr> 
             <tr align="left"  class="center_t_d">
                <td width="20%">幻灯片链接</td>
                <td align="left">
                    <input type="text" name="link" id="link" size="100" value="<?php echo ($info["link"]); ?>" />
                </td>
            </tr>  
              
                
            <tr align="left"  class="center_t_d">
              <td colspan="2">
                  <input type="hidden" name="step" id="step" value="2" />
                  <input type="hidden" name="id" id="id" value="<?php echo ($info["id"]); ?>" />
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
    function xzgz(){
        var gname=$("#gname").val();
        $.ajax({
            data:"gname="+gname,
            cache:false,
            type:"post",
            datatype:"json",
            url:"<?php echo U('Sheji/ajaxgetsj');?>",
            success:function(msg){
                var msg=eval("("+msg+")");
                if(msg.status==1){
                    $("#gzid").empty();
                    var str="";
                    var len=msg.data.length;
                    var i=0;
                    for(i=0;i<len;i++){
                        str+="<option value='"+msg.data[i].a_id+"'>"+msg.data[i].a_name+"["+msg.data[i].truename+"]</option>";
                    }
                    $("#gzid").append(str);
                }
                
            }
        });
    }
    </script>
</body>
</html>