<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Calculate x<sup>y</sup> using function!
    </h1>
    <form action="<?php echo$_SERVER['PHP_SELF'] ?>" method="POST">
        <label for="x"><b>Enter coefficient:</b></label>
        <input type="number" name="x" id="x"><br>
        <br>
        <label for="y"><b>Enter power :</b></label>
        <input type="number" name="y" id="y"><br>
        <br>
        <label for="ans"><b>x<sup>y</sup>is:</b></label>
        <input type="text" name="ans" id="ans" value="<?php echo$result ?>" readonly>
        <br>
        <input type="submit" name="submit" id="submit" value="submit">
    </form>
</body>
</html>
<?php 

if(isset($_POST["submit"]))
{
    $x=$_POST["x"];
    $y=$_POST["y"];
    function power($x,$y)
    {
        $ans=1;
    for ($i=1; $i <= $y; $i++) { 
        $ans=$ans*$x;
    }
    return $ans;
}
    $result=power($x,$y);
    
}
?>