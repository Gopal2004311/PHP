<?php
    $arr1=array(10,5,8,3,2,12);
    $arr2=array(1,2,3,6,8,7,4);
    $temp=$arr1;
    $temp1=array();
    $k=0;

      for($j=0;$j<count($arr2);$j++)
      {
        for($i=0;$i<count($arr1);$i++)
        {
        if($arr1[$i]!=$arr2[$j])
        {
          continue;
        }else{
          $temp1[$k]=$arr2[$j];
        }
      }
    }
    echo"<br>"."The array is:"."<br>";
    print_r($temp);
    echo"<br>"."The array is:"."<br>";
    print_r($temp1);
    $arr3=array_merge($temp,$temp1);
    print_r($arr3);
    error_reporting(0);
    print("<br>The original array is:<br>");
    print_r($arr1);
    sort($arr1);
    print("<br> The sorted array is:<br>");
    print_r($arr1);
    $arr4=array_merge($a,$b);
    print_r($arr4);
    echo"<br>";
    echo"traverse the array elements in random order:";
    $a=array_rand($arr3);
    print_r($a);

?>