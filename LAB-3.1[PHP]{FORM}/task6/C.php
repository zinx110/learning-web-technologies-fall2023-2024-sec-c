<html >
    <head>
        <title>Task 6 [C]</title>
    </head>
    <body>
        <form method="" action="" enctype="">
        <fieldset>
                <legend><b>Blood Group</b></legend>

                <select name="bloodGroup" >
                    <option value="A+"   
                    
                    <?php     
                
                        if(isset($_REQUEST['bloodGroup']) && $_REQUEST["bloodGroup"]=="A+"){
                            echo 'selected="selected"';
                        }
                    ?>
                    
                    >A+</option>
                    <option value="A-"   
                    
                    <?php     
                
                        if(isset($_REQUEST['bloodGroup']) && $_REQUEST["bloodGroup"]=="A-"){
                            echo 'selected="selected"';
                        }
                    ?>
                    
                    >A-</option>
                    <option value="B+"   
                    
                    <?php     
                
                        if(isset($_REQUEST['bloodGroup']) && $_REQUEST["bloodGroup"]=="B+"){
                            echo 'selected="selected"';
                        }
                    ?>
                    
                    >B+</option>
                    <option value="B-"   
                    
                    <?php     
                
                        if(isset($_REQUEST['bloodGroup']) && $_REQUEST["bloodGroup"]=="B-"){
                            echo 'selected="selected"';
                        }
                    ?>
                    
                    >B-</option>
                    <option value="AB+"   
                    
                    <?php     
                
                        if(isset($_REQUEST['bloodGroup']) && $_REQUEST["bloodGroup"]=="AB+"){
                            echo 'selected="selected"';
                        }
                    ?>
                    
                    >AB+</option>
                    <option value="AB-"   
                    
                    <?php     
                
                        if(isset($_REQUEST['bloodGroup']) && $_REQUEST["bloodGroup"]=="AB-"){
                            echo 'selected="selected"';
                        }
                    ?>
                    
                    >AB-</option>
                    <option value="O+"   
                    
                    <?php     
                
                        if(isset($_REQUEST['bloodGroup']) && $_REQUEST["bloodGroup"]=="O+"){
                            echo 'selected="selected"';
                        }
                    ?>
                    
                    >O+</option>
                    <option value="O-"   
                    
                    <?php     
                
                        if(isset($_REQUEST['bloodGroup']) && $_REQUEST["bloodGroup"]=="O-"){
                            echo 'selected="selected"';
                        }
                    ?>
                    
                    >O-</option></select
                ><br />
                <hr />
                <input type="submit" value="Submit" />
            </fieldset>
            
        </form>
    </body>
</html>
