<?php
require_once('db.php');

function login($user)
{
    $con = getConnection();
    $sql = "select * from persons where email='{$user->email}' and password='{$user->password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $users = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($users, $row);
        }
        $user = $users[0];

        session_start();
        setcookie('name', $user['name'], time() + (86400 * 30), "/");
        setcookie('email', $user['email'], time() + (86400 * 30), "/");
        setcookie('phone', $user['phone'], time() + (86400 * 30), "/");
        setcookie('auth', "true", time() + (86400 * 30), "/");


        return ['success' => "true"];
    } else {

        return ['error' => "invalid credentials"];
    }
}

function checkEmail($email)
{

    $con = getConnection();
    $sql = "select * from persons where email='{$email}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        return ['error' => "email already in use"];
    } else {
        return ['success' => "true"];
    }
}



function register($user)
{

    $con = getConnection();

    $sql = "insert into persons (name,phone,email,password) values ('{$user->name}','{$user->phone}','{$user->email}','{$user->password}')";
    $result = mysqli_query($con, $sql);


    if ($result) {
        return ['success' => "true"];
    } else {

        return ['error' => "error"];
    }
}
