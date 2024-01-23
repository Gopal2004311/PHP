<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Change browser window color according to day of week!</h1>
    <form action="Q2.php" method="post">
        Enter A day of week: <select name="option">
            <option value="1">Monday</option>
            <option value="2">tuesday</option>
            <option value="3">wednesday</option>
            <option value="4">thursday</option>
            <option value="5">friday</option>
            <option value="6">saturday</option>
            <option value="7">sunday</option>
        </select>
        <br>
        <button>click</button>
    </form>
</body>
</html>
<?php
  if($_SERVER["REQUEST_METHOD"]=="POST"){
      $d=$_POST["option"];
      switch ($d) {
        case '1':
            echo"<body style='background-color:red'>";
            break;
        case '2':
            echo"<body style='background-color:blue'>";
            break;
        case '3':
            echo"<body style='background-color:green'>";
            break;
        case '4':
            echo"<body style='background-color:pink'>";
            break;
        case '5':
            echo"<body style='background-color:orange'>";
            break;
        case '6':
             echo"<body style='background-color:skyblue'>";
            break;
        case '7':
             echo"<body style='background-color:purple'>";
            break;
        default:
            echo"wrong input!";
            break;
      }
    }
?>
