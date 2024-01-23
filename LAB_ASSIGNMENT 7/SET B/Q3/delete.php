<?php 
$conn=mysqli_connect("localhost","root","","php");
 $id=$_GET["fn"];
 $query="DELETE FROM crop_farmer WHERE f_no1='$id'";
 mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=database.php">