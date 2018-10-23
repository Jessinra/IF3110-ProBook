<?php

    require_once '../config.php';
    require_once '../auth-validator.php';

    // protect against SQL injections
    if(isset($_POST['username'])){
        $username = $mysqli->escape_string($_POST['username']);
        header("Location: ".$_POST['username']."php");
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
                $query_string = "INSERT IGNORE INTO active_users values ('$ID')";
                $query_result = $mysqli->query($query_string);
                echo "<script type='text/javascript'>alert('$_COOKIE[$id]');</script>";
            }
            else {
                $message = "password salah!";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        }
    }
?>