<style>
.a{color:green;border-bottom:3px solid green;text-align:center;margin:20px auto;}
.b{color:red;border-bottom:3px solid red;text-align:center;margin:20px auto;}
</style>
<?php
if(isset($_GET['status'])){
	switch ($_GET['status']){
		case 'delete':
		echo "<div class='a'>User Details Got Deleted Successfully</div>";
		break;
		case 'notdelete':
		echo "<div class='b'>Unable to Delete Users.. Try Again</div>";
		break;
	}
}


?>