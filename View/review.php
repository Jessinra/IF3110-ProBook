<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pro-Book</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../View/CSS/header.css">
    <link rel="stylesheet" href="../View/CSS/style.css">
    <link rel="stylesheet" href="../View/CSS/review.css">
</head>

<body>
<?php include("../View/header.php"); ?>
<div class="flex-container review-container">
    <div class="flex-container">
        <div class="flex-column review-book-detail">
            <h1><?php echo $book_details['title'] ?></h1>
            <span><?php echo $book_details['author'] ?></span>
        </div>
        <div class="review-thumbnail">
            <img src="<?php echo $book_details['thumbnail'] ?>" alt="thumbnail">
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

    <form action="../App/history.php" method="post" onsubmit="return validate_review();">
        <div class="flex-container flex-column comment">
            <h2>Add Comment</h2>
            <textarea name="review" id="book-comment" placeholder="Write your review here..."
                      onclick=this.select()></textarea>

            <input type="hidden" name="order-number" id="order-number" value=<?php echo $transaction_id ?>>
            <input type="hidden" name="book-id" id="book-id" value=<?php echo $book_id ?>>
            <input type="hidden" name="rating" id="number-star" value=0>

            <div class="flex-container">
                <a href="../App/history.php" id="button-back">
                    <button type="button">Back</button>
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
<script type="text/javascript" src="../View/JS/validate-review.js"></script>
<script>
    window.onload = function () {
        switch_to_history();
    };
</script>

</html>
