<center><?php
require_once("database.php");
error_reporting(0);
if(isset($_POST["submit"]))
{
  $first_name=$_POST["f_name"];
  $last_name=$_POST["last_name"];
  $gender=$_POST["gender"];
  $class1=$_POST["class"];
  $adr=$_POST["adr1"];
  $hoby=$_POST["hoby"];
  $h="";
  foreach($hoby as $ch)
  {
    $h.=$ch.",";
  }

  $sql="INSERT INTO student1 VALUES('$first_name','$last_name','$gender','$class1','$adr','$h')";
  if(mysqli_query($conn,$sql))
  {
    echo"<h1>Record inserted successfully!</h1>";
   
  }else{
    echo"ERROR:$sql".mysqli_error($conn);
  }
  //mysqli_close($conn);
}

?>
</center>
<?php
error_reporting(0);
require_once("database.php");
require_once("function.php");
  $result=access($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="s.css">
</head>
<body>
    <table border="1px solid black">
        <caption>Student information!</caption>
        <div class="td-data">
        <tr>
          <th>sr.no.</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>gender</th>
            <th>class</th>
            <th>address</th>
            <th>hobbies</th>
            <th>operations</th>
        </tr>
        
       <tr>
        <?php
        error_reporting(0);
        $i=1;
           while($row=mysqli_fetch_assoc($result))
           {
            ?>
            <td><?php echo$i;?></td>
            <td><?php echo "$row[first_name]";?></td>
            <td><?php echo "$row[last_name]";?></td>
            <td><?php echo "$row[gender]";?></td>
            <td><?php echo "$row[class]";?></td>
            <td><?php echo "$row[address1]";?></td>
            <td><?php echo "$row[hobbies]";?></td>
            <td><a href="update.php"><button id="update">Update</button></a>
            <a href="delete.php?fn=$row[first_name]"><button id="delete" name="delete">Delete</button></a></td>
            </tr>
           <?php
           $i++;
           }
          
        ?>
        </div>
       
    </table>
</body>
</html>