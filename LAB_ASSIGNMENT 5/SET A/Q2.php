<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student details!</h1>
    <fieldset>
    <form action="#" method="POST">
        <label for="name"><b>Enter your name:</b></label>
        <input type="text" name="name" id="name"><br>
        <br>
        <label for="address1"><b>Enter your address:</b></label>
        <input type="text" name="address1" id="address1"><br>
        <br>
        <label for="pin"><b>Enter your pin-code:</b></label>
        <input type="number" name="pin" id="pin"><br>
        <br>
        <label for="gender"><b>Select Gender:</b></label>
        <input type="radio" name="gender" id="gender" value="male">male
        <input type="radio" name="gender" id="gender" value="female">female <br>
        <br>
        <input type="submit" name="submit" id="submit" value="submit">
        <input type="reset" name="reset" id="reset" value="reset">
    </form>
</fieldset>
</body>
</html>
<?php 
error_reporting(0);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["submit"]))
    {
        $name=$_POST["name"];
        $adr=$_POST["address1"];
        $pin=$_POST["pin"];
        $gender=$_POST["gender"];
        if($name==""||$adr==""||$pin==""||$gender=="")
        {
            echo"<script>alert('All fields are required');</script>";
        }else{
            echo"<b>";
            echo"The name is:".$name."<br>";
            echo"The address is:".$adr."<br>";
            echo"The pin code is:".$pin."<br>";
            echo"The Gender is:".$gender."<br>";
            echo"</b>";
        }
    }
}

?>