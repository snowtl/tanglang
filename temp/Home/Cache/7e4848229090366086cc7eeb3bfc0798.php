<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <title>唐亮工长俱乐部</title>
            <link rel="stylesheet" href="__PUBLIC__/web/css/main.css" type="text/css" media=" screen" />
            <link rel="stylesheet" href="__PUBLIC__/web/css/main_1.css" type="text/css" media=" screen" />
            <link href="__PUBLIC__/web/css/master.css" rel="stylesheet" type="text/css" media=" screen" />
            <link href="__PUBLIC__/web/css/stylist.css" rel="stylesheet"  type="text/css" media=" screen" />
            <script type="text/javascript" src="__PUBLIC__/web/js/jquery-1.8.2.min.js"></script>
            <script type="text/javascript" src="__PUBLIC__/web/js/js.js"></script>

    </head>
    <body>
        <div class="zi_nav">
    <div class="zi_nav_con">
        <P class="zi_nav_con_p1"><span class="zi_nav_con_span1">欢迎光临唐亮工长俱乐部！</span><span class="zi_nav_con_span2"><a href="#">登录</a><a href="#">注册</a><a href="#">帮助中心</a><i>400-6248-668</i></span></P>
    </div>
</div>
<div class="logo">
    <h1><a href="#"><img src="__PUBLIC__/web/images/index_07.png" /></a></h1>
    <P class="logo_p1"><span>北京 </span><a href="#">[ 切换 ]</a></P>
    <div class="search">
        <div class="sel">
            <span class="sel_span1">明星工场</span>
            <img src="__PUBLIC__/web/images/index_16.png" />
            <div class="hidden">
                <ul>
                    <li><span>装修案例</span></li>
                    <li><span>装修日记</span></li>
                    <li><span>品牌</span></li>
                </ul>
            </div>
        </div>
        <div class="text">
            <input type="text" value="挑选您心仪的工长"/>
        </div>
        <div class="sub">
            <input type="submit" value="" />
        </div>

    </div>
    <div class="kefu">
        <img src="__PUBLIC__/web/images/index_10.png" />
    </div>
</div>

<div class="nav">
    <div class="nav_con">	
        <ul class="nav_ul1">
            <li><a href="#">首页</a></li>
            <li><a href="#">明星工长</a></li>
            <li><a href="#">团购活动</a></li>
            <li><a href="#">建材商城</a></li>
            <li><a href="#">设计团队</a></li>
            <li><a href="#">装修图库</a></li>
            <li><a href="#">装修攻略</a></li>
            <li><a href="#">社区团装</a></li>
            <li><a href="#">装修论坛</a></li>
            <li><a href="#">惠民模式</a></li>
        </ul>
        <ul class="nav_ul2">
        	<span class="nav_ul2_span1">家居一站式服务</span>
            <li>
                <a class="nav_a1" href="#">
                    <span class="nav_s1">找装修工长</span>
                    <span class="nav_s2">唐亮工长俱乐部明星工长</span>
                </a>
            </li>
            <li>
                <a class="nav_a2" href="#">
                    <span class="nav_s1">找装修设计</span>
                    <span class="nav_s2">700位设计师</span>
                </a>
            </li>
            <li>
                <a class="nav_a3" href="#">
                    <span class="nav_s1">建材团购会</span>
                    <span class="nav_s2">省钱、省心、省力</span>
                </a>
            </li>
            <li>
                <a class="nav_a4" href="#">
                    <span class="nav_s1">找建材商家</span>
                    <span class="nav_s2">装修质量有保障</span>
                </a>
            </li>
            <li>
                <a class="nav_a5" href="#">
                    <span class="nav_s1">小区团装会</span>
                    <span class="nav_s2">13080家实力企业入驻</span>
                </a>
            </li>
            <li>
                <a class="nav_a6" href="#">
                    <span class="nav_s1">学装修知识</span>
                    <span class="nav_s2">3分钟学会装修，远离猫腻</span>
                </a>
            </li>
            <li>
                <a class="nav_a7" href="#">
                    <span class="nav_s1">看装修美图</span>
                    <span class="nav_s2">装修美图与您分享</span>
                </a>
            </li>
            <li>
                <a class="nav_a8" href="#">
                    <span class="nav_s1">实体店查询</span>
                    <span class="nav_s2">分享您的装修趣事</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="new_banner">
	<ul class="rslides f426x240">
            <?php if(is_array($adlist)): $i = 0; $__LIST__ = $adlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["link"]); ?>" title="<?php echo ($vo["title"]); ?>"><img src="<?php echo ($vo["img"]); ?>" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>
<div class="ban_out">
    <div class="ban_1">
        <ul class="ban_1_ul">
            <li><img src="__PUBLIC__/web/images/index_46.png" /></li>
            <li>
                <P><a class="ban_a1" href="#">不提点</a></P>
            </li>
            <li>
                <P><a class="ban_a2" href="#">不转包</a></P>
            </li>
            <li>
                <P><a class="ban_a3" href="#">不收取管理费</a></P>
            </li>
            <li>
                <P><a class="ban_a4" href="#">装修费用直降<span>30%</span>以上</a></P>
            </li>
        </ul>
    </div>
</div>
<div class="con1">
	<h3 class="tit"><span class="tit_s1">明星工长</span><a class="tit_s2" href="javascript:change_for();">换一组</a></h3>	
        <ul class="con1_ul" id='load_foreman'>
            <?php if(is_array($forlist)): $i = 0; $__LIST__ = $forlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <img src="<?php echo ($vo["logo"]); ?>" />
            <P class="con1_p1"><span class="con1_p1_s1"><?php echo ($vo["truename"]); ?></span><span class="con1_p1_s2">口碑值：<i><?php echo ($vo["koubei"]); ?></i></span></P>
            <P class="con2_p2"><a class="con1_p1_s3">评论<i><?php echo ($vo["comments"]); ?></i></a><a class="con1_p1_s4" href="<?php echo U('Foreman/index',array('id'=>$vo[a_id]));?>" target='_blank'>进入店铺</a></P>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <h4 class="con1_h4">装修流程  <span>装修一站式服务</span></h4>
    <P class="con2_p3"><a href="#">收房验房</a><a href="#">找明星工长</a><a href="#">量房做方案</a><a href="#">签订合同</a><a href="#">采购建材家具</a><a href="#">主体拆改</a><a href="#">水电改造</a><a href="#">瓦工施工</a><a href="#">土木工程</a><a href="#">油漆工程</a><a href="#">验收/软装</a><a href="#">搬入新家</a></P>
    <div class="con1_d1">
    	<p class="con1_d1_p1">正在施工</p>
        <ul class="con1_d1_ul1">
            
            <?php if(is_array($sgdtlist)): $i = 0; $__LIST__ = $sgdtlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["id"]); ?>"><span class="con1_d1_s1"><?php echo ($vo["riqi"]); ?> <?php echo ($vo["title"]); ?>正在...</span>           <span class="con1_d1_s2"><?php echo ($vo["nyr"]); ?></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            
        	
        </ul>
    </div>
