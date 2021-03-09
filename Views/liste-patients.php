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

    <div class="container">

    <h1 class="text-center mt-2">Liste Patients</h1>

        <form action="liste-patients.php" method="GET" class="text-end mt-4">
            <input type="search" name="search" placeholder="Recherche patient.." value="<?= isset($q) ? $q : "" ?>">
            <input type="submit" value="Rechercher">
        </form>

        <table class="table mt-4">
            <thead>
                <tr class="text-center table-primary">
                    <th scope="col">Prénom & Nom</th>
                    <th scope="col">Info</th>
                    <th scope="col">Modification</th>
                    <th scope="col">Supprimer le patient</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($allPatientsInformations as $key => $value) { ?>
                    <tr class="text-center table-success">
                        <th scope="row"><?= $value["firstname"] . " " . $value["lastname"] ?></th>
                        <td><a href="profil-patient.php?id=<?= $value['id'] ?>" class="btn btn-info">Information</a></td>
                        <td><a href="modification-patient.php?id=<?= $value['id'] ?>" class="btn btn-warning">Modifier</a></td>
                        <td>
                            <form action="liste-patients.php" method="POST">
                                <button type="submit" name="submit" class="btn btn-danger" value="<?= $value['id'] ?>">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <div class="text-center mt-5">
            <a href="ajout-patient.php" class="btn btn-success">Ajouter un nouveau patient</a>
            <a href="../index.php" class="btn btn-primary">Acceuil</a>
        </div>

    </div>

</body>

</html>