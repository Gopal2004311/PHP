<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>PHP script to convert number into word!</h2>
    <form action="Q1.php" method="post">
        <b>Enter a number:</b><input type="number" name="num"><br>
        <br>
        <button type="submit">click</button>
    </form>
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $n=$_POST["num"];
        $rev=0;
        while ((int)$n>0) {
            $d=$n%10;
            $rev=$rev*10+$d;
            $n=$n/10;
        }
        while ((int)$rev>0) {
            $d=$rev%10;
            switch ((int)$d) {
                case '0':
                    echo"\tZERO";
                    break;
                case '1':
                    echo"\tONE";
                    break;
                case '2':
                    echo"\tTWO";
                    break;
                case '3':
                    echo"\tTHREE";
                    break;
                case '4':
                    echo"\tFOUR";
                    break; 
                case '5':
                    echo"\tFIVE";
                    break;
                case '6':
                    echo"\tSIX";
                    break; 
                case '7':
                    echo"\tSEVEN";
                    break; 
                case '8':
                    echo"\tEIGHT";
                    break;
                case '9':
                    echo"\tNINE";
                    break; 
                default:
                    echo"wrong input!";
                    break;
            }
            $rev=(int)$rev/10;
        }
    }


?>