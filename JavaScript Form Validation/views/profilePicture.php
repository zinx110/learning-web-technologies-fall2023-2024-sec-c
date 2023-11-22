<?php
if (isset($_SESSION['auth'])) {
    header('Location: dashboard.php');
}

$error = "";

if (isset($_REQUEST['submit'])) {
    $error = "";
    if (!isset($_REQUEST['profilePic']) || $_REQUEST['profilePic'] == "") {
        $error = "please enter a profilePic";
    }
    if (!$error) {
        echo "SUCCESS!";
    }
}
?>
<html>

<head>
    <title>Profile Picture</title>
</head>

<body>
    <header>
        <a href="login.php">Login</a> |
        <a href="changePassword.php">Change Password</a> |
        <a href="profilePicture.php">Profile Picture</a> |
        <a href="registration.php">Registration</a>
    </header>
    <table width="400px" align="center" height="100%">
        <tr>
            <td>
                <form method="POST" action="" enctype="">
                    <fieldset>
                        <legend>
                            <h2>Profile Picture</h2>
                        </legend>
                        <table width="100%">
                            <tr>
                                <td width="200px">
                                    <img src="pfp.png" alt="profile picture">

                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="file" name="profilePic">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>

                            </tr>

                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="submit" value="Submit">
                                </td>

                            </tr>
                            <tr>
                                <td colspan="2">
                                    <?php echo isset($error) ? $error : "";
                                    ?>
                                </td>

                            </tr>
                        </table>
                    </fieldset>
                </form>
            </td>
        </tr>

    </table>
</body>

</html>