<?php 
error_reporting(0);
$tn=$_GET["tn"];

$conn=mysqli_connect("localhost","root","","php");
$query="SELECT * FROM ticket WHERE t_no='$tn'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
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
        div{
            margin-left: 5%;
        }
    </style>
</head>
<body>
    <h1>Update!</h1>
    <fieldset>
        <form action="#" method="POST">
            <label for="c_no1"><b>Customer No.:</b></label>
            <input type="text" name="c_no1" id="c_no1" value="<?php echo$row['c_no1'];?>"><br>
            <br>
            <label for="t_n"><b> Ticket No.:</b></label>
            <input type="text" name="t_n" id="t_n" value="<?php echo$row['t_no'];?>"><br>
            <label for="date1"><b>Booking Date:</b></label>
            <input type="date" name="date1" id="date1" value="<?php echo$row['booking_date'];?>">
            <br>
            <label for="fare"><b>Fare:</b></label>
            <input type="number" name="fare" id="fare" value="<?php echo$row['fare'];?>"><br>
            <br>
            <label for="t_date"><b>Traveling Date:</b></label>
            <input type="date" name="t_date" id="t_date" value="<?php echo$row['traveling_date'];?>">
            <div>
                <input type="submit" name="submit" id="submit" value="UPDATE">
                <button><a href="database.php">BACK</a></button>
            </div>
        </form>
    </fieldset>
</body>
</html>
<?php 
error_reporting(0);
if(isset($_POST["submit"]))
{
    $conn=mysqli_connect("localhost","root","","php");

    $c_no=$_POST["c_no1"];
    $tn=$_POST["t_n"];
    $b_d=$_POST["date1"];
    $fare=$_POST["fare"];
    $t_d=$_POST["t_date"];

    $query="UPDATE ticket SET c_no1='$c_no',t_no='$tn',booking_date='$b_d',fare='$fare',traveling_date='$t_d' WHERE t_no='$tn' OR c_no1='$c_no'";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        echo"<script>alert('Record Updated!');</script>";
        ?>
        <meta http-equiv="refresh"content="0;database.php">
        <?php
    }
}

?>