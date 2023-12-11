<?php 
// Start New Session
    session_start();

// ================================== Delete user ==================================
    if(isset($_POST['admin_delete_user']))
    {
        $con=mysqli_connect('localhost','root','','findsuridb');

        if(!$con)
        {
            die(' Please Check Your Connection'.mysqli_error($con));
        }else{

        $stmt = "DELETE FROM logintable WHERE user_id='".$_POST['user_id']."' ";
        $result = mysqli_query($con,$stmt);
        header('location: ../Admindashboard/admin-users.php'); 
        }
    }

// ================================== Edit User ==================================
    if(isset($_POST['edituserprofile']))
    {
        $con=mysqli_connect('localhost','root','','findsuridb');

        if(!$con)
        {
            die(' Please Check Your Connection'.mysqli_error($con));
        }else{

        $stmt = $con->prepare("UPDATE usertable SET user_first_name=? ,user_last_name=? ,user_phone=? WHERE user_id='".$_SESSION['ID']."'");
        $stmt->bind_param("sss", $_POST['firstnameedit'],$_POST['lastnameedit'],$_POST['phoneedit']);
        $execute = $stmt->execute();
        $stmt->close();

        $stmt = $con->prepare("UPDATE logintable SET user_email=? ,password=? WHERE user_id='".$_SESSION['ID']."'");
        $stmt->bind_param("ss", $_POST['emailedit'],$_POST['passwordedit']);
        $execute = $stmt->execute();
        $stmt->close();
        $con->close();

        header('location: ../user-dashboard.php#edituserprofilediv'); 
        }
    }
?>