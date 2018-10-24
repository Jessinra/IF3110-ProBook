<?php
    require_once '../App/auth-validator.php';

    $query = $_GET['query'];
    $search_result = find_book($mysqli, $query);

    require_once '../View/search-result.php';
?>