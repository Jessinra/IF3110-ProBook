<?php
    require_once '../Controller/auth-validator.php';

    if (!isset($_GET["order-number"])) {
        header('Location: ../App/404.php');
    }

    $transaction_id = $_GET["order-number"];
    $user_id = get_active_user_id();
    $book_id = find_valid_transaction_book_id($transaction_id, $user_id);

    if (!$book_id) {
        header('Location: ../App/404.php');
    }

    $book_details = find_book_by_id($book_id);
    require_once '../View/review.php';


