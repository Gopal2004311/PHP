<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","php");
if ($conn) {
    echo("connection successful!");
}else{
    echo"ERROR:".mysqli_connect_error();
}

$query="CREATE TABLE employee6(employee_name varchar(30),address varchar(30),j_date date,salary float)";
$result=mysqli_query($conn,$query);
if($result)
{
    echo"<br>";
    echo("\n table is created successfully!");
}else{
    echo"server error!please try again.";
}
mysqli_close($conn);
?>