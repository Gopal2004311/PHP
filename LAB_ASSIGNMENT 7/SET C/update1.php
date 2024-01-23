<?php 
$c=$_GET["cn"];
$conn=mysqli_connect("localhost","root","","php");

$query="SELECT * FROM client WHERE c_no='$c'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);

if(isset($_POST["submit"]))
{
    $conn=mysqli_connect("localhost","root","","php");

    $c_no=$_POST["c_no"];
    $c_name=$_POST["c_name"];
    $adr=$_POST["adr"];
    $date=$_POST["date"];

    $query="UPDATE client SET c_no='$c_no',c_name='$c_name',c_address='$adr',birth_date='$date' WHERE c_no='$c_no'";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        echo"<script>alert('Record updated successfully!');</script>";
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
    <h1>Update</h1>
    <fieldset>
        <form action="update1.php" method="POST">
            <label for="c_no"><b>Client No:</b></label>
            <input type="number" name="c_no" id="c_no" value="<?php echo$c;?>" readonly><br>
            <br>
            <label for="c_name"><b>Client Name:</b></label>
            <input type="text" name="c_name" id="c_name" value="<?php echo$row['c_name'];?>"><br>
            <br>
            <label for="adr"><b>Client Address:</b></label>
            <input type="text" name="adr" id="adr" value="<?php echo$row['c_address']?>"><br>
            <br>
            <label for="date"><b>Client Birth Date:</b></label>
            <input type="date" name="date" id="date" value="<?php echo$row['birth_date'];?>"><br>
            <br>
            <input type="submit" name="submit" id="submit" value="UPDATE">
            <button><a href="database.php">BACK</a></button>
        </form>
    </fieldset>
</body>
</html>