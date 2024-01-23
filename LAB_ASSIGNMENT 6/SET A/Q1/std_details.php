<?php 
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student Details!</h1>
    <form action="subject_detail.php" method="POST">
        <label for="s_no"><b>Enter Seat No.:</b></label>
        <input type="number" name="s_no" id="s_no" value="<?php echo$_SESSION["s_no"];?>"><br>
        <br>
        <label for="name"><b>Enter name:</b></label>
        <input type="text" name="name" id="name" value="<?php echo$_SESSION["name"];?>"><br>
        <br>
        <label for="class"><b>Select Your class:</b></label>
        <select name="class" id="class">
            <option value="fybbaca"><b>fybbaca</b></option>
            <option value="sybbaca"><b>sybbaca</b></option>
            <option value="tybbaca"><b>tybbaca</b></option>
        </select><br>
        <br>
        <input type="submit" name="submit" id="submit" value="submit">
        <input type="reset" name="reset" id="reset" value="reset">
    </form>
</body>
</html>
