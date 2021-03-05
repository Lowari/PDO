<?php

require "../Models/Database.php";
require "../Models/Appointments.php";
require "../Models/Patients.php";

$Patient = new Patients();
$choosePatient = $Patient->getInformationsPatients();

$errorMessage = [];
$successMessage = [];

if (isset($_POST['submit'])) {
    if (isset($_POST['date'])) {
        $date = $_POST['date'];
        if (empty($date)) {
            $errorMessage['date'] = "Veuillez séléctionner une date";
        } else {
            $successMessage['date'] = htmlspecialchars($date);
        }
    }

    if (isset($_POST['hour'])) {
        $hour = $_POST['hour'];
        if (empty($hour)) {
            $errorMessage['hour'] = "Veuillez renseigner une heure de RDV";
        } else {
            $successMessage['hour'] = htmlspecialchars($hour);
        }
    }

    if (isset($_POST['patient'])) {
        $patient = $_POST['patient'];
        if (empty($patient)) {
            $errorMessage['patient'] = "Veuillez saisir un patient";
        } else {
            $successMessage['patient'] = htmlspecialchars($patient);
        }
    }

    if (empty($errorMessage)) {

        $arrayParameter = [];

        $arrayParameter['dateHour'] = htmlspecialchars($_POST['date'] . " " . $_POST['hour']);
        $arrayParameter['idPatients'] = htmlspecialchars($_POST['patient']);

        $Appointments = new Appointments();
        $Appointments->getNewAppointments($arrayParameter);
    }
}