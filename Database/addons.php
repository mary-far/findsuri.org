<?php
session_start();
// =============================== Donation form ===============================
// if button "contact_us" pressed run -->
if (isset($_POST["contact_us"])) {
  // check connection
  $con=mysqli_connect('localhost','root','','findsuridb');

    if(!$con){
      die(' Please Check Your Connection'.mysqli_error($con));
    }else{
      // if the user is logged in then insert with user information if not don't insert the id because it's empty
      if(isset($_SESSION['User'])) {
        $stmt= $con->prepare("insert into contactus(contact_email,contact_fullname,contact_message,user_id) values(?, ?, ?, ?)");
        $stmt->bind_param("sssi", $_POST['con_email'], $_POST['con_fullname'], $_POST['con_message'], $_SESSION['ID']);
        $execval = $stmt->execute();
      }else{
        $stmt= $con->prepare("insert into contactus(contact_email,contact_fullname,contact_message) values(?, ?, ?)");
        $stmt->bind_param("sss", $_POST['con_email'], $_POST['con_fullname'], $_POST['con_message']);
        $execval = $stmt->execute();
      }    
      $stmt->close();
      $con->close();
      if($_GET['lang']=="Ar"){
        header("location: ../indexAr.php");
      }else{
        header("location: ../index.php");
      }
     }
  }

// =============================== Donation form ===============================
// if button "donation_form" pressed run -->
  if (isset($_POST["donation_form"])) {
    //check if the monthly checkbox checked or not
    if(isset($_POST['monthly'])){
      $subscribed = "1";
    }else{
      $subscribed = "0";
    }
    // check the connection
    $con=mysqli_connect('localhost','root','','findsuridb');
      if(!$con){
        die(' Please Check Your Connection'.mysqli_error($con));
      }else{
        // insert the donation information to the donation table
        $stmt= $con->prepare("insert into donation(amount,payment_type,card_number,security_code,expriation_month,expriation_year,name_on_card,user_id,subscribed) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiisisii", $_POST['paychose'], $_POST['paymentType'], $_POST['cardNumber'], $_POST['securityCode'], $_POST['monthselect'], $_POST['yearselect'], $_POST['NameOnCard'], $_SESSION['ID'], $subscribed);
        $execval = $stmt->execute();
        $stmt->close();
        $con->close();
        if($_GET['lang']=="Ar"){
          header("location: ../donationAr.php");
        }else{
          header("location: ../donation.php");
        }
        
      }
    }

// =============================== admin reply to user message ===============================
// if button "admin_reply_message" pressed run -->
  if (isset($_POST["admin_reply_message"])) {
   // check the connection
    $con=mysqli_connect('localhost','root','','findsuridb');
      // if connection field
      if(!$con){
        // die
        die(' Please Check Your Connection'.mysqli_error($con));
      }else{
          // make new Strings for the admin name and admin email to insert it to the table 
          $admin = "Admin";
          $adminemail = "admin@findsuri.com";
          // update the status and chat_id for the selected message by getting the contact_id from contact-us-reply.php
          $stmt = $con->prepare("UPDATE contactus SET status='Replied' ,chat_id='".$_POST['contact_id']."' 
          ,admin_id ='".$_SESSION['User']."'
          WHERE contact_id='".$_POST['contact_id']."'");
          // excute the update statment 
          $execute = $stmt->execute();
          // close the update statment 
          $stmt->close();
          // insert the admin reply to the table with the specific admin name and email 
          $stmt= $con->prepare("insert into contactus(contact_email,contact_fullname,contact_message,user_id,admin_id,chat_id) values(?, ?, ?, ?, ?, ?)");
          $stmt->bind_param("sssisi", $adminemail, $admin, $_POST['replyinput'], $_POST['user_id'], $_SESSION['User'], $_POST['contact_id']);
          // excute the insert statment
          $execval = $stmt->execute();
          // close insert statment
          $stmt->close();
          // close connction 
          $con->close();
          // go to admin-messages.php
         header("location: ../Admindashboard/admin-messages.php");
       }
    }

// =============================== user reply to admin message ===============================

// if button "user_reply_message" pressed run -->
    if (isset($_POST["user_reply_message"])) {
      // check the connection
      $con=mysqli_connect('localhost','root','','findsuridb');
       // if connection field 
        if(!$con){
          // die
          die(' Please Check Your Connection'.mysqli_error($con));
        }else{
            // update the status and chat_id for the selected message by getting the contact_id from contact-us-reply.php
            $stmt = $con->prepare("UPDATE contactus SET status='Wait for Reply' ,chat_id='".$_POST['contact_id']."' WHERE contact_id='".$_POST['contact_id']."'");
            // excute the update statment 
            $execute = $stmt->execute();
            // close the update statment 
            $stmt->close();
            // insert the new reply with information that got from contact-us-reply.php
            $stmt= $con->prepare("insert into contactus(contact_email,contact_fullname,contact_message,user_id,chat_id) values(?, ?, ?, ?, ?)");
            $stmt->bind_param("sssii", $_POST['contact_email'], $_POST['contact_fullname'], $_POST['replyinput'], $_POST['user_id'], $_POST['contact_id']);
            // excute the insert statment 
            $execval = $stmt->execute();
            // close the insert statment 
            $stmt->close();
            // close the connection 
            $con->close();
            // go to user-dashboard.php
          header("location: ../user-dashboard.php");
         }
      }
  
?>