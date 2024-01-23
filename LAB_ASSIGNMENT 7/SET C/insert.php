<?php
error_reporting(0);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(isset($_POST["submit"]))
{
    $conn=mysqli_connect("localhost","root","","php");

    $c_no=$_POST["c_no"];
    $c_name=$_POST["c_name"];
    $c_address=$_POST["adr"];
    $birth=$_POST["birth"];

    $query="INSERT INTO client VALUES('$c_no','$c_name','$c_address','$birth')";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        echo"<script>alert('First record inserted successfully!');</script>";
    }
}   
}
if(isset($_POST["submit1"]))
{
    $conn=mysqli_connect("localhost","root","","php");

    $p_no=$_POST["p_no"];
    $p_name=$_POST["p_name"];
    $m_amt=$_POST["m_amt"];
    $p_amt=$_POST["p_amt"];
    $t=$_POST["term"];

    $query1="INSERT INTO policy_info VALUES('$p_no','$p_name','$m_amt','$p_amt','$t')";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
        echo"<script>alert('Second record inserted successfully!');</script>";
    }
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(isset($_POST["submit2"]))
{
    $conn=mysqli_connect("localhost","root","","php");

    $c_no1=$_POST["c_no1"];
    $p_no1=$_POST["p_no1"];
    $date=$_POST["date"];
   
    $query2="INSERT INTO client_policy VALUES('$c_no1','$p_no1','$date')";
    $result2=mysqli_query($conn,$query2);
    if($result2)
    {
        echo"<script>alert('Third record inserted successfully!');</script>";
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Insert data into database!</h1>
    <fieldset>
        <h2>Enter client Details!</h2>
    <form action="#" method="POST">
        <label for="c_no"><b>Enter Client No.:</b></label>
        <input type="text" name="c_no" id="c_no" placeholder="Enter Client No.">
        <br>
        <label for="c_name"><b>Enter Client Name:</b></label>
        <input type="text" name="c_name" id="c_name" placeholder="Enter Client Name">
        <br>
        <label for="adr"><b>Enter Client Address:</b></label>
        <input type="text" name="adr" id="adr" placeholder="Enter Client Address"><br>
        <br>
        <label for="birth"><b>Select Birth Date:</b></label>
        <input type="date" name="birth" id="date" placeholder="Select Birth Date"><br>
        <br>
        <div>
        <input type="submit" name="submit" id="submit" value="SUBMIT">
        <input type="reset" name="reset" id="reset" value="CANCEL">
        <a href="database.php">DATABASE</a>
        <a href="Q1.php">BACK</a>
        </div>
        </form>
    </fieldset>
    <fieldset>
        <h2>Enter Policy Details!</h2>
        <form action="#" method="POST">
        <label for="p_no"><b>Enter Policy No.:</b></label>
        <input type="number" name="p_no" id="p_no" placeholder="Enter Policy No.">
        <br>
        <label for="p_name"><b>Enter policy Name:</b></label>
        <input type="text" name="p_name" id="p_name" placeholder="Enter policy Name">
        <br>
        <label for="m_amt"><b>Enter Maturity Amount:</b></label>
        <input type="number" name="m_amt" id="m_amt" placeholder="Enter Maturity Amount">
        <br>
        <label for="p_amt"><b>Enter Premium Amount:</b></label>
        <input type="number" name="p_amt" id="p_amt" placeholder="Enter premium Amount">
        <br>
        <label for="term"><b>Policy Term(in month):</b></label>
        <input type="text" name="term" id="term" placeholder="policy term:">
        <br>
        <div>
        <input type="submit" name="submit1" id="submit" value="SUBMIT">
        <input type="reset" name="reset" id="reset" value="CANCEL">
        <a href="database.php">DATABASE</a>
        <a href="Q1.php">BACK</a>
        </div>
    </form>
</fieldset>
<fieldset>
    <h2>optional details for third table many to many relation</h2>
    <form action="#" method="POST">
        <label for="c_no1"><b>Enter Client No.:</b></label>
        <input type="text" name="c_no1" id="t_no1" placeholder="Enter Client No.">
        <br>
        <label for="p_no1"><b>Enter Policy No.:</b></label>
        <input type="text" name="p_no1" id="p_no1" placeholder="Enter Policy No.">
        <br>
        <label for="date"><b>Date of purchase:</b></label>
        <input type="date" name="date" id="date"><br>
        <br>
        <input type="submit" name="submit2" id="submit" value="SUBMIT">
        <input type="reset" name="reset" id="reset" value="CANCEL">
        <a href="database.php">DATABASE</a>
        <a href="Q1.php">BACK</a>
    </form>
</fieldset>
</body>
</html>