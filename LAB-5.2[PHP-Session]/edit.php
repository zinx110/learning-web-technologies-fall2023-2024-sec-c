<?php

if (!isset($_COOKIE['auth'])) {
    header('location: index.php');
}

if (isset($_REQUEST['name'])) {
    setcookie('name', $_REQUEST['name'], time() + 9999999, '/');
}
if (isset($_REQUEST['email'])) {
    setcookie('email', $_REQUEST['email'], time() + 9999999, '/');
}
if (isset($_REQUEST['gender'])) {
    setcookie('gender', $_REQUEST['gender'], time() + 9999999, '/');
}
if (isset($_REQUEST['day'])) {
    setcookie('day', $_REQUEST['day'], time() + 9999999, '/');
}
if (isset($_REQUEST['month'])) {
    setcookie('month', $_REQUEST['month'], time() + 9999999, '/');
}
if (isset($_REQUEST['year'])) {
    setcookie('year', $_REQUEST['year'], time() + 9999999, '/');
}












?>

<html lang="en">

<head>
    <title>Edit Profile</title>
</head>

<body>
    <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="1">
        <tr height="40px">
            <td colspan="2">
                <header>
                    <table width="100%">
                        <tr>
                            <td>
                                <img src="x-logo.png" alt="X company">
                            </td>
                            <td align="right">
                                Logged in as
                                <a href="index.php"><?php echo isset($_COOKIE['username']) ? $_COOKIE['username'] : ""  ?></a>|
                                <a href="logout.php">Logout</a>
                            </td>
                        </tr>
                    </table>
                </header>
            </td>





        </tr>
        <tr>
            <td width="220px">
                <table height="100%" width="100%" border="0" cellspacing="0">
                    <tr>
                        <td height="200px">
                            <h4>Account</h4>
                            <hr width="200px">
                            <ul>
                                <li><a href="dashboard.php">Dashboard</a></li>
                                <li><a href="profile.php">View Profile</a></li>
                                <li><a href="edit.php">Edit Profile</a></li>
                                <li><a href="picture.php">Change Profile Picture</a></li>
                                <li><a href="password.php">Change Password</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>


                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>

            </td>
            <td>
                <form>
                    <fieldset>
                        <legend>
                            <b>Edit Profile</b>
                        </legend>
                        <table width="100%">

                            <tr>
                                <td>Name</td>
                                <td>:<input type="name" name="name" value="<?php echo
                                                                            isset($_COOKIE['name']) ? $_COOKIE['name'] : ''
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
                                <td>:<input type="email" name="email" value="<?php echo
                                                                                isset($_COOKIE['email']) ? $_COOKIE['email'] : ''
                                                                                ?>">
                                </td>

                            </tr>


                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>:<input type="radio" name="gender" value="male" <?php echo (isset($_COOKIE['gender']) && $_COOKIE['gender'] == "male") ? 'checked="checked"' : ''
                                                                                    ?>>Male
                                    <input type="radio" name="gender" value="female" <?php echo (isset($_COOKIE['gender']) && $_COOKIE['gender'] == "female") ? 'checked="checked"' : ''
                                                                                        ?>>Female
                                    <input type="radio" name="gender" value="others" <?php echo (isset($_COOKIE['gender']) && $_COOKIE['gender'] == "others") ? 'checked="checked"' : ''
                                                                                        ?>>Others
                                </td>

                            </tr>


                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td colspan>:

                                    <input type="number" name="day" value="<?php echo isset($_COOKIE['day']) ? $_COOKIE['day'] : ''
                                                                            ?>">/
                                    <input type="number" name="month" value="<?php echo isset($_COOKIE['month']) ? $_COOKIE['month'] : ''
                                                                                ?>">/
                                    <input type="number" name="year" value="<?php echo isset($_COOKIE['year']) ? $_COOKIE['year'] : ''
                                                                            ?>"><br><i>(dd/mm/yy)</i>



                                </td>


                            </tr>



                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <input type="submit" value="submit" name="submit" />

                                </td>
                                <td>

                            </tr>



                        </table>
                    </fieldset>
                </form>
            </td>

        </tr>

        <tr height="40px">
            <td colspan="2" align="center">

                <footer>
                    Copyright &copy; 2017
                </footer>
            </td>
        </tr>
    </table>

</body>

</html>