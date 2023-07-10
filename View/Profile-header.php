<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #c0e5d9;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0px 100px;
        }

        .container {
            max-width: 2000px;
            background-color: #d6bfa2;
            margin: auto;
            padding: 30px;

        }
		.container1 {
            max-width: 2000px;
            background-color: #eaeaea;
            margin: auto;
            padding: 30px;

        }

        .logo {
            width: auto;
            height: 90px;
            float: left;
            margin-top: -20px;
            padding: auto;
        }

        .header-contact {
            margin: auto;
            height: auto;
            display: flex;
            justify-content: right;
            align-items: center;
            padding: 20px 10px;
            border-radius: 25px;
        }

        .header-contact {
            display: flex;
        }

        .header-contact a {
            align-items: right;
            display: block;
            text-decoration: none;
            text-transform: uppercase;
            /*  justify-content: center;*/
            font-size: 20px;
            font-weight: 800;
            margin-right: 20px;
        }

        .header-contact a:hover {
            text-decoration: underline;
            color: blue;
        }
    </style>
</head>


<body>
	<div class="container" style="width:auto; height:100px; border:1px solid #000;">
		<header>
			<a href="/Admin Final Project/home.php">
				<img class="logo" src="/Final Project/View/img/House_logo.png" width="120">
			</a>
			<div style="float: right; margin-top: 40px; margin-right: 10px;">
				<a href="/Admin Final Project/home.php">Home</a> |
				<a href="/Admin Final Project/View/login.php">Sign In</a> |
				<a href="/Admin Final Project/View/registration.php">Sign Up</a> |
				<a href="logout.php">Logout</a></h1>
			</div>
		</header>
	</div>
	<div class="container1" style="width:auto;  border:1px solid #000;" >
		<div style="color:red; font-size: 12px; text-transform: uppercase;" class="button">
			<h2 align="right"><a href="Profile.php">View Profile</a> | <a href="update.php">Edit Profile</a> | <a href="changepassword.php">Change Password</a></h2>
			<h2 align="left"><a href="dashboard.php">Dashboard</a></h2>
			<h2 align="left"><a href="managerlist.php">Manager</a></h2>
			<h2 align="left"><a href="sellerlist.php">Seller</a></h2>
			<h2 align="left"><a href="buyerlist.php">Buyer</a></h2>
			<h2 align="left"><a href="apartmentlist.php">Appartment</a></h2>
			<h2 align="left"><a href="helplinelist.php">Help session</a></h2>
			<h2 align="left"><a href="chat.php">Chat</a></h2>
			<hr>
			<br> <br>

		
	</div>
</body>

</html>