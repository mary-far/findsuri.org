<?php 
// Start New Session
    session_start();
    
    if(isset($_POST['admin_ignore_post']))
    {
        $con=mysqli_connect('localhost','root','','findsuridb');

        if(!$con)
        {
            die(' Please Check Your Connection'.mysqli_error($con));
        }else{

        $stmt = "DELETE FROM verifypost WHERE post_id='".$_POST['post_id']."' ";
        $result = mysqli_query($con,$stmt);
        header('location: ../Admindashboard/admin-verify-posts.php'); 
        }
    }

    if(isset($_POST['admin_delete_post']))
    {
        $con=mysqli_connect('localhost','root','','findsuridb');

        if(!$con)
        {
            die(' Please Check Your Connection'.mysqli_error($con));
        }else{

        $stmt = "DELETE FROM verifypost WHERE post_id='".$_POST['post_id']."' ";
        $result = mysqli_query($con,$stmt);
        header('location: ../Admindashboard/admin-verified-posts.php'); 
        }
    }

    if(isset($_POST['admin_verify_post']))
    {
        $con=mysqli_connect('localhost','root','','findsuridb');

            if(!$con)
            {
                die(' Please Check Your Connection'.mysqli_error($con));
            }else{

            // get the informations of the post
            $stmt = "SELECT * from verifypost where post_id='".$_POST['post_id']."' ";
            $result = mysqli_query($con,$stmt);
            while($row = mysqli_fetch_assoc($result)){
            //Add the post to verifiedpost table
            session_start();
            $id= $row['post_id'];
            }
            $status = "Verified";
            $stmtu = $con->prepare("UPDATE verifypost SET status=? ,admin_id=? WHERE post_id=$id");
            $stmtu->bind_param("ss", $status , $_SESSION['User']);
            $execval = $stmtu->execute();
            $con->close();
			
            header('location: ../Admindashboard/admin-verify-posts.php'); 
        }
    }


    if(isset($_POST['user_delete_post']))
    {
        $con=mysqli_connect('localhost','root','','findsuridb');

        if(!$con)
        {
            die(' Please Check Your Connection'.mysqli_error($con));
        }else{

        $stmt = "DELETE FROM verifypost WHERE post_id='".$_POST['post_id']."' ";
        $result = mysqli_query($con,$stmt);
        header('location: ../user-dashboard.php');
        }
    }


    if(isset($_POST['admin_edit_post']))
    {
        $con=mysqli_connect('localhost','root','','findsuridb');

        if(!$con)
        {
            die(' Please Check Your Connection'.mysqli_error($con));
        }else{

        $stmt = $con->prepare("UPDATE verifypost SET missing_person_first_name=?,missing_person_last_name=?,missing_person_translated_names=?,date_of_birth=?,country=?,place=?,date_of_disappearance=?,country_of_disappearance=?,place_of_disappearance=?,missing_person_height=?,missing_person_weight=?,appearance=? WHERE post_id='".$_POST['post_id']."'");
        $stmt->bind_param("sssssssssiis", $_POST['mfirstnameedit'],$_POST['mlastnameedit'],$_POST['mtranlatededit'],$_POST['datebirthedit'],$_POST['countryedit'],$_POST['placeedit'],$_POST['dateDedit'],$_POST['countryDedit'],$_POST['placeDedit'],$_POST['heightedit'],$_POST['weightedit'],$_POST['appearanceedit']);
        $execute = $stmt->execute();
        $stmt->close();
        $con->close();

        header('location: ../Admindashboard/admin-verified-posts.php'); 
        }
    }

    if(isset($_POST['admin_post_founded']))
    {
        $con=mysqli_connect('localhost','root','','findsuridb');

        if(!$con)
        {
            die(' Please Check Your Connection'.mysqli_error($con));
        }else{

        $stmt = $con->prepare("UPDATE verifypost SET status='Founded' WHERE post_id='".$_POST['post_id']."'");
        $execute = $stmt->execute();
        $stmt->close();
        $con->close();

        header('location: ../Admindashboard/admin-verified-posts.php'); 
        }
    }

    if(isset($_POST['admin_archive_post']))
    {
        $con=mysqli_connect('localhost','root','','findsuridb');

        if(!$con)
        {
            die(' Please Check Your Connection'.mysqli_error($con));
        }else{

        $stmt = $con->prepare("UPDATE verifypost SET status='Archived' ,admin_id='".$_SESSION['User']."' WHERE post_id='".$_POST['post_id']."'");
        $execute = $stmt->execute();
        $stmt->close();
        $con->close();

        header('location: ../Admindashboard/admin-verified-posts.php'); 
        }
    }

    if(isset($_POST['user_edit_post']))
    {
        $con=mysqli_connect('localhost','root','','findsuridb');

        if(!$con)
        {
            die(' Please Check Your Connection'.mysqli_error($con));
        }else{

        $stmt = $con->prepare("UPDATE verifypost SET missing_person_first_name=?,missing_person_last_name=?,missing_person_translated_names=?,date_of_birth=?,country=?,place=?,date_of_disappearance=?,country_of_disappearance=?,place_of_disappearance=?,missing_person_height=?,missing_person_weight=?,appearance=? WHERE post_id='".$_POST['post_id']."'");
        $stmt->bind_param("sssssssssiis", $_POST['mfirstnameedit'],$_POST['mlastnameedit'],$_POST['mtranlatededit'],$_POST['datebirthedit'],$_POST['countryedit'],$_POST['placeedit'],$_POST['dateDedit'],$_POST['countryDedit'],$_POST['placeDedit'],$_POST['heightedit'],$_POST['weightedit'],$_POST['appearanceedit']);
        $execute = $stmt->execute();
        $stmt->close();
        $con->close();

        header('location: ../user-dashboard.php'); 
        }
    }
    
?>