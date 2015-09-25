<?php
    function render( $part, $values=array() ){
        $filePath = './template/'.$part.'php';
        
        if(file_exists($filePath)){
            extract($values);
            require $filePath;
        }
        
    }
?>