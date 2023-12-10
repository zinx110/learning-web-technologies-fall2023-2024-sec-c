function validate() {
    let username = document.getElementById("username");

    let password = document.getElementById("password");

    let error = document.getElementById("error");
    let errorMessage = "";
    error.innerHTML = "";
    if (!username) errorMessage += "Please enter your username.<br>";

    if (!password) errorMessage += "Please enter your password.<br>";

    if (!errorMessage) {
        login(username, password);
    } else {
        error.innerHTML = errorMessage;
    }
}

function login(username, password) {
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controllers/login.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    let data = {
        username: username,
        password: password,
    };
    let dataToSend = JSON.stringify(data);
    console.log(dataToSend);
    xhttp.send("data=" + dataToSend);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            let response = JSON.parse(this.responseText);
            if (response.success) {
                window.location.replace("./courses.html");
            }
            if (response.error) {
                document.getElementById("error").innerHTML = response.error;
            }
        }
    };
}
