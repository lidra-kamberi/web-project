// Show Login/Register
var chf = document.getElementsByClassName('link-container');

for (var i = 0; i < chf.length; i++) {
    chf[i].addEventListener('click', function(event) {
        if (event.target.id == 'firstA') {
            changeForm(0);
        } else {
            changeForm(1);
        }
    })
}

function changeForm(param) {
    var divList = document.getElementsByClassName('forms');
    if (param == 0) {
        //show login
        divList[0].classList.remove('hidden');
        divList[0].classList.add('form-style');
        //hide register
        divList[1].classList.add('hidden');
        divList[1].classList.remove('form-style');
    } else if (param == 1) {
        //show register
        divList[1].classList.remove('hidden');
        divList[1].classList.add('form-style');
        //hide login
        divList[0].classList.add('hidden');
        divList[0].classList.remove('form-style');

    }
}
// Show Login/Register-end

// Login/Register Validation
function validate(param) {
    var inputList = document.getElementsByClassName('input');
    if (param == 0) {
        //login
        var usernameValue = inputList[0].value;
        var usernameFormat = /^[a-zA-Z0-9]([._-](?![._-])|[a-zA-Z0-9]){3,18}[a-zA-Z0-9]$/;

        var passwordValue = inputList[1].value;
        var passwordFormat = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;

        if (usernameValue == "" || passwordValue == "") {
            alert('Please fill out all of the fields!');
        } else {

            if (usernameValue.match(usernameFormat) && passwordValue.match(passwordFormat)) {
                alert('Log In Successful!');
            }

            if (usernameValue.match(usernameFormat)) {
                document.getElementById("div1").innerHTML = "";
            } else {
                document.getElementById("div1").innerHTML = "Enter the correct username format!";
                document.getElementById("div1").style.color = "Red";

            }

            if (passwordValue.match(passwordFormat)) {
                document.getElementById("div2").innerHTML = "";
            } else {
                document.getElementById("div2").innerHTML = "Enter the correct password format!";
                document.getElementById("div2").style.color = "Red";

            }

        }
    } else if (param == 1) {
        //register
        var emailValue = inputList[3].value;
        var emailFormat = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;

        var usernameValue = inputList[4].value;
        var usernameFormat = /^[a-zA-Z0-9]([._-](?![._-])|[a-zA-Z0-9]){3,18}[a-zA-Z0-9]$/;

        var passwordValue = inputList[5].value;
        var passwordFormat = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;

        var confirmPasswordValue = inputList[6].value;

        if (emailValue == "" || usernameValue == "" || passwordValue == "" || confirmPasswordValue == "") {
            alert('Please fill out all of the fields!');
        } else {
            if (emailValue.match(emailFormat) && usernameValue.match(usernameFormat) && passwordValue.match(passwordFormat) && confirmPasswordValue == passwordValue) {
                alert('Register Successful!');
            }

            if (emailValue.match(emailFormat)) {
                document.getElementById("div3").innerHTML = "";
            } else {
                document.getElementById("div3").innerHTML = "Enter the correct e-mail format!";
                document.getElementById("div3").style.color = "Red";

            }

            if (usernameValue.match(usernameFormat)) {
                document.getElementById("div4").innerHTML = "";
            } else {
                document.getElementById("div4").innerHTML = "Enter the correct username format!";
                document.getElementById("div4").style.color = "Red";

            }

            if (passwordValue.match(passwordFormat)) {
                document.getElementById("div5").innerHTML = "";
            } else {
                document.getElementById("div5").innerHTML = "Enter the correct password format!";
                document.getElementById("div5").style.color = "Red";

            }

            if (confirmPasswordValue == passwordValue) {
                document.getElementById("div6").innerHTML = "";
            } else {
                document.getElementById("div6").innerHTML = "Passwords do not match!";
                document.getElementById("div6").style.color = "Red";

            }
        }
    }
}

var elementList = document.getElementsByClassName('submit');

for (var i = 0; i < elementList.length; i++) {
    elementList[i].addEventListener('click', function(event) {
        if (event.target.value == 'Login') {
            validate(0);
        } else {
            validate(1);
        }
    })
}

// Login/Register Validation-end