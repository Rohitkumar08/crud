<?php
include_once('connect.php');
$sql = "SELECT * FROM user";
$res = mysql_query($sql);
?>
<html>
<head>
<link href='css/style1.css' rel='stylesheet' type='text/css'/>
<script src='js/ext.js' type='text/javascript' language='javascript'></script>
</head>
<body>
<?php
include_once('switchINFO.php');
?>
<table align='center' border='1' width='70%' cellpadding='6' cellspacing='0'>
<tr><th colspan='3'>List of Users Joined</th></tr>
<tr><td width='70%'>Name</td><td>Edit</td><td>Delete</td></tr>
<?php
while($rec = mysql_fetch_row($res)){
	echo "<tr><td><a href='viewProfile.php?id=".$rec[0]."'>".$rec[1]."</a></td><td><a href='editProfile.php?id=".$rec[0]."'><img src='images/icons/edit.jpg' width='24'/></a></td><td><a href='deleteProfile.php?id=".$rec[0]."'><img src='images/icons/delete.png' onclick='javascript:return doDel();'/></a></td></tr>";
}
?>
<tr><td colspan='3' align='right'><input type='button' value='Add User' class='add' onclick="location.href='regFORM.php';"/></td></tr>
</table>
</body>
</html>