<?php

require_once "../Model/mysqli.php";

//decode post data into array, DON'T CHANGE ANY OF THESE
$payload = json_decode($_POST['payload'], true);

//Process order
$largest_used_id = get_largest_id($mysqli, "transactions");
$transaction = array(
    "id" => ++$largest_used_id,
    "user_id" => $_COOKIE['ID'],
    "book_id" => $payload['book_id'],
    "amount" => $payload['order-quantity'],
);

add_transaction($mysqli, $transaction);
echo $transaction['id'];