<?php 
require '../common/connection.php';
if (!isset($_POST['btn_sb'])) {
	header("location:view_profile.php");
	exit();
}
$id=$_POST['txt_id'];
$us=$_POST['txt_us'];
$psname=$_POST['txt_psname'];
$num=$_POST['txt_num'];
$dou=date("d/m/y h:i:s");

if ($_FILES["fileToUpload"]["name"]=="") {
	$update="update policestation_tbl set PS_NAME='".$psname."' , PS_USERNAME='".$us."' ,
	        PS_CONTECT_NUMBER='".$num."' , DOU='".$dou."'  where ID=$id  ";
}
else{
     require 'upload.php';
	$prp=$_FILES["fileToUpload"]["name"];
    
    $update="update policestation_tbl set PS_NAME='".$psname."' , PS_USERNAME='".$us."' ,
	        PS_CONTECT_NUMBER='".$num."' ,PS_PICTURE='".$prp."', DOU='".$dou."'  
	        where ID=$id  ";	
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