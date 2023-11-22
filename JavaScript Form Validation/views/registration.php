<?php include_once("../controllers/registration.php"); ?>
<html>

<head>
    <title>Registration</title>
    <link rel="stylesheet" href="../assets/style.css" type="text/css">
    <script src="../assets/registration.js"></script>
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
                                    : <input id="name" type="text" name="name" value="<?php
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
                                    : <input id="email" type="email" name="email" value="<?php
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
                                    : <input id="username" type="text" name="username" value="<?php
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
                                    : <input id="password" type="password" name="password" value="<?php
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
                                    : <input id="confirmPassword" type="password" name="confirmPassword" value="<?php
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
                                        <input id="male" type="radio" name="gender" value="male" <?php
                                                                                                    echo (isset($_REQUEST['gender']) && $_REQUEST['gender'] == "male") ? 'checked="checked"' : "";
                                                                                                    ?>> Male
                                        <input id="female" type="radio" name="gender" value="female" <?php
                                                                                                        echo (isset($_REQUEST['gender']) && $_REQUEST['gender'] == "female") ? 'checked="checked"' : "";
                                                                                                        ?>> Female
                                        <input id="others" type="radio" name="gender" value="others" <?php
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
                                        <input id="dob" type="date" name="dob" value="<?php
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
                                    <input onclick="validateForm()" type="button" name="submit" value="Submit">
                                    <input type="reset" name="reset" value="Reset">
                                </td>

                            </tr>
                            <tr>
                                <td colspan="2" id="error">
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