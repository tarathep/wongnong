<?php
$host = "localhost";
$username = "root";
$password = "";
$db= "tni_restaurant";

$conn =  mysql_connect($host,$username,$password);
mysql_select_db($db);
mysql_query("SET NAMES UTF8");

/*
$strSQL = "select m.name from user u,orders o,menu m where o.uid = u.uid and m.mid = o.mid and u.uid = 1";
$objQuery = mysql_query($strSQL) or die(mysql_error());

while($objResult = mysql_fetch_array($objQuery)){
    echo $objResult['name'];
}
*/
?>
