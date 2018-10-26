<?php
    require_once '../Controller/auth-validator.php';
    require_once '../Model/mysqli.php';

    function is_return_after_review() {
        return isset($_POST['order-number']);
    }

    function new_review_handler() {

        $transaction_id = $_POST['order-number'];
        if (is_review_valid($transaction_id)) {

            $review = array(
                "transaction_id" => $transaction_id,
                "book_id" => $_POST['book-id'],
                "user_id" => get_active_user_id(),
                "rating" => $_POST['rating'],
                "comment" => $_POST['review'],
            );
            add_new_review($review);
            set_transaction_as_reviewed($transaction_id);
        }
    }

    if (is_return_after_review()) {
        new_review_handler();
    };

    $user_id = get_active_user_id();
    $query_result_history = find_user_history($user_id);

    require_once '../View/history.php';
