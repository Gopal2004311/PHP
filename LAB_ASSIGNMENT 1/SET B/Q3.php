<?php
    $d = $_GET["data"];
    $di = $_GET["digi"];
    $p = $_GET["php"];
    $s= $_GET["se"];
    $b = $_GET["big"];

    $t=$d+$di+$p+$s+$b;
    $avg = $t/5;

    echo("total marks is ".$t."<br>");
    echo("percentage is ".$avg."<br>");
?>