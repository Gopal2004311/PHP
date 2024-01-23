
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
    <label for="index"><b>Enter index value for search:</b></label>
    <input type="number" name="index" id="index"><br>
    <br>
    <label for="select">
        <b>Select choice:</b>
    </label>
    <select name="select" id="select">
        <option value="display">display</option>
        <option value="search">search</option>
    </select><br>
    <br>
    <input type="submit" name="submit" id="submit" value="submit">
    <input type="reset" name="reset" id="reset" value="reset">
    </form>
</body>
</html>
<?php 

if(isset($_POST["submit"]))
{
    $choice=$_POST["select"];
    $index=$_POST["index"];
    $arr=array(
        array(1,2,3,4,5),
        array("ganesh","gopal","ram","rohan","rakesh")
    );
    switch ($choice) {
        case 'display':
            echo"The original array is:"."<br>";
            for($i=0;$i<count($arr);$i++)
            {
                for($j=0;$j<count($arr[$i]);$j++)
                {
                    echo$arr[$i][$j]."   ";
                }
                echo"<br>";
            }
            break;
        case 'search':
            echo"the value of search is:".$arr[0][$index]."     ".$arr[1][$index];
            break;
    }
}
?>