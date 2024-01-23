<?php
   $a = $_GET["first"];
   $b = $_GET["second"];
   echo("before swapping a=$a and b=$b"."<br>");
   $temp = $a;
   $a = $b;
   $b = $temp;

   echo("after swapping a=$a and b=$b"."<br>");
?>