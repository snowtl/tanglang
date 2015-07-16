// JavaScript Document
(function(d,D,v){d.fn.responsiveSlides=function(h){var b=d.extend({auto:!0,speed:1E3,timeout:7E3,pager:!1,nav:!1,random:!1,pause:!1,pauseControls:!1,prevText:"Previous",nextText:"Next",maxwidth:"",controls:"",namespace:"rslides",before:function(){},after:function(){}},h);return this.each(function(){v++;var e=d(this),n,p,i,k,l,m=0,f=e.children(),w=f.size(),q=parseFloat(b.speed),x=parseFloat(b.timeout),r=parseFloat(b.maxwidth),c=b.namespace,g=c+v,y=c+"_nav "+g+"_nav",s=c+"_here",j=g+"_on",z=g+"_s",
o=d("<ul class='"+c+"_tabs "+g+"_tabs' />"),A={"float":"left",position:"relative"},E={"float":"none",position:"absolute"},t=function(a){b.before();f.stop().fadeOut(q,function(){d(this).removeClass(j).css(E)}).eq(a).fadeIn(q,function(){d(this).addClass(j).css(A);b.after();m=a})};b.random&&(f.sort(function(){return Math.round(Math.random())-0.5}),e.empty().append(f));f.each(function(a){this.id=z+a});e.addClass(c+" "+g);h&&h.maxwidth&&e.css("max-width",r);f.hide().eq(0).addClass(j).css(A).show();if(1<
f.size()){if(x<q+100)return;if(b.pager){var u=[];f.each(function(a){a=a+1;u=u+("<li><a href='#' class='"+z+a+"'>"+a+"</a></li>")});o.append(u);l=o.find("a");h.controls?d(b.controls).append(o):e.after(o);n=function(a){l.closest("li").removeClass(s).eq(a).addClass(s)}}b.auto&&(p=function(){k=setInterval(function(){var a=m+1<w?m+1:0;b.pager&&n(a);t(a)},x)},p());i=function(){if(b.auto){clearInterval(k);p()}};b.pause&&e.hover(function(){clearInterval(k)},function(){i()});b.pager&&(l.bind("click",function(a){a.preventDefault();
b.pauseControls||i();a=l.index(this);if(!(m===a||d("."+j+":animated").length)){n(a);t(a)}}).eq(0).closest("li").addClass(s),b.pauseControls&&l.hover(function(){clearInterval(k)},function(){i()}));if(b.nav){c="<a href='javascript:' class='"+y+" prev'>"+b.prevText+"</a><a href='javascript:' class='"+y+" next'>"+b.nextText+"</a>";h.controls?d(b.controls).append(c):e.after(c);var c=d("."+g+"_nav"),B=d("."+g+"_nav.prev");c.bind("click",function(a){a.preventDefault();if(!d("."+j+":animated").length){var c=f.index(d("."+j)),
a=c-1,c=c+1<w?m+1:0;t(d(this)[0]===B[0]?a:c);b.pager&&n(d(this)[0]===B[0]?a:c);b.pauseControls||i()}});b.pauseControls&&c.hover(function(){clearInterval(k)},function(){i()})}}if("undefined"===typeof document.body.style.maxWidth&&h.maxwidth){var C=function(){e.css("width","100%");e.width()>r&&e.css("width",r)};C();d(D).bind("resize",function(){C()})}})}})(jQuery,this,0);





