function validate() {
    let name = document.getElementById("name");
    let username = document.getElementById("username");
    let email = document.getElementById("email");
    let password = document.getElementById("password");
    let confirmPassword = document.getElementById("confirmPassword");
    let type = document.getElementById("type");
    let error = document.getElementById("error");
    let errorMessage = "";
    error.innerHTML = "";
    if (!name) errorMessage += "Please enter your name.<br>";
    if (!username) errorMessage += "Please enter your username.<br>";
    if (!email) errorMessage += "Please enter your email.<br>";
    if (!password) errorMessage += "Please enter your password.<br>";
    if (!confirmPassword)
        errorMessage += "Please enter your confirmPassword.<br>";
    if (!type) errorMessage += "Please select a user type.<br>";
    if (!errorMessage) {
        register(name, username, email, password, type);
    } else {
        error.innerHTML = errorMessage;
    }
}

function register(name, username, email, password, type) {
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controllers/register.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    let data = {
        name: name,
        username: username,
        password: password,
        type: type,
        email: email,
    };
    let dataToSend = JSON.stringify(data);
    console.log(dataToSend);
    xhttp.send("data=" + dataToSend);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            let response = JSON.parse(this.responseText);
            if (response.success) {
                window.location.replace("./login.html");
            }
            if (response.error) {
                document.getElementById("error").innerHTML = response.error;
            }
        }
    };
}
