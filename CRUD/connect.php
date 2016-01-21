<?php
$host = "localhost";
$user = "root";
$pwd = "";
$dbname = "crud";
$conn = @mysql_connect($host,$user,$pwd) or die(mysql_errno().' = '.mysql_error());
mysql_select_db($dbname) or die(mysql_errno().' = '.mysql_error());

if($conn){
	echo "I am Connected to Database";
}else {
	echo "Unable to Connect to Database";
}
?>