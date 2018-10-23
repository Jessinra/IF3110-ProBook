<!DOCTYPE html>
<html lang="en">
<head>
    <title>History</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../View/CSS/header.css">
    <link rel="stylesheet" href="../View/CSS/style.css">
    <link rel="stylesheet" href="../View/CSS/profile-edit.css">
</head>

<?php
    $query_result = NULL;

    $query_entry = array(
        "profilepic" => "../View/Src/profile/sample/profile_pict.png",
        "profilename" => "Loli Bee",
        "address" => "Jl. Ganesha No. 10",
        "phonenumber" => "08123456789"
    );

    $query_result = $query_entry;
?>

<body>
    <div class="header">
        <?php
        include("../View/header.html");
        include("../View/nav-bar.html");
        ?>
    </div>

    <div class="content">
        <div class="title">
            <h1>Edit Profile</h1>
        </div>
        <form action="#" method="post">
            <div class="flex-container flex-column">
                <div class="flex-container field image-field">
                    <div class="form-label image-container">
                        <img src=<?php echo "\"".$query_result["profilepic"]."\""?>/>
                    </div>
                    <div class="form-space"></div>
                    <div class="form-field">
                        <div class="special-field">
                            Update profile picture<br/>
                            <div class="flex-container" id="file-upload-interface">
                                <div id="file-upload-label-container">
                                    <input id="file-upload-label" type="text" name="file-upload-label" placeholder="" readonly>
                                </div>
                                <div id="file-upload-button-container">
                                    <button id="file-upload-button" type="button" onclick="browsefile()">Browse ...</button>
                                </div> 
                            </div>
                            <input type="file" name="file-to-upload" id="file-to-upload" onchange="updatefilelabel(this.value)" data-buttonText="Browse..." hidden/>
                        </div>
                    </div>
                </div>
                <div class="flex-container field">
                    <div class="form-label">
                        Name
                    </div>
                    <div class="form-space"></div>
                    <div class="form-field">
                        <input class="input-field" id="profilename" type="text" name="profilename" value=<?php echo "\"".$query_result["profilename"]."\"" ?> onclick=this.select()>
                    </div>
                </div>
                <div class="flex-container field">
                    <div class="form-label">
                        Address
                    </div>
                    <div class="form-space"></div>
                    <div class="form-field">
                        <textarea onclick=this.select()><?php echo $query_result["address"] ?></textarea>
                    </div>
                </div>
                <div class="flex-container field">
                    <div class="form-label">
                        Phone Number
                    </div>
                    <div class="form-space"></div>
                    <div class="form-field">
                        <input class="input-field" id="phonenumber" type="text" name="phonenumber" value=<?php echo "\"".$query_result["phonenumber"]."\"" ?> onclick=this.select()>
                    </div>
                </div>
                <div class="change-button-container">
                    <div id="back-button-container">
                        <button id="back-button" type="button" onclick="gotoprofile()">Back</button>
                    </div>
                    <div id="save-button-container">
                        <button id="save-button">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="../View/JS/fixed-nav-bar.js"></script>
    <script type="text/javascript" src="../View/JS/switch_pages.js"></script>
    <script type="text/javascript" src="../View/JS/profile-edit.js"></script>
    <script>
        window.onload = function () {
            switch_to_profile();
        };
    </script>
</body>
</html>