<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Enter index for delete element!</h1>
    <form action="#" method="POST">
        <label for="index">Enter index for delete the element:</label>
        <input type="text" name="index" id="index"><br>
        <br>
        <label for="select"><b>select your choice:</b></label>
        <select name="select">
            <option value="display">Display array elements</option>
            <option value="size">display size of array</option>
            <option value="delete">delete element from given index</option>
            <option value="reverse">reverse element</option>
            <option value="traverse">traverse elements in random order</option>
        </select>
        <br>
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
    $index=$_POST["index"];
    $choice=$_POST["select"];
    $arr=array("c"=>"choice","s"=>"sort","n"=>"name","r"=>"relation");
    switch ($choice) {
        case 'display':
                echo"original array is:"."<br>";
                foreach($arr as $key=>$value)
                {
                    echo$key."=>".$value."<br>";
                }
            break;
        case 'size':
            echo"original array is:"."<br>";
            foreach($arr as $key=>$value)
            {
                echo$key."=>".$value."<br>";
            }
            echo"<br>";
            $size=count($arr);
            echo"size of array is:".$size;
            break;
        case 'delete':
            echo"original array is:"."<br>";
            foreach($arr as $key=>$value)
            {
                echo$key."=>".$value."<br>";
            }
            echo"<br>";
            $i=$_POST["index"];
            unset($arr[$i]);
            echo"After deleting element array is:"."<br>";
            foreach($arr as $key=>$value)
            {
                echo$key."=>".$value."<br>";
            }
            break;
        case 'reverse':
            echo"original array is:"."<br>";
            foreach($arr as $key=>$value)
            {
                echo$key."=>".$value."<br>";
            }
            echo"<br>";
            $arr1=array_reverse($arr);
            echo"reverse array is:"."<br>";
            foreach($arr1 as $key=>$value)
            {
                echo$key."=>".$value."<br>";
            }
            echo"<br>";
            break;
        case 'traverse':
            echo"original array is:"."<br>";
            foreach($arr as $key=>$value)
            {
                echo$key."=>".$value."<br>";
            }
            echo"<br>";
           echo"random element is:".array_rand($arr);
           break;   
    }
}
?>