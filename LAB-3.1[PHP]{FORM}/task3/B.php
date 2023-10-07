<?php

if(isset($_REQUEST['day'])){
    echo $_REQUEST['day'],"/", $_REQUEST['month'],"/",$_REQUEST['year'];
}


?>

<html >
    <head>
        <title>Task 3 [B]</title>
    </head>
    <body>
        <form method="" action="" enctype="">
        <fieldset>
                <legend>DATE OF BIRTH</legend>

                <table>
                    <tr align="center">
                        <td colspan="2">dd</td>
                        <td></td>
                        <td colspan="2">dd</td>
                        <td></td>
                        <td colspan="4">dd</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input
                                type="text"
                                name="day"
                                value=""
                                maxlength="2"
                            />
                        </td>
                        <td>/</td>
                        <td colspan="2">
                            <input
                                type="text"
                                name="month"
                                value=""
                                maxlength="2"
                            />
                        </td>
                        <td>/</td>
                        <td colspan="4">
                            <input
                                type="text"
                                name="year"
                                value=""
                                maxlength="4"
                            />
                        </td>
                    </tr>
                </table>

                <hr />
                <input type="submit" value="Submit" />
            </fieldset>
        </form>
    </body>
</html>
