<html >
    <head>
        <title>Task 1 [A]</title>
    </head>
    <body>
        <form method="" action="" enctype="">
            <fieldset>
                <legend>NAME</legend>
                
                <input type="text" name="username" value="<?php if(isset($_REQUEST['username'])){echo $_REQUEST['username'];} ?>" /><br />
                <hr>
                <input type="submit" value="Submit" />
            </fieldset>
        </form>
    </body>
</html>
