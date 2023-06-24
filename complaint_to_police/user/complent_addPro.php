<?php 
session_start();
require '../common/connection.php';
  if (!isset($_SESSION['id1'])) {
    header("location:user_login.php");
  }
  if (!isset($_POST['btn_sb'])) {
    header("location:complent_add.php");
    exit();
  }
 
 if (!isset($_POST['txt_pid'])) {
   header("location:complent_add.php?pid");
   exit();
 }

$uid=$_SESSION['id1'];
echo $uid;
$fn=$_POST['txt_fn'];
$ln=$_POST['txt_ln'];
$add=$_POST['txt_add'];
$cat_id=$_POST['cat_id'];
$dis=$_POST['txt_dis'];
$sid=$_POST['sid'];
$cid=$_POST['cid'];
$aid=$_POST['aid'];
$pid=$_POST['txt_pid'];
$isactive=1;
$doi=date("y/m/d h:i:s");

$insert="insert into complent_tbl(USER_ID,FIRST_NAME,LAST_NAME,COMPLENT_CATEGORY_ID,COMPLENT_DISCRIPTION,STATE_ID,CITY_ID,AREA_ID,PS_ID,ISACTIVE,DOI)values('".$uid."','".$fn."','".$ln."','".$cat_id."','".$dis."','".$sid."','".$cid."','".$aid."','".$pid."','".$isactive."','".$doi."')";

$select="select * from user_tbl where ID='".$uid."' and ISACTIVE=1";
$query2=mysqli_query($conn,$select);
$row=mysqli_fetch_assoc($query2);
$em=$row['EMAIL'];
$fn=$row['FIRST_NAME'];
$ln=$row['LAST_NAME'];

    $query=mysqli_query($conn,$insert);
   if ($query) {
   	echo "inserted";

 require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/class.smtp.php';
  $email1=$em;
  $body="Dear"." ".$fn." ".$ln."  "."Your Complent has been Send <br><br>
         ___THANK YOU___ ";
  echo $body;
 
  $sub="Crime Complent";
  $mail = new PHPMailer;  

  $mail->isSMTP();                                   // Set mailer to use SMTP
  $mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                            // Enable SMTP authentication
  $mail->Username = 'preventcrime.123@gmail.com';          // SMTP username
  $mail->Password = 'no_crime@123'; // SMTP password
  $mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 587;                                 // TCP port to connect to

  $mail->setFrom('preventcrime.123@gmail.com', 'Online Crime Reporting');
  $mail->addReplyTo('preventcrime.123@gmail.com', 'Online Crime Reporting');
  $mail->addAddress($email1);
  // $mail->addAddress($email2);   // Add a recipient
     // Add a recipient
  //$mail->addCC('cc@example.com');
  //$mail->addBCC('bcc@example.com');
  $mail->isHTML(true);  // Set email format to HTML

  $bodyContent = $body;
  
  $mail->Subject = $sub;
  $mail->Body    = $bodyContent;

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
  if(!$mail->send()) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
      echo 'Message has been sent';
      header("location:user_dash.php?on");
      exit();
  }
  
   }


   else{
   header("location:user_dash.php?error");
   }
 ?>