<?php
require "../Models/Database.php";
require "../Models/Patients.php";

$Patients = new Patients();
$allPatientsInformations = $Patients->getInformationsPatients();