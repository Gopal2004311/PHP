<?php
/*
 $f_name=$_POST["s_name"];
 $m_name=$_POST["m_name"];
 $l_name=$_POST["last_name"];
 $g=$_POST["gender"];
 $address=$_POST["adr1"];
 $class=$_POST["class"];
 
echo" first Name of student:".$f_name;
echo"<br>";
echo" middle Name of student:".$m_name;
echo"<br>";
echo" last Name of student:".$l_name;
echo"<br>";
echo"gender:".$g;
echo"<br>";
echo"address of student:".$address;
echo"<br>";
echo"class of student:".$class;
echo"<br>";
echo"hobbies of student:"."<br>";
foreach ($_POST["ho1"] as $y) {
    echo$y."<br>";
}*/
error_reporting(0);
echo"<h2 style='text-align: center;'>student data</h2>"."<br>";
echo"<table border='1px solid black' style='margin_left:30%;'>
<tr>
  <th>first_name</th>
  <th>middle_name</th>
  <th>last_name</th>
  <th>gender</th>
  <th>address</th>
  <th>class</th>
  <th>hobbies</th>
  </tr>
  <tr>
  <td>$_POST[s_name]</td>
  <td>$_POST[m_name]</td>
  <td>$_POST[last_name]</td>
  <td>$_POST[gender]</td>
  <td>$_POST[adr1]</td>
  <td>$_POST[class]</td>
  <td><?php foreach($_POST[ho1] as $y) {echo$y;}?></td>
  </tr>
</table>";
?>