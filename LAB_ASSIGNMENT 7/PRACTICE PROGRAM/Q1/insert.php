
<?php 
error_reporting(0);
$conn=mysqli_connect("localhost","root","","php");
$query="SELECT * FROM company ORDER BY c_no DESC LIMIT 1";
$result=mysqli_query($conn,$query);
if($result)
{
   $data=mysqli_fetch_assoc($result);
   $c_no=$data["c_no"];
   if($c_no==null)
   {
       $new="1";
   }else{
       $new=$c_no+1;
   }
}

$query1="SELECT * FROM person ORDER BY p_no DESC LIMIT 1";
$result1=mysqli_query($conn,$query1);
if($result1)
{
    $data1=mysqli_fetch_assoc($result1);
    $p_no=$data1["p_no"];
    if($p_no==null)
    {
        $new1="101";
    }else{
        $new1=$p_no+1;
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
        h1{
            margin-left: 25%;
            margin-right: 25%;
            font-style: italic;
        }
        fieldset{
            margin-left: 25%;
            margin-right: 25%;
            border-radius: 5px; 
        }
    </style>
</head>
<body>
    <button><a href="Q1.php">BACK</a></button>
    <h1>Details For Inserting into the database!</h1>
    <fieldset>
        <h2>Company Details!</h2>
        <form action="#" method="POST">
            <label for="c_no"><b>Company No.:</b></label>
            <input type="number" name="c_no" id="c_no" value="<?php echo$new;?>" readonly><br>
            <br>
            <label for="c_name"><b>Company Name:</b></label>
            <input type="text" name="c_name" id="c_name" required><br>
            <br>
            <label for="c_city"><b>Company City:</b></label>
            <input type="text" name="c_city" id="c_city" required><br>
            <br>
            <label for="c_share_value"><b>Company Share Value:</b></label>
            <input type="number" name="c_share_value" id="c_share_value" required><br>
            <br>
            <div>
                
                <input type="submit" name="submit" id="submit" value="INSERT">
                <input type="reset" name="reset" id="reset" value="CANCEL">
                <button><a href="database.php">DATABASE</a></button>
            </div>
        </form>
    </fieldset>
    <fieldset>
        <h2>Person Details!</h2>
        <form action="#" method="POST">
            <label for="p_no"><b>Person No.:</b></label>
            <input type="number" name="p_no" id="p_no" value="<?php echo$new1;?>" readonly required><br>
            <br>
            <label for="p_name"><b>Person Name:</b></label>
            <input type="text" name="p_name" id="p_name" required><br>
            <br>
            <label for="p_city"><b>Person City:</b></label>
            <input type="text" name="p_city" id="p_city" required><br>
            <br>
            <label for="p_ph"><b>Person Mobile No.:</b></label>
            <input type="number" name="p_ph" id="p_ph" required><br>
            <br>
            <div>
                <input type="submit" name="submit1" id="submit1" value="INSERT">
                <input type="reset" name="reset" id="reset" value="CANCEL">
                <button><a href="database.php">DATABASE</a></button>
            </div>
        </form>
    </fieldset>
    <fieldset>
        <h2>Relationship Details!</h2>
        <form action="#" method="POST">
            <label for="c_no1"><b>Company No.:</b></label>
            <input type="number" name="c_no1" id="c_no1"><br>
            <br>
            <label for="p_no1"><b>Person No.:</b></label>
            <input type="number" name="p_no1" id="p_no1"><br>
            <br>
            <label for="share"><b>Quantity Of Share:</b></label>
            <input type="number" name="share" id="share"><br>
            <br>
            <div>
                <input type="submit" name="submit2" id="submit2" value="INSERT">
                <input type="reset" name="reset" id="reset1" value="CANCEL">
                <button><a href="database.php">DATABASE</a></button>
            </div>
        </form>
    </fieldset>
</body>
</html>
<?php 
error_reporting(0);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["submit"]))
    {
        $conn=mysqli_connect("localhost","root","","php");

        /*$query="CREATE TABLE company(c_no INT PRIMARY KEY,c_name VARCHAR(30),c_city VARCHAR(30),c_share_value INT)";
        if(mysqli_query($conn,$query))
        {
            echo"<script>alert('First table created!');</script>";
        }

        $query1="CREATE TABLE person(p_no INT PRIMARY KEY,p_name VARCHAR(30),p_city VARCHAR(30),p_ph_no INT)";
        if(mysqli_query($conn,$query1))
        {
            echo"<script>alert('Second table created!');</script>";
        }

        $query2="CREATE TABLE company_person(c_no1 INT,FOREIGN KEY(c_no1)REFERENCES company(c_no),p_no1 INT,FOREIGN KEY(p_no1)REFERENCES person(p_no),no_of_share INT)";
        if(mysqli_query($conn,$query2))
        {
            echo"<script>alert('Third table created!');</script>";
        }*/

        $c_no=$_POST["c_no"];
        $c_n=$_POST["c_name"];
        $c_city=$_POST["c_city"];
        $s=$_POST["c_share_value"];

        $query3="INSERT INTO company VALUES('$c_no','$c_n','$c_city','$s')";
        if(mysqli_query($conn,$query3))
        {
            echo"<script>alert('First Record Inserted Successfully!');</script>";
             ?>
             <meta http-equiv="refresh" content="0;insert.php">
             <?php 
        }
    }
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["submit1"]))
    {
        $conn=mysqli_connect("localhost","root","","php");

        $pn=$_POST["p_no"];
        $pname=$_POST["p_name"];
        $pc=$_POST["p_city"];
        $phone=$_POST["p_ph"];
        $query="INSERT INTO person VALUES('$pn','$pname','$pc','$phone')";
        if(mysqli_query($conn,$query))
        {
            echo"<script>alert('Second Record Inserted Successfully!');</script>";
            ?>
                <meta http-equiv="refresh" content="0;insert.php">
                <meta http-equiv="reload" content="0;insert.php">
            <?php
        }
    }
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["submit2"]))
    {
        $conn=mysqli_connect("localhost","root","","php");

        $p_no1=$_POST["p_no1"];
        $c_no1=$_POST["c_no1"];
        $share=$_POST["share"];

        $query="INSERT INTO company_person VALUES('$c_no1','$p_no1','$share')";
        if(mysqli_query($conn,$query))
        {
            echo"<script>alert('Third Record Inserted Successfully!');</script>";
            ?>
                <meta http-equiv="refresh" content="0;insert.php">
            <?php
        }
    }
}
?>