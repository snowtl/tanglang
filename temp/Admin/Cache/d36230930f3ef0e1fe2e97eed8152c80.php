<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>添加社区团装-后台管理-<?php echo ($systemConfig["SITE_INFO"]["name_cms"]); ?></title>
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

<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.5&ak=4KXKDmnlxqezwFM9bajbsfoE"></script>
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
      <div class="center_r_t">您的位置：<a href="<?php echo U('Sqtz/index');?>" class="a1">社区团装列表</a>>>添加/编辑社区团装</div>
      <div class="center_t">
        <form action="" method="POST" id="form1" name="form1" enctype="multipart/form-data">
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tab">
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right" >社区团装名称</td>
                <td align="left">
                    <input type="text" name="name" id="name" size="100" value="<?php echo ($info["name"]); ?>" />
                </td>
            </tr>
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">附加标题</td>
                <td align="left">
                    <input type="text" name="ftname" id="ftname" size="100" value="<?php echo ($info["ftname"]); ?>" />
                </td>
            </tr>
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">社区团装图片</td>
                <td align="left">
                    <input type="file" name="tzimg" id="tzimg"  value="" />
                    <?php if(!empty($info[tzimg])): ?><img src="<?php echo ($systemConfig["SITE_INFO"]["url"]); echo ($info[tzimg]); ?>" width="100" /><?php endif; ?>
                </td>
            </tr>
                
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">均价</td>
                <td align="left">
                    <input type="text" name="junjia" id="junjia" size="20" value="<?php echo ($info["junjia"]); ?>" />元
                </td>
            </tr>
            
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">状态</td>
                <td align="left">
                    <label><input type="radio" name="is_display" id="is_display" value="1" <?php if($info[is_display]==1): ?>checked<?php endif; ?> />显示</label>
                    <label><input type="radio" name="is_display" id="is_display" value="0" <?php if($info[is_display]==0): ?>checked<?php endif; ?> />隐藏</label>
                </td>
            </tr>
            
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">户型</td>
                <td align="left">
                    <select id="huxing" name="huxing">
                        <option value="">请选择</option>
                        <?php if(is_array($hxlist)): $i = 0; $__LIST__ = $hxlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($vo[id]==$info[huxing]): ?>selected<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
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
                    <select id="q_id" name="q_id" onchange="getxq('p_id','c_id','q_id')"><option value="">请选择</option>
                        <?php if(!empty($info[q_id])): ?><option value="<?php echo ($info[q_id]); ?>" selected><?php echo ($q_name); ?></option><?php endif; ?>
                    </select>
                </td>
            </tr><?php endif; ?> 
              <?php if($is_qx==1): ?><tr align="left"  class="center_t_d">
                <td width="20%" align="right">区</td>
                <td align="left">
                    <select id="q_id" name="q_id" onchange="getxq('p_id','c_id','q_id')">
                        <option value="">请选择</option>
                        <?php if(is_array($qlist)): $i = 0; $__LIST__ = $qlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["region_id"]); ?>" <?php if($info[q_id]==$vo[region_id]): ?>selected<?php endif; ?>><?php echo ($vo["region_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <input type="hidden" id="p_id" name="p_id" value="<?php echo ($p_id); ?>" />
                    <input type="hidden" id="c_id" name="c_id" value="<?php echo ($c_id); ?>" />
                </td>
            </tr><?php endif; ?>
              <tr align="left"  class="center_t_d">
                <td width="20%" align="right">项目地址</td>
                <td align="left">
                    <input type="text" name="address" id="address" size="100" value="<?php echo ($info["address"]); ?>" />
                </td>
            </tr>
              <tr align="left"  class="center_t_d">
                <td width="20%" align="right">小区</td>
                <td align="left">
                    <select id="xq_id" name="xq_id">
                        <option value="">请选择</option>
                        <?php if(is_array($xqlist)): $i = 0; $__LIST__ = $xqlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($vo[id]==$info[xq_id]): ?>selected<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </td>
            </tr> 
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">开始时间</td>
                <td align="left">
                    <input type="text" name="starttime" id="starttime" value="<?php echo ($info["starttime"]); ?>" />
                </td>
            </tr>
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">结束时间</td>
                <td align="left">
                    <input type="text" name="endtime" id="endtime" value="<?php echo ($info["endtime"]); ?>" />
                </td>
            </tr> 
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">已经签约?户</td>
                <td align="left">
                    <input type="text" name="qyhnum" id="qyhnum" value="<?php echo ($info["qyhnum"]); ?>" size="10" />
                </td>
            </tr>   
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">预算</td>
                <td align="left">
                    <input type="text" name="yusuan" id="yusuan" value="<?php echo ($info["yusuan"]); ?>" size="10" />万元
                </td>
            </tr>   
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">省？元</td>
                <td align="left">
                    <input type="text" name="shengprice" id="shengprice" value="<?php echo ($info["shengprice"]); ?>" size="10" />元
                </td>
            </tr>  
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">团装介绍</td>
                <td align="left">
                    <textarea id="tzjs" name="tzjs" cols="100" rows="10"><?php echo ($info["tzjs"]); ?></textarea>
                </td>
            </tr>  
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">活动内容</td>
                <td align="left">
                    <textarea id="hdnr" name="hdnr" cols="100" rows="10"><?php echo ($info["hdnr"]); ?></textarea>
                </td>
            </tr>  
            
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">所在区域</td>
                <td align="left">
                    <input type="text" name="szqy" id="szqy" size="100" value="<?php echo ($info["szqy"]); ?>" />
                </td>
            </tr>   
              
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">活动地点</td>
                <td align="left">
                    <input type="text" name="hddd" id="hddd" size="100" value="<?php echo ($info["hddd"]); ?>" />
                </td>
            </tr> 
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">报名电话</td>
                <td align="left">
                    <input type="text" name="bmdh" id="bmdh" size="100" value="<?php echo ($info["bmdh"]); ?>" />
                </td>
            </tr>       
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">活动详情</td>
                <td align="left">
                    <textarea id="hdxq" name="hdxq" class="ckeditor" cols="100" rows="10"><?php echo ($info["hdxq"]); ?></textarea>
                </td>
            </tr>
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">参与人数</td>
                <td align="left">
                    <input type="text" name="cyrs" id="cyrs" size="20" value="<?php echo ($info["cyrs"]); ?>" />
                </td>
            </tr>
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">排序</td>
                <td align="left">
                    <input type="text" name="orders" id="orders" size="20" value="<?php echo ($info["orders"]); ?>" />
                </td>
            </tr>
            <tr align="left"  class="center_t_d">
                <td width="20%" align="right">添加标注</td>
                <td align="left">
                    <input type="hidden" name="jingdu" id="jingdu" value="<?php echo ($info["jingdu"]); ?>" />
                    <input type="hidden" name="weidu" id="weidu" value="<?php echo ($info["weidu"]); ?>" />
                    <style>
                        #mapcontainer{width: 800px; height: 800px;}
                    </style>
                    <div id="mapcontainer"></div>
                    <script type="text/javascript"> 
    var map = new BMap.Map("mapcontainer");         
    <?php if(!empty($info[jingdu])&&!empty($info[weidu])): ?>var point = new BMap.Point(<?php echo ($info[jingdu]); ?>, <?php echo ($info[weidu]); ?>);  
     
    <?php else: ?>
    
    var point = new BMap.Point(116.404, 39.915);<?php endif; ?>
    map.centerAndZoom(point, 12);                 // 初始化地图，设置中心点坐标和地图级别  
    var opts = {offset: new BMap.Size(150, 5)};

    map.addControl(new BMap.NavigationControl());//添加控件
    map.addControl(new BMap.ScaleControl(opts));//控件偏移位置
    map.addControl(new BMap.OverviewMapControl());
    map.addControl(new BMap.MapTypeControl());
    
    var marker=new BMap.Marker(point);//创建标注
    map.addOverlay(marker);//将标注添加到地图中
    marker.enableDragging();
    <?php if(!empty($info[jingdu])&&!empty($info[weidu])): ?>document.getElementById("jingdu").value="<?php echo ($info[jingdu]); ?>";
    document.getElementById("weidu").value="<?php echo ($info[weidu]); ?>";
    <?php else: ?>
    document.getElementById("jingdu").value="116.404";
    document.getElementById("weidu").value="39.915";<?php endif; ?>
    marker.addEventListener("dragend", function(e){
   
    document.getElementById("jingdu").value=e.point.lng;
    document.getElementById("weidu").value=e.point.lat;
    });
    






