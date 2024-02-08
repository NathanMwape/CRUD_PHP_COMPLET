<?php
class Etudiant {
    private $conn;
    private $table = 'etudiant';

    public $id;
    public $nom;
    public $prenom;
    public $age;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllEtudiants() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function getEtudiantById() {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
        return $stmt;
    }

    public function addEtudiant() {
        $query = "INSERT INTO " . $this->table . " (nom, prenom, age) VALUES (:nom, :prenom, :age)";
        $stmt = $this->conn->prepare($query);
        $this->nom = htmlspecialchars(strip_tags($this->nom));
        $this->prenom = htmlspecialchars(strip_tags($this->prenom));
        $this->age = htmlspecialchars(strip_tags($this->age));
        $stmt->bindParam(':nom', $this->nom);
        $stmt->bindParam(':prenom', $this->prenom);
        $stmt->bindParam(':age', $this->age);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function updateEtudiant() {
        $query = "UPDATE " . $this->table . " SET nom=:nom, prenom=:prenom, age=:age WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->nom = htmlspecialchars(strip_tags($this->nom));
        $this->prenom = htmlspecialchars(strip_tags($this->prenom));
        $this->age = htmlspecialchars(strip_tags($this->age));
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':nom', $this->nom);
        $stmt->bindParam(':prenom', $this->prenom);
        $stmt->bindParam(':age', $this->age);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function deleteEtudiant() {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>
