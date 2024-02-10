<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
try {
    $conn = mysqli_connect("localhost", "root", "", "php");
    if ($conn) {
        $query = "SELECT * FROM customer";
        $result = mysqli_query($conn, $query);
        $query1 = "SELECT * FROM ticket";
        $result1 = mysqli_query($conn, $query1);
    } else {
        throw new Exception("Server does not connected!");
    }

} catch (Exception $error) {
    echo "<script>alert('{$error->getMessage()}');</script>";
}

?>
    <style>
        table{
            display: inline-block;
            margin-left: 2%;
            margin-right: 2%;
            margin-bottom: 2%;
        }
        h1{
            text-align: center;
            align-items: center;
            justify-content: center;
        }
        .search1{
            width: 52%;
            text-align: center;
            justify-content: center;
            align-items: center;
            margin-top: 5%;
            padding-right: 35%;
        }
        #myInput,#myInput1{
            width: 180%;
            outline: none;
            padding-top: 2%;
            padding-bottom: 2%;
            margin-left: 5%;
}
        .content1{
            margin-left: 27%;
            margin-right: 27%;
            border: 1px solid black;
            text-align: center;
            justify-content: center;
            padding: 0;
        }
    </style>
</head>
<body>
    <button><a href="form.php">back</a></button>
    <h1>database!</h1>

    <div class="content1">
    <div class="search1">
    <input type="text" name="text" id="myInput" onkeyup="display()" placeholder="search name here...">
    </div><br>
    <div class="table1">
    <table border="1px solid black" id="myTable1">
        <caption>Customer Details!</caption>
        <tr>
            <th>Customer No.</th>
            <th>Customer Name</th>
            <th>City</th>
            <th>Phone No.</th>
            <th colspan="2">Operations</th>
        </tr>
        <tr>
            <?php
try {
    if (isset($result)) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <td><?php echo $row["c_no"]; ?></td>
            <td><?php echo $row["c_name"]; ?></td>
            <td><?php echo $row["c_city"]; ?></td>
            <td><?php echo $row["c_ph_no"]; ?></td>
            <td><a href="update.php?cn=<?php echo $row["c_no"]; ?>" name="update">update</a></td>
            <td><a href="delete.php?cn=<?php echo $row["c_no"]; ?>">delete</a></td>
            </tr>
            <?php
}} else {
        throw new Exception("Server can not connected!");
    }

} catch (Exception $e) {
    echo "<script>alert('{$e->getMessage()}');</script>";
}
?>
    </table>
    </div>
    </div><br><br>
    <div class="content1">
    <div class="search1">
        <input type="number" name="myInput1" id="myInput1" onkeyup="display1()" placeholder="Enter customer no....">
    </div><br>
    <div class="table1" >
    <table border="1px solid black" id="myTable">
        <caption>Ticket Details!</caption>
        <tr>
            <th>Ticket No.</th>
            <th>Customer No.</th>
            <th>Booking Date</th>
            <th>Fare</th>
            <th>Traveling Date</th>
            <th colspan="2">Operations</th>
        </tr>
        <tr>
            <?php
try {
    if (isset($result1)) {
        while ($row1 = mysqli_fetch_assoc($result1)) {
            ?>
            <td><?php echo $row1["t_no"]; ?></td>
            <td><?php echo $row1["c_no1"]; ?></td>
            <td><?php echo $row1["booking_date"]; ?></td>
            <td><?php echo $row1["fare"]; ?></td>
            <td><?php echo $row1["traveling_date"]; ?></td>
            <td><a href="update1.php?tn=<?php echo $row1["t_no"]; ?>">update</a></td>
            <td><a href="delete1.php?tn=<?php echo $row1["t_no"]; ?>">delete</a></td>
            </tr>
            <?php
}
    } else {
        throw new Exception("Server can not connected!");
    }

} catch (Exception $e) {
    echo "<script>alert('{$e->getMessage()}');</script>";
}
?>
    </table>
    </div>
    </div>
    <script>
        const display=()=>{
                let filter=document.getElementById("myInput").value.toUpperCase().trim();
                let table=document.getElementById("myTable1");
                let tr=table.getElementsByTagName('tr');
                for(var i=0;i<tr.length;i++)
                {
                    let td=tr[i].getElementsByTagName('td')[1];
                   if(td)
                   {
                        let textValue=td.textContent||td.innerHTML;
                        if(textValue.toUpperCase().indexOf(filter)>-1)
                        {
                            tr[i].style.display="";
                        }else{
                            tr[i].style.display="none";
                        }
                   }
           }
        }

         const display1=()=>{
                let filter=document.getElementById("myInput1").value;
                let table=document.getElementById("myTable");
                let tr=table.getElementsByTagName('tr');
                for(var i=0;i<tr.length;i++)
                {
                    let td=tr[i].getElementsByTagName('td')[1];
                   if(td)
                   {
                        let textValue=td.textContent||td.innerHTML;
                        if(textValue.indexOf(filter)>-1)
                        {
                            tr[i].style.display="";
                        }else{
                            tr[i].style.display="none";
                        }
                   }
                }
        }
    </script>
</body>
</html>