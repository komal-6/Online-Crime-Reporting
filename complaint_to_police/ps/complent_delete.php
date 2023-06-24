<?php 
require '../common/connection.php';
if (!isset($_GET['id'])) {
	header("location:view_complent.php");

}
$id=$_GET['id'];
$update="update complent_tbl set ISACTIVE=0 where ID=$id";
$query=mysqli_query($conn,$update);
if ($query) {
	header("location:view_complent.php");
	exit();
}
else
{
	echo "Error";
}

 ?>