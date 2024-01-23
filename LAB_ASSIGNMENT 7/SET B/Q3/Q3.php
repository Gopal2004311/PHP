<?php 
error_reporting(0);
if(isset($_POST["submit"]))
{
    $conn=mysqli_connect("localhost","root","","php");
    $c_name=$_POST["c_name"];
    $year=$_POST["year"];
    $query="SELECT count(f_no) as f FROM farmer,crop,crop_farmer WHERE farmer.f_no=crop_farmer.f_no1 AND crop.c_no=crop_farmer.c_no1 AND c_name ='$c_name' AND year1 ='$year'";
    $result=mysqli_query($conn,$query);
    $data=mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type="submit"],input[type="reset"],a,button
        {
            cursor: pointer;
            text-decoration: none;
            color: black;
            margin-left: 3%;
            margin-right: 3%;
        }
        
        fieldset{
            margin-left: 25%;
            margin-right: 25%;
            border-radius: 5px;
            margin-top: 5%;
        }
        h1{
            text-align: center;
            align-items: center;
            justify-content: center;
        }
        #lb-year{
            margin-right: 9%;
        }
        div{
            margin-left: 20%;
        }
        table{
            margin-left: 25%;
            margin-right: 25%;
            margin-top: 5%;
            margin-bottom: 5%;
        }
    </style>
</head>
<body>
    <fieldset>
    <h1>Accept crop name and year!</h1>
    <form action="<?php echo$_SERVER["PHP_SELF"];?>" method="POST">
        <label for="c_name"><b>Enter Crop Name:</b></label>
        <input type="text" name="c_name" id="c_name"><br>
        <br>
        <label for="year" id="lb-year"><b>Enter Year:</b></label>
        <input type="text" name="year" id="year"><br>
        <br>
        <div>
        <input type="submit" name="submit" id="submit" value="submit">
        <input type="reset" name="reset" id="reset" value="cancel">
        <button><a href="insert.php">insert</a></button>
        <button><a href="database.php">database</a></button>
        </div>
    </form>
    <table border="1px solid black">
        <caption>Details!</caption>
        <tr>
            <th>crop name</th>
            <th>year</th>
            <th>total farmers</th>
        </tr>
        <tr>
            <td><?php echo$c_name;?></td>
            <td><?php echo$year;?></td>
            <td><?php echo$data['f'];?></td>
        </tr>
    </table>
    </fieldset>
</body>
</html>