</div>
<div class="ad">
	<img src="__PUBLIC__/web/images/index_75.png" />
</div>
<div class="con2">
	<h3 class="tit1"><span class="tit1_s1">团购活动</span><a class="tit1_s2" href="#">更多</a></h3>	
	<ul class="con2_ul">
    	<li><a href="#">
        	<img src="__PUBLIC__/web/images/t_03.png" />
            <P class="con2_p1">[即将开始]距离开团剩余时间：1天1小时30分20秒</P>
            <P class="con2_p2">海尔净水器试金第二季</P>
            <P class="con2_p4">时间：<span>1月18日(星期日) 中午11:00开始</span></P>
            <P class="con2_p4">地点：肖村桥城外诚家居建材城西南角百盈家家具</P>
        </a></li>
    	<li><a href="#">
        	<img src="__PUBLIC__/web/images/t_03.png" />
            <P class="con2_p1">[即将开始]距离开团剩余时间：1天1小时30分20秒</P>
            <P class="con2_p2">海尔净水器试金第二季</P>
            <P class="con2_p4">时间：<span>1月18日(星期日) 中午11:00开始</span></P>
            <P class="con2_p4">地点：肖村桥城外诚家居建材城西南角百盈家家具</P>
        </a></li>
    	<li><a href="#">
        	<img src="__PUBLIC__/web/images/t_03.png" />
            <P class="con2_p1">[即将开始]距离开团剩余时间：1天1小时30分20秒</P>
            <P class="con2_p2">海尔净水器试金第二季</P>
            <P class="con2_p4">时间：<span>1月18日(星期日) 中午11:00开始</span></P>
            <P class="con2_p4">地点：肖村桥城外诚家居建材城西南角百盈家家具</P>
        </a></li>
    	<li><a href="#">
        	<img src="__PUBLIC__/web/images/t_03.png" />
            <P class="con2_p1">[即将开始]距离开团剩余时间：1天1小时30分20秒</P>
            <P class="con2_p2">海尔净水器试金第二季</P>
            <P class="con2_p4">时间：<span>1月18日(星期日) 中午11:00开始</span></P>
            <P class="con2_p4">地点：肖村桥城外诚家居建材城西南角百盈家家具</P>
        </a></li>
    </ul>
        <P class="con2_p5"><span><img src="__PUBLIC__/web/images/con2_07.png" /></span><span><img src="__PUBLIC__/web/images/con2_09.png" /></span><span><img src="__PUBLIC__/web/images/con2_11.png" /></span><span><img src="__PUBLIC__/web/images/con2_13.png" /></span><span><img src="__PUBLIC__/web/images/con2_15.png" /></span><span><img src="__PUBLIC__/web/images/con2_17.png" /></span></P>
</div>
<div class="con2">
	<h3 class="tit1"><span class="tit1_s1">建材商城</span></h3>	
	<div class="con2_d1">
    	<h3>厨卫类</h3>
    	<p><a href="#"><img src="__PUBLIC__/web/images/a1.png" /><i>橱柜</i></a><a href="#"><img src="__PUBLIC__/web/images/a2.png" /><i>卫浴</i></a><a href="#"><img src="__PUBLIC__/web/images/a3.png" /><i>烟机</i></a><a href="#"><img src="__PUBLIC__/web/images/a4.png" /><i>热水器</i></a><a href="#"><img src="__PUBLIC__/web/images/a5.png" /><i>水槽</i></a><a href="#"><img src="__PUBLIC__/web/images/a6.png" /><i>沐浴房</i></a></p>
    </div>
	<div class="con2_d1">
    	<h3>墙/地面</h3>
    	<p><a href="#"><img src="__PUBLIC__/web/images/a7.png" /><i>吊顶</i></a><a href="#"><img src="__PUBLIC__/web/images/a8.png" /><i>地板</i></a><a href="#"><img src="__PUBLIC__/web/images/a9.png" /><i>瓷砖</i></a><a href="#"><img src="__PUBLIC__/web/images/a10.png" /><i>壁纸</i></a><a href="#"><img src="__PUBLIC__/web/images/a11.png" /><i>油漆涂料</i></a><a href="#"><img src="__PUBLIC__/web/images/a12.png" /><i>硅藻泥</i></a></p>
    </div>
	<div class="con2_d1">
    	<h3>水/电/气</h3>
    	<p><a href="#"><img src="__PUBLIC__/web/images/a13.png" /><i>水电改造</i></a><a href="#"><img src="__PUBLIC__/web/images/a14.png" /><i>开关/电源</i></a><a href="#"><img src="__PUBLIC__/web/images/a15.png" /><i>散热器</i></a><a href="#"><img src="__PUBLIC__/web/images/a16.png" /><i>净水器</i></a></p>
    </div>
	<div class="con2_d1">
    	<h3>门窗类</h3>
    	<p><a href="#"><img src="__PUBLIC__/web/images/a17.png" /><i>木门</i></a><a href="#"><img src="__PUBLIC__/web/images/a18.png" /><i>门窗</i></a><a href="#"><img src="__PUBLIC__/web/images/a19.png" /><i>防盗门</i></a><a href="#"><img src="__PUBLIC__/web/images/a20.png" /><i>推拉门</i></a><a href="#"><img src="__PUBLIC__/web/images/a21.png" /><i>窗帘</i></a></p>
    </div>
	<div class="con2_d1">
    	<h3>定制材料类</h3>
    	<p><a href="#"><img src="__PUBLIC__/web/images/a22.png" /><i>衣柜</i></a><a href="#"><img src="__PUBLIC__/web/images/a23.png" /><i>榻榻米</i></a><a href="#"><img src="__PUBLIC__/web/images/a24.png" /><i>楼梯</i></a></p>
    </div>
	<div class="con2_d1">
    	<h3>家具类</h3>
    	<p><a href="#"><img src="__PUBLIC__/web/images/a25.png" /><i>沙发</i></a><a href="#"><img src="__PUBLIC__/web/images/a26.png" /><i>软床</i></a><a href="#"><img src="__PUBLIC__/web/images/a27.png" /><i>床垫</i></a><a href="#"><img src="__PUBLIC__/web/images/a28.png" /><i>实木家具</i></a><a href="#"><img src="__PUBLIC__/web/images/a29.png" /><i>板式家具</i></a><a href="#"><img src="__PUBLIC__/web/images/a30.png" /><i>板木结合</i></a><a href="#"><img src="__PUBLIC__/web/images/a31.png" /><i>儿童家具</i></a><a href="#"><img src="__PUBLIC__/web/images/a32.png" /><i>定制家具</i></a></p>
    </div>
