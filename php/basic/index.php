

<?php include './inc/header.php';?>

    <div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-7">
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
         for($i = 0;$i<=count($users);$i++){ ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $users[$i]?></td>
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