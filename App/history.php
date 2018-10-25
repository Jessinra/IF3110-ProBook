<?php
    require_once '../App/auth-validator.php';

    $user_id = $_COOKIE['ID'];

    if(isset($_POST['order-number'])){
        $book_id = $_POST['book-id'];
        $order_num = $_POST['order-number'];
        $rating = $_POST['rating'];

        if($mysqli->query("SELECT `book_id` FROM `transactions` WHERE `id`=$order_num AND `is_review`=0;")->num_rows==1){
            $review = "\"".$_POST['review']."\"";
            $query_string_review = "INSERT INTO `reviews` (`transaction_id`, `book_id`, `user_id`, `rating`, `comment`) VALUES ($order_num, $book_id, $user_id, $rating, $review);";
            $mysqli->query($query_string_review);
            $query_string_transaction = "UPDATE `transactions` SET `is_review`=1 WHERE `id`=$order_num;";
            $mysqli->query($query_string_transaction);
        }
    }

    $idx = 0;
    $query_result_history = array();
    $query_string_history = $mysqli->query("SELECT transactions.order_date as order_date,transactions.id as id , transactions.amount as amount , transactions.is_review as review , books.img as thumbnail , books.title as title
    FROM transactions JOIN books on transactions.book_id=books.id
    WHERE transactions.user_id = $user_id");

    while( $r = $query_string_history->fetch_array()){
        $temp = (int) substr($r['order_date'], 5, 2);
        $tahun = substr($r['order_date'], 0, 4);
        $tanggal = substr($r['order_date'], 8, 2);
        $bulan = [1=>"Januari", 2=>"Februari", 3=>"Maret", 4=>"April", "Mei", "Juni",
                    "Juli", "Agustus", "September", "Oktober", "November", "Desember"];


        $order_date = $tanggal.' '.$bulan[$temp].' '.$tahun; 
        $query_result_history[$idx++] = array(
            'thumbnail' => $default_book_image_path. $r['thumbnail'],
            'title' => $r['title'],
            'amount' => $r['amount'],
            'review' => $r['review'],
            'order-date' => $order_date,
            'order-number' => $r['id']
        );
    }
    
    require_once '../View/history.php';
?>