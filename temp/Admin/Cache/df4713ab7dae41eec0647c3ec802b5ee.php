<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<title>空间-后台管理-<?php echo ($systemConfig["SITE_INFO"]["name_cms"]); ?></title>
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
		window.location.href="<?php echo U('Kjcategory/addkjcategory');?>";
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

<script type="text/javascript" src="__ROOT__/Public/js/doubleDate2.0.js"></script>
<script type="text/javascript">
$(function(){
	$('.doubledate').kuiDate({
		className:'doubledate',
		isDisabled: "1"  // isDisabled为可选参数，“0”表示今日之前不可选，“1”标志今日之前可选
	});
});
</script>
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
      <div class="center_r_t">您的位置：空间</div>
      <div class="center_r_z">
      <form method="get" name="search_form" id="search_form" action=""  >
        <label>关键字</label>
        <input type="text" class="input1" name="keys"  <?php if($keys==''): ?>value="请输入关键字" <?php else: ?> value="<?php echo ($keys); ?>"<?php endif; ?> />
       
        <input name="sub" type="submit"  value="查询" class="sub1" />
        <?php if($keys!=''): ?><a href="<?php echo U('Kjcategory/index');?>">取消查询</a><?php endif; ?>
        <a class="btn btn-primary btn-large theme-login" href="javascript:;">添加空间</a>
        </form>
        <div class="theme-popover">
          
        </div>
        <div class="theme-popover-mask"></div>
      </div>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="center_t" style="word-break:break-all; word-wrap:break-all;">
        <tr class="center_t_t">
          <td class="td1" width="135">编号</td>
          <td width="135">空间名称</td>
          <td width="135">添加时间</td>
          <td width="135">添加人</td>
          
          <td class="td2" width="135">操作</td>
        </tr>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="center_t_d">
          <td class="td1" width="135"><?php echo ($vo["id"]); ?></td>
          <td width="135"><?php echo ($vo["name"]); ?></td>
          <td width="135"><?php echo ($vo["addtimef"]); ?></td>
          <td width="135"><?php echo ($vo["adduname"]); ?></td>
          
          <td width="135">
              <a aid="<?php echo ($vo["a_id"]); ?>" href="<?php echo U('Kjcategory/editkjcategory',array('id'=>$vo[id]));?>" style="cursor:pointer">编辑</a>
              <a name="<?php echo ($vo["name"]); ?>" link="<?php echo U('Kjcategory/del',array('id'=>$vo[id]));?>" style="cursor:pointer" class="del">删除</a></td>
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
<!--添加-->

<!--查看-->

<!--编辑-->

