<?php 
error_reporting(0);
$a=array(1,2,3,4,5,6,7,8,9,10);
$sum=array_sum($a);
echo("Sum of array element is:".$sum."<br>");
$avg=$sum/count($a);
echo("Average of array element is:".$avg."<br>");
?>