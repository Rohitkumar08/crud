<?php
ob_start();
	if(isset($_POST['submit'])){
		include_once('connect.php');
		$n = $_POST['fname'];
		$e = $_POST['email'];
		$m = $_POST['mob'];
		$d = $_POST['dob'];
		$p = $_POST['pwd'];
		$g = ($_POST['gend'] == 'm')?'Male':'Female';
		$l = implode(',',$_POST['lang']);
		$c = $_POST['coun'];
		$a = $_POST['addr'];
		if(isset($_FILES['pic'])){
			$tmp = $_FILES['pic']['tmp_name'];
			if(is_uploaded_file($tmp)){
				$oname = $_FILES['pic']['name'];
				$name = getRand().'-'.$oname;
				$desc = "images/users/".$name;
				@move_uploaded_file($tmp,$desc);
			}
		}
	$sql = "INSERT INTO user (Name,Email,Mobile,DOB,Pword,Gender,Language,Country,Address,Picture) VALUES ('$n','$e','$m','$d',md5('$p'),'$g','$l','$c','$a','$name')";
if(mysql_query($sql)){
	header("location:showUsers.php");
	exit;
}else {
	echo "<b><u>Reason</u></b>: ".mysql_error();
}
	}else {
		header("location:regFORM.php");
	}
	
function getRand(){
	$str = str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789");
	return md5(crypt(sha1(md5($str),true),'pr'));
}
?>