<html >
    <head>
        <title>Task 3 [C]</title>
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
                                value="<?php if(isset($_REQUEST['day'])){echo $_REQUEST['day'];} ?>"
                                maxlength="2"
                            />
                        </td>
                        <td>/</td>
                        <td colspan="2">
                            <input
                                type="text"
                                name="month"
                                value="<?php if(isset($_REQUEST['month'])){echo $_REQUEST['month'];} ?>"
                                maxlength="2"
                            />
                        </td>
                        <td>/</td>
                        <td colspan="4">
                            <input
                                type="text"
                                name="year"
                                value="<?php if(isset($_REQUEST['year'])){echo $_REQUEST['year'];} ?>"
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
