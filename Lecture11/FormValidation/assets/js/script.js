

function validateForm() {
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var email = document.getElementById("email").value;


    if(firstName == ''){
        //Showing error message to user
        document.getElementById("firstNameError").innerText = "First Name is required. Please put it before submitting.";
    }
    else{
        //Removing that error message
        document.getElementById("firstNameError").innerHTML = '';
    }


    if(lastName == ''){
        //Showing error message to user
        document.getElementById("lastNameError").innerText = "Last Name is required. Please put it before submitting.";
    }
    else{
        //Removing that error message
        document.getElementById("lastNameError").innerHTML = '';
    }

    if(email == ''){
        //Showing error message to user
        document.getElementById("emailError").innerText = "Email is required. Please put it before submitting.";
    }
    else{
        //Removing that error message
        document.getElementById("emailError").innerHTML = '';
    }


    if(!isValidEmail(email)){
        document.getElementById("emailError").innerHTML = 'Email is not valid. Please correct it';
    }
    else{
        document.getElementById("emailError").innerHTML = '';
    }


}


function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}