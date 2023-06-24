<?php
session_start(); 
require '../common/connection.php';
 if (!isset($_POST['btn_sb'])) {
   header("location:user_registration.php");
   exit();
 }

  if (isset($_POST['sid'])) {
     $sid=$_POST['sid'];
 }
 else{
  header("location:user_registration.php?state");
   exit();
 }
 
 if (isset($_POST['cid'])) {
   $cid=$_POST['cid'];
 }
 else{
  header("location:user_registration.php?city");
  exit();
 }

 if (isset($_POST['aid'])) {
     $aid=$_POST['aid'];
 }
 else{
  header("location:user_registration.php?area");
  exit();
 }

  if (!isset($_POST['gender'])) {
    header("location:user_registration.php?gender");
    exit(); 
  }
 
 $fn=$_POST['txt_fn'];
 $ln=$_POST['txt_ln'];
 $us=$_POST['txt_us'];
 $em=$_POST['txt_em'];
 $contect=$_POST['txt_con'];
 $pass=$_POST['txt_pass'];
 $cpass=$_POST['txt_cpass'];
 $gender=$_POST['gender'];
 $dob=$_POST['txt_dob'];
 $cid=$_POST['cid'];
 
 $add=$_POST['txt_add'];
 $usert_type=1;
 $isactive=1;
 $doi=date("d/m/y h:i:s");


   if ($pass!=$cpass) {
      header("location:user_registration.php");
      exit();
   }

// $select="select * from user_tbl where EMAIL='".$em."' and ISACTIVE=1";
// $query1=mysqli_query($conn,$select);
// if (mysqli_fetch_assoc($query1)) {
//   header("location:user_registration.php?msg");
//   exit();
// }
$select2="select * from user_tbl where CONTECT_NUMBER='".$contect."' and ISACTIVE=1";
$query2=mysqli_query($conn,$select2);
if (mysqli_fetch_assoc($query2)) {
  header("location:user_registration.php?msg1");
  exit();
}   
$select3="select * from user_tbl where USERNAME='".$us."' and ISACTIVE=1";
$queryUS=mysqli_query($conn,$select3);

if (mysqli_fetch_assoc($queryUS)) {
  header("location:user_registration.php?msg4");
  exit();
}

 if ($_FILES["fileToUpload"]["name"]=="") {
 	$pic="avetar.png";
 }
 else{
 	require 'upload.php';
 	$pic=$_FILES["fileToUpload"]["name"];
 }

    $insert="insert into user_tbl(FIRST_NAME,LAST_NAME,USERNAME,EMAIL,PASSWORD,DOB,GENDER,CONTECT_NUMBER,ADDRESS,PROFILE_PIC,STATE_ID,CITY_ID,AREA_ID,ISACTIVE,USER_TYPE,DOI)values('".$fn."','".$ln."','".$us."','".$em."','".$pass."','".$dob."','".$gender."','".$contect."','".$add."','".$pic."','".$sid."','".$cid."','".$aid."','".$isactive."','".$usert_type."','".$doi."')";

     $query=mysqli_query($conn,$insert);
     if ($query) {     
//require 'PHPMailer/PHPMailerAutoload.php';
require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/class.smtp.php';
  $email1=$em;
  $body="Dear".$fn."Your Registration Is Successfull<br><br>
         Your Account Details<br><br>
         Username:$us<br>
         Password:$pass<br>

         You can Change Your Password by $em .
         ";
  echo $body;
 
  $sub="Registration Conformation";
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
      header("location:user_login.php?on");
      exit();
  }
          }     
          else{
          	echo "Error";
          }
 ?>