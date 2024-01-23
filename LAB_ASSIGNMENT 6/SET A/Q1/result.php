<?php 
error_reporting(0);
session_start();
$_SESSION["ds"]=$_POST["ds"];
$_SESSION["php"]=$_POST["php"];
$_SESSION["big_data"]=$_POST["big_data"];
$_SESSION["se"]=$_POST["se"];
$_SESSION["dm"]=$_POST["dm"];
$_SESSION["s_no"];
$_SESSION["name"];
$_SESSION["class"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="subject_detail.php">back</a>
    <h1>The details are:</h1>
    <table border='1'>
        <tr>
            <th>seat no.</th>
            <th>name</th>
            <th>class</th>
            <th>subject</th>
            <th>marks</th>
        </tr>
        <tr>
            <td rowspan="5"><?php echo$_SESSION["s_no"];?></td>
            <td rowspan="5"><?php echo$_SESSION["name"];?></td>
            <td rowspan="5"><?php echo$_SESSION["class"];?></td>
            <td>data structure</td>
            <td><?php echo$_SESSION["ds"];?></td>
        </tr>
        <tr>
        <td>php</td>
            <td><?php echo$_SESSION["php"];?></td>
        </tr>
        <tr>
        <td>big data</td>
            <td><?php echo$_SESSION["big_data"];?></td>
        </tr>
        <tr>
        <td>software Engineering</td>
            <td><?php echo$_SESSION["se"];?></td>
        </tr>
        <tr>
        <td>digital marketing</td>
            <td><?php echo$_SESSION["dm"];?></td>
        </tr>
    </table>
</body>
</html>
<?php
session_destroy();

?>