<?php 
error_reporting(0);
session_start();
$_SESSION["name"];
$_SESSION["adr"];
$_SESSION["b_d"];
$_SESSION["mobile"];
$_SESSION["f_name"]=$_POST["f_name"];
$_SESSION["source"]=$_POST["source"];
$_SESSION["dest"]=$_POST["dest"];
$_SESSION["date"]=$_POST["date"];
$_SESSION["time"]=$_POST["time"];
$_SESSION["charges"]=$_POST["charges"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        table{
            text-align: center;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <a href="flight.php">back</a>
    <h1>Details!</h1>
    <table border='1'>
        <tr>
            <th>customer name</th>
            <th>address</th>
            <th>birth date</th>
            <th>mobile no.</th>
            <th>flight name</th>
            <th>source</th>
            <th>destination</th>
            <th>date</th>
            <th>time</th>
            <th>charges</th>
        </tr>
        <tr>
            <td><?php echo$_SESSION["name"];?></td>
            <td><?php echo$_SESSION["adr"];?></td>
            <td><?php echo$_SESSION["b_d"];?></td>
            <td><?php echo$_SESSION["mobile"];?></td>
            <td><?php echo$_SESSION["f_name"];?></td>
            <td><?php echo$_SESSION["source"];?></td>
            <td><?php echo$_SESSION["dest"];?></td>
            <td><?php echo$_SESSION["date"];?></td>
            <td><?php echo$_SESSION["time"];?></td>
            <td><?php echo$_SESSION["charges"];?></td>
        </tr>
    </table>
</body>
</html>