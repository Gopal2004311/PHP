<?php 
error_reporting(0);
if(isset($_POST["submit"]))
{
    $name=$_POST["name"];
    $age=$_POST["age"];
    if($age<18)
    {
        echo"<script>alert('Hello $name! your not authorized to visit this site!');</script>";
    }else{
        echo"<script>alert('Welcome $name to this site!');</script>";
    }
}
?>