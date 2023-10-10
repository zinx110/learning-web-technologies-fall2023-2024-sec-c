<?php

if (isset($_COOKIE['auth'])) {
    header('location: dashboard.php');
}

if (isset($_REQUEST['username']) && $_REQUEST['password']) {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    if (isset($_COOKIE['username']) && isset($_COOKIE['password']))


        if ($username == "" || $password == "") {
            echo "null username/password!";
        } else if ($username == $_COOKIE['username'] && $password == $_COOKIE['password']) {

            if (isset($_REQUEST['remember'])) {
                foreach ($_REQUEST as $req) {
                    if ($req === "true")

                        setcookie('auth', 'true', time() + 99999990000, '/');
                }
            } else {
                echo "remember not";
                setcookie('auth', 'true', null, '/');
            }
            header('location: dashboard.php');
        } else {
            echo "invaid user!";
        }
}
?>

<html lang="en">

<head>
    <title>Login</title>
</head>

<body>
    <table width="100%" height="100%">
        <tr height="40px">
            <header>
                <td>
                    <img src="x-logo.png" alt="X company">
                </td>
                <td align="right">
                    <a href="index.php">Home</a>|
                    <a href="login.php">Login</a>|
                    <a href="registration.php">Registration</a>
                </td>

                </td>
            </header>
        </tr>
        <tr>
            <td colspan="2" height="2px">

                <hr>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <main>
                    <table width="600px" height="100%">
                        <tr>
                            <td>
                                <form action="" method="POST" enctype="">
                                    <fieldset>
                                        <legend>
                                            Login
                                        </legend>
                                        <table width="100%">

                                            <tr>
                                                <td>User Name</td>
                                                <td>:
                                                    <input type="text" name="username" value="<?php
                                                                                                if (isset($_REQUEST['username'])) {
                                                                                                    echo $_REQUEST['username'];
                                                                                                } else {
                                                                                                    echo "";
                                                                                                }
                                                                                                ?>">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Password</td>
                                                <td>:
                                                    <input type="password" name="password" value="<?php
                                                                                                    if (isset($_REQUEST['password'])) {
                                                                                                        echo $_REQUEST['password'];
                                                                                                    } else {
                                                                                                        echo "";
                                                                                                    }
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
                                                    <input type="checkbox" name="remember[]" value='true'>Remember Me
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <input type="submit" value="Submit">
                                                    <a href="forgot.php">Forgot Password?</a>
                                                </td>
                                            </tr>

                                        </table>
                                    </fieldset>
                                </form>
                            </td>
                        </tr>
                    </table>
                </main>
            </td>
        </tr>
        <tr height="40px">
            <td colspan="2">


                <hr>
                <footer align="center">
                    Copyright &copy; 2017
                </footer>
            </td>
        </tr>
    </table>

</body>

</html>