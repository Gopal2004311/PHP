<?php 
error_reporting(0);
if(isset($_POST["submit"]))
{
    $conn=mysqli_connect("localhost","root","","php");
    $c_name=$_POST["client_name"];
    $date=$_POST["year"];
    $query="SELECT * FROM client,policy_info,client_policy WHERE client.c_no=client_policy.c_no1 AND policy_info.p_no=client_policy.p_no1 AND date_of_purchase='$date' AND c_name='$c_name'";
    $result=mysqli_query($conn,$query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h1>Display Policy Details of Given Client!</h1>
    <fieldset>
    <form action="#" method="POST">
        <label for="client_name"><b>Enter Client Name:</b></label>
        <input type="text" name="client_name" id="c_n"><br>
        <br>
        <label for="year"><b>Select Date:</b></label>
        <input type="date" name="year" id="year"><br>
        <br>
        <input type="submit" name="submit" id="submit" value="submit">
        <input type="reset" name="reset" id="reset" value="cancel">
        <button><a href="database.php">database</a></button>
        <button><a href="insert.php">insert</a></button>
    </form>
    <table border="1px solid black">
        <caption>Policy Details!</caption>
        <tr>
            <th>Policy Name</th>
            <th>Maturity Amount</th>
            <th>Premium Amount</th>
            <th>Policy Term</th>
            <th>Date of purchase</th>
        </tr>
        <tr>
            <?php 
            while($row=mysqli_fetch_assoc($result))
            {
            ?>
            <td><?php echo$row['p_name'];?></td>
            <td><?php echo$row['maturity_amt'];?></td>
            <td><?php echo$row['prem_amt'];?></td>
            <td><?php echo$row['policy_term'];?></td>
            <td><?php echo$row['date_of_purchase'];?></td>
            <?php 
            }
            ?>
        </tr>
    </table>
    </fieldset>
</body>
</html>