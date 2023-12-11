<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<head>
  <link rel="icon" type="icon" href="images/icon.ico">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Findsuri- Report Missing Person</title>
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


  <header id="page-hero" class="site-header">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="  background-color: #0065A1;">

      <div class="container-fluid">

        <a class="navbar-brand" href="indexAr.php">
          <img src="images/logo.png " class="logo" alt="logo">
        </a>

        <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false"><span class="flag-icon flag-icon-us"> </span>
            Eng</a>
          <div class="dropdown-menu" aria-labelledby="dropdown">
            <a class="dropdown-item" href="#"> English</a>
            <a class="dropdown-item" href="report-missing-personAr.php"> العربية</a>

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
            <li class="nav-item dropdown mx">
              <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                role="button" aria-haspopup="true" aria-expanded="false"> Missing Center </a>
              <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink">
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

   <!--content for sign up-->
  <div class="container-fluid topMargin px-3">
    <div class="row g-3">

      <!--left side title and descriptions-->
      <div class="col-lg-5 col-md-11 col-sm-11 donationDescription">
        <div class="fixed">
          <div class="row p-5 pb-0 my-2 text-lg-right">
            <h1 data-aos="fade-up" 
                data-aos-duration="1000"
                data-aos-easing="ease-in-out"
                data-aos-mirror="true"
                data-aos-once="true"
                class="greyColour blurText biggerTitle">Missing<br>Center</h1>
          </div>

            <div class="row p-3 my-2 ">
              <h2 data-aos="fade-up" 
                  data-aos-duration="1500"
                  data-aos-easing="ease-in-out"
                  data-aos-mirror="true"
                  data-aos-once="true"
                  class="titleText orangeColour pt-3">Report a missing person </h2>
              <p  class="regtext text-light pt-1">If you wish to report a person as missing who has not previously been reported to FIND SURI, please complete the form below. 
                <br>In the event you wish to report several persons as missing, 
                you may <a class="orangeColour" href="index.php#page-nested1">Click here</a> 
                or email Find Suri or email us at: Suppor@findSuri.com 
              </p>
            </div>

            <div class="row p-3 my-2 pt-4 text-lg-right">
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
  
      <!--right side Report Person form-->
      <div class="col-lg-6 col-md-12 col-sm-12 donationForm">
  
        <!--Report person section-->
        <div id="ReportPersondiv">
          <div class="p-5 my-2 bg-white rounded-3">

            <!--Report Person form-->
            <form id="report_missing_person" action="Database/reportmissingperson.php" method="post" role="form" enctype="multipart/form-data" onsubmit="return reportPersonValidation();">
  
            
  
              <div class="border border-2 p-3 my-2 borderColour">

                 <div id="error-message" class="Error mediumText"></div>  

                <div class="form-group">
                  <label for="report_missing_person" class="orangeColour regtext">Data for Missing Person</label>
                </div>

                <div class="form-text form-group pt-3 mx-3">
                  
                  <div class="row mb-3">
                    <label for="lastname" class="col-sm-5 col-form-label mediumText greyColour">Last name: *</label>
                    <div class="col-sm-7 inputBlueBg">
                        <input type="text" class="form-control mediumText" id="lastname" name="lastname">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="Translatedname" class="col-sm-5 col-form-label mediumText greyColour">Translated name: *</label>
                    <div class="col-sm-7 inputBlueBg">
                        <input type="text" class="form-control mediumText" id="Translatedname" name="Translatedname">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="firstname" class="col-sm-5 col-form-label mediumText greyColour">First name: *</label>
                    <div class="col-sm-7 inputBlueBg">
                        <input type="text" class="form-control mediumText" id="firstname" name="firstname">
                    </div>
                  </div>
  
                  <div class="row mb-3 inputBlueBg">
                    <label for="gender" class="col-sm-5 col-form-label mediumText greyColour">Gender:</label>
                    <div class="col-sm-7 inputBlueBg">
                      
                      <select class=" form-select col-sm-7 mediumText greyColour text-center" id="gender" name="gender">
                        <option value="none" selected></option>
                        <option  value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">other</option>
                      </select>

                    </div>
                  </div>
  
                  <div class="row mb-3">
                    <label for="DOB-year" class="col-sm-5 col-form-label mediumText greyColour">Date of birth:</label>
                    <div class="col-sm-4 inputBlueBg pb-3">

                      <input type="text" class="form-control mediumText greyColour" id="DOB-year" name="DOB-year" placeholder="Year*">
                    </div>
                    <div class="col-sm-3 pb-3">
                      <p class="tinyText text-left mb-0 greyColour">(If unknown, leave blank)   
                      </p>
                    </div>
                  </div>
                   
                  <div class="row mb-3">
                    <label for="DOB-month" class="col-sm-5 col-form-label"></label>
                    <div class="col-sm-4 inputBlueBg pb-3">
                      <input type="text" class="form-control mediumText greyColour" id="DOB-month" name="DOB-month" placeholder="Month*">
                    </div>
                    <div class="col-sm-3 pb-3">
                      <p class="tinyText text-left mb-0 greyColour">(If unknown, leave blank)</p>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="DOB-day" class="col-sm-5 col-form-label" ></label>
                    <div class="col-sm-4 inputBlueBg pb-3">
                      <input type="text" class="form-control mediumText" id="DOB-day" name="DOB-day" placeholder="Day*">
                    </div>
                    <div class="col-sm-3 pb-3">
                      <p class="tinyText text-left mb-0 greyColour">(If unknown, leave blank)</p>
                    </div>
                  </div>

                  <div class="row mb-3 inputBlueBg">
                    <label for="CountryOrigin" class="col-sm-5 col-form-label mediumText greyColour" >Country of Origin:</label>
                    <div class="col-sm-7 inputBlueBg pb-3">
                      
                        <select class="form-select mediumText greyColour" id="CountryOrigin" name="CountryOrigin">
                        <option selected>None</option>
                          <?php
                          $con = mysqli_connect('localhost','root','','findsuridb');
                          $stmt = "SELECT * from countries";
                          $result = mysqli_query($con,$stmt);
                          while($row = mysqli_fetch_array($result)){ 
                          ?>
                          
                          <option value="<?php echo $row['country_name'];?>"><?php echo $row["country_name"];?></option>
                          <?php } ?>
                          
                         </select>

                      
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="PlaceOrigin" class="col-sm-5 col-form-label mediumText greyColour" >Place of Origin:</label>
                    <div class="col-sm-7 inputBlueBg pb-3">
                      <input type="text" class="form-control mediumText greyColour" id="PlaceOrigin" name="PlaceOrigin" placeholder="First choose country">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="DOD-year" class="col-sm-5 col-form-label mediumText greyColour">Date of disappearance:*</label>
                    <div class="col-sm-4 inputBlueBg pb-3">

                        <input type="text" class="form-control mediumText greyColour" id="DOD-year" name="DOD-year" placeholder="Year*">
                    </div>

                    <div class="col-sm-3 pb-3">
                    </div>
                   
                  </div>
                  <div class="row mb-3">
                    <label for="DOD-month" class="col-sm-5 col-form-label mediumText greyColour"></label>
                    <div class="col-sm-4 inputBlueBg pb-3">
                      <input type="text" class="form-control mediumText greyColour" id="DOD-month" name="DOD-month" placeholder="Month*">
                    </div>

                    <div class="col-sm-3 pb-3">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="DOD-day" class="col-sm-5 col-form-label mediumText greyColour" ></label>
                    <div class="col-sm-4 inputBlueBg pb-3">
                      <input type="text" class="form-control mediumText greyColour" id="DOD-day" name="DOD-day" placeholder="Day">
                    </div>

                    <div class="col-sm-3 pb-3">
                      <p class="tinyText text-left mb-0 greyColour">(If unknown, leave blank)</p>
                    </div>

                  </div>

                  <div class="row mb-3">
                    <label for="COD" class="col-sm-5 col-form-label mediumText greyColour" >Country of disappearance: *</label>
                    <div class="col-sm-7 inputBlueBg pb-3">
                      <select class="form-select inputBlueBg mediumText greyColour" id="COD" name="COD" style="background-color:#9EC6E9;">
                      <option selected>None</option>
                          <?php
                          $con = mysqli_connect('localhost','root','','findsuridb');
                          $stmt = "SELECT * from countries";
                          $result = mysqli_query($con,$stmt);
                          while($row = mysqli_fetch_array($result)){ 
                          ?>
                          
                          <option value="<?php echo $row['country_name'];?>"><?php echo $row["country_name"];?></option>
                          <?php } ?>
                          
                         </select>
                
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="POD" class="col-sm-5 col-form-label mediumText greyColour" >Place of disappearance: *</label>
                    <div class="col-sm-7 inputBlueBg pb-3">
                      <input type="text" class="form-control mediumText greyColour" id="POD" name="POD" placeholder="First choose country">
                
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="Pheight" class="col-sm-5 col-form-label mediumText greyColour" >Height of Person: </label>
                    <div class="col-sm-4 inputBlueBg pb-3">
                      <input type="text" class="form-control mediumText greyColour" id="Pheight" name="Pheight">
                     
                    </div>
                    <div class="col-sm-3 pb-3">
                      <span class="mediumText greyColour text-left "> (cm) </span>
                    
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="Pweight" class="col-sm-5 col-form-label mediumText greyColour" >Weight of Person: </label>
                    <div class="col-sm-4 inputBlueBg pb-3">
                      <input type="text" class="form-control" id="Pweight" name="Pweight" >
                     
                    </div>
                    <div class="col-sm-3 pb-3">
                      <span class="mediumText greyColour text-left"> (Kg) </span>
                    
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="appearance" class="col-sm-5 col-form-label mediumText greyColour" >Clothing worn and other 
                      additional information
                      about disappearance: </label>
                    <div class="col-sm-7 inputBlueBg pb-3">
                      <textarea rows = "5" cols = "60" class="form-control" id="appearance" name="appearance"
                      minlength="1" maxlength="1024"></textarea>
                     
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="photograph" class="col-sm-5 col-form-label mediumText greyColour" >
                      <b>Photograph of the person (or document, if available):</b> 
                      <br /><span class="smallText">(jpg, jpeg, gif, png, pdf,
                        doc, docx, txt.
                        Maximum 4MB) 
                      </span>
                    </label>
                    <div class="col-sm-7 pb-3">

                      <input type="button" for="FileUpload" id="fileuploadbtn" name="fileuploadbtn"  onclick="openfiledialog();" 
                        class="btn btnBlue text-white px-4 mt-5 fw-bold smallText" value="Browse">
                      <input type="file" id="FileUpload" name="FileUpload" accept="image/*" style="display: none"/>
                       
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="consent" class="col-sm-5 col-form-label" > </label>
                    <div class="col-sm-7 inputBlueBg pb-3">
                      
                      <label class="tinyText" for="consent">  <input type="checkbox" id="consent" name="consent" > I give consent for the photograph of the missing person reported herewith to be published on the FIND SURI webpage to allow the public to provide information. No additional personal data on the missing person-such as the name or date of birth-will be included when displaying the photograph. I, the missing person or our legal representatives may at any time request FIND SURI to remove the photograph. I will hold FIND SURI harmless of any legal liability or claim caused by publishing the photograph.</label>
                     
                    </div>
                  </div>
                </div>

                <div class="border-bottom border-3 p-3 my-2 borderColour"> </div>

                <div class="ReportMissingPersonform-text form-group">
                  <label for="ReportMissingPerson-form" class="orangeColour regtext">Your Information</label>
                </div>

                <div class="form-text form-group pt-3 mx-3">
                  
                  <div class="row mb-3">
                    <label for="lastname" class="col-sm-5 col-form-label mediumText greyColour">Last name: *</label>
                    <div class="col-sm-7 inputBlueBg">
                        <input type="text" class="form-control mediumText greyColour" id="plastname" name="plastname">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="Translatedname" class="col-sm-5 col-form-label mediumText greyColour">Translated name(s): *</label>
                    <div class="col-sm-7 inputBlueBg">
                        <input type="text" class="form-control mediumText greyColour" id="ptranslatedname" name="ptranslatedname">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="name-signup" class="col-sm-5 col-form-label mediumText greyColour">First name: *</label>
                    <div class="col-sm-7 inputBlueBg">
                        <input type="text" class="form-control mediumText greyColour" id="pfirstname" name="pfirstname">
                    </div>
                  </div>
  
                  <div class="row mb-3">
                    <label for="relationship" class="col-sm-5 col-form-label mediumText greyColour">Relationship with the missing person:</label>
                    <div class="col-sm-7 inputBlueBg">
                      <input type="text" class="form-control mediumText greyColour" id="prelationship" name="prelationship">

                    </div>
                  </div>
  
                  <div class="row mb-3">
                    <label for="srelationship" class="col-sm-5 col-form-label mediumText greyColour">Please specify the relationship:</label>
                    <div class="col-sm-7 inputBlueBg pb-3">

                      <input type="text" class="form-control mediumText greyColour" id="psrelationship" name="psrelationship">
                    </div>
                   
                  </div>
                   
                  

                  <div class="row mb-3 inputBlueBg">
                    <label for="CountryResidence" class="col-sm-5 col-form-label mediumText greyColour" >Country of Residence:*</label>
                    <div class="col-sm-7 pb-3">
                      <select class="form-select mediumText greyColour" id="pCountryResidence" name="pCountryResidence">
                      <option selected>None</option>
                          <?php
                          $con = mysqli_connect('localhost','root','','findsuridb');
                          $stmt = "SELECT * from countries";
                          $result = mysqli_query($con,$stmt);
                          while($row = mysqli_fetch_array($result)){ 
                          ?>
                          
                          <option value="<?php echo $row['country_name'];?>"><?php echo $row["country_name"];?></option>
                          <?php } ?>
                         </select>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="address" class="col-sm-5 col-form-label mediumText greyColour" >Address of Residence:</label>
                    <div class="col-sm-7 inputBlueBg pb-3">
                      <input type="text" class="form-control mediumText greyColour" id="paddress" name="paddress">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="phone" class="col-sm-5 col-form-label mediumText greyColour" >Phone:**</label>
                    <div class="col-sm-4 inputBlueBg pb-3">
                      <input type="text" class="form-control mediumText greyColour" id="phone" name="phone">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Aphone" class="col-sm-5 col-form-label mediumText greyColour" >Alternative Phone:**</label>
                    <div class="col-sm-4 inputBlueBg pb-3">
                      <input type="text" class="form-control mediumText greyColour" id="Aphone" name="Aphone">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="email" class="col-sm-5 col-form-label mediumText greyColour" >E-mail:**</label>
                    <div class="col-sm-4 inputBlueBg pb-3">
                      <input type="email" class="form-control mediumText greyColour" id="email" name="email">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="otherInfo" class="col-sm-5 col-form-label mediumText greyColour" >Other Information: </label>
                    <div class="col-sm-7 inputBlueBg pb-3">
                      <textarea rows = "5" cols = "60" class="form-control mediumText greyColour" id="otherinfo" name="otherinfo" 
                      minlength="1" maxlength="1024"></textarea>
                     
                    </div>
                  </div>
                 
                  <div class="row mb-3">
                    <label for="consent" class="col-sm-5 col-form-label " > </label>
                    <div class="col-sm-7 inputBlueBg pb-3">
                      
                      <label class="tinyText greyColour" for="consent">  <input type="checkbox" id="pconsent" name="pconsent" > I agree that FIND SURI may process the above information for purposes of investigating the fate and whereabouts of the reported missing person.</label>
                     
                    </div>
                  </div>
                </div>
                <div class="border-bottom border-3 p-3 my-2 borderColour"> </div>

                <div class="Verification-text form-group">
                  <label for="Verification-form" class="orangeColour regtext">Verification</label>
                </div>

                <div class="form-text form-group pt-3 mx-3">
                  
                  <div class="row mb-3">
                    <label for="lastname" class="col-sm-5 col-form-label mediumText greyColour">Please Verify Yourself: </label>
                    <div class="col-sm-4 inputBlueBg pb-3 smallText">
                      <label class="consent-text pt-3" for="consent">  
                      <input class=" pt-3 " type="checkbox" id="verifyconsent" name="verifyconsent" > I'm not a robot</label>
                    </div>
                  </div>
                  <div class="text-center mt-5">
                    <button type="submit" id="report_missing_person" name="report_missing_person" 
                      class="btn btnBlue text-white px-4 fw-bold small-text">Send Missing Person Data Form</button>
                  </div>
                </div>  
                <div class="border-bottom border-3 p-3 my-2 borderColour "> </div>
                <p class="greyColour tinyText"><b>* - mandatory fields</b></p>
                <p class="greyColour tinyText"><b>** - Please fill at least one of these fields</b></p>
              </div>
  
            </form>
  
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
              <a class="text-light px-2 text-decoration-none " target="_blank" href="#">
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
  <script src="otherjs.js"></script>
  <script src="assets/lib/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  
</body>

</html> 