$(function(){

//搜索框  首页
	$('.sel').mousemove(function(e) {
        $('.hidden').slideDown();
    });

	$('.sel').mouseleave(function(e) {
        $('.hidden').hide();
    })

	$('.sel li span').click(function(e) {
        $('.sel_span1').html($(this).html())
    });	
		
//banner
    $(".f426x240").responsiveSlides({
        auto: true,
        pager: true,
        nav: true,
        speed: 700
    });



	$('.con1_ul li:eq(4)').css('marginRight',0);
	$('.con1_ul li:last').css('marginRight',0);
	$('.con2_ul li:last').css('marginRight',0);
	$('.con2_p5 span:last').css('marginRight',0);
	$('.con2_d1:eq(2)').css('marginRight',0);
	$('.con2_d1:last').css('marginRight',0);
	$('.zc_p1 a:last').css('marginRight',0);
	$('.con3_ul li:last').css('marginRight',0);
	$('.con5_ul li:eq(2)').css('marginRight',0);
	$('.con5_ul li:last').css('marginRight',0);
	$('.con8_ul li:last').css('marginRight',0);
	$('.con9_ul li:last').css('marginRight',0);
	$('.con10_ul li:last').css('marginRight',0);
	$('.mx_con_r_d2_ul li:last').css('borderBottom',0);
	$('.mx_con_r_d2_ul1 li:last').css('borderBottom',0);
	$('.mx_con_r_d2_ul2 li:last').css('borderBottom',0);
	$('.st_tab li:last').css('marginRight',0);
	$('.dp li:last').css('marginRight',0);
	$('.dp li:eq(3)').css('marginRight',0);
	$('.stx_ul1 li:last').css('marginRight',0);
	$('.sqxq_ul li:last').css('borderBottom',0);
	$('.xuu_d1_ul li:last').css('borderBottom',0);
	$('.jccp_l_ul2 li:last').css('borderBottom',0);
	$('.feng_ul3 li:last').css('borderBottom',0);
	$('.feng_ul2 li:odd').css('borderRight',0);
	$('.feng_ul2 li:odd').css('marginRight',0);	
	
	
	$('.con2_p3 a:last()').css('background','#f7f7f7');
//tab
	$('.con4_h4 span').click(function(e) {
		
		$(this).addClass('con4_cur').siblings().removeClass('con4_cur')
		$('.con4_ul').eq($(this).index()).show().siblings('ul').hide();
    });
	$('.con6_h4 span').click(function(e) {
		
		$(this).addClass('con6_cur').siblings().removeClass('con6_cur')
		$('.con6_d1').eq($(this).index()).show().siblings('.con6_d1').hide();
    });
	$('.con7_h4 span').click(function(e) {
		
		$(this).addClass('con7_cur').siblings().removeClass('con7_cur')
		$('.con7_ul').eq($(this).index()).show().siblings('ul').hide();
    });
	
	
	
	$('.con8_p00').mouseenter(function(e) {
        
		$(this).siblings('.con8_p0').show()
    });
	$('.con8_ul li').mouseleave(function(e) {
		$(this).children('.con8_p0').hide()
    });
	$('.con9_p00').mouseenter(function(e) {
        
		$(this).siblings('.con9_p0').show()
    });
	$('.con9_ul li').mouseleave(function(e) {
		$(this).children('.con9_p0').hide()
    });
	
	
	$('.con10_ul li').mouseenter(function(e) {
        
		$(this).children('.con10_p2').css('marginTop',0)
		$(this).children('.con10_p3').show();
    });
	$('.con10_ul li').mouseleave(function(e) {
        
		$(this).children('.con10_p2').css('marginTop',25)
		$(this).children('.con10_p3').hide();
    });
	
	$(window).scroll(function(e) {
		var b=$(document).scrollTop()
 
        if(b<600){
        	$('.zan').fadeOut();
        }else{
			$('.zan').fadeIn().show(300);
		}
    });
	
	$('.yc').click(function(e) {
		$('.xs').show();
		$('.yc').hide();
    });
	$('.xs img').click(function(e) {
		$('.yc').show();
		$('.xs').hide();
    });

	$('.qq_p4').click(function(e) {
        $('body,html').stop().animate({scrollTop:0},100) 
    });
	
	
	$('.qq p').mouseenter(function(e) {
        
		$(this).children().children('img').show()
		$(this).siblings().children().children('img').hide()
    });
	$('.qq').mouseleave(function(e) {
        
		$('.qq p a img').hide();
    });
	
//明星工长

	$('.dp li').mouseenter(function(e) {
        
		$(this).children('.dp_p4').show();
    });
	$('.dp li').mouseleave(function(e) {
        
		$(this).children('.dp_p4').hide();
    });
	
	$('.st_tab li').mouseenter(function(e) {
		
		$(this).addClass('cur').siblings().removeClass('cur')
		$('.st_tab2').eq($(this).index()).show().siblings('.st_tab2').hide();
    });
	
	
	
	$('.sfq li').mouseover(function(e) {
        $(this).stop().animate({width:390},500).siblings().stop().animate({width:90},500)
		$(this).children('img').css('opacity',1)
		$(this).siblings().children('img').css('opacity',0.7)
    });
	$('.sfq li').mouseout(function(e) {
        $('.sfq li').stop().animate({width:118},500)
		$('.sfq li').children('img').css('opacity',0.7)

    });
	
	$('.dp_p4_a1').click(function(e) {
		$('.fssj').show();
    });
	
	$('.fssj_p2 a').click(function(e) {
		$('.fssj').hide();
    });
	
	$('.sp_ul div').mouseover(function(e) {
        $(this).children('.sp_ul_bg').stop().css('opacity',1)
    });
	$('.sp_ul div').mouseout(function(e) {
        $(this).children('.sp_ul_bg').stop().css('opacity',0.5)
    });
	
	$('.sjs_ul_p3 a').click(function(e) {
		$('.sjs_alert').show();
    });
	
	$('.alert_con_p2 a').click(function(e) {
		$('.sjs_alert').hide();
    });
	
    $(".grjj_l_ul").responsiveSlides({
        auto: true,
        pager: true,
        nav: true,
        speed: 700
    });
	
	
	
	
	
	

});
