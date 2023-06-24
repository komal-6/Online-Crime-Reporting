<?php 
require '../common/connection.php';
if (!isset($_POST['btn_sb'])) {
	header("location:view_profile.php");
	exit();
}
$id=$_POST['txt_id'];
$us=$_POST['txt_us'];
$fn=$_POST['txt_fn'];
$ln=$_POST['txt_ln'];
$gn=$_POST['gender'];
$dob=$_POST['txt_dob'];
$add=$_POST['txt_add'];
$num=$_POST['txt_num'];
$dou=date("d/m/y h:i:s");

if ($_FILES["fileToUpload"]["name"]=="") {
	$update="update user_tbl set FIRST_NAME='".$fn."' , LAST_NAME='".$ln."',USERNAME='".$us."',CONTECT_NUMBER='".$num."' , DOB='".$dob."' , GENDER='".$gn."' , ADDRESS='".$add."' , DOU='".$dou."' where ID=$id";
}
else{
     require 'upload.php';
	$prp=$_FILES["fileToUpload"]["name"];
    
    $update="update user_tbl set FIRST_NAME='".$fn."' , LAST_NAME='".$ln."',USERNAME='".$us."',CONTECT_NUMBER='".$num."' , DOB='".$dob."' , GENDER='".$gn."' , ADDRESS='".$add."',
	          PROFILE_PIC='".$prp."' , DOU='".$dou."' where ID=$id";	
}
$query=mysqli_query($conn,$update);

if ($query) {
	echo "Data updated";
	header("location:view_profile.php");
	exit();
}
else{
	echo "Error";
}

 ?>