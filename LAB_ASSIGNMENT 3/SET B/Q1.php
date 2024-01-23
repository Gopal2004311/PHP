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
            <option value="compare">compare two strings</option>
            <option value="uppercase">convert upper case</option>
            <option value="lowercase">convert lower case</option>
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
    $str1=$_POST["str1"];
    $str2=$_POST["str2"];
    $choice=$_POST["select"];

    switch ($choice) {
        case 'compare':
            if(strcmp($str1,$str2)>0)
            {
                echo"<b>".$str1."</b>"." string is greater";
            }else if(strcmp($str1,$str2)<0){
                echo"<b>".$str2."</b>"." string is greater";
            }else{
                echo"both strings are equal!";
            }
            break;
        case 'uppercase':
            $up1=strtoupper($str1);
            $up2=strtoupper($str2);
            echo"uppercase strings are:".$up1."   ".$up2;
            break;
        case 'lowercase':
            $lo1=strtolower($str1);
            $lo2=strtolower($str2);
            echo"lowercase strings are:".$lo1."    ".$lo2;
            break;
    }
}
?>