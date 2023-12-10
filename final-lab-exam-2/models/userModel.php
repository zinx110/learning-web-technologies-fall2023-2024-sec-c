<?php
require_once('db.php');

function login($username, $password)
{
    $con = getConnection();
    $sql = "select * from users where username='{$username}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            setcookie('user', $row, '/');
        }
        return ['success' => true];
    } else {
        return ['error' => "Invalid username or password"];
    }
}


function register(
    $name,
    $username,
    $email,
    $password,
    $type
) {

    $con = getConnection();
    $sql = "select * from users where name='{$username}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        return ['error' => "Username is already taken"];
    }
    $sql = "select * from users where email='{$email}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        return ['error' => "The email is already in use"];
    }

    $sql = "insert into users (
       name, 
        username,
        email,
        type

        ) values (

        '$name',
        '$username',
        '$email',
        '$password',
        '$type'
        
        )";
    $result = mysqli_query($con, $sql);


    if ($result) {
        return ['success' => "success"];
    } else {

        return ['error' => "Database error!"];
    }
}
