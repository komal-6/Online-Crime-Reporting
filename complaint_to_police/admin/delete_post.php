<?php
 require '../common/connection.php';
  if (!isset($_GET['id'])) {
  	header("location:view_post.php");
  	exit();
  }
  
  $delete="delete from post_tbl where ID='".$_GET['id']."'";
  $query=mysqli_query($conn,$delete);
  if ($query) {
  	echo "Deleted";
  	header("location:view_post.php");
  	exit();
  }
  else{
  	echo "Error";
  }
  ?>

