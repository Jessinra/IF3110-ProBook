<?php
require_once '../Database/config.php';
require_once '../Static/default_routes.php';
//error_reporting(0);

function findUser($username)
{
    global $mysqli;
    $result = $mysqli->query("SELECT * FROM users WHERE username='$username'");
    if ($result->num_rows == 0) {
        return null;
    } else {
        return $result->fetch_assoc();
    }
}

function isActive($access_token)
{
    global $mysqli;
    $query_string = "SELECT `id` FROM `active_users` WHERE `token`='$access_token'";
    $query_result = $mysqli->query($query_string);
    return ($query_result->num_rows != 0);
}

function get_active_user()
{
    global $mysqli;
    $user_id = get_active_user_id();
    $queryString = "SELECT * FROM users WHERE `id` = '$user_id';";
    return $mysqli->query($queryString)->fetch_assoc();
}

function get_active_user_id(){
    global $mysqli;
    $access_token = $_COOKIE["token"];
    $query_string = "SELECT id FROM active_users WHERE `token` = '$access_token';";
    $query_result = $mysqli->query($query_string)->fetch_assoc();
    return $query_result['id'];
}

function add_active_user($user, $access_token)
{
    global $mysqli;
    $id = $user['id'];
    $queryString = "REPLACE  INTO active_users VALUES ('$id', '$access_token');";
    $mysqli->query($queryString);
}

function remove_active_user()
{
    global $mysqli;
    $access_token = $_COOKIE["token"];
    $query_string = "DELETE FROM active_users WHERE `token` = '$access_token';";
    $mysqli->query($query_string);
}

function addBook($bookDetail)
{
    global $mysqli;

    $id = $bookDetail['id'];
    $title = $bookDetail['title'];
    $amount = $bookDetail['amount'];
    $author = $bookDetail['author'];
    $desc = $bookDetail['description'];
    $img = $bookDetail['img'];

    $queryString = "INSERT INTO books values ($id, '$title', $amount, '$author', '$desc', '$img')";
    $mysqli->query($queryString);
}

function find_book_by_title($query)
{
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
            'thumbnail' => $default_book_image_path. $r['img'],
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

function find_book_by_id($book_id)
{
    global $mysqli;
    global $default_book_image_path;
    $query_string = "SELECT * FROM `books` WHERE `id` = $book_id";
    $query_result = $mysqli->query($query_string);

    if ($query_result->num_rows != 0){


        $book_details = $query_result->fetch_assoc();
        $book_rating = get_rating_and_count($book_details['id']);
        $search_result = array(
            'id' => $book_details['id'],
            'thumbnail' => $default_book_image_path. $book_details['img'],
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

function get_largest_id($table_name){
    global $mysqli;
    $queryString = "SELECT max(id) as max_id from $table_name";
    $result = $mysqli->query($queryString)->fetch_assoc();
    return $result['max_id'];
}


function add_transaction($transaction)
{
    global $mysqli;

    $id = $transaction['id'];
    $user_id = $transaction['user_id'];
    $book_id = $transaction['book_id'];
    $amount = $transaction['amount'];

    $queryString = "INSERT INTO transactions (id, user_id, book_id, amount) VALUES ($id, $user_id, $book_id, $amount)";
    $mysqli->query($queryString);
}

function add_review($review)
{
    global $mysqli;

    $id = $review['id'];
    $transaction_id = $review['transaction_id'];
    $book_id = $review["book_id"];
    $user_id = $review["user_id"];
    $rating = $review["rating"];
    $comment = $review["comment"];

    $queryString = "INSERT INTO reviews VALUES ($id, $transaction_id, $book_id, $user_id, $rating, '$comment')";
    $mysqli->query($queryString);

}

function find_reviews($book_id)
{
    global $mysqli;
    global $default_profile_image_path;

    $queryString = "SELECT username, img, rating, comment FROM reviews INNER JOIN users ON reviews.user_id = users.id WHERE reviews.book_id=$book_id;";
    $query_result = $mysqli->query($queryString);

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

function get_rating_and_count($id_book){

    global $mysqli;
    $query_string = "SELECT avg(`rating`) as average, count(*) as count FROM `reviews` WHERE `book_id`='$id_book' GROUP BY `book_id`;";
    $query_result = $mysqli->query($query_string);

    if ($query_result->num_rows != 0){
        $search_result = $query_result->fetch_assoc();
    }
    else{
        $search_result = array(
            'average' => 0,
            'count' => 0,
        );
    }

    return $search_result;
}


