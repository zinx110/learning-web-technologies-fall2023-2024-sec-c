var emailError = true;

function validate() {
    let email = document.getElementById("email").value;
    console.log(email, emailError);
    if (emailError || !email) {
        document.getElementById("error").innerHTML =
            "Please choose a unique email address first!";
        return;
    }
    let name = document.getElementById("name").value;
    let phone = document.getElementById("phone").value;
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirmPassword").value;
    document.getElementById("error").innerHTML = "";
    let error = "";
    if (!name) {
        error += "Please enter name <br>";
    }
    if (!phone) {
        error += "Please enter phone <br>";
    }

    if (!password) {
        error += "Please enter password <br>";
    }
    if (!confirmPassword) {
        error += "Please enter confirm your password <br>";
    }
    if (confirmPassword && password && confirmPassword !== password) {
        error += "Passwords did not match <br>";
    }
    if (error) {
        document.getElementById("error").innerHTML = error;
    } else {
        register(name, phone, password, email);
    }
}

function register(name, phone, password, email) {
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controllers/registerControl.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    let data = {
        name: name,
        phone: phone,
        email: email,
        password: password,
    };
    let dataToSend = JSON.stringify(data);

    xhttp.send("data=" + dataToSend);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            let response = JSON.parse(this.responseText);
            if (response.success) {
                window.location.replace("login.php");
            }
            if (response.error) {
                document.getElementById("error").innerHTML = response.error;
            }
        }
    };
}

function checkMail() {
    let email = document.getElementById("email").value;
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controllers/checkMail.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    let data = {
        email: email,
    };
    let dataToSend = JSON.stringify(data);

    xhttp.send("data=" + dataToSend);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            let response = JSON.parse(this.responseText);
            if (response.success) {
                document.getElementById("emailerror").innerHTML = "";
                emailError = false;
            }
            if (response.error) {
                document.getElementById("emailerror").innerHTML =
                    response.error;
                emailError = true;
            }
        }
    };
}
