<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Enter PAN card number to check it valid or not!</h1>
    <form action="Q2.php" method="POST">
        <label for="pan"><b>Enter PAN card no.:</b></label>
        <input type="text" name="pan" id="pan"><br>
        <br>
        <input type="submit" name="submit" id="submit" value="submit">
    </form>
</body>
</html>
<?php 
error_reporting(0);
if(isset($_POST['submit']))
{
    $pan=$_POST['pan'];
    $pattern="/^[A-Z]{5}[0-9]{4}[A-Z]$/";
    if(preg_match($pattern,$pan))
    {
        echo"<script>alert('Pan is valid!');</script>";
    }else{
        echo"<script>alert('Pan is not valid!');</script>";
    }
}
?>