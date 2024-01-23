<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(isset($_POST["submit"]))
{
   
    $en=$_POST["e_name"];
    $e=$_POST["e_no"];
    $s=$_POST["salary"];

    $query="INSERT INTO employee VALUES('$e','$en','$s')";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        echo"<script>alert('Record inserted!');</script>";
    }

    $p=$_POST["p_no"];
    $pn=$_POST["p_name"];
    $d=$_POST["duration"];

    $query1="INSERT INTO project VALUES('$p','$pn','$d')";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
        echo"<script>alert('Record second inserted!');</script>";
    }
}
}
?>
<?php 

error_reporting(0);
$query="SELECT * FROM employee ORDER BY e_no DESC LIMIT 1";
$result=mysqli_query($conn,$query);
if($result)
{
    $last=mysqli_fetch_assoc($result);
    $en=$last['e_no'];
    if($en==null)
    {
        $new='1';
    }else{
        $new=$en+1;
    }
}

$query1="SELECT * FROM project ORDER BY p_no DESC LIMIT 1";
$result2=mysqli_query($conn,$query1);
if($result2)
{
    $row=mysqli_fetch_assoc($result2);
    $l=$row['p_no'];
    if($l==null)
    {
        $n='101';
    }else{
        $n=$l+1;
    }
}

?>
<?php 
error_reporting(0);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if($_POST["submit1"])
    {
        $eno=$_POST["eno"];
        $pno=$_POST["pno"];

        $query="INSERT INTO emp_project VALUES('$eno','$pno')";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            echo"<script>alert('Record three are inserted!');</script>";
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
        body{
   height: auto;
   width: 100%;
   margin: 0;
   padding: 0;
   background-color:gray;
}
        fieldset{
            margin-right: 25%;
            margin-left: 25%;
            border-radius: 5px;
            background-color: white;
        }
        h1{
            text-align: center;
            justify-content: center;
            align-items: center;
            font-style: italic;
            background:radial-gradient(red,green,blue);
            color: lightblue;
            margin-left: 25%;
            margin-right: 25%;
            margin-top:5%;
            border-radius: 5px;
        }
        input{
            padding-right: 25%;
            size: 25%;
            outline: none;
            border-radius: 5px;
            border-color: white;

        }
        input:hover{
            border-color: lightblue;
        }
    </style>
</head>
<body>
    <h1>Enter form data for inserting into database!</h1>
    <fieldset>
    <form action="<?php echo$_SERVER['PHP_SELF'];?>" method="POST">
        
        <label for="e_no"><b>Employee No.:</b></label><br>
        <input type="text" name="e_no" id="e_no" value="<?php echo$new; ?>" readonly>
        <br>
        <label for="e_name"><b>Employee Name:</b></label><br>
        <input type="text" name="e_name" id="e_name" required>
        <br>
        <label for="salary"><b>Enter Salary:</b></label><br>
        <input type="number" name="salary" id="salary" required>
   <br>
        <label for="p_no"><b>Project No.:</b></label><br>
        <input type="text" name="p_no" id="p_no" value="<?php echo$n; ?>" readonly>
        <br>
        <label for="p_name"><b>Enter Project Name:</b></label><br>
        <input type="text" name="p_name" id="p_name" required>
        <br>
        <label for="duration"><b>Enter Duration of Project:</b></label><br>
        <input type="number" name="duration" id="duration" required>
      <br>
    <input type="submit" name="submit" id="submit" value="INSERT">
    <input type="reset" name="reset" id="reset" value="CANCEL">
    </form>
</fieldset>
<fieldset>
    <h2>Insert data for third table!(optional)</h2>
    <form action="<?php echo$_SERVER['PHP_SELF'];?>" method="POST">
        <label for="eno"><b>Enter employee no.:</b></label><br>
        <input type="number" name="eno" id="eno"><br>
        <br>
        <label for="pno"><b>Enter project no.:</b></label><br>
        <input type="number" name="pno" id="pno"><br>
        <br>
        <input type="submit" name="submit1" id="submit1" value="INSERT">
        <input type="reset" name="reset" id="reset" value="CANCEL">
        <a href="database.php">Database</a>
    </form>
</fieldset>
</body>
</html>