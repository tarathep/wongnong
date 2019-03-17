<?php
session_start();
$name = $_POST['name'];
$rating = $_POST['rating'];
$message = $_POST['message'];
$rid = $_SESSION['rid'];
$userID = $_SESSION['id'];

include("config.php"); 
$strSQL ="insert into review (desp,uid,rating,rid) 
Values('$message','$userID',$rating,$rid)";
$objQuery = mysql_query($strSQL) or die(mysql_error());

if($objQuery){
    echo "Success";
    echo "<Meta http-equiv = 'refresh'
    content = '2; URL = category.php'>";

}
else{
    echo "Add Fail";
    echo "<Meta http-equiv = 'refresh'
    content = '2; URL = category.php'>";

}
?>