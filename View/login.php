<!DOCTYPE html>
<html>

<head>
    <title>Pro-Book</title>
    <link rel="stylesheet" type="text/css" href="../View/CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/login.css">
    <script type="text/javascript" src="JS/validate_login.js"></script>
</head>

<body>
<div class="form">
    <div class="box">
        <div class="title">
            <div id="middle"><h1>LOGIN</h1></div>
        </div>
        <form action="#" method="post" onsubmit="return validateLogin()">
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
                    <a href="../View/register.php">Don't have an account?</a>
                </label>
            </div>
            <div>
                <a href="../View/search.php">
                    <button type="button" id="submit" name="login">
                        <span>LOGIN</span>
                    </button>
                </a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
