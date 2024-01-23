<?php

    $pi = 3.14;
    $r = $_GET["radius"];
    $ac = $pi*$r*$r;
    echo("\n area of circle is ".$ac."<br>");

    $s = $_GET["square"];
    $as = $s*$s;
    echo("\n area of square is ".$as."<br>");

    $l = $_GET["length"];
    $b = $_GET["width"];
    $re = $l*$b;
    echo("\n area of rectangle is ".$re);
?>