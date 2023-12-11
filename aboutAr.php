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

        <a class="navbar-brand" href="indexAr.php">
          <img src="images/logo.png " class="logo" alt="logo">
        </a>

        <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false"><span class="flag-icon flag-icon-us"> </span>
            العربية</a>
          <div class="dropdown-menu" aria-labelledby="dropdown">
            <a class="dropdown-item" href="about.php"> English</a>
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
              echo "<li><a class='dropdown-item' href='Admindashboard/admin-verify-posts.php'><b>لوحة تحكم المسؤول</b></a></li>";
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

  <!--content for about-->
  <div class="container-fluid topMargin px-3">

    <div class="row g-3">


      <!--right side about section-->
      <div class="col-lg-6 col-md-12 col-sm-12 donationForm ms-5">
  
        <!--about section-->
        <div id="Signupdiv">
          <div class="p-5 my-2 bg-white rounded-3 text-end">
            
            <div class="row ms-2">

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
              <div class="col-md-8">  
                <p class="regtext">فايند سوري هو موقع غير ربحي مصمم للمساعدة
                 عائلات سورية تبحث عن المفقودين بسبب الحرب
                 الأزمة التي حدثت في سوريا منذ أكثر من عشر سنوات. الموقع لا يديره
                 أي حزب سياسي أو حزب حكومي. المعلومات الكاملة للأشخاص المفقودين
                 المنشورة على الموقع. جنبا إلى جنب مع الصور ومعلومات الاتصال بمجرد ذلك
                 يحصل على الموافقة. يهدف إلى تسريع عملية العثور على الأشخاص وتوسيع نطاق الوصول
                 من المعلومات عن الأفراد ومساعدة العائلات مع الثقة في مصدر موثوق ل
                 مشاركة المعلومات الحساسة</p>
              </div>
              
            </div>

            <div class="row ms-2 my-3">
              <p class="mediumText fw-bold"> فايند سوري يسمح موقع الويب للمستخدمين بإدخال المعلومات واستردادها
                على حالات المفقودين السوريين الفردية. ويقبل البيانات الأساسية عن الشخص المفقود ،
                بما في ذلك بيانات حول أقرب الأقارب الأحياء ، وأي تفاصيل إضافية حول
                ظرف الاختفاء. في مرحلة منظمة فايند سوري غير الربحية ،
                يمكن للمستخدم أن يشير إلى مقدار أو قلة استعداده للسماح بالمعلومات
                ان يكون مشترك. كلما تمت مشاركة المعلومات على نطاق أوسع ، زاد احتمال أن تكون مفيدة
                للمساعدة في تحديد مكان الشخص المفقود والتعرف عليه ، لكننا نحافظ على سياسة مطلقة
                أمان البيانات ، لذلك إذا كنت لا تريد مشاركة معلوماتك ، فلن تتم مشاركتها.
                يقرر المستخدم إلى أي مدى يمكن مشاركة البيانات قبل إرسال "مفقود"
                نموذج بيانات الشخص. يتم استخدام البيانات الشخصية فقط للأغراض التي تم توفيرها من أجلها.
                بالإضافة إلى ذلك ، يتيح موقع Find Suri للمستخدمين تتبع حالة الشخص المفقود من خلاله
                خيار الاستعلام عن الأشخاص المفقودين ببساطة عن طريق إدخال اسم الشخص المفقود.

              </p>
            </div>



            <div class="border border-3 p-3 my-5 borderColour">
              <h3 class="blueColour fw-bold titleText pt-4 ps-3">فريقنا:</h3>
              <div class="row text-center my-3 mb-4">

                <div class="col-md-4 p-2 my-3">
                  <img data-aos="zoom-out-up" 
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out"
                        data-aos-mirror="true"
                        data-aos-once="false" 
                        class="layout-image img-fluid" src="images/dima.png" alt="founder image">
                  <h4 class="regtext fw-bold my-4">المنشأ</h4>
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
                  <h4 class="regtext fw-bold my-4">مطور</h4>
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
                  <h4 class="regtext fw-bold my-4">مطور</h4>
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
                  <h4 class="regtext fw-bold my-4">مطور</h4>
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
                  <h4 class="regtext fw-bold my-4">مطور</h4>
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
                class="blueColour fw-bold titleText pt-5 ms-2">لمعلومات اكثر حول برامجنا</h3>
              <a href="https://youtu.be/xg2Yac3okfI" target="_blank" class="text-decoration-none"> 
                <h4 class="regtext fw-bold ms-2 greyColour"> اشترك بقناتنا على اليوتيوب</h4>
              </a>

              <div class="ratio ratio-16x9 mt-5">
                <video width="700" height="350" controls class="shadow-sm">
                  <source src="./images/ARAB-YouTubeVideo.mp4" type="video/mp4">
                </video>
              </div>
              
              <h3 class="blueColour regtext my-5 pt-5 lh-base">اذا كان لديك ايا استفسار
                <a href="index.php#contact_us" class="orangeColour">اضغط هنا</a> <br>
                او قم بمراسلتنا على البريد الالكتروني<br> at Support@findsuri.com</h3>
             

            </div>
  
          </div>
  
        </div>
        

      </div>
            
      <!--left side title and descriptions-->
      <div class="col-lg-5 col-md-11 col-sm-11 donationDescription">
        <div class="fixed ms-3">
          <div class="row p-5 pb-2 my-3 text-end">
            <h1 data-aos="fade-down-right" 
                  data-aos-duration="1000"
                  data-aos-easing="ease-in-out"
                  data-aos-mirror="true"
                  data-aos-once="true"
                  data-aos-anchor-placement="top-center" 
               class="greyColour biggerTitle blurText">حول <br> Find Suri</h1>
          </div>

          <div class="row p-3 my-2">
            <p class="text-white regtext text-end">فايند سوري هو موقع غير ربحي مصمم لمساعدة العائلات السورية
               البحث عن المفقودين بسبب أزمة الحرب التي شهدتها سوريا
               لأكثر من عشر سنوات.
            </p>
          </div>
          <div class="row p-3 my-2 pt-5 text-end">
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
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>

</body>

</html>