<?php

require "../Controllers/liste-rendezvous-controller.php"

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Liste Rendez-vous</title>
</head>

<body>

    <div class="container">

        <h1 class="text-center mb-5 mt-3">Liste de rendez vous</h1>

        <table class="table">
            <thead>
                <tr class="text-center table-info">
                    <th scope="col">Date & Heure</th>
                    <th scope="col">Patient</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($showAllAppointments as $key => $value) { ?>
                    <tr class="text-center table-success">
                        <td><?= $value['dateHour'] ?></td>
                        <td><?= $value['idPatients'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <div class="text-center">
            <a href="rendez-vous.php" class="btn btn-success">Créer un RDV</a>
            <a href="../index.php" class="btn btn-primary">Acceuil</a>
        </div>

    </div>

</body>

</html>