<?php 

function evenOdd()
{
    $e=array();
    $o=array();
    for ($i=1; $i < 50; $i++) { 
        if($i%2==0)
        {
            $e[$i]=$i;
        }else{
            $o[$i]=$i;
        }
    }
    echo"Total even numbers are:"."<br>";
    foreach($e as $j)
    {
        echo$j.",";
    }
    echo"<br>";
    echo"Total odd numbers are:"."<br>";
    foreach($o as $j)
    {
        echo$j.",";
    }
}

evenOdd();
?>