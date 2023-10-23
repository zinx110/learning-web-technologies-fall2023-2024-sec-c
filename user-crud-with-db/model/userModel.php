<?php
require_once('db.php');

function login($username, $password)
{
    $con = getConnection();
    $sql = "select * from users where username='{$username}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        return true;
    } else {
        return false;
    }
}

function createUser()
{
}

function getUser($id)
{
    $con = getConnection();
    $sql = "select * from users where id = '$id'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        echo "Invalid User";
        return false;
    }
}

function getAllUser()
{
    $con = getConnection();
    $sql = "select * from users";
    $result = mysqli_query($con, $sql);
    $users = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($users, $row);
    }

    return $users;
}

function updateUser($user)
{
    $username = $user["username"];
    $email = $user["email"];
    $id = $user["id"];
    $con = getConnection();
    $sql = "update users set username='$username', email='$email' where id = '$id'";
    mysqli_query($con, $sql);
    return true;
}

function deleteUser($id)
{
    $con = getConnection();
    $sql = "delete from users where id='{$id}'";
    mysqli_query($con, $sql);
    return true;
}
