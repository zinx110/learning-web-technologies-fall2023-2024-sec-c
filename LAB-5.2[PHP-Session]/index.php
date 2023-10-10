<?php

if (isset($_COOKIE['auth'])) {
    header('location: dashboard.php');
}
?>

<html lang="en">

<head>
    <title>Home</title>
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
            <td colspan="2">


                <main height="">
                    <b> Welcome to xCompany</b>
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