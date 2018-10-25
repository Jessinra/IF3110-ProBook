<?php

    require_once '../Model/mysqli.php';

    if(isCurrentPage('login.php') || isCurrentPage('register.php')){
        if(isAuthenticated()) {
            header('Location: ../App/search.php');
        }
    }
    else{
        if(!(isAuthenticated())) {
            header('Location: ../App/login.php');
        }
    }

    function isCurrentPage($page_name){
        return basename($_SERVER['PHP_SELF']) == $page_name;
    }

    function isAuthenticated(){
        if(isset($_COOKIE['token'])){
            $access_token = $_COOKIE['token'];
            return(isActive($access_token));
        }
        return false;
    }

    function setAuthenticated()
    {
        $access_token = generate_access_token();
        setcookie("token", $access_token, time() + (86400 * 30));
        return $access_token;
    }

    function generate_access_token($length = 50)
    {
        $characters = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
}


?>