</div>
<div class="zc">
    <h4 class="tit2"><span class="tit2_s1">团购活动</span><a class="tit2_s2" href="#">更多</a></h4>	
    <P class="zc_p1"><a href="#"><img src="__PUBLIC__/web/images/hz_49.png" /><i>toto</i></a><a href="#"><img src="__PUBLIC__/web/images/hz_51.png" /><i>澳斯曼卫浴</i></a><a href="#"><img src="__PUBLIC__/web/images/hz_53.png" /><i>帝王洁具</i></a><a href="#"><img src="__PUBLIC__/web/images/hz_55.png" /><i>朗斯灌浴房</i></a><a href="#"><img src="__PUBLIC__/web/images/hz_57.png" /><i>瑝玛卫浴</i></a><a href="#"><img src="__PUBLIC__/web/images/hz_59.png" /><i>汉斯格雅</i></a><a href="#"><img src="__PUBLIC__/web/images/hz_61.png" /><i>ROCA</i></a><a href="#"><img src="__PUBLIC__/web/images/hz_63.png" /><i>心海咖蓝</i></a></P>
</div>
<div class="con3">
	<h3 class="tit1"><span class="tit1_s1">社区团装</span><a class="tit1_s2" href="#">更多</a></h3>
    <ul class="con3_ul">
    	<li>
        	<img src="__PUBLIC__/web/images/index_181.png" />
            <p class="con3_p0"><img src="__PUBLIC__/web/images/top_187.png" /></p>
            <P class="con3_p1"><span>【品院】</span>享正常优惠再送油烟机灶具一套</P>
            <P class="con3_p2"><span>立省<i>3000</i>元</span><a href="#">立即参加</a></P>
            <P class="con3_p3"><span class="con3_s1">倒计时 2天4小时5分钟</span><span class="con3_s2">48人已参团</span></P>
        </li>
    	<li>
        	<img src="__PUBLIC__/web/images/index_181.png" />
            <P class="con3_p1"><span>【品院】</span>享正常优惠再送油烟机灶具一套</P>
            <P class="con3_p2"><span>立省<i>3000</i>元</span><a href="#">立即参加</a></P>
            <P class="con3_p3"><span class="con3_s1">倒计时 2天4小时5分钟</span><span class="con3_s2">48人已参团</span></P>
        </li>
    	<li>
        	<img src="__PUBLIC__/web/images/index_181.png" />
            <P class="con3_p1"><span>【品院】</span>享正常优惠再送油烟机灶具一套</P>
            <P class="con3_p2"><span>立省<i>3000</i>元</span><a href="#">立即参加</a></P>
            <P class="con3_p3"><span class="con3_s1">倒计时 2天4小时5分钟</span><span class="con3_s2">48人已参团</span></P>
        </li>
    	<li>
        	<img src="__PUBLIC__/web/images/index_181.png" />
            <P class="con3_p1"><span>【品院】</span>享正常优惠再送油烟机灶具一套</P>
            <P class="con3_p2"><span>立省<i>3000</i>元</span><a href="#">立即参加</a></P>
            <P class="con3_p3"><span class="con3_s1">倒计时 2天4小时5分钟</span><span class="con3_s2">48人已参团</span></P>
        </li>
    </ul>	
</div>
<div class="ad">
	<img src="__PUBLIC__/web/images/index_191.png" />
