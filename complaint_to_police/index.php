<?php 
   require 'common/connection.php';
   $select="select * from news_tbl where ISACTIVE=1  limit 3";
   $query=mysqli_query($conn,$select);

 ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from sbtechnosoft.com/barrister/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 10:56:25 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home</title>
<link href="user/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="user/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="user/assets/linearicons/css/icon-font.min.css" rel="stylesheet">
<link href="user/assets/css/magnific-popup.css" rel="stylesheet">
<link href="user/assets/animate/animate.css" rel="stylesheet">
<link href="user/assets/owl-carousel/css/owl.carousel.css" rel="stylesheet">
<link href="user/assets/owl-carousel/css/owl.theme.css" rel="stylesheet">
<link href="user/css/style.css" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="user/images/favicon.ico">
</head>
<body>

<div id="dvLoading"></div>
<header class="wow fadeInDown" data-offset-top="197" data-spy="affix">
  <div class="logo-wrapper"> 
    <div class="container">
      <div class="row"> 
        <div class="col-sm-6 col-md-2 col-lg-2 hidden-xs"> <a href="index.php"><img src="user/images/Komal.png" width="255" height="55"></a> </div>
        
        <div class="col-sm-12 col-md-10 col-lg-10">
          <nav class="navbar navbar-default pull-right"> 
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <a class="navbar-brand" href="index.php"><img src="user/images/logo.png" alt="Barrister"/></a> </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">

                <li class="active"><a href="index.php">Home</a></li>
                 <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="ps/policestation_login.php">Police Station Login</a></li>
                    <li><a href="user/user_login.php">User Login</a></li>
                  </ul>
                </li>

                <li><a href="user/user_registration.php">User Registration</a></li>

                <li><a href="user/about_us.php">About Us</a></li>
                
                <li><a href="user/contect_us.php">Contact Us</a></li>
                <!-- <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="services.html">Services</a></li>
                    <li><a href="service-details.html">Service Details</a></li>
                  </ul>
                </li> -->
                <!-- <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="policestation-login.html">Police Station Login</a></li>
                    <li><a href="user-login.html">User Login</a></li>
                  </ul>
                </li>
 -->
           <!--      <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registration <span class="caret"></span></a>
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
          <div class="slide-1"><img src="user/images/about-video-wrapper-bg.jpg" width="100%" /></div>
          <div class="row">
            <div class="container">
              <div class="hero"> <img class="icon"  src="user/images/header-law-icon.png" alt="">
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
                  <span class="callouts-line"><embed width="200px" src="upload/<?php echo $row['PHOTO/VIDEO'] ?>"></embed></span>
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
    <div class="title"> <span class="title-border-img"><img src="user/images/h1-line-img1.png" alt=""></span>
      <h2>Cases</h2>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>MURDER</h3>
          <p>Killing someone on purpose.</p>
         
          <div class="icon-box"><img src="user/images/service-item-icon1.png" alt=""></div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>ROBBERY</h3>
          <p>Stolling large amount of money with force or violance from bank,store,home,etc.</p>
          
          <div class="icon-box"><img src="user/images/service-item-icon2.png" alt=""></div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>CYBER-CRIME</h3>
          <p>Doing something illigalover the internet or a computer system.</p>
          
          <div class="icon-box"><img src="user/images/service-item-icon3.png" alt=""></div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>CHILD ABUSEMENT</h3>
          <p>Treating a child badly in a physical,emotional,or sexual way.</p>
          
          <div class="icon-box"><img src="user/images/service-item-icon4.png" alt=""></div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>HIT AND RUN</h3>
          <p>Not stopping to help a person hurt in an accident caused by you.</p>
          
          <div class="icon-box"><img src="user/images/service-item-icon5.png" alt=""></div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="service-item">
          <h3>KIDNAPPING</h3>
          <p>Taking someone away by force,often demanding money for their safe return.</p>
          
          <div class="icon-box"><img src="user/images/service-item-icon6.png" alt=""></div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Barrister Footer Wrapper Start -->
<div class="footer-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4"> <img src="user/images/Komal.png" alt="" data-popupalt-original-title="null" title="">
        <p>For this website is to provide for all person to complain against for any crime.It is very better performance for users to complaint for crime at any place.With the help of this software people can submit their complaint in the police station.</p>
       
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="bullet-section">
          <h2><img src="user/images/link-icon.png">RESEARCH LINKS</h2>
          
          <ul>
            <li><a href="about_us.php">ABOUT US</a></li>
            <li><a href="contect_us.php">CONTACT US</a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="form-section">
            <img src="user/images/callout-img3.jpg">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Barrister Footer Wrapper end --> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="user/assets/jquery/jquery-3.1.1.min.js"></script> 
<script src="user/assets/jquery/jquery.animateNumber.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="user/assets/bootstrap/js/bootstrap.min.js"></script> 
<script src="user/assets/jquery/plugins.js"></script> 
<script src="user/assets/jquery/slider.js"></script> 
<script src="user/assets/owl-carousel/js/owl.carousel.js"></script> 
<script src="user/assets/jquery/jquery.magnific-popup.min.js"></script> 
<script src="user/assets/wow/wow.min.js"></script> 
<script src="user/js/custom.js"></script>
</body>

<!-- Mirrored from sbtechnosoft.com/barrister/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 11:01:00 GMT -->
</html>