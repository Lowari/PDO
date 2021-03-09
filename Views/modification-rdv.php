<?php

require "../Controllers/modification-rdv-controller.php";

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Modification de RDV</title>
</head>

<body>

    <div class="container">

        <h1 class="text-center mb-4">Modification de rendez-vous</h1>

        <form action="modification-rdv.php?id=<?= $id ?>" method="POST">


            <div class="row mb-3">
                <div class="col fw-bold text-center">
                    <label for="date" class="form-label">Date de rendez-vous :</label>
                </div>
                <div class="col-9">
                    <input type="date" id="date" class="form-control" name="date" value="<?= $date ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col fw-bold text-center">
                    <label for="hour" class="form-label">Heure de RDV :</label>
                </div>
                <div class="col-9">
                    <input type="time" id="hour" class="form-control" name="hour" value="<?= $hour ?>">
                </div>
            </div>

            <div class="col mb-3">
                <select name="idPatients" id="idPatients" class="form-select">
                    <?php foreach ($showPatients as $key => $value) { ?>
                        <option value="<?= $value['id'] ?>" <?= $value['id'] == $modifyRdv['idPatients'] ? "selected" : "" ?>><?= $value['lastname'] . ' ' . $value['firstname'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="text-center mb-3">
                <button type="submit" class="btn btn-success" name="submit" value="<?= $id ?>">Valider</button>
            </div>

        </form>

        <div class="text-center">
            <a href="liste-rendezvous.php" class="btn btn-primary">Liste de RDV</a>
        </div>

    </div>

</body>

</html>