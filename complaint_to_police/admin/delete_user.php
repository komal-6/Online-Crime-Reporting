<?php 
  require '../common/connection.php';
  if (!isset($_GET['id'])) {
  	header("location:view_user.php");
  	exit();
  }
  $id=$_GET['id'];
   $update="delete from user_tbl where ID=$id ";
   $query=mysqli_query($conn,$update);

   if ($query) {
     echo "Data deleted";
     header("location:view_user.php");
     exit();
   }
   else{
   	echo "error";
   }

 ?>