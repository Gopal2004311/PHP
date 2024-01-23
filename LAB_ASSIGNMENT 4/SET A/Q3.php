<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Maximum of Three numbers!</h1>
    <form action="<?php echo$_SERVER['PHP_SELF'];?>" method="POST">
        <label for="num1"><b>Enter first number:</b></label>
        <input type="number" name="num1" id="num1">
        <br>
        <label for="num2"><b>Enter second number:</b></label>
        <input type="number" name="num2" id="num2">
        <br>
        <label for="num3"><b>Enter third number:</b></label>
        <input type="number" name="num3" id="num3">
        <br>
        <input type="submit" name="submit" id="submit" value="submit">
        <input type="reset" name="reset" id="reset" value="reset">
    </form>
</body>
</html>
<?php 
error_reporting(0);
if(isset($_POST["submit"]))
{
    $a=$_POST["num1"];
    $b=$_POST["num2"];
    $c=$_POST["num3"];
    function maximum($p,$q,$r)
    {
        if($p>$q&&$p>$r)
        {
            return $p;
        }else if($q>$p&&$q>$r){
            return $q;
        }else{
            return $r;
        }
    }

    $ans=maximum($a,$b,$c);
    echo"<script>alert('Maximum number is $ans');</script>";
}

?>