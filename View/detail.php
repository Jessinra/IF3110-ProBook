<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pro-Book</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../View/CSS/header.css">
    <link rel="stylesheet" href="../View/CSS/style.css">
    <link rel="stylesheet" href="../View/CSS/detail.css">
    <link rel="stylesheet" href="../View/CSS/booking_modal.css">
</head>
<body>

<div class="header">
    <?php
    include("../View/header.php");
    include("../View/nav-bar.html");
    ?>
</div>

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
            <span class="number-rating"><?php echo sprintf("%.1f", $book_details['ratings']) ?>
                / <?php echo sprintf("%.1f", $book_details['max_rating']) ?></span>
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
                <button type="button" onclick=submit_order()>Order</button>
            </div>

        </form>
    </div>

    <div id="order_success"></div>


    <div class="flex-container flex-column book-review">

        <?php if (sizeof($book_reviews) != 0) { ?>
            <h2>Reviews</h2>
        <?php } ?>
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
                    <span class="number-rating"><?php echo sprintf("%.1f", $review['rating']) ?>
                        / <?php echo sprintf("%.1f", $book_details['max_rating']) ?></span>
                </div>
            </div>
        <?php } ?>
    </div>
</div>


<?php
include("../View/booking_modal.php");
?>
<input type="hidden" id="hidden_book_id" value="<?php echo $_GET['id'] ?>">


</body>

<script type="text/javascript" src="../View/JS/fixed-nav-bar.js"></script>
<script type="text/javascript" src="../View/JS/switch_pages.js"></script>
<script type="text/javascript" src="../View/JS/star-rating.js"></script>
<script type="text/javascript" src="../View/JS/ajax.js"></script>
<script type="text/javascript" src="../View/JS/modal.js"></script>
<script>
    window.onload = function () {
        switch_to_browse();
        display_star_rating(<?php echo $book_details['ratings']?>);
    };
</script>

<script>
    function show_response(responseText) {
        open_modal("#booking-modal");
        document.querySelector("#modal-nomor-transaksi").textContent = responseText;
    }

    function submit_order() {

        var book_id = document.querySelector("#hidden_book_id");
        book_id = book_id.value;

        var order_qty = document.getElementsByName("order-quantity")[0];
        order_qty = order_qty.value;

        var url = "../App/book_order.php";
        var payload = {
            "order-quantity": order_qty,
            "book_id": book_id
        };
        postAjax(url, payload, show_response);
    }
</script>


</html>
