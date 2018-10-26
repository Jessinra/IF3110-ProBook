<?php
    require_once '../Controller/auth-validator.php';

    function is_password_match($input_password, $user) {
        return $input_password == $user['password'];
    }

    function login_failed_handler() {
        $message = "Username/password salah!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

    if (isset($_POST['username'])) {

        $username = $mysqli->escape_string($_POST['username']);
        $user = findUser($username);

        if ($user) {
            if (is_password_match($_POST['password'], $user)) {
                $access_token = setAuthenticated();
                add_active_user($user, $access_token);
                header('Location: search.php');
            }
        }
        login_failed_handler();
    }

    require_once '../View/login.php';
