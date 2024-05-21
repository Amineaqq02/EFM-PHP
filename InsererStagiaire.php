<?php 
require_once 'connection.php';

$sql = "SELECT DISTINCT intitule FROM filiere;";
$stmt = $conn->query($sql);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['dateNaissance']) && isset($_POST['photoProfil']) && isset($_POST['filiere'])) {

}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un nouveau stagiaire </title>
</head>
<body>
    <a href="espaceprivee.php">Retour</a>
    <form action="InsererStagiaire.php" method="POST">
        <fieldset>
            <h2>Ajouter un stagiaire</h2>
            <p>veullier remplir tous les champs</p>
            <label for="nom">Nom</label><br>
            <input type="text" name="nom" id="nom"><br>
            <label for="prenom">PRENOM</label><br>
            <input type="text" name="prenom" id="prenom"><br>
            <label for="dateNaissance">DATE DE NAISSANCE</label><br>
            <input type="date" name="dateNaissance" id="dateNaissance"><br>
            <label for="photoProfil">PHOTO PROFIL</label><br>
            <input type="file" name="photoProfil" id="photoProfil"><br>
            <label for="filiere">Filiere</label><br>
            <select name="filiere" id="filiere">
                <option value="developpement digital">developpement digital</option>
                <option value="gestion d'entreprise">gestion d'entreprise</option>
                <option value="infographie">infographie</option>
                <?php foreach($result as $filiere):?>
                    <option value="<?=$filiere['intitule']?>"><?=$filiere['intitule']?></option>
                <?php endforeach; ?>
            </select><br>
            <input type="submit" value="Ajouter">

        </fieldset>
    </form>

</body>
</html>