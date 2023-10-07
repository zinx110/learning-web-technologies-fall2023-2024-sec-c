<?php
if(isset($_REQUEST['gender'])){
    echo $_REQUEST['gender'];
}

?>

<html >
    <head>
        <title>Task 4 [B]</title>
    </head>
    <body>
        <form method="" action="" enctype="">
        <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="gender" value="Male" />Male
                <input type="radio" name="gender" value="Female" />Female
                <input type="radio" name="gender" value="Other" />Other
                <br />
                <hr />
                <input type="submit" value="Submit" />
            </fieldset>
        </form>
    </body>
</html>
