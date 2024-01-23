<?php
error_reporting(0);
if(isset($_POST["submit"]))
{
    $conn=mysqli_connect("localhost","root","","php");
    $t_no=$_POST["t_no"];
    $t_name=$_POST["t_name"];
    $p_no=$_POST["p_no"];
    $p_name=$_POST["p_name"];
    $age=$_POST["age"];
    $adr=$_POST["adr"];

    $query="INSERT INTO train VALUES('$t_no','$t_name')";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        echo"<script>alert('First record inserted successfully!');</script>";
    }

    $query1="INSERT INTO passenger VALUES('$p_no','$p_name','$adr','$age')";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
        echo"<script>alert('Second record inserted successfully!');</script>";
    }
}
if(isset($_POST["submit1"]))
{
    $conn=mysqli_connect("localhost","root","","php");
//    $q="CREATE TABLE t_p(t_no1 INT,FOREIGN KEY(t_no1)REFERENCES train(t_no),p_no1 INT,FOREIGN KEY(p_no1)REFERENCES passenger(p_no),date1 date,seat_no int,amt float)";
//    $result=mysqli_query($conn,$q);
//    if($result)
//    {
//     echo("<script>alert('Third table created successfully!');</script>");
//    }
//    else
//    {
    $t_no1=$_POST["t_no1"];
    $p_no1=$_POST["p_no1"];
    $date=$_POST["date"];
    $s_no=$_POST["seat_no"];
    $amt=$_POST["amt"];
    echo$amt;
    $query2="INSERT INTO t_p VALUES('$t_no1','$p_no1','$date','$s_no','$amt')";
    $result2=mysqli_query($conn,$query2);
    if($result2)
    {
        echo"<script>alert('Third record inserted successfully!');</script>";
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
        body{
            background-color: gray;
        }
        h1{
            text-align: center;
            align-items: center;
            justify-content: center;
            font-style: italic;
        }
        fieldset{
            margin-left: 25%;
            margin-right: 25%;
            background-color: white;
            border-radius: 10px;
            background-color:darkgray;
        }
        input{
               display: flex;
                justify-content: center;
                align-items: center;;
            outline: none;
            padding-right: 30%;
            margin-left: 50px;
        }
        input[type="submit"],input[type="reset"]{
            display: inline;
            background-color: white;
            color: red;
            padding: 0;
            padding-left: 10px;
            padding-right: 10px;
            border-radius: 2px;
        }
        a{
            padding-left: 10px;
            padding-right: 10px;
            background-color: white;
            color: red;
            text-decoration: none;
            margin-left: 5%;
            margin-right: 5px;
            border: 1px solid black;
            border-radius: 2px;
        }
        a:hover{
            background-color: red;
            color: white;
            border-radius: 2px;
            transition: 1ms;
        }
        input[type="reset"]:hover
        {
            background-color: red;
            color: white;
            cursor: pointer;
            transition: 1ms;
        }
        input[type="submit"]:hover
        {
            background-color: red;
            color: white;
            cursor: pointer;
            transition: 1ms;
        }
    </style>
</head>
<body>
    <fieldset>
    <h1>Insert data into database!</h1>
    <form action="#" method="POST">
        <label for="t_no"><b>Enter Train No.:</b></label>
        <input type="text" name="t_no" id="t_no">
        <br>
        <label for="t_name"><b>Enter Train Name:</b></label>
        <input type="text" name="t_name" id="t_name">
        <br>
        <label for="p_no"><b>Enter Passenger No.:</b></label>
        <input type="number" name="p_no" id="p_no">
        <br>
        <label for="p_name"><b>Enter Passenger Name:</b></label>
        <input type="text" name="p_name" id="p_name">
        <br>
        <label for="adr"><b>Enter Address of Passenger:</b></label>
        <input type="text" name="adr" id="adr">
        <br>
        <label for="age"><b>Enter Your Age:</b></label>
        <input type="number" name="age" id="age">
        <br>
        <input type="submit" name="submit" id="submit" value="SUBMIT">
        <input type="reset" name="reset" id="reset" value="CANCEL">
        <a href="database.php">DATABASE</a>
        <a href="Q2.php">BACK</a>
    </form>
</fieldset>
<fieldset>
    <h2>optional details for third table many to many relation</h2>
    <form action="#" method="POST">
        <label for="t_no1"><b>Enter Train No.:</b></label>
        <input type="text" name="t_no1" id="t_no1">
        <br>
        <label for="p_no1"><b>Enter Passenger No.:</b></label>
        <input type="text" name="p_no1" id="p_no1">
        <br>
        <label for="date"><b>Select Date:</b></label>
        <input type="date" name="date" id="date"><br>
        <br>
        <label for="seat_no"><b>Enter seat no.:</b>
        </label>
        <input type="number" name="seat_no" id="seat_no"><br>
        <br>
        <label for="amt"><b>Select Amt.:</b></label>
        <select name="amt" id="amt">
        <option value="50">50</option>
            <option value="100">100</option>
            <option value="200">200</option>
            <option value="300">300</option>
        </select><br>
        <br>
        <input type="submit" name="submit1" id="submit" value="SUBMIT">
        <input type="reset" name="reset" id="reset" value="CANCEL">
        <a href="database.php">DATABASE</a>
        <a href="Q2.php">BACK</a>
    </form>
</fieldset>
</body>
</html>