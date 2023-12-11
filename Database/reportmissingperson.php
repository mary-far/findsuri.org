<?php 
// Start New Session
    session_start();
    
    if(isset($_POST['report_missing_person']))
    {
            $con=mysqli_connect('localhost','root','','findsuridb');

            if(!$con)
            {
                die(' Please Check Your Connection'.mysqli_error($con));

            }else{

                // Create date format for date of birth to insert it to database   
                $dobday = $_POST['DOB-day'];
                $dobmonth = $_POST['DOB-month'];
                $dobyear = $_POST['DOB-year'];
                $dobdate = "$dobyear-$dobmonth-$dobday";
                // Create date format for date of disappearance to insert it to database   
                $dodday = $_POST['DOD-day'];
                $dodmonth = $_POST['DOD-month'];
                $dodyear = $_POST['DOD-year'];
                $doddate = "$dodyear-$dodmonth-$dodday";
                // Configure the uploaded file
                $file = $_FILES['FileUpload'];  
                $filename = $file['name'];
                $filepath = $file['tmp_name'];
                $dimgfile = '../upload/'.$filename;
                move_uploaded_file($filepath, $dimgfile);
                $finaliconpath = 'upload/'.$filename;

            // insert data into verifypost table 
                $stmt= $con->prepare("insert into verifypost(missing_person_first_name,missing_person_last_name,missing_person_translated_names,gender,date_of_birth,country,place,date_of_disappearance,country_of_disappearance,place_of_disappearance,missing_person_height,missing_person_weight,appearance,user_id,image) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)");
                $stmt->bind_param("ssssssssssiisis", $_POST['firstname'], $_POST['lastname'], $_POST['Translatedname'], $_POST['gender'], $dobdate, $_POST['CountryOrigin'], $_POST['PlaceOrigin'], $doddate, $_POST['COD'], $_POST['POD'], $_POST['Pheight'], $_POST['Pweight'], $_POST['appearance'], $_SESSION['ID'],$finaliconpath);
                $excute = $stmt->execute();
                $stmt->close();


                // insert poster data into posterinfo table
                $stmt= $con->prepare("insert into posterinfo(poster_firstname,poster_lastname,poster_translatedname,poster_relationship,poster_srelationship,poster_country_residence,poster_address,poster_phone,poster_aphone,poster_email,otherinfo,poster_id) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("sssssssssssi", $_POST['pfirstname'], $_POST['plastname'], $_POST['ptranslatedname'], $_POST['prelationship'], $_POST['psrelationship'], $_POST['pCountryResidence'], $_POST['paddress'], $_POST['phone'], $_POST['Aphone'], $_POST['email'], $_POST['otherinfo'], $_SESSION['ID']);
                $excute = $stmt->execute();
                $stmt->close();

                $con->close();

                if($_GET['lang']=="Ar"){
                    header("location: ../thankspageAr.php");
                  }else{
                    header("location: ../thankspage.php");
                  }
            
            }
        
    }
?>