<html>
<head>
<title>Registration Form</title>
<?php
include_once("externalFILE.php");
$id = $_GET['id'];
include_once('connect.php');
$sql = "SELECT * FROM user WHERE Id = $id";
$res = mysql_query($sql);
$rec = mysql_fetch_assoc($res);;
?>
</head>
<body>
<form name='regFORM' method='POST' onreset="javascript:return doDel();" enctype='multipart/form-data' action='addUser.php'>
<table align='center' border='1' width='70%' cellpadding='6' cellspacing='0'>
<thead>
<tr><th colspan='3'>New User Please Register</th></tr>
</thead>
<tbody>
<tr><td width='30%'>Enter Name</td><td>
<?php echo $rec['Name'];?></td><td rowspan='5' width='200' align='center'>
<?php
	if($rec['Picture'] != ""){
		echo "<img src='images/users/".$rec['Picture']."' width='137' height='186' class='zoom'/>";
	} else {
		echo "<img src='images/icons/nopic.jpg' width='137' height='186'/>";
	}
?>
</td></tr>
<tr><td>Enter Email</td><td>
<?php echo $rec['Email'];?>
</td></tr>
<tr><td>Enter Mobile</td><td>
<?php echo $rec['Mobile'];?>
</td></tr>
<tr><td>Enter DOB</td><td>
<?php echo $rec['DOB'];?>
</td></tr>
<tr><td>Choose Gender</td><td>
<?php echo $rec['Gender'];?>
</td></tr>
<tr><td>Choose Language</td><td colspan='2'>
<?php echo $rec['Language'];?>
</td></tr>
<tr><td>Country</td><td colspan='2'>
<?php echo $rec['Country'];?>
</td></td>
<tr><td>Address</td><td colspan='2'>
<textarea cols='35' rows='6' readonly name='addr' id='regAddr'><?php echo $rec['Address'];?></textarea>
</td></tr>
</tbody>
<tfoot>
<tr><td colspan='3' align='right'><span id='italics'>Reg On : <?php echo $rec['regOn'];?></span><input type='button' name='goBack' onclick="location.href='showUsers.php';" value='Go Back' class='add'/></td></tr>
</tfoot>
</table>
</form>
<!-- External JS in BODY Calender Started Here -->
  <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
        <script type="text/javascript" src="js/zebra_datepicker.js"></script>
        <script type="text/javascript" src="js/core.js"></script>
<!-- External JS in BODY Calender Closed Here -->
</body>
</html>