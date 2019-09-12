<?php
include('db.php');


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM tasks WHERE id =$id";
    $resul = mysqli_query($conn,$query);
    $_SESSION['message'] = 'Taks Removed Successfully';
    $_SESSION ['message_type'] = 'danger';
    header("location:index.php");

}
