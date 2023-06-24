<?php 
require '../common/connection.php';
if (!isset($_POST['btn_sb'])) {
	 header("location:action.php");
	 exit();
}

$cat_id=$_POST['comp_cat_id'];
$uid=$_POST['uid'];
$comp_id=$_POST['comp_id'];
$action=$_POST['txt_dis'];
$isactive=1;
$doi=date('d/m/y h:i:s');
$email=$_POST['u_email'];

$insert="insert into action_tbl
(COMPLENT_CATEGORY_ID,COMPLENT_ID,USER_ID,ACTION_DESCRIPTION,ISACTIVE,DOI)
 values('".$cat_id."','".$comp_id."','".$uid."','".$action."','".$isactive."','".$doi."')";
 $query=mysqli_query($conn,$insert);

 if ($query) {
 	echo "Insertd";

 	require 'PHPMailer/class.phpmailer.php';
    require 'PHPMailer/class.smtp.php';
  $email1=$email;
  $body=" $action.";
  echo $body;
 
  $sub="ACTION ON YOUR COMPLENT";
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
      header("location:view_complent.php?error");
 	exit();

  } else {
      echo 'Message has been sent';
      header("location:view_complent.php?on");
      exit();
  }
            
 }
 else{
 	echo "Error";
 	header("location:view_complent.php?error");
 	exit();
 }

 ?>