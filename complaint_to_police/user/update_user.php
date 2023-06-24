<?php 
require '../common/connection.php';

if (!isset($_POST['btn_sb'])) {
  header("location:view_profile.php");
  exit();
}
$uid=$_POST['txt_uid'];
$select="select * from user_tbl where ID=$uid and ISACTIVE=1";
$query=mysqli_query($conn,$select);
$row=mysqli_fetch_assoc($query);
 ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from sbtechnosoft.com/barrister/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 10:56:25 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edit User</title>
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/linearicons/css/icon-font.min.css" rel="stylesheet">
<link href="assets/css/magnific-popup.css" rel="stylesheet">
<link href="assets/animate/animate.css" rel="stylesheet">
<link href="assets/owl-carousel/css/owl.carousel.css" rel="stylesheet">
<link href="assets/owl-carousel/css/owl.theme.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>

<div id="dvLoading"></div>
<header class="wow fadeInDown" data-offset-top="197" data-spy=  "affix">
  <div class="logo-wrapper"> 
    <div class="container">
      <div class="row"> 
        <div class="col-sm-6 col-md-2 col-lg-2 hidden-xs"> <a href="index-2.html"><img src="images/logo.png"></a> </div>
        
        <div class="col-sm-12 col-md-10 col-lg-10">
          <nav class="navbar navbar-default pull-right"> 
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <a class="navbar-brand" href="index-2.html"><img src="images/logo.png" alt="Barrister"/></a> </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="user_dash.php">Home</a></li>
                
                <!-- <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><
                    a href="faq.html">FAQ</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                  </ul>
                </li> -->
                <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">POST<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="post_view.php">POST</a></li>
                    <li><a href="my_post.php">MY POST</a></li>
                    <li><a href="post_add.php">ADD POST</a></li>
                  </ul>
                </li>
               <li><a href="view_news.php">News</a></li>
               <li><a href="complent_add.php">Complent</a></li>
                <li><a href="contect_us.php">Contact Us</a></li>
                <li><a href="about_us.php">About Us</a></li>
                <li  class="active"><a href="view_profile.php" >Account</a></li>
                 <li><a href="feedback_add.php" >FEEDBACK</a></li>
                <li><a href="logout.php" >Logout</a></li>

               <!--  <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registration <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="policestation-registration.html">Police Station Registration</a></li>
                    <li><a href="user-registration.html">User Registration</a></li>
                  </ul> 
                </li> -->
                
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Breadcrumb Wrapper Start -->
<div class="breadcrumb-wrapper">
  <div class="container">
    <div class="breadcrumb-text text-center">
      <h1>Profile Update</h1>
    </div>
  </div>
</div>
<!-- Breadcrumb Wrapper End --> 
<!-- Barrister Inner page Wrapper Start -->
<div class="inner-page-wrapper aboutus-wrapper">
  <div class="container">
    <div class="title"> <span class="title-border-img"><img height="200px" width="200px" src="../upload/<?php echo$row['PROFILE_PIC']; ?>" alt=""></span>
      
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-10 col-sm-offset-0 col-md-offset-0 col-lg-offset-1">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="row">


              <form class="contact-us-form" action="user_updatePro.php" method="POST" 
              enctype="multipart/form-data" data-parsley-validate="">
             <input type="hidden" name="txt_id" value="<?php echo $row['ID']; ?>">

        <div class="form-group col-md-12 ">
          USER NAME
          <input name="txt_us" class="form-control " placeholder="Enter your Username" type="text" 
            value="<?php echo$row['USERNAME'] ?>" >
        </div>
             
        <div class="form-group col-md-12 ">
          First Name
          <input name="txt_fn" class="form-control " placeholder="Enter your FirstName" type="text" 
            value="<?php echo$row['FIRST_NAME'] ?>" >
        </div>

        <div class="form-group col-md-12 input-error">
          Last Name
          <input name="txt_ln" class="form-control " placeholder="Enter your FirstName" type="text" 
            value="<?php echo$row['LAST_NAME'] ?>" >
        </div>

        <div class="form-group col-md-12 input-error">
          Contect Number
           <input name="txt_num" class="form-control " placeholder="Enter your FirstName" type="text" 
            value="<?php echo$row['CONTECT_NUMBER'] ?>" >
        </div>

        
        <div class="form-group class col-md-12">
          Date Of Birth
           <input name="txt_dob" class="form-control " placeholder="Enter your FirstName" type="date" 
            value="<?php echo$row['DOB'] ?>" >
        </div>
           <?php $gn=$row['GENDER']; ?>
        <div class="form-group class col-md-12">
          Gender:
            <input type="radio" name="gender" value="Male" <?php if ($gn=="Male"){echo"checked";}?>>Male
                         <input type="radio" name="gender" value="Female" <?php if ($gn=="Female"){echo"checked";}?>>Female
         </div>
      
         <div class="form-group col-md-12 input-error">
          Address
          <input name="txt_add" class="form-control " placeholder="Enter your FirstName" type="text" 
            value="<?php echo$row['ADDRESS'] ?>" >
        </div>

         <div class="form-group col-md-12 input-error">
          Change Profile
          <input type="file" name="fileToUpload" class="form-control">
        </div>

        
        <div class="text-md-left col-md-12">
            <button type="submit" class="btn-one" name="btn_sb"  style="background-color: #9f280c;">
              Edit
            </button>
        </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
      
    </div>
    
    </div>
  </div>
</div> 

<!-- Barrister Footer Wrapper Start -->
<!-- Barrister Footer Wrapper Start -->
<div class="footer-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4"> <img src="images/footer-logo.png" alt="" data-popupalt-original-title="null" title="">
        <p>For this website is to provide for all person to complain against for any crime.It is very better performance for users to complaint for crime at any place.With the help of this software people can submit their complaint in the police station.</p>
       
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="bullet-section">
          <h2><img src="images/link-icon.png">RESEARCH LINKS</h2>
          
          <ul>
            <li><a href="about-us.html">ABOUT US</a></li>
            <li><a href="contact-us.html">CONTACT US</a></li>
            <li><a href="">FIND POLICE STATION</a></li>
            <li><a href="">VIEW CASES</a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="form-section">
            <img src="images/callout-img3.jpg">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Barrister Footer Wrapper end --> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="assets/jquery/jquery-3.1.1.min.js"></script> 
<script src="assets/jquery/jquery.animateNumber.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="assets/bootstrap/js/bootstrap.min.js"></script> 
<script src="assets/jquery/plugins.js"></script> 
<script src="assets/jquery/slider.js"></script> 
<script src="assets/owl-carousel/js/owl.carousel.js"></script> 
<script src="assets/jquery/jquery.magnific-popup.min.js"></script> 
<script src="assets/wow/wow.min.js"></script> 
<script src="js/custom.js"></script>
</body>

<!-- Mirrored from sbtechnosoft.com/barrister/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 11:01:00 GMT -->
</html>