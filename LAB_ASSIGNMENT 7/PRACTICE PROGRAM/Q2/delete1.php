<?php 
$tn=$_GET["tn"];

$conn=mysqli_connect("localhost","root","","php");
$query="DELETE FROM ticket WHERE t_no='$tn'";
$result=mysqli_query($conn,$query);
if($result)
{
    echo"<script>alert('Record Deleted!');</script>";
    ?>
    <meta http-equiv="refresh" content="0;database.php">
    <?php
}

?>