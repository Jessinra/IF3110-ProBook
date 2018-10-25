<?php
    require_once '../App/auth-validator.php';
    require_once '../database/config.php';

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

        /*
        if( $temp == 1)
        {
            $bulan = "Januari";
        }
        else if( $temp == 2)
        {
            $bulan = "Februari";
        }
        else if( $temp == 3)
        {
            $bulan = "Maret";
        }
        else if( $temp == 4)
        {
            $bulan = "April";
        }
        else if( $temp == 5)
        {
            $bulan = "Mei";
        }
        else if( $temp == 6)
        {
            $bulan = "Juni";
        }
        else if( $temp == 7)
        {
            $bulan = "Juli";
        }
        else if( $temp == 8)
        {
            $bulan = "Agustus";
        }
        else if( $temp == 9)
        {
            $bulan = "September";
        }
        else if( $temp == 10)
        {
            $bulan = "Oktober";
        }
        else if( $temp == 11)
        {
            $bulan = "November";
        }
        else if( $temp == 12)
        {
            $bulan = "Desember";
        } 
        */

        $order_date = $tanggal.' '.$bulan[$temp].' '.$tahun; 
        $query_result_history[$idx++] = array(
            'thumbnail' => $r['thumbnail'],
            'title' => $r['title'],
            'amount' => $r['amount'],
            'review' => $r['review'],
            'order-date' => $order_date,
            'order-number' => $r['id']
        );
    }
    
    require_once '../View/history.php';
?>