<?php 
 require '../common/connection.php';
 if (!isset($_POST['btn_sb'])) {
 	header("location:city_view.php");
 	exit();
 }
$id=$_POST['cid'];
$txt_city=$_POST['txt_city'];
$dou=date("d/m/y h:i:s");
$update="update city_tbl 
              set CITY_NAME='".$txt_city."' , DOU='".$dou."' where ID='".$id."'";
 $query=mysqli_query($conn,$update); 
 
 if ($query) {
             echo "updated";
             header("location:city_edit.php");
             exit();
             }          
             else{
             	echo "Error";
             }  
 
 ?>