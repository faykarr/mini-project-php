<?php
class UserModel
{
    // Connection
    private $conn;
    // Constructor
    function __construct()
    {
        global $pdo;
        $this->conn = $pdo;
    }
    // Read all records
    public function findAll()
    {
        $query = "SELECT tb_users.id AS 'id_users', tb_users.username, tb_users.password, tb_users.role, tb_person.* FROM tb_users LEFT JOIN tb_person ON tb_users.id_person = tb_person.id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // Read one record
    public function find($id)
    {
        $query = "SELECT tb_users.id AS 'id_users', tb_users.username, tb_users.password, tb_users.role, tb_person.* FROM tb_users LEFT JOIN tb_person ON tb_users.id_person = tb_person.id WHERE tb_users.id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    // Insert new record
    public function insert($username, $password, $role, $id_person)
    {
        if (empty($id_person)) {
            $id_person = null;
        }
        $query = "INSERT INTO tb_users (username, password, role, id_person) VALUES (?, SHA1(MD5(SHA1(?))), ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$username, $password, $role, $id_person]);
    }

    // Update record
    public function update($id, $username, $role, $id_person)
    {
        $query = "UPDATE tb_users SET username = ?, role = ?, id_person = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$username, $role, $id_person, $id]);
    }

    // Delete record
    public function delete($id)
    {
        $query = "DELETE FROM tb_users WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
    }

    // Authenticate user
    public function authenticate($username, $password)
    {
        $query = "SELECT tb_users.*, tb_person.* FROM tb_users LEFT JOIN tb_person ON tb_users.id_person = tb_person.id WHERE username = ? AND password = SHA1(MD5(SHA1(?)))";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$username, $password]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}

?>