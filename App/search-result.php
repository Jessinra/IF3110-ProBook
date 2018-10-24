<?php
    require_once '../App/auth-validator.php';

    $query_result_search_result = array();
    $idx = 0;
    $query_string_search_result = $mysqli->query("SELECT  `title`, `writer`, `desc`, `img` FROM `books`");
    while( $r = $query_string_search_result->fetch_array()){
        $query_result_search_result[$idx++] = array(
            'thumbnail' => "../View/Src/search_result/".$r['img'],
            'title' => $r['title'],
            'author' => $r['writer'],
            'ratings' => 4.0,
            'max_rating' => 5.0,
            'votes' => 10000,
            'description' => $r['desc']
        );
    }


    require_once '../View/search-result.php';
?>