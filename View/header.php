<?php

require_once '../Model/mysqli.php';

$user = get_active_user();
$username = $user['username'];

?>

<div class="header-bar">
    <div class="header-bar title">
        <span class="title-highlight">Pro </span> -Book
    </div>
    <div class="header-bar username">
        <a href="../App/profile.php">Hi, <?php echo $username ?></a>
    </div>
    <div class="header-bar power-button">
        <a href="../App/logout.php">
            <img alt="power-button" src="../View/Src/header/power-button.png" id="img-button-power">
        </a>
    </div>
</div>
