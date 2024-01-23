<?php  
error_reporting(0);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["submit"]))
    {
        $name=$_POST["name"];
        $email=$_POST["e-mail"];
        $age=$_POST["age"];
        if(filter_var($age,FILTER_VALIDATE_INT)===0||filter_var($age,FILTER_VALIDATE_INT)===false||$age=="")

        {
            echo"<script>alert('Enter valid age!');</script>";


        }else if(filter_var($email,FILTER_VALIDATE_EMAIL)===false||$email==""){

            echo"<script>alert('Enter valid email address!');</script>";

        }else if(!preg_match("/^[a-zA-Z]*$/",$name)||$name=="")
        {
            echo"<script>alert('Enter valid name!');</script>";

        }else{

            echo"The name is : ".$name."<br>";
            echo"The Email is : ".$email."<br>";
            echo"The age is : ".$age."<br>";
        }
    }
}
?>