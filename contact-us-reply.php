<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<head>
  <link rel="icon" type="icon" href="images/icon.ico">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Findsuri Reply</title>
  <meta name="keyword" content="Findsuri, missing person, syrian">
  </meta>
  <script defer src="assets/lib/fontawesome-all.min.js"></script>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/signup.css">
  <link rel="stylesheet" href="styles/common.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
 
</head>

<body body data-spy="scroll" data-target=".site-nav" data-offset="50">

  <!--Header nav bar-->
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


  <div class="container-fluid topMargin px-3">
    <div class="row g-3">
        
        <div class="row p-5 my-3 text-lg-right">
              <h1 data-aos="zoom-out-up" 
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out"
                        data-aos-mirror="true"
                        data-aos-once="true"
               class="biggerTitle blurText greyColour ">Reply Message</h1>
        </div>

        <div id="" > <!-- enter div id here -->
        <div class="p-5 col-lg-10 my-2 mx-5 bg-white rounded-3 ms-5 mb-5">
  

          <?php
              // here is the Database Connection
                $conn = mysqli_connect('localhost','root','','findsuridb');
                // Check if there any error in the connection with the database
                if($conn->connect_error){
                  echo "$conn->connect_error";
                  die("Connection Failed : ". $conn->connect_error);
                } else {
                  // create a var and put the sql statment inside of it ,and it's and basic select quarry
                  $stmt = "SELECT * FROM contactus WHERE contact_id='".$_POST['contact_id']."' or chat_id='".$_POST['contact_id']."' ";
                  // to run the connection with the statment that we wrote 
                  $result = mysqli_query($conn,$stmt);

                }
                  while($row = mysqli_fetch_assoc($result)){
                    if($row['contact_email']=="admin@findsuri.com"){
              ?>
              <!-- enter label for form here -->
              <div class="form-group">
                <label for="" class="orangeColour titleText">Admin Replied</label>
              </div>
              <?php }else{ ?>
                <div class="form-group">
                <label for="" class="orangeColour titleText">Message</label>
                </div>

              <?php } ?>
  
              <div class="border border-2 p-3 my-2 borderColour">
                <div class="form-group">
                </div>
                <div class="form-group pt-3 mx-3">

                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label mediumText">Full Name :</label>
                    <div class="col-sm-8 inputBlueBg mediumText">
                    <?php if($row['contact_email']=="admin@findsuri.com"){?>
                    <label id="fullnamelabel" name="fullnamelabel" class="col-sm-4 col-form-label"><?php echo $row['contact_fullname'] ." ". $row['admin_id'];?></label>
                    <?php }else{ ?>
                      <label id="fullnamelabel" name="fullnamelabel" class="col-sm-4 col-form-label"><?php echo $row['contact_fullname'];?></label>
                    <?php } ?>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label mediumText">Date :</label>
                    <div class="col-sm-8 inputBlueBg mediumText">
                        <label id="datelabel" name="datelabel" class="col-sm-4 col-form-label"><?php echo $row['date_of_contact'];?></label>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label mediumText">User's Email :</label>
                    <div class="col-sm-8 inputBlueBg mediumText">
                        <label id="emaillabel" name="emaillabel" class="col-sm-4 col-form-label"><?php echo $row['contact_email'];?></label>
                    </div>
                </div>

                <!-- enter label, id and name here for MESSAGE -->
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label mediumText">Message :</label>
                    <div class="col-sm-8 inputBlueBg mediumText">
                       <label id="subjectlabel" name="subjectlabel" class="col-sm-4 col-form-label"><?php echo $row['contact_message'];?></label>
                    </div>
                </div>

               

               
                </div>
            
               
              </div>
              <?php } ?>
          
          <!-- enter form id, action, and onsubmit here -->
            <form id="reply" action="Database/addons.php" method="post" role="form">
  
              <!-- enter label for form here -->
              <div class="form-group">
                <label for="" class="orangeColour titleText">Reply to a message</label>
              </div>
  
              <div class="border border-2 p-3 my-2 borderColour">
                <div class="form-group">
                </div>
                <div class="form-group pt-3 mx-3">
                  
                <!-- enter label, id and name here for MESSAGE -->
                  <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label mediumText">Message:</label>
                    <div class="col-sm-8 inputBlueBg mediumText">
                        <textarea rows="6" type="text" id="replyinput" name="replyinput" class="form-control" ></textarea>
                    </div>
                </div>

               
                </div>
              
  
                <div class="text-center mt-5">
                    <!-- enter name for SUBMIT button -->
                <?php
                  // here is the Database Connection
                    $conn = mysqli_connect('localhost','root','','findsuridb');
                    // Check if there any error in the connection with the database
                    if($conn->connect_error){
                      echo "$conn->connect_error";
                      die("Connection Failed : ". $conn->connect_error);
                    } else {
                      // create a var and put the sql statment inside of it ,and it's and basic select quarry
                      $stmt = "SELECT * FROM contactus WHERE contact_id='".$_POST['contact_id']."' ";
                      // to run the connection with the statment that we wrote 
                      $result = mysqli_query($conn,$stmt);

                    }
                      while($row = mysqli_fetch_assoc($result)){
                  ?>
                      <input type="text" name="contact_id" value="<?php echo $row['contact_id'];?>" hidden></input>
                      <input type="text" name="user_id" value="<?php echo $row['user_id'];?>" hidden></input>
                      <input type="text" name="contact_email" value="<?php echo $row['contact_email'];?>" hidden></input>
                      <input type="text" name="contact_fullname" value="<?php echo $row['contact_fullname'];?>" hidden></input>
                  <?php if($_SESSION['User_Type'] =="Admin"){?>
                    <input type="submit"  name="admin_reply_message" class="btn btnBlue text-white px-4 mediumText" value="Submit">
                    <a href="Admindashboard/admin-messages.php"><button type="button" class="btn btnOrange text-white mx-3 mediumText">Go Back</button></a>
                    <?php }else{?>
                    <input type="submit"  name="user_reply_message" class="btn btnBlue text-white px-4 mediumText" value="Submit">
                    <a href="user-dashboard.php"><button type="button" class="btn btnOrange text-white mx-3 mediumText">Go Back</button></a>
                      <?php } ?>
                </div>
                <?php } ?>

                
              </div>
              
            </form>
           
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
      <script src="assets/lib/checkvali.js"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>

</html>