<?php
 require '../common/connection.php';
  if (!isset($_GET['id'])) {
  	header("location:contect_us.php");
  	exit();
  }
  
  $delete="delete from contectus_tbl where ID='".$_GET['id']."'";
  $query=mysqli_query($conn,$delete);
  if ($query) {
  	echo "Deleted";
  	header("location:contect_us.php");
  	exit();
  }
  else{
  	echo "Error";
  }
  ?>

