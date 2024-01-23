<?php 
error_reporting(0);
$conn=mysqli_connect("localhost","root","","php");
$query="SELECT * FROM farmer ORDER BY f_no ASC";
$result=mysqli_query($conn,$query);
$query1="SELECT * FROM crop ORDER BY c_no ASC";
$result1=mysqli_query($conn,$query1);
$query2="SELECT * FROM crop_farmer ORDER BY f_no1 ASC";
$result2=mysqli_query($conn,$query2);
?>

<?php 
if($_GET["cno"]!=null)
{
    $conn=mysqli_connect("localhost","root","","php");
 $id=$_GET["cno"];
 $query="DELETE FROM crop WHERE c_no='$id'";
 mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=database.php">
<?php 
}
?>

<?php 
if($_GET["fn"]!=null)
{
    $conn=mysqli_connect("localhost","root","","php");
 $id=$_GET["fn"];
 $query="DELETE FROM farmer WHERE f_no='$id'";
 mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=database.php">
<?php 
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
    <button><a href="insert.php" class="back">BACK</a></button>
    <h1>The database !</h1>
    <table border="1px solid black">
        <caption>Farmer Details!</caption>
        <tr>
            <th>Farmer No.</th>
            <th>Farmer Name</th>
            <th>Location</th>
            <th colspan="2">operations</th>
        </tr>
        <tr>
            <?php 
            while($row=mysqli_fetch_assoc($result))
            {
            ?>
            <td><?php echo$row['f_no']?></td>
            <td><?php echo$row['f_name']?></td>
            <td><?php echo$row['f_location']?></td>
            <?php ?>
            <td><a href="update.php?f_no=<?php echo$row['f_no']?>" class="update" name="update">update</a></td>
            <td><a href="database.php?fn=<?php echo$row['f_no']?>" class="delete" name="delete">delete</a></td>
            </tr>
            <?php 
            }
                ?>
    </table>
    <table border="1px solid black">
        <caption>Crop Details!</caption>
        <tr>
            <th>Crop No.</th>
            <th>Crop Name</th>
            <th>Crop Season</th>
            <th>Pesticides</th>
            <th colspan="2">operations</th>
        </tr>
        <tr>
            <?php 
            while($row1=mysqli_fetch_assoc($result1))
            {
            ?>
            <td><?php echo$row1['c_no'];?></td>
            <td><?php echo$row1['c_name'];?></td>
            <td><?php echo$row1['c_season'];?></td>
            <td><?php echo$row1['pesticides'];?></td>
            <td><a href="update1.php?cno=<?php echo$row1['c_no']?>" class="update">update</a></td>
            <td><a href="database.php?cno=<?php echo$row1['c_no']?>" class="delete" name="delete1">delete</a></td>
            </tr>
            <?php 
            }
            ?>
    </table>
    <table border="1px solid black">
        <caption>Relationship Details!</caption>
        <tr>
            <th>Farmer No.</th>
            <th>Crop No.</th>
            <th>Year</th>
            <th colspan="2">operations</th>
        </tr>
        <tr>
            <?php
            while($row2=mysqli_fetch_assoc($result2))
            {
            
            ?>
            <td><?php echo$row2['f_no1'];?></td>
            <td><?php echo$row2['c_no1'];?></td>
            <td><?php echo$row2['year1'];?></td>
            <td><a href="update2.php?y=<?php echo$row2['year1'];?>" class="update">update</a></td>
            <td><a href="delete.php?fn=<?php echo$row2['f_no1']?>" class="delete">delete</a></td>
</tr>
            <?php
            
        }
            ?>
        
    </table>
</body>
</html>