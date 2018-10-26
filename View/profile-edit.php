<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pro-Book</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../View/CSS/header.css">
    <link rel="stylesheet" href="../View/CSS/style.css">
    <link rel="stylesheet" href="../View/CSS/profile-edit.css">
</head>

<body onresize="resizeEvent()">
<?php include("../View/header.php"); ?>

<div class="content">
    <div class="title">
        <h1>Edit Profile</h1>
    </div>
    <form action="profile.php" method="post" enctype="multipart/form-data" onsubmit="return validate();">
        <div class="flex-container flex-column">
            <div class="flex-container field image-field" id="image-section">
                <div class="form-label image-container" id="image-container">
                    <img id="user-image" src=<?php echo "\"" . $query_result_profile_edit["img"] . "\"" ?>/>
                </div>
                <div class="form-space"></div>
                <div class="form-field special-field">
                    <div>Update profile picture</div>
                    <div class="flex-container" id="file-upload-interface">
                        <div id="file-upload-label-container">
                            <input id="file-upload-label" type="text" name="file-upload-label" placeholder="" readonly>
                        </div>
                        <div id="file-upload-button-container">
                            <button id="file-upload-button" type="button" onclick="browsefile()">Browse ...</button>
                        </div>
                    </div>
                    <input type="file" name="img" id="file-to-upload" onchange="updateimagesection(this)" hidden/>
                </div>
            </div>
            <div class="flex-container field">
                <div class="form-label">
                    Name
                </div>
                <div class="form-space"></div>
                <div class="form-field">
                    <input class="input-field" id="name" type="text" name="name" title="name"
                           value="<?php echo $query_result_profile_edit["name"] ?>" onclick=this.select()>
                </div>
            </div>
            <div class="flex-container field">
                <div class="form-label">
                    Address
                </div>
                <div class="form-space"></div>
                <div class="form-field">
                    <textarea id="address" name="address" title="address"
                              onclick=this.select()><?php echo $query_result_profile_edit["address"] ?></textarea>
                </div>
            </div>
            <div class="flex-container field">
                <div class="form-label">
                    Phone Number
                </div>
                <div class="form-space"></div>
                <div class="form-field">
                    <input class="input-field" id="phone_number" type="text" name="phone_number" title="phone_number"
                           value="<?php echo $query_result_profile_edit["phone_number"] ?>" onclick=this.select()>
                </div>
            </div>
            <div class="change-button-container">
                <div id="back-button-container">
                    <button id="back-button" type="button" onclick="gotoprofile()">Back</button>
                </div>
                <div id="save-button-container">
                    <button type="submit" id="save-button">Save</button>
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