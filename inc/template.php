<?php
    function render( $part, $values=array() ){
        $filePath = './template/tpl.'.$part.'.php';
        
        if(file_exists($filePath)){
            extract($values);
            include $filePath;
        }
        
    }
?>