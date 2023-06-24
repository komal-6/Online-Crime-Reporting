<?php 
require '../common/connection.php';
$id=$_POST['aid'];
  if (!isset($_POST['btn_sb'])) {
   header("location:area_view.php");
   exit();
  }

$aname=$_POST['txt_area'];
$dou=date("d/m/y h:i:s");

$update="update area_tbl set AREA_NAME='".$aname."' , DOU='".$dou."' where ID=$id";
$query=mysqli_query($conn,$update);
if ($query) {
	echo "updated";
	header("location:area_view.php");
	exit();

}
else
{
	echo "Error";
}

 ?>