<?php
require "../Models/Database.php";
require "../Models/Patients.php";

$Patients = new Patients();

if (isset($_POST['submit'])) {
    $id = $_POST['submit'];

    $deletePatient = $Patients->deletePatient($id);
}

if (isset($_GET['search'])) {

    $q = htmlspecialchars($_GET['search']); 
    $search = $Patients -> search('%'.$q.'%');

}

$allPatientsInformations = $Patients->getInformationsPatients();