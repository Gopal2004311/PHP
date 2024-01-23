<?php 
 // echo"hello world";
   $php=mysqli_connect("localhost","root","","php");
 //  echo"connected!"."<br>";
   $query="select * from student_record";
   $result=mysqli_query($php,$query);
echo"<body align='center'>";
     echo"<table border=1 align='center'>
	<tr>
	<th>id</th>
	<th>f_name</th>
	<th>l_name</th>
	<th>email</th>
	<th>gender</th>
	<th>age</th>
	<th>class</th>
	<th>hobbies</th>
	</tr>";
   while($row=mysqli_fetch_assoc($result))
{
   ?>
   <tr>
	<td><?php echo$row['id'];?></td>
<td><?php echo$row['first_name'];?></td>
<td><?php echo$row['last_name'];?></td>
<td><?php echo$row['email'];?></td>
<td><?php echo$row['gender'];?></td>
<td><?php echo$row['age'];?></td>
<td><?php echo$row['class1'];?></td>
<td><?php echo$row['hobbies'];?></td>
</tr>
	<?php	
}
echo"</table>";
echo"</body>";
mysqli_close($php);
   
?>