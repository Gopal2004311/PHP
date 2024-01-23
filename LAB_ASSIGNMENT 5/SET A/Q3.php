
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Employee Details!</h1>
    <fieldset>
        <form action="#" method="POST">
            <label for="name"><b>Enter your name:</b></label>
            <input type="text" name="name" id="name"><br>
            <br>
            <label for="address1"><b>Enter your address:</b></label>
            <input type="text" name="address1" ><br>
            <br>
            <label for="earning"><b>Select Earning:</b></label>
            <select name="earning" id="earning">
                <option value="basic">basic</option>
                <option value="DA">DA</option>
                <option value="HRA">HRA</option>
            </select>   <br>
            <br>
         <input type="submit" name="submit" id="submit" value="submit">
            <input type="reset" name="reset" id="reset" value="reset">
        </form>
    </fieldset>
</body>
</html>
<?php 
error_reporting(0);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["submit"]))
    {
        $name=$_POST["name"];
        $adr=$_POST["address1"];
        $earn=$_POST["earning"];
        echo"<table border='1px solid black' cellspacing='5px' cellpadding='5px'>";
        echo"<tr>";
        echo"<th>name</th>";
        echo"<th>address</th>";
        echo"<th>Earning</th>";
        echo"</tr>";
        echo"<tr>";
        echo"<td>$name</td>";
        echo"<td>$adr</td>";
        echo"<td>$earn</td>";
        echo"</tr>";
        echo"</table>";
    }
}
?>