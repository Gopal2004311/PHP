<?php 
$a=$_GET["cn"];
$conn=mysqli_connect("localhost","root","","php");
$query="DELETE FROM company WHERE c_no='$a'";
$result=mysqli_query($conn,$query);
if($result)
{
    ?>
    <meta http-equiv="refresh" content="0;database.php">
    <?php
}
?>