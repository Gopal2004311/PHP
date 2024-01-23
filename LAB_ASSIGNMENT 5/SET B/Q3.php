<?php 
error_reporting(0);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["submit"]))
    {
        $name=$_POST["name"];
        $list=$_POST["select"];
        $a=array();
        $i=0;
        foreach($list as $b)
        {
            $a[$i]=$b;
            $i++;
        }
    }
}
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
    <h1>Student name and subject</h1>
    <table border="1px solid black">
        <tr>
            <th>Student name</th>
            <th>Subject's</th>
        </tr>
        <tr>
            <td rowspan="<?php echo count($a);?>"><?php echo$name;?></td>
            <?php
            for($i=0;$i<count($a);$i++) 
            {
            ?>
            <td><?php echo$a[$i];?></td>
            </tr>
            <?php 
            }
            ?>
    </table>
    </center>
</body>
</html>