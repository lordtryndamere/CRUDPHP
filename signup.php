


<?php  include('signupserv.php'); ?>

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
    <title>SignUp</title>
    <style>
       body {
            background-image: url("includes/dark.jpg");
            background-size: relative;
        }
        .sigup{
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
    </style>
</head>
<body>
    

<div class="sigup">
<h1 align="center"> Signup </h1>
<?php  if(isset($_SESSION['message'])) {    ?>
            <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>

        <?php 
            session_unset();} ?>

<form action=""  method="POST"  style="text-align:center;">
<input type="text" placeholder="Write Your Email" id="email"  name="email" require><br/><br/>
<input type="password" placeholder="Write Your Password" id="password"  name="password"  autofocus><br/><br/>
<input type="submit" value="Save " name="sign">
<a href="login.php">Go To Home</a><br>
<span><?php  echo $error2;  ?> </span><br>
<span><?php  echo $error3;  ?> </span><br>

</div>

<?php  include('includes/footer.php') ?>

</body>
</html>
