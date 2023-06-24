<?php 
require '../common/connection.php';
if (!isset($_POST['btn_sb'])) {
   header("location:password_chek.php");
   exit();
}

$password=$_POST['txt_pass'];
$id=$_POST['txt_id'];

$update="update user_tbl set PASSWORD='".$password."' where ID=$id";
$query2=mysqli_query($conn,$update);
    
    if ($query2) {
    	echo "updated";
    	header("location:user_login.php?done");
	     exit();
    }
    else{
    	echo "Error";
    }
	 



 ?>