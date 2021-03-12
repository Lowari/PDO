<?php

require "../Controllers/ajout-patient-rendez-vous-controller.php";

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Ajouter Patient & RDV</title>
</head>

<body>

    <div class="container">

        <h1 class="text-center mb-5">Ajouter patient & RDV</h1>

        <form action="ajout-patient-rendez-vous.php" method="POST">

            <div class="row">
                <div class="col text-center fw-bold">
                    <label for="lastname" class="form-label">Nom :</label>
                </div>
                <div class="col-9">
                    <input type="text" id="lastname" name="lastname" class="form-control" value="<?= isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : "" ?>" placeholder="ex : Dupont">
                    <p class="text-center fst-italic text-danger"><?= isset($errorMessage['lastname']) ? $errorMessage['lastname'] : "" ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col text-center fw-bold">
                    <label for="firstname" class="form-label">Prénom :</label>
                </div>
                <div class="col-9">
                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="ex : Jean" value="<?= isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : "" ?>">
                    <p class="text-danger fst-italic text-center"><?= isset($errorMessage['firstname']) ? $errorMessage['firstname'] : "" ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col text-center fw-bold">
                    <label for="birthdate" class="form-label">Date de naissance :</label>
                </div>
                <div class="col-9">
                    <input type="date" id="birthdate" name="birthdate" class="form-control" value="<?= isset($_POST['birthdate']) ? $_POST['birthdate'] : "" ?>">
                    <p class="text-center text-danger fst-italic"><?= isset($errorMessage['birthdate']) ? $errorMessage['birthdate'] : "" ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col text-center fw-bold">
                    <label for="phone" class="form-label">Numéro de téléphone :</label>
                </div>
                <div class="col-9">
                    <input type="number" id="phone" name="phone" class="form-control" placeholder="ex : 0601010101" value="<?= isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : "" ?>">
                    <p class="text-danger text-center fst-italic"><?= isset($errorMessage['phone']) ? $errorMessage['phone'] : "" ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col text-center fw-bold">
                    <label for="mail" class="form-label">Mail :</label>
                </div>
                <div class="col-9">
                    <input type="email" name="mail" id="mail" class="form-control" placeholder="ex : dupont.jean@gmail.com" value="<?= isset($_POST['mail']) ? htmlspecialchars($_POST['mail']) : "" ?>">
                    <p class="text-center fst-italic text-danger"><?= isset($errorMessage['mail']) ? $errorMessage['mail'] : "" ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col text-center fw-bold">
                    <label for="date" class="form-label">Date du rendez-vous :</label>
                </div>
                <div class="col-9">
                    <input type="date" class="form-control" name="date" id="date" value="<?= isset($_POST['date']) ? htmlspecialchars($_POST['date']) : "" ?>">
                    <p class="text-center text-danger fst-italic"><?= isset($errorMessage['date']) ? $errorMessage['date'] : "" ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col text-center fw-bold">
                    <label for="hour" class="form-label">Heure du rendez-vous :</label>
                </div>
                <div class="col-9">
                    <input type="time" class="form-control" name="hour" id="hour" value="<?= isset($_POST['hour']) ? htmlspecialchars($_POST['hour']) : "" ?>">
                    <p class="text-danger text-center fst-italic"><?= isset($errorMessage['hour']) ? $errorMessage['hour'] : "" ?></p>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-success">Suivant</button>
            </div>

        </form>

        <div class="text-center mt-3">
            <a href="../index.php" class="btn btn-primary">Acceuil</a>
            <a href="liste-patients.php" class="btn btn-primary">Liste patients</a>
            <a href="liste-rendezvous.php" class="btn btn-primary">Liste RDV</a>
        </div>

    </div>

</body>

</html>