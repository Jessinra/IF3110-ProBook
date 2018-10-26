<?php
    require_once '../Controller/auth-validator.php';

    $query = $_GET['query'];
    $search_result = find_book_by_title($query);

    require_once '../View/search-result.php';