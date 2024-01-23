<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Enter range to display prime numbers!</h1>
    <form action="Q1.php" method="POST">
        Enter starting of range: <input type="text" name="s">
        <br>
        Enter End of range: <input type="text" name="E" ><br>
        <br>
        <button>click</button>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    

    $start= $_POST["s"];
    $end=$_POST["E"];

    for ($i=$start; $i <= $end ; $i++) { 
         $flag=0;
        for ($j=2; $j < $i ; $j++) { 
            if ((int)$i%$j==0) {
               $flag=1;
                break;
            }
        }
       if ($flag==0){
             echo$i."<br>";
        }
    }
}

?>