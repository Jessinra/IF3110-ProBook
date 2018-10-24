<?php

require_once '../App/auth-validator.php';


if (isset($_POST['username'])) {

    $username = $mysqli->escape_string($_POST['username']);
    $user = findUser($mysqli, $username);

    if ($user != null) {
        if (isPasswordMatch($_POST['password'], $user)) {
            setAuthenticated($user);
            add_active_user($mysqli, $user);
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

function setAuthenticated($user)
{
    setcookie("ID", $user['id'], time() + (86400 * 30));
}


require_once '../View/login.php';
