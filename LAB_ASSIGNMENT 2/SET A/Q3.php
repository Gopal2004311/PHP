<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Q3.php" method="get">
        <u>Enter percentage</u>: <input type="text" name="per"><br>
        <br>
       
        <input type="submit" name="submit">
    </form>
    <?php
    $g="";
   if ($_SERVER["REQUEST_METHOD"]=="GET") {
    if (isset($_GET['submit'])) {
        $per=$_GET["per"];
        
        if ($per>70&&$per<=100) {
            $g="A+";   
        }elseif ($per>60&&$per<=70) {
            $g="A";
        }elseif ($per>=50&&$per<=60) {
            $g="B";
        }
        elseif ($per>=40&&$per<=50) {
            $g="C";
        }
        elseif ($per<40) {
            $g="F";
        }
        else{
            $g="percentage<=100";
        }
    }
   }
   ?>
    <u>Grade is</u>: <input type="text" name="grade" value="<?php echo$g;?>"><br>
        <br>
</body>
</html>






