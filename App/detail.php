<?php
    require_once '../App/auth-validator.php';

    $book_id = $_GET['id'];
    $book_details = find_book_by_id($mysqli, $book_id);
    $book_reviews = find_reviews($mysqli, $book_id);

    // Redirect to 404 if not found
    if (!$book_details || !$book_reviews){
        header("Location: ../App/error_404.php");
    }

    require_once '../View/detail.php';
