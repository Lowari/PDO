<?php

require "../Controllers/profil-patient-controller.php"

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Profile Patient</title>
</head>

<body>

    <ul>
        <li>Nom: <?= $GetProfilePatient['lastname'] ?></li>
        <li>Prénom : <?= $GetProfilePatient['firstname'] ?> </li>
        <li>Date de naissance : <?= $GetProfilePatient['birthdate'] ?></li>
        <li>Numéro de téléphone : <?= $GetProfilePatient['phone'] ?></li>
        <li>E-mail : <?= $GetProfilePatient['mail'] ?></li>
        <li>RDV : <?php if ($showAppointments) {
                        foreach ($showAppointments as $key => $value) { ?>
                    <ul>
                        <li><?= $value['dateHour'] ?></li>
                    </ul>
                <?php } ?>
            <?php } else {
                        echo "Ce patient n'a pas de RDV";
                    } ?>
        </li>

    </ul>

    <div class="text-center">
        <a href="liste-patients.php" class="btn btn-primary">Retour à la liste des patients</a>
    </div>

</body>

</html>