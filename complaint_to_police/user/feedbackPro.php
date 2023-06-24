<?php 
 require '../common/connection.php';
 if (!isset($_POST['btn_sb'])) {
 	header('location:feedback_add.php');
 	exit();
 }
$fb=$_POST['txt_feedback'];
$uid=$_POST['uid'];
$isactive=1;
$doi=date("d/m/y h:i:s");

 $insert="insert into feedback_tbl(USER_ID,FEEDBACK,ISACTIVE,DOI)values('".$uid."','".$fb."','".$isactive."','".$doi."')";
 $query=mysqli_query($conn,$insert);

 if ($query) {
 	header("location:feedback_add.php?insert");
 	exit();
 }
 else{
 	header("location:feedback_add.php?error");
 	exit();
 }
 ?>