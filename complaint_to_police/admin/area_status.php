<?php 
require '../common/connection.php';
if (!isset($_GET['id'])) {
	header("location:area_view.php");
	exit();
}
$aid=$_GET['id'];
$select="select * from area_tbl where ID=$aid";
$query=mysqli_query($conn,$select);
  $row=mysqli_fetch_assoc($query);
  $ia=$row['ISACTIVE'];

  if ($ia==1) {
  	$update="update area_tbl set ISACTIVE=0 where ID=$aid";
  }
  else{
  	$update="update area_tbl set ISACTIVE=1 where ID=$aid";
  }

  $query2=mysqli_query($conn,$update);
  if ($query2) {
  	echo "Data updated";
  	header("location:area_view.php");
  	exit();
  }
  else{
  	echo "Error";
  }
 ?>