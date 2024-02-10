<?php
error_reporting(0);
$cn = $_GET["cn"];
try {
    $conn = mysqli_connect("localhost", "root", "", "php");
    if ($conn) {
        $query = "SELECT * FROM customer WHERE c_no='$cn'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
        } else {
            throw new Exception("continue");
        }
    } else {
        throw new Exception("continue");
    }

} catch (Exception $error) {
    ;
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
        }
        fieldset{
            margin-left: 25%;
            margin-right: 25%;
            border-radius: 5px;
        }
        div{
            margin-left: 5%;
        }
    </style>
</head>
<body>
    <h1>Update!</h1>
    <fieldset>
        <form action="#" method="POST">
            <label for="c_no"><b>Customer No.:</b></label>
            <input type="text" name="c_no" id="c_no" value="<?php echo $row['c_no']; ?>"><br>
            <br>
            <label for="c_name"><b>Customer Name:</b></label>
            <input type="text" name="c_name" id="c_name" value="<?php echo $row['c_name']; ?>"><br>
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
            <label for="c_p"><b>Customer Phone No.:</b></label>
            <input type="number" name="c_p" id="c_p" value="<?php echo $row['c_ph_no']; ?>"><br>
            <br>
            <div>
                <input type="submit" name="submit" id="submit" value="UPDATE">
                <button><a href="database.php">BACK</a></button>
            </div>
        </form>
    </fieldset>
</body>
</html>
<?php
error_reporting(0);
if (isset($_POST["submit"])) {
    try {
        $conn = mysqli_connect("localhost", "root", "", "php");
        if ($conn) {
            $c_no = $_POST["c_no"];
            $cname = $_POST["c_name"];
            $city = $_POST["city"];
            $cp = $_POST["c_p"];

            $query = "UPDATE customer SET c_no='$c_no',c_name='$cname',c_city='$city',c_ph_no='$cp' WHERE c_no='$cn'";
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "<script>alert('Record Updated!');</script>";
                echo '<meta http-equiv="refresh"content="0;database.php">';
            } else {
                throw new Exception("continue");
            }

        } else {
            throw new Exception("continue");
        }

    } catch (Exception $error) {
        ;
    }
}

?>