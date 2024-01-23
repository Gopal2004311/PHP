<?php 

$conn=mysqli_connect("localhost","root","","php");
$cn=$_GET["cn"];
$query="DELETE FROM client WHERE c_no='$cn'";
$result=mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=database.php">