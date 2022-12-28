function validate()
{
    var fname =  registerform.fname;
    var lname =  registerform.lname;
    var email =  registerform.email;
    var pass =  registerform.pass;
    var url =  registerform.url;
    var gender = registerform.gender;
    var phn = registerform.phnNo;
    var info = registerform.info

    if (fname.value=="") {
        alert("First Name field cannot be empty")
        fname.focus();
        return false;
    }
    if (lname.value=="") {
        alert(" last Name field cannot be empty")
        lname.focus();
        return false;
    }
    if (email.value=="") {
        alert("Email field cannot be empty")
        email.focus();
        return false;
    }
    if (email.value.indexof("@",0 <0 )) {
        alert("Enter a Valid email")
        email.focus();
        return false;
    }
    if (email.value.indexof(".",0 <0 )) {
        alert("Enter a Valid email")
        email.focus();
        return false;
    }
    if (gender.checked== false) {
        alert("Check your gender")
        gender.focus();
        return false;
    }


}