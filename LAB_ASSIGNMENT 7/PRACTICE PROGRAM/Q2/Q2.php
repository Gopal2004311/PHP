<?php
error_reporting(0);
try {
    if (isset($_POST["submit"])) {
        $conn = mysqli_connect("localhost", "root", "", "php");
        $date = $_POST["date1"];

        if ($conn) {
            $query = "SELECT * FROM customer,ticket WHERE customer.c_no=ticket.c_no1 AND booking_date='$date'";
            $result = mysqli_query($conn, $query);

            $query1 = "SELECT SUM(fare) AS s FROM ticket WHERE booking_date='$date'";
            $result1 = mysqli_query($conn, $query1);
            $data = mysqli_fetch_assoc($result1);
            $sum = $data["s"];
        } else {
            throw new Exception("Server connection might be slow, please try latter!");
        }
    }
} catch (Exception $error) {
    echo "<script>alert('{$error->getMessage()}');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Accept Date And Display Details!</h1>
    <fieldset>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
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
try {
    if (isset($result)) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <td><?php echo $row['c_no1']; ?></td>
            <td><?php echo $row['c_name']; ?></td>
            <td><?php echo $row['t_no']; ?></td>
            <td><?php echo $row['booking_date']; ?></td>
            <td><?php echo $row['fare']; ?></td>
            <td><?php echo $row['traveling_date']; ?></td>
            </tr>
            <?php
}
    } else {
        throw new Exception("Server does not connected!");
    }
} catch (Exception $error) {
    echo "<script>alert('{$error->getMessage()}');</script>";
}
?>
    </table>
        <br>
        <?php
if (!empty($sum)) {
    echo "The Total Fare Collected By Given Date is : " . "<b>" . $sum . "</b>";
} else {
    echo "Record not Found!";
}
?>
        </fieldset>
</body>
</html>
