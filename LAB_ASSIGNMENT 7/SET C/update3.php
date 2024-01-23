<?php 
$d=$_GET["date"];
$conn=mysqli_connect("localhost","root","","php");
$query="SELECT * FROM client_policy WHERE date_of_purchase='$d'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
?>

<?php 
if(isset($_POST["submit"]))
{
    $conn=mysqli_connect("localhost","root","","php");
    $p_no=$_POST["p_no"];
    $c_no=$_POST["c_no"];
    $date=$_POST["date"];
    
    $query="UPDATE client_policy SET p_no1='$p_no',c_no1='$c_no',date_of_purchase='$date' WHERE date_of_purchase='$d'";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        echo"<script>alert('Record Updated Successfully!');</script>";
        ?>
        <meta http-equiv="refresh" content="0;url=database.php">
        <?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Client & Policy information!</h1>
    <fieldset>
        <form action="#" method="POST">
            <label for="c_no"><b>Client No.:</b></label>
            <input type="number" name="c_no" id="c_no" value="<?php echo$row['c_no1'];?>" readonly><br>
            <br>
            <label for="p_no"><b>Policy No:</b></label>
            <input type="text" name="p_no" id="p_no" value="<?php echo$row['p_no1'];?>"><br>
            <br>
            <label for="date"><b>Maturity Amount:</b></label>
            <input type="date" name="date" id="date" value="<?php echo$row['date_of_purchase'];?>"><br>
            <br>
            <input type="submit" name="submit" id="submit" value="UPDATE">
            <button><a href="database.php">BACK</a></button>
        </form>
    </fieldset>
</body>
</html>
