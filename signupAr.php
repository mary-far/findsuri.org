<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<head>
  <link rel="icon" type="icon" href="images/icon.ico">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Findsuri Sign Up</title>
  <meta name="keyword" content="Findsuri, missing person, syrian">
  </meta>
  <script defer src="assets/lib/fontawesome-all.min.js"></script>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/signup.css">
  <link rel="stylesheet" href="styles/common.css">
  <script defer src="otherjs.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <script defer src="otherjs.js"></script>

</head>

<body body data-spy="scroll" data-target=".site-nav" data-offset="50" class="d-flex flex-column min-vh-100" onload="onload()">

<!--header nav-->
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
          <a class="dropdown-item" href="signup.php"> English</a>
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
          <li class="nav-item nlink mx-2">
            <a class="nav-link text-light" href="indexAr.php#contact_us">تواصل معنا</a>
          </li>


        </ul>
      </div>

    


    </div>
  </nav>
</header>

  <!--content for sign up-->
  <div class="container-fluid topMargin px-3">
    <div class="row g-3">

      <!--right side sign up form-->
      <div class="col-lg-6 col-md-12 col-sm-12 donationForm ms-5">
  
        <!--sign up section-->
        <div id="Signupdiv" class="hidden">
          <div class="p-5 my-2 bg-white rounded-3">

            <!--sign up form-->
            <form id="Signup" action="Database/checklogin.php?lang=Ar" method="post" role="form" onsubmit="return checkvalidationsignup();">

              <div class="form-group">
                <label for="signup-form" class="orangeColour titleText text-end">انشاء حساب جديد</label>
              </div>
              
              <div class="border border-2 p-3 my-2 borderColour">
                <div class="form-group text-end">
                  <label for="signup" class="greyColour regtext pt-1">انشاء حساب</label>
                  <p class="smallText mb-0">ميزات انشاء الحساب</p>
                  <ul class="smallText pt-0 ms-2 text-end list-unstyled" >
                    <li>الوصول لقائمة المفقودين</li>
                    <li>الابلاغ عن شخص مفقود</li>
                  </ul>
                  
                
                </div>
                <div id="error-message" class="Error"></div>
                <div class="form-group pt-3 mx-3">
                  
                  <div class="row mb-3">
                    <div class="col-sm-7 inputBlueBg">
                        <input type="text" class="form-control form-control-lg text-end" id="email-signup" name="email-signup">
                    </div>
                    <label for="email-signup" class="col-sm-5 col-form-label mediumText text-start">البريد الالكتروني :</label>

                  </div>

                  <div class="row mb-3">
                    <div class="col-sm-7 inputBlueBg">
                        <input type="text" class="form-control form-control-lg text-end" id="name-signup" name="name-signup">
                    </div>
                    <label for="name-signup" class="col-sm-5 col-form-label mediumText text-start">اسم المستخدم:</label>

                  </div>

                  <div class="row mb-3">
                    <div class="col-sm-7 inputBlueBg">
                        <input type="password" class="form-control form-control-lg text-end" id="password-signup" name="password-signup">
                        <p class="smallText mb-0 text-end">مسموح اكثر من 8 احرف و ارقام</p>
                    </div>
                    <label for="password-signup" class="col-sm-5 col-form-label mediumText text-start">كلمة المرور:</label>

                  </div>

                  <div class="row mb-3">
                    <div class="col-sm-7 inputBlueBg">
                        <input type="password" class="form-control form-control-lg text-end" id="confrim-password-signup" name="confrim-password-signup">
                    </div>
                    <label for="confrim-password-signup" class="col-sm-5 col-form-label mediumText text-start">تأكيد كلمة المرور:</label>

                  </div>
                </div>
              

                <div class="text-center mt-5">
                      
                    <input type="submit"  name="Signup" class="btn btnBlue text-white px-4 mediumText" value="انشاء">
                </div>
                
              </div>

            </form>

            <!--link for log in section-->
            <div class="row text-center mt-3">
              <a id="haveaccount" href="#" class="blueColour mediumText">او سجل دخولك من هنا</a>
            </div>

          </div>

        </div>
        
        <!--log in section-->
        <div id="logindiv" >
          <div class="p-5 my-2 bg-white rounded-3 text-end">
            <!--log in form-->
            <form id="login" action="Database/checklogin.php?lang=Ar" method="post" role="form" onsubmit="return checkvalidationlogin();" >

              <div class="form-group">
                <label for="signup-in-form" class="orangeColour titleText text-end">تسجيل دخول</label>
              </div>

              <div class="border border-2 p-3 my-2 borderColour">
                <div class="form-group">
                  <label for="login" class="greyColour regtext pt-1 my-2 mb-5 text-end">لديك حساب بالفعل سجل دخول</label>
                </div>

                <?php
                  if(@$_GET['incorrect']==true){
                    ?>
                    <div class="Error"> <?php echo $_GET['incorrect'];?></div>
                    <?php } ?>
                    <?php
                  if(@$_GET['exist']==true){
                    ?>
                    <div class="Error"> <?php echo $_GET['exist'];?></div>
                    <?php } ?>
                    
                    <div id="error-message-login" class="Error"></div>  
                <div class="form-group pt-3 mx-3">
                  
                  <div class="row mb-3">
                    <div class="col-sm-8 inputBlueBg">
                        <input type="text" class="form-control form-control-lg text-end" id="email-login" name="email-login">
                    </div>
                    <label for="email-login" class="col-sm-4 col-form-label mediumText text-start"> البريد الالكتروني:</label>

                </div>
                <div class="row mb-3">
                    <div class="col-sm-8 inputBlueBg">
                        <input type="password" class="form-control form-control-lg text-end" id="password-login" name="password-login">
                    </div>
                    <label for="password-login" class="col-sm-4 col-form-label mediumText text-start">كلمة المرور:</label>

                </div>
                </div>
              

                <div class="text-center mt-5">
                                      
                    <input type="submit"  name="Login" class="btn btnBlue text-white px-4 mediumText" value="دخول">
                </div>
                
              </div>

            </form>

            <!--link for sgin up section-->
            <div class="row text-center mt-3">
              <a id="havenoaccount" href="#" class="blueColour mediumText">انشاء حساب </a>
            </div>
          </div>
        </div>


      </div>

      <!--left side title and descriptions-->
      <div class="col-lg-5 col-md-11 col-sm-11 donationDescription">
        <div class="fixed ms-2">
            <div class="row p-5 my-3 text-lg-right">
              <h1 data-aos="zoom-out-up" 
                  data-aos-duration="1000"
                  data-aos-easing="ease-in-out"
                  data-aos-mirror="true"
                  data-aos-once="true" 
                class="biggerTitle blurText greyColour text-end">تسجيل دخول او انشاء حساب جديد</h1>
            </div>

            <div class="row p-3 my-2 text-end">
              <p class="text-white regtext">بالتسجيل فأنك توافق على <a href="#" class="orangeColour">شروط الاستخدام الخاصة بنا</a>,  
                <a href="#" class="orangeColour">سياسة خاصة</a>, و <a href="#" class="orangeColour">سياسة ملفات الارتباط</a>.  
                توضح سياساتنا كيفية استخدامنا لبياناتك لتقديم خدماتنا وموقعنا وإفسادها والترويج لها ، وكيف يمكنك ممارسة حقوقك في التحكم في الاستخدام.
              </p>
            </div>
            
            <div class="row p-3 my-2 pt-5 text-lg-right">
                <div class="align-items-end">
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

                    <a class="text-light text-decoration-none mx-2" href="#">
                      <i class="layout-icon fab fa-twitter"></i>
                    </a>
                    <a class="text-light text-decoration-none mx-2" href="#">
                      <i class="layout-icon fab fa-facebook"></i>
                    </a>
                    <a class="text-light text-decoration-none mx-2" href="#">
                      <i class="layout-icon fab fa-instagram"></i>
                    </a>
                    

                    <a class="text-light text-decoration-none mx-2" href="https://www.youtube.com/channel/UCU_8X-GVh0wvWjvu_qKUGHg">
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
      <script src="assets/lib/login.js"></script>
      <script src="checkvali.js"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>

</html>