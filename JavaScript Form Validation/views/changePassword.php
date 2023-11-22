<?php
if (isset($_SESSION['auth'])) {
    header('Location: dashboard.php');
}


$error = "";

if (isset($_REQUEST['submit'])) {
    $error = "";
    if (!isset($_REQUEST['currentPassword']) || $_REQUEST['currentPassword'] == '') {
        $error = "please enter currentPassword";
    } else if (!isset($_REQUEST['newPassword']) || $_REQUEST['newPassword'] == '') {
        $error = "please enter newPassword";
    } else if (!isset($_REQUEST['retypePassword']) || $_REQUEST['retypePassword'] == '') {
        $error = "please enter retypePassword";
    } else if ($_REQUEST['newPassword'] == $_REQUEST['currentPassword']) {
        $error = "New Password should not be same as the Current Password";
    } else if ($_REQUEST['newPassword'] != $_REQUEST['retypePassword']) {
        $error = "New Password must match with the Retyped Password";
    }
    if (!$error) {
        echo "SUCCESS!";
    }
}
?>
<html>

<head>
    <title>Change Password</title>
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
                            <h2>Change Password</h2>
                        </legend>
                        <table width="100%">
                            <tr>
                                <td>Current Password</td>
                                <td>
                                    : <input type="password" name="currentPassword" value="<?php
                                                                                            echo isset($_REQUEST['currentPassword']) ? $_REQUEST['currentPassword'] : "";
                                                                                            ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>New Password</td>
                                <td>
                                    : <input type="password" name="newPassword" value="<?php
                                                                                        echo isset($_REQUEST['newPassword']) ? $_REQUEST['newPassword'] : "";
                                                                                        ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Retype New Password</td>
                                <td>
                                    : <input type="password" name="retypePassword" value="<?php
                                                                                            echo isset($_REQUEST['retypePassword']) ? $_REQUEST['retypePassword'] : "";
                                                                                            ?>">
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