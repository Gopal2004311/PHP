<?php 
error_reporting(0);
$conn=mysqli_connect("localhost","root","","php");
$query="SELECT *FROM employee";
$result=mysqli_query($conn,$query);
$query1="SELECT * FROM project";
$result1=mysqli_query($conn,$query1);
$query2="SELECT * FROM emp_project";
$result2=mysqli_query($conn,$query2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page.css">
    <style>
        table{
            display: inline;
            align-items: center;
            text-align: center;
            margin-left: 5%;

        }
        th,tr,td{
            padding: 5px;
            padding-left: 10px;
            padding-right: 10px;
        }
    </style>

    <title>Document</title>
</head>

<body>
    <h1>Employee table!</h1>
    <table>
        <caption>employee</caption>
        <tr>
            <th>employee no.</th>
            <th>employee name</th>
            <th>salary</th>
        </tr>
        <tr>
            <?php 
            while ($row=mysqli_fetch_assoc($result))
             {
              ?>
              <td><?php echo$row['e_no'];?></td>
              <td><?php echo$row['e_name'];?></td>
              <td><?php echo$row['salary'];?></td>
              </tr>
              <?php
            }
            ?>
    </table>
    <table>
        <caption>project</caption>
        <tr>
            <th>project_no</th>
            <th>project name</th>
            <th>duration</th>
        </tr>
        <tr>
            <?php 
            while ($row1=mysqli_fetch_assoc($result1))
             {
              ?>
              <td><?php echo$row1['p_no'];?></td>
              <td><?php echo$row1['p_name'];?></td>
              <td><?php echo$row1['duration'];?></td>
              </tr>
              <?php
            }
            ?>
    </table>
    <table>
        <caption>project and employee</caption>
        <tr>
            <th>employee no.</th>
            <th>project no.</th>
        </tr>
        <tr>
            <?php 
            while ($row2=mysqli_fetch_assoc($result2))
             {
              ?>
              <td><?php echo$row2['e_no1'];?></td>
              <td><?php echo$row2['p_no1'];?></td>
              </tr>
              <?php
            }
            ?>
    </table>

</body>

</html>