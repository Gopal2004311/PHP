<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Swap two numbers using function!</h1>
    <form action="<?php echo$_SERVER['PHP_SELF']?>" method="POST">
    <label for="num1"><b>Enter first number:</b></label>
    <input type="number" name="num1" id="num1"><br>
    <br>
    <label for="num2"><b>Enter second number:</b></label>
    <input type="number" name="num2" id="num2"><br>
    <br>
    <input type="submit" name="submit" id="submit" value="submit">
    <input type="reset" name="reset" id="reset" value="cancel">
</form>
</body>
</html>
<?php 
error_reporting(0);
if (isset($_POST["submit"])) {
   
    $a=$_POST["num1"];
    $b=$_POST["num2"];

    function swapByValue($a,$b)
    {
        echo" before The swap value is: "."a=".$a." and "."b=".$b."<br>";

        $a=$a+$b;  
        $b=$a-$b;   
        $a=$a-$b;
        echo"The swap value is(using call by value): "." a=".$a." and "." b=".$b."<br>";

    }

    function swapByReference(&$a,&$b)
    {
        echo" before The swap value is: "." a=".$a." and "."b=".$b."<br>";
        $a=$a+$b;  
        $b=$a-$b;   
        $a=$a-$b;
        echo"The swap value is(using call by reference): "." a=".$a." and "." b=".$b."<br>";
    }
    swapByValue($a,$b);
    swapByReference($a,$b);
}
?>
