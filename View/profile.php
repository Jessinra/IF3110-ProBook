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
<body>
    <div class="header">
        <?php
        include("../View/header.html");
        include("../View/nav-bar.html");
        ?>
    </div>
    <div class="profile">
        <div class="profile home">
            <div class="profile edit-button">
                <button>
                    <img src="../img/edit.png"/>
                </button>
            </div>
            <div class="profile picture center">
                <!-- Image -->
                <img src="../img/Jollybee-Logo.png"/>
            </div>
            <div class="profile name center">
                <!-- Name -->
                Loli Bee
            </div>
        </div>
        <div class="profile details">
            <div class="profile-title">
                <h1>My Profile</h1>
            </div>
            <table>
                <tr class="field" id="profile-username">
                    <td class="icon-container">
                        <img class="icon" src="../img/user.png" />
                    </td>
                    <td class="label">
                        Name
                    </td>
                    <td class="content" id="username">
                        <!-- UserName -->
                        @legalloli
                    </td>
                </tr>
                <tr class="field" id="profile-email">
                    <td class="icon-container">
                        <img class="icon" src="../img/email.png" />
                    </td>
                    <td class="label">
                        Email
                    </td>
                    <td class="content" id="email">
                        <!-- Email -->
                        loli@gmail.com
                    </td>
                </tr>
                <tr class="field" id="profile-address">
                    <td class="icon-container">
                        <img class="icon" src="../img/address.png" />
                    </td>
                    <td class="label">
                        Address
                    </td>
                    <td class="content" id="address">
                        <!-- Address -->
                        Jl. Ganesha No. 10
                    </td>
                </tr>
                <tr class="field" id="profile-phone-number">
                    <td class="icon-container">
                        <img class="icon" src="../img/phone.png" />
                    </td>
                    <td class="label">
                        Phone Number
                    </td>
                    <td class="content" id="phone-number">
                        <!-- Phone Number -->
                        08123456789
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>