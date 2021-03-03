<?php

require "../Models/Database.php";
require "../Models/Patients.php";

$id = $_GET['id'];

$ModificationPatient = new Patients();
$ChangePatient = $ModificationPatient -> getProfilePatient($id);