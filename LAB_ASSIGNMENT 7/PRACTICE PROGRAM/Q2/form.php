<!--2. Consider the following entities and their relationships
Customer (c_no, c_name, c_city, c_ph_no )
Ticket (t_no, booking_date, fare, traveling_date)
The relationship between Customer and Ticket is one-to-many. Create a RDB in 3 NF for the
above.
Using the above database, write a PHP script to accept date and display,
1) The total fare collected from customers on a given date.
2) Ticket details booked by the customer.-->
<?php
require "insert.php";
error_reporting(0);
try {
    $conn = mysqli_connect("localhost", "root", "", "php");
    if ($conn) {
        $query = "SELECT * FROM customer ORDER BY c_no DESC LIMIT 1";
        $result = mysqli_query($conn, $query);
        if ($result) {
            $data = mysqli_fetch_assoc($result);
            $c_no = $data["c_no"];
            if ($c_no == null) {
                $new = "1";
            } else {
                $new = $c_no + 1;
            }
        } else {
            throw new Exception("Server not connected!");
        }} else {
        throw new Exception("Server does not connected!");
    }
} catch (Exception $error) {
    echo "<script>alert('{$error->getMessage()}');</script>";
}
try {
    if ($conn) {
        $query1 = "SELECT * FROM ticket ORDER BY t_no DESC LIMIT 1";
        $result1 = mysqli_query($conn, $query1);
        if ($result1) {
            $data1 = mysqli_fetch_assoc($result1);
            $t_no = $data1["t_no"];
            if ($t_no == null) {
                $new1 = "101";

            } else {
                $new1 = $t_no + 1;
            }
        } else {
            throw new Exception("Server not connected!");
        }
    } else {
        throw new Exception("Server not connected!");
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
    <h1>Insert data into database!</h1>
    <fieldset>
        <h2>Customer Details!</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="c_no"><b>Customer No.:</b></label>
            <input type="number" name="c_no" id="c_no" value="<?php echo $new; ?>" readonly><br>
            <br>
            <label for="c_name"><b>Customer Name:</b></label>
            <input type="text" name="c_name" id="c_name"><br>
            <br>
            <label for="city"><b>Select City:</b></label>
            <select name="city" id="city">
                <option value="shrirampur">shrirampur</option>
                <option value="pune">pune</option>
                <option value="mumbai">mumbai</option>
                <option value="nagpur">nagpur</option>
                <option value="nashik">nashik</option>
                <option value="rahuri">rahuri</option>
                <option value="nagar">nagar</option>
                <option value="other">other</option>
            </select><br>
            <br>
            <label for="c_ph_no"><b>Customer Mobile No.:</b></label>
            <input type="number" name="c_ph_no" id="c_ph_no"><br>
            <br>
            <div>
                <input type="submit" name="submit1" id="submit1" value="INSERT">
                <button><a href="database.php">DATABASE</a></button>
                <input type="reset" name="reset" id="reset" value="CANCEL">
                <button><a href="Q2.php">BACK</a></button>
            </div>
        </form>
    </fieldset>
    <fieldset>
        <h2>Ticket Details!</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="c_no1"><b>Customer No.:</b></label>
            <input type="number" name="c_no1" id="c_no1"><br>
            <br>
            <label for="t_no"><b>Ticket No.:</b></label>
            <input type="number" name="t_no" id="t_no" value="<?php echo $new1; ?>" readonly><br>
            <br>
            <label for="b_date">Booking Date:</label>
            <input type="date" name="b_date" id="b_date"><br>
            <br>
            <label for="fare"><b>Fare:</b></label>
            <input type="text" name="fare" id="fare"><br>
            <br>
            <label for="t_date"><b>Traveling Date:</b></label>
            <input type="date" name="t_date" id="t_date"><br>
            <br>
            <div>
                <input type="submit" name="submit2" id="submit2" value="INSERT">
                <button><a href="database.php">DATABASE</a></button>
                <input type="reset" name="reset" id="reset" value="CANCEL">
                <button><a href="Q2.php">BACK</a></button>
            </div>
        </form>
    </fieldset>
</body>
</html>
