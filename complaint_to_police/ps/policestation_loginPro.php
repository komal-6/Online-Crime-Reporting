<?php
session_start(); 
require '../common/connection.php';
if (!isset($_POST['btn_sb'])) {
	header("location:policestation_login.php");
	exit();
}

 
$us=$_POST['txt_us'];

$ps=$_POST['txt_pass'];

$select="select * from policestation_tbl where  PS_USERNAME='".$us."'  and PASSWORD='".$ps."' ";
$query=mysqli_query($conn,$select);
if (mysqli_num_rows($query)>0) {
    $row=mysqli_fetch_assoc($query);
    $id=$row['ID'];
    $uss=$row['PS_USERNAME'];
    // echo $uss;
    $_SESSION['PS_ID']=$id;
    $_SESSION['PS_NAME']=$uss;  
    setcookie('username',$uss,time()+(86400*10),'/');
         // setcookie('password',$pss,time()+(86400*10),'/');
          header("location:ps_dash.php");
          exit();    
    }
else{
	echo "Data not Found"; 
 header("location:policestation_login.php?msg1");
  exit();
}
?>