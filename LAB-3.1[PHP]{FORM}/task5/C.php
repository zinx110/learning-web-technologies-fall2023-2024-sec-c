<html >
    <head>
        <title>Task 5 [C]</title>
    </head>
    <body>
        <form method="" action="" enctype="">
            <fieldset>
                <legend><b>Degree</b></legend>

                <input type="checkbox" name="degree[]" value="SSC" 
                <?php  
                if(isset($_REQUEST['degree'])){
                    foreach ( $_REQUEST['degree'] as $deg){
                        if($deg=='SSC'){
                            echo 'checked="checked"';
                        }
                    }
                }

                ?>
                 />SSC
                <input type="checkbox" name="degree[]" value="HSC" 
                
                <?php  
                if(isset($_REQUEST['degree'])){
                    foreach ( $_REQUEST['degree'] as $deg){
                        if($deg=='HSC'){
                            echo 'checked="checked"';
                        }
                    }
                }

                ?>
                />HSC
                <input type="checkbox" name="degree[]" value="BSc"
                
                <?php  
                if(isset($_REQUEST['degree'])){
                    foreach ( $_REQUEST['degree'] as $deg){
                        if($deg=='BSc'){
                            echo 'checked="checked"';
                        }
                    }
                }

                ?>
                />BSc
                <input type="checkbox" name="degree[]" value="MSc"
                
                <?php  
                if(isset($_REQUEST['degree'])){
                    foreach ( $_REQUEST['degree'] as $deg){
                        if($deg=='MSc'){
                            echo 'checked="checked"';
                        }
                    }
                }

                ?>
                />MSc
                <hr />
                <input type="submit" value="Submit" />
            </fieldset>
            
        </form>
    </body>
</html>
