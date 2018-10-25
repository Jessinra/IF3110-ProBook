<?php

require_once '../App/auth-validator.php';

if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['address']) &&
isset($_POST['phone_number'])){
    $name = $mysqli->escape_string($_POST['name']);
    $username = $mysqli->escape_string($_POST['username']);
    $email = $mysqli->escape_string($_POST['email']);
    $password = $mysqli->escape_string($_POST['password']);
    $address = $mysqli->escape_string($_POST['address']);
    $phone_number = $mysqli->escape_string($_POST['phone_number']);

    $sql = "INSERT INTO users (username, password, email, name, phone_number, address)" .
            "VALUES ('$username', '$password', '$email', '$name', '$phone_number', '$address')";

    if ($mysqli->query($sql)){
        $result = $mysqli->query("SELECT * FROM users WHERE username='$username'");
        $user = $result->fetch_assoc();
        setAuthenticated($user);
        add_active_user($user);
        header('Location: search.php');
    }
    else{
        registerFailedHandler();
    }
}

function registerFailedHandler()
{
    $message = "Registration Failed!";
    echo "<script type='text/javascript'>alert('$message');</script>";
}

function setAuthenticated($user)
{
    setcookie("ID", $user['id'], time() + (86400 * 30));
}

require_once "../View/register.php";