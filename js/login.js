// JavaScript Document
//Do not allow empty field
function validateField(field, alertMsg)
{
    with (field)
    {
        if (value == null || value == "")
        {
            alert(alertMsg);
            return false;
        }

    }

}


//validate the form
function validateForm(thisform)
{
    var illegal = /[\(\)\<\>\,\;\:\\\"\[\]]/; //do not allow special character

    with (thisform)
    {

        if (validateField(email, "Please enter Email.") == false)
        {
            email.focus();
            return false;
            
        }
       
        else if (validateField(password, "Please enter your password.") == false)
        {
            password.focus();
            return false;
        }

    }
}

//validate the form
function validateUsername(thisform)
{
    with (thisform)
    {
        if (validateField(username, "Please your username.") == false)
        {
            username.focus();
            return false;
        }
    }

}

//validate Email
function validateEmail(thisform)
{

    var illegal = /[\(\)\<\>\,\;\:\\\"\[\]]/; //not allow special character
    var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/; //must include '@' and '.' and a character must exist between the '@' and '.'

    with (thisform)
    {
        if (validateField(email, "Please enter your email address.") == false)
        {
            email.focus();
            return false;
        }

        else if (!emailFilter.test(email.value))
        {
            email.focus();
            alert("The email address is invalid.");
            return false;
        }
    }

}