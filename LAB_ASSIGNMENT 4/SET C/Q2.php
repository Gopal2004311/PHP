<?php 

function arithmetic($a=10,$b=20)
{
    $result=$a+$b;
    echo "addition is : ".$result."<br>";

    $result=$a-$b;
    echo "subtraction is : ".$result."<br>";

    $result=$a*$b;
    echo "multiplication is : ".$result."<br>";

    $result=$a/$b;
    echo "division is : ".$result."<br>";

    $result=$a%$b;
    echo "mod is : ".$result."<br>";
}

arithmetic();
?>