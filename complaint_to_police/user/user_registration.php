<?php 
require '../common/connection.php';
$select="select * from state_tbl where ISACTIVE=1";
$query=mysqli_query($conn,$select);

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from sbtechnosoft.com/barrister/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 10:56:25 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Registration</title>
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/linearicons/css/icon-font.min.css" rel="stylesheet">
<link href="assets/css/magnific-popup.css" rel="stylesheet">
<link href="assets/animate/animate.css" rel="stylesheet">
<link href="assets/owl-carousel/css/owl.carousel.css" rel="stylesheet">
<link href="assets/owl-carousel/css/owl.theme.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link href="css/parsley.css" rel="stylesheet">
<script src="js/parsley.min.js" type="text/javascript"></script>
</head>
<body>

<div id="dvLoading"></div>
<header class="wow fadeInDown" data-offset-top="197" data-spy="affix">
  <div class="logo-wrapper"> 
    <div class="container">
      <div class="row"> 
        <div class="col-sm-6 col-md-2 col-lg-2 hidden-xs"> <a href="index.php"><img src="images/Komal.png" width="255" height="55"></a> </div>
        
        <div class="col-sm-12 col-md-10 col-lg-10">
          <nav class="navbar navbar-default pull-right"> 
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Barrister"/></a> </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                
                <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="policestation_login.php">Police Station Login</a></li>
                    <li><a href="user_login.php">User Login</a></li>
                  </ul>
                </li>

                <!--<li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="services.html">Services</a></li>
                    <li><a href="service-details.html">Service Details</a></li>
                  </ul>
                </li>
                <li><a href="view_news.html">News</a></li>-->
                
                <li class="active"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User Registration</a>
                </li>
                
                <li><a href="about_us.php">About Us</a></li>
                
                <li><a href="contect_us.php">Contact Us</a></li>

              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="barrister-callouts-wrapper">
  <div class="container">
    <div class="title"> <span class="title-border-img"><img src="images/h1-line-img1.png" alt=""></span>
      <h2>USER REGISTRATION</h2>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-10 col-sm-offset-0 col-md-offset-0 col-lg-offset-1">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="row">


          <form class="contact-us-form" action="user_registrationPro.php" method="POST"
            enctype="multipart/form-data" data-parsley-validate="">
         <div class="form-group col-md-12 input-error">
          <label>FirstName</label>
          <input name="txt_fn" class="form-control required" placeholder="Enter your First Name" type="text" required="">
        </div> 

         <div class="form-group col-md-12 input-error">
          <label>LastName</label>
          <input name="txt_ln" class="form-control required" placeholder="Enter your Last Name" type="text" required="">
        </div>

        <div class="form-group col-md-12 input-error">
          <label>Username</label>
          <input name="txt_us" class="form-control required" placeholder="Enter Username" type="text" required="">
        </div>

        <div class="form-group col-md-12 input-error">
          <label>Password</label>
          <input name="txt_pass" class="form-control required" placeholder="Enter Password" type="password" data-parsley-required="" data-parsley-equalto="#cpass">
        </div>
        <div class="form-group col-md-12 input-error">
          <label>Confirm Password</label>
          <input name="txt_cpass" class="form-control required" placeholder="Enter Password" type="password" required="" id="cpass">
        </div>

        <div class="form-group col-md-12 input-error">
         <label>Email</label>
          <input name="txt_em" class="form-control required" placeholder="Enter your Email id" type="email" required="">
        </div>

        <div class="form-group col-md-12 input-error">
           <label>Contact Number</label>
          <input name="txt_con" class="form-control required" placeholder="Enter your contact_no" type="number" required="">
        </div>

        <div class="form-group col-md-12 input-error">
          <label>Gender</label>
           <br><input name="gender" type="radio" value="Male" required="">Male
           <br><input name="gender" type="radio" value="Female" required="">Female 
           <br><input name="gender" type="radio" value="Other" required="">Other
        </div>

        <div class="form-group col-md-12 input-error">
          <label>Date Of Birth</label>
          <input type="date" name="txt_dob" class="form-control" data-parsley-required="">
        </div>

        

         <div class="form-group col-md-12 input-error">
          <label>Select State</label>

          <select class="form-control" name="sid" id="sid" required="">
            <option>Select</option>
           <?php 
            if (mysqli_num_rows($query)>0) {
              while ($row=mysqli_fetch_assoc($query)) { 
            ?>
            <option value="<?php echo$row['ID']; ?>"><?php echo $row['STATE_NAME']; ?></option>
            <?php 
              }
            }
             ?>
          </select>
        </div>

        <div class="form-group col-md-12 input-error">
          <label>Select City</label>

          <select class="form-control" name="cid" id="cid" required="">
           
          </select>
        </div>

      <div class="form-group col-md-12 input-error">
        <label>Select Area</label>
          <select class="form-control" name="aid" id="aid" required="">

          </select>
        </div>



        <div class="form-group col-md-12 input-error">
         <textarea name="txt_add" rows="4" cols="50" class="form-control" placeholder="ADDRESS" required=""></textarea>
        </div>

        

        <div class="form-group col-md-12 input-error">
          Profile Pic
          <input name="fileToUpload" class="form-control required" type="file">
        </div>

        <div class="text-md-left col-md-12">
            <button type="submit" name="btn_sb" class="btn-one" style="background-color: #9f280c;">Register</button>
        </div>
              </form>
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
    $(document).ready(function(){
    //alert('hi page is ready');
    $('#sid').change(function(){
      
     //alert('state change');
     var sid=$('#sid').val();
     //alert(sid);

       $.ajax({
          type:"POST",
          datatype:"html",
           url:"area_city_view.php",
           data:{
            state_id:sid,
           },
           success:function(result){
            // alert(result);
             $("#cid").html(result);
           }
           

       });
    }); 

    });
  </script>

  <script type="text/javascript">
    $(document).ready(function(){
    //alert('hi area page is ready');
    $('#cid').change(function(){
      
     //alert('city change');
     var city=$('#cid').val();
     //alert(city);

       $.ajax({
          type:"POST",
          datatype:"html",
           url:"select_area_ajax.php",
           data:{
            city:city,
           },
           success:function(result1){
               //alert(result1);
             $("#aid").html(result1);
           }
           

       });
    }); 
    });
  </script>
