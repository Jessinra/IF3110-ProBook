<?php

require_once '../App/auth-validator.php';


if (isset($_POST['username'])) {

    $username = $mysqli->escape_string($_POST['username']);
    $user = findUser($username);

    if ($user != null) {
        if (isPasswordMatch($_POST['password'], $user)) {
            $access_token = setAuthenticated();
            add_active_user($user, $access_token);
            header('Location: search.php');
        }
        else{
            loginFailedHandler();
        }
    }
    else{
        loginFailedHandler();
    }
}

function isPasswordMatch($input_password, $user)
{
    return $input_password == $user['password'];
}

function loginFailedHandler()
{
    $message = "Username/password salah!";
    echo "<script type='text/javascript'>alert('$message');</script>";
}

require_once '../View/login.php';
