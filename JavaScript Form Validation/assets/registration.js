let errorMessage = "";

let validateForm = () => {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirmPassword").value;
    let male = document.getElementById("male").checked;
    let female = document.getElementById("female").checked;
    let others = document.getElementById("others").checked;
    let dob = document.getElementById("dob").value;
    let error = document.getElementById("error");

    errorMessage = "";

    if (!name) errorMessage += "<p>Please enter your name</p>";
    if (!name) errorMessage += "<p>Please enter your name</p>";
    if (!email) errorMessage += "<p>Please enter your email</p>";
    if (!username) errorMessage += "<p>Please enter your username</p>";
    if (username && username.length < 2)
        errorMessage += "<p>Username must be at least 2 characters</p>";
    if (!password) errorMessage += "<p>Please enter your password</p>";

    if (password && password.length < 8)
        errorMessage += "<p>password must be at least 8 characters</p>";
    if (
        password &&
        !password.includes("#") &&
        !password.includes("%") &&
        !password.includes("&")
    )
        errorMessage +=
            "<p>Password must contain a special character like # or & or %</p>";
    if (!confirmPassword) errorMessage += "<p>Please confirm password</p>";
    if (password && confirmPassword && confirmPassword !== password)
        errorMessage += "<p>Passwords did not matchd</p>";

    if (!male && !female && !others)
        errorMessage += "<p>Please select your gender</p>";

    if (!dob) errorMessage += "<p>Please enter your dob</p>";

    error.innerHTML = errorMessage;
    if (!errorMessage) submit();
};

function submit() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirmPassword").value;
    let gender =
        (document.getElementById("male").checked && "male") ||
        (document.getElementById("female").checked && "female") ||
        (document.getElementById("others").checked && "others");

    let dob = document.getElementById("dob").value;

    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controllers/registration.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(
        " name=" +
            name +
            "&username=" +
            username +
            "&password=" +
            password +
            "&confirmPassword=" +
            confirmPassword +
            "&gender=" +
            gender +
            "&dob=" +
            dob +
            "&email=" +
            email +
            "&submit=" +
            "true"
    );
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
        }
    };
}
