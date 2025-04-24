<?php
include "./User.php";

$usr = new User();

$id = base64_decode($_REQUEST['id']);

    $user = $usr->getById($id);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-5">
    <a href="./index.php" class="btn btn-sm btn-info mb-2">Back</a>

       <form action="./Controller.php" method="POST">
        <div class="my-2">
            <label for="">Name : </label>
            <input type="hidden" class="form-control" name="id" value="<?=$user['id']?>">
            <input type="text" class="form-control" name="name" value="<?=$user['name']?>">
        </div>
        <div class="my-2">
            <label for="">Email : </label>
            <input type="text" class="form-control" name="email" value="<?=$user['email']?>">
        </div>
        <div class="my-2">
            <button class="btn btn-sm btn-success" name="update">Submit</button>
        </div>
       </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>