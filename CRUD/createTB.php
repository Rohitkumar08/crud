<?php
include_once('connect.php');
$sql = "CREATE TABLE user(
Id SMALLINT(5) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
Name VARCHAR(22) NOT NULL,
Email VARCHAR(70) NOT NULL UNIQUE,
Mobile CHAR(10) NOT NULL,
DOB DATE NOT NULL,
Pword CHAR(32) NOT NULL,
Gender ENUM('Male','Female') DEFAULT 'Male',
Language VARCHAR(80) NOT NULL,
Country VARCHAR(70) NOT NULL,
Address TINYTEXT NOT NULL,
Picture VARCHAR(100) NOT NULL,
regOn TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
Status ENUM('InActive','Active') DEFAULT 'InActive' 
)";

if(mysql_query($sql)){
	echo "Table Got Created Successfully";
}	else {
	echo "<b><u>Reason</u></b>: ".mysql_error();
}
?>