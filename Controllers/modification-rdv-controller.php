<?php

require "../Models/Database.php";
require "../Models/Appointments.php";
require "../Models/Patients.php";

$id = isset($_GET['id']) ? $_GET['id'] : "";

$errorMessage = [];

$Rdv = new Appointments();

$Patient = new Patients();
$showPatients = $Patient->getInformationsPatients();



if (isset($_POST['submit'])) {
    if (empty($errorMessage)) {

        $arrayParameter = [];

        $arrayParameter['dateHour'] = htmlspecialchars($_POST['date'] . ' ' . $_POST['hour']);
        $arrayParameter['idPatients'] = htmlspecialchars($_POST['idPatients']);
        $arrayParameter['id'] = htmlspecialchars($_POST['submit']);

        $Rdv ->  updateAppointments($arrayParameter);

    }
}
$modifyRdv = $Rdv->getAppointments($id);

$separate = explode(" ", $modifyRdv['dateHour']);
$date = $separate['0'];
$hour = $separate['1'];
