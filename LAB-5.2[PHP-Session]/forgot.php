<?php

if (isset($_COOKIE['auth'])) {
    header('location: dashboard.php');
}
?>

<html lang="en">

<head>
    <title>Forgot-password</title>
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
                                <form>
                                    <fieldset>
                                        <legend>
                                            Login
                                        </legend>
                                        <table width="100%">

                                            <tr>
                                                <td>Enter Email</td>
                                                <td>:
                                                    <input type="text" name="username" value="">
                                                </td>
                                            </tr>


                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>



                                            <tr>
                                                <td colspan="2">
                                                    <input type="submit" value="Submit">

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