</div>
<div class="con4">
	<h3 class="tit1"><span class="tit1_s1">装修美图</span><span class="tit1_s3"><a href="#">卧室</a> | <a href="#">客厅</a> | <a href="#">卫生间</a> | <a href="#">厨房</a> | <a href="#">玄关</a> | <a href="#">书房</a> | <a href="#">餐厅</a> | <a href="#">阳台</a> | <a href="#">衣帽间</a> | <a href="#">儿童房</a> | <a href="#">娱乐室</a></span></h3>
    <h4 class="con4_h4"><span class="con4_cur">空间</span><span>风格</span><span>户型</span><span>局部</span><span>色系</span></h4>
    <ul class="con4_ul" >
    	<li style="height:180px"><a href="#">
        	<img src="__PUBLIC__/web/images/tu_06.png" />
            <P class="con4_p1">田园风格家装小客厅装修效果图</P>
        </a></li>
    	<li style="height:360px;"><a href="#">
        	<img src="__PUBLIC__/web/images/tu_03.png" />
            <P class="con4_p1">田园风格家装小客厅装修效果图</P>
        </a></li>
    	<li style="height:360px;"><a href="#">
        	<img src="__PUBLIC__/web/images/tu_03.png" />
            <P class="con4_p1">田园风格家装小客厅装修效果图</P>
        </a></li>
    	<li style="height:180px"><a href="#">
        	<img src="__PUBLIC__/web/images/tu_06.png" />
            <P class="con4_p1">田园风格家装小客厅装修效果图</P>
        </a></li>
    	<li style="height:180px"><a href="#">
        	<img src="__PUBLIC__/web/images/tu_06.png" />
            <P class="con4_p1">田园风格家装小客厅装修效果图</P>
        </a></li>
    	<li style="height:360px;"><a href="#">
        	<img src="__PUBLIC__/web/images/tu_03.png" />
            <P class="con4_p1">田园风格家装小客厅装修效果图</P>
        </a></li>
    	<li style="height:360px;"><a href="#">
        	<img src="__PUBLIC__/web/images/tu_03.png" />
            <P class="con4_p1">田园风格家装小客厅装修效果图</P>
        </a></li>
    	<li style="height:180px"><a href="#">
        	<img src="__PUBLIC__/web/images/tu_06.png" />
            <P class="con4_p1">田园风格家装小客厅装修效果图</P>
        </a></li>
    </ul>
    <ul style="display:none;" class="con4_ul" >
    	<li style="height:180px"><a href="#">
        	<img src="__PUBLIC__/web/images/tu_06.png" />
            <P class="con4_p1">田园风格家装小客厅装修效果图</P>
        </a></li>
    	<li style="height:180px"><a href="#">
        	<img src="__PUBLIC__/web/images/tu_06.png" />
            <P class="con4_p1">田园风格家装小客厅装修效果图</P>
        </a></li>
    	<li style="height:360px;"><a href="#">
        	<img src="__PUBLIC__/web/images/tu_03.png" />
            <P class="con4_p1">田园风格家装小客厅装修效果图</P>
        </a></li>
    	<li style="height:360px;"><a href="#">
        	<img src="__PUBLIC__/web/images/tu_03.png" />
            <P class="con4_p1">田园风格家装小客厅装修效果图</P>
        </a></li>
    	<li style="height:180px"><a href="#">
        	<img src="__PUBLIC__/web/images/tu_06.png" />
            <P class="con4_p1">田园风格家装小客厅装修效果图</P>
        </a></li>
    </ul>
    <ul style="display:none;" class="con4_ul" >
    	<li style="height:180px"><a href="#">
        	<img src="__PUBLIC__/web/images/tu_06.png" />
            <P class="con4_p1">田园风格家装小客厅装修效果图</P>
        </a></li>
    	<li style="height:360px;"><a href="#">
        	<img src="__PUBLIC__/web/images/tu_03.png" />
            <P class="con4_p1">田园风格家装小客厅装修效果图</P>
        </a></li>
    	<li style="height:360px;"><a href="#">
        	<img src="__PUBLIC__/web/images/tu_03.png" />
            <P class="con4_p1">田园风格家装小客厅装修效果图</P>
        </a></li>
    	<li style="height:180px"><a href="#">
        	<img src="__PUBLIC__/web/images/tu_06.png" />
            <P class="con4_p1">田园风格家装小客厅装修效果图</P>
        </a></li>
    	<li style="height:180px"><a href="#">
        	<img src="__PUBLIC__/web/images/tu_06.png" />
            <P class="con4_p1">田园风格家装小客厅装修效果图</P>
        </a></li>
    	<li style="height:360px;"><a href="#">
        	<img src="__PUBLIC__/web/images/tu_03.png" />
            <P class="con4_p1">田园风格家装小客厅装修效果图</P>
        </a></li>
    </ul>
    <ul style="display:none;" class="con4_ul" >
    	<li style="height:180px"><a href="#">
        	<img src="__PUBLIC__/web/images/tu_06.png" />
            <P class="con4_p1">田园风格家装小客厅装修效果图</P>
        </a></li>
    	<li style="height:360px;"><a href="#">
        	<img src="__PUBLIC__/web/images/tu_03.png" />
            <P class="con4_p1">田园风格家装小客厅装修效果图</P>
        </a></li>
    	<li style="height:360px;"><a href="#">
        	<img src="__PUBLIC__/web/images/tu_03.png" />
            <P class="con4_p1">田园风格家装小客厅装修效果图</P>
        </a></li>
    	<li style="height:180px"><a href="#">
        	<img src="__PUBLIC__/web/images/tu_06.png" />
            <P class="con4_p1">田园风格家装小客厅装修效果图</P>
        </a></li>
    </ul>
    <ul style="display:none;" class="con4_ul">
    	<li style="height:180px"><a href="#">
        	<img src="__PUBLIC__/web/images/tu_06.png" />
            <P class="con4_p1">田园风格家装小客厅装修效果图</P>
        </a></li>
    	<li style="height:360px;"><a href="#">
        	<img src="__PUBLIC__/web/images/tu_03.png" />
            <P class="con4_p1">田园风格家装小客厅装修效果图</P>
        </a></li>
    </ul>
</div>
<div class="con5">
	<h3 class="tit1"><span class="tit1_s1">设计师团队</span><a class="tit1_s2" href="#">更多</a></h3>	
	<ul class="con5_ul">
    	<li>
        	<img src="__PUBLIC__/web/images/sj_03.png" />
            <div>
            	<P class="con5_p1"><span>李天</span>（优秀设计师）</P>
                <P class="con5_p2">设计理念：</P>
                <P class="con5_p3">好的设计理念至关重要，它不仅是设计的精髓所在，而且能令作品具有个性化、专业化和与众不同的效果</P>
                <P class="con5_p4"><a href="#">预约设计师</a></P>
            </div>
        </li>
    	<li>
        	<img src="__PUBLIC__/web/images/sj_03.png" />
            <div>
            	<P class="con5_p1"><span>李天</span>（优秀设计师）</P>
                <P class="con5_p2">设计理念：</P>
                <P class="con5_p3">好的设计理念至关重要，它不仅是设计的精髓所在，而且能令作品具有个性化、专业化和与众不同的效果</P>
                <P class="con5_p4"><a href="#">预约设计师</a></P>
            </div>
        </li>
    	<li>
        	<img src="__PUBLIC__/web/images/sj_03.png" />
            <div>
            	<P class="con5_p1"><span>李天</span>（优秀设计师）</P>
                <P class="con5_p2">设计理念：</P>
                <P class="con5_p3">好的设计理念至关重要，它不仅是设计的精髓所在，而且能令作品具有个性化、专业化和与众不同的效果</P>
                <P class="con5_p4"><a href="#">预约设计师</a></P>
            </div>
        </li>
    	<li>
        	<img src="__PUBLIC__/web/images/sj_03.png" />
            <div>
            	<P class="con5_p1"><span>李天</span>（优秀设计师）</P>
                <P class="con5_p2">设计理念：</P>
                <P class="con5_p3">好的设计理念至关重要，它不仅是设计的精髓所在，而且能令作品具有个性化、专业化和与众不同的效果</P>
                <P class="con5_p4"><a href="#">预约设计师</a></P>
            </div>
        </li>
    	<li>
        	<img src="__PUBLIC__/web/images/sj_03.png" />
            <div>
            	<P class="con5_p1"><span>李天</span>（优秀设计师）</P>
                <P class="con5_p2">设计理念：</P>
                <P class="con5_p3">好的设计理念至关重要，它不仅是设计的精髓所在，而且能令作品具有个性化、专业化和与众不同的效果</P>
                <P class="con5_p4"><a href="#">预约设计师</a></P>
            </div>
        </li>
    	<li>
        	<img src="__PUBLIC__/web/images/sj_03.png" />
            <div>
            	<P class="con5_p1"><span>李天</span>（优秀设计师）</P>
                <P class="con5_p2">设计理念：</P>
                <P class="con5_p3">好的设计理念至关重要，它不仅是设计的精髓所在，而且能令作品具有个性化、专业化和与众不同的效果</P>
                <P class="con5_p4"><a href="#">预约设计师</a></P>
            </div>
        </li>
    </ul>



