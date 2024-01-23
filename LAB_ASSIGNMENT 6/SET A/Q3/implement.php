<?php 
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            font-style:<?php echo$_COOKIE["style"];?>;
            font-size: <?php echo$_COOKIE["size"];?>px;
            color: <?php echo$_COOKIE["color"];?>;
            background-color: <?php echo$_COOKIE["bg"];?>;
        }
    </style>
</head>
<body>
    <h1><?php echo$_COOKIE["text"];?></h1>
</body>
</html>