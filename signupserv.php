<?php
include('db.php');
if(isset($_POST['sign'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (email,password	)VALUES ('$email','$password')";

    $result =  mysqli_query($conn,$query);
    $_SESSION['message']  = "User Created Successfully"; // de esta froma uso las variables od atos que se quedan en sesion
    $_SESSION['message_type']  = 'success';


}