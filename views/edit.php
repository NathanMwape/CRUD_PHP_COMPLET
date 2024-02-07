<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Example - Modifier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">Modifier un étudiant</h2>
            </div>
            <div class="card-body">
                <form method="post" action="controller.php?action=edit">

                    <!-- Champ ID caché -->
                    <input type="hidden" name="id" value="<?= $etudiant['id']; ?>">

                    <!-- Champ Nom -->
                    <div class="form-group">
                        <label for="nom">Nom :</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="<?= $etudiant['nom']; ?>" required>
                    </div>

                    <!-- Champ Prénom -->
                    <div class="form-group">
                        <label for="prenom">Prénom :</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" value="<?= $etudiant['prenom']; ?>" required>
                    </div>

                    <!-- Champ Âge -->
                    <div class="form-group">
                        <label for="age">Âge :</label>
                        <input type="number" class="form-control" id="age" name="age" value="<?= $etudiant['age']; ?>" required>
                    </div>

                    <!-- Bouton Modifier -->
                    <button type="submit" class="btn btn-primary">Modifier</button>

                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
