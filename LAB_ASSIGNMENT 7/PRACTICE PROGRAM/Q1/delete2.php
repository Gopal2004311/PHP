<?php 
$a=$_GET["cn1"];
$conn=mysqli_connect("localhost","root","","php");
$query="DELETE FROM company_person WHERE c_no1='$a'";
$result=mysqli_query($conn,$query);
if($result)
{
    ?>
    <meta http-equiv="refresh" content="0;database.php">
    <?php
}
?>