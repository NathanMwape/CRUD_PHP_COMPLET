<?php
include 'config.php';
include 'model.php';

$etudiantModel = new EtudiantModel($conn);

$action = isset($_GET['action']) ? $_GET['action'] : 'list';

switch ($action) {
    case 'list':
        $etudiants = $etudiantModel->getAllEtudiants();
        include 'views/list.php';
        break;
    case 'add':
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $age = $_POST['age'];
            $etudiantModel->addEtudiant($nom, $prenom, $age);
            header("Location: controller.php");
            exit();
        }
        include 'views/add.php';
        break;
    case 'edit':
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST['id'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $age = $_POST['age'];
            $etudiantModel->updateEtudiant($id, $nom, $prenom, $age);
            header("Location: controller.php");
            exit();
        } else {
            $id = $_GET['id'];
            $etudiant = $etudiantModel->getEtudiantById($id);
            include 'views/edit.php';
        }
        break;
    case 'delete':
        $id = $_GET['id'];
        $etudiantModel->deleteEtudiant($id);
        header("Location: controller.php");
        exit();
        break;
    default:
        $etudiants = $etudiantModel->getAllEtudiants();
        include 'views/list.php';
        break;
}
?>
