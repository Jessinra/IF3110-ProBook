<?php
require_once '../config.php';

function findUser($mysqli, $username)
{
    $result = $mysqli->query("SELECT * FROM users WHERE username='$username'");
    if ($result->num_rows == 0) {
        return null;
    } else {
        return $result->fetch_assoc();
    }
}

function isActive($mysqli, $userid){
    $query_string = "SELECT `id` FROM `active_users` WHERE `id`=$userid";
    $query_result = $mysqli->query($query_string);
    return ($query_result->num_rows != 0);
}

function get_active_user($mysqli){
    $user_id = $_COOKIE["ID"];
    $queryString = "SELECT `username`, `name`, `email`, `address`, `phone_number`, `img` FROM `users` WHERE `id` = $user_id;";
    return $mysqli->query($queryString)->fetch_assoc();
}


function add_active_user($mysqli, $user)
{
    $ID = $user['id'];

    $queryString = "INSERT IGNORE INTO active_users VALUES ('$ID')";
    $mysqli->query($queryString);
}

function remove_active_user($mysqli){

    $user_id = $_COOKIE["ID"];
    $query_string = "DELETE FROM active_users WHERE `id` = $user_id;";
    $mysqli->query($query_string);
}

function addBook($mysqli, $bookDetail)
{
    $id = $bookDetail['id'];
    $title = $bookDetail['title'];
    $amount = $bookDetail['amount'];
    $author = $bookDetail['author'];
    $desc = $bookDetail['description'];
    $img = $bookDetail['img'];

    $queryString = "INSERT INTO books values ($id, '$title', $amount, '$author', '$desc', '$img')";
    $mysqli->query($queryString);
}

function test_addBook(){

    $bookDetail = array(
        "id" => 500,
        "title" => "d1 book",
        "amount" => 2,
        "author" => "mr rsdfaight",
        "description" => "lorem itsum dorol dnsnadk",
        "img" => "../View/Src/sdlfkajdlkfajl.jpg"
    );

    addBook($mysqli, $bookDetail);
}




