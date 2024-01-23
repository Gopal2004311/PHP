<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Change font,bg color of given text!</h1>
    <fieldset>
    <form action="#" method="POST">
        <label for="font_name"><b>Enter font name:</b></label>
        <input type="text" name="font_name"><br>
        <br>
        <label for="bg_color"><b>Enter background color:</b></label>
        <input type="text" name="bg_color"><br>
        <br>
        <label for="text"><b>Enter any sentence or text:</b></label>
        <input type="text" name="text"><br>
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
    $font=$_POST["font_name"];
    $bg=$_POST["bg_color"];
    $text=$_POST["text"];
    echo"<body style='background-color:$bg'>";
    echo"<h2 style='font-style:$font'>$text</h2>";
}
?>
