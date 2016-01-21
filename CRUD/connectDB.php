<?php
$host = "localhost";
$user = "root";
$pwd = "";
$conn = @mysql_connect($host,$user,$pwd) or die(mysql_errno().' = '.mysql_error());

$sql = "CREATE DATABASE crud";
if(mysql_query($sql)){
	echo "DataBase Got Created Successfully";
}	else {
	echo "<b>Reason : </b>".mysql_error();
}
/*if($conn){
	echo "I am Connected to Database";
}else {
	echo "Unable to Connect to Database";
}*/
?>