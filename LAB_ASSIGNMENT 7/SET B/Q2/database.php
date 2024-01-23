<?php 
error_reporting(0);
$conn=mysqli_connect("localhost","root","","php");
$query="SELECT * FROM passenger";
$result=mysqli_query($conn,$query);
$query1="SELECT * FROM train";
$result1=mysqli_query($conn,$query1);
$query2="SELECT * FROM t_p";
$result2=mysqli_query($conn,$query2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            display: inline;
            padding: 5px;
            overflow: hidden;
            margin: 2%;
        }
        h1{
            text-align: center;
            justify-content: center;
            align-items: center;
        }
        button,a{
            background-color: red;
            color: white;
            padding-left: 10px;
            padding-right: 10px;

        }
    </style>
</head>
<body>
    <button><a href="Q2.php">Back</a></button>
    <h1>The database !</h1>
    <table border="1px solid black">
        <caption>Passenger Details!</caption>
        <tr>
            <th>Passenger No.</th>
            <th>Passenger Name</th>
            <th>Address</th>
            <th>Age</th>
        </tr>
        <tr>
            <?php 
            while($row=mysqli_fetch_assoc($result))
            {
            ?>
            <td><?php echo$row['p_no']?></td>
            <td><?php echo$row['p_name']?></td>
            <td><?php echo$row['address1']?></td>
            <td><?php echo$row['age1']?></td>
            </tr>
            <?php 
            }
                ?>
    </table>
    <table border="1px solid black">
        <caption>Train Details!</caption>
        <tr>
            <th>Train No.</th>
            <th>Train Name</th>
        </tr>
        <tr>
            <?php 
            while($row1=mysqli_fetch_assoc($result1))
            {
            ?>
            <td><?php echo$row1['t_no'];?></td>
            <td><?php echo$row1['t_name'];?></td>
            </tr>
            <?php 
            }
            ?>
    </table>
    <table border="1px solid black">
        <caption>Relationship Details!</caption>
        <tr>
            <th>Passenger No.</th>
            <th>Train No.</th>
            <th>Seat No.</th>
            <th>Date</th>
            <th>Amount</th>
        </tr>
        <tr>
            <?php
            while($row2=mysqli_fetch_assoc($result2))
            {
            ?>
            <td><?php echo$row2['p_no1'];?></td>
            <td><?php echo$row2['t_no1'];?></td>
            <td><?php echo$row2['seat_no'];?></td>
            <td><?php echo$row2['date1'];?></td>
            <td><?php echo$row2['amt'];?></td>
</tr>
            <?php
            
        }
            ?>
        
    </table>
</body>
</html>