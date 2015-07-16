//menu
$(document).ready(function(){
  
  $('li.mainlevel').mousemove(function(){
  $(this).find('ul').css('display','block');//you can give it a speed
  $(this).siblings().find('ul').css('display','none');
  });
  $('li.mainlevel').mouseleave(function(){
  $(this).find('ul').css('display','none');
  });
  
});

//¿¡»ÀÕºø‚ www.lanrentuku.com