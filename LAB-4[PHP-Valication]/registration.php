<?php
if (isset($_SESSION['auth'])) {
    header('Location: dashboard.php');
}

$error = "";

if (isset($_REQUEST['submit'])) {
    $error = "";
    if (!isset($_REQUEST['name']) || $_REQUEST['name'] == "") {
        $error = "please enter a name";
    } else if (!isset($_REQUEST['email']) || $_REQUEST['email'] == "") {
        $error = "please enter a email";
    } else if (!isset($_REQUEST['username']) || $_REQUEST['username'] == "") {
        $error = "please enter a username";
    } else if (!isset($_REQUEST['password']) || $_REQUEST['password'] == "") {
        $error = "please enter a password";
    } else if (!isset($_REQUEST['confirmPassword']) || $_REQUEST['confirmPassword'] == "") {
        $error = "please confirm Password";
    } else if (!isset($_REQUEST['gender']) || $_REQUEST['gender'] == "") {
        $error = "please select a gender";
    } else if (!isset($_REQUEST['dob']) || $_REQUEST['dob'] == "") {
        $error = "please select a date of birth";
    } else if (!ctype_alnum($_REQUEST['username']) && $_REQUEST['username'] != '.' && $_REQUEST['username'] != '-' && $_REQUEST['username'] != '_') {
        $error = "username must be alphanumeric";
    } else if (strlen($_REQUEST['username']) < 2) {
        $error = "username must be at least 2 characters";
    } else if (strlen($_REQUEST['password']) < 8) {
        $error = "password must be at least 8 characters";
    } else if (!str_contains($_REQUEST['password'], '@') && !str_contains($_REQUEST['password'], '#') && !str_contains($_REQUEST['password'], '$' && !str_contains($_REQUEST['password'], '%'))) {
        $error = "password must contain a special characters (@,#,$,%)";
    } else if ($_REQUEST['password'] != $_REQUEST['confirmPassword']) {
        $error = "passwords did not match";
    }
    if (!$error) {
        echo "SUCCESS!";
    }
}
?>
<html>

<head>
    <title>Registration</title>
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
                            <h2>Registration</h2>
                        </legend>
                        <table width="100%" height="500px">
                            <tr>
                                <td>Name</td>
                                <td>
                                    : <input type="text" name="name" value="<?php
                                                                            echo isset($_REQUEST['name']) ? $_REQUEST['name'] : "";
                                                                            ?>">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>

                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    : <input type="email" name="email" value="<?php
                                                                                echo isset($_REQUEST['email']) ? $_REQUEST['email'] : "";
                                                                                ?>">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>

                            </tr>
                            <tr>
                                <td>User Name</td>
                                <td>
                                    : <input type="text" name="username" value="<?php
                                                                                echo isset($_REQUEST['username']) ? $_REQUEST['username'] : "";
                                                                                ?>">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
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
                                <td>Confirm Password</td>
                                <td>
                                    : <input type="password" name="confirmPassword" value="<?php
                                                                                            echo isset($_REQUEST['confirmPassword']) ? $_REQUEST['confirmPassword'] : "";
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
                                    <fieldset>
                                        <legend>Gender</legend>
                                        <input type="radio" name="gender" value="male" <?php
                                                                                        echo (isset($_REQUEST['gender']) && $_REQUEST['gender'] == "male") ? 'checked="checked"' : "";
                                                                                        ?>> Male
                                        <input type="radio" name="gender" value="female" <?php
                                                                                            echo (isset($_REQUEST['gender']) && $_REQUEST['gender'] == "female") ? 'checked="checked"' : "";
                                                                                            ?>> Female
                                        <input type="radio" name="gender" value="others" <?php
                                                                                            echo (isset($_REQUEST['gender']) && $_REQUEST['gender'] == "others") ? 'checked="checked"' : "";
                                                                                            ?>> Others

                                    </fieldset>

                                </td>

                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>

                            </tr>
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Date of Birth</legend>
                                        <input type="date" name="dob" value="<?php
                                                                                echo isset($_REQUEST['dob']) ? $_REQUEST['dob'] : "";

                                                                                ?>"> <i>(dd/mm/yyyy)</i>

                                    </fieldset>

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
                                    <input type="reset" name="reset" value="Reset">
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