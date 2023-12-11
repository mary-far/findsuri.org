<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<head>
  <link rel="icon" type="icon" href="images/icon.ico">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Findsuri Admin Dashboard</title>
  <meta name="keyword" content="Findsuri, missing person, syrian">
  </meta>
  <script defer src="assets/lib/fontawesome-all.min.js"></script>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/user-dashboard.css">
  <link rel="stylesheet" href="styles/common.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>

<body body data-spy="scroll" data-target=".site-nav" data-offset="50" class="d-flex flex-column min-vh-100">

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
            <li class="nav-item dropdown mx-2">
              <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                role="button" aria-haspopup="true" aria-expanded="false"> Missing Center </a>
              <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item " href="report-missing-person.php"><b>Report Missing Person</b></a></li>
                <li><a class="dropdown-item " href="missing-persons-inquiry.php"><b>Missing Person inquiry</b></a></li>

              </ul>
            </li>
            <li class="nav-item nlink mx-2">
              <a class="nav-link text-light" href="index.php#contact_us">Contact Us</a>
            </li>
            <?php 
            session_start();
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


          </ul>
        </div>

      


      </div>
    </nav>
  </header>

  <!--User Dashbaord title-->
  <div class="container-fluid topMargin px-3">
    <div class="row g-3">

      <div class="col-lg-5 col-md-11 col-sm-11 description">
        <div class="row p-5 my-2 text-lg-right">
          <h1 data-aos="fade-left" 
              data-aos-duration="1500"
              data-aos-easing="ease-in-out"
              data-aos-mirror="true"
              data-aos-once="false"
              class="greyColour blurText biggerTitle">User<br> Dashboard</h1>
        </div>
      </div>
    </div>
  </div>
  <!--Content for user dashboard-->
  <div class="container-fluid px-3 ">

      <div class="row text-center">

        <div class="col-lg-11 col-md-11 col-sm-11 adminContent mx-3">
  
          <div class="p-5 my-2 bg-white rounded-3">

          
            <!--My posts-->
            <?php
              // here is the Database Connection
                $conn = mysqli_connect('localhost','root','','findsuridb');
                // Check if there any error in the connection with the database
                if($conn->connect_error){
                  echo "$conn->connect_error";
                  die("Connection Failed : ". $conn->connect_error);
                } else {
                  // create a var and put the sql statment inside of it ,and it's and basic select quarry
                  $stmt = "SELECT * FROM verifypost WHERE user_id='".$_SESSION['ID']."' ";
                  // to run the connection with the statment that we wrote 
                  $result = mysqli_query($conn,$stmt);
                  $status = "";
                }
                  
              ?>
            <div class="row">
              <div class="titleText orangeColour left">My Posts</div>
              <div class="border border-2 p-3 my-2 borderColour rounded-3">
                <div class="table-responsive">
                  <table class="table table-borderless table-hover mediumText">
                    <thead class="fw-bold">
                      <tr>
                        <th>Date</th>
                        <th>Image</th>
                        <th>Missing Person Name</th>
                        <th>Status</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <?php 
                    // here to make a loop to view all the result and put them each one in a deffrent label
                    while($row = mysqli_fetch_assoc($result)){ ?>
                    <tbody class="align-middle mediumText">
                      <tr>
                          <td><?php echo $row['date_of_post'];?></td>
                          <td><img src="<?php echo $row['image'];?>" width="64" height="64" class="img-fluid"></td>
                          <td><?php echo $row['missing_person_first_name'];?> <?php echo $row['missing_person_last_name'];?></td>
                          <td><?php echo $row['status'];?></td>
                          <form id="viewpost" action="user_post_edit.php" method="post" role="form">
                           <input type="text" name="post_id" value="<?php echo $row['post_id'];?>" hidden></input>
                           <td><button type="submit" class="btn btnBlue text-white mx-2 px-4 smallText">Edit</button></td>
                          </form>
                          <form id="operations" action="Database/postoperations.php" method="post" role="form">
                            <input type="text" name="post_id" value="<?php echo $row['post_id'];?>" hidden></input>
                            
                          <td><button id="user_delete_post" name="user_delete_post" class="btn smallText btnRed text-white mx-2 px-4">Delete</button></td>
                          </form>
  
                      </tr>  
                      <?php } ?>                   
                    </tbody>
  
                  </table>
                </div>
                
              </div>
                
            </div>

            <!--Contact Messages-->
            <div class="row mt-4">
              <div class="titleText orangeColour left">Contact Website Messages</div>
              <div class="border border-2 p-3 my-2 borderColour rounded-3">
                <div class="table-responsive">
                  <table class="table table-borderless table-hover mediumText">
                    <?php
                    // here is the Database Connection
                      $conn = mysqli_connect('localhost','root','','findsuridb');
                      // Check if there any error in the connection with the database
                      if($conn->connect_error){
                        echo "$conn->connect_error";
                        die("Connection Failed : ". $conn->connect_error);
                      } else {
                        // create a var and put the sql statment inside of it ,and it's and basic select quarry
                        $stmt = "SELECT * from contactus where user_id = '".$_SESSION['ID']."' and contact_email != 'admin@findsuri.com' group by chat_id ";
                        // to run the connection with the statment that we wrote 
                        $result = mysqli_query($conn,$stmt);
                        }
                        
                    ?>
                
                    <thead class="fw-bold">
                      <tr>
                        <th>Date</th>
                        <th>Subject</th>
                        <th>Agent</th>
                        <th>Status</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody class="align-middle mediumText">
                      <tr>
                      <?php 
                      // here to make a loop to view all the result and put them each one in a deffrent label
                      while($row = mysqli_fetch_assoc($result)){ 
                        ?>
                            <td><?php echo $row['date_of_contact'];?></td>
                            <td><?php echo $row['contact_message'];?></td>
                            <td><?php echo $row['admin_id'];?></td>
                            <td><?php echo $row['status'];?></td>
                            <form id="replymessage" action="contact-us-reply.php" method="post" role="form">
                            <input type="text" name="contact_id" value="<?php echo $row['contact_id'];?>" hidden></input>
                              <td><button type="submit" class="btn btnBlue text-white px-4 py-2 smallText">Reply</button></td>
                            </form>
  
                      </tr>
                      <?php } ?>              
                    </tbody>
  
                  </table>
                </div>
                
              </div>
                
            </div>

              <!--My Profile-->
              <?php
                // here is the Database Connection
                  $conn = mysqli_connect('localhost','root','','findsuridb');
                  // Check if there any error in the connection with the database
                  if($conn->connect_error){
                    echo "$conn->connect_error";
                    die("Connection Failed : ". $conn->connect_error);
                  } else {
                    // create a var and put the sql statment inside of it ,and it's and basic select quarry
                    $stmt = "SELECT * from logintable where user_id = '".$_SESSION['ID']."' ";
                    // to run the connection with the statment that we wrote 
                    $result = mysqli_query($conn,$stmt);
                        
                    }
                    
                ?>
                <?php 
                    // here to make a loop to view all the result and put them each one in a deffrent label
                      while($row = mysqli_fetch_assoc($result)){ 
                        $stmt2 = "SELECT * from usertable where user_id = '".$_SESSION['ID']."' ";
                        // to run the connection with the statment that we wrote 
                        $result2 = mysqli_query($conn,$stmt2);
                        $userrow = mysqli_fetch_assoc($result2)?>
                      
        <div id="edituserprofilediv" class="hidden">
           <form id="edituserprofile" action="Database/usersoperations.php" method="post" role="form" onsubmit="return editprofile();">
            <div id="profilediv" class="row mt-4">
              <div class="titleText orangeColour left">My Profile</div>
                <div class="border border-2 p-3 my-2 borderColour rounded-3 bold left mediumText">
                   <div id="error-message" class="Error"></div>  

                  <div class="row mx-3 mt-4 mediumText">
                    <div class="col-lg-4 col-md-8 col-sm-10 ">

                      <p class=" d-inline">Userame: </p>
                      <input type="text" id="usernameedit" name="usernameedit" class="form-control d-inline px-2" value="<?php echo $row['username'];?>" disabled>
                
                    </div> 

                    <div class="col-lg-4 col-md-8 col-sm-10 mx-2 inputBlueBg">

                      <p class=" d-inline px-2">Email: </p>
                      <input type="text" id="emailedit" name="emailedit" class="form-control d-inline px-2" value="<?php echo $row['user_email'];?>">
                  
                    </div> 
                  </div>

                <div class="row mx-3 mt-4 mediumText">

                  <div class="col-lg-4 col-md-8 col-sm-10 inputBlueBg">
                      <p class="d-inline">First Name: </p>
                      <input type="text" id="firstnameedit" name="firstnameedit" placeholder="Not Set Yet" class=" form-control d-inline px-2" value="<?php echo $userrow['user_first_name'];?>">
                    </div>

                  <div class="col-lg-4 col-md-8 col-sm-10 mx-2 inputBlueBg">
                      <p class="d-inline">Last Name: </p>
                      <input type="text" id="lastnameedit" name="lastnameedit" placeholder="Not Set Yet" class="form-control d-inline px-2" value="<?php echo $userrow['user_last_name'];?>">
                    </div>
                  </div>

                <div class="row mx-3 mt-4">

                  <div class="col-lg-4 col-md-8 col-sm-10 inputBlueBg">
                      <p class=" d-inline">Password: </p>
                      <input type="text" id="passwordedit" name="passwordedit"  class="form-control d-inline px-2" value="<?php echo $row['password'];?>">
                    </div>  

                  <div class="col-lg-4 col-md-8 col-sm-10 mx-2 inputBlueBg">
                      <p class=" d-inline">Phone Number: </p>
                      <input type="text" id="phoneedit" name="phoneedit" placeholder="Not Set Yet" class="form-control d-inline px-2" value="<?php echo $userrow['user_phone'];?>">
                   </div>
                </div> 
                  
                    <!--Edit button for profile-->
                    <div class="col-lg-12 col-md-8 col-sm-10 right">

                      <button type="submit" id="edituserprofile" name="edituserprofile" class="btn smallText btnBlue text-white mx-5 px-4">Save</button>
                      <a id="ignoreedint" href="#" class="btn smallText btnRed text-white mx-5 px-4">Ignore Changes</a>
                      
                    </div> 
                  


                  </div>
                </div>
              </form>
    </div>
      <div id="showprofilediv" class="visible">
           <div id="profilediv" class="row mt-4">
              <div class="titleText orangeColour left">My Profile</div>
                <div class="border border-2 p-3 my-2 borderColour rounded-3 bold left mediumText">
                   <div class="row mx-3 mt-4 mediumText inputBlueBg">
                    <div class="col-lg-4 col-md-8 col-sm-10">

                      <p class=" d-inline">Userame: </p>
                      <p id="usernameedit" name="usernameedit" class="d-inline px-2"> <?php echo $row['username'];?></p>
                
                    </div> 

                    <div class="col-lg-4 col-md-8 col-sm-10 mx-2">

                      <p class=" d-inline">Email: </p>
                      <p id="usernameedit" name="usernameedit" class="d-inline px-2"> <?php echo $row['user_email'];?></p>
                  
                    </div> 
                  </div>
                 <div class="row mx-3 mt-4 mediumText">

                    <div class="col-lg-4 col-md-8 col-sm-10">
                      <p class="d-inline">First Name: </p>
                      <p id="usernameedit" name="usernameedit" class="d-inline px-2" > <?php echo $userrow['user_first_name'];?></p>
                    
                    </div>

                    <div class="col-lg-4 col-md-8 col-sm-10 mx-2">
                      <p class="d-inline">Last Name: </p>
                      <p id="usernameedit" name="usernameedit" class="d-inline px-2"> <?php echo $userrow['user_last_name'];?></p>
                     
                    </div>
                  </div>

                <div class="row mx-3 mt-4 mediumText">

                  <div class="col-lg-4 col-md-8 col-sm-10">
                      <p class=" d-inline" >Password: </p>
                      <p id="usernameedit" name="usernameedit" class="d-inline px-2"> 
                        <?php 
                          $getlength = strlen($row['password']);
                          $finallentgh = str_repeat("*", $getlength);
                          echo $finallentgh;?>
                        </p>
                  </div>  

                  <div class="col-lg-4 col-md-8 col-sm-10 mx-2">
                      <p class=" d-inline">Phone Number: </p>
                      <p id="usernameedit" name="usernameedit" class="d-inline px-2"> <?php echo $userrow['user_phone'];?></p>
                    
                   </div>
                </div> 
              
                
                <div class="col-lg-12 col-md-8 col-sm-10 right">

                 <a id="editprofilebtn" href="#" class="btn btnBlue text-white mx-3 px-4 smallText">Edit</a>
                      
                </div> 
            </div>
           <?php } ?>  
           </div>
       
      </div>
  
  </div>
</div>

  <!--Footer-->
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
      <script src="checkvali.js"></script>
      <script src="assets/lib/bootstrap.bundle.min.js"></script>
      <script src="assets/lib/popper.js"></script>
    

      <script>
      var div1 = document.getElementById('edituserprofilediv');
      var div2 = document.getElementById('showprofilediv');

      var btn1 = document.getElementById('editprofilebtn');
      var btn2 = document.getElementById('ignoreedint');

      btn1.onclick = function() { 
        div1.setAttribute('class', 'visible');
        div2.setAttribute('class', 'hidden');
      };

      btn2.onclick = function() { 
        div2.setAttribute('class', 'visible');
        div1.setAttribute('class', 'hidden');
      };
      </script>

      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>

</html>