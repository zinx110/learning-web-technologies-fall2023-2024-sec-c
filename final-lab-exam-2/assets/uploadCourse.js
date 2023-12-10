function validate() {
    let subject = document.getElementById("subject");
    let section = document.getElementById("section");
    let count = document.getElementById("count");
    let maxCount = document.getElementById("maxCount");
    let day = document.getElementById("day");
    let startTime = document.getElementById("startTime");
    let endTime = document.getElementById("endTime");

    let error = document.getElementById("error");
    let errorMessage = "";
    error.innerHTML = "";
    if (!subject) errorMessage += "Please enter subject.<br>";
    if (!section) errorMessage += "Please enter section.<br>";
    if (!count) errorMessage += "Please enter count.<br>";
    if (!maxCount) errorMessage += "Please enter maxCount.<br>";
    if (!day) errorMessage += "Please enter day.<br>";
    if (!startTime) errorMessage += "Please enter startTime.<br>";
    if (!endTime) errorMessage += "Please enter endTime.<br>";

    if (!errorMessage) {
        uploadCourse(
            subject,
            section,
            count,
            maxCount,
            day,
            startTime,
            endTime
        );
    } else {
        error.innerHTML = errorMessage;
    }
}

function uploadCourse(
    subject,
    section,
    count,
    maxCount,
    day,
    startTime,
    endTime
) {
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controllers/uploadCourses.php", true);
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
                alert(response.message);
            }
            if (response.error) {
                document.getElementById("error").innerHTML = response.error;
            }
        }
    };
}
let userType = "";
function initializeAdmin() {
    let xhttp = new XMLHttpRequest();
    xhttp.open("GET", `../controllers/getUserInfo.php`, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.send();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            let response = JSON.parse(this.responseText);
            if (response.success) {
                let user = response.data;
                if (user.type === "admin") {
                    userType = "admin";
                    populateAdmin();
                }
            }
            if (response.error) {
                document.getElementById("error").innerHTML = response.error;
            }
        }
    };
}
function populateAdmin() {
    let adminContainer = document.getElementById("admin");
    content = `
    <p>subject: <input id="subject"></p>
    <p>section: <input id="section"></p>
    <p>count: <input id="count"></p>
    <p>maxCount: <input id="maxCount"></p>
    <p>day: <input id="day"></p>
    <p>starTime: <input id="starTime"></p>
    <p>endTime: <input id="endTime"></p>
    <p> <button onclick="validate()"></p>
    `;
    adminContainer.innerHTML = content;
}
function populateCourse() {
    let xhttp = new XMLHttpRequest();
    xhttp.open("GET", `../controllers/getCourses.php`, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.send();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            let response = JSON.parse(this.responseText);
            if (response.success) {
                renderCourse(response.data);
            }
            if (response.error) {
                document.getElementById("error").innerHTML = response.error;
            }
        }
    };
}
function renderCourse(courses) {
    let container = document.getElementById("container");
    courses.forEach((course) => {
        let content = `

            <h4>subject: ${course.subject}</h4>
            <p>section: ${course.section}</p>
            <p>
                count: ${course.count}, max count: ${course.maxCount}
            </p>
            <p>
                day: ${course.day}, start time: ${course.startTime}, end time: ${course.endTime}
            </p>
   
        `;
        let div = document.createElement("div");
        div.innerHTML = content;
        container.appendChild(div);
    });
}
