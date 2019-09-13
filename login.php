<?php  include('loginserv.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/18966cfd72.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <title>Login</title>
    <style>

        body {
            background-image: url("includes/dark.jpg");
            background-size: relative;
        }
        .login{
            width: 360px;
            margin: 50px auto;
            border-radius: 10px;
            border: 2px solid #ccc;
            font:Cambria, "Hoefler Text", "Liberation Serif",Times,"Times New Roman",serif;
            padding: 10px 40px  25px;
            margin-top: 70px;
            background-image: url("includes/blue.jpg");

        }
    input[type=text],input[type=password] {
        width: 99%;
        padding: 10px;
        margin-top: 8px;
        border: 1px solid #ccc;
        padding-left: 5px;
        font-size: 16px;
        font-family:Cambria, "Hoefler Text", "Liberation Serif",Times,"Times New Roman",serif;


    }

    input[type=submit] {
        width:100%;
        background-color: #009;
        color:#fff;
        border:2px solid #06f;
        padding: 10px;
        font-size: 20px;
        cursor: pointer;
        border-radius: 5px;
        margin-bottom: 15px;
    }
    a {
  text-decoration: none;
  color: darkblue;
  
}
span  {
    text-decoration: none;
  color: darkblue;
}
    </style>
</head>
<body>
    

<div class="login">
<h1 align="center"> Login </h1>

<form action=""  method="POST"  style="text-align:center;">
<input type="text" placeholder="Email" id="email"  name="email" require autofocus><br/><br/>
<input type="password" placeholder="Password" id="password"  name="password" require><br/><br/>
<input type="submit" value="Login" name="submit">
<a href="signup.php">SignUp</a><br>
<span><?php  echo $error;  ?> </span>
</div>

<?php  include('includes/footer.php') ?>
</body>
</html>

