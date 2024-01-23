<?php 

$conn=mysqli_connect("localhost","root","","php");
/*$query="CREATE TABLE product(p_no int,p_name varchar(20),price float)";
$result=mysqli_query($conn,$query);
if($result)
{
    echo"<script>alert('table created successfully!');</script>";
}else{
    echo"<script>alert('table already exist!');</script>";
}*/

if(isset($_POST['submit']))
{
    $p_n=$_POST['no'];
    $new=$_POST['new'];

    $query="UPDATE product SET price='$new' WHERE p_no='$p_n'";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        echo"<script>alert('record update successfully!');</script>";
    }else{
        echo"<script>alert('record is not updated!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Q3.css">
</head>
<body>
    <h1>update price of product!</h1>
    <fieldset>
    <form action="#" method="POST">
        <div>
            <label for="no"><b>PRODUCT NO.:</b></label>
            <input type="number" name="no" id="no">
        </div>
        <div>
            <label for="new"><b>ENTER NEW PRICE:</b></label>
            <input type="number" name="new" id="new">
        </div>
        <div>
            <input type="submit" name="submit" id="submit" value="UPDATE">
            <input type="submit" name="submit1" value="search">
            <input type="reset" name="reset" id="reset" value="CANCEL">
        </div>
    </form>
    </fieldset>
    <div class="td-data">
    <table>
        <tr>
        <th>p_no</th>
        <th>p_name</th>
        <th>price</th>
        </tr>
        <tr>
    <?php 
    error_reporting(0);
    $p_n=$_POST['no'];
    $query="SELECT * FROM product WHERE p_no='$p_n'";
    $result1=mysqli_query($conn,$query);
     while($row=mysqli_fetch_array($result1))
     {
    ?>
    <td><?php echo$row['p_no'] ?></td>
    <td><?php echo$row['p_name'] ?></td>
    <td><?php echo$row['price'] ?></td>
 <?php
    }
    ?>
    </tr>
    </table>
    </div>
</body>
</html>