</div>
<div class="ad">
	<img src="__PUBLIC__/web/images/index_191.png" />
</div>
<div class="con6">
	<h3 class="tit1"><span class="tit1_s1">装修攻略</span></h3>
    <h4 class="con6_h4"><span class="con6_cur">行业资讯</span><span>装修日记</span><span>装修图库</span><span>装修咨询</span><span>装修风水</span><span>装修视频</span></h4>
	<div class="con6_d1">
    	<ul class="con6_ul1">
        	<li>
            	<img src="__PUBLIC__/web/images/zx_03.png" />
                <P class="con6_p1">专家教你装修除甲醛妙招</P>
                <P class="con6_p2">家庭装修监理流程是在整个装修贯穿的过程，其实你选择不同的家装监理公司那么他上的内不同...</P>
            </li>
        	<li>
            	<img src="__PUBLIC__/web/images/zx_03.png" />
                <P class="con6_p1">专家教你装修除甲醛妙招</P>
                <P class="con6_p2">家庭装修监理流程是在整个装修贯穿的过程，其实你选择不同的家装监理公司那么他上的内不同...</P>
            </li>
        	<li>
            	<img src="__PUBLIC__/web/images/zx_03.png" />
                <P class="con6_p1">专家教你装修除甲醛妙招</P>
                <P class="con6_p2">家庭装修监理流程是在整个装修贯穿的过程，其实你选择不同的家装监理公司那么他上的内不同...</P>
            </li>
        </ul>
    	<ul class="con6_ul2">
        	<li><a href="#">冬季装修小细节 必须做好四大注意事项</a></li>
            <li><a href="#">冬季装修小细节 必须做好注意事项</a></li>
            <li><a href="#">冬季装修小细节 必须做好四项</a></li>
            <li><a href="#">冬季装修小细节 必须做好四大注意事项</a></li>
            <li><a href="#">冬季装修小细节 必须做好项</a></li>
            <li><a href="#">冬季装修小细节 必须做好四注意事项</a></li>
            <li><a href="#">冬季装修小细节 必须做好四大注意事项</a></li>
            <li><a href="#">冬季装修小细节 必须做好意事项</a></li>
        </ul>
    </div>
	<div class="con6_d1" style="display:none;">
    	<ul class="con6_ul1">
        	<li>
            	<img src="__PUBLIC__/web/images/zx_03.png" />
                <P class="con6_p1">专家教你装修除甲醛妙招</P>
                <P class="con6_p2">家庭装修监理流程是在整个装修贯穿的过程，其实你选择不同的家装监理公司那么他上的内不同...</P>
            </li>
        	<li>
            	<img src="__PUBLIC__/web/images/zx_03.png" />
                <P class="con6_p1">专家教你装修除甲醛妙招</P>
                <P class="con6_p2">家庭装修监理流程是在整个装修贯穿的过程，其实你选择不同的家装监理公司那么他上的内不同...</P>
            </li>
        	<li>
            	<img src="__PUBLIC__/web/images/zx_03.png" />
                <P class="con6_p1">专家教你装修除甲醛妙招</P>
                <P class="con6_p2">家庭装修监理流程是在整个装修贯穿的过程，其实你选择不同的家装监理公司那么他上的内不同...</P>
            </li>
        </ul>
    	<ul class="con6_ul2">
        	<li><a href="#">冬季装修小细节 必须做好四大注意事项</a></li>
            <li><a href="#">冬季装修小细节 必须做好注意事项</a></li>
            <li><a href="#">冬季装修小细节 必须做好项</a></li>
            <li><a href="#">冬季装修小细节 必须做好四注意事项</a></li>
            <li><a href="#">冬季装修小细节 必须做好四大注意事项</a></li>
            <li><a href="#">冬季装修小细节 必须做好意事项</a></li>
        </ul>
    </div>
	<div class="con6_d1" style="display:none;">
    	<ul class="con6_ul1">
        	<li>
            	<img src="__PUBLIC__/web/images/zx_03.png" />
                <P class="con6_p1">专家教你装修除甲醛妙招</P>
                <P class="con6_p2">家庭装修监理流程是在整个装修贯穿的过程，其实你选择不同的家装监理公司那么他上的内不同...</P>
            </li>
        	<li>
            	<img src="__PUBLIC__/web/images/zx_03.png" />
                <P class="con6_p1">专家教你装修除甲醛妙招</P>
                <P class="con6_p2">家庭装修监理流程是在整个装修贯穿的过程，其实你选择不同的家装监理公司那么他上的内不同...</P>
            </li>
        	<li>
            	<img src="__PUBLIC__/web/images/zx_03.png" />
                <P class="con6_p1">专家教你装修除甲醛妙招</P>
                <P class="con6_p2">家庭装修监理流程是在整个装修贯穿的过程，其实你选择不同的家装监理公司那么他上的内不同...</P>
            </li>
        </ul>
    	<ul class="con6_ul2">
        	<li><a href="#">冬季装修小细节 必须做好四大注意事项</a></li>
            <li><a href="#">冬季装修小细节 必须做好注意事项</a></li>
            <li><a href="#">冬季装修小细节 必须做好四注意事项</a></li>
            <li><a href="#">冬季装修小细节 必须做好四大注意事项</a></li>
            <li><a href="#">冬季装修小细节 必须做好意事项</a></li>
        </ul>
    </div>
	<div class="con6_d1" style="display:none;">
    	<ul class="con6_ul1">
        	<li>
            	<img src="__PUBLIC__/web/images/zx_03.png" />
                <P class="con6_p1">专家教你装修除甲醛妙招</P>
                <P class="con6_p2">家庭装修监理流程是在整个装修贯穿的过程，其实你选择不同的家装监理公司那么他上的内不同...</P>
            </li>
        	<li>
            	<img src="__PUBLIC__/web/images/zx_03.png" />
                <P class="con6_p1">专家教你装修除甲醛妙招</P>
                <P class="con6_p2">家庭装修监理流程是在整个装修贯穿的过程，其实你选择不同的家装监理公司那么他上的内不同...</P>
            </li>
        	<li>
            	<img src="__PUBLIC__/web/images/zx_03.png" />
                <P class="con6_p1">专家教你装修除甲醛妙招</P>
                <P class="con6_p2">家庭装修监理流程是在整个装修贯穿的过程，其实你选择不同的家装监理公司那么他上的内不同...</P>
            </li>
        </ul>
    	<ul class="con6_ul2">
        	<li><a href="#">冬季装修小细节 必须做好四大注意事项</a></li>
            <li><a href="#">冬季装修小细节 必须做好项</a></li>
            <li><a href="#">冬季装修小细节 必须做好四注意事项</a></li>
            <li><a href="#">冬季装修小细节 必须做好四大注意事项</a></li>
            <li><a href="#">冬季装修小细节 必须做好意事项</a></li>
        </ul>
    </div>
	<div class="con6_d1" style="display:none;">
    	<ul class="con6_ul1">
        	<li>
            	<img src="__PUBLIC__/web/images/zx_03.png" />
                <P class="con6_p1">专家教你装修除甲醛妙招</P>
                <P class="con6_p2">家庭装修监理流程是在整个装修贯穿的过程，其实你选择不同的家装监理公司那么他上的内不同...</P>
            </li>
        	<li>
            	<img src="__PUBLIC__/web/images/zx_03.png" />
                <P class="con6_p1">专家教你装修除甲醛妙招</P>
                <P class="con6_p2">家庭装修监理流程是在整个装修贯穿的过程，其实你选择不同的家装监理公司那么他上的内不同...</P>
            </li>
        	<li>
            	<img src="__PUBLIC__/web/images/zx_03.png" />
                <P class="con6_p1">专家教你装修除甲醛妙招</P>
                <P class="con6_p2">家庭装修监理流程是在整个装修贯穿的过程，其实你选择不同的家装监理公司那么他上的内不同...</P>
            </li>
        </ul>
    	<ul class="con6_ul2">
        	<li><a href="#">冬季装修小细节 必须做好四大注意事项</a></li>
            <li><a href="#">冬季装修小细节 必须做好注意事项</a></li>
            <li><a href="#">冬季装修小细节 必须做好四项</a></li>
            <li><a href="#">冬季装修小细节 必须做好四注意事项</a></li>
            <li><a href="#">冬季装修小细节 必须做好四大注意事项</a></li>
            <li><a href="#">冬季装修小细节 必须做好意事项</a></li>
        </ul>
    </div>
	<div class="con6_d1" style="display:none;">
    	<ul class="con6_ul1">
        	<li>
            	<img src="__PUBLIC__/web/images/zx_03.png" />
                <P class="con6_p1">专家教你装修除甲醛妙招</P>
                <P class="con6_p2">家庭装修监理流程是在整个装修贯穿的过程，其实你选择不同的家装监理公司那么他上的内不同...</P>
            </li>
        	<li>
            	<img src="__PUBLIC__/web/images/zx_03.png" />
                <P class="con6_p1">专家教你装修除甲醛妙招</P>
                <P class="con6_p2">家庭装修监理流程是在整个装修贯穿的过程，其实你选择不同的家装监理公司那么他上的内不同...</P>
            </li>
        	<li>
            	<img src="__PUBLIC__/web/images/zx_03.png" />
                <P class="con6_p1">专家教你装修除甲醛妙招</P>
                <P class="con6_p2">家庭装修监理流程是在整个装修贯穿的过程，其实你选择不同的家装监理公司那么他上的内不同...</P>
            </li>
        </ul>
    	<ul class="con6_ul2">
        	<li><a href="#">冬季装修小细节 必须做好四大注意事项</a></li>
            <li><a href="#">冬季装修小细节 必须做好注意事项</a></li>
            <li><a href="#">冬季装修小细节 必须做好四项</a></li>
            <li><a href="#">冬季装修小细节 必须做好项</a></li>
            <li><a href="#">冬季装修小细节 必须做好四注意事项</a></li>
            <li><a href="#">冬季装修小细节 必须做好四大注意事项</a></li>
            <li><a href="#">冬季装修小细节 必须做好意事项</a></li>
        </ul>
    </div>
