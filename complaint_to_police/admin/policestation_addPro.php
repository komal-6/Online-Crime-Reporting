<?php 
require '../common/connection.php';
if (!isset($_POST['btn_sb'])) {
	header("location:policestation_add.php");
	exit();
}

$pname=$_POST['pos_nm'];
$pemail=$_POST['txt_em'];
$username=$_POST['txt_us'];
$pnumber=$_POST['pos_num'];
$pass=$_POST['txt_pass'];
$cpass=$_POST['pos_cpass'];
$sid=$_POST['sid'];
$cid=$_POST['cid'];
$aid=$_POST['aid'];
$isactive=1;
$doi=date('d/m/y h:i:s');

$select="select * from policestation_tbl where PS_EMAIL='".$pemail."' and ISACTIVE=1";
$queryS=mysqli_query($conn,$select);
if (mysqli_fetch_assoc($queryS)) {
	header("location:policestation_add.php?email");
	exit();
}

$select1="select * from policestation_tbl where PS_CONTECT_NUMBER='".$pnumber."' and ISACTIVE=1";
$query1=mysqli_query($conn,$select1);
if (mysqli_fetch_assoc($query1)) {
	header("location:policestation_add.php?number");
	exit();
}

$select2="select * from policestation_tbl where PS_USERNAME='".$username."' and ISACTIVE=1";
$query2=mysqli_query($conn,$select2);
if (mysqli_fetch_assoc($query2)) {
  header("location:policestation_add.php?username");
  exit();
}

 if ($_FILES["fileToUpload"]["name"]=="") {
 	$pic='avetar.png';
 }
 else{
 	require 'upload.php';
 	$pic=$_FILES["fileToUpload"]["name"];

 }

 $insert="insert into policestation_tbl
 (PS_NAME,PS_EMAIL,PS_USERNAME,PASSWORD,PS_CONTECT_NUMBER,STATE_ID,CITY_ID,AREA_ID,PS_PICTURE,ISACTIVE,DOI)
  values('".$pname."','".$pemail."','".$username."','".$pass."','".$pnumber."','".$sid."','".$cid."','".$aid."',
  '".$pic."','".$isactive."','".$doi."')";

  $query=mysqli_query($conn,$insert);
  if ($query) {
  	echo "Insert";
//require 'PHPMailer/PHPMailerAutoload.php';
require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/class.smtp.php';
    
    $email=$pemail;

  $body="
        Dear User Your Online Crime Reporting Account is Created<br><br>
        __Details Of $pname Is__<br>
        Username=$username<br>
        Password=$pass<br><br>

        ___* Dear User You can Change Your Password by $pemail *___
      
    ";
  echo $body;

  $sub="POLICE STATION";
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
  $mail->addAddress($email);
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
              header("location:policestation_view.php");
              exit();
          }


  }
  else{
  	echo "Error";
  }

 ?>
