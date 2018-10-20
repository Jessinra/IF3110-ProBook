<!DOCTYPE html>
<html lang="en">
<head>
    <title>WBDee Bookstore</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../View/CSS/header.css">
    <link rel="stylesheet" href="../View/CSS/style.css">
    <link rel="stylesheet" href="../View/CSS/history.css">
</head>
<body>

<div class="header">
    <?php
    include("../View/header.html");
    include("../View/nav-bar.html");
    ?>
</div>

<div class="page-title">
    <h1 id="page-title-search">History</h1>
</div>

<?php
$query_result = array();

$query_entry = array(
    'thumbnail' => "../View/Src/search_result/thumbnail_01.png",
    'title' => "Platelets are cute !",
    'amount' => 4,
    'review' => True,
    'order-date' => "30 September 2018",
    'order-number' => 2,
);

for ($i = 0; $i < 5; $i++) {
    $query_result[$i * 2] = $query_entry;
}

$query_entry = array(
    'thumbnail' => "../View/Src/search_result/thumbnail_03.png",
    'title' => "Megumi is cuter !",
    'amount' => 2,
    'review' => False,
    'order-date' => "5 Maret 2018",
    'order-number' => 33,
);

for ($i = 0; $i < 5; $i++) {
    $query_result[$i * 2 + 1] = $query_entry;
}

ksort($query_result);
?>


<?php foreach ($query_result as $query_entry) { ?>
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
                <a href="../View/review.php">
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
