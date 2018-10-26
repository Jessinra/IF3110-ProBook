<?php
    require_once '../Controller/auth-validator.php';

    $query_result_profile_edit = get_active_user();

    require_once '../View/profile-edit.php';