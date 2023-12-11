// ========================= Login Form Validation =========================

function checkvalidationlogin(){
    var email = document.getElementById("email-login");
    var password =  document.getElementById("password-login");
    var error = document.getElementById("error-message-login");
    var emailreg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var passreg = /^(?=.*[A-Z])(?=.*[a-z])(?=.{8,16})(?=.*[0-9]).*$/;
    var emailboolean = "";
    var passwordboolean = "";


       if(email.value != ""){
           if(email.value.match(emailreg)){
            emailboolean = true;
           }else{
            error.innerHTML = "invalid email address please enter valid one";  
            return false;
           }
       }
       if(password.value != ""){
        if(password.value.match(passreg)){
            passwordboolean = true;
           }else{
            error.innerHTML = "Password must be minimum 8 character with 1 uppercase and 1 lowercase";   
            return false;
         }
       }
      
        if(email.value == ""){
            error.innerHTML = "Error empty email";   
            return false;
        }
        if(password.value == ""){
            error.innerHTML = "Error empty password";
            return false;
        }
        if(emailboolean == true && passwordboolean== true){
            return true;
        }
    }

// ========================= Signup Form Validation =========================

    function checkvalidationsignup(){
        var email = document.getElementById("email-signup");
        var username = document.getElementById("name-signup");
        var password =  document.getElementById("password-signup");
        var passwordcon =  document.getElementById("confrim-password-signup");
        var error = document.getElementById("error-message");
        var emailreg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var passreg = /^(?=.*[A-Z])(?=.*[a-z])(?=.{8,16})(?=.*[0-9]).*$/;
        var emailboolean = "";
        var passwordboolean = "";
        if(email.value != ""){
            if(email.value.match(emailreg)){
             emailboolean = true;
            }else{
             error.innerHTML = "invalid email address please enter valid one";  
             return false;
            }
        }
        if(password.value != ""){
         if(password.value.match(passreg)){
             passwordboolean = true;
            }else{
             error.innerHTML = "Password must be minimum 8 character with 1 uppercase and 1 lowercase";   
             return false;
          }
        }
       
         if(email.value == ""){
             error.innerHTML = "Please enter your email";   
             return false;
         }
         if(username.value == ""){
            error.innerHTML = "Please enter your username";   
            return false;
        }
         if(password.value == ""){
             error.innerHTML = "Please enter your password";
             return false;
         }
         if(passwordcon.value != password.value){
            error.innerHTML = "Please confirm your password";
            return false;
         }
         if(emailboolean == true && passwordboolean == true && passwordcon.value == password.value){
             return true;
         }
        

   }    


// ========================= Create post Validation =========================

