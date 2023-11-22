<?php
if (isset($_SESSION['auth'])) {
    header('Location: dashboard.php');
}

$error = "";

if (isset($_REQUEST['submit'])) {
    $error = "";
    if (!isset($_REQUEST['name']) || $_REQUEST['name'] == "") {
        $error = "please enter a name";
    } else if (!isset($_REQUEST['email']) || $_REQUEST['email'] == "") {
        $error = "please enter a email";
    } else if (!isset($_REQUEST['username']) || $_REQUEST['username'] == "") {
        $error = "please enter a username";
    } else if (!isset($_REQUEST['password']) || $_REQUEST['password'] == "") {
        $error = "please enter a password";
    } else if (!isset($_REQUEST['confirmPassword']) || $_REQUEST['confirmPassword'] == "") {
        $error = "please confirm Password";
    } else if (!isset($_REQUEST['gender']) || $_REQUEST['gender'] == "") {
        $error = "please select a gender";
    } else if (!isset($_REQUEST['dob']) || $_REQUEST['dob'] == "") {
        $error = "please select a date of birth";
    } else if (!ctype_alnum($_REQUEST['username']) && $_REQUEST['username'] != '.' && $_REQUEST['username'] != '-' && $_REQUEST['username'] != '_') {
        $error = "username must be alphanumeric";
    } else if (strlen($_REQUEST['username']) < 2) {
        $error = "username must be at least 2 characters";
    } else if (strlen($_REQUEST['password']) < 8) {
        $error = "password must be at least 8 characters";
    } else if (!str_contains($_REQUEST['password'], '@') && !str_contains($_REQUEST['password'], '#') && !str_contains($_REQUEST['password'], '$' && !str_contains($_REQUEST['password'], '%'))) {
        $error = "password must contain a special characters (@,#,$,%)";
    } else if ($_REQUEST['password'] != $_REQUEST['confirmPassword']) {
        $error = "passwords did not match";
    }
    if (!$error) {
        echo "SUCCESS!";
    }
}
