<?php 
require '../common/connection.php';
if (!isset($_POST['btn_sb'])) {
   header("location:contect_us.php");
   exit();
}
$name=$_POST['txt_name'];
$em=$_POST['email'];
$num=$_POST['number'];
$msg=$_POST['msg'];
$isactive=1;
$doi=date("d/m/y h:i:s");

$insert="insert into contectus_tbl(NAME,EMAIL_ID,CONTECT_NUMBER,MESSAGE,ISACTIVE,DOI)
        values('".$name."','".$em."','".$num."','".$msg."','".$isactive."','".$doi."')";

        $query=mysqli_query($conn,$insert);
        if ($query) {
        	 header("location:contect_us.php?insert");
           // echo "insert";
        	exit();
        }
        else{
        	header("location:contect_us.php?error");
        	exit();
        }
 ?>
