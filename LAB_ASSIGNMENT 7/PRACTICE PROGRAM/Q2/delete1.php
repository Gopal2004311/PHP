<?php
$tn = $_GET["tn"];
try {
    $conn = mysqli_connect("localhost", "root", "", "php");
    if ($conn) {
        $query = "DELETE FROM ticket WHERE t_no='$tn'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<script>alert('Record Deleted!');</script>";
            echo '<meta http-equiv="refresh" content="0;database.php">';
        } else {
            throw new Exception("Query Error:Record does not deleted!");
        }

    } else {
        throw new Exception("Server Error:Record does not deleted!");

    }
} catch (Exception $error) {
    echo "<script>alert('{$error->getMessage()}');</script>";
}
