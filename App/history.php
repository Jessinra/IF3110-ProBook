<?php 
    require_once '../App/auth-validator.php';
    require_once '../database/config.php';

    $user_id = $_COOKIE['ID'];
    $idx = 0;
    $query_result_history = array();
    $query_string_history = $mysqli->query("SELECT transactions.id as id , transactions.amount as amount , transactions.is_review as review , books.img as thumbnail , books.title as title
    FROM transactions JOIN books on transactions.book_id=books.id
    WHERE transactions.user_id = $user_id");

    while( $r = $query_string_history->fetch_array()){
        $query_result_history[$idx++] = array(
            'thumbnail' => $r['thumbnail'],
            'title' => $r['title'],
            'amount' => $r['amount'],
            'review' => $r['review'],
            //'order-date' => $r['order-date'],
            'order-number' => $r['id']
        );
    }
    
    require_once '../View/history.php';
?>