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


<!--Setup dictionary as query result (dummy) -->

<?php
$query_result = array();

$query_entry = array(
    'thumbnail' => "../View/Src/search_result/thumbnail_01.png",
    'title' => "Platelets are cute !",
    'author' => "Kaito Yamamura",
    'ratings' => 4.8,
    'max_rating' => 5.0,
    'votes' => 10000,
    'description' => 'Lorem ipsum dolor sit amet, populo scripserit eos id, vim probo solum forensibus ei. Autem prompta
                consequuntur an ius, sint adhuc ex usu. No his tota dicant, vis aeterno suscipiantur no, an assentior
                intellegebat cum. Falli homero id mea.',
);
$query_result[0] = $query_entry;
$query_result[2] = $query_entry;
$query_result[4] = $query_entry;
$query_result[6] = $query_entry;
$query_result[8] = $query_entry;

$query_entry = array(
    'thumbnail' => "../View/Src/search_result/thumbnail_03.png",
    'title' => "Megumi so cute !",
    'author' => "Yamada Shimamura",
    'ratings' => 5.8,
    'max_rating' => 5.0,
    'votes' => 1000000,
    'description' => 'Lorem ipsum dolor sit amet, populo scripserit eos id, vim probo solum forensibus ei. Autem prompta
                consequuntur an ius, sint adhuc ex usu. No his tota dicant, vis aeterno suscipiantur no, an assentior
                intellegebat cum. Falli homero id mea.',
);
$query_result[1] = $query_entry;
$query_result[3] = $query_entry;
$query_result[5] = $query_entry;
$query_result[7] = $query_entry;

ksort($query_result);

?>

<div class="page-title">
    <h1 id="page-title-search">Search Result</h1>
    <span id="search-result-found">Found <u><?php echo sizeof($query_result)?></u> result(s)</span>
</div>

<?php foreach ($query_result as $query_entry) { ?>
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
            <a href="#">
                <button class="search-result button">Detail</button>
            </a>
        </div>
    </div>
<?php } ?>



</body>

<!--Make nav bar static at top-->
<script>
    window.onscroll = function() {stick_nav_to_top()};

    let nav_bar = document.getElementsByClassName("nav-bar")[0];
    let sticky_nav_bar = nav_bar.offsetTop;

    function stick_nav_to_top() {
        if (window.pageYOffset > sticky_nav_bar) {
            nav_bar.classList.add("sticky-nav-bar");
            nav_bar.classList.add("resp-element");
        } else {
            nav_bar.classList.remove("sticky-nav-bar");
            nav_bar.classList.remove("resp-element");
        }
    }
</script>


</html>
