<?php 
error_reporting(0);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(isset($_POST["submit"]))
{
    $Q1=array();
    $a=$_POST["Q1"];
    $i=0;
    foreach($a as $k)
    {
        $Q1[$i]=$k;
        $i++;
    }
    $Q2=array();
    $b=$_POST["Q2"];
    $i=0;
    foreach($b as $k)
    {
        $Q2[$i]=$k;
        $i++;
    }
    $Q3=array();
    $c=$_POST["Q3"];
    $i=0;
    foreach($c as $k)
    {
        $Q3[$i]=$k;
        $i++;
    }
    $Q4=array();
    $d=$_POST["Q4"];
    $i=0;
    foreach($d as $k)
    {
        $Q4[$i]=$k;
        $i++;
    }
    $Q5=array();
    $e=$_POST["Q5"];
    $i=0;
    foreach($e as $k)
    {
        $Q5[$i]=$k;
        $i++;
    }

  
    {
        if($Q1[0]=="scripting language"&&$Q1[1]=="server side scripting language")
        {
            $q1=10;
        }else if($Q1[0]=="scripting language"||$Q1[1]=="server side scripting language"){
            $q1=8;
        }else{
            $q1=0;
        }
    }
    for($i=0;$i<count($Q2);$i++)
    {
       if($Q2[$i]=="$")
       {
        $q2=10;
       }else{
        $q2=0;
       }
    }
   
    
        if($Q3[0]=="m"&&$Q3[1]=="d"&&$Q3[2]=="y")
        {
            $q3=10;
        }else if($Q3[0]=="m"&&$Q3[1]=="d"&&$Q3[2]=="y"){
            $q3=8;
        }else{
            $q3=0;
        }
    }
    {
        if($Q4[0]=="filter_var"||$Q1[1]=="preg_match")
        {
            $q4=10;
        }else{
            $q4=0;
        }
    }
    for($i=0;$i<count($Q5);$i++)
    {
    if($Q5[$i]=="php")
    {
        $q5=10;
    }
}
$total=$q1+$q2+$q3+$q4+$q5;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            text-align: center;
            align-items: center;
            justify-content: center;
            margin-right: 25%;
            margin-left: 25%;
        }
        h1{
            text-align: center;
            align-items: center;
        }
    </style>

</head>
<body>
    <h1>Result!</h1>
    <table border="1px solid black">
        <tr>
            <th>Sr.No.</th>
            <th>Questions</th>
            <th>maximum marks</th>
            <th>obtained marks</th>
        </tr>
        <tr>
            <td>1</td>
            <td>What is php?</td>
            <td>10</td>
            <td><?php echo$q1;?></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Which sign is use in php for defining a variable?</td>
            <td>10</td>
            <td><?php echo$q2;?></td>
        </tr>
        <tr>
            <td>3</td>
            <td>which letters are used for formatting a date in php?</td>
            <td>10</td>
            <td><?php echo$q3;?></td>
        </tr>
        <tr>
            <td>4</td>
            <td>which functions are used for validating email in php?</td>
            <td>10</td>
            <td><?php echo$q4;?></td>
        </tr>
        <tr>
            <td>5</td>
            <td>Which extension are use to create php script?</td>
            <td>10</td>
            <td><?php echo$q5;?></td>
        </tr>
        <tr>
            <th colspan="2">Total:</th>
            <td>50</td>
            <td><?php echo$total;?></td>
        </tr>
    </table>
</body>
</html>