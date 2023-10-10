<?php

if (isset($_COOKIE['auth'])) {
    header('location: dashboard.php');
}

if (isset($_REQUEST['submit'])) {

    if ((isset($_REQUEST['name'])) && isset($_REQUEST['email']) && isset($_REQUEST['username']) && isset($_REQUEST['password']) && isset($_REQUEST['confirmPassword']) && isset($_REQUEST['gender']) && isset($_REQUEST['day']) && isset($_REQUEST['month']) && isset($_REQUEST['year']) && $_REQUEST['password'] == $_REQUEST['confirmPassword'] && strlen($_REQUEST['password']) >= 6) {


        $name = $_REQUEST['name'];
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $gender = $_REQUEST['gender'];
        $birthday = strval($_REQUEST['day']) + strval($_REQUEST['month']) + strval($_REQUEST['year']);
        $day = $_REQUEST['day'];
        $month = $_REQUEST['month'];
        $year = $_REQUEST['year'];


        setcookie('name', $name, time() + 30000, '/');
        setcookie('email', $email, time() + 30000, '/');
        setcookie('username', $username, time() + 30000, '/');
        setcookie('password', $password, time() + 30000, '/');
        setcookie('gender', $gender, time() + 30000, '/');
        setcookie('day', $day, time() + 30000, '/');
        setcookie('month', $month, time() + 30000, '/');
        setcookie('year', $year, time() + 30000, '/');
        setcookie('auth', true, time() + 30000, '/');

        header('location: dashboard.php');
    }
}



?>

<html lang="en">

<head>
    <title>Registration</title>
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
                                            Registration
                                        </legend>
                                        <table width="100%">
                                            <tr>
                                                <td>Name</td>
                                                <td>:
                                                    <input type="text" name="name" value="<?php

                                                                                            if (isset($_REQUEST['name'])) {
                                                                                                echo $_REQUEST['name'];
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
                                                <td>Email</td>
                                                <td>:
                                                    <input type="email" name="email" value="<?php

                                                                                            if (isset($_REQUEST['email'])) {
                                                                                                echo $_REQUEST['email'];
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
                                                <td colspan="2">
                                                    <hr>
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
                                                    <?php
                                                    if (isset($_REQUEST['submit']) && isset($_REQUEST['password']) && strlen($_REQUEST['password'])   < 6) {
                                                        echo "Password must be at least 6 characters";
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Confirm Password</td>
                                                <td>:
                                                    <input type="password" name="confirmPassword" value="<?php

                                                                                                            if (isset($_REQUEST['confirmPassword'])) {
                                                                                                                echo $_REQUEST['confirmPassword'];
                                                                                                            } else {
                                                                                                                echo "";
                                                                                                            }




                                                                                                            ?>">

                                                    <?php
                                                    if (isset($_REQUEST['submit']) && isset($_REQUEST['password']) && isset($_REQUEST['confirmPassword']) && $_REQUEST['password'] != $_REQUEST['confirmPassword']) {
                                                        echo "Passwords did not match";
                                                    }
                                                    ?>
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
                                                                                                        if (isset($_REQUEST['gender']) && $_REQUEST['gender'] == "male") {
                                                                                                            echo 'checked="checked"';
                                                                                                        }

                                                                                                        ?>>Male
                                                        <input type="radio" name="gender" value="female" <?php
                                                                                                            if (isset($_REQUEST['gender']) && $_REQUEST['gender'] == "female") {
                                                                                                                echo 'checked="checked"';
                                                                                                            }

                                                                                                            ?>>Female
                                                        <input type="radio" name="gender" value="others" <?php
                                                                                                            if (isset($_REQUEST['gender']) && $_REQUEST['gender'] == "others") {
                                                                                                                echo 'checked="checked"';
                                                                                                            }

                                                                                                            ?>>Others
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
                                                        <input type="number" name="day" value="<?php

                                                                                                if (isset($_REQUEST['day'])) {
                                                                                                    echo $_REQUEST['day'];
                                                                                                } else {
                                                                                                    echo "";
                                                                                                }




                                                                                                ?>">/
                                                        <input type="number" name="month" value="<?php

                                                                                                    if (isset($_REQUEST['month'])) {
                                                                                                        echo $_REQUEST['month'];
                                                                                                    } else {
                                                                                                        echo "";
                                                                                                    }




                                                                                                    ?>">/
                                                        <input type="number" name="year" value="<?php

                                                                                                if (isset($_REQUEST['year'])) {
                                                                                                    echo $_REQUEST['year'];
                                                                                                } else {
                                                                                                    echo "";
                                                                                                }




                                                                                                ?>">
                                                        <i>
                                                            (dd/mm/yyyy)
                                                        </i>
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
                                                    <input type="submit" value="Submit" name="submit">
                                                    <input type="reset" value="Reset">

                                                    <?php if (isset($_REQUEST['submit'])) {
                                                        echo "Please Fill all the fields properly.";
                                                    }
                                                    ?>
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