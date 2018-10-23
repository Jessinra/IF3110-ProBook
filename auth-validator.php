<?php
    require_once '../config.php';
    
    // echo basename($_SERVER['PHP_SELF'])."<br/>";
    // echo basename(__FILE__);

    if(basename($_SERVER['PHP_SELF']) == 'login.php' || basename($_SERVER['PHP_SELF']) == 'register.php'){
        if(isset($_COOKIE['ID'])){
            $userid = $_COOKIE['ID'];
            $query_string = "SELECT `id` FROM `active_users` WHERE `id`=$userid";
            $query_result = $mysqli->query($query_string);
            if(!empty($query_result)){
                header('Location: search.php');
            }
        }
    }
    else{
        if(!isset($_COOKIE['ID'])){
            header('Location: login.php');
        }
        else{
            $userid = $_COOKIE['ID'];
            $query_string = "SELECT `id` FROM `active_users` WHERE `id`=$userid";
            $query_result = $mysqli->query($query_string);
            if(empty($query_result)){
                header('Location: login.php');
            }
        }
    }
?>