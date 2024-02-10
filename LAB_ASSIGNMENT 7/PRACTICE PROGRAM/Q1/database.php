<?php
error_reporting(0);
$conn = mysqli_connect("localhost", "root", "", "php");

$query = "SELECT*FROM company";
$result = mysqli_query($conn, $query);
$query1 = "SELECT * FROM person";
$result1 = mysqli_query($conn, $query1);
$query2 = "SELECT*FROM company_person";
$result2 = mysqli_query($conn, $query2);

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
            border: 1px solid black;
        }
        tr,td,th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <button><a href="insert.php">BACK</a></button>
    <h1 align="center">Database!</h1>
        <input type="text" id="myInput" onkeyup="display()"><br>
        <br>
    <table id="myTable">
        <caption>Company record!</caption>
        <tr>
            <th>Company No.</th>
            <th>Company Name</th>
            <th>Company City</th>
            <th>Company Share Value</th>
            <th colspan="2">operations</th>
        </tr>
        <tr>
            <?php
while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <td><?php echo $row['c_no']; ?></td>
            <td><?php echo $row['c_name']; ?></td>
            <td><?php echo $row['c_city']; ?></td>
            <td><?php echo $row['c_share_value']; ?></td>
            <td><a href="update.php?cn=<?php echo $row['c_no']; ?>">update</a></td>
            <td><a href="delete.php?cn=<?php echo $row['c_no']; ?>">delete</a></td>
            </tr>
            <?php
}
?>
    </table>
    <table>
        <caption>Person record!</caption>
        <tr>
            <th>Person No.</th>
            <th>Person Name</th>
            <th>Person City</th>
            <th>Person Phone No.</th>
            <th colspan="2">operations</th>
        </tr>
        <tr>
            <?php
while ($row1 = mysqli_fetch_assoc($result1)) {
    ?>
            <td><?php echo $row1['p_no']; ?></td>
            <td><?php echo $row1['p_name']; ?></td>
            <td><?php echo $row1['p_city']; ?></td>
            <td><?php echo $row1['p_ph_no']; ?></td>
            <td><a href="update1.php?pn=<?php echo $row1['p_no']; ?>">update</a></td>
            <td><a href="delete1.php?pn=<?php echo $row1['p_no']; ?>" name="delete2">delete</a></td>
            </tr>
            <?php
}
?>
    </table>
    <table>
        <caption>Relationship record!</caption>
        <tr>
            <th>Company No.</th>
            <th>Person No.</th>
            <th>Quantity of share</th>
            <th colspan="2">operations</th>
        </tr>
        <tr>
            <?php
while ($row2 = mysqli_fetch_assoc($result2)) {
    ?>
            <td><?php echo $row2['c_no1']; ?></td>
            <td><?php echo $row2['p_no1']; ?></td>
            <td><?php echo $row2['no_of_share']; ?></td>
            <td><a href="update2.php?cn1=<?php echo $row2['c_no1']; ?>">update</a></td>
            <td><a href="delete2.php?cn1=<?php echo $row2['c_no1']; ?>" name="delete3">delete</a></td>
            </tr>
            <?php
}
?>
    </table>
    <script>
        const display=()=>{
            let filter=document.getElementById("myInput").value.toUpperCase().trim();
            let table=document.getElementById("myTable");
        }
    </script>
</body>
</html>