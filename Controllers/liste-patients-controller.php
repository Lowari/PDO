<?php
require "../Models/Database.php";
require "../Models/Patients.php";

$Patients = new Patients();

$perPage = 2;
$currentPage = 1;

if (isset($_POST['submit'])) {
    $id = $_POST['submit'];

    $deletePatient = $Patients->deletePatient($id);
}

if (isset($_GET['search'])) {

    $q = htmlspecialchars($_GET['search']); 
    $search = $Patients -> search('%'.$q.'%');

}

$allPatientsInformations = $Patients->getInformationsPatients();

$getCount = $Patients -> getCount();
$nbPatients = $getCount['nbPatients'];
$nbPage = ceil($nbPatients/$perPage);


$patientPerPage = $Patients -> pagination($currentPage, $perPage);

if (isset($_GET['page']) && !empty($_GET['page'])) {
    $currentPage = (int) htmlspecialchars($_GET['page']);
} else {
    $currentPage = 1;
}