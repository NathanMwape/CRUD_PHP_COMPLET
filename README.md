# CRUD en PHP avec MySQLi et Bootstrap

Ce projet implémente un CRUD (Create, Read, Update, Delete) en PHP pour gérer les informations des étudiants dans une base de données MySQL. Bootstrap est utilisé pour améliorer l'interface utilisateur.

## Configuration

1. **Configuration de la base de données :**
   - Importez le fichier SQL fourni (`database.sql`) dans votre serveur MySQL pour créer la table "etudiant" et ses colonnes.
   - Mettez à jour le fichier `config.php` avec les informations de connexion à votre base de données.

```php
$servername = "localhost";
$username = "votre_nom_utilisateur";
$password = "votre_mot_de_passe";
$dbname = "votre_nom_de_base_de_donnees";

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
```
## Exécution de l'application :
* Assurez-vous que votre serveur web (Apache, Nginx, etc.) est configuré pour exécuter des fichiers PHP.
* Placez les fichiers du projet dans le répertoire du serveur web.
* Accédez à l'application via votre navigateur web (par exemple, http://localhost/chemin_vers_votre_projet).

## Fonctionnalités
1. **Ajouter un étudiant :** Cliquez sur le bouton "Ajouter un utilisateur" pour saisir les informations d'un nouvel étudiant.
2. **Afficher la liste des étudiants :** La page principale affiche un tableau avec les informations de tous les étudiants.
3. **Modifier un étudiant :** Cliquez sur le bouton "Modifier" pour mettre à jour les informations d'un étudiant existant.
4. **Supprimer un étudiant :** Cliquez sur le bouton "Supprimer" pour retirer un étudiant de la base de données.

## Structure du projet
* index.php : Affiche la liste des étudiants.
* create.php : Formulaire d'ajout d'un nouvel étudiant.
* edit.php : Formulaire de modification d'un étudiant existant.
* delete.php : Suppression d'un étudiant.
* config.php : Configuration de la base de données.

## Technologies utilisées
* PHP
* MySQL
* Bootstrap
  
N'hésitez pas à explorer et personnaliser le code en fonction de vos besoins. Bonne utilisation !
