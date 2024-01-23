<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <label for="select"><b>Select choice:</b></label>
        <select name="select" id="select">
            <option value="sort1">sort by value in ascending order</option>
            <option value="sort2">sort by value in descending order</option>
            <option value="intersection">intersection</option>
            <option value="union">union</option>
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
    $choice=$_POST["select"];
    $arr1=array("c"=>"choice","k"=>"key","v"=>"value","u"=>"union","i"=>"intersection");
    $arr2=array("c"=>"choice","k"=>"key","v"=>"value","p"=>"php");
    switch ($choice) {
        case 'sort1':
            echo"The original first array is:"."<br>";
            echo"<pre>";
            foreach($arr1 as $k=>$v)
            {
                echo$k."   "."=>"."   ".$v."<br>";
            }
            echo"</pre>";
            echo"<br>"."The original second array is:"."<br>";
            echo"<pre>";
            foreach($arr2 as $k=>$v)
            {
                echo$k."   "."=>"."   ".$v."<br>";
            }
            echo"</pre>";
            asort($arr1);
            echo"The sorted first array is in ascending order:"."<br>";
            echo"<pre>";
            foreach($arr1 as $k=>$v)
            {
                echo$k."   "."=>"."   ".$v."<br>";
            }
            echo"</pre>";
            asort($arr2);
            echo"<br>"."The sorted second array is in ascending order:"."<br>";
            echo"<pre>";
            foreach($arr2 as $k=>$v)
            {
                echo$k."   "."=>"."   ".$v."<br>";
            }
            echo"</pre>";
            break;
        case 'sort2':
            echo"The original first array is:"."<br>";
            echo"<pre>";
            arsort($arr1);
            foreach($arr1 as $k=>$v)
            {
                echo$k."   "."=>"."   ".$v."<br>";
            }
            echo"</pre>";
            echo"<br>"."The original second array is:"."<br>";
            echo"<pre>";
            arsort($arr1);
            foreach($arr1 as $k=>$v)
            {
                echo$k."   "."=>"."   ".$v."<br>";
            }
            echo"</pre>";
            echo"The sorted first array is in descending order:"."<br>";
            echo"<pre>";
            foreach($arr1 as $k=>$v)
            {
                echo$k."   "."=>"."   ".$v."<br>";
            }
            echo"</pre>";
            arsort($arr2);
            echo"<br>"."The sorted second array is in descending order:"."<br>";
            echo"<pre>";
            foreach($arr2 as $k=>$v)
            {
                echo$k."   "."=>"."   ".$v."<br>";
            }
            echo"</pre>";
            break;
        case 'intersection':
            echo"The original first array is:"."<br>";
            echo"<pre>";
            foreach($arr1 as $k=>$v)
            {
                echo$k."   "."=>"."   ".$v."<br>";
            }
            echo"</pre>";
            echo"<br>"."The original second array is:"."<br>";
            echo"<pre>";
            foreach($arr2 as $k=>$v)
            {
                echo$k."   "."=>"."   ".$v."<br>";
            }
            echo"</pre>";
            echo"<br>";
            echo"Intersection of two arrays are:"."<br>";
            echo"<pre>";
            $arr3=array_intersect_assoc($arr1,$arr2);
            foreach($arr3 as $k=>$v)
            {
                echo$k."   "."=>"."   ".$v."<br>";
            }
            echo"</pre>";
            break;
        case 'union':
            echo"The original first array is:"."<br>";
            echo"<pre>";
            foreach($arr1 as $k=>$v)
            {
                echo$k."   "."=>"."   ".$v."<br>";
            }
            echo"</pre>";
            echo"<br>"."The original second array is:"."<br>";
            echo"<pre>";
            foreach($arr2 as $k=>$v)
            {
                echo$k."   "."=>"."   ".$v."<br>";
            }
            echo"</pre>";
            echo"<br>";
            echo"Union of two arrays are:"."<br>";
            echo"<pre>";
            $arr3=array_merge($arr1,$arr2);
            $arr3=array_unique($arr3);
            foreach($arr3 as $k=>$v)
            {
                echo$k."   "."=>"."   ".$v."<br>";
            }
            echo"</pre>";
            break;
    }
}
?>