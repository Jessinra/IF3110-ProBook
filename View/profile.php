<!DOCTYPE html>
<html lang="en">
<head>
    <title>History</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../View/CSS/header.css">
    <link rel="stylesheet" href="../View/CSS/style.css">
    <link rel="stylesheet" href="../View/CSS/profile.css">
</head>

<body onresize="resizeEvent()">
    <div class="header">
        <?php
        include("../View/header.php");
        include("../View/nav-bar.html");
        ?>
    </div>
    <div class="profile">
        <div class="profile home">
            <div class="profile edit-button">
                <a href="profile-edit.php">
                    <img src="../View/Src/profile/icon/edit.png"/>
                </a>
            </div>
            <div class="profile picture center" id="image-container">
                <img src=<?php echo "\"".$query_result_profile["img"]."\"" ?>/>
            </div>
            <div class="profile name center">
                <?php echo $query_result_profile["name"]?>
            </div>
        </div>
        <div class="profile details">
            <div class="profile-title">
                <h1>My Profile</h1>
            </div>
            <table>
                <tr class="field" id="profile-username">
                    <td class="icon-container">
                        <img class="icon" src="../View/Src/profile/icon/user.png"/>
                    </td>
                    <td class="label">
                        Username
                    </td>
                    <td class="content" id="username">
                        @<?php echo $query_result_profile["username"]?>
                    </td>
                </tr>
                <tr class="field" id="profile-email">
                    <td class="icon-container">
                     <img class="icon" src="../View/Src/profile/icon/email.png"/>
                    </td>
                    <td class="label">
                        Email
                    </td>
                    <td class="content" id="email">
                        <?php echo $query_result_profile["email"]?>
                    </td>
                </tr>
                <tr class="field" id="profile-address">
                    <td class="icon-container">
                        <img class="icon" src="../View/Src/profile/icon/address.png"/>
                    </td>
                    <td class="label">
                        Address
                    </td>
                    <td class="content" id="address">
                        <?php echo $query_result_profile["address"]?>
                    </td>
                </tr>
                <tr class="field" id="profile-phone-number">
                    <td class="icon-container">
                        <img class="icon" src="../View/Src/profile/icon/phone.png"/>
                    </td>
                    <td class="label">
                        Phone Number
                    </td>
                    <td class="content" id="phone-number">
                        <?php echo $query_result_profile["phone_number"]?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>


<script type="text/javascript" src="../View/JS/fixed-nav-bar.js"></script>
<script type="text/javascript" src="../View/JS/switch_pages.js"></script>
    <script type="text/javascript" src="../View/JS/profile.js"></script>
<script>
    window.onload = function () {
        switch_to_profile();
    };
</script>
</html>