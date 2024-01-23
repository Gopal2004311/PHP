<?php
  if ($_SERVER["REQUEST_METHOD"]=="POST") {
   
    $name=$_POST["name"];
    $address=$_POST["address"];
    $contact=$_POST["contact"];
    $src=$_POST["src"];
    $d=$_POST["dest"];
    $date=$_POST["date"];
    $g=$_POST["gender"];
    $person=$_POST["person"];
    $c=$_POST["class"];
    $p=$_POST["price"];
    $total=$p*$person;
    $gender;
    if ($g=="1") {
        $gender="Male";
    } else {
       $gender="Female";
    }

    if ($c=="1") {
        $class="Normal class";
    } else {
        $class="Spacial class";
    }
    
    echo"Name of passenger:$name"."<br>";
    echo"<br>";
    echo"Address of passenger:$address"."<br>";
    echo"<br>";
    echo"contact no.:$contact"."<br>";
    echo"<br>";
    echo"source of travel:$src"."<br>";
    echo"<br>";
    echo"Destination:$d"."<br>";
    echo"<br>";
    echo"Date of travel:$date"."<br>";
    echo"<br>";
    echo"Gender of person:$gender"."<br>";
    echo"<br>";
    echo"No.of persons:$person"."<br>";
    echo"<br>";
    echo"class:$class"."<br>";
    echo"<br>";
    echo"price of per ticket:$p"."<br>";
    echo"<br>";
    echo"<b>The total cost of tavel is:<strong>$total</strong></b>"."<br>";
  }

?>
