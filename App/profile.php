<?php 
    require_once '../App/auth-validator.php';

    $query_result_profile = get_active_user($mysqli);


    if($query_result_profile['img'] === NULL){
        $query_result_profile['img'] = 'default.jpg';
    }

    require_once '../View/profile.php';
?>