<?php
$id = $_GET['id'];
include_once('connect.php');
$sql = "DELETE FROM user WHERE Id = $id";
$res = mysql_query($sql);

if(mysql_affected_rows()>0){
	header("location:showUsers.php?status=delete");
	exit;
}	else {
	header("location:showUsers.php?status=notdelete");
	exit;
}
?>