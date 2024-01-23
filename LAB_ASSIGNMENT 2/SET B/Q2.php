<?php
   echo"<h1>This program to print perfect numbers between 1 to 100!</h1>";
    $s=0;
    for ($i=1; $i < 100; $i++) { 
        $j=1;
        while ($j < $i) {
              if ($i%$j==0) {
                  $s=$s+$j;
              }
              $j++;
        }
        if ($s==$i) {
            echo"<strong><big>$i</big></strong>"."<br>";
        }
        $s=0;
    }
?>