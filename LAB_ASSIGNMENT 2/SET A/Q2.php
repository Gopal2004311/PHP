<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main">
    <form action="Q2.php" method="post">
        <u>Enter first number</u>: <input type="text" name="first" ><br>
        <br>
        <u>Enter second number</u>: <input type="text" name="second"><br>
        <br>
        <b>choice</b>: <select name="selection">
            <option value="1">Addition</option>
            <option value="2">Subtraction</option>
            <option value="3">Multiplication</option>
            <option value="4">Division</option>
        </select><br>
        <br>
        <button>click to calculate!</button><br>
        <br>
    </form>
</div>
</body>
</html>
<?php
   if ($_SERVER["REQUEST_METHOD"]=="POST") {
    
        $a=$_POST["first"];
        $b=$_POST["second"];
        $c=$_POST["selection"];
        $ans;
        switch ($c) {
            case '1':
                 $ans=$a+$b;
                 echo "Addition of $a and $b = $ans";
                break;
            case '2':
                $ans=$a-$b;
                echo"Subtraction of $a and $b = $ans";
                break;
            case '3':
                $ans=$a*$b;
                echo"Multiplication of $a and $b = $ans";
                break;
            case '4':
                $ans=$a/$b;
                echo"Division of $a and $b = $ans";
                break;
            default:
                echo"NO one choice selected!";
                break;
        }
   }
?>