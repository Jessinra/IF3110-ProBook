<?php

require_once '../auth-validator.php';

remove_active_user($mysqli);
invalidate_cookie();
header('Location: login.php');



function invalidate_cookie()
{
    setcookie("ID", "-999", time() + (1));
}