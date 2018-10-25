<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pro-Book</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../View/CSS/header.css">
    <link rel="stylesheet" href="../View/CSS/style.css">
</head>
<body>

<div class="header">
    <?php
    include("../View/header.php");
    include("../View/nav-bar.html");
    ?>
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
