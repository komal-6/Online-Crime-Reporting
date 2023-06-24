<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="complane_to_police";

$conn=mysqli_connect($servername,$username,$password);
if ($conn) {
	//echo "Database Server Connected";
}
else
{
	echo "Connection Faild".mysqli_connect_error();
}

$db=mysqli_select_db($conn,$dbname);
if ($db) {
	//echo "Database Selected";
}
else{
	echo "Database Not Found";
}

 ?>