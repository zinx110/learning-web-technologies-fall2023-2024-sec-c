<?php
if (!isset($_COOKIE['auth']) || !isset($_COOKIE['name'])) {
    header('location: login.php');
} else {
    $name = $_COOKIE['name'];
    $email = $_COOKIE['email'];
    $phone = $_COOKIE['phone'];
}
