<?php
if (isset($_SESSION['auth'])) {
    header('Location: dashboard.php');
}

$error = "";

if (isset($_REQUEST['submit'])) {
    $error = "";
    if (!isset($_REQUEST['username']) || $_REQUEST['username'] == "") {
        $error = "please enter a username";
    } else if (!ctype_alnum($_REQUEST['username']) && $_REQUEST['username'] != '.' && $_REQUEST['username'] != '-' && $_REQUEST['username'] != '_') {
        $error = "username must be alphanumeric";
    } else if (strlen($_REQUEST['username']) < 2) {
        $error = "username must be at least 2 characters";
    } else if (!isset($_REQUEST['password']) || $_REQUEST['password'] == "") {
        $error = "please enter a password";
    } else if (strlen($_REQUEST['password']) < 8) {
        $error = "password must be at least 8 characters";
    } else if (!str_contains($_REQUEST['password'], '@') && !str_contains($_REQUEST['password'], '#') && !str_contains($_REQUEST['password'], '$' && !str_contains($_REQUEST['password'], '%'))) {
        $error = "password must contain a special characters (@,#,$,%)";
    }
    if (!$error) {
        echo "SUCCESS!";
    }
}
?>
<html>

<head>
    <title>Login</title>
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
                <form method="GET" action="" enctype="">
                    <fieldset>
                        <legend>
                            <h2>Login</h2>
                        </legend>
                        <table width="100%">
                            <tr>
                                <td>User Name</td>
                                <td>
                                    : <input type="text" name="username" value="<?php
                                                                                echo isset($_REQUEST['username']) ? $_REQUEST['username'] : "";
                                                                                ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>
                                    : <input type="password" name="password" value="<?php
                                                                                    echo isset($_REQUEST['password']) ? $_REQUEST['password'] : "";
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
                                    <input type="checkbox" name="remember" value="remember" <?php
                                                                                            echo isset($_REQUEST['remember']) ? 'checked="checked"' : "";
                                                                                            ?>> Remember Me
                                </td>

                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="submit" value="Submit"> <a href="forgot.php">Forgot Password?</a>
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