<?php 
    if(isset($_POST["submit"]))
    {
        $conn=mysqli_connect("localhost","root","","php1");

        $name=$_POST["name"];
        $no=$_POST["e_no"];
        $en=$_POST["e_name"];
        $adr=$_POST["adr"];
        $date=$_POST["date"];
        $salary=$_POST["salary"];
        
        $query="CREATE TABLE $name($no INT PRIMARY KEY,$en VARCHAR(30),$adr VARCHAR(30),$date DATE,$salary FLOAT)";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            echo"<script>alert('table created successfully!');</script>";
        }else{
            echo"table not created!";
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
    <h1>create table!</h1>
    <form action="#" method="POST">
        <label for="name"><b>Enter table name:</b></label>
        <input type="text" name="name" id="name"><br>
        <br>
        <h2>Enter field name for above table name</h2>
        <label for="e_no"><b>Enter field one:</b></label>
        <input type="text" name="e_no" id="e_no"><br>
        <br>
        <label for="e_name"><b>Enter field two:</b></label>
        <input type="text" name="e_name" id="e_name"><br>
        <br>
        <label for="adr"><b>Enter field third:</b></label>
        <input type="text" name="adr" id="adr"><br>
        <br>
        <label for="date"><b>Enter field Fourth:</b></label>
        <input type="text" name="date" id="date"><br>
        <br>
        <label for="salary"><b>Enter field Fifth:</b></label>
        <input type="text" name="salary" id="salary"><br>
        <br>
        <input type="submit" name="submit" id="submit" value="submit">
        <input type="reset" name="reset" id="reset">
    </form>
</body>
</html>