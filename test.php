<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<title>Hello, World</title>  
<style type="text/css">  

#container{height:300px; width:300px;}  
</style>  
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.5&ak=4KXKDmnlxqezwFM9bajbsfoE">
//v1.5版本的引用方式：src="http://api.map.baidu.com/api?v=1.5&ak=您的密钥"
//v1.4版本及以前版本的引用方式：src="http://api.map.baidu.com/api?v=1.4&key=您的密钥&callback=initialize"
</script>
</head>  
 
<body>  
<div id="container"></div> 
<script type="text/javascript"> 
var map = new BMap.Map("container");          // 创建地图实例  
//var point = new BMap.Point(116.404, 39.915);  // 创建点坐标 


point = new BMap.Point(117.1017, 39.0437)
map.centerAndZoom(point, 15);                 // 初始化地图，设置中心点坐标和地图级别  
var opts = {offset: new BMap.Size(150, 5)}

map.addControl(new BMap.NavigationControl());//添加控件
map.addControl(new BMap.ScaleControl(opts));//控件偏移位置
map.addControl(new BMap.OverviewMapControl());
map.addControl(new BMap.MapTypeControl());
map.setCurrentCity("天津");


    var marker=new BMap.Marker(point);//创建标注
    map.addOverlay(marker);//将标注添加到地图中
    marker.enableDragging();
    marker.addEventListener("dragend", function(e){
    alert("当前位置：" + e.point.lng + ", " + e.point.lat);
    });
    






</script>  
</body>  
</html>
