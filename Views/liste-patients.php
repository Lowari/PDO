<?php
require "../Controllers/liste-patients-controller.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste patients</title>
</head>
<body>
    <?php
    foreach ($allPatientsInformations as $key => $value) {
        ?>
        <ul>
            <li><?= $value["firstname"] . " " . $value["lastname"]?></li>
            <li><?= $value["phone"]?></li>
        </ul>
        <?php
    }
    ?>
</body>
</html>