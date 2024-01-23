<?php 
 $f=$_GET["f_no"];
 $conn=mysqli_connect("localhost","root","","php");
$query1="SELECT * FROM farmer WHERE f_no='$f'";
$result=mysqli_query($conn,$query1);
$row=mysqli_fetch_assoc($result);


if(isset($_POST["submit"]))
{
    $conn=mysqli_connect("localhost","root","","php");
    $f=$_POST["fno"];
    $fname=$_POST["fname"];
    $location=$_POST["loc"];
    $query="UPDATE farmer SET f_no='$f',f_name='$fname',f_location='$location' WHERE f_no='$f'";
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
            <input type="text" name="fno" id="fno" value="<?php echo$f;?>" readonly>
            <br>
            <br>
            <label for="fname"><b>farmer name:</b></label>
            <input type="text" name="fname" id="fname" value="<?php echo$row['f_name'];?>">
            <br><br>
            <label for="loc"><b>Location</b></label>
            <input type="text" name="loc" id="loc" value="<?php echo$row['f_location'];?>">
            <br>
            <br>
            <input type="submit" name="submit" id="submit" value="update">
            <input type="reset" name="reset" id="reset" value="cancel">
        </form>
    </fieldset>
</body>
</html>