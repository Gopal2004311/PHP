<?php 
    $conn=mysqli_connect("localhost","root","","php");
    $pn=$_GET["pn"];
    $query="DELETE FROM policy_info WHERE p_no='$pn'";
    $result=mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=database.php">