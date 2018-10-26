<?php

    require_once '../Controller/auth-validator.php';

    remove_active_user();
    invalidate_cookie();
    header('Location: login.php');


    function invalidate_cookie() {
        setcookie("token", "invalid", time() + (1));
    }