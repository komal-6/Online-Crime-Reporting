<?php 
require '../common/connection.php';
 if (!isset($_GET['id'])) {
 	header("location:city_view.php");
 	exit();
 }
  $id=$_GET['id'];
  $update="update city_tbl set ISACTIVE=2 where ID=$id";
  $query=mysqli_query($conn,$update);
  if ($query) {
  	echo "Data updated";
  	header("locationL:city_view.php");
  	exit();
  }
  else{
  	echo "Error";
  }
 ?>