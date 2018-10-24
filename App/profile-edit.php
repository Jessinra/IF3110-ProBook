<?php
    require_once '../auth-validator.php';

    $query_result_profile_edit = getActiveUser($mysqli);

    if ($query_result_profile_edit['img'] === NULL) {
        $query_result_profile_edit['img'] = 'default.jpg';
    }

    $query_result_profile_edit['img'] = "../View/Src/profile/sample/" . $query_result_profile_edit['img'];

    require_once '../View/profile-edit.php';
?>