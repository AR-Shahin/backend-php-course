<?php include './inc/header.php';?>

<div class="container py-4">
        <div class="row justify-content-center">
          <div class="col-md-5">
            <h3>Login</h3>

            <div class="card">
                <div class="card-body">
                    <form action="./action.php" method="POST">
                        <div class="my-2">
                            <label for="">Email: </label>
                            <input type="text" class="form-control" placeholder="email" name="email" value="ss">
                        </div>
                        <div class="my-2">
                            <label for="">Password: </label>
                            <input type="password" class="form-control" placeholder="password" name="pasword">
                        </div>
                        <div class="my-2">
                            <button class="btn btn-sm btn-success" name="lgnbtn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
          
          </div>
        </div>
      
      </div>
<?php include './inc/footer.php';?>

