<?php

require "../Models/Database.php";
require "../Models/Appointments.php";
require "../Models/Patients.php";

$Patient = new Patients();
$choosePatient = $Patient -> getInformationsPatients();