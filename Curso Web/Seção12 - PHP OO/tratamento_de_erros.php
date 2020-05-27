<?php

    try{
        echo ' ***** try *******';

        //$sql = 'select * from clientes';
        //mysql_query($sql);

    }catch( Error  $e){
        echo '<h3>CATCH</h3>';
        echo $e;

    } finally{
        echo ' ***** finally*******';
    }

?>