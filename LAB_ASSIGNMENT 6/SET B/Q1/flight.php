<?php 
error_reporting(0);
session_start();
$_SESSION["name"]=$_POST["name"];
$_SESSION["adr"]=$_POST["adr"];
$_SESSION["b_d"]=$_POST["b_d"];
$_SESSION["mobile"]=$_POST["mobile"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
            justify-content: center;
            align-items: center;
        }
        fieldset{
            margin-left: 25%;
            margin-right: 25%;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <a href="cosumer.html">back</a>
    <h1>Flight Registration!</h1>
    <fieldset>
        <form action="output.php" method="POST">
            <label for="f_name"><b>Enter Flight Name:</b></label>
            <input type="text" name="f_name" id="f_name"><br>
            <br>
            <label for="source"><b>Select Source:</b></label>
            <select name="source" id="source">
                <option value="shrirampur">shrirampur</option>
                <option value="pune">pune</option>
                <option value="mumbai">mumbai</option>
                <option value="nagar">nagar</option>
                <option value="nagpur">nagpur</option>
            </select><br>
            <br>
            <label for="dest"><b>Select Destination:</b></label>
            <select name="dest" id="dest">
                <option value="shrirampur">shrirampur</option>
                <option value="pune">pune</option>
                <option value="mumbai">mumbai</option>
                <option value="nagar">nagar</option>
                <option value="nagpur">nagpur</option>
            </select><br>
            <br>
            <label for="date"><b>Select date:</b></label>
            <input type="date" name="date" id="date"><br>
            <br>
            <label for="time"><b>Select time:</b></label>
            <input type="time" name="time" id="time"><br>
            <br>
            <label for="charges"><b>Select Charges:</b></label>
            <select name="charges" id="charges">
                <option value="100">100</option>
                <option value="150">150</option>
                <option value="200">200</option>
                <option value="300">300</option>
            </select><br>
            <br>
            <input type="submit" name="submit" id="submit" value="submit">
            <input type="reset" name="reset" id="reset" value="cancel">
        </form>
    </fieldset>
</body>
</html>