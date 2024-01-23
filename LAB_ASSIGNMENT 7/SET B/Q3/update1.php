<?php 
$cn=$_GET["cno"];

$conn=mysqli_connect("localhost","root","","php");
$query="SELECT * FROM crop WHERE c_no='$cn'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
?>

<?php 
if(isset($_POST["submit"]))
{
    $conn=mysqli_connect("localhost","root","","php");
    $c_no=$_POST["c_no"];
    $c_name=$_POST["c_name"];
    $c_s=$_POST["c_s"];
    $p=$_POST["pesticides"];
    $query="UPDATE crop SET c_no='$c_no',c_name='$c_name',c_season='$c_s',pesticides='$p' WHERE c_no='$c_no'";
    $result1=mysqli_query($conn,$query);
    ?>
    <meta http-equiv="refresh"content="0;url=database.php">
<?php 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button,a{
            background-color: red;
            color: white;
            padding-left: 10px;
            padding-right: 10px;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
<button><a href="database.php">BACK</a>
    </button>
    <h2>Update</h2>
    <fieldset>
    <form action="#" method="POST">
        <label for="c_no"><b>Crop No.</b></label>
        <input type="text" name="c_no" id="c_no" value="<?php echo$cn;?>" readonly><br>
        <br>
        <label for="c_name"><b>Crop Name:</b></label>
        <input type="text" name="c_name" id="c_name" value="<?php echo$row["c_name"]?>"><br>
        <br>
        <label for="c_s"><b>Crop Season:</b></label>
        <select name="c_s" id="c_s">
            <option value="summer">summer</option>
            <option value="winter">winter</option>
            <option value="rainy">rainy</option>
        </select><br>
        <br>
        <label for="pesticides"><b>Select Pesticides:</b></label>
            <select name="pesticides" id="pesticides">
                <option value="abamectin">abamectin</option>
                <option value="acephate">acephate</option>
                <option value="allethrin">allethrin</option>
                <option value="azadirachtin">azadirachtin</option>
            </select><br>
        <br>
        <input type="submit" name="submit" id="submit" value="UPDATE">
        <input type="reset" name="reset" id="reset" value="CANCEL">
    </form>
    </fieldset>
</body>
</html>