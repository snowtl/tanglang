<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<title>工人-后台管理-<?php echo ($systemConfig["SITE_INFO"]["name_cms"]); ?></title>
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
		window.location.href="<?php echo U('Member/addgr');?>";
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
      <div class="center_r_t">您的位置：工人列表</div>
      <div class="center_r_z">
      <form method="get" name="search_form" id="search_form" action=""  >
        <label>关键字</label>
        <input type="text" class="input1" name="keys"  <?php if($keys==''): ?>value="请输入关键字" <?php else: ?> value="<?php echo ($keys); ?>"<?php endif; ?> />
        <label>日期</label>
        <input type="text" name="start_date" value="<?php echo ($start_date); ?>" readonly class="doubledate ipticon"/>
        <label>-</label>
        <input type="text" name="end_date" readonly value="<?php echo ($end_date); ?>" class="doubledate ipticon"/>
        <?php if($is_qx==0): ?><select name="province" id="province_s" class="choose" onChange="getcity('province_s','city_s')">
          <option value="" >请选择省</option>
          
			<?php if(is_array($plist)): $i = 0; $__LIST__ = $plist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["region_id"]); ?>" <?php if($vo[region_id]==$province): ?>selected<?php endif; ?>><?php echo ($vo["region_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
          
        </select>
       
        <select name="city" id="city_s" class="choose" onChange="getdiqu('province_s','city_s','q_s')">
          <option value="" >请选择城市</option>
          <?php if(!empty($city)): ?><option value="<?php echo ($city); ?>" selected="selected"><?php echo ($cityname); ?></option><?php endif; ?>
        </select>
        <select name="qu" id="q_s" class="choose">
          <option value="" >请选择区</option>
            <?php if(!empty($qu)): ?><option value="<?php echo ($qu); ?>" selected="selected"><?php echo ($quname); ?></option><?php endif; ?>
        </select><?php endif; ?>
        <?php if($is_qx==1): ?><select name="qu" id="q_s" class="choose">
          <option value="" >请选择区</option>
          <?php if(is_array($qlist)): $i = 0; $__LIST__ = $qlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["region_id"]); ?>" <?php if($vo[region_id]==$qu): ?>selected<?php endif; ?>><?php echo ($vo["region_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
         </select><?php endif; ?>
        
        
        <?php if($is_qx==0): if(!empty($province)||!empty($city)||!empty($qu)||!empty($keys)||!empty($start_date)||!empty($end_date)): ?><a href="<?php echo U('Member/index');?>">取消查询</a><?php endif; endif; ?>
        <?php if($is_qx==1): if(!empty($qu)||!empty($keys)||!empty($start_date)||!empty($end_date)): ?><a href="<?php echo U('Member/index');?>">取消查询</a><?php endif; endif; ?>
        
        <input name="sub" type="submit"  value="查询" class="sub1" />
        
        
        <a class="btn btn-primary btn-large theme-login" href="javascript:;">添加用户</a>
        </form>
        <div class="theme-popover">
          
        </div>
        <div class="theme-popover-mask"></div>
      </div>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="center_t" style="word-break:break-all; word-wrap:break-all;">
        <tr class="center_t_t">
          <td class="td1" width="135">登录名</td>
          <td width="135">真实姓名</td>
          <td width="135">注册时间</td>
          <td width="135">城市</td>
          <td width="135">手机</td>
          <td width="100">性别</td>
          
          <td class="td2" width="135">操作</td>
        </tr>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="center_t_d">
          <td class="td1" width="135"><?php echo ($vo["a_name"]); ?></td>
          <td width="135"><?php echo ($vo["truename"]); ?></td>
          <td width="135"><?php echo ($vo["create_time"]); ?></td>
          <td width="135"><?php echo ($vo["p_name"]); ?>/<?php echo ($vo["c_name"]); ?>/<?php echo ($vo["q_name"]); ?></td>
          <td width="135"><?php echo ($vo["movphone"]); ?></td>
          <td width="100"><?php echo ($vo["sexf"]); ?></td>
          <td width="135">
              <a aid="<?php echo ($vo["a_id"]); ?>" href="<?php echo U('Member/editgr',array('aid'=>$vo[a_id]));?>" style="cursor:pointer">编辑</a>
              <a name="<?php echo ($vo["truename"]); ?>" link="<?php echo U('Member/delgr',array('aid'=>$vo[a_id]));?>" style="cursor:pointer" class="del">删除</a></td>
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

