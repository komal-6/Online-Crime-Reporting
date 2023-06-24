<?php 
 require '../common/connection.php';
 if (!isset($_POST['btn_sb'])) {
 	header("location:post_add.php");
 	exit();
 }
$uid=$_POST['uid'];
$pn=$_POST['txt_name'];
$dis=$_POST['dis'];
$isactive=1;
$doi=date('d/m/y h:i:s');
 if ($_FILES["fileToUpload"]["name"]=="") {
 	header("location:post_add.php?post");
 	exit();
 }
 else{
 	require 'upload_post.php';
    $post=$_FILES["fileToUpload"]["name"];
 }

 $insert="INSERT INTO `post_tbl`( `USER_ID`, `POST_NAME`, `DISCRIPTION`, `PHOTO/VIDEO`, `ISACTIVE`, `DOI`) VALUES ('".$uid."','".$pn."','".$dis."','".$post."','".$isactive."','".$doi."')";
   $query=mysqli_query($conn,$insert);
   if ($query) {
   	echo "inserted";
      header("location:my_post.php?inserted");
      exit();
   }
   else{
   	echo "Error";
   	header("location:post_add.php?error2");
   	exit();
   }
 ?>