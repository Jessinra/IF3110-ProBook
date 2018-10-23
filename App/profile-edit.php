<?php
    require_once '../auth-validator.php';
    require_once '../config.php';

    $user_id = $_COOKIE["ID"];
    $query_string_profile_edit = "SELECT `name`, `address`, `phone_number`, `img` FROM `users` WHERE `id` = $user_id;";
    $query_result_profile_edit = $mysqli->query($query_string_profile_edit)->fetch_assoc();

    if($query_result_profile_edit['img'] === NULL){
        $query_result_profile_edit['img'] = 'default.jpg';
    }

    $query_result_profile_edit['img'] = "../View/Src/profile/sample/".$query_result_profile_edit['img'];

    require_once '../View/profile-edit.php';
?>