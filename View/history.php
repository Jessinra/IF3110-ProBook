<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pro-Book</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../View/CSS/header.css">
    <link rel="stylesheet" href="../View/CSS/style.css">
    <link rel="stylesheet" href="../View/CSS/history.css">
</head>
<body>

<?php include("../View/header.php"); ?>

<div class="page-title">
    <h1 id="page-title-search">History</h1>
</div>

<?php foreach ($query_result_history as $query_entry) { ?>
    <div class="history container">
        <div class="history thumbnail">
            <img src="<?php echo $query_entry['thumbnail'] ?>" alt="search thumbnail">
        </div>

        <div class="history description-left">
            <div class="title">
                <?php echo $query_entry['title'] ?>
            </div>
            <div>
                <span id="amount">Jumlah : <?php echo $query_entry['amount'] ?></span><br>
                <span id="review">
                    <?php
                        if ($query_entry['review']) {
                            echo "Anda sudah memberikan review";
                        } else {
                            echo "Belum direview";
                        }
                    ?>
                </span>
            </div>
        </div>

        <div class="history description-right">
            <div>
                <span id="order-date"><?php echo $query_entry['order-date'] ?></span>
                <span id="order-number">Nomor Order: #<?php echo $query_entry['order-number'] ?></span>
            </div>
            <?php
                if (!$query_entry['review']) { ?>
                    <a href=<?php echo "\"../App/review.php?order-number=" . $query_entry['order-number'] . "\"" ?>>
                        <button class="search-result button">Review</button>
                    </a>
                <?php } ?>
        </div>
    </div>
<?php } ?>


</body>

<!--Make nav bar static at top-->
<script type="text/javascript" src="../View/JS/fixed-nav-bar.js"></script>
<script type="text/javascript" src="../View/JS/switch_pages.js"></script>
<script>
    window.onload = function () {
        switch_to_history();
    };
</script>

</html>
