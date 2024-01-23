<?php 
 $y=$_GET["y"];
 $conn=mysqli_connect("localhost","root","","php");
$query1="SELECT * FROM crop_farmer WHERE year1='$y'";
$result=mysqli_query($conn,$query1);
$row=mysqli_fetch_assoc($result);


if(isset($_POST["submit"]))
{
    $conn=mysqli_connect("localhost","root","","php");
    $f=$_POST["fno"];
    $cn=$_POST["c_no"];
    $year=$_POST["year1"];
    $query="UPDATE crop_farmer SET f_no1='$f',c_no1='$cn',year1='$year' WHERE year1='$year'";
    $result1=mysqli_query($conn,$query);
    ?>
    <meta http-equiv="refresh"content="0;url=database.php">
<?php 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       button,a{
            background-color: red;
            color: white;
            padding-left: 10px;
            padding-right: 10px;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <button><a href="database.php">BACK</a>
    </button>
    <h1>Update</h1>
    <fieldset>
        <form action="#" method="POST">
            <label for="fno"><b>farmer no.</b></label>
            <input type="text" name="fno" id="fno" value="<?php echo$row["f_no1"];?>">
            <br>
            <br>
            <label for="c_no"><b>crop no.:</b></label>
            <input type="text" name="c_no" id="c_no" value="<?php echo$row["c_no1"];?>">
            <br><br>
            <label for="year1"><b>year</b></label>
            <input type="text" name="year1" id="year1" value="<?php echo$y;?>">
            <br>
            <br>
            <input type="submit" name="submit" id="submit" value="update">
            <input type="reset" name="reset" id="reset" value="cancel">
        </form>
    </fieldset>
</body>
</html>