function reportPersonValidation(){

    var lastname = document.getElementById("lastname");
    var translatedname = document.getElementById("Translatedname");
    var firstname = document.getElementById("firstname");

    var dobDay = document.getElementById("DOB-day");
    var dobMonth = document.getElementById("DOB-month");
    var dobYear = document.getElementById("DOB-year");

    var dodDay = document.getElementById("DOD-day");
    var dodMonth = document.getElementById("DOD-month");
    var dodYear = document.getElementById("DOD-year");

    var height = document.getElementById("Pheight");
    var weight = document.getElementById("Pweight");

    var description = document.getElementById("appearance");

    var placeOD = document.getElementById("POD");

    var error = document.getElementById("error-message");

    
    var monthreg = /^((?!(01|02|03|04|05|06|07|08|09|10|11|12)).)*$/;
    var dayreg = /^((?!([1-31])).)*$/;

    if(lastname.value == ""){
        error.innerHTML = "Please enter a last name";   
        return false;
    }

    if(translatedname.value == ""){
        error.innerHTML = "Please enter a translated name";   
        return false;
    }

    if(firstname.value == ""){
        error.innerHTML = "Please enter a first name";   
        return false;
    }

    if(height.value == ""){
        error.innerHTML = "Please enter an estimated height";   
        return false;
    }

    if(weight.value == ""){
        error.innerHTML = "Please enter an estimated weight";   
        return false;
    }

    if(isNaN(height.value)){
        error.innerHTML = "Please enter digits only for a height";   
        return false;

    }
    
    if(isNaN(weight.value)){
        error.innerHTML = "Please enter digits only for a weight";   
        return false;

    }

    if(description.value == ""){
        error.innerHTML = "Please enter a description about the person";   
        return false;
    }

    if(placeOD.value == ""){
        error.innerHTML = "Please enter the place of disappearance";   
        return false;
    }


    if(dobMonth.value == "" || dobMonth.value.match(monthreg)){
         error.innerHTML = "Please enter a valid month ";  
         return false;
    }
    

    if(dobDay.value == "" || dobDay.value.match(dayreg)){
        error.innerHTML = "Please enter a valid day (between 1 - 31) ";  
        return false;
   }

    if(dobYear.value == "" || dobYear.value < 1900 || dobYear.value > 2022){
        error.innerHTML = "Please enter a year between 1900 and 2022 ";  
        return false;
    }



    if(dodMonth.value == "" || dodMonth.value.match(monthreg)){
        error.innerHTML = "Please enter a valid month ";  
        return false;
   }
   

   if(dodDay.value == "" || dodDay.value.match(dayreg)){
       error.innerHTML = "Please enter a valid day (between 1 - 31)";  
       return false;
  }

   if(dodYear.value == "" || dodYear.value < 1900 || dodYear.value > 2022){
    error.innerHTML = "Please enter a year between 1900 and 2022 ";  
    return false;
}


var plastname = document.getElementById("plastname");
var ptranslatedname = document.getElementById("ptranslatedname");
var pfirstname = document.getElementById("pfirstname");

var pRelationship = document.getElementById("prelationship");

var email = document.getElementById("email");

var emailreg = /^(?!(\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})).)+$/;

var phone = document.getElementById("phone");

var altPhone = document.getElementById("Aphone");
 
if(plastname.value == ""){
    error.innerHTML = "Please enter a last name";   
    return false;
}

if(ptranslatedname.value == ""){
    error.innerHTML = "Please enter a translated name";   
    return false;
}

if(pfirstname.value == ""){
    error.innerHTML = "Please enter a first name";   
    return false;
}

if(pRelationship.value == ""){
    error.innerHTML = "Please enter your relationship with the missing person";   
    return false;
}

if(phone.value== ""){
    error.innerHTML = "Please enter a phone number";   
    return false;
}

if(altPhone.value == ""){
    error.innerHTML = "Please enter an alternate phone number";   
    return false;
}

if(isNaN(phone.value)){
    error.innerHTML = "Please enter digits only for a phone number";   
    return false;

}

if(isNaN(altPhone.value)){
    error.innerHTML = "Please enter digits only for an alternate phone number";   
    return false;

}


if(email.value == "" || email.value.match(emailreg)){
    error.innerHTML = "Please enter a valid E-mail";  
    return false;
}

else{
    return true;
}
  
}


function editprofile(){
    var emailedit = document.getElementById("emailedit");
    var phoneedit = document.getElementById("phoneedit");
    var passwordedit = document.getElementById("passwordedit");
    var error = document.getElementById("error-message");
    var emailreg = /^((?!\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})).)+$/;
    var passreg = /^((?!(?=.*[A-Z])(?=.*[a-z])(?=.{8,16})(?=.*[0-9])).)*$/;
    var phonereg = /^((?!(?:(?:\+|00))\s*[1-9](?:[\s.-]*\d{2}){4}).)$/;


    if(emailedit.value == "" || emailedit.value.match(emailreg)){
        error.innerHTML = "Please enter a valid email";
        return false;
    }
    if(passwordedit.value == "" || passwordedit.value.match(passreg)){
        error.innerHTML = "Password must be minimum 8 character with 1 uppercase and 1 lowercase";
        return false;
    }
    if(isNaN(phoneedit.value) || phoneedit.value == "" || phoneedit.value.match(phonereg)
    || phoneedit.value.length > "14" || phoneedit.value.length < "13"){
        error.innerHTML = "Please enter a valid phone number";
        return false;
    }
    
    else{
        return true;
    }
}