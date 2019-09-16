<?php
include("db.php");


if (isset($_POST['save_task'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO tasks (title,description)VALUES ('$title','$description')";

    $result =  mysqli_query($conn,$query);
    $_SESSION['message']  = "Task Save Successfully"; // de esta froma uso las variables od atos que se quedan en sesion
    $_SESSION['message_type']  = 'success';
     header("location:home.php");
    

}
