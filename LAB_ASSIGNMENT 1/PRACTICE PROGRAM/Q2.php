<?php
   $a = $_GET["first"];
   $b = $_GET["second"];

   if ($a>$b) {
      echo"$a is greater than $b";
   }
   else {
      echo"$b is greater than $a";
   }
?>