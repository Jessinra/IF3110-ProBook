<?php

    require_once '../Controller/auth-validator.php';


    function handle_update_profile() {

        $user_id = get_active_user_id();
        if (is_image_updated()) {
            $filename = set_filename($user_id);
            store_uploaded_image($filename);
            update_user_image($user_id, $filename);
        }
        update_user_data($user_id);
    }

    function is_image_updated() {
        return isset($_FILES['img']) && $_FILES['img']['name'] != "";
    }

    function set_filename($user_id) {
        global $default_profile_image_prefix;
        return $default_profile_image_prefix . $user_id . '.' . pathinfo($_FILES['img']['name'])['extension'];
    }

    function store_uploaded_image($filename) {
        global $default_profile_image_path;
        move_uploaded_file($_FILES['img']['tmp_name'], $default_profile_image_path . $filename);
    }

    function clear_cache() {
        header("Cache-Control: no-cache, must-revalidate");
    }

    if (isset($_POST['name']) && isset($_POST['address']) && isset($_POST['phone_number'])) {
        handle_update_profile();
        clear_cache();
    }

    $query_result_profile = get_active_user();
    require_once '../View/profile.php';