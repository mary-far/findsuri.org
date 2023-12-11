<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<head>
  <link rel="icon" type="icon" href="images/icon.ico">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Findsuri About</title>
  <meta name="keyword" content="Findsuri, missing person, syrian">
  </meta>
  <script defer src="assets/lib/fontawesome-all.min.js"></script>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/signup.css">
  <link rel="stylesheet" href="styles/common.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <script defer src="otherjs.js"></script>
</head>

<body body data-spy="scroll" data-target=".site-nav" data-offset="50" class="d-flex flex-column min-vh-100" onload="onload()">

  <!--header nav-->
  <header id="page-hero" class="site-header">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="  background-color: #0065A1;">

      <div class="container-fluid">

        <a class="navbar-brand" href="index.php">
          <img src="images/logo.png " class="logo" alt="logo">
        </a>

        <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false"><span class="flag-icon flag-icon-us"> </span>
            Eng</a>
          <div class="dropdown-menu" aria-labelledby="dropdown">
            <a class="dropdown-item" href="#"> English</a>
            <a class="dropdown-item" href="aboutAr.php"> العربية</a>

          </div>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
          <ul class="navbar-nav mr-auto w-100 justify-content-end">
            <li class="nav-item nlink mx-2">
              <a class="nav-link text-light" href="index.php">Home</a>
            </li>
            <li class="nav-item nlink mx-2">
              <a class="nav-link text-light" href="about.php">About Us</a>
            </li>
            <li class="nav-item nlink mx-2">
              <a class="nav-link text-light" href="donation.php">Donate</a>
            </li>
            
            
              <?php 
              session_start();
              if(isset($_SESSION['User'])) {
              echo "<li class='nav-item dropdown mx-2'>";
              echo " <a class='nav-link text-light dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown'
              role='button' aria-haspopup='true' aria-expanded='false'> Missing Center </a>";
              echo " <ul class='dropdown-menu text-center' aria-labelledby='navbarDropdownMenuLink'>";
              echo "<li><a class='dropdown-item' href='report-missing-person.php'><b>Report Missing Person</b></a></li>";
              echo "<li><a class='dropdown-item' href='missing-persons-inquiry.php'><b>Missing Person inquiry</b></a></li>";
              echo "</ul>";
              }?>
                

              
            </li>
            <li class="nav-item nlink mx-2">
              <a class="nav-link text-light" href="index.php#contact_us">Contact Us</a>
            </li>
            <?php 
            if(isset($_SESSION['User'])) {

            echo "<li class='nav-item dropdown mx-2'>";
            echo " <a class='nav-link text-light dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown'
              role='button' aria-haspopup='true' aria-expanded='false'> " . $_SESSION['User'] . " </a>";
            echo " <ul class='dropdown-menu text-center' style='right: 0; left: auto;' aria-labelledby='navbarDropdownMenuLink'>";
            if($_SESSION['User_Type'] =="Admin"){
              echo "<li><a class='dropdown-item' href='Admindashboard/admin-verify-posts.php'><b>Admin Dashboard</b></a></li>";
            }else{
              echo "<li><a class='dropdown-item' href='user-dashboard.php'><b>User Dashboard</b></a></li>";
            } 
            echo "<li><a class='dropdown-item' href='Database/Logout.php'><b>Logout</b></a></li>";
            echo "</ul>";
            }?>
            <?php 
            if(!isset($_SESSION['User'])) {
            echo "<li class='nav-item active nlink mx-2'>";
            echo "<a class='nav-link text-light' href='signup.php'>Sign in<span class='sr-only'></span></a>";
            echo "</li>";
            }?>
            


          </ul>
        </div>

      


      </div>
    </nav>
  </header>

  <!--content for about-->
  <div class="container-fluid topMargin px-3">

    <div class="row g-3">

      <!--left side title and descriptions-->
      <div class="col-lg-5 col-md-11 col-sm-11 donationDescription">
        <div class="fixed">
          <div class="row p-5 pb-2 my-3 text-lg-right">
            <h1 data-aos="fade-down-right" 
                  data-aos-duration="1000"
                  data-aos-easing="ease-in-out"
                  data-aos-mirror="true"
                  data-aos-once="true"
                  data-aos-anchor-placement="top-center" 
               class="greyColour biggerTitle blurText">About <br> Find Suri</h1>
          </div>

          <div class="row p-3 my-2">
            <p class="text-white regtext">FindSuri is a non-profit website designed to help Syrian families
              search for what people that went missing  due to the war crisis that took place in Syria 
              for over ten years.
            </p>
          </div>
          <div class="row p-3 my-2 pt-5 text-lg-right">
                <div class="d-flex align-items-center">
                  <section class="layout-social d-flex justify-content-left">
                    <!--change font size dropdown menu-->
                    <div class="dropup d-flex">
                          
                      <a class="text-light text-decoration-none indexTop mx-2" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="layout-icon fas fa-universal-access"></i>
                      </a>

                      <ul class="dropdown-menu" >
                            <div class="row">
                              <li class="col-4">
                                <a class="text-decoration-none indexTop dropdown-item float-left" onclick="return minusfont()">
                                  <i class=" fas fa-minus-circle"></i>
                                </a>
                              </li>
                              <li class="col-4">
                                <a class="text-decoration-none indexTop dropdown-item px-1"  onclick="return regfont()">
                                  <i class="fas fa-font"></i>
                                </a>
                              </li>

                              <li class="col-4">
                                <a class="text-decoration-none indexTop dropdown-item ps-1" onclick="return plusfont()">
                                  <i class=" fas fa-plus-circle"></i>
                                </a>
                              </li>
                            </div>
                      </ul>

                    </div>

                    <a class="text-light text-decoration-none mx-2" target="_blank" href="#">
                      <i class="layout-icon fab fa-twitter"></i>
                    </a>
                    <a class="text-light text-decoration-none mx-2" target="_blank" href="#">
                      <i class="layout-icon fab fa-facebook"></i>
                    </a>
                    <a class="text-light text-decoration-none mx-2" target="_blank" href="#">
                      <i class="layout-icon fab fa-instagram"></i>
                    </a>
                    

                    <a class="text-light text-decoration-none mx-2" target="_blank" href="https://www.youtube.com/channel/UCU_8X-GVh0wvWjvu_qKUGHg">
                      <i class="layout-icon fab fa-youtube"></i>
                    </a>

                  </section>
                </div>
                
          </div>
          
          <div class="row">
            <div class="col-lg-3 mt-5">
              <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_oxkv1x0b.json" 
                  background="transparent" speed="0.5" style="width: 120px; height: 120px; " loop autoplay >
                </lottie-player>
            </div>
            <div class="col-lg-4 mt-5">
              <div class="align-bottom mt-5 pt-2">
                <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_oxkv1x0b.json" 
                  background="transparent" speed="0.5" style="width: 200px; height: 200px; " loop autoplay >
                </lottie-player>
              </div>
            </div>
            <div class="col-lg-5 ps-1">
              <lottie-player  class="anim2" src="https://assets8.lottiefiles.com/packages/lf20_oxkv1x0b.json" 
                background="transparent" speed="0.5" style="width: 150px; height: 150px; " loop autoplay >
              </lottie-player>
            </div>
          </div>

          

        </div>
        

      </div>
  
      <!--right side about section-->
      <div class="col-lg-6 col-md-12 col-sm-12 donationForm">
  
        <!--about section-->
        <div id="Signupdiv">
          <div class="p-5 my-2 bg-white rounded-3">
            
            <div class="row ms-2">
              <div class="col-md-8">  
                <p class="regtext"> Find Suri is a non profit website designed to help 
                Syrian families search for people that went missing due to the war
                crisis that took place in Syria for over ten years. The website is not run by
                any political party or goverment party. Full information of missing people are
                published on the website. Along with photos and contact information once it
                gets approved. It aims to speed the process of finding people, expand the reach
                of information on individuals and assist families with trusting a reliable source to
                share sensitive information. </p>
              </div>
              <div data-aos="fade-up" 
                  data-aos-duration="1000"
                  data-aos-easing="ease-in-out"
                  data-aos-mirror="true"
                  data-aos-once="false"  class="col-md-4">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_n2m0isqh.json"  
                background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay class="layout-image img-fluid">
                </lottie-player>
              </div>
            </div>

            <div class="row ms-2 my-3">
              <p class="mediumText fw-bold"> Find Suri website allows users to enter and retrieve information 
                on individual missing Syrian cases. and accepts basic data about the missing person, 
                including data about the closest living relative(s), and any additional details about 
                the circumstance of disappearance. At Find Suri non-profit organization stage, 
                the user can indicate how much or how little they are prepared to allow the information 
                to be shared. The more widely information is shared, the more useful it is likely to be 
                in helping to locate and identify a missing person, but we maintain a policy of absolute 
                data security, so if you do not want your information to be shared, it won’t be shared. 
                The user decides on the extent to which data may be shared before submitting a Missing 
                Person Data Form. Personal data is used only for the purposes for which it was provided. 
                In addition, Find Suri website enables users to track the status of a missing person through 
                the Missing Persons Inquiry option simply by entering the name of the missing person.

              </p>
            </div>



            <div class="border border-3 p-3 my-5 borderColour">
              <h3 class="blueColour fw-bold titleText pt-4 ps-3">Our Team:</h3>
              <div class="row text-center my-3 mb-4">

                <div class="col-md-4 p-2 my-3">
                  <img data-aos="zoom-out-up" 
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out"
                        data-aos-mirror="true"
                        data-aos-once="false" 
                        class="layout-image img-fluid" src="images/dima.png" alt="founder image">
                  <h4 class="regtext fw-bold my-4">Founder</h4>
                  <p class="mediumText my-2 pt-3">Dima Aldera</p> 
                  <p class="smallText my-2">findsuri@findsuri.com</p> 
                </div>
                <div class="col-md-4 p-2 my-3">
                  <img data-aos="zoom-out-up" 
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out"
                        data-aos-mirror="true"
                        data-aos-once="false"
                      class="layout-image img-fluid" src="images/raghda.png" alt="developer image"> 
                  <h4 class="regtext fw-bold my-4">Web developer</h4>
                  <p class="mediumText my-2 pt-3">Raghda Dahan</p> 
                  <p class="smallText my-2">raghda.dahan@findsuri.com</p> 
                </div>
                <div class="col-md-4 p-2 my-3">
                  <img data-aos="zoom-out-up" 
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out"
                        data-aos-mirror="true"
                        data-aos-once="false"
                       class="layout-image img-fluid" src="images/palak.png" alt="officer image"> 
                  <h4 class="regtext fw-bold my-4">Web developer</h4>
                  <p class="mediumText my-2 pt-3">Palak Soni</p> 
                  <p class="smallText my-2">palak.soni@findsuri.com</p> 
                </div>
              </div>
              <div class="row text-center my-3 mb-4">
                
                <div class="col-md-6 p-2 my-3">
                  <img data-aos="zoom-out-up" 
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out"
                        data-aos-mirror="true"
                        data-aos-once="false"
                      class="layout-image img-fluid" src="images/alisha.png" alt="developer image"> 
                  <h4 class="regtext fw-bold my-4">Web developer</h4>
                  <p class="mediumText my-2 pt-3">Alisha Huang</p> 
                  <p class="smallText my-2">alisha.huang@findsuri.com</p> 
                </div>
                <div class="col-md-6 p-2 my-3">
                  <img data-aos="zoom-out-up" 
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out"
                        data-aos-mirror="true"
                        data-aos-once="false"
                       class="layout-image img-fluid" src="images/maryem.png" alt="officer image"> 
                  <h4 class="regtext fw-bold my-4">Web developer</h4>
                  <p class="mediumText my-2 pt-3">Maryem Farooqi</p> 
                  <p class="smallText my-2">maryem.farooqi@findsuri.com</p> 
                </div>
              </div>                                
            </div>

            <div class="row text-lg-left mt-5">

              <h3 data-aos="fade-up" 
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out"
                        data-aos-mirror="true"
                        data-aos-once="false" 
                class="blueColour fw-bold titleText pt-5 ms-2">To learn more about our program</h3>
              <a href="https://youtu.be/WApxNqHxlZ4" target="_blank" class="text-decoration-none"> 
                <h4 class="regtext fw-bold ms-2 greyColour"> Subscribe to YouTube channel</h4>
              </a>

              <div class="ratio ratio-16x9 mt-5">
                <video width="700" height="350" controls class="shadow-sm">
                  <source src="./images/ENG-YouTubeVideo.mp4" type="video/mp4">
                </video>
              </div>
              
              <h3 class="blueColour regtext my-5 pt-5 lh-base">If you have any questions 
                <a href="index.php#contact_us" class="orangeColour">click here</a> <br>
                or email Find Suri <br> at Support@findsuri.com</h3>
             

            </div>
  
          </div>
  
        </div>
        

      </div>

    </div>
  </div>

  <!--footer-->
  <footer class="site-footer text-light mt-auto">
    <div class="row align-items-center justify-content-center col-lg-12">

      <section class="layout-social col-sm-9 col-md-10 col-lg-12 text-center ">
        <div class="row text-start mx-5 mt-4">

          <div class="col-lg-3 text-lg-start text-sm-center my-3">
            <img src="./images/logo.png" class="img-fluid w-50 " alt="main logo" /><br />
            <p class="smallText text-light ps-1">Find Suri is a non-profit website designed to help Syrian families search for
              people that went missing due to the war crisis that took place in Syria for over ten years. </p>
          </div>

          <div class="col-lg-3  text-lg-start text-sm-center my-3 px-5">
            <h3 class="orangeColour pt-2 px-5">Contact Us</h3>
            <p class="smallText text-light px-5">972 Strasburg Road,<br />
              Kitchener, ON N2E 2K4<br />
              support@findsuri.com
            </p>
          </div>
          <div class="col-lg-3 text-lg-start text-sm-center my-3">
            <h3 class="orangeColour pt-2 px-5">Keep in Touch</h4>
            <p class="smallText px-5">Follow us: @findsuri</p>
            <section class="layout-social py-2 px-5">
              <a class="text-light py-2 text-decoration-none" target="_blank" href="#">
                <i class="layout-icon fab fa-twitter"></i>
              </a>
              <a class="text-light px-2 text-decoration-none" target="_blank" href="#">
                <i class="layout-icon fab fa-facebook"></i>
              </a>
              <a class="text-light px-2 text-decoration-none" target="_blank" href="#">
                <i class="layout-icon fab fa-instagram"></i>
              </a>
              <a class="text-light px-2 text-decoration-none" target="_blank" href="https://www.youtube.com/channel/UCU_8X-GVh0wvWjvu_qKUGHg">
                <i class="layout-icon fab fa-youtube"></i>
              </a>

            </section>
          </div>
          <div class="col-lg-3 text-lg-start text-sm-center my-3">
            <h3 class="orangeColour pt-2">Our Sponsors</h3>
            <div class="container" style="background-color: #0065A1;">
              <div class="row">
                <div class="col pt-3">
                  <img src="./images/ontario.svg" class="w-75 img-fluid" alt="ontario" />
                </div>
                <div class="col pt-1">
                  <img src="./images/canada.svg" class="w-75 img-fluid" alt="ontario" />
                </div>
              </div>
      </section>
      <section class="layout-social container-fluid vertical-padding col-sm-5 col-md-5 col-lg-11">
        <div class="row text-start smallText">

          <div class="col-lg-2">
            <a href="index.php" class="text-decoration-none">
              <p class="text-light text-inline">Home</p>
            </a>

          </div>
          <div class="col-lg-2">
              <a href="about.php" class="text-decoration-none">
                <p class="text-light text-inline">About Us</p>
              </a>
          </div>
          
          <div class="col-lg-2">
            <p class="text-light text-inline">Privacy Policy</p>
          </div>
          <div class="col-lg-2">
            <p class="text-light text-inline">Help</p>
          </div>
          <div class="col-lg-2">
          

          </div>

          <div class="col-lg-2 ps-4">
            <p class="text-light text-inline">Copyright&copy;FindSuri</p>
          </div>

        </div>
      </section>

    </div>
    <div class="cursor"></div>
  <script>
  const cursor = document.querySelector('.cursor');
  document.addEventListener('mousemove', e => {
  cursor.setAttribute("style", "top: "+(e.pageY - 10)+"px; left: "+(e.pageX - 10)+"px;")})
  </script>


  </footer>


  
   



      <script src="assets/lib/jquery.min.js"></script>

      <script src="assets/lib/bootstrap.bundle.min.js"></script>
      <script src="assets/lib/popper.js"></script>
      <script src="assets/lib/login.js"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>

</body>

</html>