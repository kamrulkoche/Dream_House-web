<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
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
            color: tomato;
        }
    </style>
    <!-- <link rel="stylesheet" href="..\View\css\header.css"> -->
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
                <a href="/Final Project/home.php">Home</a>
                <a href="/Final Project/View/login.php">Login</a>
                <a href="/Final Project/View/registration.php">Sign Up</a>
                <a href="/Final Project/View/contact.php">Contact</a>
            </div>
        </header>
    </div>

    <!--clearing div-->
    <div class="div-clear"></div>

</body>

</html>