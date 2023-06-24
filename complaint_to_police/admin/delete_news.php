<?php
 require '../common/connection.php';
  if (!isset($_GET['id'])) {
  	header("location:view_news.php");
  	exit();
  }
  
  $delete="delete from news_tbl where ID='".$_GET['id']."'";
  $query=mysqli_query($conn,$delete);
  if ($query) {
  	echo "Deleted";
  	header("location:view_news.php");
  	exit();
  }
  else{
  	echo "Error";
  }
  ?>

