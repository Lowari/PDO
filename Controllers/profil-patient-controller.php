<?php

require "../Models/Database.php";
require "../Models/Patients.php";

$id = $_GET['id'];

$ProfilePatient = new Patients();
$GetProfilePatient = $ProfilePatient -> getProfilePatient($id);