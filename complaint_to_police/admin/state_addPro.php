<?php 
require '../common/connection.php';
if (!isset($_POST['btn_sb'])) {
	header("location:state_add.php");
	exit();	
}
$state=$_POST['txt_state'];
$isactive=1;
$doi=date("d/m/y h:i:s");
$insert="insert into state_tbl(STATE_NAME,ISACTIVE,DOI)value('".$state."','".$isactive."','".$doi."')";
if ($query=mysqli_query($conn,$insert)) {
	echo "Data insertd";
	header("location:state_view.php");
	exit();
}
else
{
	echo "error";
}

 ?>