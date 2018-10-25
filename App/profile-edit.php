<?php
    require_once '../App/auth-validator.php';

    $query_result_profile_edit = get_active_user($mysqli);

    if ($query_result_profile_edit['img'] === NULL) {
        $query_result_profile_edit['img'] = 'default.jpg';
    }

    $relative_path_to_profile_pic = "../View/Src/Profile/Users/";
    $query_result_profile_edit['img'] = $relative_path_to_profile_pic. $query_result_profile_edit['img'];

    require_once '../View/profile-edit.php';
?>