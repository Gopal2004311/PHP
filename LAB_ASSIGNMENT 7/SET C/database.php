<?php 
error_reporting(0);
$conn=mysqli_connect("localhost","root","","php");
$query="SELECT * FROM client";
$result=mysqli_query($conn,$query);
$query1="SELECT * FROM policy_info";
$result1=mysqli_query($conn,$query1);
$query2="SELECT * FROM client_policy";
$result2=mysqli_query($conn,$query2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <button><a href="insert.php">Back</a></button>
    <h1>The database !</h1>
    <table border="1px solid black">
        <caption>Client Details!</caption>
        <tr>
            <th>Client No.</th>
            <th>Client Name</th>
            <th>Address</th>
            <th>Birth Date</th>
            <th colspan="2">operations</th>
        </tr>
        <tr>
            <?php 
            while($row=mysqli_fetch_assoc($result))
            {
            ?>
            <td><?php echo$row['c_no']?></td>
            <td><?php echo$row['c_name']?></td>
            <td><?php echo$row['c_address']?></td>
            <td><?php echo$row['birth_date']?></td>
            <td><a href="update1.php?cn=<?php echo$row['c_no']?>" class="update">update</a></td>
            <td><a href="delete1.php?cn=<?php echo$row['c_no']?>" class="delete" name="delete1">delete</a></td>
            </tr>
            <?php 
            }
                ?>
    </table>
    <table border="1px solid black">
        <caption>Policy Details!</caption>
        <tr>
            <th>Policy No.</th>
            <th>Policy Name</th>
            <th>Maturity Amount</th>
            <th>Premium Amount</th>
            <th>Policy Term</th>
            <th colspan="2">operations</th>
        </tr>
        <tr>
            <?php 
            while($row1=mysqli_fetch_assoc($result1))
            {
            ?>
            <td><?php echo$row1['p_no'];?></td>
            <td><?php echo$row1['p_name'];?></td>
            <td><?php echo$row1['maturity_amt'];?></td>
            <td><?php echo$row1['prem_amt'];?></td>
            <td><?php echo$row1['policy_term'];?></td>
            <td><a href="update2.php?pn=<?php echo$row1['p_no']?>"class="update">update</a></td>
            <td><a href="delete2.php?pn=<?php echo$row1['p_no']?>"class="delete" name="delete2">delete</a></td>
            </tr>
            <?php 
            }
            ?>
    </table>
    <table border="1px solid black">
        <caption>Relationship Details!</caption>
        <tr>
            <th>Client No.</th>
            <th>Policy No.</th>
            <th>Date of purchase</th>
            <th colspan="2">operations</th>
        </tr>
        <tr>
            <?php
            while($row2=mysqli_fetch_assoc($result2))
            {
            
            ?>
            <td><?php echo$row2['c_no1'];?></td>
            <td><?php echo$row2['p_no1'];?></td>
            <td><?php echo$row2['date_of_purchase'];?></td>
            <td><a href="update3.php?date=<?php echo$row2['date_of_purchase']?>"class="update">update</a></td>
            <td><a href="delete3.php?date=<?php echo$row2['date_of_purchase']?>"class="delete" name="delete3">delete</a></td>
</tr>
            <?php
            
        }
            ?>
        
    </table>
</body>
</html>