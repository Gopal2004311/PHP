<?php 
$p=$_GET["pn"];
$conn=mysqli_connect("localhost","root","","php");

$query="SELECT * FROM policy_info WHERE p_no='$p'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);

?>
<?php 
if(isset($_POST["submit"]))
{
    $conn=mysqli_connect("localhost","root","","php");
    $p_no=$_POST["p_no"];
    $p_name=$_POST["p_name"];
    $m=$_POST["m_a"];
    $p_a=$_POST["p_a"];
    $term=$_POST["p_term"];

    $query="UPDATE policy_info SET p_no='$p_no',p_name='$p_name',maturity_amt='$m',prem_amt='$p_a',policy_term='$term' WHERE p_no='$p_no'";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        echo"<script>alert('Record updated successfully!');</script>";
        ?>
        <meta http-equiv="refresh" content="0;url=database.php">
        <?php
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
    <h1>Update Policy information!</h1>
    <fieldset>
        <form action="#" method="POST">
            <label for="p_no"><b>Policy No.:</b></label>
            <input type="number" name="p_no" id="p_no" value="<?php echo$p;?>" readonly><br>
            <br>
            <label for="p_name"><b>Policy Name:</b></label>
            <input type="text" name="p_name" id="p_name" value="<?php echo$row['p_name'];?>"><br>
            <br>
            <label for="m_a"><b>Maturity Amount:</b></label>
            <input type="number" name="m_a" id="m_a" value="<?php echo$row['maturity_amt'];?>"><br>
            <br>
            <label for="p_a"><b>Premium Amount:</b></label>
            <input type="number" name="p_a" id="p_a" value="<?php echo$row['prem_amt'];?>"><br>
            <br>
            <label for="p_term"><b>Policy Term(in month):</b></label>
            <input type="text" name="p_term" id="p_term" value="<?php echo$row['policy_term'];?>"><br>
            <br>
            <input type="submit" name="submit" id="submit" value="UPDATE">
            <button><a href="database.php">BACK</a></button>
        </form>
    </fieldset>
</body>
</html>