</div>
<div class="con7">
	<h3 class="tit1"><span class="tit1_s1">装修论坛</span></h3>
    <h4 class="con7_h4"><span class="con7_cur">全部</span><span>装修日记</span><span>装修知识</span><span>装修设计</span><span>装修咨询</span><span>互助验收</span><span>活动专区</span><span>晒单点评</span><span>投诉表扬</span><span>行政天下</span><span>灌水专区</span></h4>
	<ul class="con7_ul">
    	<li><a href="#">【<i class="con6_i2">装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
        <li><a href="#">【<i>装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
        <li><a href="#">【<i>装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
        <li><a href="#">【<i class="con6_i1">装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>3235</i></span></a></li>
        <li><a href="#">【<i>装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
        <li><a href="#">【<i>装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
        <li><a href="#">【<i>装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
        <li><a href="#">【<i class="con6_i1">装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
        <li><a href="#">【<i>装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
        <li><a href="#">【<i class="con6_i2">装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
        <li><a href="#">【<i>装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
        <li><a href="#">【<i class="con6_i3">装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
        <li><a href="#">【<i>装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
        <li><a href="#">【<i class="con6_i3">装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
    </ul>
	<ul style="display:none" class="con7_ul">
    	<li><a href="#">【<i class="con6_i2">装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
        <li><a href="#">【<i>装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
    </ul>
	<ul style="display:none" class="con7_ul">
    	<li><a href="#">【<i class="con6_i2">装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
    </ul>
	<ul style="display:none" class="con7_ul">
    	<li><a href="#">【<i class="con6_i2">装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
        <li><a href="#">【<i>装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
    </ul>
	<ul style="display:none" class="con7_ul">
    	<li><a href="#">【<i class="con6_i2">装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
        <li><a href="#">【<i>装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
    </ul>
	<ul style="display:none" class="con7_ul">
    	<li><a href="#">【<i class="con6_i2">装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
    </ul>
	<ul style="display:none" class="con7_ul">
    	<li><a href="#">【<i class="con6_i2">装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
    </ul>
	<ul style="display:none" class="con7_ul">
    	<li><a href="#">【<i class="con6_i2">装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
        <li><a href="#">【<i>装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
    </ul>
	<ul style="display:none" class="con7_ul">
    	<li><a href="#">【<i class="con6_i2">装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
    </ul>
	<ul style="display:none" class="con7_ul">
    	<li><a href="#">【<i class="con6_i2">装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
        <li><a href="#">【<i>装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
    </ul>
	<ul style="display:none" class="con7_ul">
    	<li><a href="#">【<i class="con6_i2">装修日记</i>】2015年度“卫郎将”首届装修日记大赛            <span>点击<i>5</i></span></a></li>
    </ul>
