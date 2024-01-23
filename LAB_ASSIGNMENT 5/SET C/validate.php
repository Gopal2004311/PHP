<?php 
error_reporting(0);
$name=$_POST["name"];
$age=$_POST["age"];

if($age<18)
{
    header("location:reject.php?n=$name");
}else{
    header("location:welcome.php?n=$name");
}
?>