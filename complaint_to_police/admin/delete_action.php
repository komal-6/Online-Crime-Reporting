<?php
 require '../common/connection.php';
  if (!isset($_GET['id'])) {
  	header("location:view_action.php");
  	exit();
  }
  
  $delete="delete from action_tbl where ID='".$_GET['id']."'";
  $query=mysqli_query($conn,$delete);
  if ($query) {
  	echo "Deleted";
  	header("location:view_actions.php");
  	exit();
  }
  else{
  	echo "Error";
  }
  ?>