</div>
<div class="ad">
	<img src="__PUBLIC__/web/images/index_191.png" />
</div>
<div class="con8">
	<h3 class="tit1"><span class="tit1_s1">活动回顾</span><a class="tit1_s2" href="#">更多</a></h3>
	<ul class="con8_ul">
    	<li>
        	<img src="__PUBLIC__/web/images/xs_03.png" />
            <P class="con8_p0"><a href="#">立即查看</a></P>
            <P class="con8_p00"></P>
            <P class="con8_p1">海尔净水器试金第二季</P>
            <P class="con8_p2">1月18日(星期日)肖村桥城外诚家居建材城西南</P>
        </li>
    	<li>
        	<img src="__PUBLIC__/web/images/xs_03.png" />
            <P class="con8_p0"><a href="#">立即查看</a></P>
            <P class="con8_p00"></P>
            <P class="con8_p1">海尔净水器试金第二季</P>
            <P class="con8_p2">1月18日(星期日)肖村桥城外诚家居建材城西南</P>
        </li>
    	<li>
        	<img src="__PUBLIC__/web/images/xs_03.png" />
            <P class="con8_p0"><a href="#">立即查看</a></P>
            <P class="con8_p00"></P>
            <P class="con8_p1">海尔净水器试金第二季</P>
            <P class="con8_p2">1月18日(星期日)肖村桥城外诚家居建材城西南</P>
        </li>
    	<li>
        	<img src="__PUBLIC__/web/images/xs_03.png" />
            <P class="con8_p0"><a href="#">立即查看</a></P>
            <P class="con8_p00"></P>
            <P class="con8_p1">海尔净水器试金第二季</P>
            <P class="con8_p2">1月18日(星期日)肖村桥城外诚家居建材城西南</P>
        </li>
    </ul>

</div>
<div class="con9">
	<h3 class="tit1"><span class="tit1_s1">实体店铺</span><a class="tit1_s2" href="#">更多</a></h3>
	<ul class="con9_ul">
    	<li>
        	<img src="__PUBLIC__/web/images/index_181.png" />
            <P class="con9_p0"><a href="#">立即查看</a></P>
            <P class="con9_p00"></P>
            <P class="con9_p1">泰州海陵区实体店</P>
            <P class="con9_p2">0523-86056123</P>
            <P class="con9_p3">江苏省泰州市春晖路同济家园</P>
        </li>
    	<li>
        	<img src="__PUBLIC__/web/images/index_181.png" />
            <P class="con9_p0"><a href="#">立即查看</a></P>
            <P class="con9_p00"></P>
            <P class="con9_p1">泰州海陵区实体店</P>
            <P class="con9_p2">0523-86056123</P>
            <P class="con9_p3">江苏省泰州市春晖路同济家园</P>
        </li>
    	<li>
        	<img src="__PUBLIC__/web/images/index_181.png" />
            <P class="con9_p0"><a href="#">立即查看</a></P>
            <P class="con9_p00"></P>
            <P class="con9_p1">泰州海陵区实体店</P>
            <P class="con9_p2">0523-86056123</P>
            <P class="con9_p3">江苏省泰州市春晖路同济家园</P>
        </li>
    	<li>
        	<img src="__PUBLIC__/web/images/index_181.png" />
            <P class="con9_p0"><a href="#">立即查看</a></P>
            <P class="con9_p00"></P>
            <P class="con9_p1">泰州海陵区实体店</P>
            <P class="con9_p2">0523-86056123</P>
            <P class="con9_p3">江苏省泰州市春晖路同济家园</P>
        </li>
    </ul>

</div>
<div class="con10">
	<h3 class="tit1"><span class="tit1_s1">视频学习</span><a class="tit1_s2" href="#">更多</a></h3>
    <ul class="con10_ul">
    	<li>
        	<img class="con10_img" src="__PUBLIC__/web/images/sp_03.png" />
            <P class="con10_p1"><img src="__PUBLIC__/web/images/b_03.png" /></P>
            <P class="con10_p2">装修学堂之空气净化器常识与选择江苏省泰州市春晖路同济家园</P>
            <P class="con10_p3"><a href="#">立即播放</a></P>
        </li>
    	<li>
        	<img class="con10_img" src="__PUBLIC__/web/images/sp_03.png" />
            <P class="con10_p1"><img src="__PUBLIC__/web/images/b_03.png" /></P>
            <P class="con10_p2">装修学堂之空气净化器常识与选择江苏省泰州市春晖路同济家园</P>
            <P class="con10_p3"><a href="#">立即播放</a></P>
        </li>
    	<li>
        	<img class="con10_img" src="__PUBLIC__/web/images/sp_03.png" />
            <P class="con10_p1"><img src="__PUBLIC__/web/images/b_03.png" /></P>
            <P class="con10_p2">装修学堂之空气净化器常识与选择江苏省泰州市春晖路同济家园</P>
            <P class="con10_p3"><a href="#">立即播放</a></P>
        </li>
    	<li>
        	<img class="con10_img" src="__PUBLIC__/web/images/sp_03.png" />
            <P class="con10_p1"><img src="__PUBLIC__/web/images/b_03.png" /></P>
            <P class="con10_p2">装修学堂之空气净化器常识与选择江苏省泰州市春晖路同济家园</P>
            <P class="con10_p3"><a href="#">立即播放</a></P>
        </li>
    </ul>
    
    
</div>
<div class="ad">
	<img src="__PUBLIC__/web/images/index_75.png" />
