function validate() {
    let name = document.getElementById("name").value;
    let username = document.getElementById("username").value;
    let contact = document.getElementById("contact").value;
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirmPassword").value;
    document.getElementById("error").innerHTML = "";
    let error = "";
    if (!name) {
        error += "Please enter name <br>";
    }
    if (!username) {
        error += "Please enter username <br>";
    }
    if (!contact) {
        error += "Please enter contact no <br>";
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
        register(name, username, password, contact);
    }
}

function register(name, username, password, contact) {
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controllers/registerControl.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    let data = {
        name: name,
        username: username,
        password: password,
        contact: contact,
    };
    let dataToSend = JSON.stringify(data);
    console.log(dataToSend);
    xhttp.send("data=" + dataToSend);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            let response = JSON.parse(this.responseText);
            if (response.success) {
            }
            if (response.error) {
                document.getElementById("error").innerHTML = response.error;
            }
        }
    };
}
