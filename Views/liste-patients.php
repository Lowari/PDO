<?php
require "../Controllers/liste-patients-controller.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Liste patients</title>
</head>

<body>

    <div class="container-fluid">

        <form action="liste-patients.php" method="GET" class="text-center mt-3">
            <input type="search" placeholder="Recherche patient..">
            <input type="submit" value="Rechercher">
        </form>

        <?php foreach ($allPatientsInformations as $key => $value) { ?>
            <ul>
                <li><?= $value["firstname"] . " " . $value["lastname"] ?></li>
                <li><a href="profil-patient.php?id=<?= $value['id'] ?>">Information du patient</a></li>
                <li><a href="modification-patient.php?id=<?= $value['id'] ?>">Modification du patient</a></li>
                <li>
                    <form action="liste-patients.php" method="POST">
                        <button type="submit" name="submit" class="btn btn-danger" value="<?= $value['id'] ?>">Supprimer patient</button>
                    </form>
                </li>
            </ul>
        <?php } ?>

        <div class="text-center">
            <a href="ajout-patient.php" class="btn btn-success">Ajouter un nouveau patient</a>
            <a href="../index.php" class="btn btn-primary">Acceuil</a>
        </div>

    </div>

</body>

</html>