<?php
require_once('../controller/sessionCheck.php');
require_once('../model/userModel.php');

$id = $_GET['id'];
$user = getUser($id);
?>

<html lang="en">

<head>
    <title>Edit User Page</title>
</head>

<body>
    <form method="post" action="../controller/editCheck.php" enctype="">
        <fieldset>
            <legend>Edit</legend>
            <input type="hidden" name="id" value="<?= $user['id']  ?>" />
            Username: <input type="text" name="username" value="<?= $user['username']  ?>" /> <br>

            Email: <input type="email" name="email" value="<?= $user['email']  ?>" /> <br>
            <input type="submit" name="submit" value="Edit" />
        </fieldset>
    </form>
</body>

</html>