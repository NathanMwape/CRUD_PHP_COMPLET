<?php
class EtudiantModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllEtudiants() {
        $result = $this->conn->query("SELECT * FROM etudiant");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getEtudiantById($id) {
        $result = $this->conn->query("SELECT * FROM etudiant WHERE id=$id");
        return $result->fetch_assoc();
    }

    public function addEtudiant($nom, $prenom, $age) {
        $sql = "INSERT INTO etudiant (nom, prenom, age) VALUES ('$nom', '$prenom', $age)";
        return $this->conn->query($sql);
    }

    public function updateEtudiant($id, $nom, $prenom, $age) {
        $sql = "UPDATE etudiant SET nom='$nom', prenom='$prenom', age=$age WHERE id=$id";
        return $this->conn->query($sql);
    }

    public function deleteEtudiant($id) {
        $sql = "DELETE FROM etudiant WHERE id=$id";
        return $this->conn->query($sql);
    }
}
?>
