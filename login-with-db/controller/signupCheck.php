<?php
session_start();
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];

if ($username == "" || $password == "" || $email == "") {
    echo "null username/password/email!";
} else {






    $user = [
        'username' => $username,
        'password' => $password,
        'email' => $email
    ];

    $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
    $sql = "insert into users (username,password,email) values('{$username}','{$password}','{$email}')";
    $result = mysqli_query($con, $sql);


    $_SESSION['user'] = $user;
    header('location: ../view/login.php');


    $_SESSION['flag'] = "true";
    header('location: ../view/home.php');
    echo "invaid user!";
}








?><html>

</html>