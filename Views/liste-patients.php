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
    <?php foreach ($allPatientsInformations as $key => $value) { ?>
        <ul>
            <li><?= $value["firstname"] . " " . $value["lastname"] ?></li>
            <li><a href="profil-patient.php?id=<?= $value['id'] ?>">Information du patient</a></li>
            <li><a href="modification-patient.php?id=<?= $value['id'] ?>">Modification du patient</a></li>
        </ul>
    <?php } ?>

    <div class="text-center">
        <a href="ajout-patient.php" class="btn btn-success">Ajouter un nouveau patient</a>
        <a href="../index.php" class="btn btn-primary">Acceuil</a>
    </div>

</body>

</html>