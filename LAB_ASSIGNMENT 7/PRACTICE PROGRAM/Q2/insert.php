<?php
error_reporting(0);

if (isset($_POST["submit1"])) {
    $conn = mysqli_connect("localhost", "root", "", "php");

    try {
        $query1 = "CREATE TABLE customer(c_no INT PRIMARY KEY,c_name VARCHAR(30),c_city VARCHAR(30),c_ph_no INT)";
        if (mysqli_query($conn, $query1)) {
            echo "<script>alert('First Table Created!');</script>";
        } else {
            throw new Exception("continue");
        }
    } catch (Exception $error) {
        ;
    }

    $c_no = $_POST["c_no"];
    $c_name = $_POST["c_name"];
    $city = $_POST["city"];
    $c_s = $_POST["c_ph_no"];

    $query3 = "INSERT INTO customer VALUES('$c_no','$c_name','$city','$c_s')";
    if (mysqli_query($conn, $query3)) {
        echo ("<script>alert('First Record Inserted Successfully!');</script>");

        echo '<meta http-equiv="refresh" content="0;form.php">';
    }
}

if (isset($_POST["submit2"])) {
    $conn = mysqli_connect("localhost", "root", "", "php");

    try {
        $query2 = "CREATE TABLE ticket(t_no INT,booking_date DATE,fare INT,traveling_date DATE,c_no1 INT,FOREIGN KEY(c_no1)REFERENCES customer(c_no))";
        if (mysqli_query($conn, $query2)) {
            echo "<script>alert('Second Table Created!');</script>";

        } else {
            throw new Exception("continue");
        }

    } catch (Exception $error) {
        ;
    }
    $t = $_POST["t_no"];
    $c = $_POST["c_no1"];
    $date1 = $_POST["b_date"];
    $date2 = $_POST["t_date"];
    $f = $_POST["fare"];

    $query = "INSERT INTO ticket VALUES('$t','$date1','$f','$date2','$c')";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Second Record Inserted Successfully!');</script>";
        echo '<meta http-equiv="refresh" content="0;form.php">';
    }

}
