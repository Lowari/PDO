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

    <h1 class="text-center">Modification du patient</h1>

    <form action="modification.php" method="POST">

    <label for="firstname">Nom</label>
    <input type="text" name="firstname" id="firstname" value="<?= $ChangePatient['firstname'] ?>">
    
    
    </form>

</body>

</html>