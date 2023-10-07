<html >
    <head>
        <title>Task 2 [A]</title>
    </head>
    <body>
        <form method="" action="" enctype="">
            <fieldset>
                <legend>Email</legend>
                <input type="email" name="email" value="<?php if(isset($_REQUEST['email'])){echo $_REQUEST['email'];} ?>"/><br />
                <hr>
                <input type="submit" value="Submit" />
            </fieldset>
        </form>
    </body>
</html>
