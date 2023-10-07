<?php
if(isset($_REQUEST['degree'])){
    foreach ( $_REQUEST['degree'] as $deg){

        echo $deg," ";
    }
}

?>

<html >
    <head>
        <title>Task 5 [B]</title>
    </head>
    <body>
        <form method="" action="" enctype="">
            <fieldset>
                <legend><b>Degree</b></legend>

                <input type="checkbox" name="degree[]" value="SSC" />SSC
                <input type="checkbox" name="degree[]" value="HSC" />HSC
                <input type="checkbox" name="degree[]" value="BSc" />BSc
                <input type="checkbox" name="degree[]" value="MSc" />MSc
                <hr />
                <input type="submit" value="Submit" />
            </fieldset>
        </form>
    </body>
</html>
