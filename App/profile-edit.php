<?php
    require_once '../App/auth-validator.php';

    $query_result_profile_edit = get_active_user($mysqli);

    if ($query_result_profile_edit['img'] === NULL) {
        $query_result_profile_edit['img'] = 'default.jpg';
    }

    $query_result_profile_edit['img'] = "../View/Src/profile/picture/" . $query_result_profile_edit['img'];

    require_once '../View/profile-edit.php';
?>