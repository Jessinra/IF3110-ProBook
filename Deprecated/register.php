<!DOCTYPE html>
<html>

<head>
    <title>Pro-Book</title>
    <link rel="stylesheet" type="text/css" href="../View/CSS/register_new.css">
    <link rel="stylesheet" type="text/css" href="../View/CSS/style.css">
</head>

<body>
<div class="form">
    <div class="box">
        <div class="title">
            <div id="middle"><h1>REGISTER</h1></div>
        </div>
        <form action="#" method="post" onsubmit="return validateRegister()">
            <div class="flex-container flex-column register-form" id="register-form">
                <div class="flex-container">
                    <div class="form-label">
                        <label>Name</label>
                    </div>
                    <div class="form-fields">
                        <input class="fill" id="name" type="text" name="name" placeholder="" onclick=this.select()>
                    </div>
                </div>
                <div class="flex-container">
                    <div class="form-label">
                        <label>Username</label>
                    </div>
                    <div class="unique-fields">
                        <input class="fill" type="text" id="username" name="username" onclick=this.select();
                               onkeyup="checkUsername(this.value)"
                               placeholder="">
                    </div>
                    <div class="unique-checker">
                        <img src="../View/Src/register/v.png"/>
                    </div>
                </div>
                <div class="flex-container">
                    <div class="form-label">
                        <label>Email</label>
                    </div>
                    <div class="unique-fields">
                        <input class="fill" type="text" id="email" name="email" onclick=this.select();
                               onkeyup="checkEmail(this.value)" placeholder="">
                    </div>
                    <div class="unique-checker">
                        <img src="../View/Src/register/x.png">
                    </div>
                </div>
                <div class="flex-container">
                    <div class="form-label">
                        <label>Password</label>
                    </div>
                    <div class="form-fields">
                        <input class="special fill" id="password" type="password" name="password" placeholder=""
                               onclick=this.select()>
                    </div>
                </div>
                <div class="flex-container">
                    <div class="form-label">
                        <label>Confirm Password</label>
                    </div>
                    <div class="form-fields">
                        <input class="special fill" id="copassword" type="password" name="copassword" placeholder=""
                               onclick=this.select()>
                    </div>
                </div>
                <div class="flex-container">
                    <div class="form-label">
                        <label>Address</label>
                    </div>
                    <div class="form-fields">
                        <textarea class="special fill" title="address" id="address" name="address"
                                  onclick=this.select()></textarea>
                    </div>
                </div>
                <div class="flex-container">
                    <div class="form-label">
                        <label>Phone Number</label>
                    </div>
                    <div class="form-fields">
                        <input class="special fill" id="phone_number" type="text" name="phone_number" placeholder=""
                               onclick=this.select()>
                    </div>
                </div>
            </div>
            <br>
            <label id="move"><a href="login.php">Already have an account?</a></label>
            <br>
            <button type="submit" id="submit" name="login">
                REGISTER
            </button>
        </form>
    </div>
</div>
</body>
</html>
