<?php
session_start(); 
require '../common/connection.php';
if (!isset($_POST['btn_sb'])) {
	header("location:admin_login.php?msg1=Direact Url Called");
	exit();
}

 
$us=$_POST['txt_us'];
$ps=$_POST['txt_pass'];
$select="select * from user_tbl where USER_TYPE=2 and EMAIL='".$us."' and PASSWORD ='".$ps."' ";
$query=mysqli_query($conn,$select);
if (mysqli_num_rows($query)>0) {
    $row=mysqli_fetch_assoc($query);
    $id=$row['ID'];
    $uss=$row['EMAIL'];
    $pss=$row['PASSWORD'];
    $_SESSION['id']=$id;
    $_SESSION['username']=$uss;
    $_SESSION['password']=$pss;

    $_SESSION['admin']=2;
     
      if (isset($_POST['chek'])) {
         setcookie('username',$uss,time()+(86400*10),'/');
         setcookie('password',$pss,time()+(86400*10),'/');
         header("location:dashboard.php");
         echo "login successfull";
         exit();
      }

    }
else{
	echo "Data not Found"; 
 // header("location:admin_login.php?msg2=Please Enter Your Valid Information");
  exit();
}
?>