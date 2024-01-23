<?php

    $n = $_GET["num"];
    $rev=0;
    $temp = $n;
    while ((int)$n>0) {
        $d = $n%10;   
        $rev =($rev*10)+$d;
        $n=$n/10;
    }
    echo("the reverse of $temp is ".$rev);
?>