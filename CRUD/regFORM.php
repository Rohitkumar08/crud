<html>
<head>
<title>Registration Form</title>
<?php
include_once("externalFILE.php");
?>
</head>
<body>
<form name='regFORM' method='POST' onreset="javascript:return doDel();" enctype='multipart/form-data' action='addUser.php'>
<table align='center' border='1' width='70%' cellpadding='6' cellspacing='0'>
<thead>
<tr><th colspan='2'>New User Please Register</th></tr>
</thead>
<tbody>
<tr><td width='30%'>Enter Name</td><td>
<input type='text' name='fname' id='regFname' value=''/> 
</td></tr>
<tr><td>Enter Email</td><td>
<input type='text' name='email' id='regEmail' value=''/> <span style='font-size:16px;font-weight:900;color:red;' id='dyn'></span>
</td></tr>
<tr><td>Enter Mobile</td><td>
<input type='text' name='mob' id='regMob'/>
</td></tr>
<tr><td>Enter DOB</td><td>
<input type='text' id="datepicker-example10" name='dob' placeholder='YYYY-MM-DD'/>
</td></tr>
<tr><td>Enter Password</td><td>
<input type='password' name='pwd' id='regPwd'/>
</td></tr>
<tr><td>Confirm Password</td><td>
<input type='password' name='cpwd' id='regCpwd'/>
</td></tr>
<tr><td>Choose Gender</td><td>
<input type='radio' name='gend' id='regGendm' value='m'/> Male
<input type='radio' name='gend' id='regGendf' value='f'/> <label for='regGendf'>Female</label>
</td></tr>
<tr><td>Choose Language</td><td>
<input type='checkbox' name='lang[]' value='English' id='regLange'/> Eng
<input type='checkbox' name='lang[]' value='Hindi' id='regLangh'/> <label for='regLangh'>Hin</label>
<input type='checkbox' name='lang[]' value='Telugu' id='regLangt'/> <label for='regLangt'>Tel</label>
</td></tr>
<tr><td>Country</td><td>
<select name='coun' id='regCoun'>
<option value=''>Please Select</option>
<option value='India'>INDIA</option>
<option value='United States'>UNITED STATES</option>
<option value='United Kingdom'>UNITED KINGDOM</option>
</select>
</td></td>
<tr><td>Address</td><td>
<textarea cols='30' rows='4' name='addr' id='regAddr'></textarea>
</td></tr>
<tr><td>Upload Image</td><td>
<input type='file' name='pic' id='regPic'/>
</td></tr>
</tbody>
<tfoot>
<tr><td colspan='2' align='right'><input type='submit' value='Register !' name='submit'/> <input type='reset' value='Refresh !' name='can'/></td></tr>
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