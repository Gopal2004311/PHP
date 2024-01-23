<?php 
$cn=$_GET["cn"];

$conn=mysqli_connect("localhost","root","","php");
$query="DELETE FROM customer WHERE c_no='$cn'";
$result=mysqli_query($conn,$query);
if($result)
{
    echo"<script>alert('Record Deleted!');</script>";
    ?>
    <meta http-equiv="refresh" content="0;database.php">
    <?php
}

?>