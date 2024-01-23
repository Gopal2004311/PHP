<?php
error_reporting(0);
$text=$_POST["text"];
$style=$_POST["style"];
$size=$_POST["size"];
$bg=$_POST["bg_color"];
$color=$_POST["color"];

$expire=time()+86400*2;
setcookie("text",$text,$expire,"/");
setcookie("style",$style,$expire,"/");
setcookie("size",$size,$expire,"/");
setcookie("bg",$bg,$expire,"/");
setcookie("color",$color,$expire,"/");

echo$_COOKIE["text"];
echo$text."<br>";
echo$style."<br>";
echo$size."<br>";
echo$bg."<br>";
echo$color."<br>";


?>
<a href="implement.php">submit</a>