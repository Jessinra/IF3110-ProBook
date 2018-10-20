<!DOCTYPE html>
<html lang="en">
<head>
    <title>WBDee Bookstore</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../View/CSS/header.css">
    <link rel="stylesheet" href="../View/CSS/style.css">
    <link rel="stylesheet" href="../View/CSS/detail.css">
</head>
<body>

<div class="header">
    <?php
    include("../View/header.html");
    include("../View/nav-bar.html");
    ?>
</div>

<!--MOCK DATA-->
<?php

$book_details = array(
    "title" => "Platelets are kawai!",
    "thumbnail" => "../View/Src/search_result/thumbnail_01.png",
    "author" => "Yamashita Kurada",
    "description" => 'Lorem ipsum dolor sit amet, populo scripserit eos id, vim probo solum forensibus ei. Autem prompta
                consequuntur an ius, sint adhuc ex usu. No his tota dicant, vis aeterno suscipiantur no, an assentior
                intellegebat cum. Falli homero id mea.',
    "ratings" => '4.4',
    "max_rating" => '5.0',
);

$book_reviews[0] = array(
    "username" => "Megumi",
    "thumbnail" => "../View/Src/search_result/thumbnail_03.png",
    "review" => 'Lorem ipsum dolor sit amet, populo scripserit eos id, vim probo solum forensibus ei. Autem prompta
                consequuntur an ius, sint adhuc ex usu. No his tota dicant, vis aeterno suscipiantur no, an assentior
                intellegebat cum. Falli homero id mea.',
    "rating" => "5.0",
    "max_rating" => '5.0',
);
$book_reviews[1] = array(
    "username" => "Yukiko",
    "thumbnail" => "../View/Src/search_result/thumbnail_02.png",
    "review" => 'When present, it specifies that an option should be pre-selected when the page loads. The pre-selected
                option will be displayed first in the drop-down list.',
    "rating" => "3.0",
    "max_rating" => '5.0',
);


?>

<div class="flex-container detail-container">
    <div class="flex-container">
        <div class="flex-column book-details">
            <h1><?php echo $book_details['title'] ?></h1>
            <span><?php echo $book_details['author'] ?></span>
            <div class="description">
                <?php echo $book_details['description'] ?>
            </div>
        </div>
        <div class="flex-column thumbnail-ratings">
            <img src="<?php echo $book_details['thumbnail'] ?>" alt="thumbnail">
            <div class="star-ratings">
                <span class="rating">☆</span>
                <span class="rating">☆</span>
                <span class="rating">☆</span>
                <span class="rating">☆</span>
                <span class="rating">☆</span>
            </div>
            <span class="number-rating"><?php echo $book_details['ratings'] ?>
                / <?php echo $book_details['max_rating'] ?></span>
        </div>
    </div>

    <div class="flex-container flex-column book-order">
        <h2>Order</h2>
        <form action="#" method="get">
            <div class="order-quantity">
                Jumlah :
                <input type="number" title="order-quantity" list="order-quantity" name="order-quantity"
                       onclick=this.select()>
                <datalist id="order-quantity">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </datalist>
            </div>
            <div class="order-submit">
                <button type="submit">Order</button>
            </div>

        </form>
    </div>


    <div class="flex-container flex-column book-review">
        <h2>Reviews</h2>
        <?php foreach ($book_reviews as $review) { ?>
            <div class="flex-container review-container">
                <div class="thumbnail">
                    <img src="<?php echo $review['thumbnail'] ?>" alt="thumbnail">
                </div>
                <div class="review-text">
                    <div class="username">
                        @<?php echo $review['username'] ?>
                    </div>
                    <div class="description">
                        <?php echo $review['review'] ?>
                    </div>
                </div>
                <div class="review-ratings">
                    <div class="star-ratings">
                        <span class="rating">★</span>
                    </div>
                    <span class="number-rating"><?php echo $review['rating'] ?>
                        / <?php echo $book_details['max_rating'] ?></span>
                </div>
            </div>
        <?php } ?>
    </div>


</div>


</body>

<script type="text/javascript" src="../View/JS/fixed-nav-bar.js"></script>
<script type="text/javascript" src="../View/JS/switch_pages.js"></script>
<script type="text/javascript" src="../View/JS/star-rating.js"></script>
<script>
    window.onload = function () {
        switch_to_browse();
        display_star_rating(<?php echo $book_details['ratings']?>);
    };
</script>

</html>
