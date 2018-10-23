<?php

require_once '../config.php';

$user_id = $_COOKIE['ID'];
$username_query = $mysqli->query("SELECT username FROM users WHERE id=$user_id")->fetch_assoc();

$username = $username_query['username'];
// $username = "oio";

?>

<div class="header-bar">
    <div class="header-bar title">
        <span class="title-highlight">Pro </span> -Book
    </div>
    <div class="header-bar username">
        <a href="../App/profile.php">Hi, <?php echo $username?></a>
    </div>
    <div class="header-bar power-button">
        <img alt="power-button" src="../View/Src/header/power-button.png" id="img-button-power">
    </div>
</div>
