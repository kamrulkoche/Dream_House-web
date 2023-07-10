<?php
include('header.php');

?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Login</title>
  <script src="../View/js/login.js"></script>
  <style>
    .button {
      background-color: black;
      border: none;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }

    .text {
      width: 20%;
      padding: 8px 20px;
      margin: 8px 0;
      box-sizing: border-box;
    }
  </style>
</head>

<body>
  <div style="width: 1150px; margin-left: auto; margin-top: 10px; background:#c9c956; " align='center' ;>
    <form action="../Controller/loginaction.php" target="_self" method="POST" onsubmit="return validlogin(this)" novalidate>
      <fieldset style="height:400px;">
        <legend>
          <h1 align="center">Login</h1>
        </legend>
        <span class='red'><?php
                          if (isset($_COOKIE['error'])) {
                            echo $_COOKIE['error'];
                          }
                          if (isset($_COOKIE['msg'])) {
                            echo $_COOKIE['msg'];
                          }
                          ?>
        </span><br>

        <label style="text-transform: uppercase; font-size: 20px;font-weight: 800;">User Name</label>
        <label><input type="text" class="text" name="username"></label>
        <span id="userErr" style="color: red;"></span>
        <br><br>
        <label style="text-transform: uppercase; font-size: 20px;font-weight: 800;">Password</label>
        <input type="password" class="text" name="password">

        <span id="passErr" style="color: red;"></span><br><br>


        <h4><input type="checkbox" name="remember" id="rem">
          <label for="rem">Remember Me</label>
        </h4> <br>
        <hr>
        <br>
        <h4><input type="submit" class="button" name="submit" value="Log In">
          <a href="forgotpassword.php"> Forgot Password? </a>
        </h4>
      </fieldset>
    </form>
  </div>
  <br><br>

</body>

</html>
<div><?php include 'footer.php'; ?></div>