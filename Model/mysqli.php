<?php
require_once '../Database/config.php';
//error_reporting(0);

function findUser($mysqli, $username)
{
    $result = $mysqli->query("SELECT * FROM users WHERE username='$username'");
    if ($result->num_rows == 0) {
        return null;
    } else {
        return $result->fetch_assoc();
    }
}

function isActive($mysqli, $userid)
{
    $query_string = "SELECT `id` FROM `active_users` WHERE `id`=$userid";
    $query_result = $mysqli->query($query_string);
    return ($query_result->num_rows != 0);
}

function get_active_user($mysqli)
{
    $user_id = $_COOKIE["ID"];
    $queryString = "SELECT `username`, `name`, `email`, `address`, `phone_number`, `img` FROM `users` WHERE `id` = $user_id;";
    return $mysqli->query($queryString)->fetch_assoc();
}


function add_active_user($mysqli, $user)
{
    $ID = $user['id'];

    $queryString = "INSERT IGNORE INTO active_users VALUES ('$ID')";
    $mysqli->query($queryString);
}

function remove_active_user($mysqli)
{

    $user_id = $_COOKIE["ID"];
    $query_string = "DELETE FROM active_users WHERE `id` = $user_id;";
    $mysqli->query($query_string);
}

function addBook($mysqli, $bookDetail)
{
    $id = $bookDetail['id'];
    $title = $bookDetail['title'];
    $amount = $bookDetail['amount'];
    $author = $bookDetail['author'];
    $desc = $bookDetail['description'];
    $img = $bookDetail['img'];

    $queryString = "INSERT INTO books values ($id, '$title', $amount, '$author', '$desc', '$img')";
    $mysqli->query($queryString);
}

function find_book_by_title($mysqli, $query)
{

    $query_string = "SELECT * FROM `books` WHERE `title` LIKE '%$query%'";
    $query_result = $mysqli->query($query_string);

    $search_result = array();
    $idx = 0;
    while ($r = $query_result->fetch_array()) {
        $search_result[$idx++] = array(
            'id' => $r['id'],
            'thumbnail' => $r['img'],
            'title' => $r['title'],
            'author' => $r['author'],
            'ratings' => 4.0,
            'max_rating' => 5.0,
            'votes' => 10000,
            'description' => $r['desc']
        );
    }

    return $search_result;
}

function find_book_by_id($mysqli, $book_id)
{

    $query_string = "SELECT * FROM `books` WHERE `id` = $book_id";
    $query_result = $mysqli->query($query_string);

    if ($query_result->num_rows != 0){
        $book_details = $query_result->fetch_assoc();
        $search_result = array(
            'id' => $book_details['id'],
            'thumbnail' => $book_details['img'],
            'title' => $book_details['title'],
            'author' => $book_details['author'],
            'ratings' => 4.0,
            'max_rating' => 5.0,
            'description' => $book_details['desc']
        );
        return $search_result;
    }
    return null;
}

function get_largest_id($mysqli, $table_name){
    $queryString = "SELECT max(id) as max_id from $table_name";
    $result = $mysqli->query($queryString)->fetch_assoc();
    return $result['max_id'];
}


function add_transaction($mysqli, $transaction)
{
    $id = $transaction['id'];
    $user_id = $transaction['user_id'];
    $book_id = $transaction['book_id'];
    $amount = $transaction['amount'];

    $queryString = "INSERT INTO transactions (id, user_id, book_id, amount) VALUES ($id, $user_id, $book_id, $amount)";
    $mysqli->query($queryString);
}

function add_review($mysqli, $review)
{
    $id = $review['id'];
    $transaction_id = $review['transaction_id'];
    $book_id = $review["book_id"];
    $user_id = $review["user_id"];
    $rating = $review["rating"];
    $comment = $review["comment"];

    $queryString = "INSERT INTO reviews VALUES ($id, $transaction_id, $book_id, $user_id, $rating, '$comment')";
    $mysqli->query($queryString);

}

function find_reviews($mysqli, $book_id)
{

    $queryString = "SELECT username, img, rating, comment FROM reviews INNER JOIN users ON reviews.user_id = users.id WHERE reviews.book_id=$book_id;";
    $query_result = $mysqli->query($queryString);


    $search_result = array();
    $idx = 0;
    while ($r = $query_result->fetch_array()) {
        $search_result[$idx++] = array(
            'username' => $r['username'],
            'thumbnail' => $r['img'],
            'review' => $r['comment'],
            'rating' => $r['rating'],
            'max_rating' => 5.0,
        );
    }

    return $search_result;
}


function test_addBook()
{

    $bookDetail = array(
        "id" => 500,
        "title" => "d1 book",
        "amount" => 2,
        "author" => "mr rsdfaight",
        "description" => "lorem itsum dorol dnsnadk",
        "img" => "../View/Src/sdlfkajdlkfajl.jpg"
    );

    addBook($mysqli, $bookDetail);
}




