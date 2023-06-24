<?php 
session_start();
require '../common/connection.php';
if (!isset($_SESSION['user'])) {
  header("location:user_dash.php");
  exit();
}
$select="select * from state_tbl where ISACTIVE=1";
$query=mysqli_query($conn,$select);
$select2="select * from category_tbl where ISACTIVE=1";
$query2=mysqli_query($conn,$select2);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from sbtechnosoft.com/barrister/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 10:56:25 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add Complaint</title>
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
                    <li><a href="post_view.php">Post</a></li>
                    <li><a href="my_post.php">My Post</a></li>
                    <li><a href="post_add.php">Add Post</a></li>
                  </ul>
                </li>
               <li><a href="view_news.php">News</a></li>
               <li class="active"><a href="complent_add.php">Complaint</a></li>
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
<!---complaint form---->



<div class="barriszter-callouts-wrapper">
  <div class="container">
    <div class="title"> <span class="title-border-img"><img src="images/h1-line-img1.png" alt=""></span>
      <h2>DO COMPLAINT</h2>
    </div>
    <div class="row">
      <form action="complent_addPro.php" method="POST" data-parsley-validate="">
      <div class="col-sm-12 col-md-12 col-lg-10 col-sm-offset-0 col-md-offset-0 col-lg-offset-1">
        <div class="row">
          <div class="form-group col-md-12 input-error">
                First Name
          <input name="txt_fn" class="form-control" placeholder="Firt name" type="text" required="">
        </div>
       
         <div class="form-group col-md-12 input-error">
                Last Name
          <input name="txt_ln" class="form-control" placeholder="First name" type="text" required="">
        </div>
          

        <div class="form-group col-md-12 input-error">
          Address
         <textarea name="txt_add" rows="4" cols="50" class="form-control" placeholder="Enter Address" required=""></textarea>
        </div>
        
         <div class="form-group col-md-12 input-error">
          Select Complaint Category
          <select name="cat_id" class="form-control" required="">
            <option>Select</option>
              <?php 
              if (mysqli_num_rows($query2)>0) {
                 while ($row2=mysqli_fetch_assoc($query2)) {
                 ?>
              <option value="<?php echo $row2['ID']; ?>"><?php echo $row2['CATEGORY_NAME']; ?></option>
              <?php 
               }
               }
               ?>
          </select>
        </div>

        <div class="form-group col-md-12 input-error">
         <textarea id="Discription" rows="4" cols="50" class="form-control" placeholder="Complaint Description" name="txt_dis"></textarea>
        </div>

        <div class="form-group col-md-12 input-error">
          Select state
          <select  class="form-control" id="sid" name="sid" required="">
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
          Select City
          <select  class="form-control" id="cid" name="cid" required="">
           

          </select>
        </div>

        <div class="form-group col-md-12 input-error">
          Select Area
          <select  class="form-control" id="aid" name="aid" required="">
           
          </select>
        </div>

       <!--  <div class="form-group col-md-12 input-error">
        Search Police Station
        <input type="text" name="txt_search" id="txt_search" class="form-control">
        <button type="submit" class="btn-one" id="btn_sch" style="background-color: #9f280c;">Search</button>
        </div> -->

        <div class="form-group col-md-12 input-error" id="">
        
        <div id="ps"></div>
        </div>

        <div class="text-md-left col-md-12">
            <button type="submit" name="btn_sb" class="btn-one" style="background-color: #9f280c;">Submit</button>
        </div>
            </div>
          </div>
        </div>
      </div>
      </form>
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
  $(document).ready(function(){
   //alert('page is ready');
   $('#aid').change(function(e){
     //alert('btn click');
     e.preventDefault();
     
     var ps_name=$('#txt_search').val();
     var cid=$('#cid').val();
     var aid=$('#aid').val();

     $.ajax({
      type:"POST",
      datatype:"html",
      url:"ps_search.php",
      data:{
        psname:ps_name,
        city:cid,
        area:aid,
      },
      success:function(result){
      //alert(result);
      $('#ps').html(result);

      }

     });
     
   });
  });
</script>

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
<script type="text/javascript" src="../parsley/parsley.js">
  
</script>

<script type="text/javascript">
  <?php 
   if (isset($_GET['pid'])) {
   
   ?>
   alert('Please Select State , City , Area ');
   <?php 
      }
    ?>
</script>
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