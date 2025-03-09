

<?php include './inc/header.php';?>
<?php
    if(!isset($_SESSION["auth"])){
        header("Location: ./login.php");
    }

?>
    <div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h3>User List</h3>

        <table class="table table-bordered table-sm mt-3 text-center">
            <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
            </tr>

         <?php 
         $users = [
            "A","B","C","D","E","F","G","H","I","J","K"
         ];
         for($i = 0;$i<count($users);$i++){ ?>
            <tr>
                <td><?= $i ?></td>
                <td width="50%"><?= $users[$i]?></td>
                <td>john@example.com</td>
                <td>
                    <a href="#" class="btn btn-sm btn-primary">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
        <?php }
         ?>
            
        </table>
        </div>
    </div>
    
    </div>

<?php include './inc/footer.php';?>