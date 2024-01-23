<?php
require_once("database.php");
     if(isset($_POST["delete"])){
      
      $name=$_GET['fn'];
 $delete="DELETE FROM student1 WHERE first_name='$name'";
 $result=mysqli_query($conn,$delete);
 if($result==true)
 {
  echo"record deleted!";
  echo"<script>alert('Record deleted successfully');</script>";
 }else{
  echo"ERROR:".mysqli_error($conn);
 }
}
   mysqli_close($conn);
?>