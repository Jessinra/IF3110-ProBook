<?php

    require_once "../Model/mysqli.php";

    $largest_used_id = get_largest_id("transactions");
    $payload = json_decode($_POST['payload'], true);
    $transaction = array(
        "id" => ++$largest_used_id,
        "user_id" => get_active_user_id(),
        "book_id" => $payload['book_id'],
        "amount" => $payload['order-quantity'],
    );

    add_transaction($transaction);
    echo $transaction['id'];