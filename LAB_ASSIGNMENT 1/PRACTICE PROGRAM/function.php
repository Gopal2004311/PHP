<?php
require_once("process.php");
require_once("database.php");
function access($conn){
    $select="select*from student1";
    $s=mysqli_query($conn,$select);
    return $s;
}
?>