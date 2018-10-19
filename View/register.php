<!DOCTYPE html>
<html>

<head>
    <title>Pro-Book</title>
    <link rel="stylesheet" type="text/css" href="../View/CSS/register.css">
</head>

<body>
<div class="form">
    <div class="box">
        <div class="title">
            <div id="middle"><h1>R E G I S T E R</h1></div>
        </div>
        <form action="#" method="post" onsubmit="return validateRegister()">
            <table id="table1">
                <tr>
                    <th><label>Name</label></th>
                    <th><input class="special" id="name" type="text" name="name" placeholder=""/></th>
                </tr>
                <tr>
                    <th><label>Username</label></th>
                    <th>
                        <input type="text" id="username" name="username" onkeyup="checkUsername(this.value)"
                               placeholder=""/>
                        <img src="../View/Src/register/v.png"/>
                    </th>
                </tr>
                <tr>
                    <th><label>Email</label></th>
                    <th>
                        <input type="text" id="email" name="email" onkeyup="checkEmail(this.value)" placeholder=""/>
                        <img src="../View/Src/register/x.png"/>
                    </th>
                </tr>
                <tr>
                    <th><label>Password</label></th>
                    <th><input class="special" id="password" type="password" name="password" placeholder=""/></th>
                </tr>
                <tr>
                    <th><label>Confirm Password</label></th>
                    <th><input class="special" id="copassword" type="password" name="copassword" placeholder=""/></th>
                </tr>
                <tr>
                    <th><label>Address</label></th>
                    <th><textarea class="special" id="address" name="address"></textarea></th>
                </tr>
                <tr>
                    <th><label>Phone Number</label></th>
                    <th><input class="special" id="phone_number" type="text" name="phone_number" placeholder=""/></th>
                </tr>
            </table>
            <br>
            <label id="move"><a href="login.php">Already have an account?</a></label>
            <br>
            <button type="submit" id="submit" name="login">
                R E G I S T E R
            </button>
        </form>
    </div>
</div>
</body>
</html>
