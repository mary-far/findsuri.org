<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<head>
  <link rel="icon" type="icon" href="images/icon.ico">
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

      <a class="navbar-brand" href="index.php">
        <img src="images/logo.png " class="logo" alt="logo">
      </a>

      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false"><span class="flag-icon flag-icon-us"> </span>
          Eng</a>
        <div class="dropdown-menu" aria-labelledby="dropdown">
          <a class="dropdown-item" href="#"> English</a>
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
          <li class="nav-item nlink mx-2">
            <a class="nav-link text-light" href="../index.php#contact_us">Contact Us</a>
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

  <!--content for sign up-->
  <div class="container-fluid topMargin px-3">
    <div class="row g-3">

      <!--left side title and descriptions-->
      <div class="col-lg-5 col-md-11 col-sm-11 donationDescription">
        <div class="fixed">
          <div class="row p-5 pb-2 my-2 text-lg-right">
            <h1 data-aos="fade-down-right" 
                data-aos-duration="1000"
                data-aos-easing="ease-in-out"
                data-aos-mirror="true"
                data-aos-once="true"
            class="greyColour biggerTitle blurText">Missing<br>Center</h1>
          </div>

          <div class="row p-3 my-2 ">
            <h2 data-aos="fade-down-right" 
                data-aos-duration="1500"
                data-aos-easing="ease-in-out"
                data-aos-mirror="true"
                data-aos-once="true"
              class="orangeColour titleText">Missing persons inquiry</h2>
            <p class="text-white regtext">
              If a search fails to produce a result, you may wish to try using 
              an alternate spelling or form of the person&apos;s name, as individuals 
              are sometimes identified by forenames, middle names, family names 
              and even nicknames and may originally have been entered on this 
              database under one of these.
            </p>
          </div>
          
          <div class="row p-3 my-2 pt-2 text-lg-right">
            <div class="d-flex align-items-center ">
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


                <a class="text-light text-decoration-none mx-2" target="_blank"  href="#">
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
      <div class="col-lg-6 col-md-12 col-sm-12 donationForm">
  
        <!--missing person section-->
          <div class="p-5 my-2 bg-white rounded-3">

            <!--Missing person image-->
            <row>
              <img src="<?php echo $row['image'];?>" class="img-fluid bigImgSize">
            </row>

            <form id="operations" action="Database/postoperations.php" method="post" role="form" enctype="multipart/form-data">
            <!--Missing person information-->
            <div class="row mx-1 mt-4 mediumText">

              <div class="col-lg-12 col-md-12 col-sm-12 mt-2 inputBlueBg">

                <p class="bold d-inline">Last Name: </p>
                <input type="text" id="mlastnameedit" name="mlastnameedit" 
                  class="form-control smallText width-min d-inline mx-2" value="<?php echo $row['missing_person_last_name'];?>">
          
              </div> 

              <div class="col-lg-12 col-md-12 col-sm-12 mt-2 inputBlueBg">

                <p class="bold d-inline">Translated name(s): </p>
                <input type="text" id="mtranlatededit" name="mtranlatededit" 
                 class="form-control smallText width-min d-inline mx-2" value="<?php echo $row['missing_person_translated_names'];?>">
          
              </div> 

              <div class="col-lg-12 col-md-12 col-sm-12 mt-2 inputBlueBg">

                <p class="bold d-inline">First Name: </p>
                <input type="text" id="mfirstnameedit" name="mfirstnameedit" 
                  class="form-control smallText width-min d-inline mx-2" value="<?php echo $row['missing_person_first_name'];?>">
          
              </div> 

              <div class="col-lg-12 col-md-12 col-sm-12 mt-2 inputBlueBg">

                <p class="bold d-inline">Date of Birth </p>
                <input type="text" id="datebirthedit" name="datebirthedit" 
                  class="form-control smallText width-min d-inline mx-2" value="<?php echo $row['date_of_birth'];?>">
          
              </div> 

              <div class="col-lg-12 col-md-12 col-sm-12 mt-2 inputBlueBg">

                <p class="bold d-inline">Country of origin: </p>
                <input type="text" id="countryedit" name="countryedit" 
                  class="form-control smallText width-min d-inline mx-2" value="<?php echo $row['country'];?>">
          
              </div> 

              <div class="col-lg-12 col-md-12 col-sm-12 mt-2 inputBlueBg">

                <p class="bold d-inline">Place of origin: </p>
                <input type="text" id="placeedit" name="placeedit" 
                  class="form-control smallText width-min d-inline mx-2" value="<?php echo $row['place'];?>">
          
              </div> 

              <div class="col-lg-12 col-md-12 col-sm-12 mt-2 inputBlueBg">

                <p class="bold d-inline">Date of disappearance:  </p>
                <input type="text" id="dateDedit" name="dateDedit" 
                  class="form-control smallText width-min d-inline mx-2" value="<?php echo $row['date_of_disappearance'];?>">
          
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 mt-2 inputBlueBg">

                <p class="bold d-inline">Country of disappearance:</p>
                <input type="text" id="countryDedit" name="countryDedit" 
                  class="form-control width-min smallText d-inline mx-2" value="<?php echo $row['country_of_disappearance'];?>">
          
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 mt-2 inputBlueBg">

                <p class="bold d-inline">Place of disappearance: </p>
                <input type="text" id="placeDedit" name="placeDedit" 
                  class="form-control width-min smallText d-inline mx-2" value="<?php echo $row['place_of_disappearance'];?>">
          
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 mt-2 inputBlueBg">

                <p class="bold d-inline">Height of person: </p>
                <input type="text" id="heightedit" name="heightedit" 
                  class="form-control smallText width-min d-inline mx-2" value="<?php echo $row['missing_person_height'];?>">
          
              </div>


              <div class="col-lg-12 col-md-12 col-sm-12 mt-2 inputBlueBg">

                <p class="bold d-inline">Weight of person: </p>
                <input type="text" id="weightedit" name="weightedit" 
                  class="form-control smallText width-min d-inline mx-2" value="<?php echo $row['missing_person_weight'];?>">
          
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 mt-2 inputBlueBg">

                <p class="bold d-inline">Clothing worn and other additional 
                  information about disappearance: </p>
              
                <textarea  rows = "5" cols = "60" id="appearanceedit" name="appearanceedit" 
                  minlength="1" maxlength="1024" 
                  class="form-control smallText width-min d-inline mx-2 mt-2" ><?php echo $row['appearance'];?>
                </textarea>

              </div>


              
            </div>

            <!--Contact find suri-->
            <div class="mx-3 mt-5">
              <p class="smallText">If this information matches what you are looking for,<br>
                Please contact us to have all information </p>

                <!--Contact find suri-->
               
                  <input type="text" name="post_id" value="<?php echo $row['post_id'];?>" hidden></input>
                  <button type="submit" id="user_edit_post" name="user_edit_post" 
                    class="btn btnBlue smallText text-white mx-4 px-4">
                    Save
                  </button>
                </form> 

                <!--Go back to missing person inquery-->
                <a href="user-dashboard.php"><button type="button" 
                  class="btn smallText btnOrange text-white mx-3">Go Back</button></a>
            </div>
            <?php } ?>  
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
              <a class="text-light py-2 text-decoration-none" target="_blank"  href="#">
                <i class="layout-icon fab fa-twitter"></i>
              </a>
              <a class="text-light px-2 text-decoration-none" target="_blank"  href="#">
                <i class="layout-icon fab fa-facebook"></i>
              </a>
              <a class="text-light px-2 text-decoration-none"  target="_blank" href="#">
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