<?php
    require_once '../Database/config.php';
    require_once '../Controller/constants.php';


    function add_new_user() {
        global $mysqli;

        $name = $mysqli->escape_string($_POST['name']);
        $username = $mysqli->escape_string($_POST['username']);
        $email = $mysqli->escape_string($_POST['email']);
        $password = $mysqli->escape_string($_POST['password']);
        $address = $mysqli->escape_string($_POST['address']);
        $phone_number = $mysqli->escape_string($_POST['phone_number']);

        $query_string =
            "INSERT INTO users (username, password, email, name, phone_number, address)
        VALUES ('$username', '$password', '$email', '$name', '$phone_number', '$address');";
        $mysqli->query($query_string);

        return $username;
    }

    function findUser($username) {
        global $mysqli;

        $result = $mysqli->query("SELECT * FROM users WHERE username='$username'");
        if ($result->num_rows == 0) {
            return null;
        } else {
            return $result->fetch_assoc();
        }
    }

    function isActive($access_token) {
        global $mysqli;

        $query_string = "SELECT `id` FROM `active_users` WHERE `token`='$access_token'";
        $query_result = $mysqli->query($query_string);
        return ($query_result->num_rows != 0);
    }

    function get_active_user_id() {
        global $mysqli;

        $access_token = $_COOKIE["token"];
        $query_string = "SELECT id FROM active_users WHERE `token` = '$access_token';";
        $query_result = $mysqli->query($query_string)->fetch_assoc();
        return $query_result['id'];
    }

    function get_active_user() {
        global $mysqli;
        global $default_profile_image_filename;

        $user_id = get_active_user_id();
        $query_string = "SELECT * FROM users WHERE `id` = '$user_id';";
        $user = $mysqli->query($query_string)->fetch_assoc();

        if ($user['img'] === NULL) {
            $user['img'] = $default_profile_image_filename;
        };

        $user['img'] = expand_user_image_path($user['img']);
        return $user;
    }


    function expand_user_image_path($user_img) {
        global $default_profile_image_path;
        return $default_profile_image_path . $user_img;
    }

    function add_active_user($user, $access_token) {
        global $mysqli;

        $id = $user['id'];
        $query_string = "REPLACE  INTO active_users VALUES ('$id', '$access_token');";
        $mysqli->query($query_string);
    }

    function remove_active_user() {
        global $mysqli;

        $access_token = $_COOKIE["token"];
        $query_string = "DELETE FROM active_users WHERE `token` = '$access_token';";
        $mysqli->query($query_string);
    }

    function update_user_image($user_id, $filename) {
        global $mysqli;

        $query_string = "UPDATE `users` SET `img`='$filename'  WHERE `id` = $user_id";
        $mysqli->query($query_string);
    }

    function update_user_data($user_id) {
        global $mysqli;

        $user_name = $_POST['name'];
        $user_address = $_POST['address'];
        $user_phone_number = $_POST['phone_number'];

        $query_string = "UPDATE `users` SET `name`='$user_name', `address`='$user_address', `phone_number`='$user_phone_number' WHERE `id` = $user_id";
        $mysqli->query($query_string);
    }


    function find_user_history($user_id) {
        global $mysqli;
        global $default_book_image_path;

        $query_string = "SELECT transactions.order_date as order_date,
                     transactions.id as id ,
                     transactions.amount as amount,
                     transactions.is_review as review ,
                     books.img as thumbnail ,
                     books.title as title
                     FROM transactions 
                     JOIN books on transactions.book_id=books.id
                     WHERE transactions.user_id = $user_id
                     ORDER BY order_date ASC";
        $query_result = $mysqli->query($query_string);

        $idx = 0;
        $search_result = array();
        while ($transaction = $query_result->fetch_array()) {

            $search_result[$idx++] = array(
                'thumbnail' => $default_book_image_path . $transaction['thumbnail'],
                'title' => $transaction['title'],
                'amount' => $transaction['amount'],
                'review' => $transaction['review'],
                'order-date' => format_transaction_date($transaction),
                'order-number' => $transaction['id']
            );
        }
        return $search_result;
    }

    function format_transaction_date($transaction) {
        $month_mapping = array(
            1 => "Januari",
            2 => "Februari",
            3 => "Maret",
            4 => "April",
            5 => "Mei",
            6 => "Juni",
            7 => "Juli",
            8 => "Agustus",
            9 => "September",
            10 => "Oktober",
            11 => "November",
            12 => "Desember"
        );

        $date = substr($transaction['order_date'], 8, 2);
        $month = (int)substr($transaction['order_date'], 5, 2);
        $year = substr($transaction['order_date'], 0, 4);

        return $date . ' ' . $month_mapping[$month] . ' ' . $year;
    }


    function addBook($bookDetail) {
        global $mysqli;

        $id = $bookDetail['id'];
        $title = $bookDetail['title'];
        $amount = $bookDetail['amount'];
        $author = $bookDetail['author'];
        $desc = $bookDetail['description'];
        $img = $bookDetail['img'];

        $query_string = "INSERT INTO books values ($id, '$title', $amount, '$author', '$desc', '$img')";
        $mysqli->query($query_string);
    }

    function find_book_by_title($query) {
        global $mysqli;
        global $default_book_image_path;

        $query_string = "SELECT * FROM `books` WHERE `title` LIKE '%$query%'";
        $query_result = $mysqli->query($query_string);

        $search_result = array();
        $idx = 0;
        while ($r = $query_result->fetch_array()) {

            $book_rating = get_rating_and_count($r['id']);
            $search_result[$idx++] = array(
                'id' => $r['id'],
                'thumbnail' => $default_book_image_path . $r['img'],
                'title' => $r['title'],
                'author' => $r['author'],
                'ratings' => $book_rating['average'],
                'max_rating' => 5.0,
                'votes' => $book_rating['count'],
                'description' => $r['desc']
            );
        }

        return $search_result;
    }

    function find_book_by_id($book_id) {
        global $mysqli;
        global $default_book_image_path;

        $query_string = "SELECT * FROM `books` WHERE `id` = $book_id";
        $query_result = $mysqli->query($query_string);

        if ($query_result->num_rows != 0) {

            $book_details = $query_result->fetch_assoc();
            $book_rating = get_rating_and_count($book_details['id']);
            $search_result = array(
                'id' => $book_details['id'],
                'thumbnail' => $default_book_image_path . $book_details['img'],
                'title' => $book_details['title'],
                'author' => $book_details['author'],
                'ratings' => $book_rating['average'],
                'max_rating' => 5.0,
                'description' => $book_details['desc']
            );
            return $search_result;
        }
        return null;
    }


    function get_largest_id($table_name) {
        global $mysqli;

        $query_string = "SELECT max(id) as max_id from $table_name";
        $result = $mysqli->query($query_string)->fetch_assoc();
        return $result['max_id'];
    }


    function add_transaction($transaction) {
        global $mysqli;

        $id = $transaction['id'];
        $user_id = $transaction['user_id'];
        $book_id = $transaction['book_id'];
        $amount = $transaction['amount'];

        $query_string = "INSERT INTO transactions (id, user_id, book_id, amount) VALUES ($id, $user_id, $book_id, $amount)";
        $mysqli->query($query_string);
    }

    function find_valid_transaction_book_id($transaction_id, $user_id) {
        global $mysqli;

        $query_string = "SELECT `book_id` FROM `transactions` WHERE `id`=$transaction_id AND `user_id`=$user_id AND `is_review`=0;";
        $query_result = $mysqli->query($query_string);

        if ($query_result->num_rows == 1) {
            return $query_result->fetch_assoc()["book_id"];
        } else {
            return null;
        }
    }

    function set_transaction_as_reviewed($transaction_id) {
        global $mysqli;

        $query_string_transaction = "UPDATE `transactions` SET `is_review`=1 WHERE `id`=$transaction_id;";
        $mysqli->query($query_string_transaction);
    }


    function add_new_review($review) {
        global $mysqli;

        $transaction_id = $review['transaction_id'];
        $book_id = $review["book_id"];
        $user_id = $review["user_id"];
        $rating = $review["rating"];
        $comment = $review["comment"];

        $query_string = "INSERT INTO reviews VALUES ($transaction_id, $book_id, $user_id, $rating, '$comment')";
        $mysqli->query($query_string);
    }

    function is_review_valid($order_id) {
        global $mysqli;

        $query_string = "SELECT `book_id` FROM `transactions` WHERE `id`=$order_id AND `is_review`=0;";
        $query_result = $mysqli->query($query_string);
        return $query_result->num_rows == 1;
    }


    function find_reviews($book_id) {
        global $mysqli;
        global $default_profile_image_path;

        $query_string = "SELECT username, img, rating, comment FROM reviews INNER JOIN users ON reviews.user_id = users.id WHERE reviews.book_id=$book_id;";
        $query_result = $mysqli->query($query_string);

        $search_result = array();
        $idx = 0;
        while ($r = $query_result->fetch_array()) {
            $search_result[$idx++] = array(
                'username' => $r['username'],
                'thumbnail' => $default_profile_image_path . $r['img'],
                'review' => $r['comment'],
                'rating' => $r['rating'],
                'max_rating' => 5.0,
            );
        }
        return $search_result;
    }

    function get_rating_and_count($id_book) {
        global $mysqli;

        $query_string = "SELECT avg(`rating`) as average, count(*) as count FROM `reviews` WHERE `book_id`='$id_book' GROUP BY `book_id`;";
        $query_result = $mysqli->query($query_string);

        if ($query_result->num_rows != 0) {
            $search_result = $query_result->fetch_assoc();
        } else {
            $search_result = array(
                'average' => 0,
                'count' => 0,
            );
        }
        return $search_result;
    }





