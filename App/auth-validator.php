<?php

    require_once '../Model/mysqli.php';

    if(isCurrentPage('login.php') || isCurrentPage('register.php')){
        if(isAuthenticated($mysqli)) {
            header('Location: ../App/search.php');
        }
    }
    else{
        if(!(isAuthenticated($mysqli))) {
            header('Location: ../App/login.php');
        }
    }

    function isCurrentPage($page_name){
        return basename($_SERVER['PHP_SELF']) == $page_name;
    }

    function isAuthenticated($mysqli){
        if(isset($_COOKIE['ID'])){
            $userid = $_COOKIE['ID'];
            return(isActive($userid));
        }
        return false;
    }
?>