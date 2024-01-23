<?php 
error_reporting(0);
$c_no=$_GET["cn"];
$conn=mysqli_connect("localhost","root","","php");
$select="SELECT * FROM company WHERE c_no=$c_no";
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
            <label for="c_no"><b>Company No.:</b></label>
            <input type="number" name="c_no" id="c_no" value="<?php echo$c_no;?>" readonly><br>
            <br>
            <label for="c_name"><b>Company Name:</b></label>
            <input type="text" name="c_name" id="c_name" value="<?php echo$row["c_name"];?>"><br>
            <br>
            <label for="c_city"><b>Company City:</b></label>
            <input type="text" name="c_city" id="c_city" value="<?php echo$row["c_city"];?>"><br>
            <br>
            <label for="c_share_value"><b>Company Share Value:</b></label>
            <input type="number" name="c_share_value" id="c_share_value" value="<?php echo$row["c_share_value"];?>"><br>
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
    $c_no=$_POST["c_no"];
    $c_n=$_POST["c_name"];
    $city=$_POST["c_city"];
    $share=$_POST["c_share_value"];

    $conn=mysqli_connect("localhost","root","","php");

    $query="UPDATE company SET c_no='$c_no',c_name='$c_n',c_city='$city',c_share_value='$share' WHERE c_no='$c_no'";
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