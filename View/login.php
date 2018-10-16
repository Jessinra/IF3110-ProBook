<!DOCTYPE html>
<html>

<head>
  <title>Pro-Book</title>
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
  <div class="form">
    <div class="box">
      <div class="judul">
        <div id="tengah"><h1>LOGIN</h1></div>
      </div>
      <form action="#" method="post" onsubmit="return validateLogin()">
        <table id="login">
          <tr>
            <th class="masuk"><label>Username</label></th>
            <th><input id="username" type="text" name="username" placeholder="" /></th>
          </tr>
          <tr>
            <th class="masuk"><label>Password</label></th>
            <th><input id="password" type="password" name="password" placeholder="" /></th>
          </tr>
        </table>
        <label id="pindah"><a href="#">Don't have an account?</a></label>
        <br>
        <button type="submit" id="submit" name="login" />LOGIN</button>
      </form>
    </div>
  </div>
</body>
</html>
