<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>calculate area and volume of cylinder</h1>
    <form action="<?php echo$_SERVER['PHP_SELF']?>" method="POST">
        <label for="radius"><b>radius</b></label>
        <input type="number" name="radius">
        <br>
        <label for="height"><b>height</b></label>
        <input type="number" name="height">
        <br>
        <label for="volume"><b>volume is:</b></label>
        <input type="text" name="volume" value="<?php echo$volume ?>" readonly>
        <br>
        <label for="area"><b>area is:</b></label>
        <input type="text" name="area" value="<?php echo$area ?>" readonly>
        <br>
        <input type="submit" name="submit" value="submit">
        <input type="reset" name="reset" id="reset" value="cancel">
    </form>
</body>
</html>
<?php 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["submit"]))
    {
        $r=$_POST["radius"];
        $h=$_POST["height"];
        define('pi','3.14');
       
        function area($r,$h)
        {
            $a=2*(pi*$r*$h)+2*(pi*$r*$r);
            return $a;
        }
        
        function volume($r,$h)
        {
            $v=pi*$r*$r*$h;
            return $v;
        }
        
        $area=area($r,$h);
        $volume=volume($r,$h);    
}
}
?>