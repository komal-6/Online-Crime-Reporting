
<?php
 require '../common/connection.php';
  if (!isset($_GET['id'])) {
  	header("location:feedback.php");
  	exit();
  }
  
  $delete="delete from feedback_tbl where ID='".$_GET['id']."'";
  $query=mysqli_query($conn,$delete);
  if ($query) {
  	echo "Deleted";
  	header("location:feedback.php");
  	exit();
  }
  else{
  	echo "Error";
  }
  ?>

