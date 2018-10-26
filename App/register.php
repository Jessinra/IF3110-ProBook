<?php

    require_once '../Controller/auth-validator.php';

    function is_register_parameter_complete() {
        return
            isset($_POST['name']) &&
            isset($_POST['username']) &&
            isset($_POST['email']) &&
            isset($_POST['password']) &&
            isset($_POST['address']) &&
            isset($_POST['phone_number']);
    }

    function registerFailedHandler() {
        $message = "Registration Failed!";
        echo "<script type='text/javascript'>alert('$message');</script>";

        header("location: ../App/register.php");
    }

    if (is_register_parameter_complete()) {

        $username = add_new_user();
        if ($username) {
            $user = findUser($username);
            $access_token = setAuthenticated();
            add_active_user($user, $access_token);
            header('Location: search.php');
        } else {
            registerFailedHandler();
        }
    }


    require_once "../View/register.php";