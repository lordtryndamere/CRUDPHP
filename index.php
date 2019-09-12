<?php 

include('db.php');
?>

<?php include('includes/header.php'); ?>


<div class="contaier p-4">

    <div class="row">
        <div class="col-md-4">
        <?php  if(isset($_SESSION['message'])) {    ?>
            <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>

        <?php 
            session_unset();} ?>
            <div class="card card-body">
                <form action="save.php" method="POST">

                <div class="form-group">
                    <input  type="text"  name="title"  class="form-control"   
                    placeholder="Task Title"  autofocus required >
                </div>
                <div class="form-group">
                    <textarea name="description"  rows="2" class="form-control"  placeholder="Type description" required></textarea>
                </div>
                <input type="submit" class="btn btn-outline-success   btn-block" name="save_task"  value="Save Task">
                </form>
            </div>

            </div>
            <div class="col-md-8">
                <table class="table  table-dark table-bordered table-hover "> 
                
                    <thead class="thead-dark">
                        <tr>
                           <th scope="col">Title</th>
                           <th scope="col">Description</th>
                           <th scope="col">Create At</th>
                           <th scope="col">Actions</th> 
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $query = "SELECT * FROM tasks";
                        $result_task = mysqli_query($conn,$query);
                        while ($row =  mysqli_fetch_array($result_task)) {  ?>
                            <tr>
                                <td><?php echo $row['title'] ?></td>
                                <td><?php echo $row['description'] ?></td>
                                <td><?php echo $row['create_at'] ?></td>
                                <td>
                                <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-primary">
                                <i class="fas fa-edit"></i>                 
                                </a>
                                <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                                </a>                                   
                                </td>
                            </tr>

                        <?php   }?>
                    </tbody>
                </table>
            </div>

        </div>

</div>











<?php include ('includes/footer.php'); ?>