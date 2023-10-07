<?php
if(isset($_REQUEST['degree'])){
    foreach ( $_REQUEST['degree'] as $deg){

        echo $deg," ";
    }
}

?>