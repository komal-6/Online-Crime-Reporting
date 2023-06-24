<?php 
require '../common/connection.php';
$id=$_GET['id'];
if (!isset($_GET['id'])) {
	header("location:city_view.php");
	exit();
}
$select="select * from city_tbl where ID=$id";
$query=mysqli_query($conn,$select);
if ($query) {
	echo "selected";
    $row=mysqli_fetch_assoc($query);
    $ia=$row['ISACTIVE'];
}
else{
	echo "ERROR";
}

if ($ia=='1') {
  $update="update city_tbl set ISACTIVE=0 where ID=$id";
}
else{
	$update="update city_tbl set ISACTIVE=1 where ID=$id";
}
$query2=mysqli_query($conn,$update);
if ($query2) {
	echo "updated";
	header("location:city_view.php");
	exit();
}
else{
	echo "Error";
}
?>
