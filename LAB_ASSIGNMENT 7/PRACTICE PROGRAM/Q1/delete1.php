<?php 
$a=$_GET["pn"];
$conn=mysqli_connect("localhost","root","","php");
$query="DELETE FROM person WHERE p_no='$a'";
$result=mysqli_query($conn,$query);
if($result)
{
    ?>
    <meta http-equiv="refresh" content="0;database.php">
    <?php
}
?>