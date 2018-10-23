<?php
    require_once '../config.php';
    
    if(basename(__FILE__) == 'login.php' || basename(__FILE__) == 'register.php'){
        if(isset($_COOKIE['ID'])){
            $userid = $_COOKIE['ID'];
            $query_string = "SELECT `id` FROM `active_users` WHERE `id`='$userid'";
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
            $query_string = "SELECT `id` FROM `active_users` WHERE `id`='$userid'";
            $query_result = $mysqli->query($query_string);
            if(empty($query_result)){
                header('Location: login.php');
            }
        }
    }
?>