</div>
        
        
        
        
        <!--底部start-->
        <div class="footer">
    <div class="f_nav">
        <div class="master_warp">
            <div class="f_nav_l">
                <img src="__PUBLIC__/web/images/master_5.png" class="m-t-10" />
                <span><img src="__PUBLIC__/web/images/master_8.png" /><a href="">不提点</a></span>
                <span><img src="__PUBLIC__/web/images/master_9.png" /><a href="">不转包</a></span>
                <span><img src="__PUBLIC__/web/images/master_10.png" /><a href="">不收取管理费</a></span>
                <span><img src="__PUBLIC__/web/images/master_11.png" /><a href="">省去中间环节</a></span>
                <span class="w_s"><img src="__PUBLIC__/web/images/master_12.png" /><a href="">装修费用直降30%以上</a></span>
            </div>
            <div class="f_nav_l m-l-30">
                <img src="__PUBLIC__/web/images/master_6.png" class="m-t-10" />
                <span><img src="__PUBLIC__/web/images/master_13.png" /><a href="">100%正品保障</a></span>
                <span><img src="__PUBLIC__/web/images/master_12.png" /><a href="">30天调补差价</a></span>
                <span><img src="__PUBLIC__/web/images/master_14.png" /><a href="">质保金先行赔付</a></span>
                <span><img src="__PUBLIC__/web/images/master_15.png" /><a href="">90天退换货</a></span>
                <span class="w_s"><img src="__PUBLIC__/web/images/master_16.png" /><a href="">7X24小时客服</a></span>
            </div>
            <div class="f_nav_l m-l-30">
                <img src="__PUBLIC__/web/images/master_7.png" class="m-t-10" />
                <span><img src="__PUBLIC__/web/images/master_17.png" /><a href="">统一售后服务</a></span>
                <span><img src="__PUBLIC__/web/images/master_18.png" /><a href="">辅料统一品牌配送</a></span>
                <span><img src="__PUBLIC__/web/images/master_19.png" /><a href="">施工统一监管</a></span>
                <span><img src="__PUBLIC__/web/images/master_20.png" /><a href="">投诉极速响应机制</a></span>
                <span class="w_s"><img src="__PUBLIC__/web/images/master_21.png" /><a href="">工长与客户一对一服务</a></span>
            </div>
        </div>
    </div>
    <!--b_nav-->
    <div class="b_nav">
        <a href="">关于我们</a><a href="">联系我们</a><a href="">企业文化</a><a href="">招商加盟</a><a href="">友情链接</a><a href="">网站地图</a><a href="">帮助中心</a><a href="">返回首页</a>
    </div>
    <div class="master_warp foot">
        <a href=""><img src="__PUBLIC__/web/images/tl.png" class=" m-t-15" /></a>
        <div class="foot_link  m-l-30">
            <h3>友情链接</h3>
            <a href="">家居加盟</a><a href="">铝合金门窗</a><a href="">福州房产网</a><a href="">武汉装修网</a><a href="">贵阳装饰公司</a><a href="">青岛装修</a><a href="">阜阳装修公司</a><a href="">北京家居网</a><a href="">西安房产网</a><a href="">艺得力诚装饰</a><a href="">北京二手房网</a>     
        </div>
        <a href=""><img src="__PUBLIC__/web/images/wb.png" /></a>
        <a href=""><img src="__PUBLIC__/web/images/wx.png" /></a>
        <a href=""><img src="__PUBLIC__/web/images/tm.png" /></a>
    </div>
    <div class="master_warp">
        <div class="l line-30"><span class="color_999 font-12">全国统一客服热线：</span><span class="color_f">4006248668</span></div>
        <div class="r color_999 font-12 line-30">Copyright © 2003-2010 tlgzjlb.com All Right Reserved. <span class="color_333">唐亮工长俱乐部</span> 版权所有 中国北京 · 为互联网事业发展助跑 网站备案：京ICP备11027147号-1</div>
    </div>
</div>
        <!--底部end-->
        <div class="fixed1 zan">
            <div class="yd">
                <img class="yc" src="__PUBLIC__/web/images/qq_06.png" />
                <div class="xs">
                    <img src="__PUBLIC__/web/images/fix_03.png" />	
                    <div class="xs_con">
                        <P class="xs_p1">马上预约，让工长为您服务</P>
                        <P class="xs_p2">*免费量房   *免费预算   *免费设计   *全程监管</P> 
                        <P class="xs_p3"><input type="text" value="请输入您的姓名" /></P>
                        <P class="xs_p3"><input type="text" value="请输入您的手机号码" /></P>
                        <P class="xs_p4"><select><option selected="selected">北京</option></select> <select><option selected="selected">北京</option></select> <select><option selected="selected">东城区</option></select></P>
                        <P class="xs_p5"><input type="submit" value="免费预约" /></P>
                        <P class="xs_p6"><span>已有预约<i>106</i>人</span><span>今日预约<i>36</i>人</span><span>累计签单<i>1568</i>单</span><span>最新开工<i>325</i>家</span></P>
                    </div>
                </div>
            </div>
            <div class="qq">
                <P class="qq_p1"><a href="#">在线客服</a>
                    <a href="#"><img src="__PUBLIC__/web/images/jt_03.png" /></a>
                </P>
                <P class="qq_p2"><a href="#">官方微信</a></P>
                <P class="qq_p3"><a href="#">联系电话</a></P>
                <P class="qq_p4"><a href="#">返回顶部</a></P>
            </div>
        </div>
        <div class="fixed2 zan">
            <div class="fixed2_con">
                <img src="__PUBLIC__/web/images/lo.png" />
                <ul class="fixed2_ul1">
                    <li><a href="#">首页</a></li>
                    <li><a href="#">明星工长</a></li>
                    <li><a href="#">团购活动</a></li>
                    <li><a href="#">建材商城</a></li>
                    <li><a href="#">设计团队</a></li>
                    <li><a href="#">装修图库</a></li>
                    <li><a href="#">装修攻略</a></li>
                    <li><a href="#">社区团装</a></li>
                    <li><a href="#">装修论坛</a></li>
                    <li><a href="#">惠民模式</a></li>
                    <li style=" margin-left:50px;"><a href="#">登录</a> | <a href="#">注册</a></li>
                </ul>

            </div>
        </div>

    </body>
</html>
<script>
    var i=1;
function change_for(){
    i++;
    $.ajax({
        url:"<?php echo U('Index/ajax_getforeman');?>",
        data:"click="+i,
        dataType:"json",
        type:"GET",
        beforeSend:function(){
            $("#load_foreman").html("<img src='__PUBLIC__/web/images/loading.gif' />");
        },
        success:function(data){
            var foremanhtml="";
            if(data.status==1){
            $.each(data.list,function(k,v){
                foremanhtml+="<li><img src='"+v.logo+"' /><P class=\"con1_p1\"><span class=\"con1_p1_s1\">"+v.truename+"</span><span class=\"con1_p1_s2\">口碑值：<i>"+v.koubei+"</i></span></P><P class=\"con2_p2\"><a class=\"con1_p1_s3\">评论<i>"+v.comments+"</i></a><a class=\"con1_p1_s4\" href=\"#\">进入店铺</a></P></li>";
            });
            $("#load_foreman").html(foremanhtml);
            }else{
                $("#load_foreman").html("");
            }
        }
    })
}
</script>