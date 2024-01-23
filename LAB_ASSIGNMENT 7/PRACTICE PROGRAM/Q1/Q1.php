<!---1. Consider the following entities and their relationships
Company (c_no, c_name, c_city, c_share_value)
Person (p_no, p_name, p_city, p_ph_no)
Relationship between Company and Person is many-to-many with descriptive attribute no_of_shares.
Using the above database, write a PHP script to display person wise share details in tabular 
format--->
<?php 
error_reporting(0);
$conn=mysqli_connect("localhost","root","","php");
$query="SELECT * FROM company,person,company_person WHERE company.c_no=company_person.c_no1 AND person.p_no=company_person.p_no1 ORDER BY p_name ASC";
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>Person wise share details!</h1>
     <table border="1px solid black">
        <tr>
            <th>Person No.</th>
            <th>Person Name</th>
            <th>City</th>
            <th>Phone No.</th>
            <th>Company Name</th>
            <th>Company City</th>
            <th>Share Value</th>
            <th>Share Quantity</th>
        </tr>
        <tr>
            <?php 
            while($row=mysqli_fetch_assoc($result))
            {
            ?>
            <td><?php echo$row['p_no'];?></td>
            <td><?php echo$row['p_name'];?></td>
            <td><?php echo$row['p_city'];?></td>
            <td><?php echo$row['p_ph_no'];?></td>
            <td><?php echo$row['c_name'];?></td>
            <td><?php echo$row['c_city'];?></td>
            <td><?php echo$row['c_share_value'];?></td>
            <td><?php echo$row['no_of_share'];?></td>
            </tr>
            <?php 
            }
            ?>
     </table>
     </center>
</body>
</html>


