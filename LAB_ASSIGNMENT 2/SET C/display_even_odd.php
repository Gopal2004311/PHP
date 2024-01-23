<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>program to count even and odd numbers between given range</h1>
    <form action="display_even_odd.php" method="post">
        <u>Enter start:</u><input type="text" name="start"><br>
        <br>
        <u>Enter End:</u><input type="text" name="End">
        <br>
        <button>click</button>
    </form>
</body>
</html>
<?php
   if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $s=$_POST["start"];
        $e=$_POST["End"];
       
            echo"\t even number";
       
        echo"\t odd number";
        for ($i=$s; $i <= $e; $i++) { 
            if ($i%2==0) {
                echo"\t$i";
            }
            if($i%2!=0){
                echo"\t$i";
            }
           
        }
    }
    ?>