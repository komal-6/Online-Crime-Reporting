<?php
 require '../common/connection.php';
  if (!isset($_GET['id'])) {
  	header("location:view_complent.php");
  	exit();
  }
  
  $delete="delete from complent_tbl where ID='".$_GET['id']."'";
  $query=mysqli_query($conn,$delete);
  if ($query) {
  	echo "Deleted";
  	header("location:view_complents.php");
  	exit();
  }
  else{
  	echo "Error";
  }
  ?>

