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
	header("location:category_add.php");
	exit();
}
$cat=$_POST['cate_name'];
$isactive=1;
$doi=date("d/m/y h:i:s");
$insert="INSERT INTO `category_tbl`( `CATEGORY_NAME`, `ISACTIVE`, `DOI`) 
         VALUES ('".$cat."','".$isactive."','".$doi."')";

         $query=mysqli_query($conn,$insert);
         if ($query) {
         	header("location:category_add.php");
         	exit();
         }
         else{
         	echo "Error";
         }
 ?>