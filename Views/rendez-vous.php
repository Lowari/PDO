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

            <label for="date">Date du rendez-vous :</label>
            <input type="date" name="date" id="date">

            <select name="patient" id="patient">
                <option>Choisissez un patient</option>
                <?php foreach ($choosePatient as $key => $value) { ?>
                    <option value="<?= $value['id'] ?>"><?= $value['lastname'] . " " . $value['firstname'] ?></option>
                <?php } ?>
            </select>

            <div class="text-center">
                <button class="btn btn-success">Valider Rendez-vous</button>
            </div>

        </form>

    </div>

</body>

</html>