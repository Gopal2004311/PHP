<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>To display armstrong numbers between 1 to 500!</h1>
    <form action="Q4.php" method="post">
        Enter start: <input type="text" name="s" ><br>
        <br>
        Enter End: <input type="text" name="E"><br>
        <br>
        <button>click</button>
    </form>
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST")
    {
       $start=$_POST["s"] ;
       $end=$_POST["E"];
       for ($i=$start; $i <=$end ; $i++) { 
           $sum=0;
           while ((int)$i>0) {
               $d=$i%10;
               //echo"$d";
               $sum=$sum+($d*$d*$d);
               //echo"$sum";
               $i=$i/10;
               //echo"$i";
           }
           if ($i==$sum) {
              echo"<big><strong>$i</strong></big>"."<br>";
           }
       }
    }
?>