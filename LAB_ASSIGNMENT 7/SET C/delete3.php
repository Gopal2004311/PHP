<?php 
    $conn=mysqli_connect("localhost","root","","php");
    $date=$_GET["date"];
    $query="DELETE FROM client_policy WHERE date_of_purchase='$date'";
    $result=mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=database.php">