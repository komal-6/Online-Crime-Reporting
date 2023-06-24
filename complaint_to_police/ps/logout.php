<?php 
session_start();
session_destroy();
header('location:policestation_login.php');
exit();
 ?>