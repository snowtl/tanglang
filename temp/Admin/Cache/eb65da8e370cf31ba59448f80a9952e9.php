<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>添加实体店-后台管理-<?php echo ($systemConfig["SITE_INFO"]["name_cms"]); ?></title>
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
      <div class="center_r_t">您的位置：<a href="<?php echo U('Shiti/index');?>" class="a1">实体店列表</a>>>添加/编辑实体店</div>
      <div class="center_t">
        <form action="" method="POST" id="form1" name="form1" enctype="multipart/form-data">
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tab">
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right" >实体店名称</td>
                <td align="left">
                    <input type="text" name="name" id="name" size="100" value="<?php echo ($info["name"]); ?>" />
                </td>
            </tr>
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">电话</td>
                <td align="left">
                    <input type="text" name="telphone" id="telphone" size="100" value="<?php echo ($info["telphone"]); ?>" />
                </td>
            </tr>
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">地址</td>
                <td align="left">
                    <input type="text" name="address" id="address" size="100" value="<?php echo ($info["address"]); ?>" />
                </td>
            </tr>
            
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">状态</td>
                <td align="left">
                    <label><input type="radio" name="is_display" id="is_display" value="1" <?php if($info[is_display]==1): ?>checked<?php endif; ?> />显示</label>
                    <label><input type="radio" name="is_display" id="is_display" value="0" <?php if($info[is_display]==0): ?>checked<?php endif; ?> />隐藏</label>
                </td>
            </tr>
              <?php if($is_qx==0): ?><tr align="left"  class="center_t_d">
                <td width="20%" align="right">省</td>
                <td align="left">
                    <select id="p_id" name="p_id" onchange="getcity('p_id','c_id')">
                        <option value="">请选择</option>
                        <?php if(is_array($plist)): $i = 0; $__LIST__ = $plist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["region_id"]); ?>" <?php if($info[p_id]==$vo[region_id]): ?>selected<?php endif; ?>><?php echo ($vo["region_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </td>
            </tr>
             <tr align="left"  class="center_t_d">
                <td width="20%" align="right">市</td>
                <td align="left">
                    <select id="c_id" name="c_id"  onchange="getdiqu('p_id','c_id','q_id')" ><option value="">请选择</option>
                        <?php if(!empty($info[c_id])): ?><option value="<?php echo ($info[c_id]); ?>" selected><?php echo ($c_name); ?></option><?php endif; ?>
                    </select>
                    
                    
                </td>
            </tr>
                  <tr align="left"  class="center_t_d">
                <td width="20%" align="right">区</td>
                <td align="left">
                    <select id="q_id" name="q_id" ><option value="">请选择</option>
                        <?php if(!empty($info[q_id])): ?><option value="<?php echo ($info[q_id]); ?>" selected><?php echo ($q_name); ?></option><?php endif; ?>
                    </select>
                </td>
            </tr><?php endif; ?> 
              <?php if($is_qx==1): ?><tr align="left"  class="center_t_d">
                <td width="20%" align="right">区</td>
                <td align="left">
                    <select id="q_id" name="q_id">
                        <option value="">请选择</option>
                        <?php if(is_array($qlist)): $i = 0; $__LIST__ = $qlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["region_id"]); ?>" <?php if($info[q_id]==$vo[region_id]): ?>selected<?php endif; ?>><?php echo ($vo["region_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <input type="hidden" id="p_id" name="p_id" value="<?php echo ($p_id); ?>" />
                    <input type="hidden" id="c_id" name="c_id" value="<?php echo ($c_id); ?>" />
                </td>
            </tr><?php endif; ?>
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">营业时间</td>
                <td align="left">
                    <input type="text" name="yingye" id="yingye" value="<?php echo ($info["yingye"]); ?>" />
                </td>
            </tr>
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">服务宗旨</td>
                <td align="left">
                    <input type="text" name="fwzz" size="100" id="fwzz" value="<?php echo ($info["fwzz"]); ?>" />
                </td>
            </tr> 
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">停车位</td>
                <td align="left">
                    <input type="text" name="tcw" id="fwzz" value="<?php echo ($info["tcw"]); ?>" size="10" />
                </td>
            </tr>   
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">展厅面积</td>
                <td align="left">
                    <input type="text" name="mianji" id="mianji" value="<?php echo ($info["mianji"]); ?>" />平方米
                </td>
            </tr>   
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">地图图片</td>
                <td align="left">
                    <input type="file" name="mapimg" id="mapimg" />
                    <?php if(!empty($info[mapimg])): ?><a href="<?php echo ($systemConfig["SITE_INFO"]["url"]); echo ($info[mapimg]); ?>" title="查看大图" target="_blank">  <img src="__ROOT__<?php echo ($info[mapimg]); ?>" width="100" title="查看大图" /></a><?php endif; ?>
                </td>
            </tr>  
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">周围照片</td>
                <td align="left">
                    <input type="file" name="zwimg" id="zwimg" />
                    <?php if(!empty($info[zwimg])): ?><a href="<?php echo ($systemConfig["SITE_INFO"]["url"]); echo ($info[zwimg]); ?>" title="查看大图" target="_blank"> <img src="__ROOT__<?php echo ($info[zwimg]); ?>" width="100" title="查看大图" alt="" />    </a><?php endif; ?>
                </td>
            </tr>  
            <tr align="left"  class="center_t_d">
              <td colspan="2"><input type="hidden" id="id" name="id" value="<?php echo ($info["id"]); ?>" />   
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
</body>
</html>
<script>
    function getcity(proid,cityid){
	//	 alert(proid+","+cityid);
//		var pid=$("#"+proid).val();
		var pid=document.getElementById(proid).value;
		
		$.ajax({
			data:"fid="+pid,
			cache:false,
			url:"<?php echo U('Member/getcity');?>",
			type:"POST",
			dataType:"Json",
			success: function(msg){
				
				if(msg.status==1){
					$("#"+cityid).empty();
					var citystr="";
					var len=msg.data.length;
					var l;
					citystr+="<option value=''>请选择</option>";
					
					if(len>0){
						for(l=0;l<len;l++){
							citystr+="<option value='"+msg.data[l].region_id+"'>"+msg.data[l].region_name+"</option>";
						}
					}
					$("#"+cityid).append(citystr);
					
				}
				
			}
					
		});	
	}
        function getdiqu(proid,cityid,dqid){
            var pid=document.getElementById(proid).value;
		var cid=document.getElementById(cityid).value;
		$.ajax({
			data:"fid="+pid+"&cid="+cid,
			cache:false,
			url:"<?php echo U('Member/getqu');?>",
			type:"POST",
			dataType:"Json",
			success: function(msg){
				
				if(msg.status==1){
					$("#"+dqid).empty();
					var citystr="";
					var len=msg.data.length;
					var l;
					citystr+="<option value=''>请选择</option>";
					
					if(len>0){
						for(l=0;l<len;l++){
							citystr+="<option value='"+msg.data[l].region_id+"'>"+msg.data[l].region_name+"</option>";
						}
					}
					$("#"+dqid).append(citystr);
					
				}
				
			}
					
		});
        }
</script>