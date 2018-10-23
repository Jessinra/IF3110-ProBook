<?php
    require_once '../auth-validator.php'
    require_once '../config.php';

    // $userid = $_COOKIE['ID'];
    // $query_string = 'SELECT `username`, `name`, `email`, `phone_number`, `img`, `address`  FROM users WHERE id = $userid';
    // $query_result = $mysqli->query($query_string);
    
    // echo $query_result;
    // echo "TAHI";
    // foreach ($query_result as $temp_value){
    //     echo $temp_value;
    // }

    require_once '../View/profile-edit.php';
?>