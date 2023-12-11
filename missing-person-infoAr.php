<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Findsuri Missing Person Info</title>
  <meta name="keyword" content="Findsuri, missing person, syrian">
  </meta>
  <script defer src="assets/lib/fontawesome-all.min.js"></script>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/missing-person-info.css">
  <link rel="stylesheet" href="styles/common.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <script defer src="otherjs.js"></script>
</head>

<body body data-spy="scroll" data-target=".site-nav" data-offset="50" class="d-flex flex-column min-vh-100">

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
          <a class="dropdown-item" href="missing_person_info.php"> English</a>
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

  <!--content for missing person info-->
  <div class="container-fluid topMargin px-3">
    <div class="row g-3">
      <?php
          // here is the Database Connection
            $conn = mysqli_connect('localhost','root','','findsuridb');
            // Check if there any error in the connection with the database
            if($conn->connect_error){
              echo "$conn->connect_error";
              die("Connection Failed : ". $conn->connect_error);
            } else {
              // create a var and put the sql statment inside of it ,and it's and basic select quarry
              $stmt = "SELECT * FROM verifypost WHERE post_id='".$_POST['post_id']."' ";
              // to run the connection with the statment that we wrote 
              $result = mysqli_query($conn,$stmt);

            }
              while($row = mysqli_fetch_assoc($result)){
      ?>
              
      <!--right side missing person information-->
      <div class="col-lg-6 col-md-12 col-sm-12 donationForm ms-5">
  
        <!--missing person section-->
          <div class="p-5  my-2 bg-white rounded-3">

            <!--Missing person image-->
            <row>
              <img src="<?php echo $row['image'];?>" class="img-fluid bigImgSize">
            </row>

            <!--Missing person information-->
            <div class="row mx-1 mt-4 mediumText text-end ">

              <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
               
                <p class="d-inline mx-2"><?php echo $row['missing_person_last_name'];?></p>
                <p class="bold d-inline">: الاسم الاخير</p>
          
              </div> 

              <div class="col-lg-12 col-md-12 col-sm-12 mt-2">

                <p class="d-inline mx-2"><?php echo $row['missing_person_translated_names'];?></p>
                <p class="bold d-inline">: اسماء اخرى</p>
          
              </div> 

              <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                
                <p class="d-inline mx-2"><?php echo $row['missing_person_first_name'];?></p>
                <p class="bold d-inline">: الاسم الاول </p>
          
              </div> 

              <div class="col-lg-12 col-md-12 col-sm-12 mt-2">

                <p class="d-inline mx-2"><?php echo $row['date_of_birth'];?></p>
                <p class="bold d-inline"> :تاريخ الميلاد </p>
          
              </div> 

              <div class="col-lg-12 col-md-12 col-sm-12 mt-2">

                <p class="d-inline mx-2"><?php echo $row['country'];?></p>
                <p class="bold d-inline">: بلد المنشاً</p>
          
              </div> 

              <div class="col-lg-12 col-md-12 col-sm-12 mt-2">

                <p class="d-inline mx-2"><?php echo $row['place'];?></p>
                <p class="bold d-inline">:مكان المنشاً</p>
          
              </div> 

              <div class="col-lg-12 col-md-12 col-sm-12 mt-2">

                <p class="d-inline mx-2"><?php echo $row['date_of_disappearance'];?></p>
                <p class="bold d-inline">: تاريخ الاختفاء</p>
                
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 mt-2">

                <p class="d-inline mx-2"><?php echo $row['country_of_disappearance'];?></p>
                <p class="bold d-inline">: بلد الاختفاء</p>
          
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 mt-2">

                <p class="d-inline mx-2"><?php echo $row['place_of_disappearance'];?></p>
                <p class="bold d-inline">:مكان الاختفاء  </p>

              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 mt-2">

                <p class="d-inline mx-2"><?php echo $row['missing_person_height'];?></p>
                <p class="bold d-inline">: الطول</p>

              </div>


              <div class="col-lg-12 col-md-12 col-sm-12 mt-2">

                <p class="d-inline mx-2"><?php echo $row['missing_person_weight'];?></p>
                <p class="bold d-inline">: الوزن</p>

              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
              
                <p class="d-inline mx-2"><?php echo $row['appearance'];?> </p>
                <p class="bold d-inline">: معلومات اخرى حول الحالة او الملابس</p>

              </div>

              <?php } ?>  
            </div>

            <!--Contact find suri-->
            <div class="mx-3 mt-4 text-end">
              <p class="smallText">إذا كانت هذه المعلومات تتطابق مع ما تبحث عنه ،<br>
              يرجى الاتصال بنا للحصول على جميع المعلومات </p>
                
                <!--Go back to missing person inquery-->
                <a href="missing-persons-inquiry.php" class="text-decoration-none">
                  <button type="button" class="btn btnOrange smallText fw-bold text-white mx-3">العودة</button>
                </a>

                <!--Contact find suri-->
                <a href="index.php#page-nested1" class="text-decoration-none">
                  <button type="button" class="btn btnBlue smallText fw-bold text-white mx-5">تواصل معنا</button>
                </a>
            </div>
          </div>
  
      </div>

      <!--left side title and descriptions-->
      <div class="col-lg-5 col-md-11 col-sm-11 donationDescription">
        <div class="fixed ms-5">

          <div class="row p-5 pb-1 my-2 text-end">
            <h1 data-aos="fade-right" 
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out"
                        data-aos-mirror="true"
                        data-aos-once="true"
                class="greyColour biggerTitle blurText">مركز المفقودين</h1>
          </div>

          <div class="row p-3 my-2 text-end">
            <h2 data-aos="fade-right" 
                        data-aos-duration="1500"
                        data-aos-easing="ease-in-out"
                        data-aos-mirror="true"
                        data-aos-once="true"
             class="orangeColour">البحث عن مفقود</h2>
            <p class="text-white regtext">
            إذا فشل البحث في الحصول على نتيجة ، فقد ترغب في محاولة استخدام
               تهجئة بديلة أو شكل من أشكال اسم الشخص ، كأفراد
               يتم التعرف عليها أحيانًا من خلال الأسماء الأولى والأسماء الوسطى وأسماء العائلة
               وحتى الأسماء المستعارة وربما تم إدخالها في الأصل على هذا
               قاعدة بيانات تحت واحدة من هؤلاء.
            </p>
          </div>
          
          <div class="row p-3 my-2 pt-3 text-end">
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
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>

</html>