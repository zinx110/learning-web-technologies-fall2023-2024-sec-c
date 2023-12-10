<?php
if (!isset($_REQUEST['data'])) {
    echo json_encode(['error' => 'no data sent to server']);
} else {
    $data = json_decode($_REQUEST['data'], true);

    $username = $data['username'];
    $password = $data['password'];


    if (!$username) {
        $error .= "Please enter a username<br>";
    }

    if (!$password) {
        $error .= "Please enter a password<br>";
    }

    if ($error) {
        echo json_encode(['error' => $error]);
    } else {
        require_once('../models/userModel.php');
        echo json_encode(login($username,  $password));
    }
}
