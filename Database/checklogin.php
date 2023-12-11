<?php 
// Start New Session
    session_start();
    
// ================================== Login form ==================================
    if(isset($_POST['Login']))
    {
       if($_POST['email-login']!="" || $_POST['password-login']!="")
       {
            $con=mysqli_connect('localhost','root','','findsuridb');

            if(!$con)
            {
                die(' Please Check Your Connection'.mysqli_error($con));
            }else{
                
            }
            $query="select * from logintable where user_email='".$_POST['email-login']."' and password='".$_POST['password-login']."'";
            $result=mysqli_query($con,$query);
            if(mysqli_num_rows($result) == 1)
            {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['ID']= $row['user_id'];
                $_SESSION['User']= $row['username'];
                $_SESSION['Firstname']= $row['user_first_name'];
                $_SESSION['Lastname']= $row['user_last_name'];
                $_SESSION['Email']= $row['user_email'];
                $_SESSION['DateOfJoin']= $row['date_of_join'];
                
                if($row['isAdmin'] == '1'){    
                        $_SESSION['User_Type']= "Admin";
                        header("location: ../Admindashboard/admin-verify-posts.php");
                }else{
                        $_SESSION['User_Type']= "normaluser";
                        
                        if($_GET['lang']=="Ar"){
                            header("location: ../indexAr.php");
                          }else{
                            header("location: ../index.php");
                          }
                }
                
               
            }
            else
            {
                if($_GET['lang']=="Ar"){
                    header("location: ../signupAr.php?incorrect=البريد الالكتروني او كلمة المرور غير صحيحة");
                  }else{
                    header("location: ../signup.php?incorrect=Incorrect email or password");
                  }
                
            }
       }
    }



// ================================== Signup form ==================================
    if(isset($_POST['Signup']))
    {
       if($_POST['email-signup']!="" || $_POST['name-signup']!="" || $_POST['password-signup']!="" || $_POST['confrim-password-signup']!="")
       {
            $con=mysqli_connect('localhost','root','','findsuridb');

            if(!$con)
            {
                die(' Please Check Your Connection'.mysqli_error($con));
            }else{

            // check if user exist
            $stmtcheck = "select * from logintable where user_email = '".$_POST['email-signup']."' or username = '".$_POST['name-signup']."'";
            $result=mysqli_query($con,$stmtcheck);
            if(mysqli_num_rows($result) === 1)
            {
              header("location: ../signup.php?&exist=User already exist");
            }else{
            // if not exist create a new user
                $stmt= $con->prepare("insert into logintable(username,password,user_email) values(?, ?, ?)");
                $stmt->bind_param("sss", $_POST['name-signup'], $_POST['password-signup'], $_POST['email-signup']);
                $execval = $stmt->execute();
                $stmt->close();
                $stmt= $con->prepare("insert into usertable(user_first_name,user_last_name,user_phone) values('Not Set Yet','Not Set Yet','Not Set Yet')");
                $execval = $stmt->execute();
                $stmt->close();
                $con->close();
                $userfullname = $_POST['name-signup'];
                if($_GET['lang']=="Ar"){
                    header('location: ../welcomeAr.php?username= '.$userfullname.' ');         
                  }else{
                    header('location: ../welcome.php?username= '.$userfullname.' ');         
                  }             
            }
            
            }
       }
    }

?>