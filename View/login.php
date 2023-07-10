<?php
include('header.php');

?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Php-Login</title>
  <script src="../View/js/login.js"></script>
  <style type="text/css">

  </style>
</head>

<body>
  <div style="width: 700px;  " align='left'>
    <form action="../Controller/loginaction.php" target="_self" method="POST" onsubmit="return validlogin(this)" novalidate>
      <fieldset>
        <h2>Login</h2>
        <span class='red'><?php
                          if (isset($_COOKIE['error'])) {
                            echo $_COOKIE['error'];
                          }
                          if (isset($_COOKIE['msg'])) {
                            echo $_COOKIE['msg'];
                          }
                          ?>
        </span><br>
        <label>User Name:</label>
        <input type="text" name="username">
        <span id="userErr" style="color: black;"></span> <br><br>
        <label>Password:</label>
        <input type="password" name="password">

        <span id="passErr" style="color: black;"></span><br><br>


        <input type="checkbox" name="remember" id="rem">
        <label for="rem">Remember Me</label> <br>
        <hr>
        <input type="submit" name="submit" value="Submit">
      </fieldset>
    </form>
  </div>
  <br><br>

</body>

</html>
<?php include 'footer.php'; ?>