<?php
include 'config.php';
include 'Etudiant.php';

$database = new Database();
$db = $database->conn;

$etudiant = new Etudiant($db);

$action = isset($_GET['action']) ? $_GET['action'] : 'list';

switch ($action) {
    case 'list':
        $stmt = $etudiant->getAllEtudiants();
        include 'views/list.php';
        break;
    case 'add':
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $etudiant->nom = $_POST['nom'];
            $etudiant->prenom = $_POST['prenom'];
            $etudiant->age = $_POST['age'];

            if ($etudiant->addEtudiant()) {
                header("Location: controller.php");
                exit();
            } else {
                echo "Failed to add student.";
            }
        }
        include 'views/add.php';
        break;
    case 'edit':
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $etudiant->id = $_POST['id'];
            $etudiant->nom = $_POST['nom'];
            $etudiant->prenom = $_POST['prenom'];
            $etudiant->age = $_POST['age'];

            if ($etudiant->updateEtudiant()) {
                header("Location: controller.php");
                exit();
            } else {
                echo "Failed to update student.";
            }
        } else {
            $etudiant->id = $_GET['id'];
            $stmt = $etudiant->getEtudiantById();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            include 'views/edit.php';
        }
        break;
    case 'delete':
        $etudiant->id = $_GET['id'];
        if ($etudiant->deleteEtudiant()) {
            header("Location: controller.php");
            exit();
        } else {
            echo "Failed to delete student.";
        }
        break;
    default:
        $stmt = $etudiant->getAllEtudiants();
        include 'views/list.php';
        break;
}
?>
