<!-- Write a PHP script to count the total number of vowels (a,e, i,o,u) from the string. Show the 
occurrences of each vowel from the string.-->
<html>
    <body>
        <form action="Q2.php" method="GET">
            Enter a string : <input type="text" name="string"><br>
            <br>
            <button>click</button>
        </form>
    </body>
</html>
<?php
error_reporting(0);
 if($_SERVER["REQUEST_METHOD"]=="GET")
 {
  $str=$_GET['string'];
  $a=0;
  $e=0;
  $I=0;
  $o=0;
  $u=0;

  
  for ($i=0; $i < strlen($str); $i++) { 
     
    if ($str[$i]=='A'||$str[$i]=='a') {
        $a++;
    }elseif ($str[$i]=='E'||$str[$i]=='e') {
        $e++;
    }elseif ($str[$i]=='I'||$str[$i]=='i') {
        $I++;
    }elseif ($str[$i]=='O'||$str[$i]=='o') {
        $o++;
    }elseif($str[$i]=='U'||$str[$i]=='u'){
        $u++;
    }
  }

  echo"total 'A' or 'a' is : ".$a."<br>"; 
  echo"total 'E' or 'e' is : ".$e."<br>"; 
  echo"total 'I' or 'i' is : ".$I."<br>"; 
  echo"total 'O' or 'o' is : ".$o."<br>"; 
  echo"total 'U' or 'u' is : ".$u."<br>"; 

 }
?>