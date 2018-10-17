<!DOCTYPE html>
<html>

<head>
    <title>Pro-Book</title>
    <link rel="stylesheet" type="text/css" href="../View/CSS/login.css">
</head>

<body>
<div class="form">
    <div class="box">
        <div class="title">
            <div id="middle"><h1>LOGIN</h1></div>
        </div>
        <form action="#" method="post" onsubmit="return validateLogin()">
            <table>
                <tr>
                    <th class="table_header"><label>Username</label></th>
                    <th><input id="username" type="text" name="username" placeholder=""/></th>
                </tr>
                <tr>
                    <th class="table_header"><label>Password</label></th>
                    <th><input id="password" type="password" name="password" placeholder=""/></th>
                </tr>
            </table>
            <label id="move"><a href="#">Don't have an account?</a></label>
            <br>
            <button type="submit" id="submit" name="login">
                LOGIN
            </button>
        </form>
    </div>
</div>
</body>
</html>
