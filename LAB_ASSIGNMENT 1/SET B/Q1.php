<?php
    $l = $_GET["length"];
    $b = $_GET["width"];
    $h = $_GET["height"];

    $v = ($l*$b*$h);
    echo("volume of cuboid is ".$v."<br>");

    $a = 2*(($l*$b)+($l*$h)+($b*$h));
    echo("surface area of cuboid is ".$a."<br>");
?>