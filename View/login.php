<!DOCTYPE html>
<html>

<head>
    <title>Pro-Book</title>
    <link rel="stylesheet" type="text/css" href="../View/CSS/style.css">
    <link rel="stylesheet" type="text/css" href="../View/CSS/login.css">
</head>

<body>
<div class="form">
    <div class="box">
        <div class="title">
            <div id="middle"><h1>LOGIN</h1></div>
        </div>
        <form action="login.php" method="post" onsubmit="return validateLogin()">
            <div class="flex-container login-container">
                <div class="flex-container">
                    <div class="form-label">
                        <label>Username</label>
                    </div>
                    <div class="form-entry">
                        <input id="username" type="text" name="username" placeholder="" onclick="this.select()"/>
                    </div>
                </div>
                <div class="flex-container">
                    <div class="form-label">
                        <label>Password</label>
                    </div>
                    <div class="form-entry">
                        <input id="password" type="password" name="password" placeholder="" onclick="this.select()"/>
                    </div>
                </div>
            </div>
            <div class="create-account-container">
                <label id="move">
                    <a href="../App/register.php">Don't have an account?</a>
                </label>
            </div>
            <div>
                <button type="submit" id="submit" name="login">
                    <span>LOGIN</span>
                </button>
            </div>
        </form>
    </div>
</div>
</body>
<script type="text/javascript" src="../View/JS/validate_login.js"></script>
</html>
