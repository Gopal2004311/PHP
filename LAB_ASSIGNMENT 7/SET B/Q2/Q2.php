<?php 
error_reporting(0);
if(isset($_POST["submit"]))
{
    $conn=mysqli_connect("localhost","root","","php");
    $date=$_POST["date"];
    $query="SELECT * FROM train,t_p,passenger WHERE train.t_no=t_p.t_no1 AND passenger.p_no=t_p.p_no1 HAVING date1='$date'";
    $result=mysqli_query($conn,$query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: lightgray;
        }
        div{
            margin-left: 25%;
            margin-right: 25%;
            border: 1px dotted black;
            justify-content: center;
            margin-top: 7.5%;
            border-radius: 10px;
            background-color: darkgray;
        }
        table{
            margin-left: 25%;
            margin-bottom: 5%;
            margin-top: 5%;
        }
        th{
            background-color: black;
            color: white;
        }
        caption{
            font-style: italic;
            color: dark black;
            font-size: large;
            border: 1px solid gray;
        }
        h1{
            text-align: center;
            align-items: center;
            justify-content: center;
            font-style: italic;
            color: mediumvioletred
        }
        .form{
            text-align: center;
            border: none;
           margin-left: 5%;
           margin-right: 5%
        }
        a,input[type="submit"],input[type="reset"]{
            margin-left: 3%;
            margin-right: 3%;
            padding-right: 7px;
            color:red;
            border-radius: 3px;
            outline: none;
            box-shadow: none;
            cursor: pointer;
        }
        a{
            text-align: center;
            text-decoration: none;
        color: red;
        background-color: white;
        border: 1px solid black;
        }
        input[type="date"]
        {
            padding-right: 30px;
        }
       #reset:hover{
            background-color: red;
            color: white;
            cursor: pointer;
       }
       #submit:hover{
            background-color: red;
            color: white;
            cursor: pointer;
       }
       a:hover{
            background-color: red;
            color: white;
       }
       label{
        margin-right: 10%;
       }
    </style>
</head>
<body>
    <div>
    <h1>Accept Date to find Maximum Passenger!</h1>
    <div class="form">
    <form action="#" method="POST">
        <label for="date"><b>Enter Date:</b></label>
        <input type="date" name="date" id="date"><br>
        <br>
        <input type="submit" name="submit" id="submit" value="SUBMIT">
        <input type="reset" name="reset" id="reset" value="CANCEL">
        <a href="insert.php">INSERT</a>
        <a href="database.php">DATABASE</a>
    </form>
    </div>
<table border="1px solid black">
    <caption>Train Details!</caption>
    <tr>
        <th>Train No.</th>
        <th>Train Name</th>
        <th>Date</th>
    </tr>
    <tr>
        <?php 
        while($row=mysqli_fetch_assoc($result))
        {
        ?>
        <td><?php echo$row['t_no'];?></td>
        <td><?php echo$row['t_name'];?></td>
        <td><?php echo$date;?></td>
         </tr>
        <?php 
        }
        ?>
</table>
</div>
</body>
</html>