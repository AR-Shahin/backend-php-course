<?php

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