<script>
//删除
    $(".del").click(function(){
        var n=$(this).attr("name");
        if(confirm("您确定要删除["+n+"]吗？")){
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
//添加用户	
function add_user(){


	var a_name=$("#a_name").val();
	var pwd=$("#pwd").val();
	var cof_pwd=$("#cof_pwd").val();
	var nickname=$("#nickname").val();
	var truename=$("#truename").val();
	var sex=$("#sex").val();
	var email=$("#email").val();
	var qq=$("#qq").val();
	var telphone=$("#telphone").val();
	var year=$("#year").val();
	var month=$("#month").val();
	var day=$("#day").val();
	var proid=$("#proid").val();
	var cityid=$("#cityid").val();
	
	$.ajax({
		data:"a_name="+a_name+"&pwd="+pwd+"&cof_pwd="+cof_pwd+"&nickname="+nickname+"&truename="+truename+"&sex="+sex+"&email="+email+"&qq="+qq+"&telphone="+telphone+"&year="+year+"&month="+month+"&day="+day+"&proid="+proid+"&cityid="+cityid,
		cache:false,
		url:"<?php echo U('Member/addmember');?>",
		type:"POST",
		dataType:"JSON",
		success: function(msg){
			msg=eval("("+msg+")");
			if(msg.status){
				$("#a_name").val("");
				$("#pwd").val("");
				$("#cof_pwd").val("");
				$("#nickname").val("");
				$("#truename").val("");
				$("#sex").val("");
				$("#email").val("");
				$("#qq").val("");
				$("#telphone").val("");
				$("#year").val("");
				$("#month").val("");
				$("#day").val("");
				$('.theme-popover-mask').fadeOut(100);
				$('.theme-popover').slideUp(200);
				alert(msg.info);
			}else{
				alert(msg.info);
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
//查看
$(".chakan").click(function(){
	var aid=$(this).attr("aid");	
	
	
	$.ajax({
		data:"aid="+aid,
		type:"POST",
		dataType:"JSON",
		url:"<?php echo U('Member/getinfo');?>",
		cache:false,
		success: function(msg){
			msg=eval("("+msg+")");
			
			document.getElementById("a_aname_1").innerHTML=msg.a_aname_1;
			document.getElementById("nickname_1").innerHTML=msg.nickname_1;
			document.getElementById("truename_1").innerHTML=msg.truename_1;
			document.getElementById("sex_1").innerHTML=msg.sex_1;
			document.getElementById("email_1").innerHTML=msg.email_1;
			document.getElementById("qq_1").innerHTML=msg.qq_1;	
			document.getElementById("telphone_1").innerHTML=msg.telphone_1;	
			document.getElementById("year_1").innerHTML=msg.year_1;
                        
			document.getElementById("city_1").innerHTML=msg.city_1;
                        
        if(msg.img!='')
                        document.getElementById("logo_img").innerHTML="<img src='__ROOT__/avatar/"+msg.img+"_60.jpg'/>";
                    
                        document.getElementById("address_1").innerHTML=msg.address_1;
                        
			
			
			}
		})
	
	
	
	$(".theme-popover").html($(".yc_ck").html());
		
	$('.theme-popover-mask').fadeIn(100);
	$('.theme-popover').slideDown(200);
	
	
		
});
//编辑
$(".edituser").click(function(){
	var aid=$(this).attr("aid");
	//alert("编辑"+aid);
	$.ajax({
		data:"aid="+aid+"&is_cl=1",	
		cache:false,
		type:"POST",
		dataType:"JSON",
		url:"<?php echo U('Member/getinfo');?>",
		success: function(msg){
			msg=eval("("+msg+")");
			document.getElementById("a_name_e").value=msg.a_name;
			document.getElementById("nickname_e").value=msg.nickname;
			document.getElementById("truename_e").value=msg.truename;
			document.getElementById("email_e").value=msg.email;
			document.getElementById("qq_e").value=msg.qq;
			document.getElementById("telphone_e").value=msg.movphone;
			if(msg.sex==2)
			var str_sex="	<option value='1' >男</option><option value='2' selected>女</option>";
			else
			var str_sex="	<option value='1' selected >男</option><option value='2' >女</option>";
			
			document.getElementById("sex_e").innerHTML=str_sex;
			
			//年
			var str_year="";
			<?php if(is_array($year)): $i = 0; $__LIST__ = $year;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>if(msg.bir_year=="<?php echo ($vo); ?>")
            	str_year+=' <option value="<?php echo ($vo); ?>" selected ><?php echo ($vo); ?></option>';
			else
				str_year+=' <option value="<?php echo ($vo); ?>" ><?php echo ($vo); ?></option>';<?php endforeach; endif; else: echo "" ;endif; ?>
			document.getElementById("year_e").innerHTML=str_year;
			//月
			var str_month="";
			 <?php if(is_array($month)): $i = 0; $__LIST__ = $month;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>if(msg.bir_month=="<?php echo ($vo); ?>")
             	str_month+='<option value="<?php echo ($vo); ?>" selected><?php echo ($vo); ?></option>';
			 else
			 	str_month+='<option value="<?php echo ($vo); ?>"><?php echo ($vo); ?></option>';<?php endforeach; endif; else: echo "" ;endif; ?>
			document.getElementById("month_e").innerHTML=str_month;
			//日
			var str_day="";
			<?php if(is_array($day)): $i = 0; $__LIST__ = $day;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>if(msg.bir_day=="<?php echo ($vo); ?>")
             	str_day+='<option value="<?php echo ($vo); ?>" selected><?php echo ($vo); ?></option>';
			 else
			 	str_day+='<option value="<?php echo ($vo); ?>"><?php echo ($vo); ?></option>';<?php endforeach; endif; else: echo "" ;endif; ?>
			document.getElementById("day_e").innerHTML=str_day;		
			//省
			var str_province="";
			
			<?php if(is_array($pro_list)): $i = 0; $__LIST__ = $pro_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>if(msg.province_id==<?php echo ($vo["region_id"]); ?>)
            str_province+='<option value="<?php echo ($vo["region_id"]); ?>" selected><?php echo ($vo["region_name"]); ?></option>';
			else
			str_province+='<option value="<?php echo ($vo["region_id"]); ?>" ><?php echo ($vo["region_name"]); ?></option>';<?php endforeach; endif; else: echo "" ;endif; ?>
			document.getElementById("proid_e").innerHTML=str_province;
					
			//市
			var city_str="";
			for(var i=0;i<msg.city.length;i++){
				if(msg.city_id==msg.city[i].region_id)
				city_str+="<option value='"+msg.city[i].region_id+"' selected>"+msg.city[i].region_name+"</option>";
				else
				city_str+="<option value='"+msg.city[i].region_id+"' >"+msg.city[i].region_name+"</option>";
			}
			
			document.getElementById("cityid_e").innerHTML=city_str;
			document.getElementById("aid_e").value=msg.a_id;
			
			
		}
	});
	
	
	$(".theme-popover").html($(".yc_edit").html());
		
	$('.theme-popover-mask').fadeIn(100);
	$('.theme-popover').slideDown(200);
	
});
//编辑操作
function edit_user(){
	var a_name=document.getElementById("a_name_e").value;
	var pwd=document.getElementById("pwd_e").value;
	var cof_pwd=document.getElementById("cof_pwd_e").value;
	var nickname=document.getElementById("nickname_e").value;
	var truename=document.getElementById("truename_e").value;
	var sex=document.getElementById("sex_e").value;
	var email=document.getElementById("email_e").value;
	var qq=document.getElementById("qq_e").value;
	var telphone=document.getElementById("telphone_e").value;
	var year=document.getElementById("year_e").value;
	var month=document.getElementById("month_e").value;
	var day=document.getElementById("day_e").value;
	var proid=document.getElementById("proid_e").value;
	var cityid=document.getElementById("cityid_e").value;
	var aid=document.getElementById("aid_e").value;
	
	$.ajax({
		data:"a_name="+a_name+"&pwd="+pwd+"&cof_pwd="+cof_pwd+"&nickname="+nickname+"&truename="+truename+"&sex="+sex+"&email="+email+"&qq="+qq+"&telphone="+telphone+"&year="+year+"&month="+month+"&day="+day+"&proid="+proid+"&cityid="+cityid+"&aid="+aid,
		cache:false,
		dataType:"JSON",
		type:"POST",
		url:"<?php echo U('Member/edit_user');?>",
		success: function(msg){
			msg=eval("("+msg+")");
			
			if(msg.status==1){
				alert(msg.info);
				window.location.reload();
			}
			
			}
		})
	
	
	
}
//当鼠标在文本框中文字隐藏,当离开之后文字显示
$(".input1").blur(function(){
	if($(this).val()=="")
	$(this).val("请输入关键字");
	});
$(".input1").focus(function(){
	$(this).val("");
	});




    
</script>
</body>
</html>