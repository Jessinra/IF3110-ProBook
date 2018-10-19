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
    include("../View/header.html");
    include("../View/nav-bar.html");
    ?>
</div>

<div class="page-title">
    <h1 id="page-title-search">Search Book</h1>
</div>
<div class="container search-bar">
    <div class="search-bar field">
        <input type="text" id="form-search-query" placeholder="Input search terms..." onclick="this.select()"/>
    </div>
    <a href="../View/search-result.php">
        <button class="search-bar button" type="submit">Search</button>
    </a>
</div>


</body>


<script type="text/javascript" src="../View/JS/fixed-nav-bar.js"></script>
<script type="text/javascript" src="../View/JS/switch_pages.js"></script>
<script>
    window.onload = function(){
        switch_to_browse();
    };
</script>

</html>
