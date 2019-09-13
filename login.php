<?php  include('loginserv.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        .login{
            width: 360px;
            margin: 50px auto;
            border-radius: 10px;
            border: 2px solid #ccc;
            font:Cambria, "Hoefler Text", "Liberation Serif",Times,"Times New Roman",serif;
            padding: 10px 40px  25px;
            margin-top: 70px;


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
    </style>
</head>
<body>
    

<div class="login">
<h1 align="center"> Login </h1>
<form action=""  method="POST"  style="text-align:center;">
<input type="text" placeholder="Email" id="email"  name="email"><br/><br/>
<input type="password" placeholder="Password" id="password"  name="password"><br/><br/>
<input type="submit" value="Login" name="submit">
<span><?php  echo $error;  ?> </span>
</div>
</body>
</html>

