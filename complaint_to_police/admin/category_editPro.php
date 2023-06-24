<?php 
session_start();
if (!isset($_SESSION['admin'])) {
 header("location:admin_login.php");
 exit();
}
 ?>
<?php 
require '../common/connection.php';
if (!isset($_POST['btn_sb'])) {
	header("location:category_view.php");
	exit();
}
$sid=$_POST['sid'];
$catname=$_POST['txt_cate'];
$dou=date("d/m/y h:i:s");
 
 $update="update category_tbl set CATEGORY_NAME='".$catname."',DOU='".$dou."' where ID=$sid";
 $query=mysqli_query($conn,$update);
 if ($query) {
 	echo"data updated";
 	header("location:category_view.php");
 	exit();
 }
 else{

 	echo "error";
 }
 ?>