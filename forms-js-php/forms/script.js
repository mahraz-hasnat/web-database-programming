function validate()
{
    var fname = contactform.fname;
    var lname = contactform.lname;
    var email = contactform.email;
    var phn = contactform.phn;
    var pass = contactform.pass;
    var ad = contactform.add;
    var cntry = contactform.country;
    var gender = contactform.gender;
    var msg = contactform.msg;
    var regname = /\w+/;
    var regdigit= /[0-9]+/;
    let epattern = /[0-9-]+\@std.ewubd.edu/ ;

    if (!regname.test(fname)) 
    {
        alert("please enter a valid name. Text only");
        fname.focus;   
        return false;
    }
    if (!regname.test(lname)) 
    {
        alert("please enter a  name.");
        lname.focus;   
        return false;
    }
    /*if (!regdigit.test(phn)) 
    {
        alert("please enter a valid phone number . digits only");
        lname.focus;   
        return false;
    }*/

    if (epattern.test(email) == false) 
    {
        alert("please enter an valid email.");
        email.focus;   
        return false;
    }
    if (email.value.indexof("@",0 < 0)) 
    {
        alert("please enter an email.");
        email.focus;   
        return false;
    }
    if (email.value.indexof(".",0 < 0)) 
    {
        alert("please enter an email.");
        email.focus;   
        return false;
    }




}