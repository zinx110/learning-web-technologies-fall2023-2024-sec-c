<html >
    <head>
        <title>Task 4 [C]</title>
    </head>
    <body>
        <form method="" action="" enctype="">
        <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="gender" value="Male" <?php echo ($_REQUEST['gender'] == 'Male') ? 'checked="checked"' : ''; ?> />Male
                <input type="radio" name="gender" value="Female" <?php echo ($_REQUEST['gender'] == 'Female') ? 'checked="checked"' : ''; ?>  />Female
                <input type="radio" name="gender" value="Other" <?php echo ($_REQUEST['gender'] == 'Other') ? 'checked="checked"' : ''; ?>  />Other
                <br />
                <hr />
                <input type="submit" value="Submit" />
            </fieldset>
            
        </form>
    </body>
</html>
