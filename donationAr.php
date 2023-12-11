<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<head>
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
  <script defer src="otherjs.js"></script>

</head>

<body body data-spy="scroll" data-target=".site-nav" data-offset="50" class="d-flex flex-column min-vh-100">


  <!--header and nav-->
  <header id="page-hero" class="site-header">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="  background-color: #0065A1;">

      <div class="container-fluid">

        <a class="navbar-brand" href="indexAr.php">
          <img src="images/logo.png " class="logo" alt="logo">
        </a>

        <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false"><span class="flag-icon flag-icon-us"> </span>
            العربية</a>
          <div class="dropdown-menu" aria-labelledby="dropdown">
            <a class="dropdown-item" href="donation.php"> English</a>
            <a class="dropdown-item" href="#"> العربية</a>

          </div>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
          <ul class="navbar-nav mr-auto w-100 justify-content-end">
          <li class="nav-item nlink mx-2">
              <a class="nav-link text-light" href="indexAr.php">الرئيسية</a>
            </li>
            <li class="nav-item nlink mx-2">
              <a class="nav-link text-light" href="aboutAr.php">فكرة عامة</a>
            </li>
            <li class="nav-item nlink mx-2">
              <a class="nav-link text-light" href="donationAr.php">تبرع</a>
            </li>
            
            
              <?php 
               session_start();
               if(isset($_SESSION['User'])) {
               echo "<li class='nav-item dropdown mx-2'>";
               echo " <a class='nav-link text-light dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown'
               role='button' aria-haspopup='true' aria-expanded='false'> مركز المفقودين </a>";
               echo " <ul class='dropdown-menu text-center' aria-labelledby='navbarDropdownMenuLink'>";
               echo "<li><a class='dropdown-item' href='report-missing-personAr.php'><b>تسجيل شخص مفقود</b></a></li>";
               echo "<li><a class='dropdown-item' href='missing-persons-inquiryAr.php'><b>البحث عن مفقود</b></a></li>";
               echo "</ul>";
               }?>
                

              
            </li>
            <li class="nav-item nlink mx-2">
              <a class="nav-link text-light" href="indexAr.php#contact_us">تواصل معنا</a>
            </li>
            <?php 
            if(isset($_SESSION['User'])) {

             echo "<li class='nav-item dropdown mx-2'>";
             echo " <a class='nav-link text-light dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown'
              role='button' aria-haspopup='true' aria-expanded='false'> " . $_SESSION['User'] . " </a>";
             echo " <ul class='dropdown-menu text-center' style='right: 0; left: auto;' aria-labelledby='navbarDropdownMenuLink'>";
             if($_SESSION['User_Type'] =="Admin"){
              echo "<li><a class='dropdown-item' href='Admindashboard/admin-verify-posts.php'><b>لوحة تحكم مسؤول</b></a></li>";
             }else{
              echo "<li><a class='dropdown-item' href='user-dashboard.php'><b>المستخدم</b></a></li>";
             } 
             echo "<li><a class='dropdown-item' href='Database/Logout.php'><b>تسجيل خروج</b></a></li>";
             echo "</ul>";
            }?>
            <?php 
            if(!isset($_SESSION['User'])) {
             echo "<li class='nav-item active nlink mx-2'>";
             echo "<a class='nav-link text-light' href='signupAr.php'>دخول<span class='sr-only'></span></a>";
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
      
        <!--right side donation form-->
        <div class="col-lg-6 col-md-12 col-sm-12 donationForm ms-5 ">
    
          <div class="p-5 my-2 bg-white rounded-3">
          <form id="donation_form" action="Database/addons.php?lang=Ar" method="post" role="form" enctype="multipart/form-data">

              <div class="form-group text-end">
                <label for="amount" class="orangeColour regtext ">اختر الكمية المطلوبة</label>
              </div>

              <div class="border border-2 p-3 my-2 borderColour">
                <div class="form-group text-center">                    
                    <label for="Other" class="col-lg-2 col-md-4 col-sm-3 col-10 btn btnBlue text-light px-1 mx-2 my-2 mediumText">اخرى</label>
                    <input type="radio" id="Other" name="paychose"  value="Other" hidden>
                    <label for="75dollar" class="col-lg-2 col-md-4 col-sm-3 col-10 btn btnBlue text-light px-1 mx-2 my-2 mediumText">$75</label>
                    <input type="radio" id="75dollar" name="paychose" value="$75" hidden>
                    <label for="50dollar" class="col-lg-2 col-md-4 col-sm-3 col-10 btn btnBlue text-light px-1 mx-2 my-2 mediumText">$50</label>
                    <input type="radio" id="50dollar" name="paychose" value="$50" hidden>
                    <label for="25dollar" class="col-lg-2 col-md-4 col-sm-3 col-10 btn btnBlue text-light px-1 mx-2 my-2 mediumText">$25</label>
                    <input type="radio" id="25dollar" name="paychose" value="$25" hidden>
                </div>
    
                <div class="form-group form-check pt-3 text-end">
                  <label class="form-check-label">
                    <input class="form-check-input smallText greyColour ms-3" style="float: right;" type="checkbox" name="monthly">
                     اشتراك شهري
                  </label>
                </div>
              </div>

              <div class="form-group text-end">
                <label for="payment" class="orangeColour regtext pt-4">معلومات الدفع</label>
              </div>

              <div class="border border-2 p-3 my-2 borderColour">

                <div class="form-group text-end me-3">
                  <label for="paymentType" class="greyColour mediumText">طريقة الدفع</label>
                </div>

                <div class="text-end mt-2">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label greyColour smallText" for="PayPal">PayPal</label>
                        <input type="radio" class="form-check-input ms-2" style="float: right;" name="paymentType" id="PayPal" value ="PayPal">
                    </div>
                    
                    <div class="form-check form-check-inline">
                        <label class="form-check-label greyColour smallText" for="eCheck">eCheck</label>
                        <input type="radio" class="form-check-input ms-2" style="float: right;" name="paymentType" id="eCheck" value ="eCheck">
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label greyColour smallText" for="creditCard">Credit Card</label>
                        <input type="radio" class="form-check-input ms-2" style="float: right;" name="paymentType" id="creditCard" value ="Credit Card" >
                    </div>

                    
                </div>
                

                <div class="form-group pt-5 text-end">
                  <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-6 inputBlueBg">
                      <label for="cardNumber" class="greyColour mediumText">رقم البطاقة*</label> 
                      <input type="text" class="form-control mediumText text-end" id="cardNumber" name="cardNumber">
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-6 inputBlueBg">
                      <label for="securityCode" class="greyColour mediumText">الرمز السري*</label> 
                      <input type="text" class="form-control mediumText text-end" id="securityCode" name="securityCode">
                    </div>
                  </div>

                  <div class="row mt-2">
                    <div class="col-lg-6 col-md-6 col-sm-4 inputBlueBg">
                      <p class="mb-0 greyColour mediumText fw-bold">شهر الانتهاء*</p>
                      <select id="monthselect" name="monthselect" class="form-select px-3 mediumText text-end">
                        <option value="none" selected></option>
                        <option value="jan">كانون الثاني</option>
                        <option value="feb">شباط</option>
                        <option value="mar">اذار</option>
                        <option value="apr">نيسان</option>
                        <option value="may">ايار</option>
                        <option value="jun">حزيران</option>
                        <option value="jul">تموز</option>
                        <option value="aug">أب</option>
                        <option value="sep">ايلول</option>
                        <option value="oct">تشرين الاول</option>
                        <option value="nov">تشرين الثاني</option>
                        <option value="dem">كانون الاول</option>
                      </select>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-4 inputBlueBg">
                      <p class="mb-0 greyColour mediumText fw-bold">سنة الانتهاء*</p>
                      <select id="yearselect" name="yearselect" class="form-select px-3 mediumText text-end">
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
                      <label for="NameOnCard" class="greyColour mediumText">اسم البطاقة*</label> 
                      <input type="text" class="form-control mediumText text-end" id="NameOnCard" name="NameOnCard">
                    </div>
                  </div>

                  <div class="text-center mt-5">
                    <button type="submit" id="donation_form" name="donation_form" class="btn btnBlue text-white px-4 regtext">تبرع</button>
                  </div>
                  
                </div>
    
              </div>

          
    
            </form>
          </div>
    
        </div>
            
        <!--left side title and desciption-->
        <div class="col-lg-5 col-md-11 col-sm-11 donationDescription">
          <!--make left side to be fixed-->
          <div class="fixed ms-5">
              <div class="row p-5 my-2 text-end">
                <h1 data-aos="zoom-out-up" 
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out"
                        data-aos-mirror="true"
                        data-aos-once="true"
                    class="greyColour blurText biggerTitle">تبرع</h1>
              </div>

              <div class="row p-3 my-2 text-end">
                <h2 data-aos="fade-up" 
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out"
                        data-aos-mirror="true"
                        data-aos-once="true"
                    class="orangeColour titleText">تبرع الان شكراً لك</h2>
                <p class="text-white regtext">نحن نقبل الآن التبرعات بالعملات المشفرة! مستخدمو المحمول.</p>
              </div>
              
              <div class="row p-3 my-2 pt-5 text-end">
                <div class="align-items-center">
                  <section class="layout-social d-flex justify-content-end">
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
      
        
    </div>
  </div>

  <!--footer-->
  <footer class="site-footer text-light">
    <div class="row align-items-center justify-content-center col-lg-12">

      <section class="layout-social col-sm-9 col-md-10 col-lg-12 text-center ">
        <div class="row text-start mx-5 mt-4">

          <div class="col-lg-3 text-lg-end text-sm-center my-3">
            <img src="./images/logo.png" class="img-fluid w-50 " alt="main logo" /><br />
            <p class="smallText text-light ps-1">فايند سوري هو موقع غير ربحي مصمم لمساعدة
                 العائلات السورية في البحث عن الأشخاص 
                الذين فقدوا بسبب أزمة الحرب التي
                 حدثت في سوريا لأكثر من عشر سنوات. 
            </p>
          </div>

          <div class="col-lg-3  text-lg-end text-sm-center my-3 px-5">
            <h3 class="orangeColour pt-2 px-5">تواصل معنا</h3>
            <p class="smallText text-light px-5">972 Strasburg Road,<br />
              Kitchener, ON N2E 2K4<br />
              support@findsuri.com
            </p>
          </div>
          <div class="col-lg-3 text-lg-start text-sm-center my-3">
            <h3 class="orangeColour pt-2 px-5">لنبق على اتصال</h4>
            <p class="smallText px-5">تابعونا على : @findsuri</p>
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
          <div class="col-lg-3 text-lg-end text-sm-center my-3 pe-3">
            <h3 class="orangeColour pt-2 me-5">الرعاة الرسميين</h3>
            <div class="container" style="background-color: #0065A1;">
              <div class="row me-3">
                <div class="col pt-3">
                  <img src="./images/ontario.svg" class="w-75 img-fluid" alt="ontario" />
                </div>
                <div class="col pt-1">
                  <img src="./images/canada.svg" class="w-75 img-fluid" alt="ontario" />
                </div>
              </div>
      </section>
      <section class="layout-social container-fluid vertical-padding col-sm-5 col-md-5 col-lg-11">
        <div class="row text-end smallText">

          
          <div class="col-lg-2 ps-4">
            <p class="text-light text-inline">Copyright&copy;FindSuri</p>
          </div>

          <div class="col-lg-2">
              
          </div>

          <div class="col-lg-2">
            <p class="text-light text-inline">مساعدة</p>
          </div>

          <div class="col-lg-2">
            <p class="text-light text-inline">سياسة الخصوصية</p>
          </div>

          <div class="col-lg-2">
              <a href="about.php" class="text-decoration-none">
                <p class="text-light text-inline">فكرة عامة</p>
              </a>
          </div>
          <div class="col-lg-2">
            <a href="index.php"  class="text-decoration-none">
              <p class="text-light text-inline"> الرئيسية</p>
            </a>

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
      <script src="assets/lib/popper.js"></script>
      <script src="otherjs.js"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>

</html>