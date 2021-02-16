// Contact Form Validation
function validate() {
    var inputList = document.getElementsByClassName('input');

    var fullNameValue = inputList[0].value;
    var fullNameFormat = /^[a-zA-Z]+ [a-zA-Z]+$/;

    var emailValue = inputList[1].value;
    var emailFormat = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;

    var commentValue = inputList[2].value;
    var commentFormat = /^([a-zA-Z0-9 `!@#$?.%\^&*()={}:;<>+'-]{4,241})*$/;


    if (fullNameValue == "" || emailValue == "" || commentValue == "") {
        alert('Please fill out all of the fields!');
        return false;
    } else {
        if (fullNameValue.match(fullNameFormat) && emailValue.match(emailFormat) && commentValue.match(commentFormat)) {
            alert('Your comment has been sent!');
            return true;
        }


        if (fullNameValue.match(fullNameFormat)) {
            document.getElementById("div1").innerHTML = "";

        } else {
            document.getElementById("div1").innerHTML = "Enter your Full Name!";
            document.getElementById("div1").style.color = "Red";

        }

        if (emailValue.match(emailFormat)) {
            document.getElementById("div2").innerHTML = "";

        } else {
            document.getElementById("div2").innerHTML = "Enter a valid E-mail Address!";
            document.getElementById("div2").style.color = "Red";
        }

        if (commentValue.match(commentFormat)) {
            document.getElementById("div3").innerHTML = "";

        } else {
            document.getElementById("div3").innerHTML = "Enter a valid comment (no more than 240 characters)!";
            document.getElementById("div3").style.color = "Red";
        }

        if (!(fullNameValue.match(fullNameFormat) && emailValue.match(emailFormat) && commentValue.match(commentFormat))) {
            return false;
        }
    }
}

// Contact Form Validation-end