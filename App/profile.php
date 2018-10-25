<?php

    require_once '../App/auth-validator.php';

    function clear_cache(){
        header("Cache-Control: no-cache, must-revalidate");
    };

    if(isset($_POST['name']) && isset($_POST['address']) && isset($_POST['phone_number'])){

        $user_id = get_active_user_id();
        $user_name = "\"".$_POST['name']."\"";
        $user_address = "\"".$_POST['address']."\"";
        $user_phone_number = "\"".$_POST['phone_number']."\"";
        if(isset($_FILES['img']) && $_FILES['img']['name'] != ""){

            $target_name = $default_profile_image_prefix. $user_id.'.'.pathinfo($_FILES['img']['name'])['extension'];
            move_uploaded_file($_FILES['img']['tmp_name'], $default_profile_image_path.$target_name);

            $target_name = "\"".$target_name."\"";
            $query_string = "UPDATE `users` SET `img`=$target_name  WHERE `id` = $user_id";
            $mysqli->query($query_string);
        }
        $query_string = "UPDATE `users` SET `name`=$user_name, `address`=$user_address, `phone_number`=$user_phone_number WHERE `id` = $user_id";
        $mysqli->query($query_string);
    }

    $query_result_profile = get_active_user();


    if($query_result_profile['img'] === NULL){
        $query_result_profile['img'] = 'default.jpg';
    }

    $query_result_profile['img'] = $default_profile_image_path. $query_result_profile['img'];
    clear_cache();
    require_once '../View/profile.php';
?>