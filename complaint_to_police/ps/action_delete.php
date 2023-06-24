<?php 
require '../common/connection.php';
if (!isset($_GET['id'])) {
	header("location:action.php");
}
$id=$_GET['id'];
$update="update action_tbl set ISACTIVE=0 where ID=$id";
$query=mysqli_query($conn,$update);
header("location:action.php?delete");
exit();
 ?>