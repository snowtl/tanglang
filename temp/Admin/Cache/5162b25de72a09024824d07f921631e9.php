<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<title>优惠券-后台管理-<?php echo ($systemConfig["SITE_INFO"]["name_cms"]); ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo ($systemConfig["SITE_INFO"]["description_cms"]); ?>" />
<meta name="keywords" content="<?php echo ($systemConfig["SITE_INFO"]["keyword_cms"]); ?>" />
<script src="__ROOT__/Public/js/tabqh.js"></script>
<script src="__ROOT__/Public/js/Tab.js"></script>


<link href="__ROOT__/Public/css/common.css" rel="stylesheet" type="text/css" />



<script src="__PUBLIC__/datepicker/js/jquery.min.js"></script>

<script src="__ROOT__/Public/js/jquery.validate.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo ($systemConfig["WEB_ROOT"]); ?>/Public/easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="<?php echo ($systemConfig["WEB_ROOT"]); ?>/Public/easyui/themes/icon.css">
<script type="text/javascript" src="<?php echo ($systemConfig["WEB_ROOT"]); ?>/Public/easyui/jquery.easyui.min.js"></script>
<link href="__ROOT__/Public/css/main.css" rel="stylesheet" />
<link href="__ROOT__/Public/css/doubleDate.css" rel="stylesheet" />
<link href="__ROOT__/Public/css/theme.css" rel="stylesheet">
<script>
jQuery(document).ready(function($) {
	$('.theme-login').click(function(){
		window.location.href="<?php echo U('Shop/add_yhq');?>";
	})
})
function close_win(){
	$(".theme-popover").html("");
		
	$('.theme-popover-mask').fadeOut(100);
	$('.theme-popover').slideUp(200);
}

</script>
<style>
.fontb{ display:block; float:right; margin-right:56px;}
</style>
<script src="__ROOT__/Public/js/jquery.min.js" language="javascript" type="text/javascript"></script>

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
 
  <!--头部end--> 
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
 
  <!--左边end-->
  <div class="center_r">
    <div class="center">
      <div class="center_r_t">您的位置：优惠券</div>
      <div class="center_r_z">
      <form method="get" name="search_form" id="search_form" action=""  >
        <label>开始时间</label>
        <input type="text" class="input1" id="startdate" value="<?php echo ($startdate); ?>" name="startdate" />-<input type="text" class="input1" id="startdate1" name="startdate1" value="<?php echo ($startdate1); ?>" />
        <label>结束时间</label>
        <input type="text" class="input1" id="enddate" name="enddate" value='<?php echo ($enddate); ?>' />-<input type="text" value='<?php echo ($enddate1); ?>' class="input1" id="enddate1" name="enddate1" />
        <?php if($is_qx==0): ?><select id="p_id" name="p_id" class="choose" onchange="getcity('p_id','c_id')">
            <option value="">请选择省</option>
            <?php if(is_array($plist)): $i = 0; $__LIST__ = $plist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["region_id"]); ?>" <?php if($vo[region_id]==$p_id): ?>selected<?php endif; ?>><?php echo ($vo["region_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
     
        <select id="c_id" name="c_id" class="choose">
            <option value="">请选择市</option>
            <?php if(!empty($c_id)): ?><option value="<?php echo ($c_id); ?>" selected ><?php echo ($cname); ?></option><?php endif; ?>
        </select><?php endif; ?>
            <?php if(!empty($startdate)||!empty($enddate)||!empty($p_id)||!empty($c_id)): ?><a href="<?php echo U('Shop/list_yhq');?>">取消查询</a><?php endif; ?>
        
        
        <input name="sub" type="submit"  value="查询" class="sub1" />
        
        
        <a class="btn btn-primary btn-large theme-login" href="javascript:;">添加优惠券</a>
        </form>
        <div class="theme-popover">
          
        </div>
        <div class="theme-popover-mask"></div>
      </div>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="center_t" style="word-break:break-all; word-wrap:break-all;">
        <tr class="center_t_t">
          <td class="td1" width="135">编号</td>
          <td width="135">优惠券名称</td>
          <td width="135">是否推荐</td>
          <td width="135">抵用价格</td>
          <td width="135">需消费</td>
          <td width="135">优惠券数目</td>
          <td width="50">已使用?张</td>
          <td width="150">开始日期-结束日期</td>
          <td width="50">状态</td>
          <td class="td2" width="135">操作</td>
        </tr>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="center_t_d">
          <td class="td1" width="135"><?php echo ($vo["id"]); ?></td>
          <td width="135"><?php echo ($vo["name"]); ?></td>
          <td width="135"><?php echo ($vo["is_tj_f"]); ?></td>
          <td width="135"><?php echo ($vo["dyprice"]); ?></td>
          <td width="135"><?php echo ($vo["xyprice"]); ?></td>
          <td width="135"><?php echo ($vo["yhqnum"]); ?></td>
          <td width="50"><?php echo ($vo["ysy"]); ?></td>
          <td width="150"><?php echo ($vo["startdate"]); ?><br/>-<br/><?php echo ($vo["enddate"]); ?></td>
          <td width="50"><?php echo ($vo["status_f"]); ?></td>
          
          <td width="135">
              <a name="<?php echo ($vo["name"]); ?>" link="<?php echo U('Shop/edit_status_yhq',array('id'=>$vo[id],'status'=>$vo[status]));?>" style="cursor:pointer" class="sgdtstatus">修改状态</a><br/>
              <a name="<?php echo ($vo["name"]); ?>" href="<?php echo U('Shop/list_xx_yhq',array('id'=>$vo[id]));?>" style="cursor:pointer">查看优惠券</a><br/>
              <a aid="<?php echo ($vo["a_id"]); ?>" href="<?php echo U('Shop/edit_yhq',array('id'=>$vo[id]));?>" style="cursor:pointer">编辑</a>
              <a name="<?php echo ($vo["name"]); ?>" link="<?php echo U('Shop/del_yhq',array('id'=>$vo[id]));?>" style="cursor:pointer" class="del">删除</a>
              <br/>
              <a aid="<?php echo ($vo["a_id"]); ?>" href="<?php echo U('Shop/add_mendian',array('id'=>$vo[id],'p_id'=>$vo[p_id],'c_id'=>$vo[c_id]));?>" style="cursor:pointer">添加门店</a>
              <br/>
              <a aid="<?php echo ($vo["a_id"]); ?>" href="<?php echo U('Shop/ck_mendian',array('id'=>$vo[id]));?>" style="cursor:pointer">门店列表</a>
          </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      </table>
      <div class="paging">
        <div class="paging_l"><?php echo ($page); ?></div>
      </div>
    </div>
    <div class="foot"> <ul>
    <li>Copyright © 2003-2010 tlgzjlb.com All Right Reserved</li>
    <li>版权所有 中国北京·唐亮工长俱乐部</li>
