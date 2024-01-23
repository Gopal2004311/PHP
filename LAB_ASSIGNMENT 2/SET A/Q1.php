<html>
    <body>
        <form action="Q1.php" method="post">
            Enter a year:<input type="text" name="ye"><br>
            <button>click me!</button>
        </form>
    </body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    

    $y=$_POST['ye'];
    if ($y%4==0) {
        echo"$y is a leap year!";
    }
    else {
        echo"$y is not leap year!";
    }
}
?>
