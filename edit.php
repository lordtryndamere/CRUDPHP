<?php
include('db.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT *  FROM tasks WHERE id = '$id'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)  ==1 ){
        $row = mysqli_fetch_array($result);
        $title = $row['title'];
        $description = $row['description'];
    }
}
if (isset($_POST['update'])){
$id = $_GET['id'];
$titulo =   $_POST['title'];
$descripcion = $_POST['description'];

$query = "UPDATE tasks set title = '$titulo', description = '$descripcion' WHERE id = $id ";
$res = mysqli_query($conn,$query);
$_SESSION['message'] = 'Task Updated Successfully';
$_SESSION['message_type']  = 'success';
header('Location:index.php');

}

?>

<?php include('includes/header.php'); ?>

<div class="container p-4">

    <div class="row">
        <div class="col-md mx-auto">
            <div class="card card-body">
            <form action="edit.php?id=<?php  echo  $_GET['id'];?>" method="POST" >

                <div class="form-group">
                  <input type="texto"  name="title" value="<?php echo $title; ?> "
                  class="form-control"  placeholder="Update Title"  autofocus  require >      
                </div>
                <div class="form-group">
                    <textarea name="description"  rows="2" placeholder="Update Descripcion"  require> <?php echo $description; ?> </textarea>
                </div>
                <button
                class="btn btn-outline-success   btn-block"  name="update">Update </button>
            </form>
            </div>
        </div>

    </div>

</div>












<?php include('includes/footer.php');?>