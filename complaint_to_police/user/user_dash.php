<?php 
session_start();
if (!isset($_SESSION['id1'])) {
  header("location:user_login.php");
  exit();
}
require '../common/connection.php';
   $select="select * from news_tbl where ISACTIVE=1  limit 6";
   $query=mysqli_query($conn,$select);
 ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from sbtechnosoft.com/barrister/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 10:56:25 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>User Dashboard</title>
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
        <div class="col-sm-6 col-md-2 col-lg-2 hidden-xs"> <a href="index-2.html"><img src="images/Komal.png" width="255" height="55"></a> </div>
        
        <div class="col-sm-12 col-md-10 col-lg-10">
          <nav class="navbar navbar-default pull-right"> 
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <a class="navbar-brand" href="index-2.html"><img src="images/logo.png" alt="Barrister"/></a> </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="user_dash.php">Home</a></li>
                
                <!-- <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><
                    a href="faq.html">FAQ</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                  </ul>
                </li> -->
                <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">POST<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="post_view.php">Post</a></li>
                    <li><a href="my_post.php">My Post</a></li>
                    <li><a href="post_add.php">Add Post</a></li>
                  </ul>
                </li>
               <li><a href="view_news.php">News</a></li>
               <li><a href="complent_add.php">Complaint</a></li>
                <li><a href="contect_us.php">Contact Us</a></li>
                <li><a href="about_us.php">About Us</a></li>
                <li><a href="view_profile.php">Account</a></li>
                 <li><a href="feedback_add.php">Feedback</a></li>
                <li><a href="logout.php">Logout</a></li>

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
<div class="banner-wrapper">
  <div id="first-slider" class="carousel fade-carousel slide">
    <div id="carousel-example-generic" class="carousel slide carousel-fade"> 
      <div class="overlay"></div>
      <div class="" role="listbox">
        <div class="item slides active">
          <div class="slide-1"><img src="images/about-video-wrapper-bg.jpg" width="100%" /></div>
          <div class="row">
            <div class="container">
              <div class="hero"> <img class="icon"  src="images/header-law-icon.png" alt="">
                <h1 class="">Online Crime Reporting</h1>
                
             </div> 
            </div>
          </div>
        </div>
      </div>
     </div>
  </div>
</div>
<div class="barrister-callouts-wrapper">
  <div class="container">
    <div class="title"> <span class="title-border-img"><img src="user/images/h1-line-img1.png" alt=""></span>
      <h2>News</h2>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-10 col-sm-offset-0 col-md-offset-0 col-lg-offset-1">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="row">
              <?php 
               if (mysqli_num_rows($query)) {
                 while ($row=mysqli_fetch_assoc($query)) {
                   
                
               ?>
              <div class="col-sm-4">
                <div class="callouts callout-img1">
                  <h3></h3>
                  <span class="callouts-line"><embed width="200px" src="../upload/<?php echo $row['PHOTO/VIDEO'] ?>"></embed></span>
                  <p></p>
                  </div>
              </div>
              <?php 
                  }
               }
               ?>
             <!--  <div class="col-sm-4">
                <div class="callouts callout-img2">
                  <h3></h3>
                  <span class="callouts-line"><img src="user/images/callouts-line.png" alt=""></span>
                  <p></p>
                  <a class="btn-one" href="javascript:void(0)">View Profile</a> </div>
              </div>
              <div class="col-sm-4">
                <div class="callouts callout-img2">
                  <h3></h3>
                  <span class="callouts-line"><img src="user/images/callouts-line.png" alt=""></span>
                  <p></p>
                  <a class="btn-one" href="javascript:void(0)">View Profile</a> </div>
              </div> -->
              
              
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
<div class="barrister-service-wrapper">
  <div class="container">
    <div class="title"> <span class="title-border-img"><img src="images/h1-line-img1.png" alt=""></span>
      <h2>Cases</h2>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>MURDER</h3>
          <p>Killing someone on purpose.</p>
         
          <div class="icon-box"><img src="images/service-item-icon1.png" alt=""></div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>ROBBERY</h3>
          <p>Stolling large amount of money with force or violance from bank,store,home,etc.</p>
          
          <div class="icon-box"><img src="images/service-item-icon2.png" alt=""></div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>CYBER-CRIME</h3>
          <p>Doing something illigalover the internet or a computer system.</p>
          
          <div class="icon-box"><img src="images/service-item-icon3.png" alt=""></div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>CHILD ABUSEMENT</h3>
          <p>Treating a child badly in a physical,emotional,or sexual way.</p>
          
          <div class="icon-box"><img src="images/service-item-icon4.png" alt=""></div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>HIT AND RUN</h3>
          <p>Not stopping to help a person hurt in an accident caused by you.</p>
          
          <div class="icon-box"><img src="images/service-item-icon5.png" alt=""></div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>KIDNAPPING</h3>
          <p>Taking someone away by force,often demanding money for their safe return.</p>
          
          <div class="icon-box"><img src="images/service-item-icon6.png" alt=""></div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Barrister Footer Wrapper Start -->
<div class="footer-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4"> <img src="images/Komal.png" alt="" data-popupalt-original-title="null" title="">
        <p>For this website is to provide for all person to complain against for any crime.It is very better performance for users to complaint for crime at any place.With the help of this software people can submit their complaint in the police station.</p>
       
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="bullet-section">
          <h2><img src="images/link-icon.png">RESEARCH LINKS</h2>
          
          <ul>
            <li><a href="about_us.php">ABOUT US</a></li>
            <li><a href="contect_us.php">CONTACT US</a></li>
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
<script type="text/javascript">
  <?php 
   if (isset($_GET['psname'])) {
  
   ?>
   alert('Please Enter Police Station Name And Press Serach Button');
   <?php 
     }
    ?>
</script>
<script type="text/javascript">
  <?php 
   if (isset($_GET['error'])) {
  
   ?>
   alert('complent not send try again');
   <?php 
     }
    ?>
</script>

<script type="text/javascript">
  <?php 
   if (isset($_GET['on'])) {
  
   ?>
   alert('complent has been  Send');
   <?php 
     }
    ?>
</script>

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