<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD liste etudiant </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Liste des Étudiants</h2>
        <a href="controller.php?action=add" class="btn btn-success mb-3">Ajouter un étudiant</a>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Âge</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($etudiants as $etudiant) : ?>
                    <tr>
                        <th scope="row"><?= $etudiant['id']; ?></th>
                        <td><?= $etudiant['nom']; ?></td>
                        <td><?= $etudiant['prenom']; ?></td>
                        <td><?= $etudiant['age']; ?></td>
                        <td>
                            <a href="controller.php?action=edit&id=<?= $etudiant['id']; ?>" class="btn btn-warning btn-sm">Modifier</a>
                            <a href="controller.php?action=delete&id=<?= $etudiant['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet étudiant ?')">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
