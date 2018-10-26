<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pro-Book</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../View/CSS/header.css">
    <link rel="stylesheet" href="../View/CSS/style.css">
    <link rel="stylesheet" href="../View/CSS/search.css">
</head>

<body>
<?php include("../View/header.php"); ?>
<div class="page-title">
    <h1 id="page-title-search">Search Book</h1>
</div>
<div class="container search-bar">
    <form action="../App/search-result.php" method="get">
        <div class="search-bar field">
            <input type="text" id="form-search-query" name="query" placeholder="Input search terms..."
                   onclick="this.select()"/>
        </div>

        <button class="search-bar button" type="submit">Search</button>

    </form>
</div>


</body>


<script type="text/javascript" src="../View/JS/fixed-nav-bar.js"></script>
<script type="text/javascript" src="../View/JS/switch_pages.js"></script>
<script>
    window.onload = function () {
        switch_to_browse();
    };
</script>

</html>
