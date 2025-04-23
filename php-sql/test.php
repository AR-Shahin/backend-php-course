db.php
<?php
$host = "localhost";
$user = "root"; // Change if needed
$pass = ""; // Change if needed
$dbname = "test_db";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>


<?php
require "db.php";



$pdo = null; // Close connection
?>
Fetch all data 
<?php
require "db.php";


$pdo = null;
?>

Single data 

<?php
require "db.php";


$pdo = null;
?>
Update data 

<?php
require "db.php";

$id = 1; // Change as needed
$newName = "Jane Doe";
$newEmail = "jane@example.com";

try {
    $stmt = $pdo->prepare("UPDATE users SET name = :name, email = :email WHERE id = :id");
    $stmt->bindParam(":name", $newName);
    $stmt->bindParam(":email", $newEmail);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        echo "Record updated successfully!";
    } else {
        echo "No changes made.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$pdo = null;
?>

Delete data 
<?php
require "db.php";

$id = 1; // Change as needed



$pdo = null;
?>
