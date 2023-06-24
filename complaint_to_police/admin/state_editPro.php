<?php 
require '../common/connection.php';
if (!isset($_POST['btn_sb'])) {
	header("location:state_view.php");
	exit();
}
$sid=$_POST['sid'];
$sname=$_POST['txt_state'];
$dou=date("d/m/y h:i:s");
 
 $update="update state_tbl set STATE_NAME='".$sname."',DOU='".$dou."' where ID=$sid";
 $query=mysqli_query($conn,$update);
 if ($query) {
 	echo"data updated";
 	header("location:state_view.php");
 	exit();
 }
 else{

 	echo "error";
 }
 ?>