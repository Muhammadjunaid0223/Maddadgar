<?php
require_once("config.php");

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>adpitor</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <div class="wrapper">
         <!-- end loader -->
         <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div id="dismiss">
                  <i class="fa fa-arrow-left"></i>
               </div>
               <ul class="list-unstyled components">
                  <li class="active">
                     <a href="index.php">Home</a>
                  </li>
                  <li>
                     <a href="#about">About</a>
                  </li>
                  <li>
                     <a href="#review">Review</a>
                  </li>
                  <li>
                     <a href="#contact">Conatct</a>
                  </li>
               </ul>
            </nav>
         </div>
         <div id="content">
            <!-- header -->
            <header>
               <!-- header inner -->
               <div class="menu_sitbar">
                  <ul class="menu">
                     <li><button type="button" id="sidebarCollapse">
                        <img src="images/menu_icon.png" alt="#" />
                        </button></a>
                     </li>
                  </ul>
               </div>
               <div class="header_full_banner">
                  <div class="header">
                     <div class="container">
                        <div class="row">
                           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                              <div class="full">
                                 <div class="center-desk">
                                    <div class="logo">
                                       <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                              <ul class="btn">
                                 <li class="login_btn"><a href="Adminlogin.php">Login</a></li>
                                 <li><a href="#">Sign Up</a></li>
                                 <li><a href="Userlogin.php"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end header inner -->
                  <!-- end header -->
                  <!-- banner -->
                  <section class="banner_main">
                     <div class="container">
                        <div class="row d_flex">
                           <div class="col-md-126">
                              <div class="text-bg">
                                 <h1>Classified Ads</h1>
                                 <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in</span>
                                 <a href="#">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
            </header>
            <!-- end banner -->
            <!-- about -->
            <div id="about"  class="about">
               <div class="container-fluid">
                  <div class="row d_flex">
                     <div class="col-md-6">
                        <div class="about_img">
                           <figure><img src="images/about_img.jpg" alt="#"/></figure>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="titlepage">
                           <h2>About <span class="blu">us</span></h2>
                           <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                           <a class="read_more">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end about -->
            <!-- classified  section -->
            <div class="classified ">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="titlepage">
                           <h2>ONE OF THE BEST <span class="blu"> classified</span></h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="row">
                           <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                              <div class="classified_box">
                                 <span>0<strong class="blu2">1</strong>.</span>
                              </div>
                           </div>
                           <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12">
                              <div class="classified_box">
                                 <div class="fornt">
                                    <h3> FRONT END MULTICURRENCY</h3>
                                    <p>using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="row">
                              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                                 <div class="classified_box">
                                    <span>0<strong class="blu2">2</strong>.</span>
                                 </div>
                              </div>
                              <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12">
                                 <div class="classified_box">
                                    <div class="fornt">
                                       <h3>MOST INTELLIGENT SEARCH SYSTEM</h3>
                                       <p>using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="row">
                              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                                 <div class="classified_box">
                                    <span>0<strong class="blu2">3</strong>.</span>
                                 </div>
                              </div>
                              <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12">
                                 <div class="classified_box">
                                    <div class="fornt">
                                       <h3>MOST INTELLIGENT SEARCH SYSTEM</h3>
                                       <p>using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end classified  section -->
            <!-- review -->
            <div id="review" class="review">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="titlepage">
                           <h2>Our client <span class="blu"> review</span></h2>
                           <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it</p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div id="myCarousel" class="carousel slide review_Carousel " data-ride="carousel">
                           <ol class="carousel-indicators">
                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel" data-slide-to="1"></li>
                              <li data-target="#myCarousel" data-slide-to="2"></li>
                           </ol>
                           <div class="carousel-inner">
                              <div class="carousel-item active">
                                 <div class="container">
                                    <div class="carousel-caption ">
                                       <div class="row">
                                          <div class="col-md-12 margin_boot">
                                             <div class="test_box">
                                                <i><img src="images/te1.png" alt="#"/></i>
                                                <h4>John due</h4>
                                                <span>(adiser)</span>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page <br>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal<br> distribution of letters, as opposed to</p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="carousel-item">
                                 <div class="container">
                                    <div class="carousel-caption">
                                       <div class="row">
                                          <div class="col-md-12 margin_boot">
                                             <div class="test_box">
                                                <i><img src="images/te1.png" alt="#"/></i>
                                                <h4>John due</h4>
                                                <span>(adiser)</span>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of  pagea<br> when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal<br> distribution of letters, as opposed to</p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="carousel-item">
                                 <div class="container">
                                    <div class="carousel-caption">
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="test_box">
                                                <i><img src="images/te1.png" alt="#"/></i>
                                                <h4>John due</h4>
                                                <span>(adiser)</span>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page <br> when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal<br> distribution of letters, as opposed to</p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                           <span class="sr-only">Previous</span>
                           </a>
                           <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                           <span class="carousel-control-next-icon" aria-hidden="true"></span>
                           <span class="sr-only">Next</span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end review -->
         </div>
         <!--  footer -->
         <footer id="contact">
            <div class="footer">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="titlepage">
                           <h2>Contact Us</h2>
                        </div>
                     </div>
                     <div class="col-md-8">
                        <ul class="location_icon">
                           <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a> Locatins</li>
                           <li><a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a> +71 9087654321</li>
                           <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>demo@gmail.com</li>
                        </ul>
                     </div>
                     <div class="col-md-6">
                        <form id="request" class="main_form">
                           <div class="row">
                              <div class="col-md-12 ">
                                 <input class="contactus" placeholder="Full Name" type="type" name="Full Name"> 
                              </div>
                              <div class="col-md-12">
                                 <input class="contactus" placeholder="Email" type="type" name="Email"> 
                              </div>
                              <div class="col-md-12">
                                 <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">                          
                              </div>
                              <div class="col-md-12">
                                 <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message </textarea>
                              </div>
                              <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                 <button class="send_btn">Send</button>
                              </div>
                              <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                 <ul class="social_icon">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="col-md-6">
                        <div class="map">
                           <figure><img src="images/map.jpg" alt="#"/></figure>
                        </div>
                        <form class="bottom_form">
                           <h3>Newsletter</h3>
                           <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                           <button class="sub_btn">subscribe</button>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="copyright">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <p>Copyright 2019 All Right Reserved By <a href="https://html.design/"> Free  html Templates</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- end footer -->
      </div>
      <div class="overlay"></div>
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script type="text/javascript">
         $(document).ready(function() {
             $("#sidebar").mCustomScrollbar({
                 theme: "minimal"
             });
         
             $('#dismiss, .overlay').on('click', function() {
                 $('#sidebar').removeClass('active');
                 $('.overlay').removeClass('active');
             });
         
             $('#sidebarCollapse').on('click', function() {
                 $('#sidebar').addClass('active');
                 $('.overlay').addClass('active');
                 $('.collapse.in').toggleClass('in');
                 $('a[aria-expanded=true]').attr('aria-expanded', 'false');
             });
         });
      </script>
      <script>
         $(document).ready(function() {
             $(".fancybox").fancybox({
                 openEffect: "none",
                 closeEffect: "none"
             });
         
             $(".zoom").hover(function() {
         
                 $(this).addClass('transition');
             }, function() {
         
                 $(this).removeClass('transition');
             });
         });
      </script>
   </body>
</html>

