var emailError = true;

function validate() {
    let email = document.getElementById("email").value;

    let password = document.getElementById("password").value;

    document.getElementById("error").innerHTML = "";
    let error = "";

    if (!email) {
        error += "Please enter email <br>";
    }
    if (!password) {
        error += "Please enter password <br>";
    }

    if (error) {
        document.getElementById("error").innerHTML = error;
    } else {
        login(email, password);
    }
}

function login(email, password) {
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controllers/loginControl.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    let data = {
        email: email,
        password: password,
    };
    let dataToSend = JSON.stringify(data);

    xhttp.send("data=" + dataToSend);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            let response = JSON.parse(this.responseText);
            console.log(response);
            if (response.success) {
                console.log("a");
                window.location.replace("home.php");
            }
            if (response.error) {
                document.getElementById("error").innerHTML = response.error;
            }
        }
    };
}