</ul>
 </div>
  </div>
</div>

    <style>
        .sortpx{border: 1px solid #0070a9; width: 30px;}
    </style>

<script>
    function updatesort(id,sort){
        
        $("#s_"+id).html("<input type='text' id='sv_"+id+"' class='sortpx' name='sv_"+id+"' onchange='gb(this.value,"+id+")' value='"+sort+"' />");
    }
    function gb(sort,id){
        $.ajax({
            data:"sort="+sort+"&id="+id,
            url:"<?php echo U('Gongzhang/ajaxupdatesort');?>",
            type:"POST",
            datatype:"JSON",
            cache:false,
            success:function(msg){
                $("#s_"+id).html(sort);
            }
        });
    }
//删除
    $(".del").click(function(){
        var n=$(this).attr("name");
        if(confirm("您确定要删除会员["+n+"]吗？")){
            window.location.href=$(this).attr("link");
        }
    });
    $(".sgdtstatus").click(function(){
        var n=$(this).attr("name");
        if(confirm("您确定要修改会员["+n+"]的状态吗？")){
            window.location.href=$(this).attr("link");
        }
    });
	//获取城市
	  function getcity(proid,cityid){
		var pid=$("#"+proid).val();
		
		$.ajax({
			data:"fid="+pid,
			cache:false,
			url:"<?php echo U('Member/getcity');?>",
			type:"POST",
			dataType:"Json",
			success: function(msg){
				msg=eval("("+msg+")");
				if(msg.status==1){
					$("#"+cityid).empty();
					var citystr="";
					var len=msg.data.length;
					var l;
					citystr+="<option value=''>请选择</option>";
					for(l=0;l<len;l++){
						citystr+="<option value='"+msg.data[l].region_id+"'>"+msg.data[l].region_name+"</option>";
					}
					
					
					$("#"+cityid).append(citystr);
				}
				
			}
					
		});
		
			
}


//获取日期 

function getdays(){
	var mon=$("#month").val();
	var year=$("#year").val();
	$.ajax({
		data:"year="+year+"&mon="+mon,
		cache:false,
		url:"<?php echo U('Member/getdays');?>",
		type:"POST",
		dataType:"JSON",
		success: function(msg){
			msg=eval("("+msg+")");
			$("#day").empty();
			var l;
			var htm="";
			for(l=0;l<msg.length;l++){
				htm+="<option value='"+msg[l]+"'>"+msg[l]+"</option>";
			}
			$("#day").append(htm);	
			
		}
	});	
}


$("#startdate").datetimepicker();
$("#enddate").datetimepicker();
$("#startdate1").datetimepicker();
$("#enddate1").datetimepicker(); 
</script>
</body>
</html>