<?php 
error_reporting(0);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["submit"]))
    {
        $conn=mysqli_connect("localhost","root","","php");
        // $query="CREATE TABLE crop(c_no INT PRIMARY KEY,c_name VARCHAR(30),c_season VARCHAR(30),pesticides VARCHAR(30))";
        // $result=mysqli_query($conn,$query);
        // if($result)
        // {
        //     echo"<script>alert('First table created!');</script>";
        // }

        // $query1="CREATE TABLE farmer(f_no INT PRIMARY KEY,f_name VARCHAR(30),f_location VARCHAR(30))";
        // $result1=mysqli_query($conn,$query1);
        // if($result1)
        // {
        //     echo"<script>alert('Second table created!');</script>";
        // }

        $c_no=$_POST["c_no"];
        $c_name=$_POST["c_name"];
        $c_s=$_POST["c_s"];
        $pest=$_POST["pesticides"];
        

        $query2="INSERT INTO crop VALUES('$c_no','$c_name','$c_s','$pest')";
        $result2=mysqli_query($conn,$query2);
        if($result2)
        {
            echo"<script>alert('First Record inserted successfully!');</script>";
        }

       
    }  
}   
error_reporting(0);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if($_POST["submit1"])
    {
        $conn=mysqli_connect("localhost","root","","php");

        $f_no=$_POST["f_no"];
        $f_name=$_POST["f_name"];
        $location=$_POST["location"];

        $query3="INSERT INTO farmer VALUES('$f_no','$f_name','$location')";
        $result3=mysqli_query($conn,$query3);
        if($result3)
        {
            echo"<script>alert('Second Record inserted successfully!');</script>";
        }
    }
}
error_reporting(0);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if($_POST["submit2"])
    {
        $conn=mysqli_connect("localhost","root","","php");
        $c_no1=$_POST["c_no1"];
        $f_no1=$_POST["f_no1"];
        $year=$_POST["year"];

        $query1="INSERT INTO crop_farmer VALUES('$c_no1','$f_no1','$year')";
        $result1=mysqli_query($conn,$query1);
        if($result1)
        {
            echo"<script>alert('Third record inserted!');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset{
            margin-left: 25%;
            margin-right: 25%;
        }
        .back{
            background-color: red;
            color: white;
            padding-left: 10px;
            padding-right: 10px;
            text-decoration: none;
            cursor: pointer;
        }
        input[type="submit"],input[type="reset"],button,a
        {
            cursor: pointer;
            text-decoration: none;
            color: black;
            margin-left: 3%;
            margin-right: 3%;
            cursor: pointer;
        }
        h1{
            text-align: center;
            justify-content: center;
            align-items: center;
        }
        div{
            margin-left: 10%;
        }
    </style>
</head>
<body>
<button class="back"><a href="Q3.php" class="back">BACK</a></button>
    <h1>Data for insert into database!</h1>
    <fieldset>
        <h2>Details For Crop!</h2>
        <form action="#" method="POST">
            <label for="c_no"><b>Enter Crop No.</b></label>
            <input type="text" name="c_no" id="c_no"><br>
            <br>
            <label for="c_name"><b>Enter Crop Name:</b></label>
            <input type="text" name="c_name" id="c_name"><br>
            <br>
            <label for="c_s"><b>Select Season:</b></label>
            <select name="c_s" id="c_s">
                <option value="summer">summer</option>
                <option value="winter">winter</option>
                <option value="rainy">rainy</option>
            </select><br>
            <br>
            <label for="pesticides"><b>Select Pesticides:</b></label>
            <select name="pesticides" id="pesticides">
                <option value="abamectin">abamectin</option>
                <option value="acephate">acephate</option>
                <option value="allethrin">allethrin</option>
                <option value="azadirachtin">azadirachtin</option>
            </select>
            <br>
            <div>
            <input type="submit" name="submit" id="submit" value="INSERT">
           <input type="reset" name="reset" id="reset" value="CANCEL">
          <button> <a href="database.php">DATABASE</a></button>
          </div>
        </form>
    </fieldset>
    <fieldset>
        <h2>Details For Farmer!</h2>
        <form action="#"method="POST">
            <label for="f_no"><b>Enter Farmer No.:</b></label>
            <input type="number" name="f_no" id="f_no"><br>
            <br>
            <label for="f_name"><b>Enter Farmer Name:</b></label>
            <input type="text" name="f_name" id="f_name"><br>
            <br>
           <label for="location"><b>Select Location:</b></label>
           <select name="location" id="location">
            <option value="shrirampur">shrirampur</option>
            <option value="nashik">nashik</option>
            <option value="mumbai">mumbai</option>
            <option value="pune">pune</option>
            <option value="nagar">nagar</option>
            <option value="other">other</option>
           </select><br>
           <br>
           <div>
           <input type="submit" name="submit1" id="submit" value="INSERT">
           <input type="reset" name="reset" id="reset" value="CANCEL">
          <button> <a href="database.php">DATABASE</a></button>
          </div>
        </form>
    </fieldset>
    <fieldset>
        <h2>Details for Relation of above information!</h2>
        <form action="#" method="POST">
            <label for="c_no1"><b>Enter Crop No.</b></label>
            <input type="text" name="c_no1" id="c_no1"><br>
            <br>
            <label for="f_no1"><b>Enter Farmer No.:</b></label>
            <input type="number" name="f_no1" id="f_no"><br>
            <br>
            <label for="year"><b>Select Year:</b></label>
            <input type="year" name="year" id="year"><br>
            <br>
            <div>
            <input type="submit" name="submit2" id="submit" value="INSERT">
            <input type="reset" name="reset" id="reset" value="CANCEL">
          <button> <a href="database.php">DATABASE</a></button>
          </div>
        </form>
    </fieldset>
</body>
</html>