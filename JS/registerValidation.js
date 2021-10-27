
var getDetails = function(form){
    let full_name, email_state, password_state, contact_state;
    let fullName = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let country = document.getElementById("country").value;
    let city = document.getElementById("city").value;
    let contact = document.getElementById("phone").value;
    let password = document.getElementById("password").value;

    var regName = /(^[A-Za-z]{3,16})([ ]{0,1})([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})/;
    var regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,10})+$/;
    var regPass = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/;
    var regPhone = /\+?\d{6,15}$/;
    
    
    if (!regName.test(fullName)){
        alert("Please enter your full name correctly. Please do not use special characters or numbers.");
        full_name = false;
        return false;
    }else{
        full_name = true;
    }

    if (!regEmail.test(email)){
        alert("Please enter your phone email correctly.");
        email_state = false;
        return false;
    }else{
        email_state = true;
    }

    if (!regPass.test(password)){
        alert("Please enter your strong password at least 1 capital,\nspecial character and number. \nPlease do not use only character\nor numbers.");
        password_state = false;
        return false;
    }else{
        password_state = true;
    }

    if (!regPhone.test(contact)){
        alert("Please enter your phone number properly\nPhone numbers can start with a +, and must not have more than 15 digits.\nPlease do not indclude delimeters like - or spaces */.");
        contact_state = false;
        return false;
    }else{
        contact_state = true;
    }


   
    

    

    let finalSate = full_name && email_state && password_state && contact_state;

    if (!finalSate){
        return false
    }else{
        localStorage.setItem('fullName', fullName);
        localStorage.setItem('email', email);
        localStorage.setItem('country', country);
        localStorage.setItem('city', city);
        localStorage.setItem('contact', contact);
        localStorage.setItem('password', password);
        window.location.href = "registerprocess.php";
    }

}