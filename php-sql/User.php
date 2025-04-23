<?php
require_once "Database.php";

class User {
    private $pdo;

    public function __construct() {
        $database = new Database();
        $this->pdo = $database->getConnection();
    }

    // 1️⃣ Create a new user
    public function create($name, $email) {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":email", $email);
            return $stmt->execute();
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }

    // 2️⃣ Get all users
    public function getAll() {
        try {
            $stmt = $this->pdo->query("SELECT * FROM users");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }

    // 3️⃣ Get a single user by ID
    public function getById($id) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id = :id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }

    // 4️⃣ Update user data
    public function update($id, $name, $email) {
        try {
            $stmt = $this->pdo->prepare("UPDATE users SET name = :name, email = :email WHERE id = :id");
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }

    // 5️⃣ Delete a user
    public function delete($id) {
        try {
            $stmt = $this->pdo->prepare("DELETE FROM users WHERE id = :id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }

    // 2️⃣ Run any custom SQL query
    // $sql = "SELECT * FROM users WHERE id = :id";
    // $params = [':id' => 1]; // Assuming we are searching for user with ID 1
    // $singleUser = $user->runQuery($sql, $params, true); // true to fetch a single record

    public function runQuery($sql, $params = [], $fetchSingle = false) {
        try {
            $stmt = $this->pdo->prepare($sql);
            
            // Bind parameters if any
            foreach ($params as $key => $value) {
                $stmt->bindValue($key, $value);
            }

            // Execute the query
            $stmt->execute();

            // If it's a SELECT query and fetchSingle is true, return only one record
            if (stripos($sql, 'SELECT') !== false) {
                if ($fetchSingle) {
                    return $stmt->fetch(PDO::FETCH_ASSOC); // Fetch single record
                }
                return $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch all records
            }
            
            // For other queries (INSERT, UPDATE, DELETE), return true if successful
            return true;
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }
}
?>
