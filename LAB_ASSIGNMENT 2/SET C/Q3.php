<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>program to count even and odd numbers between given range</h1>
    <form action="Q3.php" method="post">
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
        $o_count=0;
        $e_count=0;
        for ($i=$s; $i <= $e; $i++) { 
            if ($i%2==0) {
                $e_count++;
            }
            else {
                $o_count++;
            }
        }
        echo"total even numbers between $s to $e are <strong>$e_count</strong>"."<br>";
        echo"total odd numbers between $s to $e are <strong>$o_count</strong>"."<br>";
   }
?>