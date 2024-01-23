<?php 
error_reporting(0);
$conn=mysqli_connect("localhost","root","","php");
$query="SELECT * FROM customer";
$result=mysqli_query($conn,$query);
$query1="SELECT * FROM ticket";
$result1=mysqli_query($conn,$query1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            display: inline-block;
            margin-left: 2%;
            margin-right: 2%;
        }
        h1{
            text-align: center;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <button><a href="form.php">back</a>
    </button>
    <h1>database!</h1>
    <table border="1px solid black">
        <caption>Customer Details!</caption>
        <tr>
            <th>Customer No.</th>
            <th>Customer Name</th>
            <th>City</th>
            <th>Phone No.</th>
            <th colspan="2">Operations</th>
        </tr>
        <tr>
            <?php 
            while($row=mysqli_fetch_assoc($result))
            {
            ?>
            <td><?php echo$row["c_no"];?></td>
            <td><?php echo$row["c_name"];?></td>
            <td><?php echo$row["c_city"];?></td>
            <td><?php echo$row["c_ph_no"];?></td>
            <td><a href="update.php?cn=<?php echo$row["c_no"];?>" name="update">update</a></td>
            <td><a href="delete.php?cn=<?php echo$row["c_no"];?>">delete</a></td>
            </tr>
            <?php 
            }
            ?>
    </table>
    <table border="1px solid black">
        <caption>Ticket Details!</caption>
        <tr>
            <th>Ticket No.</th>
            <th>Customer No.</th>
            <th>Booking Date</th>
            <th>Fare</th>
            <th>Traveling Date</th>
            <th colspan="2">Operations</th>
        </tr>
        <tr>
            <?php 
            while($row1=mysqli_fetch_assoc($result1))
            {
            ?>
            <td><?php echo$row1["t_no"];?></td>
            <td><?php echo$row1["c_no1"];?></td>
            <td><?php echo$row1["booking_date"];?></td>
            <td><?php echo$row1["fare"];?></td>
            <td><?php echo$row1["traveling_date"];?></td>
            <td><a href="update1.php?tn=<?php echo$row1["t_no"];?>">update</a></td>
            <td><a href="delete1.php?tn=<?php echo$row1["t_no"];?>">delete</a></td>
            </tr>
            <?php 
            }
            ?>
    </table>
</body>
</html>