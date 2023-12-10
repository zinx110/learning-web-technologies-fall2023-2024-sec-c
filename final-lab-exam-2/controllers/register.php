<?php
if (!isset($_REQUEST['data'])) {
    echo json_encode(['error' => 'no data sent to server']);
} else {
    $data = json_decode($_REQUEST['data'], true);
    $error = "";
    $name = $data['name'];
    $username = $data['username'];
    $email = $data['email'];
    $password = $data['password'];
    $type = $data['type'];
    if (!$name) {
        $error = "Please enter a name<br>";
    }
    if (!$username) {
        $error .= "Please enter a username<br>";
    }
    if (!$email) {
        $error .= "Please enter a email<br>";
    }
    if (!$password) {
        $error .= "Please enter a password<br>";
    }
    if (!$type) {
        $error .= "Please enter a type<br>";
    }
    if ($error) {
        echo json_encode(['error' => $error]);
    } else {
        require_once('../models/userModel.php');
        echo json_encode(register($name, $username, $email, $password, $type));
    }
}
