<?php
error_reporting(0);
session_start();
$_SESSION["username"] = $_POST["user"];
$_SESSION["password"] = $_POST["pass"];
$pattern = "/^[A-Za-z]{3}[0-9]{7}$/";
$name = "/^[A-Za-z\s]+$/";
if (!preg_match($pattern, $_SESSION["password"])) {
    echo "<script>alert('Password must be combination of characters&numbers!');</script>";
} else if (!preg_match($name, $_SESSION["username"])) {
    echo "<script>alert('name must be combination of alphabets!');</script>";
} else {
    echo "Welcome to php!";
}
session_destroy();