<!--查看-->
<div class="yc_ck" style="display:none;">
<div class="theme-poptit"> <a href="javascript:;" title="关闭" class="close" onClick="close_win()"><img src="__ROOT__/Public/images/gb.jpg" /></a>
            <h3>查看用户信息</h3>
          </div>
          <div class="theme-popbod dform">
            
              <ol>
                  <li>
                    <label>头像</label>
                    <font id="logo_img" class=""></font>
                </li>
                <li style="height:30px;">
                  <label>登录帐号</label>
                  
                  <font id="a_aname_1" class="ipt fontb"></font>
                </li>
                
                
                <li style="height:30px;">
                  <label>真实姓名</label>
                  
                  <font class="ipt fontb" id="truename_1"></font>
                </li>
                <li style="height:30px;">
                  <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;性别</label>
                  
                  <font class="ipt fontb" id="sex_1"></font>
                </li>
                <li style="height:30px;">
                  <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;积分</label>
                  
                  <font class="ipt fontb" id="jifen_1"></font>
                </li>
                
                
                
                <li style="height:30px;">
                  <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;邮箱</label>
                  
                  <font class="ipt fontb" id="email_1"></font>
                </li>
                <li style="height:30px;">
                  <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QQ</label>
                  
                  <font class="ipt fontb" id="qq_1"></font>
                </li>
                <li style="height:30px;">
                  <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;手机号码</label>
                  
                  <font class="ipt fontb" id="movphone_1"></font>
                </li>
                <li style="height:30px;">
                  <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;座机</label>
                  
                  <font class="ipt fontb" id="telphone_1"></font>
                </li>
                <li style="height:30px;">
                  <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;生日</label>
                  
                  <font class="ipt fontb" id="birthday_1"></font>
                </li>
                
                <li style="height:30px;">
                  <label>所在城市</label>
                  
                  <font class="ipt fontb" id="city_1"></font>
                </li>
                <li style="height:30px">
                    <label>地址</label>
                    <font id="address_1" class="ipt fontb"></font>
                </li>
                <li style="height:30px">
                    <label>户型</label>
                    <font id="hxname_1" class="ipt fontb"></font>
                </li>
                
                <li style="height:30px">
                    <label>面积</label>
                    <font id="mianji_1" class="ipt fontb"></font>
                </li>
                
                <li style="height:30px">
                    <label>施工阶段</label>
                    <font id="zxjd_1" class="ipt fontb"></font>
                </li>
                <li style="height:30px">
                    <label>喜欢风格</label>
                    <font id="fgname_1" class="ipt fontb"></font>
                </li>
                <li style="height:30px">
                    <label>预算</label>
                    <font id="ysname_1" class="ipt fontb"></font>
                </li>
                <li style="height:30px">
                    <label>装修日期</label>
                    <font id="zxtime_1" class="ipt fontb"></font>
                </li>
                <li style="height:30px">
                    <label>用户类型</label>
                    <font id="a_type_1" class="ipt fontb"></font>
                </li>
                <li style="height:30px">
                    <label>注册时间</label>
                    <font id="create_time_1" class="ipt fontb"></font>
                </li>
                <li style="height:30px">
                    <label>最后登录时间</label>
                    <font id="last_login_1" class="ipt fontb"></font>
                </li>
                
                <li style="height:30px">
                    <label>最后登录时间</label>
                    <font id="last_ip_1" class="ipt fontb"></font>
                </li>
                <li style="height:30px">
                    <label>账户状态</label>
                    <font id="status_1" class="ipt fontb"></font>
                </li>
              </ol>
            </form>
          </div>

</div>

<script>
//删除
    $(".del").click(function(){
        var n=$(this).attr("name");
        if(confirm("您确定要删除会员["+n+"]吗？")){
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
				msg=eval("("+msg+")");
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
			
			document.getElementById("a_aname_1").innerHTML=msg.a_name;
			document.getElementById("truename_1").innerHTML=msg.truename;
                        
                        document.getElementById("city_1").innerHTML=msg.pro_name+"/"+msg.city_name+"/"+msg.qu_name;
                        $("#jifen_1").html(msg.jifen);
                        $("#sex_1").html(msg.sex);
                        $("#email_1").html(msg.email);
			$("#qq_1").html(msg.qq);
                        $("#movphone_1").html(msg.movphone);
                        $("#telphone_1").html(msg.telphone);
                        $("#birthday_1").html(msg.birthday);
                        $("#address_1").html(msg.address);
                        
                        $("#hxname_1").html(msg.hxname);
                        $("#mianji_1").html(msg.mianji);
                        $("#zxjd_1").html(msg.zxjd);
                        $("#fgname_1").html(msg.fgname);
                        $("#ysname_1").html(msg.ysname);
                        
                        $("#zxtime_1").html(msg.zxtime);
                        
                        $("#a_type_1").html(msg.a_type);
                        $("#create_time_1").html(msg.create_time);
                        $("#last_login_1").html(msg.last_login);
                        $("#last_ip_1").html(msg.last_ip);
                        $("#status_1").html(msg.status);
                        
                        if(msg.logo!='')
                        document.getElementById("logo_img").innerHTML="<img src='__ROOT__/avatar/"+msg.logo+"_60.jpg'/>";
                    
                        
                        
			
			
			}
		})
	
	
	
	$(".theme-popover").html($(".yc_ck").html());
		
	$('.theme-popover-mask').fadeIn(100);
	$('.theme-popover').slideDown(200);
	
	
		
});

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