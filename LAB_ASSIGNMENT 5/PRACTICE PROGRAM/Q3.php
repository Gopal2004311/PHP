<?php 
error_reporting(0);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["submit"]))
    {
        $num=$_POST["num"];
        $len=strlen($num);
        if($len<10||$len>10)
        {
            echo"<script>alert('Enter valid mobile number!');</script>";
        }else{
            echo"Number is: ".$num;
        }
    }
}
?>