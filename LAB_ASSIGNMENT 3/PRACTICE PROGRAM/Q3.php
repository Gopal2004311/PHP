<?php
error_reporting(0);
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $p=0;
    $n=0;
   $arr= array(1,2,3,4,5,6,7,8,9,10);
   for ($i=0; $i < count($arr); $i++) { 
       if ($arr[$i]>0) {
          $p++;
       }else{
        $n++;
       }
   }
   print("total positive numbers are:".$p);
   echo"<br>";
   print("total negative numbers are:".$n);
   echo("<br>");

   $sum=0;
   for ($i=0; $i < count($arr); $i++) { 
      $sum=$sum+$arr[$i];
   }

   $avg=$sum/count($arr);
   echo"The average of array element is:".$avg;
   echo("<br>");
   echo"The sum of array elements:".$sum;
}
?>