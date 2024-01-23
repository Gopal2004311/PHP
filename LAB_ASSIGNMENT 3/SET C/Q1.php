<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <label for="str1"><b>Enter main string:</b></label>
        <input type="text" name="str1" id="str1"><br>
        <br>
        <label for="str2"><b>Enter find string:</b></label>
        <input type="text" name="str2" id="str2"><br>
        <br>
        <label for="r"><b>Enter replace string:</b></label>
            <input type="text" name="r" id="r"><br>
            <br>
        <label for="select"><b>Select choice:</b></label>
        <select name="select" id="select">
            <option value="replace">replace string2 by string 3 in string 1</option>
            <option value="reverse">reverse and display string</option>
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
    $str1=$_POST["str1"];
    $str2=$_POST["str2"];
    $str3=$_POST["r"];
    $choice=$_POST["select"];

    switch ($choice) {
        case 'replace':
            echo"first string is:".$str1."<br>";
            echo"second string is:".$str2."<br>";
            echo"third string is:".$str3."<br>";
            $size=strlen($str1);
           echo"replace string is:".str_replace($str2,$str3,$str1,$size)."<br>";
            break;
        case 'reverse':
            echo"First reverse string is:".strrev($str1)."<br>";
            echo"second reverse string is:".strrev($str2)."<br>";
            break;
    }
}
?>