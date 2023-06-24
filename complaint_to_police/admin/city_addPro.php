<?php 
require '../common/connection.php';
if (!isset($_POST['btn_sb'])) {
  header("location:city_add.php");
  exit();
}
$city=$_POST['txt_city'];
$isactive=1;
$doi=date("d/m/y h:i:s");
$sid=$_POST['sid'];
$insert=" insert into city_tbl(SID,CITY_NAME,ISACTIVE,DOI)values('".$sid."','".$city."','".$isactive."','".$doi."')";
$query=mysqli_query($conn,$insert);
if ($query) {
	  echo "inserted";
	  header("location:city_view.php");
	  exit();
}
else{
	echo "error";
}
 ?>