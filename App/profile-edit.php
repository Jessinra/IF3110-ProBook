<?php
    require_once '../App/auth-validator.php';

    $query_result_profile_edit = get_active_user($mysqli);

    if ($query_result_profile_edit['img'] === NULL) {
        $query_result_profile_edit['img'] = 'default.jpg';
    }

    require_once '../View/profile-edit.php';
?>