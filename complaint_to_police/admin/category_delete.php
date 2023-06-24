<?php 
  require '../common/connection.php';
  if (!isset($_GET['id'])) {
  	header("location:category_view.php");
  	exit();
  }
  $id=$_GET['id'];
   $update="update category_tbl set ISACTIVE=2 where ID=$id";
   $query=mysqli_query($conn,$update);

   if ($query) {
     echo "Data deleted";
     header("location:category_view.php");
     exit();
   }
   else{
   	echo "error";
   }

 ?>