<?php 
error_reporting(0);
session_start();

$_SESSION["s_no"]=$_POST["s_no"];
$_SESSION["name"]=$_POST["name"];
$_SESSION["class"]=$_POST["class"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="result.php" method="POST">
        <label for="ds"><b>Data Structure</b></label>
        <input type="number" name="ds" id="ds" value="<?php echo$_SESSION["ds"];?>"><br>
        <br>
        <label for="php"><b>php</b></label>
        <input type="number" name="php" id="php"value="<?php echo$_SESSION["php"];?>"><br>
        <br>
        <label for="big_data"><b>big data</b></label>
        <input type="number" name="big_data" id="big_data"value="<?php echo$_SESSION["big_data"];?>"><br>
        <br>
        <label for="se"><b>software engineering</b></label>
        <input type="number" name="se" id="se" value="<?php echo$_SESSION["se"];?>"><br>
        <br>
        <label for="dm"><b>Digital Marketing</b></label>
        <input type="number" name="dm" id="dm" value="<?php echo$_SESSION["dm"];?>"><br>
        <br>
        <input type="submit" name="submit" id="submit">
        <input type="reset" name="reset" id="reset">
        <a href="std_details.php">back</a>
    </form>
</body>
</html>