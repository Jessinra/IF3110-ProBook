<?php

    require '../config.php';

    // protect against SQL injections
    $username = $mysqli->escape_string($_POST['username']);
    $result = $mysqli->query("SELECT * FROM users WHERE username='$username'");

    if ( $result->num_rows == 0 ){ // User doesn't exist
        $message = "Username salah!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else { // User exists
        $user = $result->fetch_assoc();

        if ( $_POST['password'] == $user['password']) {
            $ID = $user['id'];
            setcookie($ID, time() + (86400 * 30));
            echo "<script type='text/javascript'>alert('$_COOKIE[$id]');</script>";
        }
        else {
            $message = "password salah!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
?>