<!DOCTYPE html>
<html>

<head>
    <title>Pro-Book</title>
    <link rel="stylesheet" type="text/css" href="../View/CSS/login.css">
    <script type="text/javascript" src="JS/validate.js"></script>
</head>

<body>
<div class="form">
    <div class="box">
        <div class="title">
            <div id="middle"><h1>L O G I N</h1></div>
        </div>
        <form action="#" method="post" onsubmit="return validateLogin()">
            <table>
                <tr>
                    <th class="table_header"><label>Username</label></th>
                    <th><input id="username" type="text" name="username" placeholder="" onclick="this.select()"/></th>
                </tr>
                <tr>
                    <th class="table_header"><label>Password</label></th>
                    <th><input id="password" type="password" name="password" placeholder="" onclick="this.select()"/>
                    </th>
                </tr>
            </table>
            <label id="move"><a href="register.php">Don't have an account?</a></label>
            <br>
            <button type="submit" id="submit" name="login">
                L O G I N
            </button>
        </form>
    </div>
</div>
</body>
</html>
