<?php

require "../Models/Database.php";
require "../Models/Patients.php";
require "../Models/Appointments.php";

$id = $_GET['id'];

$ProfilePatient = new Patients();
$GetProfilePatient = $ProfilePatient -> getProfilePatient($id);

$Appointments = new Appointments();
$showAppointments = $Appointments -> profileAppointments($id);