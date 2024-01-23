<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    <h1>Form for accessing project details!</h1>
    <form action="#" method="POST">
        <label for="p_name"><b>Enter project name</b></label>
        <input type="text" name="p_name" id="p_name"><br>
        <br>
        <input type="submit" name="submit" id="submit" value="submit">
        <input type="reset" name="reset"value="reset">
       <button><a href="database.php">click to go database</a></button>
       <button><a href="insert.php">click to insert data</a></button>
    </form>
</body>
</html>
<?php 
error_reporting(0);
$conn=mysqli_connect("localhost","root","","php");
if(isset($_POST["submit"]))
{
    $p_name=$_POST["p_name"];
    $query="SELECT e_no,p_no,e_name,duration FROM project,employee,emp_project WHERE project.p_no=emp_project.p_no1 AND employee.e_no=emp_project.e_no1 AND p_name='$p_name'";
    $result=mysqli_query($conn,$query);
}
?>
<html>
<table border="1px solid black">
    <caption>project details!</caption>
    <tr>
        <th>employee no.</th>
        <th>employee name</th>
        <th>project no.</th>
        <th>project name</th>
        <th>duration</th>
    </tr>
    <tr>
        <?php
        while($row=mysqli_fetch_assoc($result))
        {
        ?>
        <td><?php echo$row['e_no']?></td>
        <td><?php echo$row['e_name']?></td>
        <td><?php echo$row['p_no']?></td>
        <td><?php echo$p_name?></td>
        <td><?php echo$row['duration']?></td>
        </tr>
        <?php
        }
        ?> 
</table>
</html>