<?php

require "../Models/Database.php";
require "../Models/Appointments.php";
require "../Models/Patients.php";

$Appointments = new Appointments();

if (isset($_POST['submit'])) {
    $id = $_POST['submit'];
    $deleteAppointments = $Appointments -> deleteAppointments($id);
}

$showAllAppointments = $Appointments->getInformationsAppointments();
$showPatientName = $Appointments->jointureTest();