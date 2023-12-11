<?php
include_once 'Database/CreateDb.php';
?>
<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<head>
  <link rel="icon" type="icon" href="images/icon.ico">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Findsuri</title>
  <meta name="keyword" content="Findsuri, missing person, syrian">
  </meta>
  <script defer src="assets/lib/fontawesome-all.min.js"></script>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/index.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="styles/common.css">

  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <script defer src="otherjs.js"></script>
</head>

<body body data-spy="scroll" data-target=".site-nav" data-offset="50" class="d-flex flex-column min-vh-100" onload="onload()">


  <header id="page-hero" class="site-header">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="  background-color: #0065A1;">

      <div class="container-fluid">

        <a class="navbar-brand" href="#main-page">
          <img src="./images/logo.png " class="logo" alt="logo">
        </a>

        <div class="nav-item dropdown mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false"><span class="flag-icon flag-icon-us"> </span>
            Eng</a>
          <div class="dropdown-menu" aria-labelledby="dropdown">
            <a class="dropdown-item" href="#"> English</a>
            <a class="dropdown-item" href="indexAr.php"> العربية</a>

          </div>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
          <ul class="navbar-nav mr-auto w-100 justify-content-end me-3">
            <li class="nav-item  mx-2">
              <a class="nav-link nlink text-light" href="index.php">Home</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link nlink text-light" href="about.php">About Us</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link nlink text-light" href="donation.php">Donate</a>
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
            <li class="nav-item mx-2">
              <a class="nav-link nlink text-light" href="#contact_us">Contact Us</a>
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
             echo "<li class='nav-item active mx-2'>";
             echo "<a class='nav-link nlink text-light' href='signup.php'>Sign in<span class='sr-only'></span></a>";
             echo "</li>";
            }?>
            


          </ul>
        </div>

      


      </div>
    </nav>
  </header>

  <!---main page for home page--->
  <div id="main-page" class="homeVideo">
      
        <!-- Logo animation Map video which is using js to provide source-->
        <video id="logoBgVideo" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
          
        </video>
      
        <!--text for the logo animation-->
        <div class="videoText h-100">
          <div class="d-flex h-100 text-center align-items-center">
            
            <div class="w-100 text-white">
                
                <p data-aos="fade-up" 
                    data-aos-duration="1000"
                    data-aos-delay="7000"
                    data-aos-easing="ease-in-out"
                    data-aos-mirror="true"
                    data-aos-once="false"
                    data-aos-anchor-placement="bottom-bottom" 
                   class="titleText text-light">We help locate missing persons in Syria</p>
                <?php
                  if(!isset($_SESSION['User'])) {
                  echo "<a data-aos='fade-up' 
                        data-aos-duration='1000'
                        data-aos-delay='7500'
                        data-aos-easing='ease-in-out'
                        data-aos-mirror='true'
                        data-aos-once='false'
                        data-aos-anchor-placement='bottom-bottom'  
                        class='btn btnWhite smallText fw-bold greyColour indexTop mt-3 mb-4' href='signup.php'>Sign up</a>";
                }?>

                
                <!---social media icons--------->
                <div class="main-social h-25 w-25" style=" position: absolute; top: 55%; right: 30%; bottom: 0; left: 0;  display: flex;  align-items: center;  float:left; left:10vw;"> 
    
                      <div class="layout-social d-flex justify-content-left " >

                        <!--change font size dropdown menu-->
                        <div class="dropup">
                          
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
                        
                        
                        <a class="text-light text-decoration-none indexTop mx-2" target="_blank" 
                          href="#">
                          <i class="layout-icon fab fa-twitter"></i>
                        </a>
                        <a class="text-light text-decoration-none indexTop mx-2" target="_blank" 
                          href="#">
                          <i class="layout-icon fab fa-facebook "></i>
                        </a>
                        <a class="text-light text-decoration-none indexTop mx-2" target="_blank" 
                          href="#">
                          <i class="layout-icon fab fa-instagram "></i>
                        </a>
                        <a class="text-light text-decoration-none indexTop mx-2" target="_blank" 
                          href="https://www.youtube.com/channel/UCU_8X-GVh0wvWjvu_qKUGHg">
                          <i class="layout-icon fab fa-youtube "></i>
                        </a>
                        
                      </div>
                  
                </div>

                <p data-aos="fade-up" 
                    data-aos-duration="1000"
                    data-aos-delay="8000"
                    data-aos-easing="ease-in-out"
                    data-aos-mirror="true"
                    data-aos-once="false"
                    data-aos-anchor-placement="bottom-bottom" 
                  class="smallText fw-bold col-lg-mt-5 col-lg-pt-5 col-md-mt-4 col-md-pt-2 col-sm-mt-3 col-sm-pt-2">
                  Read more about Find Suri
                </p>

                <a data-aos="fade-up" 
                    data-aos-duration="1000"
                    data-aos-delay="8500"
                    data-aos-easing="ease-in-out"
                    data-aos-mirror="true"
                    data-aos-once="false"
                    data-aos-anchor-placement="bottom-bottom"
                     href="#page-about" class="h-25  justify-content-center col-lg-mb-5 ">
                  <img   
                      class="img-fluid h-60 indexTop vert-move" src="./images/nextPage.png">
                </a>
            </div>
          </div>
        </div>
  </div>
      
  <!--About Find Suri-->
  <article id="page-about" class="page-section">

  
    <section id="layout-nested" class="layout-nested container-fluid vertical-padding d-flex min-vh-100">
      <div class="row align-items-center justify-content-center align-middle">

        <div class="row col-sm-12 col-md-12 col-lg-12 mx-5 align-middle pt-5 mt-5">
          
          <!---left side title-->
          <div class="col-lg-4">
            <h1 
                data-aos="fade-down" 
                data-aos-duration="1000"
                data-aos-easing="ease-in-out"
                data-aos-mirror="true"
                data-aos-once="false"
                data-aos-anchor-placement="bottom-bottom"
             class="biggerTitle blurText greyColour pt-4 text-lg-start text-sm-center ms-5 ps-5 pt-5 mt-5">
              About<br /> Find Suri
            </h1>

            <div class="d-flex justify-content-center">
              <lottie-player  src="https://assets8.lottiefiles.com/packages/lf20_oxkv1x0b.json" 
                background="transparent" speed="0.5" style="width: 150px; height: 150px; " loop autoplay >
              </lottie-player>
            </div>
            <div class="d-flex justify-content-end">
              <lottie-player  class="anim2" src="https://assets8.lottiefiles.com/packages/lf20_oxkv1x0b.json" 
                background="transparent" speed="0.5" style="width: 200px; height: 200px; " loop autoplay >
              </lottie-player>
            </div>
          </div>

          <!--Middle text and animation-->
          <div class="col-lg-3 text-lg-start text-sm-center">
            <p data-aos="fade-down" 
                data-aos-duration="1500"
                data-aos-easing="ease-in-out"
                data-aos-mirror="true"
                data-aos-once="false" 
                data-aos-anchor-placement="bottom-bottom"
                class="titleText blueColour pt-4 mt-5 mx-3">
              Find Suri is a non-profit website designed to help Syrian families
            </p>

            
            <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_oxkv1x0b.json" 
                background="transparent" speed="1" style="width: 160px; height: 160px;" loop autoplay
                class="mt-5">
            </lottie-player>
          </div>

          <!--right side texts-->
          <div class="col-lg-5 text-lg-start text-sm-center">

            <p class="mediumText greyColour pt-4 mt-5 mx-3">Find Suri is a non-profit website designed to help Syrian families search for
              people that went missing due to the war crisis that took place in Syria for over ten years. </br>
              The website is not run by any political or governmental party. Full information of missing people are
              published on the website. Along with photos and contact information once it gets approved. It aims to
              speed the process of finding people, expand the reach of information on individuals and assist families
              with trusting a reliable source to share sensitive information.</p>

            <a href="about.php" class="text-decoration-none mx-3">
              <button type="button" class="btn btnBlue text-light btn-lg mt-3 fw-bold px-5 mb-1">
                  Read
              </button>
            </a>
          </div>          
         
            <!--bottom next page-->
            <div class="col-lg-12 align-items-center justify-content-center">
              <p class="smallText text-center text-light fw-bold ">
                Learn more about our program Suri
              </p>
              <a href="#page-program" class="d-flex justify-content-center pt-2 mb-5">
                <img class="img-fluid vert-move" src="./images/nextPage.png">
              </a>
            </div>

        </div>
        
      </div>
    </section>
  </article>

  <!---Our program-->
  <article id="page-program" class="page-section">

    <section class="layout-nestedprogram container-fluid vertical-padding d-flex min-vh-100">
        
      <div class="row align-items-center justify-content-center">

          <div class="row col-sm-12 col-md-12 col-lg-12 text-center pt-5 mb-0">
            <div class="col-lg-6 col-md-11 text-lg-right my-4 col-lg-mx-5 col-lg-ms-5 col-sm-ms-0 col-sm-mx-0 px-5">
              <h1 data-aos="fade-right" 
                  data-aos-duration="1000"
                  data-aos-easing="ease-in-out"
                  data-aos-mirror="true"
                  data-aos-once="false"
                class="pt-4 text-lg-start text-sm-center 
                  col-lg-ms-5 col-md-ms-5 col-sm-ms-0 my-5 px-3 blurText greyColour biggerTitle">
                Our Programs
              </h1>

              <div class="ratio ratio-16x9 mt-5">
                <video width="700" height="350" controls class="shadow-sm">
                  <source src="./images/ENG-YouTubeVideo.mp4" type="video/mp4">
                </video>
              </div>
            </div>

            <div class="col-lg-5 col-md-11 text-lg-right my-4 mb-0 col-lg-ms-3 pt-5 text-lg-start text-sm-center">
              <p data-aos="fade-right" 
                data-aos-duration="1000"
                data-aos-easing="ease-in-out"
                data-aos-mirror="true"
                data-aos-once="false" 
                class="titleText blueColour  pt-5">Tutorial video explaining how our program works</p>

              <p class="mediumText pt-4 greyColour ">At Find Suri non-profit organization stage, the user can indicate how much or
                how little they are prepared to allow the information to be shared. The more widely information is
                shared, the more useful it is likely to be in helping to locate and identify a missing person, but we
                maintain a policy of absolute data security, so if you do not want your information to be shared, it
                won’t be shared.</p>
              <p class="mediumText py-5 greyColour ">Watch tutorial on YouTube <br />
                <a href="https://youtu.be/WApxNqHxlZ4" target="_blank" class="text-decoration-none">
                  <button type="button" class="btn btnBlue text-light btn-lg mt-3 fw-bold px-4 ">
                      YouTube
                  </button>
                </a>
              </p>
            </div>

            <div class="col-lg-12 align-items-center justify-content-center">
              <p class="text-center blueColour fw-bold pb-2 mt-2 smallText">Contact us if you have questions</p>
              <a href="#contact_us" class="d-flex justify-content-center mb-5">
                <img class="img-fluid vert-move" src="./images/next-blue.png">
              </a>
            </div>

          </div>
          
      </div>

      
    </section>

  </article>
  
  <!--Contact us-->
  <article id="contact_us" class="page-section">

    <section class="layout-nested container-fluid vertical-padding d-flex min-vh-100">
      <div class="row align-items-center justify-content-center">

        <div class="row col-sm-11 col-md-11 col-lg-11  text-lg-start text-sm-center ms-5 pt-5">
          <!--title-->
          <div class="col-lg-6 text-lg-right my-4 ms-5">
            <h1 data-aos="fade-left" 
                  data-aos-duration="1000"
                  data-aos-easing="ease-in-out"
                  data-aos-mirror="true"
                  data-aos-once="false"
              class="biggerTitle blurText greyColour pt-4">Contact Us</h1>

          </div>
          <div class="col-lg-6"></div>

          <!--content-->
          <div class="row col-sm-12 col-md-12 col-lg-12 ">
            <!--contact form-->
            <div class="formcont col-lg-7 col-sm-12 col-md-12 my-4 col-lg-ms-5 col-sm-ms-0">
              <div class="container">
                <form id="contact_us" action="Database/addons.php" method="post" role="form">
                    <div class="row mb-3">
                      <div class="form-group col">
                        <label for="con_email" class="greyColour regtext mt-3 mb-2"><b>Email</b></label>
                        <input type="email" id="con_email" name="con_email" class="form-control form-control-lg" 
                          style="background-color: #9EC6E9;"
                          placeholder="ex : hello@example.com...">
                      </div>
                      <div class="form-group col">
                        <label for="con_fullname" class="greyColour regtext mt-3 mb-2"><b>Full Name</b></label>
                        <input type="text" id="con_fullname" name="con_fullname" class="form-control form-control-lg" 
                          style="background-color: #9EC6E9;" placeholder="Full name">
                      </div>
                    </div>
                    <div class="form-group my-4">
                      <label for="con_message" class="greyColour regtext mb-2"><b>Message </b></label>
                      <textarea type="text" id="con_message" name="con_message" 
                        class="form-control form-control-lg" style="background-color: #9EC6E9;" 
                        placeholder="Write your message here.." rows="4"></textarea>
                    </div>
                    <div class="form-group align-items-center text-center">
                      <div class="col-sm-12">
                        <button type="submit" name="contact_us" class="text-light btn btnBlue btn-lg mt-3 fw-bold px-5">
                          Send
                        </button>
                      </div>
                    </div>
                  </form>
              </div>
            </div>

            <!--text-->
            <div class="col-lg-4 col-sm-12 col-md-12 pt-3 px-5 col-lg-mx-5 col-sm-mx-0 text-lg-start text-sm-center">
              <p data-aos="fade-left" 
                data-aos-duration="1500"
                data-aos-easing="ease-in-out"
                data-aos-mirror="true"
                data-aos-once="false" 
                data-aos-anchor-placement="bottom-bottom" 
                class="titleText blueColour  ">
                Please get in touch and our expert support team will answer all your questions.
              </p>

              <div class="row">

                <div class="col-lg-3 mt-5">
                  <div class="align-bottom mt-5">
                    <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_oxkv1x0b.json" 
                      background="transparent" speed="0.5" style="width: 90px; height: 90px; " loop autoplay >
                    </lottie-player>
                  </div>
                </div>
                <div class="col-lg-4 mt-5">
                  <lottie-player  src="https://assets8.lottiefiles.com/packages/lf20_oxkv1x0b.json" 
                    background="transparent" speed="0.5" style="width: 120px; height: 120px; " loop autoplay >
                  </lottie-player>
                </div>
                <div class="col-lg-5 ps-1">
                  <lottie-player  class="anim2" src="https://assets8.lottiefiles.com/packages/lf20_oxkv1x0b.json" 
                    background="transparent" speed="0.5" style="width: 150px; height: 150px; " loop autoplay >
                  </lottie-player>
                </div>

            </div>
          </div>
        </div>
        


      </div>
    </section>

  </article>

  <!--footer-->
  <footer class="site-footer text-light">
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
            <a href="index.php"  class="text-decoration-none">
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
  
      <!--Cursor shape and animation-->
      <div class="cursor"></div>
      <script>
      const cursor = document.querySelector('.cursor');
      document.addEventListener('mousemove', e => {
      cursor.setAttribute("style", "top: "+(e.pageY - 10)+"px; left: "+(e.pageX - 10)+"px;")})
      </script>
  </footer>


  <script src="assets/lib/jquery.min.js"></script>
  <script src="assets/lib/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>

</html>