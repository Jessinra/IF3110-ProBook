<?php 
    require_once '../auth-validator.php';
    require_once '../config.php';

    $user_id = $_COOKIE["ID"];
    $query_string_profile = "SELECT `username`, `name`, `email`, `address`, `phone_number`, `img` FROM `users` WHERE `id` = $user_id;";
    $query_result_profile = $mysqli->query($query_string_profile)->fetch_assoc();

    if($query_result_profile['img'] === NULL){
        $query_result_profile['img'] = 'default.jpg';
    }

    $query_result_profile['img'] = "../View/Src/profile/sample/".$query_result_profile['img'];

    require_once '../View/profile.php';
?>