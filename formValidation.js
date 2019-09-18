//form validation
function validateForm(){
    var firstName = document.registration.firstName.value;
    var lastName = document.registration.lastName.value;
    var password = document.registration.password.value;

    if(firstName == "" || firstName.length >= 20 && lastName == "" || lastName >= 20 ){
        alert('Name is invalid');
        return false;
    }else if(password == "" || password.length <= 4){
         alert('Password must be more than 4 characters');
        return false;
    }

}	