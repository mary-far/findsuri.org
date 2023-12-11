<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<head>
  <link rel="icon" type="icon" href="images/icon.ico">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Findsuri Donation</title>
  <meta name="keyword" content="Findsuri, missing person, syrian">
  </meta>
  <script defer src="assets/lib/fontawesome-all.min.js"></script>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/donation.css">
  <link rel="stylesheet" href="styles/common.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>


<body body data-spy="scroll" data-target=".site-nav" data-offset="50" class="d-flex flex-column min-vh-100">


  <!--header and nav-->
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
            <a class="dropdown-item" href="donationAr.php"> العربية</a>

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


  <!--content for donation-->
  <div class="container-fluid topMargin px-3">
    <div class="row g-3">
      
        <!--left side title and desciption-->
        <div class="col-lg-5 col-md-11 col-sm-11 donationDescription">
          <!--make left side to be fixed-->
          <div class="fixed">
              <div class="row p-5 my-2 text-lg-right">
                <h1 data-aos="zoom-out-up" 
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out"
                        data-aos-mirror="true"
                        data-aos-once="true"
                    class="greyColour blurText biggerTitle">Donate</h1>
              </div>

              <div class="row p-3 my-2 ">
                <h2 data-aos="fade-up" 
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out"
                        data-aos-mirror="true"
                        data-aos-once="true"
                    class="orangeColour titleText">Donate today. Thank you</h2>
                <p class="text-white regtext">We now accept crypto currency donations from Mobile users.</p>
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
                      <i class="layout-icon fab fa-facebook "></i>
                    </a>
                    <a class="text-light text-decoration-none mx-2" target="_blank" href="#">
                      <i class="layout-icon fab fa-instagram "></i>
                    </a>
                    

                    <a class="text-light text-decoration-none mx-2" target="_blank" href="https://www.youtube.com/channel/UCU_8X-GVh0wvWjvu_qKUGHg">
                      <i class="layout-icon fab fa-youtube "></i>
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
      
  
      
        <!--right side donation form-->
        <div class="col-lg-6 col-md-12 col-sm-12 donationForm">
    
          <div class="p-5 my-2 bg-white rounded-3">
          <form id="donation_form" action="Database/addons.php" method="post" role="form" enctype="multipart/form-data">

              <div class="form-group">
                <label for="amount" class="orangeColour regtext">Select your amount</label>
              </div>

              <div class="border border-2 p-3 my-2 borderColour">
                <div class="form-group text-center">
                
                    <label for="25dollar" class="col-lg-2 col-md-4 col-sm-3 col-10 btn btnBlue text-light px-1 mx-2 my-2 mediumText">$25</label>
                    <input type="radio" id="25dollar" name="paychose" value="$25" hidden>
                    <label for="50dollar" class="col-lg-2 col-md-4 col-sm-3 col-10 btn btnBlue text-light px-1 mx-2 my-2 mediumText">$50</label>
                    <input type="radio" id="50dollar" name="paychose" value="$50" hidden>
                    <label for="75dollar" class="col-lg-2 col-md-4 col-sm-3 col-10 btn btnBlue text-light px-1 mx-2 my-2 mediumText">$75</label>
                    <input type="radio" id="75dollar" name="paychose" value="$75" hidden>
                    <label for="Other" class="col-lg-2 col-md-4 col-sm-3 col-10 btn btnBlue text-light px-1 mx-2 my-2 mediumText">Other</label>
                    <input type="radio" id="Other" name="paychose"  value="Other" hidden>
                </div>
    
                <div class="form-group form-check pt-3">
                  <label class="form-check-label">
                    <input class="form-check-input smallText greyColour" type="checkbox" name="monthly"> Make this a monthly
                  </label>
                </div>
              </div>

              <div class="form-group">
                <label for="payment" class="orangeColour regtext pt-4">Payment details</label>
              </div>

              <div class="border border-2 p-3 my-2 borderColour">

                <div class="form-group">
                  <label for="paymentType" class="greyColour mediumText">Payment type</label>
                </div>

                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" name="paymentType" id="creditCard" value ="Credit Card" >
                  <label class="form-check-label greyColour smallText" for="creditCard">Credit Card</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" name="paymentType" id="eCheck" value ="eCheck">
                  <label class="form-check-label greyColour smallText" for="eCheck">eCheck</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" class="form-check-input" name="paymentType" id="PayPal" value ="PayPal">
                  <label class="form-check-label greyColour smallText" for="PayPal">PayPal</label>
                </div>

                <div class="form-group pt-5">
                  <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-6 inputBlueBg">
                      <label for="cardNumber" class="greyColour mediumText">Card Number*</label> 
                      <input type="text" class="form-control mediumText" id="cardNumber" name="cardNumber">
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-6 inputBlueBg">
                      <label for="securityCode" class="greyColour mediumText">Security Code*</label> 
                      <input type="text" class="form-control mediumText" id="securityCode" name="securityCode">
                    </div>
                  </div>

                  <div class="row mt-2">
                    <div class="col-lg-6 col-md-6 col-sm-4 inputBlueBg">
                      <p class="mb-0 greyColour mediumText fw-bold">Expriation Month*</p>
                      <select id="monthselect" name="monthselect" class="form-select px-3 mediumText">
                        <option value="none" selected></option>
                        <option value="jan">January</option>
                        <option value="feb">February</option>
                        <option value="mar">March</option>
                        <option value="apr">April</option>
                        <option value="may">May</option>
                        <option value="jun">June</option>
                        <option value="jul">July</option>
                        <option value="aug">August</option>
                        <option value="sep">September</option>
                        <option value="oct">October</option>
                        <option value="nov">November</option>
                        <option value="dem">December</option>
                      </select>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-4 inputBlueBg">
                      <p class="mb-0 greyColour mediumText fw-bold">Expriation Year*</p>
                      <select id="yearselect" name="yearselect" class="form-select px-3 mediumText">
                        <option value="none" selected></option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                      </select>
                    </div>
                  </div>

                  <div class="row mt-2">
                    <div class="col-lg-7 col-md-7 col-sm-6 inputBlueBg">
                      <label for="NameOnCard" class="greyColour mediumText">Name on Card*</label> 
                      <input type="text" class="form-control mediumText" id="NameOnCard" name="NameOnCard">
                    </div>
                  </div>

                  <div class="text-center mt-5">
                    <button type="submit" id="donation_form" name="donation_form" class="btn btnBlue text-white px-4 regtext">Donate</button>
                  </div>
                  
                </div>
    
              </div>

          
    
            </form>
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
            <a href="index.php"  class="text-decoration-none">
              <p class="text-light text-inline">Home</p>
            </a>

          </div>
          <div class="col-lg-2">
              <a href="about.php"  class="text-decoration-none">
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
      <script src="otherjs.js"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>

</html>