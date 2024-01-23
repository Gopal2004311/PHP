<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        calculate factorial using function!
    </h1>
    <form action="<?php echo$_SERVER['PHP_SELF']?>" method="POST">
        <label for="num"><b>Enter number:</b></label>
        <input type="number" name="num" id="num">
        <br>
        <label for="fact"><b>Factorial is:</b></label>
        <input type="text" name="fact" id="fact" value="<?php echo$result ?>" readonly>
        <br>
        <input type="submit" name="submit" id="submit">
        <input type="reset" name="reset" id="reset">
    </form>
</body>
</html>
<?php 
error_reporting(0);
if(isset($_POST["submit"]))
{
    $num=$_POST["num"];
    function factorial($num)
    {
        $f=1;
        for($i=1;$i<=$num;$i++)
        {
            $f=$f*$i;
        }
        return $f;
    }

    $result=factorial($num);
}
?>