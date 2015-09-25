<?php
    // extract Page selection
    $page = 'index';
    if( isset($_GET['page']))
    $page = $_GET['page'];

    // include libary
    require_once './inc/template.php';

    //render page in template mode
    render('head',array('title'=>'pizza shop'));
    switch ($page){
        case 'index':
            require('./html/index.php');
            break;
        case 'search':
            require('./html/serach.php');
            break;
        default:
            require('./html/error.php');
            break;
    }
    render('foot');
?>  
