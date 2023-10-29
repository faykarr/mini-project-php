<?php
class AgamaModel
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
        $query = "SELECT * FROM tb_agama ORDER BY id ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // Get 1 record
    public function find($id)
    {
        $query = "SELECT * FROM tb_agama WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    // Insert new record
    public function insert($data)
    {
        $query = "INSERT INTO tb_agama (nama_agama) VALUES (?)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute($data);
    }

    // Update record
    public function update($data)
    {
        $query = "UPDATE tb_agama SET nama_agama = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute($data);
    }

    // Delete record
    public function delete($id)
    {
        $query = "DELETE FROM tb_agama WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
    }

    // Search
    public function search($keyword)
    {
        $query = "SELECT * FROM tb_agama WHERE nama_agama LIKE ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(["%$keyword%"]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}

?>