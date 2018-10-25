<?php 
    require_once '../App/auth-validator.php';

    if(isset($_POST['name']) && isset($_POST['address']) && isset($_POST['phone_number'])){
        $user_id = $_COOKIE['ID'];
        $user_name = "\"".$_POST['name']."\"";
        $user_address = "\"".$_POST['address']."\"";
        $user_phone_number = "\"".$_POST['phone_number']."\"";
        if(isset($_FILES['img'])){
            $profpic_dir = "../View/Src/profile/picture/";
            $target_name = $user_id.'.'.pathinfo($_FILES['img']['name'])['extension'];
            move_uploaded_file($_FILES['img']['tmp_name'], $profpic_dir.$target_name);
            $target_name = "\"".$target_name."\"";
            $query_string = "UPDATE `users` SET `img`=$target_name  WHERE `id` = $user_id";
            $mysqli->query($query_string);
        }
        $query_string = "UPDATE `users` SET `name`=$user_name, `address`=$user_address, `phone_number`=$user_phone_number WHERE `id` = $user_id";
        $mysqli->query($query_string);
    }

    $query_result_profile = get_active_user($mysqli);


    if($query_result_profile['img'] === NULL){
        $query_result_profile['img'] = 'default.jpg';
    }

    $relative_path_to_profile_pic = "../View/Src/Profile/Users/";
    $query_result_profile['img'] = $relative_path_to_profile_pic. $query_result_profile['img'];

    require_once '../View/profile.php';
?>