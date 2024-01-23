<!--. Write a PHP Script to define an array. Find the element from the array that matches the given 
value using the appropriate search function.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>find number in array it exist or not!</h2>
    <form action="Q1.php" method="post">
        <u>Enter a number:</u><input type="text" name="num" ><br>
        <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>
<?php
error_reporting(0);
if($_SERVER["REQUEST_METHOD"]=="POST"){
   $n=$_POST["num"];
   $arr= array(1,2,3,4,5,6,7);
   $count=count($arr);
   echo"The array is:";
   for ($i=0; $i < $count; $i++) { 
        echo"\t$arr[$i]";
   }
   echo"<br>";
   if (in_array($n,$arr)==1) {
        echo"The value $n are exist in array!"."<br>";
   } else {
        echo"The value $n are not exist in array!"."<br>";
   }
} 

?>