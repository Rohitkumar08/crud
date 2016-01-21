<?php
$id = $_GET['id'];
include_once('connect.php');
$sql = "SELECT * FROM user WHERE Id = $id";
$res = mysql_query($sql);
$rec = mysql_fetch_array($res);
?>
<html>
<head>
<title>Registration Form</title>
<?php
include_once("externalFILE.php");
?>
</head>
<body>
<form name='regFORM' method='POST' onreset="javascript:return doDel();" enctype='multipart/form-data' action='updateUser.php'>
<table align='center' border='1' width='70%' cellpadding='6' cellspacing='0'>
<thead>
<tr><th colspan='2'>Edit Your Personal Details Here</th></tr>
</thead>
<tbody>
<tr><td width='30%'>Enter Name</td><td>
<input type='text' name='fname' id='regFname' value="<?php echo $rec[1];?>"/> 
</td></tr>
<tr><td>Enter Email</td><td>
<input type='text' name='email' id='regEmail' value="<?php echo $rec['Email'];?>"/> <span style='font-size:16px;font-weight:900;color:red;' id='dyn'></span>
</td></tr>
<tr><td>Enter Mobile</td><td>
<input type='text' name='mob' id='regMob' value="<?php echo $rec[3];?>"/>
</td></tr>
<tr><td>Enter DOB</td><td>
<input type='text' id="datepicker-example10" name='dob' placeholder='YYYY-MM-DD' value="<?php echo $rec['DOB'];?>"/>
</td></tr>
<tr><td>Choose Gender</td><td>
<input type='radio' name='gend' id='regGendm' value='m' <?php if($rec['Gender'] == 'Male') echo 'checked';?>/> Male
<input type='radio' name='gend' id='regGendf' value='f'<?php if($rec['Gender'] == 'Female') echo 'checked';?>/> <label for='regGendf'>Female</label>
</td></tr>
<tr><td>Choose Language</td><td>
<input type='checkbox' name='lang[]' value='English' id='regLange' <?php if(strpos($rec['Language'],'English') !== false) echo 'checked';?> /> Eng
<input type='checkbox' name='lang[]' value='Hindi' id='regLangh' <?php if(strpos($rec['Language'],'Hindi') !== false) echo 'checked';?>/> <label for='regLangh'>Hin</label>
<input type='checkbox' name='lang[]' value='Telugu' id='regLangt' <?php if(strpos($rec['Language'],'Telugu') !== false) echo 'checked';?>/> <label for='regLangt'>Tel</label>
</td></tr>
<tr><td>Country</td><td>
<select name='coun' id='regCoun'>
<option value=''>Please Select</option>
<option value='India' <?php if($rec['Country'] == 'India') echo 'selected';?>>INDIA</option>
<option value='United States' <?php if($rec['Country'] == 'United States') echo 'selected';?>>UNITED STATES</option>
<option value='United Kingdom' <?php if($rec['Country'] == 'United Kingdom') echo 'selected';?>>UNITED KINGDOM</option>
</select>
</td></td>
<tr><td>Address</td><td>
<textarea cols='30' rows='4' name='addr' id='regAddr'><?php echo $rec['Address'];?></textarea>
</td></tr>
<tr><td>Upload Image</td><td>
<input type='file' name='pic' id='regPic'/> 
<?php
	if($rec['Picture'] != ""){
		echo "<img src='images/users/".$rec['Picture']."' width='50' height='60' class='zoom1'/>";
		echo "<input type='hidden' name='oldPic' value='$rec[Picture]'/>";
	} else {
		echo "<img src='images/icons/nopic.jpg' width='50' height='60' class='zoom1'/>";
	}
?>
</td></tr>
</tbody>
<tfoot>
<tr><td colspan='2' align='right'>
<input type='hidden' name='id' value='<?php echo $rec[0];?>'/>
<input type='submit' value='Update !' name='submit' class='add'/> <input type='button' value='Go Back' name='can' onclick="location.href='showUsers.php';" class='add'/></td></tr>
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
<pre>








</pre>