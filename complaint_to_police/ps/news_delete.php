<?php 
require '../common/connection.php';
if (!isset($_GET['id'])) {
	header("location:my_news.php");
	exit();
}
$update="update news_tbl set ISACTIVE=0 where ID='".$_GET['id']."'";
$query=mysqli_query($conn,$update);
if ($query) {
	header("location:my_news.php");
	exit();
}
else 
{
	echo "Error";
}

 ?>