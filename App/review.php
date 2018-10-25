<?php
    require_once '../App/auth-validator.php';

    $user_id = $_COOKIE["ID"];

    if(isset($_GET["order-number"])){
        $id_trans = $_GET["order-number"];
        $query_string_trans = "SELECT `book_id` FROM `transactions` WHERE `id`=$id_trans AND `user_id`=$user_id AND `is_review`=0;";
        $query_result_trans = $mysqli->query($query_string_trans);
        if($query_result_trans->num_rows==1){
            $pic_dir = "../View/Src/search_result/";
            $book_id = $query_result_trans->fetch_assoc()["book_id"];
            $query_string_book = "SELECT `title`, `author`, `img` FROM `books` WHERE `id`=$book_id;";
            $query_result_book = $mysqli->query($query_string_book)->fetch_assoc();
            $book_details = array(
                "title" => $query_result_book['title'],
                "thumbnail" => $pic_dir.$query_result_book['img'],
                "author" => $query_result_book['author']
            );
            require_once '../View/review.php';
        }
        else{
            header('Location: ../App/history.php');
        }
    }
    header('Location: ../App/history.php');
?>