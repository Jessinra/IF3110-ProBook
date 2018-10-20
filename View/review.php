<!DOCTYPE html>
<html lang="en">
<head>
    <title>WBDee Bookstore</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../View/CSS/header.css">
    <link rel="stylesheet" href="../View/CSS/style.css">
    <link rel="stylesheet" href="../View/CSS/review.css">
</head>
<body>

<div class="header">
    <?php
    include("../View/header.html");
    include("../View/nav-bar.html");
    ?>
</div>

<div class="flex-container review-content">
    <div class="flex-container">
        <div class="flex-column review-book-detail">
            <h1>Platelets are kawai!</h1>
            <span>author</span>
        </div>
        <div class="review-thumbnail">
            <img src="../View/Src/search_result/thumbnail_01.png" alt="thumbnail">
        </div>
    </div>

    <div class="flex-container ratings">
        <h2>Add Rating</h2>
        <div class="star-ratings">
            <div class="placeholder"></div>
            <div class="content">
                <span class="rating" onclick="set_ratings(5)">☆</span>
                <span class="rating" onclick="set_ratings(4)">☆</span>
                <span class="rating" onclick="set_ratings(3)">☆</span>
                <span class="rating" onclick="set_ratings(2)">☆</span>
                <span class="rating" onclick="set_ratings(1)">☆</span>
            </div>
            <div class="placeholder"></div>
        </div>
    </div>

    <form action="#" method="get">
        <div class="flex-container flex-column comment">
            <h2>Add Comment</h2>


            <textarea name="review" id=book-comment placeholder="Write your review here..."
                      onclick=this.select()></textarea>
            <input align=top type="hidden" name="rating" id="number-star" value=0>
            <div class="flex-container">
                <a href="#" id="button-back">
                    <button>Back</button>
                </a>
                <a id="button-submit">
                    <button type="submit">Submit</button>
                </a>
            </div>

        </div>
    </form>
</div>


</body>

<script type="text/javascript" src="../View/JS/fixed-nav-bar.js"></script>
<script type="text/javascript" src="../View/JS/switch_pages.js"></script>
<script type="text/javascript" src="../View/JS/star-rating.js"></script>
<script>
    window.onload = function () {
        switch_to_history();
    };
</script>

</html>
