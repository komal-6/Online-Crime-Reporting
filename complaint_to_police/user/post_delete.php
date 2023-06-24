<?php 
require '../common/connection.php';
if (!isset($_GET['id'])) {
	header("location:my_post.php");
	exit();
}
$pid=$_GET['id'];
$update="update post_tbl set ISACTIVE=0 where ID='".$pid."' and ISACTIVE=1";
$query=mysqli_query($conn,$update);
if ($query) {
	header("location:my_post.php");
	exit();
}
else
{
	echo "error";
}

 ?>