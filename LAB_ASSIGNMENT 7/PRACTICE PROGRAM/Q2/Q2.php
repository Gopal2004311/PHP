<?php 
error_reporting(0);
if(isset($_POST["submit"]))
{
    $conn=mysqli_connect("localhost","root","","php");

    $date=$_POST["date1"];
    $query="SELECT * FROM customer,ticket WHERE customer.c_no=ticket.c_no1 AND booking_date='$date'";
    $result=mysqli_query($conn,$query);

    $query1="SELECT SUM(fare) AS s FROM ticket WHERE booking_date='$date'";
    $result1=mysqli_query($conn,$query1);
    $data=mysqli_fetch_assoc($result1);
    $sum=$data["s"];
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
            text-align: center;
            justify-content: center;
            align-items: center;
            font-style: italic;
        }
        fieldset{
            margin: 0px 25% 0px 25%;
        }
        table{
            text-align: center;
            align-items: center;
            justify-content: center;
            border: 1px solid black;
        }
        tr,td,th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Accept Date And Display Details!</h1>
    <fieldset>
    <form action="<?php echo$_SERVER['PHP_SELF'];?>" method="POST">
        <label for="date1"><b>Enter Booking Date:</b></label>
        <input type="date" name="date1" id="date"><br>
        <br>
        <div>
            <input type="submit" name="submit" id="submit" value="submit">
            <input type="reset" name="reset" id="reset" value="reset">
            <button><a href="form.php">insert</a></button>
            <button><a href="database.php">database</a></button>
        </div>
    </form>
    <table>
        <caption>Ticket Details!</caption>
        <tr>
            <th>Customer No.</th>
            <th>Customer Name</th>
            <th>Ticket No.</th>
            <th>Booking Date</th>
            <th>Fare</th>
            <th>Traveling Date</th>
        </tr>
        <tr>
            <?php 
            while($row=mysqli_fetch_assoc($result))
            {
            ?>
            <td><?php echo$row['c_no1'];?></td>
            <td><?php echo$row['c_name'];?></td>
            <td><?php echo$row['t_no'];?></td>
            <td><?php echo$row['booking_date'];?></td>
            <td><?php echo$row['fare'];?></td>
            <td><?php echo$row['traveling_date'];?></td>
            </tr>
            <?php 
            }
            ?>
    </table>
        <br>
        <?php 
        if(!empty($sum))
        {
        echo"The Total Fare Collected By Given Date is : "."<b>".$sum."</b>";
        }else{
         echo"Record not Found!"; 
        }
        ?>
        </fieldset>
</body>
</html>
