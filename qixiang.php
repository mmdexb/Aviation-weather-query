<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<form action="http://49.232.127.148/qixiang.php" method="post">
  机场: <input type="text" name="jichang">
  <input type="submit" value="查询">
</form>




<?php
//Template Name: qixiang
$jichang = $_POST["jichang"];
$huancun = rand(5415645,787421154) ;
$url = "http://avt7.xiamenair.com.cn/Home/AirportMetarInfo?airport4Code=" . $jichang . "&_=". $huancun ;

$jsondata = file_get_contents($url);
$json = json_decode($jsondata, true);



print_r( "您查询的机场： " . $jichang." <br>") ;
print_r( $json['metarContentList']['rows'][0]['content'] . "<br>");
print_r( $json['tafContentList']['rows'][0]['content'])." <br>";





?>