<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Findsuri Missing Person Inquiry</title>
  <meta name="keyword" content="Findsuri, missing person, syrian">
  </meta>
  <script defer src="assets/lib/fontawesome-all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />            
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
            <a class="dropdown-item" href="missing-persons-inquiry.php"> English</a>
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
                role='button' aria-haspopup='true' aria-expanded='false'>  مركز المفقودين </a>";
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
              echo "<a class='nav-link text-light' href='signupAr.php'>تسجيل دخول<span class='sr-only'></span></a>";
              echo "</li>";
              }?>


          </ul>
        </div>

      


      </div>
    </nav>
  </header>

  <!--content for sign up-->
  <div class="container-fluid topMargin px-3">
    <div class="row g-3">

      <!--right side missing persons inquiry-->
      <div class="col-lg-6 col-md-12 col-sm-12 donationForm ms-5">
  
        <!--missing person section-->
          <div class="p-5 my-2">

            <!--sort and search box-->
            <div class="row">
               <!--sort-->
              <div class="col-lg-6 col-md-12 col-sm-12 mt-2">
                
                <div class="dropdown">
                    
                    <button class="btn btn-light smallText btnWhite text-end" type="button"
                            id="filterMenu" name="filterMenu" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fa-solid fa-sliders me-5 pe-3"></i>
                            الكل 
                    </button>
                    <label class="text-white px-3 text-end">فرز حسب</label>
                    <!--sort dropdown menu options-->
                  <form id="filterform" action="" method="post" role="form">
                    <ul class="dropdown-menu text-end checkbox-menu allow-focus px-3" aria-labelledby="filterMenu">
                      <li >
                        <label  class="text-white">
                          Age <input type="checkbox" name="age" onchange="this.form.submit()" <?=(isset($_POST['age'])?' checked':'')?>>
                        </label>
                      </li>
                      
                      <li >
                        <label class="text-white">
                          Gender <input type="checkbox" name="gender" onchange="this.form.submit()" <?=(isset($_POST['gender'])?' checked':'')?>>
                        </label>
                      </li>
                      
                      <li >
                        <label  class="text-white">
                          Country <input type="checkbox" name="country" onchange="this.form.submit()" <?=(isset($_POST['country'])?' checked':'')?>> 
                        </label>
                      </li>

                      <li >
                        <label  class="text-white">
                          Date <input type="checkbox" name="date" onchange="this.form.submit()" <?=(isset($_POST['date'])?' checked':'')?>> 
                        </label>
                      </li>
                    </ul>
                  
                </div>
              </div>
                       
              <!--Search Box-->
              <div class="col-lg-4 col-md-12 col-sm-12 mt-2">
                <div class="mx-2 input-group">
               <!-- <form id="search" action="" method="post" role="form">-->
                  <button type="submit" name="searchbox"  class="btn btnWhite layer-back">
                    <i class="fa-solid fa-magnifying-glass blueColour px-0 mx-0 smallText"></i>
                  </button>
                  <input type="text" name="searchboxvalue" class="text-end smallText form-control btnWhite" placeholder="البحث" value="<?php 
                      if(isset($_POST['searchboxvalue'])){
                        echo $_POST['searchboxvalue'];
                      }
                      else{
                        echo "";
                      }?>">
                  

                </div>
                
              </div>  
           </div>


           <div class='row p-2 my-1' >
            <?php
             // here is the Database Connection
             $conn = mysqli_connect('localhost','root','','findsuridb');
             // Check if there any error in the connection with the database
             if($conn->connect_error){
               echo "$conn->connect_error";
               die("Connection Failed : ". $conn->connect_error);
             } else {
              if (isset($_POST["age"])) {
                $order[] = "date_of_birth";
              }
              if (isset($_POST["gender"])) {
                $order[] = "gender";
              }
              if (isset($_POST["country"])) {
                $order[] = "country";
              }
              if (isset($_POST["date"])) {
                $order[] = "date_of_post";
              }
              if(!empty($order)) {
                $str = implode(' and ',$order);
              
                $stmt = "SELECT * FROM verifypost where status in ('Verified','Founded')  order by " . $str . " ";
            
              }else{
                $stmt = "SELECT * FROM verifypost where status in ('Verified','Founded') ";
              }
              if(isset($_POST["searchbox"])){
                $keyword = $_POST['searchboxvalue'];
                $stmt = "SELECT * FROM verifypost where status in ('Verified','Founded') and missing_person_first_name like '%$keyword%' 
                or missing_person_last_name like '%$keyword%'";
              }
              
               // create a var and put the sql statment inside of it ,and it's and basic select quarry
               //$stmte = "SELECT * from verifypost where status='Verified' ";
               // to run the connection with the statment that we wrote 
               $result = mysqli_query($conn,$stmt);
                   
             }
             while($row = mysqli_fetch_assoc($result)){
              if($row['status']=="Founded"){
                echo "<div class='col-lg-6 col-md-12 col-sm-12 mt-3'>";
                echo "<div class='container'>";
                echo "<img src='". $row['image'] ."' class='img-fluid medImgSize foundedImg'>";
                //--Overlay logo and case--
                echo "<div class='found-logo'>";
                echo "<img src='images/close-case-logo.png' class='img-fluid medImgSize foundedLogo'>";
                echo "</div>";
                echo "<div class='bottomLine'>";
                echo "<h3 class='blueColour bold textbar'>Case</h3>";
                echo "</div>";
                echo "</div> ";
                echo "</div>";
              }else{
             //--Missing persons posts list-->

             //--Normal Post Image-->
              echo "<div class='col-lg-6 col-md-12 col-sm-12 mt-3'>";
              echo "<div class='container '>";
              echo "<img src='". $row['image'] ."'  class='img-fluid medImgSize personImg'>";
             //--Hover over information and button-->
              echo "<div class='overlay'>";
              echo "<h3 class='title-text text-light mt-2'>" . $row['missing_person_first_name'] . " " . $row['missing_person_last_name'] . "</h3>";
              echo "<p class='regtext text-light mt-2'>" . $row['country'] ."</p>";
              echo "<form id='view-post' action='missing-person-infoAr.php' method='post' role='form'>";
              echo "<input type='text' name='post_id' value='".$row['post_id']."' hidden></input>";
              echo "<button id='view-post' name='view-post' type='submit' class='btn fw-bold text-light smallText btnBlue px-5 mt-2'>عرض</button>";
              echo "</form>";
              echo "</div>";     
                
              echo "</div>"; 
              echo "</div>";
            }
        }?>
        
              </div>
              </div>
          </div>
  


      <!--left side title and descriptions-->
      <div class="col-lg-5 col-md-11 col-sm-11 donationDescription">
        <div class="fixed">
        
          <div class="row p-5 pb-2 my-2 text-end">
            <h1 data-aos="fade-down" 
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out"
                        data-aos-mirror="true"
                        data-aos-once="true" 
              class="greyColour blurText biggerTitle">مركز المفقودين</h1>
          </div>

          <div class="row p-3 my-2">
            <h2 data-aos="fade-down" 
                        data-aos-duration="1500"
                        data-aos-easing="ease-in-out"
                        data-aos-mirror="true"
                        data-aos-once="true" 
               class="orangeColour text-end titleText">قائمة الاشخاص المفقودين</h2>
            <p class="text-white regtext text-end">
            إذا فشل البحث في الحصول على نتيجة ، فقد ترغب في محاولة استخدام تهجئة بديلة أو شكل من أشكال اسم الشخص ، حيث يتم تعريف الأفراد أحيانًا بالأسماء الأولى والأسماء الوسطى وأسماء العائلة وحتى الأسماء المستعارة وربما تم إدخالها في الأصل في قاعدة البيانات هذه تحت واحد من هؤلاء.
            </p>
          </div>
          
          <div class="row p-3 my-2 pt-2 text-lg-end">
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
  <footer class="site-footer text-light mt-auto">
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
          <div class="col-lg-3 text-lg-end text-sm-center my-3">
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
              <p class="text-light text-inline">الرئيسية</p>
            </a>

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
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>

</html>