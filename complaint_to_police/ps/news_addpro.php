<?php 
 require '../common/connection.php';
 if (!isset($_POST['btn_sb'])) {
 	header("location:news_add.php");
 	exit();
 }
$pid=$_POST['pid'];
$hed=$_POST['heading'];
$dis=$_POST['dis'];
$isactive=1;
$doi=date('d/m/y h:i:s');

   if ($dis=="") {
     $dis="No Discription";
   }

 if ($_FILES["fileToUpload"]["name"]=="") {
 	header("location:news_add.php");
 	exit();
 }
 else{
 	require 'upload_news.php';
    $news=$_FILES["fileToUpload"]["name"];
 }

 $insert="INSERT INTO `news_tbl`( `PID`, `HEADING`, `DISCRIPTION`, `PHOTO/VIDEO`, `ISACTIVE`, `DOI`)
  VALUES ('".$pid."','".$hed."','".$dis."','".$news."','".$isactive."','".$doi."') ";
   $query=mysqli_query($conn,$insert);
   if ($query) {
   	echo "inserted";
   	header("location:my_news.php");
   	exit();
   }
   else{
   	echo "Error";
   header("location:news_add.php?error2");
    exit();
   }
 ?>