<?php 
require '../common/connection.php';
if (!isset($_POST['btn_sb'])) {
   header("location:area_add.php");
   exit();
}
$sid=$_POST['sid'];
$cid=$_POST['cid'];
$area=$_POST['txt_area'];
$isactive=1;
$doi=date("d/m/y  h:i:s");

$insert="insert into area_tbl(SID,CID,AREA_NAME,ISACTIVE,DOI)
         value('".$sid."','".$cid."','".$area."','".$isactive."','".$doi."')";

         $query=mysqli_query($conn,$insert);
         if ($query) {
          echo "Insertd";
          header("location:area_add.php");
          exit();
         }
         else{
         	echo "Error";
         }
 ?>