<!DOCTYPE html>
<html lang="en">
<head>
    <title>WBDee Bookstore</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../View/CSS/header.css">
    <link rel="stylesheet" href="../View/CSS/style.css">
    <link rel="stylesheet" href="../View/CSS/search.css">
</head>
<body>

<div class="header">
    <?php
    include("../View/header.php");
    include("../View/nav-bar.html");
    ?>
</div>

<div class="page-title">
    <h1 id="page-title-search">Search Result</h1>
    <span id="search-result-found">Found <u><?php echo sizeof($search_result)?></u> result(s)</span>
</div>

<?php foreach ($search_result as $query_entry) { ?>
    <div class="search-result container">
        <div class="flex-container">
            <div class="search-result thumbnail">
                <img src= "<?php echo $query_entry['thumbnail'] ?>" alt="search thumbnail">
            </div>
            <div class="search-result description">
                <div class="title">
                    <?php echo $query_entry['title'] ?>
                </div>
                <div class="author">
                    <span class="author-name"><?php echo $query_entry['author'] ?></span> -
                    <span class="ratings"><?php echo $query_entry['ratings'] ?>/<?php echo $query_entry['max_rating'] ?></span>
                    <span class="votes">(<?php echo $query_entry['votes'] ?> votes)</span>

                </div>
                <div class="description">
                    <?php echo $query_entry['description'] ?>
                </div>

            </div>
        </div>

        <div>
            <a href="../App/detail.php?id=<?php echo $query_entry['id']?>">
                <button class="search-result button">Detail</button>
            </a>
        </div>
    </div>
<?php } ?>



</body>

<!--Make nav bar static at top-->
<script type="text/javascript" src="../View/JS/fixed-nav-bar.js"></script>
<script type="text/javascript" src="../View/JS/switch_pages.js"></script>
<script>
    window.onload = function(){
        switch_to_browse();
    };
</script>


</html>
