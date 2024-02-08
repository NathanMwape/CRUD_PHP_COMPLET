<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Ajouter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">Ajouter un étudiant</h2>
            </div>
            <div class="card-body">
                <form method="post" action="controller.php?action=add">

                    <!-- Nom -->
                    <div class="form-group">
                        <label for="nom">Nom :</label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                    </div>

                    <!-- Prénom -->
                    <div class="form-group">
                        <label for="prenom">Prénom :</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" required>
                    </div>

                    <!-- Âge -->
                    <div class="form-group">
                        <label for="age">Âge :</label>
                        <input type="number" class="form-control" id="age" name="age" required>
                    </div>

                    <!-- Bouton Ajouter -->
                    <button type="submit" class="btn btn-primary">Ajouter</button>

                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
