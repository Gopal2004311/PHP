<?php 
$conn=mysqli_connect("localhost","root","","php");
$db=mysqli_select_db($conn,"php");
if($conn)
{
    echo"connection successful!";
}

    $table="CREATE TABLE account_details1(account_number int,account_type varchar(30),account_balance float)";
    $result=mysqli_query($conn,$table);
    if($result)
    {
        echo"<script>alert('table crated successfully!');</script>";
    }else{
        echo"<script>alert('table already exist in database!');</script>";
    }
    
if(isset($_POST['submit']))
{
    $a_number=$_POST['ac_no'];
    $a_type=$_POST['type'];
    $a_balance=$_POST['balance'];

    $query="INSERT INTO account_details1 VALUES('$a_number','$a_type','$a_balance')";
    $result1=mysqli_query($conn,$query);
    if($result1)
    {
        echo("<script>alert('record inserted successfully!');</script>");
    }else{
        echo("<script>alert('record is not inserted!');</script>");
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
    <h1>Account Registration!</h1>
    <form action="<?php echo$_SERVER['PHP_SELF'];?>" method="POST">
        <div>
       <label for="ac_no"><b>A/C No.</b></label> 
       <input type="number" name="ac_no" id="ac_no"><br>
    </div>
    <div>
        <label for="type"><b>A/C type:</b></label>
        <select name="type" id="type">
            <option value="saving">saving</option>
            <option value="current">current</option>
            <option value="FD">FD</option>
        </select>
    </div>
    <div>
        <label for="balance"><b>A/C Balance</b></label>
        <input type="number" name="balance" id="balance">
    </div>
    <div>
        <input type="submit" name="submit" id="submit" value="SAVE">
        <input type="reset" name="reset" id="reset" value="CANCEL">
    </div>
    </form>
</body>
</html>