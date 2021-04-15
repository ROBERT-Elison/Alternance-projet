<?php
require_once('config.php');

if(isset($_POST)){
    if(isset($_POST['id']) && !empty($_POST['id'])
        && isset($_POST['pseudo']) && !empty($_POST['pseudo'])
        && isset($_POST['machine_user']) && !empty($_POST['machine_user'])){
        $id = strip_tags($_GET['id']);
        $pseudo = strip_tags($_POST['pseudo']);
        $machine_user = strip_tags($_POST['machine_user']);
        

        $sql = "UPDATE `utilisateur` SET `pseudo`=:pseudo, `machine_user`=:machine_user,  WHERE `id`=:id;";

        $query = $db->prepare($sql);

        $query->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $query->bindValue(':machine_user', $machine_user, PDO::PARAM_STR);
        $query->bindValue(':id', $id, PDO::PARAM_INT);

        $query->execute();

        header('Location: index.php');
    }
}

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = strip_tags($_GET['id']);
    $sql = "SELECT * FROM `utilisateur` WHERE `id`=:id;";

    $query = $db->prepare($sql);

    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

    $result = $query->fetch();
}

require_once('close.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des pseudos</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <h1>Modifier un pseudo</h1>
    <form method="post">
        <p>
            <label for="pseudo">pseudo</label>
            <input type="text" name="pseudo" id="pseudo" value="<?= $result['pseudo'] ?>">
        </p>
        <p>
            <label for="machine_user">machine_user</label>
            <input type="text" name="machine_user" id="machine_user" value="<?= $result['machine_user'] ?>">
        </p>
       
        <p>
            <button>Enregistrer</button>
        </p>
        <input type="hidden" name="id" value="<?= $result['id'] ?>">
    </form>


    <p>https://nouvelle-techno.fr/actualites/live-coding-creer-un-crud-en-php</p>
</body>
</html>