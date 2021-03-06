<?php

require "../Controllers/ajout-patient-controller.php"

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Ajout patient</title>
</head>

<body>

    <h1 class="text-center mb-5">Création d'un nouveau patient</h1>

    <div class="container">
        <div class="col">

            <form action="ajout-patient.php" method="POST">

                <div class="row m-3">
                    <div class="col text-center fw-bold">
                        <label for="lastname" class="form-label">Nom :</label>
                    </div>
                    <div class="col-9">
                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="ex : Dupont" required>
                        <?php if (isset($errorMessage['lastname'])) { ?>
                            <p class="text-center text-danger fst-italic"><?= $errorMessage['lastname'] ?></p>
                        <?php } ?>
                    </div>
                </div>

                <div class="row m-3">
                    <div class="col text-center fw-bold">
                        <label for="firstname" class="from-label">Prénom :</label>
                    </div>
                    <div class="col-9">
                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="ex: Lucas" required>
                        <?php if (isset($errorMessage['firstname'])) { ?>
                            <p class="text-center text-danger fst-italic"><?= $errorMessage['firstname'] ?></p>
                        <?php } ?>
                    </div>
                </div>

                <div class="row m-3">
                    <div class="col text-center fw-bold">
                        <label for="birthdate" class="form-label">Date de naissance :</label>
                    </div>
                    <div class="col-9">
                        <input type="date" id="birthdate" name="birthdate" class="form-control" required>
                        <?php if (isset($errorMessage['birthdate'])) { ?>
                            <p class="text-danger fst-italic text-center"><?= $errorMessage['birthdate'] ?></p>
                        <?php } ?>
                    </div>
                </div>

                <div class="row m-3">
                    <div class="col text-center fw-bold">
                        <label for="phone" class="form-label">Numéro de téléphone :</label>
                    </div>
                    <div class="col-9">
                        <input type="number" id="phone" name="phone" class="form-control" placeholder="ex : 0601987545" required>
                        <?php if (isset($errorMessage['phone'])) { ?>
                            <p class="text-center fst-italic text-danger"><?= $errorMessage['phone'] ?></p>
                        <?php } ?>
                    </div>
                </div>

                <div class="row m-3">
                    <div class="col text-center fw-bold">
                        <label for="mail" class="form-label">Mail :</label>
                    </div>
                    <div class="col-9">
                        <input type="email" id="mail" class="form-control" name="mail" placeholder="ex : dupont.lucas@gmail.com" required>
                        <?php if (isset($errorMessage['mail'])) { ?>
                            <p class="text-center fst-italic text-danger"><?= $errorMessage['mail'] ?></p>
                        <?php } ?>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-success">Valider</button>
                    <a href="liste-patients.php" class="btn btn-primary">Voir liste patients</a>
                </div>

            </form>
        </div>
    </div>


</body>

</html>