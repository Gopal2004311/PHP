<?php
    $n = $_GET["num"];
    $i=1;
    while ($i<=10) {
        $t=$n*$i;
        echo("$t"."<br>");
        $i++;
    }
?>