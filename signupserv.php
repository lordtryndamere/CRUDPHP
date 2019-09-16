<?php
include('db.php');
$error2 = '';
$error3 = '';
//var_dump() para saber que esta llegando
if(isset($_POST['sign'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query1 = "SELECT * FROM users";
    $result_task = mysqli_query($conn,$query1);
    $row =  mysqli_fetch_array($result_task);
    if(empty($_POST['email']) || empty($_POST['password'])){
        $error3 = "Email or Password  is Invalid";
    }else
    {      
    if($row['email']== $email )
    {
        $error2 = "Already Exists IT User";
    }else {
        $query = "INSERT INTO users (email,password	)VALUES ('$email','$password')";
        
        $result =  mysqli_query($conn,$query);
       
        $_SESSION['message']  = "User Created Successfully";
        $_SESSION['message_type']  = 'success';
        header('location: signup.php');  //con este header evito que se envie varias veces
        
    
       
    } 
    }

}