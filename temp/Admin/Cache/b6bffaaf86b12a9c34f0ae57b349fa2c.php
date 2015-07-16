<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <title>城市列表-后台管理-<?php echo ($systemConfig["SITE_INFO"]["name_cms"]); ?></title>
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
                                    <div class="center_r_t">您的位置：<a href="<?php echo U('Index/city');?>" class="a1">省列表</a>>>设置地区</div>
                                    <div class="center_t">
                                        <form action="" method="POST" id="form1" name="form1">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tab">

                                            <tr align="center"  class="center_t_d">
                                                <td>设置省所在地区</td>

                                                <td><select id="diqu" name="diqu">
                                                        <?php if(is_array($diqu)): $k = 0; $__LIST__ = $diqu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><option value="<?php echo ($k); ?>"><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </select></td>
                                                
                                            </tr>
                                             <tr align="center"  class="center_t_d">
                                                 
                                                 <td colspan="2">
                                                     <input type="hidden" id="id" name="id" value="<?php echo ($id); ?>" />
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
                    <script type="text/javascript">
                        $(function() {
                            //快捷启用禁用操作
                            $(".opStatus").click(function() {
                                var obj = $(this);
                                var id = $(this).parents("tr").attr("id");
                                var status = $(this).attr("val");
                                $.ajax({
                                    data: "id=" + id + "&status=" + status,
                                    url: "__URL__/opNodeStatus",
                                    dataType: "json",
                                    type: "GET",
                                    success: function(msg) {
                                        if (msg.status == 1) {
                                            alert(msg.info);
                                            var istatus;
                                            istatus = status == 1 ? 0 : 1;
                                            $(obj).attr("val", istatus).html(status == 1 ? "启用" : "禁用").parents("td").prev().prev().html(status == 1 ? "禁用" : "启用");

                                        } else {
                                            alert(msg.info);
                                        }

                                    }
                                });

                            });
                            //快捷操作推荐
                            $(".opTj").click(function() {
                                var obj = $(this);
                                var id = $(this).parents("tr").attr("id");
                                var status = $(this).attr("val");
                                $.ajax({
                                    data: "id=" + id + "&status=" + status,
                                    url: "__URL__/opTjStatus",
                                    dataType: "json",
                                    type: "GET",
                                    success: function(msg) {
                                        if (msg.status == 1) {
                                            alert(msg.info);
                                            var istatus;
                                            istatus = status == 1 ? 0 : 1;
                                            $(obj).attr("val", istatus).html(status == 1 ? "推荐" : "普通").parents("td").prev().html(status == 1 ? "普通" : "推荐");

                                        } else {
                                            alert(msg.info);
                                        }

                                    }
                                });

                            });

                            //快捷改变操作排序dblclick
                            $("tbody>tr>td[fd]").click(function() {
                                var inval = $(this).html();
                                var infd = $(this).attr("fd");
                                var inid = $(this).parents("tr").attr("id");
                                if ($(this).attr('edit') == 0) {
                                    $(this).attr('edit', '1').html("<input class='input' size='5' id='edit_" + infd + "_" + inid + "' value='" + inval + "' />").find("input").select();
                                }
                                $("#edit_" + infd + "_" + inid).focus().bind("blur", function() {
                                    var editval = $(this).val();
                                    $(this).parents("td").html(editval).attr('edit', '0');
                                    if (inval != editval) {
                                        $.post("__URL__/opSort", {id: inid, fd: infd, sort: editval});
                                    }
                                })
                            });

                            var chn = function(cid, op) {
                                if (op == "show") {
                                    $("tr[pid='" + cid + "']").each(function() {
                                        $(this).removeAttr("status").show();
                                        chn($(this).attr("id"), "show");
                                    });
                                } else {
                                    $("tr[pid='" + cid + "']").each(function() {
                                        $(this).attr("status", 1).hide();
                                        chn($(this).attr("id"), "hide");
                                    });
                                }
                            }
                            $(".tree").click(function() {
                                if ($(this).attr("status") != 1) {
                                    chn($(this).parent().attr("id"), "hide");
                                    $(this).attr("status", 1);
                                } else {
                                    chn($(this).parent().attr("id"), "show");
                                    $(this).removeAttr("status");
                                }
                            });
                        });
                    </script>