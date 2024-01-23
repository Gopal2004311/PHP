<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <label for="str1"><b>Enter first string:</b></label>
        <input type="text" name="str1" id="str1"><br>
        <br>
        <label for="str2"><b>Enter second string:</b></label>
        <input type="text" name="str2" id="str2"><br>
        <br>
        <label for="select"><b>Select choice:</b></label>
        <select name="select" id="select">
            <option value="lowercase">convert each word into lowercase</option>
            <option value="uppercase">convert each word into uppercase</option>
            <option value="occurrences">find first and last occurrences of string 2 in string1</option>
        </select><br>
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
    $str1=$_POST["str1"];
    $str2=$_POST["str2"];
    $choice=$_POST["select"];

    switch ($choice) {
        case 'lowercase':
                echo"The first string is :".lcfirst($str1)."<br>";
                echo"The second string is :".lcfirst($str2);
            break;
        case 'uppercase':
            echo"The first string is :".ucfirst($str1)."<br>";
                echo"The second string is :".ucfirst($str2);
            break;
        case 'occurrences':
            $len=strlen($str2);
            $cf=0;
            $cl=0;
            echo$str2[$len-1]."<br>";
            echo$str2[0]."<br>";
            for($i=0;$i<strlen($str1);$i++)
            {
                if($str2[$len-1]==$str1[$i])
                {
                    $cl++;
                }else if($str2[0]==$str1[$i])
                {
                    $cf++;
                }
            }
            echo"first count is:".$cf."<br>";
            echo"last count is:".$cl."<br>";
            break;
    }
}
?>