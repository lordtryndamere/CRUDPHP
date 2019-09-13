<?php
include('db.php');
$error='';

if(isset($_POST['submit'])) {
if(empty($_POST['email']) || empty($_POST['password'])){
    $error = "Email or Password  is Invalid";
}
else {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $query = "SELECT * FROM users WHERE password='$pass' AND email='$email'";
    $res = mysqli_query($conn,$query);
    $rows = mysqli_num_rows($res);
    if($rows==1) {
        header("Location:index.php");
    }
    else {
        $error = " Username or pasword is Invalidad";

    }

    mysqli_close($conn);
}

}
