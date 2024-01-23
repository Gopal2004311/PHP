<?php
$conn=mysqli_connect("localhost","root","","php");
if(!$conn)
{
  die("database is not connect".mysqli_connect_error());
}
?>