<?php
    include "./User.php";

    $user  = new User();
    $users = $user->getAll();
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
    <a href="./create.php" class="btn btn-sm btn-info mb-2">Create</a>
        <table class="table table-bordered">
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>

            <?php
                foreach($users as $index => $user) { 
                  
                    ?>
                <tr>
                    <td><?=++$index?></td>
                    <td><?=$user['name']?></td>
                    <td><?=$user['email']?></td>
                    <td>
                        <a href="" class="btn btn-sm btn-success mx-1">View</a>
                        <a href="./edit.php?id=<?= base64_encode($user['id'])?>" class="btn btn-sm btn-info mx-1">Edit</a>
                        <form action="./Controller.php" method="POST">
                            <input type="hidden" name="id" value="<?=$user['id']?>">
                            <button class="btn btn-sm btn-danger mx-1 d-inline" name="delete">Delete</button>
                        </form>
                    </td>
                        </tr>
            <?php  }
            ?>
       

        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>





























<?php
die();
require "./User.php";

$user = new User();

var_dump($user->getAll());

// $host = "localhost";
// $user = "root"; 
// $pass = "password"; 
// $dbname = "php_backend";

// try {
//     $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",
//      $user,
//       $pass
//     );

//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     die("Connection failed: " . $e->getMessage());
// }



// $name = "new Shahin";
// $email = "Shahin@example.com";
// $pass = "password";
// try {
//     $stmt = $pdo->prepare("INSERT INTO users (name, email,password) VALUES (:name, :email,:password)");
//     $stmt->bindParam(":name", $name);
//     $stmt->bindParam(":email", $email);
//     $stmt->bindParam(":password", $pass);
    
//     if ($stmt->execute()) {
//         echo "New record created successfully!";
//     }
// } catch (PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }




// try {
//     $stmt = $pdo->query("SELECT * FROM users order by id desc");
//     $users = $stmt->fetchAll(PDO::FETCH_ASSOC);


//     if ($users) {
//         foreach ($users as $user) {
//             echo "ID: " . $user["id"] . " - Name: " . $user["name"] . " - Email: " . $user["email"] . "<br>";
//         }
//     } else {
//         echo "No records found.";
//     }
// } catch (PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }



// $id = "a@mail.com"; // Change as needed

// try {
//     $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :id");
//     $stmt->bindParam(":id", $id);
//     $stmt->execute();

//     $user = $stmt->fetch(PDO::FETCH_ASSOC);

//     if ($user) {
//         echo "ID: " . $user["id"] . " - Name: " . $user["name"] . " - Email: " . $user["email"];
//     } else {
//         echo "No record found.";
//     }
// } catch (PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }

// $id = 1;
// try {
//     $stmt = $pdo->prepare("DELETE FROM users WHERE id = :id");
//     $stmt->bindParam(":id", $id, PDO::PARAM_INT);

//     if ($stmt->execute()) {
//         echo "Record deleted successfully!";
//     } else {
//         echo "No record found.";
//     }
// } catch (PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }
exit();




















?>

