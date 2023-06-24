<?php
session_start(); 
require '../common/connection.php';
if (!isset($_POST['btn_sb'])) {
	header("location:user_login.php");
	exit();
}

 
$us=$_POST['txt_us'];

$ps=$_POST['txt_pass'];

$select="select * from user_tbl where  PASSWORD ='".$ps."'  and USER_TYPE= 1 and USERNAME='".$us."' ";
$query=mysqli_query($conn,$select);

if (mysqli_num_rows($query)>0) {
    $row=mysqli_fetch_assoc($query);
    $id=$row['ID'];
    $uss=$row['USERNAME'];
    $em=$row['EMAIL'];
    // echo $uss;
    $pss=$row['PASSWORD'];
    $_SESSION['id1']=$id;
    $_SESSION['username1']=$uss;
    $_SESSION['password1']=$pss;
    echo $_SESSION['password1'];
   $_SESSION['user']=1;
   
    setcookie('username',$uss,time()+(86400*10),'/');
    setcookie('EMAIL',$em,time()+(86400*10),'/');
         setcookie('password',$pss,time()+(86400*10),'/');
         header("location:user_dash.php");
          exit();    
    }
else{
	echo "Data not Found"; 
 header("location:user_login.php?msg1");
   exit();
}
?>