</script> 
                    
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
				var msg=eval("("+msg+")");
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
            //获取市区对应的经纬度
            $.ajax({
                data:"cid="+cid,
                cache:false,
		url:"<?php echo U('Index/getjwd');?>",
		type:"POST",
		dataType:"Json",
                success:function(msg){
                    var msg=eval("("+msg+")");
                    document.getElementById("jingdu").value=msg.jingdu;
                    document.getElementById("weidu").value=msg.weidu;
                    
                    var map = new BMap.Map("mapcontainer");          // 创建地图实例  
                    var point = new BMap.Point(msg.jingdu, msg.weidu);  // 创建点坐标 
                    map.centerAndZoom(point, 12);                 // 初始化地图，设置中心点坐标和地图级别  
                    
                    var opts = {offset: new BMap.Size(150, 5)};
                    map.addControl(new BMap.NavigationControl());//添加控件
                    map.addControl(new BMap.ScaleControl(opts));//控件偏移位置
                    map.addControl(new BMap.OverviewMapControl());
                    map.addControl(new BMap.MapTypeControl());

                    var marker=new BMap.Marker(point);//创建标注
                    map.addOverlay(marker);//将标注添加到地图中
                    marker.enableDragging();
                    marker.addEventListener("dragend", function(e){
                    //alert("当前位置：" + e.point.lng + ", " + e.point.lat);
                    document.getElementById("jingdu").value=e.point.lng;
                    document.getElementById("weidu").value=e.point.lat;
                    });
                    
                    
                }
            });
		$.ajax({
			data:"fid="+pid+"&cid="+cid,
			cache:false,
			url:"<?php echo U('Member/getqu');?>",
			type:"POST",
			dataType:"Json",
			success: function(msg){
				var msg=eval("("+msg+")");
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


CKEDITOR.replace( 'hdxq',
{
filebrowserBrowseUrl : '__PUBLIC__/ckfinder/ckfinder.html',
filebrowserImageBrowseUrl : '__PUBLIC__/ckfinder/ckfinder.html?Type=Images',
filebrowserFlashBrowseUrl : '__PUBLIC__/ckfinder/ckfinder.html?Type=Flash',
filebrowserUploadUrl : '__PUBLIC__/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
filebrowserImageUploadUrl : '__PUBLIC__/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
filebrowserFlashUploadUrl : '__PUBLIC__/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});


$("#starttime").datetimepicker();
$("#endtime").datetimepicker();
//地址
$("#address").blur(function(){
   var address=$(this).val();
   if(address!=''){
       var jingdu=$("#jingdu").val();
       var weidu=$("#weidu").val();
       var c_name=$("#c_id").find("option:selected").text();
       var map = new BMap.Map("mapcontainer");
       map.centerAndZoom(new BMap.Point(jingdu, weidu), 11);
       
       var opts = {offset: new BMap.Size(150, 5)};
        map.addControl(new BMap.NavigationControl());//添加控件
        map.addControl(new BMap.ScaleControl(opts));//控件偏移位置
        map.addControl(new BMap.OverviewMapControl());
        map.addControl(new BMap.MapTypeControl());
       
       
       // 创建地址解析器实例
        var myGeo = new BMap.Geocoder();
        // 将地址解析结果显示在地图上，并调整地图视野
        myGeo.getPoint(address,function(point){
            map.centerAndZoom(point, 16);
            $("#jingdu").val(point.lng);
            $("#weidu").val(point.lat);
            
            map.addOverlay(new BMap.Marker(point));
        },c_name);

   }

});
/**
         * 获取小区
         */
        function getxq(proid,cityid,quid){
            var pid=document.getElementById(proid).value;
            var cid=document.getElementById(cityid).value;
            var qid=document.getElementById(quid).value;
            $.ajax({
			data:"pid="+pid+"&cid="+cid+"&qid="+qid,
			cache:false,
			url:"<?php echo U('Sqtz/getxq');?>",
			type:"POST",
			dataType:"Json",
                        success:function(msg){
                            var msg=eval("("+msg+")");
                            if(msg){
                                $("#xq_id").empty();
				var citystr="";
				var len=msg.length;
				var l;
				citystr+="<option value=''>请选择</option>";
					
				if(len>0){
					for(l=0;l<len;l++){
						citystr+="<option value='"+msg[l].id+"'>"+msg[l].name+"</option>";
					}
				}
				$("#xq_id").append(citystr);
                            }else{
                                $("#xq_id").empty();
                                var citystr="<option value=''>请选择</option>";
                                $("#xq_id").append(citystr);
                            }
                        }
                    });
        }
</script>