<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<title>商品列表-后台管理-<?php echo ($systemConfig["SITE_INFO"]["name_cms"]); ?></title>
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
		window.location.href="<?php echo U('Shop/add_goods');?>";
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
      <div class="center_r_t">您的位置：商品列表</div>
      <div class="center_r_z">
      <form method="get" name="search_form" id="search_form" action=""  >
        <label>关键字</label>
        <input type="text" class="input1" name="keys"  <?php if($keys==''): ?>value="请输入关键字" <?php else: ?> value="<?php echo ($keys); ?>"<?php endif; ?> />
        <label>商城</label>
        <select name="uid" id="uid" class="choose">
            <option value="" >请选择</option>
            <?php if(is_array($sclist)): $k = 0; $__LIST__ = $sclist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><option value="<?php echo ($vo["a_id"]); ?>" <?php if($uid==$vo[a_id]): ?>selected<?php endif; ?> ><?php echo ($vo["a_name"]); ?>[<?php echo ($vo["company"]); ?>]</option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
        <label>推荐</label>
        <select name="istj" id="istj" class="choose">
            <option value="" >请选择</option>
            <?php if(is_array($istj)): $k = 0; $__LIST__ = $istj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><option value="<?php echo ($k); ?>" <?php if($k==$istj1): ?>selected<?php endif; ?> ><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
        <?php if($is_qx==0): ?><select name="p_id" id="province_s" class="choose" onChange="getcity('province_s','city_s')">
          <option value="" >请选择省</option>
          
			<?php if(is_array($plist)): $i = 0; $__LIST__ = $plist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["region_id"]); ?>" <?php if($vo[region_id]==$p_id): ?>selected<?php endif; ?>><?php echo ($vo["region_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
          
        </select>
       
        <select name="c_id" id="city_s" class="choose" onChange="getdiqu('province_s','city_s','q_s')">
          <option value="" >请选择城市</option>
          <?php if(!empty($c_id)): ?><option value="<?php echo ($c_id); ?>" selected="selected"><?php echo ($c_name); ?></option><?php endif; ?>
        </select>
        <select name="q_id" id="q_s" class="choose">
          <option value="" >请选择区</option>
            <?php if(!empty($q_id)): ?><option value="<?php echo ($q_id); ?>" selected="selected"><?php echo ($q_name); ?></option><?php endif; ?>
        </select><?php endif; ?>
        <?php if($is_qx==1): ?><select name="qu" id="q_s" class="choose">
          <option value="" >请选择区</option>
          <?php if(is_array($qlist)): $i = 0; $__LIST__ = $qlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["region_id"]); ?>" <?php if($vo[region_id]==$q_id): ?>selected<?php endif; ?>><?php echo ($vo["region_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
         </select><?php endif; ?>
        
        
        <?php if($is_qx==0): if(!empty($p_id)||!empty($c_id)||!empty($q_id)||!empty($keys)||!empty($istj1)||!empty($uid)): ?><a href="<?php echo U('Shop/index');?>">取消查询</a><?php endif; endif; ?>
        <?php if($is_qx==1): if(!empty($q_id)||!empty($keys)||!empty($istj1)||!empty($uid)): ?><a href="<?php echo U('Shop/index');?>">取消查询</a><?php endif; endif; ?>
        
        <input name="sub" type="submit"  value="查询" class="sub1" />
        
        
        <a class="btn btn-primary btn-large theme-login" href="javascript:;">添加商品</a>
        </form>
        <div class="theme-popover">
          
        </div>
        <div class="theme-popover-mask"></div>
      </div>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="center_t" style="word-break:break-all; word-wrap:break-all;">
        <tr class="center_t_t">
          <td class="td1" width="135">编号</td>
          <td width="135">分类名称</td>
          <td width="135">商品标题</td>
          <td width="135">商城名称</td>
          <td width="50">本站价格</td>
          <td width="50">参考价格</td>
          <td width="50">库存</td>
          <td width="100">封面图片</td>
          <td width="100">推荐级别</td>
          <td class="td2" width="135">操作</td>
        </tr>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="center_t_d">
          <td class="td1" width="135"><?php echo ($vo["id"]); ?></td>
          <td width="135"><?php echo ($vo["cname"]); ?></td>
          <td width="135" ondblclick="updatename('<?php echo ($vo["id"]); ?>','<?php echo ($vo["name"]); ?>')" id="t_<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></td>
          <td width="135"><?php echo ($vo["company"]); ?></td>
          <td width="50" ondblclick="updateprice('<?php echo ($vo["id"]); ?>','<?php echo ($vo["price"]); ?>')" id="p_<?php echo ($vo["id"]); ?>"><?php echo ($vo["price"]); ?></td>
          <td width="50" ondblclick="updateckprice('<?php echo ($vo["id"]); ?>','<?php echo ($vo["ckprice"]); ?>')" id="c_<?php echo ($vo["id"]); ?>"><?php echo ($vo["ckprice"]); ?></td>
          <td width="50" ondblclick="updatekucun('<?php echo ($vo["id"]); ?>','<?php echo ($vo["kucun"]); ?>')" id="k_<?php echo ($vo["id"]); ?>"><?php echo ($vo["kucun"]); ?></td>
          <td width="100"><img src="__ROOT__<?php echo ($vo["fmimg"]); ?>" width="100"/> </td>
          <td width="100"><?php echo ($vo["tjjb"]); ?> </td>
          <td width="135">
              
              <a aid="<?php echo ($vo["id"]); ?>" href="<?php echo U('Shop/edit_goods',array('id'=>$vo[id]));?>" style="cursor:pointer">编辑</a>
              <a name="<?php echo ($vo["name"]); ?>" link="<?php echo U('Shop/del_goods',array('id'=>$vo[id]));?>" style="cursor:pointer" class="del">删除</a></td>
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
    .bor{border: 1px solid #005DAD;}
</style>
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

function updatename(tid,tname){
    $("#t_"+tid).html("<input type='text' name='name' class='bor' value='"+tname+"' onblur='gbname(this.value,"+tid+")' />");
}
//改变商品名称
function gbname(tname,tid){
    $.ajax({
        data:"id="+tid+"&name="+tname,
        cache:false,
        datatype:"JSON",
        url:"<?php echo U('Shop/ajax_gbnme');?>",
        type:"POST",
        success:function(msg){
            if(msg==1){
                $("#t_"+tid).html(tname);
            }
        }
    });
}
//更改价格
function updateprice(tid,price){
   $("#p_"+tid).html("<input type='text' name='price' size='10' class='bor' value='"+price+"' onblur='updateprice1(this.value,"+tid+")' />");
}
//改变价格操作
function updateprice1(price,tid){
    $.ajax({
        data:"id="+tid+"&price="+price,
        cache:false,
        datatype:"JSON",
        url:"<?php echo U('Shop/ajax_updateprice');?>",
        type:"POST",
        success:function(msg){
            if(msg==1){
                $("#p_"+tid).html(price);
            }
        }
    }); 
}

//更改价格
function updateckprice(tid,price){
   $("#c_"+tid).html("<input type='text' name='price' size='10' class='bor' value='"+price+"' onblur='updateckprice1(this.value,"+tid+")' />");
}
//改变价格操作
function updateckprice1(price,tid){
    $.ajax({
        data:"id="+tid+"&price="+price,
        cache:false,
        datatype:"JSON",
        url:"<?php echo U('Shop/ajax_updateckprice');?>",
        type:"POST",
        success:function(msg){
            if(msg==1){
                $("#c_"+tid).html(price);
            }
        }
    }); 
}

//更改库存
function updatekucun(tid,price){
   $("#k_"+tid).html("<input type='text' name='price' size='10' class='bor' value='"+price+"' onblur='updateckprice1(this.value,"+tid+")' />");
}
//改变库存操作
function updateckprice1(price,tid){
    $.ajax({
        data:"id="+tid+"&price="+price,
        cache:false,
        datatype:"JSON",
        url:"<?php echo U('Shop/ajax_updatekucun');?>",
        type:"POST",
        success:function(msg){
            if(msg==1){
                $("#k_"+tid).html(price);
            }
        }
    }); 
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