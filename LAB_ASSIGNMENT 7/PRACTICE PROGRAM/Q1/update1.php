<?php 
error_reporting(0);
$p_no=$_GET["pn"];
$conn=mysqli_connect("localhost","root","","php");
$select="SELECT * FROM person WHERE p_no=$p_no";
$result=mysqli_query($conn,$select);
$row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <h2>Company Details!</h2>
        <form action="#" method="POST">
            <label for="p_no"><b>Person No.:</b></label>
            <input type="number" name="p_no" id="p_no" value="<?php echo$p_no;?>" readonly><br>
            <br>
            <label for="p_name"><b>Person Name:</b></label>
            <input type="text" name="p_name" id="p_name" value="<?php echo$row["p_name"];?>"><br>
            <br>
            <label for="p_city"><b>Person City:</b></label>
            <input type="text" name="p_city" id="p_city" value="<?php echo$row["p_city"];?>"><br>
            <br>
            <label for="p_ph"><b>Person Phone number:</b></label>
            <input type="number" name="p_ph" id="p_ph" value="<?php echo$row["p_ph_no"];?>"><br>
            <br>
            <div>
                <input type="submit" name="submit" id="submit" value="UPDATE">
                <input type="reset" name="reset" id="reset" value="CANCEL">
            </div>
        </form>
    </fieldset>
</body>
</html>
<?php 
error_reporting(0);
if(isset($_POST["submit"]))
{
    $p_no=$_POST["p_no"];
    $p_n=$_POST["p_name"];
    $city=$_POST["p_city"];
    $phone=$_POST["p_ph"];

    $conn=mysqli_connect("localhost","root","","php");

    $query="UPDATE person SET p_no='$p_no',p_name='$p_n',p_city='$city',c_ph_no='$phone' WHERE p_no='$p_no'";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        echo"<script>alert('Record updated successfully!');</script>";
        ?>
           <meta http-equiv="refresh" content="0;database.php">
        <?php
    }
}
?>