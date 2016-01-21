<?php
ob_start();
	if(isset($_POST['submit'])){
		include_once('connect.php');
		$n = $_POST['fname'];
		$e = $_POST['email'];
		$m = $_POST['mob'];
		$d = $_POST['dob'];
		$g = ($_POST['gend'] == 'm')?'Male':'Female';
		$l = implode(',',$_POST['lang']);
		$c = $_POST['coun'];
		$a = $_POST['addr'];
		if(isset($_POST['oldPic'])) $oi = $_POST['oldPic'];
		$id = $_POST['id'];

if(isset($_FILES['pic']) && $_FILES['pic']['size']>0){
			$tmp = $_FILES['pic']['tmp_name'];
			if(is_uploaded_file($tmp)){
				if(file_exists("images/users/$oi")){
					unlink("images/users/$oi");
				}
				$oname = $_FILES['pic']['name'];
				$name = getRand().'-'.$oname;
				$desc = "images/users/".$name;
				@move_uploaded_file($tmp,$desc);
			}
$sql = "UPDATE user SET Name='$n',Email='$e',Mobile='$m',DOB='$d',Gender='$g',Language='$l',Country='$c',Address='$a',Picture='$name' WHERE Id = $id";
		} else {
$sql = "UPDATE user SET Name='$n',Email='$e',Mobile='$m',DOB='$d',Gender='$g',Language='$l',Country='$c',Address='$a' WHERE Id = $id";	
		}

if(mysql_query($sql)){
	header("location:viewProfile.php?id=$id");
	exit;
}else {
	echo "<b><u>Reason</u></b>: ".mysql_error();
}
	}else {
		header("location:showUsers.php");
	}
	
function getRand(){
	$str = str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789");
	return md5(crypt(sha1(md5($str),true),'pr'));
}
?>