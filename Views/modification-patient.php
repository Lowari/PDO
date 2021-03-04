<?php

require "../Controllers/modification-patient-controller.php"

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Modification</title>
</head>

<body>

    <div class="container">

        <h1 class="text-center mb-5">Modification du patient</h1>

        <form action="modification-patient.php?id=<?= $id ?>" method="POST">

            <div class="row mb-3">
                <div class="col text-center fw-bold">
                    <label for="firstname" class="form-label text-center">Prénom :</label>
                </div>
                <div class="col-9">
                    <input type="text" name="firstname" id="firstname" value=" <?= $ChangePatient['firstname'] ?>" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col text-center fw-bold mb-3">
                    <label for="lastname" class="form-label">Nom :</label>
                </div>
                <div class="col-9">
                    <input type="text" name="lastname" id="lastname" value="<?= $ChangePatient['lastname'] ?>" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col text-center fw-bold mb-3">
                    <label for="birthdate" class="form-label">Date de naissance :</label>
                </div>
                <div class="col-9">
                    <input type="date" name="birthdate" id="birthdate" value="<?= $ChangePatient['birthdate'] ?>" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col text-center fw-bold mb-3">
                    <label for="phone" class="form-label">Numéro de téléphone :</label>
                </div>
                <div class="col-9">
                    <input type="number" name="phone" id="phone" value="<?= $ChangePatient['phone'] ?>" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col text-center fw-bold mb-4">
                    <label for="mail" class="form-label">E-mail :</label>
                </div>
                <div class="col-9">
                    <input type="email" name="mail" id="mail" value="<?= $ChangePatient['mail'] ?>" class="form-control">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success" name="submit" value="<?= $id ?>">Modifier</button>
                <a href="liste-patients.php" class="btn btn-primary">Liste patients</a>
            </div>

        </form>

    </div>

</body>

</html>