<script src="assets/jquery/jquery.animateNumber.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="assets/bootstrap/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="../parsley/parsley.js"></script>
<script src="assets/jquery/plugins.js"></script> 
<script src="assets/jquery/slider.js"></script> 
<script src="assets/owl-carousel/js/owl.carousel.js"></script> 
<script src="assets/jquery/jquery.magnific-popup.min.js"></script> 
<script src="assets/wow/wow.min.js"></script> 
<script src="js/custom.js"></script>
<script type="text/javascript">
  <?php 
   if (isset($_GET['state'])) {
   ?>
   alert('Please Select Your State')
   <?php
    } 
    ?>
</script>
  
<script type="text/javascript">
  <?php 
   if (isset($_GET['city'])) {
   ?>
   alert('Please Select Your City')
   <?php
    } 
    ?>
</script>

<script type="text/javascript">
  <?php 
   if (isset($_GET['area'])) {
   ?>
   alert('Please Select Your State')
   <?php
    } 
    ?>
</script>
<script type="text/javascript">
  <?php 
   if (isset($_GET['gender'])) {
   ?>
   alert('Please Select Your Gender')
   <?php
    } 
    ?>
</script>
<script type="text/javascript">
  <?php 
   if (isset($_GET['msg'])) {
   ?>
   alert('Your Email Is already Exsist')
   <?php
    } 
    ?>
</script>
<script type="text/javascript">
  <?php 
   if (isset($_GET['msg1'])) {
   ?>
   alert('Your Contect Number Is already Exsist')
   <?php
    } 
    ?>
</script>
<script type="text/javascript">
  <?php 
   if (isset($_GET['msg4'])) {
   ?>
   alert('Your Username Is already Exsist')
   <?php
    } 
    ?>
</script>
</body>

<!-- Mirrored from sbtechnosoft.com/barrister/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 11:01:00 GMT -->
</html>