<?php

    try{
        echo ' ***** try *******';

        //$sql = 'select * from clientes';
        //mysql_query($sql);
        if(!file_exists('require_arquivo_a.php')){
            throw new Exception('O arquivo não existe');
            throw new Error('ERRO : O arquivo não existe');
        }

    }catch( Error  $e){
        echo '<h3>CATCH ERRO</h3>';
        echo $e;

    }catch( Exception $e){
        echo '<h3>CATCH EXCEPTION</h3>';
        echo $e;

    } finally{
        echo ' ***** finally*******';
    }

?>