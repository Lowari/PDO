<?php
require "../Models/Database.php";
require "../Models/Patients.php";

$Patients = new Patients();

if (isset($_POST['submit'])) {
    $id = $_POST['submit'];

    $deletePatient = $Patients->deletePatient($id);
}

$allPatientsInformations = $Patients->getInformationsPatients();