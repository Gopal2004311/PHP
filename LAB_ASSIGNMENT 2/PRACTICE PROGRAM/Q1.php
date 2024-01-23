<?php

    $n1 = $_GET["first"];
    $n2 = $_GET["second"];

    if ($n1>$n2) {
        echo("\n $n1 is greater than $n2!");
    } else {
        echo("\n $n2 is greater than $n1!");
    }
?>
