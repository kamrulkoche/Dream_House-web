<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header</title>

  <link rel="stylesheet" href="..\View\css\header.css">

  <style>
    .hover a:hover {
      /*text-decoration: underline;*/
      color: tomato;
    }

    .hover {
      background-color: #f2c1da;
      border: none;
      color: white;
      padding: 10px 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 24px;
      margin: 5px 2px;
      cursor: pointer;
    }

    .hover:hover {
      background-color: white;
      border: none;
      color: white;
      padding: 50px 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 24px;
      margin: 5px 2px;
      cursor: pointer;
    }
  </style>

</head>

<body>

  <div class="container">
    <header>
      <div class="logo">
        <a href="/Final Project/home.php">
          <img class="logo" src="/Final Project/View/img/House_logo.png" width="120" style="margin-top: 10px;">
        </a>
      </div>
      <div class="header-contact">
        <a href="Profile.php">Profile View</a>
        <a href="update.php">Update Profile </a>
        <a href="changepassword.php">Change Password </a>
        <a href="LogOut.php">Log Out</a> <br>
      </div>
      <h2 align="right" style="color:darkred;"><span>Welcome <?php echo $_SESSION['username']; ?></span> </h2>

    </header>
  </div>

  <!--clearing div-->
  <div class="div-clear"></div>

  <div style="width: 25%; float: left; background: #d6488a;">
    <div style="color:red; font-size: 12px; text-transform: uppercase;" class="button">
      <h1 class="hover" style="padding: 30px 35px; margin-left: 35px;"><a href="dashboard.php">Dashboard</a></h1><br><br><br>
      <h1 class="hover" style="padding: 30px 35px; margin-left: 35px;"><a href="apartmentlist.php">Apartment </a></h1><br><br><br>
      <h1 class="hover" style="padding: 30px 22px; margin-left: 35px;"><a href="order.php">Order Review </a></h1><br><br><br>
      <h1 class="hover" style="padding: 30px 68px; margin-left: 35px;"><a href="buyerlist.php"> Buyer </a></h1><br><br><br>
      <h1 class="hover" style="padding: 30px 75px; margin-left: 35px;"><a href="chat.php"> Chat </a></h1><br><br><br>
      <h1 class="hover" style="padding: 30px 52px; margin-left: 35px;"><a href="helplinelist.php"> Helpline </a></h1>
    </div>
  </div>

</body>


</html>