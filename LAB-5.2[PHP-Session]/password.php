<?php

if (!isset($_COOKIE['auth'])) {
    header('location: index.php');
}

if (isset($_REQUEST['password']) && isset($_REQUEST['newPassword']) && isset($_REQUEST['retypePassword'])) {
    if ($_REQUEST['password'] == "" || $_REQUEST['newPassword'] == "" || $_REQUEST['retypePassword'] == "") {
        echo "fill all the fields";
    } else {

        if ($_REQUEST['password'] == $_COOKIE['password']) {
            if ($_REQUEST['newPassword'] == $_REQUEST['retypePassword']) {
                setcookie('password', $_REQUEST['newPassword'], time() + 9999999, '/');
                header('Location:profile.php');
            }
        }
    }
}













?>

<html lang="en">

<head>
    <title>Change Password</title>
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
                            <b>Change Password</b>
                        </legend>
                        <table width="100%">

                            <tr>
                                <td>Current Password</td>
                                <td>:<input type="password" name="password" value="<?php echo
                                                                                    isset($_REQUEST['password']) ? $_REQUEST['password'] : ''
                                                                                    ?>">
                                </td>

                            </tr>
                            <tr>
                                <td>New Password</td>
                                <td>:<input type="password" name="newPassword" value="<?php echo
                                                                                        isset($_REQUEST['newPassword']) ? $_REQUEST['newPassword'] : ''
                                                                                        ?>">
                                </td>

                            </tr>
                            <tr>
                                <td>Retype New Password</td>
                                <td>:<input type="password" name="retypePassword" value="<?php echo
                                                                                            isset($_REQUEST['retypePassword']) ? $_REQUEST['retypePassword'] : ''
                                                                                            ?>">
                                </td>

                            </tr>
                            <tr>
                                <td>

                                    <?php
                                    if (isset($_REQUEST['password']) && isset($_REQUEST['newPassword']) && isset($_REQUEST['retypePassword'])) {
                                        if ($_REQUEST['password'] != $_COOKIE['password']) {
                                            echo "Invalid Old Password";
                                        } else if ($_REQUEST['newPassword'] != $_REQUEST['newPassword']) {
                                            echo "Passwords do not match";
                                        }
                                    } else {
                                        echo "Fill all the fields";
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