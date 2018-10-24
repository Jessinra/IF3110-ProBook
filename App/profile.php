<?php 
    require_once '../auth-validator.php';

    $query_result_profile = getActiveUser($mysqli);


    if($query_result_profile['img'] === NULL){
        $query_result_profile['img'] = 'default.jpg';
    }

    $query_result_profile['img'] = "../View/Src/profile/sample/".$query_result_profile['img'];

    require_once '../View/profile.php';
?>