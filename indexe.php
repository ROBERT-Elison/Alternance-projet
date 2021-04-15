<?php

// On inclut la connexion à la base
require_once('config.php');

// On écrit notre requête
$sql = 'SELECT * FROM `utilisateur`';

// On prépare la requête
$query = $db->prepare($sql);

// On exécute la requête
$query->execute();

// On stocke le résultat dans un tableau associatif
$result = $query->fetchAll(PDO::FETCH_ASSOC);

require_once('close.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
</head>
<body>

    <h1>Liste des utilisateurs</h1>
    <table>
        <thead>
            <th>ID</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>Actions</th>
        </thead>
        <tbody>
        <?php
            foreach($result as $utilisateur){
        ?>
                <tr>
                    <td><?= $utilisateur['id'] ?></td>
                    <td><?= $utilisateur['pseudo'] ?></td>
                    <td><?= $utilisateur['machine_user'] ?></td>
                    <td><a href="details.php?id=<?= $utilisateur['id'] ?>">Voir</a>  <a href="edit.php?id=<?= $utilisateur['id'] ?>">Modifier</a>  <a href="delete.php?id=<?= $utilisateur['id'] ?>">Supprimer</a></td>
                </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
    <a href="add.php">Ajouter</a>
</body>
</html>