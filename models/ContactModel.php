<?php
class ContactModel
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
        $query = "SELECT tb_person.*, tb_agama.nama_agama FROM tb_person INNER JOIN tb_agama ON tb_person.id_agama = tb_agama.id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // Read all records
    public function findAllLimit($awalData, $jumlahDataPerHalaman)
    {
        $query = "SELECT tb_person.*, tb_agama.nama_agama FROM tb_person INNER JOIN tb_agama ON tb_person.id_agama = tb_agama.id LIMIT $awalData, $jumlahDataPerHalaman";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // Get 1 record
    public function find($id)
    {
        $query = "SELECT tb_person.*, tb_agama.nama_agama FROM tb_person INNER JOIN tb_agama ON tb_person.id_agama = tb_agama.id WHERE tb_person.id_agama = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    // Insert new record
    public function insert($data)
    {
        $query = "INSERT INTO tb_person (nama_lengkap, gender, id_agama, tanggal_lahir, tempat_lahir, alamat, no_hp, email, sosmed, foto, asal_kampus, quotes) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute($data);
    }

    // Update record
    public function update($data)
    {
        $query = "UPDATE tb_person SET nama_lengkap = ?, gender = ?, id_agama = ?, tanggal_lahir = ?, tempat_lahir = ?, alamat = ?, no_hp = ?, email = ?, sosmed = ?, foto = ?, asal_kampus = ?, quotes = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute($data);
    }

    // Delete record
    public function delete($id)
    {
        $query = "DELETE FROM tb_person WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
    }

    // Search
    public function search($keyword)
    {
        $query = "SELECT tb_person.*, tb_agama.nama_agama FROM tb_person INNER JOIN tb_agama ON tb_person.id_agama = tb_agama.id WHERE nama_lengkap OR asal_kampus OR gender OR tb_agama.nama_agama LIKE ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(["%$keyword%"]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}

?>