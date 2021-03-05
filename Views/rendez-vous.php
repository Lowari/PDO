<?php

require "../Controllers/rendez-vous-controller.php";

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Rendez-vous</title>
</head>

<body>

    <h1 class="text-center mb-5">Rendez-vous</h1>

    <div class="container">

        <form action="rendez-vous.php" method="POST">

            <div class="row mb-3">
                <div class="col fw-bold text-center">
                    <label for="date" class="form-label">Date du rendez-vous :</label>
                </div>
                <div class="col-9">
                    <input type="date" name="date" id="date" class="form-control">
                    <?php if (isset($errorMessage['date'])) { ?>
                        <p class="text-center text-danger fst-italic"><?= $errorMessage['date'] ?></p>
                    <?php } ?>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col text-center fw-bold">
                    <label for="hour" class="form-label">Heure de RDV :</label>
                </div>
                <div class="col-9">
                    <input type="time" name="hour" id="hour" class="form-control">
                    <?php if (isset($errorMessage['hour'])) { ?>
                        <p class="text-center fst-italic text-danger"><?= $errorMessage['hour'] ?></p>
                    <?php } ?>
                </div>
            </div>

            <div class="mb-3">
                <select name="patient" id="patient" class="form-select">
                    <option>Choisissez un patient</option>
                    <?php foreach ($choosePatient as $key => $value) { ?>
                        <option value="<?= $value['id'] ?>"><?= $value['lastname'] . " " . $value['firstname'] ?></option>
                    <?php } ?>
                </select>
                <?php if (isset($errorMessage['patient'])) { ?>
                    <p class="text-center"><?= $errorMessage['patient'] ?></p>
                <?php } ?>
            </div>

            <div class="text-center">
                <button class="btn btn-success" name="submit">Valider</button>
                <a href="liste-rendezvous.php" class="btn btn-secondary">Voir liste des Rendez-vous</a>
                <a href="../index.php" class="btn btn-primary">Acceuil</a>
            </div>

        </form>

    </div>

</body>

</html>