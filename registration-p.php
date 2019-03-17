<?php
include("config.php");


$username = $_POST["username"];
$password = $_POST["password"];
echo "<br>$username<br>$password";

$strSQL = "insert into user (user,password) values ('$username','$password')";
$objQuery = mysql_query($strSQL) or die(mysql_error());

if($objQuery){
    echo "Yes!";
    echo "<meta http-equiv='refresh' content='0;URL=login.php'>";
}else{
    echo "No!";
    echo "<meta http-equiv='refresh' content='0;URL=login.php'>";
}

?>