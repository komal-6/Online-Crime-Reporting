<?php 
require '../common/connection.php';
if (!isset($_GET['id'])) {
	header("location:category_view.php");
	exit();
}
$id=$_GET['id'];

$select="select * from category_tbl where ID=$id ";
$query=mysqli_query($conn,$select);
if ($query) {
	echo "data selected";
	$row=mysqli_fetch_assoc($query);
	$ia=$row['ISACTIVE'];

	if ($ia=='1') {
		$update="update category_tbl set ISACTIVE=0 where ID=$id";
	}
	else{
     $update="update category_tbl set ISACTIVE=1 where ID=$id";
	}
	$query2=mysqli_query($conn,$update);
	if ($query2) {
		header("location:category_view.php");
		exit();
	}
	else{
		echo "error";
	}

}
else
{
echo "error";
}

 ?>