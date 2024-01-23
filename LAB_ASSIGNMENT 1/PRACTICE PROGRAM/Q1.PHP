<?php
$a = $_GET["first"];
$b = $_GET["second"];

$c = $a+$b;
echo("addition of $a and $b is ".$c."<br>");
$c = $a-$b;
echo("subtraction of $a and $b is ".$c."<br>");
$c = $a*$b;
echo("multiplication of $a and $b is ".$c."<br>");
$c = $a/$b;
echo("division of $a and $b is ".$c."<br>");
$c=$a%$b;
echo("modulas of $a and $b is ".$c."<br>");
?>