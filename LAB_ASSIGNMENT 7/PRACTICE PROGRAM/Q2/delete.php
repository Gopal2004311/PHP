<?php
$cn = $_GET["cn"];
try {
    $conn = mysqli_connect("localhost", "root", "", "php");
    if ($conn) {
        $query = "DELETE FROM customer WHERE c_no='$cn'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<script>alert('Record Deleted!');</script>";
            echo "<meta http-equiv='refresh' content='0;database.php'>";
        } else {
            throw new Exception("Server Problem record does not deleted ,so try again!");
        }
    } else {
        throw new Exception("Server does not connected ,so try again!");
    }

} catch (Exception $error) {
    echo "<script>alert('{$error->getMessage()}');</script>";
    echo '<meta http-equiv="refresh" content="0;database.php">';
}
