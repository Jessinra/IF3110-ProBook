<?php
    require '../database/config.php';

    if (isset($_GET['cusername'])) {
        $username = $mysqli->escape_string($_GET['cusername']);
        if (!empty($username)) {
            $username_query = $mysqli->query("SELECT * FROM users WHERE username = '$username'");
            $count = $username_query->num_rows;
            if ($count == 0) {
                echo "<img id='cun' src='../View/Src/register/v.png'>";
            } else {
                echo "<img id='cun' src='../View/Src/register/x.png'>";
            }
        }
    }

    if (isset($_GET['cemail'])) {
        $email = $mysqli->escape_string($_GET['cemail']);
        if (!empty($email)) {
            $email_query = $mysqli->query("SELECT * FROM users WHERE email = '$email'");
            $count = $email_query->num_rows;
            if ($count == 0) {
                echo "<img id='cem' src='../View/Src/register/v.png'>";
            } else {
                echo "<img id='cem' src='../View/Src/register/x.png'>";
            }
        }
    }
?>