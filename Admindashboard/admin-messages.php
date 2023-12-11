<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<head>
  <link rel="icon" type="icon" href="../images/icon.ico">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Findsuri Admin Dashboard</title>
  <meta name="keyword" content="Findsuri, missing person, syrian">
  </meta>
  <script defer src="../assets/lib/fontawesome-all.min.js"></script>
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../styles/admin.css">
  <link rel="stylesheet" href="../styles/common.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body body data-spy="scroll" data-target=".site-nav" data-offset="50" class="d-flex flex-column min-vh-100">


  <!--header-->
  <header id="page-hero" class="site-header">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="  background-color: #0065A1;">

      <div class="container-fluid">

        <a class="navbar-brand" href="../index.php">
          <img src="../images/logo.png " class="logo" alt="logo">
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
                <a class="nav-link text-light" href="../index.php">Home</a>
              </li>
              <li class="nav-item nlink mx-2">
                <a class="nav-link text-light" href="../about.php">About Us</a>
              </li>
              <li class="nav-item nlink mx-2">
                <a class="nav-link text-light" href="../donation.php">Donate</a>
              </li>
              <li class="nav-item dropdown mx-2">
                <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                  role="button" aria-haspopup="true" aria-expanded="false"> Missing Center </a>
                <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item " href="../report-missing-person.php"><b>Report Missing Person</b></a></li>
                  <li><a class="dropdown-item " href="../missing-persons-inquiry.php"><b>Missing Person inquiry</b></a></li>
  
                </ul>
              </li>
              <?php 
            session_start();
            if(isset($_SESSION['User'])) {
             echo "<li class='nav-item dropdown mx-2'>";
             echo " <a class='nav-link text-light dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown'
              role='button' aria-haspopup='true'  aria-expanded='false'> " . $_SESSION['User'] . " </a>";
             echo " <ul class='dropdown-menu text-center' style='right: 0; left: auto;' aria-labelledby='navbarDropdownMenuLink'>";
             echo "<li><a class='dropdown-item' href='../user-dashboard.php'><b>User Dashboard</b></a></li>";
             echo "<li><a class='dropdown-item' href='../Database/Logout.php'><b>Logout</b></a></li>";
             echo "</ul>";
            }?>

  

          </ul>
        </div>

      


      </div>
    </nav>
  </header>

  <!--title for admin-->
  <div class="container-fluid topMargin px-3">
    <div class="row g-3">

      <div class="col-lg-5 col-md-11 col-sm-11 description">
        <div class="row p-5 my-2 text-lg-right">
          <h1 data-aos="fade-right" 
              data-aos-duration="1500"
              data-aos-easing="ease-in-out"
              data-aos-mirror="true"
              data-aos-once="false"
              class="greyColour biggerTitle blurText">Admin<br> Dashboard</h1>
        </div>
      </div>
    </div>
  </div>

  <!--content for admin-->
  <div class="container-fluid px-3 ">

      <div class="row text-center">

        <div class="col-lg-11 col-md-11 col-sm-11 adminContent mx-3">
  
          <div class="p-5 my-2 bg-white rounded-3">

            <!--Nav links for admin dashboard-->
            <div class="row">
              <ul class="list-inline text-center">
                <li class="list-inline-item mx-3 regtext">
                  <a href="./admin-verify-posts.php" class="blueColour noneLine ">Pending Posts</a>
                </li>
                <li class="list-inline-item mx-3 regtext">
                  <a href="./admin-verified-posts.php" class="blueColour noneLine">Verified Posts</a> 
                </li>
                <li class="list-inline-item mx-3 regtext"> 
                  <a href="./admin-founded-posts.php" class="blueColour noneLine">Closed Posts</a>
                </li>
                <li class="list-inline-item mx-3 regtext">
                  <a href="./admin-archived-posts.php" class="blueColour noneLine">Archived Posts</a>
                </li>
                <li class="list-inline-item mx-3 regtext">
                  <a href="./admin-users.php" class="blueColour noneLine">Users</a>
                </li>
                <li class="list-inline-item mx-3 regtext">
                  <a href="#" class="orangeColour">Messages</a>
                </li>
              </ul>
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
                  $stmt = "SELECT * from contactus where contact_email != 'admin@findsuri.com' group by chat_id";
                  // to run the connection with the statment that we wrote 
                  $result = mysqli_query($conn,$stmt);
                      
                }
                  
              ?>
            <!--table for messages-->
            <div class="row">
              <div class="border border-2 p-3 my-2 borderColour rounded-3">
                <div class="table-responsive">
                  <table class="table table-borderless table-hover mediumText">
                    <thead class="fw-bold">
                      <tr>
                        <th>Date</th>
                        <th>Subject</th>
                        <th>User's Name</th>
                        <th>User's Email</th>
                        <th>Full Name</th>
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
                      <?php
                      if($row['user_id']!="0"){
                        $stmtname = "SELECT * from logintable where user_id = '".$row['user_id']."'";
                        $resultname = mysqli_query($conn,$stmtname);
                        while($rowname = mysqli_fetch_assoc($resultname)){ 
                        $username= $rowname['username'];
                        }
                        }else{
                          $username= "Not a User";
                        }
                        ?>
                          <td><?php echo $row['date_of_contact'];?></td>
                          <td><?php echo $row['contact_message'];?></td>
                          <td><?php echo $username;?></td>
                          <td><?php echo $row['contact_email'];?></td>
                          <td><?php echo $row['contact_fullname'];?></td>
                          <td><?php echo $row['status'];?></td>
                          <?php
                          if($username == "Not a User"){ ?>

                          <form id="deletemessage" action="admin_post_view.php" method="post" role="form">
                           <input type="text" name="contact_id" value="<?php echo $row['contact_id'];?>" hidden></input>
                            <td><button type="submit" class="btn btnRed text-white mx-2">Delete</button></td>
                          </form>
                          <?php 
                          }else{ ?>
                          <form id="deletemessage" action="admin_post_view.php" method="post" role="form">
                           <input type="text" name="contact_id" value="<?php echo $row['contact_id'];?>" hidden></input>
                            <td><button type="submit" class="btn btnRed text-white mx-2 ">Delete</button></td>
                          </form>
                          <form id="replymessage" action="../contact-us-reply.php" method="post" role="form">
                           <input type="text" name="contact_id" value="<?php echo $row['contact_id'];?>" hidden></input>
                            <td><button type="submit" class="btn btnBlue text-white mx-2 px-3">Reply</button></td>
                          </form>
                          <?php } ?>
                      </tr>          
                       
                  </tbody>
                    
                   <?php } ?>    
                  </table>
                </div>
                
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
            <img src="../images/logo.png" class="img-fluid w-50 " alt="main logo" /><br />
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
                  <img src="../images/ontario.svg" class="w-75 img-fluid" alt="ontario" />
                </div>
                <div class="col pt-1">
                  <img src="../images/canada.svg" class="w-75 img-fluid" alt="ontario" />
                </div>
              </div>
      </section>
      <section class="layout-social container-fluid vertical-padding col-sm-5 col-md-5 col-lg-11">
        <div class="row text-start smallText">

          <div class="col-lg-2">
            <a href="../index.php" class="text-decoration-none">
              <p class="text-light text-inline">Home</p>
            </a>

          </div>
          <div class="col-lg-2">
              <a href="../about.php" class="text-decoration-none">
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

  
   



      <script src="../assets/lib/jquery.min.js"></script>

      <script src="../assets/lib/bootstrap.bundle.min.js"></script>
      <script src="../assets/lib/popper.js"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>

</html>