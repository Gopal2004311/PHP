<?php
   $a = $_GET["first"];
   $b = $_GET["second"];

    $c = $a/$b;
    echo("quotient after division of $a and $b is ".$c."<br>");

    $c = $a%$b;
    echo("reminder after division of $a and $b is ".$c."<br>");
?>