<?php
if(isset($_REQUEST['bloodGroup'])){
    echo ( $_REQUEST['bloodGroup'] );
}

?>

<html >
    <head>
        <title>Task 6 [B]</title>
    </head>
    <body>
        <form method="" action="" enctype="">
        <fieldset>
                <legend><b>Blood Group</b></legend>

                <select name="bloodGroup">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option></select
                ><br />
                <hr />
                <input type="submit" value="Submit" />
            </fieldset>
        </form>
    </body>
</html>
